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

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                    @csrf

                    <div class="text-center">
                        <h3>{{ __('Reset Password') }}</h3>
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
                        <button class="btn btn-small btn-dark-solid full-width btn-rounded" id="submit" type="submit" name="submit" value="reset">{{ __('Send Password Reset Link') }}</button>
                    </div>


                </form>
            </div>
        </div>

    </div>
@endsection
