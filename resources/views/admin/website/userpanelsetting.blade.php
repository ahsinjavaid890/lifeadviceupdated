@extends('admin.layouts.main-layout')
@section('title', 'User Panel Settings')
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
                                <h4 class="fw-600 mb-0">User Panel and Buy Now Form Template</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('admin/website/userpanelsettingupdate') }}"
                                    enctype='multipart/form-data' method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">User Panel</label>
                                        <div class="col-md-8">
                                            <select name="userpanel_temp" required class="form-control" id="">
                                                <option value="">Select Template</option>
                                                <option @if ($settings->userpanel_temp == 1) selected @endif value="1">Template 1</option>
                                                <option @if ($settings->userpanel_temp == 2) selected @endif  value="2">Template 2</option>
                                                <option @if ($settings->userpanel_temp == 3) selected @endif  value="3">Template 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label">Buy Now Form Setting Panel</label>
                                        <div class="col-md-8">
                                            <select name="buynow_form" required class="form-control" id="">
                                                <option value="">Select Template</option>
                                                <option @if ($settings->buynow_form == 1) selected @endif value="1">Template 1</option>
                                                <option @if ($settings->buynow_form == 2) selected @endif  value="2">Template 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-from-label"></label>
                                        <div class="col-md-8">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
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
