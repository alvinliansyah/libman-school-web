<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class PelayananPelangganController extends Controller
{
    public function getdata()
    {
        $gambar = DB::table('data_admin')->get();

        return view('pelayananPelanggan', ['gambar'=> $gambar]);
    }
}
