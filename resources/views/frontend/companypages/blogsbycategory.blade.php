@extends('frontend.layouts.main')
@php
    $category  = DB::table('blogcategories')->where('url' , $category->url)->where('website' , 'lifeadvice')->first()
@endphp
@section('tittle')
<title>Tips of {{ $category->name }}</title>
<meta name="DC.Title" content="Tips of {{ $category->name }}">
<meta name="rating" content="general">
<meta name="description" content="Tips of {{ $category->name }}">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Tips of {{ $category->name }}">
<meta property="og:description" content="Tips of {{ $category->name }}">
<meta property="og:site_name" content="{{ Cmf::get_store_value('site_name') }}">
<meta property="og:url" content="{{ URL::current() }}">
<link rel="canonical" href="{{ URL::current() }}">
<meta property="og:locale" content="it_IT">
<meta name="keywords" content="Tips of {{ $category->name }}">
@endsection
@section('content')
@php
    $firstsection = DB::table('travelpages')->where('url' , 'blogs')->first();
@endphp
<style type="text/css">
.step {
    height: 100%;
    background-color: #ffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 10px 24px rgb(87 106 134 / 20%);
    width: 47%;
    margin-top: 36px !important;
    padding: 20px 30px;
    text-align: left;
}
.health-inssurance-hero-banner {
    background-color: #2b3481;
}
.ageandcitizen input:focus-visible {
    outline: none;
    border-bottom: 1px solid #bbb !important;
}
.ageandcitizen input {
    border: 0 !important;
    border-bottom: 1px solid #bbb !important;
    width: 100% !important;
    height: 20px;
    padding: 0px;
}
</style>
<div class="blog_section">
    <div class="hero-content">
       <h1  class="heading-2 hero-heading">Tips of {{ $category->name }}</h1>
       <p  class="hero-heading-info"> Subscribe to our exclusive newsletter for the latest blog posts, travel <br> safety  tips and trip inspiration. </p>
       <div  class="hero-subscribe">
          <form novalidate="novalidate" action="{{route('news_letter')}}" class="v-form footer-subscribe-form" method="POST">
            @csrf
            <div class="subscribe-input">
                 <input type="text" name="email" >
                 @if(Session::Has('message'))
                 <div class="text-success" id="success-message">
                     {{  Session::get('message')}}
                 </div>
              @endif
              @if(Session::Has('error'))
                 <div class="text-danger">
                     {{  Session::get('error')}}
                 </div>
              @endif
              @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
             </div>
             <button class="button button-rounded button-white button-subscribe">
                <span>Subscribe</span>
             </button>
          </form>
       </div>
    </div>
    <div class="blo-img">
        <img src="{{ url('public/images/1950687292.png') }}" class="blog_img">
    </div>
</div>
<section class="chooses-blogs choose-us-area-five pb-70" style="background-color:#f4f7fa;">
<div class="container-homepage">
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow " style="border-radius:16px;">
                <div class="card-body p-0">
                    <div class="tabssidebar">
                        <style type="text/css">
                            .nav-tabs .nav-link.active{
                                    border-left: 4px solid #2b3481 !important;
                                    border-color: white;
                                }
                                .nav-tabs{
                                    border-bottom: 0 !important;
                                }
                        </style>
                        <div class="card-list-heading p-3">
                            <h3 style="color: #2b3481;">Browse by topic</h3>
                            <hr>
                        </div>
                        <ul class="parent-list nav  nav-tabs d-block" role="tablist">
                            <li class="nav-item ">
                                <a href="{{ url('blogs') }}" class="nav-link"  role="tab" >All Topics</a>
                            </li>
                            @foreach(DB::table('blogcategories')->where('website' , 'lifeadvice')->get() as $r)
                                <li class="nav-item">
                                    <a class="nav-link @if($category->url == $r->url) active @endif" data-toggle="tab-{{$r->id}}" role="tab"href="{{ url('category') }}/{{ $r->url }}">{{ $r->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
               @foreach($data as $r)
                <div class="col-md-4 mb-3">
                    <div class="card blank-card">
                         <div class="card-body">
                            <div class="blog-image-card">
                               <img src="{{ url('public/images') }}/{{ $r->image }}">
                            </div>
                            <div class="card-content">
                               <a href="{{ url('blog') }}/{{ $r->url}}"> <h3>{{ $r->title }}</h3></a>
                               @php
                                $blog_text = strip_tags($r->content);
                               @endphp
                               <p>{{ \Illuminate\Support\Str::limit($blog_text, 80, $end='...') }}</p>
                            </div>
                            <div class="blogbutton">
                               <a href="{{ url('blog') }}/{{ $r->url}}"><i class="fa fa-arrow-circle-right" style="font-size: 40px;color: #2b3481;"></i></a>
                            </div>
                         </div>
                      </div>
                </div>
                @endforeach 
            </div>
            <div style="margin-top:10px;" class="row">
                {!! $data->links('frontend.pagination') !!}
            </div>
        </div>
    </div>
</div>
</section>
@endsection