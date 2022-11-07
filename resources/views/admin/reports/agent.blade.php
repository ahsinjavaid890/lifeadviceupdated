@extends('admin.layouts.main-layout')
@section('title','Agent Commission Reports')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Agent Commission Reports
                            <div class="text-muted pt-2 font-size-sm">Manage All Agent Commission Reports</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                      <div class="alert alert-danger alert-dismissible">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div><br />
                    @endif
                    <form method="POST" action="{{ url('admin/reports/getagentreport') }}">
                        @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label>Start Date</label>
                            <input type="date" name="date_betweem" class="form-control" name="date_between">
                        </div>
                        <div class="col-md-3">
                            <label>End Date</label>
                            <input type="date" name="date_betweem" class="form-control" name="date_between">
                        </div>
                        <div class="col-md-3">
                            <label>Seller</label>
                            <select class="chosen-select form-control" name="seller" id="seller" data-placeholder="Select Seller" class="form-control">
                                <option value="admin">Select All</option>
                                <option value="1410">  manish sharda - 1410</option>
                                <option value="1432">  Mubashar Ahmad - 1432</option>
                                <option value="1388">  Sonu Ahmad - 1388</option>           
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">Generate Report</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection