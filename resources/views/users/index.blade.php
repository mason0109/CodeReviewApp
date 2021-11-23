@extends('layouts.app')

@section('content')
    <p> All users online?? </p>
    <ul>
        @foreach ($users as $user)
            <li> {{$user->username}} </li>
        @endforeach
    </ul>
@endsection 