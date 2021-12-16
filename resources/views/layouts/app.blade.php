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
                    <a href = "" class="link-dark" >Home</a>
                </div>
                <div class="menu-item">
                    <a href = "{{ route('user.profile', ['id' => Auth::id()]) }}" class="link-dark" >Profile</a>
                </div>
                <div class="menu-item">
                    <a href = "{{route('post.create')}}" class="link-dark" >New Post</a>
                </div>
                <div class = "menu-item-left">
                    <a class="btn btn-primary" href="/logout">logout</a>
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
            display: flex;
            padding: 6px;
            margin: 10px;
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
        .error-messgae{
            color: red;
        }
        .imgsizing{
            height: 260px;
            width: 260px;
            margin: 10px;
        }
    </style>

    <scirpt>
        
    </scirpt>


 
</html> 