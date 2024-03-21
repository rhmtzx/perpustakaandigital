<?php

namespace App\Http\Controllers;

use App\Models\Kategoribuku;
use Illuminate\Http\Request;

class KategoribukuController extends Controller
{
    public function kategoribuku(){

    	$data = kategoribuku::all();
		return view('kategoribuku.kategoribuku',compact('data'));
    }

    public function addkategoribuku(){
        return view('kategoribuku.addkategoribuku');
    }
    public function insertkategoribuku(Request $request){

             $this->validate($request,[
                 'namakategori' => 'required|unique:kategoribukus',
             ],[
                 'namakategori.unique' => 'Data Tidak Boleh Sama !!',
                 'namakategori.required' => 'Harus Diisi !!',
             ]);

            $data = kategoribuku::create([
                'namakategori' => $request->namakategori,
            ]);

            return redirect()->route('kategoribuku')->with('success','Kategori Buku Berhasil Di Tambahkan');
    }

    public function editkategoribuku ($id){ 
        $data = kategoribuku::findOrfail($id);
        return view('kategoribuku.editkategoribuku',compact('data'));
    }

    public function updatekategoribuku (request $request, $id){ 
        $data = kategoribuku::find($id);
            $data->update([
            'namakategori' => $request->namakategori,
        ]);
            
        return redirect()->route('kategoribuku')->with('success','Kategori Buku Berhasil Di Update');

    }

    public function deletekategoribuku($id){
        $data = kategoribuku::find($id);
        $data->delete();

        return redirect()->route('kategoribuku')->with('success','Kategori Buku Berhasil Di Hapus');
    }
}
