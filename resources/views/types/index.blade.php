@extends('layouts.content')

@section('content-inner')
@auth
    <h2>Types</h2>
    <table class="uk-table uk-table-divider">
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td><a href="{{ route('types.show', ['id' => $type->id]) }}">{{ $type->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('types.create') }}" class="btn btn-outline-success">Create new</a>
@else
    You should be logged in to view this page
@endauth
@endsection