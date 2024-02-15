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
                                    <a href="javscript:void(0)" class="text-muted">Clone Benifit for Plan {{ DB::table('wp_dh_insurance_plans')->where('id' , $planid)->first()->plan_name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Card-->
            @include('alerts.index')
            <form method="POST" class="needs-validation" action="{{ url('admin/plans/submitmainclonebenifit') }}">
            @csrf
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card card-custom mt-5">
                        <div class="card-body">
                            <div class="row">
                               <div class="col-md-4">
                                    <label>Select Product</label>
                                    <select required onchange="selectproduct(this.value)" name="product_id" class="form-control">
                                        <option value="">Select Product</option>
                                        @foreach(DB::table('wp_dh_insurance_plans')->wherenotnull('product')->groupby('product')->get() as $r)
                                        <option @if(DB::table('wp_dh_insurance_plans')->where('id' , $planid)->first()->product == $r->product) selected @endif value="{{ $r->product }}">{{ DB::table('wp_dh_products')->where('pro_id' , $r->product)->first()->pro_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Select Plan</label>
                                    <select required name="plan_id" id="plan_id" class="form-control">
                                        <option value="">Select Plan</option>
                                        @foreach(DB::table('wp_dh_insurance_plans')->get() as $r)
                                        @php
                                            $company = DB::table('wp_dh_companies')->where('comp_id' , $r->insurance_company)->first();
                                        @endphp
                                        <option @if($planid == $r->id) selected @endif value="{{ $r->id }}">{{ $r->plan_name }} @if($company)({{ $company->comp_name }}) @endif</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Select Pre Exisitng Condition</label>
                                    <select required name="pre_existing" id="pre_existing" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>                   
                        </div>
                    </div>
                </div>
                <div class="col-md-12 secondportion">
                    <div class="card card-custom mt-5">
                        <div class="card-body" id="rightDiv">
                            @foreach($data as $r)
                            <div class="card mb-3 appenddiv{{ $r->id }}" id="BigButton">
                                <div class="card-header"> 
                                    <div class="col-md-12 text-right"> 
                                        <span onclick="removediv({{ $r->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></span> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mt-2">
                                            <label>Benifit Order</label>
                                            <input class="form-control" type="text" value="{{ $r->order }}" name="order[]">
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label>Select Benifit Category</label>
                                            <select id="benifitcategory" required class="form-control" name="benifitcategory[]">
                                            <option value="">Select Benifit Category</option>
                                            @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'asc')->get() as $c)
                                            <option @if($r->benifitcategory == $c->id) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                           </select>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label>Enter Heading of Benefit</label>
                                            <input value="{{ $r->benefits_head }}" type="text" class="form-control"  name="benefits_head[]">
                                        </div> 
                                        <div class="col-md-12 mt-2">
                                            <label>Enter Benefit Description</label>
                                            <textarea required  placeholder="Enter benefit Description" class="summernotebenifit" spellcheck="false" id="ibenefitDesc1" name="benefits_desc[]">{{ $r->benefits_desc }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <button id="createbenifitbutton" class="btn btn-primary" type="submit">Save Benifit</button>
                                </div>
                                <div class="col-md-6 mt-3 text-right">
                                    <span onclick="addmore()" class="btn btn-primary" type="submit">Add More</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script type="text/javascript">
    var id = 1;
    function addmore() {
        $('#rightDiv').append('<div class="card mb-3 appenddiv'+id+'" id="BigButton"> <div class="card-header"> <div class="col-md-12 text-right"> <span onclick="removediv('+id+')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></span> </div> </div> <div class="card-body"> <div class="row"><div class="col-md-6 mt-2"> <label>Benifit Order</label> <input class="form-control" type="text" required name="order[]"> </div><div class="col-md-6 mt-2"> <label>Select Benifit Category</label> <select id="benifitcategory" required class="form-control" name="benifitcategory[]"> <option value="">Select Benifit Category</option> @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'asc')->get() as $c) <option value="{{ $c->id }}">{{ $c->name }}</option> @endforeach </select> </div> <div class="col-md-12 mt-2"> <label>Enter Heading of Benefit</label> <input type="text" class="form-control"  name="benefits_head[]"> </div> <div class="col-md-12 mt-2"> <label>Enter Benefit Description</label> <textarea required  placeholder="Enter benefit Description" class="summernotebenifit'+id+'" spellcheck="false" id="ibenefitDesc1" name="benefits_desc[]"></textarea> </div> </div> </div> </div>');
        $('.summernotebenifit'+id+'').summernote({
tabsize: 4,
height: 100
});
        id++
    }
    function removediv(id) {
        $('.appenddiv'+id).remove();
    }
    function deletebenifit(id) {
        $.ajax({
            type: "POST",
            url: "{{ url('admin/plans/deletebenifit') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id:id
            },
            success: function(res) {
                getplanattributes()
            },
            error: function(error) {
                
            }
        });
    }
    function editbenifit(id) {
        $.ajax({
            type: "POST",
            url: "{{ url('admin/plans/editbenifit') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id:id
            },
            success: function(res) {
                $('.secondportion').html(res);
                $("html, body").animate({ scrollTop: 0 }, "slow");
            },
            error: function(error) {
                
            }
        });
    }
    function selectheadingofbenifit(id) {
        if(id == 'other')
        {
            $('#headinginputoption').attr('name', 'benefits_head');
            $('#headingslectoption').attr('name', '');
            $('#headinginputoption').attr('required', true);
            $('#headingslectoption').attr('required', false);
            $('#headingslectoption').hide();
            $('#headinginputoption').show();
            $('#changetoexistingheading').show();
        }else{
            $('#headinginputoption').attr('required', false);
            $('#headingslectoption').attr('required', true);
            $('#headinginputoption').attr('name', '');
            $('#headingslectoption').attr('name', 'benefits_head');
            $('#headinginputoption').hide();
            $('#headingslectoption').show();
            $('#changetoexistingheading').hide();
        }
    }
    function changetoexistingheading() {
        $('#headinginputoption').attr('required', false);
        $('#headingslectoption').attr('required', true);
        $('#headinginputoption').attr('name', '');
        $('#headingslectoption').attr('name', 'benefits_head');
        $('#headinginputoption').hide();
        $('#headingslectoption').show();
        $('#changetoexistingheading').hide();
    }
    function selectproduct(id) {
        $.ajax({
            type: 'get',
            url: '{{ url("admin/plans/getcompaniesagainstplan") }}/?id='+id,
            success: function(res) {
                $('#plan_id').html(res);   
                getplanattributes();                             
            }
        });
    }
    function selectproductmodal(id) {
        $.ajax({
            type: 'get',
            url: '{{ url("admin/plans/getcompaniesagainstplan") }}/?id='+id,
            success: function(res) {
                $('#plan_id_modal').html(res);   
            }
        });
    }

    $('.createbenifitform').on('submit',(function(e) {
        $('#createbenifitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(res){
                $('#createbenifitbutton').html('Save Benifit');
                getplanattributes()
            }
        });
    }));
    function getplanattributes() {
        var plan_id = $('#plan_id').val();
        var pre_existing = $('#pre_existing').val();
        var benifitcategory = $('#benifitcategory').val();
        $.ajax({
            type: "POST",
            url: "{{ url('admin/plans/getplanattributes') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                plan_id:plan_id,
                pre_existing:pre_existing,
                benifitcategory:benifitcategory
            },
            success: function(res) {
                $('.secondportion').html(res);
            },
            error: function(error) {
                
            }
        });
    }
    $('#merge_button').on('click', function(e) { 
        e.preventDefault();
        let array = []; 
        $("input:checkbox[name=type]:checked").each(function() { 
            array.push($(this).val()); 
        });            
        if(array.length){
            $('#clonebenifitbutton').prop('disabled' , false);
            $('#GFG_DOWN').text(`Clone Benifit IDs are: ${array}`);
            $('#GFG_DOWN').css(`color` , 'green');
            $('#checkboxvalues').val(array);
        }
        else{
            $('#GFG_DOWN').css(`color` , 'red');
            $('#clonebenifitbutton').prop('disabled' , true);
            $('#GFG_DOWN').text("Please Select atleast one Benifit For Clone"); 
        }
    });

    $("#checkedAll").change(function() {
        if (this.checked) {
            $(".clonecheckbox").each(function() {
                this.checked=true;
            });
        } else {
            $(".clonecheckbox").each(function() {
                this.checked=false;
            });
        }
    });
</script>
@endsection