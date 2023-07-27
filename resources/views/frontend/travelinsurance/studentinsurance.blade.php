@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')


    {{-- @include('frontend.companypages.includes.mainstudent') --}}
    @php
        $useragent = $_SERVER['HTTP_USER_AGENT'];
    @endphp
    @if (preg_match(
            '/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',
            $useragent) ||
            preg_match(
                '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
                substr($useragent, 0, 4)))
        @php
            $mobile = 'yes';
        @endphp
    @else
        @php
            $mobile = 'no';
        @endphp
    @endif


    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css') }}">
    @php
        $url = request()->segment(count(request()->segments()));
        $firstsection = DB::table('travelpages')
            ->where('url', $url)
            ->first();
    @endphp
    <div class="health-inssurance-hero-banners super-hero ahmSupperBanner">
        <div class="container-homepage">
            <div class="row mb-3">
                <div class="col-md-6 hero-texts">
                    <div class="herrotext super-hero-text">
                        <h2 class="wow fadeInUp text-responsive" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
                        <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span
                                class="text-white">{{ $firstsection->sub_heading }}</span></h5>
                        @if ($firstsection->main_button_text)
                            <div class="btns d-flex">
                                <div class="details">
                                    <a href="{{ $firstsection->main_button_link }}"
                                        class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 hero-images">
                    <div class="hero-image super-images"
                        style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image }}');
               background-position: 50% 70%;
               background-size: 100%;
               background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
        </div>
    </div>



    @if ($data->quotation_form_on_stylish_page == 1)
        @if ($data->stylish_form_layout == 'layout_1')
            @include('frontend.travelinsurance.includes.form-one-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_2')
            @include('frontend.travelinsurance.includes.form-two-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_3')
            @include('frontend.travelinsurance.includes.form-three-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_4')
            @include('frontend.travelinsurance.includes.form-four-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_5')
            @include('frontend.travelinsurance.includes.form-five-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_6')
            @include('frontend.travelinsurance.includes.form-six-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_7')
            @include('frontend.travelinsurance.includes.form-seven-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif


        @if ($data->stylish_form_layout == 'layout_8')
            @include('frontend.companypages.includes.mainvisitor')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif

        @if ($data->stylish_form_layout == 'layout_9')
            @include('frontend.companypages.includes.mainlayouttwo')
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
    @else
        @include('frontend.companypages.includes.includes.heroinclude')
    @endif





    @include('frontend.companypages.includes.sectiontwo')
    @include('frontend.companypages.includes.sectionthree')
    @include('frontend.companypages.includes.sectionfour')
    @include('frontend.companypages.includes.faqsection')
    @include('frontend.companypages.includes.productsection')

    @php
        $rand = rand(100000000, 20000000);
    @endphp

@endsection
@section('script')
    <link href="{{ url('public/front/css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ url('public/front/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dateofbirthfull').mask('00/00/0000');
        });
    </script>
    <script>
        $(".sum_insured2").select2({
            minimumResultsForSearch: -1,
            placeholder: "Select Coverage Amount",
            allowClear: false
        });
        $(".primarydestination").select2({
            minimumResultsForSearch: -1,
            placeholder: "Select Primary Destination",
            allowClear: false
        });

        $(document).ready(function() {
            function c(passed_month, passed_year, calNum) {
                var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
                makeWeek(calendar.weekline);
                calendar.datesBody.empty();
                var calMonthArray = makeMonthArray(passed_month, passed_year);
                var r = 0;
                var u = false;
                while (!u) {
                    if (daysArray[r] == calMonthArray[0].weekday) {
                        u = true
                    } else {
                        calendar.datesBody.append('<div class="blank"></div>');
                        r++;
                    }
                }
                for (var cell = 0; cell < 42 - r; cell++) { // 42 date-cells in calendar
                    if (cell >= calMonthArray.length) {
                        calendar.datesBody.append('<div class="blank"></div>');
                    } else {
                        var shownDate = calMonthArray[cell].day;
                        // Later refactiroing -- iter_date not needed after "today" is found
                        var iter_date = new Date(passed_year, passed_month, shownDate);
                        if (
                            (
                                (shownDate != today.getDate() && passed_month == today.getMonth()) ||
                                passed_month != today.getMonth()
                            ) &&
                            iter_date < today) {
                            var m = '<div class="past-date">';
                        } else {
                            var m = checkToday(iter_date) ? '<div class="today">' : "<div>";
                        }
                        calendar.datesBody.append(m + shownDate + "</div>");
                    }
                }

                // var color = o[passed_month];
                calendar.calHeader.find("h2").text(i[passed_month] + " " + passed_year);
                //.css("background-color",color)
                //.find("h2").text(i[passed_month]+" "+year);

                // find elements (dates) to be clicked on each time
                // the calendar is generated

                //clickedElement = bothCals.find(".calendar_content").find("div");
                var clicked = false;
                selectDates(selected);

                clickedElement = calendar.datesBody.find('div');
                clickedElement.on("click", function() {
                    clicked = $(this);
                    if (clicked.hasClass('past-date')) {
                        return;
                    }
                    var whichCalendar = calendar.name;
                    // console.log(whichCalendar);
                    // Understading which element was clicked;
                    // var parentClass = $(this).parent().parent().attr('class');
                    if (firstClick && secondClick) {
                        thirdClicked = getClickedInfo(clicked, calendar);
                        var firstClickDateObj = new Date(firstClicked.year,
                            firstClicked.month,
                            firstClicked.date);
                        var secondClickDateObj = new Date(secondClicked.year,
                            secondClicked.month,
                            secondClicked.date);
                        var thirdClickDateObj = new Date(thirdClicked.year,
                            thirdClicked.month,
                            thirdClicked.date);
                        if (secondClickDateObj > thirdClickDateObj &&
                            thirdClickDateObj > firstClickDateObj) {
                            secondClicked = thirdClicked;
                            // then choose dates again from the start :)
                            bothCals.find(".calendar_content").find("div").each(function() {
                                $(this).removeClass("selected");
                            });
                            selected = {};
                            selected[firstClicked.year] = {};
                            selected[firstClicked.year][firstClicked.month] = [firstClicked.date];


                            selected = addChosenDates(firstClicked, secondClicked, selected);


                        } else { // reset clicks
                            selected = {};
                            firstClicked = [];
                            secondClicked = [];
                            firstClick = false;
                            secondClick = false;
                            bothCals.find(".calendar_content").find("div").each(function() {
                                $(this).removeClass("selected");
                            });
                        }

                        // console.log(firstClickDateObj);

                        // console.log('ok test')
                    }
                    if (!firstClick) {
                        firstClick = true;
                        firstClicked = getClickedInfo(clicked, calendar);
                        selected[firstClicked.year] = {};
                        selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
                        $('.start_date_mobile').html(firstClicked.date + '-' + firstClicked.month + '-' +
                            firstClicked.year);

                        @if ($mobile == 'yes')
                            $('.firstcalenderfordateshow').hide();
                            $('.secondcalenderfordateshow').show();
                        @endif

                    } else {
                        console.log('second click');
                        secondClick = true;
                        secondClicked = getClickedInfo(clicked, calendar);
                        //console.log(secondClicked);

                        // what if second clicked date is before the first clicked?
                        var firstClickDateObj = new Date(firstClicked.year,
                            firstClicked.month,
                            firstClicked.date);
                        var secondClickDateObj = new Date(secondClicked.year,
                            secondClicked.month,
                            secondClicked.date);

                        if (firstClickDateObj > secondClickDateObj) {

                            var cachedClickedInfo = secondClicked;
                            secondClicked = firstClicked;
                            firstClicked = cachedClickedInfo;
                            selected = {};
                            selected[firstClicked.year] = {};
                            selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

                        } else if (firstClickDateObj.getTime() ==
                            secondClickDateObj.getTime()) {
                            selected = {};
                            firstClicked = [];
                            secondClicked = [];
                            firstClick = false;
                            secondClick = false;
                            $(this).removeClass("selected");
                        }


                        // add between dates to [selected]
                        selected = addChosenDates(firstClicked, secondClicked, selected);
                    }
                    // console.log(selected);
                    selectDates(selected);
                });

            }

            function selectDates(selected) {
                if (!$.isEmptyObject(selected)) {
                    var dateElements1 = datesBody1.find('div');
                    var dateElements2 = datesBody2.find('div');

                    function highlightDates(passed_year, passed_month, dateElements) {
                        if (passed_year in selected && passed_month in selected[passed_year]) {
                            var daysToCompare = selected[passed_year][passed_month];
                            // console.log(daysToCompare);
                            for (var d in daysToCompare) {
                                dateElements.each(function(index) {
                                    if (parseInt($(this).text()) == daysToCompare[d]) {
                                        $(this).addClass('selected');
                                    }
                                });
                            }

                        }
                    }

                    highlightDates(year, month, dateElements1);
                    highlightDates(nextYear, nextMonth, dateElements2);
                }
            }

            function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
                var e = [];
                for (var r = 1; r < getDaysInMonth(passed_year, passed_month) + 1; r++) {
                    e.push({
                        day: r,
                        // Later refactor -- weekday needed only for first week
                        weekday: daysArray[getWeekdayNum(passed_year, passed_month, r)]
                    });
                }
                return e;
            }

            function makeWeek(week) {
                week.empty();
                for (var e = 0; e < 7; e++) {
                    week.append("<div>" + daysArray[e].substring(0, 3) + "</div>")
                }
            }

            function getDaysInMonth(currentYear, currentMon) {
                return (new Date(currentYear, currentMon + 1, 0)).getDate();
            }

            function getWeekdayNum(e, t, n) {
                return (new Date(e, t, n)).getDay();
            }

            function checkToday(e) {
                var todayDate = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
                var checkingDate = e.getFullYear() + '/' + (e.getMonth() + 1) + '/' + e.getDate();
                return todayDate == checkingDate;

            }

            function getAdjacentMonth(curr_month, curr_year, direction) {
                var theNextMonth;
                var theNextYear;
                if (direction == "next") {
                    theNextMonth = (curr_month + 1) % 12;
                    theNextYear = (curr_month == 11) ? curr_year + 1 : curr_year;
                } else {
                    theNextMonth = (curr_month == 0) ? 11 : curr_month - 1;
                    theNextYear = (curr_month == 0) ? curr_year - 1 : curr_year;
                }
                return [theNextMonth, theNextYear];
            }

            function b() {
                today = new Date;
                year = today.getFullYear();
                month = today.getMonth();
                var nextDates = getAdjacentMonth(month, year, "next");
                nextMonth = nextDates[0];
                nextYear = nextDates[1];
            }

            var e = 480;

            var today;
            var year,
                month,
                nextMonth,
                nextYear;

            //var t=2013;
            //var n=9;
            var r = [];
            var i = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY",
                "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER",
                "NOVEMBER", "DECEMBER"
            ];
            var daysArray = ["Sunday", "Monday", "Tuesday",
                "Wednesday", "Thursday", "Friday", "Saturday"
            ];
            var o = ["#16a085", "#1abc9c", "#c0392b", "#27ae60",
                "#FF6860", "#f39c12", "#f1c40f", "#e67e22",
                "#2ecc71", "#e74c3c", "#d35400", "#2c3e50"
            ];

            var cal1 = $("#calendar_first");
            var calHeader1 = cal1.find(".calendar_header");
            var weekline1 = cal1.find(".calendar_weekdays");
            var datesBody1 = cal1.find(".calendar_content");

            var cal2 = $("#calendar_second");
            var calHeader2 = cal2.find(".calendar_header");
            var weekline2 = cal2.find(".calendar_weekdays");
            var datesBody2 = cal2.find(".calendar_content");

            var bothCals = $(".calendar");

            var switchButton = bothCals.find(".calendar_header").find('.switch-month');

            var calendars = {
                "cal1": {
                    "name": "first",
                    "calHeader": calHeader1,
                    "weekline": weekline1,
                    "datesBody": datesBody1
                },
                "cal2": {
                    "name": "second",
                    "calHeader": calHeader2,
                    "weekline": weekline2,
                    "datesBody": datesBody2
                }
            }


            var clickedElement;
            var firstClicked,
                secondClicked,
                thirdClicked;
            var firstClick = false;
            var secondClick = false;
            var selected = {};

            b();
            c(month, year, 0);
            c(nextMonth, nextYear, 1);
            switchButton.on("click", function() {
                var clicked = $(this);
                var generateCalendars = function(e) {
                    var nextDatesFirst = getAdjacentMonth(month, year, e);
                    var nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
                    month = nextDatesFirst[0];
                    year = nextDatesFirst[1];
                    nextMonth = nextDatesSecond[0];
                    nextYear = nextDatesSecond[1];

                    c(month, year, 0);
                    c(nextMonth, nextYear, 1);
                };
                if (clicked.attr("class").indexOf("left") != -1) {
                    generateCalendars("previous");
                } else {
                    generateCalendars("next");
                }
                clickedElement = bothCals.find(".calendar_content").find("div");
                console.log("checking");
            });


            //  Click picking stuff
            function getClickedInfo(element, calendar) {
                var clickedInfo = {};
                var clickedCalendar,
                    clickedMonth,
                    clickedYear;
                clickedCalendar = calendar.name;
                //console.log(element.parent().parent().attr('class'));
                clickedMonth = clickedCalendar == "first" ? month : nextMonth;
                clickedYear = clickedCalendar == "first" ? year : nextYear;
                clickedInfo = {
                    "calNum": clickedCalendar,
                    "date": parseInt(element.text()),
                    "month": clickedMonth,
                    "year": clickedYear
                }
                //console.log(clickedInfo);
                return clickedInfo;
            }


            // Finding between dates MADNESS. Needs refactoring and smartening up :)
            function addChosenDates(firstClicked, secondClicked, selected) {
                if (secondClicked.date > firstClicked.date ||
                    secondClicked.month > firstClicked.month ||
                    secondClicked.year > firstClicked.year) {

                    var added_year = secondClicked.year;
                    var added_month = secondClicked.month;
                    var added_date = secondClicked.date;

                    var finalstartmonth = parseInt(firstClicked.month) + parseInt(1);
                    var finalendmonth = parseInt(secondClicked.month) + parseInt(1);

                    var finalstartdate = firstClicked.date + '-' + finalstartmonth + '-' + firstClicked.year;
                    var finalenddate = secondClicked.date + '-' + finalendmonth + '-' + secondClicked.year;


                    $('.start_date_mobile').html(finalstartdate);
                    $('.date_picker_month_day').html(finalstartdate)
                    $('.date_picker_year').html(finalenddate)
                    $('#startdatetoshowonshowfield').html(finalstartdate)
                    $('#enddatetoshowonenddatefield').html(finalenddate)


                    $('.end_date_mobile').html(finalenddate);
                    $('.date_picker_month_day').show()
                    $('.linebar').show()
                    $('.date_picker_year').show()
                    $('#departure_date').val(finalstartdate);
                    $('#return_date').val(finalenddate);
                    if (added_year > firstClicked.year) {
                        // first add all dates from all months of Second-Clicked-Year
                        selected[added_year] = {};
                        selected[added_year][added_month] = [];
                        for (var i = 1; i <= secondClicked.date; i++) {
                            selected[added_year][added_month].push(i);
                        }

                        added_month = added_month - 1;
                        console.log(added_month);
                        while (added_month >= 0) {
                            selected[added_year][added_month] = [];
                            for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
                                selected[added_year][added_month].push(i);
                            }
                            added_month = added_month - 1;
                        }

                        added_year = added_year - 1;
                        added_month = 11; // reset month to Dec because we decreased year
                        added_date = getDaysInMonth(added_year, added_month); // reset date as well

                        // Now add all dates from all months of inbetween years
                        while (added_year > firstClicked.year) {
                            selected[added_year] = {};
                            for (var i = 0; i < 12; i++) {
                                selected[added_year][i] = [];
                                for (var d = 1; d <= getDaysInMonth(added_year, i); d++) {
                                    selected[added_year][i].push(d);
                                }
                            }
                            added_year = added_year - 1;
                        }
                    }

                    if (added_month > firstClicked.month) {
                        if (firstClicked.year == secondClicked.year) {
                            console.log("here is the month:", added_month);
                            selected[added_year][added_month] = [];
                            for (var i = 1; i <= secondClicked.date; i++) {
                                selected[added_year][added_month].push(i);
                            }
                            added_month = added_month - 1;
                        }
                        while (added_month > firstClicked.month) {
                            selected[added_year][added_month] = [];
                            for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
                                selected[added_year][added_month].push(i);
                            }
                            added_month = added_month - 1;
                        }
                        added_date = getDaysInMonth(added_year, added_month);
                    }

                    for (var i = firstClicked.date + 1; i <= added_date; i++) {
                        selected[added_year][added_month].push(i);
                    }
                }
                return selected;
            }

            function savecompareplans(plan_id, product_id, coverage_ammount, deductibles, price) {
                var $checkboxes = jQuery('.compare input[type="checkbox"]');
                $checkboxes.change(function(e) {
                    $checkboxes.attr("disabled", false);
                    var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
                    if (countCheckedCheckboxes == 1) {
                        jQuery('.two_select').hide();
                        jQuery('.one_select').show();
                    } else if (countCheckedCheckboxes == 2) {
                        jQuery('.compare_header_top').show();
                        jQuery('.two_select').show();
                        jQuery('.one_select').hide();
                    } else if (countCheckedCheckboxes >= 3) {
                        jQuery('.compare_header_top').show();
                        jQuery('.two_select').show();
                        jQuery('.one_select').hide();
                        $checkboxes.attr("disabled", true);
                        $checkboxes.filter(':checked').attr("disabled", false);
                    } else {
                        jQuery('.compare_header_top').hide();
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: '{{ url('savecompareplans') }}/' + {{ $rand }} + '/' + plan_id + '/' +
                        product_id + '/' + coverage_ammount + '/' + deductibles + '/' + price,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('.compare_header_top').show();
                        $('.compare_header_top').html(data);
                    }
                });
            }
        });
    </script>
@endsection
