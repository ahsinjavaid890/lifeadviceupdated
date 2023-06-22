@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
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
         <div class="row faq">
            <div class="col-md-3 pb-4 mb-4 faqlinks">
               <div class="">
                  <div class="card">
                     <div class="card-body p-0">
                        <div class="card-list-heading p-3">
                            <h3 style="color: #2b3481;">Browse by topic</h3>
                            <hr>
                        </div>
                        <ul class="tabs">
                           @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                           <li class="tab-link @if($loop->first) current @endif" data-tab="tab-{{ $r->id }}">
                              <!-- <img src="{{ url('public/images') }}/{{ $r->icon }}" alt="{{ $r->name }}"> -->
                              <h3>{{ $r->name }}</h3>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                  @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                  <div class="col-md-12" style="padding-left: inherit;">
                     <div id="tab-{{ $r->id }}" class="tab-content @if($loop->first) current @endif">
                        <div class="accordion" id="accordionExample{{ $r->id }}" style="background: #f4f7fa;">
                           @foreach(DB::table('frequesntlyaskquestions')->where('website' , 'lifeadvice')->where('category_id' , $r->id)->orderby('order' , 'asc')->get() as $f)
                           <div class="card faqquestion {{ $f->order }}" style="border-radius: 16px !important;margin-top: 13px;">
                              <div class="card-header" id="faq{{ $f->id }}" style="background-color: #ffffffff;">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content{{ $f->id }}" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-plus"></i> {{ $f->question }}
                                    </button>
                                 </h5>
                              <div id="faq_content{{ $f->id }}" class="collapse" aria-labelledby="faq{{ $f->id }}" data-parent="#accordionExample{{ $r->id }}" style="">
                                 <hr>
                                 <div class="card-body p-4">
                                   {!! $f->answer !!}
                                 </div>
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