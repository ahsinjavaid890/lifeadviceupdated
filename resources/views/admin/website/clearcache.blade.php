@extends('admin.layouts.main-layout')
@section('title', 'Clear Cache')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Card-->
       
                <style type="text/css">
                    .list-group-item span {
    font-size: 16px !important;
    padding: 8px 0px;
}
.text--success {
    color: #28c76f !important;
}
.list-group-item{
    padding: 0px;
}
                </style>
                <div class="row">
                    <div class="col-lg-8 col-md-8 offset-md-2 offset-lg-2">
                        @include('alerts.index')
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="fw-600 mb-0">Clear Cache</h4>
                            </div>
                            <div class="card-body" style="padding: 10px;">
                                <form action="{{ url('admin/website/clearcache') }}" method="POST">
                                    @csrf
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span><i class="las la-check-double text--success"></i> Compiled views will be cleared</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span><i class="las la-check-double text--success"></i> Application cache will be cleared</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span><i class="las la-check-double text--success"></i> Route cache will be cleared</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span><i class="las la-check-double text--success"></i> Configuration cache will be cleared</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span><i class="las la-check-double text--success"></i> Compiled services and packages files will be removed</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span><i class="las la-check-double text--success"></i> Caches will be cleared</span>
                                        </li>
                                    </ul>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary form-control">Clear Cache</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end col-->
                </div>


                
            </div>
        </div>
    </div>
    </div>
@endsection
