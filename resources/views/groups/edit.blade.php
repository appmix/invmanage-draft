@extends('layouts.content')

@section('content-inner')
    <h2>Edit group</h2>
    <form action="{{ route('groups.update', ['id' => $group->id]) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="uk-margin{{ $errors->has('name') ? ' uk-form-danger' : '' }}">
            <label for="name" class="uk-form-label">Name</label>
            <div>
                <input id="name" type="group" class="uk-input" name="name" value="{{ $group->name }}" required autofocus>

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