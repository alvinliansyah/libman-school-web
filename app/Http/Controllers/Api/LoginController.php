<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\data_siswa;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'NIS' => 'required',
            'password' => 'required',
            'fcmToken' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Login Gagal',
                'data' => $validator->errors()
            ], 400);
        }

        $login = Auth::guard('mobile')->attempt(['NIS' => $request->NIS, 'password' => $request->password]);
        if ($login) {
            $user = Auth::guard('mobile')->user();
            $user->api_token = Str::random(100);
            $user->fcmToken = $request->fcmToken;
            $user->save();
            // $user->makeVisible('api_token');
            return response()->json([
                'status' => true,
                'message' => 'Login Berhasil',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Login Gagal',
            ]);
        }
    }

    public function sendToken(Request $request)
    {
        $user = data_siswa::where('NIS', $request->input('NIS'))->first();
        if ($user) {
            $user->fcmToken = $request->input('fcmToken');
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Token berhasil disimpan',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User tidak ditemukan',
            ]);
        }
    }
}