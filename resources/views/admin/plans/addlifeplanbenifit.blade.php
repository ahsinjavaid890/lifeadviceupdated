@extends('admin.layouts.main-layout')
@section('title','Add Life Plan Benifit')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
            <form method="POST" action="{{ url('admin/plans/createlifeplanbenifit') }}">
            @csrf
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Life Plan Benifit
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Select Plan</label>
                            <select required name="plan_id" id="plan_id" class="form-control">
                                <option value="">None</option>
                                @foreach(DB::table('wp_dh_life_plans')->orderby('id' , 'ASC')->get() as $r)
                                @php
                                    $company = DB::table('wp_dh_companies')->where('comp_id' , $r->insurance_company)->first();
                                @endphp
                                <option value="{{ $r->id }}">{{ $r->id }} - {{ $r->plan_name }} @if($company) ({{$company->comp_name}}) ({{ DB::table('wp_dh_products')->where('pro_id' , $r->product)->first->pro_name }}) @endif</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <style type="text/css">
                        .appendBenefits{
                            padding: 10px;
                            border: 1px solid #ddd;
                            border-radius: 10px;
                            margin-top: 10px;
                        }
                        .original{
                            padding: 10px;
                            border: 1px solid #ddd;
                            border-radius: 10px;
                            margin-top: 10px;
                        }
                    </style>
                    <div style="margin-top: 20px;" class="row">
                       <div class="col-md-12">
                          <div class="original">
                             <div class="row">
                                <div class="col-md-12">
                                   <input required id="ibenefitHead1" name="ibenefitHead[]" class="form-control" placeholder="Enter Heading of Benefit" type="text">
                                </div>
                             </div>
                             <br>
                             <div class="row">
                                <div class="col-md-12">
                                   <textarea  placeholder="Enter benefit Description" class="form-control" spellcheck="false" id="ibenefitDesc1" name="ibenefitDesc[]"></textarea>
                                </div>
                             </div>                 
                          </div>
                          <div id="appendBenefits"></div>
                          <div class="clear" style="height:20px;"></div>
                          <div class="row">
                             <div class="col-md-12">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm addBenefits  addnewItem"><i class="fa fa-plus"></i> Add Item</a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm removeBenefits addnewItem"><i class="fa fa-trash"></i> Remove Item</a>
                                <div class="clear">&nbsp;</div>
                             </div>
                          </div>
                       </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Save Benifit</button>
                </div>
            </div>
            </form>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection
@section('script')
<script src="{{ asset('public/admin/assets/js/admin.js') }}"></script>
<script type="text/javascript">
    jQuery('.addBenefits').click(function(event) {

    var countBenefits = jQuery('#appendBenefits .appendBenefits').size() + 2;

    jQuery('#appendBenefits').append(

        '<div class="appendBenefits">' +

        '<div class="row" style="margin-top:10px;">' +

        '<div class="col-md-12">' +

        '<input type="text" id="ibenefitHead' + countBenefits + '" name="ibenefitHead[]" placeholder="Enter Heading of Benefit" class="form-control">' +

        '</div>' +

        '</div>' +
        '<br>' +
        '<div class="row">' +

        '<div class="col-md-12">' +

        '<textarea placeholder="Enter benefit Description #' + countBenefits + '" spellcheck="false" name="ibenefitDesc[]" id="ibenefitDesc" class="form-control"></textarea>' +

        '</div>' +

        '</div>' +

        '</div>');

})

jQuery('.removeBenefits').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendBenefits .appendBenefits:last-of-type').remove();

});
</script>
@endsection