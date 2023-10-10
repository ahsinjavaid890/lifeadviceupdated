<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use App\Models\email_template;
use App\Models\email_templates;
use Illuminate\Http\Request;
use App\Models\site_settings as Settings;
use App\Models\site_settings;
use Illuminate\Support\Facades\DB;
use Artisan;

class SettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function appearance()
    {   
        $settings = Settings::where('smallname' , 'lifeadvice')->first();
        return view('admin.website.settings',compact("settings"));
    }
    public function clearcache()
    {
        return view('admin.website.clearcache');
    }
    public function cacheclear()
    {
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('storage:link');
        return redirect()->back()->with('message', 'Cache Cleard Successfully');
    }
    public function serverinfo()
    {
        return view('admin.website.serverinfo');
    }
    public function emailsettings()
    {   
        $settings = Settings::where('smallname' , 'lifeadvice')->first();
        return view('admin.website.emailsettings',compact("settings"));
    }
    
    public function emailsettingsupdate(Request $request)
    {   
        $settings = site_settings::where('smallname' , Cmf::getwebsite()->smallname)->first();
        $upadate = Settings::find($settings->id);
        $upadate->email_template = $request->email_temp;
        $upadate->save();
        return redirect()->back()->with('message', 'Email Template Settings Updated Successfully');
    }
    
    public function userpanelsettings()
    {   
        $settings = Settings::where('smallname' , 'lifeadvice')->first();
        return view('admin.website.userpanelsetting',compact("settings"));
    }
    
    public function userpanelsettingupdate(Request $request)
    {   
        $settings = site_settings::where('smallname' , Cmf::getwebsite()->smallname)->first();
        $upadate = Settings::find($settings->id);
        $upadate->userpanel_temp = $request->userpanel_temp;
        $upadate->buynow_form = $request->buynow_form;
        $upadate->save();
        return redirect()->back()->with('message', 'User Panel Settings Updated Successfully');
    }

    public function settingsupdate(Request $request)
    {
        $settings = Settings::where('smallname' , Cmf::getwebsite()->smallname)->first();
        $upadate = Settings::find($settings->id);
        $upadate->site_name = $request->website_name;
        $upadate->site_phonenumber = $request->site_phonenumber;
        $upadate->site_address = $request->site_address;
        $upadate->site_email = $request->site_email;
        $upadate->site_basecolor = $request->site_basecolor;
        $upadate->site_hovercolor = $request->site_hovercolor;
        $upadate->site_textcolor = $request->site_textcolor;
        $upadate->save();
        return redirect()->back()->with('message', 'Settings Updated Successfully');
    }
    public function updatelinks(Request $request)
    {
        $settings = Settings::where('smallname' , Cmf::getwebsite()->smallname)->first();
        $upadate = Settings::find($settings->id);
        $upadate->facebook_link = $request->facebook_link;
        $upadate->insta_link = $request->insta_link;
        $upadate->twitter_link = $request->twitter_link;
        $upadate->save();
        return redirect()->back()->with('message', 'Social Links Updated Successfully');
    }

    public function updatelogos(Request $request)
    {
        $settings = Settings::where('smallname' , Cmf::getwebsite()->smallname)->first();
        $upadate = Settings::find($settings->id);
        if($request->header_logo)
        {
            $upadate->header_logo = Cmf::sendimagetodirectory($request->header_logo);
        }
        if($request->footer_logo)
        {
            $upadate->footer_logo = Cmf::sendimagetodirectory($request->footer_logo);
        }
        if($request->favicon)
        {
            $upadate->favicon = Cmf::sendimagetodirectory($request->favicon);
        }
        $upadate->save();
        return redirect()->back()->with('message', 'Logos Updated Successfully');
    }

}
