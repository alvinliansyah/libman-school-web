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
        $dataPeminjaman = DB::table('data_siswa')
        ->join('peminjaman', 'peminjaman.NIS', '=', 'data_siswa.NIS')
        ->join('detail_peminjaman', 'detail_peminjaman.id_peminjaman', '=', 'peminjaman.id_peminjaman')
        ->join('data_buku', 'data_buku.id_buku', '=', 'detail_peminjaman.id_buku')
        ->whereNotIn('peminjaman.id_peminjaman', function ($query) {
            $query->select('pengembalian.id_peminjaman')
                ->from('pengembalian');
        })
        ->where('peminjaman.tanggal_pengembalian', '<', DB::raw('NOW()'))
        ->select('data_siswa.NIS', 'data_siswa.nama_siswa', 'data_siswa.fcmToken', 'data_buku.judul_buku', 'peminjaman.tanggal_pengembalian')
        ->get();
        $gambar = DB::table('data_admin')->get();

        $persentaseTersedia = ($bukuada/$total * 100);
        $persentasePinjam = ($bukupinjam/$total * 100);
        
        return view('dashboard', ['data_buku' => $bukuada, 'peminjaman' => $bukupinjam, 'siswa' => $siswa, 'persentaseTersedia' => $persentaseTersedia, 'persentasePinjam' => $persentasePinjam, 'datapeminjaman' => $dataPeminjaman,'gambar'=> $gambar]);
    }
}
