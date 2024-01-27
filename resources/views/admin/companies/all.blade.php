@extends('admin.layouts.main-layout')
@section('title','All Companies')
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
                            All Companies
                            <div class="text-muted pt-2 font-size-sm">Manage All Companies</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="javascript::void(0)" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Company
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Company Logo</th>
                                <th>Company Name</th>
                                <th>Claim Form</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td class="text-center">
                                    <img class="img-thumbnail" src="{{ url('public/images') }}/{{ $r->comp_logo }}" width="100" height="100">
                                </td>
                                <td>
                                    {{ $r->comp_name }}
                                </td>
                                <td class="text-center">
                                    @if($r->claimform)
                                    <a download="" href="{{ url('public/images') }}/{{ $r->claimform }}" class="btn btn-primary btn-xs"><i class="fa fa-file-pdf-o text-danger"></i> Claim Form</a>
                                    @else
                                    <a href="javascript:void(0)" class="btn btn-default btn-xs">No Claim Form</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a data-toggle="modal" data-target="#categoryedit{{ $r->comp_id }}" href="javascript:;" class="btn btn-sm btn-primary" title="Edit details"><span class="material-symbols-outlined">edit</span></a>
                                        <a data-toggle="modal" data-target="#deleteModal{{ $r->comp_id }}" href="javascript:;" class="btn btn-sm btn-danger" title="Delete"><span class="material-symbols-outlined">delete</span></a>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal{{ $r->comp_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <form method="POST" action="{{ url('admin/companies/deletecompany') }}">
                                    @csrf
                                <input type="hidden" value="{{ $r->comp_id }}" name="comp_id">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you Sure you want to Delete this?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you Sure You want to Delete This Page
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger font-weight-bold">Yes, Delete it</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="modal fade" id="categoryedit{{ $r->comp_id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update company: {{ $r->comp_name }}</h5>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST" action="{{ url('admin/companies/updatecompanyinfo') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $r->comp_id }}" name="id">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Logo</label>
                                                            <input name="logo" type="file" id="emailfield" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Enter Name</label>
                                                            <input value="{{ $r->comp_name }}" name="name" required type="text" id="emailfield" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Claim Form</label>
                                                            <input name="claimform" type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="margin-top:10px;" class="row">
                        {!! $data->links('frontend.pagination') !!}
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<div class="modal fade" id="exampleModalScrollable" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Add New company</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ url('admin/companies/addnewcompany') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Company Name</label>
                                <input name="name" required type="text" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Company Logo</label>
                                <input required name="logo"  accept="image/*" type="file" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Claim Form</label>
                                <input required name="claimform" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection