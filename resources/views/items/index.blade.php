@extends('layouts.content')

@section('content-inner')
@auth
    <h2>Items</h2>
    <table class="uk-table uk-table-divider">
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td><a href="{{ route('items.show', ['id' => $item->id]) }}">{{ $item->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('items.create') }}" class="btn btn-outline-success">Create new</a>
@else
    You should be logged in to view this page
@endauth
@endsection