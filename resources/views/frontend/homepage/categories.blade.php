@php
   $useragent=$_SERVER['HTTP_USER_AGENT'];
@endphp
@if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
<section class="card-slide">
   <div class="container-homepage">
   <div class="section-title section-title-five">
      <h2 class="text-dark">Simple Online Transparent</h2>
      <h5 style="font-weight: 400;">Buying insurance has never been this simple (and enjoyable)!</h5>
   </div>
   <div class="wrapper">
      <!-- Контент -->
      <div class="row">
         <div class="col-md-3 blog-btn mb-3">
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
               </div>
            </div>
         </div> 
         <div class="col-md-3 blog-btn mb-3">
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
               </div>
            </div>
         </div>
         <div class="col-md-3 blog-btn mb-3">
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
               </div>
            </div>
         </div>
         <div class="col-md-3 blog-btn mb-3">
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
               </div>
            </div>
         </div>
      </div>
   </div>
</section> 
@else
<section class="card-slide">
   <div class="container-homepage">
   <div class="section-title section-title-five">
      <h2 class="text-dark">Simple Online Transparent</h2>
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
                        <h2><span>Life</span><br> Insurance</h2></a>
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
@endif