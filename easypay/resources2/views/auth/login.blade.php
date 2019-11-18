@extends('layouts.app')

@section('content')
<div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img src="{{ asset('assets/images/easy.jpg')}}" width="250"/>
                        <!--<i class="feather icon-unlock auth-icon"></i>-->
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <h3 class="mb-4">{{ __('Login') }}</h3>
                    <div class="input-group mb-4">
                   
                    
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="enter email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-group mb-4">
                    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="enter your password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4" style="width:100%;">Login</button>
                    <p class="mb-2 text-muted">  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif</p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" style="">Signup</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
