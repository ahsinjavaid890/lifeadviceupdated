<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        if(Auth::user()->approved_status == 1)
        {
            return redirect('/dashboard');
        }
        else
        {
            $subject = 'Your Account Is Not Approved Yet';
            $request = Auth::user();
            // Mail::send('email.accountnotapproved', ['name' => $request->name], function($message) use($request , $subject){
            //     $message->to($request->email);
            //     $message->subject($subject);
            // });
            Auth::logout();
            return redirect()->route('login')->with('warning', 'Your Account is Not Approved.');
        }        
    }
}
