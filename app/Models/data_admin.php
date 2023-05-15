<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class data_admin extends Authenticatable
{
    use HasFactory;

    public $table = 'data_admin';

    protected $fillable = [
        'id_admin','nama_admin','password','gambar',
    ];
}
