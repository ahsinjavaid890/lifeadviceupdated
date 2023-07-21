@extends('admin.layouts.main-layout')
@section('title','Website Settings')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            
            <div class="row">
        <div class="col-lg-8 col-md-8 offset-md-2 offset-lg-2">
            @include('alerts.index')
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="fw-600 mb-0">General</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/website/settingsupdate') }}" enctype='multipart/form-data' method="POST">
                       @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Website Name</label>
                            <div class="col-md-8">
                                
                                <input type="text" name="website_name" class="form-control" placeholder="Website Name" value="{{$settings->site_name}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Emal</label>
                            <div class="col-md-8">
                                <input type="text" name="site_email" class="form-control"  value="{{$settings->site_email}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site phone number</label>
                            <div class="col-md-8">
                                <input type="text" name="site_phonenumber" class="form-control"  value="{{$settings->site_phonenumber}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Base Color</label>
                            <div class="col-md-8">
                                <input type="color" name="site_basecolor" class="form-control"  value="{{$settings->site_basecolor}}" />
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Hover Color</label>
                            <div class="col-md-8">
                                <input type="color" name="site_hovercolor" class="form-control"  value="{{$settings->site_hovercolor}}" />
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Text Color</label>
                            <div class="col-md-8">
                                <input type="color" name="site_textcolor" class="form-control"  value="{{$settings->site_textcolor}}" />
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Address</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="site_address">{{$settings->site_address}}</textarea>
                            </div>
                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="fw-600 mb-0">Logos and Fav Icons</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/website/updatelogos') }}" enctype='multipart/form-data' method="POST">
                       @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Header Logo</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="header_logo">
                                    <input type="file" class="form-control" name="header_logo">
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Footer Logo</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="footer_logo">
                                    <input type="file" class="form-control" name="footer_logo">
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Site Fav Icon</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="favicon">
                                    <input type="file" class="form-control" name="favicon">
                                </div>
                                <br>
                                <small class="text-muted">Website favicon. 32x32 .png</small>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="fw-600 mb-0">Social Links</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/website/updatelinks') }}" enctype='multipart/form-data' method="POST">
                       @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Facebook Link</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="facebook_link">
                                    <input type="text" class="form-control"  value="{{$settings->facebook_link}}" name="facebook_link">
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Instagram Link</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="insta_link">
                                    <input type="text" class="form-control"  value="{{$settings->insta_link}}" name="insta_link">
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Twitter Link</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="twitter_link">
                                    <input type="text" class="form-control"  value="{{$settings->twitter_link}}" name="twitter_link">
                                </div>
                                <br>
                               
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection