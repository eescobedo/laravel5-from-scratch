@extends('layout')

@section('content')

    {{--<h1>Card</h1>--}}

    <h1>
        {{ $card->title }}
    </h1>

    <ul>
        @foreach($card->notes as $note)
            <li>{{ $note->body }}</li>
        @endforeach
    </ul>

@stop