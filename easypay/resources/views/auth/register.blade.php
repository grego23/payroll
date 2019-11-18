@extends('layouts.app')

@section('content')
<div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                          <img src="{{ asset('assets/images/easy.jpg')}}" width="250"/>
                        <!--<i class="feather icon-user-plus auth-icon"></i>-->
                    </div>
                    <h3 class="mb-4">Sign Up</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="input-group mb-3">

                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Fullnames" >

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="input-group mb-3">

                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" >

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="input-group mb-3">
                    <input id="phone" type="phone-number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone Number"  autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                       
                    </div>
                    <div class="input-group mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password" >

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="input-group mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password" >
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                            <label for="checkbox-fill-2" class="cr">I agree to the <a href=""> Terms </a> of use.</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4" style="width:100%;">Sign up</button>
                    <p class="mb-0 text-muted">Allready have an account? <a href="{{ route('login') }}"> Log in</a></p>
                </div>
            </div>
            <form>
        </div>
    </div>






@endsection
