@extends('admin.layouts.main-layout')
@section('title','Edit Sales')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
	        <form method="POST" action="{{ url('admin/sales/editsale') }}" id="editsale" enctype="multipart/form-data">
	        	@csrf
	        	<input type="hidden" value="{{ $data->sales_id}}" name="id">
	            <div class="card card-custom mt-5">
	                <div class="card-header flex-wrap py-5">
	                    <div class="card-title">
	                        <h3 class="card-label text-warning">
	                           Insured Client Details:
	                            <div class="text-muted pt-2 font-size-sm">Manage All Sales</div>
	                        </h3>
	                    </div>
	                </div>
	                <div class="card-body">
	                   <div class="row">
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>First Name</label>
	                				<input type="text" class="form-control" name="fname" placeholder="First Name" value="{{$data->fname}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Last Name</label>
	                				<input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{$data->lname}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Email</label>
	                				<input type="email" class="form-control" name="email" placeholder="Email" value="{{ $data->email}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Phone</label>
	                				<input type="number" class="form-control" name="phone" placeholder="phone" value="{{ $data->phone}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Date Of Birth</label>
	                				<input type="date" class="form-control" name="dob" value="{{$data->dob}}">
	                			</div>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            <div class="card card-custom mt-5">
	                <div class="card-header flex-wrap py-5">
	                    <div class="card-title">
	                        <h3 class="card-label text-warning">
	                           Address where you are staying in Canada:
	                            <div class="text-muted pt-2 font-size-sm">Manage All Sales</div>
	                        </h3>
	                    </div>
	                </div>
	                <div class="card-body">
	                   <div class="row">
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Address Line 1</label>
	                				<input type="text" class="form-control" name="address" placeholder="Address" value="{{ $data->address}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Address Line 2</label>
	                				<input type="text" class="form-control" name="address_2" placeholder="Address 2" value="{{ $data->address_2}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Province</label>
	                				<input type="text" class="form-control" name="province" placeholder="Province" value="{{$data->province}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>City</label>
	                				<input type="text" class="form-control" name="city" placeholder="City" value="{{ $data->city}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Postal Code</label>
	                				<input type="number" class="form-control" name="postcode" placeholder="Postal Code" value="{{ $data->postcode}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Country</label>
	                				<select id="country" class="form-control" name="country">
                                            <option selected="selected" label="Select a country" value="">Select Country</option>
		                					@foreach(DB::table('formcountries')->get() as $r)
		                						<option  value="{{$r->id}}" @if($data->country == $r->code) selected @endif>{{$r->name}}</option>
		                					@endforeach
                                    </select>  
	                			</div>
	                		</div>

	                	</div>
	                </div>
	            </div>
	            <div class="card card-custom mt-5">
	                <div class="card-header flex-wrap py-5">
	                    <div class="card-title">
	                        <h3 class="card-label text-warning">
	                           Home Address:
	                            <div class="text-muted pt-2 font-size-sm">Manage All Sales</div>
	                        </h3>
	                    </div>
	                </div>
	                <div class="card-body">
	                   <div class="row">
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Address Line 1</label>
	                				<input type="text" class="form-control" name="home_address" placeholder="Address" value="{{ $data->home_address}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Address Line 2</label>
	                				<input type="text" class="form-control" name="home_address_2" placeholder="Address 2" value="{{ $data->home_address_2}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Province</label>
	                				<input type="text" class="form-control" name="home_province" placeholder="Province" value="{{$data->home_province}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>City</label>
	                				<input type="text" class="form-control" name="home_city" placeholder="City" value="{{$data->home_city}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Zip</label>
	                				<input type="number" class="form-control" name="home_zip" placeholder="Zip Code" value="{{$data->home_zip}}">
	                			</div>
	                		</div>
	                		<div class="col-md-4">
	                			<div class="form-group">
	                				<label>Country</label>
	                				<select id="country" class="form-control" name="home_country">
                                            <option selected="selected" label="Select a country" value="">Select Country</option>
                                            @foreach(DB::table('formcountries')->get() as $r)
		                						<option  value="{{$r->id}}" @if($data->home_country == $r->code) selected @endif>{{$r->name}}</option>
		                					@endforeach
                                    </select>  
	                			</div>
	                		</div>
	                		
	                	</div>
	                </div>
	                <div class="card-footer">
	                	<input type="submit" name="submit"  value="Submit Changes" class="btn btn-primary" id="submitbtn">
	                </div>
	            </div>
	        </form>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection