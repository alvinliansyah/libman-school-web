<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function getdata()
    {
        $gambar = DB::table('data_admin')->get();

        return view('profile', ['gambar'=> $gambar]);
    }

    public function update(Request $request)
    {
        DB::table('data_admin')->where('id_admin',$request->text_kodeadmin)->update([
            'nama_admin' => $request->text_namalengkapadmin,
            'password' => bcrypt($request->password),
            'gambar' => $request->file_fotoprofile->getClientOriginalName(),
        ]);
        $destinationPath = public_path().'/assets/img/admin' ;
        $request->file_fotoprofile->move($destinationPath,$request->file_fotoprofile->getClientOriginalName());

        alert()->success('Sukses','Berhasil Mengubah data Admin');
        return redirect('profile');
    }

    public function delete(Request $request)
    {  
	DB::table('data_admin')->where('id_admin',$request->text_kodeadminh)->delete();

    \Auth::logout();
 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
        
    Alert::info('Berhasil', 'Anda Berhasil menghapus Admin, dan Logout');
    
	return redirect('/');
    }
}
