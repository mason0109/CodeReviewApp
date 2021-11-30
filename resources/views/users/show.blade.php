@extends('layouts.app')

@section('title', $user->username)

@section('header', $user->username)

@section('content')
    <ul>
        <li> {{$user->username}} </li>
        <li> {{$user->email}}</li>
    </ul>
@endsection