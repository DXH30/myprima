<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function page(Request $request) {
        $obj = array(
            'title' => "Department",
            'user' => User::get(),
            'department' => Department::get(),
            'auth' => Auth::user()
        );

        return view('department', $obj);
    }

    public function edit(Request $request, $id) {
        $obj = array(
            'title' => "Edit Department",
            'user' => User::get(),
            'curdept' => Department::where('id', $id)->get()->first(),
            'department' => Department::get(),
            'auth' => Auth::user()
        );

        return view('edepartment', $obj);
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $msg = array(
                'msg' => "Mohon lengkapi data sebelum submit",
                'status' => false
            );
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data_in = new Department();
            $data_in->name = $request->name;
            $data_in->description = $request->description;
            $data_in->deptauth = json_encode($request->deptauth);
            $simpan = $data_in->save();
            if ($simpan) {
                $msg = array(
                    'msg' => "Berhasil input department",
                    'status' => true
                );
                return redirect($_SERVER['HTTP_REFERER']);
            } else {
                $msg = array(
                    'msg' => "Gagal input department",
                    'status' => false
                );
                return redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function read(Request $request) {
        return Department::get();
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            $msg = array(
                'msg' => "Gagal update department",
                'status' => false
            );
        } else {
            $data_in = array(
                'name' => $request->name,
                'description' => $request->description,
                'deptauth' => json_encode($request->deptauth)
            );
            $update = Department::where('id', $request->id)
                ->update($data_in); 
            if ($update) {
                $msg = array(
                    'msg' => "Berhasil update user",
                    'status' => true
                );
                return redirect('pdepartment');
            } else {
                $msg = array(
                    'msg' => "Gagal update user",
                    'status' => false
                );
                return redirect('pdepartment');
            }
            return $msg;
        }
    }

    public function delete(Request $request, $id) {
        $hapus = Department::where('id', $id)->delete();
        if ($hapus) {
            $msg = array (
                'msg' => "Berhasil delete user",
                'status' => true
            );
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            $msg = array (
                'msg' => "Gagal delete user",
                'status' => false
            );
            return redirect($_SERVER['HTTP_REFERER']);
        }
        return $msg;
    }
}
