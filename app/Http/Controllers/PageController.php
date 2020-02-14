<?php

namespace App\Http\Controllers;

use App\MainText;

class PageController extends Controller{

    public function getIndex($url = null){
        
        if (!$url) {
            $file = 'index';
        } else {
            $file = $url;
        }


        $obj = Maintext::where('url', $file)->first();
        return view('page', compact('obj'));
    }

    public function getMain()
    {
        return view('index');
    }
}
