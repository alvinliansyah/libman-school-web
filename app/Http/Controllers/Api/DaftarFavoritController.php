<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DaftarFavoritController extends Controller
{
    public function daftarfavorit(Request $request)
    {
        $nis = $request->input('NIS');

        $data = DB::table('buku_favorit')
            ->join('data_buku', 'buku_favorit.id_buku', '=', 'data_buku.id_buku')
            ->select('data_buku.id_buku','buku_favorit.nama_buku', 'data_buku.semester', 'data_buku.gambar','data_buku.penerbit','data_buku.tahun_terima','data_buku.jumlah')
            ->where('buku_favorit.NIS', $nis)
            ->get();

        if ($data->count() > 0) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data kosong'
            ], 404);
        }
    }
}