<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutfour.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('.selecttwo').select2();
});
</script>
<div class="container birthdate">
   <div class="row" style="padding:40px 0;">
      <div class="col-md-4 hidden-xs mobile-deisply-none">
         <img src="{{ asset('public/front/images/woman-4.jpg')}}" style="width: 100%;">
      </div>
      <div class="col-md-8 visa-insurance" style="padding: 0;">
         <form action="{{ url('quotes') }}" method="post" class=" form form-layout1" role="form" id="dh-get-quote">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">               
               
            <div class="row" style="margin-bottom:0px;">
               @for($orderi=1;$orderi<=17;$orderi++)
                  @if(array_search("id_1",$orderdata) == $orderi)
                     @if(isset($fields['fname']))
                        @if($fields['fname'] == 'on')
                        <div class="col-md-6">
                           <label for="firstname" class="">First name</label>
                           <div class="custom-form-control">
                              <input type="text" name="fname" placeholder="firstname" required id="firstname" class="form-input">
                           </div>
                        </div>
                        @endif
                        @endif
                        @if(isset($fields['lname']))
                        @if($fields['lname'] == 'on')
                        <div class="col-md-6">
                           <label for="lname" class="">Last name</label>
                           <div class="custom-form-control">
                              <input type="text" name="lname" placeholder="lastname" required id="lname" class="form-input">
                           </div>
                        </div>
                        @endif
                        @endif
                     @endif

                     @if(array_search("id_17",$orderdata) == $orderi)
                     @if(isset($fields['sum_insured']))
                     @if($fields['sum_insured'] == 'on')
                     @php
                        $sum = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
                        $min = min($sum);

                        $firstsuminsured = $min->sum_insured;
                     @endphp
                     
                     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                     <script>
                        @php
                        $sum = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
                        @endphp
                        var SliderValues = [0,<?php
                         $s = 0;
                         foreach($sum as $r){
                         $s++;   
                         echo $sumamount = $r->sum_insured;
                         if($s < count($sum)){
                         echo ', ';
                         }
                         } ?>];

                        var iValue = SliderValues.indexOf({{$firstsuminsured}});
                        $(function () {
                            $("#sum_slider").slider({
                                range: "min",
                                min: 0,
                                max: SliderValues.length - 1,
                                step: 1,
                                value: iValue,
                                slide: function (event, ui) {
                                    $('#coverage_amount').text(SliderValues[ui.value]);
                                       //alert(SliderValues.length);
                                       for (i = 0; i < SliderValues.length; i++) {
                                       var group = SliderValues[i];
                                       $('.coverage-amt-'+group).hide();
                                       }
                                       $('.coverage-amt-'+SliderValues[ui.value]).show();
                                       $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
                                       $( "#sum_insured2").val(SliderValues[ui.value]);
                                }
                            });

                        });
                          </script>

                       <div class="col-md-12">
                        <h4 class="coverage" style="color: black; margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage:
                            <input type="text" id="coverage_amount" name="coverage_amount" style="border:0; font-size:23px; color:#1BBC9B; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: left;width: 150px;" value="${{$firstsuminsured}}"></h4>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                           <div id="sum_slider" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
                           <input type="hidden" id="sum_insured2" name="sum_insured2" value="{{$firstsuminsured}}" />

                           <input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
                        
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
                                      $('#country').addClass('col-md-12')
                                      
                                 }
                              }
                           </script>
                           <div id="country" class="col-md-12">
                              <label for="primary_destination" class="">States In Canda</label>
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div id="canadastate" class="col-md-6" style="display:none;">
                              <label for="primary_destination" class="">States In Canda</label>
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           @else

                           <div class="col-md-12" >
                              <label for="primary_destination" class="">Primary destination in Canada</label>
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


                     @if(array_search("id_8",$orderdata) == $orderi)
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

                     <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                        <label class="input-label"> Start Date</label>
   
                     <input style="padding-left: 40px !important;" id="departure_date" autocomplete="off" name="departure_date" value=""  class="form-control"  type="text" placeholder="Start Date" required <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>
                     <span class="hidden-xs calendericon" style="color:#01a281;">
         
                           <i class="fa fa-calendar" aria-hidden="true" ></i>
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
                         <div class="col-md-6">
                              <label for="return_date" class="">End Date of Coverage</label>
                              <div class="custom-form-control">
                                 <input style="padding-left: 40px !important;" id="return_date" autocomplete="off" name="return_date" value=""  class="form-control"  type="text" placeholder="End Date" required @if($data->pro_supervisa == 1) readonly type="date" @endif >
                                 <span class="hidden-xs calendericon" style="color:#01a281;">
                            <i class="fa fa-calendar" aria-hidden="true" ></i>
                           </span>
                     </div>
                           </div>
                           @if($data->pro_supervisa != 1)
                           <script>
                              $('#return_date').datepicker({
                              format: 'yyyy-mm-dd',
                              todayHighlight:'TRUE',
                              autoclose: true,
                              });
                           </script>  
                           @endif
                     @endif
                     
                     @endif
                     @if(array_search("id_3",$orderdata) == $orderi)

                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-12">
                           <label for="number_travelers" class="">Number of Travellers</label>
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
                           <div style="display: none;" id="traveler{{ $i }}" class="no_of_travelers col-md-12">
                              <div class="row">
                                    <div style="padding-left: 0px;" class="col-md-6 padding-right-zero-on-mobile padding-left-zero-on-mobile">
                                       <label for="day{{$i}}" class="">Age of the oldest Traveller <span class="text-danger dateDisplay"></span></label>
                                       <div class="custom-form-control">
                                          <input id="dateofbirthfull{{ $i }}" class="form-input" type="text" inputmode="numeric" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                       </div>
                                    </div>
                              
                                    <div style="padding-right: 0px;" class="col-md-6 padding-left-zero-on-mobile">
                                       <label for="year{{$i}}" class="">Select Pre Existing</label>
                                       <div class="custom-form-control">
                                          <select name="pre_existing[]" class="form-input">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="yes">Yes</option>
                                             <option selected value="no">No</option>
                                           </select>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           @endfor
                        @endif
                        @endif
                     @endif

                     @endif
                     @if(array_search("id_4",$orderdata) == $orderi)
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )

                      <div class="col-md-12 col-sm-12 col-xs-12 control-input email-main">
                        <label class="input-label">Email Address (Required)</label>
                        <input id="savers_email" name="savers_email" value="" class="form-control " type="email" placeholder="Email" style="padding-left: 40px !important;" required="">
                        <span class="hidden-xs emailicon" style="color:#01a281;">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                     </div>  
                     @endif
                     @endif
                     @endif
                     @if(array_search("id_7",$orderdata) == $orderi)
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12 col-sm-12 col-xs-12 control-input">
                     <label class="input-label" for="phonenumbermask">Phone <small id="phone_error" class="text-danger"></small></label>
                           <input inputmode="numeric"  id="phonenumbermask" placeholder="000-000-0000" data-placeholder="000-000-0000" id="phone" name="phone" size="" value="" class="form-control " placeholder="Enter Phone Number" type="text" required="" style="padding-left: 40px !important;">
                           <span class="phoneicon" style="color:#01a281;">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                           </span>
                     </div>

                     @endif
                     @endif
                     @endif
                     @if(array_search("id_14",$orderdata) == $orderi)
                      @if(isset($fields['gender']) && $fields['gender'] == "on" )
                        <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                           <label class="input-label">Gender</label>
                           <button type="button" id="person_gender" class="form-control text-left" onclick="persongender();" style="padding: 0;font-size: 14px;font-weight: 500;"><i class="fa fa-male genderi"></i> Select Gender</button>
                           <script>
                              function persongender(){
                                 if(document.getElementById('gender').value == 'male'){
                                 document.getElementById('person_gender').innerHTML = '<i class="fa fa-female genderi"></i> Female';
                                 document.getElementById('gender').value = 'female';
                                 } else {
                                 document.getElementById('person_gender').innerHTML = '<i class="fa fa-male genderi"></i> Male';
                                 document.getElementById('gender').value = 'male';  
                                 }
                              }
                           </script>
                           <input type="hidden" name="gender" id="gender" value="">
                        </div>
                        @endif
                        @endif
                        @if(array_search("id_12",$orderdata) == $orderi)
                        @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                        <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding input custom_traveller gender-main">
                              <label class="input-label">Gender of the oldest traveller</label>
                              <button type="button" id="oldest_gender" class="form-control text-left" onclick="oldergender();" style="padding: 0;font-size: 14px;font-weight: 500;"><i class="fa fa-male genderi"></i>Gender of the oldest traveller</button>
                           <script>
                           function oldergender(){
                              if(document.getElementById('old_traveller_gender').value == 'male'){
                              document.getElementById('oldest_gender').innerHTML = '<i class="fa fa-female genderi"></i> Female';
                              document.getElementById('old_traveller_gender').value = 'female';
                              } else {
                              document.getElementById('oldest_gender').innerHTML = '<i class="fa fa-male genderi"></i> Male';
                              document.getElementById('old_traveller_gender').value = 'male';   
                              }
                           }
                           </script>
                        <input type="hidden" name="old_traveller_gender" id="old_traveller_gender" value="">       
                        </div>
                        @endif
                        @endif
               
                        @if(array_search("id_5",$orderdata) == $orderi)
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-6 no-padding check_condtion">
                              <div class="custom-form-control">
                                 <label for="" class="input-label" >Do you Smoke in last 12 months?</label>
                                 <select required class="form-control" name="Smoke12" id="">
                                    <option value="">--- Please Choose ---</option>
                                      <option value="yes" >Yes</option>
                                      <option value="no" >No</option>
                                 </select>
                              </div>
                           </div>
                      
                           @endif
                        @endif
                        @endif
                        @if(array_search("id_12",$orderdata) == $orderi)
                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                           <div class="col-md-6">
                                 <label for="" class="input-label">Do you require Family Plan ?</label>
                                 <div class="custom-form-control">
                                    <select required class="form-control" name="fplan" id="">
                                       <option value="">--- Please Choose ---</option>
                                         <option value="yes" onclick="changefamilyyes()">Yes</option>
                                         <option selected value="no"  onclick="changefamilyno()">No</option>
                                    </select>
                                 </div>
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
                           @endif
                        @endif
                        @endif
                     
                     
                     @endfor
                     <div class="col-md-12 mt-3"  style="clear:both;">
                        <span id="family_error" style="display: none; font-size: 16px;font-weight: bold;text-align: right;padding: 20px;" class="text-danger"><i class="fa fa-warning"></i> </span>
                        <div class="center m-t-30px">
                           <button type="submit" name="GET QUOTES" id="GET_QUOTES"  class="btn btn-danger bg-red show-loading-popup" style="border: 1px solid rgb(1, 162, 129);padding: 7px 35px;margin-top: 0px;display: block;border-radius: 4px !important;"><i class="fa fa-list"></i> Get a Quote </button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
      </div>
   </div>
</div>
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
      $("#dateofbirthfull1").mask("99-99-9999", {
         completed: function() {
           dateReflection($(this));
         }
       });
       $('#dateofbirthfull2').mask('00/00/0000');
       $('#dateofbirthfull3').mask('00/00/0000');
       $('#dateofbirthfull4').mask('00/00/0000');
       $('#dateofbirthfull5').mask('00/00/0000');
       $('#dateofbirthfull6').mask('00/00/0000');
       $('#phonenumbermask').mask('000-000-0000');
      });
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
<script>   
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
    // var someFormattedDate = y + '/' + mm + '/' + dd;
    document.getElementById('return_date').value = someFormattedDate;
   }, 1000);
   }
   
   function checkfamilyplan(){
   //Eligibility
   var inps = json_encode();
   var ages = [];
   for (var i = 0; i <inps.length; i++) {
   var inp=inps[i];
   if(inp.value > 0){
    ages.push(inp.value);
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
   
   if(document.getElementById('familyplan_temp').value == 'yes'){
   if(document.getElementById('number_travelers').value >='2' && max_age <=59 && min_age <=21){
   document.getElementById('GET_QUOTES').style.display = 'block';
   document.getElementById('family_error').innerHTML = '';
   document.getElementById('family_error').style.display = 'none';
   } else {
   document.getElementById('GET_QUOTES').style.display = 'none';
   if(document.getElementById('number_travelers').value <'2'){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
   } else if(max_age > 59){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59';    
   } else if(min_age > 21){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';   
   }
   document.getElementById('family_error').style.display = 'block'; 
   }
   
   
   } else {
    document.getElementById('GET_QUOTES').style.display = 'block';
    document.getElementById('family_error').style.display = 'none'; 
   }
    
   }
   
   
</script>
<script>
   /*   jQuery('#gender:before').click(function() {
          var text = jQuery(this).attr('data-on-text');
   //        var text2 = jQuery(this).attr('data-off-text');
   //        checkbox-6
           console.log(text);
   //         console.log(text2);
      });
   
      function subform(){
          alert('submit form');
          return false;
      }
   */
      jQuery(document).ready(function($){
          $("select[name=number_travelers]").on("change", function(){
              var number_of_traveller = $(this).val();
              var aa = "";
              for(var i=2; i<=number_of_traveller; i++){
                  aa = aa +'<div class="col-md-6 col-sm-6 col-xs-12 control-input">' + $(".birthday")[0].outerHTML +'</div>';
              }
   
              $("#birthday_view").html(aa);
              console.log( $(".birthday")[0] );
          })
    /*
          $("button[type=submit]").on("change", function(){
              //function validateForm() {
              //if($(this).val() > 1){
              ///       alert('fsd');
              //        return false;
              //}
              //}
          });
   
         $('button[type="submit"]').click(function() {
              if($("select[name=number_travelers]").val()>1  && $("select[name=familyplan]").val() == "1"){
                  var counter = 0;
                  var aged=[];
                  $("select[name=birth_month\\[\\]]").each(function(){
                      //alert( $("select[name=birth_month\\[\\]]").eq(counter).val() );
                      var d = new Date( $("select[name=birth_year\\[\\]]").eq(counter).val() ,   $("select[name=birth_month\\[\\]]").eq(counter).val()-1,  $("select[name=birth_day\\[\\]]").eq(counter).val() );
                      var tDate = new Date();
                      var age=tDate.getFullYear() - d.getFullYear();
                      aged.push(age);
   
                      var max=Math.max.apply(Math,aged);
                      var min=Math.min.apply(Math,aged);
                      //if((max>="21" && max<="58") && (min>="1" && min<"21")){
                      if((max < 58) && (min >0 && min < 21)){
                          $("#familymsg").hide();
                          return true;
                      }else{
                          $("#familymsg").show();
                          return false;
                      }
                      counter++;
                  })
              }else{
                  $("#familymsg").hide();
              }
          });
   
    $('#GET_QUOTES').click(function(){
   
        var deparature = $('#departure_date').val();
        $('#departuredate').val(deparature);
   
        var returndate = $('#return_date').val();
        $('#returndate').val(returndate);
   
   
        });
   */
   
      });
</script>
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
       var inps = document.getElementsByName('ages[]');
       var ages = [];
       for (var i = 0; i <inps.length; i++) {
           var inp=inps[i];
           if(inp.value > 0){
               ages.push(inp.value);
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
           if($('#number_travelers').value >='2' && max_age <=59 && min_age <=21){
               $('#GET_QUOTES').css('display', 'block');
               $('#family_error').html('');
               $('#family_error').css('display', 'none');
           } 
           else {
               $('#GET_QUOTES').css('display', 'none');
               if($('#number_travelers').value <'2'){
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
   
   window.onload = function() {
     checktravellers();
   };
   
</script>