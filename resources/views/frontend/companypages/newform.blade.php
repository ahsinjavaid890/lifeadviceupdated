@extends('frontend.layouts.main')
@section('tittle')
<title>Qoutes – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/21/css/chunk-b2560f80.9329634e.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/21/css/chunk-5970b8c1.3cbf45f8.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/21/css/chunk-e66e9cce.0bfb26e0.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/21/css/chunk-ebe193e4.1c34b978.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/21/css/chunk-3e82b756.822e1495.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/21/css/chunk-92251a5e.90e3ff4d.css">
<script type="text/javascript" src="https://assets.visitorscoverage.com/production/app/vue-builds/21/js/main.2a3546da.js"></script>
<script type="text/javascript" src="https://assets.visitorscoverage.com/production/app/vue-builds/21/js/chunk-vendors.0dbf611d.js"></script>
<script type="text/javascript" src="https://static.zdassets.com/ekr/snippet.js?key=7a3787b9-6f3d-4a81-826c-c8c274397857"></script>
<div class="container-homepage" style="margin-top: 8rem;">
   <div class="row">
      <div class="col-md-12">
         <form action="#" method="POST">
            <div class="card p-0">
               <div class="card-body p-0">
                  <div data-v-5170d561="" data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div data-v-5170d561="" class="grid-container">
                        <div data-v-5170d561="" class="grid-row grid-row--bar">
                           <div data-v-5170d561="" class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal1" data-v-5170d561="" class="form-input input-destination has-arrow">
                                 <input data-v-5170d561="" type="text" placeholder="Destination" required="required" class="input-field hide-value" disabled>
                                 <span data-v-5170d561="" class="label-text">Destination</span>
                                 <div data-v-5170d561="" class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2" data-v-5170d561="" class="form-input input-traveler-info has-arrow">
                              <input data-v-5170d561="" type="text" placeholder="Traveler Information" required="required" class="input-field" disabled>
                              <span data-v-5170d561="" class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"  data-v-5170d561="" class="form-input date-range form-input__date-range">
                                 <div data-v-5170d561="" class="input-field">
                                    <div data-v-5170d561="" class="from">
                                       <i data-v-5170d561="" class="icon icon-calendar"></i>
                                       <div data-v-5170d561="" class="value"> Start Date 
                                       </div>
                                    </div>
                                    <div data-v-5170d561="" class="sep"></div>
                                    <div data-v-5170d561="" class="to">
                                       <div data-v-5170d561="" class="value">End Date</div>
                                    </div>
                                 </div>
                              </div>
                              <button data-v-5170d561="" disabled="disabled" class="button button-primary button-rounded get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade zoom-in" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div data-v-5ed4506d="" data-v-6d46de94="" class="card lg-wizard-card  border-0">
                           <h2 data-v-5ed4506d="" class="heading-3 card-heading">What countries will be visited?</h2>
                           <div data-v-5ed4506d="" class="card-content">
                              <p data-v-5ed4506d="" class="card-info">Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered.</p>
                              <div data-v-5ed4506d="" class="form-line">
                                 <div data-v-5ed4506d="" class="line-content">
                                    <span data-v-2cd039a3="" data-v-5ed4506d="" class="form-input select has-mobile-exit wide-input">
                                       <div data-v-2cd039a3="" class="mobile-exit">&nbsp;</div>
                                       	<select  data-v-2cd039a3="" placeholder="Destination Country" name="ngfxrjpzhu" autocomplete="ngfxrjpzhu" required="required" class="input-field" style=" background-image: none !important;">
                                       	  <option class="optionselect">Primary Destination</option>
                                          @foreach(DB::table('formcountries')->get() as $r)
                                          <option data-v-6e3bf6e8="{{ $r->code }}" data-title="{{ $r->name }}" data-value="{{ $r->code }}" class="optionselect"><span data-v-6e3bf6e8="">{{ $r->name }}</span></option>
                                          @endforeach
	                                      </select>
	                                      <span data-v-2cd039a3="" class="label-text">Primary Destination</span>
                                       <div data-v-2cd039a3="" class="dropdown">
                                          <select data-v-6e3bf6e8="" name="primary_destination" id="primary_destination" class="input-field" required>
                                        
                                       </select>
                                       </div>
                                    </span>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <!---->
                           <div data-v-73e0d048="" data-v-5ed4506d="" class="card-foot mt-4">
                              <div data-v-73e0d048="" class="card-foot--container">
                                 <!---->
                                 <div data-v-73e0d048="" class="card-footer--center-col"></div>
                              </div>
                              <!---->
                           </div>
                        </div>
                        <div class="nextbtns">
                           <button class="btn btn-default btn-next">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade zoom-in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div data-v-0fda4d6e="" class="card lg-wizard-card border-0">
                           <h2 data-v-0fda4d6e="" class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div data-v-0fda4d6e="" class="card-content">
                              <p data-v-0fda4d6e="" class="card-info"> Enter the age and citizenship for each person that will be traveling. </p>
                              <div data-v-0fda4d6e="" class="traveler-visitor form-line spec-trev-info visitor-primary">
                                 <div data-v-0fda4d6e="" class="line-content fd-column">
                                    <div data-v-0fda4d6e="" class="row">
                                      <div class="col-md-6">
                                       <div class=" ageandcitizen">
		                                 <div class="row yearsdiv" style="">
		                                    <div class="col-md-4">
		                                       <small style="font-size: 12px;color: #999;">Age</small>
		                                       <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" maxlength="3" name="ages[]" id="ages" value="" class="primaryage" style="margin-top: -5px !important;display: block;" required>
		                                    </div>
		                                    <div class="col-md-3 text-center text-dark" style="padding-top: 10px;">
		                                       or
		                                    </div>
		                                    <div class="col-md-5" style="padding-top: 10px;">
		                                       <a style="cursor: pointer; color: black;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
		                                    </div>
		                                 </div>
		                                 <div class="row dobdiv" style="display:none;">
		                                    <div class="col-md-12 d-flex">
		                                       <div class="col-md-7 no-padding d-flex">
		                                          <div class="col-md-4" style="padding: 0 5px;">
		                                             <small style="font-size: 7px;color: #999;padding: 0;">Month</small>
		                                             <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block;" maxlength="2">
		                                          </div>
		                                          <div class="col-md-4" style="padding: 0 5px;">
		                                             <small style="font-size: 7px;color: #999;padding: 0;">Day</small>
		                                             <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block;" maxlength="2">
		                                          </div>
		                                          <div class="col-md-4" style="padding: 0 5px;">
		                                             <small style="font-size: 7px;color: #999;padding: 0;">Year</small>
		                                             <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" id="dob_year" onchange="calprimaryage()" style="margin-top: -5px !important;display: block;" required>
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
		                                       <div class="col-md-5" style="padding-top: 10px;">
		                                          <div class="row">
		                                             <div style="padding: 0;" class="col-md-3 text-center  text-dark">
		                                                or
		                                             </div>
		                                             <div style="padding: 0;text-align: center;" class="col-md-9">
		                                                <a style="cursor: pointer;  color: black;" onclick="$('.dobdiv').hide(); $('.yearsdiv').show()">Enter Age</a>
		                                             </div>
		                                          </div>
		                                       </div>
		                                    </div>
		                                 </div>
		                              </div>
                                      </div>
                                       <div class="col-md-6">
                                       	<div data-v-0fda4d6e="" class="d-inline-block visitor-citizenship-container">
                                          <div data-v-0fda4d6e="" class="d-inline-block citizenship-section">
                                             <span data-v-2cd039a3="" data-v-0fda4d6e="" class="form-input select cd-visitor country-of-citizenship has-mobile-exit wide-input">
                                                <div data-v-2cd039a3="" class="mobile-exit">&nbsp;</div>
                                                <select data-v-2cd039a3="" type="text" placeholder="Country of Citizenship" name="l6pm00qp41" autocomplete="l6pm00qp41" required="required" class="input-field" style="background-image: none !important;">
                                                	<option class="optionselect">Primary Destination</option>
		                                          @foreach(DB::table('formcountries')->get() as $r)
		                                          <option data-v-6e3bf6e8="{{ $r->code }}" data-title="{{ $r->name }}" data-value="{{ $r->code }}" class="optionselect"><span data-v-6e3bf6e8="">{{ $r->name }}</span></option>
		                                          @endforeach
                                                </select>
                                                <span data-v-2cd039a3="" class="label-text">Citizenship</span>
                                             </span>
                                          </div>
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!---->
                           <div data-v-73e0d048="" data-v-0fda4d6e="" class="card-foot mt-4">
                              <div data-v-73e0d048="" class="card-foot--container">
                                 <div data-v-73e0d048="" class="card-footer--center-col"></div>
                              </div>
                              <!---->
                           </div>
                        </div>
                        <div class="nextbtns">
                           <input type="submit" value="Prev" class="btn btn-default btn-prev">
                           <input type="submit" value="Next" id="paramsOkay" class="btn btn-default btn-next">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade zoom-in" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
              	<div class="modal-dialog modal-lg">
                  	<div class="modal-content">
                  		<div class="modal-body">
	                        <div class="close-btn">
	                           <button type="button" class="close" data-dismiss="modal">&times;</button>
	                        </div>
                  			<div data-v-12f23b42="" class="quote-result-wizard quote-wizard-page wizard-step dates-selection" isvisitor="true"><div data-v-12f23b42="" class="grid-container"><div data-v-12f23b42="" class="grid-row mob-hide"><div data-v-05ba04f2="" data-v-12f23b42=""><input data-v-05ba04f2="" type="text" class="fake-input"><div data-v-05ba04f2="" class="focus-container"><div data-v-ccf27494="" data-v-12f23b42="" class="card lg-wizard-card"><h2 data-v-ccf27494="" class="heading-3 card-heading">What dates do you need coverage?</h2><!----><div data-v-ccf27494="" class="card-content"><div data-v-ccf27494="" class="form-line date"><div data-v-ccf27494="" class="form-input date-range"><div data-v-ccf27494="" class="input-field"><div data-v-ccf27494="" class="from active"><i data-v-ccf27494="" class="icon icon-calendar"></i><div data-v-ccf27494="" class="value"><input data-v-ccf27494="" type="text" id="dates_startDate" placeholder="Start Date" class="border-0"><!----></div></div><div data-v-ccf27494="" class="sep"></div><div data-v-ccf27494="" class="to"><div data-v-ccf27494="" class="value"><input data-v-ccf27494="" type="text" id="dates_endDate" placeholder="End Date" class="border-0"><!----></div></div></div><span data-v-ccf27494="" class="input-indicator"><img data-v-ccf27494="" src="https://assets.visitorscoverage.com/production/app/img/icons/input-indicator-default.svg" alt="Input indicator default"><!----></span></div><!----></div><div data-v-0ef3596c="" data-v-ccf27494="" class="dates-selection cal"><div data-v-0ef3596c="" class="calendar-container hover-active mt-6 d-block"><div data-v-0ef3596c="" id="calendar-month" class="calendar-month"><div data-v-1ebd09d2="" data-v-0ef3596c="" class="vue-daterange-picker incomplete-selection"><div data-v-1ebd09d2="" class="form-control reportrange-text"><i data-v-1ebd09d2="" class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span data-v-1ebd09d2=""> - </span><b data-v-1ebd09d2="" class="caret"></b></div><div data-v-1ebd09d2="" class="daterangepicker ltr show-calendar openscenter linked"><div data-v-1ebd09d2="" class="calendars"><!----><div data-v-1ebd09d2="" class="calendars-container"><div data-v-1ebd09d2="" class="drp-calendar col left"><!----><div data-v-1ebd09d2="" class="calendar-table"><table data-v-98ac2448="" data-v-1ebd09d2="" class="table-condensed"><thead data-v-98ac2448=""><tr data-v-98ac2448=""><th data-v-98ac2448="" tabindex="0" class="prev available"><span data-v-98ac2448=""></span></th><th data-v-98ac2448="" colspan="5" class="month">Dec 2022</th><th data-v-98ac2448="" tabindex="0" class="next available"><span data-v-98ac2448=""></span></th></tr></thead><tbody data-v-98ac2448=""><tr data-v-98ac2448=""><!----><th data-v-98ac2448="">Su</th><th data-v-98ac2448="">Mo</th><th data-v-98ac2448="">Tu</th><th data-v-98ac2448="">We</th><th data-v-98ac2448="">Th</th><th data-v-98ac2448="">Fr</th><th data-v-98ac2448="">Sa</th></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2022-11-27" class="off weekend disabled"> 27 </td><td data-v-98ac2448="" data-date="2022-11-28" class="off disabled"> 28 </td><td data-v-98ac2448="" data-date="2022-11-29" class="off disabled"> 29 </td><td data-v-98ac2448="" data-date="2022-11-30" class="off disabled"> 30 </td><td data-v-98ac2448="" data-date="2022-12-01" class="disabled"> 1 </td><td data-v-98ac2448="" data-date="2022-12-02" class="disabled"> 2 </td><td data-v-98ac2448="" data-date="2022-12-03" class="weekend disabled"> 3 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2022-12-04" class="weekend disabled"> 4 </td><td data-v-98ac2448="" data-date="2022-12-05" class="disabled"> 5 </td><td data-v-98ac2448="" data-date="2022-12-06" class="disabled"> 6 </td><td data-v-98ac2448="" data-date="2022-12-07" class="disabled"> 7 </td><td data-v-98ac2448="" data-date="2022-12-08" class="disabled"> 8 </td><td data-v-98ac2448="" data-date="2022-12-09" class="disabled"> 9 </td><td data-v-98ac2448="" data-date="2022-12-10" class="weekend today disabled"> 10 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2022-12-11" class="weekend"> 11 </td><td data-v-98ac2448="" data-date="2022-12-12" class=""> 12 </td><td data-v-98ac2448="" data-date="2022-12-13" class=""> 13 </td><td data-v-98ac2448="" data-date="2022-12-14" class=""> 14 </td><td data-v-98ac2448="" data-date="2022-12-15" class=""> 15 </td><td data-v-98ac2448="" data-date="2022-12-16" class=""> 16 </td><td data-v-98ac2448="" data-date="2022-12-17" class="weekend"> 17 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2022-12-18" class="weekend"> 18 </td><td data-v-98ac2448="" data-date="2022-12-19" class=""> 19 </td><td data-v-98ac2448="" data-date="2022-12-20" class=""> 20 </td><td data-v-98ac2448="" data-date="2022-12-21" class=""> 21 </td><td data-v-98ac2448="" data-date="2022-12-22" class=""> 22 </td><td data-v-98ac2448="" data-date="2022-12-23" class=""> 23 </td><td data-v-98ac2448="" data-date="2022-12-24" class="weekend"> 24 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2022-12-25" class="weekend"> 25 </td><td data-v-98ac2448="" data-date="2022-12-26" class=""> 26 </td><td data-v-98ac2448="" data-date="2022-12-27" class=""> 27 </td><td data-v-98ac2448="" data-date="2022-12-28" class=""> 28 </td><td data-v-98ac2448="" data-date="2022-12-29" class=""> 29 </td><td data-v-98ac2448="" data-date="2022-12-30" class=""> 30 </td><td data-v-98ac2448="" data-date="2022-12-31" class="weekend"> 31 </td></tr><tr data-v-98ac2448="" class="off disabled"><!----><td data-v-98ac2448="" data-date="2023-01-01" class="off weekend disabled"> 1 </td><td data-v-98ac2448="" data-date="2023-01-02" class="off disabled"> 2 </td><td data-v-98ac2448="" data-date="2023-01-03" class="off disabled"> 3 </td><td data-v-98ac2448="" data-date="2023-01-04" class="off disabled"> 4 </td><td data-v-98ac2448="" data-date="2023-01-05" class="off disabled"> 5 </td><td data-v-98ac2448="" data-date="2023-01-06" class="off disabled"> 6 </td><td data-v-98ac2448="" data-date="2023-01-07" class="off weekend disabled"> 7 </td></tr></tbody></table></div><!----></div><div data-v-1ebd09d2="" class="drp-calendar col right"><!----><div data-v-1ebd09d2="" class="calendar-table"><table data-v-98ac2448="" data-v-1ebd09d2="" class="table-condensed"><thead data-v-98ac2448=""><tr data-v-98ac2448=""><th data-v-98ac2448="" tabindex="0" class="prev available"><span data-v-98ac2448=""></span></th><th data-v-98ac2448="" colspan="5" class="month">Jan 2023</th><th data-v-98ac2448="" tabindex="0" class="next available"><span data-v-98ac2448=""></span></th></tr></thead><tbody data-v-98ac2448=""><tr data-v-98ac2448=""><!----><th data-v-98ac2448="">Su</th><th data-v-98ac2448="">Mo</th><th data-v-98ac2448="">Tu</th><th data-v-98ac2448="">We</th><th data-v-98ac2448="">Th</th><th data-v-98ac2448="">Fr</th><th data-v-98ac2448="">Sa</th></tr><tr data-v-98ac2448="" class="off disabled"><!----><td data-v-98ac2448="" data-date="2022-12-25" class="off weekend disabled"> 25 </td><td data-v-98ac2448="" data-date="2022-12-26" class="off disabled"> 26 </td><td data-v-98ac2448="" data-date="2022-12-27" class="off disabled"> 27 </td><td data-v-98ac2448="" data-date="2022-12-28" class="off disabled"> 28 </td><td data-v-98ac2448="" data-date="2022-12-29" class="off disabled"> 29 </td><td data-v-98ac2448="" data-date="2022-12-30" class="off disabled"> 30 </td><td data-v-98ac2448="" data-date="2022-12-31" class="off weekend disabled"> 31 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2023-01-01" class="weekend"> 1 </td><td data-v-98ac2448="" data-date="2023-01-02" class=""> 2 </td><td data-v-98ac2448="" data-date="2023-01-03" class=""> 3 </td><td data-v-98ac2448="" data-date="2023-01-04" class=""> 4 </td><td data-v-98ac2448="" data-date="2023-01-05" class=""> 5 </td><td data-v-98ac2448="" data-date="2023-01-06" class=""> 6 </td><td data-v-98ac2448="" data-date="2023-01-07" class="weekend"> 7 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2023-01-08" class="weekend"> 8 </td><td data-v-98ac2448="" data-date="2023-01-09" class=""> 9 </td><td data-v-98ac2448="" data-date="2023-01-10" class=""> 10 </td><td data-v-98ac2448="" data-date="2023-01-11" class=""> 11 </td><td data-v-98ac2448="" data-date="2023-01-12" class=""> 12 </td><td data-v-98ac2448="" data-date="2023-01-13" class=""> 13 </td><td data-v-98ac2448="" data-date="2023-01-14" class="weekend"> 14 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2023-01-15" class="weekend"> 15 </td><td data-v-98ac2448="" data-date="2023-01-16" class=""> 16 </td><td data-v-98ac2448="" data-date="2023-01-17" class=""> 17 </td><td data-v-98ac2448="" data-date="2023-01-18" class=""> 18 </td><td data-v-98ac2448="" data-date="2023-01-19" class=""> 19 </td><td data-v-98ac2448="" data-date="2023-01-20" class=""> 20 </td><td data-v-98ac2448="" data-date="2023-01-21" class="weekend"> 21 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2023-01-22" class="weekend"> 22 </td><td data-v-98ac2448="" data-date="2023-01-23" class=""> 23 </td><td data-v-98ac2448="" data-date="2023-01-24" class=""> 24 </td><td data-v-98ac2448="" data-date="2023-01-25" class=""> 25 </td><td data-v-98ac2448="" data-date="2023-01-26" class=""> 26 </td><td data-v-98ac2448="" data-date="2023-01-27" class=""> 27 </td><td data-v-98ac2448="" data-date="2023-01-28" class="weekend"> 28 </td></tr><tr data-v-98ac2448=""><!----><td data-v-98ac2448="" data-date="2023-01-29" class="weekend"> 29 </td><td data-v-98ac2448="" data-date="2023-01-30" class=""> 30 </td><td data-v-98ac2448="" data-date="2023-01-31" class=""> 31 </td><td data-v-98ac2448="" data-date="2023-02-01" class="off disabled"> 1 </td><td data-v-98ac2448="" data-date="2023-02-02" class="off disabled"> 2 </td><td data-v-98ac2448="" data-date="2023-02-03" class="off disabled"> 3 </td><td data-v-98ac2448="" data-date="2023-02-04" class="off weekend disabled"> 4 </td></tr></tbody></table></div><!----></div></div></div><!----></div></div></div></div></div></div></div></div></div></div></div></div>
                  		
                        <div class="nextbtns">
                           <input type="submit" value="Prev" class="btn btn-default btn-prev">
                           <input type="submit" value="Done"  class="btn btn-default btn-next">
                        </div>
                  		</div>

                  	</div>
                  	</div>
                 </div>
             </div>
         </form>
      </div>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-next').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prev').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
@endsection