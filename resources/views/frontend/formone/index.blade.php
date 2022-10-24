@extends('frontend.layouts.main')
@section('content')
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/daterangepicker/daterangepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/bootstraptwo.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/essentials.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/tab_style.css') }}">
<section class="tabshead">
	<div class="container">
		<div class="row tabs">
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn active" onclick="window.location='tab_info.php'">
					<i class="fa fa-user"></i> Information
				</button>
			</div>
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn " onclick="window.location='tab_coverage.php'">
					<i class="fa fa-umbrella"></i> Coverage
				</button>
			</div>
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn " onclick="window.location='tab_quotes.php'">
					<i class="fa fa-shopping-cart"></i> Quotes
				</button>
			</div>
			<div class="col-md-3 col-xs-3 text-center">
				<button class="btn ">
					<i class="fa fa-edit"></i> Apply / Buy
				</button>
			</div>
		</div>
	</div>
</section>
<section class="tabscontent">
<style>
.form-control {
font-size: 16px !important;
color: #333 !important;
border-radius: 4px !important;
text-transform: none;
border: 2px solid #fff;
background: #FFF !important;
padding: 5px 10px;
max-height: 40px;
text-align: left;
}
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
padding-right: 5px;
color: #999;
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

.mainheading {
	font-weight:bold;margin: 0px; text-align:center;color: #FFF !important;font-size: 48px;
}

@media only screen and (max-width: 420px) {
#backbtn {
	width: 100% !important;
}
#getquote {
width: 100% !important;	
}
.daterangepicker {
position: fixed !important;
width: 100% !important;
z-index: 999999999 !important;
top: 0 !important;
left: 0 !important;
bottom: 0;
right: 0 !important;
margin-top: 0 !important;
}
.daterangepicker .drp-calendar {
max-width: 99% !important;
}
.daterangepicker .drp-calendar.left {
	padding:0px 8px;
}
.daterangepicker .drp-calendar.right {
	padding:0px 8px;
}

.ageandcitizen {
position: fixed !important;
width: 100% !important;
z-index: 999999999 !important;
top: 0 !important;
left: 0 !important;
bottom: 0;
right: 0 !important;
margin-top: 0 !important;
overflow: scroll;
}
.mainheading {
	font-size: 29px !important;
}

}

</style>


<div class="clearfix"></div>

<section style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('public/front/bgs/2.jpg') }}'); background-size: cover; background-position: 50% 50%; padding:100px 0px 200px 0px;">
<div class="container">
	<div class="col-md-12">
	<h1 class="mainheading"><strong>Super Visa Insurance</strong></h1>
	<h2 style="margin: 0px; text-align:center; color:#FFF;font-size: 20px;font-weight: normal;line-height: normal;">To start, we have a few quick questions to understand your needs.</h2>
	</div>

<div class="col-md-12 text-center" style="padding:0;">
<div class="clearfix"></div>
<form action="sessions.php?action=info" method="post" id="dh-get-quote" class="form-horizontal form-layout2" role="form">
<div id="listprices_" style="padding-top:30px;">

<div class="page_1">
<div class="col-md-4" style="margin-bottom: 10px;">
<select class="form-control" name="sum_insured2" id="sum_insured2">
<option value="">Coverage Amount</option>
<option value="100000" selected="">$100,000 </option>
<option value="150000">$150,000 </option>
<option value="200000">$200,000 </option>
<option value="250000">$250,000 </option>
<option value="300000">$300,000 </option>
</select>
</div>

<div class="col-md-4" style="margin-bottom: 10px;">
<input autocomplete="off" id="departure_date" name="departure_date" value="" class="form-control" type="text" required="" onchange="supervisayes()">
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
//console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
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
	var someFormattedDate = y + '-' + mm + '-' + dd;
	document.getElementById('return_date').value = someFormattedDate;
//}, 1000);
}
</script>
<input type="hidden" name="return_date" id="return_date" value="2023-10-23">
</div>
	


<div class="col-md-4 agesdiv" id="agesdiv">
<button class="btn btn-default agesbtn form-control" type="button" onclick="$('.ageandcitizen').fadeIn(300);">Ages and Details <i class="fa fa-caret-down"></i></button>
<div class="col-md-12 ageandcitizen" style="padding: 1px 15px; display: none;">

<div class="col-md-12 no-padding">
<h3><i class="fa fa-user"></i> Primary Traveler</h3>
</div>
<div class="row yearsdiv">
<div class="col-md-5">
<small style="font-size: 12px;color: #999;">Age</small>
<input type="text" name="ages[]" id="ages[]" value="" class="primaryage" style="margin-top: -5px !important;display: block;">
</div>
<div class="col-md-2 text-center" style="padding-top: 10px;">
or
</div>
<div class="col-md-5" style="padding-top: 10px;">
<a style="cursor: pointer;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
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
<input type="text" id="dob_year" onchange="calprimaryage()" style="margin-top: -5px !important;display: block;">
</div>
</div>
<script>
function calprimaryage(){
var currentyear = new Date().getFullYear();
var dobyear = document.getElementById('dob_year').value;
var primaryage = currentyear - dobyear;
$('.primaryage').val(primaryage);
}
</script>
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

<div class="col-md-12 no-padding" style="margin-top:10px;">
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
$('.add_1').val('');
}
}
</script>
</div>
</div>
<div class="col-md-12 no-padding additionals" style=" display:none;">
<div class="birthday">
<div class="col-md-3 add_1" style="padding-left: 0;">
<small style="font-size: 12px;color: #999;">Age</small>
<input type="text" name="years[]" class="add_1" value="" style="margin-top: -5px !important;display: block;">
</div>
</div>
<input type="hidden" id="current_adds" value="1">
<input type="hidden" id="number_travelers" name="number_travelers" value="1">
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
<a class="addmorebtn" onclick="addtravellers();"><i class="fa fa-plus" style="position: relative;top: 0px;left: 0px;"></i></a>
</div>
</div>

<div class="col-md-12 no-padding">
<h3><i class="fa fa-wheelchair"></i> Pre-existing Condition ?</h3>
<div class="col-md-12 no-padding">
<label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
</div>
</div>

<div class="col-md-12 no-padding">
<h3><i class="fa fa-child"></i> Do you require Family Plan ?</h3>
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

<div class="col-md-12 no-padding text-center">
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
checkfamilyplan();
}
</script>
</div>

<div class="clear:both;"></div>

</div>
</div>

<div class="clear:both;"></div>
<div class="col-md-2 pull-right" style="margin: 30px 0;">
<button class="btn nextbtn" type="button" id="GET_QUOTES" onclick="$('.page_1').hide();$('.page_2').show('slow');" style="display: block;"> Next <i class="fa fa-arrow-circle-right"></i></button>
</div>

<script>
$('html').click(function() {
    $('.ageandcitizen').fadeOut(300);
 })

 $('.agesdiv').click(function(e){
     e.stopPropagation();
 });
</script>
</div>
<!-- PAGE ONE ENDED -->

<div class="page_2" style="display:none;">
<div class="row">


<div class="col-md-4" style="margin-bottom:10px;">
<input id="savers_email" name="savers_email" class="form-control" required="" value="" type="email" placeholder="Your email address" style="float: none;padding: 0 10px !important;">
</div>
</div>
<div class="row">

       <!---Destination country -->

        
        <div class="col-md-4">

        <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">

            <option value=""> --- Primary destination in Canada ---</option>

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



        <!-- Destination ends -->

</div>


<div class="clear:both;"></div>
<div class="col-md-12" style="margin: 50px 0;padding: 0;">
<div class="col-md-5 col-xs-12" style="padding: 0;">
<button class="btn btn-default" style="padding: 5px 40px; font-weight: bold; font-size: 16px; display: block;border-radius: 50px;  color:#333 !important;background: #FFF !important;box-shadow: none !important; margin-bottom:10px;" id="backbtn" type="button" onclick="$('.page_1').show();$('.page_2').hide('slow');"><i class="fa fa-arrow-circle-left"></i> Back</button>
</div>
<div class="col-md-7 col-xs-12" style="padding: 0;">
<button type="submit" id="getquote" style="font-size:16px;" class="btn nextbtn pull-right"> Continue <i class="fa fa-arrow-circle-right"></i></button>
</div>
</div>

</div>

<span id="family_error" class="col-md-12" style="display: none; font-size: 16px;font-weight: bold;text-align: left;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span><br>


			
<input type="hidden" name="broker" value="">     
<input type="hidden" name="agent" value="">
<input type="hidden" name="skip_coverage" value="yes">

</div></form>
</div>

</div>
</section>
      	<div class="col-md-12 col-sm-12 col-xs-12">
		
		<!--<div class="center m-t-30px" style="text-align: center;">
			<button type="submit" name="GET QUOTES" id="getquote" class="btn bg-red show-loading-popup">GET QUOTES</button>
		  </div>-->
	    </div>

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
var number_travelers = ' ';
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
/*
    new When({
        input: document.getElementById('daterange'),
		double: true,
		labelTo: 'End Date',
        labelFrom: 'Start Date'
    });

    new When({
        input: document.getElementById('departure_date'),
        singleDate: true
    });


$(document).ready(function() {
		  $('.trigger').click(function(){
			  $('body').addClass('display-header');
			  $('#header-trigger').removeClass('trigger');
			  $('#header-trigger').addClass('removeheader');
		  });
		  
		  $('.removeheader').click(function(){
			  $('body').removeClass('display-header');
			  $('#header-trigger').addClass('trigger');
			  $('#header-trigger').removeClass('removeheader');
		  });
});
*/
      jQuery(document).ready(function() {
		  
		  var tempvalue = localStorage.getItem("dateRange");
		 if(tempvalue){
			 document.getElementById('daterange').value = tempvalue;
			applychanges();
			document.getElementById('daterange').focus;
			//alert(tempvalue);
		} else {
			document.getElementById('daterange').value = '';
		}

       //jQuery("#primary_destination").msDropdown();
       });


    jQuery(document).ready(function($){
		
		//applychanges();
 /* 		
        $("#number_travelers").on("change", function(){
            var number_of_traveller = $(this).val();
            var aa = "";
            for(var i=2; i<=number_of_traveller; i++){
                var aa = aa + $("#birthday")[0].outerHTML;
            }

            $("#birthday_view").html(aa);
            console.log( $(".birthday")[0] );
        })
*/
 
      <?php
//    if(isset($allow_input_field['fplan']) && $allow_input_field['fplan'] == "on" ){ ?>
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

      <?php //} ?>
 
/* $('#getquote').click(function(){

var deparature = $('#departure_date').val();
$('#departuredate').val(deparature);

var returndate = $('#return_date').val();
$('#returndate').val(returndate);


 });
*/
    });
</script>
<script>
/*jQuery(function($) {
var divList = $(".listing-item");
divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});
$("#listprices").html(divList);
})*/
</script>
<script>
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
</section>
@endsection