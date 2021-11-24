@extends('layouts.app')

@section('content')
    <p> All posts - maybe for a newsfeed? </p>
    <ul>
        @foreach ($posts as $post)
            <li> {{$post->title}} </li>
            <li> {{$post->description}} </li>
            <li> {{$post->numOfViews}} </li>
            <li> {{$post->numOfComments}} </li>
            <li> {{$post->numOfReviews}} </li>
        @endforeach
    </ul>
@endsection 