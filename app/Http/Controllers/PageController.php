<?php

namespace App\Http\Controllers;

use App\Comment;
use App\MainText;
use Illuminate\Support\Facades\DB;

class PageController extends Controller{

    public function getIndex($url = null){

        if (!$url) {
            $file = 'index';        
        } else {
            $file = $url;
        }

        $obj = Maintext::where('url', $file)->first();
        $comm = Comment::where('site', $file)->first();

        if (isset($obj)) {
            $comm = null;
            return view('page', compact('obj', 'comm'));
        } else if (isset($comm)) {
            $obj = null;
            return view('page', compact('comm', 'obj'));
        } else return view('exist');
    }

    public function getMain(){
        $comments = DB::table('comments')->get();
        return view('index',compact('comments'));
    }
}
