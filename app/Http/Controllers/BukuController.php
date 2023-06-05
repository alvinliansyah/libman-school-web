<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    public function getdata()
    {
        $buku = DB::table('data_buku')->get();
        $gambar = DB::table('data_admin')->get();
        $maxId = DB::table('data_buku')
                ->max('id_buku');
        $baru = $maxId + 1;                

        return view('buku', ['buku' => $buku, 'gambar'=> $gambar, 'baru'=> $baru]);
    }

    public function create(Request $request)
    {
        $jumlah = 0;
        $ket = "Stok Awal";
        DB::table('data_buku')->insert([
                'id_buku' => $request->kode_buku,
                'judul_buku' => $request->text_judul,
                'semester' => $request->text_semester,
                'penerbit' => $request->text_penerbit,
                'tahun_terima' => $request->text_tahunterima,
                'jumlah' => $jumlah,
                'deskripsi' => $request->text_deskripsi,
            ]);
            DB::table('detail_buku')->insert([
                'id_buku' => $request->kode_buku,
                'jumlah' => $request->text_jumlah,
                'keterangan' => $ket,
            ]);
            alert()->success('Sukses','Berhasil Menambahkan Buku');
            return redirect('buku');
    }

    public function update(Request $request)
    {
        DB::table('data_buku')->where('id_buku',$request->text_kodebukue)->update([
            'judul_buku' => $request->text_judule,
            'penerbit' => $request->text_penerbite,
            'tahun_terima' => $request->text_tahunterimae,
            'deskripsi' => $request->text_deskripsie,
            'gambar' => $request->file_fotobukue->getClientOriginalName(),
        ]);
        $destinationPath = public_path().'/upload' ;
        $request->file_fotobukue->move($destinationPath,$request->file_fotobukue->getClientOriginalName());
        alert()->success('Sukses','Berhasil Mengubah Buku');
        return redirect('buku');
    }

    public function delete(Request $request)
    {  
	DB::table('data_buku')->where('id_buku',$request->text_kodebukuh)->delete();
    alert()->success('Sukses','Berhasil Menghapus Buku');
	return redirect('buku');
    }

    public function detailBuku($id_buku)
{
    $kelas = DB::table('detail_buku')->where('id_buku', $id_buku)->first();

    $ambil = DB::table('detail_buku')->where('id_buku', $id_buku)->get();

    $get = DB::table('data_buku')->where('id_buku', $id_buku)->get();

    $gambar = DB::table('data_admin')->get();
    
    return view('detailBuku', ['detail_buku' => $kelas, 'buku' => $ambil, 'get'=> $get, 'gambar'=> $gambar]);
}
}

