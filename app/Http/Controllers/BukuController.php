<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function getdata()
    {
        $buku = DB::table('data_buku')->get();

        return view('buku', ['buku' => $buku]);
    }

    public function create(Request $request)
    {
        DB::table('data_buku')->insert([
                'id_buku' => $request->text_kodebuku,
                'judul_buku' => $request->text_judul,
                'penerbit' => $request->text_penerbit,
                'tahun_terima' => $request->text_tahunterima,
                'jumlah' => $request->text_jumlah,
                // 'gambar' => $request->file_fotobuku,
            ]);
            return redirect('buku');
    }

    public function update(Request $request)
    {
        DB::table('data_buku')->where('id_buku',$request->text_kodebukue)->update([
            'judul_buku' => $request->text_judule,
            'penerbit' => $request->text_penerbite,
            'tahun_terima' => $request->text_tahunterimae,
            'jumlah' => $request->text_jumlahe,
            // 'gambar' => $request->file_fotobuku,
        ]);
        return redirect('buku');
    }

    public function delete(Request $request)
    {  
	DB::table('data_buku')->where('id_buku',$request->text_kodebukuh)->delete();
	return redirect('buku');
    }
}
