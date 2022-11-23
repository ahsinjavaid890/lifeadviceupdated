<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\jobs;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\maplocations;
use App\Models\wp_dh_products;
use App\Models\wp_dh_insurance_plans;
use App\Models\wp_dh_insurance_plans_rates;
use App\Models\blogs;
use App\Models\blogcategories;
use DB;
class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.homepage.index');
    }
    public function applyplan(Request $request)
    {
        return view('frontend.formone.apply')->with(array('request'=>$request));
    }
    public function compareplans(Request $request)
    {
        return view('frontend.formone.compare')->with(array('request'=>$request));
    }
    public function productdetail($id)
    {
        $data = wp_dh_products::where('url' , $id)->first();
        if($data)
        {
            $fields = unserialize($data->pro_fields);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product' , $data->pro_id)->get();
            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id' , $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            return view('frontend.formone.index')->with(array('data'=>$data,'fields'=>$fields,'sum_insured'=>$sum_insured));
        }
        else
        {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function quotes(Request $request)
    {
        $quoteNumber = rand();
        $data = wp_dh_products::where('pro_id' , $request->product_id)->first();
        $fields = unserialize($data->pro_fields);
        $plan = DB::table('wp_dh_insurance_plans' , $data->pro_id)->first();
        $ded = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id', $plan->id)->groupby('deductible1')->get();
        $query = "CAST(`sum_insured` AS DECIMAL)";
        $sum = DB::table('wp_dh_insurance_plans_rates')->where('plan_id', $plan->id)->groupby('sum_insured')->orderByRaw($query)->get();
        return view('frontend.formone.quote')->with(array('quoteNumber'=>$quoteNumber,'data'=>$data,'fields'=>$fields,'ded'=>$ded,'sum'=>$sum,'request'=>$request));
    }
    public function profile()
    {
        return view('frontend.companypages.profile');
    }
    public function securitysettings()
    {
        return view('frontend.companypages.security-settings');
    }
    public function qoutes()
    {
        return view('frontend.companypages.qoutes');
    }
    public function qoutesdetail()
    {
        return view('frontend.companypages.qoutes-detail');
    }
    public function udashboard()
    {
        return view('frontend.companypages.udashboard');
    }
    public function blogdetail($id)
    {
        $data = blogs::where('url' , $id)->first();
        return view('frontend.companypages.blogdetails')->with(array('data'=>$data));
    }
    public function blogbycategory($id)
    {
        $category = blogcategories::where('url' , $id)->first();
        $data = DB::table('blogs')->where('category_id' , $category->id)->paginate(9);
        return view('frontend.companypages.blogsbycategory')->with(array('data'=>$data,'category'=>$category));
    }
    public function supervisa()
    {
        return view('frontend.companypages.supervisa');
    }
    public function travel()
    {
        return view('frontend.companypages.travel');
    }
    public function visitorinsurance()
    {
        return view('frontend.companypages.visitorinsurance');
    }
    public function studentinsurance()
    {
        return view('frontend.companypages.studentinsurance');
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
        $data = DB::table('blogs')->paginate(9);
        return view('frontend.companypages.blogs')->with(array('data'=>$data));
    }
    public function contactus()
    {
        return view('frontend.companypages.contact');
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
    public function login()
    {
        return view('frontend.companypages.login');
    }
    public function signup()
    {
        return view('frontend.companypages.signup');
    }
    public function carrierprofile($id)
    {
        $data = companies::where('company_link' , $id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('frontend.carrier.index')->with(array('data'=>$data,'jobs'=>$jobs));
    }
    public function jobdetail($id)
    {   
        $jobs = jobsubmissionsrequests::select('jobs.hiring_area','jobs.operating_area','jobs.company_id','jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('jobs.url' , $id)->get()->first();
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
            'hiring_templates.minimum_age_field')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $jobs->job_id)->first();
        $company = companies::where('id' , $jobs->company_id)->get()->first();
        return view('frontend.jobs.index')->with(array('data'=>$jobs,'company'=>$company,'hirring'=>$hirring));
    }
}
