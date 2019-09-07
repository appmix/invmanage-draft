@extends('layouts.content')

@section('content-inner')
    <h2>Dashboard</h2>

    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
 
@endsection
