<?php
  
namespace App\Http\Controllers;
use App\Helpers\Cmf;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\productgallerimages;
use App\Models\secure_links;
use App\Models\sales;
use App\Models\traveler_sale_informations;
use Redirect;
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
        $check = sales::where('reffrence_number' , $request->reffrence_id);

        if($check->count() == 1)
        {

            $dateof_birthwith_format = Cmf::date_format($request->date_of_birth);
            $checktraveler = traveler_sale_informations::where('date_of_birth' , $dateof_birthwith_format)->where('sale_id' , $check->first()->id)->count();
            if($checktraveler > 0)
            {
                $getemail = $check->first()->email;

                $finduser = User::where('email', $getemail)->first();
                if($finduser){
                    Auth::login($finduser);
                    return redirect()->intended('profile');
                }else{
                    return redirect()->intended('login?error="User is not Registerd"');
                }
            }else{
                return redirect()->back()->with(array('dateofbirthwrongwrong' => 'Please Enter Correct Date of Birth' ,'reffrence_id' => $request->reffrence_id,'date_of_birth' => $request->date_of_birth));
            }

            

        }else{
            return redirect()->back()->with(array('policynumberwrong' => 'Please Enter Correct Reffrence ID' ,'reffrence_id' => $request->reffrence_id,'date_of_birth' => $request->date_of_birth));
        }
        
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