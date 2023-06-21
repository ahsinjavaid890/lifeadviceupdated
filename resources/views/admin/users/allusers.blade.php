@extends('admin.layouts.main-layout')
@section('title','All Agents')
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
                            All Agents
                            <div class="text-muted pt-2 font-size-sm">Manage All Agents</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Website Agent</th>
                                <th>E&O Insurance document</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Type of User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                <tr>
                                    <td>{{$r->website}}</td>
                                    <td>@if($r->insurancedocument)
                                        <a href="{{ url('public/images') }}/{{ $r->insurancedocument }}" download="">Download Document</a>
                                        @else

                                        No Document

                                        @endif
                                    </td>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->email}}</td>                                
                                    <td>
                                        @if($r->status == 'active')
                                        <div class="badge badge-success">Active</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($r->type == 'admin')
                                        <div class="badge badge-success">{{ $r->type }}</div>
                                        @else
                                        <div class="badge badge-danger">{{ $r->type }}</div>
                                        @endif
                                    </td>
                                   <td>
                                    @if($r->email == 'info@lifeadvice.ca')

                                    @else
                                       <a class="btn btn-info btn-sm" href="{{ url('admin/users/edituser') }}/{{ $r->id }}"><i class="fa fa-edit"></i> Edit</a>
                                       <a onClick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm" href="{{ url('admin/users/deleteuser') }}/{{ $r->id }}"><i class="fa fa-trash"></i> Delete</a>
                                    @endif
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