<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutseven.css') }}">
<style type="text/css">
    .form-control {
        height: 40px !important;
    }
</style>
<form id="quoteform" class="mt-5" action="{{ url('ajaxquotes') }}" method="POST">
    @csrf
    <div class=" birthdate card  mb-5 box-style">
        <input type="hidden"  name="sendemail" @if(isset($_GET['primary_destination'])) value="no" @else value="yes" @endif>
        <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
        <div class="row">
        @for ($orderi = 1; $orderi <= 17; $orderi++)
            
                @if (array_search('id_15', $orderdata) == $orderi)
                    @if (isset($fields['fplan']))
                        @if ($fields['fplan'] == 'on')
                            <div class="col-md-6 mb-2">
                                <label for="" class="label-style">Do you require Family Plan ?</label>
                                <div class="custom-form-control">
                                    <select required onchange="changefamilyyes(this.value)" class="w-100 inputs-style"
                                        name="fplan" id="">
                                        <option value="">--- Please Choose ---</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                            <script>
                                function changefamilyyes(id) {
                                    if (id == 'yes') {
                                        document.getElementById('familyplan_temp').value = 'yes';
                                        checkfamilyplan();
                                    } else {
                                        document.getElementById('familyplan_temp').value = 'no';
                                        checkfamilyplan();
                                    }
                                }
                            </script>

                        @endif
                    @endif
                @endif
                @if (array_search('id_4', $orderdata) == $orderi)
                    @if (isset($fields['email']))
                        @if ($fields['email'] == 'on')
                        <div class="col-md-6 mb-2">
                            <label for="savers_email" class="label-style">Email</label>
                            <div class="custom-form-control">
                                <input @if(isset($_GET['savers_email'])) value="{{ $_GET['savers_email'] }}" @endif type="text" name="savers_email" placeholder="Email" required
                                    id="savers_email" class="w-100 inputs-style">
                            </div>
                        </div>
                        @endif
                    @endif
                @endif
                @if (array_search('id_3', $orderdata) == $orderi)
                    @if (isset($fields['traveller']) && $fields['traveller'] == 'on')
                        @php
                            $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if ($number_of_travel > 0)

                            <div class="col-md-12 mb-2">
                                <label for="number_travelers" class="label-style">Number of Travellers</label>
                                <div class="custom-form-control">
                                    <select onchange="checknumtravellers(this.value)" required
                                        class="w-100 inputs-style" name="number_travelers" id="number_travelers">
                                        <option value="">Number of Travellers</option>
                                        @for ($i = 1; $i <= $number_of_travel; $i++)
                                            <option @if(isset($_GET['number_travelers'])) @if($_GET['number_travelers']==$i) selected @endif @else  @if($i == 1) selected @endif @endif value="{{ $i }}">{{ $i }}
                                </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            @if(isset($_GET['years']))
                                        @foreach($_GET['years'] as $key=> $year)
                                            @if($year)
                                                @php
                                                    $ordinal_words = ['oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth'];
                                                    $c = 0;
                                                @endphp
                                                <div  id="traveler{{ $i }}" class="no_of_travelers col-md-12">
                                                    <div class="row" style="align-items: flex-end">
                                                        <div class="col-md-6 mb-2">
                                                            <label for="day{{ $i }}" class="label-style">Birth date 
                                                            </label>
                                                            <div class="custom-form-control">
                                                                <input value="{{ $year }}" id="dateofbirthfull{{ $i }}"
                                                                    class="inputs-style w-100" type="text" inputmode="numeric"
                                                                    placeholder="MM/DD/YYYY" name="years[]"
                                                                    data-placeholder="MM/DD/YYYY" style="">

                                                            </div>
                                                        </div>

                                                        <div style="padding-right: 0px;" class="col-md-6 mb-2">
                                                            <label for="year{{ $i }}" class="label-style">Select Pre
                                                                Existing</label>
                                                            <div class="custom-form-control">
                                                                <select name="pre_existing[]" class="w-100 inputs-style">
                                                                    <option value="">Select Pre Existing Condition</option>
                                                                    <option  @if($_GET['pre_existing'][$key] == 'yes') selected @endif value="yes">Yes</option>
                                                                    <option @if($_GET['pre_existing'][$key] == 'no') selected @endif value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            @endif
                                        @endforeach
                                    @else
                            @if (isset($fields['dob']) && $fields['dob'] == 'on')
                                @php
                                    $ordinal_words = ['oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth'];
                                    $c = 0;
                                @endphp

                                @for ($i = 1; $i <= $number_of_travel; $i++)
                                    <div @if($i == 1) @else style="display: none;" @endif id="traveler{{ $i }}"
                                        class="no_of_travelers col-md-12">
                                        <div class="row" style="align-items: flex-end">
                                            <div class="col-md-6 mb-2 padding-left-zero-on-mbile padding-right-zero-on-mbile">
                                                <label for="day{{ $i }}" class="label-style">Birth date 
                                                </label>
                                                <div class="custom-form-control">
                                                    <input onkeyup="calculateAge(this.value , 'dateofbirthfull{{ $i }}')" id="dateofbirthfull{{ $i }}"
                                                        class="inputs-style w-100" type="text" inputmode="numeric"
                                                        placeholder="MM/DD/YYYY" name="years[]"
                                                        data-placeholder="MM/DD/YYYY" style="">

                                                </div>
                                            </div>

                                            <div style="padding-right: 0px;" class="col-md-6 mb-2 padding-left-on-desktop  padding-left-zero-on-mbile padding-right-zero-on-mbile">
                                                <label for="year{{ $i }}" class="label-style">Select Pre
                                                    Existing</label>
                                                <div class="custom-form-control">
                                                    <select name="pre_existing[]" class="w-100 inputs-style">
                                                        <option value="">Select Pre Existing Condition</option>
                                                        <option value="yes">Yes</option>
                                                        <option selected value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        @endif
                        @endif
                    @endif
                @endif
                @if (array_search('id_7', $orderdata) == $orderi)
                    @if (isset($fields['phone']))
                        @if ($fields['phone'] == 'on')
                            <div class="col-md-12 mb-2">
                                <label for="phonenumbermask" class="label-style">Phone <b id="phone_error"
                                        class="text-danger"></b></label>
                                <div class="custom-form-control">
                                    <input inputmode="numeric" id="phonenumbermask"
                                        type="text" name="phone" placeholder="000-000-0000"
                                        data-placeholder="000-000-0000" required id="phone"
                                        class="w-100 inputs-style">
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
                @if (array_search('id_8', $orderdata) == $orderi)
                    @if (isset($fields['sdate']) && $fields['sdate'] == 'on' && isset($fields['edate']) && $fields['edate'] == 'on')
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <label class="label-style">Start date of coverage</label>

                            <input @if(isset($_GET['departure_date'])) value="{{ $_GET['departure_date'] }}" @endif id="departure_date" autocomplete="off" name="departure_date" value=""
                                class="form-control" type="text" placeholder="Start Date" required
                                <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>

                            <label for="departure_date"
                                style="z-index: 999;padding: 5px 11px !important;position: absolute; top: 28px;
                        right: 17px ;background: #F1F1F1;border-radius: 0px 5px 5px 0;">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </label>

                            <script>
                                $('#departure_date').datepicker( {
                                    changeMonth: true,
                                    changeYear: true,
                                    yearRange: "-100:+6",
                                    minDate: new Date(),
                                });
                            </script>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="return_date" class="label-style">End Date of Coverage</label>
                            <div class="custom-form-control">
                                <input @if(isset($_GET['return_date'])) value="{{ $_GET['return_date'] }}" @endif id="return_date" autocomplete="off" name="return_date" value=""
                                    class="form-control" type="text" placeholder="End Date" required
                                    @if ($data->pro_supervisa == 1) readonly type="date" @endif>
                                <label for="departure_date"
                                    style="z-index: 999;padding: 5px 11px !important;position: absolute;top: 28px;right: 17px;background: #F1F1F1;border-radius: 0px 5px 5px 0;">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </label>
                            </div>
                            @if ($data->pro_supervisa != 1)
                                <script>
                                    $('#return_date').datepicker({
                                        changeMonth: true,
                                        changeYear: true,
                                        yearRange: "-100:+6",
                                        minDate: new Date(),    
                                    });
                                </script>
                            @endif
                        </div>
                    @endif
                @endif
                @if (array_search('id_12', $orderdata) == $orderi)
                    @if (isset($fields['traveller_gender']) && $fields['traveller_gender'] == 'on')
                        <div class="col-md-12 mb-2">
                            <label for="old_traveller_gender" class="label-style">Gender of the Oldest
                                traveller</label>
                            <div class="custom-form-control">
                                <select required class="w-100 inputs-style" name="old_traveller_gender"
                                    id="old_traveller_gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    @endif
                @endif
                @if (array_search('id_5', $orderdata) == $orderi)

                    @if (isset($fields['Smoke12']))
                        @if ($fields['Smoke12'] == 'on')
                            <div class="col-md-6">
                                <label for="" class="label-style">Do you Smoke in last 12 months?</label>
                                <div class="custom-form-control">
                                    <select required class="inputs-style w-100" name="Smoke12" id="">
                                        <option value="">--- Please Choose ---</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            @if (isset($fields['gender']) && $fields['gender'] == 'on')
                                <div class="col-md-6">
                                    <label for="gender" class="label-style">Primary Applicant`s Gender</label>
                                    <div class="custom-form-control">
                                        <select required class="w-100 inputs-style" name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif
                @endif
                @if (array_search('id_6', $orderdata) == $orderi)
                    @if (isset($fields['Country']))
                        @if ($fields['Country'] == 'on')
                            @if ($data->pro_travel_destination == 'worldwide')
                                <div id="country" class="col-md-6 mb-2">
                                    <label for="primary_destination" class="label-style">Primary Destination</label>
                                    <div class="custom-form-control ">
                                        <select onchange="countryState(this.value)" required
                                            class="w-100 inputs-style" name="primary_destination"
                                            id="primary_destination">
                                            <option value="">Select Country</option>
                                            @foreach (DB::table('countries')->get() as $r)
                                                <option value='{{ $r->id }}'>{{ $r->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="primary_destination" class="label-style ">Select State</label>
                                    <div class="form-group ">
                                        <select required class="inputs-style w-100 selecttwo p-2" name="primary_destination" id="statestoshow">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-12 mb-2">
                                    <label for="primary_destination" class="label-style">Primary destination in
                                        Canada</label>
                                    <div class="custom-form-control">
                                        <select required class="w-100 inputs-style" name="primary_destination"
                                            id="primary_destination">
                                            <option value="">Primary destination in Canada</option>
                                            @foreach (DB::table('primary_destination_in_canada')->get() as $r)
                                                <option @if ($r->name == 'Ontario') selected @endif
                                                    value="{{ $r->name }}">{{ $r->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif
                @endif
                @if (array_search('id_1', $orderdata) == $orderi)
                    @if (isset($fields['fname']))
                        @if ($fields['fname'] == 'on')
                            <div class="col-md-6 mb-2">
                                <label for="firstname" class="label-style">First name</label>
                                <div class="custom-form-control">
                                    <input type="text" name="fname" placeholder="First name" required
                                        id="firstname" class="w-100 inputs-style">
                                </div>
                            </div>
                        @endif
                    @endif
                    @if (isset($fields['lname']))
                        @if ($fields['lname'] == 'on')
                            <div class="col-md-6 mb-2">
                                <label for="lname" class="label-style">Last name</label>
                                <div class="custom-form-control">
                                    <input type="text" name="lname" placeholder="Last Name" required
                                        id="lname" class="w-100 inputs-style">
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
                @if (array_search('id_17', $orderdata) == $orderi)
                    @if (isset($fields['sum_insured']))
                        @if ($fields['sum_insured'] == 'on')
                            <div class="col-md-12 mb-2">
                                <label for="coverageammount"class="label-style">Coverage Amount</label>
                                <div class="custom-form-control ">
                                    <select required class="w-100 inputs-style" name="sum_insured2"
                                        id="coverageammount">
                                        <option value="">Coverage Amount</option>
                                        @foreach ($sum_insured as $key => $r)
                                            <option @if(isset($_GET['sum_insured2'])) @if($_GET['sum_insured2']==$r->sum_insured)
                                selected @endif @endif value="{{ $r->sum_insured }}" @if($data->url == 'visitor-insurance')  @if($r->sum_insured == 50000) selected @endif  @else @if ($key == 0) selected @endif @endif >${{
                                $r->sum_insured }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
            
        @endfor
        </div>
    </div>

    <div class="col-md-12 text-center">
        <button type="submit" id="getqoutesubmitbutton" class="btn btn-lg get_qout">Continue<i
                class="pl-2 fa fa-arrow-right"></i></button>

        <span id="family_error"
            style="display: none; font-weight:700; text-align: right;padding: 20px; color:#1BBC9B;"><i
                class="fa fa-warning"></i> </span>
    </div>
</form>

<script>
    function supervisayes() {
        window.setTimeout(function() {
            var tt = document.getElementById('departure_date').value;
            var date = new Date(tt);
            var newdate = new Date(date);
            newdate.setDate(newdate.getDate() + 364);
            var dd = newdate.getDate();
            var mm = newdate.getMonth() + 1;
            var y = newdate.getFullYear();
            if (mm <= 9) {
                var mm = '0' + mm;
            }
            if (dd <= 9) {
                var dd = '0' + dd;
            }
            //var someFormattedDate = mm + '/' + dd + '/' + y;
            var someFormattedDate = y + '/' + mm + '/' + dd;
            document.getElementById('return_date').value = someFormattedDate;
        }, 1000);
    }

    function checknumtravellers() {
        //Number OF Traveller
        var number_of_traveller = document.getElementById('number_travelers').value;
        console.log(number_of_traveller);
        //alert(number_of_traveller);
        if (number_of_traveller == '') {
            $('.no_of_travelers').hide();
        }
        if (number_of_traveller == 1) {
            $('.no_of_travelers').hide();
            $('#traveler1').show();
        }
        if (number_of_traveller == 2) {
            $('.no_of_travelers').hide();
            $('#traveler1').show();
            $('#traveler2').show();
        }
        if (number_of_traveller == 3) {
            $('.no_of_travelers').hide();
            $('#traveler1').show();
            $('#traveler2').show();
            $('#traveler3').show();
        }
        if (number_of_traveller == 4) {
            $('.no_of_travelers').hide();
            $('#traveler1').show();
            $('#traveler2').show();
            $('#traveler3').show();
            $('#traveler4').show();
        }
        if (number_of_traveller == 5) {
            $('.no_of_travelers').hide();
            $('#traveler1').show();
            $('#traveler2').show();
            $('#traveler3').show();
            $('#traveler4').show();
            $('#traveler5').show();
        }

        var startdate = document.getElementById('departure_date').value;
        for (var i = 1; i <= number_of_traveller; i++) {
            var d = document.getElementById('days_' + i).value;
            var m = document.getElementById('months_' + i).value;
            var y = document.getElementById('add_' + i).value;
            var dob = y + '-' + m + '-' + d;
            //alert(dob);
            dob = new Date(dob);
            var today = new Date(startdate);
            var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age_' + i).val(age);
        }
        p = 1;
        pr = number_of_traveller + p;
        for (var p = pr; p <= 8; p++) {
            document.getElementById('days_' + p).value = '';
            document.getElementById('months_' + p).value = '';
            document.getElementById('add_' + p).value = '';
        }

        //checkfamilyplan();
    }

    function checkfamilyplan() {

        //Eligibility
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
        if ($('#familyplan_temp').val() == 'yes') {
            if ($('#number_travelers').val() >= '2' && max_age <= 59 && min_age <= 21) {
                $('#getqoutesubmitbutton').css('display', '');
                $('#family_error').html('');
                $('#family_error').css('display', 'none');
            } else {
                $('#getqoutesubmitbutton').css('display', 'none');



                if ($('#number_travelers').val() < '2') {
                    $('#family_error').html(
                        '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
                } else if (max_age > 59) {
                    $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');
                } else if (min_age > 21) {
                    $('#family_error').html(
                        '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21'
                        );
                }
                $('#family_error').css('display', 'block');
            }
        } else {
            $('#getqoutesubmitbutton').css('display', '');
            $('#family_error').css('display', 'none');
        }

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
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dateofbirthfull1').mask('00/00/0000');
        $('#dateofbirthfull2').mask('00/00/0000');
        $('#dateofbirthfull3').mask('00/00/0000');
        $('#dateofbirthfull4').mask('00/00/0000');
        $('#dateofbirthfull5').mask('00/00/0000');
        $('#dateofbirthfull6').mask('00/00/0000');
        $('#phonenumbermask').mask('000-000-0000');
    });
    @if(isset($_GET['sum_insured2']))
    $( document ).ready(function() {
        $('#getqoutesubmitbutton').click();
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


                $('html, body').animate({
                    scrollTop: $(".quotationscards").offset().top
                }, 2000);

            }
        });
    }));
</script>
