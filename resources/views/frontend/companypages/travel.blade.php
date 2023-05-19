@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.maintravel')
@include('frontend.companypages.includes.sectiontwo')
@include('frontend.companypages.includes.sectionthree') 
@include('frontend.companypages.includes.sectionfour')
<section class="fourth-section four-section">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>Know what </span> you're buying</h2>
        </div>
        <div class="benifitrow row">
            <div class="col-md-6">
                <img src="{{ asset('public/front/img/images/travel3.png')}}">
            </div>
            <div class="col-md-6">
                <p>Carefully research your needs. Verify the terms, conditions, limitations, exclusions and requirements of your insurance policy before you leave Canada. When assessing a travel health insurance plan, you should ask a lot of questions.</p>
                <ul class="list-checkmark text-secondary-color">
                    <li>Is there a deductible, and how much is it? Plans with 100% coverage are more zexpensive but may save money in the long run.</li>
                    <li>Does the plan offer continuous coverage for the length of your stay outside Canada and after your return?</li>
                    <li>Does the plan exclude or greatly limit coverage for certain regions or countries you may visit?</li>
                    <li>Does it offer coverage that is renewable from abroad and for the maximum period of stay</li>
                    <li>Does the company have an in-house, worldwide, 24-hour/7-day emergency</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .covid{
        background-image: url('{{ asset('public/front/img/images/visa-background.png')}}');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }
</style>
<div class="covid p-4">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center text-white">COVID-19 and travel insurance</h2>
            </div>
            <div class="col-md-6">
                <p class="text-white">If you have to travel outside Canada during the COVID-19 pandemic, check with your travel insurance provider (whether you have a group, an individual or a credit-card type of insurance) to make sure you're covered for:</p>
                <p class="text-white">COVID-19-related medical expenses<br>other non-COVID-19 emergency-related expenses</p>
            </div>
        </div>
    </div>
</div>
@include('frontend.companypages.includes.faqsection')
@include('frontend.companypages.includes.productsection')
@endsection
@section('script')
<link href="{{ url('public/front/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ url('public/front/js/select2.min.js') }}"></script>
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#dateofbirthfull').mask('00/00/0000');
       $('.dateofbirthfull2').mask('00/00/0000');
       $('.dateofbirthfull3').mask('00/00/0000');
       $('.dateofbirthfull4').mask('00/00/0000');
       $('.dateofbirthfull5').mask('00/00/0000');
       $('.dateofbirthfull6').mask('00/00/0000');
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


$(".pre_existing_condition1").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition2").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition3").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition4").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition5").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});
$(".pre_existing_condition6").select2({
    minimumResultsForSearch: -1,
    placeholder: "Pre Existing",
    allowClear: false
});

$( document ).ready(function() {
function c(passed_month, passed_year, calNum) {
    var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
    makeWeek(calendar.weekline);
    calendar.datesBody.empty();
    var calMonthArray = makeMonthArray(passed_month, passed_year);
    var r = 0;
    var u = false;
    while(!u) {
        if(daysArray[r] == calMonthArray[0].weekday) { u = true } 
        else { 
            calendar.datesBody.append('<div class="blank"></div>');
            r++;
        }
    } 
    for(var cell=0;cell<42-r;cell++) { // 42 date-cells in calendar
        if(cell >= calMonthArray.length) {
            calendar.datesBody.append('<div class="blank"></div>');
        } else {
            var shownDate = calMonthArray[cell].day;
            // Later refactiroing -- iter_date not needed after "today" is found
            var iter_date = new Date(passed_year,passed_month,shownDate); 
            if ( 
                (
                    ( shownDate != today.getDate() && passed_month == today.getMonth() ) 
                    || passed_month != today.getMonth()
                ) 
                    && iter_date < today) {                     
                var m = '<div class="past-date">';
            } else {
                var m = checkToday(iter_date)?'<div class="today">':"<div>";
            }
            calendar.datesBody.append(m + shownDate + "</div>");
        }
    }

    // var color = o[passed_month];
    calendar.calHeader.find("h2").text(i[passed_month]+" "+passed_year);
                //.css("background-color",color)
                //.find("h2").text(i[passed_month]+" "+year);

    // find elements (dates) to be clicked on each time
    // the calendar is generated
    
    //clickedElement = bothCals.find(".calendar_content").find("div");
    var clicked = false;
    selectDates(selected);

    clickedElement = calendar.datesBody.find('div');
    clickedElement.on("click", function(){
        clicked = $(this);
        if (clicked.hasClass('past-date')) { return; }
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
            if (secondClickDateObj > thirdClickDateObj
                && thirdClickDateObj > firstClickDateObj) {
                secondClicked = thirdClicked;
                // then choose dates again from the start :)
                bothCals.find(".calendar_content").find("div").each(function(){
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
                bothCals.find(".calendar_content").find("div").each(function(){
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

        function highlightDates(passed_year, passed_month, dateElements){
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
    var e=[];
    for(var r=1;r<getDaysInMonth(passed_year, passed_month)+1;r++) {
        e.push({day: r,
                // Later refactor -- weekday needed only for first week
                weekday: daysArray[getWeekdayNum(passed_year,passed_month,r)]
            });
    }
    return e;
}
function makeWeek(week) {
    week.empty();
    for(var e=0;e<7;e++) { 
        week.append("<div>"+daysArray[e].substring(0,3)+"</div>") 
    }
}

function getDaysInMonth(currentYear,currentMon) {
    return(new Date(currentYear,currentMon+1,0)).getDate();
}
function getWeekdayNum(e,t,n) {
    return(new Date(e,t,n)).getDay();
}
function checkToday(e) {
    var todayDate = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
    var checkingDate = e.getFullYear()+'/'+(e.getMonth()+1)+'/'+e.getDate();
    return todayDate==checkingDate;

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

var e=480;

var today;
var year,
    month,
    nextMonth,
    nextYear;

//var t=2013;
//var n=9;
var r = [];
var i = ["JANUARY","FEBRUARY","MARCH","APRIL","MAY",
        "JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER",
        "NOVEMBER","DECEMBER"];
var daysArray = ["Sunday","Monday","Tuesday",
                "Wednesday","Thursday","Friday","Saturday"];
var o = ["#16a085","#1abc9c","#c0392b","#27ae60",
        "#FF6860","#f39c12","#f1c40f","#e67e22",
        "#2ecc71","#e74c3c","#d35400","#2c3e50"];

var cal1=$("#calendar_first");
var calHeader1=cal1.find(".calendar_header");
var weekline1=cal1.find(".calendar_weekdays");
var datesBody1=cal1.find(".calendar_content");

var cal2=$("#calendar_second");
var calHeader2=cal2.find(".calendar_header");
var weekline2=cal2.find(".calendar_weekdays");
var datesBody2=cal2.find(".calendar_content");

var bothCals = $(".calendar");

var switchButton = bothCals.find(".calendar_header").find('.switch-month');

var calendars = { 
                "cal1": {   "name": "first",
                            "calHeader": calHeader1,
                            "weekline": weekline1,
                            "datesBody": datesBody1 },
                "cal2": {   "name": "second",
                            "calHeader": calHeader2,
                            "weekline": weekline2,
                            "datesBody": datesBody2 }
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
switchButton.on("click",function() {
    var clicked=$(this);
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
    if(clicked.attr("class").indexOf("left")!=-1) { 
        generateCalendars("previous");
    } else { generateCalendars("next"); }
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
    clickedInfo = {"calNum": clickedCalendar,
                    "date": parseInt(element.text()),
                    "month": clickedMonth,
                    "year": clickedYear}
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

        var finalstartmonth = parseInt(firstClicked.month)+parseInt(1);
        var finalendmonth = parseInt(secondClicked.month)+parseInt(1);

        var finalstartdate = firstClicked.date+'-'+finalstartmonth+'-'+firstClicked.year;
        var finalenddate = secondClicked.date+'-'+finalendmonth+'-'+secondClicked.year;



        $('.date_picker_month_day').html(finalstartdate)
        $('.date_picker_year').html(finalenddate)
        $('#coveragedate').html(finalenddate)
        $('#qoutedestination').html(finalenddate)
        $('.date_picker_month_day').show()
        $('.linebar').show()
        $('.date_picker_year').show()
        $('#departure_date').val(finalstartdate);
        $('#return_date').val(finalenddate);
        if (added_year > firstClicked.year) {   
            // first add all dates from all months of Second-Clicked-Year
            selected[added_year] = {};
            selected[added_year][added_month] = [];
            for (var i = 1; 
                i <= secondClicked.date;
                i++) {
                selected[added_year][added_month].push(i);
            }
    
            added_month = added_month - 1;
            console.log(added_month);
            while (added_month >= 0) {
                selected[added_year][added_month] = [];
                for (var i = 1; 
                    i <= getDaysInMonth(added_year, added_month);
                    i++) {
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
                for (var i=0; i < 12; i++) {
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
                console.log("here is the month:",added_month);
                selected[added_year][added_month] = [];
                for (var i = 1; 
                    i <= secondClicked.date;
                    i++) {
                    selected[added_year][added_month].push(i);
                }
                added_month = added_month - 1;
            }
            while (added_month > firstClicked.month) {
                selected[added_year][added_month] = [];
                for (var i = 1; 
                    i <= getDaysInMonth(added_year, added_month);
                    i++) {
                    selected[added_year][added_month].push(i);
                }
                added_month = added_month - 1;
            }
            added_date = getDaysInMonth(added_year, added_month);
        }

        for (var i = firstClicked.date + 1; 
            i <= added_date;
            i++) {
            selected[added_year][added_month].push(i);
        }
    }
    return selected;
}
});
</script>
@endsection