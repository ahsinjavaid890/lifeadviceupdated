@extends('frontend.layouts.main')
@section('tittle')
<title>User Dashboard – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/udashboad.css')}}">
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
                                 <h5 class="mb-1 text-white">Country</h5>
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
                     <a class="nav-link" href="{{ url('udashboard')}}">MY Qoutes</a>
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
      </div>
      <div class="col-md-8">
         <div class="row">
            <div class="col-md-12">
               <div class="card shadow profile_cards">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user_des mb-4">
                              <p>Travel Medical Coverage to Canada</p>
                           </div>
                           <div class="policy d-flex">
                              <p class="policyid">
                                 <span class="text-dark">Policy ID :</span>
                                 VS191278
                              </p>
                           </div>
                           <div class="light mt-2">
                              <p class="communication"><i class="fa fa-lightbulb mr-2"></i>This is your Policy ID. Please use this for all communication with us.</p>
                           </div>
                           <div class="row mt-5">
                              <div class="col-md-6">
                                 <div class="user_data">
                                    <label>Policy Name</label>
                                    <h5>VisitorSecure</h5>
                                 </div>
                                 <div class="user_data">
                                    <label>Purchase Date</label>
                                    <h5>Nov 22, 2022</h5>
                                 </div>
                                 <div class="user_data">
                                    <label>Premium Paid</label>
                                    <h5>$5.40</h5>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="user_data">
                                    <label>Destination</label>
                                    <h5>Canada</h5>
                                 </div>
                                 <div class="user_data">
                                    <label>Policy Maximum</label>
                                    <h5>$50,000</h5>
                                 </div>
                                 <div class="user_data">
                                    <label>Deductible</label>
                                    <h5>$100</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="coverage">
                              <h3>Coverage Duration</h3>
                              <p class="condition">Upcoming</p>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="effiate_date">
                                       <label>Effective Date</label>
                                       <h6>Effective Date</h6>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="expire_date">
                                       <label>Expire On <span class="days">in 5 days</span></label>
                                       <h6 class="text-danger">Nov 27, 2022</h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div><hr>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="claim_inforamtion text-right">
                                    <button class="claim_button" data-toggle="modal" data-target="#cancelpolicy">Cancel Policy</button>
                                    <button class="claim_button">Track Claims</button>
                                    <button class="claim_button extend"><i class="fa fa-refresh mr-2"></i>Extend</button>
                                 </div>
                                 <div class="claim_info mt-5">
                                    <h3>Claims Information</h3>
                                    <p>Life Advice believes filing travel insurance claims should be a straightforward, stress-free process. Whether you need to file, update, or appeal a claim, we’ve got you covered. We care about keeping our travelers safe and secure because we're travelers too.</p>
                                    <h3>How to File Claims</h3>
                                    <p>All claims must be submitted in writing to WorldTrips along with supporting documents and receipts. Supporting documents include the insured’s ID, copy of passport, copies of all receipts, bills, itemized services, and a claim form.</p>
                                    <button class="view_claim">File/View Claim</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


<!-- Modal -->
<div class="modal fade" id="cancelpolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancle Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <h2>Claims Information</h2>
         <p>
            Life Advice believes filing travel insurance claims should be a straightforward, stress-free process. Whether you need to file, update, or appeal a claim, we’ve got you covered. We care about keeping our travelers safe and secure because we're travelers too.
         </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





@endsection