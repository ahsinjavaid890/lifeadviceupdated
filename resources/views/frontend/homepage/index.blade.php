@extends('frontend.layouts.main')
@section('tittle')
<title>Life Insurance Ontario – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<div class="right-images">
 <img src="{{ asset('public/front/img/images/right-side.png') }}">
</div>
<div class="text-section">
 <div class="herrotext">
    <h2 class="wow fadeInUp" data-wow-delay=".4s">Life insurance made easy</h2>
    <h5 class="nerdy-pen__text mt-4"><span  class="txt-rotate" data-period="2000"data-rotate='[ "Pay Off Any Debts.", "Add Financial Security.", "Plan a Sweet Home.", "Make your Kids Future Bright." ]'> </span></h5>
    <div class="homepage-hero-btn mt-4">
       <a href= "#" class="btn btn-lg">Get Instant Quote</a>
    </div>
 </div>
</div>
<div class="homepage-hero-banner homepage-hero-banner-margin">
 <div class="container-homepage">
    <div class="row">
       <div class="col-md-12">
          <div class="hero-image">
             <img src="{{ asset('public/front/img/images/2.png') }}">
          </div>
       </div>
    </div>
 </div>
</div>
<!-- End Banner Area -->
<section class="testimonial-area">
 <div class="container-homepage">
    <div class="row">
       <div class="col-md-12 heroSlider-fixed">
          <div class="overlay">
          </div>
          <div class="slider clients">
             <div><img src="{{ asset('public/front/img/images/insurance.png') }}"  alt="logo2" /></div>
             <div><img src="{{ asset('public/front/img/images/manu-life.png') }}" alt="logo3" /></div>
             <div><img src="{{ asset('public/front/img/images/sub-life.png') }}" /></div>
             <div><img src="{{ asset('public/front/img/images/assumption.png') }}" /></div>
             <div><img src="{{ asset('public/front/img/images/desjardins.png') }}" /></div>
             <div><img src="{{ asset('public/front/img/images/canada.png') }}" /></div>
             <div><img src="{{ asset('public/front/img/images/protection.png') }}" /></div>
          </div>
          <div class="prev"><span class="fa fa-chevron-left" aria-hidden="true"></span></div>
          <div class="next"><span class="fa fa-chevron-right" aria-hidden="true"></span></div>
       </div>
    </div>
 </div>
</section>
<section class="card-slide">
   <div class="container-homepage">
   <div class="section-title section-title-five">
      <h2 class="text-dark">Simple. Online. Transparent.</h2>
      <h5 style="font-weight: 400;">Buying insurance has never been this simple (and enjoyable)!</h5>
   </div>
   <div class="wrapper">
      <!-- Контент -->
      <div class="slider">
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <a href="{{url('life-insurance')}}">
                       <img src="{{ asset('public/front/img/images/family.png') }}">
                      </a>
                  
                  </div>
                  <div class="slider-heading">
                     <a href="{{url('life-insurance')}}">
                        <h2><span>Life</span> Insurance</h2></a>
                       </div>
                  <div class="slider-pargraph">
                     <p>Whether you want help covering final expenses or building a legacy, protect your family.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <a href="{{url('critical-illness')}}">
                           <img src="{{ asset('public/front/img/images/bed.png') }}">
                     </a>
                        </div>
                  <div class="slider-heading">
                   <a href="{{url('critical-illness')}}">  <h2><span>Critical Illness</span> Insurance</h2></a>
                  </div>
                  <div class="slider-pargraph">
                     <p>Critical illness insurance help to pay the costs associated with life-altering illnesses. If you become sick with an illness.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <a href="{{url('desability')}}">
                            <img src="{{ asset('public/front/img/images/disability.png') }}">
                     </a>
                           </div>
                  <div class="slider-heading">
                     <a href="{{url('desability')}}"><h2><span>Disability</span> Insurance</h2></a>
                  </div>
                  <div class="slider-pargraph">
                     <p>We protect you in more ways than you’d think. We’ll include many coverages that do more than protect your physical structure.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <a href="{{url('health-insurance')}}">
                            <img src="{{ asset('public/front/img/images/health.png') }}">
                     </a>
                           </div>
                  <div class="slider-heading">
                  <a href="{{url('health-insurance')}}">   <h2><span>Health</span> Insurance</h2></a>
                  </div>
                  <div class="slider-pargraph">
                     <p>Health Coverage Insurance is the easy, affordable way to protect you and your family from the growing list of health care.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <img src="{{ asset('public/front/img/images/resp-icon.png') }}">
                  </div>
                  <div class="slider-heading">
                     <h2><span>RESP</span></h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>A Registered Education Savings Plan (RESP) is a special savings account for a child's futurer  education,Parents, grandparents and friends can contribute money any time</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <img src="{{ asset('public/front/img/images/rrsp-icon.png') }}">
                  </div>
                  <div class="slider-heading">
                     <h2><span>RRSP</span></h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>A registered retirement savings plan (RRSP) is a type of savings account that help Canadians save for their fund for retirement and enjoy tax benefits, both now and in the future.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <img src="{{ asset('public/front/img/images/tfsa-icon.png') }}">
                  </div>
                  <div class="slider-heading">
                     <h2><span>TFSA</span></h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>A Tax-Free Savings Account is a new way for residents of Canada TFSA allows you to set money aside in eligible investments and watch those savings grow tax-free throughout your lifetime. Interest, dividends, and capital</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <img src="{{ asset('public/front/img/images/fsha-icon.png') }}">
                  </div>
                  <div class="slider-heading">
                     <h2><span>FHSA</span></h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>FHSA account holders can contribute up to $8,000 a year, while earning a tax deduction on the contributions,</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                             
                            <img src="{{ asset('public/front/img/images/family.png') }}">
                  </div>
                  <div class="slider-heading">
                 <h2><span>Super Visa </span> Insurance</h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                    
                              <img src="{{ asset('public/front/img/images/bed.png') }}">
                  </div>
                  <div class="slider-heading">
                 <h2><span>Visitors</span> Insurance</h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                
                        <img src="{{ asset('public/front/img/images/icon-student-super-visa-.png') }}"> 
                  </div>
                  <div class="slider-heading">
                 <h2><span>Students </span> Insurance</h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>Critical illness insurance help to pay the costs associated with life-altering illnesses. If you become sick with an illness.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                     <img src="{{ asset('public/front/img/images/travel-icon.png') }}">
                  </div>
                  <div class="slider-heading">
                 <h2><span>Travel</span> Insurance</h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      $(document).ready(function() {
        $(".slider").slick({
          arrows: true,
          nextArrow: '<button class="slickarrowsnext"><i class="fa fa-solid fa-arrow-right  slick-next"></i></button>',
          prevArrow: '<button class="slickarrowsprevious"><i class="fa fa-solid fa-arrow-left slick-prev"></i></button>',
          dots: false,
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: false,
          speed: 900,
          autoplaySpeed: 700,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 550,
              settings: {
                slidesToShow: 1
              }
            }
          ]
        });
      });
      
   </script>
</section>
<!-- Start About Area -->
<section class="about-area-five" >
 <div class="container-homepage">
    <div class="row">
       <div class="col-md-12">
          <div class="policy-heading">
             <h2><span>How Our Policy</span>  Works?</h2>
          </div>
       </div>
    </div>
    <div class="row align-items-center pt-0">
       <div class="col-md-6">
          <div class="policy-image">
             <img src="{{ asset('public/front/img/images/policy.png') }}" style="width: 100%;height: 454px;">
          </div>
       </div>
       <div class="col-md-6 policy-second-part">
          <div class="row align-items-baseline">
             <div class="col-md-1">
                <div class="board-image">
                   <img src="{{ asset('public/front/img/images/clip-board.png') }}">
                </div>
             </div>
             <div class="col-md-11">
                <div class="policy-headings">
                   <h5>We Found <span>Perfect Policy</span></h5>
                </div>
                <div class="policy-paragraph">
                   <p class="text-justify">We ask a few questions, crunch some numbers and compare the top insurers. We offer the lowest rates available specifically for you.</p>
                </div>
             </div>
          </div>
          <div class="row align-items-baseline">
             <div class="col-md-1">
                <div class="board-image">
                   <img src="{{ asset('public/front/img/images/time.png') }}">
                </div>
             </div>
             <div class="col-md-11">
                <div class="policy-headings">
                   <h5>24/7 <span>Support</span></h5>
                </div>
                <div class="policy-paragraph">
                   <p class="text-justify">Ongoing support and helpful articles to provide our readers all the latest info on insurance products/ requirements for travel and immigration.</p>
                </div>
             </div>
          </div>
          <div class="row align-items-baseline">
             <div class="col-md-1">
                <div class="board-image">
                   <img src="{{ asset('public/front/img/images/dollar-men.png') }}">
                </div>
             </div>
             <div class="col-md-11">
                <div class="policy-headings">
                   <h5>Affordable<span> Prices</span></h5>
                </div>
                <div class="policy-paragraph">
                   <p class="text-justify">Our Best Insurance products provide support to help individuals save millions of dollars every year, By spending just a few extra dollars on the cost.</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Start Choose Us Area -->
<section class="chooses-blogs choose-us-area-five pb-70" style="background-color:#f4f7fa;">
   <div class="container-homepage">
      <ul class="tabs row">
         @php
            $srno = 0;
            $blogcategories = DB::table('blogcategories')->limit(4)->get();
            foreach($blogcategories as $r){
               $srno++;
               $id = $r->id;
               $name = $r->name;
               if($srno == 1)
               {
                  $category_id_one = $id;
               }
               if($srno == 2)
               {
                  $category_id_two = $id;
               }
               if($srno == 3)
               {
                  $category_id_three = $id;
               }
               if($srno == 4)
               {
                  $category_id_four = $id;
               }
         @endphp
         <div class="col-md-3 blog-btn">
            <li class="tab-link <?php if($srno == 1){echo "current";} ?> blogsproducts" data-tab="tab-<?php echo $srno ?>">
               <?php echo $name; ?>
            </li>
         </div>
         @php } @endphp
      </ul>
      <div id="tab-1" class="tab-content current">
         <div class="row">
            <?php 
               $srno = 0;
               $blogs = DB::table('blogs')->where('category_id' , $category_id_one)->limit(4)->get();
               foreach($blogs as $r){
                   $blog_id = $r->id;
                   $blog_title = $r->title;
                   $blog_text = strip_tags($r->content);
                   $blog_img = $r->image;
                   $blog_url = $r->url;
             ?>
            <div class="col-md-3">
             <div class="card blank-card">
                   <div class="card-body">
                      <div class="blog-image-card">
                         <img src="{{ url('public/images') }}/{{ $r->image }}">
                      </div>
                      <div class="card-content">
                         <h3>{{ $r->title }}</h3>
                         @php
                          $blog_text = strip_tags($r->content);
                         @endphp
                         <p>{{ \Illuminate\Support\Str::limit($blog_text, 80, $end='...') }}</p>
                      </div>
                      <div class="blogbutton">
                         <a href="{{ url('blog') }}/{{ $r->url}}"><i class="fa fa-arrow-circle-right" style="font-size: 40px;color: #2b3481;"></i></a>
                      </div>
                   </div>
                </div>
            </div>

         <?php } ?>
         </div>
      </div>
      <div id="tab-2" class="tab-content">
         <div class="row">
            <?php 
               $srno = 0;
               $blogs = DB::table('blogs')->where('category_id' , $category_id_two)->limit(4)->get();
               foreach($blogs as $r){
                   $blog_id = $r->id;
                   $blog_title = $r->title;
                   $blog_text = strip_tags($r->content);
                   $blog_img = $r->image;
                   $blog_url = $r->url;
             ?>
            <div class="col-md-3">
               <div class="card blank-card">
                   <div class="card-body">
                      <div class="blog-image-card">
                         <img src="{{ url('public/images') }}/{{ $r->image }}">
                      </div>
                      <div class="card-content">
                         <h3>{{ $r->title }}</h3>
                         @php
                          $blog_text = strip_tags($r->content);
                         @endphp
                         <p>{{ \Illuminate\Support\Str::limit($blog_text, 80, $end='...') }}</p>
                      </div>
                      <div class="blogbutton">
                         <a href="{{ url('blog') }}/{{ $r->url}}"><i class="fa fa-arrow-circle-right" style="font-size: 40px;color: #2b3481;"></i></a>
                      </div>
                   </div>
                </div>
            </div>

         <?php } ?>
         </div>
      </div>
      <div id="tab-3" class="tab-content">
         <div class="row">
            <?php 
               $srno = 0;
               $blogs = DB::table('blogs')->where('category_id' , $category_id_three)->limit(4)->get();
               foreach($blogs as $r){
                   $blog_id = $r->id;
                   $blog_title = $r->title;
                   $blog_text = strip_tags($r->content);
                   $blog_img = $r->image;
                   $blog_url = $r->url;
             ?>
            <div class="col-md-3">
               <div class="card blank-card">
                   <div class="card-body">
                      <div class="blog-image-card">
                         <img src="{{ url('public/images') }}/{{ $r->image }}">
                      </div>
                      <div class="card-content">
                         <h3>{{ $r->title }}</h3>
                         @php
                          $blog_text = strip_tags($r->content);
                         @endphp
                         <p>{{ \Illuminate\Support\Str::limit($blog_text, 80, $end='...') }}</p>
                      </div>
                      <div class="blogbutton">
                         <a href="{{ url('blog') }}/{{ $r->url}}"><i class="fa fa-arrow-circle-right" style="font-size: 40px;color: #2b3481;"></i></a>
                      </div>
                   </div>
                </div>
            </div>

         <?php } ?>
         </div>
      </div>
      <div id="tab-4" class="tab-content">
         <div class="row">
            <?php 
               $srno = 0;
               $blogs = DB::table('blogs')->where('category_id' , $category_id_four)->limit(4)->get();
               foreach($blogs as $r){
                   $blog_id = $r->id;
                   $blog_title = $r->title;
                   $blog_text = strip_tags($r->content);
                   $blog_img = $r->image;
                   $blog_url = $r->url;
             ?>
            <div class="col-md-3">
               <div class="card blank-card">
                   <div class="card-body">
                      <div class="blog-image-card">
                         <img src="{{ url('public/images') }}/{{ $r->image }}">
                      </div>
                      <div class="card-content">
                         <h3>{{ $r->title }}</h3>
                         @php
                          $blog_text = strip_tags($r->content);
                         @endphp
                         <p>{{ \Illuminate\Support\Str::limit($blog_text, 80, $end='...') }}</p>
                      </div>
                      <div class="blogbutton">
                         <a href="{{ url('blog') }}/{{ $r->url}}"><i class="fa fa-arrow-circle-right" style="font-size: 40px;color: #2b3481;"></i></a>
                      </div>
                   </div>
                </div>
            </div>

         <?php } ?>
         </div>
      </div>
   </div>
</section>
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
<!-- End Choose Us Area -->
<!-- Start Find An Agent Area -->
<section class="find-agent pb-100">
 <div class="container-homepage">
    <div class="row align-items-center">
       <div class="col-md-6">
          <div class="find-agent-image">
             <img src="{{ asset('public/front/img/images/laptop.png') }}">
          </div>
       </div>
       <div class="col-md-6">
          <div class="transparent-heading">
             <h2><span>Simple Online </span>Transparent</h2>
          </div>
          <div class="row online-row">
             <div class="col-md-6">
                <div class="row">
                   <div class="col-md-12 mt-3">
                      <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                              <a href="{{url('super-visa-insurance')}}">  
                               <img src="{{ asset('public/front/img/images/trip.png') }}"></a>
                            </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('super-visa-insurance')}}">   
                                  <h2>Super Visa Insurance</h2></a>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12 mt-3">
                      <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                              <a href="{{url('visitor-insurance')}}">       
                              <img src="{{ asset('public/front/img/images/bed.png') }}">
                              </a>
                            </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('visitor-insurance')}}">     
                                  <h2>Visitor Insurance</h2>
                              </a>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 simple-card">
                <div class="row">
                   <div class="col-md-12">
                      <div class="card transparent-card">
                         <div class="card-body text-center">
                           
                            <div class="simple-online-transparent-slider">
                              <a href="{{url('student-insurance')}}">                          
                              <img src="{{ asset('public/front/img/images/disability.png') }}">
                              </a>
                            </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('student-insurance')}}">
                               <h2>Student Insurance</h2>
                              </a>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>Student Insurance is for students who are studying abroad or international students coming to study in Canada.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12 mt-3">
                      <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                              <a href="{{url('travel-insurance')}}"> 
                                    <img src="{{ asset('public/front/img/images/health.png') }}">
                              </a>
                                 </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('travel-insurance')}}"> 
                                 <h2>Travel Insurance</h2>
                              </a>
                              </div>
                            <div class="transparent-card-paragraph">
                               <p>Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12">
                      <div class="find-all-products">
                        
                           <a href="{{url('product')}}">
                            <h3 class="d-flex"> Find all our products <img class="products-arrow" src="{{ asset('public/front/img/images/product-arrow.png') }}"> </h3></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- End Find An Agent Area -->
<div class="insurance-product-right-image">
 <img src="{{ asset('public/front/img/images/right.png') }}">
</div>
<!-- Start Services Us Area -->
<section class="services-area-three services-area-five pb-5 pt-5">
 <div class="container-homepage">
    <div class="insurance-product-heading text-center">
       <h2>Insurance products hand- picked for you</h2>
       <p>Buying insurance has never been this simple (and enjoyable)</p>
    </div>
    <div class="insurance-product-image d-flex">
       <div class="left-image-insurance">
          <img style="width: 170px;" src="{{ asset('public/front/img/images/left.png') }}">
       </div>
       <div class="insurance-product-image2 text-center">
          <img style="width:50%;" src="{{ asset('public/front/img/images/insurance-product.png') }}">
       </div>
    </div>
 </div>
</section>
<section class="first-buyer">
 <div class="container-homepage">
    <div class="row">
       <div class="col-md-4" style="margin-top: 230px;">
          <div class="buyer-heading">
             <h2><span>Protect What  </span>Matters Most</h2>
          </div>
          <div class="buyer-paragraph">
             <p>Get expert advice on your insurance questions. Our blog answers common FAQs that help you keep informed about insurance and what you need to stay covered.</p>
          </div>
          <div class="buyer-link">
             <a href="blogs.php" style="color: #55cbb3;">Find out more <i class="fa fa-arrow-right"></i></a>
          </div>
       </div>
       <div class="col-md-8">
          <div class="row online-row">
             <div class="col-md-6">
                <div class="row">
                   <div class="col-md-12 mt-3">
                      <div class="card blank-card">
                         <div class="card-body">
                            <div class="blog-image-card">
                               <img src="{{ asset('public/front/img/images/calculator.jpg') }}">
                            </div>
                            <div class="card-content">
                               <h3>Best Online Life Insurance With Living Benefits</h3>
                               <p>One of the most common reasons people buy life insurance is so that their beneficiaries can have some financial protection after they pass away. Traditional life insurance, on the other hand, does not always cover all financial obligations, particularly while the policyholder is still alive.</p>
                            </div>
                            <div class="blogbutton">
                               <a href="">Read More..</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12 mt-3">
                      <div class="card blank-card">
                         <div class="card-body">
                            <div class="blog-image-card">
                               <img src="{{ asset('public/front/img/images/calculator.jpg') }}">
                            </div>
                            <div class="card-content">
                               <h3>Best Online Life Insurance With Living Benefits</h3>
                               <p>One of the most common reasons people buy life insurance is so that their beneficiaries can have some financial protection after they pass away. Traditional life insurance, on the other hand, does not always cover all financial obligations, particularly while the policyholder is still alive.</p>
                            </div>
                            <div class="blogbutton">
                               <a href="">Read More..</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 simple-card">
                <div class="row">
                   <div class="col-md-12">
                      <div class="card blank-card">
                         <div class="card-body">
                            <div class="blog-image-card">
                               <img src="{{ asset('public/front/img/images/people.jfif') }}">
                            </div>
                            <div class="card-content">
                               <h3>Why choose an Independent Insurance Broker in Ontario?</h3>
                               <p>Independent Insurance Brokers in Ontario work as a customerâ€™s personal advisor on matters of insurance by bridging the gap between any insurance company and a customer. They work on behalf of their customerâ€™s requirements and not the insurance company, which allows them to choose a trustworthy firm amidst an array of insurance companies looking for potential clients. </p>
                            </div>
                            <div class="blogbutton">
                               <a href="">Read More..</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12 mt-3">
                      <div class="card blank-card">
                         <div class="card-body">
                            <div class="blog-image-card">
                               <img src="{{ asset('public/front/img/images/pen.jpg') }}">
                            </div>
                            <div class="card-content">
                               <h3>Why Should Your Opt For The Best Online Life Insurance?</h3>
                               <p>If you're in your 20s or 30s, you might recall insurance brokers knocking on your door and attempting to persuade your parents to purchase a policy that they were selling. Your parents may have also agreed, unaware that the so-called scheme that was being pushed as the best for them was really the best for the agent because it netted him the highest commission! Those days, though, are long go...</p>
                            </div>
                            <div class="blogbutton">
                               <a href="">Read More..</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- End Services Us Area -->
<!-- Start Counter Area -->
<section class="counters counter-area-three">
 <div class="container-homepage">
    <div class="row">
       <div class="col-md-7">
          <div class="card client-card">
             <div class="card-body">
                <div class="client-card-heading">
                   <h2>Our Clients</h2>
                   <p>Divyesh Patel</p>
                </div>
                <div class="client-card-paragraph mt-4">
                   <p>Life advice insurance was really great help each when I needed an advise for any type of insurance. Manish has always find  me  best policy that is fit for my need with lowest premiums. I would recommend to contact him before you buy insurance from any other broker. </p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-5">
          <div class="home-image">
             <img src="{{ asset('public/front/img/images/home.png') }}">
          </div>
       </div>
    </div>
    <div class="client-button mt-5 text-center">
       <a href="https://www.google.com/search?q=life+advice+insurance+inc&rlz=1C1UEAD_enPK975PK975&oq=life+advice+insurance+inc&aqs=chrome..69i57j0i8i15i30j0i390l7.11008j1j9&sourceid=chrome&ie=UTF-8#lrd=0x882bf5f3329ed419:0x669c2fe4071dc2ef,1,," class="btn btn-lg">See All Reviews</a>
    </div>
 </div>
</section>
@include('frontend.companypages.includes.faqsection')
@endsection
@section('script')
<script type="text/javascript">
   $('.clients').slick({
    dots: false,
     prevArrow: $('.prev'),
     nextArrow: $('.next'),
     infinite: true,
     speed: 300,
     slidesToShow: 6,
     slidesToScroll: 6,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 5,
           slidesToScroll: 5,
           infinite: true,
           dots: false
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }
     ]
   });
   var TxtRotate = function(el, toRotate, period) {
     this.toRotate = toRotate;
     this.el = el;
     this.loopNum = 0;
     this.period = parseInt(period, 10) || 2000;
     this.txt = '';
     this.tick();
     this.isDeleting = false;
   };

   TxtRotate.prototype.tick = function() {
     var i = this.loopNum % this.toRotate.length;
     var fullTxt = this.toRotate[i];

     if (this.isDeleting) {
       this.txt = fullTxt.substring(0, this.txt.length - 1);
     } else {
       this.txt = fullTxt.substring(0, this.txt.length + 1);
     }

     this.el.innerHTML = '<span style="font-size:30px;" class="wrap">'+this.txt+'</span>';

     var that = this;
     var delta = 200 - Math.random() * 100;

     if (this.isDeleting) { delta /= 2; }

     if (!this.isDeleting && this.txt === fullTxt) {
       delta = this.period;
       this.isDeleting = true;
     } else if (this.isDeleting && this.txt === '') {
       this.isDeleting = false;
       this.loopNum++;
       delta = 500;
     }

     setTimeout(function() {
       that.tick();
     }, delta);
   };

   window.onload = function() {
     var elements = document.getElementsByClassName('txt-rotate');
     for (var i=0; i<elements.length; i++) {
       var toRotate = elements[i].getAttribute('data-rotate');
       var period = elements[i].getAttribute('data-period');
       if (toRotate) {
         new TxtRotate(elements[i], JSON.parse(toRotate), period);
       }
     }
     // INJECT CSS
     var css = document.createElement("style");
     css.type = "text/css";
     css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
     document.body.appendChild(css);
   };
   $(document).ready(function(){
     $('.carousel').slick({
       speed: 500,
       slidesToShow: 4,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 2000,
       // dots:true,
       centerMode: true,
       responsive: [{
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 1,
           // centerMode: true,

         }

       }, {
         breakpoint: 800,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2,
           dots: true,
           infinite: true,

         }
       },  {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           dots: true,
           infinite: true,
           autoplay: true,
           autoplaySpeed: 2000,
         }
       }]
     });
   });
   function myFunction() {
   var dots = document.getElementById("dots");
   var moreText = document.getElementById("more");
   var btnText = document.getElementById("myBtn");

   if (dots.style.display === "none") {
   dots.style.display = "inline";
   btnText.innerHTML = "Read more"; 
   moreText.style.display = "none";
   } else {
   dots.style.display = "none";
   btnText.innerHTML = "Read less"; 
   moreText.style.display = "inline";
   }
   }
   var $element=$('.each-event, .title');
   var $window = $(window);
   $window.on('scroll resize', check_for_fade);
   $window.trigger('scroll');
   function check_for_fade() { 
       var window_height = $window.height();
       
       $.each($element, function (event) {
           var $element = $(this);
           var element_height = $element.outerHeight();
           var element_offset = $element.offset().top;
           space = window_height - (element_height + element_offset -$(window).scrollTop());
           if (space < 60) {
               $element.addClass("non-focus");
           } else {
               $element.removeClass("non-focus");
           }
    
       });
   };
</script>
@endsection