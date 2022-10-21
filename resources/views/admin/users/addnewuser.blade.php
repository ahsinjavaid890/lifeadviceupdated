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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Management Capability</strong></label>
                                <label> License and E&O Management capability ? </label>
                                <label class="switch switch-success switch-round">
                                    <input type="checkbox" name="mg_capability" value="1">
                                    <span class="switch-label" data-on="YES" data-off="NO"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Select User type</label>
                                <select class="form-control" name="user_type">
                                    <option value="">Select User Type</option>
                                </select>
                                <input type="text" placeholder="Enter User Name" style="height:45px;" class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter User Name" style="height:45px;" class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" style="height:45px;" class="form-control" name="logo">
                            </div>
                        </div>
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