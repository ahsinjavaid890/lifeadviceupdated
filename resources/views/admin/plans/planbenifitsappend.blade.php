@if(isset($edit))
<div class="card card-custom mt-5">
    <div class="card-body">
        <form method="POST" class="needs-validation createbenifitform" action="{{ url('admin/plans/updatebenifit') }}">
            @csrf
            <input type="hidden" value="{{ $data->id }}" name="id">
            <div class="col-md-12 mt-2">
                <label>Update Heading of Benefit <small id="changetoexistingheading" style="color: blue;display: none;cursor: pointer;" onclick="changetoexistingheading()">(Change to Existing Headings)</small> </label>
                <select required id="headingslectoption" onchange="selectheadingofbenifit(this.value)" class="form-control" name="benefits_head">
                    <option value="">Select Heading of Benefit</option>
                    @foreach(DB::table('wp_dh_insurance_plans_benefits')->groupby('benefits_head')->get() as $r)
                    <option value="{{ $r->benefits_head }}" @if($r->benefits_head == $data->benefits_head) selected @endif >{{ $r->benefits_head }}</option>
                    @endforeach
                    <option value="other">Other</option>
                </select>
                <input type="text" id="headinginputoption" class="form-control" style="display:none;" name="">
            </div>
            <div class="col-md-12 mt-2">
                <label>Update Benefit Description</label>
                <textarea required  placeholder="Enter benefit Description" class="summernote" spellcheck="false" id="ibenefitDesc1" name="benefits_desc">{{ $data->benefits_desc }}</textarea>
            </div>
            <div class="col-md-12 mt-3">
                <span onclick="getplanattributes()" class="btn btn-default" type="submit">Cancel</span>
                <button id="createbenifitbutton" class="btn btn-primary" type="submit">Save Benifit</button>
            </div>
        </form>
    </div>
</div>
@else
<div class="accordion custom-accordion mt-5" id="custom-accordion-one">
    <div class="card card-custom mt-5">
        <div class="card-body cardbody" id="headingFour">
            <h5 class="m-0">
                <a class="custom-accordion-title d-block py-1 collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <div class="row">
                        <div class="col-md-8">
                            
                        </div>
                        <div class="col-md-4 text-right">
                            <button class="btn btn-primary btn-sm">Add New Benifit</button>
                        </div>
                    </div>
                </a>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#custom-accordion-one" style="">
            <div class="card-body">
                <form method="POST" class="needs-validation createbenifitform" action="{{ url('admin/plans/createnewplanbenifit') }}">
                    @csrf
                    <input type="hidden" value="{{ $plan_id }}" name="plan_id">
                    <input type="hidden" value="{{ $pre_existing }}" name="pre_existing">
                    <input type="hidden" value="{{ $benifitcategory }}" name="benifitcategory">
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
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@if($rows == 1)
@foreach(DB::table('wp_dh_insurance_plans_benefits')->where('benifitcategory' , $data->benifitcategory)->where('plan_id' , $data->plan_id)->where('pre_existing' , $data->pre_existing)->orderby('id' , 'desc')->get() as $r)
<div class="card card-custom mt-5">
    <div class="card-body cardbody">
        <div class="row">
            <div class="col-md-10">
                <h3>{{ $r->benefits_head }}</h3>
                <p>{!! $r->benefits_desc !!}</p>
            </div>
            <div class="col-md-2 text-right">
                <div class="btn-group">
                    <a onclick="editbenifit({{$r->id}})" data-toggle="tooltip" data-placement="top" data-original-title="Edit" href="javascript:void(0)" class="btn btn-sm btn-primary">
                       <span class="material-symbols-outlined"  style="font-size: 18px;"> edit </span>
                    </a>
                    <button class="btn btn-sm btn-danger">
                       <span class="material-symbols-outlined"  style="font-size: 18px;"> delete </span>
                    </button>
                </div>
            </div>
        </div>  
    </div>
</div>
@endforeach
@else
<div class="card card-custom mt-5">
    <div class="card-body cardbody">
        <div class="row">
            <div class="col-md-12">
                No Benifit Added
            </div>
        </div>  
    </div>
</div>
@endif

<script type="text/javascript">
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
</script>
<script>

$('.summernote').summernote({
tabsize: 4,
height: 250
});
</script>