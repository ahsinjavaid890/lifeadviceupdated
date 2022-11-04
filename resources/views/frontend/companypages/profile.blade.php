@extends('frontend.layouts.main')
@section('tittle')
<title>Life Insurance Ontario – Get Tips, Online Quotes for Life Insurance</title>
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
</style>
<div class="container mb-5" style="margin-top: 100px;">
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
                           <p class="font-13 text-white-50"> Authorised Brand Seller</p>
                           <ul class="mb-0 list-inline text-light">
                              <li class="list-inline-item mr-3">
                                 <h5 class="mb-1">$ 25,184</h5>
                                 <p class="mb-0 font-13 text-white-50">Total Revenue</p>
                              </li>
                              <li class="list-inline-item">
                                 <h5 class="mb-1">5482</h5>
                                 <p class="mb-0 font-13 text-white-50">Number of Orders</p>
                              </li>
                           </ul>
                        </div>
                        <!-- end media-body-->
                     </div>
                  </div>
                  <!-- end col-->
                  <div class="col-sm-4">
                     <div class="text-center mt-sm-0 mt-3 text-sm-right">
                        <button type="button" class="btn btn-light">
                        <i class="fa fa-edit mr-1"></i>
                        Edit Profile
                        </button>
                     </div>
                  </div>
                  <!-- end col-->
               </div>
               <!-- end row -->
            </div>
            <!-- end card-body/ profile-user-box-->
         </div>
      </div>
   </div>
   <div class="row mt-5">
      <div class="col-md-4">
         <div class="card">
            <div class="card-body">
               <h4 class="header-title mt-0 mb-3 text-dark">Seller Information</h4>
               <p class="text-muted font-13">
                  Hye, I’m Michael Franklin residing in this beautiful world. I create websites and mobile apps with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.
               </p>
               <hr>
               <div class="text-left">
                  <p class="text-muted"><strong>Full Name :</strong> <span class="ml-2">Michael A. Franklin</span></p>
                  <p class="text-muted"><strong>Mobile :</strong><span class="ml-2">(+12) 123 1234 567</span></p>
                  <p class="text-muted"><strong>Email :</strong> <span class="ml-2">coderthemes@gmail.com</span></p>
                  <p class="text-muted"><strong>Location :</strong> <span class="ml-2">USA</span></p>
                  <p class="text-muted"><strong>Languages :</strong>
                     <span class="ml-2"> English, German, Spanish </span>
                  </p>
                  <p class="text-muted mb-0"><strong>Elsewhere :</strong>
                     <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="" data-original-title="Facebook"><i class="mdi mdi-facebook"></i></a>
                     <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="" data-original-title="Twitter"><i class="mdi mdi-twitter"></i></a>
                     <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="" data-original-title="Skype"><i class="mdi mdi-skype"></i></a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
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
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection