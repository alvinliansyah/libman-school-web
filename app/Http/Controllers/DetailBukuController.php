<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DetailBukuController extends Controller
{
    public function getdata($id_buku)
    {
        $gambar = DB::table('data_admin')->get();

        return view('detailBuku', ['gambar'=> $gambar]);
    }

    public function create(Request $request)
    {
        DB::table('detail_buku')->insert([
            'id_buku' => $request->kode_buku1,
            'jumlah' => $request->number_jumlah1,
            'keterangan' => $request->text_keterangan1,
        ]);
        alert()->success('Sukses','Berhasil Menambahkan Stok buku');
        return back();
    }
}
