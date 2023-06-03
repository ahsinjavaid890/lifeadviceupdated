@extends('frontend.layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/tab_style.css') }}">
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
<section class="tabshead">
	<div class="container">
		<div class="row tabs">
			<div class="col-md-4 col-xs-4 text-center information_qoutes">
				<button onclick="history.back();"  class="btn ">
					<i class="fa fa-user"></i> Information
				</button>
			</div>
			<div class="col-md-4 col-xs-4 text-center price_qoutes">
				<button class="btn active">
					<i class="fa fa-shopping-cart"></i> Quotes
				</button>
			</div>
			<div class="col-md-4 col-xs-4 text-center apply_qoutes">
				<button class="btn ">
					<i class="fa fa-edit"></i> Apply / Buy
				</button>
			</div>
		</div>
	</div>
</section>
<section class="tabscontent">
	@if($fields['price_layout'] == 'layout_1')
		@include('frontend.formone.includes.pricelayoutone')
	@elseif($fields['price_layout'] == 'layout_2')
		@include('frontend.formone.includes.pricelayouttwo')
	@elseif($fields['price_layout'] == 'layout_3')
		@include('frontend.formone.includes.pricelayoutthree')
	@elseif($fields['price_layout'] == 'layout_4')
		@include('frontend.formone.includes.pricelayoutfour')
	@elseif($fields['price_layout'] == 'layout_5')
		@include('frontend.formone.includes.pricelayoutfive')
	@elseif($fields['price_layout'] == 'layout_6')
		@include('frontend.formone.includes.pricelayoutsix')
	@elseif($fields['price_layout'] == 'layout_7')
		@include('frontend.formone.includes.pricelayoutseven')
	@elseif($fields['price_layout'] == 'layout_8')
		@include('frontend.formone.includes.pricelayouteight')
	@endif

</section>
<script>
	function comparetest(){
		var pids = [];
		var price = [];
		var $checkboxes = jQuery('.compare input[type="checkbox"]');
        $checkboxes.change(function(e){
            var pid =  jQuery(this).attr('data-pid');
            var product_id =  jQuery(this).attr('data-productid');
			var price_plan = jQuery(this).val();
            $checkboxes.attr("disabled", false);
            var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
            console.log(countCheckedCheckboxes);
            if (countCheckedCheckboxes == 1){
                jQuery('.compare_header_top').show();
                jQuery('.two_select').hide();
                jQuery('.one_select').show();
            }else if(countCheckedCheckboxes == 2 || countCheckedCheckboxes == 3){
				jQuery('.compare_header_top').show();
                jQuery('.two_select').show();
                jQuery('.one_select').hide();
            }else if(countCheckedCheckboxes >= 4){
				jQuery('.compare_header_top').show();
                jQuery('.two_select').show();
                jQuery('.one_select').hide();
				$checkboxes.attr("disabled", true);
                $checkboxes.filter(':checked').attr("disabled", false);
            }
			else{
                jQuery('.compare_header_top').hide();
            }
            if (jQuery(this).is(":checked")== false) {
                 pids.splice(pids.indexOf(pid), 1);
                 price.splice(price.indexOf(price_plan), 1);
            }else{
                pids.push(pid);
                price.push(price_plan);
           }
            var url = window.location.href; 
			var arr=url.split('?')[1];
			var slider1 = localStorage.getItem("default_value");
			var slider2 = localStorage.getItem("price_value");
			
			jQuery("#new_window").click(function(){
				var planId = jQuery.unique(pids); 
				var main_price = jQuery.unique(price);
                var compareUrl = "{{ url('compareplans') }}?product_id=" + product_id + '&ids=' + planId + '&'+arr+'&default_value='+slider1+'&price_value='+slider2+'&rate='+main_price;
				if (compareUrl.indexOf("#") > -1) {
					var myUrl = compareUrl.replace(/\#/g, '');
					var newUrl = jQuery(".two_select a").prop("href",myUrl);
			    }else{
					var newUrl = jQuery(".two_select a").prop("href",compareUrl);
				}
				var newwindow = window.open($(this).prop("href"), '', 'height=800,width=1024');
				if (window.focus) {newwindow.focus()}
				return false;	
			});

        });
		jQuery("#clear").click(function(){
		  $(".hidden1").prop("checked", false);
		  $(".hidden1").prop("disabled", false);
		  $(".two_select a").removeAttr("href");
		  pids = [];
          price = [];
		  jQuery('.compare_header_top').hide();
	   });
	}
</script>
<style>
    .compare_header_top {
        background: rgb(249, 249, 249) none repeat scroll 0% 0%;padding: 10px;position: fixed;top: 100px;width: 100%;
		display:none;
    }
</style>
<div class="compare_header_top">
    <div class="container-fluid">
		<div class="row">
            <div class="col-md-12 text-center">
			<h3 style="margin-bottom: 10px;font-weight: bold;">Select & Compare Plans</h3>
			</div>
		</div>	
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="one_select">
                   <i class="fa fa-warning text-warning"></i> Select one more plan to compare
                </div>
                <div class="two_select">
                    <a href="#" class="btn btn-primary" id="new_window"><i class="fa fa-server"></i> Compare</a>
                    <i class="icon"></i>
                    <a href="#"  class="btn btn-default" id="clear"><i class="fa fa-refresh"></i> Clear all</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection