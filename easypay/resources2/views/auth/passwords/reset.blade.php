@extends('layouts.app')

@section('content')

 <div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Reset Password</h3>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                      <div class="input-group mb-3">
                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="enter new password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          </div>
                    
                    <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                    </div>
                    <button class="btn btn-primary mb-4 shadow-2">Reset Password</button>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="sign-up.html">Signup</a></p>
                </div>
            </div>
            </form>
        </div>
    </div>


@endsection
