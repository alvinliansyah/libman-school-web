<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function getdata()
    {
        $dataPeminjaman = DB::table('peminjaman')
        ->join('detail_peminjaman', 'peminjaman.id_peminjaman', '=', 'detail_peminjaman.id_peminjaman')
        ->select('peminjaman.id_peminjaman', 'peminjaman.tanggal_peminjaman', 'peminjaman.tanggal_pengembalian', 'detail_peminjaman.qty', 'peminjaman.NIS', 'peminjaman.id_admin', 'detail_peminjaman.id_buku')
        ->get();

        return view('peminjaman', ['peminjaman' => $dataPeminjaman]);
    }

    public function create(Request $request)
    {
        DB::table('peminjaman')->insert([
            'id_peminjaman' => $request->text_kodepeminjaman,
            'tanggal_peminjaman' => $request->dt_peminjaman,
            'tanggal_pengembalian' => $request->dt_pengembalian,
            'NIS' => $request->number_nis,
            'id_admin' => $request->text_kodeadmin,
        ]);

        DB::table('detail_peminjaman')->insert([
            'id_detail_peminjaman' => $request->text_kodepeminjaman,
            'qty' => $request->text_jumlah,
            'id_peminjaman' => $request->text_kodepeminjaman,
            'id_buku' => $request->text_kodebuku,
        ]);

        return redirect('peminjaman');
    }
}
