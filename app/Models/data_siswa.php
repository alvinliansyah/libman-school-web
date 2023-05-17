<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class data_siswa extends Authenticatable
{
    use HasFactory;

    public $table = 'data_siswa';
    protected $primaryKey = 'NIS';
    protected $fillable = [
        'NIS','nama_siswa','password','jenis_kelamin', 'notelp', 'gambar', 'id_data_kelas',
    ];
}
