<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\wp_dh_companies;
use App\Models\wp_dh_life_plans_benefits;
use App\Models\help_articles;
use App\Models\blogs;
use App\Models\blogcategories;
use App\Models\company_info_pages;
use App\Models\wp_dh_insurance_plans_benefits;
use App\Models\wp_dh_insurance_plans;
use App\Models\wp_dh_life_plans;
use App\Models\wp_dh_products;
use App\Models\quotes;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
use DB;
class Reportcontroller extends Controller
{
    public function salesreport()
    {
        return view('admin.reports.sales');
    }
     public function brokercomission()
    {
        return view('admin.reports.broker');
    }
     public function agentreport()
    {
        return view('admin.reports.agent');
    }
    public function agentreports(Request $request)
    {
        $this->validate($request, [
            'date_between' => 'required',
            'end_date' => 'required',
        ]);
        echo "<pre>";
        print_r($request->all());
       
    }
}
