@extends('frontend.layouts.main')
@section('tittle')
<title>User Dashboard – Get Tips, Online Quotes for Life Insurance</title>
<link rel="canonical" href="{{Request::url()}}">
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
   .policyid{
      background-color: #8cc53f;
      color: white;
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
   h5#exampleModalLabel {
       color: white;
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
   .form-control{
      height: 42px !important;
      border-radius: 10px;
   }
   .iftext{
      color: #2b3481!important;
      font-weight: 900;
      font-size: 16px;
   }
   .readtext{
      color: #2b3481!important;
      font-weight: 900;
      font-size: 14px;
      margin-left: 10px;
   }
   #iconferm{
      height: 22px;
      width: 22px;
   }
   .modal-header{
      background-color: #2b3481;
   }
   .divider{
          border-top: 1px solid #cfd9e8;
    margin: 20px -24px;
   }
   .hthreeforextralinks{
      display: block;
    margin-bottom: 24px;
    line-height: 20px;
    color: #2b3481 !important;
   }
   .helpfulllinks{
      font-size: 15px;
    line-height: 19px;
    color: #1b8fe4;
    font-weight: 700;
    margin-bottom: 1rem!important;
   }
   .purchaseconfermationdownload{
    height: 40px;
    font-size: 14px;
    font-weight: 700;
    line-height: 16px;
    text-align: left;
    border-radius: 20px;
    line-height: 18px;
    color: #2b3481;
    color: #fff;
    background-color: #2b3481;
    padding: 0 24px;
    border: 1px solid #2b3481;
    background: #2b3481;
    transition: .3s ease-in-out;
    outline: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
   }
   .purchaseconfermationdownload:hover{
      border: 1px solid #2b3481;
      color: #2b3481;
      background-color: white;
   }
   .purchaseconfermationdownload i{
      margin-right: 10px;
   }
   .nav-tabs {
            border-bottom: none
        }
   .dropdown-menu{
            width: 300px;
        }
   .coverage{
      background-color: #8cc53f!important;
   }
   a{
      color: black;
   }

   

   /* .claim_button{
      
      color: #8cc53f;
   } */
</style>


<div class="container" >
   <div class="row" style="margin-top: 100px">
       <div class="col-md-12">
           <div class="heading-wrapper">
               <h1 style="font-size: 35px;margin-bottom:20px" class="heading-2 text-md-start">Policy Detail</h1>
           </div>
       </div>

   </div>
   <ul class="nav flex-column justify-content-start">
       <li class="nav-item">
           <a class="nav-link " href="{{ url('profile') }}">Purchased Policies</a>
       </li>
       <li class="nav-item">
           <a class="nav-link activenav" href="{{ url('requests') }}">Requests</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
               Out</a>
       </li>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
       </form>
       <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">Helpful Links</a>
           <div class="dropdown-menu">
               <a class="dropdown-item helpfulllinks" href="{{ url('faq') }}"> Frequently Asked Questions</a>
               <a class="dropdown-item helpfulllinks" href="{{ url('privacypolicy') }}">Privacy Policy </a>
               <a class="dropdown-item helpfulllinks" href="{{ url('contactus') }}">Contact Us</a>
               <a class="dropdown-item helpfulllinks" href="{{ url('claim') }}">Claim Form</a>
           </div>
       </li>
   </ul>


</div>



<div class="container mb-5" style="margin-top: 2rem;">
   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Success!</strong> {{ session()->get('message') }}
     </div>
   @endif 
   <div class="row">
      <div class="col-md-12"> 
         
      </div>
   </div>
   <div class="row mt-2">
      <div class="col-md-12">
         <div class="card shadow profile_cards">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="policy d-flex">
                        <p class="policyid">
                           <span class="text-dark">Reffrence ID :</span>
                           {{ $data->reffrence_number }}
                        </p>
                     </div>
                     <div class="row mt-5">
                        <div class="col-md-6">
                           <div class="user_data">
                              <label>Policy Name</label>
                              <h5>{{ DB::table('wp_dh_insurance_plans')->where('id' , $data->plan_id)->first()->plan_name }}</h5>
                           </div>
                           <div class="user_data">
                              <label>Purchase Date</label>
                              <h5>{{ Cmf::date_format($data->created_at) }}</h5>
                           </div>
                           <div class="user_data">
                              <label>Deductible</label>
                              <h5>{{ $data->deductibles }}</h5>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="user_data">
                              <label>Destination</label>
                              <h5>{{ $data->primary_destination }}</h5>
                           </div>
                           <div class="user_data">
                              <label>Duration</label>
                              <h5>{{ $data->duration }}</h5>
                           </div>
                           <div class="user_data">
                              <label>Policy Maximum</label>
                              <h5>${{ $data->coverage_ammount }}</h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="coverage" style="background-color: #8cc53f">
                        <h3 style="color:white;">Coverage Duration</h3>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="effiate_date">
                                 <label>Effective Date</label>
                                 <h6 style="color:white;">{{ Cmf::date_format($data->start_date) }}</h6>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="expire_date">
                                 <label>Expire On</label>
                                 <h6 class="text-danger">{{ Cmf::date_format($data->end_date) }}</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     </div><hr>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="claim_inforamtion text-right">
                              <button class="claim_button" data-toggle="modal" data-target="#changepolicy">Change Request</button>
                              <button class="claim_button" data-toggle="modal" data-target="#cancelpolicy">Refund Request</button>
                              <button style=" margin-right: -12px; " class="claim_button extend" data-toggle="modal" data-target="#extendpolicy"><i class="fa fa-refresh mr-2"></i>Extend</button>
                           </div>
                        </div>
                     </div>
                     <hr>
                     @if($data->policydocument)
                     <div class="d-flex justify-content">
                        <div class="purchasedocument">
                           <h3 style="color: #2b3481!important">Purchase Confirmation Document</h3>
                        </div>
                        <div>
                           <a class="purchaseconfermationdownload" download="" href="{{ url('public/images') }}/{{ $data->policydocument }}"><i class="fa fa-download"></i> Download Purchase Confirmation </a>
                        </div>
                     </div>
                     <hr>
                     @endif
                     <h3 style="color: #2b3481!important">Claims Information</h3>
                     <p>Life Advice Insurance Inc believes that submitting life insurance claims should be a seamless, hassle-free process. We have got you covered. We are devoted to ensuring the peace of mind of our policyholders because we too understand the value of life's security.</p>
                     <h3 style="color: #2b3481!important">How to File Claims</h3>
                     <p>All claims must be sent in writing to Life Advice Insurance Inc, along with necessary supporting documentation and receipts. These supporting documents should include the insured’s ID, copies of all relevant bills, detailed descriptions of services used, and a completed claim form</p>
                     <h3 style="color: #2b3481!important">Claim form</h3>                      
                     <p>Our dedicated claims team is always available to provide guidance and assistance throughout the process, ensuring that your claim is handled swiftly and sympathetically.</p>
                     <p>At Life Advice Insurance Inc, we're more than just an insurance provider; we're here to support you every step of the way.</p>
                  </div>
               </div>
      </div>
      
   </div>
</div>


<!-- Modal -->
<div class="modal fade" id="changepolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style=" border-left: 5px solid #2b3481; border-radius: 20px; ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" method="POST" action="{{ url('changerequest') }}">
            @csrf
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Reffrence ID</label>
                     <input readonly type="text" value="{{ $data->reffrence_number }}" class="form-control" name="reffrence_number">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Policy Number</label>
                     <input type="text" class="form-control"  value="{{ $data->policy_number }} name="policy_number" required>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Efective Date</label>
                     <input readonly value="{{ $data->start_date }}" type="text" class="form-control" name="start_date">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Return Date</label>
                     <input readonly value="{{ $data->end_date }}" type="text" class="form-control" name="end_date">
                  </div>
               </div>
            </div>
            @php
               $startdate = strtotime($data->start_date);
               $enddate = strtotime($data->end_date);
               $datediff = $enddate - $startdate;
               $numberofdays =  round($datediff / (60 * 60 * 24));
            @endphp
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>New Efective Date</label>
                     <input required onchange="getdate(this.value)" type="date" class="form-control" name="new_effective_date">
                  </div>
               </div>
               <script>
                  function getdate(id) {
                    var someDate = new Date(id);
                    var numberOfDaysToAdd = {{ $numberofdays }};
                    someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
                    var date = someDate.getMonth() + '/' + someDate.getDate() + '/' + someDate.getFullYear();
                    $('#newreturndate').val(date);
                  }
               </script>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>New Return Date</label>
                     <input readonly required id="newreturndate" type="text" class="form-control" name="new_return_date">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label>Upload Document</label>
                     <input type="file" style="height:50px !important;" class="form-control" name="document">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <span class="iftext">The start date of the policy will only be changed if:</span><br><br>
                     <ul style="list-style:unset;margin-left: 15px;">
                        <li>The policy has not expired.</li>
                        <li>The insured has not travelled to Canada during the current policy period.</li>
                        <li>Proof of the changed itinerary such as a flight ticket, boarding pass, or stamp on the passport is provided. If the policy has been in effect for more than six months, we require a copy of all passport pages as well.</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <input type="checkbox" id="iconferm" required > <label class="readtext" for="iconferm">I Read all the Points and i Confirm all Information is Correct</label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-right">
                  <div class="form-group">
                     <button type="submit" class="claim_button">Send Request</button>
                  </div>
               </div>
            </div>
            
         </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="cancelpolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style=" border-left: 5px solid #2b3481; border-radius: 20px; ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Refund Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" method="POST" action="{{ url('refundrequests') }}">
            @csrf
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Reffrence ID</label>
                     <input readonly type="text" value="{{ $data->reffrence_number }}" class="form-control" name="reffrence_number">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Policy Number</label>
                     <input type="text" class="form-control" name="policy_number" required>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Efective Date</label>
                     <input readonly value="{{ $data->start_date }}" type="text" class="form-control" name="start_date" required>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Return Date</label>
                     <input type="date" class="form-control" name="return_date" required>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Refund Form</label>
                     <input type="file" style="height:50px;" class="form-control" name="refund_form" required>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Proof Of Return</label>
                     <input type="file" style="height:50px;" class="form-control" name="proof_of_return" required>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-right">
                  <div class="form-group">
                     <button type="submit" class="claim_button">Send Request</button>
                  </div>
               </div>
            </div>
            
         </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="extendpolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style=" border-left: 5px solid #2b3481; border-radius: 20px; ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Extend Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="{{ url('extendpolicy') }}">
            @csrf
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Reffrence ID</label>
                     <input readonly type="text" value="{{ $data->reffrence_number }}" class="form-control" name="reffrence_number">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Policy Number</label>
                     <input required placeholder="Enter Policy Number" type="text" class="form-control" name="policy_number">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Efective Date</label>
                     <input readonly value="{{ $data->start_date }}" type="text" class="form-control" name="start_date">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Return Date</label>
                     <input readonly value="{{ $data->end_date }}" type="text" class="form-control" name="end_date">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label>New Return Date</label>
                     <input type="date" class="form-control" name="new_return_date">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <span class="iftext">This policy will only be extended if:</span><br><br>
                     <ul style="list-style:unset;margin-left: 15px;">
                        <li>The insured(s) has/have not incurred a claim under this policy</li>
                        <li>The insured(s) agree that expenses related to medical conditions present on the date of application for an extension will not be covered by this policy</li>
                        <li>Coverage under this policy is in force at the time the request for an extension is received</li>
                        <li>The insured(s) pay any additional required premium for such extension</li>
                        <li>The extension period applied for, plus the original policy period do not exceed the maximum number of days allowable for the selected plan.</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <input type="checkbox" id="iconferm" required > <label class="readtext" for="iconferm">I Read all the Points and i Confirm all Information is Correct</label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-right">
                  <div class="form-group">
                     <button type="submit" class="claim_button">Send Request</button>
                  </div>
               </div>
            </div>
            </form>
      </div>
      
    </div>
  </div>
</div>
@endsection