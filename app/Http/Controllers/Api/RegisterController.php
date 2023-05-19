<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $nis = $request->input('NIS');
        $nama = $request->input('nama_siswa');
        $password = bcrypt($request->input('password'));
        $tingkatan = $request->input('tingkatan');
        $kelas = $request->input('kelas');
        $jenisKelamin = $request->input('jenis_kelamin');
        $noTelp = $request->input('notelp');
        $gambar = $request->input('gambar');
        $id_data_kelas = $request->input('id_data_kelas');

        $checkNIS = DB::table('data_siswa')->where('NIS', $nis)->count();

        if ($checkNIS == 1) {
            return response()->json("NIS sudah terdaftar");
        } else {
            $insertData = array(
                'NIS' => $nis,
                'nama_siswa' => $nama,
                'password' => $password,
                'jenis_kelamin' => $jenisKelamin,
                'notelp' => $noTelp,
                'gambar' => $gambar,
                'id_data_kelas' => $id_data_kelas
            );

            DB::table('data_siswa')->insert($insertData);

            return response()->json([
                'status' => true,
                'massage' => 'akun berhasil didaftar',
                'data' => $insertData = array(
                    'NIS' => $nis,
                    'nama_siswa' => $nama,
                    'password' => $password,
                    'jenis_kelamin' => $jenisKelamin,
                    'notelp' => $noTelp,
                    'gambar' => $gambar,
                    'id_data_kelas' => $id_data_kelas)
                ]);
        }
    }
}
