@extends('layouts.layout-second')
@section('title','Reset Password')
@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('public/carrier/assets/media/bg/banner.png')}}');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="https://i0.wp.com/classaclub.com/wp-content/uploads/2022/03/logo.png?fit=128%2C63&ssl=1" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="card login-card text-left">
                        <div class="card-body">
                            <div class="login-signin">

                                    <div class="row text-left signin-card">
                                        <div class="col-md-12">
                                            <div class="mb-8">
                                                <h2>Reset Password</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('password.update') }}" class="form" >
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input id="email" type="hidden" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        <div class="form-group mb-10">
                                            <label class="lable-control field-bold">
                                               Password
                                            </label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-10">
                                            <label class="lable-control field-bold">
                                              Confirm Password
                                            </label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-block btn-primary font-weight-bold px-9 py-4 ">Reset Password</button>
                                            </div>
                                        </div>

                                        <div class="row text-center mt-3">
                                            <div class="col-md-12">
                                                <p class="remember-password-link">Remember Password? <a href="{{url('/')}}" id="kt_login_signin_form" class="text-hover-primary forgot-password">Login ?</a></p>
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