@extends('frontend.layouts.main')
@section('tittle')
<title>Customer Portal</title>
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
               <h3>{{ $r->fname }} {{ $r->lname }} @if($r->policy_title) | {{ $r->policy_title }} @endif</h3>
               @if($r->policy_status == 'pending')
               <span class="badge badge-warning">{{ $r->policy_status }}</span>
               @endif
               @if($r->policy_status == 'rejected')
               <span class="badge badge-danger">{{ $r->policy_status }}</span>
               @endif
               @if($r->policy_status == 'approved')
               <span class="badge badge-success">{{ $r->policy_status }}</span>
               @endif
            </div>
            <div class="d-flex">
               <div class="date">
                 <span> Effective : </span>{{ Cmf::date_format($r->start_date) }}
               </div>
               <div class="date px-2">
                 <span> To : </span>{{ Cmf::date_format($r->end_date) }}
               </div>
            </div>
            <div class="d-flex policyid justify-content">
               <span>Policy Id: 10000{{$r->sales_id}} </span>
               <a href="">View Details</a>
            </div>
         </div>
         @endforeach
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