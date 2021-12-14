@extends('layouts.app')

@section('title', "Your Upload")

@section('content')

    <div class="bg-cover bg-center">
        <form method="POST" action="{{ route ('post.store') }}">
            @csrf

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
            <p> File: <input type="text" name="document_upload"> </p>
            <p> Image File: <input type="text" name="image"> </p>
            <input type="submit" value="submit">

        </form>
    </div>