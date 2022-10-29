<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/formlayoutthree.css') }}">
<div class="clearfix"></div>
<section style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('') }}/public/front/bgs/2.jpg'); background-size: cover; background-position: 50% 50%; padding:100px 0px 200px 0px;">
   <div class="container">
      <div class="col-md-12">
         <h1 class="mainheading">
            <strong>{{ $data->pro_name }}</strong>
         </h1>
         <h2 class="subheading">To start, we have a few quick questions to understand your needs.</h2>
      </div>
      <div class="col-md-12 text-center">
         <div class="clearfix"></div>
         <form action="{{ url('quotes') }}" method="post" class="form-horizontal form-layout2" role="form">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
            <div id="listprices_">
               <div class="page_1">
                  @if($fields['sum_insured'] == 'on')
                  <div class="col-md-4">
                     <select class="form-control" name="sum_insured2" id="sum_insured2">
                        <option value="">Coverage Amount</option>
                        @foreach($sum_insured as $r)
                        <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                        @endforeach
                     </select>
                  </div>
                  @endif
                  @if($fields['sdate'] == "on" && $fields['edate'] == "on")
                  <div class="col-md-4" style="margin-bottom: 10px;">
                  @if($data->pro_supervisa == 1)
                  <input autocomplete="off" id="departure_date"  name="departure_date" class="form-control" type="text" required onchange="supervisayes()">
                  <i class="fa fa-calendar" onclick="$('#departure_date').focus();" style="position: absolute;top: 11px;right: 28px;font-size: 16px;color: #01a281;"></i>     
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
                       $('input[name="departure_date"]').daterangepicker({
                         opens: 'left',
                        minDate: today,
                        singleDatePicker: true,
                         showDropdowns: true,
                       }, function(start, end, label) {

                       });
                     });
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
                  </script>
                  @else
                  <input type="text" name="daterange" id="daterange" autocomplete="off" readonly="true" class="form-control" value="" placeholder="" />
                  <i class="fa fa-calendar" onclick="$('#daterange').focus();" style="position: absolute;top: 11px;right: 28px;font-size: 16px;color: #01a281;"></i>
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
                       $('input[name="daterange"]').daterangepicker({
                         opens: 'left',
                        minDate: today,
                        autoApply: true,
                       }, function(start, end, label) {
                         document.getElementById('departure_date').value = start.format('YYYY-MM-DD');
                         document.getElementById('return_date').value = end.format('YYYY-MM-DD');
                         //Calculation of Duration:
                         var date1 = new Date(start.format('YYYY-MM-DD'));
                         var date2 = new Date(end.format('YYYY-MM-DD'));
                         var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                         var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) + 1); 
                         $('.duration_days').html(diffDays+' Days');
                       });
                     });
                  </script>
                  <input type="hidden" name="departure_date" id="departure_date" value="">
                  @endif
                  <input type="hidden" name="return_date" id="return_date" value="">
                  </div>
                  @endif
                  <div class="col-md-4 agesdiv" id="agesdiv">
                     <button class="btn btn-default agesbtn form-control" type="button" onclick="$('.ageandcitizen').fadeIn(300);">Ages and Details <i class="fa fa-caret-down"></i></button>
                     <div class="col-md-12 ageandcitizen" style="padding: 1px 15px; display: none;">
                        @if($fields['dob'] == 'on')
                        <div class="col-md-12 no-padding">
                           <h3><i class="fa fa-user"></i> Primary Traveler</h3>
                        <div class="row yearsdiv">
                           <div class="col-md-5">
                              <small style="font-size: 12px;color: #999;">Age</small>
                              <input type="text" name="ages[]" id="ages[]" value="" class="primaryage" style="margin-top: -5px !important;display: block;">
                           </div>
                           <div class="col-md-2 text-center" style="padding-top: 10px;">
                              or
                           </div>
                           <div class="col-md-5" style="padding-top: 10px;">
                              <a style="cursor: pointer;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
                           </div>
                        </div>
                        
                        <div class="row dobdiv" style="display:none;">
                           <div class="col-md-12">
                              <div class="col-md-6 no-padding">
                                 <div class="col-md-4" style="padding: 0 5px;">
                                    <small style="font-size: 12px;color: #999;padding: 0;">Month</small>
                                    <input type="text" style="margin-top: -5px !important;display: block;">
                                 </div>
                                 <div class="col-md-4" style="padding: 0 5px;">
                                    <small style="font-size: 12px;color: #999;padding: 0;">Day</small>
                                    <input type="text" style="margin-top: -5px !important;display: block;">
                                 </div>
                                 <div class="col-md-4" style="padding: 0 5px;">
                                    <small style="font-size: 12px;color: #999;padding: 0;">Year</small>
                                    <input type="text" id="dob_year" onchange="calprimaryage()" style="margin-top: -5px !important;display: block;">
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
                              <div class="col-md-6" style="padding-top: 10px;">
                                 <div style="padding: 0;" class="col-md-2 text-center">
                                    or
                                 </div>
                                 <div style="padding: 0;text-align: center;" class="col-md-10">
                                    <a style="cursor: pointer;" onclick="$('.dobdiv').hide(); $('.yearsdiv').show()">Enter Age</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                        @endif

                        @if($fields['traveller'] == 'on')
                        <div class="col-md-12 no-padding" style="margin-top:10px;">
                           <div class="col-md-10 no-padding" style="padding-top: 1px;">
                              <h3><i class="fa fa-list-ul"></i> Additional Travelers</h3>
                           </div>
                           <div class="col-md-2 personswitch" style="padding-top: 25px;padding-right: 0;padding-left: 0;">
                              <input type="checkbox" id="switch" style="float:right;" onclick="checkadditionals();"><label for="switch">Toggle</label>
                              <input type="hidden" id="temp_addi" value="0">
                              <script>
                                 function checkadditionals(){
                                 if(document.getElementById('switch').checked == true){
                                 document.getElementById('temp_addi').value = 1;
                                 $('.additionals').show();
                                 } else {
                                 document.getElementById('temp_addi').value = 0;
                                 $('.additionals').hide();
                                 $('.add_1').val('');
                                 }
                                 }
                              </script>
                           </div>
                        </div>
                        <div class="col-md-12 no-padding additionals" style=" display:none;">
                           <div class="birthday">
                              <div class="col-md-3 add_1" style="padding-left: 0;">
                                 <small style="font-size: 12px;color: #999;">Age</small>
                                 <input type="text" name="years[]" class="add_1" value="" style="margin-top: -5px !important;display: block;">
                              </div>
                           </div>
                           <input type="hidden" id="current_adds" value="1">
                           <input type="hidden" id="number_travelers" name="number_travelers" value="1">
                           <script>
                              function addfunc_0(){
                              $(".add_0").remove();
                              var minus_traveller = document.getElementById('current_adds').value;
                              document.getElementById('current_adds').value = parseFloat(minus_traveller) - 1;
                              $('.addmoretraveler').show();	
                              }
                              function addfunc_1(){
                              $(".add_1").remove();
                              var minus_traveller = document.getElementById('current_adds').value;
                              document.getElementById('current_adds').value = parseFloat(minus_traveller) - 1;
                              $('.addmoretraveler').show();	
                              }
                              function addfunc_2(){
                              $(".add_2").remove();
                              var minus_traveller = document.getElementById('current_adds').value;
                              document.getElementById('current_adds').value = parseFloat(minus_traveller) - 1;
                              $('.addmoretraveler').show();	
                              }
                              function addfunc_3(){
                              $(".add_3").remove();
                              var minus_traveller = document.getElementById('current_adds').value;
                              document.getElementById('current_adds').value = parseFloat(minus_traveller) - 1;
                              $('.addmoretraveler').show();	
                              }
                              function addfunc_4(){
                              $(".add_4").remove();
                              var minus_traveller = document.getElementById('current_adds').value;
                              document.getElementById('current_adds').value = parseFloat(minus_traveller) - 1;
                              $('.addmoretraveler').show();	
                              }
                              function addfunc_5(){
                              $(".add_5").remove();
                              var minus_traveller = document.getElementById('current_adds').value;
                              document.getElementById('current_adds').value = parseFloat(minus_traveller) - 1;
                              $('.addmoretraveler').show();	
                              }
                              
                              function addtravellers(){
                              var number_of_traveller = '5';
                              var current_travellers = document.getElementById('current_adds').value;
                              var current_id = parseFloat(current_travellers) + 1;
                              var aa = '';
                              aa = aa + '<div class="col-md-3 add_'+current_id+'" style="padding-left: 0;"><small style="font-size: 12px;color: #999;">Age</small><input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;" /><i class="fa fa-close" onclick="addfunc_'+current_id+'()"></i></div>';
                              if(current_travellers < number_of_traveller){
                              document.getElementById('current_adds').value = parseFloat(current_travellers) + 1;
                              $('.addmoretraveler').fadeIn(300);	
                              $(".birthday").append(aa);
                              if(current_travellers == '4'){ $('.addmoretraveler').hide(); }
                              } else {
                              $('.addmoretraveler').fadeOut(300);	
                              }
                              }
                           </script>
                           <div class="col-md-2 text-center addmoretraveler" style="padding-top:20px;">
                              <a class="addmorebtn" onclick="addtravellers();"><i class="fa fa-plus" style="position: relative;top: 0px;left: 0px;"></i></a>
                           </div>
                        </div>
                        @endif
                        @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-12 no-padding">
                              <h3><i class="fa fa-fire"></i> Do you Smoke in last 12 months ?</h3>
                              <div class="col-md-12 no-padding">
                                 <label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="Smoke12" value="yes" style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;">
                                 <input type="radio" name="Smoke12" value="no"  style="width: auto !important;height: auto;"> No</label>
                              </div>
                           </div>
                           @endif
                        @endif
                        @php
                           $i = 0;
                           $position_array = array();
                           foreach($fields as $key => $value){
                              $i ++;
                              $position_array[$i] = $key;
                           }
                        @endphp
                        @if(isset($fields['pre_existing']))
                           @if($fields['pre_existing'] == 'on')
                              @php
                                 $num = array_search("pre_existing", $position_array); 
                                 $current_values[$num] = 'group_16'; 
                              @endphp
                              <div class="col-md-12 no-padding">
                                 <h3><i class="fa fa-wheelchair"></i> Pre-existing Condition ?</h3>
                                 <div class="col-md-12 no-padding">
                                    <label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                 </div>
                              </div>
                           @endif
                        @endif

                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                              @php
                                 $num = array_search("fplan", $position_array); 
                                 $current_values[$num] = 'group_15';  
                              @endphp
                              <div class="col-md-12 no-padding">
                                 <h3><i class="fa fa-child"></i> Do you require Family Plan ?</h3>
                                 <div class="col-md-12 no-padding">
                                    <label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="fplan" value="yes" style="width: auto !important;height: auto;" onclick="changefamilyyes()"> Yes</label> <label style="display: inline-block;margin-right: 10px;"><input type="radio" name="fplan" value="no" checked="" style="width: auto !important;height: auto;" onclick="changefamilyno()"> No</label>
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
                           @endif
                        @endif
                        <div class="col-md-12 no-padding text-center">
                           <button type="button" class="btn btn-primary" style="margin-bottom: 20px;margin-top: 20px;border-radius: 20px;width: 100%;" onclick="applychanges();">Apply Changes</button>
                           <script>
                              function applychanges(){
                              var inps = document.getElementsByName('years[]');
                              var ages = [];
                              for (var i = 0; i <inps.length; i++) {
                              var inp=inps[i];
                              ages.push(inp.value);
                              }
                              
                              var ages = ages.filter(Boolean);
                              $('.agesbtn').html(ages + ' Years <i class="fa fa-caret-down"></i>');
                              $('.ageandcitizen').fadeOut(300);	
                              document.getElementById('number_travelers').value = ages.length;
                              checkfamilyplan();
                              }
                           </script>
                        </div>
                        <div class="clear:both;"></div>
                     </div>
                  </div>
                  <div class="clear:both;"></div>
                  <div class="col-md-2 pull-right" style="margin: 30px 0;">
                     <button class="btn nextbtn" type="button" id="GET_QUOTES" onclick="$('.page_1').hide();$('.page_2').show('slow');" style="display: block;"> Next <i class="fa fa-arrow-circle-right"></i></button>
                  </div>
                  <script>
                     $('html').click(function() {
                         $('.ageandcitizen').fadeOut(300);
                      })
                     
                      $('.agesdiv').click(function(e){
                          e.stopPropagation();
                      });
                  </script>
               </div>
               <!-- PAGE ONE ENDED -->
               <div class="page_2" style="display:none;">
                  <div class="row">
                  @if(isset($fields['fname']))
                     @if($fields['fname'] == "on" )
                     <div class="col-md-4" style="margin-bottom:10px;">
                     <input id="fname" name="fname" class="form-control" required type="text" placeholder="Your first name">
                     </div>
                     @endif
                  @endif
                  @if(isset($fields['fname']))
                     @if($fields['fname'] == "on" )
                     <div class="col-md-4" style="margin-bottom:10px;">
                     <input  id="lname" name="lname" class="form-control" required type="text" placeholder="Your last name">
                     </div>
                     @endif
                  @endif
                  @if(isset($fields['email']))
                     @if($fields['email'] == "on" )
                     <div class="col-md-4" style="margin-bottom:10px;">
                     <input  id="savers_email" name="savers_email" class="form-control" required type="email" placeholder="Your email address" style="float: none;padding: 0 10px !important;">
                     </div>
                     @endif
                  @endif
                  </div>
                  <div class="row">
                     @if(isset($fields['phone']))
                        @if($fields['phone'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <input id="phone" name="phone" size="" minlength="10" maxlength="10" class="form-control" placeholder="Your phone number" type="text" required  onkeyup="validatephone()">
                           </div>
                           <script>
                              function validatephone(){
                              var checkphone = document.getElementById('phone').value;
                              document.getElementById('phone').value = checkphone.replace(/\D/g,'');
                              if (checkphone.length < 10) {
                              document.getElementById('phone_error').innerHTML = 'Must be 10 digits';
                              document.getElementById('GET_QUOTES').disabled = true;   
                              } else {
                              document.getElementById('GET_QUOTES').disabled = false;  
                              document.getElementById('phone_error').innerHTML = '';
                              }
                              }
                           </script>
                        @endif
                     @endif
                     @if(isset($fields['traveller_gender']))
                        @if($fields['traveller_gender'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <select class="form-control" name="old_traveller_gender" id="old_traveller_gender" required="">
                                 <option value="">Gender of Oldest Traveler</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                              </select>
                           </div>
                        @endif
                     @endif
                     @if(isset($fields['gender']))
                        @if($fields['gender'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <select class="form-control" name="gender" id="gender" required="" style="float:none;">
                                 <option value="">Gender</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                              </select>
                           </div>
                        @endif
                     @endif
                     @if(isset($fields['smoked']))
                        @if($fields['smoked'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <select class="form-control" name="traveller_Smoke" id="traveller_Smoke" required="">
                                 <option value="">Traveller Smoke ?</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                              </select>
                           </div>
                        @endif
                     @endif
                     <!---Destination country -->
                     @if(isset($fields['Country']))
                        @if($fields['Country'] == "on" )
                           @if($data->pro_travel_destination == 'worldwide')
                           <script>
                              function CountryState(evt) {
                                  if(evt.value=="Canada")
                                  {
                                      jQuery("#primary_destination_State_div").show();
                                      jQuery("#usa_stop_div").hide();
                                  }else if(evt.value=="United States")
                                  {
                                      jQuery("#primary_destination_State_div").hide();
                                      jQuery("#usa_stop_div").hide();
                                 }else
                                 {
                                     jQuery("#primary_destination_State_div").hide();
                                      jQuery("#usa_stop_div").show();
                                 }
                              }
                           </script>
                           <div class="col-md-4">
                              <select name="primary_destination" onchange="CountryState(this)" class="form-control form-select" id="primary_destination" aria-required="true" required>
                                 @foreach(DB::table('countries')->get() as $r)
                                 <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div id="primary_destination_State_div">
                              <div class="col-md-4" style="text-align: left; float:left;">
                                 <select name="primary_destination_State" class="form-control form-select" id="primary_destination_State" autocomplete="off" required>
                                    <option value=""> --- Primary destination in Canada ---</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                    <option value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div id="usa_stop_div" style="display:none;">
                              <div class="col-md-4">
                                 <select name="usa_stop" id="usa_stop" aria-invalid="false" class="form-control" required>
                                 <?php  for($i=0;$i<=$allow_input_field['us_stop_days'];$i++): 
                                    if($allow_input_field['us_stop_days'] == 0 ):
                                     echo "<option selected='' value='0'>None</option>";
                                     else:
                                     echo  "<option value='$i'>$i days</option>";
                                     endif;  
                                    
                                    endfor; ?>
                                 </select>
                              </div>
                           </div>
                           @else
                           <div class="col-md-4">
                              <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required>
                                 <option value=""> --- Primary destination in Canada ---</option>
                                 @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                    <option value="{{ $r->name }}">{{ $r->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                           @endif
                        @endif
                     @endif
                     <!-- Destination ends -->
                  </div>
                  <div class="clear:both;"></div>
                  <div class="col-md-12" style="margin: 50px 0;padding: 0;">
                     <div class="col-md-5 col-xs-12" style="padding: 0;">
                        <button class="btn btn-default" style="padding: 5px 40px; font-weight: bold; font-size: 16px; display: block;border-radius: 50px;  color:#333 !important;background: #FFF !important;box-shadow: none !important; margin-bottom:10px;" id="backbtn" type="button" onclick="$('.page_1').show();$('.page_2').hide('slow');"><i class="fa fa-arrow-circle-left"></i> Back</button>
                     </div>
                     <div class="col-md-7 col-xs-12" style="padding: 0;">
                        <button type="submit" id="getquote" style="font-size:16px;" class="btn nextbtn pull-right"> Continue <i class="fa fa-arrow-circle-right"></i></button>
                     </div>
                  </div>
               </div>
               <span id="family_error" class="col-md-12" style="display: none; font-size: 16px;font-weight: bold;text-align: left;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span><br>
               <input type="hidden" name="broker" value="">     
               <input type="hidden" name="agent" value="">
               <input type="hidden" name="skip_coverage" value="yes">
            </div>
         </form>
      </div>
   </div>
</section>
<script>
function checkfamilyplan(){
   //Eligibility
   var inps = null;

   Array.prototype.max = function() {
     return Math.max.apply(null, this);
   };
   Array.prototype.min = function() {
     return Math.min.apply(null, this);
   };

   var max_age = inps.max(); //ages.max();
   var min_age = inps.min();
   //alert(max_age);
   if(document.getElementById('familyplan_temp').value == 'yes'){
      var number_travelers = ' ';
      if(number_travelers >='2' && max_age <=59 && min_age <=21){
   $('#GET_QUOTES').show();
      document.getElementById('family_error').innerHTML = '';
      document.getElementById('family_error').style.display = 'none';
   } else {
   $('#GET_QUOTES').hide();
   if(number_travelers <'2'){
      document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
   } else if(max_age > 59){
      document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59';	
   } else if(min_age > 21){
      document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';	
   }
      document.getElementById('family_error').style.display = 'block';	
   }

   } else {
   	$('#GET_QUOTES').show();
   	document.getElementById('family_error').style.display = 'none';	
   }
	
}
   
function numoftravelers(){
   if(document.getElementById('familyplan_temp').value == 'yes'){
      checkfamilyplan();
   }
   $("#number_travelers").on("change", function(){
   var number_of_traveller = $(this).val();
   var aa = "";
   for(var i=2; i<=number_of_traveller; i++){
   var aa = aa + $("#birthday")[0].outerHTML;
   }
   $("#birthday_view").html(aa);
      //console.log( $(".birthday")[0] );
   })
}
jQuery(document).ready(function() {
  var tempvalue = localStorage.getItem("dateRange");
	 if(tempvalue){
		 document.getElementById('daterange').value = tempvalue;
		applychanges();
		document.getElementById('daterange').focus;
		//alert(tempvalue);
		} else {
			document.getElementById('daterange').value = '';
		}
 });

(function ( $ ) {
	$.fn.bootstrapNumber = function( options ) {

		var settings = $.extend({
			upClass: 'default',
			downClass: 'default',
			upText: '+',
			downText: '-',
			center: true
			}, options );

		return this.each(function(e) {
			var self = $(this);
			var clone = self.clone(true, true);

			var min = self.attr('min');
			var max = self.attr('max');
			var step = parseInt(self.attr('step')) || 1;

			function setText(n) {
				if (isNaN(n) || (min && n < min) || (max && n > max)) {
					return false;
				}

				clone.focus().val(n);
				clone.trigger('change');
				return true;
			}

			var group = $("<div class='input-group'></div>");
			var down = $("<button type='button'>" + settings.downText + "</button>").attr('class', 'btn btn-' + settings.downClass).click(function() {
				setText(parseInt(clone.val() || clone.attr('value')) - step);
			});
			var up = $("<button type='button'>" + settings.upText + "</button>").attr('class', 'btn btn-' + settings.upClass).click(function() {
				setText(parseInt(clone.val() || clone.attr('value')) + step);
			});
			$("<span class='input-group-btn'></span>").append(down).appendTo(group);
			clone.appendTo(group);
			if(clone && settings.center) {
				clone.css('text-align', 'center');
			}
			$("<span class='input-group-btn'></span>").append(up).appendTo(group);

			// remove spins from original
			clone.prop('type', 'text').keydown(function(e) {
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					(e.keyCode == 65 && e.ctrlKey === true) ||
					(e.keyCode >= 35 && e.keyCode <= 39)) {
					return;
				}
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}

				var c = String.fromCharCode(e.which);
				var n = parseInt(clone.val() + c);

				if ((min && n < min) || (max && n > max)) {
					e.preventDefault();
				}
			});

			self.replaceWith(group);
		});
	};
} ( jQuery ));

$('.after').bootstrapNumber();
$('#colorful').bootstrapNumber({
	upClass: 'success',
	downClass: 'danger'
});
</script>