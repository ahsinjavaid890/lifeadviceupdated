<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public\front\tabs\formlayouteight.css')}}">
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
      @if($firstsection->form == 1)
      @php
         $prosupervisa = $data->pro_supervisa;
         if($prosupervisa == '1'){
            $supervisa = 'yes';
         } else {
            $supervisa = 'no';
         }
      @endphp
      <div class="row card-section ahm-form-wrap">
         <div class="col-md-12 p-r-z-o-m p-l-z-o-m">

            <form id="quoteform" action="{{ url('ajaxquotes') }}" method="POST">
               @csrf
               <input value="same@gmail.com" type="hidden" name="savers_email">
               <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
               <input type="hidden" @if(isset($_GET['departure_date'])) value="{{ $_GET['departure_date'] }}" @endif id="departure_date" name="departure_date">
               <input type="hidden" @if(isset($_GET['return_date'])) value="{{ $_GET['return_date'] }}" @endif id="return_date" name="return_date">
               <!-- <input type="hidden" name="ages[]" id="selectage"> -->
               <!-- <input type="hidden" name="years[]" id="selectage"> -->
            <div class="qoute-card" style="margin-top:6px !important;">
               <div class="card-body">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <div data-toggle="modal" data-target="#myModal1" class="newstyleforinputdiv form-input input-destination has-arrow">
                                   @if (isset($_GET['sum_insured2'])) ${{ $_GET['sum_insured2'] }}  @else Coverage Amount @endif
                                   <span class="label-text">
                                       @if (isset($_GET['sum_insured2']))
                                           {{ $_GET['sum_insured2'] }}
                                       @else
                                           Coverage Amount @endif
                                   </span>
                                   <div class="dest-value"></div>
                               </div>
                              <div id="ageshow" data-toggle="modal" data-target="#myModal2" class="newstyleforinputdiv form-input input-traveler-info has-arrow">
                                    Traveler Information
                                    <span class="label-text">Traveler Information</span>
                              </div>
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
                                @if(isset($fields['sum_insured']))
                                @if($fields['sum_insured'] == 'on')
                                 <div class="col-md-6 positionrelative p-r-z-o-m p-l-z-o-m">
                                    <label class="selectlabel">Coverage Ammount</label>
                                     <select onchange="sum_insured(this.value)" name="sum_insured2" id="sum_insured2" class="sum_insured2 form-control">
                                       <option value="">Select Coverage Amount</option>
                                       @foreach($sum_insured as $r)
                                          <option @if(isset($_GET['sum_insured2'])) @if($_GET['sum_insured2']==$r->sum_insured)selected @endif @endif value="{{ $r->sum_insured }}" @if($data->url == 'visitor-insurance')  @if($r->sum_insured == 50000) selected @endif  @else @if ($key == 0) selected @endif @endif >${{$r->sum_insured }}</option>
                                       @endforeach
                                     </select>
                                     <div class="text-danger mt-2 mb-3" id="covergaeerror"></div>
                                </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['Country']))
                                   @if($fields['Country'] == "on" )
                                    <div class="col-md-6 positionrelative p-r-z-o-m p-l-z-o-m">
                                       <label class="selectlabel">Primary Destination</label>
                                        <select name="primarydestination" id="primarydestination" class="primarydestination form-control">
                                          <option value="">Select Primary Destination</option>
                                          @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                             <option @if(isset($_GET['primarydestination'])) @if($_GET['primarydestination'] == $r->name) selected @endif @endif @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                          @endforeach
                                        </select>
                                        <div class="text-danger mt-4" id="primarydestinationerror"></div>
                                    </div>
                                    @endif
                                 @endif
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
            <div class="modal zoom-in ahModelStyle" id="myModal2" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
              <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-body paddingleftrightmodaltwonmobile">
                          <div class="close-btn">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="card card-for-mobile-device modal-card lg-wizard-card border-0">
                              <h2 class="heading-3 card-heading">How many travelers?</h2>
                              <div class="card-content d-flex">
                                  <p class="card-info"> Enter the age for each person that will be traveling.</p>
                                  <div style="width:50%;display:none;padding: 4px;margin-bottom: 0px;"
                                      id="errortravelr" class="alert alert-danger">

                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12 mt-3 p-l-z-o-m p-r-z-o-m">
                                      @if (isset($_GET['years']))
                                          @foreach ($_GET['years'] as $key => $year)
                                              @if ($year)
                                                  <div class="row mt-3 showrowstraveler">
                                                      <div class="col-md-6 p-l-z-o-m p-r-z-o-m">
                                                          <div class="row alignitembaseline">
                                                              <div class="col-md-6">
                                                                  <span class="marginbottomonmobile travelerheading primarytravelheading">Primary Traveler</span>
                                                              </div>
                                                              <div class="col-md-6 nopad p-l-z-o-m p-r-z-o-m">
                                                                  <div class="input-wrapper positionrelative">
                                                                      <label class="selectlabeldateofbirth">Date
                                                                          Of Birth</label>
                                                                      <input value="{{ $year }}"
                                                                          inputmode="numeric"
                                                                          id="dateofbirthfull"
                                                                          class="input dateofbirthclass1"
                                                                          type="text"
                                                                          placeholder="MM/DD/YYYY"
                                                                          name="years[]"
                                                                          data-placeholder="MM/DD/YYYY">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div
                                                          class="col-md-3 positionrelative margin-top-twenty-on-mobile p-l-z-o-m p-r-z-o-m">
                                                          <label class="selectlabel">Pre Existing
                                                              Condition</label>
                                                          <select name="pre_existing[]"
                                                              class="pre_existing_values_check1 pre_existing_condition1 form-control">
                                                              <option
                                                                  @if ($_GET['pre_existing'][$key] == 'no') selected @endif
                                                                  value="no">No</option>
                                                              <option
                                                                  @if ($_GET['pre_existing'][$key] == 'yes') selected @endif
                                                                  value="yes">Yes</option>

                                                          </select>
                                                      </div>
                                                      <div class="col-md-3 alert1 text-danger display-none-on-mobile"
                                                          style="position:relative;">
                                                          <span class="button button-help show-tooltip"></span>
                                                          <div
                                                              class="tooltip-container tooltip--auto-height activehelpful">
                                                              <button
                                                                  class="button button-close-simplified close-tooltip"></button>
                                                              <h4 class="heading heading-5">Helpful Info</h4>
                                                              <div class="content">
                                                                  <p>A pre-existing condition is a health
                                                                      condition that existed prior to applying for
                                                                      health or life insurance. Conditions include
                                                                      illnesses such as diabetes, cancer, and
                                                                      heart disease</p>
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
                                                      <div class="col-md-6 marginbottomonmobile">
                                                          <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                                      </div>
                                                      <div class="col-md-6 nopad p-l-z-o-m p-r-z-o-m">
                                                          <div class="input-wrapper positionrelative">
                                                              <label class="selectlabeldateofbirth">Date Of
                                                                  Birth</label>
                                                              <input onkeyup="calculateAge(this.value , 'dateofbirthfull1')" inputmode="numeric" id="dateofbirthfull1"
                                                                  class="input dateofbirthclass1" type="text"
                                                                  placeholder="MM/DD/YYYY" name="years[]"
                                                                  data-placeholder="MM/DD/YYYY">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3 positionrelative margintopmobile p-l-z-o-m p-r-z-o-m">
                                                  <label class="selectlabel">Pre Existing Condition</label>
                                                  <select name="pre_existing[]"
                                                      class="pre_existing_values_check1 pre_existing_condition1 form-control">
                                                      <option value="no">No</option>
                                                      <option value="yes">Yes</option>

                                                  </select>
                                              </div>
                                              <div class="col-md-3 alert1 text-danger display-none-on-mobile"
                                                  style="position:relative;">
                                                  <span class="button button-help show-tooltip"></span>
                                                  <div
                                                      class="tooltip-container tooltip--auto-height activehelpful">
                                                      <button
                                                          class="button button-close-simplified close-tooltip"></button>
                                                      <h4 class="heading heading-5">Helpful Info</h4>
                                                      <div class="content">
                                                          <p>A pre-existing condition is a health condition that
                                                              existed prior to applying for health or life
                                                              insurance. Conditions include illnesses such as
                                                              diabetes, cancer, and heart disease</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      @endif
                                      <div class="additionaltraveler">
                                          @for ($i = 2; $i < 7; $i++)
                                              <div id="removebutton{{ $i }}"
                                                  class="row mt-3 hiderowstraveler p-l-z-o-m p-r-z-o-m">
                                                  <div class="col-md-6 p-l-z-o-m p-r-z-o-m">
                                                      <div class="row alignitembaseline">
                                                          <div class="col-md-6"> 
                                                              <span class="travelerheading primarytravelheading">Traveler {{ $i }}</span> 
                                                          </div>
                                                          <div
                                                              class="col-md-6 margin-top-ten-on-mobile p-l-z-o-m p-r-z-o-m">
                                                              <div class="input-wrapper positionrelative"> <label
                                                                      class="selectlabeldateofbirth">Date Of
                                                                      Birth Traveler
                                                                      {{ $i }}</label><input
                                                                      inputmode="numeric" 
                                                                      onchange="dateofbirth(this.value , {{ $i }})"
                                                                      class="dateofbirthclass{{ $i }} input dateofbirthfull{{ $i }}"
                                                                      type="text" id="dateofbirthfull{{ $i }}" placeholder="MM/DD/YYYY"
                                                                      name="years[]"
                                                                      data-placeholder="MM/DD/YYYY"></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div
                                                      class="col-md-3 positionrelative margin-top-twenty-on-mobile p-l-z-o-m p-r-z-o-m">
                                                      <label class="selectlabel">Pre Existing Condition</label>
                                                      <select onchange="changepreexisting(this.value)"
                                                          name="pre_existing[]"
                                                          class="pre_existing_condition{{ $i }} form-control pre_existing_values_check{{ $i }}">
                                                          <option value="no">No</option>
                                                          <option value="yes">Yes</option>
                                                      </select> </div>
                                                  <div class="col-md-3 ahAdditionalTravel">
                                                      <div class="crossbutton"> <span
                                                              onclick="removeappendvalue({{ $i }})"
                                                              class="button remove-line remove-icon md-hide sm-hide"></span>
                                                      </div>
                                                  </div>
                                                  <div class="alert'+a+' text-danger"></div>
                                              </div>
                                          @endfor
                                      </div>
                                  </div>
                                  <div class="col-md-12 mt-3">
                                      <div class="travelerinfo">
                                          <span onclick="addtravellers()"
                                              class="button button-add-another button-trav-add"> Add Additional
                                              Traveler </span>
                                      </div>
                                  </div>
                                  <input type="hidden" value="1" id="number_travelers"
                                      name="number_travelers">
                              </div>
                          </div>
                      </div>


                      <style type="text/css">
                          .switch {
                              position: relative;
                              display: inline-block;
                              width: 53px;
                              height: 27px;
                          }

                          /* Hide default HTML checkbox */
                          .switch input {
                              opacity: 0;
                              width: 0;
                              height: 0;
                          }

                          /* The slider */
                          .tooglecheckbox {
                              position: absolute;
                              cursor: pointer;
                              top: 0;
                              left: 0;
                              right: 0;
                              bottom: 0;
                              background-color: #919192;
                              -webkit-transition: .4s;
                              transition: .4s;
                          }

                          .tooglecheckbox:before {
                              position: absolute;
                              content: "";
                              height: 20px;
                              width: 20px;
                              left: 4px;
                              bottom: 4px;
                              background-color: white;
                              -webkit-transition: .4s;
                              transition: .4s;
                          }

                          input:checked+.tooglecheckbox {
                              background-color: #2b3481;
                          }

                          input:focus+.tooglecheckbox {
                              box-shadow: 0 0 1px #2196F3;
                          }

                          input:checked+.tooglecheckbox:before {
                              -webkit-transform: translateX(26px);
                              -ms-transform: translateX(26px);
                              transform: translateX(26px);
                          }

                          /* Rounded sliders */
                          .tooglecheckbox.round {
                              border-radius: 34px;
                          }

                          .tooglecheckbox.round:before {
                              border-radius: 50%;
                          }

                          .nextbtns {
                              display: flex;
                          }

                          .toogleswithchdiv label {
                              margin-bottom: 0px;
                          }
                      </style>

                      <div class="modal-footer">
                          <div class="nextbtns">
                              <div class="toogleswithchdiv">
                                  <input type="hidden" value="no" id="familyplan_temp"
                                      name="familyplan_temp">
                                  <label
                                      style="margin-right:20px;color: #2b3481;font-size: 15px;font-weight: 600;">Do
                                      You Require Family Plan?</label>
                                  <label style="margin-right:10px;">No</label>
                                  <label style="margin-right:10px;" class="switch">
                                      <input id="familyplanyes" onclick="checkfamilyplan(this.value)"
                                          value="yes" type="checkbox">
                                      <p class="tooglecheckbox round"></p>
                                  </label>
                                  <label style="margin-right:20px;">Yes</label>
                              </div>
                              <span class="btn btn-default btn-prev">Prev</span>
                              <span id="secondnextfake" class="btn btn-default"
                                  onclick="secondnext()">Next</span>
                              <span id="secondnextorignal" style="display: none;"
                                  class="btn btn-default btn-next">Next</span>
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
                    border: 1px solid #cfd9e8;
                    border-radius: 10px;
                    padding: 10px;
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
                    background-color: #2b3481;
                    border: 1px solid white;
                    border-radius: 10px;
                    color: white;
                  }
                  .calendar_header {
                    width: 100%;
                    text-align: center;
                  }
                  .secondcalenderfordateshow{
                     padding-right: 0px;
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

                  span.switch-month {
                    background-color: transparent;
                    padding: 0;
                    outline: none;
                    border: none;
                    line-height: 52px;
                    height: 55px;
                    float: left;
                    width:15%;
                    transition: color .2s;
                    cursor: pointer;
                     color: #2b3481;
                     font-size: 30px;

                  }

                  span.switch-month:hover {
                    color: #12b48b;
                  }
                  span.switch-month:active {
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
               /*.select2-container{*/
               /*width: 100% !important;*/
               /*}*/
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
                                        <span class="switch-month switch-left">
                                          <ion-icon name="caret-back-circle-outline"></ion-icon>
                                        </span>
                                        <h2></h2>
                                        <span class="switch-month switch-right">
                                          <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                        </span>
                                      </div>
                                      <div class="calendar_weekdays"></div>
                                      <div class="calendar_content"></div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 p-r-z-o-m p-l-z-o-m secondcalenderfordateshow" @if($mobile == 'yes') style="display:none;"@endif>

                                    <div class="calendar calendar-second" id="calendar_second">
                                      <div class="calendar_header">
                                        <span class="switch-month switch-left">
                                          <ion-icon name="caret-back-circle-outline"></ion-icon>
                                        </span>
                                        <h2></h2>
                                        <span class="switch-month switch-right">
                                          <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                        </span>
                                      </div>
                                      <div class="calendar_weekdays"></div>
                                      <div class="calendar_content"></div>
                                    </div>

                                  </div>
                                   <!-- <div class="col-md-6 userdata-card @if($mobile == 'yes') mt-1 @else mt-3 @endif">
                                      <div class="custom-form-control positionrelative">
                                          <label class="selectlabeldateofbirth">Enter Your Email</label>
                                            <input @if(isset($_GET['savers_email'])) value="{{ $_GET['savers_email'] }}" @endif class="input" type="text"  name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="input">
                                      </div>
                                       <div class="text-danger mt-4" id="savers_emailerror"></div>
                                   </div> -->
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
<script>
    $(document).on('click', '.ahm-form-wrap .generator-bar-row-wrap > .form-input, .ahModelStyle .nextbtns .btn', function(){

        setTimeout(function(){
            $(".ahModelStyle select").select2("destroy");
            $(".ahModelStyle select").select2();
        }, 100);
    });



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
   function setdeparuredate(month, date, day, year) {
      var setmonth = +month + 1;
      $('#departure_date').val(year+'-'+setmonth+'-'+date)
      $('#coveragedate').html(year+'-'+setmonth+'-'+date)
      supervisayes();
   }
</script>
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
     $('input[name="departure_dates"]').daterangepicker({
       opens: 'left',
      minDate: today,
      singleDatePicker: true,
       showDropdowns: true,
     }, function(start, end, label) {

     });
   });
   function supervisayess(){
      var tt = document.getElementById('departure_dates').value;
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
<script type="text/javascript">
  //----------variables----------//

var day = "";
var month = "";
var year = "";
var currentDate = "";
var monthStartDay = "";

var monthTextArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var dayTextArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

//----------functions----------//

function getMonthInfo(year, month) {

  //use current month to find number of days in month
  //i dont know why i have to add 1 to month
  var startDate = new Date(year, month + 1, 0);
  var monthLength = startDate.getDate();

  var startDate = new Date(year, month, 1);
  var monthStartDay = startDate.getDay();

  return [monthLength, monthStartDay];

}

function drawCal(monthInfo) {

  var daysInMonth = monthInfo[0];
  var monthStartDays = monthInfo[1];

  //clear cal tbody
  $("#cal").empty();
  $("#cal").append("<tr class=days><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thur</td><td>fri</td><td>sat</td>");

  //create empty row, append to to tbody
  var $rowOut = $("<tr></tr>");
  $("#cal").append($rowOut);

  //shift first row by month start date
  for (var i = 1; i <= monthStartDays; i++) {
    var $day = "<td></td>";
    $("#cal tr:last").append($day);
  }

  //for each day, append a td to the row
  for (var i = 1; i <= daysInMonth; i++) {
    var $day = "<td><a>" + (i) + "</a></td>";
    $("#cal tr:last").append($day);

    //if day 7 (w/shift), append row contaning 7 days to tbody and clear row
    if ((i + monthStartDays) % 7 == 0 & i != 0) {
      $("#cal").append($rowOut);
      $rowOut = "<tr></tr>";
      $("#cal").append($rowOut);
    }
  }
}

//----------wiring----------//

$(".button_left").click(function() {

  month--;

  if (month < 0) {
    year--;
    month = 11;
  }

  //left button click
  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

//right button click
$(".button_right").click(function() {

  month++;

  if (month > 11) {
    year++;
    month = 0;
  }

  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

$("#cal").on("click", "td", function(e) {

  e.preventDefault();
  $("#cal td").removeClass("circle");
  $(this).addClass("circle");
  var outputDate = monthTextArray[month] + " " + $(this).children("a").html() + ", " + year;
  console.log(outputDate);
  $("#outputText").text(outputDate);
  $("#coveragedate").text(outputDate);

});

//----------run----------//

//get current month and year
currentDate = new Date();
year = currentDate.getFullYear();
month = currentDate.getMonth();
day = currentDate.getDate();

//get text month name from month number and write to span
$(".cal_head span").text(monthTextArray[month] + " " + year);

//inital calander draw based on current month
drawCal(getMonthInfo(year, month));

//var selector = ("td a:contains(" + day + ")");
var selector = $("td a").filter(function(){
 return $(this).text() === day.toString();
});

//var selector = $("#cal").find("a="+day+"");


$(selector.parent()).addClass("circle");

var outputDate = monthTextArray[month] + " " + day + ", " + year;


$("#outputText").text(outputDate);
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
<script>
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<script>
  function maxLengthChecks(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }


function checkfamilyplan(id){
   checkBox = document.getElementById('familyplanyes');
   if(checkBox.checked) {
      $('#familyplan_temp').val('yes');
      var titles = $('input[name^=years]').map(function(idx, elem) {
       return $(elem).val();
     }).get();
      var ages = [];
      for (var i = 0; i < titles.length; i++) {
         if(titles[i])
         {
            dob = new Date(titles[i]);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            ages.push(age);
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
      if(document.getElementById('number_travelers').value >='2' && max_age <=59 && min_age <=21)
      {
         $('#errortravelr').hide();
         $('#errortravelr').html('');
         $("#secondnextfake").css("pointer-events","auto");
         $("#secondnextfake").css("background-color","#2b3481");
         $("#secondnextfake").css("color","#fff");
      }
      else
      {
         $("#secondnextfake").css("pointer-events","none");
         $("#secondnextfake").css("background-color","#f2dede");
         $("#secondnextfake").css("color","#b94a48");
         if(document.getElementById('number_travelers').value <'2'){
            $('#errortravelr').show();
            $('#errortravelr').html('Minimum 2 travellers required for family plan.');
         } else if(max_age > 59){
            $('#errortravelr').show();
            $('#errortravelr').html('Maximum age for family plan should be 59');
         } else if(min_age > 21){
            $('#errortravelr').show();
            $('#errortravelr').html('For family plan the youngest traveller shouldn`t be elder than 21');
         }
      }
   }else{
      $('#familyplan_temp').val('no');
      $('#errortravelr').hide();
      $('#errortravelr').html('');
      $("#secondnextfake").css("pointer-events","auto");
      $("#secondnextfake").css("background-color","#2b3481");
      $("#secondnextfake").css("color","#fff");
   }
}
function addtravellers()
{
   var showrowstraveler = $('.showrowstraveler').length;
   var value = $('.dateofbirthclass'+showrowstraveler).val();
   if(value == '')
   {
      $('.dateofbirthclass'+showrowstraveler).addClass('errorinput')
   }else{
      $("#secondnextfake").css("pointer-events","none");
      $("#secondnextfake").css("background-color","#f2dede");
      $("#secondnextfake").css("color","#b94a48");
      var pre_existing_values_check = $('.pre_existing_values_check'+showrowstraveler).val();
      if(pre_existing_values_check == '')
      {
        $('.select2-selection').css('border-color' , 'red');
        $("#secondnextfake").css("pointer-events","none");
      }else{
            $('.select2-selection').css('border-color' , '#cfd9e8');
              const d  = new Date(value);
              let year = d.getFullYear();
              var CurrentDate = new Date();
              var today = new Date();
              var todayyear = today.getFullYear();
              var getfourtyyear = todayyear-40;
              var getlastdob = todayyear-100;
              if(d > CurrentDate){
                  $('.dateofbirthclass'+showrowstraveler).addClass('errorinput')
                  $('#errortravelr').show();
                  $('#errortravelr').html('Date of birth can not be a future date.');
              }else{
    
                    if(year < getlastdob)
                    {
                       $('.dateofbirthclass'+showrowstraveler).addClass('errorinput')
                       $('#errortravelr').show();
                       $('#errortravelr').html('Super Visa Is Eligible 99 Year Old Peoples');
                    }else{
                       $('#errortravelr').hide();
                       $('#errortravelr').html('');
                       var showmext = parseInt(showrowstraveler)+1;
                       $('#removebutton'+showmext).removeClass('hiderowstraveler');
                       $('#removebutton'+showmext).addClass('showrowstraveler');
                       var numberoftraverls = $('#numberoftraverls').val();
                       if(numberoftraverls == showrowstraveler)
                       {
                          $('.button-add-another').fadeOut(300);
                       }
                    }


                  
              }

            var number_travelers = $("#number_travelers").val();
            var addtraveler = 1;
            var totaltraveler = parseInt(number_travelers) + parseInt(addtraveler);
            $("#number_travelers").val(totaltraveler);
      }


   }
}


function dateofbirthtraverler(id) {
   if(id == '')
   {
      $("#secondnextfake").css("pointer-events","none");
         $("#secondnextfake").css("background-color","#f2dede");
         $("#secondnextfake").css("color","#b94a48");
   }else{
      $('#errortravelr').hide();
      $('#errortravelr').html('');
      $("#secondnextfake").css("pointer-events","auto");
      $("#secondnextfake").css("background-color","#2b3481");
      $("#secondnextfake").css("color","#fff");
   }
   
}

</script>
