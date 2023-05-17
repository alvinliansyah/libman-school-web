<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getdata()
    {
        $bukuada = DB::table('data_buku')->sum('jumlah');
        $bukupinjam = DB::table('detail_peminjaman')->sum('qty');
        
        return view('dashboard', ['data_buku' => $bukuada], ['peminjaman' => $bukupinjam]);
    }
}