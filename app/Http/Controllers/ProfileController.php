<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        $data = user::all();
        return view ('profile.profile', compact('data'));
    }

    public function editprofile(){
        $data = user::all();

        return view('profile.editprofile', compact('data'));
    }

    public function updateprofile(request $request){
        $data = user::find(Auth::user()->id);
            $data->update([
                'namalengkap' => $request->namalengkap,
                'username' => $request->username,
                'alamat' => $request->alamat,
            ]);
        
            return redirect()->route('profile')->with('success', 'Profil Berhasil Di Update !!');
    }
}
