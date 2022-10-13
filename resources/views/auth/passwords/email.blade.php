@extends('layouts.layout-second')
@section('title','Forgotten Password')
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
                                                <h2>Forgotten Password?</h2>
                                                <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
                                            </div>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('password.email') }}" class="form" >
                                        @csrf
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="form-group mb-10">
                                            <label class="lable-control field-bold">
                                                Email Address
                                            </label>
                                            <input class="form-control @error('email') is-invalid @enderror form-control-solid h-auto py-4 px-8" type="text" name="email" autocomplete="off" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-block btn-primary font-weight-bold px-9 py-4 ">Send Reset Link</button>
                                            </div>
                                        </div>

                                        <div class="row text-center mt-3">
                                            <div class="col-md-12">
                                                <p class="remember-password-link">Remember Password? <a href="{{url('login')}}" id="kt_login_signin_form" class="text-hover-primary forgot-password">Login ?</a></p>
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