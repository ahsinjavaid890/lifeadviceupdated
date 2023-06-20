@extends('admin.layouts.main-layout')
@section('title','Add New Agent')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
           @include('alerts.index')
           <form method="post" action="{{ url('admin/users/addnewuser') }}" enctype="multipart/form-data">
            @csrf
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add New Agent
                            <div class="text-muted pt-2 font-size-sm">Add New Agent</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Select Website</label>
                        <select required name="website" class="form-control">
                            <option value="">Select Website</option>
                            @foreach(DB::table('site_settings')->get() as $r)

                            @if(DB::table('users')->where('website' , $r->smallname)->count() > 0)

                            @else
                            <option value="{{ $r->smallname }}">{{ $r->site_name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input required type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input required type="number" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Location</label>
                            <input required type="text" class="form-control" placeholder="Address" id="address" name="address" value=""> 
                        </div>
                        <div class="col-md-3">
                            <label>City</label>
                            <input required type="text" class="form-control" placeholder="City" id="city" name="city" value=""> 
                        </div>
                        <div class="col-md-3">
                            <label>Province</label>
                            <input required type="text" class="form-control" placeholder="Province" id="province" name="province" value=""> 
                        </div> 
                    </div>
                    <div class="form-group">
                        <label>Little About Me</label>
                        <textarea class="form-control" name="about_me" rows="3" placeholder="Write Something About You....."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Account Password</label>
                        <input required type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="password" value="Add New Agent" class="btn btn-primary" placeholder="Password">
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