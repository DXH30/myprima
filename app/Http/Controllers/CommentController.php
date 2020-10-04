<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Thread;
use App\Models\Comment;
use App\Models\User;

class CommentController extends Controller
{
    //
    public function input(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'content' => 'required'
        ]);
        $data_in = new Comment;
        $data_in->userid = Auth::user()->id;
        $data_in->threadid = $id;
        if (isset($request->replyto)) {
            $data_in->replyto = $request->replyto;
        }
        $data_in->content = $request->content;
        $simpan = $data_in->save();
        if($simpan) {
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete(Request $request) {
    }
}
