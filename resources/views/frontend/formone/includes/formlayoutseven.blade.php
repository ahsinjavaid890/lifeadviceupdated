<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutseven.css')}}">
<div class="col-md-12 text-center" style="margin-top: 8px;margin-bottom: 30px;">
   <h1 style="font-weight:bold;margin: 0px; color: #222;" class=""><strong>{{ $data->pro_name }}</strong></h1>
   <h2 style="argin-bottom: 30px ;margin-top: 12px;font-weight: normal;font-size: 1.125em;line-height: 1.5em;letter-spacing: 1px;
   color: #222;" class="hidden-xs">To start, we have a few quick questions to understand your needs.</h2>
</div>   
<form method="POST" action="{{ url('quotes') }}">
   @csrf
<div class=" birthdate card  mb-5 box-style" >
          
<input type="hidden" name="product_id" value="{{ $data->pro_id }}">
@for($orderi=1;$orderi<=17;$orderi++)
   <div class="row">
      @if(array_search("id_12",$orderdata) == $orderi)
      @if(isset($fields['fplan']))
      @if($fields['fplan'] == 'on')                             
            <div class="col-md-6 mb-2">
               <label for="" class="label-style">Do you require Family Plan ?</label>
               <div class="custom-form-control">
                  <select required class="w-100 inputs-style" name="fplan" id="">
                     <option value="">--- Please Choose ---</option>
                       <option value="yes" onclick="changefamilyyes()">Yes</option>
                       <option value="no"  onclick="changefamilyno()">No</option>
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
            @if(array_search("id_3",$orderdata) == $orderi)
            @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-12 mb-2">
                           <label for="number_travelers" class="label-style">Number of Travellers</label>
                           <div class="custom-form-control">
                              <select onchange="checknumtravellers(this.value)" required class="w-100 inputs-style" name="number_travelers" id="number_travelers">
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
                                 <div style="padding-left: 0px;" class="col-md-6 mb-2">
                                    <label for="day{{$i}}" class="label-style">Birth date of the oldest Traveller
                                    </label>
                                       <div class="custom-form-control">
                                          <input id="dateofbirthfull{{ $i }}" class="inputs-style w-100" type="text" inputmode="numeric" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY" style="">
         
                                       </div>
                                    </div>
                              
                                    <div style="padding-right: 0px;" class="col-md-6 mb-2">
                                       <label for="year{{$i}}" class="label-style">Select Pre Existing</label>
                                       <div class="custom-form-control">
                                          <select name="pre_existing[]" class="w-100 inputs-style">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="yes">Yes</option>
                                             <option value="no">No</option>
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
                           <div class="col-md-12 mb-2">
                              <label for="savers_email" class="label-style">Email</label>
                              <div class="custom-form-control">
                                 <input type="text" name="savers_email" placeholder="Email" required id="savers_email" class="w-100 inputs-style">
                              </div>
                           </div>
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_7",$orderdata) == $orderi)
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12 mb-2">
                        <label for="phonenumbermask" class="label-style" >Phone <b id="phone_error" class="text-danger"></b></label>
                        <div class="custom-form-control">
                           <input inputmode="numeric" onkeyup="validatephone()" id="phonenumbermask" type="text" name="phone" placeholder="000-000-0000" data-placeholder="000-000-0000" required id="phone" class="w-100 inputs-style">
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
                     @if(array_search("id_8",$orderdata) == $orderi)
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                     
                     <div class="col-md-6" style="margin-bottom: 10px;">
                     <label class="label-style">Start date of coverage</label>
                        
                        <input id="departure_date" autocomplete="off" name="departure_date" value=""  class="form-control"  type="text" placeholder="Start Date" required <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>

                        <label for="departure_date" style="z-index: 999;padding: 5px 11px !important;position: absolute; top: 28px;
                        right: 17px ;background: #F1F1F1;border-radius: 0px 5px 5px 0;">
                           <i class="fa fa-calendar" aria-hidden="true"></i>
                        </label>
                              
                        <script>
                           $('#departure_date').datepicker({
                           format: 'yyyy-mm-dd',
                           todayHighlight:'TRUE',
                           autoclose: true,
                           minDate: 0,
                           });
                        </script>
                     </div>
                     <div class="col-md-6 mb-2">
                        <label for="return_date" class="label-style">End Date of Coverage</label>
                        <div class="custom-form-control">
                          <input id="return_date" autocomplete="off" name="return_date" value=""  class="form-control"  type="text" placeholder="End Date" required @if($data->pro_supervisa == 1) readonly type="date" @endif >
                          <label for="departure_date" style="z-index: 999;padding: 5px 11px !important;position: absolute;top: 28px;right: 17px;background: #F1F1F1;border-radius: 0px 5px 5px 0;">
                           <i class="fa fa-calendar" aria-hidden="true"></i>
                        </label>
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
                     </div>
                     @endif
                     @endif
                     @if(array_search("id_14",$orderdata) == $orderi)
                     @if(isset($fields['gender']) && $fields['gender'] == "on" )
                     <div class="col-md-12 mb-2">
                        <label for="gender" class="label-style">Primary Applicant`s Gender</label>
                        <div class="custom-form-control">
                              <select required class="w-100 inputs-style" name="gender" id="gender">
                                 <option value="">Select Gender</option>
                                   <option value="male" >Male</option>
                                   <option value="female" >Female</option>
                              </select>
                           </div>
                     </div>
                     @endif
                     @endif
                     @if(array_search("id_12",$orderdata) == $orderi)
                     @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                     <div class="col-md-12 mb-2">
                        <label for="old_traveller_gender" class="label-style">Gender of the Oldest traveller</label>
                        <div class="custom-form-control">
                           <select required class="w-100 inputs-style" name="old_traveller_gender" id="old_traveller_gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(array_search("id_5",$orderdata) == $orderi)
                   
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-6">
                              <label for="" class="label-style">Do you Smoke in last 12 months?</label>
                              <div class="custom-form-control">
                                 <select required class="inputs-style w-100" name="Smoke12" id="">
                                    <option value="">--- Please Choose ---</option>
                                      <option value="yes" >Yes</option>
                                      <option value="no" >No</option>
                                 </select>
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
                  $('#country').removeClass('col-md-6')
                  $('#country').addClass('col-md-6')
               }else 
               {
                  $('#canadastate').hide();
                  $('#country').removeClass('col-md-6')
                  $('#country').addClass('col-md-6')
                  
            }
         }
      </script>
      <div id="country" class="col-md-12 mb-2">
         <label for="primary_destination" class="label-style" >Primary Destination</label>
         <div class="custom-form-control ">
            <select onchange="CountryState(this.value)" required class="w-100 inputs-style" name="primary_destination" id="primary_destination" >
               <option value="">Select Country</option>
               @foreach(DB::table('countries')->get() as $r)
                  <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
               @endforeach
            </select>
         </div>
      </div>
      <div id="canadastate" class="col-md-12" style="display:none;">
         <label for="primary_destination" class="label-style ">States In Canda</label>
         <div class="form-group ">
            <select  required class="inputs-style w-100 selecttwo p-2" name="primary_destination" id="primary_destination">
               <option value="">Primary destination in Canada</option>
               @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                  <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
               @endforeach
            </select>
         </div>
      </div>
      @else

      <div class="col-md-12 mb-2" >
         <label for="primary_destination" class="label-style">Primary destination in Canada</label>
         <div class="custom-form-control">
            <select required class="w-100 inputs-style" name="primary_destination" id="primary_destination">
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
@if(array_search("id_1",$orderdata) == $orderi)
@if(isset($fields['fname']))
   @if($fields['fname'] == 'on')
   <div class="col-md-6 mb-2">
      <label for="firstname" class="label-style">First name</label>
      <div class="custom-form-control">
         <input type="text" name="fname" placeholder="First name" required id="firstname" class="w-100 inputs-style">
      </div>
   </div>
   @endif
@endif
@if(isset($fields['lname']))
   @if($fields['lname'] == 'on')
   <div class="col-md-6 mb-2">
      <label for="lname" class="label-style" >Last name</label>
      <div class="custom-form-control">
         <input type="text" name="lname" placeholder="Last Name" required id="lname" class="w-100 inputs-style">
      </div>
   </div>
   @endif
@endif
@endif
@if(array_search("id_17",$orderdata) == $orderi)
@if(isset($fields['sum_insured']))
   @if($fields['sum_insured'] == 'on')
   <div class="col-md-12 mb-2">
      <label for="coverageammount"class="label-style" >Coverage Amount</label>
      <div class="custom-form-control ">
         <select required class="w-100 inputs-style" name="sum_insured2" id="coverageammount">
            <option value="">Coverage Amount</option>
            @foreach($sum_insured as $key=> $r)
            <option value="{{ $r->sum_insured }}" @if($key == 0) selected
               @endif>${{ $r->sum_insured }}</option>
            @endforeach
         </select>
      </div>
   </div>
   @endif
@endif
@endif
   </div> 
   @endfor                                             
</div>

<div class="col-md-12 text-center mb-5">
   <button type="submit" class="btn btn-lg get_qout">Continue<i class="pl-2 fa fa-arrow-right"></i></button>
</div> 
<br><br><br>
</form>             
                     
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
    //var someFormattedDate = mm + '/' + dd + '/' + y;
    var someFormattedDate = y + '/' + mm + '/' + dd;
    document.getElementById('return_date').value = someFormattedDate;
   }, 1000);
   }
   function checknumtravellers(){
   	//Number OF Traveller
   	var number_of_traveller = document.getElementById('number_travelers').value;
      console.log(number_of_traveller);
   	//alert(number_of_traveller);
      if(number_of_traveller == '')
      {
         $('.no_of_travelers').hide();
      }
      if(number_of_traveller == 1)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
      }
      if(number_of_traveller == 2)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
      }
      if(number_of_traveller == 3)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
      }
      if(number_of_traveller == 4)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
      }
      if(number_of_traveller == 5)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
      }

   var startdate = document.getElementById('departure_date').value;	
   for(var i=1; i<=number_of_traveller; i++){
   var d = document.getElementById('days_'+i).value;
   var m = document.getElementById('months_'+i).value;
   var y = document.getElementById('add_'+i).value;
   var dob = y + '-' + m + '-' + d;
   //alert(dob);
   dob = new Date(dob);
   var today = new Date(startdate);
   var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
   $('#age_'+i).val(age);
   }
   p = 1;
   pr = number_of_traveller + p;
   for(var p = pr; p<=8; p++){
   document.getElementById('days_'+p).value = '';
   document.getElementById('months_'+p).value = '';
   document.getElementById('add_'+p).value = '';
   }
   
   //checkfamilyplan();
   }
   
   
   var container = document.getElementsByClassName("birthdate")[0];
   container.onkeyup = function(e) {
       var target = e.srcElement || e.target;
       var maxLength = parseInt(target.attributes["maxlength"].value, 10);
       var myLength = target.value.length;
       if (myLength >= maxLength) {
           var next = target;
           while (next = next.nextElementSibling) {
               if (next == null)
                   break;
               if (next.tagName.toLowerCase() === "input") {
                   next.focus();
                   break;
               }
           }
       }
       // Move to previous field if empty (user pressed backspace)
       else if (myLength === 0) {
           var previous = target;
           while (previous = previous.previousElementSibling) {
               if (previous == null)
                   break;
               if (previous.tagName.toLowerCase() === "input") {
                   previous.focus();
                   break;
               }
           }
       }
   }
   
   window.onload = function() {
     checknumtravellers();
   };


</script>
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
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