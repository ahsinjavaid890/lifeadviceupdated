<?php

namespace App\Http\Controllers;
use App\Helpers\Cmf;
use Illuminate\Http\Request;
use App\Models\sale_change_requests;
use App\Models\sale_extend_requests;
use App\Models\sale_refund_requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
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
    public function requests()
    {
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->userpanel_temp;

        if ( $temp == "1") {
        
            return view('frontend.user.temp1.requests');

        } elseif($temp == "2"){
            
            return view('frontend.user.temp2.requests');
        } elseif($temp == "3"){
            
            return view('frontend.user.temp3.requests');
        }

       
    }
    public function dashboard()
    {
        $sales = DB::table('sales')->where('email' , Auth::user()->email)->orderby('id' , 'desc')->get();
       
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->userpanel_temp;

        if ( $temp == "1") {
        
            return view('frontend.user.temp1.dashboard')->with(array('sales'=>$sales));

        } elseif($temp == "2"){
            
            return view('frontend.user.temp2.dashboard')->with(array('sales'=>$sales));
        } elseif($temp == "3"){
            
            return view('frontend.user.temp3.dashboard')->with(array('sales'=>$sales));
        }
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

        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->userpanel_temp;

        if ( $temp == "1") {
        
           return view('frontend.user.temp1.policydetail')->with(array('data'=>$sales));

        } elseif($temp == "2"){
            
            return view('frontend.user.temp2.policydetail')->with(array('data'=>$sales));
        } elseif($temp == "3"){
            
            return view('frontend.user.temp3.policydetail')->with(array('data'=>$sales));
        }
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
        $change_request->new_status = "1";
        $change_request->request_status = "Pending";
        if($request->document)
        {
            $change_request->document = Cmf::sendimagetodirectory($request->document);
        }
        $change_request->save();


        
        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;

        if ( $temp == "1") {
        
            $subject = 'Policy Change Request | '.$request->reffrence_number;
        Mail::send('email.template1.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
              $message->to(Auth::user()->email);
              $message->subject($subject);
        });



        $subject = 'New Policy Change Request | '.$request->reffrence_number;
        Mail::send('email.template1.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
              $message->to('admin@lifeadvice.ca');
              $message->subject($subject);
        });

        } elseif($temp == "2"){
            
            $subject = 'Policy Change Request | '.$request->reffrence_number;
            Mail::send('email.template2.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
                  $message->to(Auth::user()->email);
                  $message->subject($subject);
            });
    
    
    
            $subject = 'New Policy Change Request | '.$request->reffrence_number;
            Mail::send('email.template2.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
                  $message->to('admin@lifeadvice.ca');
                  $message->subject($subject);
            });
        } elseif($temp == "3"){
            
            $subject = 'Policy Change Request | '.$request->reffrence_number;
            Mail::send('email.template3.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
                  $message->to(Auth::user()->email);
                  $message->subject($subject);
            });
    
    
    
            $subject = 'New Policy Change Request | '.$request->reffrence_number;
            Mail::send('email.template3.sendrequestuser', ['data' => $change_request,'requesttype' => 'change'], function($message) use($request , $subject){
                  $message->to('admin@lifeadvice.ca');
                  $message->subject($subject);
            });
        }


      

        return redirect()->back()->with('message', 'Your Request Submited Successfully.');
    }
    public function refundrequests(Request $request)
    {
        $change_request = new sale_refund_requests();
        $change_request->user_id = Auth::user()->id;
        $change_request->reffrence_number = $request->reffrence_number;
        $change_request->policy_number = $request->policy_number;
        $change_request->start_date = $request->start_date;
        $change_request->return_date = $request->return_date;
        $change_request->new_status = "1";
        $change_request->request_status = "Pending";
        if($request->refund_form)
        {
            $change_request->refund_form = Cmf::sendimagetodirectory($request->refund_form);
        }
        if($request->proof_of_return)
        {
            $change_request->proof_of_return = Cmf::sendimagetodirectory($request->proof_of_return);
        }
        $change_request->save();


        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;

        if ( $temp == "1") {
        
            $subject = 'Policy Refund Request | '.$request->reffrence_number;
            Mail::send('email.template1.sendrequestuser', ['data' => $change_request,'requesttype' => 'refund'], function($message) use($request , $subject){
                  $message->to(Auth::user()->email);
                  $message->subject($subject);
            });
    
            $subject = 'New Policy Refund Request | '.$request->reffrence_number;
            Mail::send('email.template1.sendrequestuser', ['data' => $change_request,'requesttype' => 'refund'], function($message) use($request , $subject){
                  $message->to('admin@lifeadvice.ca');
                  $message->subject($subject);
            });

        } elseif($temp == "2"){
            
            $subject = 'Policy Refund Request | '.$request->reffrence_number;
            Mail::send('email.template2.sendrequestuser', ['data' => $change_request,'requesttype' => 'refund'], function($message) use($request , $subject){
                  $message->to(Auth::user()->email);
                  $message->subject($subject);
            });
    
            $subject = 'New Policy Refund Request | '.$request->reffrence_number;
            Mail::send('email.template2.sendrequestuser', ['data' => $change_request,'requesttype' => 'refund'], function($message) use($request , $subject){
                  $message->to('admin@lifeadvice.ca');
                  $message->subject($subject);
            });
        } elseif($temp == "3"){
            
            $subject = 'Policy Refund Request | '.$request->reffrence_number;
            Mail::send('email.template3.sendrequestuser', ['data' => $change_request,'requesttype' => 'refund'], function($message) use($request , $subject){
                  $message->to(Auth::user()->email);
                  $message->subject($subject);
            });
    
            $subject = 'New Policy Refund Request | '.$request->reffrence_number;
            Mail::send('email.template3.sendrequestuser', ['data' => $change_request,'requesttype' => 'refund'], function($message) use($request , $subject){
                  $message->to('admin@lifeadvice.ca');
                  $message->subject($subject);
            });
        }



      
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
        $change_request->new_status = "1";
        $change_request->request_status = "Pending";
        $change_request->save();


        $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->email_template;

        if ( $temp == "1") {
        
          
        $subject = 'Extend Policy Request | '.$request->reffrence_number;
        Mail::send('email.template1.sendrequestuser', ['data' => $change_request,'requesttype' => 'extend'], function($message) use($request , $subject){
              $message->to(Auth::user()->email);
              $message->subject($subject);
        });

        $subject = 'New Extend Policy Request | '.$request->reffrence_number;
        Mail::send('email.template1.sendrequestuser', ['data' => $change_request,'requesttype' => 'extend'], function($message) use($request , $subject){
              $message->to('admin@lifeadvice.ca');
              $message->subject($subject);
        });

        } elseif($temp == "2"){
            
          
        $subject = 'Extend Policy Request | '.$request->reffrence_number;
        Mail::send('email.template2.sendrequestuser', ['data' => $change_request,'requesttype' => 'extend'], function($message) use($request , $subject){
              $message->to(Auth::user()->email);
              $message->subject($subject);
        });

        $subject = 'New Extend Policy Request | '.$request->reffrence_number;
        Mail::send('email.template2.sendrequestuser', ['data' => $change_request,'requesttype' => 'extend'], function($message) use($request , $subject){
              $message->to('admin@lifeadvice.ca');
              $message->subject($subject);
        });
        } elseif($temp == "3"){
            
           
        $subject = 'Extend Policy Request | '.$request->reffrence_number;
        Mail::send('email.template3.sendrequestuser', ['data' => $change_request,'requesttype' => 'extend'], function($message) use($request , $subject){
              $message->to(Auth::user()->email);
              $message->subject($subject);
        });

        $subject = 'New Extend Policy Request | '.$request->reffrence_number;
        Mail::send('email.template3.sendrequestuser', ['data' => $change_request,'requesttype' => 'extend'], function($message) use($request , $subject){
              $message->to('admin@lifeadvice.ca');
              $message->subject($subject);
        });
        }

        return redirect()->back()->with('message', 'Your Request Submited Successfully.');
               
    }
}
