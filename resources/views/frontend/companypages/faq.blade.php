@extends('frontend.layouts.main')

@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
    $secondsection = DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $url)->get(); 
@endphp 
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/faq.css')}}">

@section('content')
@include('frontend.companypages.includes.mainblog')
   <section class="first-section-of-page">
      <div id="faq" class="container py-5">
            <style type="text/css">
               .faqlinks li:after{
                  content: none;
               }
               ul.tabs li.current {
                  background: #3D4B5D;
               }
               .faqlinks li.active {
                  background: #3D4B5D;
                  color: #3D4B5D !important;
               }
               .faqlinks li.current{
                  color: #3D4B5D;
               }
               .tab-content{
                  display: none;
                  background: white;
               }
               .tab-content.current{
                  display: inherit;
               }
            </style>
         <div class="row faq">
            <div class="col-md-12 pb-4 mb-4 faqlinks">
               <div class="row">
                  <ul class="tabs">
                     @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                     <li class="tab-link @if($loop->first) current @endif" data-tab="tab-{{ $r->id }}">
                        <img src="{{ url('public/images') }}/{{ $r->icon }}" alt="{{ $r->name }}">
                        <h3>{{ $r->name }}</h3>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
            @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-{{ $r->id }}" class="tab-content @if($loop->first) current @endif">
                  <div class="accordion" id="accordionExample{{ $r->id }}">
                     @foreach(DB::table('frequesntlyaskquestions')->where('category_id' , $r->id)->orderby('order' , 'asc')->get() as $f)
                     <div class="card">
                        <div class="card-header" id="faq{{ $f->id }}">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content{{ $f->id }}" aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-plus"></i> {{ $f->question }}
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content{{ $f->id }}" class="collapse" aria-labelledby="faq{{ $f->id }}" data-parent="#accordionExample{{ $r->id }}" style="">
                           <div class="card-body">
                             {!! $f->answer !!}
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function(){
      $('ul.tabs li').click(function(){
         var tab_id = $(this).attr('data-tab');
         $('ul.tabs li').removeClass('current');
         $('.tab-content').removeClass('current');
         $(this).addClass('current');
         $("#"+tab_id).addClass('current');
      })
   
   })
</script>
@endsection