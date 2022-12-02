@extends('frontend.layouts.main')
@section('content')
@php
    $firstsection = DB::table('travelpages')->where('url' , 'blogs')->first();
@endphp
<div class="health-inssurance-hero-banners super-hero">          
    <div class="container-homepage">
        <div class="row mb-3">
            <div class="col-md-6 hero-texts">
                <div class="herrotext super-hero-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="color:white;">{{ $category->name }} Blogs</h2>
                    <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">{{ $firstsection->sub_heading }}</span></h5>
                    @if($firstsection->main_button_text)
                    <div class="btns d-flex">
                        <div class="details">
                            <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6 hero-images">
                <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
                    background-position: 50% 70%;
                    background-size: 100%;
                    background-repeat: no-repeat;">
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
               @foreach($data as $r)
               <div class="col-md-4">
                  <div class="card blank-card mt-3">
                     <div class="card-body">
                        <div class="blog-image-card">
                           <img src="{{ url('public/images') }}/{{ $r->image }}">
                        </div>
                        <div class="card-content">
                           <h3>{{ $r->title }}</h3>
                           <p><?php $blog_text = strip_tags($r->content); echo substr($blog_text, 0, 400);?>... </p>
                        </div>
                        <div class="blogbutton">
                           <a href="{{ url('blog') }}/{{ $r->url}}">Read More..</a>
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
         <div class="col-md-3">
            <div class="box-widget fl-wrap mt-3">
               <div class="box-widget-content">
                   <div class="search-widget fl-wrap">
                       <form action="#" class="d-flex">
                           <input name="se" id="se12" type="text" class="search form-control" placeholder="Search..." value="">
                           <button class="search-submit2" id="submit_btn12"><i class="fa fa-search"></i> </button>
                       </form>
                   </div>
                  <div style="background-color: #262566;"  class="single-widget p-3 mt-3 rounded">
                        <h3 class="text-white">Useful Products<br><hr class="hr-footer"></h3>
                        <ul>
                            @foreach(DB::table('blogcategories')->get() as $r)
                            <li class="nav-item">
                                <a  class="nav-link active" data-toggle="tab" role="tab"href="{{ url('category') }}/{{ $r->url }}">{{ $r->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection