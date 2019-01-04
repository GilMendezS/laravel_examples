@extends('layouts.master')

@section('content')
    @auth
        // The user is authenticated...
    @endauth

    @guest
        // The user is not authenticated...
    @endguest
@endsection