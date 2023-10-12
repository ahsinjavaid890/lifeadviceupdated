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
        $('#ageshow').val(numberoftravelers+', Ages '+ elderage+ ' and ....');
    }else{
        $('#ageshow').val(numberoftravelers+', '+ elderage+ ' Years');
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
            $second_plan_rates = DB::select("SELECT * FROM $second_rates_table_name WHERE `plan_id`='$second_deduct_plan_id' AND '$second_elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$second_sumamt' $second_addquery");
            $second_countarray =  count($second_plan_rates);
            if($second_countarray > 0)
            {
                $second_maxs = array_keys($second_ages_array, max($second_ages_array));
                $second_preexistingcondition =  $request->pre_existing[$second_maxs[0]];
                if($second_preexistingcondition == 'yes')
                {
                    $second_daily_rate = $second_plan_rates[0]->rate_with_pre_existing  * 2;
                }else{
                    $second_daily_rate = $second_plan_rates[0]->rate_without_pre_existing * 2;
                }
                if(!$second_daily_rate){ $second_display = '0'; }
            }
            else{
                $second_daily_rate = 500;
                if(!$second_daily_rate){ $second_display = '0'; }
            }
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
    $second_discountonplan = ($second_plan_discount_rate * $second_total_price) / 100;
}
$second_total_price = $second_total_price - $second_discountonplan;
$second_monthly_price = $second_total_price / $second_num_months;
if($second_monthly_two == '1'){
    $second_total_price = $second_total_price - $second_flat_price;
}
if (in_array("0", $second_display)){ $second_show = '0'; } else {$second_show = '1'; }


if($second_show == '1' && $second_total_price > 0){

  ?>

@if(Cmf::checkallrates($second_ages_array , $second_rates_table_name, $second_deduct_plan_id , $second_sumamt) == 1)
<div class="listing-item" data-listing-price="{{str_replace(',', '', number_format($second_total_price))}}">
    <div class="coverage-amt pricearray coverage-amt-{{$second_sum_insured}} pricearray{{ $second_comp_id }}{{ $second_total_price }}" style="line-height:1.0; display: <?php if($request->sum_insured2 == $second_sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
        <div class="row plan-details mb-0 ml-1 deductable-<?php echo $second_deductible; ?>"
            style="display: <?php if($second_deductible == '1000'){ echo 'flex'; } else if($havethousand == 'no' && $second_deductible == '0'){ echo 'flex'; } else { echo 'none'; } ?>; margin-top:0; margin-left:1px; margin-right:0; margin-bottom 0px !important;border-bottom: 1px solid #0084c1;">
            <div class="col-md-3 col-xs-6 text-center mobile-deisply-none" style="padding-top: 20px;padding-left: 0;padding-right: 0;">
                <img src="{{ url('public/images') }}/{{ $second_comp_logo }}" class="img-responsive img-thumbnail" width="200" />
            </div>
            <div class="col-md-3 col-xs-6 text-center mobile-deisply-show" style="display: none;padding-left: 0;padding-right: 0;">
                <img src="{{ url('public/images') }}/{{ $second_comp_logo }}" class="img-responsive" width="200" />
            </div>
            <div class="col-md-2 col-xs-6 mobile-deisply-none text-center benefit_padding"
                style="font-size: 14px;color: #333;">${{number_format($second_sum_insured)}} Coverage
                <br>
            </div>
            <div class="col-md-6 mobile-deisply-show" style="display:none;">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <h1 style="padding: 0;text-align: center; margin: 0;line-height: normal; font-size:28px;">${{str_replace(',','', number_format($second_total_price,2))}}
                        </h1>
                        @if($second_monthly_two == '1')
                        <h2 class="text-center" style=" font-size: 11px; font-weight: bold; color: #333;">$
                            {{ number_format($second_monthly_price,2) }}/M <small
                                style="color: #f5821f;font-weight: bold;margin-left: 1px;">
                               {{ $second_num_months }}
                            </small>
                        </h2>
                        @endif
                    </div>
                    <div class="col-md-6 text-center">
                        <br>
                        ${{number_format($second_sum_insured)}} Coverage
                        <br><br>
                        ${{ $second_deductible }} Deductible<br><br>
                        <span class="badge badge-danger">This is Pre Existing Plan</span>
                    </div>
                    <div class="col-md-6" style="padding-top: 10px;margin-bottom:10px;">
                        <ul style="margin:0;">
                            <li style="list-style: none;" class="text-center" onclick="showdetails({{ 11+$second_deductible.$second_plan_id }})"><a href="javascript:void(0)"class="mb-2">Policy Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 text-center mobile-deisply-none">
                <div class="row" style="border:3px solid #f5821f; padding:10px;box-shadow: 0px 0px 5px 0px #999 inset;max-width: 360px;">
                    <div class="col-md-6 col-xs-6">
                        <h1 style="padding: 0;margin: 0;line-height: normal; font-size:28px;">${{str_replace(',','', number_format($second_total_price,2))}}
                        </h1>
                        @if($second_monthly_two == '1')
                        <h2 style="margin-bottom: 0px; font-size: 14px; font-weight: bold; color: #333;">$
                            {{ number_format($second_monthly_price,2) }}/M <small
                                style="color: #f5821f;font-weight: bold;margin-left: 1px;">
                               {{ $second_num_months }}
                            </small>
                        </h2>
                        @endif
                        <small style="font-size:10px;">{{ $second_number_travelers }} Traveller<?php if($second_number_travelers > 1){echo "'s";} ?></small>
                    </div>
                    <div class="col-md-6" style="padding-top: 10px;margin-bottom:10px;">
                        <ul style="margin:0;">
                            <li  style="color: black;font-weight: 600;margin-bottom: 0.5rem;">${{ $second_deductible }} Deductible</li>
                            <li style="list-style: none;" onclick="showdetails({{ 11+$second_deductible.$second_plan_id }})"><a href="javascript:void(0)"class="mb-2">Policy Details</a>
                            </li>
                            <span class="badge badge-danger">This is Pre Existing Plan</span>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="compare col-md-3 col-xs-12 text-center">
                <a style="height: 40px;padding: 9px 0px;" class="submit-btn col-md-12 col-xs-5" onclick="$('.buynow_{{ $second_deductible.$second_plan_id+13 }}').slideToggle();"> <i class="fa fa-shopping-cart"></i> Buy Now</a>
                <label style="height: 40px;padding: 9px 0px;" onclick="savecompareplans({{ $second_plan_id }},{{ $data->pro_id }},{{ $second_sum_insured }},{{ $second_deductible }},{{ $second_total_price }})" class="col-md-12 col-xs-5 comparebutton{{ $second_plan_id }}{{ $data->pro_id }}{{ $second_sum_insured }}{{ $second_deductible }}" style="cursor: pointer" id="compare"><i class="fa fa-database"></i> Compare</label>
                <!-- <small class="mobile-deisply-none">
                    <strong>Plan Type: </strong> 
                    @if($family_plan == 'yes') 
                        <i class="fa fa-child"></i> Family
                    @else 
                        <i class="fa fa-user"></i> Individual
                    @endif
                </small> -->
            </div>
            @include('frontend.travelinsurance.includes.nopolicydetails')
            @include('frontend.travelinsurance.includes.nobuynowform')
        </div>
    </div>
</div>
@endif
<?php

$second_daily_rate = 0;


?>

        <?php
        $second_display = '';
        }}}} ?>