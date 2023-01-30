@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.mainblog')

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
                  <div style="background-color: #2b3481;"  class="single-widget p-3 mt-3 rounded">
                    <h3 class="text-white">Useful Products<br><hr class="hr-footer"></h3>

                    <ul>
                        @foreach(DB::table('blogcategories')->get() as $r)
                        <li>
                            <a href="{{ url('category') }}/{{ $r->url }}">
                                    {{ $r->name }}
                                </a>
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