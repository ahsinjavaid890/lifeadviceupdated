@extends('admin.layouts.main-layout')
@section('title','Add New Plan Benifit')
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
                            <h5 class="text-dark font-weight-bold my-1 mr-5">Add New Plan Benifit</h5>
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
            <form method="POST" class="needs-validation" action="{{ url('admin/plans/createnewplanbenifit') }}">
                                @csrf
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="card card-custom mt-5">
                        <div class="card-body">
                            <div class="row">
                               <div class="col-md-12">
                                    <label>Select Product</label>
                                    <select required onchange="selectproduct(this.value)" name="product_id" class="form-control">
                                        <option value="">Select Product</option>
                                        @foreach(DB::table('wp_dh_insurance_plans')->wherenotnull('product')->groupby('product')->get() as $r)
                                        <option value="{{ $r->product }}">{{ DB::table('wp_dh_products')->where('pro_id' , $r->product)->first()->pro_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Select Plan</label>
                                    <select required name="plan_id" id="plan_id" class="form-control">
                                        <option value="">Select Plan</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Select Pre Exisitng Condition</label>
                                    <select required name="pre_existing" id="pre_existing" class="form-control">
                                        <option value="">Select Pre Exisitng Condition</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Select Benifit Category</label>
                                    <select id="benifitcategory" required class="form-control" name="benifitcategory">
                                    <option value="">Select Benifit Category</option>
                                    @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'desc')->get() as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                   </select>
                                </div> 
                            </div>                   
                        </div>
                    </div>
                </div>
                <div class="col-md-8 secondportion">
                    <div class="card card-custom mt-5">
                        <div class="card-body">
                            
                                <div class="col-md-12 mt-2">
                                    <label>Enter Heading of Benefit <small id="changetoexistingheading" style="color: blue;display: none;cursor: pointer;" onclick="changetoexistingheading()">(Change to Existing Headings)</small> </label>
                                    <select required id="headingslectoption" onchange="selectheadingofbenifit(this.value)" class="form-control" name="benefits_head">
                                        <option value="">Select Heading of Benefit</option>
                                        @foreach(DB::table('wp_dh_insurance_plans_benefits')->groupby('benefits_head')->get() as $r)
                                        <option value="{{ $r->benefits_head }}">{{ $r->benefits_head }}</option>
                                        @endforeach
                                        <option value="other">Other</option>
                                    </select>
                                    <input type="text" id="headinginputoption" class="form-control" style="display:none;" name="">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Enter Benefit Description</label>
                                    <textarea required  placeholder="Enter benefit Description" class="summernote" spellcheck="false" id="ibenefitDesc1" name="benefits_desc"></textarea>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button id="createbenifitbutton" class="btn btn-primary" type="submit">Save Benifit</button>
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