<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;

class FCMController extends Controller
{
    public function sendNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'NIS' => 'required',
            'fcmToken' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $fcmToken = $request->input('fcmToken');
        $NIS = $request->input('NIS');
        $title = 'Libman App';
        $message = 'Kembalikkan Buku yang telah anda pinjam!';

        $url = 'https://fcm.googleapis.com/fcm/send';

        $serverKey = 'AAAArmX_T6w:APA91bF8gqn6ZEFXmTrc7xHMvYBnCpaJotTITDzCqNLFaxJz9vSe-BECVKRB4tqFZkpup1089-Cy9Yz70s4vmCe0ykW1x7rZhTiiP44Yz6hix4s-TnhbAVGBa8GgVRGq3QBwvGqnog7V'; // Ganti dengan server key FCM Anda

        $headers = [
            'Authorization: key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $data = [
            'to' => $fcmToken,
            'notification' => [
                'title' => $title,
                'body' => $message,
            ],
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            return response()->json(['error' => $error], 500);
        }

        curl_close($ch);

        Alert::success('Berhasil', 'Berhasil Mengirimkan Notifikasi');

        return redirect('dashboard');
    }
}