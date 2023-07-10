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
        .customized-login-card {
            margin: auto;
            max-width: 648px;
            width: 90vw;
            min-width: 0;
            word-wrap: break-word;
            background: #fff;
            border: 1px solid #cfd9e8;
            box-shadow: 0 10px 24px rgba(87, 106, 134, .2);
            padding: 32px 24px;
            border-radius: 16px;
        }

        .invalid-feedback {
            display: block !important;
        }

        strong {
            text-transform: capitalize;
        }

        section {
            padding-top: 100px;
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

        .blank-card {
            max-width: 648px;
            margin: auto;
            height: 90% !important;
            /* margin-top: 35px; */
            border: 1px solid #c8cdd2;
            border-radius: 10px;
            padding: 30px 48px;
            border-radius: 16px !important;
        }

        .input {
            width: 100% !important;
        }

        .loginsigninbutton {
            height: 40px;
            font-size: 14px;
            font-weight: 700;
            padding: 8px 24px;
            border-radius: 20px;
            color: #fff;
            background-color: #2b3481;
            line-height: 18px;
            border: 0;
            transition: .3s ease-in-out;
            outline: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        hr {
            border-top: 3px solid rgba(0, 0, 0, .1) !important;
        }
    </style>

    <section class="chooses-blogs chooses-blogs-responsive choose-us-area-five pb-70" style="background-color:#f4f7fa;">
        <div class="container-homepage container-blog">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="sign-in--header">
                        <h1 class="heading-4">Sign in to your account</h1>
                        <p class="subheader text-secondary-color"> Sign in with your Policy ID and Date of Birth below and
                            get easy, 24/7 access to manage your policy details, documents, and more! </p>
                    </div>
                    <div class="customized-login-card">
                        <div class="card-body">
                            <form method="POST" action="{{ url('customlogin') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 nopad">
                                        <div class="custom-form-control positionrelative">
                                            <label class="selectlabeldateofbirth">Policy Reffrence ID</label>
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
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopad">
                                        <div class="custom-form-control positionrelative">
                                            <label class="selectlabeldateofbirth">Date of Birth</label>
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

                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <a style="color: #1b8fe4; font-weight: 600;font-size: .875rem;line-height: 1.5rem;"
                                            data-toggle="modal" data-target="#whereismypolicyid"
                                            href="javascript:void(0)">Where's my Policy Reffrence ID?</a>
                                    </div>
                                    <div class="col-md-9 mt-3">
                                        <div
                                            style=" font-size: .875rem; line-height: 1.5rem; color: #67778f; font-weight: 600; ">
                                            <strong>Note:</strong> If you previously created an account with your Email
                                            Address, you can now simply login with your Policy ID and Date of Birth. </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <button class="loginsigninbutton">Sign In</button>
                                    </div>
                                </div>
                            </form>
                            <div class="mt-5 mb-3">
                                <hr>
                            </div>
                            <form method="POST" action="{{ url('sendsecurelink') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label
                                            style="color: #2b3481; font-size: 16px; line-height: 24px; font-weight: 800;">Don’t
                                            remember your Policy ID?</label>
                                        <div
                                            style=" color: #67778f; font-size: 14px; line-height: 24px; font-weight: 600; ">
                                            Enter the email you provided when you purchased the policy and we will send you
                                            a one-time-use Secure Link to sign in.</div>
                                    </div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7 mt-4">
                                        <div class="custom-form-control positionrelative">
                                            <label class="selectlabeldateofbirth">Email Address</label>
                                            <input class="input" type="text" value="{{ old('email') }}"
                                                placeholder="Email Address" name="email" data-placeholder="First Name">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-4">
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
                                    <div class="col-md-5 mt-4 text-right">
                                        <button class="loginsigninbutton"> Send Secure Link </button>
                                    </div>
                                </div>
                            </form>
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
    <script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dateofbirthfull').mask('00/00/0000');
        });
    </script>
@endsection
