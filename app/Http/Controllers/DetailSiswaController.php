<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailSiswaController extends Controller
{
    public function getdata()
    {
        return view('detailSiswa');
    }
}
