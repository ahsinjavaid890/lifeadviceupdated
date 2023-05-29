<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use DB;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        return redirect()->route('userprofile');
    }
    public function dashboard()
    {
        $sales = DB::table('sales')->where('email' , Auth::user()->email)->orderby('id' , 'desc')->get();
        return view('frontend.user.dashboard')->with(array('sales'=>$sales));
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
    public function policydetail($id)
    {
        $sales = DB::table('sales')->where('id' , $id)->first();
        return view('frontend.user.policydetail')->with(array('data'=>$sales));
    }
}
