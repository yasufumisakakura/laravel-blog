@extends('layouts.helloapp')
@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    @include('components.message', ['msg_title'=>'タイトル', 'msg_content'=>'サブビューのコンテンツ'])

@endsection

@section('footer')
    copyright 2017 sakakura.
@endsection
