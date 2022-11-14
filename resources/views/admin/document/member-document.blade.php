@extends('admin.layouts.main-layout')
@section('title','All Documents')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="col-md-6">
                            <span class="title elipsis">
                                <strong><i class="fa fa-umbrella"></i> Licensing and/or E&amp;O Documents</strong> <!-- panel title -->
                            </span>
                            </div>
                        </div>
                        <div class="card-body">


                            <div id="datatable_sample_wrapper" class="dataTables_wrapper no-footer">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="dataTables_length" id="datatable_sample_length">
                                            <label>

                                                <select name="datatable_sample_length" aria-controls="datatable_sample" class="form-control input-xsmall input-inline">
                                                    <option value="5">5</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="-1">All</option>
                                                </select> records
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div id="datatable_sample_filter" class="dataTables_filter">
                                            <label>Search:
                                                <input type="search" class="form-control input-small input-inline" placeholder="" aria-controls="datatable_sample">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_sample" role="grid" aria-describedby="datatable_sample_info">
                                         <link href="{{ asset('public/admin/assetstwo/css/essentials.css')}}" rel="stylesheet" type="text/css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <thead>
                                                <tr role="row">
                                                    <th align="center" class="sorting_disabled" rowspan="1" colspan="1" aria-label="SrNo" style="width: 42.8889px;">SrNo</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable_sample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Uploaded By: activate to sort column descending" style="width: 148.889px;">Uploaded By</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Parent Broker" style="width: 116.889px;">Parent Broker</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Document Type/Name" style="width: 185.889px;">Document Type/Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable_sample" rowspan="1" colspan="1" aria-label="Vaid From/Till: activate to sort column ascending" style="width: 185.889px;">Vaid From/Till</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Province" style="width: 72.8889px;">Province</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Current Status" style="width: 121.889px;">Current Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Change Status" style="width: 180px;">Change Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(DB::table('user_license')->get() as $r)                                 
                                             <style type="text/css">
                                                     .label-success{
                                                        border-radius: 5px !important;
                                                        width: 70px;
                                                    }
                                                </style>               
                                                    <tr class="gradeX odd" role="row">
                                                        <td class="center">1</td>
                                                        <td class="sorting_1">
                                                            <a href=""><i class="fa fa-user"></i> {{ $r->user_id}}  - <small class="text-danger"></small></a>
                                                            <br>
                                                            <small><i class="fa fa-clock-o"></i> {{ $r->dated}}</small>
                                                        </td>
                                                        <td>{{ $r->user_id}}</td>
                                                        <td>
                                                            <a href="{{$r->license}}" target="_blank"><i class="fa fa-file"></i> License</a>
                                                        </td>
                                                        <td>{{ $r->eff_date}} - {{ $r->expiry_date}}</td>
                                                        <td>{{$r->province}}</td>
                                                        <td>
                                                            <span class="label label-success arrowed-in arrowed-in-right">  {{$r->status}}
                                                             
                                                        </span>
                                                        </td>
                                                        <td>
                                                            <ul class="nav">
                                                                <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                        <i class="fa fa-gear"></i> Change Status <span class="caret"></span>
                                                                    </a>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="?action=change_done&amp;id=2&amp;status=1&amp;ub=1">
                                                                                <i class="fa fa-check"></i> Approve
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?action=change&amp;id=2&amp;status=2&amp;ub=1">
                                                                                <i class="fa fa-times"></i> Reject
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <div class="dataTables_info" id="datatable_sample_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="dataTables_paginate paging_bootstrap_full_number" id="datatable_sample_paginate">
                                    <ul class="pagination" style="visibility: visible;">
                                        <li class="prev disabled">
                                            <a href="#" title="First">
                                                <i class="fa fa-angle-double-left"></i>
                                            </a></li>
                                            <li class="prev disabled">
                                                <a href="#" title="Prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>
                                            sk<li class="next disabled">
                                                <a href="#" title="Next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                            <li class="next disabled">
                                                <a href="#" title="Last">
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection