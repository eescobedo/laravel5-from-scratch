@extends('layout')

@section ('content')

    @if (empty($people))
        There are no people
    @else
        There are some people
    @endif


    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach

@stop

