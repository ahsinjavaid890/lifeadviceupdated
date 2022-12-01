@php
    $url = request()->segment(count(request()->segments()));
    $thirdsection = DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $url)->get();
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<section class="claim-process bg-white pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                      {!! $page->sectionthreedescription !!}
               </div>
               <div class="col-md-6">
                
               </div>
           </div>
       </div>
   </section>
