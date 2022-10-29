@extends('frontend.layouts.main')
@section('tittle')
<title>Login</title>
@endsection
@section('content')
<style type="text/css">
    input[type="text"], input[type="email"], input[type="password"]{
    border: none !important;
}
.custome-checkbox input[type="checkbox"]{
   width: 30px;
   height: 18px;
}
.custome-checkbox input[type="checkbox"]:focus{
   background-color: red;
}
</style>

<div class="container-homepage main-div-login p-5">
   <div class="row justify-content-center">
             <div class="col-xl-5 col-md-10">
                 <div class="login_wrap">
                     <div class="padding_eight_all bg-white login-page">
                         <div class="heading_s1">
                             <h3>Login</h3>
                         </div>
                                                  <form method="POST" action="">
                                                        <div class="form-group">
                                 <input class="form-control" name="email" id="txt-email" type="email" value="" placeholder="Your Email">
                                                              </div>
                             <div class="form-group">
                                 <input class="form-control" type="password" name="password" id="txt-password" placeholder="Password">
                                                              </div>
                             <div class="login_footer form-group">
                                 <div class="chek-form">
                                     <div class="custome-checkbox form-group">
                                         <input class="form" type="checkbox" name="remember" id="remember-me" value="1">
                                         <label class="form-check-label" for="remember-me"><span>Remember me</span></label>
                                     </div>
                                 </div>
                                 <a href="https://leatherwearclothing.com/password/reset">Forgot password?</a>
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-fill-out btn-block">Log in</button>
                             </div>
                         </form>

                         <div class="form-note text-center">Don't Have an Account? <a href="{{'signup'}}">Sign up now</a></div>
                     </div>
                 </div>
             </div>
         </div>                
</div>
@endsection