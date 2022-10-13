@extends('admin.layouts.main-layout')
@section('title','Basic Details Attributes')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">

            <ul class="nav nav-light-success nav-pills" id="myTab3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-3" data-toggle="tab" href="#home-3">
                        <span class="nav-text">Job Details</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-3" data-toggle="tab" href="#profile-3" aria-controls="profile">
                        <span class="nav-text">Pay Options</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content mt-5" id="myTabContent3">
                <div class="tab-pane fade active show" id="home-3" role="tabpanel" aria-labelledby="home-tab-3">
                    <!--begin::Card-->
                        <div class="card card-custom mt-5">
                            <div class="card-header flex-wrap py-5">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Job Details
                                        <div class="text-muted pt-2 font-size-sm">Manage attributes</div>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-head-custom table-checkable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Attribute</th>
                                            <th>Type</th>
                                            <th>Options</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data->where('type' , 'job_detail') as $r)
                                        <tr>
                                            <td>
                                                {{ $r->name }}
                                            </td>
                                            <td>
                                                {{ $r->option_type }}
                                            </td>
                                            <td>
                                                {{ $r->options }}
                                            </td>
                                            <td nowrap="">
                                                <a onclick="editjobattribute({{ $r->id }})" href="javascript:void(0)" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Card-->
                </div>
                <div class="tab-pane fade" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
                    <!--begin::Card-->
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Pay options
                                    <div class="text-muted pt-2 font-size-sm">Manage attributes</div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-custom table-checkable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Attribute</th>
                                            <th>Type</th>
                                            <th>Options</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data->where('type' , 'pay_options') as $r)
                                        <tr>
                                            <td>
                                                {{ $r->name }}
                                            </td>
                                            <td>
                                                {{ $r->option_type }}
                                            </td>
                                            <td>
                                                {{ $r->options }}
                                            </td>
                                            <td nowrap="">
                                                <a onclick="editjobattribute({{ $r->id }})" href="javascript:void(0)" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal-->
<div class="modal fade" id="addAttributes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Attributes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="POST" action="{{ url('admin/jobs/updateattributes') }}">
                 @csrf
            <div id="modalboyd" class="modal-body">
                <div class="row" id="namefields">
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-control select2 form-control-lg form-control-solid" style="width:100%; height: 55px !important; background: #f3f6f9 !important; border: 1px solid #E4E6EF !important;" id="kt_select2_11" multiple name="param[]">
                            <option>Company Solo</option>   
                            <option>LP</option> 
                            <option>Team, Team</option> 
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection