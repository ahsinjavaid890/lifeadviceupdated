@extends('frontend.layouts.main')
@section('tittle')
<title>Sign Up</title>
@endsection
@section('content')
<div class="container-homepage main-div-login p-5">
   <!-- <div class="login-image m-5 text-center">
      <img src="https://www.lifeadvice.ca/images/brand.png">
   </div> -->
   <div class="card shadow signup-card">
      <div class="card-body">
            <div class="heading-login text-center">
               <h2>Sign Up</h2>
            </div>
          <form class="mt-5" action="#" method="POST">
             <input type="hidden" name="_token" value="15azM06AbWQZrMTreqAEapw45we8onJeIXUjLMZ7">     <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Name</label>
                       <input style="min-height: 58px" class="form-control  rounded" type="text" placeholder="Name" name="name" autocomplete="off">
                      </div> 
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                          <input style="min-height: 58px" class="form-control  rounded" type="text" placeholder="Email" name="email" autocomplete="off">
                         </div> 
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
               <label>Phone Number</label>
                 <input style="min-height: 58px" class="form-control  rounded" type="number" placeholder="phone number" name="phone" autocomplete="off">
                </div> 
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
               <label>Password</label>
                 <input style="min-height: 58px" class=" form-control rounded" type="password" placeholder="Password" name="password">
                                             </div>
                   </div>
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

                 <button type="submit" class="btn btn-lg signup-button">Sign Up</button>
             </div>
                        </form>
      </div>
   </div>
                        
</div>

@endsection