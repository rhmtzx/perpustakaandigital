<?php

namespace App\Http\Controllers;

use App\Models\Kategoribukurelasi;
use App\Models\buku;
use App\Models\kategoribuku;
use App\Models\rakbuku;
use Illuminate\Http\Request;

class KategoribukuRelasiController extends Controller
{
    public function kategoribukurelasi(){
    	$data = kategoribukurelasi::all();

		return view('kategoribukurelasi.kategoribukurelasi',compact('data'));
    }

    public function addkategoribukurelasi(){
    	$buku = buku::all();
    	$kategori = kategoribuku::all();
        $rak = rakbuku::all();

        return view('kategoribukurelasi.addkategoribukurelasi',compact('buku','kategori','rak'));
    }
    public function insertkategoribukurelasi(Request $request){

             $this->validate($request,[
                 'bukuid' => 'required',
                 'kategoriid' => 'required',
                 'rakid' => 'required',
             ],[
                 'bukuid.required' => 'Harus Diisi !!',
                 'kategoriid.required' => 'Harus Diisi !!',
                 'rakid.required' => 'Harus Diisi !!',
             ]);

            $data = kategoribukurelasi::create([
	            'bukuid' => $request->bukuid,
                'kategoriid' => $request->kategoriid,
                'rakid' => $request->rakid,
            ]);

            return redirect()->route('kategoribukurelasi')->with('success','Kategori Buku Relasi Berhasil Di Tambahkan');
    }


    //Halaman Edit Data Kendaraan
    public function editkategoribukurelasi ($id){ 
    	$buku = buku::all();
        $kategori = kategoribuku::all();
    	$rak = rakbuku::all();
        $data = kategoribukurelasi::findOrfail($id);
        return view('kategoribukurelasi.editkategoribukurelasi',compact('data','buku','kategori','rak'));
    }
    //Function Save Data Edit
    public function updatekategoribukurelasi (request $request, $id){ 
        $data = kategoribukurelasi::find($id);
            $data->update([
            'bukuid' => $request->bukuid,
            'kategoriid' => $request->kategoriid,
            'rakid' => $request->rakid,
        ]);
            
        return redirect()->route('kategoribukurelasi')->with('success','Kategori Buku Relasi Berhasil Di Update');

    }

    public function deletekategoribukurelasi($kategoriid){
        $data = kategoribukurelasi::find($kategoriid);
        $data->delete();

        return redirect()->route('kategoribukurelasi')->with('success','Kategori Buku Relasi Berhasil Di Hapus');
    }
}