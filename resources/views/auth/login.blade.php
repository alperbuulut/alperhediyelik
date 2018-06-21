@extends('layouts.app')

@section('content')
    <div class="login login-bg">

        <div class="container">
            <div class="login-logo text-center">
                <a href="#">
                    {{--<img class="retina" src="{{ asset('img/logo.png') }}" alt="">--}}
                </a>
            </div>
            <div class="login-box btn-rounded login-bg-input border-less-input">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <div class="text-center">
                        <h3>LOGIN</h3>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required>


                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-small btn-dark-solid full-width btn-rounded" id="login-form-submit" type="submit" name="login-form-submit" value="login">{{ __('Login') }}</button>
                    </div>
                    <div class="login-social-link">
                        <a href="javascript:void(0)" class="facebook">
                            Facebook
                        </a>
                        <a href="javascript:void(0)" class="twitter">
                            Twitter
                        </a>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                        <a class="pull-right" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>


                </form>
            </div>
        </div>

    </div>
@endsection
