@extends('layouts.content')

@section('content-inner')
    <h3>{{ $mode->name }}</h3>
    <div class="uk-inline">
        <a class="uk-button uk-button-default uk-text-muted" href="{{ route('modes') }}">Back</a>
        <a class="uk-button uk-button-default uk-text-primary" href="{{ route('modes.edit', ['id' => $mode->id]) }}">Edit</a>
        <form class="uk-display-inline-block" action="{{ route('modes.delete', ['id'=> $mode->id]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="uk-button uk-button-default uk-text-danger">Delete</button>
        </form>
    </div>
@endsection