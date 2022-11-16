<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutfive.css')}}">
<div class="col-md-12 text-center" style="margin-top: 30px;margin-bottom: 30px;">
   <h1 style="font-weight:bold;margin: 0px;" class="text-danger"><strong>{{ $data->pro_name }}</strong></h1>
   <h2 style="margin-top: -10px;font-size: 16px;font-weight: normal;line-height: normal;" class="hidden-xs">To start, we have a few quick questions to understand your needs.</h2>
</div>
<div class="container birthdate" style="padding: 20px;">
         <form action="{{ url('quotes') }}" method="post" class="form-horizontal form-layout2" role="form">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
                              @if($fields['sum_insured'] == 'on')

      <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
         <label class="input-label"> Sum Insured </label>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
         <select name="sum_insured2" class="form-control form-control" id="sum_insured2" autocomplete="off" required="">
            <option value="">Please choose</option>
            @foreach($sum_insured as $r)
            <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
            @endforeach
         </select>
      </div>
      @endif
      <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
         <label class="input-label">Primary destination in Canada </label> 
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
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
         @if($fields['sdate'] == "on" && $fields['edate'] == "on")
      <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
         <label class="input-label">Start date of coverage </label>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
         <input autocomplete="off" id="departure_date" name="departure_date" value="" class="form-control datepicker hasDatepicker" type="text" placeholder="MM/DD/YYY" required="" onchange="supervisayes()" data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
         <label for="departure_date" style="z-index: 1;padding: 8px 13px !important;position: absolute;top: 1px;right: 1px;background: #F1F1F1;border-radius: 0px 5px 5px 0;">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         </label>
         <script>
            $('#departure_date').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight:'TRUE',
            autoclose: true,
            });
         </script>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
         <label class="input-label">End date of coverage </label>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
         <input autocomplete="off" id="return_date" name="return_date" value="" class="form-control datepicker" type="text" placeholder="End Date" required="" readonly="true" data-format="yyyy-mm-dd" data-lang="en" data-rtl="false">
         <label for="return_date" style="z-index: 1;padding: 8px 13px !important;position: absolute;top: 1px;right: 1px;background: #F1F1F1;border-radius: 0px 5px 5px 0;">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         </label>
      </div>
      @endif
               @if($fields['traveller'] == 'on')
      <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
         <label class="input-label">Number of travellers (up to  5)</label>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
         <select name="number_travelers" class="form-control form-control" id="number_travelers" autocomplete="off" required="" onchange="checknumtravellers()">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
         </select>
      </div>
      <div class="form-group" id="traveller_1" style="">
         <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
            <label class="input-label">Oldest Traveller's Date of Birth</label>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding">
            <div class="date-wrapper question-answer oldest-travel">
               <input type="text" placeholder="DD" id="days_1" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
               <input type="text" placeholder="MM" id="months_1" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
               <select name="years[]" id="add_1" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                  <option value="">Year</option>
                  @for($i=1919; $i < 1982; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
         </div>
      </div>
      <input type="hidden" name="ages[]" id="age_1" value="">
      <div class="form-group" id="traveller_2" style="display: none">
         <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
            <label class="input-label">Second Traveller's Date of Birth</label>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding">
            <div class="date-wrapper question-answer oldest-travel">
               <input type="text" placeholder="DD" id="days_2" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
               <input type="text" placeholder="MM" id="months_2" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
               <select name="years[]" id="add_2" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                  <option value="">Year</option>
                  @for($i=1919; $i < 1982; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
         </div>
      </div>
      <input type="hidden" name="ages[]" id="age_2" value="">
      <div class="form-group" id="traveller_3" style="display: none">
         <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
            <label class="input-label">Third Traveller's Date of Birth</label>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding">
            <div class="date-wrapper question-answer oldest-travel">
               <input type="text" placeholder="DD" id="days_3" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
               <input type="text" placeholder="MM" id="months_3" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
               <select name="years[]" id="add_3" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                  <option value="">Year</option>
                  @for($i=1919; $i < 1982; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
         </div>
      </div>
      <input type="hidden" name="ages[]" id="age_3" value="">
      <div class="form-group" id="traveller_4" style="display: none">
         <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
            <label class="input-label">Fourth Traveller's Date of Birth</label>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding">
            <div class="date-wrapper question-answer oldest-travel">
               <input type="text" placeholder="DD" id="days_4" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
               <input type="text" placeholder="MM" id="months_4" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
               <select name="years[]" id="add_4" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                  <option value="">Year</option>
                  @for($i=1919; $i < 1982; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
         </div>
      </div>
      <input type="hidden" name="ages[]" id="age_4" value="">
      <div class="form-group" id="traveller_5" style="display: none">
         <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
            <label class="input-label">Fifth Traveller's Date of Birth</label>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding">
            <div class="date-wrapper question-answer oldest-travel">
               <input type="text" placeholder="DD" id="days_5" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
               <input type="text" placeholder="MM" id="months_5" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
               <select name="years[]" id="add_5" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                  <option value="">Year</option>
                  @for($i=1919; $i < 1982; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
         </div>
      </div>
      <input type="hidden" name="ages[]" id="age_5" value="">
      <div style="clear:both;"> </div>
      @endif
         @if(isset($fields['email']))
               @if($fields['email'] == "on" )
      <div class="col-md-6 col-sm-6 col-xs-12 control-label no-padding">
         <label class="input-label">Email address (required) </label> 
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
         <input id="savers_email" name="savers_email" size="20" maxlength="100" value="" style="padding-left:10px !important" class="form-control form-control" type="text" required="" placeholder="Email">
      </div>
      <div style="clear:both;"></div>
         @endif
         @endif
      <div class="col-md-12 no-padding" style="margin-top: 20px; clear:both;">
         <span id="family_error" style="display: none; font-size: 16px;font-weight: bold;text-align: right;padding: 20px;" class="text-danger"><i class="fa fa-warning"></i> </span>
         <button type="submit" name="GET QUOTES" id="getquote" class="btn nextbtn  pull-right"><i class="fa fa-list"></i> Continue </button>
         <div style="clear:both;"></div>
      </div>
      <input type="hidden" name="broker" value="">     
      <input type="hidden" name="agent" value="">       
   </form>
</div>
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
   function checknumtravellers(){
    //Number OF Traveller
    var number_of_traveller = $('#number_travelers').val() || 1;
    for(var t=1; t<=number_of_traveller; t++){
        $("#traveller_"+t).hide();
        $('#age_'+t).val("");
    }
    for(var i=1; i<=number_of_traveller; i++){
        $("#traveller_"+i).show();
        $('#add_'+i).prop('required', true);
    }
       var startdate = $('#departure_date').val();  
       for(var i=1; i<=number_of_traveller; i++){
           var d = document.getElementById('days_'+i).value;
           var m = document.getElementById('months_'+i).value;
           var y = document.getElementById('add_'+i).value;
           var dob = y + '-' + m + '-' + d;
   
           dob = new Date(dob);
           var today = new Date(startdate);
           var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
           $('#age_'+i).val(age);
       }
       p = 1;
       pr = number_of_traveller + p;
       
       for(var p = pr; p<=8; p++){
           $('#days_'+p).val("");
           $('#months_'+p).val("");
           $('#add_'+p).val("");
       }
       //checkfamilyplan();
   }
   
   window.onload = function() {
     checknumtravellers();
   };
   
   /*
         jQuery(document).ready(function() {
          jQuery("#primary_destination").msDropdown();
          });
   */
   
   
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