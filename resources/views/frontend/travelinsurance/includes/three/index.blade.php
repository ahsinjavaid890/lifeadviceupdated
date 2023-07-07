<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
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
<div class="row filterdiv hidden-xs" style="border: 1px solid #ddd;background: #F9F9F9;text-align: center;padding-top: 10px;border-top: 4px solid #DDD;">   
    <div class="col-md-2 hidden-xs" style="padding:10px; font-size:21px; font-weight:bold; color:#444;padding-top: 25px;">
    <i class="fa fa-filter"></i> Filter Results
    </div>
    <div class="col-md-3 adjust-quoto" style="border:none;">
        <h4 class="deductible" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible" value="$<?php if($havethousand == 'no'){ echo '0'; } else {echo '1000'; } ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;"></h4>
        
        <div id="slider" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
    </div>
    <div class="col-md-3 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
         <h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" value="$<?php echo $request->sum_insured2;?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;"></h4>
        <div id="sum_slider" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
    </div>
    <div class="col-md-3 quote_reference" style="font-size:15px;">
        <h3 style="font-weight:bold; margin:0; padding:0;">Quote Reference</h3> 
        <span style="color:#C00;"><?php echo $quoteNumber; ?></span><br/>
        <small style="font-size: 100%;font-weight: 600;"><i class="fa fa-calendar"></i> <?php echo $request->departure_date . "-" . $request->return_date; ?></small>
    </div>
</div>

<div class="row">
    <div class="col-md-12 right-bar-content" id="listprices" style="padding:0;">
        
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
<div class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style=" display: <?php if($request->sum_insured2 == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="row plan-details   deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>; padding: 0;">
<div class="col-md-4" style="padding-bottom: 10px; text-align:center;padding-left: 0;">
<h1 style="margin-top: 0;font-size: 20px;color: #FFF;line-height: 50px;text-align: left;background: url(https://lifeadvice.ca/wp-content/uploads/2019/03/plan_bg.png);background-repeat: no-repeat;padding-left: 20px;"><?php echo $plan_name; ?></h1>
<img style="width:auto; max-height: 110px;" src="{{ url('public/images') }}/<?php echo $comp_logo; ?>" class="img-responsive" />


<style>
.hoverdetails_<?php echo $deductible.$plan_id;?> {
    width: 400px;background: #fff;border: 1px solid #ccc;position: absolute;z-index: 100;box-shadow: 0 0 2px #999;border-radius: 2px;display:none;padding:10px 0;
}
.hoverdetails_<?php echo $deductible.$plan_id;?> h2 {
font: 400 14px Arial,Helvetica,sans-serif;line-height: normal;color: #2ba382;line-height: 30px;border-bottom: 1px solid #999;padding-bottom: 5px;margin: 0; 
}
.hoverdetails_<?php echo $deductible.$plan_id;?> h3 {
font: 400 14px Arial,Helvetica,sans-serif;line-height: normal;color: #333;line-height: 30px;padding-bottom: 5px;margin: 0;  
}
.hoverdetails_<?php echo $deductible.$plan_id;?> h3 span{
color: #2ba382;
font-weight:bold;   
}
.hover_<?php echo $deductible.$plan_id;?>:hover  .hoverdetails_<?php echo $deductible.$plan_id;?>{
    display:block !important;
}
.no-padding {
    padding:0;
}
</style>        
                <div class="hover_<?php echo $deductible.$plan_id;?>"><a href="#" style="display:block; padding:5px;color: #337ab7;"><i class="fa fa-info-circle"></i> Policy Details</a>
                <div class="row hoverdetails_<?php echo $deductible.$plan_id;?>" >
                    <div class="col-md-12"><h2><strong>Quote Details <?php echo $product_name;?></strong></h2></div>
                    <div class="col-md-12"><h3>Totel Premium: <span>$<?php echo number_format($total_price,2);?></span></h3>
                                                            <?php if($monthly_two == '1'){?>
        <h2 style="padding;5px; margin:0; font-size:15px; font-weight:bold;color: #333;font-family: arial;padding: 3px;line-height: normal;margin-bottom: 10px;width: auto;">$<?php echo number_format($monthly_price,2);?>/Month<small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
        <?php } ?>  
                    </div>
                    <div class="col-md-12">
                    <div class="col-md-12" style="border:1px solid #333; text-align:left;font-size: 11px;">
                    <div class="col-md-12 no-padding"><span style="display:block; padding:3px; font-size:15px; text-align:left; border-bottom:1px dashed #333;">Plan: <span style="font-size:13px; color: #2ba382;"><?php echo $plan_name;?></span></span></div>
                    <div class="col-md-12 no-padding"><small style="    font-size: 90%;">Days: <span style="color: #2ba382;"><?php echo $num_of_days;?> (<?php echo $startdate;?> - <?php echo $enddate;?>)</span></small>
                    <small style="    font-size: 90%;">Total: <span style="color: #2ba382;">$<?php echo number_format($total_price,2);?></span></small></div>
                    <div class="col-md-12 no-padding"><small style="    font-size: 90%;">Option: <span style="color: #2ba382;">Deductible Option ($<?php echo $deductible;?> (included in premium))</span></small></div>
                    <div class="col-md-12 no-padding">
                    <?php
                                        $per = 0;
                    foreach($ages_array as $person_age){
                    $per++;
                                        ?>
    
        
                                      <?php
                    $p_planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");

                    $countarraytwo =  count($p_planrates);
                    if($countarraytwo > 0)

                    {
                        $countarraytwo =  count($p_planrates);
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

                    }

                    ?>
                    <div class="col-md-12 no-padding"><span style="display:block; padding:3px; font-size:15px; text-align:left; border-bottom:1px dashed #333;">Person <?php echo $per;?></span></div>
                    <div class="col-md-12 no-padding"><small style="    font-size: 90%;">Insured: <span style="color: #2ba382;"> (Age: <?php echo $person_age; ?>)</span> Coverage Amount: <span style="color: #2ba382;">$<?php echo $sum_insured;?></span> Premium: <span style="color: #2ba382;">$<?php echo number_format($person_price,2); ?></span></small></div>
                    <?php } ?>
                    </div>
                    </div>
                    </div>
                </div>
                </div>


<span style="display:block; padding:7px;">$<?php echo $sum_insured; ?> Benefits Maximum</span>
<?php
$pdfq = DB::table('wp_dh_insurance_plans_pdfpolicies')->where('plan_id' , $plan_id)->first();
?>
@if($pdfq)
<a class="btn btn-primary" href="{{ url('public/images') }}/{{ $pdfq->pdfpolicy }}" target="_blank" style="line-height: 26px;background-color: #337ab7;  padding: 8px 14px;
"><i class="fa fa-file-pdf-o pr-1" style="color:#fff;"></i> Sample Policy</a> 
@endif
</div>

<div class="col-md-5 hidden-xs" style="font-size:11px;padding-top: 20px;">
<div class="row">
<div class="col-md-12"><strong style="font-size:15px;">Plan Features</strong></div>
</div>
        <?php
            $features = DB::table('wp_dh_insurance_plans_features')->where('plan_id' , $plan_id)->get();
            if ($features->count() > 1 ) {
                foreach($features as $feature) {
            ?>
<div class="row">
            <div class="col-md-12">
                <strong><?php echo $feature->features;?></div></strong>
          
</div>
            <?php } } ?>          
</div>
<div class="col-md-3 text-center" style="padding-top: 30px; padding-bottom: 10px;">
<h1 class="planprice"><span>Price</span> $<?php echo number_format($total_price,2);?></h1>
<p class="text-center" id="rate">This rate is for $<?php echo $deductible; ?> deductible options</p>
<div class="col-md-12 col-xs-12" >
<?php
$dob = $request->years[0].'-'.$request->month.''.$request->dob_day;
$agent = $request->agent;
$broker = $request->broker;
$buynow_url = "tab_buy.php?email=$request->email&coverage=".$sum_insured."&traveller=".$number_travelers."&deductibles=".$deductible."&deductible_rate=$deduct_rate&person1=$request->date_of_birth&days=$num_of_days&companyName=$comp_name&comp_id=".$comp_id."&planname=".$plan_name."&plan_id=".$plan_id."&tripdate=$startdate&tripend=$enddate&premium=$total_price&destination=$request->destination&cdestination=&product_name=$product_name&product_id=$data->pro_id&country=$request->primary_destination&visitor_visa_type=$product_name&tripduration=$num_of_days&age=$ages_array[0]&dob=$dob&agent=$agent&broker=$broker";
?>
<a class="submit-btn" onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeIn();" style="    font-weight: bold;padding: 7px 20px; box-shadow: none;border: 1px solid #999;  font-size: 16px;display: block;color: #FFF;background: #C00;border-radius: 5px;margin-top:2px;margin-bottom: 10px;}">
    <i class="fa fa-shopping-cart"></i> Buy Now</a>
<div class="compare hidden-xs">
<label style="border: 1px solid #CCC;   padding: 10px;text-align: center;display: block;
background: #F9F9F9; box-shadow: 0px 0px 1px 0px #CCC inset; border-radius: 3px; cursor:pointer;font-weight: bold;margin-bottom: 10px;"><input data-productid="<?php echo $data->pro_id; ?>" data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price,2));?>" type="checkbox" tabindex="0" class="hidden1" value="<?php echo str_replace(',', '', number_format($total_price,2));?>" style="height: auto;margin: 0;" onclick="comparetest()">
        Add To Compare</label>
</div>
</div>
</div>

    <div style="clear:both;"></div>
<div class="row buynow_<?php echo $deductible.$plan_id;?>" style="clear: both;  border: 1px solid rgb(204, 204, 204);background: #FFF;margin-top: 10px !important;margin-bottom: 10px !important; display:none;">
    <form method="post" action="{{ url('apply') }}">
        @csrf
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
    <div class="row" style="clear:both;margin: 0;border: 1px solid #CCC; padding: 10px;">
    <div class="col-md-6" style="background:#F9F9F9;">
    <h3 style="border-bottom:1px solid #ccc;margin: 0;font-size: 18px;font-weight: bold;">Buy Online</h3>
    <p style="font-weight: bold;">In three simple steps you can purchase your policy, easily and securely, online.</p>
    <p><input type="checkbox" name="agree" required="" style="height: auto;margin: 0;"> I give permission to LifeAdvice.ca to transfer my quote information and contact details to <?php echo $comp_name;?> in order to complete the purchase of travel insurance. LifeAdvice values your privacy. For details, see our <a href="/">Privacy Policy</a></p>
        <p></p>
    <p><button type="submit" class="submit-btn" style="font-weight: bold;padding: 7px 20px;box-shadow: none;border: 1px solid #999;font-size: 16px;display: block;color: #FFF;background: #2b3481;border-radius: 5px;margin-top: 2px; margin-bottom:10px;"><i class="fa fa-shopping-cart"></i> Buy Now</button></p>
    </div>
    <div class="col-md-6 text-center" style="font-size:16px;">
    <a href="#" onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeOut();" class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
    <p>or</p>
    <p>BY CALLING</p>
    <p><a href="tel:8555008999" style="font-size:24px; font-weight:bold; color:#44bc9b;">855-500-8999</a></p>
    <p style="font-size:13px; font-weight:bold;border-top: 1px solid #eee;padding-top: 10px;">CALL CENTRE HOURS</p>
    <p style="font-size:11px;line-height: normal;">Monday to Thursday 8:00 am to 9:00 pm EDT | Friday 8:00 am to 8:00 pm EDT | Saturday 8:30 am to 4:00 pm EDT | Closed on holidays.</p>
    </div>
</div>
    </form>
    </div>

</div>
</div>
</div>


<?php
    if ($sum_insured == $request->sum_insured2){ 
        $price[] = $total_price;
    }
    $display = ''; }}}} ?>


    </div>
</div>
    <!--    row end-->
</div>
    <script>
jQuery(function($) {
var divList = $(".listing-item");
divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});

$("#listprices").html(divList);
})
</script>

    <script src="js/jquery-1.12.4.js"></script>
 
    <script src="js/jquery-ui.js"></script>
    
    <script>
        var buynow_selected = "";
        var info_box = "";

        jQuery(".dh-toggle").click(function () {
            if (info_box != "") {
                jQuery(".dh-toggle-show-hide-" + info_box).slideToggle();
            }

            if (jQuery(this).data('value') == info_box) {
                info_box = "";
                return false;
            }

            if (buynow_selected != "") {
                jQuery(".buynow-btn-" + buynow_selected).slideToggle();
                buynow_selected = "";
            }

            var id = jQuery(this).data('value');
            info_box = id;
            jQuery(".dh-toggle-show-hide-" + id).slideToggle();
            console.log(".dh-toggle-show-hide-" + id);
        });


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


 /*       jQuery('#coverage_deductible').on('change', function () {
            if (!this.value) {
                jQuery(".plan-details").show();
            } else {
                jQuery(".plan-details").hide();
                jQuery(".deductable-" + this.value).show();
            }
        });


        jQuery('#coverage_amount').on('change', function () {
            //alert( this.value );
            if (!this.value) {
                jQuery(".coverage-amt").show();
            } else {
                jQuery(".coverage-amt").hide();
                jQuery(".coverage-amt-" + this.value).show();
            }

        });
*/
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
/*
            var values = $('#my-range-converage-deductible').data("steps").split(',');
            var default_value = $('#my-range-converage-deductible').data("default");
              
               $('#my-range-converage-deductible').rangeslider({
                polyfill : false,
                onInit : function() {
                    jQuery('.deductible span').text(default_value);
                    localStorage.setItem("default_value", default_value);

                },
                onSlide : function( position, value ) {
                    jQuery('.deductible span').text(values[this.value]);

                    
                    localStorage.setItem("default_value", values[this.value]);    
                    if(visiblePlans > 0){
                        // jQuery(".num-of-quotes").show();
                        
                    }else{
                        jQuery(".num-of-quotes").hide();
                    }                        
                    if(! value ){
                        // jQuery(".plan-details").show();
                    }else{
                        jQuery(".plan-details").hide();
                        jQuery(".deductable-"+values[this.value]).show();
                    }
                    
                    
                },
                onSlideEnd: function( position, value ){
                    visiblePlans = jQuery(".plan-details:visible").length;
                    console.log("Deductible: "+visiblePlans);

                    textToShow = "Great! We found "+visiblePlans+" for you.";
                    if(visiblePlans > 0){
                        jQuery(".num-of-quotes").text(textToShow);
                    }
                }
            });

            var values2 = $('#my-range-converage-amount').data("steps").split(',');
            var default_value2 = $('#my-range-converage-amount').data("default");
              
               $('#my-range-converage-amount').rangeslider({
                polyfill : false,
                onInit : function() {
                    jQuery('.coverage span').text(default_value2);
                    localStorage.setItem("price_value", default_value2);

                },
                onSlide : function( position, value ) {
                    jQuery('.coverage span').text(values2[this.value]);



                    textToShow = "Great! We found "+visiblePlans+" for you.";
                    localStorage.setItem("price_value", values2[this.value]);
                    if(visiblePlans > 0){
                        // jQuery(".num-of-quotes").show();
                        // jQuery(".num-of-quotes").text(textToShow);
                    }else{
                        jQuery(".num-of-quotes").hide();
                    }
                    if(! value ){
                        jQuery(".coverage-amt").show();
                    }else{
                        jQuery(".coverage-amt").hide();
                        jQuery(".coverage-amt-"+values2[this.value]).show();
                    }
                    
                    
                },
                onSlideEnd: function( position, value ){
                    visiblePlans = jQuery(".plan-details:visible").length;
                    console.log("Coverage : "+visiblePlans);

                    textToShow = "Great! We found "+visiblePlans+" for you.";
                    if(visiblePlans > 0){
                        jQuery(".num-of-quotes").text(textToShow);
                    }
                }
            });
            */
        } );

        jQuery( function() {
        
            
               
        } );

        
    </script>

   <script>
$(document).ready(function(){
    $(".baaababa").click(function(){
        $("#demo").toggleClass("agaya");
    });
});
</script>
</div>
