<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function getAdd(){
        return view("add_comment");
    }

    public function postAdd(CommentRequest $r){
        unset($r['_token']);
        $r['user_id'] = (Auth::guest())?0:Auth::user()->id;
        $r['status'] = 'new';
        Comment::create($r->all());
        return redirect()->back();
    }
}
