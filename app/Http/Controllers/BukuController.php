<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function getdata()
    {
        $buku = DB::table('data_buku')->select('judul_buku')->get();
        $total = DB::table('data_buku')->select('id_buku')->groupBy('id_buku')->count();

        return view('buku', ['buku' => $buku, 'total' => $total]);
    }
}
