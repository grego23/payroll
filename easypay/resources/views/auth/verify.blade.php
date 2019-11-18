@extends('layouts.app')

@section('content')

 <div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
               
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4">{{ __('Verify Your Email Address') }}</h3>

                     @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                     {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                 
                 
        </div>
    </div>

@endsection
