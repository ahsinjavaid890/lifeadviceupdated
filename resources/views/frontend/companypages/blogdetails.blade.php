@extends('frontend.layouts.main')
@section('content')
<div class="contact-box-wrap-blogs mt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block-box user-single-blog">
                    <div class="blog-thumbnail">
                        <img style="width: 100%;height: 400px;" src="{{ url('public/images') }}/{{ $data->image }}" alt="Blog">
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-entry-header">
                            <h2 class="entry-title">{{ $data->title }}</h2>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <ul class="entry-meta">
                                        <li><i class="icofont-calendar"></i>{{ $data->dated }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            {!! $data->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-widget fl-wrap">
                   <div class="box-widget-content">
                       <div class="search-widget fl-wrap">
                           <form action="blogs.php?" class="d-flex">
                               <input name="se" id="se12" type="text" class="search form-control" placeholder="Search..." value="">
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
</div>
@endsection