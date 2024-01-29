@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.mainblog')
<style>
@media only screen and (min-width: 200px) and (max-width: 300px){
      .mean-container a.meanmenu-reveal span {
        top: 7px !important;
        margin-top: -2px !important;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 1000px){
.mean-container a.meanmenu-reveal span {
    top: 7px !important;
    margin-top: -2px !important;
}
  }
  @media only screen and (min-width:1000px) and (max-width:1100px) {
.card-responsive {
    height: 100% !important;
 }
}
@media only screen and (min-width:1200px) and (max-width:1300px) {
    .card-responsive{
        height: 470px;
     }
    }
    @media only screen and (min-width:761px) and (max-width:900px) {
    .card-responsive p {
    font-size: 12px ; 
    }
    .card-responsive .card-content h3 {
        font-size: 15px;
    }
    .chooses-blogs-responsive {
    margin-top: 0px !important;
}
    }
    @media only screen and (min-width:901px) and (max-width:1000px) {
        .card-responsive {
            height: 460px;
        }
        .chooses-blogs-responsive {
    margin-top: 0px !important;
}
    }
    @media only screen and (min-width: 2000px) and (max-width:2100px){
        .card-responsive .card-content h3 {
            font-size: 23px;
        }
        .card-responsive p {
            font-size: 17px;
        }
    }
    @media only screen and (min-width:201px) and (max-width:300px) {
        .card-responsive {
            height: 100% ;
        }
        .blog-responsive{
            margin-top: 72px;
        }
    }
    @media only screen and (max-width: 700px){
.chooses-blogs-responsive {
    margin-top: 90px !important;
}
}
    .card-responsive{
        height: 100%;
    }
</style>
<section class="chooses-blogs chooses-blogs-responsive choose-us-area-five pb-70" style="background-color:#f4f7fa;">
<div class="container-homepage container-blog">
    <div class="row">
        <div class="col-md-3 blogs-card">
            <div class="card shadow mobile-display-none" style="border-radius:16px;">
                <div class="card-body p-0">
                    <div class="tabssidebar">
                        <style type="text/css">
                            .nav-tabs .nav-link.active{
                                    border-left: 4px solid #2b3481 !important;
                                }
                        </style>
                        <div class="card-list-heading p-3">
                            <h3 style="color: #2b3481;">Browse by Topics</h3>
                            <hr>
                        </div>
                        <ul class="parent-list nav nav-tabs d-block" role="tablist">
                             <li class="nav-item ">
                                <a href="{{ url('blogs') }}" class="nav-link active"  role="tab" >All Topics</a>
                            </li>
                            @foreach(DB::table('blogcategories')->where('website' , 'lifeadvice')->get() as $r)
                                <li class="nav-item">
                                    <a href="{{ url('category') }}/{{ $r->url }}" class="nav-link" data-toggle="tab-{{$r->id}}"  role="tab" >{{ $r->name }}</a>
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
                 <div class="card blank-card card-responsive">
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