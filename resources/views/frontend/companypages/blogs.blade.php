@extends('frontend.layouts.main')
@section('tittle')
<title>Travel Insurance</title>
@endsection

@section('content')
<div class="health-inssurance-hero-banner" style="background-color: #262566;">
   <div class="container">
      <div class="row">
         <div class="col-md-6" style="margin-top: 100px;">
            <div class="herrotexts">
               <h2 style="font-size:3rem;" class="wow fadeInUp text-white product-heading" data-wow-delay=".4s">Our Blogs</h2>
            </div>
         </div>
         <div class="col-md-6">
            <div class="hero-image">
               <img src="{{ asset('public/front/img/blog/blogsheader.png')}}">
            </div>
         </div>
      </div>
   </div>
</div>

@endsection