@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.mainblog')
@foreach(DB::table('product_categories')->get() as $r)
<style>
    @media only screen and (min-width: 200px) and (max-width: 300px){
  .mean-container a.meanmenu-reveal span {
    top: 7px !important;
    margin-top: -2px !important;
}
  }
  @media only screen and (min-width: 768px) and (max-width: 1000px){
.mean-container a.meanmenu-reveal span {
    top: 7px !important;
    margin-top: -2px !important;
}
  }
  @media only screen and (min-width: 200px) and (max-width: 760px){
 .section-padding{
    padding-top: 110px !important;
}
  }
</style>
<section class="products ptb-30 section-padding">
    <div class="container">
      <div class="row align-items-center">
        @if($r->show_on == 'Left')
         <div class="col-md-4">
            <div class="life-heading">
               <h2>{!! $r->name !!}</h2>
               <p>{{ $r->description }}</p>
            </div>
            <img src="{{ url('public/images') }}/{{ $r->vector }}">
         </div>
         <div class="col-md-8 pl-5">
            <div class="row">
                @foreach(DB::table('wp_dh_products')->where('category_id' , $r->id)->where('website' , 'lifeadvice')->get() as $p)
               <div class="col-md-6 mt-3 life-product">
                  <div class="card">
                     <div class="card-body">
                        <div class="product-card-heading">
                           <h5>{{ $p->pro_name }}</h5>
                        </div>
                        <div class="product-card-images d-flex">
                           <img src="{{ url('public/images') }}/{{ $p->vector }}">
                           <p>{{ $p->description }}</p>
                        </div>
                        <div class="product-btn text-right mt-3">
                           <a href="{{ url('') }}/{{ $p->redirect_from_url }}">
                              <button class="btn btn-sm learn-more">Learn More</button>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>

        @else
        <div class="col-md-8">
            <div class="row">
                @foreach(DB::table('wp_dh_products')->where('category_id' , $r->id)->where('website' , 'lifeadvice')->get() as $p)
                <div class="col-md-6 mt-3 life-product">
                  <div class="card">
                     <div class="card-body">
                        <div class="product-card-heading">
                           <h5>{{ $p->pro_name }}</h5>
                        </div>
                        <div class="product-card-images d-flex">
                           <img src="{{ url('public/images') }}/{{ $p->vector }}">
                           <p>{{ $p->description }}</p>
                        </div>
                        <div class="product-btn text-right mt-3">
                           <a href="{{ url('') }}/{{ $p->redirect_from_url }}">
                              <button class="btn btn-sm learn-more">Learn More</button>
                           </a>
                        </div>
                     </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="life-heading">
               <h2>{!! $r->name !!}</h2>
               <p>{{ $r->description }}</p>
            </div>
            <img src="{{ url('public/images') }}/{{ $r->vector }}">
         </div>
        @endif
      </div>
    </div>
</section>
@endforeach
@endsection