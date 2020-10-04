<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __invoke() {
        $response = array(
            "msg" => "Selamat datang di API Chat My Prima",
            "status" => 200
        );
        return $response;
    }

    public function post(Request $request) {
        $validator = Validator::make($request->all(), [
            'userid' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            $response = array(
                "msg" => "Maaf isian nya kurang",
                "status" => false
            );
            return $response;
        } else {
            $kirim = Chat::create($request->all());
            if ($kirim) {
                $response = array(
                    "msg" => "Berhasil mengirim pesan",
                    "status" => true
                );
            } else {
                $response = array(
                    "msg" => "Gagal mengirim pesan",
                    "status" => false
                );
            }
            return $response;
        }
    }

    public function get(Request $request) {
    } 
}
