@extends('admin.layouts.main-layout')
@section('title','Edit Life Plan')
@section('content')

<div id="content" class="padding-20">
					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success
						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
	<form action="?action=update" method="post" class="web-form" id="itemPlan" novalidate="novalidate" style="padding: 20px;">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Add Plan Details -->

		<div class="row">
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/essatianls.css')}}">
			<div class="panel panel-default col-md-12">
			 <div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<h4 class="text-primary" style="margin:0;"><strong><i class="fa fa-umbrella"></i> Enter Plan Details</strong></h4>
					</div>
				</div>
				<div class="row">
				<div class="col-md-4">
					<label><i class="fa fa-leaf"></i> <strong class="text-danger">Select Product</strong></label>
						<select autocomplete="on" name="ipname" id="ipname" class="form-control">
																		<option value="15">Term Insurance</option>
																		<option value="20" selected="">Life Insurance</option>
									
							</select>

				</div>
				<div class="col-md-4">
					<label><strong>Name of the Plan</strong></label>
					<input id="iplan" name="iplan" placeholder="Enter Plan Name" class="form-control" value="Monthly Test Plan" type="text">
				</div>
				<div class="col-md-4">
					<label><i class="fa fa-building"></i> <strong>Select Company</strong></label>
						<select autocomplete="on" name="icname" id="icname" class="form-control">
							<option value="">None</option>
																		<option value="2" selected="">Travlance Insurance</option>
																		<option value="4">21st Century Insurance</option>
																		<option value="6">Allianz Travel Insurance</option>
																		<option value="7">GMS Travel Insurance</option>
																		<option value="8">TuGO Travel Insurance</option>
																		<option value="9">Industrial Alliance Insurance</option>
																		<option value="10">Travel Shield</option>
																		<option value="11">Destination Canada</option>
																		<option value="12">Blue Cross Travel Insurance</option>
																		<option value="16">INGLE Insurance</option>
																		<option value="17">Allianz Insurance</option>
																		<option value="18">Ingle Assurance</option>
																		<option value="19">Manulife Life Insurance</option>
																		<option value="26">Manulife Insurance</option>
									
							</select>

				</div>
				
				</div>
				
				<div class="original row">
					<div class="col-md-12" id="links">
						<label><i class="fa fa-shopping-cart"></i> Buynow Link</label>
							<input id="directlink" name="directlink" class="form-control" placeholder="https://" value="" type="text">

					</div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
				<h4 class="item-sub" style="margin: 0;"><i class="fa fa-gear"></i> Plan Settings</h4>
				</div>
				</div>
				<div class="row">
				<div class="col-md-3">
				<div class="row">
				<div class="col-md-12">
				<label><strong>Select Rates Type</strong></label>
				</div>
				<div class="col-md-12">
				<!-- radio -->
				<label class="radio">
					<input type="radio" value="1" checked="" name="irateCalculation" id="daily" required="">
					<i></i> Monthly
				</label>
				<label class="radio">
					<input type="radio" value="2" name="irateCalculation" id="daily" required="">
					<i></i> Yearly
				</label>
				</div>
				</div>
				</div>
				<div class="col-md-9">
				<div class="row">
				<div class="col-md-12">
					<label><strong>Smoker Plan?</strong></label>					
				</div>
				<div class="col-md-12" id="stop_usa">
					<label class="radio">
						<input type="radio" value="0" name="smoke" id="smoke" required="">
						<i></i> No
					</label>
					<label class="radio">
						<input type="radio" value="1" checked="" name="smoke" id="smoke" required="">
						<i></i> Yes
					</label>
				</div>
				</div>
				</div>
				
				</div>
				
				</div>

			</div>


		</div>


<div class="panel-body">
			
					<!-- Rate Section for all other products except single -->

	<div class="daily_monthly" id="daily_monthly" display:block="">

		<div class="row" id="ratesItem">

			<div class="col-md-12">

				<h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-shopping-cart"></i> Manage Plan Prices</h4>
								<div class="original">

					<div class="row" style="margin-bottom: 10px;">
						<div class="col-md-1" style="width: 71px;margin-right: 10px;padding: 0;">
							<div class="col-md-12">
							<label><strong>Select</strong></label>
							</div>
							<div class="col-md-12">
							<label class="checkbox">
								<input type="checkbox" value="1" id="rt[]" name="rt[]">
								<i></i>
							</label>
							</div>
						</div>

						<div class="col-md-1">
							<label><strong>Min Age</strong></label>
							<input id="iratesMin1" name="iratesMin[]" class="form-control" value="1" type="text">
						</div>

						<div class="col-md-1">
							<label><strong>Max Age</strong></label>
							<input id="iratesMax1" name="iratesMax[]" class="form-control" value="100" type="text">
						</div>

						<div class="col-md-2">
							<label class="wrapup"><strong>Benefit Amount</strong></label>
							<input id="iratesSum1" name="iratesSum[]" class="form-control" value="200000" type="text">
						</div>
						<div class="col-md-1">
							<label class="wrapup"><strong>Duration</strong></label>
							<input id="iratesTime1" name="iratesTime[]" class="form-control" value="5" type="text">
						</div>
						<div class="col-md-2">
							<label class="wrapup"><strong>Sex</strong></label>
							<select id="iratesSex1" name="iratesSex[]" class="form-control">
							<option value="m" selected="">Male</option>
							<option value="f">Female</option>
							</select>
						</div>
						<div class="col-md-1">
							<label><strong>Rate ($)</strong></label>
								<input id="iratesRate1" name="iratesRate[]" class="form-control" value="200" type="text">
						</div>

					</div>

				</div>
					<div id="appendRates">
				
									<div class="appendRates" id="row_082040164" style="margin-bottom: 10px;">
					<div class="row">
							<div class="col-md-1" style="width: auto;margin-right: 10px;">
								<label class="checkbox">
								<input type="checkbox" value="082040164" id="rt[]" name="rt[]">
								<i></i>
							</label>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_082040164 form-control" value="1">
								</div>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_082040164 form-control" value="100">
								</div>
							</div>
							<div class="col-md-2">
								<div class="input">
									<input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_082040164 form-control" value="100000">
								</div>
							</div>
							<div class="col-md-1">
								<input id="iratesTime1" name="iratesTime[]" class="duration_082040164 form-control" value="5" type="text">
							</div>
							<div class="col-md-2">
								<select id="iratesSex1" name="iratesSex[]" class="form-control">
								<option value="m" selected="">Male</option>
								<option value="f">Female</option>
								</select>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="125">
								</div>
							</div>
						</div>
							</div>
										<div class="appendRates" id="row_082040183" style="margin-bottom: 10px;">
					<div class="row">
							<div class="col-md-1" style="width: auto;margin-right: 10px;">
								<label class="checkbox">
								<input type="checkbox" value="082040183" id="rt[]" name="rt[]">
								<i></i>
							</label>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_082040183 form-control" value="1">
								</div>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_082040183 form-control" value="100">
								</div>
							</div>
							<div class="col-md-2">
								<div class="input">
									<input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_082040183 form-control" value="200000">
								</div>
							</div>
							<div class="col-md-1">
								<input id="iratesTime1" name="iratesTime[]" class="duration_082040183 form-control" value="1" type="text">
							</div>
							<div class="col-md-2">
								<select id="iratesSex1" name="iratesSex[]" class="form-control">
								<option value="m" selected="">Male</option>
								<option value="f">Female</option>
								</select>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="30">
								</div>
							</div>
						</div>
							</div>
										<div class="appendRates" id="row_08204084" style="margin-bottom: 10px;">
					<div class="row">
							<div class="col-md-1" style="width: auto;margin-right: 10px;">
								<label class="checkbox">
								<input type="checkbox" value="08204084" id="rt[]" name="rt[]">
								<i></i>
							</label>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_08204084 form-control" value="1">
								</div>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_08204084 form-control" value="100">
								</div>
							</div>
							<div class="col-md-2">
								<div class="input">
									<input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_08204084 form-control" value="100000">
								</div>
							</div>
							<div class="col-md-1">
								<input id="iratesTime1" name="iratesTime[]" class="duration_08204084 form-control" value="1" type="text">
							</div>
							<div class="col-md-2">
								<select id="iratesSex1" name="iratesSex[]" class="form-control">
								<option value="m" selected="">Male</option>
								<option value="f">Female</option>
								</select>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="100000">
								</div>
							</div>
						</div>
							</div>
										<div class="appendRates" id="row_082040220" style="margin-bottom: 10px;">
					<div class="row">
							<div class="col-md-1" style="width: auto;margin-right: 10px;">
								<label class="checkbox">
								<input type="checkbox" value="082040220" id="rt[]" name="rt[]">
								<i></i>
							</label>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_082040220 form-control" value="1">
								</div>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_082040220 form-control" value="100">
								</div>
							</div>
							<div class="col-md-2">
								<div class="input">
									<input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_082040220 form-control" value="150000">
								</div>
							</div>
							<div class="col-md-1">
								<input id="iratesTime1" name="iratesTime[]" class="duration_082040220 form-control" value="1" type="text">
							</div>
							<div class="col-md-2">
								<select id="iratesSex1" name="iratesSex[]" class="form-control">
								<option value="m" selected="">Male</option>
								<option value="f">Female</option>
								</select>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="20">
								</div>
							</div>
						</div>
							</div>
										<div class="appendRates" id="row_082040402" style="margin-bottom: 10px;">
					<div class="row">
							<div class="col-md-1" style="width: auto;margin-right: 10px;">
								<label class="checkbox">
								<input type="checkbox" value="082040402" id="rt[]" name="rt[]">
								<i></i>
							</label>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_082040402 form-control" value="1">
								</div>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_082040402 form-control" value="100">
								</div>
							</div>
							<div class="col-md-2">
								<div class="input">
									<input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_082040402 form-control" value="150000">
								</div>
							</div>
							<div class="col-md-1">
								<input id="iratesTime1" name="iratesTime[]" class="duration_082040402 form-control" value="5" type="text">
							</div>
							<div class="col-md-2">
								<select id="iratesSex1" name="iratesSex[]" class="form-control">
								<option value="m" selected="">Male</option>
								<option value="f">Female</option>
								</select>
							</div>
							<div class="col-md-1">
								<div class="input">
									<input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="150">
								</div>
							</div>
						</div>
							</div>
					 </div> 		
									

				<div class="clear" style="clear:both; height:10px;"></div>

				<div class="row">

					<div class="col-md-12">
						<a href="javascript:void(0)" class="btn btn-default btn-sm addlifeRates addnewItem"><i class="fa fa-plus"></i> Add Item</a>
						<a href="javascript:void(0)" class="btn btn-warning btn-sm copylifeRates addnewItem"><i class="fa fa-copy"></i> Copy Items</a>
						<a href="javascript:void(0)" class="btn btn-danger btn-sm removelifeRates addnewItem"><i class="fa fa-trash"></i> Remove Items</a>
					</div>

				</div>

				<hr>

			</div>

			</div>


	</div>

<div class="clear"></div>

			<div class="row">
			<div class="col-md-12">

				<h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-heart"></i> Manage Benefits</h4>

				<div class="original">
					<div class="row">
						<div class="col-md-12">
							<input id="ibenefitHead1" name="ibenefitHead[]" class="form-control" value="" placeholder="Enter Heading of Benefit # 1" type="text">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<textarea placeholder="Enter benefit Description #1" class="form-control" value="" spellcheck="false" id="ibenefitDesc1" name="ibenefitDesc[]"></textarea>
						</div>
					</div>
					
				</div>

				<div id="appendBenefits"></div>

				<div class="clear" style="height:20px;"></div>

				<div class="row">
					<div class="col-md-12">
					<a href="javascript:void(0)" class="btn btn-default btn-sm addBenefits  addnewItem"><i class="fa fa-plus"></i> Add Item</a>

					<a href="javascript:void(0)" class="btn btn-danger btn-sm removeBenefits addnewItem"><i class="fa fa-trash"></i> Remove Item</a>

					<div class="clear">&nbsp;</div>
					</div>
				</div>

				<hr>

			</div>

		</div>
		
	</div>

			<div class="clear"></div>

			<div class="row">
				<div class="col-md-6"> <br>
					<button type="submit" name="submit" class="btn btn-success submit-btn addnewItem"><i class="fa fa-save"></i> Submit Changes</button>
				</div>
				<div class="clear"></div>
			</div>
		
		<div class="clear"></div>
		
		</form></div>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js')}}"></script>

<script type="text/javascript">

	// Life Rates
jQuery('.addlifeRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-3">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
    }
   // alert(countRates);

    jQuery('#appendRates').append(
        '<div class="appendRates row" id="row_'+ + new Date() +'">' +
        '<div class="col-md-1" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" class="min_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" class="max_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" class="sum_'+ + new Date()+' form-control">' +
        '</div>' +
		'<div class="col-md-1">' +
		'<input id="iratesTime1" name="iratesTime[]" class="form-control" type="text">' +
		'</div>' +
		'<div class="col-md-2">' +
		'<select id="iratesSex1" name="iratesSex[]" class="form-control">' +
		'<option value="m">Male</option>' +
		'<option value="f">Female</option>' +
		'</select>' +
		'</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div>');
   // alert(range);
})









//Copy Life Rates
jQuery('.copylifeRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
	var copy_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
	var copy_checklength = copy_values.length;            
	if(copy_checklength == 0){
	alert('Please select an item to copy');	
	} else {
    for(var i=0;i<copy_checklength;i++)
    {
	  iratesMin_value = $('.min_'+copy_values[i]).val();
	  iratesMax_value = $('.max_'+copy_values[i]).val();
	  iratesSum_value = $('.sum_'+copy_values[i]).val();
	  iratesTime_value = $('.duration_'+copy_values[i]).val();
      range+=  '<div class="col-md-3 margin5">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
		
		jQuery('#appendRates').append(
        '<div class="appendRates" id="row_'+ + new Date() +'"><div class="row" style="margin-bottom: 10px;">' +
        '<div class="col-md-1 margin5" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-1 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" value="'+iratesMin_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-1 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" value="'+iratesMax_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-2 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" value="'+iratesSum_value+'" class="form-control">' +
        '</div>' +
		'<div class="col-md-1">' +
		'<input id="iratesTime' + countRates + '" name="iratesTime[]" value="'+iratesTime_value+'" class="form-control" type="text">' +
		'</div>' +
		'<div class="col-md-2">' +
		'<select id="iratesSex' + countRates + '" name="iratesSex[]" class="form-control">' +
		'<option value="m">Male</option>' +
		'<option value="f">Female</option>' +
		'</select>' +
		'</div>' +
        '<div class="col-md-1 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div></div>');
    }
	}
   // alert(countRates);


   // alert(range);
})




//REMOVE LIFE PLAN RATES
jQuery('.removelifeRates').click(function(event) {

var rt_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
var rt_checklength = rt_values.length;            
if(rt_checklength == 0){
alert('Please select an item first');	
} else {
for(r=0;r< rt_checklength;r++)
{
//alert(rt_values[r]);
jQuery('#appendRates #row_'+rt_values[r]).remove();
}
}

    //jQuery('#appendRates .appendRates:last-of-type').remove();

});






// Benefits List

jQuery('.addBenefits').click(function(event) {

    var countBenefits = jQuery('#appendBenefits .appendBenefits').size() + 2;

    jQuery('#appendBenefits').append(

        '<div class="appendBenefits">' +

        '<div class="row" style="margin-top:10px;">' +

        '<div class="col-md-12">' +

        '<input type="text" id="ibenefitHead' + countBenefits + '" name="ibenefitHead[]" placeholder="Enter Heading of Benefit" class="form-control">' +

        '</div>' +

        '</div>' +

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