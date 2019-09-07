@extends('layouts.app')

@section('content')
<div class="uk-section uk-preserve-color uk-flex">
    <div class="uk-container">

        <div class="uk-grid uk-margin-auto">
            <div class="uk-card uk-card-default uk-card-body">
                <h2>Login</h2>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

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

                    

                    <div class="uk-margin">
                        <div>
                            <button class="uk-button uk-button-default">
                                Login
                            </button>

                            <a class="uk-button uk-button-default" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
