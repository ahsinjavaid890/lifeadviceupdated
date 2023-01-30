@extends('frontend.layouts.main')
@section('tittle')
<title>General Settings – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<style type="text/css">
   .profile_card {
   background-color: #2b3481!important;
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
    background: #2b3481;
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
                        <span class="float-left m-2 mr-4">
                           @if(Auth::user()->profileimage)
                           <img src="{{ url('public/images') }}/{{ Auth::user()->profileimage  }}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail">
                           @else
                           <img src="https://st4.depositphotos.com/4329009/19956/v/600/depositphotos_199564354-stock-illustration-creative-vector-illustration-default-avatar.jpg" style="height: 100px;" alt="" class="rounded-circle img-thumbnail">
                           @endif
                        </span>
                        <div class="media-body">
                           <h4 class="mt-1 mb-1 text-white">{{ Auth::user()->name }}</h4>
                           <p class="font-13 text-white">{{ Auth::user()->about_me }}</p>
                           <ul class="mb-0 list-inline text-light">
                              <li class="list-inline-item mr-3">
                                 <h5 class="mb-1 text-white">Phone</h5>
                                 <p class="mb-0 font-13 text-white">{{ Auth::user()->phone }}</p>
                              </li>
                              <li class="list-inline-item">
                                 <h5 class="mb-1 text-white">Email</h5>
                                 <p class="mb-0 font-13 text-white">{{ Auth::user()->email }}</p>
                              </li>
                              <li class="list-inline-item">
                                 <h5 class="mb-1 text-white">Country</h5>
                                 <p class="mb-0 font-13 text-white">{{ Auth::user()->country }}</p>
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
               <ul class="nav nav-tabs " role="tablist" style="display: block;">
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ url('udashboard')}}">My Qoutes</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="{{ url('profile')}}">General Settings</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('security-settings')}}">Security Settings</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-md-12">
                     <h4>General Settings</h4>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="simpleinput">Name</label>
                        <input type="text" id="simpleinput" name="name" class="form-control" placeholder="Name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="example-email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="example-password">Phone Number</label>
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="phone">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="example-password">City</label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="City">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>Profile Image</label>
                  <input type="file" name="profile_img" class="form-control">
               </div>
               <div class="form-group">
                  <label for="example-textarea">Text area</label>
                  <textarea class="form-control" id="example-textarea" rows="5"></textarea>
               </div>
            </div>
            <div class="card-footer">
               <div class="row">
                  <div class="col-md-12 text-right">
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection