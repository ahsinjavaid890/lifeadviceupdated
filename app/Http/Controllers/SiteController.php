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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Session;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.homepage.index');
    }
    public function checkadditionaltravelers(Request $request)
    {
        foreach ($request->ages as $r) {
            echo $r;
        }
    }
    public function savecompareplans($rand, $plan_id, $product_id, $coverage_ammount, $deductibles, $price)
    {
        $check = DB::table('compare_plans')->where('comparenumber', $rand)->where('plan_id', $plan_id)->where('product_id', $product_id)->where('coverage_ammount', $coverage_ammount)->where('deductibles', $deductibles)->where('price', $price);

        if ($check->count() > 0) {
            $check->delete();
        } else {
            $compare = new compare_plans();
            $compare->comparenumber = $rand;
            $compare->plan_id = $plan_id;
            $compare->product_id = $product_id;
            $compare->coverage_ammount = $coverage_ammount;
            $compare->deductibles = $deductibles;
            $compare->price = $price;
            $compare->save();
        }
        $data = DB::table('compare_plans')->where('comparenumber', $rand)->get();

        echo '<div class="container">
                <div class="d-flex showcomparediv">';
        foreach ($data as $r) {
            $plan = DB::table('wp_dh_insurance_plans')->where('id', $r->plan_id)->first();


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
            echo '<a target="_blank" class="button button-primary get-quotes-button" style="color:white;" href="' . url('compareplans') . '/' . $rand . '">Compare</a>';
        } else {
            echo '<a class="button button-default get-quotes-button" style="color:white;" href="javascript:void(0)" disabled>Compare</a>';
        }

        echo '</div>  
            </div>';
    }
    public function removecomarecard($id)
    {
        $compare_plans = DB::table('compare_plans')->where('id', $id)->first();
        DB::table('compare_plans')->where('id', $id)->delete();
        $data = DB::table('compare_plans')->where('comparenumber', $compare_plans->comparenumber)->get();

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
    public function sendcompareemail(Request $request)
    {
        Mail::send('email.compare', array('request' => $request), function ($message) use ($request) {
            $message->to($request->email)->subject('Comparisons of Insurance Plans');
            $message->from('compare@lifeadvice.ca', 'LIFEADVICE');
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
        $quoteNumber = rand();
        $data = wp_dh_products::where('pro_id', $request->product_id)->first();
        $fields = unserialize($data->pro_fields);
        $plan = DB::table('wp_dh_insurance_plans', $data->pro_id)->first();
        $ded = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id', $plan->id)->groupby('deductible1')->get();
        $query = "CAST(`sum_insured` AS DECIMAL)";
        $sum = DB::table('wp_dh_insurance_plans_rates')->where('plan_id', $plan->id)->groupby('sum_insured')->orderByRaw($query)->get();
        if ($data->stylish_price_layout == 'layout_1') {
            $returnHTML =  view('frontend.travelinsurance.includes.one.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_2') {
            $returnHTML =  view('frontend.travelinsurance.includes.two.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_3') {
            $returnHTML =  view('frontend.travelinsurance.includes.three.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_4') {
            $returnHTML =  view('frontend.travelinsurance.includes.four.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_5') {
            $returnHTML =  view('frontend.travelinsurance.includes.five.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_6') {
            $returnHTML =  view('frontend.travelinsurance.includes.six.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_7') {
            $returnHTML =  view('frontend.travelinsurance.includes.seven.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_8') {
            $returnHTML =  view('frontend.travelinsurance.includes.eight.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_9') {
            $returnHTML =  view('frontend.travelinsurance.includes.pricelayoutnine')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        if ($data->stylish_price_layout == 'layout_10') {
            $returnHTML =  view('frontend.travelinsurance.includes.ten.index')->with(array('quoteNumber' => $quoteNumber, 'data' => $data, 'fields' => $fields, 'ded' => $ded, 'sum' => $sum, 'request' => $request))->render();
        }
        $data = json_encode($request->all(), true);
        $quotesave = new temproaryquote();
        $quotesave->quote_id = $quoteNumber;
        $quotesave->data = $data;
        $quotesave->type = 'ajax';
        $quotesave->save();
        return response()->json(array('success' => true, 'html' => $returnHTML));
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

        if ($temp == "1") {

            Mail::send('email.template1.purchasepolicy', ['request' => $request, 'sale' => $newsale, 'policy_number' => $reffrence_number], function ($message) use ($request, $subject) {
                $message->to($request->email);
                $message->subject($subject);
            });

            Mail::send('email.template1.review', ['request' => $request, 'sale' => $newsale], function ($message) use ($request, $subject) {
                $message->to($request->email);
                $message->subject('Tell Us How We Did?');
            });

            $subject = 'New Sale | Reffrence Number =  ' . $reffrence_number;

            Mail::send('email.template1.purchasepolicy', ['request' => $request, 'sale' => $newsale, 'policy_number' => $reffrence_number], function ($message) use ($request, $subject) {
                $message->to('admin@lifeadvice.ca');
                $message->subject($subject);
            });

        } elseif ($temp == "2") {

            Mail::send('email.template2.purchasepolicy', ['request' => $request,'sale' => $newsale,'policy_number' => $reffrence_number], function($message) use($request , $subject){
                $message->to($request->email);
                $message->subject($subject);
          });
  
          Mail::send('email.template2.review', ['request' => $request,'sale' => $newsale], function($message) use($request , $subject){
                $message->to($request->email);
                $message->subject('Tell Us How We Did?');
          });
  
          $subject = 'New Sale | Reffrence Number =  '.$reffrence_number;
  
          Mail::send('email.template2.purchasepolicy', ['request' => $request,'sale' => $newsale,'policy_number' => $reffrence_number], function($message) use($request , $subject){
                $message->to('admin@lifeadvice.ca');
                $message->subject($subject);
          });

        } elseif ($temp == "3") {

             Mail::send('email.template3.purchasepolicy', ['request' => $request,'sale' => $newsale,'policy_number' => $reffrence_number], function($message) use($request , $subject){
                $message->to($request->email);
                $message->subject($subject);
          });
  
          Mail::send('email.template3.review', ['request' => $request,'sale' => $newsale], function($message) use($request , $subject){
                $message->to($request->email);
                $message->subject('Tell Us How We Did?');
          });
  
          $subject = 'New Sale | Reffrence Number =  '.$reffrence_number;
  
          Mail::send('email.template3.purchasepolicy', ['request' => $request,'sale' => $newsale,'policy_number' => $reffrence_number], function($message) use($request , $subject){
                $message->to('admin@lifeadvice.ca');
                $message->subject($subject);
          });

        }





        return view('frontend.formone.conferm')->with(array('request' => $request));
    }
    public function applyplan(Request $request)
    {
        return view('frontend.formone.apply')->with(array('request' => $request));
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
            return view('frontend.formone.index')->with(array('data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
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
            return view('frontend.travelinsurance.super-visa')->with(array('data' => $data,'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function travel()
    {
        $data = wp_dh_products::where('url', 'travel-insurance')->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            return view('frontend.companypages.travel')->with(array('data' => $data, 'fields' => $fields, 'sum_insured' => $sum_insured));
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
            return view('frontend.companypages.singletripinsurance')->with(array('data' => $data, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function visitorinsurance()
    {
        $data = wp_dh_products::where('url', 'visitor-insurance')->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $sortfields = unserialize($data->pro_sort);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM `wp_dh_insurance_plans` WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
            return view('frontend.travelinsurance.visitorinsurance')->with(array('data' => $data,'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function studentinsurance()
    {
        $data = wp_dh_products::where('url', 'student-insurance')->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            return view('frontend.companypages.studentinsurance')->with(array('data' => $data, 'fields' => $fields, 'sum_insured' => $sum_insured));
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
        $data = DB::table('blogs')->where('website', 'lifeadvice')->paginate(9);
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
