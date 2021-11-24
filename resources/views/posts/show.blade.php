@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <ul>
            <li> {{$post->user->username}}'s post </li>
            <li> {{$post->title}} </li>
            <li> {{$post->description}} </li>
            <li> {{$post->numOfViews}} </li>
            <li> {{$post->numOfComments}} </li>
            <li> {{$post->numOfReviews}} </li>
    </ul>
@endsection