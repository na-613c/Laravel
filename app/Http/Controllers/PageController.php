<?php

namespace App\Http\Controllers;

use App\Comment;
use App\MainText;

class PageController extends Controller{

    public function getIndex($url = null){

        if (!$url) {
            $file = 'index';
        } else {
            $file = $url;
        }

        $obj = Maintext::where('url', $file)->first();

        // $url = asset($file);
        // dd($url);

        // if($url != null){
        //     $obj = Maintext::where('url', $url)->first();
        // }
        
        

        return view('page', compact('obj'));
    }

    public function getMain()
    {
        return view('index');
    }
}
