@extends('admin.layouts.main-layout')
@section('title','All Quotes')
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
                            All Quotes
                            <div class="text-muted pt-2 font-size-sm">Manage All Quotes</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom" style="width:100%">
                        <thead>
                            <tr>
                                <th>Created On</th>
                                <th>Number</th>
                                <th>Email</th>
                                
                                <th>Product</th>
                                <th>Coverage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)

                            @php
                                $values = json_decode($r->data, true);
                                $coverage = number_format($values['sum_insured2']);
                                $productid = $values['product_id']
                            @endphp
                                <tr>
                                    <td>{{$r->created_on}}</td>
                                    <td>{{ $r->number }}</td>
                                    
                                    <td>
                                        {{ $r->email }}
                                    </td>
                                    <td>
                                       {{ DB::table('wp_dh_products')->where('pro_id' , $productid)->first()->pro_name }}
                                    </td>
                                    <td>
                                        ${{ $coverage }}
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/sales/viewsale') }}/{{ $r->sales_id }}"><i class="fa fa-eye"></i> View Quote</a>
                                       <a class="btn btn-danger btn-sm" href="{{ url('admin/sales/viewsale') }}/{{ $r->sales_id }}"><i class="fa fa-trash"></i> Delete Quote</a>
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