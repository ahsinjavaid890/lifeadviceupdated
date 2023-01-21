<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainformstudent.css')}}">
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js') }}"></script>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script> 
@php
$url = request()->segment(count(request()->segments()));
$firstsection = DB::table('travelpages')->where('url' , $url)->first();
$prosupervisa = $data->pro_supervisa;
if($prosupervisa == '1'){
$supervisa = 'yes';
} else {
$supervisa = 'no';   
}
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
  </div>
</div>
      @if($firstsection->form == 1)
      <div class="row card-section">
         <div class="col-md-12">
            
            <form id="quoteform" action="{{ url('ajaxquotes') }}" method="POST">
               @csrf
               <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
               <input type="hidden"  name="sum_insured2" id="sum_insured2">
               <input type="hidden" id="primarydestination" name="primarydestination">
               <input type="hidden" id="departure_date" name="departure_date">
               <input type="hidden" id="return_date" name="return_date">
               <input type="hidden" name="ages[]" id="selectage">
               <input type="hidden" name="years[]" id="selectage">
            <div class="qoute-card">
               <div class="card-body">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal1"  class="form-input input-destination has-arrow">
                                 <input  type="text" placeholder="Coverage Amount" required="required" id="coverageprice" class="input-field" disabled>
                                 <span  class="label-text">Coverage Amount</span>
                                 <div  class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2"  class="form-input input-traveler-info has-arrow">
                              <input  id="citishow" type="text" placeholder="Traveler Information" required="required" id="age" class="input-field" disabled>
                              <span  class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"   class="form-input date-range form-input__date-range">
                                 <div  class="input-field">
                                    <div  class="from">
                                       <i  class="icon icon-calendar"></i>
                                       <div id="coveragedate"  class=" value"> Start Date 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button style="color:white;" id="getqoutesubmitbutton" type="submit" class="button button-primary get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="modal zoom-in" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card lg-wizard-card modal-card border-0">
                           <h2 class="heading-3 card-heading">Please Select Coverage Ammount?</h2>
                           <div class="card-content coverage mb-3 pb-3">
                              <p class="card-info">Coverage amount, your insurance limit is the maximum amount your insurer may pay out for a claim, as stated in your policy.</p>
                          </div>
                              <div class="row">
                                @if(isset($fields['sum_insured']))
                                @if($fields['sum_insured'] == 'on')
                                  <div class="col-md-6 userdata-card">
                                      <div class="wrapper-dropdown" id="coverage_amount">
                                        <span>Coverage Ammount</span>
                                        <ul class="dropdown"  >
                                         @foreach($sum_insured as $r)


                                         <li @if($loop->last) class="borderbottomnone" @endif onclick="selectcoverageammount({{$r->sum_insured}});">
                                            <span class="selectspan">${{ $r->sum_insured }}</span>
                                         </li>
                                         @endforeach
                                         <script type="text/javascript">
                                             function selectcoverageammount(id) {
                                                 $('#sum_insured2').val(id);
                                                 $('#coverageprice').val(id);
                                                 $('#covergaeerror').hide();
                                               }
                                               function firstnext() {
                                                  if($('#sum_insured2').val() == '')
                                                  {
                                                     $('#covergaeerror').show();
                                                     $('#covergaeerror').html('Please Select Covergae Ammount');
                                                  }else{
                                                     $('#firstnextfake').hide();
                                                     $('#firstnextorignal').show();
                                                     $('#firstnextorignal').click();
                                                  }
                                               }
                                         </script>
                                        </ul>
                                      </div>
                                  </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['Country']))
                                @if($fields['Country'] == "on" )

                                 <div class="col-md-6">
                                      <div class="wrapper-dropdown" id="primary_destination">
                                        <span>Priamry Destination</span>
                                        <ul class="dropdown"  >

                                        @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                         <li @if($loop->last) class="borderbottomnone" @endif onclick="selectdestination('{{$r->name}}')">
                                            <span class="selectspan">{{ $r->name }}</span>
                                         </li>
                                         @endforeach
                                         <script type="text/javascript">
                                               function selectdestination(id) {
                                                   $('#primarydestination').val(id);   
                                               }
                                               function secondnext() {
                                                  if($('#primarydestination').val() == '')
                                                  {
                                                     $('#destinationerror').show();
                                                     $('#destinationerror').html('Please Select Destination Ammount');
                                                  }else{
                                                      var travelerage = $('#travelerage').val();
                                                      var primarydestination = $('#primarydestination').val();
                                                      $('#citishow').val('Age:'+travelerage+', Destination: '+primarydestination)
                                                      $('#selectage').val(travelerage);
                                                      $('#firstnextfake').hide();
                                                      $('#firstnextorignal').show();
                                                      $('#firstnextorignal').click();
                                                  }
                                               }
                                         </script>
                                        </ul>
                                      </div>
                                 </div>
                                 @endif
                                 @endif
                                 <div style="display: none;" class="text-danger mt-4" id="destinationerror">Please Select Destination</div>

                                 @if(isset($fields['fname']))
                                 @if($fields['fname'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input type="text" name="fname" placeholder="First Name" required id="irstname" class="wrapperfrom">
                                       <label for="firstname" class="form-label">First name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['lname']))
                                 @if($fields['lname'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input type="text" name="lname" placeholder="Last Name" required id="lname" class="wrapperfrom">
                                       <label for="lname" class="form-label">Last name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['email']))
                                 @if($fields['email'] == "on" )
                                   <div class="col-md-6 userdata-card">
                                      <div class="custom-form-control">
                                         <input type="text" name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="wrapperfrom">
                                         <label for="savers_email" class="form-label">Email</label>
                                      </div>
                                   </div>
                                @endif
                                @endif
                                @if(isset($fields['phone']))
                                @if($fields['phone'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input onkeyup="validatephone()" type="text" name="phone" placeholder="Phone Number" required id="phone" class="wrapperfrom">
                                       <label for="phone" class="form-label">Phone <b id="phone_error" class="text-danger"></b></label>
                                    </div>
                                 </div>
                                 <script>
                                    function validatephone(){
                                       var checkphone = document.getElementById('phone').value;
                                       document.getElementById('phone').value = checkphone.replace(/\D/g,'');
                                       if (checkphone.length < 10) {
                                       document.getElementById('phone_error').innerHTML = '<small>(Must be 10 digits)</small>';
                                       document.getElementById('getquote').disabled = true;  
                                       } else {
                                       document.getElementById('getquote').disabled = false; 
                                       document.getElementById('phone_error').innerHTML = '';
                                       }
                                       }
                                 </script>
                                 @endif
                                 @endif
                              </div>
                                <div class="text-danger mt-4" id="covergaeerror"></div>
                                
                           </div>
                        </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                          <span id="firstnextfake" class="btn btn-default" onclick="firstnext()">Next</span>
                          <span style="display: none;" id="firstnextorignal"  class="btn btn-default btn-next">Next</span>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div class="card-content">
                              <p  class="card-info"> Enter the age for each person that will be traveling.</p>
                           </div>
                           <div class="row">
                              <div class="col-md-12 mt-3">
                                 <div class="row alignitemcenter">
                                    <div class="col-md-8">
                                       <div class="row alignitembaseline">
                                          <div class="col-md-4">
                                             <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                          </div>
                                          <div class="col-md-8">
                                              <div class="date-wrapper question-answer d-flex ml-3">
                                             <input min="1" max="31" type="number" oninput="maxLengthCheck(this)" placeholder="DD" name="days[]" id="days_1" maxlength="2" class="inputs input-field numeric lpad2 day-holder">
                                             <input min="1" max="12" type="number" oninput="maxLengthChecks(this)" placeholder="MM" name="months[]" id="months_1" maxlength="2" class="inputs input-field numeric lpad2 month-holder">
                                             <select name="years[]" id="add_1" class="inputs input-field numeric lpadyear year-holder" onchange="checknumtravellers()" >
                                             <option value="">Year</option>
                                          <?php $maxyear = date('Y');
                                          $j = $maxyear;
                                          $year = date('Y');
                                          if($supervisa == 'yes'){
                                          $startfrom = '1918';
                                             $j = date('Y') - 40;
                                          } else {
                                             $startfrom = '1918';
                                          }
                                          while($j>$startfrom) {?>
                                          <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                          <?php $j--; } ?>
                                          </select>
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <span class="questionheading">Pre-existing Condition ?</span>
                                          <div class="col-md-12 no-padding user-answer">
                                             <label  class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                          </div>
                                    </div>
                                 </div>
                                 <div class="additionaltravelers">
                                    @for ($i=0; $i < $fields['traveller_number']; $i++)
                                    <div id="travelerrow{{ $i }}" style="display:none;" class="row alignitemcenter"> <div class="col-md-8"> <div class="row alignitembaseline"> <div class="col-md-4"> <span class="travelerheading primarytravelheading">Additional Traveler</span> </div> <div class="col-md-8"> <div class="date-wrapper question-answer d-flex ml-3"> <input min="1" max="31" type="number" oninput="maxLengthCheck(this)" placeholder="DD" name="days[]" id="days_1" maxlength="2" class="inputs input-field numeric lpad2 day-holder"> <input min="1" max="12" type="number" oninput="maxLengthChecks(this)" placeholder="MM" name="months[]" id="months_1" maxlength="2" class="inputs input-field numeric lpad2 month-holder"> <select name="years[]" id="add_1" class="inputs input-field numeric lpadyear year-holder" onchange="checknumtravellers()" > <option value="">Year</option> <?php $maxyear = date('Y'); $j = $maxyear; $year = date('Y'); if($supervisa == 'yes'){ $startfrom = '1918'; $j = date('Y') - 40; } else { $startfrom = '1918'; } while($j>$startfrom) {?> <option value="<?php echo $j;?>" ><?php echo $j;?></option> <?php $j--; } ?> </select> </div> </div> </div> </div> <div class="col-md-4"> <span class="questionheading">Pre-existing Condition ?</span> <div class="col-md-12 no-padding user-answer"> <label  class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing{{$i}}" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing{{$i}}" value="no" checked="" style="width: auto !important;height: auto;"> No</label> </div> </div> </div>
                                    @endfor
                                 </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                 <div class="travelerinfo">
                                    <span onclick="addtravellers()" class="button button-add-another button-trav-add"> Add Additional Traveler </span>
                                 </div>
                              </div>
                              <input type="hidden" value="1" id="numberoftraverls" name="">
                           </div>
                        </div>
                     </div>
                     <script type="text/javascript">
                        function addtravellers()
                        {
                           var shownumberoftravel = $('#numberoftraverls').val();
                           $('#travelerrow'+shownumberoftravel).show();
                           var n1 = parseInt(shownumberoftravel);
                           var n2 = parseInt(1);
                           var r = n1 + n2;
                           $('#numberoftraverls').val(r)
                        }
                     </script>
                     <div class="modal-footer">
                        <div class="nextbtns">
                          <span class="btn btn-default btn-prev">Prev</span>
                          <span  id="secondnextorignal"  class="btn btn-default btn-next">Next</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">Start Date Of Coverage and Some Other Details</h2>
                              <div class="date_picker_wrapper" id="date_picker_1">
                           <div class="card-content d-flex">
                              <p class="card-info">Please Select Date When You Start Coverage</p>
                                <div class="date_picker_header">
                                  <h2 class="date_picker_month_day"></h2>
                                  <h2 class="date_picker_year ml-2"></h2>
                                </div>
                            </div>
                              <div class="row userdate-coverage">
                                 <div class="col-md-12 birthdateinput">
                                        <!-- <div class="date_picker_body">
                                          <div class="date_picker_month_navigation">
                                            <button class="date_picker_prev_month date_picker_month_nav_btn">
                                              <ion-icon name="caret-back-circle-outline"></ion-icon>
                                            </button>
                                            <h2 class="date_picker_month_name"></h2>
                                            <button class="date_picker_next_month date_picker_month_nav_btn">
                                              <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                            </button>
                                          </div>
                                          <ul class="date_picker_month_days">
                                            <li>Sun</li>
                                            <li>Mon</li>
                                            <li>Tue</li>
                                            <li>Wed</li>
                                            <li>Thu</li>
                                            <li>Fri</li>
                                            <li>Sat</li>
                                          </ul>
                                        </div> -->
                                       <div class="form-input">
                                          <input type="text" id="dates" class="input-field mt-3 text-center" />
                                          <input type="hidden" id="checkin" />
                                          <input type="hidden" id="checkout" />
                                          <div id="datepicker"></div>
                                        </div>
                                      </div>
                                 <div class="col-md-6">
                                    <div class="row traveler-question">
                                       <!-- <div class="col-md-12">
                                             <span class="questionheading">Do you require Family Plan ?</span>
                                             <div class="col-md-12 no-padding user-answer">
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
                                       </div> -->

                                      <!--  <div class="col-md-12">
                                          <span class="questionheading">Pre-existing Condition ?</span>
                                          <div class="col-md-12 no-padding user-answer">
                                          <label  class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                       </div>
                                       </div> -->
                                      <!--  <div class="col-md-12">
                                          <span class="questionheading">Do you Smoke in last 12 months ?</span>
                                          <div class="col-md-12 no-padding user-answer">
                                             <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="Smoke12" value="yes"    style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;" class="text-dark">
                                             <input checked="" type="radio" name="Smoke12" value="no"  style="width: auto !important;height: auto;"> No</label>
                                          </div>
                                       </div> -->
                                    </div>
                                 <div style="display: none;" class="text-danger mt-4" id="destinationerror">Please Select Destination</div>
                                 </div>
                                 </div>

                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                         <span class="btn btn-default btn-prev">Prev</span>
                         <span class="btn btn-default btn-next" onclick="formdone()">Done</span>
                      </div>
                      <script type="text/javascript">
                        function formdone() {
                           $("#getqoutesubmitbutton").click();
                        }
                      </script>
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
      </div>
      <div class="card modal-qoute-card ">
          <div class="card-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="quotes-button">
                          <button class="modal-qoute-btn btn btn-block"data-toggle="modal" data-target="#qoutemodal">Get Qoutes</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal fade modal-fullscreen  footer-to-bottom" id="qoutemodal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <form action="#" method="POST">
               <input type="hidden"  name="mobile_sum_insured2" id="mobile_sum_insured2">
            <div class="p-0 qoute-card new-qoute">
               <div class="card-body p-0">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal4"  class="form-input input-destination has-arrow">
                                 <input  type="text" placeholder="Coverage Amount" required="required" id="coverageprices" class="input-field" disabled>
                                 <span  class="label-text">Coverage Amount</span>
                                 <div  class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal5"  class="form-input input-traveler-info has-arrow">
                              <input  id="citishow" type="text" placeholder="Traveler Information" required="required" id="age" class="input-field" disabled>
                              <span  class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal6"   class="form-input date-range form-input__date-range">
                                 <div  class="input-field">
                                    <div  class="from">
                                       <i  class="icon icon-calendar"></i>
                                       <div id="coveragedate" class="value"> Start Date 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button  disabled="disabled" class="button button-primary get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" aria-hidden="true" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card lg-wizard-card modal-card border-0">
                           <h2 class="heading-3 card-heading">Please Select Coverage Ammount?</h2>
                           <div class="card-content coverage">
                              <p class="card-info">Coverage amount, your insurance limit is the maximum amount your insurer may pay out for a claim, as stated in your policy.</p>
                              <div class="row">
                                @if(isset($fields['sum_insured']))
                                @if($fields['sum_insured'] == 'on')
                                  <div class="col-md-6 userdata-card">
                                      <div class="wrapper-dropdown" id="mobile_coverage_amount">
                                        <span>Coverage Ammount</span>
                                        <ul class="dropdown"  >
                                         @foreach($sum_insured as $r)


                                         <li @if($loop->last) class="borderbottomnone" @endif onclick="selectcoverageammounts({{$r->sum_insured}});">
                                            <span class="selectspan">${{ $r->sum_insured }}</span>
                                         </li>
                                         @endforeach
                                         <script type="text/javascript">
                                             function selectcoverageammounts(id) {
                                                 $('#mobile_sum_insured2').val(id);
                                                 $('#coverageprices').val(id);
                                                 $('#covergaeerrors').hide();
                                               }
                                               function firstnexts() {
                                                  if($('#mobile_sum_insured2').val() == '')
                                                  {
                                                     $('#covergaeerrors').show();
                                                     $('#covergaeerrors').html('Please Select Covergae Ammount');
                                                  }else{
                                                     $('#firstnextfakes').hide();
                                                     $('#firstnextorignals').show();
                                                     $('#firstnextorignals').click();
                                                  }
                                               }
                                         </script>
                                        </ul>
                                      </div>
                                  </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['fname']))
                                 @if($fields['fname'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input type="text" name="fname" placeholder="First Name" required id="irstname" class="wrapperfrom">
                                       <label for="firstname" class="form-label">First name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['lname']))
                                 @if($fields['lname'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input type="text" name="lname" placeholder="Last Name" required id="lname" class="wrapperfrom">
                                       <label for="lname" class="form-label">Last name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['email']))
                                 @if($fields['email'] == "on" )
                                   <div class="col-md-6 userdata-card">
                                      <div class="custom-form-control">
                                         <input type="text" name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="wrapperfrom">
                                         <label for="savers_email" class="form-label">Email</label>
                                      </div>
                                   </div>
                                @endif
                                @endif
                                @if(isset($fields['phone']))
                                @if($fields['phone'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input onkeyup="validatephone()" type="text" name="phone" placeholder="Phone Number" required id="phone" class="wrapperfrom">
                                       <label for="phone" class="form-label">Phone <b id="phone_error" class="text-danger"></b></label>
                                    </div>
                                 </div>
                                 <script>
                                    function validatephone(){
                                       var checkphone = document.getElementById('phone').value;
                                       document.getElementById('phone').value = checkphone.replace(/\D/g,'');
                                       if (checkphone.length < 10) {
                                       document.getElementById('phone_error').innerHTML = '<small>(Must be 10 digits)</small>';
                                       document.getElementById('getquote').disabled = true;  
                                       } else {
                                       document.getElementById('getquote').disabled = false; 
                                       document.getElementById('phone_error').innerHTML = '';
                                       }
                                       }
                                 </script>
                                 @endif
                                 @endif
                              </div>
                                <div class="text-danger mt-4" id="covergaeerrors"></div>
                                
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                          <span id="firstnextfakes" class="btn btn-default" onclick="firstnexts()">Next</span>
                          <span style="display: none;" id="firstnextorignals"  class="btn btn-default btn-nexts">Next</span>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div class="card-content">
                              <p  class="card-info"> Enter the age for each person that will be traveling.</p>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="d-flex travelerinfo">
                                       <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                       <div id="ageinputs" class="form-input input-age">
                                          <input type="number" placeholder="Age" required="required" pattern="[0-9]*" maxlength="3" class="input-field age" min="0" inputmode="numeric">
                                       </div>
                                       <div style="display: none;" id="dateofbirthinputs" class="form-input input-date-of-birth">
                                          <input type="text" placeholder="MM/DD/YYYY" required="required" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10" class="input-field dob">
                                       </div>
                                       <span class="switch-input">or 
                                          <a onclick="showdateofbirths()" id="dateofbirthtexts" href="javascript:void(0)" class="link-text-4 link-text-default-color">Enter Date of Birth</a>
                                          <a onclick="showages()" style="display: none;" id="agetexts" href="javascript:void(0)" class="link-text-4 link-text-default-color">Enter Age</a>
                                       </span>
                                    </div>
                                 <div class="additionaltraveler"></div>
                                 <div class="mt-3">
                                    <div class="travelerinfo">
                                       <span onclick="addtravellers()" class="button button-add-another button-trav-add"> Add Additional Traveler </span>
                                    </div>
                                 </div>
                                 </div>
                                 @if(isset($fields['Country']))
                                @if($fields['Country'] == "on" )
                                 <div class="col-md-6">
                                     <div class="wrapper-dropdown" id="mobile_primary_destination" style="position: initial !important; ">
                                        <span>Select Destination</span>
                                        <ul class="dropdown"  >
                                        @foreach(DB::table('formcountries')->get() as $r)
                                         <li @if($loop->last) class="borderbottomnone" @endif>
                                            <span class="selectspan">{{ $r->name }}</span>
                                         </li>
                                         @endforeach
                                        </ul>
                                      </div>
                                 </div>
                                 @endif
                                 @endif
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                           <span class="btn btn-default btn-prevs">Prev</span>
                           <span id="paramsOkay" class="btn btn-default btn-nexts">Next</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">Start Date Of Coverage and Some Other Details</h2>
                              <div class="date_picker_wrapper" id="date_picker_1">
                           <div class="card-content d-flex">
                              <p class="card-info">Please Select Date When You Start Coverage</p>
                                <div class="date_picker_header">
                                  <h2 class="date_picker_month_day"></h2>
                                  <h2 class="date_picker_year ml-2"></h2>
                                </div>
                            </div>
                              <div class="row userdate-coverage">
                                 <div class="col-md-12 birthdateinput">
                                        <!-- <div class="date_picker_body">
                                          <div class="date_picker_month_navigation">
                                            <button class="date_picker_prev_month date_picker_month_nav_btn">
                                              <ion-icon name="caret-back-circle-outline"></ion-icon>
                                            </button>
                                            <h2 class="date_picker_month_name"></h2>
                                            <button class="date_picker_next_month date_picker_month_nav_btn">
                                              <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                            </button>
                                          </div>
                                          <ul class="date_picker_month_days">
                                            <li>Sun</li>
                                            <li>Mon</li>
                                            <li>Tue</li>
                                            <li>Wed</li>
                                            <li>Thu</li>
                                            <li>Fri</li>
                                            <li>Sat</li>
                                          </ul>
                                        </div> -->
                                       <div class="form-input">
                                          <input type="text" id="dates" class="input-field mt-3 text-center" />
                                          <input type="hidden" id="checkin" />
                                          <input type="hidden" id="checkout" />
                                          <div id="datepicker"></div>
                                        </div>
                                      </div>
                                 <div class="col-md-6">
                                    <div class="row traveler-question">
                                       <!-- <div class="col-md-12">
                                             <span class="questionheading">Do you require Family Plan ?</span>
                                             <div class="col-md-12 no-padding user-answer">
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
                                       </div> -->

                                      <!--  <div class="col-md-12">
                                          <span class="questionheading">Pre-existing Condition ?</span>
                                          <div class="col-md-12 no-padding user-answer">
                                          <label  class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                       </div>
                                       </div> -->
                                      <!--  <div class="col-md-12">
                                          <span class="questionheading">Do you Smoke in last 12 months ?</span>
                                          <div class="col-md-12 no-padding user-answer">
                                             <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="Smoke12" value="yes"    style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;" class="text-dark">
                                             <input checked="" type="radio" name="Smoke12" value="no"  style="width: auto !important;height: auto;"> No</label>
                                          </div>
                                       </div> -->
                                    </div>
                                 <div style="display: none;" class="text-danger mt-4" id="destinationerror">Please Select Destination</div>
                                 </div>
                                 </div>

                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                         <span class="btn btn-default btn-prevs">Prev</span>
                         <span class="btn btn-default btn-nexts">Done</span>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
      @endif
   </div>
</div>
<script>
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth() + 1; //January is 0!
   var yyyy = today.getFullYear();
   if (dd < 10) {
      dd = '0' + dd;
   } 
   if (mm < 10) {
     mm = '0' + mm;
   } 
   var today = mm + '/' + dd + '/' + yyyy;

   function supervisayes(){
      var tt = document.getElementById('departure_date').value;
      var date = new Date(tt);
      var newdate = new Date(date);
      newdate.setDate(newdate.getDate() + 364);
      var dd = newdate.getDate();
      var mm = newdate.getMonth() + 1;
      var y = newdate.getFullYear();
      if(mm <= 9){
      var mm = '0'+mm;  
      }
      if(dd <= 9){
      var dd = '0'+dd;  
      }
      //var someFormattedDate = mm + '/' + dd + '/' + y;
      var someFormattedDate = y + '-' + mm + '-' + dd;
      document.getElementById('return_date').value = someFormattedDate;
   }
   function setdeparuredate(month, date, day, year) {
      var setmonth = +month + 1;
      $('#departure_date').val(year+'-'+setmonth+'-'+date)
      $('#coveragedate').html(year+'-'+setmonth+'-'+date)
      supervisayes();
   }
</script>
<script>
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth() + 1; //January is 0!
   var yyyy = today.getFullYear();
   if (dd < 10) {
      dd = '0' + dd;
   } 
   if (mm < 10) {
     mm = '0' + mm;
   } 
   var today = mm + '/' + dd + '/' + yyyy;
   $(function() {
     $('input[name="departure_dates"]').daterangepicker({
       opens: 'left',
      minDate: today,
      singleDatePicker: true,
       showDropdowns: true,
     }, function(start, end, label) {

     });
   });
   function supervisayess(){
      var tt = document.getElementById('departure_dates').value;
      var date = new Date(tt);
      var newdate = new Date(date);
      newdate.setDate(newdate.getDate() + 364);
      var dd = newdate.getDate();
      var mm = newdate.getMonth() + 1;
      var y = newdate.getFullYear();
      if(mm <= 9){
      var mm = '0'+mm;  
      }
      if(dd <= 9){
      var dd = '0'+dd;  
      }
      //var someFormattedDate = mm + '/' + dd + '/' + y;
      var someFormattedDate = y + '-' + mm + '-' + dd;
      document.getElementById('return_date').value = someFormattedDate;
   }
</script>
<script type="text/javascript">
   function removeappendvalue(id) {
      $('.button-add-another').fadeIn(300);
      $('#removebutton'+id).remove();
   }
   function showdateofbirth() {
      $('#ageinput').hide();
      $('#dateofbirthtext').hide();
      $('#agetext').show();
      $('#dateofbirthinput').show();
      
   }
   function showdateofbirths() {
      $('#ageinputs').hide();
      $('#dateofbirthtexts').hide();
      $('#agetexts').show();
      $('#dateofbirthinputs').show();
      
   }
   function showage() {
      $('#agetext').hide();
      $('#dateofbirthinput').hide();
      $('#ageinput').show();
      $('#dateofbirthtext').show();
      
   }
   function showages() {
      $('#agetexts').hide();
      $('#dateofbirthinputs').hide();
      $('#ageinputs').show();
      $('#dateofbirthtexts').show();
      
   }
</script>
<script type="text/javascript">
   $( "#destination_country" ).change(function() {
       var sel = $( "#destination_country option:selected" ).val();
       var textbox = document.getElementById("txtmanuid");
       textbox.value =$( "#destination_country option:selected" ).text();
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
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-nexts').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prevs').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#gender'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#citizenship'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#coverage_amount'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#deductible-price'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#coverage-price'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#number_traveler'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#year_dropdown'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#primary_destination'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
  //----------variables----------//

var day = "";
var month = "";
var year = "";
var currentDate = "";
var monthStartDay = "";

var monthTextArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var dayTextArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

//----------functions----------//

function getMonthInfo(year, month) {

  //use current month to find number of days in month
  //i dont know why i have to add 1 to month
  var startDate = new Date(year, month + 1, 0);
  var monthLength = startDate.getDate();

  var startDate = new Date(year, month, 1);
  var monthStartDay = startDate.getDay();

  return [monthLength, monthStartDay];

}

function drawCal(monthInfo) {

  var daysInMonth = monthInfo[0];
  var monthStartDays = monthInfo[1];

  //clear cal tbody
  $("#cal").empty();
  $("#cal").append("<tr class=days><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thur</td><td>fri</td><td>sat</td>");

  //create empty row, append to to tbody
  var $rowOut = $("<tr></tr>");
  $("#cal").append($rowOut);

  //shift first row by month start date
  for (var i = 1; i <= monthStartDays; i++) {
    var $day = "<td></td>";
    $("#cal tr:last").append($day);
  }

  //for each day, append a td to the row
  for (var i = 1; i <= daysInMonth; i++) {
    var $day = "<td><a>" + (i) + "</a></td>";
    $("#cal tr:last").append($day);

    //if day 7 (w/shift), append row contaning 7 days to tbody and clear row
    if ((i + monthStartDays) % 7 == 0 & i != 0) {
      $("#cal").append($rowOut);
      $rowOut = "<tr></tr>";
      $("#cal").append($rowOut);
    }
  }
}

//----------wiring----------//

$(".button_left").click(function() {

  month--;

  if (month < 0) {
    year--;
    month = 11;
  }

  //left button click
  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

//right button click
$(".button_right").click(function() {

  month++;

  if (month > 11) {
    year++;
    month = 0;
  }

  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

$("#cal").on("click", "td", function(e) {

  e.preventDefault();
  $("#cal td").removeClass("circle");
  $(this).addClass("circle");
  var outputDate = monthTextArray[month] + " " + $(this).children("a").html() + ", " + year;
  console.log(outputDate);
  $("#outputText").text(outputDate);
  $("#coveragedate").text(outputDate);

});

//----------run----------//

//get current month and year
currentDate = new Date();
year = currentDate.getFullYear();
month = currentDate.getMonth();
day = currentDate.getDate();

//get text month name from month number and write to span
$(".cal_head span").text(monthTextArray[month] + " " + year);

//inital calander draw based on current month
drawCal(getMonthInfo(year, month));

//var selector = ("td a:contains(" + day + ")");
var selector = $("td a").filter(function(){
 return $(this).text() === day.toString();
});

//var selector = $("#cal").find("a="+day+"");


$(selector.parent()).addClass("circle");

var outputDate = monthTextArray[month] + " " + day + ", " + year;


$("#outputText").text(outputDate);
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#mobile_coverage_amount'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#mobile_primary_destination'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
  <script type="text/javascript" src="{{ url('public/front/formqoute/datepiker.js')}}"></script>
  <script type="text/javascript" src="{{ url('public/front/formqoute/datepikervisitor.js')}}"></script>
<script type="text/javascript">
   function getquotesubmitform() {
      $('#quoteform').submit();
   }


   $('#quoteform').on('submit',(function(e) {
       $('#getqoutesubmitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
       e.preventDefault();
       var formData = new FormData(this);
       $.ajax({
           type:'POST',
           url: $(this).attr('action'),
           data:formData,
           cache:false,
           contentType: false,
           processData: false,
           success: function(data){
            console.log(data.html)
            $('#getqoutesubmitbutton').html('Get Quotes');
              $('.quotationscards').html(data.html);
           }
       });
   }));
</script>
<script type="text/javascript">
   function checknumtravellers(id) {
      if(id == '')
      {
         $('.no_of_travelers').hide();
      }
      if(id == 1)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
      }
      if(id == 2)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
      }
      if(id == 3)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
      }
      if(id == 4)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
      }
      if(id == 5)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
      }
      if(id == 6)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
         $('#traveler6').show();
      }
      if(id == 7)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
         $('#traveler6').show();
         $('#traveler7').show();

      }
   }
</script>
<script type="text/javascript">
       var separator = ' - ', dateFormat = 'YYYY/MM/DD';
    var options = {
        autoUpdateInput: false,
        autoApply: true,
        locale: {
            format: dateFormat,
            separator: separator,
            applyLabel: '確認',
            cancelLabel: '取消'
        },
        minDate: moment().add(1, 'days'),
        maxDate: moment().add(359, 'days'),
        opens: "right"
    };


        $('[data-datepicker=separateRange]')
            .daterangepicker(options)
            .on('apply.daterangepicker' ,function(ev, picker) {
                var boolStart = this.name.match(/value_from_start_/g) == null ? false : true;
                var boolEnd = this.name.match(/value_from_end_/g) == null ? false : true;

                var mainName = this.name.replace('value_from_start_', '');
                if(boolEnd) {
                    mainName = this.name.replace('value_from_end_', '');
                    $(this).closest('form').find('[name=value_from_end_'+ mainName +']').blur();
                }

                $(this).closest('form').find('[name=value_from_start_'+ mainName +']').val(picker.startDate.format(dateFormat));
                $(this).closest('form').find('[name=value_from_end_'+ mainName +']').val(picker.endDate.format(dateFormat));

                $(this).trigger('change').trigger('keyup');
            })
            .on('show.daterangepicker', function(ev, picker) {
                var boolStart = this.name.match(/value_from_start_/g) == null ? false : true;
                var boolEnd = this.name.match(/value_from_end_/g) == null ? false : true;
                var mainName = this.name.replace('value_from_start_', '');
                if(boolEnd) {
                    mainName = this.name.replace('value_from_end_', '');
                }

                var startDate = $(this).closest('form').find('[name=value_from_start_'+ mainName +']').val();
                var endDate = $(this).closest('form').find('[name=value_from_end_'+ mainName +']').val();

                $('[name=daterangepicker_start]').val(startDate).trigger('change').trigger('keyup');
                $('[name=daterangepicker_end]').val(endDate).trigger('change').trigger('keyup');
                
                if(boolEnd) {
                    $('[name=daterangepicker_end]').focus();
                }
            });
</script>

<script type="text/javascript">
   $(function(){
  
  var startDate, endDate;
  
  var datepicker = {
        container: $("#datepicker"),
        dateFormat: 'mm/dd/yy',
        dates: [null, null],
        status: null,
        inputs: {
            checkin: $('#checkin'),
            checkout: $('#checkout'),
            dates: $('#dates')
        }
    };

  datepicker.container.datepicker({
  numberOfMonths: 2,
  dateFormat: datepicker.dateFormat,
  minDate: 0,
  maxDate: null,

  beforeShowDay: function(date) {
    var highlight = false,
        currentTime = date.getTime(),
        selectedTime = datepicker.dates,
        checkin_date = selectedTime[0] ? new Date(selectedTime[0]) : null,
        checkout_date = selectedTime[1] ? new Date(selectedTime[1]) : null,
        checkin_timestamp,
        checkout_timestamp,
        classes = 'ui-datepicker-highlight';
    
    date.setHours(0);
    date.setMinutes(0);
    date.setSeconds(0);
    date.setMilliseconds(0);

    currentTime = date.getTime();
    
    // CHECKIN/CHECKOUT CLASSES
     if(checkin_date) {
       checkin_date.setHours(0);
       checkin_date.setMinutes(0);
       checkin_date.setSeconds(0);
       checkin_date.setMilliseconds(0);
       checkin_timestamp = checkin_date.getTime();

       startDate = checkin_timestamp;
     }

    if(checkout_date) {
      checkout_date.setHours(0);
      checkout_date.setMinutes(0);
      checkout_date.setSeconds(0);
      checkout_date.setMilliseconds(0);
      checkout_timestamp = checkout_date.getTime();

      endDate = checkout_timestamp;
    }

    if ( checkin_timestamp && currentTime == checkin_timestamp ) {
      classes = 'ui-datepicker-highlight ui-checkin';
    } else if (checkout_timestamp && currentTime == checkout_timestamp) {
      classes = 'ui-datepicker-highlight ui-checkout';
    }

    // Highlight date range
    if ((selectedTime[0] && selectedTime[0] == currentTime) || (selectedTime[1] && (currentTime >= selectedTime[0] && currentTime <= selectedTime[1]))) highlight = true;

    return [true, highlight ? classes : ""];
  },
  onSelect: function(dateText) {

    if (!datepicker.dates[0] || datepicker.dates[1] !== null) {
      // CHOOSE FIRST DATE
      
      // fill dates array with first chosen date
      datepicker.dates[0] = $.datepicker.parseDate(datepicker.dateFormat, dateText).getTime();
      datepicker.dates[1] = null;
      
      // clear all inputs
        datepicker.inputs.checkin.val('');
      datepicker.inputs.checkout.val('');
        datepicker.inputs.dates.val('');
      
      // set current datepicker state
      datepicker.status = 'checkin-selected';
      
      // create mouseover for table cell
      $('#datepicker').delegate('.ui-datepicker td', 'mouseover', function(){
        
        // if it doesn't have year data (old month or unselectable date)
        if ($(this).data('year') == undefined) return;
        
        // datepicker state is not in date range select, depart date wasn't chosen, or return date already chosen then exit
        if (datepicker.status != 'checkin-selected') return;
        
        // get date from hovered cell
        var hoverDate = $(this).data('year')+'-'+($(this).data('month')+1)+'-'+$('a',this).html();
        
        // parse hovered date into milliseconds
        hoverDate = $.datepicker.parseDate('yy-mm-dd', hoverDate).getTime();
        
        $('#datepicker td').each(function(){
          
          // compare each table cell if it's date is in date range between selected date and hovered
          if ($(this).data('year') == undefined) return;
          
          var year = $(this).data('year'),
              month = $(this).data('month'),
              day = $('a', this).html();
            
          var cellDate = $(this).data('year')+'-'+($(this).data('month')+1)+'-'+$('a',this).html();
          
          // convert cell date into milliseconds for further comparison
          cellDate = $.datepicker.parseDate('yy-mm-dd', cellDate).getTime();

          if ( (cellDate >= datepicker.dates[0] && cellDate <= hoverDate) || (cellDate <= datepicker.dates[0] && cellDate >= hoverDate) ) {
              $(this).addClass('ui-datepicker-hover');
            } else {
              $(this).removeClass('ui-datepicker-hover');
            }

        });
      });

  } else {
    // CHOOSE SECOND DATE
    
    // push second date into dates array
    datepicker.dates[1] = $.datepicker.parseDate(datepicker.dateFormat, dateText).getTime();
    
    // sort array dates
      datepicker.dates.sort();

    var checkInDate = $.datepicker.parseDate('@', datepicker.dates[0]);
    var checkOutDate = $.datepicker.parseDate('@', datepicker.dates[1]);
    
    datepicker.status = 'checkout-selected';
                
//fill input fields
   datepicker.inputs.checkin.val($.datepicker.formatDate(datepicker.dateFormat, checkInDate));
                datepicker.inputs.checkout.val($.datepicker.formatDate(datepicker.dateFormat, checkOutDate)).change();
                datepicker.inputs.dates.val(datepicker.inputs.checkin.val() + ' - ' + datepicker.inputs.checkout.val());

            }
        }
    });
});
</script>