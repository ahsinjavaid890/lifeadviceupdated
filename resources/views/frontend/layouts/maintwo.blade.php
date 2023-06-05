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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{--	<script src="{{ asset('public/front/js/jquery-3.5.1.slim.min.js') }}"></script>--}}
	<script src="{{ asset('public/front/js/popper.min.js') }}"></script>
	<link rel="icon" type="image/png" href="{{ url('public/images') }}/{{ Cmf::get_store_value('favicon') }}">    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	@yield('tittle')
  <input type="hidden" id="app_url" value="{{ url('') }}" name="">
</head>
	<body class="body-five">
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')

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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ load jQuery UI ✅ -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
  integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
		<div class="compare_header_top">

		</div>
	</body>
</html>
@yield('script')
