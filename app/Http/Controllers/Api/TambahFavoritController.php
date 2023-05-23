<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TambahFavoritController extends Controller
{
    public function tambahfavorit(Request $request)
    {
        $NIS = $request->input('NIS');
        $nama_siswa = $request->input('nama_siswa');
        $nama_buku = $request->input('nama_buku');
        $id_buku = $request->input('id_buku');

        $checkFavorit = DB::table('buku_favorit')->where('NIS', $NIS)->where('id_buku', $id_buku)->first();

        if ($checkFavorit) {
            return response()->json('Sudah ditambahkan');
        } else {
            $query = DB::table('buku_favorit')->insert([
                'nama_buku' => $nama_buku,
                'id_buku' => $id_buku,
                'NIS' => $NIS
            ]);

            if ($query) {
                return response()->json('Success');
            } else {
                return response()->json('Error');
            }
        }
    }
}