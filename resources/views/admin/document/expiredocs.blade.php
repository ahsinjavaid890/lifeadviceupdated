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
                        <strong>Expired Documents Report</strong>
                        </span>
                     </div>
                  </div>
                  <div class="card-body">
                     <h4 class="red">
                        <span class="middle">Licensing and/or E&amp;O Documents</span><br>
                        <small><i class="fa fa-info-circle"></i> Only approved but expired documents will be shown into this report.</small>
                     </h4>
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
                                    </select>
                                    records
                                 </label>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-12">
                              <div id="datatable_sample_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-small input-inline" placeholder="" aria-controls="datatable_sample"></label></div>
                           </div>
                        </div>
                        <div class="table-scrollable">
                           <table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_sample" role="grid" aria-describedby="datatable_sample_info">
                              <thead>
                                 <tr role="row">
                                    <th class="center sorting" tabindex="0" aria-controls="datatable_sample" rowspan="1" colspan="1" aria-label="SrNo: activate to sort column ascending" style="width: 75.8889px;">SrNo</th>
                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="Uploaded By" style="width: 240.889px;">Uploaded By</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Document Type/Name" style="width: 298.889px;">Document Type/Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Expired On" style="width: 152.889px;">Expired On</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable_sample" rowspan="1" colspan="1" aria-label="Province: activate to sort column ascending" style="width: 123.889px;">Province</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Current Status" style="width: 199px;">Current Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach(DB::table('user_license')->get() as $r)
                                    <style type="text/css">
                                         .label-warning{
                                            border-radius: 5px !important;
                                            width: 70px;
                                        }
                                    </style>
                                 <tr role="row" class="odd">
                                    <td class="center">1</td>
                                    <td class="sorting_1"><a href="user_profile.php?id=1">{{ $r->user_id}} </a><br><small><i class="fa fa-clock-o"></i> {{ $r->dated}}</small></td>
                                    <td><a href="{{ $r->license}}" target="_blank"><i class="fa fa-file"></i> License</a></td>
                                    <td>{{ $r->expiry_date}}</td>
                                    <td>{{$r->province}}</td>
                                    <td><span class="label label-warning arrowed-in arrowed-in-right">Expired</span></td>
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
                                    <li class="prev disabled"><a href="#" title="First"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li class="next disabled"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li>
                                    <li class="next disabled"><a href="#" title="Last"><i class="fa fa-angle-double-right"></i></a></li>
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