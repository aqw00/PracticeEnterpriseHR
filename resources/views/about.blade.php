<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="topnav">
    <a href="{{ url('/home') }}">Home</a>
    <a href="{{ url('/holiday') }}">Holiday</a>
    <a  href="{{ url('/man') }}">ManagerPage</a>
    <a href="{{ url('/contact') }}">Contact</a>
    <a class="active"  href="{{ url('/about') }}">About</a>
    </div>
    </header>
    <h1>Welcome to the About page!</h1>
    <p>Here you can read about the HR department of out company!</p>
</body>
</html>