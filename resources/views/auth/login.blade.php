@extends('layouts.app')

@section('content')

@if(session('message'))
        <div class="alert success">
            {{ session('message') }}
        </div>
    @endif


    <div class="login__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="col-8 m-auto">
                        <img src="{{asset('img/product/Frame 70.png')}}" alt="" class="login__image mb-4">
                        <p class="login__subtitle">Use Revivla to found your best fashion only
                            for you. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-8 col-12">

                            <form method="POST" action="{{ route('login') }}" class="form__login">
                                @csrf
                                <h1 class="login__title mb-5">Sign In</h1>
                                <div class="d-flex flex-column mb-3">
                                    <label for="" class="label__login mb-2">E-Mail Address</label>
                                    <input placeholder="Input Your Email" type="email" name="email" id="email" class="input__custom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="d-flex flex-column mb-5">
                                    <label for="" class="label__login mb-2">Password</label>
                                    <input placeholder="Input Your Password" type="password" name="password"  id="password" class="input__custom @error('password') is-invalid @enderror" required autocomplete="current-password">
                                    @if($errors->has('password'))
                                        <p class="invalid-feedback">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <p>Dont Have an Account?, You can Sign Up in <a href="/register">here</a></p>
                                <button type="submit" class="btn__login-primary mb-4">
                                    Login <br>
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
