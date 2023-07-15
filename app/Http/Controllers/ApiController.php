<?php

namespace App\Http\Controllers;
use App\Helpers\Cmf;
use App\Helpers\helpers;
use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\jobs;
use App\Models\User;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\maplocations;
use App\Models\wp_dh_products;
use App\Models\wp_dh_insurance_plans;
use App\Models\wp_dh_insurance_plans_rates;
use App\Models\blogs;
use App\Models\sales;
use App\Models\sales_cards;
use App\Models\traveler_sale_informations;
use App\Models\blogcategories;
use App\Models\contactus_messages; 
use App\Models\compare_plans; 
use App\Models\newsletter; 
use App\Models\temproaryquote; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Mail;
use Redirect;
use Session;
use Auth;
use DateTime;
class ApiController extends Controller
{
    public function getquote(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'departure_date' => 'required',
            'return_date' => 'required',
            'sum_insured2' => 'required',
            'primarydestination' => 'required',
            'number_travelers' => 'required',
            'savers_email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Cmf::error_processor($validator)], 403);
        }
        $data = wp_dh_products::where('pro_id' , $request->product_id)->first();
        $fields = unserialize($data->pro_fields);
        $plan = DB::table('wp_dh_insurance_plans' , $data->pro_id)->first();
        $ded = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id', $plan->id)->groupby('deductible1')->get();
        $query = "CAST(`sum_insured` AS DECIMAL)";
        $sum = DB::table('wp_dh_insurance_plans_rates')->where('plan_id', $plan->id)->groupby('sum_insured')->orderByRaw($query)->get();


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

    $addinquery = '';
    $lessquery = '';
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
$show = 1;





}





}

}




























    }
}


