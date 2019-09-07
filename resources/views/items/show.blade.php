@extends('layouts.content')

@section('content-inner')
    <h3>{{ $item->name }}</h3>
    <div class="uk-inline">
        <a class="uk-button uk-button-default uk-text-muted" href="{{ route('items') }}">Back</a>
        <a class="uk-button uk-button-default uk-text-primary" href="{{ route('items.edit', ['id' => $item->id]) }}">Edit</a>
        <form class="uk-display-inline-block" action="{{ route('items.delete', ['id'=> $item->id]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="uk-button uk-button-default uk-text-danger">Delete</button>
        </form>
    </div>
@endsection