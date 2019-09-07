@extends('layouts.content')

@section('content-inner')
@auth
    <h2>Locations</h2>
    <table class="uk-table uk-table-divider">
        <tbody>
            @foreach($locations as $location)
                <tr>
                    <td><a href="{{ route('locations.show', ['id' => $location->id]) }}">{{ $location->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('locations.create') }}" class="btn btn-outline-success">Create new</a>
@else
    You should be logged in to view this page
@endauth
@endsection