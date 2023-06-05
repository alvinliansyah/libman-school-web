<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PeminjamanController extends Controller
{
    public function getdata()
    {
        $dataPeminjaman = DB::table('peminjaman')
        ->join('detail_peminjaman', 'peminjaman.id_peminjaman', '=', 'detail_peminjaman.id_peminjaman')
        ->join('data_buku', 'data_buku.id_buku', '=', 'detail_peminjaman.id_buku')
        ->join('data_siswa', 'data_siswa.NIS', '=', 'peminjaman.NIS')
        ->join('data_admin', 'data_admin.id_admin', '=', 'peminjaman.id_admin')
        ->select('peminjaman.id_peminjaman', 'peminjaman.NIS', 'detail_peminjaman.id_buku', 'detail_peminjaman.qty', 'peminjaman.tanggal_peminjaman', 'peminjaman.tanggal_pengembalian', 'peminjaman.id_admin', 'data_siswa.nama_siswa', 'data_buku.judul_buku', 'data_admin.nama_admin')
        ->get();
        $gambar = DB::table('data_admin')->get();
        $buku = DB::table('data_buku')->where('jumlah', '>', 0)->get();
        $siswa = DB::table('data_siswa')->get();
        $kd_pinjam = DB::table('peminjaman')
        ->selectRaw('MAX(id_peminjaman + 1) AS baru')
        ->whereRaw('CAST(id_peminjaman AS UNSIGNED) > 9')
        ->first();        

        return view('peminjaman', ['peminjaman' => $dataPeminjaman, 'gambar'=> $gambar, 'buku'=>$buku, 'siswa'=>$siswa, 'baru'=>$kd_pinjam]);
    }

    public function create(Request $request)
    {
        DB::table('peminjaman')->insert([
            'id_peminjaman' => $request->text_kodepeminjaman,
            'tanggal_peminjaman' => $request->dt_peminjaman,
            'tanggal_pengembalian' => $request->dt_pengembalian,
            'NIS' => $request->text_nis,
            'id_admin' => $request->id_admin,
        ]);

        DB::table('detail_peminjaman')->insert([
            'id_detail_peminjaman' => $request->text_kodepeminjaman,
            'qty' => $request->text_jumlah,
            'id_peminjaman' => $request->text_kodepeminjaman,
            'id_buku' => $request->text_kodebuku,
        ]);

        alert()->success('Sukses','Berhasil Melakukan Peminjaman');
        return redirect('peminjaman');
    }
}
