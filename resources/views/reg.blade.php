@extends('layouts.app')

@section('title', 'register')

@section('content')
<div class="bg-cover bg-center backgroundImage">
    <div id = "welcome" class="center">
        <h1 style="text-align: center"> Please register below!</h1>
            <p> Username:  <input type="text" id="username"> </p>
            <p> Password: <input type="test" id="password"> </p>
            <p> email: <input type="text" id="email"> </p>
            <button @click="Register" id="regButton">Register</button>

            <!--- this doesn't work --->
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Already registered?') }}
            </a>
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
        .regButton{
            padding-right: 40px;
        }
    </style>
@endsection