<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class EmailController extends Controller
{
    public function postIndex()
    {
        // $obj = User::all();
        $obj = User::where('email', 'LIKE', '%' . $_POST['list'] . '%')->get();

        return response()->json($obj);
    }
}
