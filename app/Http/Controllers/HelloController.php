<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index (Request $request) {//なぜ引数にmiddle
        return view('hello.index', ['data'=>$request->data]);
    }
}
