<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function getall(Request $request) {
        return Department::get();
    }

    public function getbyid(Request $request, $id) {
        return Department::where('id', $id)->get()->first();
    }
}
