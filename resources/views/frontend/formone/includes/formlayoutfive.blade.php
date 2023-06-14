<link rel="stylesheet" type="text/css" href="{{ asset('public\front\tabs\formlayoutfive.css')}}">
<div class="col-md-12 text-center" style="margin-top: 30px;margin-bottom: 30px;">
   <h1 style="font-weight:bold;margin: 0px; color: #b92c28 !important" class=""><strong>{{ $data->pro_name }}</strong></h1>
   <h2 style="margin-top: -3px;font-size: 16px;font-weight: normal;line-height: normal;color: #000;" class="hidden-xs">To start, we have a few quick questions to understand your needs.</h2>
</div>
<div class="container birthdate new-visa mb-5  mt-2" style="padding: 20px; background: var(--color-light);">
         <form method="POST" action="{{ url('quotes') }}">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
                  <div class="row">
                     @for($orderi=1;$orderi<=17;$orderi++)
                     @if(array_search("id_1",$orderdata) == $orderi)
                        @if(isset($fields['fname']))
                        @if($fields['fname'] == 'on')
                        <div class="col-md-6 text-md-right" >
                           <label for="input-label"  class="input-label">First name</label>
                        </div>
                        <div class="col-md-6 no-padding-right">
                           <div class="custom-form-control">
                              <input type="text" name="fname" placeholder="First Name" required id="firstname" class="form-input ">
                           </div>
                        </div>
                        @endif
                        @endif
                        @if(isset($fields['lname']))
                        @if($fields['lname'] == 'on')
                           <div class="col-md-6 text-md-right">
                              <label for="lname" class="input-label">Last name</label>
                           </div>
                           <div class="col-md-6 no-padding-right">
                              <div class="custom-form-control">
                                 <input type="text" name="lname" placeholder="Last Name" required id="lname" class="form-input">
                              </div>
                           </div>
                        @endif
                        @endif
                     @endif
                     @if(array_search("id_4",$orderdata) == $orderi)
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )
                           <div class="col-md-6 text-md-right" >
                              <label for="savers_email" class="input-label">Email Address <span onclick="slidequestion('email')"><i class="fa fa-question-circle"></i></span> </label>
                           </div>
                           <div class="col-md-6 no-padding-right">
                              <div class="custom-form-control">
                                 <input style="padding-left:40px;" type="text" name="savers_email" placeholder="Email" required id="savers_email" class="form-input">
                                 <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                 </span>
                              </div>
                           </div>
                           <div id="slide_email" class="form-group tooltip-box">
                              <div class="p-20px">
                                 <span onclick="slidequestion('email')" class="tooltip-close fa fa-times"></span>
                                 <div class="tooltip-content"><b>Your Email Address</b><br><br>
                                    In addition to providing your insurance quotes immediately, we will also email you a link to your quotes. That way, if you are not ready today to apply online or call us, you can easily access your quotes and proceed at a later, more convenient date.
                                    <br><br>
                                    We value your privacy. We will not trade or sell your name to third parties except when required to fulfill services you request. For details, please click on the Privacy link at the bottom of this page.
                                 </div>
                              </div>
                           </div>
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_7",$orderdata) == $orderi)
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-6 text-md-right">
                        <label for="phonenumbermask"  class="input-label">Phone Number <b id="phone_error" class="text-danger"></b></label>
                     </div>
                     <div class="col-md-6 no-padding-right">
                        <div class="custom-form-control">
                           <input inputmode="numeric" style="padding-left:40px;" id="phonenumbermask" placeholder="000-000-0000" data-placeholder="000-000-0000" onkeyup="validatephone()" type="text" name="phone" required id="phone" class="form-input">
                           <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                           </span>
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
                     @endif
                     @if(array_search("id_17",$orderdata) == $orderi)
                     @if(isset($fields['sum_insured']))
                     @if($fields['sum_insured'] == 'on')
                     <div class="col-md-6 text-md-right">
                        <label for="coverageammount"  class="input-label">Coverage Amount <span onclick="slidequestion('coverage')"><i class="fa fa-question-circle"></i></span></label>
                     </div>
                     <div class="col-md-6 no-padding-right">
                        <div class="custom-form-control">
                           <select required class="form-input" name="sum_insured2" id="coverageammount">
                              <option value="">Coverage Amount</option>
                              @foreach($sum_insured as $key=> $r)
                              <option value="{{ $r->sum_insured }}" @if($key == 0) selected
                              @endif>${{ $r->sum_insured }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div id="slide_coverage" class="form-group tooltip-box">
                        <div class="p-20px">
                           <span onclick="slidequestion('coverage')" class="tooltip-close fa fa-times"></span>
                           <div class="tooltip-content"><b>Your Email Address</b><br><br>
                              In addition to providing your insurance quotes immediately, we will also email you a link to your quotes. That way, if you are not ready today to apply online or call us, you can easily access your quotes and proceed at a later, more convenient date.
                              <br><br>
                              We value your privacy. We will not trade or sell your name to third parties except when required to fulfill services you request. For details, please click on the Privacy link at the bottom of this page.
                           </div>
                        </div>
                     </div>
                     @endif
                     @endif
                     @endif
                     @if(array_search("id_6",$orderdata) == $orderi)
                     @if(isset($fields['Country']))
                        @if($fields['Country'] == "on" )
                           @if($data->pro_travel_destination == 'worldwide')
                            <script>
                              function CountryState(id) {
                                  if(id=="Canada")
                                  {
                                      $('#canadastate').fadeIn();
                                      $('#country').removeClass('col-md-12')
                                      $('#country').addClass('col-md-6')
                                  }else 
                                  {
                                      $('#canadastate').hide();
                                      $('#country').removeClass('col-md-6')
                                      $('#country').addClass('col-md-6')
                                      
                                 }
                              }
                           </script>
                              <div class="col-md-6 text-md-right">
                                 <label for="primary_destination" class="input-label">Primary Destination</label>
                              </div>
                              <div id="country" class="col-md-6 no-padding-right">
                                 <div class="custom-form-control">
                                    <select onchange="CountryState(this.value)" required class="form-input" name="primary_destination" id="primary_destination">
                                       <option value="">Select Country</option>
                                       @foreach(DB::table('countries')->get() as $r)
                                          <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           <div class="col-md-12 " id="canadastate" style="display:none; padding-right:0px !important; padding-left:0px !important;">
                              <div class="row">
                                 <div class="col-md-6 text-md-right">
                                    <label for="primary_destination" class="input-label">States In Canda</label>
                                 </div>
                                 <div class="form-group col-md-6 custom-form-control no-padding-right mb-0" >
                                    <select required class="form-control selecttwo form-input" name="primary_destination" id="primary_destination">
                                       <option value="">Primary destination in Canada</option>
                                       @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                          <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           </div>
                           @else
                           <div class="col-md-6 text-md-right">
                              <label for="primary_destination" class="input-label">States In Canda</label>
                           </div>
                           <div class="col-md-6 no-padding-right" >
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           @endif
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_3",$orderdata) == $orderi)
                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-6 text-md-right">
                           <label for="number_travelers" class="input-label">Number of Travellers</label>
                        </div>
                        
                        <div class="col-md-6 no-padding-right">
                        <div class="custom-form-control">
                           <select onchange="checknumtravellers(this.value)" required class="form-input" name="number_travelers" id="number_travelers">
                              <option value="">Number of Travellers</option>
                              @for($i=1;$i<=$number_of_travel;$i++)
                              <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                           </select>
                        </div>
                        </div>


                        @if(isset($fields['dob']) && $fields['dob'] == "on" )

                           @php
                              $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
                              $c = 0;
                           @endphp

                           @for($i=1;$i<=$number_of_travel;$i++)
                           <div style="display: none; padding-right:0px !important;padding-left:0px !important" id="traveler{{ $i }}" class="no_of_travelers col-md-12" >
                              <div class="row">
                                 <div class="col-md-6 text-md-right">
                                    <label for="day{{$i}}" class="input-label" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;  !important">Birth date of the <?php echo $ordinal_words[$i];?> Traveller</label>
                                 </div>
                                    <div class="custom-form-control col-md-6 no-padding-right" >
                                       <input id="dateofbirthfull{{ $i }}" class="form-input" type="text" inputmode="numeric" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                       <label for="year{{$i}}" class="input-label">Pre Existing of <?php echo $ordinal_words[$i];?><span onclick="slidequestion('preexisting{{ $i }}')"><i class="fa fa-question-circle"></i></span></label>
                                    </div>
                                    <div class="custom-form-control col-md-6 no-padding-right">
                                       <select name="pre_existing[]" class="form-input">
                                          <option value="">Select Pre Existing of <?php echo $ordinal_words[$i];?></option>
                                          <option value="yes">Yes</option>
                                          <option value="no">No</option>
                                       </select>
                                    </div>
                                    <div id="slide_preexisting{{ $i }}" style="margin-top: 10px;" class="form-group tooltip-box">
                                       <div class="p-20px">
                                          <span onclick="slidequestion('preexisting{{ $i }}')" class="tooltip-close fa fa-times"></span>
                                          <div class="tooltip-content"><b>Pre-Existing Medical Conditions</b><br><br>
                                             A pre-existing medical condition is an illness or injury that you know you already have (e.g. asthma, heart condition). Even if you are showing symptoms of an illness and have not yet seen a doctor, this is considered a "pre-existing" condition (e.g. you have felt chest pains but didn't seek any treatment).
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                        
                           @endfor
                        @endif
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_8",$orderdata) == $orderi)
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

                        <div class="col-md-6 text-md-right">
                           <label for="departure_date" class="input-label">Start Date of Coverage</label>
                       
                        </div>
                        <div class="col-md-6 no-padding-right">
                             <div class="custom-form-control">
                              <input style="padding-left:40px;" id="departure_date" autocomplete="off" name="departure_date" value=""  class="form-control"  type="text" placeholder="Start Date" required <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>
                              <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                              </span>
                              <script>
                           $('#departure_date').datepicker({
                           format: 'yyyy-mm-dd',
                           todayHighlight:'TRUE',
                           autoclose: true,
                           minDate: 0,
                           });
                        </script>
                           </div>
                        </div>
                        <div class="col-md-6 text-md-right">
                           <label for="departure_date" class="input-label">End Date of Coverage</label>
                        </div>
                        <div class="col-md-6 no-padding-right">
                           <div class="custom-form-control">
                              <input style="padding-left:40px;" id="return_date" autocomplete="off" name="return_date" value=""  class="form-control"  type="text" placeholder="End Date" required @if($data->pro_supervisa == 1) readonly type="date" @endif >
                              <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                              </span>
                              @if($data->pro_supervisa != 1)
                              <script>
                                 $('#return_date').datepicker({
                                 format: 'yyyy-mm-dd',
                                 todayHighlight:'TRUE',
                                 autoclose: true,
                                 });
                              </script>  
                              @endif
                           </div>
                     </div>
                     @endif
                     @endif
                     @if(array_search("id_14",$orderdata) == $orderi)
                     @if(isset($fields['gender']) && $fields['gender'] == "on" )
                        <div class="col-md-6 text-md-right">
                           <label for="gender"  class="input-label">Primary Applicant`s Gender</label>
                        </div>
                        <div class="custom-form-control col-md-6 no-padding-right">
                           <select class="form-input" name="gender" id="gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                        </div>
                     @endif
                     @endif
                     @if(array_search("id_12",$orderdata) == $orderi)
                     @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                        <div class="col-md-6 text-md-right">
                           <label class="input-label">Gender of the Oldest traveller</label>
                        </div>
                        <div class="custom-form-control col-md-6 no-padding-right">
                           <select class="form-input">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                        </div>
                     @endif
                     @endif
                     @if(array_search("id_12",$orderdata) == $orderi)
                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                             <div class="col-md-6 text-right">
                                <label for="" class="">Do you require Family Plan ? <span onclick="slidequestion('family')"><i class="fa fa-question-circle"></i></span> </label>
                             </div>
                             <div class="col-md-6 no-padding-right">
                                 <div class="custom-form-control">
                                    <select onchange="changefamilyyes(this.value)" required class="form-input" name="fplan" id="selectfamilyplan">
                                       <option value="">--- Please Choose ---</option>
                                         <option value="yes">Yes</option>
                                         <option value="no">No</option>
                                    </select>
                                 </div>
                              </div>
                              <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                              <script>
                                 function changefamilyyes(id){
                                    if(id == 'yes')
                                    {
                                       document.getElementById('familyplan_temp').value = 'yes';
                                       checkfamilyplan();
                                    }else{
                                       document.getElementById('familyplan_temp').value = 'no';
                                       checkfamilyplan();
                                    }
                                 }
                              </script>
                              <div id="slide_family" class="form-group tooltip-box">
                                 <div class="p-20px">
                                    <span onclick="slidequestion('family')" class="tooltip-close fa fa-times"></span>
                                    <div class="tooltip-content"><b>Your Email Address</b><br><br>
                                       In addition to providing your insurance quotes immediately, we will also email you a link to your quotes. That way, if you are not ready today to apply online or call us, you can easily access your quotes and proceed at a later, more convenient date.
                                       <br><br>
                                       We value your privacy. We will not trade or sell your name to third parties except when required to fulfill services you request. For details, please click on the Privacy link at the bottom of this page.
                                    </div>
                                 </div>
                              </div>
                           @endif
                        @endif
                        @endif
                        @if(array_search("id_5",$orderdata) == $orderi)
                        @if(array_search("id_5",$orderdata) == $orderi)
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                              <div class="col-md-6  text-md-right">
                                 <label for="" class="  text-md-right" id="">Do you Smoke in last 12 months? <span onclick="slidequestion('smoke')"><i class="fa fa-question-circle"></i></span></label>
                              </div>
                              <div class="col-md-6 no-padding-right">
                                 <label for="" class="d-sm-none">Do you Smoke in last 12 months?</label>
                                 <div class="custom-form-control">
                                    <select required class="form-input" name="Smoke12" id="">
                                       <option value="">--- Please Choose ---</option>
                                         <option value="yes" >Yes</option>
                                         <option value="no" >No</option>
                                    </select>
                                 </div>
                              </div>
                              <div id="slide_smoke" class="form-group tooltip-box">
                                 <div class="p-20px">
                                    <span onclick="slidequestion('smoke')" class="tooltip-close fa fa-times"></span>
                                    <div class="tooltip-content"><b>Your Email Address</b><br><br>
                                       In addition to providing your insurance quotes immediately, we will also email you a link to your quotes. That way, if you are not ready today to apply online or call us, you can easily access your quotes and proceed at a later, more convenient date.
                                       <br><br>
                                       We value your privacy. We will not trade or sell your name to third parties except when required to fulfill services you request. For details, please click on the Privacy link at the bottom of this page.
                                    </div>
                                 </div>
                              </div>

                           @endif
                        @endif
                        @endif
                        @endif
                     
                     @endfor
                     <div class="col-md-6">
                     </div>


                     <div class="col-md-6 d-flex justify-content-between no-padding-right" style="margin-top: 12px; ">
                        <span id="family_error" style="display: none; font-size: 15px;font-weight: bold;text-align: right;padding: 20px;" class="text-danger"><i class="fa fa-warning"></i> </span>
                        <button type="submit" name="GET QUOTES" id="GET_QUOTES" class="btn  get_qout">Get a Quote <i class="fa fa-list-ul"></i> </button>
                     </div>
                  </div>
               </form>
</div>
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   function slidequestion(id) {
      $("#slide_"+id).slideToggle();
   }
   $( document ).ready(function() {
       $('#dateofbirthfull1').mask('00/00/0000');
       $('#dateofbirthfull2').mask('00/00/0000');
       $('#dateofbirthfull3').mask('00/00/0000');
       $('#dateofbirthfull4').mask('00/00/0000');
       $('#dateofbirthfull5').mask('00/00/0000');
       $('#dateofbirthfull6').mask('00/00/0000');
       $('#phonenumbermask').mask('000-000-0000');

   });
</script>
<script>
   //SUPER VISA 
   function supervisayes(){
      window.setTimeout(function(){    
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
       var someFormattedDate = mm + '/' + dd + '/' + y;
       // var someFormattedDate = y + '-' + mm + '-' + dd;
       document.getElementById('return_date').value = someFormattedDate;
      }, 1000);
   }
</script>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 478px; left: 689.5px; z-index: 1; display: none;">
   <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all">
      <a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
      <div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2022</span></div>
   </div>
   <table class="ui-datepicker-calendar">
      <thead>
         <tr>
            <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
            <th scope="col"><span title="Monday">Mo</span></th>
            <th scope="col"><span title="Tuesday">Tu</span></th>
            <th scope="col"><span title="Wednesday">We</span></th>
            <th scope="col"><span title="Thursday">Th</span></th>
            <th scope="col"><span title="Friday">Fr</span></th>
            <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">1</a></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">2</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">3</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">4</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">5</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">6</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">7</a></td>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">8</a></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">9</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">10</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">11</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">12</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">13</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">14</a></td>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">15</a></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">16</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">17</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">18</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">19</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">20</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">21</a></td>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">22</a></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">23</a></td>
            <td class=" ui-datepicker-days-cell-over  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default ui-state-highlight ui-state-hover" href="#">24</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">25</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">26</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">27</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">28</a></td>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">29</a></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">30</a></td>
            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2022"><a class="ui-state-default" href="#">31</a></td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
            <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
         </tr>
      </tbody>
   </table>
</div>
<script>
   function checktravellers(){
       //Number OF Traveller
       var number_of_traveller = $("#number_travelers").val();
       for(var t=2; t<=8; t++){
           $("#traveller_"+t).hide();
           $("#add_" +t).prop("required", false);
       }
       for(var i=2; i<=number_of_traveller; i++){
           $("#traveller_"+i).show();
           $('#add_'+i).prop("required", true);
       }
       //reset values for other people
       var numt = $('#number_travelers').val() || 1;
       var one = 1;
       var num = parseInt(numt) + parseInt(one);
       for(var a=num; a<8; a++){
           $('#add_'+a).val('');
           $('#add_'+a).prop('required', false);
       }
   
       checkfamilyplan();
   }
   
   
   function checkfamilyplan(){
       //Eligibility
       var titles = $('input[name^=years]').map(function(idx, elem) {
          return $(elem).val();
        }).get();
         var ages = [];
         for (var i = 0; i < titles.length; i++) {
            if(titles[i])
            {
               dob = new Date(titles[i]);
               var today = new Date();
               var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
               ages.push(age);
            }
         }
         Array.prototype.max = function() {
           return Math.max.apply(null, this);
         };
         Array.prototype.min = function() {
           return Math.min.apply(null, this);
         };
   
       var max_age = ages.max();
       var min_age = ages.min();
       if($('#familyplan_temp').val() == 'yes'){
           if($('#number_travelers').val() >='2' && max_age <=59 && min_age <=21){
               $('#GET_QUOTES').css('display', 'block');
               $('#family_error').html('');
               $('#family_error').css('display', 'none');
           } 
           else {
               $('#GET_QUOTES').css('display', 'none');
               if($('#number_travelers').val() <'2'){
                   $('#family_error').html('<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
               } 
               else if(max_age > 59){
                   $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');  
               } 
               else if(min_age > 21){
                   $('#family_error').html('<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21'); 
               }
               $('#family_error').css('display', 'block'); 
           }
       } 
       else {
           $('#GET_QUOTES').css('display', 'block');
           $('#family_error').css('display', 'none');  
       }
       
   }
</script>