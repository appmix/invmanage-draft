@extends('layouts.content')

@section('content-inner')
    <h2>Create new type</h2>
    <form action="{{ route('types.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="uk-margin{{ $errors->has('name') ? ' uk-form-danger' : '' }}">
            <label for="name" class="uk-form-label">Name</label>
            <div>
                <input id="name" type="type" class="uk-input" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-default">
                Save
            </button>
        </div>
    </form>

@endsection