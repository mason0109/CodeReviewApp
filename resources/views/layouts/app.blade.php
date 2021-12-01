<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
        <title>@yield('title') </title>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <div class = "header">
            <h1 style = "text-align: left"> @yield('header')</h1>
        </div>
        <div class = "menu-row">
            <div class="menu">
                <div class="menu-item">
                    Search for posts
                </div>
                <div class="menu-item">
                    Search for users
                </div>
                <div class = "menu-item-left">
                    Notifications icon 
                    <button class="btn btn-info" @click="viewProfile" id="vewProfileButton"> Profile </button>
                    <button class="btn btn-info" @click="newPost" id="newPostButton"> Post some code </button>
                </div>
            </div>
        </div>
    </div>

        </div>
        <div>
            @yield('content')
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
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
        .menu-item-left{
            padding: 6px;
            margin: 6px;
            position: absolute;
            right: 0;
            transform: translateY(-20%);
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
        .postButton{
            height: 15px;
            font-size:10px;
            margin: 5px;
        }
        .writeNewPost{
            display: flex;
            height: 30px;
            margin: 10px;
        }
        .newPostButton{
            position: absolute;
            top:20%;
            right: 0;
            width: 120px;
            transform: translateY(-20%);
        }
        .profile-header{
            display: flex;
        }
        .img {
            height: 150px;
            width: 150px;

        }
    </style>

 
</html> 