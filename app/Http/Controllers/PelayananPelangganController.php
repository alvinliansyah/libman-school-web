<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelayananPelangganController extends Controller
{
    public function getdata()
    {
        return view('pelayananPelanggan');
    }
}
