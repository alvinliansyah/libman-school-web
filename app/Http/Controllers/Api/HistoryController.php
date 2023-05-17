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

        $query = "SELECT data_buku.judul_buku, data_buku.gambar, data_buku.semester, pengembalian.tanggal_pengembalian
                  FROM detail_pengembalian
                  JOIN data_buku ON detail_pengembalian.id_buku = data_buku.id_buku
                  JOIN pengembalian ON pengembalian.id_pengembalian = detail_pengembalian.id_pengembalian
                  WHERE pengembalian.NIS = ?";
        
        $result = DB::select($query, [$nis]);

        if (count($result) > 0) {
            return response()->json($result);
        } else {
            return response()->json('Data Kosong');
        }
    }
}
