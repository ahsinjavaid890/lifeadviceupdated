<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
class CmsController extends Controller
{
    public function homepageshow()
    {
    	return view('admin.pages.homepage');
    }
}
