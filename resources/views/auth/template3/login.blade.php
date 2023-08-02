@extends('frontend.layouts.main')
@section('tittle')
    <title>Sign in to your account</title>
@endsection

@section('content')
    <link href="https://demo.mobiscroll.com/css/mobiscroll.jquery.min.css" rel="stylesheet" />
    <script src="js/mobiscroll.jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJfzOqR9u2eyXv6OaiuExD3jzoBGGIVKY&libraries=geometry,places&v=weekly">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/select2.min.css') }}">
    <link href="https://demo.mobiscroll.com/css/mobiscroll.jquery.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/applyform.css') }}">
    <script src="{{ url('public/front/js/select2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="{{ url('public/front/tabs/js/selecttwo.js') }}"></script>
    <style type="text/css">
        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: .5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        .containerr {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, .2), 0 10px 10px rgba(0, 0, 0, .2);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
            margin: auto
        }

        .form-containerr form {
            background: #fff;
            display: flex;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .social-containerr {
            margin: 20px 0;
        }

        .social-containerr a {
            border: 1px solid #ddd;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        .form-containerr input {
            background: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        button {
            border-radius: 20px;
            border: 1px solid #2b3481;
            background: #2b3481;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background: transparent;
            border-color: #fff;
        }

        .form-containerr {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all .6s ease-in-out;
        }

        .sign-in-containerr {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .sign-up-containerr {
            left: 0;
            width: 50%;
            z-index: 1;
            opacity: 0;
        }

        .overlay-containerr {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform .6s ease-in-out;
            z-index: 100;
        }

        .overlay {
            background: #10725e;
            background: linear-gradient(to right, #1BBC9B, #169c81) no-repeat 0 0 / cover;
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateY(0);
            transition: transform .6s ease-in-out;
        }

        .overlay-panel {
            position: absolute;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
            height: 100%;
            width: 50%;
            text-align: center;
            transform: translateY(0);
            transition: transform .6s ease-in-out;
        }

        .overlay-right {
            right: 0;
            transform: translateY(0);
        }

        .overlay-left {
            transform: translateY(-20%);
        }

        /* Move signin to right */
        .containerr.right-panel-active .sign-in-containerr {
            transform: translateY(100%);
        }

        /* Move overlay to left */
        .containerr.right-panel-active .overlay-containerr {
            transform: translateX(-100%);
        }

        /* Bring signup over signin */
        .containerr.right-panel-active .sign-up-containerr {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
        }

        /* Move overlay back to right */
        .containerr.right-panel-active .overlay {
            transform: translateX(50%);
        }

        /* Bring back the text to center */
        .containerr.right-panel-active .overlay-left {
            transform: translateY(0);
        }

        /* Same effect for right */
        .containerr.right-panel-active .overlay-right {
            transform: translateY(20%);
        }

        .sign-in--header {
            z-index: 0;
            margin-bottom: 1.5rem;
        }

        .heading-4 {
            text-align: center;
            font-size: 1.5rem;
            line-height: 2rem;
            font-weight: 800;
            color: #2b3481 !important;
        }

        .subheader {
            text-align: center;
            font-size: 16px;
            margin-top: 16px;
            max-width: 580px;
            margin: 20px auto 0;
        }

        .invalid-feedback {
            display: block !important;
            text-align: start;
        }

        .headlogo {
            position: inherit;
            z-index: 99;
            top: 0;
            left: 0;
            right: 0;
        }

        .headlogo .navbar-dark a {
            color: grey;
        }

        
    </style>
    <section class="chooses-blogs chooses-blogs-responsive choose-us-area-five pb-70" style="background-color:#f4f7fa;">
        <div class="container-homepage container-blog">
            <div class="row justify-content-center" style="padding-top: 100px">
                <div class="col-md-8">
                    <div class="sign-in--header">
                        <h1 class="heading-4">Sign in to your account</h1>
                        <p class="subheader text-secondary-color"> Sign in with your Policy ID and Date of Birth below and
                            get easy, 24/7 access to manage your policy details, documents, and more! </p>
                    </div>
                    <div class="customized-login-card">
                        <div class="card-body">
                            {{-- #### New login ##### --}}
                            <div class="containerr" id="containerr">
                                <div class="form-containerr sign-up-containerr">
                                    <form method="POST" action="{{ url('sendsecurelink') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label
                                                    style="color: #2b3481; font-size: 16px; line-height: 24px; font-weight: 800;">Don’t
                                                    remember your Policy ID?</label>
                                                <div
                                                    style=" color: #67778f; font-size: 14px; line-height: 24px; font-weight: 600; ">
                                                    Enter the email you provided when you purchased the policy and we will
                                                    send you a one-time-use Secure Link to sign in.</div>
                                            </div>
                                            <div class="col-md-12 mt-4 mb-2">
                                                <div class="custom-form-control positionrelative">
                                                    <label class="">Email Address</label>
                                                    <input class="input" type="text" value="{{ old('email') }}"
                                                        placeholder="" name="email" data-placeholder="First Name">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                @if (session()->has('message'))
                                                    <div style=" color: #67778f; font-size: 12px; line-height: 20px; font-weight: 600; display: flex; "
                                                        class="secure-sent">
                                                        <img style=" margin-right: 14px; "
                                                            src="https://assets.visitorscoverage.com/production/app/img/icons/input-indicator-success.svg">
                                                        <p
                                                            style=" color: #67778f; font-size: 12px; line-height: 20px; font-weight: 600; display: flex;">
                                                            {{ session()->get('message') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-12 mb-2 text-right">
                                                <button class="loginsigninbutton w-100"> Send Secure Link </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-containerr sign-in-containerr">
                                    <form method="POST" action="{{ url('customlogin') }}">
                                        @csrf
                                        <h2 style="color: #3D4B5D;font-size:28px">Reffrence ID</h2>
                                        <a style="color: #1b8fe4; font-weight: 600;font-size: .875rem;line-height: 1.5rem;"
                                            data-toggle="modal" data-target="#whereismypolicyid"
                                            href="javascript:void(0)">Where's my Policy Reffrence ID?</a>
                                        <input
                                            @if (session()->has('reffrence_id')) value="{{ session()->get('reffrence_id') }}"
                                @else
                                 value="{{ old('reffrence_id') }}" @endif
                                            class="input" type="text" placeholder="Policy Reffrence ID"
                                            name="reffrence_id">
                                        @error('reffrence_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        @if (session()->has('policynumberwrong'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ session()->get('policynumberwrong') }}</strong>
                                            </span>
                                        @endif
                                        <input
                                            @if (session()->has('date_of_birth')) value="{{ session()->get('date_of_birth') }}"
                            @else
                             value="{{ old('date_of_birth') }}" @endif
                                            id="dateofbirthfull" class="input" type="text" placeholder="MM/DD/YYYY"
                                            name="date_of_birth">
                                        @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if (session()->has('dateofbirthwrongwrong'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ session()->get('dateofbirthwrongwrong') }}</strong>
                                            </span>
                                        @endif
                                        <div class="my-3">
                                            <div
                                                style=" font-size: .875rem; line-height: 1.5rem; color: #67778f; font-weight: 600; ">
                                                <strong>Note:</strong> If you previously created an account with your Email
                                                Address, you can now simply login with your Policy ID and Date of Birth.
                                            </div>
                                        </div>
                                        <button>Sign In</button>
                                    </form>
                                </div>
                                <div class="overlay-containerr">
                                    <div class="overlay">
                                        <div class="overlay-panel overlay-left">
                                            <h2 style="color: white"> Reffrence ID</h2>
                                            <p>If you previously created an account with your Email Address, you can now
                                                simply login with your Policy ID and Date of Birth.</p>
                                            <button class="ghost" id="signIn">Sign In</button>
                                        </div>
                                        <div class="overlay-panel overlay-right">
                                            <h2 style="color: white">Secure Login</h2>
                                            <p> Enter the email you provided when you purchased the policy and we will
                                                send you a one-time-use Secure Link to sign in.</p>
                                            <button class="ghost" id="signUp">Secure Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ################ --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="whereismypolicyid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-md modal-dialog-centered" role="document">
                <div class="modal-content"
                    style="max-width: 700px !important; border-left: 5px solid #2b3481; border-radius: 20px; ">
                    <div class="modal-header" style="border-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h1 style="text-align: center; font-size: 2rem; line-height: 2.5rem; color: #2b3481; ">Where's my
                            Policy Reffrence ID?</h1>

                        <div class="mt-5"
                            style="max-width: 70%;
    margin: auto;
    border: 1px solid #c2cad7;
    box-shadow: 0 4px 16px rgba(87,106,134,.15);
    border-radius: 8px;"
                            class="main-image">
                            <img style="box-shadow: 0 4px 16px rgba(87,106,134,.15); border-radius: 8px; "
                                src="{{ url('public/images/policyreffrenceid.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const containerr = document.getElementById('containerr');

        signUpButton.addEventListener('click', () =>
            containerr.classList.add('right-panel-active'));

        signInButton.addEventListener('click', () =>
            containerr.classList.remove('right-panel-active'));
    </script>

    <script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dateofbirthfull').mask('00/00/0000');
        });
    </script>
@endsection
