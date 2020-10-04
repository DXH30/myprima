<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    //
    public function __invoke(Request $request) {
        $obj = array(
            'title' => "Landing Page",
            'pesan' => "Selamat Datang di Website MyPrima",
            'auth' => Auth::user() 
        );
        return view('landing', $obj);
    }
}
