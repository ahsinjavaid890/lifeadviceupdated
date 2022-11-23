@extends('frontend.layouts.main')
@section('tittle')
<title>Qoutes – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
   .profile_card{
      border-radius: 20px;
      border-left: 8px solid #262566;
   }
   .policy_card{
      border-radius: 20px;
   }
   .coverage{
      background-color: #262566;
      color: white;
      padding: 10px;
      border-radius: 10px;
   }
   .coverage .condition{
      background: #a5ada5;
      max-width: 20%;
      border-radius: 0 8px;
      position: absolute;
      top: 0px;
      padding: 5px;
      right: 15px;
   }
   .communication i{
      color: #ffff1e;
      font-size: 25px;
   }
   .communication{
      font-size: 13px;
   }
   .policyid{
      background: #ccebc4;
      padding: 1px;
      border-radius: 0 10px;
      margin-right: 17px;
   }
   .user_des{
      margin-top: -15px;
   }
   .covered i{
      font-size: 20px;
      color: red;
      font-weight: 900;
   }
   .list-plans{
      justify-content: end;
   }
   .list-plans li {
      color: gray;
      margin-right: 40px;
      font-size: 16px;
      font-weight: bolder;
   }
   .dowload_button{
      align-items: baseline;
   }
   .dowload_button .btn {
      background-color: #262566;
      border: none;
      color: white;
      padding: 8px 10px;
      cursor: pointer;
      font-size: 16px;
      margin-right: 45px;
   }
   .claim_button{
      background: transparent;
      border: 3px solid #262566;
      padding: 8px;
      border-radius: 37px;
      margin-right: 19px;
      font-size: 15px;
      color: #262566;
      font-weight: 800;
   }
   .extend{
      background-color: #262566 !important;
      color: white;
   }
   .need_claim{
      max-width: 57%;
   }
   .view_claim{
      background: transparent;
      border: 3px solid #262566;
      padding: 8px;
      border-radius: 37px;
      margin-right: 19px;
      font-size: 15px;
      color: #262566;
      font-weight: 800;
   }
   .location_desc i {
      color: #262566;
      font-size: 20px;
   }
   .claim_form a{
      color: skyblue;
      font-size: 18px;
      font-weight: 800;
   }
   .claim_form i{
      color: #262566;
      margin-right: 10px;
   }
   .claim_assistance{
      color: white;
      background: #262566;
      padding-top: 19px;
   }
   .policie_check{
      width: 20px;
      margin-right: 8px;
   }
   .policies_heading span{
      font-size: 20px;
   }
   .helpful_links li{
      font-size: 17px;
      margin-top: 21px;
      color: #262566;
      font-weight: bold;
   }
</style>
<div class="container mb-5" style="margin-top: 8rem;">
   <div class="row">
      <div class="col-md-9">
         <div class="card shadow profile_card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="username">
                        <h2 class="text-dark">manish sharda</h2>
                     </div>
                     <div class="user_des mb-4">
                        <p>Travel Medical Coverage to Canada</p>
                     </div>
                     <div class="policy d-flex">
                        <p class="policyid">
                           <span class="text-dark">Policy ID :</span>
                           VS191278
                        </p>
                        <p><a href="javascript:void(0)">(Where can I find this?)</a></p>
                     </div>
                     <div class="light">
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
                        <div class="condition mt-5">
                           <p class="covered align-items-baseline"><i class="fa fa-remove mr-2"></i>Pre-Existing Conditions: Not Covered</p>
                              <b class="bold"><a href="javascript:void(0)" class="">View Complete List of Exclusions<i class="fa-solid fa-up-right-from-square ml-2"></i></a></b>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                           <div class="text-right">
                              <ul class="d-flex list-plans">
                                 <li><a href="javascript:void">Benefit Details</a></li>
                                 <li><a href="javascript:void">COVID-19 Information</a></li>
                                 <li><a href="javascript:void">Which doctor can I go to?</a></li>
                                 <li><a href="javascript:void">Plan FAQ</a></li>
                                 </ul>
                           </div>
                        </div>
                     </div><hr>
                     <div class="row">
                        <div class="col-md-5">
                           <div class="dowload_policy">
                              <h4>Download Policy Documents</h4>
                           </div>
                        </div>
                        <div class="col-md-7">
                           <div class="d-flex dowload_button">
                              <button class="btn"><i class="fa fa-download"></i> ID Card</button>
                              <button class="btn"><i class="fa fa-download"></i> Cover Letter</button>
                              <button class="btn"><i class="fa fa-download"></i> Visa Letter</button>
                           </div>
                           <div class="download_all mt-3">
                              <button class=""><i class="fa fa-download text-danger font-20"></i> Dowload all</button>
                           </div>
                        </div>
                     </div><hr>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="claim_inforamtion text-right">
                              <button class="claim_button">Cancel Policy</button>
                              <button class="claim_button">Request Correction</button>
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
                           <div class="row mt-4">
                              <div class="col-md-6">
                                 <div class="cliam_contact">
                                    <h5>Claims Contact Information</h5>
                                    <div class="location_desc d-flex align-items-baseline">
                                       <i class="fa fa-map-marker mr-2"></i><p>Address: Life Advice Insurance Inc, 912 Isaiah Place, Kitchener, ON, N2E0B6</p>
                                    </div>
                                    <div class="location_desc d-flex align-items-baseline">
                                       <i class="fa fa-phone mr-2"></i><p>+1-855-500-8999</p>
                                    </div>
                                    <div class="location_desc d-flex align-items-baseline">
                                       <i class="fa fa-envelope mr-2"></i><p>contact@lifeadvice.ca</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="claim_form">
                                    <h5>Claim Form(s)</h5>
                                    <a href="javascript:void()"><i class="fa fa-download"></i>Insurance Claim Form</a>
                                 </div>
                              </div>
                           </div>
                           <div class="row claim_assistance">
                              <div class="col-md-12">
                                <div class="contact_claim d-flex align-items-baseline">
                                    <div class="contact_img mr-5">
                                       <span class="contact_person"><img width="70" src="{{ asset('public/images/contact.svg')}}"></span>
                                    </div>
                                    <div class="need_claim">
                                       <h5>Need Claim Assistance?</h5>
                                       <p>If you have filed a claim and need assistance we are here to help you. <a href="javascript:void(0)">Please submit a request for assistance.</a></p>
                                    </div>
                                    <div class="further_question">
                                       <h3>Have further questions?</h3>
                                       <a href="javascript:void(0)"><img width="200" src="{{ asset('public/images/ask.svg')}}"></a>
                                    </div>
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card shadow policy_card">
                  <div class="card-body">
                     <div class="policies_heading">
                        <h2>Policies</h2>
                        <div class="d-flex">
                           <input type="checkbox"  class="policie_check">
                           <span>Active</span>
                        </div>
                        <div class="d-flex">
                           <input type="checkbox"  class="policie_check">
                           <span>Previous</span>
                        </div>
                     </div><hr>
                     <div class="helpful_links">
                        <h3>Helpful Links</h3>
                        <ul>
                           <li>Frequently Asked Questions</li>
                           <li>COVID-19 Information</li>
                           <li>Find a Doctor or Hospital</li>
                           <li>Claims Process</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection