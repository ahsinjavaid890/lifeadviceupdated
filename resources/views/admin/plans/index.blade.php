@extends('admin.layouts.main-layout')
@section('title','All Plans')
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
                            All Plans
                            <div class="text-muted pt-2 font-size-sm">Manage All Plans</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ url('admin/plans/addnewplan') }}" class="btn btn-primary font-weight-bolder" >
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Plan
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Logo</th>
                                <th>Plan Name</th>
                                <th>Product Name</th>
                                <th>Company Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                <tr>
                                    <td>{{ $r->plan_id }}</td>
                                    <td>
                                        <img class="img-thumbnail" src="{{ url('public/images') }}/{{ $r->comp_logo }}" width="120">
                                    </td>
                                    <td>
                                        {{ $r->plan_name }}
                                    </td>
                                    <td>
                                        {{$r->pro_name}}
                                    </td>
                                    <td>
                                        {{$r->comp_name}}
                                    </td>
                                   <td class="text-center">
                                        <div class="btn-group">
                                           <a class="btn btn-primary btn-sm" href="{{ url('admin/plans/editplan') }}/{{ $r->plan_id }}"><span class="material-symbols-outlined">edit</span></a>
                                           <a  onClick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm" href="{{ url('admin/plans/deleteplan') }}/{{ $r->plan_id }}"><span class="material-symbols-outlined">delete</span></a>
                                       </div>
                                   </td>
                                </tr>

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