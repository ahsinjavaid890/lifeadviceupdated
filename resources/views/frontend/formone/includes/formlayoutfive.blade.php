<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutone.css')}}">
<div class="col-md-12 text-center" style="margin-top: 30px;margin-bottom: 30px;">
   <h1 style="font-weight:bold;margin: 0px; color: #2b3481" class=""><strong>{{ $data->pro_name }}</strong></h1>
   <h2 style="margin-top: -10px;font-size: 16px;font-weight: normal;line-height: normal;" class="hidden-xs">To start, we have a few quick questions to understand your needs.</h2>
</div>
<div class="container birthdate new-visa mb-5 mt-5" style="padding: 20px;">
         <form method="POST" action="{{ url('quotes') }}">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
                  <div class="row">
                     @if(isset($fields['fname']))
                     @if($fields['fname'] == 'on')
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <input type="text" name="fname" placeholder="firstname" required id="firstname" class="form-input">
                           <label for="firstname" class="form-label">First name</label>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['lname']))
                     @if($fields['lname'] == 'on')
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <input type="text" name="lname" placeholder="lastname" required id="lname" class="form-input">
                           <label for="lname" class="form-label">Last name</label>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )
                           <div class="col-md-12">
                              <div class="custom-form-control">
                                 <input type="text" name="savers_email" placeholder="savers_email" required id="savers_email" class="form-input">
                                 <label for="savers_email" class="form-label">Email</label>
                              </div>
                           </div>
                        @endif
                     @endif
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12">
                        <div class="custom-form-control">
                           <input onkeyup="validatephone()" type="text" name="phone" placeholder="firstname" required id="phone" class="form-input">
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
                     @if(isset($fields['sum_insured']))
                     @if($fields['sum_insured'] == 'on')
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <select required class="form-input" name="sum_insured2" id="coverageammount">
                              <option value="">Coverage Amount</option>
                              @foreach($sum_insured as $r)
                              <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                              @endforeach
                           </select>
                           <label for="coverageammount" class="form-label">Coverage Amount</label>
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
                           <div id="country" class="col-md-6">
                              <div class="custom-form-control">
                                 <select onchange="CountryState(this.value)" required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Select Country</option>
                                    @foreach(DB::table('countries')->get() as $r)
                                       <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">Primary Destination</label>
                              </div>
                           </div>
                           <div id="canadastate" class="col-md-6" style="display:none;">
                              <div class="form-group">
                                 <select required class="form-control selecttwo" name="primary_destination" id="primary_destination">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">States In Canda</label>
                              </div>
                           </div>
                           @else

                           <div class="col-md-6" >
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
                           @endif
                        @endif
                     @endif


                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-12">
                           <div class="custom-form-control">
                              <select onchange="checknumtravellers(this.value)" required class="form-input" name="number_travelers" id="number_travelers">
                                 <option value="">Number of Travellers</option>
                                 @for($i=1;$i<=$number_of_travel;$i++)
                                 <option value="{{ $i }}">{{ $i }}</option>
                                 @endfor
                              </select>
                              <label for="number_travelers" class="form-label">Number of Travellers</label>
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
                                       <div class="custom-form-control">
                                          <input onchange="dateofbirth(this.value)" id="dateofbirthfull" class="form-input" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                          <label for="day{{$i}}" class="form-label">MM/DD/YYYY</label>
                                       </div>
                                    </div>
                              
                                    <div style="padding-right: 0px;" class="col-md-6">
                                       <div class="custom-form-control">
                                          <select name="pre_existing[]" class="form-input">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="yes">Yes</option>
                                             <option value="no">No</option>
                                           </select>
                                          <label for="year{{$i}}" class="form-label">Select Pre Existing</label>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           @endfor
                        @endif
                        @endif
                     @endif
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <input onchange="supervisayes()" type="date" name="departure_date" placeholder="firstname" required id="departure_date" class="form-input">
                           <label for="departure_date" class="form-label">Start Date of Coverage</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <input type="date" name="return_date" readonly placeholder="return_date" required id="return_date" class="form-input">
                           <label for="return_date" class="form-label">End Date of Coverage</label>
                        </div>
                     </div>
                     @endif
                     @if(isset($fields['gender']) && $fields['gender'] == "on" )
                     <div class="col-md-12">
                        <div class="custom-form-control">
                              <select required class="form-input" name="gender" id="gender">
                                 <option value="">Select Gender</option>
                                   <option value="male" >Male</option>
                                   <option value="female" >Female</option>
                              </select>
                              <label for="gender" class="form-label">Primary Applicant`s Gender</label>
                           </div>
                     </div>
                     @endif
                     @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                     <div class="col-md-12">
                        <div class="custom-form-control">
                           <select required class="form-input" name="old_traveller_gender" id="old_traveller_gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                           <label for="old_traveller_gender" class="form-label">Gender of the Oldest traveller</label>
                        </div>
                     </div>
                     @endif
                     <div class="row">
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-6 no-padding check_condtion">
                              <h3>Do you Smoke in last 12 months ?</h3>
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
                        
                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                              @php
                                 $num = array_search("fplan", $position_array); 
                                 $current_values[$num] = 'group_15';  
                              @endphp
                              <div class="col-md-6 no-padding check_condtion">
                                 <h3>Do you require Family Plan ?</h3>
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
                        </div>
                     <div class="col-md-6">
                        <img src="{{ url('public/front/bgs/low_pr_icon.png') }}">
                     </div>
                     <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary get_qout">Get Quote <i class="fa fa-arrow-circle-right"></i></button>
                     </div>
                  </div>
               </form>
</div>
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
    //var someFormattedDate = mm + '/' + dd + '/' + y;
    var someFormattedDate = y + '-' + mm + '-' + dd;
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
       
       if($('#familyplan_temp').val() == 'yes'){
           if($('#number_travelers').val() >='2' && max_age <=59 && min_age <=21){
               $('#getquote').css('display','block');
               $('#family_error').html('');
               $('#family_error').css('display','none');
           } 
           else {
               $('#getquote').css('display','none');
               if($('#number_travelers').val() <'2'){
                   $('#family_error').html('<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
               } 
               else if(max_age > 59){
                   $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');   
               } 
               else if(min_age > 21){
                   $('#family_error').html('<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21');  
               }
               $('#family_error').css('display','block');   
           }
       
       } else {
        $('#getquote').css('display','block');
        $('#family_error').css('display','none');   
       }
    
   }
   
</script>
<script>
   
        jQuery('#gender:before').click(function() {
           var text = jQuery(this).attr('data-on-text');
           console.log(text);
       });
   
   
   
       jQuery(document).ready(function($){
           /*
        $("select[name=number_travelers]").on("change", function(){
               var number_of_traveller = $(this).val();
               var aa = "";
               for(var i=2; i<=number_of_traveller; i++){
                   aa = aa + $(".birthday")[0].outerHTML;
               }
   
               $("#birthday_view").html(aa);
               console.log( $(".birthday")[0] );
           })
   */
    
          /*    $('button[type="submit"]').click(function() {
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
           });*/
   
          
    $('#getquote').click(function(){
   
   var deparature = $('#departure_date').val();
   $('#departuredate').val(deparature);
   
   var returndate = $('#return_date').val();
   $('#returndate').val(returndate);
   
   
    });
   
       });
   
   
   window.onload = function() {
     $("select[name=number_travelers]").on("change", function(){
               var number_of_traveller = $(this).val();
               var aa = "";
               for(var i=2; i<=number_of_traveller; i++){
                   aa = aa + $(".birthday")[0].outerHTML;
               }
   
               $("#birthday_view").html(aa);
               console.log( $(".birthday")[0] );
           })
   };
   
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