<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Department;

class AuthController extends Controller
{
    public function login_page(Request $request) {
        $obj = array(
            'title' => "Login"
        );
        return view('auth-login', $obj);
    }

    public function register_page(Request $request) {
        $obj = array(
            'title' => "Register",
            'department' => Department::get()
        );
        return view('auth-register', $obj);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "password" => "required"
        ]);
        // Cek jika name nya email maka gunakan email  
        $data_in = array();
        if (filter_var($request->name, FILTER_VALIDATE_EMAIL)) {
            $data_in['email'] = $request->name;
        } else {
            $data_in['name'] = $request->name;
        }
        $data_in['password'] = $request->password;
        if (Auth::attempt($data_in)) {
//            return "Berhasil";
            return redirect('dashboard');
        } else {
            return redirect($_SERVER['HTTP_REFERER'])
                ->with('status', "username atau password salah");
        }
/*        $total = User::where($data_in)->count();
        if ($total > 0) {
            $user = User::where($data_in)->first();
            // Cek Passwordnya
            $cek_pass = Hash::check(
                $request->password, 
                $user->password);
            if ($cek_pass) {
                $user->deptauth = json_decode($user->deptauth);
                $usernya = $user->all()->first();
                $rekam_sesi = array(
                    'id' => $usernya->id,
                    'deptid' => $usernya->deptid,
                    'name' => $usernya->name,
                    'email' => $usernya->email,
                    'deptauth' => $usernya->deptauth
                );
                session($rekam_sesi);
                return $usernya; 
            } else {
                return array("msg" => "Gagal Login"); 
            }
        } else {
            $msg = array(
                'msg' => "Username atau password salah",
                'status' => false
            );
            return redirect($_server['http_referer'])
                ->with('status', "username atau password salah");
        }
 */
    }

    public function logout(Request $request) {
        $logout = Auth::logout();
        return redirect('login')
            ->with('status', "Berhasil logout");
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'deptid' => 'required',
            'deptauth' => 'required'
        ]);
        $data_in = new User();
        $data_in->name = $request->name;
        $data_in->email = $request->email;
        $data_in->password = Hash::make($request->password);
        $data_in->deptid = $request->deptid;
        $data_in->deptauth = json_encode($request->deptauth);
        $simpan = $data_in->save();
        if ($simpan) {
            $msg = array(
                'msg' => "Berhasil registrasi",
                'status' => true
            );
            return redirect('login')
                ->with('status', "Berhasil registrasi, harap login");
        } else {
            $msg = array(
                'msg' => "Gagal registrasi",
                'status' => false
            );
        }
        return $msg;
    }
}
