<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\User;
use App\Models\Chat;
use App\Models\Thread;

class DashboardController extends Controller
{
    //
    public function __invoke() {
        $obj = [
            'title' => 'Dashboard',
            'department' => Department::get(),
            'user' => User::get(),
            'chat' => Chat::get(),
            'thread' => Thread::get(),
            'auth' => Auth::user()
        ];
        return view('dashboard', $obj);
    }
}
