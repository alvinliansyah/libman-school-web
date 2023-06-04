<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $nis = $request->input('NIS');
        $idDataKelas = $request->input('id_data_kelas');
        $noTelp = $request->input('notelp');
        $jk = $request->input('jenis_kelamin');

        $row = DB::table('data_siswa')->select('gambar')->where('NIS', $nis)->first();
        $oldImage = $row->gambar;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $fileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();

            $newFileName = uniqid() . '.' . $fileExtension;

            $uploadPath = 'upload/' . $newFileName;

            if ($file->move(public_path('upload'), $newFileName)) {
                if (!empty($oldImage)) {
                    $oldImagePath = public_path('upload/' . $oldImage);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                DB::table('data_siswa')
                    ->where('NIS', $nis)
                    ->update([
                        'id_data_kelas' => $idDataKelas,
                        'gambar' => $newFileName,
                        'notelp' => $noTelp,
                        'jenis_kelamin' => $jk,
                    ]);

                $response['status'] = true;
                $response['message'] = 'Data siswa berhasil diperbarui.';
            } else {
                $response['status'] = false;
                $response['message'] = 'Gagal mengunggah gambar.';
            }
        } else {
            DB::table('data_siswa')
                ->where('NIS', $nis)
                ->update([
                    'id_data_kelas' => $idDataKelas,
                    'notelp' => $noTelp,
                    'jenis_kelamin' => $jk,
                ]);

            $response['status'] = true;
            $response['message'] = 'Data siswa berhasil diperbarui.';
        }

        return response()->json($response);
    }
}