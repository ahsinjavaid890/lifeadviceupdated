<style>
   /*.form-control {
   font-size: 16px !important;
   color: #333 !important;
   border-radius: 4px !important;
   text-transform: none;
   border: 2px solid #fff;
   background: #FFF !important;
   padding: 5px 10px;
   max-height: 40px;
   text-align: left;
   }*/
   .form-control:focus {
   border: 2px solid #fff;
   box-shadow: 0px 0px 5px #333 !important;
   }
   .wrapper {
   height: 600px;
   }
   #jrange input {
   width: 200px;
   }
   #jrange div {
   font-size: 9pt;
   }
   .date-range-selected > .ui-state-active, .date-range-selected > .ui-state-default {
   background: none;
   background-color: lightsteelblue;
   }
   .agesbtn {
   background: #FFF !important;
   }
   .agesbtn i{
   float: right;
   padding-right: 0px;
   color: #999;
   padding-top: 3px;
   }
   .no-padding {
   padding:0;
   }
   .ageandcitizen {
   background: #FFF;
   margin-top: 5px;
   box-shadow: 0 0 24px rgba(0,0,0,.16);
   text-align:left;
   }
   .ageandcitizen input {
   width: 100% !important;
   height: 20px;
   border: 0;
   border-bottom-color: currentcolor;
   border-bottom-style: none;
   border-bottom-width: 0px;
   border-bottom-color: currentcolor;
   border-bottom-style: none;
   border-bottom-width: 0px;
   border-bottom: 1px solid #bbb;
   padding: 0px;
   }
   .ageandcitizen input:focus {
   border-bottom: 1px solid #1bbc9b;
   }
   .ageandcitizen h3 {
   color: #465c69;
   font-size: 13px;
   font-weight: bold;
   line-height: 0;
   margin-top: 25px;
   margin-bottom: 10px;
   }
   .ageandcitizen h3 i{
   color: #36ae8d;
   font-size: 20px;
   padding-right: 5px;
   }
   input[type=checkbox]{
   height: 0;
   width: 0;
   visibility: hidden;
   }
   .personswitch label {
   cursor: pointer;
   text-indent: -9999px;
   width: 40px;
   height: 15px;
   background: #DDD;
   display: block;
   border-radius: 100px;
   position: relative;
   }
   .personswitch label:after {
   content: '';
   position: absolute;
   top: -2px;
   left: 2px;
   width: 19px;
   height: 19px;
   background: #44bc9b;
   border-radius: 90px;
   transition: 0.3s;
   }
   .personswitch input:checked + label {
   background: rgba(88,169,33,.4);
   }
   .personswitch input:checked + label:after {
   left: calc(100% - 2px);
   transform: translateX(-100%);
   }
   .fa-close {
   color: #666;
   font-size: 16px;
   font-weight: normal;
   position: absolute;
   right: 15px;
   top: 15px;
   cursor: pointer;
   }
   .fa-close:hover {
   color: #c00; 
   }
   .addmorebtn {
   cursor: pointer;
   border: 1px solid #1bbc9b;
   border-radius: 30px;
   color: #1bbc9b;
   font-weight: bold;
   display: block;
   text-align: center;
   width: 22px;
   height: 22px;
   padding: 0;
   background: #FFF;
   box-shadow: none !important; 
   }
   .addmorebtn:hover {
   border: 1px solid #1bbc9b; 
   background: #1bbc9b;
   color: #FFF;
   }
   .daterangepicker td.start-date {
   border-radius: 30px 0 0 30px !important;
   }
   .daterangepicker td.end-date {
   border-radius: 0 30px 30px 0 !important; 
   }
   .durationtext {
   font-size: 16px;
   font-weight: bold;
   display: inline-block;
   text-align: left;
   float: left;
   }
   .duration_days {
   color:#35ad8c;
   }
   .daterangepicker td.start-date {
   border-radius: 100px !important;
   }
   .daterangepicker td.end-date {
   border-radius: 100px !important; 
   }
   .daterangepicker td.in-range {
   border-radius: 100px !important; 
   }
   .durationtext {
   font-size: 16px;
   font-weight: bold;
   display: inline-block;
   text-align: left;
   float: left;
   }
   .duration_days {
   color: #35ad8c;
   padding: 5px 0;
   }
   .duration_text {
   display: inline-block;
   font-size: 12px;
   padding-top: 5px;
   }
   /*Radio Styling */
   .daterangepicker .drp-calendar {
   max-width: none !important;
   }
   .daterangepicker .calendar-table th, .daterangepicker .calendar-table td {
   height: 34px !important;
   }
</style>
<!--
   <style>
   #ui-datepicker-div, .ui-datepicker-div, .ui-datepicker-inline {
    width:auto;
   }
   .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
   border: none;
   background: #30a887;
   color: #fff;
   font-weight: bold;
   font-size: 14px;
   text-align: center;  
   }
   .ui-monthpicker .ui-datepicker-today a, .ui-monthpicker .ui-datepicker-today a:hover, .ui-datepicker .ui-datepicker-current-day a {
   background: #333 !important;
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
   </style>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
     $( function() {
       $( "#departure_date" ).datepicker({
         changeMonth: true,
         changeYear: true,
      dateFormat: 'yy-mm-dd',
      yearRange: "+0:+5",
      minDate: "today",
       });
     });
   </script>  
   -->
<link rel="stylesheet" href="{{ asset('public/front/css/jquery-ui.js')}}">
<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
<script type="text/javascript" src="{{ asset('public/front/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/front/js/jquery-1.12.4.js')}}"></script> 
<!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link id="bsdp-css" href="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
   <script src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>-->
<style>
   .datepicker table tr td.active.active, .datepicker table tr td.active.highlighted.active, .datepicker table tr td.active.highlighted:active, .datepicker table tr td.active:active {
   background-color: #04cca4;
   border-radius: 100px;  
   }
   .table-condensed > thead > tr > th, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > tbody > tr > td, .table-condensed > tfoot > tr > td {
   padding:3px !important;
   }
   .datepicker .datepicker-switch, .datepicker .next, .datepicker .prev, .datepicker tfoot tr th { font-weight:bold !important; }
   .datepicker table tr td, .datepicker table tr th {
   text-align: center;
   padding: 8px 12px !important;
   border-radius: 50px !important;
   border: none;
   }
   .table-striped > tbody > tr:nth-child(2n+1), table > tbody > tr:nth-child(2n+1) {
   border: none !important; 
   }
   .datepicker table tr td.today {
   background: #F1F1F1 !important;
   }
   .table-condensed thead tr:nth-child(2) {
   background: #44bc9b !important;
   color: #FFF !important;  
   }
   .table-condensed thead tr th:nth-child(1) {
   border-radius: 0px !important; 
   }
   .table-condensed thead tr th:nth-child(2) {
   border-radius: 0px !important; 
   }
   .table-condensed thead tr th:nth-child(3) {
   border-radius: 0px !important; 
   }
   .datepicker .datepicker-switch, .datepicker .next, .datepicker .prev, .datepicker tfoot tr th {
   font-size:16px;
   }
</style>
<style>
   *, *:before, *:after {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   }
   .clearfix {
   clear:both;
   }
   .breadcrumbs ul {
   list-style: none;
   }
   .cf {
   &:before, &:after { content: ' '; display: table; }
   &:after { clear: both; }
   }
   .inner {
   max-width: 820px;
   margin: 0 auto;
   }
   body .wizzard ul {
   margin: 0;
   padding: 0;
   }
   body .wizzard ul:after {
   content: "";
   display: block;
   clear: both;
   }
   body .wizzard ul li {
   display: inline-block;
   width: 25%;
   margin: 0;
   padding: 25px 0;
   float: left;
   text-align: center;
   position: relative;
   }
   body .wizzard ul li p {
   font-size: 14px;
   line-height: 16px;
   min-height: 32px;
   }
   body .wizzard ul li span {
   display: inline-block;
   background-color: #FFF;
   width: 60px;
   height: 60px;
   line-height: 60px;
   position: relative;
   overflow: hidden;
   border-radius: 100%;
   z-index: 9;
   box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.2);
   }
   body .wizzard ul li span strong {
   width: 70px;
   height: 70px;
   line-height: 70px;
   display: inline-block;
   background-color: #c1c1c1;
   position: absolute;
   top: 80%;
   left: 0;
   display:none;
   }
   body .wizzard ul li span i {
   position: relative;
   display: block;
   background-color: #f4f4f4;
   z-index: 9;
   border-radius: 100%;
   width: 36px;
   height: 36px;
   line-height: 36px;
   margin: 12px auto 0;
   font-style: normal;
   box-shadow: -webkit-0 0 7px 0 rgba(0, 0, 0, 0.2);
   box-shadow: -moz-0 0 7px 0 rgba(0, 0, 0, 0.2);
   box-shadow: -ms-0 0 7px 0 rgba(0, 0, 0, 0.2);
   box-shadow: -o-0 0 7px 0 rgba(0, 0, 0, 0.2);
   box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.2);
   font-size: 34px;
   color: #f4f4f4;
   font-weight: 600;
   }
   body .wizzard ul li em {
   position: absolute;
   width: 100%;
   height: 8px;
   background-color: #d6d6d6;
   display: block;
   bottom: 60px;
   right: -50%;
   box-shadow: -webkit-0 0 7px 0 rgba(0, 0, 0, 0.2) inset;
   box-shadow: -moz-0 0 7px 0 rgba(0, 0, 0, 0.2) inset;
   box-shadow: -ms-0 0 7px 0 rgba(0, 0, 0, 0.2) inset;
   box-shadow: -o-0 0 7px 0 rgba(0, 0, 0, 0.2) inset;
   box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.2) inset;
   }
   body .wizzard ul li.active {
   position: relative;
   }
   body .wizzard ul li.active:after {
   content: '';
   position: absolute;
   border-style: solid;
   border-width: 0 15px 15px;
   border-color: #FFFFFF transparent;
   display: block;
   width: 0;
   z-index: 1;
   bottom: 0;
   left: 0;
   right: 0;
   margin: auto;
   }
   body .wizzard ul li.active:before {
   content: '';
   position: absolute;
   border-style: solid;
   border-width: 0 16px 16px;
   border-color: rgba(0, 0, 0, 0.1) transparent;
   display: block;
   width: 0;
   z-index: 1;
   bottom: 0;
   left: 0;
   right: 0;
   margin: auto;
   display:none;
   }
   body .wizzard ul li.active span {
   position: relative;
   }
   body .wizzard ul li.active span strong {
   background-color: #FFF;
   display:none;
   }
   body .wizzard ul li.active span i {
   color: #44bc9b;
   background-color: #44bc9b;
   }
   body .wizzard ul li.passed span strong {
   top: 0 !important;
   background-color: #00c2a2;
   }
   body .wizzard ul li.passed span i {
   color: #00c2a2;
   }
   body .wizzard ul li.passed em {
   background-color: #00c2a2;
   }
   body .wizzard ul li:nth-child(2) span strong {
   top: 60%;
   }
   body .wizzard ul li:nth-child(3) span strong {
   top: 40%;
   }
   body .wizzard ul li:nth-child(4) span strong {
   top: 20%;
   }
   body .wizzard ul li:nth-child(5) span strong {
   top: 0;
   }
   body .wizzard ul li:nth-child(5) em {
   display: none;
   }
   input.question + span {
   display: block;
   position: relative;
   white-space: nowrap;
   padding: 0;
   margin: 0;
   width: 30%;
   border-top: 1px solid white;
   -webkit-transition: width 0.4s ease;
   transition: width 0.4s ease;
   height: 0px; 
   margin:0 auto;
   }
   input.question:focus + span {
   width: 80%;  
   }
   /*.form-control {
   border: 1px solid #333 !important;
   height: 35px !important;
   padding: 0 15px !important;
   font-size: 14px;
   overflow: hidden;
   color: #333 !important;
   }*/
   .inputheading {
   text-align: center !important;
   margin-bottom:10px !important;
   font-size: 18px;
   color:#1e2839;
   }
   .inputheading i{
   color: #00c0a1;
   font-size: 28px;
   width: 50px;
   height: 50px;
   line-height: 50px;
   text-align: center;
   border: 2px solid #c1c1c1;
   border-radius: 100%;
   display: block;
   margin: 0 auto;  
   margin-bottom: 10px;
   }
   label {
   font-weight: 700 !important;
   text-align: center !important;
   margin: 20px 0 0 !important;
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
   background-color: #eee;
   border-radius: 50%;
   }
   /* On mouse-over, add a grey background color */
   .radio-container:hover input ~ .checkmark {
   background-color: #ccc;
   }
   /* When the radio button is checked, add a blue background */
   .radio-container input:checked ~ .checkmark {
   background-color: #009c7d;
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
   background: white;
   }
   .next-btn {
   background-color: #2aa281 !important;
   color: #FFF;
   background-image: -webkit-gradient(linear, left top, left bottom, from(#44bc9b), to(#2aa281));
   }
   .next-btn:hover {
   background-image: -webkit-gradient(linear, left top, left bottom, from(#2aa281), to(#44bc9b)); 
   }
   .listing-item {  
   display: block;
   padding: 10px;
   }
   .oldest-travel div .nice-select{
   display: none !important;
   }
   .oldest-travel .question-answer select{
   display: block !important;
   }
</style>
<!--<div class="row">
   <div class="col-md-12 text-center">
   <h1 style="font-weight:bold;margin: 0px;" class="text-danger"><strong>Super Visa Insurance</strong></h1>
   <h2 style="margin: 0px;">To start, we have a few quick questions to understand your needs.<h2>
   </div>
   </div>-->
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
   <h2 style="font-size: 30px;margin: 0;padding: 0 0 5px;color: #00c2a2;font-weight: 600;font-family: arial;margin-top: 30px;">Super Visa Insurance</h2>
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
         <div class="col-md-12 no-padding oldest-travel">
            <select name="sum_insured2" class="form-control question" id="sum_insured2" autocomplete="off" required="">
               <option value="100000">$100,000 </option>
               <option value="150000">$150,000 </option>
               <option value="200000">$200,000 </option>
               <option value="250000">$250,000 </option>
               <option value="300000">$300,000 </option>
            </select>
            <span></span>
         </div>
      </div>
      <div class="col-md-4 listing-item" id="group_8" style="display:none;" data-listing-price="3">
         <div class="col-md-12" style="padding-bottom: 7px;">
            <h2 class="inputheading"><i class="fa fa-calendar"></i> Duration of Coverage?</h2>
         </div>
         <div class="col-md-12">
            <input autocomplete="off" id="departure_date" name="departure_date" placeholder="Start Date" value="" class="form-control" type="text" required="" onchange="supervisayes()">
            <i class="fa fa-calendar" onclick="$('#departure_date').focus();" style="position: absolute;top: 9px;right: 25px !important;font-size: 16px;color: #01a281;"></i>
            <script>
               $('#departure_date').datepicker({
               format: 'yyyy-mm-dd',
               todayHighlight:'TRUE',
               autoclose: true,
               });
            </script>
            <input type="hidden" name="return_date" id="return_date" value="">
         </div>
      </div>
      <div class="col-md-4 listing-item" id="group_3" style="display:none;" data-listing-price="7">
         <div class="col-md-12 control-label ">
            <h2 class="inputheading"><i class="fa fa-calendar"></i> What is your Date of Birth ? </h2>
         </div>
         <div class="col-md-12 no-padding oldest-travel" id="birthday">
            <div class="col-md-12 agesdiv" id="agesdiv">
               <button class="btn btn-default agesbtn form-control" type="button" onclick="$('.ageandcitizen').fadeIn(300);"> Years <i class="fa fa-caret-down"></i></button>
               <div class="col-md-12 ageandcitizen" style="display:none; padding: 1px 15px;">
                  <div class="col-md-12 no-padding oldest-travel">
                     <h3><i class="fa fa-user"></i> Primary Traveler</h3>
                  </div>
                  <div class="row yearsdiv">
                     <div class="col-md-5">
                        <small style="font-size: 12px;color: #999;">Age</small>
                        <input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;">
                     </div>
                     <div class="col-md-2 text-center" style="padding-top: 10px;">
                        or
                     </div>
                     <div class="col-md-5" style="padding-top: 10px;">
                        <a style="cursor: pointer;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date if Birth</a>
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
                              <input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;">
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
                           <input type="text" name="years[]" id="years[]" style="margin-top: -5px !important;display: block;">
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
                        <a class="addmorebtn" onclick="addtravellers();"><i class="fa fa-plus" style="position: relative;top: 4px;left: 0px;"></i></a>
                     </div>
                  </div>
                  <div class="col-md-12 no-padding oldest-travel text-center">
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
                        }
                     </script>
                  </div>
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
            <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off">
               <option value="">Please choose</option>
               <option value="Alberta" selected="">Alberta</option>
               <option value="British Columbia">British Columbia</option>
               <option value="Manitoba">Manitoba</option>
               <option value="New Brunswick">New Brunswick</option>
               <option value="Newfoundland">Newfoundland</option>
               <option value="North West Territories">North West Territories</option>
               <option value="Nova Scotia">Nova Scotia</option>
               <option value="Nunavut">Nunavut</option>
               <option value="Ontario">Ontario</option>
               <option value="Prince Edward Island">Prince Edward Island</option>
               <option value="Quebec">Quebec</option>
               <option value="Saskatchewan">Saskatchewan</option>
               <option value="Yukon Territory">Yukon Territory</option>
            </select>
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
         <button class="btn nextbtn pull-right" type="submit" style="display:none;" id="getaquotebtn"> Get a Quote <i class="fa fa-shopping-cart"></i></button>
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
<!--<script>
   jQuery(function($) {
   var divList = $(".listing-item");
   divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});
   
   $("#listprices").html(divList);
   })
   </script>-->
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
   //SUPER VISA 
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
    var someFormattedDate = y + '/' + mm + '/' + dd;
    document.getElementById('return_date').value = someFormattedDate;
   //}, 1000);
   }
   
   
   function checkfamilyplan(){
    alert(inps);
   //Eligibility
   var inps = document.getElementByName('years').value;
   
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
   document.getElementById('nextbtn').style.display = 'block';
   document.getElementById('family_error').innerHTML = '';
   document.getElementById('family_error').style.display = 'none';
   } else {
   document.getElementById('nextbtn').style.display = 'none';
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
    document.getElementById('nextbtn').style.display = 'block';
    document.getElementById('family_error').style.display = 'none'; 
   }
    
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