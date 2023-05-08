<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayouttwo.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('.selecttwo').select2();
});
</script>

<?php
if($data->pro_id == '1'){
$bgs = array(4, 6, 8, 11); //Super
} else if($data->pro_id == '2'){
$bgs = array(1, 2, 3, 7, 8, 11, 12, 15); //VTC
} else if($data->pro_id == '3'){
$bgs = array(5, 9, 10); //Student
} else if($data->pro_id == '9'){
$bgs = array(13, 14); //Student
} else {
$bgs = array(1, 2, 3, 7, 8, 11, 12); //VTC
}

$k = array_rand($bgs);
$bg = $bgs[$k];

?>
<section style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('') }}public/front/bgs/<?php echo $bg;?>.jpg'); background-size: cover; background-position: 50% 50%; padding:50px 0px;">
   <div class="container">
      <div class="row birthdate">
         <div class="col-md-2 hidden-xs"></div>
         <div class="col-md-8 visa-insurance new-visa" style="padding-top: 10px;padding-bottom: 20px;background:rgba(0,0,0,0.7);padding-left: 0;padding-right: 0;">
            <div class="clearfix"></div>
            <div class="col-md-12 text-center" style="padding: 20px 0;">
               <h1 class="title-form" style="font-weight:bold;margin: 0px;color: #FFF;font-size: 38px;"><strong>{{ $data->pro_name }}</strong></h1>
               <h2 class="title_des" style="margin: 0px;font-size: 16px;line-height: normal;color:#FFF;">To start, we have a few quick questions to understand your needs.</h2>
            </div>
         <form action="{{ url('quotes') }}" method="post" class=" form form-layout1" role="form" id="dh-get-quote">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">            
            <div class="row" style="margin-bottom:0px;">
                @if(isset($fields['fname']))
                     @if($fields['fname'] == 'on')

                     <div class="col-md-6">
                        <label for="firstname" class="text-white">First name</label>
                        <div class="custom-form-control">
                           <input type="text" name="fname" placeholder="firstname" required id="firstname" class="form-input">
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['lname']))
                     @if($fields['lname'] == 'on')
                     <div class="col-md-6">
                        <label for="lname" class="text-white">Last name</label>
                        <div class="custom-form-control">
                           <input type="text" name="lname" placeholder="lastname" required id="lname" class="form-input">
                        </div>
                     </div>
                     @endif
                     @endif
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
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">States In Canda</label>
                              </div>
                           </div>
                           <div id="canadastate" class="col-md-6" style="display:none;">
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">States In Canda</label>
                              </div>
                           </div>
                           @else
                           @if(isset($fields['sum_insured']))
                              @if($fields['sum_insured'] == 'on')
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

                                 var iValue = SliderValues.indexOf(0);
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


                                 <h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left; color:#FFF;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" style="border:0; font-size:23px; color:#1BBC9B; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: left;width: 150px;" value="$1000"></h4>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                                    <div id="sum_slider" style="padding: 5px;border: none; background:#FFF;"></div>
                                    <input type="hidden" id="sum_insured2" name="sum_insured2" value="1000" />

                                    <input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
                                 
                                 </div>
                              </div>
                              @endif
                              @endif
                           <div class="col-md-12" >
                              <label for="primary_destination" class="text-white">Primary destination in Canada</label>
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
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                           <div class="col-md-6">
                              <label for="departure_date" class="text-white">Start Date</label>
                              <div class="custom-form-control">
                                <input id="departure_date" name="departure_date" value="" class="form-control datepicker hasDatepicker" autocomplete="off" type="date" placeholder="Start Date" required="" @if($data->pro_supervisa == 1) onchange="supervisayes()" @endif data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <label for="return_date" class="text-white">End Date</label>
                              <div class="custom-form-control">
                                 <input id="return_date" name="return_date" class="form-control datepicker" autocomplete="off" type="<?php if($data->pro_supervisa == 1){echo 'text';}else{echo 'date';} ?>" placeholder="End Date" required value="" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
                              </div>
                           </div>
                     @endif
                      
                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-12">
                           <label for="number_travelers" class="text-white">Number of Travellers</label>
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
                                 <div style="padding-left: 0px;" class="col-md-6">
                                    <label for="year{{$i}}" class="text-white">Birth date of the oldest Traveller</label>
                                       <div class="custom-form-control">
                                          <input id="dateofbirthfull{{ $i }}" class="form-input" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                          <label for="day{{$i}}" class="form-label">MM/DD/YYYY</label>
                                       </div>
                                    </div>
                                    <div style="padding-right: 0px; margin-top: 31px;" class="col-md-6">
                                       <div class="custom-form-control">
                                          <select name="pre_existing[]" class="form-input">
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
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )
                     <div class="col-md-12 col-sm-12 col-xs-12 control-input email-main">
                        <label for="savers_email" class="text-white">Email</label>
                        <div class="custom-form-control">
                           <input id="savers_email" name="savers_email" value="" class="form-control form-control" type="email" placeholder="Email" style="padding-left: 40px !important;" required="">
                           <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12">
                        <label for="phone" class="text-white">Phone <b id="phone_error" class="text-danger"></b></label>
                        <div class="custom-form-control">
                           <input onkeyup="validatephone()" type="text" name="phone" placeholder="firstname" required id="phone" class="form-input">
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
                      @if(isset($fields['gender']) && $fields['gender'] == "on" )
                     <div class="col-md-12">
                        <label for="gender" class="text-white">Primary Applicant`s Gender</label>
                        <div class="custom-form-control">
                           <select required class="form-input" name="gender" id="gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                        </div>
                     </div>
                     @endif
                     @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                     <div class="col-md-12">
                        <label for="old_traveller_gender" class="text-white">Gender of the Oldest traveller</label>
                        <div class="custom-form-control">
                           <select required class="form-input" name="old_traveller_gender" id="old_traveller_gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                        </div>
                     </div>
                     @endif
                      <div class="row">
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-12 no-padding check_condtion ">
                              <h3 class="text-white col-md-6" >Do you Smoke in last 12 months ?</h3>
                              <div class="col-md-6 no-padding">
                                 <label style="display: inline-block;margin-right: 10px;margin-left: 25px;" class="text-white"><input type="radio" name="Smoke12" value="yes" style="width: auto !important;height: auto;"> Yes</label> <label class="text-white" style="display: inline-block;margin-right: 10px;">
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
                        
                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                              @php
                                 $num = array_search("fplan", $position_array); 
                                 $current_values[$num] = 'group_15';  
                              @endphp
                              <div class="col-md-12 no-padding check_condtion">
                                 <h3 class="text-white col-md-6">Do you require Family Plan ?</h3>
                                 <div class="col-md-6 no-padding">
                                    <label style="display: inline-block;margin-right: 10px;margin-left: 25px;" class="text-white"><input type="radio" name="fplan" value="yes" style="width: auto !important;height: auto;" onclick="changefamilyyes()"> Yes</label> <label style="display: inline-block;margin-right: 10px;" class="text-white"><input type="radio" name="fplan" value="no" checked="" style="width: auto !important;height: auto;" onclick="changefamilyno()"> No</label>
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
                        </div>
                     <div class="col-md-12" style="clear: both;">
                     <span id="family_error" style="display: none; font-size: 16px;font-weight: bold;text-align: right;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span>
                        <button type="submit" name="GET QUOTES" id="GET_QUOTES" class="btn btn-danger" style="border: 1px solid rgb(27, 188, 155);padding: 7px 27px;margin-top: 9px;display: block;border-radius: 4px !important;"><i class="fa fa-list"></i> Get a Quote </button>
                     </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>



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
      });
</script>
<script>
   function supervisayes(){
   //window.setTimeout(function(){ 
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
       //alert(someFormattedDate);
   //}, 1000);
   
   checknumtravellers();
   }
   
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
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#dateofbirthfull1').mask('00/00/0000');
       $('#dateofbirthfull2').mask('00/00/0000');
       $('#dateofbirthfull3').mask('00/00/0000');
       $('#dateofbirthfull4').mask('00/00/0000');
       $('#dateofbirthfull5').mask('00/00/0000');
       $('#dateofbirthfull6').mask('00/00/0000');
   });
</script>