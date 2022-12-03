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
                    <table class="table table-bordered">
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
                            @foreach($data as $r)
                                <tr>
                                    <td>{{ Cmf::create_time_ago($r->created_at) }}</td>
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
                                       <a class="btn btn-primary btn-sm" href="{{ url('admin/contact/viewmessage') }}/{{ $r->id }}"><i class="fa fa-eye"></i> View Message</a>
                                       <a class="btn btn-danger btn-sm" href=""><i class="fa fa-trash"></i> Delete Message</a>
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