@extends('admin.layouts.main-layout')
@section('title','All Sale')
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
                            All Sale
                            <div class="text-muted pt-2 font-size-sm">Manage All Sale</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th><strong>Reffrence Number</strong></th>
                                <th><strong>Policy Number</strong></th>
                                <th><strong>Start Date</strong></th>
                                <th><strong>End Date</strong></th>
                               
                                <th><strong>New Return Date</strong></th>


                              
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)

                            @php
                            $sale_change_requests = DB::table('sale_change_requests')->where('reffrence_number' ,
                            $r->reffrence_number)->count();
                            $sale_extend_requests = DB::table('sale_extend_requests')->where('reffrence_number' ,
                            $r->reffrence_number)->count();
                            $sale_refund_requests = DB::table('sale_refund_requests')->where('reffrence_number' ,
                            $r->reffrence_number)->count();
                            @endphp

                            <tr>

                                <td>{{ $r->reffrence_number }}</td>
                                <td>{{ $r->policy_number }}</td>
                                <td>
                                    {{ Cmf::date_format($r->start_date) }}
                                </td>
                                <td>{{ Cmf::date_format($r->end_date) }}
                                </td>
                                
                                <td>
                                    {{ Cmf::date_format($r->new_return_date) }}
                                </td>
                              


                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ url('admin/sales/viewsale') }}/{{ $r->id }}"><i class="fa fa-eye"></i>
                                        View</a>

                                    <a data-toggle="modal" data-target="#deleteModal{{ $r->id }}" href="javascript:;"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>

                            <div class="modal fade" id="deleteModal{{ $r->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p style="color:red;">Are you Sure You want to delete this Sale</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                                data-dismiss="modal">Close</button>
                                            <a href="{{ url('admin/sales/deletesale') }}/{{ $r->id }}"
                                                class="btn btn-danger font-weight-bold">Yes, Delete it</a>
                                        </div>
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
@endsection