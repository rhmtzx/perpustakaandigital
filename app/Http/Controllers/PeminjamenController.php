<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjamen;
use App\Models\buku;

class PeminjamenController extends Controller
{
    public function peminjamen(){
        $data = peminjamen::all();  
    	$datasiswa = peminjamen::where('userid', auth()->id())->get();

        if(Auth()->user()->role == 'Admin'){
    	   return view('peminjamen.peminjamen',compact('data'));
        }else{
           return view('usersiswa.peminjamen.peminjamen',compact('datasiswa'));
        }
    }

    public function addpeminjamen(){
    	$buku = buku::all();
    	return view('peminjamen.addpeminjamen',compact('buku'));
    }

    public function insertpeminjamen(Request $request){
        $this->validate($request, [
            'bukuid' => 'required',
            'tanggalpengembalian' => 'required',
        ], [
            'bukuid.required' => 'Harus Diisi !!',
            'tanggalpengembalian.required' => 'Harus Diisi !!',
        ]);

        // Mendapatkan data buku yang akan dipinjam
        $buku = Buku::findOrFail($request->bukuid);

        // Memeriksa apakah stok buku mencapai 0
        if ($buku->stok <= 0) {
            return redirect()->back()->with('error', 'Maaf, Buku Tidak Tersedia Untuk Dipinjam Karena Stok Sudah Habis !!');
        }

        // Mengurangi stok buku
        $buku->stok -= 1;
        $buku->save();

        // Membuat record peminjaman
        $data = peminjamen::create([
            'userid' => auth()->user()->id,
            'bukuid' => $request->bukuid,
            'tanggalpengembalian' => $request->tanggalpengembalian,
            'statuspeminjaman' => 'Buku Dipinjam',
        ]);

        return redirect()->route('peminjamen')->with('success', 'Buku Berhasil Dipinjam');
    }

    public function editpeminjamen($id){
        $buku = Buku::all();
        $data = peminjamen::findOrfail($id);
        return view('peminjamen.editpeminjamen',compact('data','buku'));
    }

    public function updatepeminjamen(request $request,$id){
        $data = peminjamen::find($id);
            $data->update([
                'bukuid' => $request->bukuid,
                'tanggalpengembalian' => $request->tanggalpengembalian,
                'statuspeminjaman' => $request->statuspeminjaman,
            ]);

            return redirect()->route('peminjamen')->with('success','Peminjaman Berhasil Di Update');
    }

    public function kembalikanbuku(Request $request, $id){
        $data = peminjamen::find($id);
        $tanggalPengembalian = $data->tanggalpengembalian;
        $tanggalSekarang = date('Y-m-d');
        $denda = 0;

        // Menghitung denda jika pengembalian terlambat
        if ($tanggalSekarang > $tanggalPengembalian) {
            $selisihHari = strtotime($tanggalSekarang) - strtotime($tanggalPengembalian);
            $selisihHari = floor($selisihHari / (60 * 60 * 24)); // Konversi detik ke hari

            // Denda per hari
            $denda = $selisihHari * 2000;

            // Update status peminjaman 
            $data->update([
                'statuspeminjaman' => 'Buku Terlambat Dikembalikan',
                'denda' => $denda,
            ]);
        } else {
            $data->update([
                'statuspeminjaman' => 'Buku Dikembalikan',
            ]);
        }

        // Menambah Stok Buku Setelah Dikembalikan
        $buku = Buku::findOrFail($data->bukuid);
        $buku->stok += 1;
        $buku->save();
                
        return redirect()->route('peminjamen')->with('success', 'Buku Sudah Dikembalikan');
    }

    public function cetakpeminjamen(){
        $data = peminjamen::all();

        return view('peminjamen.cetakpeminjamen', compact('data'));
    }

    
}
