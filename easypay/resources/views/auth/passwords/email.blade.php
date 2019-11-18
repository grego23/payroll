@extends('layouts.app')

@section('content')

 <div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Reset Password</h3>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                     
                    <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="enter email address">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
           
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                </div>
            </div>
            </form>
        </div>
    </div>




@endsection
