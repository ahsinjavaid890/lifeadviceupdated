<div class="col-md-9 col-xs-12" id="listprices">
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
$discountonplan = ($plan_discount_rate * $total_price) / 100;
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
<div class="desktop-compare listing-item" data-listing-price="<?php echo str_replace(',', '', number_format($total_price)); ?>">
   <div class="coverage-amt col-md-12 coverage-amt-<?php echo $sum_insured; ?>"
      style="<?php echo $request->sum_insured2 == $sum_insured ? '' : 'display:none;'; ?> padding:0; ">
      <div class="row plan-details   deductable-<?php echo $deductible; ?>"
         style="border:1px solid #c0c0c0; margin-bottom: 25px !important; padding:7px;  display: <?php if ($deductible == '1000') {
            echo 'flex';
            } elseif ($havethousand == 'no' && $deductible == '0') {
            echo 'flex';
            } else {
            echo 'none';
            } ?>;">
         <div class="col-md-5 col-xs-12 logogd mobile-deisply-none">
            <div class="col-md-12 col-xs-12 text-center"
               style="border: 0px solid #000;padding: 12px 0px 10px 5px;text-align: center;background: #EEE;border-radius: 10px;">
               <img style="max-height:60px; width:auto;"
                  src="{{ url('public/images') }}/<?php echo $comp_logo; ?>" class="img-responsive" />
            </div>
            <div class="col-md-12 col-xs-12 text-center">
               <button class="btn btn-default dh-toggle" onclick="showdetails({{ 1+$deductible.$plan_id }})" aria-hidden="true"
                  style="text-transform: none; font-weight: normal; box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5); cursor: pointer; height: 30px; margin-top: -20px; background: #1BBC9B; color: #FFF;padding: 0.175rem 0.75rem;">
               Summary & Info
               <i class="fa fa-angle-down" aria-hidden="true"></i>
               </button>
            </div>
         </div>
         <div class="col-md-4 col-xs-12 mobile-deisply-none" style="border:0px solid #000; padding: 5px 0; text-align: center" id="price">
            <h3 style="margin-bottom:0;line-height: normal;">
                <?php $explode = explode('.', number_format($total_price, 2)); ?>
                <span style="font-size: 32px;font-weight: bold;color:#222;"><sup class="superior">$</sup><?php echo $explode[0] . '.'; ?><sup class="superior"><?php echo $explode[1]; ?></sup></span></h3>
            <?php if($monthly_two == '1'){?>
            <h2 style="padding;5px; margin:0; font-size:12px; font-weight:bold;color: #333;line-height: normal;width: auto;">
               $<?php echo number_format($monthly_price, 2); ?>/Month<small
                  style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months; ?>
               </small> 
            </h2>
            <?php } ?>
            <p style="font-weight: normal;margin:0;">$<?php echo $deductible; ?> Deductible</p>
         </div>
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
                'num_of_days'=>$num_of_days
            );
            $savetoplan = serialize($createbuynowarray)
        @endphp
        <div class="col-md-2 col-xs-12 mobile-deisply-none" style="border:0px solid #000;text-align:center;">
            <button onclick="$('.buynow_<?php echo $deductible . $plan_id; ?>').slideToggle();" class="buynow-btn" data-value="217" name="buynow" style="    color: #FFF;margin-top: 10px;width: 100%;  float: right; min-width: 150px; background: #F46D00;border-radius: 5px;font-weight: bold;">Buy Now
            </button>
        </div>
        <div class="col-md-1 col-sm-6 hidden-xs mobile-deisply-none" style="padding-top: 20px;padding-left: 0;">
            @if(in_array('yes',$request->pre_existing) && in_array('no',$request->pre_existing))

            @else
            <div class="compare center aligned middle aligned column">
                <div class="ui center aligned header">
                    <div class="field">
                        <div class="text-center">
                            <input data-productid="23" data-pid="217" price="983.12" style="width: 20px; height:auto !important;" type="checkbox" tabindex="0" class="hidden1" onclick="savecompareplans('{{ $savetoplan }}')">
                            <label></label>
                        </div>
                    </div>
                    <div class="sub header" style="font-size: 11px;">Compare</div>
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-12 mobile-deisply-show mt-1" style="display: none;background-color: white;">
            <div class="logoandpricerow mt-2" style="display: flex;">
                <div class="logoforseven" style="width: 50%;">
                    <img style="max-height:60px; width:auto;" src="{{ url('public/images') }}/<?php echo $comp_logo; ?>" class="img-responsive" />
                </div>
                <div class="priceforseven" style="width: 50%;text-align: right;">
                    <h3 style="margin-bottom:0;line-height: normal;">
                    <?php $explode = explode('.', number_format($total_price, 2)); ?>
                    <span style="font-size: 32px;font-weight: bold;color:#222;"><sup class="superior">$</sup><?php echo $explode[0] . '.'; ?><sup class="superior"><?php echo $explode[1]; ?></sup></span></h3>
                </div>
            </div>
            <div class="mt-2 mb-2" style="display:flex;">
                <button onclick="showdetails({{ 1+$deductible.$plan_id }})" style="width: 48%;padding: 10px;border: 1px solid #b8afaf;border-radius: 5px;font-size: 16px;margin-right: 10px;">Summary & Info</button>
                <button onclick="$('.buynow_<?php echo $deductible . $plan_id; ?>').slideToggle();" style="width: 48%;padding: 10px;border: 1px solid #b8afaf;border-radius: 5px;font-size: 16px;margin-left: 10px;background-color: #1ebca2;color: white;">Buy Now</button>
            </div>
        </div>
      </div>
      @include('frontend.travelinsurance.includes.policydetails')
      @include('frontend.travelinsurance.includes.buynowform')
   </div>
</div>
@endif
                <?php
    if ($sum_insured == $request->sum_insured2){   
      
    
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
    }
    $display = ''; }}}} ?>
<?php
if ($request->sendemail == 'yes') {
    $counter = 0;
    if (isset($request->savers_email)) {
        array_multisort($price, SORT_ASC, $mailitem);
        $subject = "Your Quote - $product_name";
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;
        $emailview = 'email.template'.$temp.'.quoteemail';
        Mail::send($emailview, array('quoteNumber'=>$quoteNumber,'request'=>$request,'mailitem'=>$mailitem), function($message) use ($request,$subject) {
                   $message->to($request->savers_email)->subject($subject);
                   $message->from('quote@lifeadvice.ca','LIFEADVICE');
                });
    }
}
?>
            </div>