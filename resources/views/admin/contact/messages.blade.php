@extends('admin.layouts.main-layout')
@section('title','All Messages')
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
                            All Messages
                            <div class="text-muted pt-2 font-size-sm">Manage All Messages</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom" style="width:100%">
                        <thead>
                            <tr>
                                <th>Created On</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>Mobile</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(DB::table('contactus_messages')->get() as $r)
                                <tr>
                                    <td>{{$r->id}}</td>
                                    <td>{{ $r->fname }} {{ $r->lname}}</td>
                                    
                                    <td>
                                        {{ $r->email }}
                                    </td>
                                    <td>
                                       {{ $r->mobile}}
                                    </td>
                                    <td>
                                        {{ $r->subject }}
                                    </td>
                                   <td>
                                       <a class="btn btn-primary btn-sm" href=""><i class="fa fa-eye"></i> View Message</a>
                                       <a class="btn btn-danger btn-sm" href=""><i class="fa fa-trash"></i> Delete Message</a>
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