@extends('layouts.auth')

@section('content')


    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" autocomplete="email"
                           placeholder="{{ __('E-Mail Address') }}" required="" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="{{ __('Password') }}" autocomplete="current-password" required="">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="checkbox m-r-xs">
                    <label class="form-check" for="remember">
                        <input type="checkbox" class="form-control" name="remember" style="margin-left: 63px;
    margin-top: -8px;"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        <small>{{ __('Forgot Your Password?') }}</small>
                    </a>
                @endif

                <p class="text-muted text-center">
                    <small>Do not have an account?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="register">Create an account</a>
            </form>
            <p class="m-t">
                <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
            </p>
        </div>
    </div>
@endsection
