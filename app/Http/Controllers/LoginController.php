<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    	return view('auth.login');
    }
    public function proseslogin(Request $request){
    	$this->validate($request,[
    		'email' => 'required',
    		'password' => 'required'
    	],[
    		'email.required' => 'email Harus Diisi !!',	
    		'password.required' => 'password Harus Diisi !!',	
    	]);

    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin' ])) {
            return redirect('/')->with('success','Berhasil Login Sebagai Admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Petugas'])){
            return redirect('/welcomep')->with('success','Berhasil Login Sebagai Petugas');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Siswa'])) {
            return redirect('/welcomes')->with('success','Berhasil Login Sebagai Siswa');
        }
        
        
    
    	return redirect('login')->with('error','Email atau Password Yang Anda Masukkan Salah !!');
    }

    //REGISTER ADMIN
    public function register(){
    	return view('auth.register');
    }
    public function prosesregister(Request $request)
	{
    $this->validate($request, [
        'namalengkap' => 'required',
        'username' => 'required',
        'alamat' => 'required',
        'email' => 'required|email', 
        'password' => 'required'
    ], [
        'namalengkap.required' => 'Nama Lengkap Harus Diisi !!',
        'username.required' => 'username Harus Diisi !!',
        'alamat.required' => 'alamat Harus Diisi !!',
        'email.required' => 'email Harus Diisi !!',
        'email.email' => 'Format email Tidak Valid !!',
        'password.required' => 'password Harus Diisi !!',
    ]);

    user::create([
        'namalengkap' => $request->namalengkap,
        'username' => $request->username,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'role' => 'Admin',
        'password' => bcrypt($request->password),
        'remember_token' => Str::random(60),
    ]);

    return redirect('dataadmin')->with('success', 'Berhasil Register Admin');
	}

    //REGISTER SISWA
    public function registersiswa(){
        return view('auth.registersiswa');
    }
    public function prosesregistersiswa(Request $request)
    {
    $this->validate($request, [
        'namalengkap' => 'required',
        'username' => 'required',
        'alamat' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ], [
        'namalengkap.required' => 'Nama Lengkap Harus Diisi !!',
        'username.required' => 'username Harus Diisi !!',
        'alamat.required' => 'alamat Harus Diisi !!',
        'email.required' => 'email Harus Diisi !!',
        'email.email' => 'Format email Tidak Valid !!',
        'password.required' => 'password Harus Diisi !!',
    ]);

    user::create([
        'namalengkap' => $request->namalengkap,
        'username' => $request->username,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'role' => 'Siswa',
        'password' => bcrypt($request->password),
        'remember_token' => Str::random(60),
    ]);

    return redirect('login')->with('success', 'Berhasil Register Sebagai Siswa');
    }

    //REGISTER PETUGAS
    public function registerpetugas(){
        return view('auth.registerpetugas');
    }
    public function prosesregisterpetugas(Request $request)
    {
    $this->validate($request, [
        'namalengkap' => 'required',
        'username' => 'required',
        'alamat' => 'required',
        'email' => 'required|email', 
        'password' => 'required'
    ], [
        'namalengkap.required' => 'Nama Lengkap Harus Diisi !!',
        'username.required' => 'username Harus Diisi !!',
        'alamat.required' => 'alamat Harus Diisi !!',
        'email.required' => 'email Harus Diisi !!',
        'email.email' => 'Format email Tidak Valid !!',
        'password.required' => 'password Harus Diisi !!',
    ]);

    user::create([
        'namalengkap' => $request->namalengkap,
        'username' => $request->username,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'role' => 'Petugas',
        'password' => bcrypt($request->password),
        'remember_token' => Str::random(60),
    ]);

    return redirect('login')->with('success', 'Berhasil Register Sebagai Petugas');
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('success','Berhasil Logout');
    }

    public function dataadmin(){
        $usersekarang = auth()->user();
    	$data = user::where('role','Admin')
                ->whereNotIn('id', [$usersekarang->id])->get();
		return view('dataadmin.dataadmin',compact('data'));
    }

    public function deleteadmin($id){
        $data = user::find($id);
        $data->delete();

        return redirect()->route('dataadmin')->with('success','User Admin Berhasil Di Hapus');
    }

}
