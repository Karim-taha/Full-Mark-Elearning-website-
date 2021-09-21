@extends('layouts.general')

@section('main-body')
@section('register')

<div class="container-fluid" style="background-color:#d1d8e0; min-height:110vh">
    <div>
        <img src="{{ asset('media/Logo_2.png') }}" style="display: block;
    margin-left: auto;
    margin-right: auto; padding-top:70px" alt="logo" />
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6   offset-md-3">
                                <a href="{{route('login.google')}}" class="btn btn-danger btn-block">
                                    Register with in Google
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6   offset-md-3">
                                <a href="login/facebook" class="btn btn-primary btn-block">
                                    Register with in Facebook
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6   offset-md-3">
                                <a href="/sign-in/github" class="btn btn-secondary btn-block">
                                    Register with in GitHub
                                </a>
                            </div>
                        </div>
                        <p class="text-center m-4 h6">OR</p>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" style="border: 1px solid #6ab04c" type="text" class="form-control
                                @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" style="border: 1px solid #6ab04c" type="email" class="form-control
                                @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="border: 1px solid #6ab04c" type="password" class="form-control
                                @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" style="border: 1px solid #6ab04c" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            <div class="col-md-6">
                                <input id="birthday" style="border: 1px solid #6ab04c" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" required autocomplete>

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="government" class="col-md-4 col-form-label text-md-right">{{ __('Government') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="government" type="text" class="form-control
                                @error('government') is-invalid @enderror"
                                name="government" required autocomplete> --}}

<!-------------------------------------------------------------------------------------------------------------------- -->

<select class="form-control" name="government" required autocomplete @error('government') is-invalid @enderror
 id="government"
 style="width: 50%; border: 1px solid #6ab04c;
border-radius: 0.4em;
padding: 0.25em 0.5em;
font-size: 1.1rem;
cursor: pointer;
line-height: 1.1;">
    <?php $govs = [
      'Alexandria',
      'Aswan',
      'Asyut',
      'Beheira',
      'Beni Suef',
      'Cairo',
      'Dakahlia',
      'Damietta',
      'Faiyum',
      'Gharbia',
      'Giza',
      'Ismailia',
      'Kafr El Sheikh',
      'Luxor',
      'Matruh',
      'Minya',
      'Monufia',
      'New Valley',
      'North Sinai',
      'Port Said',
      'Qalyubia',
      'Qena',
      'Red Sea',
      'Sharqia',
      'Sohag',
      'South Sinai',
      'Suez',
    ];
    foreach ($govs as $gov) {
      echo "<option value='$gov'>$gov</option>";
    }
    ?>
  </select>



<!-------------------------------------------------------------------------------------------------------------------- -->
                                @error('government')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
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
