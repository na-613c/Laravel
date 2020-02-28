<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class DatalistController extends Controller
{
    public function postIndex()
    {
        // $obj = Comment::all();
        $obj = Comment::where('name','LIKE','%'.$_POST['list'].'%')->get();

        return response()->json($obj);
    }
}