@extends('layouts.content')

@section('content-inner')
@auth
    <h2>Groups</h2>
    <table class="uk-table uk-table-divider">
        <tbody>
            @foreach($groups as $group)
                <tr>
                    <td><a href="{{ route('groups.show', ['id' => $group->id]) }}">{{ $group->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('groups.create') }}" class="btn btn-outline-success">Create new</a>
@else
    You should be logged in to view this page
@endauth
@endsection