@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
    @include('frontend.companypages.includes.main')
    @include('frontend.companypages.includes.sectiontwonew')
    @include('frontend.companypages.includes.sectionthreenew')
    <section style="background-color:#f7f7f9;" class="pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div  class="col-md-6 image-center">
                   <img style="height:400px;" src="{{ url('public/images/termsandconditionsectionthree.png') }}">
               </div>
               <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('public/images/Section3_icon3.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3>Your current income that needs to be replaced when you’re gone.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('public/images/Section3_icon3.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3>How long you want coverage to last How many dependents you have and their future needs.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('public/images/Section3_icon3.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3>Debts you have that will need to be paid off, including mortgage debt, car loans, credit card debt and medical bills.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('public/images/Section3_icon3.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3>The cost of your final expenses.</h3>
                    </div>
                </div>
            </div>
           </div>
       </div>
    </section>
    <style type="text/css">
        .claim-process img{
            height: 400px;
        }
        .imageside{
            text-align: center;
        }
    </style>
@endsection