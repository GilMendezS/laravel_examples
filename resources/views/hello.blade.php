@extends('layouts.master')

@section('content')
    @for ($i = 0; $i < 10; $i++)
        <p>index value is {{ $i }}</p>
    @endfor
    @foreach($numbers as $number)
        <p>N: {{$number}}</p>
    @endforeach

    @while($x < 10)
        <p>{{$x++}}</p>
    @endwhile

    @foreach ($users as $user)
        <div class="card">
            <div class="card-title"></div>
            <div class="card-body">
                {{$user->name}}
            </div>
        </div>
    @endforeach
@endsection