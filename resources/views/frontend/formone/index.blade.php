@include('frontend.companypages.includes.mettatittle')
@extends('frontend.layouts.main')
@section('content')
<style type="text/css">
	/*.btn{
		border-radius: 10px !important;
	}*/
</style>
<style type="text/css">
	.tabshead{
		margin-top: 67px;
	}
	.wrapper-dropdown{
		top: 22px !important;
		width: 94% !important;
	}
	@media only screen and (max-width: 600px)
	{
		.col-xs-4 {
		    width: 33%;
		    padding: 0 5px !important;
		}
	}
</style>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/mainform.css') }}">
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/daterangepicker/daterangepicker.css')}}" />
<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/front/css/bootstraptwo.min.css')}}"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/front/css/essentials.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/tab_style.css') }}">
<section class="" style="padding-top: 90px !important;">
	@if($fields['form_layout'] == 'layout_1')
		@include('frontend.travelinsurance.includes.form-one-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_2')
		@include('frontend.travelinsurance.includes.form-two-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_3')
		@include('frontend.formone.includes.formlayoutthree')
	@elseif($fields['form_layout'] == 'layout_4')
		@include('frontend.travelinsurance.includes.form-four-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_5')
		@include('frontend.travelinsurance.includes.form-five-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_6')
		@include('frontend.travelinsurance.includes.form-six-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@elseif($fields['form_layout'] == 'layout_7')
		@include('frontend.travelinsurance.includes.form-seven-supervisa')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div style="background-color:#f4f7fa;padding-bottom: 30px;" class="container-homepage">
            <div class="quotationscards">

            </div>
        </div>
	@endif
</section>
@php
        $rand = rand(100000000 , 20000000);
    @endphp
@endsection
@section('script')
<link href="{{ url('public/front/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ url('public/front/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/front/js/jquery.mask.min.js') }}"></script>
<script>
    $( document ).ready(function() {
        var divList = $(".listing-item");
        divList.sort(function(a, b){
            return $(a).data("listing-price")-$(b).data("listing-price")
        });
        $("#main").html(divList);
    });
    function slideadditionaltravelers(id) {
        var text = $('#changeshowtoless'+id).text();
        if(text == ' Show Details')
        {
            $('#changeshowtoless'+id).html('<i class="fa fa-minus-circle colorblue"></i> Hide Details');
        }else{
            $('#changeshowtoless'+id).html('<i class="fa fa-plus-circle colorblue"></i> Show Details');
        }
        $(".hoverdetails_"+id).slideToggle();
    }
    function savecompareplans(savetoplan) 
    {
        var $checkboxes = jQuery('.compare input[type="checkbox"]');
        $checkboxes.change(function(e){
            $checkboxes.attr("disabled", false);
            var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
            if (countCheckedCheckboxes == 1){
                jQuery('.two_select').hide();
                jQuery('.one_select').show();
            }else if(countCheckedCheckboxes == 2){
                jQuery('.compare_header_top').show();
                jQuery('.two_select').show();
                jQuery('.one_select').hide();
            }else if(countCheckedCheckboxes >= 3){
                jQuery('.compare_header_top').show();
                jQuery('.two_select').show();
                jQuery('.one_select').hide();
                $checkboxes.attr("disabled", true);
                $checkboxes.filter(':checked').attr("disabled", false);
            }
            else{
                jQuery('.compare_header_top').hide();
            }
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url: '{{ url("savecompareplans") }}',
            data:{savetoplan:savetoplan,rand:{{$rand}}},
            success: function(data){
                if(data){
                    $('.compare_header_top').show();
                    $('.compare_header_top').html(data);
                }else{
                    $('.compare_header_top').hide();
                }
            }
        });
    }
    function removecomarecard(id) {
        var $checkboxes = jQuery('.compare input[type="checkbox"]');
        $checkboxes.attr("disabled", false);
        $.ajax({
            type:'GET',
            url: '{{ url("removecomarecard") }}/'+id,
            cache:false,
            contentType: false,
            processData: false,
            success: function(data){
                if(data){
                    $('.compare_header_top').show();
                    $('.compare_header_top').html(data);
                }else{
                    $('.compare_header_top').hide();
                }
                
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {               
        $('#dateofbirthfull1').mask('00/00/0000');
        $('#dateofbirthfull2').mask('00/00/0000');
        $('#dateofbirthfull3').mask('00/00/0000');
        $('#dateofbirthfull4').mask('00/00/0000');
        $('#dateofbirthfull5').mask('00/00/0000');
        $('#dateofbirthfull6').mask('00/00/0000');
        $('#phonenumbermask').mask('000-000-0000');
    });
</script>
<script>
    $(".sum_insured2").select2({
        minimumResultsForSearch: -1,
        placeholder: "Select Coverage Amount",
        allowClear: false
    });
    $(".primarydestination").select2({
        minimumResultsForSearch: -1,
        placeholder: "Select Primary Destination",
        allowClear: false
    });
    $(".pre_existing_condition1").select2({
        minimumResultsForSearch: -1,
        placeholder: "Pre Existing",
        allowClear: false
    });
    $(".pre_existing_condition2").select2({
        minimumResultsForSearch: -1,
        placeholder: "Pre Existing",
        allowClear: false
    });
    $(".pre_existing_condition3").select2({
        minimumResultsForSearch: -1,
        placeholder: "Pre Existing",
        allowClear: false
    });
    $(".pre_existing_condition4").select2({
        minimumResultsForSearch: -1,
        placeholder: "Pre Existing",
        allowClear: false
    });
    $(".pre_existing_condition5").select2({
        minimumResultsForSearch: -1,
        placeholder: "Pre Existing",
        allowClear: false
    });
    $(".pre_existing_condition6").select2({
        minimumResultsForSearch: -1,
        placeholder: "Pre Existing",
        allowClear: false
    });
</script>
@endsection