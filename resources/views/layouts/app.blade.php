<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="../css/app.css">

        <title>@yield('title') </title>
    </head>
    <body>
        <h1> @yield('header')</h1>

        <div>
            @yield('content')
        </div> 
    </body> 
</html> 