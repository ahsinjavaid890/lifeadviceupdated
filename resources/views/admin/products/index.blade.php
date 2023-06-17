@extends('admin.layouts.main-layout')
@section('title','All Products')
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
                            All Products
                            <div class="text-muted pt-2 font-size-sm">Manage All Products</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Supervisa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                <tr>                                
                                    <td>
                                        {{ $r->pro_name }}
                                    </td>
                                    <td>
                                        @if($r->pro_supervisa == 1)
                                        <i class="fa fa-check text-success"></i> Yes
                                        @else
                                        <i class="fa fa-times text-danger"></i> No                                        
                                        @endif
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/products/edit') }}/{{ $r->pro_id }}"><i class="fa fa-edit"></i>Edit</a>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/products/delete') }}/{{ $r->pro_id }}"><i class="fa fa-trash"></i>Delete</a>
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