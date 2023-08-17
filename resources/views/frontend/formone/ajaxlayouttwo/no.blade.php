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
                $countarray =  count($planrates);


                if($countarray > 0)
                {
                    if($request->pre_existing[0]=='yes')
                    {
                        $daily_rate = $planrates[0]->rate_with_pre_existing * 2;   //Multipling by 2 for family elder rate

                    }else{
                        $daily_rate = $planrates[0]->rate_without_pre_existing * 2;   //Multipling by 2 for family elder rate
                     }
                }
                if(!$daily_rate)
                {
                    $display = '0';
                }else{
                    $display[] =  $daily_rate;
                }

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
                            if($dailyrate == '')
                            {
                                $dailyrate = 0;
                            }
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
// if (in_array("0", $display))
// {
//     $show = '0';
// }
// else
// {
//     $show = '1';
// }

$show = 1;

if($show == '1' && $total_price > 0){

   ?>




   <?php
        }}}}
        ?>





<li>
    <div class="row" style="align-items: center">
        <div class="grid-list col-md-2 tab-img fold" data-toggle="tooltip" data-placement="left"
            title="1. In- transit period is not covered in the policy."><img
                src="https://www.supervisainsurancecanada.com/administrator/assets/img/plans/output-onlinepngtools_1621638516.png">
        </div>
        <div class="grid-list col-md-2" data-toggle="tooltip" data-placement="left"
            title="1. In- transit period is not covered in the policy.">0 Per Claim</div>
        <div class="grid-list col-md-2" data-toggle="tooltip" data-placement="left"
            title="1. In- transit period is not covered in the policy."><span class="price-list"><span>198.90
                    CAD</span></span> </div>
<?php

                    $dob = $request->years[0].'-'.$request->month.''.$request->dob_day;
$agent = $request->agent;
$broker = $request->broker;
?>

                   


        <div class="grid-list col-md-3">
            <ul class="common-btn">
                <li><button class="btn-wrap color-one-btn" onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeIn();" 
                      >Buy </button></li>
                <!--<li><a href="/request-us?policy_type=single&age=47&coverate=50000&preexisting=no&companyName=Ingle Assurance&planId=99&planName=Visitor Insurance - Without Pre-existing conditions&stDate=2023-06-25&edDate=2023-09-22&dsNo=90" class="btn-wrap color-two-btn">Request Us</a></li>-->
                <li><a href="javascript:;"  onclick="$('.summary_<?php echo $deductible.$plan_id;?>').fadeToggle();" 
                        class="btn-wrap color-three-btn">Plan Details</a></li>
            </ul>
        </div>


      
        <div class="grid-list col-md-3 ">
            <div class=" col-md-12">

                {{-- <input type="checkbox" data-planid="99" data-insuranceid="1381"
                    data-planlogo="assets/img/plans/output-onlinepngtools_1621638516.png" data-dedid="3"
                    data-planprice="198.90" id="compare_129" class="vi-compare-plan" name="compare[]" value="compare">
                <label for="compare_129">Compare</label> --}}


                


                <label onclick="savecompareplans({{ $plan_id }},{{ $data->pro_id }},{{ $sum_insured }},{{ $deductible }},{{ $total_price }})" class="mt-2 col-md-12 col-xs-5" id="compare" style="display: block;
                    color: rgb(68, 68, 68);
                    border-radius: 5px;
                    padding: 5px 20px;
                    background: rgb(255, 255, 255);
                    border: 2px solid rgb(221, 221, 221);
                    margin-bottom: 5px;
                    cursor: pointer;"><i class="fa fa-database"></i> Compare</label>
            </div>
        </div>
    </div>



    <div class="col-md-12 col-xs-12 summary_<?php echo $deductible.$plan_id;?> dh-toggle-show-hide-<?php echo $plan_id; ?>"  style="margin-bottom: 20px; border: 1px solid rgb(221, 221, 221); font-family: arial; background: rgb(255, 255, 255) none repeat scroll 0% 0%;  padding: 10px 0; display: none;">
        <div class="row">
            <div class="col-12">
                <a href="javascript:void(0)" onclick="$('.summary_<?php echo $deductible . $plan_id; ?>').fadeToggle();"
                    class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
            </div>
        </div>
      <div class="row">
      <div class="col-md-6 col-xs-6 text-left">
          <b><i class="fa fa-briefcase" aria-hidden="true"></i> Summary:</b>
          <hr/>
          <div style="font-size:12px;">
              <p style="margin:0;"><b>Plan:</b> <small><?php echo $plan_name; ?></small></p>
              <p style="margin:0;"><b>Plan Type:</b> <small><?php if($family_plan == 'yes'){ echo 'Family'; } else {echo 'Individual';}?></small></p>
               <p style="margin:0;"><b>Travellers:</b> <small><?php echo $number_travelers; ?></small></p>
               <p style="margin:0;">
      <?php
          $per = 0;
  foreach($ages_array as $person_age){
  $per++;
          ?>
          <br/><b>Person: </b><small><?php echo $per;?></small><br/>
          Age: <small><?php echo $person_age; ?></small><br/>
          Coverage Amount: <small>$<?php echo $sum_insured; ?></small> <br/>
          Premium  <small><?php
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
          <?php } }?>
          </p>
          
               <p style="margin:0;"><b>Duration:</b><small><?php echo $num_of_days; ?> days (<?php echo $startdate . " - " . $enddate; ?>)</small></p>
              <p style="margin:0;"><b>Total Premium:</b> $<?php echo number_format($total_price,2); ?></small></p>
                  </div>
          </div>
      
      <div class="col-md-3">
          <?php
          $features = DB::table('wp_dh_insurance_plans_features')->where('plan_id' , $plan_id)->get();
          ?>
          <b><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Features:</b>
          <hr/>
          <ul>
              <li style="transition: none;border:none;background:none;">$<?php echo $request->deductible1; ?> deductible</li>
              <?php
                  if ($features->count() > 1 ) {
                      foreach($features as $feature) {
                          echo "<li style='transition: none;border:none;background:none;' >".$feature->features."</li>";
                      }
                  }
                  ?>
          </ul>
  
      </div>
      <div class="col-md-3 col-xs-6 text-left">
          <b><i class="fa fa-list-alt" aria-hidden="true"></i> Policy details:</b>
          <span style="display: none;"><?// "SELECT * FROM {$wpdb->prefix}dh_insurance_plans_rates WHERE minage <= '$year' AND maxage >= '$year' and sum_insured ='".$_SESSION['sum_insured2']."' limit 1000" ?></span>
          <hr/>
          <?php
          //foreach ( get_all_pdfpolicy( $plan_id ) as $pdfpolicy ):
              //echo "<a href='$pdfpolicy->pdfpolicy' style='font-size: 70%;'>Sample Policy</a>";
          //endforeach;
          ?>
      </div>
  </div>
  </div>






    <div style="clear:both;"></div>
<div class="row buynow_<?php echo $deductible.$plan_id;?>" style="clear: both;padding:10px;  border: 1px solid rgb(204, 204, 204);background: #FFF;margin-top: 10px !important;margin-bottom: 10px !important; display:none;margin-left:0px;">
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
    <div class="row" style="flex-wrap: nowrap;">
<div class="col-md-6 col-xs-12" style="background:#F9F9F9; padding-right: 15px; padding-left: 15px;margin-left:15px;">
<h3 style="border-bottom:1px solid #ccc;margin: 0;font-size: 18px;font-weight: bold;color: #000;">Buy Online</h3>
<p style="font-weight: bold;-webkit-margin-before: 1em;    margin-bottom: 30px;">In three simple steps you can purchase your policy, easily and securely, online.</p>
<p style=""><input type="checkbox" name="agree" required="" style="height: auto;margin: 0;"> I give permission to LifeAdvice.ca to transfer my quote information and contact details to <?php echo $comp_name;?> in order to complete the purchase of travel insurance. LifeAdvice values your privacy. For details, see our <a href="/">Privacy Policy</a></p>
<p></p>
<p><button type="submit" class="btn submit-btn mt-2" style="    color: #FFF;
    height: 45px;
    border-radius: 5px;
    margin-bottom: 25px;
    font-weight: bold;
    display: block;
    background: #1bbc9b;"><i class="fa fa-shopping-cart"></i> Buy Now</button></p>
</div>
<div class="col-md-6 col-xs-12 text-center contact-details" style="font-size:16px;">
<a href="javascript:void(0)" onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeOut();" class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
<p style=";">or</p>
<p style="">BY CALLING</p>
<p style=""><a href="tel:8555008999" style="font-size:24px; font-weight:bold; color:#44bc9b;">855-500-8999</a></p>
<p style="; font-weight:bold;border-top: 1px solid #eee;padding-top: 10px;  ">CALL CENTRE HOURS</p>
<p style="font-size:11px;line-height: normal;">Monday to Thursday 8:00 am to 9:00 pm EDT | Friday 8:00 am to 8:00 pm EDT | Saturday 8:30 am to 4:00 pm EDT | Closed on holidays.</p>
</div>
</div>
</form>
</div>




</li>
