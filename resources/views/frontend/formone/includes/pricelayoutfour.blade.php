<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutfour.css') }}">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
<?php
$ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
?>
var Slider_Values = [<?php
                $d = 0;
                $havethousand = 'no';
                foreach($ded as $r){
                    $d++;
                        echo $dedivalue = $r->deductible1;
                    if($d < count($ded)){
                        echo ', ';
                    }
                    if($dedivalue == 1000)
                    { 
                        $havethousand = 'yes'; 
                    }
                } ?>];
<?php if($havethousand == 'yes'){?>
var dValue = Slider_Values.indexOf(1000);
<?php } else { ?>
var dValue = Slider_Values[0];
<?php } ?>
if(dValue == '-1'){ dValue = '0'; }
$(function () {
    $("#slider").slider({
        range: "min",
        min: 0,
        max: Slider_Values.length - 1,
        step: 1,
        value: dValue,
        slide: function (event, ui) {
            $('#coverage_deductible').text(Slider_Values[ui.value]);
            //alert(Slider_Values.length);
            for (i = 0; i < Slider_Values.length; i++) {
                var group = Slider_Values[i];
                $('.deductable-'+group).css('display' , 'none');
            }
            $('.deductable-'+Slider_Values[ui.value]).css('display' , 'flex');
            $( "#coverage_deductible" ).val( "$" + Slider_Values[ui.value] );
        }
    });
});

<?php
$sum = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
?>
//Sum Insured Slider
var SliderValues = [0,<?php
                $s = 0;
                foreach($sum as $r){
                $s++;
                echo $sumamount = $r->sum_insured;
                if($s < count($sum)){
                echo ', ';
                }
                } ?>];
var iValue = SliderValues.indexOf({{ $request->sum_insured2 }});
$(function () {
    $("#sum_slider").slider({
        range: "min",
        min: 0,
        max: SliderValues.length - 1,
        step: 1,
        value: iValue,
        slide: function (event, ui) {
            $('#coverage_amount').text(SliderValues[ui.value]);
            //alert(SliderValues.length);
            for (i = 0; i < SliderValues.length; i++) {
                var group = SliderValues[i];
                $('.coverage-amt-'+group).hide();
            }
            $('.coverage-amt-'+SliderValues[ui.value]).show();
            $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
        }
    });

});
  </script>
<script>
function changedisplay(){
var displayvalue = document.getElementById('change_display').value;
if(displayvalue == '0'){
    $('.filterdiv').attr('style','display: block !important');
    document.getElementById('change_display').value = '1';
} else {
    $('.filterdiv').attr('style','display: none !important');
    document.getElementById('change_display').value = '0';
}
}
</script>
<div class="dh-listings " id="dh-get-quote">
<?php
//  error_reporting(E_ERROR);
$startdate = $request->departure_date;
$enddate = $request->return_date;

$dStart = new DateTime($request->departure_date);
$dEnd  = new DateTime($request->return_date);
$dDiff = $dStart->diff($dEnd);
$dDiff->format('%R'); // use for point out relation: smaller/greater
$num_of_days = $dDiff->days + 1;
if($num_of_days > 365 || $num_of_days == 364){ $num_of_days = 365; }

//$num_of_days = 365;
$prosupervisa = $data->pro_supervisa;
$product_name = $data->pro_name;

if($prosupervisa == '1'){
$supervisa = 'yes';
$num_of_days = 365;
} else {
$supervisa = 'no';
}

    $enable_family_plan = (!empty($request->familyplan)) ? true : false;
    $enable_pre_existing = (!empty($request->pre_existing)) ? true : false;

    if($request->familyplan_temp == 'yes'){
    $enable_family_plan = true;
    } else {
    $enable_family_plan = false;
    }
    if($request->pre_existing == 'Yes'){
    $enable_pre_existing = true;
    } else {
    $enable_pre_existing = false;
    }

    $oldest_traveller = 0;
    $family_plan      = false;
 
    $years = array();

foreach ($request->years as $r) {
    if($r)
    {
        $bday = new DateTime($r); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $diff = $today->diff($bday);
        $years[] =  $diff->y;
    }
}


if (is_array($years)){
    $ages_array = array_filter($years);
    $younger_age = min($ages_array);
    $elder_age = max($ages_array);
    $number_travelers = count($ages_array);
}
else {
    $younger_age = 0;
    $elder_age = 0;
    $number_travelers = 1;
}

if($request->familyplan_temp == 'yes'){
    if($number_travelers >= 2 && ($elder_age >= 21 && $elder_age <=58) && ($younger_age <=21)){
        $family_plan = 'yes';
    }
    else {
        $family_plan = 'no';
    }
} else {
    $family_plan = 'no';
}

if($request->familyplan_temp == 'yes' && $family_plan == 'no'){
 //echo "<script>window.location='?action=not_eligible';</script>";
}
?>
    <div class="container">
    <div class="row">
        <div class="col-md-12 visible-xs">
           <button type="button" class="btn" onclick="changedisplay()" style="display: block;width: 100%;background: #FFF !important;color: #333 !important;padding: 10px;"><i class="fa fa-gear"></i> Change Coverage</button>
    </div>
    <input type="hidden" id="change_display" name="change_display" value="0">
    

<div class="col-md-3 mt-3 side-bar filterdiv hidden-xs" style="margin:10px 0;">
   <div class="col-md-12 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
    <h2 style="margin: 0;font-size: 26px;font-weight: bold;">Adjust your quotes</h2>
      <h4 class="coverage mt-3" style="padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" value="$<?php echo $request->sum_insured2;?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;"></h4>
      <div id="sum_slider" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;margin: 26px 0px;"></div>
   </div>
   <div class="col-md-12 adjust-quoto">
      <h4 class="deductible" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible" value="$<?php if($havethousand == 'no'){ echo '0'; } else {echo '1000'; } ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;"></h4>
      <div id="slider" class="mt-0" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
   </div>
</div>


<div class="col-md-9 mt-3" style="padding:0;" id="listprices">

            <?php
        $addinquery = '';
        $lessquery = '';
        if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
            $addinquery .= "AND `premedical`='1'";
        }
        if($family_plan == 'yes'){
            $addinquery .= "AND `family_plan`='1'";
        }
        if($num_of_days < '365'){
            $lessquery = " AND `rate_base`<>'2'";
        }
        $plans_q = DB::select("SELECT * FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id' AND `status`='1' $lessquery $addinquery ORDER BY `id`");

        foreach($plans_q as $plan){

        $plan_id = $plan->id;
        $plan_name = $plan->plan_name;
        $pre_existing_name = $plan->pre_existing_name;
        $without_pre_existing_name = $plan->without_pre_existing_name;
        $insurance_company = $plan->insurance_company;
        $premedical = $plan->premedical;
        $rate_base = $plan->rate_base;  //0=Daily 1=Monthly 2=Yearly 3=Multi
        $monthly_two = $plan->monthly_two;
        $flatrate = $plan->flatrate;
        $flatrate_type = $plan->flatrate_type;
        $sales_tax = $plan->sales_tax;
        $smoke_rate = $plan->smoke_rate;
        $smoke = $plan->smoke;
        $directlink = $plan->directlink;
        $status = $plan->status;
        $cdiscountrate = $plan->cdiscountrate;
        $plan_discount = $plan->discount;
        $plan_discount_rate = $plan->discount_rate;

        $post_dest = str_replace(' ', '', strtolower($request->primary_destination));
        if($sales_tax != 0)
        {
            $salestaxeplode = explode('%', $sales_tax);
            $salestax_rate = $salestaxeplode[0];
            $salestax_dest = str_replace(' ', '', $salestaxeplode[1]);
        }
        


        //COMPANY Details
        $company = DB::table('wp_dh_companies')->where('comp_id' , $insurance_company)->first();
        $comp_id = $company->comp_id;
        $comp_name = $company->comp_name;
        $comp_logo = $company->comp_logo;


        $deductsloop = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
        foreach($deductsloop as $deductsloop_f){
            if($deductsloop_f)
            {
                $deductible = $deductsloop_f->deductible1;
            }
            
            $deduct = '';
            $deduct_rate = '';
            $deduct_plan_id = '';
            $deductsq = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id' , $plan_id)->where('deductible1' , $deductible)->first();

            if($deductsq)
            {
                $deduct = $deductsq->deductible1;
                  $deduct_rate = str_replace('-', '', $deductsq->deductible2);
            $deduct_plan_id = $deductsq->plan_id;
            }
            
          
            if($supervisa == 'yes'){
                $addinbenefit = "AND CAST(`sum_insured` AS DECIMAL)>='100000'";
            }
            $sum_insured= '';        
            $sumin = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id`='$deduct_plan_id' $addinbenefit GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");

        foreach($sumin as $suminsu){
        $sum_insured = $suminsu->sum_insured;
        $sumamt = '';

        $sumqry = DB::table('wp_dh_insurance_plans_rates')->where('plan_id' , $plan_id)->where('sum_insured' , $sum_insured)->first();
        $sumamt = $sumqry->sum_insured;


        //getting prices for each ages

            if($rate_base == '3'){
                $rates_table_name = "wp_dh_plan_day_rate";
                $addquery = "AND '$num_of_days' BETWEEN `min_range` AND `max_range`";
            } else {
                $rates_table_name = "wp_dh_insurance_plans_rates";
                $addquery = "";
            }

            $total_price = 0;
            $daily_rate = 0;
            //$single_person_rate = 0;
            //$single_person_rate = array();
            $display = array();
            if($family_plan == 'yes'){
                $plan_rates = mysqli_query($db,  "SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery" );
                $planrates = mysqli_fetch_assoc($plan_rates);
                $daily_rate = $planrates['rate'] * 2;   //Multipling by 2 for family elder rate

                if(!$daily_rate){ $display = '0'; }
            } else {
                $perone = 0;
                foreach($ages_array as $person_age){
                    $perone++;
                   $plan_rates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");
                   
                   $countarray =  count($plan_rates);
                   if($countarray > 0)
                   {

                        if($request->pre_existing[$perone-1]=='yes')
                        {
                            $dailyrate = $plan_rates[0]->rate_with_pre_existing;
                            $daily_rate += $dailyrate;
                            if($dailyrate == ''){ $dailyrate = 0; }
                            $display[] =  $dailyrate;
                            $dailyrate = 0;
                        }else{
                            $dailyrate = $plan_rates[0]->rate_without_pre_existing;
                            $daily_rate += $dailyrate;
                            if($dailyrate == ''){ $dailyrate = 0; }
                            $display[] =  $dailyrate;
                            $dailyrate = 0;
                        }

 
                   }
                    
                }
            }


//NUM OF MONTHS
$num_months = $num_of_days / 30;
$num_months = ceil($num_months ); // converting is 1.2,1.3 etc.. then it will be 2
if($num_months > 12){ $num_months = 12; }

if($rate_base == '0'){ // if daily rate
$total_price = $daily_rate * $num_of_days;
} else if($rate_base == '1'){ //if monthly rate
$total_price = $daily_rate * $num_months;
$monthly_price = $total_price / $num_months;
} else if($rate_base == '2'){ // if yearly rate
$total_price = $daily_rate;
}
else if($rate_base == '3'){ // if multi days rate
$total_price = $daily_rate;
}

if($flatrate_type == 'each'){
$flat_price = $flatrate * $number_travelers;
}else if($flatrate_type == 'total'){
$flat_price = $flatrate;
} else {
$flat_price = 0;
}
//totaldaysprice
$totaldaysprice = $total_price;
//SALES TAX
if($sales_tax != 0)
{
    if($salestax_dest == $post_dest){
    //$salesequal = 'yes';
    $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
    } else {
    $salestaxes = 0;
    //$salesequal = 'no';
    }
}else{
    $salestaxes = 0;
}

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($smoke == '0'){
$smoke_price = $smoke_rate;
} else if($smoke == '1'){
$smoke_price = ($totaldaysprice * $smoke_rate) / 100;
}
} else {
$smoke_price = 0;
}

// OTHERS
$others = ($flat_price + $salestaxes) + $smoke_price;

//Deductible
$deduct_discount = ($total_price * $deduct_rate) / 100;
$cdiscount = ($total_price * $cdiscountrate) / 100;
if (strpos($deductsq->deductible2, '-') !== false) {
//if deductible is in minus
$discount = $deduct_discount + $cdiscount;
$adddeductible = 0;
} else {
//if deductible is in plus
$discount = $cdiscount;
$adddeductible = $deduct_discount;
}

$total_price = ($total_price - $discount) + ($others + $adddeductible);
//Discount on plan calculation
$discountonplan = 0;
if($plan_discount == '1'){
if($number_travelers > 1 && $family_plan == 'no'){
$discountonplan = ($plan_discount_rate * $total_price) / 100;
}
}
$total_price = $total_price - $discountonplan;
$monthly_price = $total_price / $num_months;
if($monthly_two == '1'){
$total_price = $total_price - $flat_price;
}

if (in_array("0", $display)){ $show = '0'; } else {$show = '1'; }


if($show == '1' && $total_price > 0){
?>

 <div class="desktop-compare listing-item" data-listing-price="<?php echo str_replace(',', '', number_format($total_price));?>">
                        <div class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>"
                             style="display: <?php if($_REQUEST['sum_insured2'] == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
                            <div class="row plan-details   deductable-<?php echo $deductible; ?>"
                                 style=" display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
                                <div class="col-md-2 col-sm-6 hidden-xs">
                                    <div class=" center aligned middle aligned column">
                                        <div class="compare col-md-12 text-center">
                                            <i class="fa fa-exclamation-circle dh-toggle hidden-md" onclick="showdetails(<?php echo $plan_id; ?>)" style="cursor:pointer;position: absolute;top: 40%;left: -10px;" aria-hidden="true"></i> 
<div class="compare text-center hidden-xs" style="padding-top: 7px;">
<label class="sub header"><input data-productid="<?php echo $data->pro_id; ?>" data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price));?>" type="checkbox" tabindex="0" class="hidden1" value="<?php echo str_replace(',', '', number_format($total_price));?>" style="height: auto;margin: 0 auto; display:block;" onclick="comparetest()"> Compare</label>
</div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xs-6 logogd"
                                     style="border:0px solid #000;  text-align:center; padding: 5px 0; text-align: center ">
                                    <img style="height:auto; width:auto; margin-left: 20px"
                                         src="{{ url('public/images') }}/<?php echo $comp_logo; ?>"/>

                                </div>
                                <div class="col-md-4 col-xs-6 text-center" id="price">

                                    <h3 style="display:inline;color: #000;font-weight: bold;    font-size: 30px;">
                                        $<?php $explode = explode('.',number_format($total_price,2));
                                        ?><span><?php echo str_replace(',', '',$explode[0]).'.';?><sup class="superior"><?php echo $explode[1];?></sup></span></h3>
                                        <?php if($monthly_two == '1'){?>
                                           
        <h2 style="margin: 0; font-size: 15px; font-weight: bold; color: #333; font-family: arial; padding: 3px; line-height: normal; margin-bottom: 10px; width: auto;">$<?php echo number_format($monthly_price,2);?>/Month<small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
        <?php } ?>  
                                    <p>
                                        $<?php echo $deductible; ?> Deductible <br/>
                                    </p>

                                </div>
                                <div class="col-md-12 visible-xs"><div style="clear:both;"></div></div>
                                
                                <div class="col-md-3 col-xs-6 visible-xs text-center">
                                                <label class="compare" style="border: 1px solid #999; text-align: center; background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(0, 0, 0); font-size: 16px; text-transform: none; font-weight: normal; padding: 8px; width: 100%;border-radius: 5px;cursor: pointer;" id="mob_compare_<?php echo $sum_insured.$deductible.$plan_id;?>" onclick="mobcomparefunc_<?php echo $sum_insured.$deductible.$plan_id; ?>()">
<input data-productid="<?php echo $data->pro_id; ?>" data-pid="<?php echo $plan_id; ?>" type="checkbox" tabindex="0" class="hidden1" value="<?php echo $total_price; ?>" style="height: auto;margin: 0 auto;" onclick="comparetest()"> Compare
</label>                                                
                                                <input type="hidden" value="0" id="mobcurrent_<?php echo $sum_insured.$deductible.$plan_id; ?>">
                                                
                                    <script>
                                    function mobcomparefunc_<?php echo $sum_insured.$deductible.$plan_id; ?>(){
                                    if(document.getElementById('mobcurrent_<?php echo $sum_insured.$deductible.$plan_id; ?>').value == '0'){
                                    document.getElementById('mobcurrent_<?php echo $sum_insured.$deductible.$plan_id; ?>').value = '1';
                                    document.getElementById('mob_compare_<?php echo $sum_insured.$deductible.$plan_id; ?>').style.background = '#767676';
                                    document.getElementById('mob_compare_<?php echo $sum_insured.$deductible.$plan_id; ?>').style.color = '#FFF';
                                    } else {
                                    document.getElementById('mobcurrent_<?php echo $sum_insured.$deductible.$plan_id; ?>').value = '0'; 
                                    document.getElementById('mob_compare_<?php echo $sum_insured.$deductible.$plan_id; ?>').style.background = '#FFF';
                                    document.getElementById('mob_compare_<?php echo $sum_insured.$deductible.$plan_id; ?>').style.color = '#444';
                                    }
                                    }
                                    </script>
                                    <div style="clear:both;"></div>
                                </div>


                                <div class="col-md-3 col-xs-6" style="border:0px solid #000;text-align:center; padding-right: 5px;padding-left: 5px;">
                                <?php
                                $dob = $request->years[0].'-'.$request->month.''.$request->dob_day;
                                $agent = $request->agent;
                                $broker = $request->broker;
                                ?>

                                    <button onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeIn();" class="submit-btn"
                                            data-value="<?php echo $plan_id; ?>" class="btn btn-lg btn-danger"
                                            name="buynow"><i class="fa fa-shopping-cart"></i> Buy Now
                                    </button>
                                </div>

                                <div class="col-md-12 dh-toggle-show-hide-<?php echo $plan_id; ?>"
                                     style="display:none;">
                                     <div class="row">
                                    <div class="col-md-6">
                                        <b><i class="fa fa-briefcase" aria-hidden="true"></i> Summary:</b>
                                        <hr/>
                                        <div style="font-size:70%;">
                                            <b><?php echo $plan_name;?> - <?php echo $plan_id;?></b><br/>
                                            <b>Plan</b> <?php if($family_plan == 'yes'){ echo 'Family'; } else {echo 'Individual';}?><br/>
                                            Days&nbsp; <?php echo $num_of_days; ?> &nbsp;
                                            (<?php echo $startdate . " - " . $enddate; ?>)<Br/>
                                            Total&nbsp; $<?php echo $total_price; ?>
                                        <?php
                                        $per = 0;
                    foreach($ages_array as $person_age){
                    $per++;
                                        ?>
                                        <br/><b>Person <?php echo $per;?></b><br/>
                                        Age: <?php echo $person_age; ?><br/>
                                        Coverage Amount: <?php echo $sum_insured; ?> <br/>
                                        Premium  <?php
                    $p_planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");

                    $countarraytwo =  count($p_planrates);

                    if($countarraytwo > 0)

                    {
                        if($request->pre_existing[$per-1]=='yes')
                        {
                            $single_person_rate = $p_planrates[0]->rate_with_pre_existing;
                            $existingshow = $pre_existing_name;
                        }else{
                            $single_person_rate = $p_planrates[0]->rate_without_pre_existing;
                            $existingshow = $without_pre_existing_name;
                        }

                                        if($family_plan == 'yes' && $elder_age != $person_age){
                                        $person_daily = 0;
                                        } else if($family_plan == 'yes' && $elder_age == $person_age){
                                        $person_daily = $single_person_rate * 2;
                                        } else {
                                        $person_daily = $single_person_rate;
                                        }

                                        if($rate_base == '0'){ // if daily rate
                                        $person_price = $person_daily * $num_of_days;
                                        } else if($rate_base == '1'){ //if monthly rate
                                        $person_price = $person_daily * $num_months;
                                        } else if($rate_base == '2'){ // if yearly rate
                                        $person_price = $person_daily;
                                        }
                                        else if($rate_base == '3'){ // if multi days rate
                                        $person_price = $person_daily;
                                        }

                                        if($flatrate_type == 'each'){
                                        $p_flat_price = $flatrate;
                                        }else if($flatrate_type == 'total'){
                                        $p_flat_price = $flatrate  / $number_travelers;
                                        } else {
                                        $p_flat_price = 0;
                                        }
                                        //totaldaysprice
                                        $ptotaldaysprice = $person_price;
                                        //SALES TAX
                                        if($sales_tax != 0)
                                        {
                                            if($salestax_dest == $post_dest){
                                            //$salesequal = 'yes';
                                            $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                                            } else {
                                            $p_salestaxes = 0;
                                            //$salesequal = 'no';
                                            }
                                        }else{
                                            $p_salestaxes = 0;
                                        }

                                        //SMOKE RATE
                                        if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
                                        if($smoke == '0'){
                                        $p_smoke_price = $smoke_rate;
                                        } else if($smoke == '1'){
                                        $p_smoke_price = ($ptotaldaysprice * $smoke_rate) / 100;
                                        }
                                        } else {
                                        $p_smoke_price = 0;
                                        }

                                        // OTHERS
                                        $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

                                        //Deductible
                                        $p_deduct_discount = ($person_price * $deduct_rate) / 100;
                                        $p_cdiscount = ($person_price * $cdiscountrate) / 100;
                                        if (strpos($deductsq->deductible2, '-') !== false) {
                                        //if deductible is in minus
                                        $p_discount = $p_deduct_discount + $p_cdiscount;
                                        $p_adddeductible = 0;
                                        } else {
                                        //if deductible is in plus
                                        $p_discount = $p_cdiscount;
                                        $p_adddeductible = $p_deduct_discount;
                                        }

                                        $person_price = ($person_price - $p_discount) + ($p_others + $p_adddeductible);
                                        $p_discountonplan = 0;
                                        if($plan_discount == '1'){
                                        if($number_travelers > 1 && $family_plan == 'no'){
                                        $p_discountonplan = ($plan_discount_rate * $person_price) / 100;
                                        }
                                        }
                                        $person_price = $person_price - $p_discountonplan;

                                        echo number_format($person_price,2); ?>
                            <?php } 
                        }?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <?php
                                        $features = DB::table('wp_dh_insurance_plans_features')->where('plan_id' , $plan_id)->get();
                                        ?>
                                        <b><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Features:</b>
                                        <hr/>
                                        <ul>
                                            <li>$<?php echo $request->deductible1; ?> deductible</li>
                                            <?php
                                                if ($features->count() > 1 ) {
                                                    foreach($features as $feature) {
                                                        echo "<li>".$feature->features."</li>";
                                                    }
                                                }
                                                ?>
                                        </ul>

                                    </div>
                                    <div class="col-md-3">
                                        <b><i class="fa fa-list-alt" aria-hidden="true"></i> Policy details:</b>
                                        <span style="display: none;"><? //"SELECT * FROM wp_dh_insurance_plans_rates WHERE minage <= '$year' AND maxage >= '$year' and sum_insured ='".$_REQUEST['sum_insured']."' limit 1000" ?></span>
                                        <hr/>
                                        <?php
                                        //foreach ( get_all_pdfpolicy( $plan['plan'] ) as $pdfpolicy ):
                                            //echo "<a href='$pdfpolicy->pdfpolicy' style='font-size: 70%;'>Sample Policy</a>";
                                        //endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                                
<div style="clear:both;"></div>
<div class="row buynow_<?php echo $deductible.$plan_id;?>" style="clear:both;margin: 0;border: 1px solid #CCC; display:none;">
<div class="col-md-6" style="background:#F9F9F9;padding: 15px;">
<h3 style="border-bottom:1px solid #ccc;margin: 0;font-size: 18px;font-weight: bold;">Buy Online</h3>
<p style="font-weight: bold;">In three simple steps you can purchase your policy, easily and securely, online.</p>

<p>
    <form method="post" action="{{ url('apply') }}">
            @csrf
            <p><input type="checkbox" name="agree" style="height: auto;margin: 0;"> I give permission to LifeAdvice.ca to transfer my quote information and contact details to <?php echo $comp_name;?> in order to complete the purchase of travel insurance. LifeAdvice values your privacy. For details, see our <a href="/">Privacy Policy</a></p>
            <p></p>
            <input type="hidden" value="{{ $request->savers_email }}" name="email">
            <input type="hidden" value="{{ $request->fname }}" name="fname">
            <input type="hidden" value="{{ $request->lname }}" name="lname">
            <input type="hidden" value="{{ $sum_insured }}" name="coverage">
            <input type="hidden" value="{{ $number_travelers }}" name="traveller">
            <input type="hidden" value="{{ $deductible }}" name="deductibles">
            <input type="hidden" value="{{ $deduct_rate }}" name="deductible_rate">
            <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
            @foreach($request->years as $year)
            <input type="hidden" name="years[]" value="{{ $year }}">
            @endforeach
            @foreach($request->pre_existing as $preexisting)
    <input type="hidden" name="preexisting[]" value="{{ $preexisting }}">
    @endforeach
            <input type="hidden" value="{{ $num_of_days }}" name="days">
            <input type="hidden" value="{{ $comp_name }}" name="companyName">
            <input type="hidden" value="{{ $comp_id }}" name="comp_id">
            <input type="hidden" value="{{ $plan_name }}" name="planname">
            <input type="hidden" value="{{ $plan_id }}" name="plan_id">
            <input type="hidden" value="{{ $startdate }}" name="tripdate">
            <input type="hidden" value="{{ $enddate }}" name="tripend">
            <input type="hidden" value="{{ $total_price }}" name="premium">
            <input type="hidden" value="" name="cdestination">
            <input type="hidden" value="{{ $product_name }}" name="product_name">
            <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
            <input type="hidden" value="{{ $request->primary_destination }}" name="destination">
            <input type="hidden" value="{{ $product_name }}" name="visitor_visa_type">
            <input type="hidden" value="{{ $num_of_days }}" name="tripduration">
            <input type="hidden" value="{{ $ages_array[0] }}" name="age">
            <input type="hidden" value="{{ $dob }}" name="dob">
            <input type="hidden" value="{{ $agent }}" name="agent">
            <input type="hidden" value="{{ $broker }}" name="broker">
            <button class="submit-btn" type="submit"><i class="fa fa-shopping-cart"></i> Buy Now</button>
        </form>
</p>
</div>
<div class="col-md-6 text-center" style="font-size:16px;">
<a href="#" onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeOut();" class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
<p>or</p>
<p>BY CALLING</p>
<p><a href="tel:+18555005041" style="font-size:24px; font-weight:bold; color:#44bc9b;">+1-855-500-5041</a></p>
<p style="font-size:13px; font-weight:bold;border-top: 1px solid #eee;padding-top: 10px;">CALL CENTRE HOURS</p>
<p style="font-size:11px;line-height: normal;">Monday to Thursday 8:00 am to 9:00 pm EDT | Friday 8:00 am to 8:00 pm EDT | Saturday 8:30 am to 4:00 pm EDT | Closed on holidays.</p>
</div>
</div>

                            </div>


                         </div>
                    </div>

<?php
    if ($sum_insured == $request->sum_insured2){
        // $mailitem[] = array(
        //     "deductible"  => $deductible,
        //     "sum_insured" => $sum_insured,
        //     "planproduct" => $product_name,
        //     "price"       => $total_price,
        //     "quote"       => $quoteNumber,
        //     "logo"        => $comp_logo,
        //     "url"         => $_SERVER['REQUEST_URI'] . "?fromemail=yes&quote=" . $quoteNumber,
        //     "buynow"      => $buynow_url
        // );
        $price[] = $total_price;
    }
    $display = ''; }}}} ?>


        </div>
     </div>
 </div>
    <!--    row end-->

<script>
jQuery(function($) {
var divList = $(".listing-item");
divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});

$("#listprices").html(divList);
})
</script>
<script>
    function showdetails(id)
    {
        $('.dh-toggle-show-hide-'+id).slideToggle();
    }
    jQuery(".buynow-btn").click(function () {
        if (buynow_selected != "") {
            jQuery(".buynow-btn-" + buynow_selected).slideToggle();
        }

        if (jQuery(this).data('value') == buynow_selected) {
            buynow_selected = "";
            return false;
        }

        if (info_box != "") {
            jQuery(".dh-toggle-show-hide-" + info_box).slideToggle();
            info_box = "";
        }

        var id = jQuery(this).data('value');
        buynow_selected = id;
        jQuery(".buynow-btn-" + id).slideToggle();
    });
</script>

    <script>

        jQuery( function() {

            var visiblePlans = jQuery(".plan-details:visible").length;
            var textToShow = "Great! We found "+visiblePlans+" for you.";
            if(visiblePlans > 0){
                // jQuery(".num-of-quotes").show();
                jQuery(".num-of-quotes").text(textToShow);
            }else{
                jQuery(".num-of-quotes").hide();
            }
        } );

        jQuery( function() {



        } );


    </script>

   <script>
$(document).ready(function(){
    $(".toggle-216").click(function(){
        $(".show-toggle-216").toggle(1000);
    });
});
</script>

</div>