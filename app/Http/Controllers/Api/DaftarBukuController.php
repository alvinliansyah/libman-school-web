<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DaftarBukuController extends Controller
{
    public function daftarbuku()
    {
        $result = DB::table('buku_favorit')->get();

        $response = array();

        if ($result->count() > 0) {
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
        return response()->json($response);
    }
}
