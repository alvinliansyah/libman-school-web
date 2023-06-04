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
            $response['status'] = true;
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
                    "deskripsi" => $row->deskripsi,
                ));
            }
        } else {
            $response['status'] = false;
            $response['message'] = "Tidak ada data buku";
        }

        return response()->json($response);
    }

    public function getBookStatistics()
    {
        $query = "SELECT
        data_buku.id_buku,
        data_buku.judul_buku,
        data_buku.gambar,
        data_buku.semester,
        data_buku.deskripsi,
        data_buku.penerbit,
        data_buku.tahun_terima,
        CONCAT(ROUND((COUNT(detail_peminjaman.id_buku) * 100 / total.total_peminjaman)), '%') AS persentase_peminjaman
    FROM
        detail_peminjaman
    JOIN
        data_buku ON detail_peminjaman.id_buku = data_buku.id_buku
    CROSS JOIN
        (SELECT COUNT(*) AS total_peminjaman FROM detail_peminjaman) AS total
    GROUP BY
        data_buku.id_buku,
        data_buku.judul_buku,
        data_buku.gambar,
        data_buku.semester,
        data_buku.deskripsi,
        data_buku.penerbit,
        data_buku.tahun_terima,
        total.total_peminjaman
    ORDER BY
        persentase_peminjaman DESC;";

        $result = DB::select(DB::raw($query));

        $response = array();

        if ($result) {
            $response['status'] = true;
            $response['message'] = "Data ditemukan";
            $response['data'] = array();

            foreach ($result as $row) {
                array_push($response['data'], array(
                    "id_buku" => $row->id_buku,
                    "judul_buku" => $row->judul_buku,
                    "gambar" => $row->gambar,
                    "semester" => $row->semester,
                    "deskripsi" => $row->deskripsi,
                    "penerbit" => $row->penerbit,
                    "tahun_terima" => $row->tahun_terima,
                    "persentase_peminjaman" => $row->persentase_peminjaman,
                ));
            }
        } else {
            $response['status'] = false;
            $response['message'] = "Data Tidak Ditemukan";
        }

        return response()->json($response);
    }
}