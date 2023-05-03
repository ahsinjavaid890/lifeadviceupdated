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
<div class="row">
    <div class="col-md-4">
        <div class="card qoute-price-card mb-3 left_qoute_card">
          <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <h4>Quote Reference : <span style="color: #2b3481;"><?php echo $quoteNumber; ?></span></h4>
                </div>
                  <div class="col-md-12 adjust-quoto" style="border:none;">
                    <h4 class="deductible" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible" value="$<?php if($havethousand == 'no'){ echo '0'; } else {echo '1000'; } ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;"></h4>
                    
                    <div class="mt-4" id="slider" style="border: 1px solid #c5c5c5;padding: 0px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
                </div>
                <div class="col-md-12 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
                     <h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" value="$<?php echo $request->sum_insured2 ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;"></h4>
                    <div class="mt-4" id="sum_slider" style="border: 1px solid #c5c5c5;padding: 0px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
                </div>
              </div>
          </div>
        </div>
        <div class="card  qoute-price-card mb-3 pricegurrantecard">
          <div class="card-widget card-widget-price-match">
                <div class="card-header">
                    <div class="icon icon-price-match"></div>
                    <div class="card-header__label">Price <br data-v-59a9f311="">Guarantee</div>
                </div>
                <div class="card-body">
                    <p class="text-secondary-color body-text-5"> Insurance rates are regulated by law. You can't find the same insurance plan for a lower price anywhere else. </p>
                </div>
          </div>
        </div>     
    </div>
    <div id="mobCard" class="col-md-8">
<?php 
    if (in_array("yes", $request->pre_existing))
    { ?>
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
<script type="text/javascript">
    var numberoftravelers = '{{ $number_travelers }}';
    var elderage = '{{ $elder_age }}';
    if(numberoftravelers > 1)
    {
        $('#ageshow').val(numberoftravelers+', Ages '+ elderage+ ' and ....');
    }else{
        $('#ageshow').val(numberoftravelers+', '+ elderage+ ' Years');
    }
    
    
</script>
<?php
        $addinquery = '';
        $lessquery = '';
        // if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
        //     $addinquery .= "AND `premedical`='1'";
        // }
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
        $plan_name_for_result = $plan->plan_name_for_result;
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
        if($sales_tax)
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
            }else{
                $addinbenefit = '';
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
                $planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");
                print_r($planrates);exit;
                $daily_rate = $planrates[0]->rate * 2;   //Multipling by 2 for family elder rate

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
// if($salestax_dest == $post_dest){
//$salesequal = 'yes';
// $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
// } else {
// $salestaxes = 0;
//$salesequal = 'no';
// }

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($smoke == '0'){
    if($smoke_rate == 0)
    {
        $smoke_price = 0;
    }else{
        $smoke_price = $smoke_rate;
    }

} else if($smoke == '1'){
$smoke_price = ($totaldaysprice * $smoke_rate) / 100;
}
} else {
$smoke_price = 0;
}

$salestaxes = 0;
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

<span id="dv_{{$total_price}}" class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="deductable card qoute-price-card mb-3 deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
  <div class="card-body">
      <div class="row">
          <div class="col-md-6">
              <div class="plan-label">
                  <!-- <h2><?php echo $plan_name;?></h2> -->
              </div>
              <div class="qoute-logo">
                  <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
              </div>
               
                  
                  <?php 
                    if($deductible == 0)
                    {
                        $newdeductibleforshow = 7896;
                    }else{
                        $newdeductibleforshow = $deductible;
                    }

                  ?>
                <div style="display: none;" class="hoverdetails_<?php echo $newdeductibleforshow.$plan_id;?>" >
                    <div>
                    <?php
                    $per = 0;
                    $single_person_rate = 0;
                    foreach($ages_array as $person_age){
                    $per++;
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
                        // if($salestax_dest == $post_dest){
                        //$salesequal = 'yes';
                        // $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                        // } else {
                        // $p_salestaxes = 0;
                        //$salesequal = 'no';
                        // }

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
                        $p_salestaxes = 0;
                        $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

                        //Deductible 
                        $p_deduct_discount = ($person_price * $deduct_rate) / 100;
                        $p_cdiscount = ($person_price * $cdiscountrate) / 100;
                        $p_discount = $p_deduct_discount + $p_cdiscount;
                        $person_price = ($person_price - $p_discount) + $p_others;
                    } 
                    //$monthly_price = $person_price / $num_months;
                    //if($single_person_rate > 0){
                                        ?>
                    <span class="person-additional-traveler">
                        Person <?php echo $per;?> @if($existingshow)({{$existingshow}}) @endif
                    </span>
                    <div class="person-additional-traveler-insured">Insured: <span style="color: #2b3481;"> (Age: <?php echo $person_age; ?>)</span> Premium: <span style="color: #2b3481;">$<?php echo number_format($person_price,2);?></span></div>
                    <?php $single_person_rate = '';}//} ?>
                    </div>
                    <br>
                    @if($plan->plan_pdf_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->plan_pdf_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                </div>

                <h3 id="changeshowtoless<?php echo $newdeductibleforshow.$plan_id;?>" class="person-additional-traveler-h3" onclick="slideadditionaltravelers(<?php echo $newdeductibleforshow.$plan_id;?>)"><i class="fa fa-plus-circle colorblue"></i> Show Details</h3>
          </div>
          <div class="col-md-3 price-limit">
              <div class="plan-coverage-limit">
                  <div class="qoute-price-select">
                    <h2><?php 
                        if($sum_insured >= 1000000){
                        $millions = $sum_insured/1000000;
                        $txt = ' Million';
                        } else {
                        $millions = $sum_insured;
                        $txt = '';
                        }
                        number_format($millions).$txt;
                        $dob = $years[0].'-'.$request->month.''.$request->dob_day;
                        $agent = $request->agent;
                        $broker = $request->broker;?>        
                    </h2>
                  </div>
              </div>
              <div class="plan-coverage-limits">
                  <div class="limit-lable mb-3">
               
                  </div>
                  <div class="qoute-price-select">
                    
                    </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="compare compare-check  justify-content-end d-flex">
                <span class="">Compare</span>
                <input style="height: 28px; width: 20px; margin-left: 10px;" type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $data->pro_id; ?>"  data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price,2));?>" value="<?php echo str_replace(',', '', number_format($total_price,2));?>" onclick="comparetest()">

            </div>

              <div class="total-price-traveller">
                  <h2 id="traveler-price">$<?php echo number_format($total_price,2);?><span>CAD</span></h2>
                  <?php if($monthly_two == '1'){?>
                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($monthly_price,2);?>/Month <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
                    <?php } ?>
              </div>
              <div class="buy_now"> 
                <form method="POST" action="{{ url('apply') }}">
                @csrf
                <input type="hidden" value="{{ $request->savers_email }}" name="email">
                <input type="hidden" value="{{ $request->fname }}" name="fname">
                <input type="hidden" value="{{ $request->lname }}" name="lname">
                <input type="hidden" value="{{ $sum_insured }}" name="coverage">
                <input type="hidden" value="{{ $number_travelers }}" name="traveller">
                <input type="hidden" value="{{ $deductible }}" name="deductibles">
                <input type="hidden" value="{{ $deduct_rate }}" name="deductible_rate">
                <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
                @foreach($years as $year)
                <input type="hidden" name="years[]" value="{{ $year }}">
                @endforeach
                <input type="hidden" value="{{ $num_of_days }}" name="days">
                <input type="hidden" value="{{ $comp_name }}" name="companyName">
                <input type="hidden" value="{{ $comp_id }}" name="comp_id">
                <input type="hidden" value="{{ $plan_name }}" name="planname">
                <input type="hidden" value="{{ $plan_id }}" name="plan_id">
                <input type="hidden" value="{{ $startdate }}" name="tripdate">
                <input type="hidden" value="{{ $enddate }}" name="tripend">
                <input type="hidden" value="{{ $total_price }}" name="premium">
                <input type="hidden" value="{{ $request->destination }}" name="destination">
                <input type="hidden" value="" name="cdestination">
                <input type="hidden" value="{{ $product_name }}" name="product_name">
                <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
                <input type="hidden" value="{{ $request->primary_destination }}" name="country">
                <input type="hidden" value="{{ $product_name }}" name="visitor_visa_type">
                <input type="hidden" value="{{ $num_of_days }}" name="tripduration">
                <input type="hidden" value="{{ $ages_array[0] }}" name="age">
                <input type="hidden" value="{{ $dob }}" name="dob">
                <input type="hidden" value="{{ $agent }}" name="agent">
                <input type="hidden" value="{{ $broker }}" name="broker">
                <button class="btn btn-block text-white" type="submit">Buy</button>
              </form>
              </div>
          </div>
      </div>
  </div>
</div>
</span>
<?php

$daily_rate = 0;


?>

        <?php 
        $display = '';
        }}}} ?>
   <?php }
    else
    { ?>
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
<?php
        $addinquery = '';
        $lessquery = '';
        // if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
        //     $addinquery .= "AND `premedical`='1'";
        // }
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
        $plan_name_for_result = $plan->plan_name_for_result;
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
        if($sales_tax)
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
            }else{
                $addinbenefit = '';
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
                $planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");
                print_r($planrates);exit;
                $daily_rate = $planrates[0]->rate * 2;   //Multipling by 2 for family elder rate

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
// if($salestax_dest == $post_dest){
//$salesequal = 'yes';
// $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
// } else {
// $salestaxes = 0;
//$salesequal = 'no';
// }

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($smoke == '0'){
    if($smoke_rate == 0)
    {
        $smoke_price = 0;
    }else{
        $smoke_price = $smoke_rate;
    }

} else if($smoke == '1'){
$smoke_price = ($totaldaysprice * $smoke_rate) / 100;
}
} else {
$smoke_price = 0;
}

$salestaxes = 0;
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

<span id="dv_{{$total_price}}" class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="deductable card qoute-price-card mb-3 deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
  <div class="card-body">
      <div class="row">
          <div class="col-md-6">
              <div class="plan-label">
                  <!-- <h2><?php echo $plan_name;?></h2> -->
              </div>
                <p class="plan-subheading">
                  Deductible Option ($<?php echo $deductible;?> <span style="color:#2b3481;">(Included in premium)</span>)
                  <br>
                  Days: <?php echo $num_of_days;?> (<?php echo $startdate;?> - <?php echo $enddate;?>)
                </p>
                <h2 class="qoute-policy">Policy Details</h2>
                  <ul class="plan-highlights text-dark ml-3">
                      <li><span>Travellers: <span class="plan-cat"><?php echo $number_travelers;?> Traveller(s)</span></span></li>
                      <li><span>Quote Details : <span class="plan-cat"><?php echo $product_name;?></span></span></li>
                  </ul>
                  <?php 
                    if($deductible == 0)
                    {
                        $newdeductibleforshow = 7896;
                    }else{
                        $newdeductibleforshow = $deductible;
                    }

                  ?>
                <h3 onclick="slideadditionaltravelers(<?php echo $newdeductibleforshow.$plan_id;?>)"  style="font-size:15px;cursor: pointer;color: #2b3481 !important;" class="qoute-policy">Additional Travelers <i class="fa fa-plus"></i> </h3>
                <div style="display: none;" class="row hoverdetails_<?php echo $newdeductibleforshow.$plan_id;?>" >
                    <div class="col-md-12">
                    <div class="col-md-12" style="border:1px solid #333; text-align:left;">
                    
                    
                    
                    <div>
                    <?php
                    $per = 0;
                    $single_person_rate = 0;
                    foreach($ages_array as $person_age){
                    $per++;
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
                        // if($salestax_dest == $post_dest){
                        //$salesequal = 'yes';
                        // $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                        // } else {
                        // $p_salestaxes = 0;
                        //$salesequal = 'no';
                        // }

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
                        $p_salestaxes = 0;
                        $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

                        //Deductible 
                        $p_deduct_discount = ($person_price * $deduct_rate) / 100;
                        $p_cdiscount = ($person_price * $cdiscountrate) / 100;
                        $p_discount = $p_deduct_discount + $p_cdiscount;
                        $person_price = ($person_price - $p_discount) + $p_others;
                    }

                    


                            


                    
                    
                    //$monthly_price = $person_price / $num_months;


                    //if($single_person_rate > 0){
                                        ?>
                    <span class="person-additional-traveler">
                        Person <?php echo $per;?> @if($existingshow)({{$existingshow}}) @endif
                    </span>
                    <div class="person-additional-traveler-insured">Insured: <span style="color: #2b3481;"> (Age: <?php echo $person_age; ?>)</span> Premium: <span style="color: #2b3481;">$<?php echo number_format($person_price,2);?></span></div>
                    <?php $single_person_rate = '';}//} ?>
                    </div>
                    <br>
                    @if($plan->plan_pdf_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->plan_pdf_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                </div>

                <h3 id="changeshowtoless<?php echo $newdeductibleforshow.$plan_id;?>" class="person-additional-traveler-h3" onclick="slideadditionaltravelers(<?php echo $newdeductibleforshow.$plan_id;?>)"><i class="fa fa-plus-circle colorblue"></i> Show Details</h3>
          </div>
          <div class="col-md-3 price-limit">
              <div class="plan-coverage-limit">
                  <div class="limit-lable mb-3">
                      <span>Coverage Limit</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php 
                        if($sum_insured >= 1000000){
                        $millions = $sum_insured/1000000;
                        $txt = ' Million';
                        } else {
                        $millions = $sum_insured;
                        $txt = '';
                        }
                        echo number_format($millions).$txt;
                        $dob = $years[0].'-'.$request->month.''.$request->dob_day;
                        $agent = $request->agent;
                        $broker = $request->broker;?>        
                    </h2>
                  </div>
              </div>
              <div class="plan-coverage-limits">
                  <div class="limit-lable mb-3">
                      <span>Deductible</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php echo $deductible;?> </h2>
                    </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="compare compare-check  justify-content-end d-flex">
                <span class="">Compare</span>
                <input style="height: 28px; width: 20px; margin-left: 10px;" type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $data->pro_id; ?>"  data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price,2));?>" value="<?php echo str_replace(',', '', number_format($total_price,2));?>" onclick="comparetest()">

            </div>
              <div class="qoute-logo">
                  <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
              </div>
              <div class="total-price-traveller">
                  <h2 id="traveler-price">$<?php echo number_format($total_price,2);?><span>CAD</span></h2>
                  <?php if($monthly_two == '1'){?>
                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($monthly_price,2);?>/Month <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
                    <?php } ?>
              </div>
              <div class="buy_now"> 
                <form method="POST" action="{{ url('apply') }}">
                    @csrf
                    <input type="hidden" value="{{ $request->savers_email }}" name="email">
                    <input type="hidden" value="{{ $request->fname }}" name="fname">
                    <input type="hidden" value="{{ $request->lname }}" name="lname">
                    <input type="hidden" value="{{ $sum_insured }}" name="coverage">
                    <input type="hidden" value="{{ $number_travelers }}" name="traveller">
                    <input type="hidden" value="{{ $deductible }}" name="deductibles">
                    <input type="hidden" value="{{ $deduct_rate }}" name="deductible_rate">
                    <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
                    @foreach($years as $year)
                    <input type="hidden" name="years[]" value="{{ $year }}">
                    @endforeach
                    <input type="hidden" value="{{ $num_of_days }}" name="days">
                    <input type="hidden" value="{{ $comp_name }}" name="companyName">
                    <input type="hidden" value="{{ $comp_id }}" name="comp_id">
                    <input type="hidden" value="{{ $plan_name }}" name="planname">
                    <input type="hidden" value="{{ $plan_id }}" name="plan_id">
                    <input type="hidden" value="{{ $startdate }}" name="tripdate">
                    <input type="hidden" value="{{ $enddate }}" name="tripend">
                    <input type="hidden" value="{{ $total_price }}" name="premium">
                    <input type="hidden" value="{{ $request->destination }}" name="destination">
                    <input type="hidden" value="" name="cdestination">
                    <input type="hidden" value="{{ $product_name }}" name="product_name">
                    <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
                    <input type="hidden" value="{{ $request->primary_destination }}" name="country">
                    <input type="hidden" value="{{ $product_name }}" name="visitor_visa_type">
                    <input type="hidden" value="{{ $num_of_days }}" name="tripduration">
                    <input type="hidden" value="{{ $ages_array[0] }}" name="age">
                    <input type="hidden" value="{{ $dob }}" name="dob">
                    <input type="hidden" value="{{ $agent }}" name="agent">
                    <input type="hidden" value="{{ $broker }}" name="broker">
                    <button class="btn btn-block text-white" type="submit">Buy</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
</span>
<?php

$daily_rate = 0;


?>

        <?php 
        $display = '';
        }}}} ?>

        


        <?php
    //  error_reporting(E_ERROR);
    $second_startdate = $request->departure_date;
    $second_enddate = $request->return_date;

    $second_dStart = new DateTime($request->departure_date);
    $second_dEnd  = new DateTime($request->return_date);
    $second_dDiff = $second_dStart->diff($second_dEnd);
    $second_dDiff->format('%R'); // use for point out relation: smaller/greater
    $second_num_of_days = $second_dDiff->days + 1;
    if($second_num_of_days > 365 || $second_num_of_days == 364){ $second_num_of_days = 365; }

    //$second_num_of_days = 365;
    $second_prosupervisa = $data->pro_supervisa;
    $second_product_name = $data->pro_name;

    if($second_prosupervisa == '1'){
    $second_supervisa = 'yes';
    $second_num_of_days = 365;
    } else {
    $second_supervisa = 'no';
    }

    $second_enable_family_plan = (!empty($request->familyplan)) ? true : false;
    $second_enable_pre_existing = (!empty($request->pre_existing)) ? true : false;

    if($request->familyplan_temp == 'yes'){
    $second_enable_family_plan = true;
    } else {
    $second_enable_family_plan = false;
    }
    if($request->pre_existing == 'Yes'){
    $second_enable_pre_existing = true;
    } else {
    $second_enable_pre_existing = false;
    }

    $second_oldest_traveller = 0;
    $second_family_plan      = false;
 
    $second_years = array();


foreach ($request->years as $second_r) {
    if($second_r)
    {
        $second_bday = new DateTime($second_r); // Your date of birth
        $second_today = new Datetime(date('m.d.y'));
        $second_diff = $second_today->diff($second_bday);
        $second_years[] =  $second_diff->y;
    }
}

if (is_array($second_years)){
    $second_ages_array = array_filter($second_years);
    $second_younger_age = min($second_ages_array);
    $second_elder_age = max($second_ages_array);
    $second_number_travelers = count($second_ages_array);
}
else {
    $second_younger_age = 0;
    $second_elder_age = 0;
    $second_number_travelers = 1;
}
if($request->familyplan_temp == 'yes'){
    if($second_number_travelers >= 2 && ($second_elder_age >= 21 && $second_elder_age <=58) && ($second_younger_age <=21)){
        $second_family_plan = 'yes';
    }
    else {
        $second_family_plan = 'no';
    }
} else {
    $second_family_plan = 'no';
}

if($request->familyplan_temp == 'yes' && $second_family_plan == 'no'){
 //echo "<script>window.location='?action=not_eligible';</script>";
}
?>
<script type="text/javascript">
    var numberoftravelers = '{{ $second_number_travelers }}';
    var elderage = '{{ $second_elder_age }}';
    if(numberoftravelers > 1)
    {
        $second_('#ageshow').val(numberoftravelers+', Ages '+ elderage+ ' and ....');
    }else{
        $second_('#ageshow').val(numberoftravelers+', '+ elderage+ ' Years');
    }
    
    
</script>
<?php
        $second_addinquery = '';
        $second_lessquery = '';
        // if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
        //     $second_addinquery .= "AND `premedical`='1'";
        // }
        if($second_family_plan == 'yes'){
            $second_addinquery .= "AND `family_plan`='1'";
        }
        if($second_num_of_days < '365'){
            $second_lessquery = " AND `rate_base`<>'2'";
        }
        $second_plans_q = DB::select("SELECT * FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id' AND `status`='1' $second_lessquery $second_addinquery ORDER BY `id`");

        foreach($second_plans_q as $second_plan){

        $second_plan_id = $second_plan->id;
        $second_plan_name = $second_plan->plan_name;
        $second_pre_existing_name = $second_plan->pre_existing_name;
        $second_without_pre_existing_name = $second_plan->without_pre_existing_name;
        $second_insurance_company = $second_plan->insurance_company;
        $second_plan_name_for_result = $second_plan->plan_name_for_result;
        $second_premedical = $second_plan->premedical;
        $second_rate_base = $second_plan->rate_base;  //0=Daily 1=Monthly 2=Yearly 3=Multi
        $second_monthly_two = $second_plan->monthly_two;
        $second_flatrate = $second_plan->flatrate;
        $second_flatrate_type = $second_plan->flatrate_type;
        $second_sales_tax = $second_plan->sales_tax;
        $second_smoke_rate = $second_plan->smoke_rate;
        $second_smoke = $second_plan->smoke;
        $second_directlink = $second_plan->directlink;
        $second_status = $second_plan->status;
        $second_cdiscountrate = $second_plan->cdiscountrate;
        $second_plan_discount = $second_plan->discount;
        $second_plan_discount_rate = $second_plan->discount_rate;

        $second_post_dest = str_replace(' ', '', strtolower($request->primary_destination));
        if($second_sales_tax)
        {
            $second_salestaxeplode = explode('%', $second_sales_tax);
            $second_salestax_rate = $second_salestaxeplode[0];
            $second_salestax_dest = str_replace(' ', '', $second_salestaxeplode[1]);
        }
        


        //COMPANY Details
        $second_company = DB::table('wp_dh_companies')->where('comp_id' , $second_insurance_company)->first();
        $second_comp_id = $second_company->comp_id;
        $second_comp_name = $second_company->comp_name;
        $second_comp_logo = $second_company->comp_logo;


        $second_deductsloop = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
        foreach($second_deductsloop as $second_deductsloop_f){
            if($second_deductsloop_f)
            {
                $second_deductible = $second_deductsloop_f->deductible1;
            }
            
            $second_deduct = '';
            $second_deduct_rate = '';
            $second_deduct_plan_id = '';
            $second_deductsq = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id' , $second_plan_id)->where('deductible1' , $second_deductible)->first();

            if($second_deductsq)
            {
                $second_deduct = $second_deductsq->deductible1;
                  $second_deduct_rate = str_replace('-', '', $second_deductsq->deductible2);
                $second_deduct_plan_id = $second_deductsq->plan_id;
            }
            if($second_supervisa == 'yes'){
                $second_addinbenefit = "AND CAST(`sum_insured` AS DECIMAL)>='100000'";
            }else{
                $second_addinbenefit = '';
            }
            $second_sum_insured= '';        
            $second_sumin = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id`='$second_deduct_plan_id' $second_addinbenefit GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
        foreach($second_sumin as $second_suminsu){
        $second_sum_insured = $second_suminsu->sum_insured;
        $second_sumamt = '';
        $second_sumqry = DB::table('wp_dh_insurance_plans_rates')->where('plan_id' , $second_plan_id)->where('sum_insured' , $second_sum_insured)->first();
        $second_sumamt = $second_sumqry->sum_insured;


        //getting prices for each ages

            if($second_rate_base == '3'){
                $second_rates_table_name = "wp_dh_plan_day_rate";
                $second_addquery = "AND '$second_num_of_days' BETWEEN `min_range` AND `max_range`";
            } else {
                $second_rates_table_name = "wp_dh_insurance_plans_rates";
                $second_addquery = "";
            }

            $second_total_price = 0;
            $second_daily_rate = 0;
            //$second_single_person_rate = 0;
            //$second_single_person_rate = array();
            $second_display = array();
            if($second_family_plan == 'yes'){
                $second_planrates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");
                $second_daily_rate = $second_planrates[0]->rate * 2;   //Multipling by 2 for family elder rate

                if(!$second_daily_rate){ $second_display = '0'; }
            } else {
                $second_perone = 0;
                foreach($second_ages_array as $second_person_age){
                $second_perone++;
                   $second_plan_rates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");
                   $second_countarray =  count($second_plan_rates);
                   if($second_countarray > 0)
                   {

                        if($request->pre_existing[$second_perone-1]=='yes')
                        {
                            $second_dailyrate = $second_plan_rates[0]->rate_with_pre_existing;
                            $second_daily_rate += $second_dailyrate;
                            if($second_dailyrate == ''){ $second_dailyrate = 0; }
                            $second_display[] =  $second_dailyrate;
                            $second_dailyrate = 0;
                        }else{
                            $second_dailyrate = $second_plan_rates[0]->rate_with_pre_existing;
                            $second_daily_rate += $second_dailyrate;
                            if($second_dailyrate == ''){ $second_dailyrate = 0; }
                            $second_display[] =  $second_dailyrate;
                            $second_dailyrate = 0;
                        }

 
                   }
                    
                }
            }


//NUM OF MONTHS
$second_num_months = $second_num_of_days / 30;
$second_num_months = ceil($second_num_months ); // converting is 1.2,1.3 etc.. then it will be 2
if($second_num_months > 12){ $second_num_months = 12; }

if($second_rate_base == '0'){ // if daily rate
$second_total_price = $second_daily_rate * $second_num_of_days;
} else if($second_rate_base == '1'){ //if monthly rate
$second_total_price = $second_daily_rate * $second_num_months;
$second_monthly_price = $second_total_price / $second_num_months;
} else if($second_rate_base == '2'){ // if yearly rate
$second_total_price = $second_daily_rate;
}
else if($second_rate_base == '3'){ // if multi days rate
$second_total_price = $second_daily_rate;
}

if($second_flatrate_type == 'each'){
$second_flat_price = $second_flatrate * $second_number_travelers;
}else if($second_flatrate_type == 'total'){
$second_flat_price = $second_flatrate;
} else {
$second_flat_price = 0;
}
//totaldaysprice
$second_totaldaysprice = $second_total_price;
//SALES TAX
// if($second_salestax_dest == $second_post_dest){
//$second_salesequal = 'yes';
// $second_salestaxes = ($second_salestax_rate * $second_totaldaysprice) / 100;
// } else {
// $second_salestaxes = 0;
//$second_salesequal = 'no';
// }

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($second_smoke == '0'){
    if($second_smoke_rate == 0)
    {
        $second_smoke_price = 0;
    }else{
        $second_smoke_price = $second_smoke_rate;
    }

} else if($second_smoke == '1'){
$second_smoke_price = ($second_totaldaysprice * $second_smoke_rate) / 100;
}
} else {
$second_smoke_price = 0;
}

$second_salestaxes = 0;
// OTHERS
$second_others = ($second_flat_price + $second_salestaxes) + $second_smoke_price;




//Deductible
$second_deduct_discount = ($second_total_price * $second_deduct_rate) / 100;
$second_cdiscount = ($second_total_price * $second_cdiscountrate) / 100;
if (strpos($second_deductsq->deductible2, '-') !== false) {
//if deductible is in minus
$second_discount = $second_deduct_discount + $second_cdiscount;
$second_adddeductible = 0;
} else {
//if deductible is in plus
$second_discount = $second_cdiscount;
$second_adddeductible = $second_deduct_discount;
}

$second_total_price = ($second_total_price - $second_discount) + ($second_others + $second_adddeductible);
//Discount on plan calculation
$second_discountonplan = 0;
if($second_plan_discount == '1'){
if($second_number_travelers > 1 && $second_family_plan == 'no'){
$second_discountonplan = ($second_plan_discount_rate * $second_total_price) / 100;
}
}
$second_total_price = $second_total_price - $second_discountonplan;
$second_monthly_price = $second_total_price / $second_num_months;
if($second_monthly_two == '1'){
    $second_total_price = $second_total_price - $second_flat_price;
}
if (in_array("0", $second_display)){ $second_show = '0'; } else {$second_show = '1'; }


if($second_show == '1' && $second_total_price > 0){

  ?>

<span id="dv_{{$second_total_price}}" class="coverage-amt coverage-amt-<?php echo $second_sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $second_sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="deductable card qoute-price-card mb-3 deductable-<?php echo $second_deductible; ?>" style="position: relative;display: <?php if($second_deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $second_deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
  <div class="card-body">
    <div class="row" style=" position: absolute; top: -12px; margin: auto; width: 100%; left: 0;"> <div class="col-md-12"> <p style=" background-color: red; width: 180px; text-align: center; color: white; border-radius: 10px; ">This is Pre Eisting Plan</p> </div> </div>
      <div class="row">
          <div class="col-md-6">
              <div class="plan-label">
                  <!-- <h2><?php echo $second_plan_name;?></h2> -->
              </div>
                <p class="plan-subheading">
                  Deductible Option ($<?php echo $second_deductible;?> <span style="color:#2b3481;">(Included in premium)</span>)
                  <br>
                  Days: <?php echo $second_num_of_days;?> (<?php echo $second_startdate;?> - <?php echo $second_enddate;?>)
                </p>
                <h2 class="qoute-policy">Policy Details</h2>
                  <ul class="plan-highlights text-dark ml-3">
                      <li><span>Travellers: <span class="plan-cat"><?php echo $second_number_travelers;?> Traveller(s)</span></span></li>
                      <li><span>Quote Details : <span class="plan-cat"><?php echo $second_product_name;?></span></span></li>
                  </ul>
                  <?php 
                    if($second_deductible == 0)
                    {
                        $second_newdeductibleforshow = 7896;
                    }else{
                        $second_newdeductibleforshow = $second_deductible;
                    }

                  ?>
                <h3 onclick="slideadditionaltravelers(<?php echo $second_newdeductibleforshow.$second_plan_id;?>12345)"  style="font-size:15px;cursor: pointer;color: #2b3481 !important;" class="qoute-policy">Additional Travelers <i class="fa fa-plus"></i> </h3>
                <div style="display: none;" class="row hoverdetails_<?php echo $second_newdeductibleforshow.$second_plan_id;?>12345" >
                    
                    
                    
                    <div class="">
                    <?php
                    $second_per = 0;
                    $second_single_person_rate = 0;
                    foreach($second_ages_array as $second_person_age){
                    $second_per++;
                    $second_p_planrates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");

                    $second_countarraytwo =  count($second_p_planrates);
                    if($second_countarraytwo > 0)

                    {
                        if($request->pre_existing[$second_per-1]=='yes')
                        {
                            $second_single_person_rate = $second_p_planrates[0]->rate_with_pre_existing;
                            $second_existingshow = $second_pre_existing_name;
                        }else{
                            $second_single_person_rate = $second_p_planrates[0]->rate_with_pre_existing;
                            $second_existingshow = $second_pre_existing_name;
                        }

                        
                                
                        if($second_family_plan == 'yes' && $second_elder_age != $second_person_age){
                        $second_person_daily = 0;
                        } else if($second_family_plan == 'yes' && $second_elder_age == $second_person_age){
                        $second_person_daily = $second_single_person_rate * 2;
                        } else {
                        $second_person_daily = $second_single_person_rate;
                        }

                        if($second_rate_base == '0'){ // if daily rate
                        $second_person_price = $second_person_daily * $second_num_of_days;
                        } else if($second_rate_base == '1'){ //if monthly rate
                        $second_person_price = $second_person_daily * $second_num_months;
                        } else if($second_rate_base == '2'){ // if yearly rate
                        $second_person_price = $second_person_daily;
                        }
                        else if($second_rate_base == '3'){ // if multi days rate
                        $second_person_price = $second_person_daily;
                        }

                        if($second_flatrate_type == 'each'){
                        $second_p_flat_price = $second_flatrate;
                        }else if($second_flatrate_type == 'total'){
                        $second_p_flat_price = $second_flatrate  / $second_number_travelers;
                        } else {
                        $second_p_flat_price = 0;
                        }
                        //totaldaysprice
                        $second_ptotaldaysprice = $second_person_price;
                        //SALES TAX
                        // if($second_salestax_dest == $second_post_dest){
                        //$second_salesequal = 'yes';
                        // $second_p_salestaxes = ($second_salestax_rate * $second_ptotaldaysprice) / 100;
                        // } else {
                        // $second_p_salestaxes = 0;
                        //$second_salesequal = 'no';
                        // }

                        //SMOKE RATE
                        if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
                        if($second_smoke == '0'){
                        $second_p_smoke_price = $second_smoke_rate;
                        } else if($second_smoke == '1'){
                        $second_p_smoke_price = ($second_ptotaldaysprice * $second_smoke_rate) / 100;    
                        }
                        } else {
                        $second_p_smoke_price = 0; 
                        }

                        // OTHERS
                        $second_p_salestaxes = 0;
                        $second_p_others = ($second_p_flat_price + $second_p_salestaxes) + $second_p_smoke_price;

                        //Deductible 
                        $second_p_deduct_discount = ($second_person_price * $second_deduct_rate) / 100;
                        $second_p_cdiscount = ($second_person_price * $second_cdiscountrate) / 100;
                        $second_p_discount = $second_p_deduct_discount + $second_p_cdiscount;
                        $second_person_price = ($second_person_price - $second_p_discount) + $second_p_others;
                    }

                    


                            


                    
                    
                    //$second_monthly_price = $second_person_price / $second_num_months;


                    //if($second_single_person_rate > 0){
                                        ?>
                    <div class="col-md-12 no-padding"><span style="display:block; padding:3px; font-size:15px; text-align:left; border-bottom:1px dashed #333;">Person <?php echo $second_per;?> @if($second_existingshow)({{$second_existingshow}}) @endif</span></div>
                    <div class="col-md-12 no-padding"><small>Insured: <span style="color: #f5821f;"> (Age: <?php echo $second_person_age; ?>)</span> Premium: <span style="color: #f5821f;">$<?php echo number_format($second_person_price,2);?></span></small></div>
                    <?php $second_single_person_rate = '';}//} ?>
                    </div>
                </div>
          </div>
          <div class="col-md-3 price-limit">
              <div class="plan-coverage-limit">
                  <div class="limit-lable mb-3">
                      <span>Coverage Limit</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php 
                        if($second_sum_insured >= 1000000){
                        $second_millions = $second_sum_insured/1000000;
                        $second_txt = ' Million';
                        } else {
                        $second_millions = $second_sum_insured;
                        $second_txt = '';
                        }
                        echo number_format($second_millions).$second_txt;
                        $second_dob = $second_years[0].'-'.$request->month.''.$request->dob_day;
                        $second_agent = $request->agent;
                        $second_broker = $request->broker;?>        
                    </h2>
                  </div>
              </div>
              <div class="plan-coverage-limits">
                  <div class="limit-lable mb-3">
                      <span>Deductible</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php echo $second_deductible;?> </h2>
                    </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="compare compare-check  justify-content-end d-flex">
                <span class="">Compare</span>
                <input style="height: 28px; width: 20px; margin-left: 10px;" type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $data->pro_id; ?>"  data-pid="<?php echo $second_plan_id; ?>" price="<?php echo str_replace(',', '', number_format($second_total_price,2));?>" value="<?php echo str_replace(',', '', number_format($second_total_price,2));?>" onclick="comparetest()">

            </div>
              <div class="qoute-logo">
                  <img src="{{ url('public/images') }}/<?php echo $second_comp_logo; ?>">
              </div>
              <div class="total-price-traveller">
                  <h2 id="traveler-price">$<?php echo number_format($second_total_price,2);?><span>CAD</span></h2>
                  <?php if($second_monthly_two == '1'){?>
                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($second_monthly_price,2);?>/Month <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $second_num_months;?></small></h2>
                    <?php } ?>
              </div>
              <div class="buy_now"> 
                <form method="POST" action="{{ url('apply') }}">
                @csrf
                <input type="hidden" value="{{ $request->savers_email }}" name="email">
                <input type="hidden" value="{{ $request->fname }}" name="fname">
                <input type="hidden" value="{{ $request->lname }}" name="lname">
                <input type="hidden" value="{{ $second_sum_insured }}" name="coverage">
                <input type="hidden" value="{{ $second_number_travelers }}" name="traveller">
                <input type="hidden" value="{{ $second_deductible }}" name="deductibles">
                <input type="hidden" value="{{ $second_deduct_rate }}" name="deductible_rate">
                <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
                @foreach($second_years as $second_year)
                <input type="hidden" name="years[]" value="{{ $second_year }}">
                @endforeach
                <input type="hidden" value="{{ $second_num_of_days }}" name="days">
                <input type="hidden" value="{{ $second_comp_name }}" name="companyName">
                <input type="hidden" value="{{ $second_comp_id }}" name="comp_id">
                <input type="hidden" value="{{ $second_plan_name }}" name="planname">
                <input type="hidden" value="{{ $second_plan_id }}" name="plan_id">
                <input type="hidden" value="{{ $second_startdate }}" name="tripdate">
                <input type="hidden" value="{{ $second_enddate }}" name="tripend">
                <input type="hidden" value="{{ $second_total_price }}" name="premium">
                <input type="hidden" value="{{ $request->destination }}" name="destination">
                <input type="hidden" value="" name="cdestination">
                <input type="hidden" value="{{ $second_product_name }}" name="product_name">
                <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
                <input type="hidden" value="{{ $request->primary_destination }}" name="country">
                <input type="hidden" value="{{ $second_product_name }}" name="visitor_visa_type">
                <input type="hidden" value="{{ $second_num_of_days }}" name="tripduration">
                <input type="hidden" value="{{ $second_ages_array[0] }}" name="age">
                <input type="hidden" value="{{ $second_dob }}" name="dob">
                <input type="hidden" value="{{ $second_agent }}" name="agent">
                <input type="hidden" value="{{ $second_broker }}" name="broker">
                <button class="btn btn-block text-white" type="submit">Buy</button>
              </form>
              </div>
          </div>
      </div>
  </div>
</div>
</span>
<?php

$second_daily_rate = 0;


?>

        <?php 
        $second_display = '';
        }}}} ?>
    <?php }

?>
        



</div>
    <div id="main" class="col-md-8">
<?php 
    if (in_array("yes", $request->pre_existing))
    { ?>
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
<script type="text/javascript">
    var numberoftravelers = '{{ $number_travelers }}';
    var elderage = '{{ $elder_age }}';
    if(numberoftravelers > 1)
    {
        $('#ageshow').val(numberoftravelers+', Ages '+ elderage+ ' and ....');
    }else{
        $('#ageshow').val(numberoftravelers+', '+ elderage+ ' Years');
    }
    
    
</script>
<?php
        $addinquery = '';
        $lessquery = '';
        // if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
        //     $addinquery .= "AND `premedical`='1'";
        // }
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
        $plan_name_for_result = $plan->plan_name_for_result;
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
        if($sales_tax)
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
            }else{
                $addinbenefit = '';
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
                $planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");
                print_r($planrates);exit;
                $daily_rate = $planrates[0]->rate * 2;   //Multipling by 2 for family elder rate

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
// if($salestax_dest == $post_dest){
//$salesequal = 'yes';
// $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
// } else {
// $salestaxes = 0;
//$salesequal = 'no';
// }

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($smoke == '0'){
    if($smoke_rate == 0)
    {
        $smoke_price = 0;
    }else{
        $smoke_price = $smoke_rate;
    }

} else if($smoke == '1'){
$smoke_price = ($totaldaysprice * $smoke_rate) / 100;
}
} else {
$smoke_price = 0;
}

$salestaxes = 0;
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

<span id="dv_{{$total_price}}" class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="deductable card qoute-price-card mb-3 deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
  <div class="card-body">
      <div class="row">
          <div class="col-md-6">
              <div class="plan-label">
                  <!-- <h2><?php echo $plan_name;?></h2> -->
              </div>
                <p class="plan-subheading">
                  Deductible Option ($<?php echo $deductible;?> <span style="color:#2b3481;">(Included in premium)</span>)
                  <br>
                  Days: <?php echo $num_of_days;?> (<?php echo $startdate;?> - <?php echo $enddate;?>)
                </p>
                <h2 class="qoute-policy">Policy Details</h2>
                  <ul class="plan-highlights text-dark ml-3">
                      <li><span>Travellers: <span class="plan-cat"><?php echo $number_travelers;?> Traveller(s)</span></span></li>
                      <li><span>Quote Details : <span class="plan-cat"><?php echo $product_name;?></span></span></li>
                  </ul>
                  <?php 
                    if($deductible == 0)
                    {
                        $newdeductibleforshow = 7896;
                    }else{
                        $newdeductibleforshow = $deductible;
                    }

                  ?>
                <div style="display: none;" class="hoverdetails_<?php echo $newdeductibleforshow.$plan_id;?>" >
                    <div>
                    <?php
                    $per = 0;
                    $single_person_rate = 0;
                    foreach($ages_array as $person_age){
                    $per++;
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
                        // if($salestax_dest == $post_dest){
                        //$salesequal = 'yes';
                        // $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                        // } else {
                        // $p_salestaxes = 0;
                        //$salesequal = 'no';
                        // }

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
                        $p_salestaxes = 0;
                        $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

                        //Deductible 
                        $p_deduct_discount = ($person_price * $deduct_rate) / 100;
                        $p_cdiscount = ($person_price * $cdiscountrate) / 100;
                        $p_discount = $p_deduct_discount + $p_cdiscount;
                        $person_price = ($person_price - $p_discount) + $p_others;
                    }

                    


                            


                    
                    
                    //$monthly_price = $person_price / $num_months;


                    //if($single_person_rate > 0){
                                        ?>
                    <span class="person-additional-traveler">
                        Person <?php echo $per;?> @if($existingshow)({{$existingshow}}) @endif
                    </span>
                    <div class="person-additional-traveler-insured">Insured: <span style="color: #2b3481;"> (Age: <?php echo $person_age; ?>)</span> Premium: <span style="color: #2b3481;">$<?php echo number_format($person_price,2);?></span></div>
                    <?php $single_person_rate = '';}//} ?>
                    </div>
                    <br>
                    @if($plan->plan_pdf_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->plan_pdf_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                </div>

                <h3 id="changeshowtoless<?php echo $newdeductibleforshow.$plan_id;?>" class="person-additional-traveler-h3" onclick="slideadditionaltravelers(<?php echo $newdeductibleforshow.$plan_id;?>)"><i class="fa fa-plus-circle colorblue"></i> Show Details</h3>
          </div>
          <div class="col-md-3 price-limit">
              <div class="plan-coverage-limit">
                  <div class="limit-lable mb-3">
                      <span>Coverage Limit</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php 
                        if($sum_insured >= 1000000){
                        $millions = $sum_insured/1000000;
                        $txt = ' Million';
                        } else {
                        $millions = $sum_insured;
                        $txt = '';
                        }
                        echo number_format($millions).$txt;
                        $dob = $years[0].'-'.$request->month.''.$request->dob_day;
                        $agent = $request->agent;
                        $broker = $request->broker;?>        
                    </h2>
                  </div>
              </div>
              <div class="plan-coverage-limits">
                  <div class="limit-lable mb-3">
                      <span>Deductible</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php echo $deductible;?> </h2>
                    </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="compare compare-check  justify-content-end d-flex">
                <span class="">Compare</span>
                <input style="height: 28px; width: 20px; margin-left: 10px;" type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $data->pro_id; ?>"  data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price,2));?>" value="<?php echo str_replace(',', '', number_format($total_price,2));?>" onclick="comparetest()">

            </div>
              <div class="qoute-logo">
                  <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
              </div>
              <div class="total-price-traveller">
                  <h2 id="traveler-price">$<?php echo number_format($total_price,2);?><span>CAD</span></h2>
                  <?php if($monthly_two == '1'){?>
                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($monthly_price,2);?>/Month <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
                    <?php } ?>
              </div>
              <div class="buy_now"> 
                <form method="POST" action="{{ url('apply') }}">
                @csrf
                <input type="hidden" value="{{ $request->savers_email }}" name="email">
                <input type="hidden" value="{{ $request->fname }}" name="fname">
                <input type="hidden" value="{{ $request->lname }}" name="lname">
                <input type="hidden" value="{{ $sum_insured }}" name="coverage">
                <input type="hidden" value="{{ $number_travelers }}" name="traveller">
                <input type="hidden" value="{{ $deductible }}" name="deductibles">
                <input type="hidden" value="{{ $deduct_rate }}" name="deductible_rate">
                <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
                @foreach($years as $year)
                <input type="hidden" name="years[]" value="{{ $year }}">
                @endforeach
                <input type="hidden" value="{{ $num_of_days }}" name="days">
                <input type="hidden" value="{{ $comp_name }}" name="companyName">
                <input type="hidden" value="{{ $comp_id }}" name="comp_id">
                <input type="hidden" value="{{ $plan_name }}" name="planname">
                <input type="hidden" value="{{ $plan_id }}" name="plan_id">
                <input type="hidden" value="{{ $startdate }}" name="tripdate">
                <input type="hidden" value="{{ $enddate }}" name="tripend">
                <input type="hidden" value="{{ $total_price }}" name="premium">
                <input type="hidden" value="{{ $request->destination }}" name="destination">
                <input type="hidden" value="" name="cdestination">
                <input type="hidden" value="{{ $product_name }}" name="product_name">
                <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
                <input type="hidden" value="{{ $request->primary_destination }}" name="country">
                <input type="hidden" value="{{ $product_name }}" name="visitor_visa_type">
                <input type="hidden" value="{{ $num_of_days }}" name="tripduration">
                <input type="hidden" value="{{ $ages_array[0] }}" name="age">
                <input type="hidden" value="{{ $dob }}" name="dob">
                <input type="hidden" value="{{ $agent }}" name="agent">
                <input type="hidden" value="{{ $broker }}" name="broker">
                <button class="btn btn-block text-white" type="submit">Buy</button>
              </form>
              </div>
          </div>
      </div>
  </div>
</div>
</span>
<?php

$daily_rate = 0;


?>

        <?php 
        $display = '';
        }}}} ?>
   <?php }
    else
    { ?>
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
<?php
        $addinquery = '';
        $lessquery = '';
        // if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
        //     $addinquery .= "AND `premedical`='1'";
        // }
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
        $plan_name_for_result = $plan->plan_name_for_result;
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
        if($sales_tax)
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
            }else{
                $addinbenefit = '';
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
                $planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");
                print_r($planrates);exit;
                $daily_rate = $planrates[0]->rate * 2;   //Multipling by 2 for family elder rate

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
// if($salestax_dest == $post_dest){
//$salesequal = 'yes';
// $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
// } else {
// $salestaxes = 0;
//$salesequal = 'no';
// }

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($smoke == '0'){
    if($smoke_rate == 0)
    {
        $smoke_price = 0;
    }else{
        $smoke_price = $smoke_rate;
    }

} else if($smoke == '1'){
$smoke_price = ($totaldaysprice * $smoke_rate) / 100;
}
} else {
$smoke_price = 0;
}

$salestaxes = 0;
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

<span id="dv_{{$total_price}}" class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="deductable card qoute-price-card mb-3 deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
  <div class="card-body">
      <div class="row">
          <div class="col-md-6">
              <div class="plan-label">
                  <!-- <h2><?php echo $plan_name;?></h2> -->
              </div>
                <p class="plan-subheading">
                  Deductible Option ($<?php echo $deductible;?> <span style="color:#2b3481;">(Included in premium)</span>)
                  <br>
                  Days: <?php echo $num_of_days;?> (<?php echo $startdate;?> - <?php echo $enddate;?>)
                </p>
                <h2 class="qoute-policy">Policy Details</h2>
                  <ul class="plan-highlights text-dark ml-3">
                      <li><span>Travellers: <span class="plan-cat"><?php echo $number_travelers;?> Traveller(s)</span></span></li>
                      <li><span>Quote Details : <span class="plan-cat"><?php echo $product_name;?></span></span></li>
                  </ul>
                  <?php 
                    if($deductible == 0)
                    {
                        $newdeductibleforshow = 7896;
                    }else{
                        $newdeductibleforshow = $deductible;
                    }

                  ?>
                <h3 onclick="slideadditionaltravelers(<?php echo $newdeductibleforshow.$plan_id;?>)"  style="font-size:15px;cursor: pointer;color: #2b3481 !important;" class="qoute-policy">Additional Travelers <i class="fa fa-plus"></i> </h3>
                <div style="display: none;" class="row hoverdetails_<?php echo $newdeductibleforshow.$plan_id;?>" >
                    <div class="col-md-12">
                    <div class="col-md-12" style="border:1px solid #333; text-align:left;">
                    
                    
                    
                    <div>
                    <?php
                    $per = 0;
                    $single_person_rate = 0;
                    foreach($ages_array as $person_age){
                    $per++;
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
                        // if($salestax_dest == $post_dest){
                        //$salesequal = 'yes';
                        // $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                        // } else {
                        // $p_salestaxes = 0;
                        //$salesequal = 'no';
                        // }

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
                        $p_salestaxes = 0;
                        $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

                        //Deductible 
                        $p_deduct_discount = ($person_price * $deduct_rate) / 100;
                        $p_cdiscount = ($person_price * $cdiscountrate) / 100;
                        $p_discount = $p_deduct_discount + $p_cdiscount;
                        $person_price = ($person_price - $p_discount) + $p_others;
                    }

                    


                            


                    
                    
                    //$monthly_price = $person_price / $num_months;


                    //if($single_person_rate > 0){
                                        ?>
                    <span class="person-additional-traveler">
                        Person <?php echo $per;?> @if($existingshow)({{$existingshow}}) @endif
                    </span>
                    <div class="person-additional-traveler-insured">Insured: <span style="color: #2b3481;"> (Age: <?php echo $person_age; ?>)</span> Premium: <span style="color: #2b3481;">$<?php echo number_format($person_price,2);?></span></div>
                    <?php $single_person_rate = '';}//} ?>
                    </div>
                    <br>
                    @if($plan->plan_pdf_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->plan_pdf_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->plan_pdf_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF {{ $existingshow }}
                    </a>
                    @endif
                    <br>
                    @if($plan->benifit_summary_without_pre_existing)
                    <a href="{{ url('public/images') }}/{{ $plan->benifit_summary_without_pre_existing }}" class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of {{ $existingshow }}
                    </a>
                    @endif
                </div>

                <h3 id="changeshowtoless<?php echo $newdeductibleforshow.$plan_id;?>" class="person-additional-traveler-h3" onclick="slideadditionaltravelers(<?php echo $newdeductibleforshow.$plan_id;?>)"><i class="fa fa-plus-circle colorblue"></i> Show Details</h3>
          </div>
          <div class="col-md-3 price-limit">
              <div class="plan-coverage-limit">
                  <div class="limit-lable mb-3">
                      <span>Coverage Limit</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php 
                        if($sum_insured >= 1000000){
                        $millions = $sum_insured/1000000;
                        $txt = ' Million';
                        } else {
                        $millions = $sum_insured;
                        $txt = '';
                        }
                        echo number_format($millions).$txt;
                        $dob = $years[0].'-'.$request->month.''.$request->dob_day;
                        $agent = $request->agent;
                        $broker = $request->broker;?>        
                    </h2>
                  </div>
              </div>
              <div class="plan-coverage-limits">
                  <div class="limit-lable mb-3">
                      <span>Deductible</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php echo $deductible;?> </h2>
                    </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="compare compare-check  justify-content-end d-flex">
                <span class="">Compare</span>
                <input style="height: 28px; width: 20px; margin-left: 10px;" type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $data->pro_id; ?>"  data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price,2));?>" value="<?php echo str_replace(',', '', number_format($total_price,2));?>" onclick="comparetest()">

            </div>
              <div class="qoute-logo">
                  <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
              </div>
              <div class="total-price-traveller">
                  <h2 id="traveler-price">$<?php echo number_format($total_price,2);?><span>CAD</span></h2>
                  <?php if($monthly_two == '1'){?>
                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($monthly_price,2);?>/Month <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
                    <?php } ?>
              </div>
              <div class="buy_now"> 
                <form method="POST" action="{{ url('apply') }}">
                    @csrf
                    <input type="hidden" value="{{ $request->savers_email }}" name="email">
                    <input type="hidden" value="{{ $request->fname }}" name="fname">
                    <input type="hidden" value="{{ $request->lname }}" name="lname">
                    <input type="hidden" value="{{ $sum_insured }}" name="coverage">
                    <input type="hidden" value="{{ $number_travelers }}" name="traveller">
                    <input type="hidden" value="{{ $deductible }}" name="deductibles">
                    <input type="hidden" value="{{ $deduct_rate }}" name="deductible_rate">
                    <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
                    @foreach($years as $year)
                    <input type="hidden" name="years[]" value="{{ $year }}">
                    @endforeach
                    <input type="hidden" value="{{ $num_of_days }}" name="days">
                    <input type="hidden" value="{{ $comp_name }}" name="companyName">
                    <input type="hidden" value="{{ $comp_id }}" name="comp_id">
                    <input type="hidden" value="{{ $plan_name }}" name="planname">
                    <input type="hidden" value="{{ $plan_id }}" name="plan_id">
                    <input type="hidden" value="{{ $startdate }}" name="tripdate">
                    <input type="hidden" value="{{ $enddate }}" name="tripend">
                    <input type="hidden" value="{{ $total_price }}" name="premium">
                    <input type="hidden" value="{{ $request->destination }}" name="destination">
                    <input type="hidden" value="" name="cdestination">
                    <input type="hidden" value="{{ $product_name }}" name="product_name">
                    <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
                    <input type="hidden" value="{{ $request->primary_destination }}" name="country">
                    <input type="hidden" value="{{ $product_name }}" name="visitor_visa_type">
                    <input type="hidden" value="{{ $num_of_days }}" name="tripduration">
                    <input type="hidden" value="{{ $ages_array[0] }}" name="age">
                    <input type="hidden" value="{{ $dob }}" name="dob">
                    <input type="hidden" value="{{ $agent }}" name="agent">
                    <input type="hidden" value="{{ $broker }}" name="broker">
                    <button class="btn btn-block text-white" type="submit">Buy</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
</span>
<?php

$daily_rate = 0;


?>

        <?php 
        $display = '';
        }}}} ?>

        


        <?php
    //  error_reporting(E_ERROR);
    $second_startdate = $request->departure_date;
    $second_enddate = $request->return_date;

    $second_dStart = new DateTime($request->departure_date);
    $second_dEnd  = new DateTime($request->return_date);
    $second_dDiff = $second_dStart->diff($second_dEnd);
    $second_dDiff->format('%R'); // use for point out relation: smaller/greater
    $second_num_of_days = $second_dDiff->days + 1;
    if($second_num_of_days > 365 || $second_num_of_days == 364){ $second_num_of_days = 365; }

    //$second_num_of_days = 365;
    $second_prosupervisa = $data->pro_supervisa;
    $second_product_name = $data->pro_name;

    if($second_prosupervisa == '1'){
    $second_supervisa = 'yes';
    $second_num_of_days = 365;
    } else {
    $second_supervisa = 'no';
    }

    $second_enable_family_plan = (!empty($request->familyplan)) ? true : false;
    $second_enable_pre_existing = (!empty($request->pre_existing)) ? true : false;

    if($request->familyplan_temp == 'yes'){
    $second_enable_family_plan = true;
    } else {
    $second_enable_family_plan = false;
    }
    if($request->pre_existing == 'Yes'){
    $second_enable_pre_existing = true;
    } else {
    $second_enable_pre_existing = false;
    }

    $second_oldest_traveller = 0;
    $second_family_plan      = false;
 
    $second_years = array();


foreach ($request->years as $second_r) {
    if($second_r)
    {
        $second_bday = new DateTime($second_r); // Your date of birth
        $second_today = new Datetime(date('m.d.y'));
        $second_diff = $second_today->diff($second_bday);
        $second_years[] =  $second_diff->y;
    }
}

if (is_array($second_years)){
    $second_ages_array = array_filter($second_years);
    $second_younger_age = min($second_ages_array);
    $second_elder_age = max($second_ages_array);
    $second_number_travelers = count($second_ages_array);
}
else {
    $second_younger_age = 0;
    $second_elder_age = 0;
    $second_number_travelers = 1;
}
if($request->familyplan_temp == 'yes'){
    if($second_number_travelers >= 2 && ($second_elder_age >= 21 && $second_elder_age <=58) && ($second_younger_age <=21)){
        $second_family_plan = 'yes';
    }
    else {
        $second_family_plan = 'no';
    }
} else {
    $second_family_plan = 'no';
}

if($request->familyplan_temp == 'yes' && $second_family_plan == 'no'){
 //echo "<script>window.location='?action=not_eligible';</script>";
}
?>
<script type="text/javascript">
    var numberoftravelers = '{{ $second_number_travelers }}';
    var elderage = '{{ $second_elder_age }}';
    if(numberoftravelers > 1)
    {
        $second_('#ageshow').val(numberoftravelers+', Ages '+ elderage+ ' and ....');
    }else{
        $second_('#ageshow').val(numberoftravelers+', '+ elderage+ ' Years');
    }
    
    
</script>
<?php
        $second_addinquery = '';
        $second_lessquery = '';
        // if($request->pre_existing == 'yes' || $request->pre_existing == '1'){
        //     $second_addinquery .= "AND `premedical`='1'";
        // }
        if($second_family_plan == 'yes'){
            $second_addinquery .= "AND `family_plan`='1'";
        }
        if($second_num_of_days < '365'){
            $second_lessquery = " AND `rate_base`<>'2'";
        }
        $second_plans_q = DB::select("SELECT * FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id' AND `status`='1' $second_lessquery $second_addinquery ORDER BY `id`");

        foreach($second_plans_q as $second_plan){

        $second_plan_id = $second_plan->id;
        $second_plan_name = $second_plan->plan_name;
        $second_pre_existing_name = $second_plan->pre_existing_name;
        $second_without_pre_existing_name = $second_plan->without_pre_existing_name;
        $second_insurance_company = $second_plan->insurance_company;
        $second_plan_name_for_result = $second_plan->plan_name_for_result;
        $second_premedical = $second_plan->premedical;
        $second_rate_base = $second_plan->rate_base;  //0=Daily 1=Monthly 2=Yearly 3=Multi
        $second_monthly_two = $second_plan->monthly_two;
        $second_flatrate = $second_plan->flatrate;
        $second_flatrate_type = $second_plan->flatrate_type;
        $second_sales_tax = $second_plan->sales_tax;
        $second_smoke_rate = $second_plan->smoke_rate;
        $second_smoke = $second_plan->smoke;
        $second_directlink = $second_plan->directlink;
        $second_status = $second_plan->status;
        $second_cdiscountrate = $second_plan->cdiscountrate;
        $second_plan_discount = $second_plan->discount;
        $second_plan_discount_rate = $second_plan->discount_rate;

        $second_post_dest = str_replace(' ', '', strtolower($request->primary_destination));
        if($second_sales_tax)
        {
            $second_salestaxeplode = explode('%', $second_sales_tax);
            $second_salestax_rate = $second_salestaxeplode[0];
            $second_salestax_dest = str_replace(' ', '', $second_salestaxeplode[1]);
        }
        


        //COMPANY Details
        $second_company = DB::table('wp_dh_companies')->where('comp_id' , $second_insurance_company)->first();
        $second_comp_id = $second_company->comp_id;
        $second_comp_name = $second_company->comp_name;
        $second_comp_logo = $second_company->comp_logo;


        $second_deductsloop = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
        foreach($second_deductsloop as $second_deductsloop_f){
            if($second_deductsloop_f)
            {
                $second_deductible = $second_deductsloop_f->deductible1;
            }
            
            $second_deduct = '';
            $second_deduct_rate = '';
            $second_deduct_plan_id = '';
            $second_deductsq = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id' , $second_plan_id)->where('deductible1' , $second_deductible)->first();

            if($second_deductsq)
            {
                $second_deduct = $second_deductsq->deductible1;
                  $second_deduct_rate = str_replace('-', '', $second_deductsq->deductible2);
                $second_deduct_plan_id = $second_deductsq->plan_id;
            }
            if($second_supervisa == 'yes'){
                $second_addinbenefit = "AND CAST(`sum_insured` AS DECIMAL)>='100000'";
            }else{
                $second_addinbenefit = '';
            }
            $second_sum_insured= '';        
            $second_sumin = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id`='$second_deduct_plan_id' $second_addinbenefit GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
        foreach($second_sumin as $second_suminsu){
        $second_sum_insured = $second_suminsu->sum_insured;
        $second_sumamt = '';
        $second_sumqry = DB::table('wp_dh_insurance_plans_rates')->where('plan_id' , $second_plan_id)->where('sum_insured' , $second_sum_insured)->first();
        $second_sumamt = $second_sumqry->sum_insured;


        //getting prices for each ages

            if($second_rate_base == '3'){
                $second_rates_table_name = "wp_dh_plan_day_rate";
                $second_addquery = "AND '$second_num_of_days' BETWEEN `min_range` AND `max_range`";
            } else {
                $second_rates_table_name = "wp_dh_insurance_plans_rates";
                $second_addquery = "";
            }

            $second_total_price = 0;
            $second_daily_rate = 0;
            //$second_single_person_rate = 0;
            //$second_single_person_rate = array();
            $second_display = array();
            if($second_family_plan == 'yes'){
                $second_planrates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");
                $second_daily_rate = $second_planrates[0]->rate * 2;   //Multipling by 2 for family elder rate

                if(!$second_daily_rate){ $second_display = '0'; }
            } else {
                $second_perone = 0;
                foreach($second_ages_array as $second_person_age){
                $second_perone++;
                   $second_plan_rates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");
                   $second_countarray =  count($second_plan_rates);
                   if($second_countarray > 0)
                   {

                        if($request->pre_existing[$second_perone-1]=='yes')
                        {
                            $second_dailyrate = $second_plan_rates[0]->rate_with_pre_existing;
                            $second_daily_rate += $second_dailyrate;
                            if($second_dailyrate == ''){ $second_dailyrate = 0; }
                            $second_display[] =  $second_dailyrate;
                            $second_dailyrate = 0;
                        }else{
                            $second_dailyrate = $second_plan_rates[0]->rate_with_pre_existing;
                            $second_daily_rate += $second_dailyrate;
                            if($second_dailyrate == ''){ $second_dailyrate = 0; }
                            $second_display[] =  $second_dailyrate;
                            $second_dailyrate = 0;
                        }

 
                   }
                    
                }
            }


//NUM OF MONTHS
$second_num_months = $second_num_of_days / 30;
$second_num_months = ceil($second_num_months ); // converting is 1.2,1.3 etc.. then it will be 2
if($second_num_months > 12){ $second_num_months = 12; }

if($second_rate_base == '0'){ // if daily rate
$second_total_price = $second_daily_rate * $second_num_of_days;
} else if($second_rate_base == '1'){ //if monthly rate
$second_total_price = $second_daily_rate * $second_num_months;
$second_monthly_price = $second_total_price / $second_num_months;
} else if($second_rate_base == '2'){ // if yearly rate
$second_total_price = $second_daily_rate;
}
else if($second_rate_base == '3'){ // if multi days rate
$second_total_price = $second_daily_rate;
}

if($second_flatrate_type == 'each'){
$second_flat_price = $second_flatrate * $second_number_travelers;
}else if($second_flatrate_type == 'total'){
$second_flat_price = $second_flatrate;
} else {
$second_flat_price = 0;
}
//totaldaysprice
$second_totaldaysprice = $second_total_price;
//SALES TAX
// if($second_salestax_dest == $second_post_dest){
//$second_salesequal = 'yes';
// $second_salestaxes = ($second_salestax_rate * $second_totaldaysprice) / 100;
// } else {
// $second_salestaxes = 0;
//$second_salesequal = 'no';
// }

//SMOKE RATE
if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
if($second_smoke == '0'){
    if($second_smoke_rate == 0)
    {
        $second_smoke_price = 0;
    }else{
        $second_smoke_price = $second_smoke_rate;
    }

} else if($second_smoke == '1'){
$second_smoke_price = ($second_totaldaysprice * $second_smoke_rate) / 100;
}
} else {
$second_smoke_price = 0;
}

$second_salestaxes = 0;
// OTHERS
$second_others = ($second_flat_price + $second_salestaxes) + $second_smoke_price;




//Deductible
$second_deduct_discount = ($second_total_price * $second_deduct_rate) / 100;
$second_cdiscount = ($second_total_price * $second_cdiscountrate) / 100;
if (strpos($second_deductsq->deductible2, '-') !== false) {
//if deductible is in minus
$second_discount = $second_deduct_discount + $second_cdiscount;
$second_adddeductible = 0;
} else {
//if deductible is in plus
$second_discount = $second_cdiscount;
$second_adddeductible = $second_deduct_discount;
}

$second_total_price = ($second_total_price - $second_discount) + ($second_others + $second_adddeductible);
//Discount on plan calculation
$second_discountonplan = 0;
if($second_plan_discount == '1'){
if($second_number_travelers > 1 && $second_family_plan == 'no'){
$second_discountonplan = ($second_plan_discount_rate * $second_total_price) / 100;
}
}
$second_total_price = $second_total_price - $second_discountonplan;
$second_monthly_price = $second_total_price / $second_num_months;
if($second_monthly_two == '1'){
    $second_total_price = $second_total_price - $second_flat_price;
}
if (in_array("0", $second_display)){ $second_show = '0'; } else {$second_show = '1'; }


if($second_show == '1' && $second_total_price > 0){

  ?>

<span id="dv_{{$second_total_price}}" class="coverage-amt coverage-amt-<?php echo $second_sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $second_sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
<div class="deductable card qoute-price-card mb-3 deductable-<?php echo $second_deductible; ?>" style="position: relative;display: <?php if($second_deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $second_deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
  <div class="card-body">
    <div class="row" style=" position: absolute; top: -12px; margin: auto; width: 100%; left: 0;"> <div class="col-md-12"> <p style=" background-color: red; width: 180px; text-align: center; color: white; border-radius: 10px; ">This is Pre Eisting Plan</p> </div> </div>
      <div class="row">
          <div class="col-md-6">
              <div class="plan-label">
                  <!-- <h2><?php echo $second_plan_name;?></h2> -->
              </div>
                <p class="plan-subheading">
                  Deductible Option ($<?php echo $second_deductible;?> <span style="color:#2b3481;">(Included in premium)</span>)
                  <br>
                  Days: <?php echo $second_num_of_days;?> (<?php echo $second_startdate;?> - <?php echo $second_enddate;?>)
                </p>
                <h2 class="qoute-policy">Policy Details</h2>
                  <ul class="plan-highlights text-dark ml-3">
                      <li><span>Travellers: <span class="plan-cat"><?php echo $second_number_travelers;?> Traveller(s)</span></span></li>
                      <li><span>Quote Details : <span class="plan-cat"><?php echo $second_product_name;?></span></span></li>
                  </ul>
                  <?php 
                    if($second_deductible == 0)
                    {
                        $second_newdeductibleforshow = 7896;
                    }else{
                        $second_newdeductibleforshow = $second_deductible;
                    }

                  ?>
                <h3 onclick="slideadditionaltravelers(<?php echo $second_newdeductibleforshow.$second_plan_id;?>12345)"  style="font-size:15px;cursor: pointer;color: #2b3481 !important;" class="qoute-policy">Additional Travelers <i class="fa fa-plus"></i> </h3>
                <div style="display: none;" class="row hoverdetails_<?php echo $second_newdeductibleforshow.$second_plan_id;?>12345" >
                    
                    
                    
                    <div class="">
                    <?php
                    $second_per = 0;
                    $second_single_person_rate = 0;
                    foreach($second_ages_array as $second_person_age){
                    $second_per++;
                    $second_p_planrates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");

                    $second_countarraytwo =  count($second_p_planrates);
                    if($second_countarraytwo > 0)

                    {
                        if($request->pre_existing[$second_per-1]=='yes')
                        {
                            $second_single_person_rate = $second_p_planrates[0]->rate_with_pre_existing;
                            $second_existingshow = $second_pre_existing_name;
                        }else{
                            $second_single_person_rate = $second_p_planrates[0]->rate_with_pre_existing;
                            $second_existingshow = $second_pre_existing_name;
                        }

                        
                                
                        if($second_family_plan == 'yes' && $second_elder_age != $second_person_age){
                        $second_person_daily = 0;
                        } else if($second_family_plan == 'yes' && $second_elder_age == $second_person_age){
                        $second_person_daily = $second_single_person_rate * 2;
                        } else {
                        $second_person_daily = $second_single_person_rate;
                        }

                        if($second_rate_base == '0'){ // if daily rate
                        $second_person_price = $second_person_daily * $second_num_of_days;
                        } else if($second_rate_base == '1'){ //if monthly rate
                        $second_person_price = $second_person_daily * $second_num_months;
                        } else if($second_rate_base == '2'){ // if yearly rate
                        $second_person_price = $second_person_daily;
                        }
                        else if($second_rate_base == '3'){ // if multi days rate
                        $second_person_price = $second_person_daily;
                        }

                        if($second_flatrate_type == 'each'){
                        $second_p_flat_price = $second_flatrate;
                        }else if($second_flatrate_type == 'total'){
                        $second_p_flat_price = $second_flatrate  / $second_number_travelers;
                        } else {
                        $second_p_flat_price = 0;
                        }
                        //totaldaysprice
                        $second_ptotaldaysprice = $second_person_price;
                        //SALES TAX
                        // if($second_salestax_dest == $second_post_dest){
                        //$second_salesequal = 'yes';
                        // $second_p_salestaxes = ($second_salestax_rate * $second_ptotaldaysprice) / 100;
                        // } else {
                        // $second_p_salestaxes = 0;
                        //$second_salesequal = 'no';
                        // }

                        //SMOKE RATE
                        if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
                        if($second_smoke == '0'){
                        $second_p_smoke_price = $second_smoke_rate;
                        } else if($second_smoke == '1'){
                        $second_p_smoke_price = ($second_ptotaldaysprice * $second_smoke_rate) / 100;    
                        }
                        } else {
                        $second_p_smoke_price = 0; 
                        }

                        // OTHERS
                        $second_p_salestaxes = 0;
                        $second_p_others = ($second_p_flat_price + $second_p_salestaxes) + $second_p_smoke_price;

                        //Deductible 
                        $second_p_deduct_discount = ($second_person_price * $second_deduct_rate) / 100;
                        $second_p_cdiscount = ($second_person_price * $second_cdiscountrate) / 100;
                        $second_p_discount = $second_p_deduct_discount + $second_p_cdiscount;
                        $second_person_price = ($second_person_price - $second_p_discount) + $second_p_others;
                    }

                    


                            


                    
                    
                    //$second_monthly_price = $second_person_price / $second_num_months;


                    //if($second_single_person_rate > 0){
                                        ?>
                    <div class="col-md-12 no-padding"><span style="display:block; padding:3px; font-size:15px; text-align:left; border-bottom:1px dashed #333;">Person <?php echo $second_per;?> @if($second_existingshow)({{$second_existingshow}}) @endif</span></div>
                    <div class="col-md-12 no-padding"><small>Insured: <span style="color: #f5821f;"> (Age: <?php echo $second_person_age; ?>)</span> Premium: <span style="color: #f5821f;">$<?php echo number_format($second_person_price,2);?></span></small></div>
                    <?php $second_single_person_rate = '';}//} ?>
                    </div>
                </div>
          </div>
          <div class="col-md-3 price-limit">
              <div class="plan-coverage-limit">
                  <div class="limit-lable mb-3">
                      <span>Coverage Limit</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php 
                        if($second_sum_insured >= 1000000){
                        $second_millions = $second_sum_insured/1000000;
                        $second_txt = ' Million';
                        } else {
                        $second_millions = $second_sum_insured;
                        $second_txt = '';
                        }
                        echo number_format($second_millions).$second_txt;
                        $second_dob = $second_years[0].'-'.$request->month.''.$request->dob_day;
                        $second_agent = $request->agent;
                        $second_broker = $request->broker;?>        
                    </h2>
                  </div>
              </div>
              <div class="plan-coverage-limits">
                  <div class="limit-lable mb-3">
                      <span>Deductible</span>
                  </div>
                  <div class="qoute-price-select">
                    <h2>$<?php echo $second_deductible;?> </h2>
                    </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="compare compare-check  justify-content-end d-flex">
                <span class="">Compare</span>
                <input style="height: 28px; width: 20px; margin-left: 10px;" type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $data->pro_id; ?>"  data-pid="<?php echo $second_plan_id; ?>" price="<?php echo str_replace(',', '', number_format($second_total_price,2));?>" value="<?php echo str_replace(',', '', number_format($second_total_price,2));?>" onclick="comparetest()">

            </div>
              <div class="qoute-logo">
                  <img src="{{ url('public/images') }}/<?php echo $second_comp_logo; ?>">
              </div>
              <div class="total-price-traveller">
                  <h2 id="traveler-price">$<?php echo number_format($second_total_price,2);?><span>CAD</span></h2>
                  <?php if($second_monthly_two == '1'){?>
                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($second_monthly_price,2);?>/Month <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $second_num_months;?></small></h2>
                    <?php } ?>
              </div>
              <div class="buy_now"> 
                <form method="POST" action="{{ url('apply') }}">
                @csrf
                <input type="hidden" value="{{ $request->savers_email }}" name="email">
                <input type="hidden" value="{{ $request->fname }}" name="fname">
                <input type="hidden" value="{{ $request->lname }}" name="lname">
                <input type="hidden" value="{{ $second_sum_insured }}" name="coverage">
                <input type="hidden" value="{{ $second_number_travelers }}" name="traveller">
                <input type="hidden" value="{{ $second_deductible }}" name="deductibles">
                <input type="hidden" value="{{ $second_deduct_rate }}" name="deductible_rate">
                <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
                @foreach($second_years as $second_year)
                <input type="hidden" name="years[]" value="{{ $second_year }}">
                @endforeach
                <input type="hidden" value="{{ $second_num_of_days }}" name="days">
                <input type="hidden" value="{{ $second_comp_name }}" name="companyName">
                <input type="hidden" value="{{ $second_comp_id }}" name="comp_id">
                <input type="hidden" value="{{ $second_plan_name }}" name="planname">
                <input type="hidden" value="{{ $second_plan_id }}" name="plan_id">
                <input type="hidden" value="{{ $second_startdate }}" name="tripdate">
                <input type="hidden" value="{{ $second_enddate }}" name="tripend">
                <input type="hidden" value="{{ $second_total_price }}" name="premium">
                <input type="hidden" value="{{ $request->destination }}" name="destination">
                <input type="hidden" value="" name="cdestination">
                <input type="hidden" value="{{ $second_product_name }}" name="product_name">
                <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
                <input type="hidden" value="{{ $request->primary_destination }}" name="country">
                <input type="hidden" value="{{ $second_product_name }}" name="visitor_visa_type">
                <input type="hidden" value="{{ $second_num_of_days }}" name="tripduration">
                <input type="hidden" value="{{ $second_ages_array[0] }}" name="age">
                <input type="hidden" value="{{ $second_dob }}" name="dob">
                <input type="hidden" value="{{ $second_agent }}" name="agent">
                <input type="hidden" value="{{ $second_broker }}" name="broker">
                <button class="btn btn-block text-white" type="submit">Buy</button>
              </form>
              </div>
          </div>
      </div>
  </div>
</div>
</span>
<?php

$second_daily_rate = 0;


?>

        <?php 
        $second_display = '';
        }}}} ?>
    <?php }

?>
        



</div>
</div>
<script>

    $( document ).ready(function() {
        var main = document.getElementById('main');
        [].map.call( main.children, Object ).sort( function ( a, b ) {
            return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
        }).forEach( function ( elem ) {
            main.appendChild( elem );
        });
    });
    $( document ).ready(function() {
        var main = document.getElementById('mobCard');
        [].map.call( main.children, Object ).sort( function ( a, b ) {
            return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
        }).forEach( function ( elem ) {
            main.appendChild( elem );
        });
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
    function comparetest(){
        var pids = [];
        var price = [];
        var $checkboxes = jQuery('.compare input[type="checkbox"]');
        $checkboxes.change(function(e){
            console.log('ok');
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
                var compareUrl = "{{ url('compareplans') }}?email={{$request->savers_email}}&product_id=" + product_id + '&ids=' + planId + '&'+arr+'&default_value='+slider1+'&price_value='+slider2+'&rate='+main_price;
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
        background: rgb(249, 249, 249) none repeat scroll 0% 0%;
        padding: 10px;
        position: fixed;
        top: 88px;
        border-radius: 20px;
        width: 87%;
        display: none;
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