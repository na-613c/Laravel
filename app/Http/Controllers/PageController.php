<?php

namespace App\Http\Controllers;

use App\Comment;
use App\MainText;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SearchRequest;


class PageController extends Controller{

    public function getIndex($url = null){

        !$url ? $file = 'index' : $file = $url;

        $obj = Maintext::where('url', $file)->first();
        $comm = Comment::where('site', $file)->first();

        $view_page = view('page', compact('obj', 'comm'));
        $view_error = view('exist');

        isset($obj) || isset($comm) ? $page = $view_page : $page = $view_error;
        return $page;

    }

    public function getMain(){
        $comments = DB::table('comments')->get();
        $comments = $comments->reverse();
        return view('index', compact('comments'));
    }

    public function getSearch()
    {
       
    }

    public function postSearch(SearchRequest $request)
    {   
        $name = $request['search'];

        $obj = Comment::where('name', $name)->first();

        if(isset($obj)){
            $url = $obj['site'];
            return redirect($url);
        } else{
            return view('exist',  compact('name'));
        }  

    }

    
}
