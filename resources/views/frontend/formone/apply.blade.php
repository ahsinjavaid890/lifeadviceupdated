@extends('frontend.layouts.main')
@section('tittle')
<title>Apply</title>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/select2.min.css')}}">
<link href="https://demo.mobiscroll.com/css/mobiscroll.jquery.min.css" rel="stylesheet" />
<script src="js/mobiscroll.jquery.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJfzOqR9u2eyXv6OaiuExD3jzoBGGIVKY&libraries=geometry,places&v=weekly"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<style type="text/css">
	.applyformfirstsection{
		padding-top: 150px;
		background-color: #2b3481;
		padding-bottom: 50px;
	}
	.applyformfirstsection h1{
		color: white;
	}
	.formsection{
		background-color: #eeeded;
	}
</style>
<section class="applyformfirstsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Please Fill the Form</h1>
			</div>
		</div>
	</div>
</section>
<section class="formsection p-10">
	<div class="container">
		<form action="{{ url('applyqoute') }}" method="post" class="f1">
			@csrf
			<input type="hidden" name="coverage" value="{{ $request->coverage }}">
			<input type="hidden" name="deductibles" value="{{$request->deductibles}}">
			<input type="hidden" name="deductible_rate" value="{{ $request->deductible_rate }}">
			<input type="hidden" name="premium" value="{{ $request->premium }}">
			<input type="hidden" name="plan_name" value="{{ $request->planname }}">
			<input type="hidden" name="plan_id" value="{{ $request->plan_id }}">
			<input type="hidden" name="comp_id" value="{{ $request->comp_id }}">
			<input type="hidden" name="comp_name" value="{{ DB::table('wp_dh_companies')->where('comp_id' , $request->comp_id)->first()->comp_name }}">
			<input type="hidden" name="product_id" value="{{ $request->product_id }}">
			<input type="hidden" name="traveller" value="{{ $request->traveller }}">
			<input type="hidden" name="age" value="{{ $request->age }}">
			<input type="hidden" name="broker" value="{{ $request->broker }}">     
			<input type="hidden" name="agent" value="{{ $request->agent }}">
			<div class="card">
				<div class="card-header">
					<h3>About Info</h3>
				</div>
				<div class="card-body">
					@for($i=0; $i < $request->traveller; $i++)
            			@php
            				$year = $request->years[$i];
            			@endphp
					<hr class="hr-text mt-5" data-content="Traveler {{ $i+1 }}">
					<div class="row">
						<div class="col-md-6">
							<div class="custom-form-control positionrelative">
		                        <label class="selectlabeldateofbirth">First Name Traveler {{ $i+1 }}</label>
		                       	<input class="input" type="text" placeholder=" " name="fname" data-placeholder="First Name" required>
		                    </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="custom-form-control positionrelative">
		                    	<label class="selectlabeldateofbirth">Second Name Traveler {{ $i+1 }}</label>
		                        <input class="input" type="text" placeholder=" " name="lname" data-placeholder="Last Name" required>
		                    </div>
		                </div>
		                <div class="col-md-6" style="margin-top: 33px;">
		                    <div class="custom-form-control positionrelative">
		                    	<label class="selectlabeldateofbirth">Date OF Birth {{ $i+1 }}</label>
		                        <input class="input" value="{{ date('Y-m-d',strtotime($year)) }}" type="date" placeholder=" " name="dob" data-placeholder="Date OF Birth" required>
		                    </div>
		                </div>
		                <div class="col-md-6" style="margin-top: 33px;">
		                    <div class=" positionrelative">
		                    	<label class="selectlabel">Select Gender</label>
                                <select name="gender" class="gender form-control">
                                   	<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
                                </select>
		                    </div>
		                </div>
					</div>
					@endfor
					<div class="row"style="margin-top: 33px;">
						<div class="col-md-6">
							<div class="custom-form-control positionrelative">
		                    	<label class="selectlabeldateofbirth">Phone Number</label>
		                        <input class="input" type="text" placeholder=" " oninput="maxLengthChecks(this)" maxlength="11" value="{{ $request->phone }}" name="phone" data-placeholder="Phone Number" required>
		                    </div>
						</div>
						<div class="col-md-6">
							<div class="custom-form-control positionrelative">
		                    	<label class="selectlabeldateofbirth">Phone Number</label>
		                        <input class="input" type="email" placeholder=" " value="{{ $request->email }}" name="email" data-placeholder="Email" required>
		                    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mt-4">
				<div class="card-header">
					<h3>Address</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="custom-form-control positionrelative">
		                    	<label class="selectlabeldateofbirth">Street Number and Name</label>
		                        <input class="input pac-target-input" type="text" placeholder=" " id="pac-input" name="streetname" data-placeholder="Enter a location" autocomplete="off" required>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
@endsection
@section('script')
<script src="{{ url('public/front/js/select2.min.js') }}"></script>
<script type="text/javascript">
$(".gender").select2({
	minimumResultsForSearch: -1,
	placeholder: "Select Coverage Ammount",
	allowClear: false
});
</script>
<script>
  function maxLengthChecks(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<script type="text/javascript">
	var overlay;

testOverlay.prototype = new google.maps.OverlayView();

function initialize() {
  var map = new google.maps.Map(document.getElementById("map-canvas"), {
    zoom: 15,
    center: {
      lat: 37.323,
      lng: -122.0322
    },
    mapTypeId: "terrain",
    draggableCursor: "crosshair"
  });
  map.addListener("click", (event) => {
    map.setCenter(event.latLng);
    console.log(event.latLng.toString());
  });

  overlay = new testOverlay(map);

  var input =
    /** @type {HTMLInputElement} */
    (document.getElementById("pac-input"));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */ (input)
  );

  google.maps.event.addListener(searchBox, "places_changed", function () {
    var places = searchBox.getPlaces();
    if (places.length == 0) {
      return;
    }
    map.setCenter(places[0].geometry.location);
  });
}

function testOverlay(map) {
  this.map_ = map;
  this.div_ = null;
  this.setMap(map);
}

testOverlay.prototype.onAdd = function () {
  var div = document.createElement("div");
  this.div_ = div;
  div.style.borderStyle = "none";
  div.style.borderWidth = "0px";
  div.style.position = "absolute";
  div.style.left = -window.innerWidth / 2 + "px";
  div.style.top = -window.innerHeight / 2 + "px";
  div.width = window.innerWidth;
  div.height = window.innerHeight;

  const canvas = document.createElement("canvas");
  canvas.style.position = "absolute";
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  div.appendChild(canvas);

  const panes = this.getPanes();
  panes.overlayLayer.appendChild(div);

  var ctx = canvas.getContext("2d");
  this.drawLine(ctx, 0, "rgba(0, 0, 0, 0.2)");
  this.drawLine(ctx, 90, "rgba(0, 0, 0, 0.2)");
  this.drawLine(ctx, 37.5, "rgba(255, 0, 0, 0.4)");
  this.drawLine(ctx, 67.5, "rgba(255, 0, 0, 0.4)");
};

testOverlay.prototype.drawLine = function (ctx, degrees, style) {
  // 0 north, growing clockwise
  const w = window.innerWidth / 2;
  const h = window.innerHeight / 2;
  const radians = ((90 - degrees) * Math.PI) / 180;
  const hlen = Math.min(w, h);
  const x = Math.cos(radians) * hlen;
  const y = -Math.sin(radians) * hlen;
  ctx.beginPath();
  ctx.strokeStyle = style;
  ctx.moveTo(w - x, h - y);
  ctx.lineTo(w + x, h + y);
  ctx.stroke();
};

testOverlay.prototype.onRemove = function () {
  this.div_.parentNode.removeChild(this.div_);
  this.div_ = null;
};

google.maps.event.addDomListener(window, "load", initialize);
</script>
@endsection