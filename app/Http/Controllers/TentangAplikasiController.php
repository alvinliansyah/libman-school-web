<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangAplikasiController extends Controller
{
    public function getdata()
    {
        $gambar = DB::table('data_admin')->get();

        return view('tentangAplikasi', ['gambar'=> $gambar]);
    }
}
