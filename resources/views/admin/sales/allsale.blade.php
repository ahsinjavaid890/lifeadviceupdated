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
                                <th><strong>Policy Number</strong></th>
                                <th><strong>Policy Title</strong></th>
                                <th><strong>Product</strong></th>
                                <th><strong>Client</strong></th>
                                <th><strong>Purchase Date</strong></th>
                                <th><strong>Effective/Expiry</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                                @php
                                    if($r->product == 1){
                                        $policytype = 'SVI';
                                    } else if($r->product == 2){
                                        $policytype = 'VTC';
                                    } else if($r->product == 3){
                                        $policytype = 'SI';
                                    } else if($r->product == 4){
                                        $policytype = 'IFC';
                                    } else if($r->product == 5){
                                        $policytype = 'ST';
                                    } else if($r->product == 6){
                                        $policytype = 'MT';
                                    } else if($r->product == 7){
                                        $policytype = 'AI';
                                    } else if($r->product == 8){
                                        $policytype = 'TII';
                                    } else if($r->product == 9){
                                        $policytype = 'BC';
                                    }else{
                                        $policytype = '';
                                    }
                                    $policy_number_temp = 10000000 + $r->sales_id;
                                    $policy_number = $policytype.$policy_number_temp;


                                    $today = strtotime(date('Y-m-d'));
                                    $st_date = strtotime($r->start_date);
                                @endphp

                                <tr>                                
                                    <td>
                                        {{ $policy_number }}
                                    </td>
                                    <td>{{$r->policy_title}}</td>
                                    <td>
                                        @if(DB::table('wp_dh_products')->where('pro_id' , $r->product)->get()->first())
                                        {{ DB::table('wp_dh_products')->where('pro_id' , $r->product)->get()->first()->pro_name }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $r->fname }} {{ $r->lname }} <br>
                                    </td>
                                    <td>{{ Cmf::date_format($r->purchase_date) }}</td>
                                    <td>
                                        {{ Cmf::date_format($r->start_date) }} / {{ Cmf::date_format($r->end_date) }}
                                    </td>
                                   <td>
                                       @if($r->policy_status == 'cancel')
                                        <div class="badge badge-danger">Cancelled</div>
                                       @elseif($r->policy_status == 'pending')
                                       <div class="badge badge-info">Pending</div>
                                       @elseif($r->policy_status == 'return')
                                       <div class="badge badge-warning">Early Return</div>
                                       @elseif($today >= $st_date && $r->policy_status == 'paid')

                                       <div class="badge badge-success">Active</div>
                                       
                                       @elseif($r->policy_status == 'paid')

                                       <div class="badge badge-success">Paid</div>
                                       
                                       @endif
                                   </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/sales/viewsale') }}/{{ $r->sales_id }}"><i class="fa fa-eye"></i> View Policy</a>
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