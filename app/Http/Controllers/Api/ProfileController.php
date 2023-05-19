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
        $id_data_kelas = $request->input('id_data_kelas');
        $noTelp = $request->input('notelp');

        $row = DB::table('data_siswa')->select('gambar')->where('NIS', $nis)->first();
        $oldImage = $row->gambar;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $fileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();

            $newFileName = uniqid() . '.' . $fileExtension;

            $uploadPath = 'uploads/' . $newFileName;

            if ($file->move(public_path('uploads'), $newFileName)) {
                if (!empty($oldImage)) {
                    $oldImagePath = public_path('uploads/' . $oldImage);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                DB::table('data_siswa')
                    ->where('NIS', $nis)
                    ->update([
                        'id_data_kelas' => $id_data_kelas,
                        'gambar' => $newFileName
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
                    'id_data_kelas' => $id_data_kelas,
                    'notelp' => $noTelp
                ]);

            $response['status'] = true;
            $response['message'] = 'Data siswa berhasil diperbarui.';
        }

        return response()->json($response);
    }
}
