<?php

namespace App\Http\Controllers;

use App\Helpers\Cmf;
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
use App\Models\temproary_sales;
use App\Models\traveler_sale_informations;
use App\Models\blogcategories;
use App\Models\contactus_messages;
use App\Models\compare_plans;
use App\Models\newsletter;
use App\Models\temproaryquote;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Twilio\Rest\Client;
use Redirect;
use Session;
use Validator;
use Storage;
use Input;
use DateTime;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.homepage.index');
    }
    public function sendquoteemail(Request $request)
    {
        $subject = "Your Quote of ".$request->product_name. ' | Quote Number '.$request->quoteNumber;
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;
        $emailview = 'email.template'.$temp.'.quoteemail';
        Mail::send($emailview, array('quoteNumber'=>$request->quoteNumber,'deductibleArray0'=>$request->deductibleArray0,'deductibleArray250'=>$request->deductibleArray250,'deductibleArray500'=>$request->deductibleArray500,'deductibleArray1000'=>$request->deductibleArray1000), function($message) use ($request,$subject) {
           $message->to($request->email)->subject($subject);
           $message->from('quote@lifeadvice.ca','LIFEADVICE');
        });
    }
    public function getstates($id)
    {
        $data = DB::table('states')->where('country_id' , $id)->get();
        echo '<option value="">Select State in '.DB::table('countries')->where('id' , $id)->first()->name.'</option>';
        foreach ($data as $r) {
            echo '<option value="'.$r->name.'">'.$r->name.'</option>';
        }
    }
    public function checkadditionaltravelers(Request $request)
    {
        foreach ($request->ages as $r) {
            echo $r;
        }
    }
    public function savecompareplans(Request $request)
    {
        $data = unserialize($request->savetoplan);
        $check = DB::table('compare_plans')->where('comparenumber', $request->rand)->where('plan_id', $data['plan_id'])->where('product_id', $data['pro_id'])->where('coverage_ammount', $data['sum_insured'])->where('deductibles', $data['deductible'])->where('price', $data['total_price']);

        if ($check->count() > 0) {
            $check->delete();
        } else {
            $compare = new compare_plans();
            $compare->savetoplan = $request->savetoplan;
            $compare->comparenumber = $request->rand;
            $compare->plan_id = $data['plan_id'];
            $compare->product_id = $data['pro_id'];
            $compare->coverage_ammount = $data['sum_insured'];
            $compare->deductibles = $data['deductible'];
            $compare->price = $data['total_price'];
            $compare->save();
        }
        $data = DB::table('compare_plans')->where('comparenumber', $request->rand)->get();

        if($data->count()){
            echo '<div class="container">
            <i onclick="removecomparecard()" style="right: 31px;
    background-color: #67778f;
    border-radius: 50%;" class="icon icon-remove-card"></i>
            <div class="d-flex showcomparediv">';
    foreach ($data as $r) {


        $unserialize = unserialize($r->savetoplan);

        $plan = DB::table('wp_dh_insurance_plans')->where('id', $unserialize['plan_id'])->first();


        if ($plan->plan_name) {
            $words = explode(" ", $plan->plan_name);
            $acronym = "";
            foreach ($words as $w) {
                $acronym .= mb_substr($w, 0, 1);
            }

            $planname = $acronym;
        } else {
            $planname = 'PL';
        }

        echo '<div class="card-plan-compare">
                                <span  class="card-plan-compare-title">
                                    <span  class="card-plan-compare-title-full">';
        if ($plan->plan_name) {
            echo $plan->plan_name;
        } else {
            echo 'Plan ' . $data->count();
        }
        echo '</span>
                                    <span class="card-plan-compare-title-abbr">' . $planname . '</span>
                                </span>
                                <i onclick="removecomarecard(' . $r->id . ')" class="icon icon-remove-card"></i>
                            </div>';
    }
    echo '<p class="text-secondary-color compare-bar__count"><span>' . $data->count() . '</span>/3 Selected</p>';
    if ($data->count() > 1) {
        echo '<a target="_blank" class="button button-primary get-quotes-button" style="color:white;" href="' . url('compareplans') . '/' . $request->rand . '">Compare</a>';
    } else {
        echo '<a class="button button-default get-quotes-button" style="color:white;" href="javascript:void(0)" disabled>Compare</a>';
    }

    echo '</div>  
        </div>';
        }


       
    }
    public function removecomarecard($id)
    {
        $compare_plans = DB::table('compare_plans')->where('id', $id)->first();
        DB::table('compare_plans')->where('id', $id)->delete();
        $data = DB::table('compare_plans')->where('comparenumber', $compare_plans->comparenumber)->get();

        if ($data->count() > 0) {
            echo '<div class="container">
            <div class="d-flex showcomparediv">';
            foreach ($data as $r) {
                $plan = DB::table('wp_dh_insurance_plans')->where('id', $r->plan_id)->first();

                echo '<div class="card-plan-compare">
                                <span  class="card-plan-compare-title">
                                    <span  class="card-plan-compare-title-full">';
                if ($plan->plan_name) {
                    echo $plan->plan_name;
                } else {
                    echo 'Plan ' . $data->count();
                }
                echo '</span>
                                </span>
                                <i onclick="removecomarecard(' . $r->id . ')" class="icon icon-remove-card"></i>
                            </div>';
            }
            echo '<p class="text-secondary-color compare-bar__count"><span>' . $data->count() . '</span>/3 Selected</p>';
            if ($data->count() > 1) {
                echo '<a target="_blank" class="button button-primary get-quotes-button" style="color:white;" href="' . url('compareplans') . '/' . $compare_plans->comparenumber . '">Compare</a>';
            } else {
                echo '<a class="button button-default get-quotes-button" style="color:white;" href="javascript:void(0)" disabled>Compare</a>';
            }

            echo '</div>  
        </div>';
        }
    }
    public function sendcompareemail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        $subject = 'Your Saved Plan Comparison';
        Mail::send('email.template1.compare', ['compareid' => $request->compareid], function ($message) use ($request, $subject) {
            $message->to($request->email);
            $message->subject($subject);
        });
        return redirect()->back()->with('message', 'success');
    }
    public function getquote($id)
    {
        $val = temproaryquote::where('quote_id', $id)->first();
        $quotedata =  json_decode($val->data, true);
        return view('frontend.formone.getquote')->with(array('quotedata' => $quotedata, 'id' => $id, 'val' => $val));
    }
    public function ajaxquotes(Request $request)
    {
        $rules = array(
            'departure_date' => 'required',
            'return_date' => 'required',
            'savers_email' => 'required|email'
        );    
        $messages = array(
                        'departure_date.required' => 'Start Date of Coverage Is Required',
                        'return_date.required' => 'End Date of Coverage Is Required',
                        'savers_email.required' => 'Please Enter Valid Email'
                    );
        $validator = Validator::make( $request->all(), $rules, $messages );
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        $quoteNumber = rand();
        $data = wp_dh_products::where('pro_id', $request->product_id)->first();
        $fields = unserialize($data->pro_fields);
        $plan = DB::table('wp_dh_insurance_plans', $data->pro_id)->first();
        $ded = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id', $plan->id)->groupby('deductible1')->get();
        $query = "CAST(`sum_insured` AS DECIMAL)";
        $sum = DB::table('wp_dh_insurance_plans_rates')->where('plan_id', $plan->id)->groupby('sum_insured')->orderByRaw($query)->get();

        // $allPlans = $this->calculatequote($quoteNumber , $data , $fields , $ded , $sum , $request);


        if($request->pagetype == 'simplepage')
        {
            $fields = unserialize($data->pro_fields);
            $pricelayout = $fields['price_layout'];
            if ($pricelayout == 'layout_1') {
                $returnview = 'frontend.travelinsurance.includes.one.index';
            }
            if ($pricelayout == 'layout_2') {
                $returnview = 'frontend.travelinsurance.includes.two.index';
            }
            if ($pricelayout == 'layout_3') {
                $returnview = 'frontend.travelinsurance.includes.three.index';
            }
            if ($pricelayout == 'layout_4') {
                $returnview = 'frontend.travelinsurance.includes.four.index';
            }
            if ($pricelayout == 'layout_5') {
                $returnview = 'frontend.travelinsurance.includes.five.index';
            }
            if ($pricelayout == 'layout_6') {
                $returnview = 'frontend.travelinsurance.includes.six.index';
            }
            if ($pricelayout == 'layout_7') {
                $returnview = 'frontend.travelinsurance.includes.seven.index';
            }
            if ($pricelayout == 'layout_8') {
                $returnview = 'frontend.travelinsurance.includes.eight.index';
            }
            if ($data->stylish_price_layout == 'layout_9') {
                $returnview = 'frontend.travelinsurance.includes.nine.index';
            }
            if ($pricelayout == 'layout_10') {
                $returnview = 'frontend.travelinsurance.includes.ten.index';
            }
        }else{
            if ($data->stylish_price_layout == 'layout_1') {
                $returnview = 'frontend.travelinsurance.includes.one.index';
            }
            if ($data->stylish_price_layout == 'layout_2') {
                $returnview = 'frontend.travelinsurance.includes.two.index';
            }
            if ($data->stylish_price_layout == 'layout_3') {
                $returnview = 'frontend.travelinsurance.includes.three.index';
            }
            if ($data->stylish_price_layout == 'layout_4') {
                $returnview = 'frontend.travelinsurance.includes.four.index';
            }
            if ($data->stylish_price_layout == 'layout_5') {
                $returnview = 'frontend.travelinsurance.includes.five.index';
            }
            if ($data->stylish_price_layout == 'layout_6') {
                $returnview = 'frontend.travelinsurance.includes.six.index';
            }
            if ($data->stylish_price_layout == 'layout_7') {
                $returnview = 'frontend.travelinsurance.includes.seven.index';
            }
            if ($data->stylish_price_layout == 'layout_8') {
                $returnview = 'frontend.travelinsurance.includes.eight.index';
            }
            if ($data->stylish_price_layout == 'layout_9') {
                $returnview = 'frontend.travelinsurance.includes.nine.index';
            }
            if ($data->stylish_price_layout == 'layout_10') {
                $returnview = 'frontend.travelinsurance.includes.ten.index';
            }
        }
        $returnHTML =  view($returnview)->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();

        if (isset($request->sendemail)) {
            if ($request->sendemail == 'yes') {
                $data = json_encode($request->all(), true);
                $quotesave = new temproaryquote();
                $quotesave->quote_id = $quoteNumber;
                $quotesave->data = $data;
                $quotesave->type = 'ajax';
                $quotesave->save();
            }
        }
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }
    public function calculatequote($quoteNumber , $data , $fields , $ded , $sum , $request)
    {
        $allPlans = [];
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

        $planData = [
            'total_price' => $total_price,
            'sum_insured' => $sum_insured, 
            'deductible' => $deductible,
            'comp_logo' => "https://lifeadvice.ca/public/images/".$comp_logo,
            'monthly_two' => $monthly_two,
            'monthly_price' => $monthly_price,
            'comp_id' => $comp_id,
            'plan_id' => $plan_id,
            'num_months' => $num_months
        ];

        // Add the plan data to the array of all plans
        $allPlans[] = $planData;
}}}} 


    return $allPlans;

    }
    public function confermquote()
    {
        return view('frontend.formone.conferm');
    }
    
    public function applyqoute(Request $request)
    {
        if ($request->product_id == 1) {
            $policytype = 'SVI';
        } else if ($request->product_id == 2) {
            $policytype = 'VTC';
        } else if ($request->product_id == 3) {
            $policytype = 'SI';
        } else if ($request->product_id == 4) {
            $policytype = 'IFC';
        } else if ($request->product_id == 5) {
            $policytype = 'ST';
        } else if ($request->product_id == 6) {
            $policytype = 'MT';
        } else if ($request->product_id == 7) {
            $policytype = 'AI';
        } else if ($request->product_id == 8) {
            $policytype = 'TII';
        } else if ($request->product_id == 9) {
            $policytype = 'BC';
        } else {
            $policytype = '';
        }
        $policy_number_temp = rand(10000, 50000);
        $reffrence_number = $policytype . $policy_number_temp;

        $newsale = new sales();
        $newsale->reffrence_number = $reffrence_number;
        $newsale->website = 'lifeadvice';
        $newsale->sponsersname = $request->sponsersname;
        $newsale->sponsersemail = $request->sponsersemail;
        $newsale->email = $request->email;
        $newsale->phonenumber = $request->phone;
        $newsale->address = $request->streetname;
        $newsale->appartment = $request->suit;
        $newsale->city = $request->city;
        $newsale->province = $request->province;
        $newsale->postalcode = $request->postalcode;
        $newsale->country = $request->country;
        $newsale->product_name = $request->producttype;
        $newsale->product_id = $request->product_id;
        $newsale->start_date = $request->tripdate;
        $newsale->end_date = $request->tripend;
        $newsale->primary_destination = $request->visitor_visa_type;
        $newsale->duration = $request->tripduration;
        $newsale->premium = $request->premium;
        $newsale->coverage_ammount = $request->coverage_ammount;
        $newsale->deductibles = $request->deductibles;
        $newsale->deductible_rate = $request->deductible_rate;
        $newsale->company_name = $request->comp_name;
        $newsale->comp_id = $request->comp_id;
        $newsale->plan_id = $request->plan_id;
        $newsale->status = 'Pending';
        $newsale->newstatus = 'new';
        $newsale->save();



        foreach ($request->dob as $key => $value) {
            $traveler = new traveler_sale_informations();
            $traveler->sale_id = $newsale->id;
            $traveler->f_name = $request->fname[$key];
            $traveler->l_name = $request->lname[$key];
            $traveler->gender = $request->gender[$key];
            $traveler->pre_existing_condition = $request->preexisting[$key];
            $traveler->date_of_birth = $value;
            $traveler->save();
        }







        $card_expiry = explode('/', $request->expirationdate);
        $card_month = $card_expiry[0];
        $card_year = $card_expiry[1];

        $salecard = new sales_cards();
        $salecard->sale_id = $newsale->id;
        $salecard->card_name = $request->cardholdername;
        $salecard->card_number = $request->cardholdernumber;
        $salecard->card_month = $card_month;
        $salecard->card_year = $card_year;
        $salecard->card_cvc = $request->cvc;
        $salecard->save();
        $checkuser = User::where('email', $request->email)->count();
        if ($checkuser == 0) {
            $password = $reffrence_number;
            $newuser = new User();
            $newuser->email = $request->email;
            $newuser->phone = $request->phone;
            $newuser->address = $request->streetname;
            $newuser->password = Hash::make($password);
            $newuser->user_type = 'customer';
            $newuser->status = 'active';
            $newuser->save();
        }

        $subject = 'Your Life Advice Policy Confirmation | ' . $reffrence_number;
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;
        $purchasepolicyemailview = 'email.template' . $temp . '.purchasepolicy';
        $reviewemailview = 'email.template' . $temp . '.review';
        Mail::send($purchasepolicyemailview, ['request' => $request, 'sale' => $newsale, 'policy_number' => $reffrence_number], function ($message) use ($request, $subject) {
            $message->to($request->email);
            $message->subject($subject);
        });
        Mail::send($reviewemailview, ['request' => $request, 'sale' => $newsale], function ($message) use ($request, $subject) {
            $message->to($request->email);
            $message->subject('Tell Us How We Did?');
        });
        $subject = 'New Sale | Reffrence Number =  ' . $reffrence_number;
        Mail::send($purchasepolicyemailview, ['request' => $request, 'sale' => $newsale, 'policy_number' => $reffrence_number], function ($message) use ($request, $subject) {
            $message->to('admin@lifeadvice.ca');
            $message->subject($subject);
        });
        return view('frontend.formone.conferm')->with(array('request' => $request));
    }
    public function applyplan(Request $request)
    {
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->buynow_form;
        if($temp == 2)
        {   
            if(temproary_sales::where('temp_id' , $request->temproary_sale)->count() == 0)
            {
                $sale = new temproary_sales();
                $sale->formdata = serialize($request->all());
                $sale->temp_id= $request->temproary_sale;
                $sale->website= 'lifeadvice';
                $sale->step= 1;
                $sale->save();
                $url = url('step-one').'/'.$request->temproary_sale;
                return Redirect::to($url);
            }else
            {
                $tempr = temproary_sales::where('temp_id' , $request->temproary_sale)->first();
                $sale = temproary_sales::find($tempr->id);
                $sale->formdata = serialize($request->all());
                $sale->temp_id= $request->temproary_sale;
                $sale->website= 'lifeadvice';    
                $sale->step= 1;
                $sale->save();
                $url = url('step-one').'/'.$request->temproary_sale;
                return Redirect::to($url);
            }
        }
        if($temp == 1)
        {
            return view('frontend.apply.templateone')->with(array('request' => $request));
        }
    }
    public function completeandpurchase(Request $request)
    {
        $temp = temproary_sales::where('temp_id' , $request->temp_id)->first();
        $quotedata = unserialize($temp->formdata);
        $stepone = unserialize($temp->steponedata);
        $steptwo = unserialize($temp->steptwodata);
        if ($quotedata['product_id'] == 1) {
            $policytype = 'SVI';
        } else if ($quotedata['product_id'] == 2) {
            $policytype = 'VTC';
        } else if ($quotedata['product_id'] == 3) {
            $policytype = 'SI';
        } else if ($quotedata['product_id'] == 4) {
            $policytype = 'IFC';
        } else if ($quotedata['product_id'] == 5) {
            $policytype = 'ST';
        } else if ($quotedata['product_id'] == 6) {
            $policytype = 'MT';
        } else if ($quotedata['product_id'] == 7) {
            $policytype = 'AI';
        } else if ($quotedata['product_id'] == 8) {
            $policytype = 'TII';
        } else if ($quotedata['product_id'] == 9) {
            $policytype = 'BC';
        } else {
            $policytype = '';
        }
        $policy_number_temp = rand(10000, 50000);
        $reffrence_number = $policytype . $policy_number_temp;
        $newsale = new sales();
        $newsale->reffrence_number = $reffrence_number;
        $newsale->website = 'lifeadvice';
        $newsale->sponsersname = $steptwo['sponsersname'];
        $newsale->sponsersemail = $steptwo['sponsersemail'];
        $newsale->email = $stepone['email'];
        $newsale->phonenumber = $steptwo['phone'];
        $newsale->address = $steptwo['streetname'];
        $newsale->appartment = $steptwo['suit'];
        $newsale->city = $steptwo['city'];
        $newsale->province = $steptwo['province'];
        $newsale->postalcode = $steptwo['postalcode'];
        $newsale->country = $steptwo['country'];
        $newsale->product_name = $quotedata['product_name'];
        $newsale->product_id = $quotedata['product_id'];
        $newsale->start_date = $quotedata['tripdate'];
        $newsale->end_date = $quotedata['tripend'];
        $newsale->primary_destination = $quotedata['destination'];
        $newsale->duration = $quotedata['tripduration'];
        $newsale->premium = $quotedata['tripduration'];
        $newsale->coverage_ammount = $quotedata['coverage'];
        $newsale->deductibles = $quotedata['deductibles'];
        $newsale->deductible_rate = $quotedata['deductible_rate'];
        $newsale->company_name = $quotedata['companyName'];
        $newsale->comp_id = $quotedata['comp_id'];
        $newsale->plan_id = $quotedata['plan_id'];
        $newsale->status = 'Pending';
        $newsale->newstatus = 'new';
        $newsale->save();



        for($i=0; $i < $quotedata['traveller']; $i++) {
            $year = $quotedata['years'][$i];
            $preexisting = $quotedata['preexisting'][$i];
            $traveler = new traveler_sale_informations();
            $traveler->sale_id = $newsale->id;
            $traveler->f_name = $stepone['fname'][$i];
            $traveler->l_name = $stepone['lname'][$i];
            $traveler->gender = $stepone['gender'][$i];
            $traveler->pre_existing_condition = $preexisting;
            $traveler->date_of_birth = Cmf::date_format($year);
            $traveler->save();
        }


        $card_expiry = explode('/', $request->expirationdate);
        $card_month = $card_expiry[0];
        $card_year = $card_expiry[1];

        $salecard = new sales_cards();
        $salecard->sale_id = $newsale->id;
        $salecard->card_name = $request->cardholdername;
        $salecard->card_number = $request->cardholdernumber;
        $salecard->card_month = $card_month;
        $salecard->card_year = $card_year;
        $salecard->card_cvc = $request->cvc;
        $salecard->save();


        $checkuser = User::where('email', $stepone['email'])->count();
        if ($checkuser == 0) {
            $password = $reffrence_number;
            $newuser = new User();
            $newuser->email = $stepone['email'];
            $newuser->phone = $steptwo['phone'];
            $newuser->address = $steptwo['streetname'];
            $newuser->password = Hash::make($password);
            $newuser->user_type = 'customer';
            $newuser->status = 'active';
            $newuser->save();
        }

        $subject = 'Your Life Advice Policy Confirmation | ' . $reffrence_number;
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;
        $purchasepolicyemailview = 'email.template' . $temp . '.purchasepolicy';
        $reviewemailview = 'email.template' . $temp . '.review';
        Mail::send($purchasepolicyemailview, ['request' => $request, 'sale' => $newsale, 'policy_number' => $reffrence_number], function ($message) use ($newsale, $subject) {
            $message->to($newsale->email);
            $message->subject($subject);
        });
        Mail::send($reviewemailview, ['request' => $request, 'sale' => $newsale], function ($message) use ($newsale, $subject) {
            $message->to($newsale->email);
            $message->subject('Tell Us How We Did?');
        });
        $subject = 'New Sale | Reffrence Number =  ' . $reffrence_number;
        Mail::send($purchasepolicyemailview, ['request' => $request, 'sale' => $newsale, 'policy_number' => $reffrence_number], function ($message) use ($request, $subject) {
            $message->to('admin@lifeadvice.ca');
            $message->subject($subject);
        });
        return view('frontend.formone.conferm')->with(array('request' => $request));
    }
    public function steponetoshow($id)
    {
        $data = temproary_sales::where('temp_id' , $id)->first();
        $sale = temproary_sales::find($data->id);
        $sale->step= 1;
        $sale->save();
        return view('frontend.apply.templatetwo')->with(array('data' => $data));
    }
    public function applystepone(Request $request)
    {
        $tempr = temproary_sales::where('temp_id' , $request->temp_id)->first();
        $sale = temproary_sales::find($tempr->id);
        $sale->steponedata = serialize($request->all());
        $sale->step= 2;
        $sale->save();
        $url = url('step-two').'/'.$request->temp_id;
        return Redirect::to($url);
    }
    public function steptwotoshow($id)
    {
        $data = temproary_sales::where('temp_id' , $id)->first();
        return view('frontend.apply.templatetwo')->with(array('data' => $data));
    }
    public function applysteptwo(Request $request)
    {
        $tempr = temproary_sales::where('temp_id' , $request->temp_id)->first();
        $sale = temproary_sales::find($tempr->id);
        $sale->steptwodata = serialize($request->all());
        $sale->step= 3;
        $sale->save();
        $url = url('step-three').'/'.$request->temp_id;
        return Redirect::to($url);
    }
    public function stepthreetoshow($id)
    {
        $data = temproary_sales::where('temp_id' , $id)->first();
        return view('frontend.apply.templatetwo')->with(array('data' => $data));
    }
    public function backonestep($id)
    {
        $tempr = temproary_sales::where('temp_id' , $id)->first();
        $sale = temproary_sales::find($tempr->id);
        $sale->step= $tempr->step-1;
        $sale->save();

        if($sale->step == 1)
        {
            $url = url('step-one').'/'.$id;
        }
        if($sale->step == 2)
        {
            $url = url('step-two').'/'.$id;
        }
        if($sale->step == 3)
        {
            $url = url('step-three').'/'.$id;
        }
        
        return Redirect::to($url);
    }
    public function compareplans($id)
    {
        return view('frontend.formone.compare')->with(array('id' => $id));
    }
    public function productdetail($id)
    {
        $data = wp_dh_products::where('url', $id)->where('website', Cmf::getsite())->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $sortfields = unserialize($data->pro_sort);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM `wp_dh_insurance_plans` WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
            $pagetype = 'simplepage';
            return view('frontend.formone.index')->with(array('pagetype' => $pagetype,'data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function quotes(Request $request)
    {
        $quoteNumber = rand();
        $data = wp_dh_products::where('pro_id', $request->product_id)->first();
        $fields = unserialize($data->pro_fields);
        $plan = DB::table('wp_dh_insurance_plans', $data->pro_id)->first();
        $ded = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id', $plan->id)->groupby('deductible1')->get();
        $query = "CAST(`sum_insured` AS DECIMAL)";
        $sum = DB::table('wp_dh_insurance_plans_rates')->where('plan_id', $plan->id)->groupby('sum_insured')->orderByRaw($query)->get();
        return view('frontend.formone.quote')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request));
    }
    public function blogdetail($id)
    {
        $data = blogs::where('url', $id)->first();
        return view('frontend.companypages.blogdetails')->with(array('data' => $data));
    }
    public function blogbycategory($id)
    {
        $category = blogcategories::where('url', $id)->where('website', 'lifeadvice')->first();
        $data = DB::table('blogs')->where('category_id', $category->id)->where('website', 'lifeadvice')->paginate(9);
        return view('frontend.companypages.blogsbycategory')->with(array('data' => $data, 'category' => $category));
    }
    public function supervisa()
    {

        $data = wp_dh_products::where('url', 'super-visa-insurance')->first();
        if ($data) {

            $fields = unserialize($data->pro_fields);

            $sortfields = unserialize($data->pro_sort);

            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();

            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            $pagetype  = 'stylishpage';
            return view('frontend.travelinsurance.super-visa')->with(array('pagetype' => $pagetype,'data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function travel()
    {
        $data = wp_dh_products::where('url', 'travel-insurance')->first();

        if ($data) {
            $fields = unserialize($data->pro_fields);
            $sortfields = unserialize($data->pro_sort);

            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();

            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            $pagetype  = 'stylishpage';
            return view('frontend.travelinsurance.travelinsurance')->with(array('pagetype' => $pagetype,'data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function singletripinsurance()
    {
        $data = wp_dh_products::where('url', 'single-trip-insurance')->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            $pagetype  = 'stylishpage';
            return view('frontend.companypages.singletripinsurance')->with(array('pagetype' => $pagetype,'data' => $data, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function visitorinsurance()
    {

        $data = wp_dh_products::where('url', 'visitor-insurance')->first();


        if ($data) {

            // echo"<pre>";
            // print_r($data->toArray());
            // die;

            $fields = unserialize($data->pro_fields);

            $sortfields = unserialize($data->pro_sort);

            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();

            $sum_insured = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM `wp_dh_insurance_plans` WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");

            $pagetype  = 'stylishpage';
            return view('frontend.travelinsurance.visitorinsurance')->with(array('pagetype' => $pagetype,'data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function studentinsurance()
    {
        $data = wp_dh_products::where('url', 'student-insurance')->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $sortfields = unserialize($data->pro_sort);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            return view('frontend.travelinsurance.studentinsurance')->with(array('data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function lifeinsurance()
    {
        return view('frontend.companypages.life-insurance');
    }
    public function desability()
    {
        return view('frontend.companypages.desability');
    }
    public function criticalillness()
    {
        return view('frontend.companypages.critical-illness');
    }
    public function health()
    {
        return view('frontend.companypages.health-insurance');
    }
    public function product()
    {
        return view('frontend.companypages.product');
    }
    public function aboutus()
    {
        return view('frontend.companypages.about');
    }
    public function blogs()
    {
        $data = DB::table('blogs')->where('website', 'lifeadvice')->orderby('id' , 'desc')->paginate(9);
        return view('frontend.companypages.blogs')->with(array('data' => $data));
    }
    public function contactus()
    {
        return view('frontend.companypages.contact');
    }
    public function contacts(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        $insert = new contactus_messages();
        $insert->fname = $request->fname;
        $insert->lname = $request->lname;
        $insert->email = $request->email;
        $insert->mobile = $request->mobile;
        $insert->subject = $request->subject;
        $insert->description = $request->description;
        $insert->save();
        return redirect()->back()->with('message', 'Your Query Submited Successfully We Will Contact You With In 24 Hours');
    }
    public function privacypolicy()
    {
        return view('frontend.companypages.privacypolicy');
    }
    public function faq()
    {
        return view('frontend.companypages.faq');
    }
    public function claim()
    {
        return view('frontend.companypages.claim');
    }
    public function resp()
    {
        return view('frontend.companypages.resp');
    }
    public function rrsp()
    {
        return view('frontend.companypages.rrsp');
    }
    public function mortgage()
    {
        return view('frontend.companypages.mortgage');
    }
    public function termsandcondition()
    {
        return view('frontend.companypages.termsandcondition');
    }
    public function termlifeinsurance()
    {
        return view('frontend.companypages.termlifeinsurance');
    }
    public function tfsa()
    {
        return view('frontend.companypages.tfsa');
    }
    public function nonmedical()
    {
        return view('frontend.companypages.nonmedical');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('user.dashboard');
        } else {
            $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->userpanel_temp;

            if ($temp == "1") {

                return view('auth.template1.login');
            } elseif ($temp == "2") {

                return view('auth.template2.login');
            } elseif ($temp == "3") {

                return view('auth.template3.login');
            }
        }
    }
    public function attemptlogin(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (Auth::user()->user_type == 'customer') {
                if (Auth::user()->status == 'active') {
                    return redirect()->route('user.dashboard');
                } else {
                    Auth::logout();
                    return redirect()->back()->with('warning', 'Your Account Is Banned Due To Some Reason');
                }
            } else {
                Auth::logout();
                return redirect()->back()->with('warning', 'This Is for Customers.');
            }
        } else {
            return redirect()->back()->with('warning', 'Email or Password are Incorrect');
        }
    }
    public function signup()
    {
        return view('frontend.companypages.signup');
    }
    public function carrierprofile($id)
    {
        $data = companies::where('company_link', $id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.url', 'jobs.id as job_id', 'jobs.job_tittle', 'jobs.duty_time', 'jobs.freight_type', 'jobs.home_time', 'jobs.avgerage_weekly_pay')->leftJoin('jobs', 'jobs.id', '=', 'jobsubmissionsrequests.job_id')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id', 'hiring_templates.minimum_expereince')->leftJoin('hiring_templates', 'hiring_templates.id', '=', 'linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id', $job->job_id)->first();
        }
        return view('frontend.carrier.index')->with(array('data' => $data, 'jobs' => $jobs));
    }
    public function jobdetail($id)
    {
        $jobs = jobsubmissionsrequests::select('jobs.hiring_area', 'jobs.operating_area', 'jobs.company_id', 'jobs.url', 'jobs.id as job_id', 'jobs.job_tittle', 'jobs.duty_time', 'jobs.freight_type', 'jobs.home_time', 'jobs.avgerage_weekly_pay')->leftJoin('jobs', 'jobs.id', '=', 'jobsubmissionsrequests.job_id')->where('jobs.url', $id)->get()->first();
        $hirring = linktemplatewithjobs::select(
            'linktemplatewithjobs.job_id',
            'hiring_templates.minimum_expereince',
            'hiring_templates.minimum_age',
            'hiring_templates.moving_violations',
            'hiring_templates.license_suspensions',
            'hiring_templates.license_suspensions_field',
            'hiring_templates.dot_moving_voilations',
            'hiring_templates.moving_voilations_incidents',
            'hiring_templates.maximum_jobs_no_more_than',
            'hiring_templates.felony_convictions',
            'hiring_templates.misdemeanors',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.minimum_age_field'
        )->leftJoin('hiring_templates', 'hiring_templates.id', '=', 'linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id', $jobs->job_id)->first();
        $company = companies::where('id', $jobs->company_id)->get()->first();
        return view('frontend.jobs.index')->with(array('data' => $jobs, 'company' => $company, 'hirring' => $hirring));
    }
    public function newsletter(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email|max:255,',
        ]);
        $email = DB::table('news_letters')->where('email', '=', $request->email)->first();
        if ($email == null) {
            $data  = new NewsLetter();
            $data->email = $request->email;
            $data->save();
            return back()->with('message', 'Email saved succesfully');
        }
        return back()->with('error', 'Email Already Exist');
    }
    public function viewLetters()
    {
        $users = DB::table('news_letters')->select('id', 'email')->get();
        return view('admin/contact/newsletter', compact('users'));
    }
    public function deleteletters($id)
    {
        DB::table('news_letters')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Letter Deleted Successfully');
    }
}
