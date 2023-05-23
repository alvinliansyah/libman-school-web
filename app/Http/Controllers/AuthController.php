<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->intended('/dashboard');
        } else {
            // dd($webCredentials);
            return back();
        }
    }

    public function Update(Request $request)
    {
        DB::table('data_admin')->where('nama_admin',$request->nama)->update([
            'password' => bcrypt($request->password),
        ]);
        return back();
    }

    public function logout(Request $request)    
    {
        \Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }
}
