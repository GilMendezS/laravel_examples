@extends('layouts.master')

@section('content')
    @switch($case)
        @case(1)
            First case...
            @break

        @case(2)
            Second case...
            @break

        @default
            Default case...
    @endswitch
@endsection