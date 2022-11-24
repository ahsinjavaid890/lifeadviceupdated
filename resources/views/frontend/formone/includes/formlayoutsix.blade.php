
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutsix.css')}}">
<div class="clearfix"></div>
<div class="wizzard hidden-xs" style="display:none;">
   <div class="container">
      <ul>
         <li class="active " id="set1">
            <p>About You</p>
            <span><i>1</i><strong></strong></span><em></em> 
         </li>
         <li class=" " id="set2">
            <p>See Rates &amp; Select Your Plan</p>
            <span><i>2</i><strong></strong></span><em></em> 
         </li>
         <li class="" id="set3">
            <p>Contact Details</p>
            <span><i>3</i><strong></strong></span><em></em> 
         </li>
         <li class="" id="set4">
            <p>Receive Your Policy by E-Mail</p>
            <span><i>4</i><strong></strong></span> 
         </li>
      </ul>
   </div>
   <div class="clear"></div>
</div>
<div class="clearfix"></div>
<div class="container text-center">
   <h2 style="font-size: 30px;margin: 0;padding: 0 0 5px;color: #00c2a2;font-weight: 600;font-family: arial;margin-top: 30px;">{{ $data->pro_name }}</h2>
   <p style="line-height: normal;">To start, we have a few quick questions to understand your needs.</p>
   <hr>
</div>
<div class="clearfix"></div>
<form action="sessions.php?action=info" method="post" id="dh-get-quote" class="form-horizontal form-layout2" role="form">
   <div class="container" style="padding: 40px 0;" id="listprices">
      <div class="col-md-12 control-label no-padding" style="display:none;">
         <h2 class="inputheading">Please Wait...</h2>
      </div>
      <div class="col-md-4 listing-item" id="group_14" style="display:none;" data-listing-price="1">
         <div class="col-md-12 control-label no-padding">
            <h2 class="inputheading"><i class="fa fa-dollar"></i> Sum of Insured Amount?</h2>
         </div>
         @if($fields['sum_insured'] == 'on')
         <div class="col-md-12 no-padding oldest-travel">
            <div class="form-group">
               <select required class="form-control " name="sum_insured2" id="coverageammount">
                  <option value="">Coverage Amount</option>
                  @foreach($sum_insured as $r)
                  <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                  @endforeach
               </select>
            </div>
         </div>
         @endif
      </div>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="departure_date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
      <div class="col-md-4 listing-item" id="group_8" style="display:none;" data-listing-price="3">
         <div class="col-md-12" style="padding-bottom: 7px;">
            <h2 class="inputheading"><i class="fa fa-calendar"></i> Duration of Coverage?</h2>
         </div>
                  @if($fields['sdate'] == "on" && $fields['edate'] == "on")

         <div class="col-md-12">
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
      </div>
      <div class="col-md-4 listing-item" id="group_3" style="display:none;" data-listing-price="7">
         <div class="col-md-12 control-label ">
            <h2 class="inputheading"><i class="fa fa-calendar"></i> What is your Date of Birth ? </h2>
         </div>
         <div class="col-md-12 no-padding oldest-travel" id="birthday">
            <div class="col-md-12 agesdiv" id="agesdiv">
               <button class="btn btn-default agesbtn form-control" type="button" onclick="$('.ageandcitizen').fadeIn(300);"> Years <i class="fa fa-caret-down"></i></button>
               <div class="col-md-12 ageandcitizen" style="display:none; padding: 1px 15px;">
                  @if($fields['dob'] == 'on')
                  <div class="col-md-12 no-padding oldest-travel">
                     <h3><i class="fa fa-user"></i> Primary Traveler</h3>
                  </div>
                  <div class="yearsdiv">
                     <div class="col-md-5">
                        <small style="font-size: 12px;color: #999;">Age</small>
                        <input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;" maxlength="3">
                     </div>
                     <div class="col-md-2 text-center" style="padding-top: 10px;">
                        or
                     </div>
                     <div class="col-md-5" style="padding-top: 10px;">
                        <a style="cursor: pointer;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date if Birth</a>
                     </div>
                  </div>
                  <div class=" dobdiv" style="display:none;">
                     <div class="col-md-12">
                        <div class="col-md-6 no-padding">
                           <div class="col-md-4" style="padding: 0 5px;">
                              <small style="font-size: 12px;color: #999;padding: 0;">Month</small>
                              <input type="text" style="margin-top: -5px !important;display: block;" maxlength="2">
                           </div>
                           <div class="col-md-4" style="padding: 0 5px;">
                              <small style="font-size: 12px;color: #999;padding: 0;">Day</small>
                              <input type="text" style="margin-top: -5px !important;display: block;" maxlength="2">
                           </div>
                           <div class="col-md-4" style="padding: 0 5px;">
                              <small style="font-size: 12px;color: #999;padding: 0;">Year</small>
                              <input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;" maxlength="4">
                           </div>
                        </div>
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
                  <div class="col-md-12 no-padding oldest-travel" style="margin-top:10px;">
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
                           }
                           }
                        </script>
                     </div>
                  </div>
                  <div class="col-md-12 no-padding oldest-travel additionals" style="display:none;">
                     <div class="birthday">
                        <div class="col-md-3 add_1" style="padding-left: 0;">
                           <small style="font-size: 12px;color: #999;">Age</small>
                           <input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;" maxlength="3">
                        </div>
                     </div>
                     <input type="hidden" id="current_adds" value="1">
                     <input type="hidden" id="number_travelers" name="number_travelers" value="0">
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
                        aa = aa + '<div class="col-md-3 add_'+current_id+'" style="padding-left: 0;"><small style="font-size: 12px;color: #999;">Age</small><input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;" maxlength="3" /><i class="fa fa-close" onclick="addfunc_'+current_id+'()"></i></div>';
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
                        <a class="addmorebtn" onclick="addtravellers();"><i class="fa fa-plus" style="position: relative;top: 4px;left: 0px;"></i></a>
                     </div>
                  </div>
                  <div class="col-md-12 no-padding oldest-travel text-center">
                     <button type="button" class="btn btn-primary" style="margin-bottom: 20px;margin-top: 20px;border-radius: 20px;width: 100%;" onclick="applychanges();">Apply Changes</button>
                     <script>
                        function applychanges(){
                        var inps = document.getElementsByName('ages[]');
                        var ages = [];
                        for (var i = 0; i <inps.length; i++) {
                        var inp=inps[i];
                        ages.push(inp.value);
                        }
                        var ages = ages.filter(Boolean);
                        
                        $('.agesbtn').html(ages + ' Years <i class="fa fa-caret-down"></i>');
                        $('.ageandcitizen').fadeOut(300); 
                        document.getElementById('number_travelers').value = ages.length;
                        }
                     </script>
                  </div>
                  @endif
                  <div class="clear:both;"></div>
               </div>
            </div>
         </div>
         <div id="birthday_view"></div>
         <!-- Age calculator ends -->
         <div style="clear:both;"> </div>
      </div>
      <div class="col-md-4 listing-item" id="group_4" style="display:none;" data-listing-price="10">
         <div class="col-md-12">
            <h2 class="inputheading"><i class="fa fa-envelope"></i> What is your email address ?</h2>
         </div>
         <div class="col-md-12 no-padding oldest-travel">
            <input id="savers_email" name="savers_email" class="form-control question" type="text" required="" placeholder="Enter your email">
            <span></span>
         </div>
      </div>
      <div class="col-md-4 listing-item" id="group_6" style="display:none;" data-listing-price="2">
         <div class="col-md-12 control-label no-padding">
            <h2 class="inputheading"><i class="fa fa-map-marker"></i> Destination Country</h2>
         </div>
         <div class="col-md-12 no-padding oldest-travel">
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
                  <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                     @foreach(DB::table('countries')->get() as $r)
                              <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                           @endforeach
                  </select>
                  <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                     <option value=""> --- Primary destination in Canada ---</option>
                     @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                     <option value="{{ $r->name }}">{{ $r->name }}</option>
                     @endforeach
                  </select>
                  <div id="usa_stop_div" style="display:none;">
                     <div class="col-md-12">
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
                  <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                        <option value=""> --- Primary destination in Canada ---</option>
                        @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                           <option value="{{ $r->name }}">{{ $r->name }}</option>
                        @endforeach
                     </select>
                  @endif
                  @endif
                  @endif
         </div>
      </div>
      <div class="col-md-4 listing-item" id="group_12" style="display:none;" data-listing-price="9">
         <div class="col-md-12 control-label ">
            <h2 class="inputheading"><i class="fa fa-child"></i> Do you require Family Plan?  </h2>
            <div style="clear:both;"></div>
            <div class="col-md-12 text-center">
               <label class="radio-container" style="margin-right: 10px !important; display:  inline-block !important;text-align: center;"> Yes, I Want
               <input type="radio" name="familyplan" value="yes" required="required" onclick="changefamilyyes()">
               <span class="checkmark"></span>
               </label>
               <label class="radio-container" style="margin-right: 10px;display:  inline-block !important;text-align: center;"> No, I Don't Want
               <input type="radio" name="familyplan" value="no" required="required" checked="checked" onclick="changefamilyno()">
               <span class="checkmark"></span>
               </label>
            </div>
            <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">    
         </div>
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
      <div class="col-md-4 listing-item" id="group_13" style="display:none;" data-listing-price="8">
         <div class="col-md-12 control-label ">
            <h2 class="inputheading"><i class="fa fa-wheelchair"></i> Any Pre-existing Condition?</h2>
         </div>
         <div style="clear:both;"></div>
         <div class="col-md-12 text-center">
            <label class="radio-container" style="margin-right: 10px !important; display:  inline-block !important;text-align: center;"> Yes, I Have
            <input type="radio" id="checkbox-5" name="pre_existing" value="yes" required="required" onclick="changefamily()">
            <span class="checkmark"></span>
            </label>
            <label class="radio-container" style="margin-right: 10px;display:  inline-block !important;text-align: center;"> No, I Haven't
            <input type="radio" id="checkbox-5" name="pre_existing" value="no" required="required" checked="checked" onclick="changefamily()">
            <span class="checkmark"></span>
            </label>
         </div>
      </div>
   </div>
   <div class="clear:both;"></div>
   <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
      <div class="col-md-6">
         <button class="btn btn-default" style="padding: 10px 40px; font-weight: bold; font-size: 18px; margin: 0px; display: block;background: #F9F9F9 !important;color: #333 !important;" id="backbtn" type="button" onclick="checkback()"><i class="fa fa-arrow-circle-left"></i> Back</button>
      </div>
      <div class="col-md-6">
         <button class="btn nextbtn pull-right" type="button" id="nextbtn" onclick="checknext()"> Next <i class="fa fa-arrow-circle-right"></i></button>
         <button class="btn nextbtn pull-right" type="submit" style="display:none;" id="getaquotebtn"> Get a Quote <i class="fa fa-arrow-circle-right"></i></button>
      </div>
   </div>
   <input type="hidden" value="" id="nextitem">
   <input type="hidden" name="broker" value="">     
   <input type="hidden" name="agent" value="">
   <input type="hidden" name="skip_coverage" value="yes">
</form>
<script>
   $('html').click(function() {
       $('.ageandcitizen').fadeOut(300);
    })
   
    $('.agesdiv').click(function(e){
        e.stopPropagation();
    });
</script>
<script>
   function checknext(){
   var javascript_array = new Array();
   javascript_array[1] = 'group_14';javascript_array[2] = 'group_6';javascript_array[3] = 'group_8';javascript_array[7] = 'group_3';javascript_array[8] = 'group_13';javascript_array[9] = 'group_12';javascript_array[10] = 'group_4';var filtered = javascript_array.filter(function (el) {
     return el != null;
   });
   javascript_array = filtered;
   
   if(document.getElementById('nextitem').value == ''){
    document.getElementById('nextitem').value = '0';
   } else {
   document.getElementById('nextitem').value = +document.getElementById('nextitem').value + +1;
   }
   var nextitem = Number(document.getElementById('nextitem').value);
   
   var longArray = javascript_array;
   var size = 3;
   var newArray = new Array(Math.ceil(longArray.length / size)).fill("")
       .map(function() { return this.splice(0, size) }, longArray.slice());
   
   var sliced_array = newArray[nextitem];
   var lastarray = newArray.length - 1;
   if(nextitem == lastarray){
   document.getElementById('nextbtn').style.display = 'none';
   document.getElementById('getaquotebtn').style.display = 'block'; 
   } else {
   document.getElementById('getaquotebtn').style.display = 'none';  
   document.getElementById('nextbtn').style.display = 'block';
   }
   
   //Hiding all first
   for (i = 0; i < javascript_array.length; i++) {
   var group = javascript_array[i];
   document.getElementById(group).style.display = 'none';
   //$('#'+group).fadeOut("slow");
   } 
   //Showing relevent results
   for (i = 0; i < sliced_array.length; i++) {
   var group = sliced_array[i];
   document.getElementById(group).style.display = 'block';
   //$('#'+group).fadeIn("slow");
   }
   
   if(nextitem >0){
   document.getElementById('backbtn').style.display = 'block';  
   } else {
   document.getElementById('backbtn').style.display = 'none'; 
   }
   
   }
   function checkback(){
   var javascript_array = new Array();
   javascript_array[1] = 'group_14';javascript_array[2] = 'group_6';javascript_array[3] = 'group_8';javascript_array[7] = 'group_3';javascript_array[8] = 'group_13';javascript_array[9] = 'group_12';javascript_array[10] = 'group_4';var filtered = javascript_array.filter(function (el) {
     return el != null;
   });
   javascript_array = filtered;
   
   if(document.getElementById('nextitem').value == ''){
    document.getElementById('nextitem').value = '0';
   } else {
   document.getElementById('nextitem').value = document.getElementById('nextitem').value - 1;
   }
   var nextitem = Number(document.getElementById('nextitem').value);
   
   var longArray = javascript_array;
   var size = 3;
   var newArray = new Array(Math.ceil(longArray.length / size)).fill("")
       .map(function() { return this.splice(0, size) }, longArray.slice());
   
   var sliced_array = newArray[nextitem];
   var lastarray = newArray.length - 1;
   //Hiding all first
   for (i = 0; i < javascript_array.length; i++) {
   var group = javascript_array[i];
   document.getElementById(group).style.display = 'none';
   } 
   //Showing relevent results
   for (i = 0; i < sliced_array.length; i++) {
   var group = sliced_array[i];
   document.getElementById(group).style.display = 'block';
   }
   if(nextitem == lastarray){
   document.getElementById('nextbtn').style.display = 'none';
   document.getElementById('getaquotebtn').style.display = 'block'; 
   } else {
   document.getElementById('getaquotebtn').style.display = 'none';  
   document.getElementById('nextbtn').style.display = 'block';
   }
   if(nextitem >0){
   document.getElementById('backbtn').style.display = 'block';  
   } else {
   document.getElementById('backbtn').style.display = 'none'; 
   }
   }
</script>
<div class="col-md-12 col-sm-12 col-xs-12">
   <span id="family_error" style="display: none; font-size: 16px;font-weight: bold;text-align: right;padding: 20px;" class="text-danger"><i class="fa fa-warning"></i> </span>
   <!--<div class="center m-t-30px" style="text-align: center;">
      <button type="submit" name="GET QUOTES" id="getquote" class="btn bg-red show-loading-popup">GET QUOTES</button>
       </div>-->
</div>
<script>
   window.onload = function() {
   document.getElementById('backbtn').style.display = 'none';
   checknext();
   }
</script>
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
var number_travelers = '';
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
   var someFormattedDate = y + '-' + mm + '-' + dd;
   document.getElementById('return_date').value = someFormattedDate;

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
var number_travelers = '';
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


</script>
<script>
   jQuery(document).ready(function() {
   if(typeof(Storage) !== "undefined") {
   var saveddata = localStorage.setItem("someKey", $("#daterange").val());
   $("#daterange").val(saveddata);
   applychanges();
   } else {
   document.getElementById('daterange').value = '';
   }
    //jQuery("#primary_destination").msDropdown();
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
   
</script>
<script>
   $('.after').bootstrapNumber();
   $('#colorful').bootstrapNumber({
    upClass: 'success',
    downClass: 'danger'
   });
</script>