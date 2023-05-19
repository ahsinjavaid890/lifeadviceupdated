@php
    $url = request()->segment(count(request()->segments()));
    $products = DB::table('section_three_elements')->where('type' , 'productcards')->where('page' , $url)->get();
@endphp
<div class="check-products check-product mt-5 pb-5 pt-5">
   <div class="container-homepage">
      <div class="policies-heading text-center">
          <h2><span>Check Our Other Products</span></h2>
      </div>
      <hr>
      <div class="row mt-5 pb-5">
         @foreach($products as $r)
          <div class="col-md-4 product-cards">
              <div class="card slider-card border-0">
                <div class="card-body text-center">
                   <div class="simple-online-transparent-slider">
                      <img src="{{ url('public/images') }}/{{ $r->vector }}">
                   </div>
                   <div class="slider-heading">
                      {!! $r->heading !!}
                   </div>
                   <div class="slider-pargraph">
                      {!! $r->description !!}
                   </div>
                </div>
                @if($r->button_text)
                <div class="text-center">
                   <a class="btn btn-primary product-buttons" href="{{ $r->button_link }}">{{ $r->button_text }}</a>
                </div>
                @endif
             </div>
          </div>
          @endforeach
      </div>
   </div>
</div>