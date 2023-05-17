<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DaftarBukuController extends Controller
{
    public function daftarbuku()
    {
        // Menjalankan query
        $result = DB::table('buku_favorit')->get();

        // Membuat array untuk menampung hasil query
        $response = array();

        // Menampilkan hasil query
        if ($result->count() > 0) {
            // Output data satu per satu
            foreach ($result as $row) {
                array_push($response, array(
                    "id_favorit" => $row->id_favorit,
                    "nama_buku" => $row->nama_buku,
                    "id_buku" => $row->id_buku,
                    "NIS" => $row->NIS,
                ));
            }
        } else {
            $response['message'] = "Tidak ada data";
        }

        // Menampilkan respon dalam format JSON
        return response()->json($response);
    }
}
