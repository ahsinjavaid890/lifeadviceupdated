@extends('admin.layouts.main-layout')
@section('title','Pending Jobs')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Card-->
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Pending Jobs
                            <div class="text-muted pt-2 font-size-sm">Manage pending job postings</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Carrier</th>
                                <th>Freight type</th>
                                <th>Driver Type</th>
                                <th>Hiring Map</th>
                                <th>Operating Area</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>
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
<!--end::Content-->
    <!-- Modal-->


@endsection