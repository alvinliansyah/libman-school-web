<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DaftarkelasController extends Controller
{
    public function daftarkelas()
    {
        $result = DB::table('data_kelas')->get();

        $response = array();

        if ($result->count() > 0) {
            $response['status'] = true;
            $response['message'] = "Data kelas ditemukan";
            $response['data'] = array();

            foreach ($result as $row) {
                array_push($response['data'], array(
                    "id_data_kelas " => $row->id_data_kelas,
                    "tingkatan" => $row->tingkatan,
                    "kelas" => $row->kelas,
                
                ));
            }
        } else {
            $response['status'] = false;
            $response['message'] = "Tidak ada data kelas";
        }

        return response()->json($response);
    }
}