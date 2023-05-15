<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_admin;

class AdminController extends Controller
{
    public function getdata()
    {
        $admin = DB::table('data_admin')->get();

        return view('admin', ['admin' => $admin]);
    }

    public function create(Request $request)
    {
        DB::table('data_admin')->insert([
                'id_admin' => $request->text_id,
                'nama_admin' => $request->text_namalengkapadmin,
                'password' => bcrypt($request->password),
                // 'gambar' => $request->tnama_tambahkategori,
            ]);
            return redirect('admin');
    }
}
