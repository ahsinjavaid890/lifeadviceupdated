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
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Category</th>
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
                                        @if($r->category_id)
                                        {!! strip_tags(DB::table('product_categories')->where('id' , $r->category_id)->first()->name) !!}
                                        @endif
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

                                       <a  data-toggle="modal" data-target="#deleteModal{{ $r->pro_id }}" href="javascript:;" title="Delete" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>Delete</a>
                                   </td>
                                </tr>
                                <div class="modal fade" id="deleteModal{{ $r->pro_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p style="color:red;">Are you Sure You want to delete this Product</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                <a href="{{ url('admin/products/delete') }}/{{ $r->pro_id }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
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