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
use App\Models\traveler_sale_informations;
use App\Models\blogcategories;
use App\Models\contactus_messages; 
use App\Models\compare_plans; 
use App\Models\newsletter; 
use App\Models\temproaryquote; 
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Redirect;
use Session;
use Auth;
class ApiController extends Controller
{
    public function getquote(Request $request)
    {
        $data = wp_dh_products::where('pro_id' , $request->product_id)->first();
        $fields = unserialize($data->pro_fields);
        $plan = DB::table('wp_dh_insurance_plans' , $data->pro_id)->first();
        $ded = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id', $plan->id)->groupby('deductible1')->get();
        $query = "CAST(`sum_insured` AS DECIMAL)";
        $sum = DB::table('wp_dh_insurance_plans_rates')->where('plan_id', $plan->id)->groupby('sum_insured')->orderByRaw($query)->get();
    }
}


