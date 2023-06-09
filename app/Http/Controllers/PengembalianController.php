<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PengembalianController extends Controller
{
    public function getdata()
    {
        $dataPeminjaman = DB::table('peminjaman')
        ->join('detail_peminjaman', 'peminjaman.id_peminjaman', '=', 'detail_peminjaman.id_peminjaman')
        ->join('data_buku', 'data_buku.id_buku', '=', 'detail_peminjaman.id_buku')
        ->join('data_siswa', 'data_siswa.NIS', '=', 'peminjaman.NIS')
        ->join('data_admin', 'data_admin.id_admin', '=', 'peminjaman.id_admin')
        ->select('peminjaman.id_peminjaman', 'peminjaman.NIS', 'detail_peminjaman.id_buku', 'detail_peminjaman.qty', 'peminjaman.tanggal_pengembalian', 'peminjaman.id_admin', 'data_siswa.nama_siswa', 'data_buku.judul_buku', 'data_admin.nama_admin')
        ->whereNotIn('peminjaman.id_peminjaman', function ($query) {
            $query->select('pengembalian.id_peminjaman')
                ->from('pengembalian');
        })
        ->get();
        $gambar = DB::table('data_admin')->get();

        return view('pengembalian', ['kembali' => $dataPeminjaman, 'gambar'=> $gambar]);
    }

    public function create(Request $request)
    {
        DB::table('pengembalian')->insert([
            'id_pengembalian' => $request->text_kodepengembalian,
            'tanggal_pengembalian' => $request->dt_pengembalian,
            'NIS' => $request->number_nis,
            'id_admin' => $request->id_admin,
            'id_peminjaman' => $request->text_kodepeminjaman,
        ]);

        DB::table('detail_pengembalian')->insert([
            'id_detail_pengembalian' => $request->text_kodepengembalian,
            'qty' => $request->text_jumlah,
            'id_pengembalian' => $request->text_kodepengembalian,
            'id_buku' => $request->text_kodebuku,
        ]);

        alert()->success('Sukses','Berhasil Melakukan Pengembalian');
        return redirect('pengembalian');
    }
}
