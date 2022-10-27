@extends('frontend.layouts.main')
@section('content')
<section class="tabshead">
	<div class="container">
		<div class="row tabs">
			<div class="col-md-4 col-xs-4 text-center">
				<button class="btn">
					<i class="fa fa-user"></i> Information
				</button>
			</div>
			<div class="col-md-4 col-xs-4 text-center">
				<button class="btn active">
					<i class="fa fa-shopping-cart"></i> Quotes
				</button>
			</div>
			<div class="col-md-4 col-xs-4 text-center">
				<button class="btn ">
					<i class="fa fa-edit"></i> Apply / Buy
				</button>
			</div>
		</div>
	</div>
</section>
<section class="tabscontent">
	@if($fields['price_layout'] == 'layout_1')
		
	@elseif($fields['price_layout'] == 'layout_2')
		
	@elseif($fields['price_layout'] == 'layout_3')
		
	@elseif($fields['price_layout'] == 'layout_4')
		
	@elseif($fields['price_layout'] == 'layout_5')
		
	@elseif($fields['price_layout'] == 'layout_6')
		
	@elseif($fields['price_layout'] == 'layout_7')
		@include('frontend.formone.includes.pricelayoutseven')
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
                var compareUrl = "http://lifeadvice.ca/quote/compare_page.php?product_id=" + product_id + '&ids=' + planId + '&'+arr+'&default_value='+slider1+'&price_value='+slider2+'&rate='+main_price;
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
@endsection