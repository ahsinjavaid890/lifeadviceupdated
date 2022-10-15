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
        $settings = Settings::first();
        return view('admin.website.settings',compact("settings"));
    }
    public function appearance_update(Request $request)
    {

        $input = $request->all();
        $settings = Settings::first();
        if(!empty($input['website_name']))
        $settings->site_name = $input['website_name'];
        if(!empty($input['site_motto']))
        $settings->site_moto = $input['site_motto'];
         

        if(!empty($input['site_email']))
        $settings->site_email = $input['site_email'];
        if(!empty($input['site_phonenumber']))
        $settings->site_phonenumber = $input['site_phonenumber'];
        if(!empty($input['site_fax']))
        $settings->site_fax = $input['site_fax'];
        if(!empty($input['site_address']))
        $settings->site_address = $input['site_address'];
        


        if(!empty($input['paypal']))
        $settings->paypal = $input['paypal'];
        if(!empty($input['stripe']))
        $settings->stripe = $input['stripe'];
        if(!empty($input['jazcash']))
        $settings->jazcash = $input['jazcash'];



        if(!empty($input['published_stripe']))
        $settings->published_stripe = $input['published_stripe'];
        if(!empty($input['secret_stripe']))
        $settings->secret_stripe = $input['secret_stripe'];

    
        if(!empty($input['paypal_secret']))
        $settings->paypal_secret = $input['paypal_secret'];
        if(!empty($input['paypal_client']))
        $settings->paypal_client = $input['paypal_client'];

    
        if(!empty($input['cod']))
        $settings->cod = $input['cod'];
        


        if(!empty($input['vat_percentage']))
        $settings->vat_percentage = $input['vat_percentage'];
        if(!empty($input['vat_value']))
        $settings->vat_value = $input['vat_value'];
        if(!empty($input['sale_percentage']))
        $settings->sale_percentage = $input['sale_percentage'];
        if(!empty($input['sale_value']))
        $settings->sale_value = $input['sale_value'];


    
        $updated = $settings->save();
        
        if($updated)
        {

          return redirect()->back()->with('message', 'Settings Updated Successfully');
        }
        else
        {
            return back()->with('warning', 'Something went Wrong!')->withInput();
        }
    }

    public function updatelogos(Request $request)
    {
        $settings = Settings::first();
        if(!empty($request->header_logo))
        {
            $settings->header_logo = Cmf::sendimagetodirectory($request->header_logo);
        }
        if(!empty($request->footer_logo))
        {
            $settings->footer_logo = Cmf::sendimagetodirectory($request->footer_logo);
        }
        if(!empty($request->favicon))
        {
            $settings->favicon = Cmf::sendimagetodirectory($request->favicon);
        }
        $updated = $settings->save();
        if($updated)
        {
          return redirect()->back()->with('message', 'Settings Updated Successfully');
        }
        else
        {
            return back()->with('warning', 'Something went Wrong!')->withInput();
        }
    }

    public function payementmethod()
    {
        $settings = Settings::first();
        return view('admin.settings.payementmethod',compact("settings"));
    }
    public function taxsettings()
    {
        $settings = Settings::first();
        return view('admin.settings.taxsettings',compact("settings"));
    }

    public function taxsettingsupdate(Request $request)
    {
        $input = $request->all();
        $settings = Settings::first();
        $settings->vat_percentage = $input['vat_percentage'];
        $settings->vat_value = $input['vat_value'];
        $settings->sale_percentage = $input['sale_percentage'];
        $settings->sale_value = $input['sale_value'];
        $updated = $settings->save();
        if($updated)
        {
          return redirect()->back()->with('message', 'Settings Updated Successfully');
        }
        else
        {
            return back()->with('warning', 'Something went Wrong!')->withInput();
        }
    }
    
    
}
