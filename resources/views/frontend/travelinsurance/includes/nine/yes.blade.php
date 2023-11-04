<?php
//  error_reporting(E_ERROR);
$startdate = $request->departure_date;
$enddate = $request->return_date;

$dStart = new DateTime($request->departure_date);
$dEnd = new DateTime($request->return_date);
$dDiff = $dStart->diff($dEnd);
$dDiff->format('%R'); // use for point out relation: smaller/greater
$num_of_days = $dDiff->days + 1;
if ($num_of_days > 365 || $num_of_days == 364) {
    $num_of_days = 365;
}

//$num_of_days = 365;
$prosupervisa = $data->pro_supervisa;
$product_name = $data->pro_name;

if ($prosupervisa == '1') {
    $supervisa = 'yes';
    $num_of_days = 365;
} else {
    $supervisa = 'no';
}

$enable_family_plan = !empty($request->familyplan) ? true : false;
$enable_pre_existing = !empty($request->pre_existing) ? true : false;

if ($request->familyplan_temp == 'yes') {
    $enable_family_plan = true;
} else {
    $enable_family_plan = false;
}
if ($request->pre_existing == 'Yes') {
    $enable_pre_existing = true;
} else {
    $enable_pre_existing = false;
}

$oldest_traveller = 0;
$family_plan = false;

$years = [];

foreach ($request->years as $r) {
    if ($r) {
        $bday = new DateTime($r); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $diff = $today->diff($bday);
        $years[] = $diff->y;
    }
}

if (is_array($years)) {
    $ages_array = array_filter($years);
    $younger_age = min($ages_array);
    $elder_age = max($ages_array);
    $number_travelers = count($ages_array);
} else {
    $younger_age = 0;
    $elder_age = 0;
    $number_travelers = 1;
}
if ($request->familyplan_temp == 'yes') {
    if ($number_travelers >= 2 && ($elder_age >= 21 && $elder_age <= 58) && $younger_age <= 21) {
        $family_plan = 'yes';
    } else {
        $family_plan = 'no';
    }
} else {
    $family_plan = 'no';
}

if ($request->familyplan_temp == 'yes' && $family_plan == 'no') {
    //echo "<script>window.location='?action=not_eligible';</script>";
}
?>
<script type="text/javascript">
    var numberoftravelers = '{{ $number_travelers }}';
    var elderage = '{{ $elder_age }}';
    if (numberoftravelers > 1) {
        $('#ageshow').val(numberoftravelers + ', Ages ' + elderage + ' and ....');
    } else {
        $('#ageshow').val(numberoftravelers + ', ' + elderage + ' Years');
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
$discountonplan = ($plan_discount_rate * $total_price) / 100;
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
@if(Cmf::checkallrates($ages_array , $rates_table_name, $deduct_plan_id , $sumamt) == 1)
<span id="dv_{{ $total_price }}" data-listing-price="{{ $total_price }}" class="listing-item coverage-amt coverage-amt-{{ $sum_insured }}" style="display: <?php if ($request->sum_insured2 == $sum_insured) {
        echo 'block';
    } else {
        echo 'none';
    } ?>;">
    <div class="deductable card qoute-price-card mb-3 deductable-<?php echo $deductible; ?>"
        style="display: <?php if ($deductible == '1000') {
            echo 'flex';
        } elseif ($havethousand == 'no' && $deductible == '0') {
            echo 'flex';
        } else {
            echo 'none';
        } ?>;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="qoute-policy display-none-on-mobile">Policy Details</h2>
                    <ul class="plan-highlights text-dark ml-3 display-none-on-mobile">
                        <li><span>Travellers: <span class="plan-cat"><?php echo $number_travelers; ?> Traveller(s)</span></span>
                        </li>
                        <li><span>Quote Details : <span class="plan-cat"><?php echo $product_name; ?></span></span></li>
                        <li><span>Deductible : <span class="plan-cat">${{ $deductible }}</span></span></li>
                    </ul>
                    <h3 class="person-additional-traveler-h3" onclick="showdetails({{ 1+$deductible.$plan_id }})"><i class="fa fa-plus-circle colorblue"></i> Show Details</h3>
                </div>
                <div class="col-md-3 price-limit display-none-on-mobile">
                    <div class="plan-coverage-limit">
                        <div class="limit-lable">
                            <span>Coverage Limit</span>
                        </div>
                        <div class="qoute-price-select">
                            <h2>$<?php
                            if ($sum_insured >= 1000000) {
                                $millions = $sum_insured / 1000000;
                                $txt = ' Million';
                            } else {
                                $millions = $sum_insured;
                                $txt = '';
                            }
                            echo number_format($millions) . $txt; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="plan-coverage-limits">
                        <div class="limit-lable">
                            <span>Premium</span>
                        </div>
                        <div class="qoute-price-select">
                            <h2 id="traveler-price">${{ number_format($total_price, 2) }}<span>CAD</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-l-z-o-m p-r-z-o-m">
                    <div class="qoute-logo display-none-on-mobile mt-3">
                        <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
                    </div>
                    <div class="display-show-on-mobile" style="display:none;">
                        <div class="qoute-logo">
                            <img src="{{ url('public/images') }}/<?php echo $comp_logo; ?>">
                        </div>
                    </div>
                    <div class="total-price-traveller">
                        <?php if($monthly_two == '1'){?>
                        <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;">
                            $<?php echo number_format($monthly_price, 2); ?>/Month <small
                                style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months; ?></small>
                        </h2>
                        <?php } ?>
                    </div>
                    <div class="buy_now">
                        <span onclick="$('.buynow_{{ $deductible.$plan_id }}').fadeIn();" class="btn btn-block text-white">Buy</span>
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
                    <div style=" position: absolute; top: 0; right: 0; ">
                        @if(in_array('yes',$request->pre_existing) && in_array('no',$request->pre_existing))

                        @else
                        <label onclick="savecompareplans('{{ $savetoplan }}')"> Compare <input type="checkbox" name=""></label>
                        @endif
                    </div>
                </div>
            </div>
            @include('frontend.travelinsurance.includes.policydetails')
            @include('frontend.travelinsurance.includes.buynowform')
        </div>
    </div>
</span>
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



<?php
        $display = '';
        }}}} ?>


<?php
if (isset($_GET['departure_date'])) {
} else {
    $counter = 0;
    // if (isset($request->savers_email)) {
    //     array_multisort($price, SORT_ASC, $mailitem);
    //     $subject = "Your Quote - $product_name";
    //     Mail::send('email.quoteemail', array('quoteNumber'=>$quoteNumber,'request'=>$request,'mailitem'=>$mailitem), function($message) use ($request,$subject) {
    //                $message->to($request->savers_email)->subject($subject);
    //                $message->from('quote@lifeadvice.ca','LIFEADVICE');
    //             });
    // }
}
?>