<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Thread;
use App\Models\User;
use App\Models\Comment;
use App\Models\Department;

class ThreadController extends Controller
{
    // Page
    public function page(Request $request) {
        $obj = array(
            'title' => 'Thread',
            'auth' => Auth::user(),
            'thread' => Thread::get(),
            'department' => Department::get(),
            'user' => User::get()
        );
        return view('thread', $obj);
    }

    // Create
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            $msg = array(
                "msg" => "Lengkapi data terlebih dahulu",
                "status" => false
            );
            return $msg;
        } else {
            $data_in = new Thread();
            $data_in->title = $request->title;
            $data_in->userid = Auth::user()->id;
            $data_in->deptid = Auth::user()->deptid;
            $data_in->content = $request->content;
            $data_in->description = $request->description;
            $data_in->deptauth = json_encode($request->deptauth);
            $simpan = $data_in->save();
            if ($simpan) {
                $msg = array(
                    "msg" => "Berhasil input thread",
                    "status" => true
                );
                return redirect($_SERVER['HTTP_REFERER']);
            } else {
                $msg = array(
                    "msg" => "Gagal input thread",
                    "status" => false
                );
                return redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    // Read
    public function read(Request $request) {
        return Thread::get();
    }

    // Baca
    public function baca(Request $request, $id) {
        $thread = Thread::where('id', $id)->get()->first();
        $obj = array(
            'auth' => Auth::user(),
            'department' => Department::get(),
            'title' => $thread->title, 
            'threadid' => $thread->id,
            'description' => $thread->description,
            'content' => $thread->content, 
            'created_at' => $thread->created_at,
            'updated_at' => $thread->updated_at,
            'user' => User::get(),
            'comment' => Comment::where('threadid', $thread->id)->get(),
        );
        return view('bthread', $obj);
    }

    // Update
    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);
        if ($validator->fails()) {
            $msg = array(
                "Informasi yang di inputkan kurang lengkap",
                "status" => false
            );
            return $msg;
        } else {
            $update = Thread::where('id', $request->id)->update($request->all());
            if ($update) {
                $msg = array(
                    "msg" => "Berhasil Update data",
                    "status" => true
                );
                return $msg;
            } else {
                $msg = array(
                    "msg" => "Berhasil Update data",
                    "status" => false
                );
                return $msg;
            }
        }
    }

    // Delete
    public function delete(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);
        if ($validator->fails()) {
            $msg = array(
                "Informasi yang di inputkan kurang lengkap",
                "status" => false
            );
            return $msg;
        } else {
            $delete = Thread::where('id', $request->id)->delete();
        }
    }
}
