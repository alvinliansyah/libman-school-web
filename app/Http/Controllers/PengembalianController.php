<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function getdata()
    {
        return view('pengembalian');
    }
}
