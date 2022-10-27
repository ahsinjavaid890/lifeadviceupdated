@extends('frontend.layouts.main')
@section('content')
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/daterangepicker/daterangepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/bootstraptwo.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/essentials.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/tab_style.css') }}">
<section class="tabshead">
	<div class="container">
		<div class="row tabs">
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn active" onclick="window.location='tab_info.php'">
					<i class="fa fa-user"></i> Information
				</button>
			</div>
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn " onclick="window.location='tab_coverage.php'">
					<i class="fa fa-umbrella"></i> Coverage
				</button>
			</div>
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn " onclick="window.location='tab_quotes.php'">
					<i class="fa fa-shopping-cart"></i> Quotes
				</button>
			</div>
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn ">
					<i class="fa fa-edit"></i> Apply / Buy
				</button>
			</div>
		</div>
	</div>
</section>
<section class="tabscontent">
@include('frontend.formone.includes.formlayoutone')
</section>
@endsection