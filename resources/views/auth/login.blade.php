@extends('layouts.app')

@section('content')

<section class="login">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">{{ __('E-Mail Address') }}</label>

            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label for="password">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="rememberme">

                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">{{ __('Remember Me') }} </label>

            </div>

            <input type="submit" value="{{ __('Login') }}">

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
    </form>

</section>


@endsection
