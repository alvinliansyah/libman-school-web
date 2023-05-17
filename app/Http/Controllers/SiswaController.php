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
}
