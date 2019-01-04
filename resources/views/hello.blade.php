@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('hello.save')}}">
        @csrf
        <input name="name" type="text" placeholder="name">
        <br>
        <input name="lastname" type="lastname" placeholder="lastname">
        <br>
        <button tye="submit">Send</button>
    </form>
@endsection