<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
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
