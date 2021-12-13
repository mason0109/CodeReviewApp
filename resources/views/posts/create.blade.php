@extends('layouts.app')

@section('title', "Your Upload")

@section('content')

    <div class="Form">
        <form method="POST" action="{{ route ('post.store') }}">
            @csrf
            <h1 style="text-align: center"> Please register below!</h1>

            @if ($errors->any())
                <div class = "error-message">
                    Errors:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p> Title: <input type="text" name = "title" 
                value="{{ old('title') }}"> </p>
            <p> Description:  <input type="text" name="description" 
                value="{{ old('description') }}"> </p>
            <p> File: <input type="text" name="file"> </p>
            <p> Image File: <input type="text" name="image"> </p>
            <input type="submit" value="submit">

            <a href="{{ route('welcome') }}">
                    {{ __('Already registered?') }}
            </a>
        </form>
    </div>