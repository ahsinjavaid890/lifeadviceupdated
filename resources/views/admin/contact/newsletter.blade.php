@extends('admin.layouts.main-layout')
@section('title','All News Letters')
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
                            All News Letter
                            <div class="text-muted pt-2 font-size-sm">Manage All News Letter</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
            
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $r)
                            <tr>
                                <td>
                                    {{ $r->email }}
                                </td>

                               <td>
                                   <a class="btn btn-danger btn-sm" href="{{ url('delete/letters') }}/{{ $r->id }}"><i class="fa fa-trash"></i> Delete</a>
                               </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="margin-top:10px;" class="row">
                    
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