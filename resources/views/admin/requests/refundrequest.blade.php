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
                            All Refund Request
                            <div class="text-muted pt-2 font-size-sm">Manage All Request</div>
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
                                <th><strong>Return Date</strong></th>
                                <th><strong>Refund Form </strong></th>
                                <th><strong>Proof Document </strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)

                          

                            <tr @if($r->new_status == '1') style="background-color:#ddd;" @endif>

                                <td>{{ $r->reffrence_number }} @if($r->new_status == '1') <span class="badge badge-danger">New</span> @endif</td>
                                <td>{{ $r->policy_number }}</td>
                                <td>
                                    {{ Cmf::date_format($r->start_date) }}
                                </td>
                                <td>{{ Cmf::date_format($r->return_date) }}
                                </td>

                                <td>
                                    <a class="btn btn-primary btn-sm" <?php if(empty( $r->refund_form)){
                                        ?>
                                        style="background-color:#3e9dff9e;border-color:#3e9dff9e;pointer-events: none;"
                                        <?php
                                    }
                                    ?>
                                    
                                        href="{{ url('public/images') }}/{{ $r->refund_form }}" target="_blank"><i class="fa fa-eye"></i>
                                        View</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" <?php if(empty( $r->proof_of_return)){
                                        ?>
                                        style="background-color:#3e9dff9e;border-color:#3e9dff9e;pointer-events: none;"
                                        <?php
                                    }
                                    ?>
                                        href="{{ url('public/images') }}/{{ $r->proof_of_return }}" target="_blank"><i class="fa fa-eye"></i>
                                        View</a>
                                </td>

                                <td>
                                    @php
                                    $btn = "";
                                    $style = "";
                                        if($r->request_status == "Pending"){
                                            $btn = "btn-info";
                                        }else{
                                            $style = 'style=background-color:#02a702;color:white';
                                        }
                                    @endphp
                                    

                                    <a href="{{url('admin/sales/refundrequest/status')}}/{{ $r->id }}" {{$style}}
                                        class="btn {{$btn}}">{{ $r->request_status }}</a>
                                </td>

                                <td>


                                    <a data-toggle="modal" data-target="#deleteModal{{ $r->id }}" href="javascript:void(0);"
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
                                            <a href="{{ url('admin/sales/refundrequest/delete') }}/{{ $r->id }}"
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