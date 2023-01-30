@extends('frontend.layouts.main')
@section('tittle')
<title>Qoutes-detail – Get Tips, Online Quotes for Life Insurance</title>
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
                        <span class="float-left m-2 mr-4"><img src="{{ asset('public/front/img/images/profile.jpg')}}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                        <div class="media-body">
                           <h4 class="mt-1 mb-1 text-white">Abubakar</h4>
                           <p class="font-13 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                           <ul class="mb-0 list-inline text-light">
                              <li class="list-inline-item mr-3">
                                 <h5 class="mb-1 text-white">Phone</h5>
                                 <p class="mb-0 font-13 text-white">0555555</p>
                              </li>
                              <li class="list-inline-item">
                                 <h5 class="mb-1 text-white">Email</h5>
                                 <p class="mb-0 font-13 text-white">info@gmail.com</p>
                              </li>
                              <li class="list-inline-item">
                                 <h5 class="mb-1  text-white">Country</h5>
                                 <p class="mb-0 font-13 text-white">USA</p>
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
                     <a class="nav-link" href="{{ url('qoutes')}}">All Qoutes</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ url('profile')}}">General Settings</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('security-settings')}}">Security Settings</a>
                  </li>
               </ul>
         </div>
      </div>
      <div class="col-md-8">
         <!-- <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-md-12">
                     <h4>Qoutes</h4>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <table id="example" class="table table-bordered table-head-custom table-checkable dataTable no-footer">
                        <thead>
                            <tr>
                              <th class="sorting">ID</th>
                              <th class="sorting">Date</th>
                              <th class="sorting">Satus</th>
                              <th class="sorting">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><a href="{{ url('qoutes-detail')}}" class="btn btn-primary btn-block"><i class="fa fa-eye"></i>View</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
            </div>
         </div>
      </div> -->
   </div>
</div>
</div>
</div>
@endsection