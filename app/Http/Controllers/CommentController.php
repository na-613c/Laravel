<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\CommentUpdRequest;
use App\Comment;
use App\MainText;
use Auth;

class CommentController extends Controller
{
    public function getAdd()
    {
        return view("add_comment");
    }

    public function postAdd(CommentRequest $r)
    {
        unset($r['_token']);
        $r['user_id'] = (Auth::guest()) ? 0 : Auth::user()->id;
        $r['status'] = 'new';
        $url = $r['site'];

        Comment::create($r->all());
        return redirect($url);
    }

    public function postUpd(CommentUpdRequest $r, $id = null)
    {

        $obj = Comment::find($id);

        $obj->message = $r['message'];

        $obj->save();

        return redirect()->back();
    }


    public function postDelete($id = null)
    {
        $obj = Comment::find($id);

        $obj->delete();

        return redirect('/');
    }
}
