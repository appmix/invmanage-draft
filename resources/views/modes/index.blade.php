@extends('layouts.content')

@section('content-inner')
@auth
    <h2>Modes</h2>
    <table class="uk-table uk-table-divider">
        <tbody>
            @foreach($modes as $mode)
                <tr>
                    <td><a href="{{ route('modes.show', ['id' => $mode->id]) }}">{{ $mode->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('modes.create') }}" class="btn btn-outline-success">Create new</a>
@else
    You should be logged in to view this page
@endauth
@endsection