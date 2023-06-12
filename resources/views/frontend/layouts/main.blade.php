<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<link rel="stylesheet" href="{{ asset('public/front/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/boxicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/flaticon.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css">
	<link rel="stylesheet" href="{{ asset('public/front/css/meanmenu.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/odometer.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/time.css') }}">
	<link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}">
	<script src="{{ asset('public/front/js/jquery-3.5.1.slim.min.js') }}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ url('public/images') }}/{{ Cmf::get_store_value('favicon') }}">    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	@yield('tittle')
  	<style type="text/css">
  		/*#loading {
				  position: fixed;
				  display: block;
				  width: 100%;
				  height: 100%;
				  top: 0;
				  left: 0;
				  text-align: center;
				  opacity: 1;
				  background-color: #dddd;
				  z-index: 99;
				}
				.loading-div{
					position: absolute;
			    left: 35%;
			    top: 50%;
			    z-index: 100;
			    background-color: #3a5371;
			    padding: 10px;
			    border-radius: 15px;
				}
				.loading-image{
					margin-bottom: 15px;
			    background-color: white;
			    border-radius: 10px;
			    padding: 10px;
				}*/
  	</style>
</head>
	<body class="body-five">
		<!-- <div id="loading">
			<div class="loading-div">
				<img id="loading-image" src="{{ url('public/images/118135255.png') }}" alt="Loading..." />
				<h1>Finding the best plans for you</h1>
			</div>
		  
		</div> -->
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')
		<script src="{{ asset('public/front/js/popper.min.js') }}"></script>
		<script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.meanmenu.js') }}"></script>
		<script src="{{ asset('public/front/js/wow.min.js') }}"></script>
		<script src="{{ asset('public/front/js/owl.carousel.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('public/front/js/parallax.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.mixitup.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('public/front/js/odometer.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('public/front/js/form-validator.min.js') }}"></script>
		<script src="{{ asset('public/front/js/contact-form-script.js') }}"></script>
		<script src="{{ asset('public/front/js/custom.js') }}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
		<div class="compare_header_top">

		</div>
	</body>
</html>
@yield('script')