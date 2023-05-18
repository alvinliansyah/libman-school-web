<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function getdata()
    {
        $dataPeminjaman = DB::table('data_siswa')
        ->join('peminjaman', 'data_siswa.NIS', '=', 'peminjaman.NIS')
        ->join('data_admin', 'data_admin.id_admin', '=', 'peminjaman.id_admin')
        ->join('detail_peminjaman', 'detail_peminjaman.id_peminjaman', '=', 'peminjaman.id_peminjaman')
        ->join('data_buku', 'data_buku.id_buku', '=', 'detail_peminjaman.id_buku')
        ->select('data_siswa.nama_siswa', 'data_siswa.NIS', 'data_buku.judul_buku', 'data_buku.id_buku', 'peminjaman.tanggal_peminjaman', 'peminjaman.tanggal_pengembalian', 'data_admin.nama_admin')
        ->get();

        return view('riwayat', ['riwayat' => $dataPeminjaman]);
    }
}
