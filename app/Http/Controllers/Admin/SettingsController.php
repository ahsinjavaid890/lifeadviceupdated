<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\site_settings as Settings;

class SettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function appearance()
    {   
        $settings = Settings::where('smallname' , Cmf::getwebsite()->smallname)->first();
        return view('admin.website.settings',compact("settings"));
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
