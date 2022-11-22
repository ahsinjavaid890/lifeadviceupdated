@extends('frontend.layouts.main')
@section('tittle')
<title>Qoutes – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<style type="text/css">
   .bg-primary {
   background-color: #3a5371!important;
   }
   body{
   background-color:rgb(246 248 251);
   }
   .card .header-title {
   margin-bottom: 0.5rem;
   text-transform: uppercase;
   letter-spacing: .02em;
   font-size: .9rem;
   margin-top: 0;
   }
   .nav-item.active{
    width: 100%;
    margin: auto;
    background: #3a5371;
/*    padding: 10px;*/
   }
   .nav-item.active a {
       color: white;
       font-weight: bolder;
   }
   .nav-link{
      color: black;
    font-weight: 600;
   }
</style>
<div class="container mb-5" style="margin-top: 8rem;">
   <div class="row">
      <div class="col-md-12">
         <div class="card bg-primary profile_card">
            <div class="card-body profile-user-box">
               <div class="row">
                  <div class="col-sm-8">
                     <div class="media">
                        <span class="float-left m-2 mr-4"><img src="{{ asset('public/front/img/images/profile.jpg')}}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                        <div class="media-body">
                           <h4 class="mt-1 mb-1 text-white">Abubakar</h4>
                           <p class="font-13 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                           <ul class="mb-0 list-inline text-light">
                              <li class="list-inline-item mr-3">
                                 <h5 class="mb-1">Phone</h5>
                                 <p class="mb-0 font-13 text-white-50">0555555</p>
                              </li>
                              <li class="list-inline-item">
                                 <h5 class="mb-1">Email</h5>
                                 <p class="mb-0 font-13 text-white-50">info@gmail.com</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-5">
      <div class="col-md-4">
         <div class="card">
            <div class="card-body p-0">
               <ul class="nav nav-tabs" role="tablist" style="display: block;">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{ url('qoutes')}}" role="tab">Qoutes</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ url('profile')}}" role="tab">General Settings</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('security-settings')}}" role="tab">Security Settings</a>
                  </li>
               </ul>
               <div class="text-left mt-3 p-3">
                  <p class="text-muted"><strong>Full Name :</strong> <span class="ml-2">Michael A. Franklin</span></p>
                  <p class="text-muted"><strong>Mobile :</strong><span class="ml-2">(+55) 123 1234 567</span></p>
                  <p class="text-muted"><strong>Email :</strong> <span class="ml-2">info@gmail.com</span></p>
                  <p class="text-muted"><strong>Country :</strong> <span class="ml-2">USA</span></p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-md-12">
                     <h4>Qoutes</h4>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <!-- <div class="col-md-6">
                     <div class="form-group">
                        <label for="simpleinput">Name</label>
                        <input type="text" id="simpleinput" name="name" class="form-control">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="example-email">Email</label>
                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="example-password">Password</label>
                  <input type="password" id="example-password" class="form-control" value="password">
               </div>
               <div class="form-group">
                  <label for="example-textarea">Text area</label>
                  <textarea class="form-control" id="example-textarea" rows="5"></textarea>
               </div> -->
            </div>
         </div>
         <div class="card-footer">
            <div class="row">
               <div class="col-md-12 text-right">
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection