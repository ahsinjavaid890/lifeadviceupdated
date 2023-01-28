@extends('frontend.layouts.main')
@section('tittle')
<title>Apply</title>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/select2.min.css')}}">
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
					<h3>Information</h3>
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
		                        <label class="">First Name Traveler {{ $i+1 }}</label>
		                       	<input class="input" type="text" placeholder=" " name="fname" data-placeholder="First Name" required>
		                    </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="custom-form-control positionrelative">
		                    	<label class="">Second Name Traveler {{ $i+1 }}</label>
		                        <input class="input" type="text" placeholder=" " name="lname" data-placeholder="Last Name" required>
		                    </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="custom-form-control positionrelative">
		                    	<label class="">Date OF Birth {{ $i+1 }}</label>
		                        <input class="input" value="{{ date('Y-m-d',strtotime($year)) }}" type="date" placeholder=" " name="dob" data-placeholder="Date OF Birth" required>
		                    </div>
		                </div>
		                <div class="col-md-6">
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
@endsection