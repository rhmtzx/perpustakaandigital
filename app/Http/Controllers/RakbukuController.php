<?php

namespace App\Http\Controllers;

use App\Models\Rakbuku;
use Illuminate\Http\Request;

class RakbukuController extends Controller
{
    public function rakbuku(){

    	$data = rakbuku::all();
		return view('rakbuku.rakbuku',compact('data'));
    }

    public function addrakbuku(){
        return view('rakbuku.addrakbuku');
    }
    public function insertrakbuku(Request $request){

             $this->validate($request,[
                 'namarak' => 'required|unique:rakbukus',
             ],[
                 'namarak.unique' => 'Data Tidak Boleh Sama !!',
                 'namarak.required' => 'Harus Diisi !!',
             ]);

            $data = rakbuku::create([
                'namarak' => $request->namarak,
            ]);

            return redirect()->route('rakbuku')->with('success','Rak Buku Berhasil Di Tambahkan');
    }

    public function editrakbuku ($id){ 
        $data = rakbuku::findOrfail($id);
        return view('rakbuku.editrakbuku',compact('data'));
    }

    public function updaterakbuku (request $request, $id){ 
        $data = rakbuku::find($id);
            $data->update([
            'namarak' => $request->namarak,
        ]);
            
        return redirect()->route('rakbuku')->with('success','Rak Buku Berhasil Di Update');

    }

    public function deleterakbuku($id){
        $data = rakbuku::find($id);
        $data->delete();

        return redirect()->route('rakbuku')->with('success','Rak Buku Berhasil Di Hapus');
    }
}
