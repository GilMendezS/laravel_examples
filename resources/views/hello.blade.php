@extends('layouts.master')

@section('content')
    @if ($age == 1)
        <p>Age : 1</p>
    @elseif($age == 0)    
        <p>Age : 0</p>
    @else
        <p>Age != 0 & 1</p>
    @endif
    
@endsection