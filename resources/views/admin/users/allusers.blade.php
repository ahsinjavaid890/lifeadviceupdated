@extends('admin.layouts.main-layout')
@section('title','All Users')
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
                            All Users
                            <div class="text-muted pt-2 font-size-sm">Manage All Users</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Parent Name</th>
                                <th>Email</th>
                                <th>Pay Commission</th>
                                <th>User Type</th>
                                <th>Affiliate Code/URL</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                <tr>
                                    <td>
                                        @if($r->logo)
                                        <img src="{{ url('public/images') }}/{{ $r->logo }}">
                                        @else
                                        <i class="fa fa-leaf"></i>
                                        @endif
                                    </td>
                                    <td>{{$r->name}}</td>
                                    <td>@if($r->parent_id > 0) @else @endif</td>
                                    <td>{{$r->email}}</td>
                                    <td>
                                        @if($r->pay_commission == 'yes')
                                        <i class="fa fa-check text-success fa-lg"></i> Yes
                                        @else
                                        <i class="fa fa-times text-danger fa-lg"></i> No
                                        @endif
                                    </td>
                                    
                                    <td style="text-transform: capitalize;">{{$r->user_type}}</td>
                                    <td></td>
                                    <td>
                                        @if($r->status == 'active')
                                        <div class="badge badge-success">Active</div>
                                        @endif
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/users/viewuser') }}/{{ $r->id }}"><i class="fa fa-eye"></i> View</a>
                                       <a class="btn btn-info btn-sm" href="{{ url('admin/users/viewsale') }}/{{ $r->id }}"><i class="fa fa-edit"></i> Edit</a>
                                       <a class="btn btn-danger btn-sm" href="{{ url('admin/users/viewsale') }}/{{ $r->id }}"><i class="fa fa-trash"></i> Delete</a>
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