@extends('frontend.layouts.main')
@section('tittle')
<title>Apply</title>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
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
		<div class="card border-0">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 nopad">
						<div class="input-wrapper">
						   <input class="input" type="text" placeholder=" " name="fname" data-placeholder="First Name" required>
						   <span class="placeholder">First Name Traveler<small class="text-danger">*</small></span>
						 </div>
					</div>
					<div class="col-md-6 nopad">
						<div class="input-wrapper">
						   <input class="input" type="text" placeholder=" " name="lname" data-placeholder="Last Name" required>
						   <span class="placeholder">Last Name Traveler<small class="text-danger">*</small></span>
						</div>
					</div>
				</div>
				<div class="form-group mt-3">
					<div class="row">
						<div class="col-md-6 nopad">
							<div class="input-wrapper">
							   <input class="input" type="text" placeholder=" " oninput="maxLengthChecks(this)" maxlength="11" value="{{ $request->phone }}" name="phone" data-placeholder="Phone Number" required>
							   <span class="placeholder">Phone Number<small class="text-danger">*</small></span>
							</div>
						</div>
						<div class="col-md-6 nopad">
							<div class="input-wrapper">
							   <input class="input" type="email" placeholder=" " value="{{ $request->email }}" name="email" data-placeholder="Email" required>
							   <span class="placeholder">Email<small class="text-danger">*</small></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection