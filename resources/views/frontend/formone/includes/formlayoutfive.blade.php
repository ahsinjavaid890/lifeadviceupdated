<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutfive.css')}}">
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
                        <div class="col-md-12">
                           <div class="col-md-6 text-md-right" >
                              <label for="input-label"  class="input-label">First name</label>
                           </div>
                           <div class="col-md-6">
                              <div class="custom-form-control">
                                 <input type="text" name="fname" placeholder="First Name" required id="firstname" class="form-input ">
                              </div>
                           </div>
                        </div>
                        @endif
                        @endif
                        @if(isset($fields['lname']))
                        @if($fields['lname'] == 'on')

                        <div class="col-md-12">
                           <div class="col-md-6 text-md-right">
                           <label for="lname" class="input-label">Last name</label>
                           </div>
                           <div class="col-md-6">
                              <div class="custom-form-control">
                                 <input type="text" name="lname" placeholder="Last Name" required id="lname" class="form-input">
                              </div>
                        </div>
                        </div>
                        @endif
                        @endif
                     @endif
                     @if(array_search("id_4",$orderdata) == $orderi)
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )
                           <div class="col-md-12">
                              <div class="col-md-6 text-md-right" >
                              <label for="savers_email" class="input-label">Email Address</label>
                              </div>
                              <div class="col-md-6">
                                 <div class="custom-form-control">
                                    <input type="text" name="savers_email" placeholder="Email" required id="savers_email" class="form-input">
                                 </div>
                              </div>
                           </div>
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_7",$orderdata) == $orderi)
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12">
                        <div class="col-md-6 text-md-right">
                        <label for="phone"  class="input-label">Phone Number <b id="phone_error" class="text-danger"></b></label>
                        </div>
                        <div class="col-md-6">
                           <div class="custom-form-control">
                              <input onkeyup="validatephone()" type="text" name="phone" placeholder="Phone" required id="phone" class="form-input">
                           </div>
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
                     <div class="col-md-12">
                        <div class="col-md-6 text-md-right">
                           <label for="coverageammount"  class="input-label">Coverage Amount</label>
                        </div>
                        <div class="col-md-6">
                           <div class="custom-form-control">
                              <select required class="form-input" name="sum_insured2" id="coverageammount">
                                 <option value="">Coverage Amount</option>
                                 @foreach($sum_insured as $r)
                                 <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                                 @endforeach
                              </select>
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
                           <div class="col-md-12">
                              <div class="col-md-6 text-md-right">
                                 <label for="primary_destination" class="input-label">Primary Destination</label>
                              </div>
                              <div id="country" class="col-md-6">
                                 <div class="custom-form-control">
                                    <select onchange="CountryState(this.value)" required class="form-input" name="primary_destination" id="primary_destination">
                                       <option value="">Select Country</option>
                                       @foreach(DB::table('countries')->get() as $r)
                                          <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12" id="canadastate" style="display:none;">
                           
                                 <div class="col-md-6 text-md-right">
                                    <label for="primary_destination" class="input-label">States In Canda</label>
                                 </div>
                                 <div class="form-group col-md-6 custom-form-control">
                                    <select required class="form-control selecttwo form-input" name="primary_destination" id="primary_destination">
                                       <option value="">Primary destination in Canada</option>
                                       @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                          <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                            
                           </div>
                           @else
                           <div class="col-md-12">
                              <div class="col-md-6 text-md-right">
                                 <label for="primary_destination" class="input-label">States In Canda</label>
                              </div>
                                 <div class="col-md-6" >
                                    <div class="custom-form-control">
                                       <select required class="form-input" name="primary_destination" id="primary_destination">
                                          <option value="">Primary destination in Canada</option>
                                          @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                             <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                          @endforeach
                                       </select>
                                    </div>
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

                        <div class="col-md-12">
                           <div class="col-md-6 text-md-right">
                              <label for="number_travelers" class="input-label">Number of Travellers</label>
                           </div>
                           
                           <div class="col-md-6">
                           <div class="custom-form-control">
                              <select onchange="checknumtravellers(this.value)" required class="form-input" name="number_travelers" id="number_travelers">
                                 <option value="">Number of Travellers</option>
                                 @for($i=1;$i<=$number_of_travel;$i++)
                                 <option value="{{ $i }}">{{ $i }}</option>
                                 @endfor
                              </select>
                           </div>
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
                                 <div class="col-md-6 text-md-right">
                                    <label for="day{{$i}}" class="input-label" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;  !important">Oldest Traveller's Date of Birth</label>
                                 </div>
                                    
                                       <div class="custom-form-control col-md-6" >
                                          <input onchange="dateofbirth(this.value)" id="dateofbirthfull" class="form-input" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                       
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                       <label for="year{{$i}}" class="input-label">Select Pre Existing</label>
                                    </div>
                                       <div class="custom-form-control col-md-6">
                                          <select name="pre_existing[]" class="form-input">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="yes">Yes</option>
                                             <option value="no">No</option>
                                          </select>
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

                     <div class="col-md-12">
                        <div class="col-md-6 text-md-right">
                           <label for="departure_date" class="input-label">Start Date of Coverage</label>
                       
                        </div>
                        <div class="col-md-6">
                             <div class="custom-form-control">
                              <input  id="departure_date" autocomplete="off" name="departure_date" value=""  class="form-control"  type="text" placeholder="Start Date" required <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>
                              <script>
                           $('#departure_date').datepicker({
                           format: 'yyyy-mm-dd',
                           todayHighlight:'TRUE',
                           autoclose: true,
                           });
                        </script>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-6 text-md-right">
                           <label for="departure_date" class="input-label">End Date of Coverage</label>
                        </div>
                        <div class="col-md-6">
                           <div class="custom-form-control">
                              <input id="return_date" autocomplete="off" name="return_date" value=""  class="form-control"  type="text" placeholder="End Date" required @if($data->pro_supervisa == 1) readonly type="date" @endif >
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
                     </div>
                     @endif
                     @endif
                     @if(array_search("id_14",$orderdata) == $orderi)
                     @if(isset($fields['gender']) && $fields['gender'] == "on" )
                     <div class="col-md-12">
                        <div class="col-md-6 text-md-right">
                           <label for="gender"  class="input-label">Primary Applicant`s Gender</label>
                        </div>
                        <div class="custom-form-control col-md-6">
                           <select class="form-input" name="gender" id="gender">
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
                     <div class="col-md-12">
                        <div class="col-md-6 text-md-right">
                           <label class="input-label">Gender of the Oldest traveller</label>
                        </div>
                        <div class="custom-form-control col-md-6">
                           <select class="form-input">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                        </div>
                     </div>
                     @endif
                     @endif
                     <div class="row">
                        @if(array_search("id_5",$orderdata) == $orderi)
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-12">
                              <div class="col-md-6  text-md-right">
                                 <label for="" class="  text-md-right" id="">Do you Smoke in last 12 months?</label>
                              </div>
                              <div class="col-md-6">
                                 <label for="" class="d-sm-none">Do you Smoke in last 12 months?</label>
                                 <div class="custom-form-control">
                                    <select required class="form-input" name="Smoke12" id="">
                                       <option value="">--- Please Choose ---</option>
                                         <option value="yes" >Yes</option>
                                         <option value="no" >No</option>
                                    </select>
                                 </div>
                              </div>

                           </div>
                           @endif
                        @endif
                        @endif
                        
                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                          <div class="col-md-12">
                             <div class="col-md-6 text-right">
                                <label for="" class="">Do you require Family Plan ?</label>
                             </div>
                             <div class="col-md-6">
   
                              <div class="custom-form-control">
                                 <select required class="form-input" name="fplan" id="">
                                    <option value="">--- Please Choose ---</option>
                                      <option value="yes" onclick="changefamilyyes()">Yes</option>
                                      <option value="no"  onclick="changefamilyno()">No</option>
                                 </select>
                              </div>
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
                     </div> 
                     
                     @endfor
                     <div class="col-md-12">
                     <div class="col-md-6">
                     </div>
                     <div class="col-md-6 d-flex justify-content-between" style="margin-top: 12px; ">
                        <button type="submit" class="btn btn-primary get_qout" style="background: #1BBC9B; color: #FFF; margin: 5px 0 5px 5px; font-size: 15px; width: 40%; padding: 10px 55px; height: 45px; margin-left: auto; border: 1px solid transparent;"><i class="fa fa-list-ul"></i>  Continue </button>
                     </div>
                     </div>
                  </div>
               </form>
</div>
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