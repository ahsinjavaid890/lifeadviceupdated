@extends('admin.layouts.main-layout')
@section('title','All Plans Benifits')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <h5 class="text-dark font-weight-bold my-1 mr-5">Plans Benifits</h5>
                        </div>
                    </div>
                </div>
            </div>
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            All Plans Benifits
                            <div class="text-muted pt-2 font-size-sm">Manage All Plans Benifits</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ url('admin/plans/addnewplanbenifit') }}" class="btn btn-primary font-weight-bolder" >
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Plan Benifit
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Company Name</th>
                                <th>Plan Name</th>
                                <th>Pre Exisitng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $srno = 0;
                            @endphp
                            @foreach($data as $r)
                                <tr>
                                    <td>{{ DB::table('wp_dh_products')->where('pro_id' , $r->product)->first()->pro_name }}</td>
                                    <td>{{ DB::table('wp_dh_companies')->where('comp_id' , $r->insurance_company)->first()->comp_name }}</td>
                                    <td>
                                       @if($r->plan_name) {{ $r->plan_name }} @else <div class="badge badge-danger">No Plan Name Found</div> <br><a target="_blank" href="{{ url('admin/plans/editplan') }}/{{ $r->plan_id }}">Click To Add Plan Name</a> @endif
                                    </td>
                                    <td>
                                        {{$r->pre_existing}}
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/plans/editplanbenifit') }}/{{ $r->benifit_id }}"><i class="fa fa-edit"></i>Edit</a>
                                       <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#deleteModal{{ $r->benifit_id }}" href="javascript:;"><i class="fa fa-trash"></i>Delete</a>
                                   </td>
                                </tr>
                                <div class="modal fade" id="deleteModal{{ $r->benifit_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p style="color:red;">Are you Sure You want to delete this. </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                <a  href="{{ url('admin/plans/deleteplanbenifit') }}/{{ $r->benifit_id }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection