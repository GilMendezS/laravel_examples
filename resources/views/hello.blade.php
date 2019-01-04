@extends('layouts.master')

@section('content')
    @component('components.message')
        @slot('title')
            Title here
        @endslot
        <p>Welcome again</p>
    @endcomponent
@endsection