@extends('layout')

@section('content')

    <h1>Edit the note</h1>

    <form method="post" action="/notes/{{ $note->id }}">
        {{ method_field('patch') }}

        <div class="form-group">
            <textarea name="body" id="" class="form-control">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
    </form>

@stop