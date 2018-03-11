<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index () {
        $data = [
            ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
            ['name'=>'田中花子', 'mail'=>'hanako@tanaka'],
            ['name'=>'鈴木幸子', 'mail'=>'sachiko@suzuki']
        ];
        return view('hello.index', ['data'=>$data]);
    }
}
