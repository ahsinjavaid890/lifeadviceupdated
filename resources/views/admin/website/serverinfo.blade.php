@extends('admin.layouts.main-layout')
@section('title', 'Server Info')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="fw-600 mb-0">Server Info</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>PHP Version</span>
                                            <span>8.1.20</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>Server Software</span>
                                            <span>LiteSpeed</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>Server IP Address</span>
                                            <span>64.185.231.6</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>Server Protocol</span>
                                            <span>HTTP/1.1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>HTTP Host</span>
                                            <span>script.viserlab.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>Server Port</span>
                                            <span>443</span>
                                        </li>
                                    </ul>
                                </div>
                              </div>
                        </div>

                    </div> <!-- end col-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
