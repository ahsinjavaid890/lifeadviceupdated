@extends('frontend.layouts.main')
@section('tittle')
<title>Sign in to your account</title>
@endsection

@section('content')
<link href="https://demo.mobiscroll.com/css/mobiscroll.jquery.min.css" rel="stylesheet" />
<script src="js/mobiscroll.jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJfzOqR9u2eyXv6OaiuExD3jzoBGGIVKY&libraries=geometry,places&v=weekly"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/select2.min.css')}}">
<link href="https://demo.mobiscroll.com/css/mobiscroll.jquery.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/applyform.css')}}">
<script src="{{ url('public/front/js/select2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="{{ url('public/front/tabs/js/selecttwo.js')}}"></script>
<style type="text/css">
    .customized-login-card{
        margin: auto;
        max-width: 648px;
        width: 90vw;
        min-width: 0;
        word-wrap: break-word;
        background: #fff;
        border: 1px solid #cfd9e8;
        box-shadow: 0 10px 24px rgba(87,106,134,.2);
        padding: 32px 24px;
        border-radius: 16px;
    }
    .invalid-feedback{
        display: block !important;
    }
    section{
        padding-top: 100px;
    }
    .sign-in--header{
        z-index: 0;
        margin-bottom: 1.5rem;
    }
    .heading-4{
        text-align: center;
        font-size: 1.5rem;
        line-height: 2rem;
        font-weight: 800;
        color: #2b3481 !important;
    }
    .subheader{
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
        border-radius: 16px!important;
    }
    .input{
        width: 100% !important;
    }
    .loginsigninbutton{
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
    hr{
        border-top: 3px solid rgba(0, 0, 0, .1) !important;
    }
</style>
<section class="chooses-blogs chooses-blogs-responsive choose-us-area-five pb-70" style="background-color:#f4f7fa;">
<div class="container-homepage container-blog">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div  class="sign-in--header">
                <h1  class="heading-4">Sign in to your account Via Secure Link</h1>
                <p  class="subheader text-secondary-color" style="color:red"> Secure Link is Invalid or you Open One Time Already (Because you can Login One Time Only Via Secure Link)</p>
            </div>
            <div class="customized-login-card">
                <div class="card-body">
                    <form method="POST" action="{{ url('sendsecurelink') }}">
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #2b3481; font-size: 16px; line-height: 24px; font-weight: 800;">Please Enter Your Email</label>
                            <div style=" color: #67778f; font-size: 14px; line-height: 24px; font-weight: 600; ">Enter the email you provided when you purchased the policy and we will send you a one-time-use Secure Link to sign in.</div>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-7 mt-4">
                            <div class="custom-form-control positionrelative">
                                <label class="selectlabeldateofbirth">Email Address</label>
                                <input class="input" type="text" value="{{ old('email') }}" placeholder="Email Address" name="email" data-placeholder="First Name">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-7 mt-4">
                            @if(session()->has('message'))
                            <div style=" color: #67778f; font-size: 12px; line-height: 20px; font-weight: 600; display: flex; " class="secure-sent">
                                <img style=" margin-right: 14px; " src="https://assets.visitorscoverage.com/production/app/img/icons/input-indicator-success.svg">
                                <p style=" color: #67778f; font-size: 12px; line-height: 20px; font-weight: 600; display: flex;">{{ session()->get('message') }}</p>
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
</section>
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#dateofbirthfull').mask('00/00/0000');
   });
</script>
@endsection