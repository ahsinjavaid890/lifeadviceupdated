@extends('frontend.layouts.main')
@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
    $secondsection = DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $url)->get();
@endphp
@include('frontend.companypages.includes.mettatittle')
@section('content')
<link rel="stylesheet" href="{{ url('public/front/css/aboutus.css') }}">
<section class="about_us_banner" style="background-image: url('{{ url('public/front/images/about/about_us_main.png') }}'); background-repeat: no-repeat; background-size: cover;">
    <div class="container-homepage">
        <div class="about_main_text">
            <h1 class="main_heading_about">About Us</h1>
            <h6 class="main_subheading_about">What Makes Life Advice Extra Smart?</h6>
            <p class="main_description_about">Life Advice Insurance Inc. has been providing superior insurance throughout Ontario for over a century</p>
        </div>
    </div>
</section>
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
<div class="about_sec_vector_top">
    <img src="{{ url('public/front/images/about/finding_2.png')}}">
</div>
<section class="about_sec_section">
    <div class="container-homepage">
        <div class="about_sec_heading">
            <h2><span>Finding Right</span> Coverage</h2>
        </div>
        <div class="about_sec_description">
            <p> <b>F</b>inding the right coverage can be difficult, which is why we take pride in assisting our customers to navigate coverage options by providing custom- tailored insurance solutions. We offer Life Insurance, Health insurance, Travel Insurance, employee health benefits, group health insurance and Investment products protecting everything that matters to you!</p>
            <p> <b>W</b>e know that life can throw us all curveballs and that there can be bumps along the way, which is why it is crucial for us to ensure our clients are safeguarded against these unexpected turns. Furthermore, we know our clients work hard for the success they have achieved. Thus, it is extremely important to minimize tax and retain as much of their earnings as possible.</p>
        </div>
    </div>
</section>
<div class="about_sec_vector_bottom">
    <img src="{{ url('public/front/images/about/finding_1.png')}}">
</div>
<section class="about_three_section">
   <div class="container-homepage">
        <div class="about_three_cards">
            <div class="row">
                <div class="col-md-4">
                    <div class="card_one_vector">
                        <img src="{{ url('public/front/images/about/card_circle_two.png')}}">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="about_one_heading">
                                <h2 class="text-center"><span>Our</span> Mission</h2>
                            </div>
                            <div class="about_one_description">
                                <p>Our mission is to make insurance shopping for Canadians simple, easily accessible, and transparent, so our clients can get the coverage they really need. providing our customers most cost effective and best available insurance & investment products through search & development with an aim of not only saving them money but also to protect families for a better & secure future</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card_one_vector second-vector">
                        <img src="{{ url('public/front/images/about/card_circle_one.png')}}">
                    </div>
                    <div class="card card_two">
                        <div class="card-body">
                            <div class="about_one_heading">
                                <h2 class="text-center"><span>Our</span> Goal</h2>
                            </div>
                            <div class="about_one_description">
                                <p>Our goal is to empower you to make informed financial choices through education and then match you with the right financial solutions that can help you achieve your financial goals. Create best value for Customers, Shareholders and all Stake holders Achieve impeccable reputation and credentials through best business practice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_three_main_vector">
        <img src="{{ url('public/front/images/about/main_sec_image.png')}}">
        <div class="about_three_circle_vector d-flex">
            <div class="circle_one">
                <img src="{{ url('public/front/images/about/icon1.png')}}">
                <div class="circle_text">
                    <h2>1450</h2>
                    <p class="mt-3">Happy Clients</p>
                </div>
            </div>
            <div class="circle_two">
                <img src="{{ url('public/front/images/about/icon2.png')}}">
                <div class="circle_text">
                    <h2>35</h2>
                    <p class="mt-2">Insurance Product</p>
                </div>
            </div>
            <div class="circle_three">
                <img src="{{ url('public/front/images/about/icon3.png')}}">
                <div class="circle_text">
                    <h2>10</h2>
                    <p class="mt-2">Years of Experience</p>
                </div>
            </div>
            <div class="circle_four">
                <img src="{{ url('public/front/images/about/icon4.png')}}">
                <div class="circle_text">
                    <h2>196</h2>
                    <p class="mt-2">Professional Agents</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-homepage">
        <div class="what_we_offer">
            <div class="offer_heading">
                <h2>What We Offer</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="offer_vector">
                <img src="{{ url('public/front/images/about/offer_circles.png')}}">
            </div>
        </div>
    </div>
    <div class="offer_circle_text d-flex">
        <div class="offer_circle_one">
            <div class="offer_circle_heading  text-center">
                <h2><span>Multi Insurance</span> Choices</h2>
            </div>
            <div class="offer_circle_description text-center">
                <p>We deliver quality insurance policies to individuals and family's in Canada and design insurance policies to fit your needs.</p>
            </div>
        </div>
        <div class="offer_circle_two">
            <div class="offer_circle_heading  text-center">
                <h2><span>An Honest</span> Guide</h2>
            </div>
            <div class="offer_circle_description  text-center">
                <p>Experience the quality service and attentions in detail. We deliver exceptional insurance services to individuals and family’s in Canada</p>
            </div>
        </div>
        <div class="offer_circle_three">
            <div class="offer_circle_heading  text-center">
                <h2><span>Perfect Policy</span> Plans</h2>
            </div>
            <div class="offer_circle_description  text-center">
                <p>Get a comprehensive rundown of insurance plans that what’s covered to,from what coverage amounts.</p>
            </div>
        </div>
        <div class="offer_circle_four">
            <div class="offer_circle_heading  text-center">
                <h2><span>We get</span> You Covered</h2>
            </div>
            <div class="offer_circle_description  text-center">
                <p>We commit to provide customers with the best insurance value and service available for complete family and their needs like car, home etc.</p>
            </div>
        </div>
    </div>
</section>
<section class="about_sec_four">
    <div class="container-homepage">
        <div class="online_support_heading">
            <h2><span>Life Insurance</span> Online Support</h2>
        </div>
        <div class="online_support_description">
            <p>Lifes advice will be providing ongoing support and helpful articles that will provide our readers with all of the latest info on insurance products and requirements for travel and immigration. Through our resources and our skilled staff members, we can make insurance productsa more accessible and affordable than ever before.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="online_support_vector text-center">
                    <img src="{{ url('public/front/images/about/online_support_vector.png')}}">
                </div>
                <div class="online_support_qoute">
                    <p>"Like to learn more about our company and what we can offer through our products and services"</p>
                    <button class="btn btn-secondary mt-3">Get A qoute</button>
                </div>
            </div>
        </div>
    </div>
</section>                 
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