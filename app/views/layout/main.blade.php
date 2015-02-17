<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 20-12-2014
 * Time: 16:22
 */
?>
<!doctype html>
<html lang="nl-NL">
{{ HTML::style('css/style.css'); }}
<head>
    <meta charset="UTF-8">
    <title>Birds</title>
</head>
<body>
    <header>
        @include('layout.navigation')
    </header>
    @if(Session::has('global'))
        <p>{{ Session::get('global') }}</p>
    @endif
    @yield('content')
</body>
</html>