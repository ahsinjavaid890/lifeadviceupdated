@php
    $url = request()->segment(count(request()->segments()));
    $thirdsection = DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $url)->get();
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<section class="benefits ptb-100 ah-benefits">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2>{!! $page->sectionthreeheading !!}</h2>
            <div class="container">
                <p>{!! $page->sectionthreedescription !!}</p>
            </div>
        </div>
        <div class="width_website center_div position_relative">
           <div class="partner_block">
              <div class="ta_center">
                 <div class="how_to_buy_steps">
                    <div class="how_to_buy_steps_connection"></div>
                    @foreach($thirdsection as $key => $r)
                    <div class="step @if($key == 0) step_1 @endif @if($key == 1) step_2 @endif @if($key == 2) step_4 @endif  @if($key == 3) step_3 @endif">
                       <div  style="background-image: url('{{ url('') }}/public/images/{{ $r->vector  }}');" class="step_name">{!! $r->heading !!}</div>
                       <div class="step_text">
                            <p class="description">
                                {!! $r->description !!}
                            </p>
                       </div>
                    </div>
                    @endforeach
                 </div>
              </div>
              <div class="clear"></div>
           </div>
        </div>
    </div>
</section>
