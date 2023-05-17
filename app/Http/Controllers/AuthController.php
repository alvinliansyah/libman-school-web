<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_admin;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function getdata()
    {
        return view('auth');
    }
    
    public function login(Request $request)
    {
        if(Auth::guard('web')->attempt(['nama_admin'=> $request->nama_admin, 'password'=> $request->password])){
            // $auth = Auth::user();
            // $value = $request->session()->get('nama_admin');
            // $succes['nama_admin']=$auth->nama_admin;
            // $request->session()->put('id_admin',$auth->name);
            return redirect('dashboard');
        } else {
            return back();
        }
    }
}
