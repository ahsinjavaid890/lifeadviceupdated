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
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Plan Name</th>
                                <th>Product Name</th>
                                <th>Company</th>
                                <th>Last Updated By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                <tr>
                                    <td>{{ $r->plan_id }}</td>
                                    
                                    <td>
                                        {{ $r->plan_name }}
                                    </td>
                                    <td>
                                        {{$r->pro_name}}
                                    </td>
                                    <td>
                                        <img src="{{ url('public/images') }}/{{ $r->comp_logo }}" width="120">
                                    </td>
                                    <td>
                                        Administrator
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/sales/viewsale') }}/{{ $r->plan_id }}"><i class="fa fa-edit"></i>Edit</a>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/sales/viewsale') }}/{{ $r->plan_id }}"><i class="fa fa-trash"></i>Delete</a>
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