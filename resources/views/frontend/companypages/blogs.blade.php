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
<section class="chooses-blogs choose-us-area-five pb-70">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               
               @foreach(DB::table('blogs')->get() as $r)
               <div class="col-md-4">
                  <div class="card blank-card mt-3">
                     <div class="card-body">
                        <div class="blog-image-card">
                           <img src="{{ url('public/images') }}/{{ $r->image }}">
                        </div>
                        <div class="card-content">
                           <h3>{{ $r->title }}</h3>
                           <p>{{ $r->content }}</p>
                        </div>
                        <div class="blogbutton">
                           <a href="blog-detail.php">Read More..</a>
                        </div>
                     </div>
                  </div>
               </div>
                            @endforeach
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-widget fl-wrap mt-3">
               <div class="box-widget-content">
                   <div class="search-widget fl-wrap">
                       <form action="#" class="d-flex">
                           <input name="se" id="se12" type="text" class="search form-control" placeholder="Search..." value="">
                           <button class="search-submit2" id="submit_btn12"><i class="fa fa-search"></i> </button>
                       </form>
                   </div>
                  <div class="single-widget bg-secondary p-3 mt-3 rounded">
                        <h3 class="text-white">Useful Products<br><hr class="hr-footer"></h3>

                        <ul>
                            <li>
                                <a href="{{ url('life-insurance')}}">
                                        Life Products
                                    </a>
                            </li>
                            <li>
                                <a href="{{ url('visitor-insurance')}}">
                                        Visitor Products
                                    </a>
                            </li>
                            <li>
                                <a href="{{ url('investment-insurance')}}">
                                        Investment Products
                                    </a>
                            </li>
                            <li>
                                <a href="{{ url('travel')}}">
                                        Travel Products
                                    </a>
                            </li>
                        </ul>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection