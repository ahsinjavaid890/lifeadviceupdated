@extends('admin.layouts.main-layout')
@section('title','Manage Homepage')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Homepage
                            <span class="text-muted pt-2 font-size-sm d-block">Manage All Section In Homepage</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" style="height:45px;" class="form-control" name="home-main-image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Heading</label>
                                        <input type="text" class="form-control" name="home-main-heading">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Sub Heading <small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                        <input type="text" class="form-control" name="home-main-subheading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Text</label>
                                        <input type="text" class="form-control" name="home-btn-heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input type="text" class="form-control" name="home-btn-link">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Company Logos
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" style="height:45px;" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>




@endsection