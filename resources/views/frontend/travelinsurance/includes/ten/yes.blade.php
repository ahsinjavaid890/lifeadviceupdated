<?php
        $plans_q = DB::table('wp_dh_insurance_plans')->where('product' , $data->pro_id)->where('status' , 1)->orderby('id' , 'desc')->get();
        foreach($plans_q as $plan){
            $plan_id = $plan->id;
            $plan_name = $plan->plan_name;
            $insurance_company = $plan->insurance_company;
            $premedical = $plan->premedical;
            $pre_existing_name = $plan->pre_existing_name;
            $without_pre_existing_name = $plan->without_pre_existing_name;
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
            }else{
                $addinbenefit = "";
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
                $plan_rates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");
                $countarray =  count($plan_rates);
                if($countarray > 0)
                {
                    $maxs = array_keys($ages_array, max($ages_array));
                    $preexistingcondition =  $request->pre_existing[$maxs[0]];
                    if($preexistingcondition == 'yes')
                    {
                        $daily_rate = $plan_rates[0]->rate_with_pre_existing  * 2;
                    }else{
                        $daily_rate = $plan_rates[0]->rate_without_pre_existing * 2;
                    }                
                    if(!$daily_rate){ $display = '0'; }
                }
                else{
                    $daily_rate = 500;
                    if(!$daily_rate){ $display = '0'; }
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
$num_months = ceil($num_months);
if ($num_months > 12) {
    $num_months = 12;
}
if ($rate_base == '0') {
    // if daily rate
    $total_price = $daily_rate * $num_of_days;
} else if ($rate_base == '1') {
    // if monthly rate
    $total_price = $daily_rate * $num_months;
    $monthly_price = $total_price / $num_months;
} else if ($rate_base == '2') {
    // if yearly rate
    $total_price = $daily_rate;
} else if ($rate_base == '3') {
    // if multi days rate
    $total_price = $daily_rate;
}
// Total days price
$totaldaysprice = $total_price;
// Sales Tax
$post_dest = str_replace(' ', '', strtolower($request->primary_destination));
if ($sales_tax != 0) {
    if ($salestax_dest == $post_dest) {
        $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
    } else {
        $salestaxes = 0;
    }
} else {
    $salestaxes = 0;
}
// Smoke Rate
if ($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes') {
    if ($smoke == '0') {
        $smoke_price = ($smoke_rate == 0) ? 0 : $smoke_rate;
    } else if ($smoke == '1') {
        $smoke_price = ($totaldaysprice * $smoke_rate) / 100;
    }
} else {
    $smoke_price = 0;
}
// Others
$others = $salestaxes + $smoke_price;
// Deductible
$deduct_discount = ($total_price * $deduct_rate) / 100;
$cdiscount = ($total_price * $cdiscountrate) / 100;
if (strpos($deductsq->deductible2, '-') !== false) {
    // if deductible is negative
    $discount = $deduct_discount + $cdiscount;
    $adddeductible = 0;
} else {
    // if deductible is positive
    $discount = $cdiscount;
    $adddeductible = $deduct_discount;
}
$total_price = ($total_price - $discount) + ($others + $adddeductible);
// Discount on plan calculation
if ($number_travelers > 1) {
    $discountonplan = 0;
    if ($plan_discount == '1') {
        $discountonplan = ($plan_discount_rate * $total_price) / 100;
    }
    $total_price = $total_price - $discountonplan;
}
if ($flatrate_type == 'each') {
    if($plan->flat_rate_type == 'fix')
    {
       $flat_price = $flatrate * $number_travelers; 
    }else{
        $number = $total_price;
        $percentageValue = $flatrate;
        $flatratepercentage = $number * ($percentageValue / 100);
        $flat_price = $flatratepercentage;
    }
} else if ($flatrate_type == 'total') {
    if($plan->flat_rate_type == 'fix')
    {
       $flat_price = $flatrate;
    }else{
        $number = $total_price;
        $percentageValue = $flatrate;
        $flatratepercentage = $number * ($percentageValue / 100);
        $flat_price = $flatratepercentage;
    }
} else {
    $flat_price = 0;
}
if ($monthly_two == '1') {
    $monthly_price = ($total_price + $flat_price) / $num_months;
}

if (in_array("0", $display)){ $show = '0'; } else {$show = '1'; }


if($show == '1' && $total_price > 0){             

?>
@if(Cmf::checkallrates($ages_array , $rates_table_name, $deduct_plan_id , $sumamt) == 1)
<li id="dv_{{$total_price}}" data-listing-price="{{$total_price}}" class="listing-item coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style="display: <?php if($request->sum_insured2 == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
  <div class="row deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
     <div class="grid-list col-md-2 tab-img fold"  data-placement="left">
         <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
      </div>
     <div class="grid-list col-md-2" data-toggle="tooltip" data-placement="left" title="1. In- transit period is not covered in the policy."><?php echo $deductible;?> Per Claim</div>
     <div class="grid-list col-md-2" data-toggle="tooltip" data-placement="left" title="1. In- transit period is not covered in the policy."><span class="price-list"><span>$<?php echo number_format($total_price,2);?><span> CAD</span></span></span> </div>
     <div class="grid-list col-md-3">
        <ul class="common-btn">
           <li><button onclick="$('.buynow_{{ $deductible.$plan_id }}').slideToggle();" class="btn-wrap color-one-btn">Buy</button></li>
           <li><button onclick="showdetails({{ 1+$deductible.$plan_id }})" class="btn-wrap color-three-btn">Plan Details</button></li>
        </ul>
     </div>
     <div class="grid-list col-md-3 custom_comparebtn">
            @php
                $createbuynowarray = array(
                    'plan_id'=>$plan_id,
                    'pro_id'=>$data->pro_id,
                    'sum_insured'=>$sum_insured,
                    'deductible'=>$deductible,
                    'savers_email'=>$request->savers_email,
                    'fname'=>$request->fname,
                    'lname'=>$request->lname,
                    'number_travelers'=>$number_travelers,
                    'deduct_rate'=>$deduct_rate,
                    'date_of_birth'=>$request->date_of_birth,
                    'years'=>$request->years,
                    'preexisting'=>$request->pre_existing,
                    'num_of_days'=>$num_of_days,
                    'comp_name'=>$comp_name,
                    'comp_id'=>$comp_id,
                    'plan_name'=>$plan_name,
                    'startdate'=>$startdate,
                    'enddate'=>$enddate,
                    'total_price'=>$total_price,
                    'product_name'=>$product_name,
                    'primary_destination'=>$request->primary_destination,
                    'ages_array'=>$ages_array[0],
                    'num_of_days'=>$num_of_days,
                    'compare_pre_existing'=>'no'
                );
                $savetoplan = serialize($createbuynowarray)
            @endphp
                <label onclick="savecompareplans('{{ $savetoplan }}')" style="cursor: pointer" class="col-md-12 col-xs-5" id="compare"><i
                        class="fa fa-database"></i> Compare</label>
     </div>
     @include('frontend.travelinsurance.includes.policydetails')
    @include('frontend.travelinsurance.includes.buynowform')
  </div>
</li>
@endif

        <?php
        $display = '';
        }}}} ?>

