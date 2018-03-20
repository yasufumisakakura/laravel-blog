@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Date</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getDate()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 sakakura
@endsection
