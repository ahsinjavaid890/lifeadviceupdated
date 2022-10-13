@extends('admin.layouts.main-layout')
@section('title','Requests')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Carrier Requests
                            <span class="text-muted pt-2 font-size-sm d-block">Find all carrier requests here</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-md-12">
                            <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                                <thead>
                                        <tr>
                                            <th>Carrier Name/Email</th>
                                            <th>DOT Number</th>
                                            <th>Phone Number</th>
                                            <th>Company title</th>
                                            <th>Subscription</th>
                                            <th>Dated</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $r)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">{{ substr($r->user_name, 0, 1); }}</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{ $r->user_name }}</span>
                                                        <a href="#" class="text-muted text-hover-primary">{{ $r->user_email }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-{{ $r->dot_number }}</td>
                                            <td>{{ $r->contact_number }}</td>
                                            <td>{{ $r->company_name }}</td>
                                            
                                            <td>Static</td>
                                            <td>{{ Cmf::date_format($r->created_at) }}</td>
                                            <td nowrap="">
                                                <a href="{{ url('admin/carrier/approve') }}/{{ $r->user_id }}" class="btn btn-light-primary">
                                                    Approve
                                                </a>
                                                <button onclick="declinecarrier({{$r->user_id}})" class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
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

<div class="modal fade" id="declinerequest" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Decline Request<br>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.carrier.declinerequest') }}">
                 @csrf
                <input type="hidden" id="declineid" name="id">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Reason</label>
                            <textarea required class="form-control" name="reason"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection