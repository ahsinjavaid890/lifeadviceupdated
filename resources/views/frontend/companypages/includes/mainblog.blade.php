<style type="text/css">
.step {
    height: 100%;
    background-color: #ffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 10px 24px rgb(87 106 134 / 20%);
    width: 47%;
    margin-top: 36px !important;
    padding: 20px 30px;
    text-align: left;
}
.health-inssurance-hero-banner {
    background-color: #2b3481;
}
.ageandcitizen input:focus-visible {
    outline: none;
    border-bottom: 1px solid #bbb !important;
}
.ageandcitizen input {
    border: 0 !important;
    border-bottom: 1px solid #bbb !important;
    width: 100% !important;
    height: 20px;
    padding: 0px;
}
</style>
@php
    $url = request()->segment(count(request()->segments()));
    $firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<div class="blog_section">
    @if($url == 'blogs')
    <div class="hero-content">
       <h1  class="heading-2 hero-heading">Expert Tips</h1>
       <p  class="hero-heading-info"> Subscribe to our exclusive newsletter for the latest blog posts, travel safety tips and trip inspiration. </p>
       <div  class="hero-subscribe">
          <form novalidate="novalidate" action="{{route('news_letter')}}" class="v-form footer-subscribe-form" method="POST">
            @csrf
            <div class="subscribe-input">
                 <input type="text" name="email" >
                 @if(Session::Has('message'))
                 <div class="text-success" id="success-message">
                     {{  Session::get('message')}}
                 </div>
              @endif
              @if(Session::Has('error'))
                 <div class="text-danger">
                     {{  Session::get('error')}}
                 </div>
              @endif
              @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
             </div>
             <button class="button button-rounded button-white button-subscribe">
                <span>Subscribe</span>
             </button>
          </form>
       </div>
    </div>
    @endif
    @if($url == 'product')
    <style type="text/css">
        
    </style>
    <div class="hero-content">
       <h1  class="heading-2 hero-heading">Our Insurance <br> Products</h1>
       <p  class="hero-heading-info">No matter where your next adventure takes you, make sure you’re covered for<br> the unexpected. With VisitorsCoverage, you’ll find the right insurance<br> for the way you travel.</p>
    </div>
    @endif
    <div class="blo-img">
        <img src="{{ url('') }}/public/images/{{ $firstsection->main_image  }}" class="blog_img">
    </div>
</div>