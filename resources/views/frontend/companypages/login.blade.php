@extends('frontend.layouts.main')
@section('tittle')
<title>Login</title>
@endsection
@section('content')

<div class="container-homepage main-div-login p-5">
   <!-- <div class="login-image m-5 text-center">
      <img src="https://www.lifeadvice.ca/images/brand.png">
   </div> -->
   <div class="card shadow login-card">
      <div class="card-body">
            <div class="heading-login text-center">
               <h2>Login</h2>
            </div>
          <form class="mt-5" action="#" method="POST">
             <input type="hidden" name="_token" value="15azM06AbWQZrMTreqAEapw45we8onJeIXUjLMZ7">                            <div class="form-group">
                 <input style="min-height: 58px" class="form-control  rounded-pill" type="text" placeholder="Email" name="email" autocomplete="off">
                                             </div>
             <div class="form-group">
                 <input style="min-height: 58px" class=" form-control rounded-pill" type="password" placeholder="Password" name="password">
                                             </div>
             <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                 <div class="checkbox-inline">
                     <label class="checkbox checkbox-outline  m-0">
                         <input type="checkbox" id="remember" name="remember">
                         <span></span>
                         Remember me
                     </label>
                 </div>
                 <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
             </div>
             <div class="form-group text-center mt-10">

                 <button type="submit" class="btn btn-lg login-button">Login</button>
             </div>
                        </form>
      </div>
   </div>
                        
</div>
@endsection