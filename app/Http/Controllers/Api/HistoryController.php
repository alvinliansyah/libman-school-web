<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function history(Request $request)
    {
        $nis = $request->input('NIS');

        $query = "SELECT data_buku.id_buku,data_buku.judul_buku, data_buku.gambar, data_buku.semester,data_buku.penerbit,data_buku.jumlah, pengembalian.tanggal_pengembalian,pengembalian.NIS,peminjaman.tanggal_peminjaman,data_buku.deskripsi
                  FROM detail_pengembalian
                  JOIN data_buku ON detail_pengembalian.id_buku = data_buku.id_buku
                  JOIN pengembalian ON pengembalian.id_pengembalian = detail_pengembalian.id_pengembalian
                  JOIN peminjaman ON peminjaman.id_peminjaman = pengembalian.id_peminjaman
                  WHERE pengembalian.NIS = ?";
        
        $result = DB::select($query, [$nis]);

        if (count($result) > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Data ditemukan',
                'data' => $result
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data kosong'
            ]);
        }
    }
}