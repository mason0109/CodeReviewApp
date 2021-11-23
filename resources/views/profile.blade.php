<html>
    @extends('layouts.app')

    @section('title', 'CodeReviewProfile')

    @section('content')
        @if ($user)
            <h1> {{$user}}'s Profile</h1>
        @else
            <h1> User not found </h1>
        @endif
    @endsection
</html>