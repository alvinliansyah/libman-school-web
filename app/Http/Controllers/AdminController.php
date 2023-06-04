<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_admin;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function getdata()
    {
        $admin = DB::table('data_admin')->get();

        $gambar = DB::table('data_admin')->get();

        return view('admin', ['admin' => $admin, 'gambar'=> $gambar]);
    }

    public function create(Request $request)
    {
        DB::table('data_admin')->insert([
                // 'id_admin' => $request->text_id,
                'nama_admin' => $request->text_namalengkapadmin,
                'password' => bcrypt($request->password),
                // 'gambar' => $request->tnama_tambahkategori,
            ]);
            alert()->success('Sukses','Berhasil Menambahkan Admin');
            return redirect('admin');
    }
}
