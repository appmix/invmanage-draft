@extends('layouts.content')

@section('content-inner')
    <h3>{{ $type->name }}</h3>
    <div class="uk-inline">
        <a class="uk-button uk-button-default uk-text-muted" href="{{ route('types') }}">Back</a>
        <a class="uk-button uk-button-default uk-text-primary" href="{{ route('types.edit', ['id' => $type->id]) }}">Edit</a>
        <form class="uk-display-inline-block" action="{{ route('types.delete', ['id'=> $type->id]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="uk-button uk-button-default uk-text-danger">Delete</button>
        </form>
    </div>
@endsection