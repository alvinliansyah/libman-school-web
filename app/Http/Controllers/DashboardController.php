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
        $siswa = DB::table('data_siswa')->select('NIS')->count();
        $total = $bukuada+$bukupinjam;

        $persentaseTersedia = ($bukuada/$total * 100);
        $persentasePinjam = ($bukupinjam/$total * 100);
        
        return view('dashboard', ['data_buku' => $bukuada, 'peminjaman' => $bukupinjam, 'siswa' => $siswa, 'persentaseTersedia' => $persentaseTersedia, 'persentasePinjam' => $persentasePinjam]);
    }
}
