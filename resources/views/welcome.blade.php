@extends('layouts.app')

@section('title', 'CodeReviewApp')

@section('content')
<div class="bg-cover bg-center backgroundImage">
    <div id = "welcome" class="center">
        <h1 style="text-align: center"> Welcome!</h1>
            <p style="text-align: center"> Sign in or Register an account. </p>
            <p> Username:  <input type="text" id="username"> </p>
            <p> Password: <input type="test" id="password"> </p>
            <button @click="Sign In" id="signInButton">Sign In</button>
            <button @click="Register" id="reg">Register</v-btn>
    </div> 
</div>

    <style>
        .center{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid black;
            padding: 90px;
            background-color: pink;
        }
    </style>

    <script>
        var app = new Vue({
            methods:
                Sign In: function(event{
                    router.push("/profile");
                });
                Register: function(event{

                });
        })
        </script>
       
    
@endsection