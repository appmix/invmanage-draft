@extends('layouts.content')

@section('content-inner')
    <h3>{{ $location->name }}</h3>
    <div class="uk-inline">
        <a class="uk-button uk-button-default uk-text-muted" href="{{ route('locations') }}">Back</a>
        <a class="uk-button uk-button-default uk-text-primary" href="{{ route('locations.edit', ['id' => $location->id]) }}">Edit</a>
        <form class="uk-display-inline-block" action="{{ route('locations.delete', ['id'=> $location->id]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="uk-button uk-button-default uk-text-danger">Delete</button>
        </form>
    </div>
@endsection