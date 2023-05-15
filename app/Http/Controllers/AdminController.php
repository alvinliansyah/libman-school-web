<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_admin;

class AdminController extends Controller
{
    public function getdata()
    {
        $admin = DB::table('data_admin')->get();

        return view('admin', ['admin' => $admin]);
    }
}
