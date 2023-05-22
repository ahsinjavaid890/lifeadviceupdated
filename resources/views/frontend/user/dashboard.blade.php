@extends('frontend.layouts.main')
@section('tittle')
<title>General Settings – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<style type="text/css">
   body{
      background-color:rgb(246 248 251);
   }
   .card{
       background: #fff;
       border: 1px solid #cfd9e8;
       box-shadow: 0 10px 24px rgba(87,106,134,.2);
       padding: 32px 24px;
       border-radius: 16px;
   }
   .heading-2{
      color: #2b3481!important;
       font-weight: 800;
       font-size: 3rem;
       line-height: 3.5rem;
       margin-bottom: 48px;
   }
</style>
<div class="container mb-5" style="margin-top: 8rem;">
   <div class="row mt-5">
      <div class="col-md-12">
         <div class="heading-wrapper">
            <h1 class="heading-2 text-md-center">My Account</h1>
         </div>
      </div>
      
   </div>
   <div class="row mt-5">
      <div class="col-md-9">
         <div class="card shadow rounded">
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
      <div class="col-md-3">
         <div class="card">
            <div class="card-body p-0">
               <ul class="nav nav-tabs " role="tablist" style="display: block;">
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('profile')}}">Purchased Policies</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="{{ url('logout')}}">Sign Out</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection