<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function getdata()
    {
        return view('auth');
    }
    
    public function login(Request $request)
    {
        $webCredentials = $request->only('nama_admin', 'password');

        if(Auth::guard('web')->attempt($webCredentials)){
            // $auth = Auth::user();
            // $value = $request->session()->get('nama_admin');
            // $succes['nama_admin']=$auth->nama_admin;
            // $request->session()->put('id_admin',$auth->name);
            $request->session()->put('nama_admin', Auth::user()->nama_admin);
            $request->session()->put('id_admin', Auth::user()->id_admin);
            $request->session()->put('password', Auth::user()->password);

            Alert::info('Login Berhasil', 'Anda Berhasil Masuk Aplikasi');
            return redirect()->intended('/dashboard');
        } else {
            Alert::error('Login Gagal', 'Periksa kembali Nama Admin dan Password anda');
            return redirect()->back();
        }
    }

    public function Update(Request $request)
    {
        DB::table('data_admin')->where('nama_admin',$request->nama)->update([
            'password' => bcrypt($request->password),
        ]);
        alert()->success('Sukses','Berhasil Mengubah password Admin');
        return back();
    }

    public function logout(Request $request)    
    {
        \Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
        
        Alert::info('Log Out', 'Anda Berhasil Keluar Aplikasi');
        return redirect('/');
    }
}
