@extends('frontend.layouts.main')
@section('content')
@php
    $firstsection = DB::table('travelpages')->where('url' , 'blogs')->first();
@endphp
<div class="health-inssurance-hero-banners super-hero">          
    <div class="container-homepage">
        <div class="row mb-3">
            <div class="col-md-12 hero-images">
                <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
                    background-position: 50% 70%;
                    background-size: 100%;
                    background-repeat: no-repeat;">
                </div>
            </div>
        </div>
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
                            @foreach(DB::table('blogcategories')->get() as $r)
                                <li class="nav-item">
                                    <a  class="nav-link @if($loop->first) active @endif" data-toggle="tab-{{$r->id}}" role="tab"href="{{ url('category') }}/{{ $r->url }}">{{ $r->name }}</a>
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
                <div class="col-md-4 mb-3tab-content @if($loop->first) active @endif">
                    <div class="card blank-card">
                         <div class="card-body">
                            <div class="blog-image-card">
                               <img src="{{ url('public/images') }}/{{ $r->image }}">
                            </div>
                            <div class="card-content">
                               <h3>{{ $r->title }}</h3>
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
        </div>
    </div>
</div>
</section>
@endsection