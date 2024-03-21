<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasanbuku;
use App\Models\buku;

class UlasanbukuController extends Controller
{
    public function ulasanbuku(){
    	$data = ulasanbuku::all();
        $datasiswa = ulasanbuku::where('userid', auth()->id())->get();

        if(Auth()->user()->role == 'Admin'){
            return view('ulasanbuku.ulasanbuku',compact('data'));
        }else{
           return view('usersiswa.ulasanbuku.ulasanbuku',compact('datasiswa'));
        }
    }

    public function addulasanbuku(){
        $buku = buku::all();

        return view('ulasanbuku.addulasanbuku',compact('buku'));
    }
    
    public function insertulasanbuku(Request $request){

             $this->validate($request,[
                 'rating' => 'required',
                 'ulasan' => 'required',
                 'bukuid' => 'required',
             ],[
                 'rating.required' => 'Pilih Rating Buku !!',
                 'ulasan.required' => 'Ulasan Harus Diisi !!',
                 'bukuid.required' => 'Pilih Buku !!',
            
             ]);

            $data = ulasanbuku::create([
                'rating' => $request->rating,
                'ulasan' => $request->ulasan,
                'bukuid' => $request->bukuid,
                'userid' => auth()->user()->id,
            ]);

            return redirect()->route('ulasanbuku')->with('success','Ulasan Buku Berhasil Di Tambahkan');
    }

    public function editulasanbuku ($id){ 
        $data = ulasanbuku::findOrfail($id);
        $buku = buku::all();
        return view('ulasanbuku.editulasanbuku',compact('data','buku'));
    }

    public function updateulasanbuku (request $request, $id){ 
        $data = ulasanbuku::find($id);
            $data->update([
            'ulasan' => $request->ulasan,
            'rating' => $request->rating,
            'bukuid' => $request->bukuid,
        ]);
            
        return redirect()->route('ulasanbuku')->with('success','Ulasan Buku Berhasil Di Update');

    }

    public function deleteulasanbuku($id){
        $data = ulasanbuku::find($id);
        $data->delete();

        return redirect()->route('ulasanbuku')->with('success','Ulasan Buku Berhasil Di Hapus');
    }
}