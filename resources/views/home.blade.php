<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add a black background color to the top navigation */
        .topnav{background-color: #333; overflow: hidden;}

        /* Style the links inside the navigation bar */
        .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
        background-color: #04AA6D;
        color: white;
        }
    </style>
    <title>home</title>
</head>
<header>
<div class="topnav">
  <a class="active" href="{{ url('/home') }}">Home</a>
  <a href="{{ url('/holiday') }}">Holiday</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
</header>
<body>
    <h1>Welcome Home!</h1>
</body>
</html>