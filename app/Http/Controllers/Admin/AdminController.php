<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\help_categories;
use App\Models\help_articles;
use App\Models\education_categories;
use App\Models\education_articles;
use App\Models\company_info_pages;
use App\Models\recuring_tips;
use App\Models\subscription_plans;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
use DB;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard/index');
    }
    public function allsale()
    {
        $data = DB::table('sales')->orderby('purchase_date' , 'DESC')->get();
        return view('admin.sales.allsale')->with(array('data'=>$data));
    }
    public function viewsale($id)
    {
        $data = DB::table('sales')->where('sales_id' , $id)->first();
        return view('admin.sales.viewsale')->with(array('data'=>$data));
    }
    public function allcompanies()
    {
        $data = DB::table('wp_dh_companies')->get();
        return view('admin.companies.all')->with(array('data'=>$data));
    }
}
