<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TindakanController extends Controller
{
    public function tindakan()
    {
        $nis = request()->input('NIS');

        $data = DB::table('detail_pengembalian')
            ->join('data_buku', 'detail_pengembalian.id_buku', '=', 'data_buku.id_buku')
            ->join('pengembalian', 'pengembalian.id_pengembalian', '=', 'detail_pengembalian.id_pengembalian')
            ->where('pengembalian.NIS', $nis)
            ->select('data_buku.judul_buku', 'pengembalian.id_pengembalian', 'data_buku.semester', 'data_buku.gambar', 'pengembalian.tanggal_pengembalian')
            ->get();

        if ($data->count() > 0) {
            return response()->json($data);
        } else {
            return response()->json('Data Kosong');
        }
    }
}
