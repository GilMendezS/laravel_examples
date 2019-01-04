@extends('layouts.master')

@section('content')
    @php
        $x = 10;
    @endphp
    @for ($i = 0; $i < $x; $i++)
        {{$i}}   
    @endfor
@endsection