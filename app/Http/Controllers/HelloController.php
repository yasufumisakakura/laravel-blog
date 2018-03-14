<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function index (Request $request)//なぜ引数にrequest? 呼び出し時にRequestを引数に指定しなくてもOKなのはなぜ？
    {
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post (Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150'
        ];
        $this->validate($request, $validate_rule);
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }
}
