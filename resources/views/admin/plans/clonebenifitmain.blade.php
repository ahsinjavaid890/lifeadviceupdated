@extends('admin.layouts.main-layout')
@section('title','Edit Plan Benifit')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <h5 class="text-dark font-weight-bold my-1 mr-5">Plans Benifits</h5>
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/plans/planbenifits') }}" class="text-muted">All Plan Benifits</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javscript:void(0)" class="text-muted">Clone Benifit for Plan {{ DB::table('wp_dh_insurance_plans')->where('id' , $plan_id)->first()->plan_name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Card-->
            @include('alerts.index')
                <form method="POST" action="{{ url('admin/plans/submitmainclonebenifit') }}">
                @csrf
                <input type="hidden" value="{{ $plan_id }}" name="plan_id">
                <div class="card card-custom mt-5">
                    <div class="card-body">
                        <style type="text/css">
                            .form-group{
                                margin-bottom: 10px !important;
                            }
                        </style>
                        @foreach($data as $r)
                        <div class="row mb-3" style="border: 1px solid #ddd;padding: 10px;border-radius: 10px;">
                            <div class="col-md-12">
                                <label>Select Benifit Category</label>
                                <select required class="form-control" name="benifitcategory[]">
                                <option value="">Select Benifit Category</option>
                                @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'desc')->get() as $c)
                                <option @if($r->benifitcategory == $c->id) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                               </select>
                            </div>
                            <div class="col-md-12">
                                <label>Heading of Benefit</label>
                                <input value="{{ $r->benefits_head }}"  type="text" id="headinginputoption" class="form-control" name="benefits_head[]">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Select Pre Exisitng Condition</label>
                                <select required name="pre_existing[]" id="pre_existing" class="form-control">
                                    <option value="">Select Pre Exisitng Condition</option>
                                    <option @if($r->pre_existing == 'yes') selected @endif value="yes">Yes</option>
                                    <option @if($r->pre_existing == 'no') selected @endif value="no">No</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Enter Benefit Description</label>
                                <textarea required  placeholder="Enter benefit Description" class="summernotebenifit" spellcheck="false" id="ibenefitDesc1" name="benefits_desc[]">{{ $r->benefits_desc }}</textarea>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </form>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script>
@endsection