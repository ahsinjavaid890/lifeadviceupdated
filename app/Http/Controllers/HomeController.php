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
}
