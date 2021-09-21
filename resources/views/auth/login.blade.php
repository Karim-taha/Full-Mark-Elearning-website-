@extends('layouts.general')

@section('main-body')
@section('register')
<div class="container-fluid" style="background-color:#f1f2f6; min-height:110vh">
    <div>
        <img src="{{ asset('media/Logo_2.png') }}" style="display: block;
    margin-left: auto;
    margin-right: auto; padding-top:70px" alt="logo" />
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6   offset-md-3">
                                <a href="{{route('login.google')}}" class="btn btn-danger btn-block">
                                    login with in Google
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6   offset-md-3">
                                <a href="login/facebook" class="btn btn-primary btn-block">
                                    login with in Facebook
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6   offset-md-3">
                                <a href="/sign-in/github" class="btn btn-secondary btn-block">
                                    login with in GitHub
                                </a>
                            </div>
                        </div>
                        <p class="text-center m-4 h6">OR</p>
                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-6   offset-md-3">
                                <input id="email" type="email" style="border: 1px solid #6ab04c" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6   offset-md-3">
                                <input id="password" style="border: 1px solid #6ab04c" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endsection
