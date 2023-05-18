@php
   $useragent=$_SERVER['HTTP_USER_AGENT'];
@endphp
@if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
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
          <div class="row">
            <div class="col-md-3 blog-btn mb-3" style="padding-left:0px;">
               <div class="card slider-card border-0">
                  <div class="card-body text-center">
                     <div class="simple-online-transparent-slider">
                        <a href="{{url('life-insurance')}}">
                          <img src="{{ asset('public/front/img/images/trip.png') }}">
                         </a>
                     </div>
                     <div class="slider-heading">
                        <a href="{{url('product/super-visa-insurance')}}">
                           <h2><span>Super Visa</span> Insurance</h2></a>
                          </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 blog-btn mb-3" style="padding-right:0px;">
               <div class="card slider-card border-0">
                  <div class="card-body text-center">
                     <div class="simple-online-transparent-slider">
                        <a href="{{url('life-insurance')}}">
                          <img src="{{ asset('public/front/img/images/bed.png') }}">
                         </a>
                     </div>
                     <div class="slider-heading">
                        <a href="{{url('product/visitor-insurance')}}">
                           <h2><span>Visitor</span> Insurance</h2></a>
                          </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 blog-btn mb-3" style="padding-left:0px;">
               <div class="card slider-card border-0">
                  <div class="card-body text-center">
                     <div class="simple-online-transparent-slider">
                        <a href="{{url('life-insurance')}}">
                          <img src="{{ asset('public/front/img/images/disability.png') }}">
                         </a>
                     </div>
                     <div class="slider-heading">
                        <a href="{{url('product/student-insurance')}}">
                           <h2><span>Student</span> Insurance</h2></a>
                          </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 blog-btn mb-3" style="padding-right:0px;">
               <div class="card slider-card border-0">
                  <div class="card-body text-center">
                     <div class="simple-online-transparent-slider">
                        <a href="{{url('life-insurance')}}">
                          <img src="{{ asset('public/front/img/images/health.png') }}">
                         </a>
                     </div>
                     <div class="slider-heading">
                        <a href="{{url('product/travel-insurance')}}">
                           <h2><span>Travel</span> Insurance</h2></a>
                          </div>
                  </div>
               </div>
            </div>
             <div class="col-md-12">
                <div class="find-all-products">
                  
                     <a href="{{url('product')}}">
                      <h3 class="d-flex"> 
                        <div class="product-arrow-div">
                           Find all our products 
                        </div>
                        <img class="products-arrow" src="{{ asset('public/front/img/images/product-arrow-two.png') }}"> </h3>
                     </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
@else
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
                              <a href="{{url('product/super-visa-insurance')}}">  
                               <img src="{{ asset('public/front/img/images/trip.png') }}"></a>
                            </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('product/super-visa-insurance')}}">   
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
                              <a href="{{url('product/visitor-insurance')}}">       
                              <img src="{{ asset('public/front/img/images/bed.png') }}">
                              </a>
                            </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('product/visitor-insurance')}}">     
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
                              <a href="{{url('product/student-insurance')}}">                          
                              <img src="{{ asset('public/front/img/images/disability.png') }}">
                              </a>
                            </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('product/student-insurance')}}">
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
                              <a href="{{url('product/travel-insurance')}}"> 
                                    <img src="{{ asset('public/front/img/images/health.png') }}">
                              </a>
                                 </div>
                            <div class="transparent-card-heading mt-3">
                              <a href="{{url('product/travel-insurance')}}"> 
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
                            <h3 class="d-flex"> 
                              <div class="product-arrow-div">
                                 Find all our products 
                              </div>
                              <img class="products-arrow" src="{{ asset('public/front/img/images/product-arrow-two.png') }}"> </h3>
                           </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
@endif