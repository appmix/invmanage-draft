@extends('layouts.content')

@section('content-inner')
    <h3>{{ $group->name }}</h3>
    <div class="uk-inline">
        <a class="uk-button uk-button-default uk-text-muted" href="{{ route('groups') }}">Back</a>
        <a class="uk-button uk-button-default uk-text-primary" href="{{ route('groups.edit', ['id' => $group->id]) }}">Edit</a>
        <form class="uk-display-inline-block" action="{{ route('groups.delete', ['id'=> $group->id]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="uk-button uk-button-default uk-text-danger">Delete</button>
        </form>
    </div>
@endsection