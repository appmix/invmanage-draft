@extends('layouts.app')

@section('content')
<div class="uk-section uk-preserve-color uk-flex">
    <div class="uk-container">

        <div class="uk-grid uk-margin-auto">
            <div class="uk-card uk-card-default uk-card-body">
                <h2 style="min-width: 300px;">Register</h2>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="uk-margin{{ $errors->has('name') ? ' uk-form-danger' : '' }}">
                        <label for="name" class="uk-form-label">Name</label>
                        <div>
                            <input id="name" type="name" class="uk-input" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin{{ $errors->has('email') ? ' uk-form-danger' : '' }}">
                        <label for="email" class="uk-form-label">E-Mail Address</label>
                        <div>
                            <input id="email" type="email" class="uk-input" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin{{ $errors->has('password') ? ' uk-form-danger' : '' }}">
                        <label for="password" class="uk-form-label">Password</label>
                        <div>
                            <input id="password" type="password" class="uk-input" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin{{ $errors->has('email') ? ' uk-form-danger' : '' }}">
                        <label for="password-confirm" class="uk-form-label">Confirm Password</label>
                        <div>
                            <input id="password-confirm" type="password-confirm" class="uk-input" 
                                name="password-confirm" value="{{ old('password-confirm') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password-confirm') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="uk-checkbox" 
                                        name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button class="uk-button uk-button-default">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
