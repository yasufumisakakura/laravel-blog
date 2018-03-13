<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index (Request $request) {//なぜ引数にrequest?
        return view('hello.index');
    }
}
