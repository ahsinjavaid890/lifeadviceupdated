@extends('admin.layouts.main-layout')
@section('title','Add New Plan')
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
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Card-->
            @include('alerts.index')
            <form method="POST" action="{{ url('admin/plans/createnewplanbenifit') }}">
                        @csrf
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add New Plan Benifit
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Select Product</label>
                            <select required onchange="selectproduct(this.value)" name="product_id" class="form-control">
                                <option value="">Select Product</option>
                                @foreach(DB::table('wp_dh_insurance_plans')->wherenotnull('product')->groupby('product')->get() as $r)
                                <option value="{{ $r->product }}">{{ DB::table('wp_dh_products')->where('pro_id' , $r->product)->first()->pro_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label>Select Plan</label>
                            <select required name="plan_id" id="plan_id" class="form-control">
                                <option value="">Select Plan</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label>Select Pre Exisitng Condition</label>
                            <select required name="pre_existing" id="pre_existing" class="form-control">
                                <option value="">Select Pre Exisitng Condition</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label>Select Benifit Category</label>
                            <select required class="form-control" name="benifitcategory">
                            <option value="">Select Benifit Category</option>
                            @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'desc')->get() as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label>Enter Heading of Benefit</label>
                            <input required name="benefits_head" class="form-control" placeholder="Enter Heading of Benefit" type="text">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label>Enter Benefit Description</label>
                            <textarea  placeholder="Enter benefit Description" class="summernote" spellcheck="false" id="ibenefitDesc1" name="benefits_desc"></textarea>
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
<script type="text/javascript">
    function selectproduct(id) {
        $.ajax({
            type: 'get',
            url: '{{ url("admin/plans/getcompaniesagainstplan") }}/?id='+id,
            success: function(res) {
                $('#plan_id').html(res);                                
            }
        });
    }
</script>
@endsection