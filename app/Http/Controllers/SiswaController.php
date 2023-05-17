<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function getdata()
    {
        $kelas = DB::table('data_kelas')->get();

        return view('siswa', ['kelas' => $kelas]);
    }

    public function create(Request $request)
    {
        DB::table('data_kelas')->insert([
                'id_data_kelas' => $request->text_kodekelast,
                'tingkatan' => $request->tingkatant,
                'kelas' => $request->kelast,
            ]);
            return redirect('siswa');
    }

    public function update(Request $request)
    {
        DB::table('data_kelas')->where('id_data_kelas',$request->text_kodekelase)->update([
            'tingkatan' => $request->tingkatane,
            'kelas' => $request->kelase,
        ]);
        return redirect('siswa');
    }

    public function delete(Request $request)
    {  
	DB::table('data_kelas')->where('id_data_kelas',$request->kodekelash)->delete();
	return redirect('siswa');
    }

    public function detailSiswa($id_data_kelas)
{
    // Lakukan pengolahan data atau query berdasarkan $id_data_kelas

    // Contoh pengambilan data siswa berdasarkan $id_data_kelas dari database
    $siswa = DB::table('data_siswa')->where('id_data_kelas', $id_data_kelas)->first();

    $ambil = DB::table('data_siswa')->where('id_data_kelas', $id_data_kelas)->get();
    // Kirim data siswa ke tampilan "detail-siswa.blade.php"
    return view('detailSiswa', ['data_siswa' => $siswa, 'siswa' => $ambil]);
}
}
