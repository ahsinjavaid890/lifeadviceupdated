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
                                    <h2>Sign In</h2>
                                    <p>New Here ? <a href="{{ route('register') }}">Create Account</a></p>
                                </div>
                            </div>
                            @if(session()->has('warning'))
                                <div style="text-align: center;color: red;" id="result">{{ session()->get('warning') }}</div>
                             @endif
                            <form class="form mt-4" id="kt_login_signin_form" method="POST" action="{{ route('login') }}">
                                 @csrf
                                <div class="form-group mb-5">
                                    <label class="lable-control field-bold">
                                        Email
                                    </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror h-auto form-control-solid py-4 px-8" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label class="lable-control field-bold">
                                        Password
                                    </label>
                                    <input id="password" type="password" class=" h-auto form-control-solid py-4 px-8 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="checkbox-inline">
                                        <label for="remember" class="checkbox m-0 text-muted">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span></span>
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" id="kt_login_forgot" class="text-hover-primary forgot-password">Forget Password ?</a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary font-weight-bold px-9 py-4">Sign In</button>
                                    </div>      
                                </div>
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
