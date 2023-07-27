<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class LoginController extends Controller
{
    //

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('admin.auth.login');
        }
    }

    public function login_process(Request $request)
    {
        $data = $request->all();
        $this->validator($request);
        if (auth()->attempt(['email' => $data['email'], 'password' => $data['password']], $request->filled('remember'))) {
            if (Auth::user()->type == 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'You are Login as Admin!');
            } else {
                Auth::logout();
                return back()->with('error', 'You have not Access For Admin');
            }
        }
        return $this->loginFailed();
    }

    /**
     * Logout the admin.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Admin has been logged out!');
    }

    /**
     * Validate the form data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return 
     */
    private function validator(Request $request)
    {
        //validate the form...

        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:users|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }

    /**
     * Redirect back after a failed login.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
        return redirect()->back()->withInput()->with('error', 'Login failed, please try again!');
    }
}
