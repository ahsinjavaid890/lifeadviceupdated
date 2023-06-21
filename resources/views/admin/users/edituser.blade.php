@extends('admin.layouts.main-layout')
@section('title','Update Agent')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
           @include('alerts.index')
           <form method="post" action="{{ url('admin/users/edituser') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Update Agent
                            <div class="text-muted pt-2 font-size-sm">Update Agent</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                	<div class="form-group">
                        <label>Select Status</label>
                        <select required name="status" class="form-control">
                            <option value="">Select Status</option>
                            <option value="active" @if($data->status == 'active') selected @endif>Active</option>
                            <option value="inactive" @if($data->status == 'inactive') selected @endif>In Active</option>
                        </select>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input required value="{{  $data->name }}" type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E&O Insurance document</label>
                                <input type="file" name="insurancedocument" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required value="{{  $data->email }}" type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input required value="{{  $data->phone }}" type="number" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Location</label>
                            <input required value="{{  $data->address }}" type="text" class="form-control" placeholder="Address" id="address" name="address" value=""> 
                        </div>
                        <div class="col-md-3">
                            <label>City</label>
                            <input required value="{{  $data->city }}" type="text" class="form-control" placeholder="City" id="city" name="city" value=""> 
                        </div>
                        <div class="col-md-3">
                            <label>Province</label>
                            <input required value="{{  $data->province }}" type="text" class="form-control" placeholder="Province" id="province" name="province" value=""> 
                        </div> 
                    </div>
                    <div class="form-group">
                        <label>Little About Me</label>
                        <textarea class="form-control" name="about_me" rows="3" placeholder="Write Something About You.....">{{  $data->name }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Account Password</label>
                        <input  type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="password" value="Update Agent" class="btn btn-primary" placeholder="Password">
                    </div>
                </div>
            </div>
            </form>
                        
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal-->
@endsection