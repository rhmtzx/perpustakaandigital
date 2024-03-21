<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function buku(){

    	$data = buku::all();
		return view('buku.buku',compact('data'));
    }

    public function addbuku(){
        return view('buku.addbuku');
    }
    public function insertbuku(Request $request){

        $this->validate($request,[
            'judul' => 'required|unique:bukus',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|digits:4',
            'foto' => 'required|mimes:jpg,png,jpeg',
            'stok' => 'required',
        ],[
            'judul.unique' => 'Data Tidak Boleh Sama !!',
            'judul.required' => 'Harus Diisi !!',
            'penulis.unique' => 'Data Tidak Boleh Sama !!',
            'penulis.required' => 'Harus Diisi !!',
            'penerbit.unique' => 'Data Tidak Boleh Sama !!',
            'penerbit.required' => 'Harus Diisi !!',
            'tahunterbit.unique' => 'Data Tidak Boleh Sama !!',
            'tahunterbit.required' => 'Harus Diisi !!',
            'tahunterbit.digits' => 'Maksimal 4 Nomor !!',
            'foto.required' => 'Harus Diisi !!',
            'foto.mimes' => 'Foto harus bertipe JPG, PNG, atau JPEG !!',
            'stok.required' => 'Harus Diisi !!',
        ]);

            $dimensions = getimagesize($request->file('foto')->getPathName());
            $width = $dimensions[0];
            $height = $dimensions[1];
            $requiredWidth = 736;
            $requiredHeight = 736;

            if ($width != $requiredWidth || $height != $requiredHeight) {
                return redirect()->back()->withInput()->withErrors(['foto' => 'Dimensi Gambar Harus ' . $requiredWidth . 'x' . $requiredHeight . ' Piksel']);
            }


            $data = buku::create([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahunterbit'=> $request->tahunterbit,
                'foto'=> $request->foto,
                'stok'=> $request->stok,
            ]);
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('allfoto/', $filename);
                $data->foto = $filename;
                $data->save();
            }

            return redirect()->route('buku')->with('success','Buku Berhasil Di Tambahkan');
    }


    //Halaman Edit Data Kendaraan
    public function editbuku ($id){ 
        $data = buku::findOrfail($id);
        return view('buku.editbuku',compact('data'));
    }
    //Function Save Data Edit
    public function updatebuku (request $request, $id){ 
        $data = buku::find($id);
            $data->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunterbit'=> $request->tahunterbit,
            'stok'=> $request->stok,
        ]);
        if ($request->hasFile('foto')) {
                unlink(public_path('allfoto/' . $data->foto));
                $file = $request->file('foto');
                $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('allfoto/', $filename);
                $data->foto = $filename;
                $data->save();
            }

        return redirect()->route('buku')->with('success','Buku Berhasil Di Update');
    }


    //Menghapus Data Kendaraan
    public function deletebuku($id){
        $data = buku::find($id);
        $data->delete();

        return redirect()->route('buku')->with('success','Buku Berhasil Di Hapus');
	}	

    public function caribuku(Request $request) {
        $searchQuery = $request->input('query');

        $bukus = Buku::where('judul', 'LIKE', "%$searchQuery%")->get();

        return view('halamancaribuku', ['bukus' => $bukus]);
    }

    public function halamancaribuku(){
        $allbuku = buku::all();
        return view('halamancaribuku',compact('allbuku'));
    }    

    public function cetakbuku(){
        $data = buku::all();

        return view('buku.cetakbuku', compact('data'));
    }

}
