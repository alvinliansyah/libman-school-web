<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DetailSiswaController extends Controller
{
    public function getdata($id_data_kelas)
    {
        $gambar = DB::table('data_admin')->get();

        return view('detailSiswa', ['gambar'=> $gambar]);
    }

    public function create(Request $request)
    {
        DB::table('data_siswa')->insert([
            'NIS' => $request->number_nis1,
            'nama_siswa' => $request->text_namasiswa1,
            'password' => bcrypt($request->password1),
            'jenis_kelamin' => $request->text_jekel1,
            'notelp' => $request->number_noteltepon1,
            'id_data_kelas' => $request->kode_kelas1,
        ]);
        alert()->success('Sukses','Berhasil Menambahkan Siswa');
        return back();
    }

    public function update(Request $request)
    {
        DB::table('data_siswa')
        ->where('NIS', $request->number_nis)
        ->update([
            'nama_siswa' => $request->text_namasiswa,
            'password' => $request->password,
            'jenis_kelamin' => $request->text_jekel,
            'notelp' => $request->number_noteltepon,
            'id_data_kelas' => $request->kode_kelas,
        ]);
        alert()->success('Sukses','Berhasil Mengubah Siswa');
        return back();
    }

    public function delete(Request $request)
    {
        DB::table('data_siswa')
        ->where('NIS', $request->NIS3)
        ->delete();

        alert()->success('Sukses','Berhasil Menghapus Siswa');
        return back();
    }
}
