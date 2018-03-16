@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
<table>
    <form action="/hello/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$form->id}}"
        <tr>
            <th>name: </th>
            <td>{{$form->name}}</td>
        </tr>
        <tr>
            <th>mail: </th>
            <td>{{$form->mail}}</td>
        </tr>
        <tr>
            <th>age: </th>
            <td>{{$form->age}}</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="delete"></td>
        </tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2018 yasufumi
@endsection
