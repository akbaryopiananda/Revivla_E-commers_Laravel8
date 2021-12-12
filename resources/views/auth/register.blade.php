@extends('layouts.app')

@section('content')

<div class="login__section section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-block d-none">
                <div class="col-8 m-auto">
                    <img src="{{asset('/img/product/Frame 54.png')}}" alt="" class="login__image mb-4">
                    <p class="login__subtitle">Use Revivla to found your best fashion only
                        for you. </p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-8 col-12">

                        <form method="POST" class="form__login" action="{{ route('register') }}">
                            @csrf
                            <h1 class="login__title mb-5">Sign Up</h1>
                            
                            <label for="name" class="d-flex flex-column mb-3 text-md">
                                <span class="text-gray-700 text-sm">{{ __('Name') }}</span>
                                <input placeholder="Masukkan Nama Lengkap" id="name" type="text" class="input__custom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>

                            <label class="d-flex flex-column mb-3 text-md">
                                <span class="text-gray-700 text-sm">{{ __('E-Mail Address') }}</span>
                                <input placeholder="Masukkan Email" id="email" type="email" class="input__custom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                 @enderror
                            </label>

                            <label class="d-flex flex-column mb-3 text-md" for="password"> 
                                <span class="text-gray-700 text-sm">{{ __('Password') }}</span>
                                <input placeholder="Masukkan Password" id="password" type="password" class="input__custom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </label>

                            <label class="d-flex flex-column mb-3 text-md">
                                <span class="text-gray-700 text-sm">{{ __('Confirm Password') }}</span>
                                <input placeholder="Konfirmasi Password" id="password-confirm" type="password" name="password_confirmation" class="input__custom{{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="new-password">
                            </label>
                            <div class="mt-6">
                                <button type="submit" class="btn__login-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="flex justify-between items-center mt-4">
                                <a class="link" href="{{ route('login') }}">{{ trans('Sudah Punya Akun ?') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
