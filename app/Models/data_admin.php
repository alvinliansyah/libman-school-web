<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_admin extends Model
{
    use HasFactory;

    public $table = 'data_admin';

    protected $fillable = [
        'id_admin','nama_admin','password','gambar',
    ];
}
