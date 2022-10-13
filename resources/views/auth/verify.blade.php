@extends('layouts.layout-second')
@section('title','Login')
@section('content')
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('public/carrier/assets/media/bg/banner.png')}}');">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="{{ url('') }}">
                        <img src="{{asset('public/admin/assets/media/custom/logo.png')}}" class="max-h-75px" alt="{{ env('APP_NAME') }}" />
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="card login-card text-left">
                    <div class="card-body">
                        <div class="login-signin">
                            <div class="row text-left signin-card">
                                <div class="col-md-12">
                                    <h2>Verify your Account</h2>
                                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},</p>
                                </div>
                            </div>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-block btn-primary font-weight-bold px-9 py-4">{{ __('Click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Login Sign in form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
@endsection