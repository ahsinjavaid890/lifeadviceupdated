@extends('admin.layouts.main-layout')
@section('title','Add New User')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
           @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add New User
                            <div class="text-muted pt-2 font-size-sm">Add New User</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <link href="{{ asset('public/admin/assetstwo/css/essentials.css')}}" rel="stylesheet" type="text/css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style type="text/css">
                                    
                                    .switch.switch-success>input:checked+.switch-label {
                                        border-color: #3a5371 !important;
                                        background: #3a5371 !important;
                                    }
                                </style>
                        <div class="col-md-12">
                            <h2 class="text-warning">Personal Details</h2>
                            <div class="form-group">
                                <label><strong>Management Capability</strong></label>
                                <label> License and E&O Management capability ? </label>
                                <label class="switch switch-success switch-round">
                                    <input type="checkbox" name="mg_capability" value="1">
                                    <span class="switch-label" data-on="YES" data-off="NO"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="logo">Select Logo</label>
                                <div class="fancy-file-upload">
                                    <i class="fa fa-upload"></i>
                                    <input type="file" class="form-control" name="logo" onchange="jQuery(this).next('input').val(this.value);">
                                    <input type="text" class="form-control" placeholder="no file selected" readonly="">
                                    <span class="button">Choose File</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" aria-label="Default select example">
                                  <option selected>SELECT ACCOUNT STATUS</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control" aria-label="Default select example">
                                  <option selected>SELECT USER TYPE</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Partner User</label>
                                <select class="form-control" aria-label="Default select example">
                                  <option selected>SELECT USER TYPE</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Fiscal Year Starts From</label>
                                <input type="date" name="start_year" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-envelope mx-2"></i> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-phone mx-2"></i>Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fa fa-location  mx-2"></i>Location</label>
                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label></label>
                                    <select class="form-control">
                                        <option>City</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label></label>
                                    <select class="form-control">
                                        <option>Province</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label></label>
                                    <input type="number" name="passcode" class="form-control" placeholder="Passcode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label></label>
                                    <select class="form-control">
                                        <option>Province</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Little About Me</label>
                                <textarea class="form-control" rows="3" placeholder="Write Something About You....."></textarea>
                            </div>

            </div>

                    </div>
                            
                        </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h2 class="mt-3 text-danger">Account Security</h2>
                    </div>
                    <div class="card-body"> 
                <div class="form-group">
                    <label><i class="fa fa-user mx-2"></i>User Name</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><i class="fa fa-lock mx-2"></i>Password</label>
                            <input type="password" name="password" class="form-control">
                            <div id="pwd" class="well text-danger">
                              <p class="text-success"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label></label>
                             <input id="submit"class="btn btn-default btn-lg btn-block"onclick='password(16)' type='button', value='Generate Password')>
                        </div>
                    </div>
                </div>
                    </div>
                <div class="card-footer">
                    <div class="panel-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" id="submitbtn">
                        </div>
                        <input type="hidden" name="update_id" value="65">
                        <input type="hidden" name="current_logo" id="current_logo" value="">
                     </form>
                        </div>
                </div>
                </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal-->
@endsection