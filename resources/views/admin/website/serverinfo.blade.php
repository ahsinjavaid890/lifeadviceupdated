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
                                        @foreach($_SERVER as $key=>$r)
                                        @if($key == 'HTTP_COOKIE')

                                        @else

                                        @if($key == 'PATH')

                                        @else
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <span>{{$key}}</span>
                                            <span>{{ $r }}</span>
                                        </li>
                                        @endif
                                        @endif
                                        @endforeach
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
