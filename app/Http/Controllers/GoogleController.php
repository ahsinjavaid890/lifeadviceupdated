<?php
  
namespace App\Http\Controllers;
  
use App\Models\productgallerimages;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
        {

            try {
                $user = Socialite::driver('google')->stateless()->user();
                $finduser = User::where('email', $user->email)->first();
                if($finduser){
                    Auth::login($finduser);
                    return redirect()->intended('profile');
                }else{
                    return redirect()->intended('login?error="User is not Registerd"');
                }
          
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }
}