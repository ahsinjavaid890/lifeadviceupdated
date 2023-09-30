<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public\front\tabs\formlayouteight.css')}}">
@if ($firstsection->form == 1)
    @php
        $prosupervisa = $data->pro_supervisa;
        if ($prosupervisa == '1') {
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
                @php
                    $date = date('Y-m-d');
                    $todate = date('Y-m-d', strtotime($date . ' + 364 days'));
                @endphp
                <input type="hidden" @if (isset($_GET['departure_date'])) value="{{ $_GET['departure_date'] }}" @endif
                    id="departure_date" name="departure_date">
                <input type="hidden"
                    @if (isset($_GET['return_date'])) value="{{ $_GET['return_date'] }}" @else value="{{ $todate }}" @endif
                    id="return_date" name="return_date">
                <div class="qoute-card">
                    <div class="card-body">
                        <div class="quotes-generator-bar fixed">
                            <div class="grid-container">
                                <div class="grid-row grid-row--bar">
                                    <div class="d-grid generator-bar-row-wrap">
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
                                        <div id="ageshow" data-toggle="modal" data-target="#myModal2"
                                            class="newstyleforinputdiv form-input input-traveler-info has-arrow">
                                            Traveler Information
                                            <span class="label-text">Traveler Information</span>
                                        </div>
                                        <div data-toggle="modal" data-target="#myModal3"
                                            class="form-input date-range form-input__date-range">
                                            <div class="input-field">
                                                @php
                                                    $date = date('Y-m-d');
                                                    $todate = date('Y-m-d', strtotime($date . ' + 364 days'));
                                                @endphp
                                                <div class="from">
                                                    <i class="icon icon-calendar"></i>
                                                    <div id="coveragedate" class="value">
                                                        @if (isset($_GET['departure_date']))
                                                            {{ $_GET['departure_date'] }}
                                                        @else
                                                            Start Date @endif
                                                    </div>
                                                </div>
                                                <div class="ml-3 from">
                                                    <div id="supervisadateshowinhtml" class="value">
                                                        @if (isset($_GET['departure_date']))
                                                            {{ $_GET['return_date'] }}
                                                        @else
                                                            {{ $todate }}

                                                        @endif


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button style="color:white;" id="getqoutesubmitbutton" type="submit"
                                            class="button button-primary get-quotes-button"> Get Quotes </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal zoom-in ahModelStyle" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                        <div class="modal-content rounded-3">
                            <div class="modal-body paddingleftrightzeroonmobile">
                                <div class="close-btn">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="card card-for-mobile-device lg-wizard-card modal-card border-0">
                                    <h2 class="heading-3 card-heading">Please Select Coverage Amount?</h2>
                                    <div class="card-content coverage mb-3 pb-3">
                                        <p class="card-info">Coverage amount, your insurance limit is the maximum amount
                                            your insurer may pay out for a claim, as stated in your policy.</p>
                                    </div>
                                    <div class="row mt-3 card-for-mobile-device-row">
                                        @if (isset($fields['sum_insured']))
                                            @if ($fields['sum_insured'] == 'on')
                                                <div class="col-md-6 positionrelative p-r-z-o-m p-l-z-o-m">
                                                    <label class="selectlabel">Coverage Amount</label>
                                                    <select onchange="sum_insured(this.value)" name="sum_insured2"
                                                        id="sum_insured2" class="sum_insured2 form-control">
                                                        <option value="">Select Coverage Amount</option>
                                                        @foreach ($sum_insured as $r)
                                                            <option
                                                                @if (isset($_GET['sum_insured2'])) @if ($_GET['sum_insured2'] == $r->sum_insured) selected @endif
                                                                @endif
                                                                value="{{ $r->sum_insured }}">${{ number_format($r->sum_insured) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="text-danger mt-2 pl-1" id="covergaeerror"></div>
                                                </div>
                                            @endif
                                        @endif
                                        @if (isset($fields['Country']))
                                            @if ($fields['Country'] == 'on')
                                                <div class="col-md-6 positionrelative p-r-z-o-m p-l-z-o-m">
                                                    <label class="selectlabel">Primary Destination</label>
                                                    <select name="primarydestination" id="primarydestination"
                                                        class="primarydestination form-control">
                                                        <option value="">Select Primary Destination</option>
                                                        @foreach (DB::table('primary_destination_in_canada')->get() as $r)
                                                            <option
                                                                @if (isset($_GET['primarydestination'])) @if ($_GET['primarydestination'] == $r->name) selected @endif
                                                                @endif
                                                                @if ($r->name == 'Ontario') selected @endif
                                                                value="{{ $r->name }}">{{ $r->name }}
                                                            </option>
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
                                    <span style="display: none;" id="firstnextorignal"
                                        class="btn btn-default btn-next">Next</span>
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
                <div class="modal zoom-in ahModelStyle" id="myModal3" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="close-btn">
                                    <button onclick="enddateinsupervisainsurance()" type="button" class="close"
                                        data-dismiss="modal">&times;</button>
                                </div>
                                <div class="card card-for-mobile-device modal-card lg-wizard-card border-0">
                                    <h2 class="heading-3 card-heading">Start Date Of Coverage and Some Other Details
                                    </h2>
                                    <div class="date_picker_wrapper" id="date_picker_1">
                                        <div class="card-content d-flex">
                                            <p class="card-info">Please Select Date When You Start Coverage</p>
                                            <div class="date_picker_header">
                                                <h2 @if (isset($_GET['departure_date'])) @else  style="display:none;" @endif
                                                    class="date_picker_month_day">
                                                    @if (isset($_GET['departure_date']))
                                                        {{ $_GET['departure_date'] }}
                                                    @else
                                                        12 June 2023 @endif
                                                </h2>
                                                <h2 @if (isset($_GET['departure_date'])) @else  style="display:none;margin-left:10px;" @endif
                                                    class="linebar">-</h2>
                                                <h2 @if (isset($_GET['return_date'])) @else  style="display:none;" @endif
                                                    class="date_picker_year ml-2">
                                                    @if (isset($_GET['return_date']))
                                                        {{ $_GET['return_date'] }}
                                                    @else
                                                        12 June 2023 @endif
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row userdate-coverage">
                                            <div class="col-md-6 birthdateinput">
                                                <div class="date_picker_body">
                                                    <div class="date_picker_month_navigation">
                                                        <span class="date_picker_prev_month date_picker_month_nav_btn">
                                                            <ion-icon name="caret-back-circle-outline"></ion-icon>
                                                        </span>
                                                        <h2 class="date_picker_month_name"></h2>
                                                        <span class="date_picker_next_month date_picker_month_nav_btn">
                                                            <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                                        </span>
                                                    </div>
                                                    <ul class="date_picker_month_days">
                                                        <li>Sun</li>
                                                        <li>Mon</li>
                                                        <li>Tue</li>
                                                        <li>Wed</li>
                                                        <li>Thu</li>
                                                        <li>Fri</li>
                                                        <li>Sat</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @if (isset($fields['email']))
                                                @if ($fields['email'] == 'on')
                                                    <div class="col-md-6 userdata-card mt-3 mobile-device-email-input">
                                                        <div class="custom-form-control positionrelative">
                                                            <label class="selectlabeldateofbirth">Enter Your
                                                                Email</label>
                                                            <input onkeyup="checkemailcorection(this.value)"
                                                                @if (isset($_GET['savers_email'])) value="{{ $_GET['savers_email'] }}" @endif
                                                                class="input" type="text" name="savers_email"
                                                                placeholder="Please Enter Your Email" required
                                                                id="savers_email" class="input">
                                                        </div>
                                                        <div class="text-danger mt-1" id="savers_emailerror"></div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="nextbtns">
                                    <span class="btn btn-default btn-prev">Prev</span>
                                    <span class="btn btn-default " id="donefake" onclick="thirdone()">Done</span>
                                    <span class="btn btn-default btn-next" style="display: none;" id="doneoriginal"
                                        onclick="formdone()">Done</span>
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
    $(document).on('Click', '.ahm-form-wrap .generator-bar-row-wrap > .form-input, .ahModelStyle .nextbtns .btn',
        function() {
            setTimeout(function() {
                $(".ahModelStyle select").select2("destroy");
                $(".ahModelStyle select").select2();
            }, 100);
        });

    function setdeparuredate(month, date, day, year) {
        var setmonth = +month + 1;
        $('#departure_date').val(year + '-' + setmonth + '-' + date)
        $('#coveragedate').html(year + '-' + setmonth + '-' + date)
    }
</script>
<script type="text/javascript">
    $("div[id^='myModal']").each(function() {

        var currentModal = $(this);

        //click next
        currentModal.find('.btn-next').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal(
                'show');
        });

        //click prev
        currentModal.find('.btn-prev').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal(
                'show');
        });

    });
</script>
<script type="text/javascript">
    $("div[id^='myModal']").each(function() {

        var currentModal = $(this);

        //click next
        currentModal.find('.btn-nexts').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal(
                'show');
        });

        //click prev
        currentModal.find('.btn-prevs').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal(
                'show');
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

    var monthTextArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];

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
        $("#cal").append(
            "<tr class=days><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thur</td><td>fri</td><td>sat</td>");

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
    var selector = $("td a").filter(function() {
        return $(this).text() === day.toString();
    });

    //var selector = $("#cal").find("a="+day+"");


    $(selector.parent()).addClass("circle");

    var outputDate = monthTextArray[month] + " " + day + ", " + year;


    $("#outputText").text(outputDate);
</script>
<script type="text/javascript" src="{{ url('public/front/formqoute/datepiker.js') }}"></script>
<script type="text/javascript">
    function getquotesubmitform() {
        enddateinsupervisainsurance();
        $('#quoteform').submit();
    }

    @if (isset($_GET['sum_insured2']))
        $(document).ready(function() {
            $('#doneoriginal').click();
        });
    @endif
    $('#quoteform').on('submit', (function(e) {
        $('#getqoutesubmitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                // console.log(data.html)
                $('#getqoutesubmitbutton').html('Get Quotes');
                $('.quotationscards').html(data.html);
            }
        });
    }));
</script>
<script>
    function addtravellers() {
        var showrowstraveler = $('.showrowstraveler').length;
        var value = $('.dateofbirthclass' + showrowstraveler).val();
        if (value == '') {
            $('.dateofbirthclass' + showrowstraveler).addClass('errorinput')
        } else {
            $("#secondnextfake").css("pointer-events", "none");
            $("#secondnextfake").css("background-color", "#f2dede");
            $("#secondnextfake").css("color", "#b94a48");
            var pre_existing_values_check = $('.pre_existing_values_check' + showrowstraveler).val();
            if (pre_existing_values_check == '') {
                $('.select2-selection').css('border-color', 'red');
                $("#secondnextfake").css("pointer-events", "none");
            } else {
                $('.select2-selection').css('border-color', '#cfd9e8');
                const d = new Date(value);
                let year = d.getFullYear();
                var CurrentDate = new Date();
                var today = new Date();
                var todayyear = today.getFullYear();
                var getfourtyyear = todayyear - 40;
                var getlastdob = todayyear - 100;
                if (d > CurrentDate) {
                    $('.dateofbirthclass' + showrowstraveler).addClass('errorinput')
                    $('#errortravelr').show();
                    $('#errortravelr').html('Date of birth can not be a future date.');
                } else {
                    if (year > getfourtyyear) {
                        $('.dateofbirthclass' + showrowstraveler).addClass('errorinput')
                        $('#errortravelr').show();
                        $('#errortravelr').html('Super Visa Is Eligible only Greate Then 40 Years Old');
                    } else {

                        if (year < getlastdob) {
                            $('.dateofbirthclass' + showrowstraveler).addClass('errorinput')
                            $('#errortravelr').show();
                            $('#errortravelr').html('Super Visa Is Eligible 99 Year Old Peoples');
                        } else {
                            $('#errortravelr').hide();
                            $('#errortravelr').html('');
                            var showmext = parseInt(showrowstraveler) + 1;
                            $('#removebutton' + showmext).removeClass('hiderowstraveler');
                            $('#removebutton' + showmext).addClass('showrowstraveler');
                            var numberoftraverls = $('#numberoftraverls').val();
                            if (numberoftraverls == showrowstraveler) {
                                $('.button-add-another').fadeOut(300);
                            }
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

    function checkfamilyplan(id) {
        checkBox = document.getElementById('familyplanyes');
        if (checkBox.checked) {
            $('#familyplan_temp').val('yes');
            var titles = $('input[name^=years]').map(function(idx, elem) {
                return $(elem).val();
            }).get();
            var ages = [];
            for (var i = 0; i < titles.length; i++) {
                if (titles[i]) {
                    dob = new Date(titles[i]);
                    var today = new Date();
                    var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
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
            if (document.getElementById('number_travelers').value >= '2' && max_age <= 59 && min_age <= 21) {
                $('#errortravelr').hide();
                $('#errortravelr').html('');
                $("#secondnextfake").css("pointer-events", "auto");
                $("#secondnextfake").css("background-color", "#2b3481");
                $("#secondnextfake").css("color", "#fff");
            } else {
                $("#secondnextfake").css("pointer-events", "none");
                $("#secondnextfake").css("background-color", "#f2dede");
                $("#secondnextfake").css("color", "#b94a48");
                if (document.getElementById('number_travelers').value < '2') {
                    $('#errortravelr').show();
                    $('#errortravelr').html('Minimum 2 travellers required for family plan.');
                } else if (max_age > 59) {
                    $('#errortravelr').show();
                    $('#errortravelr').html('Maximum age for family plan should be 59');
                } else if (min_age > 21) {
                    $('#errortravelr').show();
                    $('#errortravelr').html('For family plan the youngest traveller shouldn`t be elder than 21');
                }
            }
        } else {
            $('#familyplan_temp').val('no');
            $('#errortravelr').hide();
            $('#errortravelr').html('');
            $("#secondnextfake").css("pointer-events", "auto");
            $("#secondnextfake").css("background-color", "#2b3481");
            $("#secondnextfake").css("color", "#fff");
        }
    }






    function enddateinsupervisainsurance() {
        var newDate = $('#coveragedate').text();
        var startDate = new Date(newDate);
        var endDate = new Date(startDate.getTime());
        endDate.setDate(endDate.getDate() + 364);
        var endYear = endDate.getFullYear();
        var endMonth = endDate.getMonth() + 1;
        var endDay = endDate.getDate();
        var formattedEndDate = endYear + '-' + endMonth.toString().padStart(2, '0') + '-' + endDay.toString().padStart(
            2, '0');
        $('#supervisadateshowinhtml').html(formattedEndDate);
    }
</script>
