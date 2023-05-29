<?php

namespace App\Http\Controllers;
use App\Helpers\Cmf;
use Illuminate\Http\Request;
use App\Models\sale_change_requests;
use App\Models\sale_extend_requests;
use App\Models\sale_refund_requests;
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
    public function changerequest(Request $request)
    {
        $change_request = new sale_change_requests();
        $change_request->user_id = Auth::user()->id;
        $change_request->reffrence_number = $request->reffrence_number;
        $change_request->policy_number = $request->policy_number;
        $change_request->start_date = $request->start_date;
        $change_request->end_date = $request->end_date;
        $change_request->new_effective_date = $request->new_effective_date;
        $change_request->new_return_date = $request->new_return_date;
        if($request->document)
        {
            $change_request->document = Cmf::sendimagetodirectory($request->document);
        }
        $change_request->save();


        $subject = 'Policy Change Request | '.$request->reffrence_number;
        Mail::send('email.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
              $message->to(Auth::user()->email);
              $message->subject($subject);
        });



        


        return redirect()->back()->with('message', 'Your Request Submited Successfully.');
    }
    public function refundrequests(Request $request)
    {
        $change_request = new sale_refund_requests();
        $change_request->user_id = Auth::user()->id;
        $change_request->reffrence_number = $request->reffrence_number;
        $change_request->policy_number = $request->policy_number;
        $change_request->start_date = $request->start_date;
        $change_request->return_date = $request->end_date;
        if($request->refund_form)
        {
            $change_request->refund_form = Cmf::sendimagetodirectory($request->refund_form);
        }
        if($request->proof_of_return)
        {
            $change_request->proof_of_return = Cmf::sendimagetodirectory($request->proof_of_return);
        }
        $change_request->save();
        return redirect()->back()->with('message', 'Your Request Submited Successfully.');
    }
    public function extendpolicy(Request $request)
    {
        $change_request = new sale_extend_requests();
        $change_request->user_id = Auth::user()->id;
        $change_request->reffrence_number = $request->reffrence_number;
        $change_request->policy_number = $request->policy_number;
        $change_request->start_date = $request->start_date;
        $change_request->end_date = $request->end_date;
        $change_request->new_return_date = $request->new_return_date;
        $change_request->save();
        return redirect()->back()->with('message', 'Your Request Submited Successfully.');
    }
}
