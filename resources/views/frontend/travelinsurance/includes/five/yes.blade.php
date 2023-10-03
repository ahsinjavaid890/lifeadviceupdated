<div class="col-md-9" id="listprices">
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
    $daily_rate = $plan_rates[0]->rate_without_pre_existing * 2;
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
@if(Cmf::checkallrates($ages_array , $rates_table_name, $deduct_plan_id , $sumamt) == 1)
<div class="desktop-compare listing-item"
    data-listing-price="<?php echo str_replace(',', '', number_format($total_price));?>">
    <div class="coverage-amt pricearray coverage-amt-{{$sum_insured}} pricearray{{ $comp_id }}{{ $total_price }}"
        style="display: <?php if($_REQUEST['sum_insured2'] == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>; vertical-align: inherit; ">
        <div class="row plan-details  deductable-<?php echo $deductible; ?>"
            style="border:1px solid #c0c0c0;margin-bottom: 20px; display: <?php if($deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>;">
            <div class="col-md-3" style="border:0px solid #000;  text-align:center;padding: 5px 0; ">
                <i class="fa fa-exclamation-circle dh-toggle" onclick="showdetails({{ 1+$deductible.$plan_id }})"
                    style="cursor:pointer;position: absolute;top: 40%;left: 0;" aria-hidden="true"></i>
                <img style="min-height:20px; margin-left: 41px;margin-top: 0px;" width="200"src="{{ url('public/images') }}/{{ $comp_logo }}" />
            </div>

            <div class="col-md-3" style="border:0px solid #000;font-size: 16px;padding-top: 20px; text-align:center;">
                <p style="margin-bottom: 0px;">${{number_format($sum_insured)}} Coverage</p>
                <p style="margin-bottom: 0px;">${{ $deductible }} Deductible</p>
            </div>

            <div class="col-md-3" style="border:0px solid #000; text-align: center; @if($monthly_two == '1') padding: 5px 0; @else padding-top: 20px; @endif">
                <h2 style="color: #223b74; font-size: 30px; font-weight: bold;margin-bottom: 0px;">${{ number_format($total_price,2) }}</h2>
                <small style="font-size: 15px;margin-left: -10px;color: #777;!important">
                    <?php echo $number_travelers; ?> Traveller<?php if($number_travelers > 1){echo "'s";} ?>
                </small>
                <?php if($monthly_two == '1'){?>
                <h2 style="margin:0; font-size:15px; font-weight:bold;color: #333;font-family: arial;line-height: normal;width: auto;">
                    $<?php echo number_format($monthly_price,2);?>/Month<small
                        style="color: #f5821f;font-weight: bold;margin-left: 1px;">
                        <?php echo $num_months;?>
                    </small>
                </h2>
                <?php } ?>

            </div>
            <div class="col-md-3" style="border:0px solid #000;  text-align:center;padding-right: 5px; padding-left: 4px; ">
                <button style="background-color: #2b3481 !important;" onclick="$('.buynow_{{ $deductible.$plan_id }}').slideToggle();" class="btn submit-btn" data-value="{{ $plan_id }}" name="buynow">Buy this plan</button>
                <label style="margin-bottom:0px;" onclick="savecompareplans({{ $plan_id }},{{ $data->pro_id }},{{ $sum_insured }},{{ $deductible }},{{ $total_price }})" class="btn submit-btn mt-2 col-md-12 col-xs-5 comparebutton{{ $plan_id }}{{ $data->pro_id }}{{ $sum_insured }}{{ $deductible }}" id="compare"><i class="fa fa-database"></i> Compare</label>
            </div>


            @include('frontend.travelinsurance.includes.policydetails')

            <div style="clear:both;height:10px;"></div>
            
            
            @include('frontend.travelinsurance.includes.buynowform')


        </div>

    </div>
</div>
@endif
            <?php

$mailitem[] = [
    'deductible' => $deductible,
    'sum_insured' => $sum_insured,
    'planproduct' => $product_name,
    'price' => $total_price,
    'quote' => $quoteNumber,
    'logo' => $comp_logo,
    'url' => 'test',
    'buynow' => 'test',
];
$price[] = $total_price;

?>

            <?php $display = ''; }}}} ?>
            <?php
if ($request->sendemail == 'yes') {
    $counter = 0;
    if (isset($request->savers_email)) {
        array_multisort($price, SORT_ASC, $mailitem);
        $subject = "Your Quote - $product_name";
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;
        $emailview = 'email.template'.$temp.'.quoteemail';
        // Mail::send($emailview, array('quoteNumber'=>$quoteNumber,'request'=>$request,'mailitem'=>$mailitem), function($message) use ($request,$subject) {
        //            $message->to($request->savers_email)->subject($subject);
        //            $message->from('quote@lifeadvice.ca','LIFEADVICE');
        //         });
    }
}
?>
        </div>