@extends('frontend.layouts.main')
@section('tittle')
<title>Customer Portal</title>
<link rel="canonical" href="{{Request::url()}}">
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
   .activenav{
          background-color: #2b3481;
       color: white;
       border-bottom-right-radius: 4px;
       border-bottom-left-radius: 5px;
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
         @foreach($sales as $r)
         <div class="card mb-3">
            <div class="d-flex justify-content">
               <h3></h3>
               @if($r->status == 'Pending')
               <span class="badge badge-warning">{{ $r->status }}</span>
               @endif
               @if($r->status == 'Cancel')
               <span class="badge badge-danger">{{ $r->status }}</span>
               @endif
               @if($r->status == 'Approved')
               <span class="badge badge-success">{{ $r->status }}</span>
               @endif
            </div>
            <div style="color: #3f3e81;font-weight: 900;">{{ DB::table('wp_dh_products')->where('pro_id' , $r->product_id)->first()->pro_name }}</div>
            <div class="d-flex">
               <div class="date">
                 <span> Effective : </span>{{ Cmf::date_format($r->start_date) }}
               </div>
               <div class="date px-2">
                 <span> To : </span>{{ Cmf::date_format($r->end_date) }}
               </div>
            </div>
            @if($r->status == 'Approved')
            <div class="d-flex">
               <div class="date">
                 <span> Policy Number : </span>{{ $r->policy_number }}
               </div>
            </div>
            <div class="d-flex">
               <div class="date">
                 <span> Purchase Confirmation Document : </span> <a href="{{ url('public/images') }}/{{ $r->policydocument }}"><i class="fa fa-download"></i> Download</a>
               </div>
            </div>
            @endif
            <div class="d-flex policyid justify-content">
               <span>Reffrence Id: {{$r->reffrence_number}} </span> 
               <a href="{{ url('policydetail') }}/{{ $r->id }}">View Details</a>
            </div>
         </div>
         @endforeach
      </div>
      <div class="col-md-3">
         <div class="card">
            <div class="card-body p-0">
               <ul class="nav nav-tabs" role="tablist" style="display: block;border-bottom: unset;">
                  <li class="nav-item">
                     <a class="nav-link activenav" href="{{ url('profile')}}">Purchased Policies</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('requests')}}">Requests</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                  </li>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
               </ul>
               <div class="divider"></div>
               <h3 class="hthreeforextralinks">Helpfull Links</h3>
               <ul>
                  <li><a href="{{ url('faq') }}" class="helpfulllinks"> Frequently Asked Questions </a></li>
                  <li><a href="{{ url('privacypolicy') }}" class="helpfulllinks"> Privacy Policy </a></li>
                  <li><a href="{{ url('contactus') }}" class="helpfulllinks"> Contact Us </a></li>
                  <li><a href="{{ url('claim') }}" class="helpfulllinks"> Claim Form </a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection