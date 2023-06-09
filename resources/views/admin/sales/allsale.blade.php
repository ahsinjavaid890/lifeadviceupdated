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
                                <th><strong>Product Name</strong></th>
                                <th><strong>Start Date</strong></th>
                                <th><strong>End Date</strong></th>
                                <th><strong>Total Premium</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                <tr @if($r->newstatus == 'new') style="background-color:#ddd;" @endif>                                
                                    <td>{{ $r->reffrence_number }} @if($r->newstatus == 'new') <span class="badge badge-danger">New</span> @endif</td>
                                    <td>{{$r->product_name}}</td>
                                    <td>
                                        {{ Cmf::date_format($r->start_date) }}
                                    </td>
                                    <td>{{ Cmf::date_format($r->end_date) }}
                                    </td>
                                    <td>{{ $r->premium }}</td>
                                    <td>
                                        {{ $r->status }}
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/sales/viewsale') }}/{{ $r->id }}"><i class="fa fa-eye"></i> View Sale</a>
                                   </td>
                                </tr>

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