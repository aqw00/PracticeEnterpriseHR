<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homeSlideshow.css') }}" rel="stylesheet">
    <script src="{{ asset('js/JQUERY.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>
</head>
<body>
<header>
    <div class="topnav">
    <a class="active" href="{{ url('/home') }}">Home</a>
    <a href="{{ url('/holiday') }}">Holiday</a>
    <a  href="{{ url('/man') }}">ManagerPage</a>
    <a href="{{ url('/contact') }}">Contact</a>
    <a href="{{ url('/about') }}">About</a>
    </div>
    </header>
    <h1>Welcome Home!</h1>
    <div id="slideshow">
        <div><img src="{{ asset('img/texture2.jpg') }}" alt="" class="slideImage"></div>
        <div><img src="{{ asset('img/texture4.jpg') }}" alt="" class="slideImage"></div>
        <div><img src="{{ asset('img/texture3.jpg') }}" alt="" class="slideImage"></div>
        <div><img src="{{ asset('img/texture1.jpg') }}" alt="" class="slideImage"></div>
    </div>
</body>
</html>