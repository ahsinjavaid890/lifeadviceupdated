<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutseven.css')}}">
<form action="" method="post">
   <div class="row">
      <div class="col-md-12 hidden-xs text-center">
         <h1 class="text-center">Traveller's Information</h1>
         <p class="sub-heading">This information is required in order to provide accurate rates.</p>
      </div>
   </div>
   <div class="row birthdate">
      <div class="col-md-6 col-lg-offset-3 fields">
         <div class="col-md-12" style="margin-bottom: 10px;">
            <label>Coverage Amount</label>
            <select class="form-control" name="sum_insured2" id="sum_insured2">
               <option value="">Coverage Amount</option>
               <option value="100000" selected="">$100,000 </option>
               <option value="150000">$150,000 </option>
               <option value="200000">$200,000 </option>
               <option value="250000">$250,000 </option>
               <option value="300000">$300,000 </option>
            </select>
         </div>
         <!---Destination country -->
         <div class="col-md-12">
            <div class="col-md-12" style="padding:0;">
               <label> Primary destination in Canada </label> 
               <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                  <option value=""> --- Please choose ---</option>
                  <option value="Alberta" selected="">Alberta</option>
                  <option value="British Columbia">British Columbia</option>
                  <option value="Manitoba">Manitoba</option>
                  <option value="New Brunswick">New Brunswick</option>
                  <option value="Newfoundland">Newfoundland</option>
                  <option value="North West Territories">North West Territories</option>
                  <option value="Nova Scotia">Nova Scotia</option>
                  <option value="Nunavut">Nunavut</option>
                  <option value="Ontario" selected="">Ontario</option>
                  <option value="Prince Edward Island">Prince Edward Island</option>
                  <option value="Quebec">Quebec</option>
                  <option value="Saskatchewan">Saskatchewan</option>
                  <option value="Yukon Territory">Yukon Territory</option>
               </select>
            </div>
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
         <!-- Destination ends -->
        <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                  <label class="input-label"> Start Date</label>
                  <input id="departure_date" autocomplete="off" name="departure_date" value="" class="form-control hasDatepicker" type="text" placeholder="Start Date" required="" onchange="supervisayes()">
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                  <label class="input-label">End Date</label>
                  <input autocomplete="off" id="return_date" name="return_date" class="form-control" value="" type="text" required="" readonly="true">
               </div>
         <div class="col-md-12" style="margin-bottom: 10px;">
            <label>Number of Travellers</label>
            <select name="number_travelers" class="form-control form-select" id="number_travelers" autocomplete="off" required="" onchange="checknumtravellers()">
               <option value="">Number of travellers</option>
               <option value="1" selected="">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
            </select>
         </div>
         <div class="col-md-12 date_of_birth">
            <div class="row" id="traveller_1" style="">
               <label>Birth date of the oldest Traveller</label>
               <div class="col-md-12" style="margin-bottom: 10px; padding:0;">
                  <div class="date-wrapper question-answer">
                     <input type="text" placeholder="DD" name="days[]" id="days_1" value="" maxlength="2" class="numeric lpad2 day-holder">/
                     <input type="text" placeholder="MM" name="months[]" id="months_1" value="" maxlength="2" class="numeric lpad2 month-holder">/
                     <select name="years[]" id="add_1" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                        <option value="">Year</option>
                        @for($i=1919; $i < 1982; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <input type="hidden" name="ages[]" id="age_1" value="">
            <div class="row" id="traveller_2" style="display: none">
               <label>Birth date of the second Traveller</label>
               <div class="col-md-12" style="margin-bottom: 10px; padding:0;">
                  <div class="date-wrapper question-answer">
                     <input type="text" placeholder="DD" name="days[]" id="days_2" value="" maxlength="2" class="numeric lpad2 day-holder">/
                     <input type="text" placeholder="MM" name="months[]" id="months_2" value="" maxlength="2" class="numeric lpad2 month-holder">/
                     <select name="years[]" id="add_2" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                        <option value="">Year</option>
                        @for($i=1919; $i < 1982; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <input type="hidden" name="ages[]" id="age_2" value="">
            <div class="row" id="traveller_3" style="display: none">
               <label>Birth date of the third Traveller</label>
               <div class="col-md-12" style="margin-bottom: 10px; padding:0;">
                  <div class="date-wrapper question-answer">
                     <input type="text" placeholder="DD" name="days[]" id="days_3" value="" maxlength="2" class="numeric lpad2 day-holder">/
                     <input type="text" placeholder="MM" name="months[]" id="months_3" value="" maxlength="2" class="numeric lpad2 month-holder">/
                     <select name="years[]" id="add_3" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                        <option value="">Year</option>
                        @for($i=1919; $i < 1982; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <input type="hidden" name="ages[]" id="age_3" value="">
            <div class="row" id="traveller_4" style="display: none">
               <label>Birth date of the fourth Traveller</label>
               <div class="col-md-12" style="margin-bottom: 10px; padding:0;">
                  <div class="date-wrapper question-answer">
                     <input type="text" placeholder="DD" name="days[]" id="days_4" value="" maxlength="2" class="numeric lpad2 day-holder">/
                     <input type="text" placeholder="MM" name="months[]" id="months_4" value="" maxlength="2" class="numeric lpad2 month-holder">/
                     <select name="years[]" id="add_4" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                        <option value="">Year</option>
                        @for($i=1919; $i < 1982; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <input type="hidden" name="ages[]" id="age_4" value="">
            <div class="row" id="traveller_5" style="display: none">
               <label>Birth date of the fifth Traveller</label>
               <div class="col-md-12" style="margin-bottom: 10px; padding:0;">
                  <div class="date-wrapper question-answer">
                     <input type="text" placeholder="DD" name="days[]" id="days_5" value="" maxlength="2" class="numeric lpad2 day-holder">/
                     <input type="text" placeholder="MM" name="months[]" id="months_5" value="" maxlength="2" class="numeric lpad2 month-holder">/
                     <select name="years[]" id="add_5" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                        <option value="">Year</option>
                        @for($i=1919; $i < 1982; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <input type="hidden" name="ages[]" id="age_5" value="">
         </div>
      </div>
   </div>
   <div class="row" style="margin-top:30px !important;opacity: 0.7;">
      <div class="col-md-12 text-center"><button type="submit" class="btn btn-lg nextbtn">Continue <i class="fa fa-arrow-right"></i></button></div>
   </div>
   <div class="row" style="margin-top:30px !important;opacity: 0.7;">
      <div class="col-md-12 text-center"><i class="fa fa-lock"></i> Your information is protected.</div>
   </div>
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
   	
   	for(var t=1; t<=number_of_traveller; t++){
   		$("#traveller_"+t).hide();
   		$('#age_'+t).val('');
   	}
   	//alert(number_of_traveller);
   	for(var i=1; i<=number_of_traveller; i++){
   	$("#traveller_"+i).show();
   	document.getElementById('add_'+i).required = true;
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