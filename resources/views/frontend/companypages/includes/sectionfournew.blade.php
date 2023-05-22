@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<section class="claim-process  bg-white pb-5 pt-5" style="background-color: #f9fafc !important;">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                   <img src="{{ url('public/images') }}/{{ $page->section_four_vector }}">
               </div>
               <div class="col-md-6">
                    {!! $page->section_four_description !!}
               </div>
           </div>
       </div>
   </section>