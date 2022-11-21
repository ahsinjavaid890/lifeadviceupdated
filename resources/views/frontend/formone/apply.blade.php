@extends('frontend.layouts.main')
@section('content')
<style type="text/css">
	.tabshead{
		margin-top: 67px;
	}
</style>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/tab_style.css') }}">
<section class="tabshead">
	<div class="container">
		<div class="row tabs">
			<div class="col-md-4 col-xs-4 text-center information_qoutes">
				<button class="btn">
					<i class="fa fa-user"></i> Information
				</button>
			</div>
			<div class="col-md-4 col-xs-4 text-center price_qoutes">
				<button class="btn ">
					<i class="fa fa-shopping-cart"></i> Quotes
				</button>
			</div>
			<div class="col-md-4 col-xs-4 text-center apply_qoutes">
				<button class="btn active">
					<i class="fa fa-edit"></i> Apply / Buy
				</button>
			</div>
		</div>
	</div>
</section>

@endsection