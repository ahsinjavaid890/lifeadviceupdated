@extends('admin.layouts.main-layout')
@section('title','Edit Users')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					@include('alerts.index')
					<form method="post" action="{{ url('admin/users/edituser') }}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" value="{{ $data->id}}" name="id">
						<link href="{{ asset('public/admin/assetstwo/css/essentials.css')}}" rel="stylesheet" type="text/css" />
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style type="text/css">
									.card-header{
										padding: 2rem 2.5rem 0px;
									}
									.switch.switch-success>input:checked+.switch-label {
									    border-color: #3a5371 !important;
									    background: #3a5371 !important;
									}
								</style>
					<div class="card">
				<div class="card-header">
					<div class="row">
                    	<div class="col-md-12">
                        <h3 class="text-danger"> Personal Details </h3>
                    	</div>
                    </div>
				</div>
				<div class="card-body">
					<div class="panel-body">
	                    <div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Management Capability</strong></label>
	                    	</div>
	                        <div class="col-md-10">
	                        	<label> License and E&amp;O Management capability ? </label>
		                        <label class="switch switch-success switch-round">
			                        <input type="checkbox" name="mg_capability" value="1"   @if($data->mg_capability == 1) checked="" @endif>
			                        <span class="switch-label" data-on="YES" data-off="NO"></span>
		                        </label>
		                     </div>
	                    </div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Select Logo</strong></label>
	                    	</div>
	                        <div class="col-md-10">
	                        <!-- fancy no style -->
							<div class="fancy-file-upload">
								<i class="fa fa-upload"></i>
								<input type="file" class="form-control" name="logo" onchange="jQuery(this).next('input').val(this.value);">
								<input type="text" class="form-control" placeholder="no file selected" readonly="">
								<span class="button">Choose File</span>
							</div>
							<!-- <div class="profile-image">
								
								<img src="{{ url('public/images') }}/{{$data->profileimage}}">
							</div> -->
	                    	</div>
	                    </div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Status</strong></label>
	                    	</div>
	                        <div class="col-md-10">
	                        <select name="status" id="status" class="form-control">
								<option value="" >SELECT ACCOUNT STATUS</option>
								<option value="active" @if($data->status == "active") selected @endif>Active</option>
								<option value="pending"  @if($data->status == "pending") selected @endif>pending</option>
								<option value="suspended"  @if($data->status == "suspended") selected @endif>Suspended</option>
							</select>
	                    	</div>
	                    </div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>User Type</strong></label>
	                    	</div>
	                        <div class="col-md-10">
	                        <select class="form-control" name="user_type" id="user_type"  onchange="mustparent()">
								<option value="">SELECT USER TYPE</option>
								<option selected="selected" value="admin"  @if($data->user_type == "admin") selected @endif>Admin</option>
								<option value="broker"  @if($data->user_type == "broker") selected @endif>AB Broker</option>
								<option value="agent"  @if($data->user_type == "agent") selected @endif>AB Agent</option>
								<option value="db"  @if($data->user_type == "db") selected @endif>AB Downline Broker</option>
								<option value="da"  @if($data->user_type == "da") selected @endif>AB Downline Agent</option>
							</select>

	<script>
	function mustparent(){
	if(document.getElementById('user_type').value == 'db'){
	if(document.getElementById('parent_id').value == 0){
	document.getElementById('submitbtn').disabled = true;
	document.getElementById('err').innerHTML = '<i class="fa fa-warning"></i> Please select a parent';
	}
	else {
	document.getElementById('submitbtn').disabled = false;
	document.getElementById('err').innerHTML = '';	
	}		
	}
	else if(document.getElementById('user_type').value == 'da'){
	if(document.getElementById('parent_id').value == 0){
	document.getElementById('submitbtn').disabled = true;
	document.getElementById('err').innerHTML = '<i class="fa fa-warning"></i> Please select a parent';
	}
	else {
	document.getElementById('submitbtn').disabled = false;
	document.getElementById('err').innerHTML = '';	
	}

	} else {
	document.getElementById('submitbtn').disabled = false;
	document.getElementById('err').innerHTML = '';	
	}
	}
	</script>								
	                    	</div>
	                    </div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Parent User</strong></label>
	                    	</div>
	                        <div class="col-md-10">
							<select class="form-control" name="parent_id" id="parent_id"  onchange="mustparent()">
							<option value="0" @if($data->parent_id == 0) selected @endif>N/A</option>
							<option value="1" @if($data->parent_id == 1) selected @endif>1</option>
							</select>
							</div>
						</div>
							
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Fiscal Year Starts From</strong></label>
	                    	</div>
	                        <div class="col-md-10">
							<input type="date" class="form-control datepicker" name="fiscal_year" id="fiscal_year" value="{{$data->fiscal_year}}" data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
							</div>
						</div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Name</strong></label>
	                    	</div>
	                    	@foreach(explode(' ' , $data->name) as $r)
	                    	@php

	                    		if($loop->first)
	                    		{
	                        		$fname = $r;
	                        	}
	                    	
	                    		if($loop->last)
	                    		{
	                    			$lname = $r;
	                    		}
	                    	@endphp
	                    	@endforeach

	                        <div class="col-md-5">
							<input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" style="margin-right:5px;" value="{{ $fname }}" onkeyup="suggestusername();">
							</div>
							<div class="col-md-5">
							<input type="text" class="form-control" value="{{ $lname }}" placeholder="Last Name" name="lname" id="lname" value="" onkeyup="suggestusername();">
							</div>
						</div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong><i class="fa fa-envelope"></i> Email</strong></label>
	                    	</div>
	                        <div class="col-md-10">
							<input type="email" class="form-control" placeholder="Email Address" value="{{ $data->email}}" name="email" id="email">
							</div>
						</div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong><i class="fa fa-phone"></i> Phone</strong></label>
	                    	</div>
	                        <div class="col-md-10">
							<input type="text" class="form-control" placeholder="Phone Number" value="{{ $data->phone}}" name="phone" id="phone">
							</div>
						</div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong><i class="fa fa-map-marker"></i> Location</strong></label>
	                    	</div>
	                        <div class="col-md-6">
							<input type="text" class="form-control" placeholder="Address" id="address" name="address" value="{{$data->address}}"> 
							</div>
							<div class="col-md-2">
							<input type="text" class="form-control" placeholder="City" id="city" name="city" value="{{$data->city}}"> 
							</div>
							<div class="col-md-2">
							<input type="text" class="form-control" placeholder="Province" id="province" name="province" value="{{$data->province}}"> 
							</div>
						</div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>&nbsp;</strong></label>
	                    	</div>
	                        <div class="col-md-5">
							<input type="text" class="form-control" placeholder="Postcode" id="postal" name="postal" value="{{$data->postal}}">
							</div>
							<div class="col-md-5">
							<select id="country" class="form-control" name="country">
								<option selected="selected" label="Select a country" value="">Select Country</option>
								<optgroup id="country-optgroup-Africa" label="Africa">
								<option value="DZ" label="Algeria" @if($data->country == "DZ") selected @endif >Algeria</option>
								<option value="AO" label="Angola"@if($data->country == "AO") selected @endif  >Angola</option>
								<option value="BJ" label="Benin" @if($data->country == "BJ") selected @endif >Benin</option>
								<option value="BW" label="Botswana" @if($data->country == "BW") selected @endif >Botswana</option>
								<option value="BF" label="Burkina Faso" @if($data->country == "BF") selected @endif >Burkina Faso</option>
								<option value="BI" label="Burundi" @if($data->country == "BI") selected @endif >Burundi</option>
								<option value="CM" label="Cameroon" @if($data->country == "CM") selected @endif >Cameroon</option>
								<option value="CV" label="Cape Verde" @if($data->country == "CV") selected @endif >Cape Verde</option>
								<option value="CF" label="Central African Republic" @if($data->country == "CF") selected @endif >Central African Republic</option>
								<option value="TD" label="Chad" @if($data->country == "TD") selected @endif >Chad</option>
								<option value="KM" label="Comoros" @if($data->country == "KM") selected @endif >Comoros</option>
								<option value="CG" label="Congo - Brazzaville" @if($data->country == "CG") selected @endif >Congo - Brazzaville</option>
								<option value="CD" label="Congo - Kinshasa" @if($data->country == "CD") selected @endif >Congo - Kinshasa</option>
								<option value="CI" label="Côte d’Ivoire" @if($data->country == "CI") selected @endif >Côte d’Ivoire</option>
								<option value="DJ" label="Djibouti" @if($data->country == "DJ") selected @endif >Djibouti</option>
								<option value="EG" label="Egypt" @if($data->country == "EG") selected @endif >Egypt</option>
								<option value="" label="Equatorial Guinea" @if($data->country == "GQ") selected @endif >Equatorial Guinea</option>
								<option value="ER" label="Eritrea" @if($data->country == "ER") selected @endif >Eritrea</option>
								<option value="ET" label="Ethiopia" @if($data->country == "ET") selected @endif >Ethiopia</option>
								<option value="GA" label="Gabon" @if($data->country == "GA") selected @endif >Gabon</option>
								<option value="GM" label="Gambia" @if($data->country == "GM") selected @endif >Gambia</option>
								<option value="GH" label="Ghana" @if($data->country == "GH") selected @endif >Ghana</option>
								<option value="GN" label="Guinea" @if($data->country == "GN") selected @endif >Guinea</option>
								<option value="GW" label="Guinea-Bissau" @if($data->country == "GW") selected @endif >Guinea-Bissau</option>
								<option value="KE" label="Kenya" @if($data->country == "KE") selected @endif >Kenya</option>
								<option value="LS" label="Lesotho" @if($data->country == "LS") selected @endif >Lesotho</option>
								<option value="LR" label="Liberia" @if($data->country == "LR") selected @endif >Liberia</option>
								<option value="LY" label="Libya" @if($data->country == "LY") selected @endif >Libya</option>
								<option value="MG" label="Madagascar" @if($data->country == "MG") selected @endif >Madagascar</option>
								<option value="MW" label="Malawi" @if($data->country == "MW") selected @endif >Malawi</option>
								<option value="ML" label="Mali" @if($data->country == "ML") selected @endif >Mali</option>
								<option value="MR" label="Mauritania" @if($data->country == "MR") selected @endif >Mauritania</option>
								<option value="MU" label="Mauritius" @if($data->country == "MU") selected @endif >Mauritius</option>
								<option value="YT" label="Mayotte" @if($data->country == "YT") selected @endif >Mayotte</option>
								<option value="MA" label="Morocco" @if($data->country == "MA") selected @endif >Morocco</option>
								<option value="MZ" label="Mozambique" @if($data->country == "MZ") selected @endif >Mozambique</option>
								<option value="NA" label="Namibia" @if($data->country == "NA") selected @endif >Namibia</option>
								<option value="NE" label="Niger" @if($data->country == "NE") selected @endif >Niger</option>
								<option value="NG" label="Nigeria" @if($data->country == "NG") selected @endif >Nigeria</option>
								<option value="RW" label="Rwanda" @if($data->country == "RW") selected @endif >Rwanda</option>
								<option value="RE" label="Réunion" @if($data->country == "RE") selected @endif >Réunion</option>
								<option value="SH" label="Saint Helena" @if($data->country == "SH") selected @endif >Saint Helena</option>
								<option value="SN" label="Senegal" @if($data->country == "SN") selected @endif >Senegal</option>
								<option value="SC" label="Seychelles" @if($data->country == "SC") selected @endif >Seychelles</option>
								<option value="SL" label="Sierra Leone" @if($data->country == "SL") selected @endif >Sierra Leone</option>
								<option value="SO" label="Somalia" @if($data->country == "SO") selected @endif >Somalia</option>
								<option value="ZA" label="South Africa" @if($data->country == "ZA") selected @endif >South Africa</option>
								<option value="SD" label="Sudan" @if($data->country == "SD") selected @endif >Sudan</option>
								<option value="SZ" label="Swaziland" @if($data->country == "SZ") selected @endif >Swaziland</option>
								<option value="ST" label="São Tomé and Príncipe" @if($data->country == "ST") selected @endif >São Tomé and Príncipe</option>
								<option value="TZ" label="Tanzania" @if($data->country == "TZ") selected @endif >Tanzania</option>
								<option value="TG" label="Togo" @if($data->country == "TG") selected @endif >Togo</option>
								<option value="TN" label="Tunisia" @if($data->country == "TN") selected @endif >Tunisia</option>
								<option value="UG" label="Uganda" @if($data->country == "UG") selected @endif >Uganda</option>
								<option value="EH" label="Western Sahara" @if($data->country == "EH") selected @endif >Western Sahara</option>
								<option value="ZM" label="Zambia" @if($data->country == "ZM") selected @endif >Zambia</option>
								<option value="ZW" label="Zimbabwe" @if($data->country == "ZW") selected @endif >Zimbabwe</option>
								</optgroup>
								<optgroup id="country-optgroup-Americas" label="Americas">
								<option value="AI" label="Anguilla" @if($data->country == "AI") selected @endif >Anguilla</option>
								<option value="AG" label="Antigua and Barbuda" @if($data->country == "AG") selected @endif >Antigua and Barbuda</option>
								<option value="AR" label="Argentina" @if($data->country == "AR") selected @endif >Argentina</option>
								<option value="AW" label="Aruba" @if($data->country == "AW") selected @endif >Aruba</option>
								<option value="BS" label="Bahamas" @if($data->country == "BS") selected @endif >Bahamas</option>
								<option value="BB" label="Barbados" @if($data->country == "BB") selected @endif >Barbados</option>
								<option value="BZ" label="Belize" @if($data->country == "BZ") selected @endif >Belize</option>
								<option value="BM" label="Bermuda" @if($data->country == "BM") selected @endif >Bermuda</option>
								<option value="BO" label="Bolivia" @if($data->country == "BO") selected @endif >Bolivia</option>
								<option value="BR" label="Brazil" @if($data->country == "BR") selected @endif >Brazil</option>
								<option value="VG" label="British Virgin Islands" @if($data->country == "VG") selected @endif >British Virgin Islands</option>
								<option value="CA" label="Canada" @if($data->country == "CA") selected @endif >Canada</option>
								<option value="KY" label="Cayman Islands" @if($data->country == "KY") selected @endif >Cayman Islands</option>
								<option value="CL" label="Chile" @if($data->country == "CL") selected @endif >Chile</option>
								<option value="CO" label="Colombia" @if($data->country == "CO") selected @endif >Colombia</option>
								<option value="CR" label="Costa Rica" @if($data->country == "CR") selected @endif >Costa Rica</option>
								<option value="CU" label="Cuba" @if($data->country == "CU") selected @endif >Cuba</option>
								<option value="DM" label="Dominica" @if($data->country == "DM") selected @endif >Dominica</option>
								<option value="DO" label="Dominican Republic" @if($data->country == "DO") selected @endif >Dominican Republic</option>
								<option value="EC" label="Ecuador" @if($data->country == "EC") selected @endif >Ecuador</option>
								<option value="SV" label="El Salvador" @if($data->country == "SV") selected @endif >El Salvador</option>
								<option value="FK" label="Falkland Islands" @if($data->country == "FK") selected @endif >Falkland Islands</option>
								<option value="GF" label="French Guiana" @if($data->country == "GF") selected @endif >French Guiana</option>
								<option value="GD" label="Greenland" @if($data->country == "GD") selected @endif >Greenland</option>
								<option value="GD" label="Grenada" @if($data->country == "GD") selected @endif >Grenada</option>
								<option value="GP" label="Guadeloupe" @if($data->country == "GP") selected @endif>Guadeloupe</option>
								<option value="GT" label="Guatemala" @if($data->country == "GT") selected @endif >Guatemala</option>
								<option value="GY" label="Guyana" @if($data->country == "GY") selected @endif >Guyana</option>
								<option value="HT" label="Haiti" @if($data->country == "HT") selected @endif >Haiti</option>
								<option value="HN" label="Honduras" @if($data->country == "HN") selected @endif >Honduras</option>
								<option value="JM" label="Jamaica" @if($data->country == "JM") selected @endif >Jamaica</option>
								<option value="MQ" label="Martinique" @if($data->country == "MQ") selected @endif >Martinique</option>
								<option value="MX" label="Mexico" @if($data->country == "MX") selected @endif >Mexico</option>
								<option value="MS" label="Montserrat" @if($data->country == "MS") selected @endif >Montserrat</option>
								<option value="AN" label="Netherlands Antilles" @if($data->country == "AN") selected @endif >Netherlands Antilles</option>
								<option value="NI" label="Nicaragua" @if($data->country == "NI") selected @endif >Nicaragua</option>
								<option value="PA" label="Panama" @if($data->country == "PA") selected @endif >Panama</option>
								<option value="PY" label="Paraguay" @if($data->country == "PY") selected @endif >Paraguay</option>
								<option value="PE" label="Peru" @if($data->country == "PE") selected @endif >Peru</option>
								<option value="PR" label="Puerto Rico" @if($data->country == "PR") selected @endif >Puerto Rico</option>
								<option value="BL" label="Saint Barthélemy" @if($data->country == "BL") selected @endif >Saint Barthélemy</option>
								<option value="KN" label="Saint Kitts and Nevis" @if($data->country == "KN") selected @endif >Saint Kitts and Nevis</option>
								<option value="LC" label="Saint Lucia" @if($data->country == "LC") selected @endif >Saint Lucia</option>
								<option value="MF" label="Saint Martin" @if($data->country == "MF") selected @endif >Saint Martin</option>
								<option value="PM" label="Saint Pierre and Miquelon" @if($data->country == "PM") selected @endif >Saint Pierre and Miquelon</option>
								<option value="VC" label="Saint Vincent and the Grenadines" @if($data->country == "VC") selected @endif >Saint Vincent and the Grenadines</option>
								<option value="SR" label="Suriname" @if($data->country == "SR") selected @endif >Suriname</option>
								<option value="TT" label="Trinidad and Tobago" @if($data->country == "TT") selected @endif >Trinidad and Tobago</option>
								<option value="TC" label="Turks and Caicos Islands" @if($data->country == "TC") selected @endif >Turks and Caicos Islands</option>
								<option value="VI" label="U.S. Virgin Islands" @if($data->country == "VI") selected @endif >U.S. Virgin Islands</option>
								<option value="US" label="United States" @if($data->country == "US") selected @endif >United States</option>
								<option value="UY" label="Uruguay" @if($data->country == "UY") selected @endif >Uruguay</option>
								<option value="VE" label="Venezuela" @if($data->country == "VE") selected @endif >Venezuela</option>
								</optgroup>
								<optgroup id="country-optgroup-Asia" label="Asia">
								<option value="AF" label="Afghanistan" @if($data->country == "AF") selected @endif >Afghanistan</option>
								<option value="AM" label="Armenia" @if($data->country == "AM") selected @endif >Armenia</option>
								<option value="AZ" label="Azerbaijan" @if($data->country == "AZ") selected @endif >Azerbaijan</option>
								<option value="BH" label="Bahrain" @if($data->country == "BH") selected @endif >Bahrain</option>
								<option value="BD" label="Bangladesh" @if($data->country == "BD") selected @endif >Bangladesh</option>
								<option value="BT" label="Bhutan" @if($data->country == "BT") selected @endif >Bhutan</option>
								<option value="BN" label="Brunei" @if($data->country == "BN") selected @endif >Brunei</option>
								<option value="KH" label="Cambodia" @if($data->country == "KH") selected @endif >Cambodia</option>
								<option value="CN" label="China" @if($data->country == "CN") selected @endif >China</option>
								<option value="CY" label="Cyprus" @if($data->country == "CY") selected @endif >Cyprus</option>
								<option value="GE" label="Georgia" @if($data->country == "GE") selected @endif >Georgia</option>
								<option value="HK" label="Hong Kong SAR China" @if($data->country == "HK") selected @endif >Hong Kong SAR China</option>
								<option value="IN" label="India" @if($data->country == "IN") selected @endif >India</option>
								<option value="ID" label="Indonesia" @if($data->country == "ID") selected @endif >Indonesia</option>
								<option value="IR" label="Iran" @if($data->country == "IR") selected @endif >Iran</option>
								<option value="IQ" label="Iraq" @if($data->country == "IQ") selected @endif >Iraq</option>
								<option value="IL" label="Israel" @if($data->country == "IL") selected @endif >Israel</option>
								<option value="JP" label="Japan" @if($data->country == "JP") selected @endif >Japan</option>
								<option value="JO" label="Jordan" @if($data->country == "JO") selected @endif >Jordan</option>
								<option value="KZ" label="Kazakhstan" @if($data->country == "KZ") selected @endif ></option>
								<option value="KW" label="Kuwait"></option>Kuwait</option>
								<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
								<option value="LA" label="Laos">Laos</option>
								<option value="LB" label="Lebanon">Lebanon</option>
								<option value="MO" label="Macau SAR China">Macau SAR China</option>
								<option value="MY" label="Malaysia">Malaysia</option>
								<option value="MV" label="Maldives">Maldives</option>
								<option value="MN" label="Mongolia">Mongolia</option>
								<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
								<option value="NP" label="Nepal">Nepal</option>
								<option value="NT" label="Neutral Zone">Neutral Zone</option>
								<option value="KP" label="North Korea">North Korea</option>
								<option value="OM" label="Oman">Oman</option>
								<option value="PK" label="Pakistan">Pakistan</option>
								<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
								<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
								<option value="PH" label="Philippines">Philippines</option>
								<option value="QA" label="Qatar">Qatar</option>
								<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
								<option value="SG" label="Singapore">Singapore</option>
								<option value="KR" label="South Korea">South Korea</option>
								<option value="LK" label="Sri Lanka">Sri Lanka</option>
								<option value="SY" label="Syria">Syria</option>
								<option value="TW" label="Taiwan">Taiwan</option>
								<option value="TJ" label="Tajikistan">Tajikistan</option>
								<option value="TH" label="Thailand">Thailand</option>
								<option value="TL" label="Timor-Leste">Timor-Leste</option>
								<option value="TR" label="Turkey">Turkey</option>
								<option value="TM" label="Turkmenistan">Turkmenistan</option>
								<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
								<option value="UZ" label="Uzbekistan">Uzbekistan</option>
								<option value="VN" label="Vietnam">Vietnam</option>
								<option value="YE" label="Yemen">Yemen</option>
								</optgroup>
								<optgroup id="country-optgroup-Europe" label="Europe">
								<option value="AL" label="Albania">Albania</option>
								<option value="AD" label="Andorra">Andorra</option>
								<option value="AT" label="Austria">Austria</option>
								<option value="BY" label="Belarus">Belarus</option>
								<option value="BE" label="Belgium">Belgium</option>
								<option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="BG" label="Bulgaria">Bulgaria</option>
								<option value="HR" label="Croatia">Croatia</option>
								<option value="CY" label="Cyprus">Cyprus</option>
								<option value="CZ" label="Czech Republic">Czech Republic</option>
								<option value="DK" label="Denmark">Denmark</option>
								<option value="DD" label="East Germany">East Germany</option>
								<option value="EE" label="Estonia">Estonia</option>
								<option value="FO" label="Faroe Islands">Faroe Islands</option>
								<option value="FI" label="Finland">Finland</option>
								<option value="FR" label="France">France</option>
								<option value="DE" label="Germany">Germany</option>
								<option value="GI" label="Gibraltar">Gibraltar</option>
								<option value="GR" label="Greece">Greece</option>
								<option value="GG" label="Guernsey">Guernsey</option>
								<option value="HU" label="Hungary">Hungary</option>
								<option value="IS" label="Iceland">Iceland</option>
								<option value="IE" label="Ireland">Ireland</option>
								<option value="IM" label="Isle of Man">Isle of Man</option>
								<option value="IT" label="Italy">Italy</option>
								<option value="JE" label="Jersey">Jersey</option>
								<option value="LV" label="Latvia">Latvia</option>
								<option value="LI" label="Liechtenstein">Liechtenstein</option>
								<option value="LT" label="Lithuania">Lithuania</option>
								<option value="LU" label="Luxembourg">Luxembourg</option>
								<option value="MK" label="Macedonia">Macedonia</option>
								<option value="MT" label="Malta">Malta</option>
								<option value="FX" label="Metropolitan France">Metropolitan France</option>
								<option value="MD" label="Moldova">Moldova</option>
								<option value="MC" label="Monaco">Monaco</option>
								<option value="ME" label="Montenegro">Montenegro</option>
								<option value="NL" label="Netherlands">Netherlands</option>
								<option value="NO" label="Norway">Norway</option>
								<option value="PL" label="Poland">Poland</option>
								<option value="PT" label="Portugal">Portugal</option>
								<option value="RO" label="Romania">Romania</option>
								<option value="RU" label="Russia">Russia</option>
								<option value="SM" label="San Marino">San Marino</option>
								<option value="RS" label="Serbia">Serbia</option>
								<option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
								<option value="SK" label="Slovakia">Slovakia</option>
								<option value="SI" label="Slovenia">Slovenia</option>
								<option value="ES" label="Spain">Spain</option>
								<option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
								<option value="SE" label="Sweden">Sweden</option>
								<option value="CH" label="Switzerland">Switzerland</option>
								<option value="UA" label="Ukraine">Ukraine</option>
								<option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
								<option value="GB" label="United Kingdom">United Kingdom</option>
								<option value="VA" label="Vatican City">Vatican City</option>
								<option value="AX" label="Åland Islands">Åland Islands</option>
								</optgroup>
								<optgroup id="country-optgroup-Oceania" label="Oceania">
								<option value="AS" label="American Samoa">American Samoa</option>
								<option value="AQ" label="Antarctica">Antarctica</option>
								<option value="AU" label="Australia">Australia</option>
								<option value="BV" label="Bouvet Island">Bouvet Island</option>
								<option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="CX" label="Christmas Island">Christmas Island</option>
								<option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
								<option value="CK" label="Cook Islands">Cook Islands</option>
								<option value="FJ" label="Fiji">Fiji</option>
								<option value="PF" label="French Polynesia">French Polynesia</option>
								<option value="TF" label="French Southern Territories">French Southern Territories</option>
								<option value="GU" label="Guam">Guam</option>
								<option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
								<option value="KI" label="Kiribati">Kiribati</option>
								<option value="MH" label="Marshall Islands">Marshall Islands</option>
								<option value="FM" label="Micronesia">Micronesia</option>
								<option value="NR" label="Nauru">Nauru</option>
								<option value="NC" label="New Caledonia">New Caledonia</option>
								<option value="NZ" label="New Zealand">New Zealand</option>
								<option value="NU" label="Niue">Niue</option>
								<option value="NF" label="Norfolk Island">Norfolk Island</option>
								<option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="PW" label="Palau">Palau</option>
								<option value="PG" label="Papua New Guinea">Papua New Guinea</option>
								<option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
								<option value="WS" label="Samoa">Samoa</option>
								<option value="SB" label="Solomon Islands">Solomon Islands</option>
								<option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
								<option value="TK" label="Tokelau">Tokelau</option>
								<option value="TO" label="Tonga">Tonga</option>
								<option value="TV" label="Tuvalu">Tuvalu</option>
								<option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
								<option value="VU" label="Vanuatu">Vanuatu</option>
								<option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
								</optgroup>
								</select>									
							</div>
						</div>							
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Date of Birth</strong></label>
	                    	</div>
	                        <div class="col-md-10">
							<input class="form-control datepicker" name="dob" id="dob" value="{{$data->dob}}" type="date" data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
							</div>
						</div>
						<div class="row">
	                    	<div class="col-md-2">
	                        <label><strong>Little About Me </strong></label>
	                    	</div>
	                        <div class="col-md-10">
							<textarea class="form-control limited" name="about_me" id="about_me" maxlength="500" placeholder="Write something about you...">{{$data->about_me}}</textarea>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-header">									
					<div class="row">
						<div class="col-md-12">
                            <h4 class="red">
								<span class="middle"><strong>Account Security</strong></span>
							</h4>
                        	</div>
                        </div>
				</div>
				<div class="card-body">
									<div class="row">
		                            	<div class="col-md-2">
		                                <label><strong><i class="fa fa-user"></i> Username</strong></label>
		                            	</div>
		                                <div class="col-md-10">
		                                	<input type="text" name="username" class="form-control" placeholder="Username" value="{{ $data->username}}" style="margin-left: -12px;">
		                                </div>
									</div>
									<div class="row">
		                            	<div class="col-md-2">
		                                <label><strong><i class="fa fa-lock"></i> Change Password</strong></label>
		                            	</div>
		                                <div class="col-md-10">
										<div class="row">
											<div class="col-md-5" style="padding:0;">
										<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" onkeyup="validatePassword();">
										</div>
										<div class="col-md-6">
										<input type="button" onclick="generatepassword();" value="Generate Password" class="btn btn-default">
										</div>
										<div class="col-md-12" style="padding:0;">
										<span class="help-inline col-xs-12 col-sm-7" id="password_check" style="padding-top:5px; padding-left:0;"><span class="text-info"><i class="fa fa-warning"></i> Leave blank to use old password</span></span>
										</div>
										</div>
										</div>
									</div>
				</div>
			</div>
			<div class=" m-3">
							<input type="submit" value="Submit Changes" class="btn btn-primary" id="submitbtn">
						</div>
                        <input type="hidden" name="update_id" value="65">
						<input type="hidden" name="current_logo" id="current_logo" value="">
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js')}}"></script>

<script type="text/javascript">

			loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){

				loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){



					if (jQuery().dataTable) {



						var table = jQuery('#datatable_sample');

						table.dataTable({

							"columns": [{

								"orderable": false

							}, {

								"orderable": true

							}, {

								"orderable": false

							}, {

								"orderable": false

							}, {

								"orderable": true

							}, {

								"orderable": false

							}],

							"lengthMenu": [

								[5, 15, 20, -1],

								[5, 15, 20, "All"] // change per page values here

							],

							// set the initial value

							"pageLength": 25,            

							"pagingType": "bootstrap_full_number",

							"language": {

								"lengthMenu": "  _MENU_ records",

								"paginate": {

									"previous":"Prev",

									"next": "Next",

									"last": "Last",

									"first": "First"

								}

							},

							"columnDefs": [{  // set default column settings

								'orderable': false,

								'targets': [0]

							}, {

								"searchable": false,

								"targets": [0]

							}],

							"order": [

								[1, "asc"]

							] // set first column as a default sort by asc

						});



						var tableWrapper = jQuery('#datatable_sample_wrapper');



						table.find('.group-checkable').change(function () {

							var set = jQuery(this).attr("data-set");

							var checked = jQuery(this).is(":checked");

							jQuery(set).each(function () {

								if (checked) {

									jQuery(this).attr("checked", true);

									jQuery(this).parents('tr').addClass("active");

								} else {

									jQuery(this).attr("checked", false);

									jQuery(this).parents('tr').removeClass("active");

								}

							});

							jQuery.uniform.update(set);

						});



						table.on('change', 'tbody tr .checkboxes', function () {

							jQuery(this).parents('tr').toggleClass("active");

						});



						tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown



					}



				});

			});
		</script>
		<script type="text/javascript">
function checkavailable()
{
document.getElementById('username_check').innerHTML = 'Please wait...';

		
var username = document.getElementById('username').value;
 $.ajax({
 type: 'get',
 url: 'get_username.php',
 data: {
 get_option: username,
 },
 success: function (response) {
	 if(response >= 1){
		document.getElementById('username_check').innerHTML = '<i class="fa fa-close fa-lg text-danger"></i> Unavailable'; 
		document.getElementById('submitbtn').disabled = true;
	 } else {
		document.getElementById('username_check').innerHTML = '<i class="fa fa-check fa-lg text-success"></i> Available';  
		document.getElementById('submitbtn').disabled = false;
	 }
// document.getElementById("username_check").innerHTML=response; 
 }
 });
}

//"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}"
function validatePassword() {
	//document.getElementById('password').type = 'password';
    var newPassword = document.getElementById('password').value;
    var minNumberofChars = 8;
    var maxNumberofChars = 16;
    var regularExpression  = /^(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
    //alert(newPassword); 
    if(newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars){
        // document.getElementById('password_check').innerHTML = '<i class="fa fa-check fa-lg red"></i> Minimum 8 character required';
		// document.getElementById('submitbtn').disabled = true;
    } else 
    if(!regularExpression.test(newPassword)) {
        // //alert("password should contain atleast one number and one special character");
		// document.getElementById('password_check').innerHTML = '<i class="fa fa-close fa-lg red"></i> Atleast one capitalized character, one number and one special character required';
		// document.getElementById('submitbtn').disabled = true;
        // return false;
    } else {
		document.getElementById('submitbtn').disabled = false;
		document.getElementById('password_check').innerHTML = '<i class="fa fa-check fa-lg green"></i> Valid Password';
	}
}

function generatepassword(){
String.prototype.pick = function(min, max) {
    var n, chars = '';

    if (typeof max === 'undefined') {
        n = min;
    } else {
        n = min + Math.floor(Math.random() * (max - min + 1));
    }

    for (var i = 0; i < n; i++) {
        chars += this.charAt(Math.floor(Math.random() * this.length));
    }

    return chars;
};

String.prototype.shuffle = function() {
    var array = this.split('');
    var tmp, current, top = array.length;

    if (top) while (--top) {
        current = Math.floor(Math.random() * (top + 1));
        tmp = array[current];
        array[current] = array[top];
        array[top] = tmp;
    }

    return array.join('');
};

var specials = '@$%&*?';
var lowercase = 'abcdefghijklmnopqrstuvwxyz';
var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var numbers = '0123456789';

var all = uppercase + lowercase + numbers + specials;
//var all = specials + lowercase + uppercase + numbers;

var password = '';
password += uppercase.pick(1);
password += lowercase.pick(5);
password += specials.pick(1);
password += numbers.pick(3);
//password += all.pick(3, 10);
//password = password.shuffle();
document.getElementById('password').type = 'text';
document.getElementById('password').value = password;

validatePassword();	
}
</script>
@endsection