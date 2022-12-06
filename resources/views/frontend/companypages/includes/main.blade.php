<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
@php
$url = request()->segment(count(request()->segments()));
$firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<div class="health-inssurance-hero-banners super-hero">
   <div class="container-homepage">
      <div class="row mb-3">
         <div class="col-md-6 hero-texts">
            <div class="herrotext super-hero-text">
               <h2 class="wow fadeInUp" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
               <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">{{ $firstsection->sub_heading }}</span></h5>
               @if($firstsection->main_button_text)
               <div class="btns d-flex">
                  <div class="details">
                     <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                  </div>
               </div>
               @endif
            </div>
         </div>
         <div class="col-md-6 hero-images">
            <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
               background-position: 50% 70%;
               background-size: 100%;
               background-repeat: no-repeat;">
            </div>
         </div>
      </div>
      @if($firstsection->form == 1)
      <div class="row">
         <div class="col-md-12">
            <div data-v-5170d561="" data-v-67adc629="" class="quotes-generator-bar fixed">
               <div data-v-5170d561="" class="grid-container">
                  <div data-v-5170d561="" class="grid-row grid-row--bar">
                     <div data-v-5170d561="" class="d-grid generator-bar-row-wrap">
                        <label data-v-5170d561=""  data-toggle="modal" data-target="#myModal1" class="form-input input-destination has-arrow">
                        <input data-v-5170d561="" id="txtmanuid" type="text" placeholder="Coverage Ammount" required="required" class="input-field hide-value" disabled><span data-v-5170d561="" class="label-text">Coverage Ammount</span>
                        </label>
                        <div data-v-5170d561="" data-toggle="modal" data-target="#myModal2" class="form-input date-range form-input__date-range">
                           <label style="width: 270px !important;" data-v-5170d561="" class="form-input input-traveler-info has-arrow"><input data-v-5170d561=""  type="text" placeholder="Start Date" required="required" class="input-field" id="departure"  data-toggle="modal" data-target="#myModal3" disabled><span data-v-5170d561="" class="label-text">Star Date</span></label>
                           <!--  <div data-v-5170d561="" class="from">
                              <i data-v-5170d561="" class="icon icon-calendar"></i>
                              <div data-v-5170d561="" class="value" id="departure"> Start Date </div>
                              </div> -->
                        </div>
                        <label data-v-5170d561=""   data-toggle="modal" data-target="#myModal3" class="form-input input-traveler-info has-arrow"><input data-v-5170d561="" type="text" placeholder="Traveler Information" required="required" class="input-field" id="destinations" disabled><span data-v-5170d561="" class="label-text" >Traveler Information</span></label>
                        <button data-v-5170d561="" disabled="disabled" class="button button-primary button-rounded get-quotes-button"> Get Quotes </button><!---->
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade zoom-in" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="color: #262566;">Choose the Coverage Ammount</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-md-4">
                              <div data-v-5ed4506d="" class="form-line">
                                 <div data-v-5ed4506d="" class="line-content">
                                    <span data-v-6e3bf6e8="" data-v-5ed4506d="" class="form-input select has-mobile-exit wide-input">
                                       <div data-v-6e3bf6e8="" class="mobile-exit">&nbsp;</div>
                                       <select data-v-6e3bf6e8="" id="sum_insured2" class="input-field">
                                          <option data-v-6e3bf6e8="" data-value="" class="dropdown-item"><span data-v-6e3bf6e8="">Coverage Amount</span></option>
                                          <option data-v-6e3bf6e8="" data-value="100000" class="dropdown-item"><span data-v-6e3bf6e8="">$100000</span></option>
                                          <option data-v-6e3bf6e8="" data-value="150000" class="dropdown-item"><span data-v-6e3bf6e8="">$150000</span></option>
                                          <option data-v-6e3bf6e8="" data-value="200000" class="dropdown-item"><span data-v-6e3bf6e8="">$200000</span></option>
                                          <option data-v-6e3bf6e8="" data-value="250000" class="dropdown-item"><span data-v-6e3bf6e8="">$250000</span></option>
                                          <option data-v-6e3bf6e8="" data-value="300000" class="dropdown-item"><span data-v-6e3bf6e8="">$300000</span></option>
                                       </select>
                                    </span>
                                    <div data-v-5ed4506d="" class="tooltip-inline-container">
                                       <div data-v-cf1d4a34="" data-v-5ed4506d="" class="entire-tooltip">
                                          <div class="entire-tooltip-overlay"></div>
                                          <button class="button button-help show-tooltip"></button>
                                          <div class="tooltip-container tooltip--auto-height">
                                             <button class="button button-close-simplified close-tooltip"></button>
                                             <h4 class="heading heading-5">Helpful Info</h4>
                                             <div class="content">
                                                <dl data-v-5ed4506d="">
                                                   <dt data-v-5ed4506d="">Destination</dt>
                                                   <dd data-v-5ed4506d="">The country for which you will need coverage.</dd>
                                                </dl>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="row">
                                 <div class="col-md-12 no-padding">
                                    <h3 style="font-size: 14px; color: #262566;"><i class="fa fa-wheelchair"></i> Pre-existing Condition ?</h3>
                                    <div class="col-md-12 no-padding">
                                       <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="row">
                                 <div class="col-md-12 no-padding">
                                    <h3 style="font-size: 14px; color: #262566;"><i class="fa fa-child"></i> Do you require Family Plan ?</h3>
                                    <div class="col-md-12 no-padding">
                                       <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="fplan" value="yes" style="width: auto !important;height: auto;" onclick="changefamilyyes()"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="fplan" value="no" checked="" style="width: auto !important;height: auto;" onclick="changefamilyno()"> No</label>
                                    </div>
                                    <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                                    <script>
                                       function changefamilyyes(){
                                          document.getElementById('familyplan_temp').value = 'yes';    
                                          checkfamilyplan();
                                       }
                                       function changefamilyno(){
                                          document.getElementById('familyplan_temp').value = 'no'; 
                                          checkfamilyplan();
                                       }
                                    </script>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nextbtns">
                           <button type="button" class="btn btn-default btn-next">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade zoom-in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="color: #262566;">Departure Date</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     </div>
                     <div class="modal-body">
                        <label data-v-5170d561="" class="form-input input-traveler-info"><input data-v-5170d561="" type="date" autocomplete="off" id="departure_date" name="departure_date"  required="required" class="input-field"><span data-v-5170d561="" class="label-text">Departure Date</span></label>
                        <div class="nextbtns">
                           <button type="button" class="btn btn-default btn-prev">Prev</button>
                           <button type="button" id="paramsOkay" class="btn btn-default btn-next">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade zoom-in mt-5" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="color: #262566;">Primary Destination</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div data-v-5ed4506d="" class="form-line">
                                 <div data-v-5ed4506d="" class="line-content">
                                    <span data-v-6e3bf6e8="" data-v-5ed4506d="" class="form-input select has-mobile-exit wide-input">
                                       <div data-v-6e3bf6e8="" class="mobile-exit">&nbsp;</div>
                                       <select data-v-6e3bf6e8="" name="primary_destination" id="primary_destination" class="input-field">
                                          <option class="optionselect">Primary Destination</option>
                                          @foreach(DB::table('formcountries')->get() as $r)
                                          <option data-v-6e3bf6e8="{{ $r->code }}" data-title="{{ $r->name }}" data-value="{{ $r->code }}" class="optionselect"><span data-v-6e3bf6e8="">{{ $r->name }}</span></option>
                                          @endforeach
                                       </select>
                                       <span data-v-6e3bf6e8="" class="label-text">Primary Destination</span>
                                    </span>
                                    <div data-v-5ed4506d="" class="input-indicator-container"><span data-v-5ed4506d="" class="form-input d-inline input-indicator"><span class="input-indicator input-indicator-default"><img src="https://assets.visitorscoverage.com/production/app/img/icons/input-indicator-default.svg" alt="Input indicator default"></span><span class="input-indicator input-indicator-success"><img src="https://assets.visitorscoverage.com/production/app/img/icons/input-indicator-success.svg" alt="Input indicator default"></span></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class=" ageandcitizen">
                                 <div class="row yearsdiv" style="">
                                    <div class="col-md-4">
                                       <small style="font-size: 12px;color: #999;">Age</small>
                                       <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" maxlength="3" name="ages[]" id="ages" value="" class="primaryage" style="margin-top: -5px !important;display: block;">
                                    </div>
                                    <div class="col-md-3 text-center text-dark" style="padding-top: 10px;">
                                       or
                                    </div>
                                    <div class="col-md-5" style="padding-top: 10px;">
                                       <a style="cursor: pointer; color: black;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
                                    </div>
                                 </div>
                                 <div class="row dobdiv" style="display:none;">
                                    <div class="col-md-12 d-flex">
                                       <div class="col-md-7 no-padding d-flex">
                                          <div class="col-md-4" style="padding: 0 5px;">
                                             <small style="font-size: 7px;color: #999;padding: 0;">Month</small>
                                             <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block;" maxlength="2">
                                          </div>
                                          <div class="col-md-4" style="padding: 0 5px;">
                                             <small style="font-size: 7px;color: #999;padding: 0;">Day</small>
                                             <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block;" maxlength="2">
                                          </div>
                                          <div class="col-md-4" style="padding: 0 5px;">
                                             <small style="font-size: 7px;color: #999;padding: 0;">Year</small>
                                             <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" id="dob_year" onchange="calprimaryage()" style="margin-top: -5px !important;display: block;">
                                          </div>
                                       </div>
                                       <script>
                                          function calprimaryage(){
                                          var currentyear = new Date().getFullYear();
                                          var dobyear = document.getElementById('dob_year').value;
                                          var primaryage = currentyear - dobyear;
                                          $('.primaryage').val(primaryage);
                                          }
                                       </script>
                                       <div class="col-md-5" style="padding-top: 10px;">
                                          <div class="row">
                                             <div style="padding: 0;" class="col-md-3 text-center  text-dark">
                                                or
                                             </div>
                                             <div style="padding: 0;text-align: center;" class="col-md-9">
                                                <a style="cursor: pointer;  color: black;" onclick="$('.dobdiv').hide(); $('.yearsdiv').show()">Enter Age</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nextbtns">
                           <button type="button" class="btn btn-default btn-prev">Prev</button>
                           <button type="button"  class="btn btn-default btn-next">Done</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="card-body">
               <form method="post" action="#">
                   <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-2">
                           <input value="Coverage Amount" id="txtmanuid" class="form-control"  data-toggle="modal" data-target="#myModal1">
                       </div>
                       <div class="col-md-2" style="margin-bottom: 10px;">
                           <input autocomplete="off"   >
                           </div>
                       <div class="col-md-3">
                            <input autocomplete="off" >
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                              <input autocomplete="off" id="destinations" class="form-control" required="" data-toggle="modal" data-target="#myModal4">
                           </div>
                           <div class="modal" id="primary_destinations">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content" style="border-radius: 20px;">
               
                             <div class="modal-header">
                               <h4 class="modal-title" style="color: #262566;">Coverage Amount</h4>
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
               
                             
                             <div class="modal-footer">
                               <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                             </div>
                           </div>
                         </div>
                       </div>
                       </div>
                       <div class="col-md-2">
                           <a href="#" class="btn btn-secondary btn-quote mt-2">Get Quotes</a>
                       </div>
                   </div>
                   </div>
               </form>
               </div> -->
         </div>
         <div data-v-27654560="" data-v-47d07eec="" data-v-89c571b4="">
            <div data-v-27654560="" class="popup-overlay global-popup gen-bar-popup country-sel-popup">
               <div class="custom-container">
                  <div class="popup-header"><img src="https://assets.visitorscoverage.com/production/app/img/icons/logo-secondary.svg" alt="VisitorsCoverage" class="img-fluid"><i class="icon icon-close"></i></div>
                  <div data-v-6d46de94="" class="quote-result-wizard quote-wizard-page wizard-step country-selection">
                     <div data-v-6d46de94="" class="grid-container">
                        <div data-v-6d46de94="" class="grid-row">
                           <div data-v-05ba04f2="" data-v-6d46de94="">
                              <input data-v-05ba04f2="" type="text" class="fake-input">
                              <div data-v-05ba04f2="" class="focus-container">
                                 <div data-v-6d46de94="" class="wizard-step country-selection step-popup">
                                    <div data-v-5ed4506d="" data-v-6d46de94="" class="card lg-wizard-card">
                                       <h2 data-v-5ed4506d="" class="heading-3 card-heading">What countries will be visited?</h2>
                                       <div data-v-5ed4506d="" class="card-content">
                                          <p data-v-5ed4506d="" class="card-info">Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered.</p>
                                          <button data-v-5ed4506d="" class="button button-add-another"> Add Destination </button>
                                       </div>
                                       <!---->
                                       <div data-v-73e0d048="" data-v-5ed4506d="" class="card-foot mt-4">
                                          <div data-v-73e0d048="" class="card-foot--container">
                                             <!---->
                                             <div data-v-73e0d048="" class="card-footer--center-col"></div>
                                             <button data-v-73e0d048="" disabled="disabled" class="button button-primary button-rounded btn--next left-spacer"> Next </button>
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div data-v-27654560="" class="popup-overlay global-popup gen-bar-popup traveler-sel-popup">
               <div class="custom-container">
                  <div class="popup-header"><img src="https://assets.visitorscoverage.com/production/app/img/icons/logo-secondary.svg" alt="VisitorsCoverage" class="img-fluid"><i class="icon icon-close"></i></div>
                  <!---->
               </div>
            </div>
            <div data-v-27654560="" class="popup-overlay global-popup gen-bar-popup date-sel-popup">
               <div class="custom-container">
                  <div class="popup-header"><img src="https://assets.visitorscoverage.com/production/app/img/icons/logo-secondary.svg" alt="VisitorsCoverage" class="img-fluid"><i class="icon icon-close"></i></div>
                  <!---->
               </div>
            </div>
         </div>
      </div>
      @endif
   </div>
</div>
<script type="text/javascript">
   $( "#sum_insured2" ).change(function() {
       var sel = $( "#sum_insured2 option:selected" ).val();
       var textbox = document.getElementById("txtmanuid");
       textbox.value =$( "#sum_insured2 option:selected" ).text();
   });
</script>
<script>
   $(document).ready(function(){
   
       $('#myModal2').on('click','#paramsOkay', function (e) {
           $('#departure').val($('#departure_date').val())
   });
   })
</script>
<script type="text/javascript">
   $( "#primary_destination" ).change(function() {
       var sel = $( "#primary_destination option:selected" ).val();
       var textbox = document.getElementById("destinations");
       textbox.value =$( "#primary_destination option:selected" ).text();
   });
</script>
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-next').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prev').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>