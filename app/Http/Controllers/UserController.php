<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Department;

class UserController extends Controller
{
    // Manajemen User
    public function manajemen_user(Request $request) {
        $obj = array(
            'title' => 'Manajemen User',
            'department' => Department::get(),
            'auth' => Auth::user(),
            'user' => User::get()
        );
        return view('manajemen_user', $obj);
    }
}
