<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    public function getdata()
    {
        $kelas = DB::table('data_kelas')->get();
        $gambar = DB::table('data_admin')->get();

        return view('siswa', ['kelas' => $kelas, 'gambar'=> $gambar]);
    }

    public function create(Request $request)
    {
        DB::table('data_kelas')->insert([
                'id_data_kelas' => $request->text_kodekelast,
                'tingkatan' => $request->tingkatant,
                'kelas' => $request->kelast,
            ]);
            alert()->success('Sukses','Berhasil Menambahkan kelas');
            return redirect('siswa');
    }

    public function update(Request $request)
    {
        DB::table('data_kelas')->where('id_data_kelas',$request->text_kodekelase)->update([
            'tingkatan' => $request->tingkatane,
            'kelas' => $request->kelase,
        ]);
        alert()->success('Sukses','Berhasil Mengubah kelas');
        return redirect('siswa');
    }

    public function delete(Request $request)
    {  
	DB::table('data_kelas')->where('id_data_kelas',$request->kodekelash)->delete();

    alert()->success('Sukses','Berhasil Menghapus kelas');
	return redirect('siswa');
    }

    public function detailSiswa($id_data_kelas)
{
    $siswa = DB::table('data_siswa')->where('id_data_kelas', $id_data_kelas)->first();

    $ambil = DB::table('data_siswa')->where('id_data_kelas', $id_data_kelas)->get();

    $gambar = DB::table('data_admin')->get();
    
    return view('detailSiswa', ['data_siswa' => $siswa, 'siswa' => $ambil, 'gambar'=> $gambar]);
}
}
