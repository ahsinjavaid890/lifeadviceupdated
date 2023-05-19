@php
    $url = request()->segment(count(request()->segments()));
    $secondsection = DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $url)->get();
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<section class="claim-process  pb-5 pt-5">
   <div class="container-homepage">
       <div class="row">
           <div class="col-md-6 image-center">
               <img src="{{ url('public/images') }}/{{ $page->section_two_vector }}">
           </div>
           <div class="col-md-6">
            <div class="claim-process-heading mt-5">
                   {!! $page->section_two_description !!}
               </div>
           </div>
       </div>
   </div>
</section>