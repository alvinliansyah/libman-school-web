<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function getdata()
    {
        return view('buku');
    }
}
