<link rel="stylesheet" href="{{ asset('public/front/css/jquery-ui.js')}}">
<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
<script type="text/javascript" src="{{ asset('public/front/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/front/js/jquery-1.12.4.js')}}"></script>
<script>
   $( function() {
     $( "#dob" ).datepicker({
       changeMonth: true,
       changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: "-100:+0",
    endDate: "today",
       maxDate: "today",
     });
   } );
   
   $( function() {
     $( "#departure_date" ).datepicker({
       changeMonth: true,
       changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: "+0:+5",
    minDate: "today",
     });
   } );
</script>
<style>
   #ui-datepicker-div, .ui-datepicker-div, .ui-datepicker-inline {
   width:auto;
   }
   .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
   border: 1px solid #DDD;
   background: #F1F1F1;
   font-weight: normal;
   color: #333;
   font-weight: bold;
   font-size: 14px;
   padding: 0;
   text-align: center;  
   }
   .ui-monthpicker .ui-datepicker-today a, .ui-monthpicker .ui-datepicker-today a:hover, .ui-datepicker .ui-datepicker-current-day a {
   background: #c00 !important;
   color: #FFF !important;
   text-align: center;
   border: none !important;
   outline: none;
   }
   .ui-datepicker-calendar th span {
   color:#333 !important;
   }
   .ui-datepicker-header select, table.ui-datepicker td a {
   color: #333;
   background: #FFF !important; 
   }
   .ui-datepicker .ui-state-highlight {
   background: #FFFA90 !important;
   color: #333 !important;  
   }
   /*
   .form-control {
   border: 1px solid rgb(173, 173, 173) !important;
   height: 38px !important;
   padding: 1px 10px !important;
   font-size: 13px;
   overflow: hidden;
   color: rgba(0, 0, 0, .87) !important;
   background: #FFF !important;
   }*/
   .fa, .fas {
   color:#f5821f;
   }
   .submit-btn {
   background: #f5821f;
   font-size: 15px;
   font-weight: normal;
   text-transform: none;
   border-radius: 0;
   border: 0;
   box-shadow: none;
   padding: 10px 25px;
   margin-top:10px;
   }
   }
   .submit-btn:hover {
   background: #FFF;
   color:#f5821f;
   }
   .submit-btn i{
   color:#FFF;
   }
   .radio-container {
   position: relative;
   padding-left: 25px;
   margin-bottom: 12px;
   cursor: pointer;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
   }
   /* Hide the browser's default radio button */
   .radio-container input {
   position: absolute;
   opacity: 0;
   cursor: pointer;
   height: 0;
   width: 0;
   }
   /* Create a custom radio button */
   .checkmark {
   position: absolute;
   top: 0;
   left: 0;
   height: 18px;
   width: 18px;
   border-radius: 50%;
   background-color: #FFF;
   border: 4px solid #CCC !important;
   }
   /* On mouse-over, add a grey background color */
   .radio-container:hover input ~ .checkmark {
   background-color: #C00;
   border: 4px solid #CCC !important;
   }
   /* When the radio button is checked, add a blue background */
   .radio-container input:checked ~ .checkmark {
   background-color: #FFF;
   border: 4px solid #C00 !important;
   }
   /* Create the indicator (the dot/circle - hidden when not checked) */
   .checkmark:after {
   content: "";
   position: absolute;
   display: none;
   }
   /* Show the indicator (dot/circle) when checked */
   .radio-container input:checked ~ .checkmark:after {
   display: block;
   }
   /* Style the indicator (dot/circle) */
   .radio-container .checkmark:after {
   top: 5px;
   left: 5px;
   width: 7px;
   height: 7px;
   border-radius: 50%;
   }
   .form-group {
   clear:both;
   margin:10px 0px 5px 10px;
   }
   .clearfix {
   clear:both;  
   }
   .no-padding {
   padding:0;
   }
   label.input-label {
   padding: 10px 0px 0 !important;
   color: #333 !important;
   font-size: 15px !important;
   margin-bottom: 0;
   font-weight: normal !important;  
   }
   .leftsection {
   background: #F1F1F1; padding-bottom:20px;padding-top: 10px;padding-right: 0; 
   }
   .mainsection {
   border:1px solid #ddd;padding: 10px;
   }
   @media screen and (max-width: 600px) {
   .mainsection {
   border:0;
   }
   .leftsection {
   background: #FFF !important;
   padding-right: 0px !important;
   padding-left: 0px !important;
   }    
   .form-group {
   margin: 0 !important;
   }
   .container {
   padding:0;
   }
   }
   .preinfo i {
   padding: 5px 9px;
   background: #0695BD;
   border-radius: 54%;
   font-size: 11px;
   color: #fff;
   cursor:pointer;
   }
   .preinfo i span {
   width: 200px;
   padding: 10px;
   background: rgba(0, 0, 0, 0.8);
   position: absolute;
   z-index: 100;
   top: 10px;
   left: 10px;
   font-family: arial;
   font-size: 12px;
   color: #fff;
   line-height: 20px;
   display: none;   
   }
   .preinfo > i:hover  span {
   display:block;
   }
   .date-wrapper {
   height: 40px;
   border: 1px solid rgb(173, 173, 173) !important;
   border-radius: 5px;
   position: relative;
   -webkit-transition: all 0.2s linear;
   width: 100%;
   overflow: hidden;
   display: flex;
   display: -webkit-flex;
   align-items: center;
   -webkit-align-items: center;
   color: #566266;
   background-color: white;
   }
   .date-wrapper input {
   width: 32%;
   border: 0 none;
   text-align: center;
   box-shadow: none;
   border-radius: 4px;
   padding: 15px 15px;
   display: block;
   max-height: 50px;
   background-color: white;
   }
   .ui-widget.ui-widget-content {
   z-index:9999999999 !important;
   }
   .ui-datepicker td span, .ui-datepicker td a {
   padding: 7px 8px !important;
   font-size: 16px !important;
   margin: 2px;
   }
   .ui-datepicker .ui-datepicker-title select {
   font-size: 18px !important;  
   }
   .date-wrapper input{
   border: 0 !important;
   }
   .oldest-travel div .nice-select{
   display: none !important;
   }
   .oldest-travel .question-answer select{
   display: block !important;
   }
</style>
<div class="container">
   <div class="text-center" style="margin-bottom: 30px !important;margin-top: 30px !important;">
      <h1 style="font-weight:bold;margin: 0px;" class="text-danger"><strong>Super Visa Insurance</strong></h1>
      <h2 style="text-align: center; margin: 0px;" class="hidden-xs">It's fast and easy using our secure online application.</h2>
   </div>
   <div class="row mainsection birthdate">
      <div class="col-md-7 leftsection">
         <script type="text/javascript">
            jQuery(document).ready(function($){
            
                $("#dh-get-quote").validate();
            
                /*$("#dh-get-quote").on("submit",function(){
            
                    $("#dh-get-quote").validate();
            
                })*/
            
                
            
            });
            
         </script>
         <form action="sessions.php?action=info" method="post" class=" form form-layout1" role="form" id="dh-get-quote">
            <div id="">
               <div class="form-group">
                  <div class="col-md-5">
                     <label class="input-label">Maximum Coverage Amount </label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel">
                     <select name="sum_insured2" class="form-control form-control" id="sum_insured2" autocomplete="off" required="">
                        <option value=""> --- Please choose ---</option>
                        <option value="100000" selected="">$100,000 </option>
                        <option value="150000">$150,000 </option>
                        <option value="200000">$200,000 </option>
                        <option value="250000">$250,000 </option>
                        <option value="300000">$300,000 </option>
                     </select>
                  </div>
                  <input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
                  <script>
                     jQuery(document).ready(function($){
                     
                        jQuery(window).load(function(){
                     
                            
                     
                     var values = $('input[type="range"]').data("steps").split(',');
                     
                          var default_value = $('input[type="range"]').data("default");
                     
                            
                     
                             $('input[type="range"]').rangeslider({
                     
                              polyfill : false,
                     
                              onInit : function() {
                     
                                  this.output = $( '<div class="range-output" />' ).insertAfter( this.$range).html( "$ "+default_value); //this.$element.val()
                     
                                  $('#hidden_sum_insured').val( default_value );
                     
                              },
                     
                              onSlide : function( position, value ) {
                     
                                console.log(values);
                     
                                  this.output.html(  "$ "+values[this.value]  );
                     
                                  console.log("Values "+this.value);
                     
                                  $('#hidden_sum_insured').val( values[this.value] );
                     
                              },
                     
                              onSlideEnd: function(position, value ){
                     
                                localStorage.sliderValue = values[this.value];
                     
                                localStorage.sliderPosition = this.value;
                     
                              }
                     
                          });
                     
                            if (typeof Storage !== 'undefined' && localStorage.getItem("sliderValue")!==null) {
                     
                                jQuery('input[type="range"]').rangeslider('update', true);
                     
                            }
                     
                        })
                     
                     
                     
                     });
                     
                     
                     
                     
                     
                  </script>
                  <div class="clearfix"></div>
               </div>
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <div class="form-group">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label"> Primary destination in Canada </label> 
                  </div>
                  <div class="col-md-7 col-xs-12">
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
                  <div class="clearfix"></div>
               </div>
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <div class="form-group">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label preinfo">Start Date of Coverage <i class="fa fa-info" style="z-index: 99999;"><span>
                     <strong>Start Date</strong><br>
                     The date of the coverage start from.
                     </span></i>
                     </label>
                  </div>
                  <div class="col-md-7 col-xs-12">
                     <div class="input" style="position:relative;">
                        <label class="icon-left" for="departure_date" style="color: rgb(245, 130, 31);font-size: 17px;height: 19px;line-height: 38px !important;opacity: .6;position: absolute;text-align: center;top: 2px;width: 42px;z-index: 2; left:0;">
                        <i class="fa fa-calendar" style="border-right: 1px solid #666;padding-right: 8px;"></i>
                        </label>
                        <input autocomplete="off" id="departure_date" name="departure_date" value="" class="form-control hasDatepicker" type="text" required="" onchange="supervisayes()" style="padding-left: 40px !important;">
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="form-group">
                  <div class="col-md-5 col-xs-12 " style="padding-right:0px;">
                     <label class="input-label preinfo">End Date of Coverage <i class="fa fa-info" style="z-index: 99999;"><span>
                     <strong>End Date</strong><br>
                     This is the date when your coverage will expire.
                     </span></i> </label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel ">
                     <div class="input" style="position:relative;">
                        <label class="icon-left" for="return_date" style="color: rgb(245, 130, 31);font-size: 17px;height: 19px;line-height: 38px !important;opacity: .6;position: absolute;text-align: center;top: 2px;width: 42px;z-index: 2; left:0;">
                        <i class="fa fa-calendar" style="border-right: 1px solid #666;padding-right: 8px;"></i>
                        </label>
                        <input autocomplete="off" id="return_date" name="return_date" class="form-control" type="text" required="" readonly="true" style="padding-left: 40px !important;" value="">
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <script type="text/javascript">
                  jQuery(document).ready(function() {
                  
                      // jQuery("#primary_destination").msDropdown();
                  
                  });
                  
                  
                  
                  
                  
               </script>
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <div class="form-group">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label"> Number of travellers </label>
                  </div>
                  <style type="text/css">
                     .number_travel div .form-control{
                     display: none !important;
                     }
                     .number_travel  select .form-control{
                     display: block !important;
                     }
                  </style>
                  <div class="col-md-7 col-xs-12 number_travel">
                     <select name="number_travelers" class="form-control form-select" id="number_travelers" autocomplete="off" placeholder="" required="" onchange="checknumtravellers()">
                        <option value="">Number of travellers</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                     </select>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="form-group" id="traveller_1" style="">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label">Birth date of the oldest Traveller</label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel oldest-travel">
                     <div class="date-wrapper question-answer">
                        <input type="text" placeholder="DD" name="days[]" id="days_1" value="" maxlength="2" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" name="months[]" id="months_1" value="" maxlength="2" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_1" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                           <option value="1969">1969</option>
                           <option value="1968">1968</option>
                           <option value="1967">1967</option>
                           <option value="1966">1966</option>
                           <option value="1965">1965</option>
                           <option value="1964">1964</option>
                           <option value="1963">1963</option>
                           <option value="1962">1962</option>
                           <option value="1961">1961</option>
                           <option value="1960">1960</option>
                           <option value="1959">1959</option>
                           <option value="1958">1958</option>
                           <option value="1957">1957</option>
                           <option value="1956">1956</option>
                           <option value="1955">1955</option>
                           <option value="1954">1954</option>
                           <option value="1953">1953</option>
                           <option value="1952">1952</option>
                           <option value="1951">1951</option>
                           <option value="1950">1950</option>
                           <option value="1949">1949</option>
                           <option value="1948">1948</option>
                           <option value="1947">1947</option>
                           <option value="1946">1946</option>
                           <option value="1945">1945</option>
                           <option value="1944">1944</option>
                           <option value="1943">1943</option>
                           <option value="1942">1942</option>
                           <option value="1941">1941</option>
                           <option value="1940">1940</option>
                           <option value="1939">1939</option>
                           <option value="1938">1938</option>
                           <option value="1937">1937</option>
                           <option value="1936">1936</option>
                           <option value="1935">1935</option>
                           <option value="1934">1934</option>
                           <option value="1933">1933</option>
                           <option value="1932">1932</option>
                           <option value="1931">1931</option>
                           <option value="1930">1930</option>
                           <option value="1929">1929</option>
                           <option value="1928">1928</option>
                           <option value="1927">1927</option>
                           <option value="1926">1926</option>
                           <option value="1925">1925</option>
                           <option value="1924">1924</option>
                           <option value="1923">1923</option>
                           <option value="1922">1922</option>
                           <option value="1921">1921</option>
                           <option value="1920">1920</option>
                           <option value="1919">1919</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <input type="hidden" name="ages[]" id="age_1" value="">           
               <div class="form-group" id="traveller_2" style="display: none">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label">Birth date of the second Traveller</label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel">
                     <div class="date-wrapper question-answer">
                        <input type="text" placeholder="DD" name="days[]" id="days_2" value="" maxlength="2" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" name="months[]" id="months_2" value="" maxlength="2" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_2" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                           <option value="1969">1969</option>
                           <option value="1968">1968</option>
                           <option value="1967">1967</option>
                           <option value="1966">1966</option>
                           <option value="1965">1965</option>
                           <option value="1964">1964</option>
                           <option value="1963">1963</option>
                           <option value="1962">1962</option>
                           <option value="1961">1961</option>
                           <option value="1960">1960</option>
                           <option value="1959">1959</option>
                           <option value="1958">1958</option>
                           <option value="1957">1957</option>
                           <option value="1956">1956</option>
                           <option value="1955">1955</option>
                           <option value="1954">1954</option>
                           <option value="1953">1953</option>
                           <option value="1952">1952</option>
                           <option value="1951">1951</option>
                           <option value="1950">1950</option>
                           <option value="1949">1949</option>
                           <option value="1948">1948</option>
                           <option value="1947">1947</option>
                           <option value="1946">1946</option>
                           <option value="1945">1945</option>
                           <option value="1944">1944</option>
                           <option value="1943">1943</option>
                           <option value="1942">1942</option>
                           <option value="1941">1941</option>
                           <option value="1940">1940</option>
                           <option value="1939">1939</option>
                           <option value="1938">1938</option>
                           <option value="1937">1937</option>
                           <option value="1936">1936</option>
                           <option value="1935">1935</option>
                           <option value="1934">1934</option>
                           <option value="1933">1933</option>
                           <option value="1932">1932</option>
                           <option value="1931">1931</option>
                           <option value="1930">1930</option>
                           <option value="1929">1929</option>
                           <option value="1928">1928</option>
                           <option value="1927">1927</option>
                           <option value="1926">1926</option>
                           <option value="1925">1925</option>
                           <option value="1924">1924</option>
                           <option value="1923">1923</option>
                           <option value="1922">1922</option>
                           <option value="1921">1921</option>
                           <option value="1920">1920</option>
                           <option value="1919">1919</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <input type="hidden" name="ages[]" id="age_2" value="">           
               <div class="form-group" id="traveller_3" style="display: none">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label">Birth date of the third Traveller</label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel">
                     <div class="date-wrapper question-answer">
                        <input type="text" placeholder="DD" name="days[]" id="days_3" value="" maxlength="2" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" name="months[]" id="months_3" value="" maxlength="2" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_3" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                           <option value="1969">1969</option>
                           <option value="1968">1968</option>
                           <option value="1967">1967</option>
                           <option value="1966">1966</option>
                           <option value="1965">1965</option>
                           <option value="1964">1964</option>
                           <option value="1963">1963</option>
                           <option value="1962">1962</option>
                           <option value="1961">1961</option>
                           <option value="1960">1960</option>
                           <option value="1959">1959</option>
                           <option value="1958">1958</option>
                           <option value="1957">1957</option>
                           <option value="1956">1956</option>
                           <option value="1955">1955</option>
                           <option value="1954">1954</option>
                           <option value="1953">1953</option>
                           <option value="1952">1952</option>
                           <option value="1951">1951</option>
                           <option value="1950">1950</option>
                           <option value="1949">1949</option>
                           <option value="1948">1948</option>
                           <option value="1947">1947</option>
                           <option value="1946">1946</option>
                           <option value="1945">1945</option>
                           <option value="1944">1944</option>
                           <option value="1943">1943</option>
                           <option value="1942">1942</option>
                           <option value="1941">1941</option>
                           <option value="1940">1940</option>
                           <option value="1939">1939</option>
                           <option value="1938">1938</option>
                           <option value="1937">1937</option>
                           <option value="1936">1936</option>
                           <option value="1935">1935</option>
                           <option value="1934">1934</option>
                           <option value="1933">1933</option>
                           <option value="1932">1932</option>
                           <option value="1931">1931</option>
                           <option value="1930">1930</option>
                           <option value="1929">1929</option>
                           <option value="1928">1928</option>
                           <option value="1927">1927</option>
                           <option value="1926">1926</option>
                           <option value="1925">1925</option>
                           <option value="1924">1924</option>
                           <option value="1923">1923</option>
                           <option value="1922">1922</option>
                           <option value="1921">1921</option>
                           <option value="1920">1920</option>
                           <option value="1919">1919</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <input type="hidden" name="ages[]" id="age_3" value="">           
               <div class="form-group" id="traveller_4" style="display: none">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label">Birth date of the fourth Traveller</label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel">
                     <div class="date-wrapper question-answer">
                        <input type="text" placeholder="DD" name="days[]" id="days_4" value="" maxlength="2" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" name="months[]" id="months_4" value="" maxlength="2" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_4" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                           <option value="1969">1969</option>
                           <option value="1968">1968</option>
                           <option value="1967">1967</option>
                           <option value="1966">1966</option>
                           <option value="1965">1965</option>
                           <option value="1964">1964</option>
                           <option value="1963">1963</option>
                           <option value="1962">1962</option>
                           <option value="1961">1961</option>
                           <option value="1960">1960</option>
                           <option value="1959">1959</option>
                           <option value="1958">1958</option>
                           <option value="1957">1957</option>
                           <option value="1956">1956</option>
                           <option value="1955">1955</option>
                           <option value="1954">1954</option>
                           <option value="1953">1953</option>
                           <option value="1952">1952</option>
                           <option value="1951">1951</option>
                           <option value="1950">1950</option>
                           <option value="1949">1949</option>
                           <option value="1948">1948</option>
                           <option value="1947">1947</option>
                           <option value="1946">1946</option>
                           <option value="1945">1945</option>
                           <option value="1944">1944</option>
                           <option value="1943">1943</option>
                           <option value="1942">1942</option>
                           <option value="1941">1941</option>
                           <option value="1940">1940</option>
                           <option value="1939">1939</option>
                           <option value="1938">1938</option>
                           <option value="1937">1937</option>
                           <option value="1936">1936</option>
                           <option value="1935">1935</option>
                           <option value="1934">1934</option>
                           <option value="1933">1933</option>
                           <option value="1932">1932</option>
                           <option value="1931">1931</option>
                           <option value="1930">1930</option>
                           <option value="1929">1929</option>
                           <option value="1928">1928</option>
                           <option value="1927">1927</option>
                           <option value="1926">1926</option>
                           <option value="1925">1925</option>
                           <option value="1924">1924</option>
                           <option value="1923">1923</option>
                           <option value="1922">1922</option>
                           <option value="1921">1921</option>
                           <option value="1920">1920</option>
                           <option value="1919">1919</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <input type="hidden" name="ages[]" id="age_4" value="">           
               <div class="form-group" id="traveller_5" style="display: none">
                  <div class="col-md-5 col-xs-12 ">
                     <label class="input-label">Birth date of the fifth Traveller</label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel">
                     <div class="date-wrapper question-answer">
                        <input type="text" placeholder="DD" name="days[]" id="days_5" value="" maxlength="2" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" name="months[]" id="months_5" value="" maxlength="2" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_5" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                           <option value="1969">1969</option>
                           <option value="1968">1968</option>
                           <option value="1967">1967</option>
                           <option value="1966">1966</option>
                           <option value="1965">1965</option>
                           <option value="1964">1964</option>
                           <option value="1963">1963</option>
                           <option value="1962">1962</option>
                           <option value="1961">1961</option>
                           <option value="1960">1960</option>
                           <option value="1959">1959</option>
                           <option value="1958">1958</option>
                           <option value="1957">1957</option>
                           <option value="1956">1956</option>
                           <option value="1955">1955</option>
                           <option value="1954">1954</option>
                           <option value="1953">1953</option>
                           <option value="1952">1952</option>
                           <option value="1951">1951</option>
                           <option value="1950">1950</option>
                           <option value="1949">1949</option>
                           <option value="1948">1948</option>
                           <option value="1947">1947</option>
                           <option value="1946">1946</option>
                           <option value="1945">1945</option>
                           <option value="1944">1944</option>
                           <option value="1943">1943</option>
                           <option value="1942">1942</option>
                           <option value="1941">1941</option>
                           <option value="1940">1940</option>
                           <option value="1939">1939</option>
                           <option value="1938">1938</option>
                           <option value="1937">1937</option>
                           <option value="1936">1936</option>
                           <option value="1935">1935</option>
                           <option value="1934">1934</option>
                           <option value="1933">1933</option>
                           <option value="1932">1932</option>
                           <option value="1931">1931</option>
                           <option value="1930">1930</option>
                           <option value="1929">1929</option>
                           <option value="1928">1928</option>
                           <option value="1927">1927</option>
                           <option value="1926">1926</option>
                           <option value="1925">1925</option>
                           <option value="1924">1924</option>
                           <option value="1923">1923</option>
                           <option value="1922">1922</option>
                           <option value="1921">1921</option>
                           <option value="1920">1920</option>
                           <option value="1919">1919</option>
                        </select>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <input type="hidden" name="ages[]" id="age_5" value="">           
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <div class="form-group">
                  <div class="col-md-5  email-main">
                     <label class="input-label"> Email Address (Required)</label>
                  </div>
                  <div class="col-md-7 col-xs-12 oldest-travel ">
                     <div class="input" style="position:relative;">
                        <label class="icon-left" for="savers_email" style="color: rgb(245, 130, 31);font-size: 17px;height: 19px;line-height: 38px !important;opacity: .6;position: absolute;text-align: center;top: 2px;width: 42px;z-index: 2; left:0;">
                        <i class="fa fa-envelope-o" style="border-right: 1px solid #666;padding-right: 8px;"></i>
                        </label>
                        <input id="savers_email" name="savers_email" class="form-control" value="" type="email" placeholder="name@example.com" style="padding-left: 40px !important;" required="">
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <!-- First Name and lastname -->
               <!-- firstname and lastname end -->
               <!-- Number of travellers and their ages -->
               <!-- End of number of trvaellers and ages -->
               <!-- Email Address -->
               <!-- end of Email Address -->
               <!---Destination country -->
               <!-- Destination ends -- >
                  <!--  Phone Number -->
               <!-- end -->
               <!-- Start Date  and End date -->
               <!-- end  of starting date and ending date --> 
               <!-- Older traveller Gender -->
               <!-- Order Gender ends -->
               <!--   Gender of person -->
               <!-- Gender of person ends -->
               <!-- Sum insured -->
               <!-- Sum insured end -->
               <div class="col-md-12 col-sm-12 col-xs-12 ">
                  <div class="col-md-4 col-xs-6" style="padding-top:20px;">
                     <img src="{{ asset('public/front/bgs/low_pr_icon.png')}}" class="img-responsive">
                  </div>
                  <div class="col-md-8 col-xs-6" style="padding: 0;">
                     <span id="family_error" style="display: none; font-size: 15px;font-weight: bold;text-align: right;padding: 20px;" class="text-danger"><i class="fa fa-warning"></i> </span>
                     <button type="submit" name="GET QUOTES" id="GET_QUOTES" class="btn btn-warning pull-right" style="display: block;">Get a Quote <i class="fa fa-angle-double-right"></i> </button>
                  </div>
               </div>
            </div>
            <input type="hidden" name="broker" value="">     
            <input type="hidden" name="agent" value="">
         </form>
         <div class="clearfix"></div>
      </div>
      <div class="col-md-5 hidden-xs">
         <div class="col-md-12 text-center" style="padding:0;">
            <img src="{{ asset('public/front/bgs/Super-Visa-Insurance-visitorguard.ca.jpg')}}" class="img-responsive">
         </div>
         <div class="col-md-12 " style="padding-top:20px;text-align: justify;background: #f0f0f0;margin-top: 10px;max-height: 335px;overflow-y: auto;border: 1px solid #ddd;">
            <strong>Why Choosing us</strong>: we are reputed experience insurance   provider, we provide flexible and affordable Travel Insurance Plan from   multiple insurance companies like <a href="" target="_blank">Manulife Insurance</a>, GMS, <a href="" target="_blank">TIC Insurance</a>,   SRMRM insurance, Travelance Insurance, TUGO, 21st Century,&nbsp;we provide   services in Kitchener, Waterloo, Cambridge, Guelph, Stratford ,Hamilton,   Branford, Woodstock, London, Milton, Mississauga, Brampton, Toronto. <strong>Super Visa Insurance</strong>&nbsp;:&nbsp;Super Visa is a new option for   parents and grandparents of Canadian citizens and permanent residents to   visit their family in Canada. These individuals may be eligible to   apply for the Parent and Grandparent Super Visa to visit their family in   Canada for up to 2 years without the need to renew their status. Super   Visa Insurance provides coverage for emergency medical and hospital care   in Canada. This insurance is valid for 365 days.
            <h2>How to Apply for Super Visa Insurance</h2>
            <ul>
               <li>Fill out the <a href="http://www.cic.gc.ca/english/pdf/kits/forms/IMM5257E.PDF">Application for a Temporary Resident Visa Made Outside of Canada [IMM5257]</a>.</li>
               <li>Gather any required documentation.</li>
               <li>Submit your completed form and supporting documents to a visa office.</li>
               <li>Make sure to pay the <a href="http://www.cic.gc.ca/english/information/offices/apply-where.asp">fee that coincides with your country or region</a>.</li>
               <li>Make sure to purchase <a href="">Visitors to Canada insurance</a></li>
            </ul>
            <p><strong>Super visa Requirements&nbsp;:&nbsp;</strong>To obtain a Parent or   Grandparent Super Visa for Canada, applicants must have valid Super Visa   Insurance. With Super Visa applications They need to provide a proof   that they have private medical insurance from a Canadian insurance   company valid for a minimum of 1 year from a Canadian insurance company   and that it:    &nbsp; <strong>Here’s the things you need to know before you buy Super Visa Insurance </strong> <strong>Pre-existing Conduction: </strong>A Pre-existing condition   depends on your health condition means the critical illness, injury,   symptom(s) that exists before and after effective date of insurance.   Sometimes a healthy applicant can be deemed to have a pre-existing   condition based on a past health problem or evidence of treatment for a   particular condition. <strong>Deductible:</strong> Most plans have a variety of deductibles.   The deductible is the amount of each claim that you will pay. A $0   deductible means the insurance company pays 100% of each eligible claim.   A $1000 deductible means you will pay up to $1000 of each eligible   claim and the insurance company will only pay amounts in excess of the   $1000. <strong>Multiple Entry</strong>: Multiple entry coverage provides   intermittent coverage that allows you to travel back and forth between   Canada and your home country. Your coverage will be interrupted when you   return to your home country, and then be automatically reinstated when   you return to Canada. Plans that do not offer Multiple Entry have   coverage that stops as soon as you return to your home country. <strong>Side Trip: Side</strong> trip coverage provides travel health   insurance for any trips you take outside Canada during your stay, i.e.   if you take vacations to the U.S. If you expect to spend some time   outside of Canada during the term of your super visa, you should choose a   plan that has side trip coverage. <strong>Refundable</strong>: The government requires that you purchase   coverage for a full year. If you’re planning on staying less than a year   a refundable plan will allow you to receive a refund of the unused   portion of the annual/yearly premiums. These refunds come with   conditions, so again it’s important that you read the policy.</p>
         </div>
      </div>
   </div>
   <div style="clear:both;"></div>
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
   
    window.onload = function() {
        checktravellers();
    }
       jQuery('#gender:before').click(function() {
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
       jQuery(document).ready(function($){
        jQuery("#GET_QUOTES").on("click",function(){
        });
   /*
           $("#number_travelers").on("change", function(){
            //Number OF Traveller
            var number_of_traveller = $("#number_travelers").val();
            var aa = "";
            for(var i=2; i<=number_of_traveller; i++){
            var aa = aa + $("#birthday")[0].outerHTML;
            }
            $("#birthday_view").html(aa);
           })
   */
           $("button[type=submit]").on("change", function(){
               //function validateForm() {
               //if($(this).val() > 1){
               ///      alert('fsd');
               //       return false;
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
   
   /*       $('#GET_QUOTES').click(function(){
            var deparature = $('#departure_date').val();
            $('#departuredate').val(deparature);
        var returndate = $('#return_date').val();
            $('#returndate').val(returndate);
        });
   */
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
   }
   
   function checknumtravellers(){
    //Number OF Traveller
    var number_of_traveller = document.getElementById('number_travelers').value;
    for(var t=1; t<=number_of_traveller; t++){
        $("#traveller_"+t).hide();
        document.getElementById('age_'+t).value = '';
    }
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
   
   window.onload = function() {
     checktravellers();
   };
</script>
<script src="{{ asset('public/front/js/jquery-1.12.4.min.js')}}"></script>
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
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 514px; left: 416.812px; z-index: 1; display: none;">
   <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all">
      <a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
      <div class="ui-datepicker-title">
         <select class="ui-datepicker-month" data-handler="selectMonth" data-event="change">
            <option value="9" selected="selected">Oct</option>
            <option value="10">Nov</option>
            <option value="11">Dec</option>
         </select>
         <select class="ui-datepicker-year" data-handler="selectYear" data-event="change">
            <option value="2022" selected="selected">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
         </select>
      </div>
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
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td>
            <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td>
         </tr>
         <tr>
            <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td>
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
<script type="text/javascript">
   $(document).ready(function(){
   $("#departure_date").click(function(){
   $("#ui-datepicker-div").toggle();
   });
   });
</script>