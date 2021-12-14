@extends('layouts.app')

@section('title', "Your Upload")

@section('content')

    <div class="Form mx-auto">
        <form method="POST" action="{{ route ('posts.update', ['id' => $post->id]) }}">
            @csrf
            @method('PATCH')
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
                value="{{$post->title}}"> </p>
            <p> Description:  <input type="text" name="description" 
                value="{{$post->description}}"> </p>
            <p> File: <input type="text" name="document_upload"> </p>
            <p> Image File: <input type="text" name="image"> </p>
            <input type="submit" value="submit">
        </form>
    </div>