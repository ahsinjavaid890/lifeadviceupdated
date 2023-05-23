@extends('frontend.layouts.main')
@section('tittle')
<title>User Dashboard – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/udashboad.css')}}">
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
   .col-md-9 .card{
      border-left: 5px solid #2b3481;
   }
   .heading-2{
      color: #2b3481!important;
       font-weight: 800;
       font-size: 3rem;
       line-height: 3.5rem;
       margin-bottom: 48px;
   }
   .justify-content{
      justify-content: space-between;
   }
   .col-md-9 .card .card-footer{
      background-color: white;
      border-top: none;
   }
   .justify-content .badge{
       height: 19px;
       padding: 0 9px;
       height: 23px;
       border-radius: 4px;
       font-size: 12px;
       font-weight: 600;
       line-height: 23px;
       text-transform: capitalize;
       color: #fff;
   }
   .justify-content .badge-danger{
      background: #fff;
      border: 1px solid #eb5658;
      color: #eb5658;
   }
   .justify-content .badge-warning{
      background: #fff;
      border: 1px solid #ffc107;
      color: #ffc107;
   }
   .justify-content h3{
      color: #2b3481;
   }
   .date span{
      color: #3f3e81;
    font-weight: 900;
   }
   .policyid span{
       padding: 4px 7px;
       color: #2b3481;
       background-color: #edf5fc;
       border-radius: 3px;
       margin-top: 15px;
       font-size: 14px;
       font-weight: 600;
       line-height: 24px;
   }
   .policyid a{
       padding: 4px 7px;
       color: #2b3481;
       background-color: #edf5fc;
       border-radius: 3px;
       margin-top: 15px;
       font-size: 14px;
       font-weight: 600;
       line-height: 24px;
   }
</style>
<div class="container mb-5" style="margin-top: 8rem;">
   <div class="row mt-5">
      <div class="col-md-12">
         <div class="heading-wrapper">
            <h1 class="heading-2 text-md-center">Policy Detail</h1>
         </div>
      </div>
      
   </div>
   <div class="row mt-5">
      <div class="col-md-9">
         <div class="card shadow profile_cards">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="policy d-flex">
                        <p class="policyid">
                           <span class="text-dark">Policy ID :</span>
                           10000{{ $data->sales_id }}
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