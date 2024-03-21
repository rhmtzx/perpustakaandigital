<?php

namespace App\Http\Controllers;

use App\Models\koleksipribadi;
use App\Models\buku;
use App\Models\user;

use Illuminate\Http\Request;

class KoleksipribadiController extends Controller
{
    public function koleksipribadi(){
    	$data = koleksipribadi::all();
    	$buku = buku::all();
    	$user = user::all();
        $datasiswa = koleksipribadi::where('userid', auth()->id())->get();

        if(Auth()->user()->role == 'Admin'){
            return view('koleksipribadi.koleksipribadi',compact('data','buku','user'));
        }else{
           return view('usersiswa.koleksipribadi.koleksipribadi',compact('datasiswa'));
        }
    }

    public function addkoleksipribadi(){
    	$buku = buku::all();
    	$user = user::all();
        return view('koleksipribadi.addkoleksipribadi',compact('buku','user'));
    }
    public function insertkoleksipribadi(Request $request){

             $this->validate($request,[
                 'bukuid' => 'required',
             ],[
                 'bukuid.required' => 'Harus Diisi !!',
             ]);

            $data = koleksipribadi::create([
	            'bukuid' => $request->bukuid,
                'userid' => auth()->user()->id,
            ]);

            return redirect()->route('koleksipribadi')->with('success','Koleksi Pribadi Berhasil Di Tambahkan');
    }

    public function editkoleksipribadi ($id){ 
    	$buku = buku::all();
    	$user = user::all();
        $data = koleksipribadi::findOrfail($id);
        return view('koleksipribadi.editkoleksipribadi',compact('data','buku','user'));
    }

    public function updatekoleksipribadi (request $request, $id){ 
        $data = koleksipribadi::find($id);
            $data->update([
            'bukuid' => $request->bukuid,
        ]);
            
        return redirect()->route('koleksipribadi')->with('success','Koleksi Pribadi Berhasil Di Update');

    }

    public function deletekoleksipribadi($id){
        $data = koleksipribadi::find($id);
        $data->delete();

        return redirect()->route('koleksipribadi')->with('success','Koleksi Pribadi Berhasil Di Hapus');
    }
}
