<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'NIS' => 'required',
            'nama_siswa' => 'required',
            'password' => 'required',
            'tingkatan' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'notelp' => 'required',
            'gambar' => 'required',
        ];
    }
}
