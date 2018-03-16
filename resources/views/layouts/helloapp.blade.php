<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <style>
            th {background-color: #999; color; #fff; padding: 5px 10px;}
            td {border: solid 1px #aaa; color: #999; padding: 5px 10px;}
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            <p>※メニュー</p>
            <li>@show</li>
        </ul>
        <hr>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
