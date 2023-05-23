<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DaftarBukuController extends Controller
{
    public function daftarbuku()
    {
        $result = DB::table('data_buku')->get();

        $response = array();

        if ($result->count() > 0) {
            $response['status'] = "success";
            $response['message'] = "Data buku ditemukan";
            $response['data'] = array();

            foreach ($result as $row) {
                array_push($response['data'], array(
                    "id_buku" => $row->id_buku,
                    "judul_buku" => $row->judul_buku,
                    "semester" => $row->semester,
                    "penerbit" => $row->penerbit,
                    "tahun_terima" => $row->tahun_terima,
                    "jumlah" => $row->jumlah,
                    "gambar" => $row->gambar,
                ));
            }
        } else {
            $response['status'] = "error";
            $response['message'] = "Tidak ada data buku";
        }

        return response()->json($response);
    }
}