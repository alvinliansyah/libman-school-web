<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function getdata()
    {
        return view('siswa');
    }
}
