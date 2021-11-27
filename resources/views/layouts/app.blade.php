<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <title>@yield('title') </title>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <div class = "header">
            <h1 style = "text-align: left"> @yield('header')</h1>
        </div>
        <div class="menu">
            <div class = "menu-item">
                Profile
            </div>
            <div class="menu-item">
                Search for posts
            </div>
            <div class="menu-item">
                Search for users
            </div>
        </div>

        <div>
            @yield('content')
        </div> 

    </body>

    <style>
        .menu{
            display: flex;
            background-color: #BBEEDD;
        }
        .menu-item{
            padding: 6px;
            margin: 5px;
        }
        .header{
            margin: 0px;
            background-color: #BBEEDD;
            padding: 2px;
        }
        .post-display{
            border: 2px solid black;
            padding: 6px;
            margin: 10px;
        }
        .post-bottom{
            display: flex;
        }
        .bottom-item{
            padding: 5px;
        }
        .body{
            background-color: #BBEEDD;
        }
    </style>

 
</html> 