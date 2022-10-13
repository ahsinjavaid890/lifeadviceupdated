<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Cmf;
use App\Models\companies;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Auth;
class RegisterController extends Controller
{
    public function checkemail(Request $request)
    {
        $checkemail = User::where('email' , $request->email)->count();
        return $checkemail;
    }
    public function checkcompanyname($id)
    {
        $checkemail = companies::where('company_name' , $id)->count();
        return $checkemail;
    }
    public function checkdotnumber($id)
    {
        $checkemail = User::where('dot_number' , $id)->count();
        return $checkemail;
    }
    public function carrierregister(Request $request)
    {
        $carrier = new User();
        $carrier->name = $request->name;
        $carrier->email = $request->email;
        $carrier->type = 'carrier';
        $carrier->password = Hash::make($request->password);
        $carrier->dot_number = $request->dot_number;
        $carrier->trucks_in_fleet = $request->trucks_in_fleet;
        $carrier->how_many_drivers_in_next = $request->how_many_drivers_in_next;
        $carrier->redirect = $request->redirect;
        $carrier->approved_status = 0;
        $carrier->save();
        $carrier->sendEmailVerificationNotification();
        $company = new companies();
        $company->user_id = $carrier->id;
        $company->email = $request->email;
        $company->company_name = $request->company_name;
        $company->company_link = Cmf::shorten_url($request->company_name);
        $company->save();
        $subject = 'Welcome To '.env('APP_NAME').' Your Request Submited Successfully';
        Mail::send('email.userrequest', ['name' => $request->name], function($message) use($request , $subject){
            $message->to($request->email);
            $message->subject($subject);
        });
        Auth::login($carrier);
        return redirect()->route('verification.notice')->with('email', $request->email);
    }
}
