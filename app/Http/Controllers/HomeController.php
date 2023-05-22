<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function dashboard()
    {
        return view('frontend.user.dashboard');
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
}
