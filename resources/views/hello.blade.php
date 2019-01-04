@extends('layouts.master')

@section('content')
    @if($showName)
        @component('components.message')
            @slot('title')
                Title here
            @endslot
            <p>Welcome again</p>
        @endcomponent
    @else
        <p>Dont show the name</p>
    @endif
    
@endsection