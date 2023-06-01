<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<!-- <script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script> -->
<script type="text/javascript" src="{{url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script> 
@php
$url = request()->segment(count(request()->segments()));
$firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
@php
   $useragent=$_SERVER['HTTP_USER_AGENT'];
@endphp
@if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
   @php
      $mobile = 'yes';
   @endphp
@else
   @php
      $mobile = 'no';
   @endphp
@endif
<div class="health-inssurance-hero-banners super-hero ahmSupperBanner">
   <div class="container-homepage">
      <div class="row mb-3">
         <div class="col-md-6 hero-texts">
             <div class="herrotext super-hero-text">
                 <h2 class="wow fadeInUp text-responsive" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
                 <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">{{ $firstsection->sub_heading }}</span></h5>
                 @if($firstsection->main_button_text)
                     <div class="btns d-flex">
                         <div class="details">
                             <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                         </div>
                     </div>
                 @endif
             </div>
         </div>
         <div class="col-md-6 hero-images">
             <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
            background-position: 50% 70%;
            background-size: 100%;
            background-repeat: no-repeat;">
             </div>
         </div>
      </div>
  </div>
</div>
      @if($firstsection->form == 1)
      @php
         $prosupervisa = $data->pro_supervisa;
         if($prosupervisa == '1'){
         $supervisa = 'yes';
         } else {
         $supervisa = 'no';   
         }
      @endphp
      <div style="background-color: #f4f7fa;" class="row card-section ahm-form-wrap">
         <div class="col-md-12 p-r-z-o-m p-l-z-o-m">
            
            <form id="quoteform" action="{{ url('ajaxquotes') }}" method="POST">
               @csrf
               <input type="hidden" name="product_id" value="{{ $data->pro_id }}">

                <input type="hidden" @if(isset($_GET['departure_date'])) value="{{ $_GET['departure_date'] }}" @endif id="departure_date" name="departure_date">
                <input type="hidden" @if(isset($_GET['return_date'])) value="{{ $_GET['return_date'] }}" @endif id="return_date" name="return_date">
            <div class="qoute-card">
               <div class="card-body">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal1"  class="form-input input-destination has-arrow">
                                 <input  type="text" placeholder="Coverage Amount" required="required" id="coverageprice" class="input-field" disabled>
                                 <span  class="label-text">Coverage Amount</span>
                                 <div  class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2"  class="form-input input-traveler-info has-arrow">
                              <input  id="ageshow" type="text" placeholder="Traveler Information" required="required" class="input-field" disabled>
                              <span  class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"   class="form-input date-range form-input__date-range">
                                   <div  class="input-field">
                                       <div  class="from">
                                           <i  class="icon icon-calendar"></i>
                                           <div id="startdatetoshowonshowfield"  class="value"> @if(isset($_GET['departure_date'])) {{ $_GET['departure_date'] }} @else Start Date @endif
                                           </div>
                                       </div>
                                       <div class="ml-3 from">
                                           <div id="enddatetoshowonenddatefield" class="value">@if(isset($_GET['departure_date'])) {{ $_GET['return_date'] }} @else End Date @endif </div>
                                       </div>
                                   </div>
                               </div>
                              <button style="color:white;" id="getqoutesubmitbutton" type="submit" class="button button-primary get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in ahModelStyle" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                        <div class="modal-content rounded-3">
                            <div class="modal-body">
                                <div class="close-btn">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="card card-for-mobile-device lg-wizard-card modal-card border-0">
                                    <h2 class="heading-3 card-heading">Please Select Coverage Amount?</h2>
                                    <div class="card-content coverage mb-3 pb-3">
                                        <p class="card-info">Coverage amount, your insurance limit is the maximum amount your insurer may pay out for a claim, as stated in your policy.</p>
                                    </div>
                                    <div class="row mt-3 card-for-mobile-device-row">
                                       <div class="col-md-6 positionrelative p-r-z-o-m p-l-z-o-m">
                                           <label class="selectlabel">Coverage Ammount</label>
                                           <select onchange="sum_insured(this.value)"  name="sum_insured2" id="sum_insured2" class="sum_insured2 form-control">
                                               <option value="">Select Coverage Amount</option>
                                               @foreach($sum_insured as $r)
                                                   <option @if(isset($_GET['sum_insured2'])) @if($_GET['sum_insured2'] == $r->sum_insured) selected @endif  @endif  value="{{ $r->sum_insured }}">${{ number_format($r->sum_insured) }}</option>
                                               @endforeach
                                           </select>
                                           <div class="text-danger mt-2 pl-1" id="covergaeerror"></div>
                                       </div>
                                       <div class="col-md-6 userdata-card mobile-device-email-input p-r-z-o-m p-l-z-o-m">
                                         <div class="custom-form-control positionrelative">
                                             <label class="selectlabeldateofbirth">Enter Your Email</label>
                                             <input @if(isset($_GET['savers_email'])) value="{{ $_GET['savers_email'] }}" @endif class="input" type="text"  name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="input">
                                          </div>
                                          <div class="text-danger mt-4" id="savers_emailerror"></div>
                                       </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <div class="nextbtns">
                             <span id="firstnextfake" class="btn btn-default" onclick="firstnext()">Next</span>
                             <span style="display: none;" id="firstnextorignal"  class="btn btn-default btn-next">Next</span>
                          </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in ahModelStyle" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card card-for-mobile-device modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div class="card-content d-flex">
                              <p  class="card-info"> Enter the age for each person that will be traveling.</p>
                              <div style="width:50%;display:none;padding: 4px;margin-bottom: 0px;" id="errortravelr" class="alert alert-danger">

                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 mt-3 p-l-z-o-m p-r-z-o-m">
                                 @if(isset($_GET['years']))
                                 @foreach($_GET['years'] as $key=> $year)
                                 @if($year)
                                 <div class="row mt-3 showrowstraveler">
                                    <div class="col-md-6 p-l-z-o-m p-r-z-o-m">
                                       <div class="row alignitembaseline">
                                          <div class="col-md-6">
                                             <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                          </div>
                                          <div class="col-md-6 nopad p-l-z-o-m p-r-z-o-m">
                                             <div class="input-wrapper positionrelative">
                                                <label class="selectlabeldateofbirth">Date Of Birth</label>
                                                <input value="{{ $year }}" inputmode="numeric" id="dateofbirthfull" class="input dateofbirthclass1" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 positionrelative margin-top-twenty-on-mobile p-l-z-o-m p-r-z-o-m">
                                          <label class="selectlabel">Pre Existing Condition</label>
                                          <select name="pre_existing[]" class="pre_existing_values_check1 pre_existing_condition1 form-control">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option @if($_GET['pre_existing'][$key] == 'yes') selected @endif value="yes">Yes</option>
                                             <option @if($_GET['pre_existing'][$key] == 'no') selected @endif value="no">No</option>
                                           </select>
                                    </div>
                                    <div class="col-md-3 alert1 text-danger display-none-on-mobile" style="position:relative;">
                                       <span class="button button-help show-tooltip"></span>
                                       <div class="tooltip-container tooltip--auto-height activehelpful">
                                          <button class="button button-close-simplified close-tooltip"></button>
                                          <h4 class="heading heading-5">Helpful Info</h4>
                                          <div class="content">
                                             <p>A pre-existing condition is a health condition that existed prior to applying for health or life insurance. Conditions include illnesses such as diabetes, cancer, and heart disease</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endif
                                 @endforeach
                                 @else
                                 <div class="row mt-3 showrowstraveler">
                                    <div class="col-md-6 p-l-z-o-m p-r-z-o-m">
                                       <div class="row alignitembaseline">
                                          <div class="col-md-6">
                                             <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                          </div>
                                          <div class="col-md-6 nopad p-l-z-o-m p-r-z-o-m">
                                             <div class="input-wrapper positionrelative">
                                                <label class="selectlabeldateofbirth">Date Of Birth</label>
                                                <input inputmode="numeric" id="dateofbirthfull" class="input dateofbirthclass1" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 positionrelative margin-top-twenty-on-mobile p-l-z-o-m p-r-z-o-m">
                                          <label class="selectlabel">Pre Existing Condition</label>
                                          <select name="pre_existing[]" class="pre_existing_values_check1 pre_existing_condition1 form-control">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="yes">Yes</option>
                                             <option value="no">No</option>
                                           </select>
                                    </div>
                                    <div class="col-md-3 alert1 text-danger display-none-on-mobile" style="position:relative;">
                                       <span class="button button-help show-tooltip"></span>
                                       <div class="tooltip-container tooltip--auto-height activehelpful">
                                          <button class="button button-close-simplified close-tooltip"></button>
                                          <h4 class="heading heading-5">Helpful Info</h4>
                                          <div class="content">
                                             <p>A pre-existing condition is a health condition that existed prior to applying for health or life insurance. Conditions include illnesses such as diabetes, cancer, and heart disease</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endif
                              </div>
                              <input type="hidden" value="1" id="number_travelers" name="number_travelers">
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                           <div class="toogleswithchdiv">
                              <input type="hidden" value="no" id="Smoke12" name="Smoke12">
                              <label style="margin-right:20px;color: #2b3481;font-size: 15px;font-weight: 600;">Do you Smoke in last 12 months ?</label>
                              <label style="margin-right:10px;">No</label>
                              <label style="margin-right:10px;" class="switch">
                                <input name="Smoke12" type="checkbox">
                                <p class="tooglecheckbox round"></p>
                              </label>
                              <label style="margin-right:20px;">Yes</label>
                           </div>
                          <span class="btn btn-default btn-prev">Prev</span>
                          <span id="secondnextfake"  class="btn btn-default" onclick="secondnext()">Next</span>
                          <span id="secondnextorignal" style="display: none;"   class="btn btn-default btn-next">Next</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <style type="text/css">
               .calendar-section {
                    margin-bottom: 20px;
                  }
                  .calendar, .calendar_weekdays,
                  .calendar_content {
                    max-width: 585px;
                  }

                  .calendar {
                    /*float: left;*/
                    margin: auto;
                    min-width: 320px;
                    font-family: 'Lato', sans-serif;
                    font-weight: 400;
                  }

                  .calendar_weekdays {
                     color: #aaa;
                     font-weight: lighter;
                  }
                  .calendar_weekdays div {
                    display:inline-block;
                    vertical-align:top;
                  }
                  .calendar_content, .calendar_weekdays, .calendar_header {
                    position: relative;
                  }
                  .calendar_content:after, .calendar_weekdays:after, .calendar_header:after {
                     content: ' ';
                     display: table;
                     clear: both;
                  }
                  .calendar_weekdays div, .calendar_content div {
                  /*  border: 1px dotted #999;*/
                    width: 14.28571%;
                    height: 44px;
                    line-height: 30px;  
                    overflow: hidden;
                    text-align: center;
                    background-color: transparent;
                    color: #2b3481;
                    padding: 7px;
                  }

                  .calendar_content .today {
                     color: #12b48b;
                  }
                  .calendar_content div {
                    float: left;
                     margin-left: -1px;
                     margin-top: -1px;
                    border: 1px solid transparent;
                  }
                  .calendar_content div:hover {
                     cursor: pointer;
                     color: white;
                     border-radius: 10px;
                     background-color: #2b3481;
                  }

                  .calendar_content div.blank:hover {
                    cursor: default;
                    border: none;
                  }

                  .calendar_content div.past-date {
                     cursor: initial;
                    color: #d5d5d5;
                  }
                  .calendar_content div.today{
                    font-weight: bold;
                    font-size: 18px;
                    color: #12b48b;
                  }
                  .calendar_content div.selected {
                    background-color: rgba(153, 153, 161, .2); /*rgba(170, 170, 176, .5) #aaaab0*/
                    border: 1px solid white;
                  }
                  .calendar_header {
                    width: 100%;
                    text-align: center;
                  }

                  .calendar_header h2 {
                    float:left;
                    width:70%;
                    margin-top: 10px;
                    padding: 0 10px;
                    font-family: 'Lato', sans-serif;
                    font-weight: 300;
                    font-size: 1.2rem;
                  }

                  button.switch-month {
                    background-color: transparent;
                    padding: 0;
                    outline: none;
                    border: none;
                    line-height: 52px;
                    height: 55px;
                    float: left;
                    width:15%;
                    transition: color .2s;

                     color: #2b3481;
                     font-size: 30px;

                  }

                  button.switch-month:hover {
                    color: #12b48b;
                  }
                  button.switch-month:active {
                    color: #12b48b;
                  }
                  .calendar_header h2 {
                    color: #12b48b;
                    line-height: 1.7;
                  }
                  .selectlabel {
                      position: absolute;
                      top: -10px;
                      left: 21px !important;
                      font-size: 10px !important;
                   }
                   .select2-container--default .select2-selection--single .select2-selection__rendered{
                     padding: 3px 2px;
                   }
            </style>
            <div class="modal zoom-in ahModelStyle" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body" style="padding:0px;">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">Start Date Of Coverage and End date of coverage</h2>
                              <div class="date_picker_wrapper" id="date_picker_1">
                           <div class="card-content d-flex">
                              <p class="card-info">Please Select Date When You Start and End Coverage</p>
                                <div class="date_picker_header">
                                  <h2 @if(isset($_GET['departure_date']))  @else  style="display:none;" @endif class="date_picker_month_day">@if(isset($_GET['departure_date'])) {{ $_GET['departure_date'] }} @else 12 June 2023 @endif</h2>
                                  <h2  @if(isset($_GET['departure_date']))  @else  style="display:none;margin-left:10px;" @endif class="linebar">-</h2>
                                  <h2 @if(isset($_GET['return_date']))  @else  style="display:none;" @endif class="date_picker_year ml-2">@if(isset($_GET['return_date'])) {{ $_GET['return_date'] }} @else 12 June 2023 @endif</h2>
                                </div>
                            </div>
                              @if($mobile == 'yes')
                              <div class="d-flex justify-content-between mt-2">
                                 <div class="date_mobile start_date_mobile">
                                    Start Date
                                 </div>
                                 <div class="date_mobile end_date_mobile">
                                    End Date
                                 </div>
                              </div>
                              @endif
                              <div class="row userdate-coverage mt-2">


                                 <div class="col-sm-6 p-r-z-o-m p-l-z-o-m firstcalenderfordateshow">
                                    <div class="calendar calendar-first" id="calendar_first">
                                      <div class="calendar_header">
                                        <button class="switch-month switch-left">
                                          <ion-icon name="caret-back-circle-outline"></ion-icon>
                                        </button>
                                        <h2></h2>
                                        <button class="switch-month switch-right">
                                          <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                        </button>
                                      </div>
                                      <div class="calendar_weekdays"></div>
                                      <div class="calendar_content"></div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 p-r-z-o-m p-l-z-o-m secondcalenderfordateshow" @if($mobile == 'yes') style="display:none;"@endif>

                                    <div class="calendar calendar-second" id="calendar_second">
                                      <div class="calendar_header">
                                        <button class="switch-month switch-left">
                                          <ion-icon name="caret-back-circle-outline"></ion-icon>
                                        </button>
                                        <h2></h2>
                                        <button class="switch-month switch-right">
                                          <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                        </button>
                                      </div>
                                      <div class="calendar_weekdays"></div>
                                      <div class="calendar_content"></div>
                                    </div>

                                  </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                         <span class="btn btn-default btn-prev">Prev</span>
                         <span class="btn btn-default " id="donefake"  onclick="thirdone()">Done</span>
                         <span class="btn btn-default btn-next" style="display: none;" id="doneoriginal"  onclick="formdone()">Done</span>
                      <script type="text/javascript">
                        function formdone() {
                           $("#getqoutesubmitbutton").click();
                        }
                      </script>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
      </div>
      @endif
   </div>
</div>
<script type="text/javascript">
   $(document).on('click', '.ahm-form-wrap .generator-bar-row-wrap > .form-input, .ahModelStyle .nextbtns .btn', function(){

        setTimeout(function(){
            $(".ahModelStyle select").select2("destroy");
            $(".ahModelStyle select").select2();
        }, 100);
    });



   
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
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-nexts').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prevs').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
<script type="text/javascript" src="{{ url('public/front/formqoute/datepiker.js')}}"></script>
<script type="text/javascript">
   function getquotesubmitform() {
      $('#quoteform').submit();
   }

   @if(isset($_GET['sum_insured2']))

      $( document ).ready(function() {
            $('#quoteform').submit();
        });

   @endif

   $('#quoteform').on('submit',(function(e) {
       $('#getqoutesubmitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
       e.preventDefault();
       var formData = new FormData(this);
       $.ajax({
           type:'POST',
           url: $(this).attr('action'),
           data:formData,
           cache:false,
           contentType: false,
           processData: false,
           success: function(data){
            // console.log(data.html)
            $('#getqoutesubmitbutton').html('Get Quotes');
              $('.quotationscards').html(data.html);
           }
       });
   }));
</script>