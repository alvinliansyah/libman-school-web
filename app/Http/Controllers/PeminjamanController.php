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
        ->select('peminjaman.id_peminjaman', 'peminjaman.tanggal_peminjaman', 'peminjaman.tanggal_pengembalian', 'detail_peminjaman.qty', 'peminjaman.NIS', 'peminjaman.id_admin', 'detail_peminjaman.id_buku')
        ->get();
        $gambar = DB::table('data_admin')->get();
        $buku = DB::table('data_buku')->where('jumlah', '>', 0)->get();
        $siswa = DB::table('data_siswa')->get();
        $kd_pinjam = DB::table('peminjaman')->max('id_peminjaman');
        $baru = $kd_pinjam +1;

        return view('peminjaman', ['peminjaman' => $dataPeminjaman, 'gambar'=> $gambar, 'buku'=>$buku, 'siswa'=>$siswa, "baru"=>$baru]);
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
