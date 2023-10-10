@include('frontend.companypages.includes.mettatittle')
@extends('frontend.layouts.main')
@section('content')
<style type="text/css">
	.btn{
		border-radius: 10px !important;
	}
</style>
<style type="text/css">
	.tabshead{
		margin-top: 67px;
	}
	.wrapper-dropdown{
		top: 22px !important;
		width: 94% !important;
	}
	@media only screen and (max-width: 600px)
	{
		.col-xs-4 {
		    width: 33%;
		    padding: 0 5px !important;
		}
	}
</style>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/daterangepicker/daterangepicker.css')}}" />
<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/front/css/bootstraptwo.min.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/essentials.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/tab_style.css') }}">
<section class="tabscontent" style="padding-top: 90px !important;">
	@if($fields['form_layout'] == 'layout_1')
		@include('frontend.travelinsurance.includes.form-one-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_2')
		@include('frontend.travelinsurance.includes.form-two-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_3')
		@include('frontend.formone.includes.formlayoutthree')
	@elseif($fields['form_layout'] == 'layout_4')
		@include('frontend.travelinsurance.includes.form-four-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_5')
		@include('frontend.travelinsurance.includes.form-five-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_6')
		@include('frontend.travelinsurance.includes.form-six-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_7')
		@include('frontend.travelinsurance.includes.form-seven-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@endif
</section>
@endsection