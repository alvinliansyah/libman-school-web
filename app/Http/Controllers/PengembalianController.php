<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    public function getdata()
    {
        $dataPeminjaman = DB::table('peminjaman')
        ->join('detail_peminjaman', 'peminjaman.id_peminjaman', '=', 'detail_peminjaman.id_peminjaman')
        ->whereNotIn('peminjaman.id_peminjaman', function ($query) {
            $query->select('pengembalian.id_peminjaman')
                ->from('pengembalian');
        })
        ->select('peminjaman.id_peminjaman', 'peminjaman.tanggal_pengembalian', 'detail_peminjaman.qty', 'peminjaman.NIS', 'detail_peminjaman.id_buku', 'peminjaman.id_admin')
        ->get();

        return view('pengembalian', ['kembali' => $dataPeminjaman]);
    }

    public function create(Request $request)
    {
        DB::table('pengembalian')->insert([
            'id_pengembalian' => $request->text_kodepengembalian,
            'tanggal_pengembalian' => $request->dt_pengembalian,
            'NIS' => $request->number_nis,
            'id_admin' => $request->text_kodeadmin,
            'id_peminjaman' => $request->text_kodepeminjaman,
        ]);

        DB::table('detail_pengembalian')->insert([
            'id_detail_pengembalian' => $request->text_kodepengembalian,
            'qty' => $request->text_jumlah,
            'id_pengembalian' => $request->text_kodepengembalian,
            'id_buku' => $request->text_kodebuku,
        ]);

        return redirect('pengembalian');
    }
}
