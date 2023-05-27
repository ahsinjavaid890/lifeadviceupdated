<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\productgallerimages;
use App\Models\secure_links;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Mail;
class CustomLoginController extends Controller
{
    public function customlogin(Request $request)
    {
        $this->validate($request, [
            'reffrence_id' => 'required',
            'date_of_birth' => 'required',
        ]);
    }

    public function sendsecurelink(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255|email|exists:users',
        ]);
        $hash = Hash::make($request->email);
        $newsecure = new secure_links();
        $newsecure->email = $request->email;
        $newsecure->secure_link = $hash;
        $newsecure->open = 1;
        $newsecure->save();
        $link = url('securelogin').'/'.$hash;
        Mail::send('email.securelink', array('link'=>$link), function($message) use ($request) {
            $message->to($request->email)->subject('Secure link sign in');
            $message->from('compare@lifeadvice.ca','LIFEADVICE');
        });
        return redirect()->back()->with('message', 'We have sent a Secure Link to your email. Click on the link provided to sign in.');
    }

    public function securelogin($id)
    {
        if(secure_links::where('secure_link' , $id)->where('open' , 1)->count() > 0)
        {
            secure_links::where('secure_link' , $id)->update(array('open' =>2));
            $secreuser = secure_links::where('secure_link' , $id)->first();
            $finduser = User::where('email', $secreuser->email)->first();
            Auth::login($finduser);
            return redirect()->intended('profile');
        }
        else
        {
            return view('auth.securelinkerror');
        }
    }
}