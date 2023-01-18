@php
    $url = request()->segment(count(request()->segments()));
    $secondsection = DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $url)->get();
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<section class="claim-process bg-white pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                 {!! $page->section_eight_description_one !!}
               </div>
               <div class="col-md-6">
                 {!! $page->section_eight_description_two !!}
               </div>
           </div>
       </div>
   </section>