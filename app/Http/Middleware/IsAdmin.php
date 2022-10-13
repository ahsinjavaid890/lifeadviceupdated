<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->type == 'admin')
            {
                return $next($request);
            }else{
                Auth::logout();
                return redirect()->route('admin.login')->with('success','You Dont Have Access of Admin');
            }
        }else{
            return redirect()->route('admin.login')->with('success','Admin has been logged out!');
        }
        
    }
}
