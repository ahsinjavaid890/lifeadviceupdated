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
        $plans = wp_dh_insurance_plans::select(
                "wp_dh_insurance_plans.id",
                "wp_dh_insurance_plans.plan_name",
                "wp_dh_insurance_plans.pre_existing_name",
                "wp_dh_insurance_plans.without_pre_existing_name",
                "wp_dh_insurance_plans.insurance_company",
                "wp_dh_insurance_plans.family_plan",
                "wp_dh_insurance_plans.rate_base",
                "wp_dh_insurance_plans.product")
                ->where('product' , $request->product_id)
                ->get();

        foreach ($plans as $r) {
            $rates = $this->findratesagaintage($r->id , 55 , $r->rate_base  , $request->sum_insured2);
        }

        return response()->json(['message' => 'success','data' => $rates,'statusCode' => 200,'status' => 'success'], 200);      
    }

    public function findratesagaintage($planid , $age , $rate_base  , $suminsured)
    {
        if($rate_base == '3'){
            $rates_table_name = "wp_dh_plan_day_rate";
            $addquery = "AND '$num_of_days' BETWEEN `min_range` AND `max_range`";
        } else {
            $rates_table_name = "wp_dh_insurance_plans_rates";
            $addquery = "";
        }


        return $planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$planid' AND '$age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$suminsured' $addquery");
    }


    public function getplans($request)
    {
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
    return $plans_q = DB::select("SELECT * FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id' AND `status`='1' $lessquery $addinquery ORDER BY `id`");
    }
}


