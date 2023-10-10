function calculateAge(dateofbirth , classname) {
   var dob = dateofbirth;        
   var dobRegex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2[0-9]|3[01])\/\d{4}$/;
   if (!dobRegex.test(dob)) {
       $('#'+classname).css('border-color', 'red');
       return;
   }
   var parts = dob.split('/');
   var month = parseInt(parts[0], 10);
   var day = parseInt(parts[1], 10);
   var year = parseInt(parts[2], 10);
   var d = new Date();
   var output = d.getFullYear()
   var hundredyearsback = output-100;
   var dobDate = new Date(year, month - 1, day); // Month is 0-indexed
   var currentDate = new Date();
   if (isNaN(dobDate.getTime()) || dobDate >= currentDate || year <= hundredyearsback) {
       $('#'+classname).css('border-color', 'red');
       $('#getqoutesubmitbutton').prop('disabled' , true);
       return;
   }else{
       $('#'+classname).css('border-color', 'green');
       $('#getqoutesubmitbutton').prop('disabled' , false);
   }
}
function printErrorMsglogin (msg) {
    $(".print-error-msg-login").find("ul").html('');
    $(".print-error-msg-login").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg-login").find("ul").append('<li>'+value+'</li>');
    });
}
function countryState(id) {
    $.ajax({
        type: 'get',
        url: 'getstates/'+id,
        success: function(data) {
            $('#statestoshow').html(data)
        }
    });                                  
}
function removecomparecard() {
    $('.compare_header_top').hide();
}

function changefamilyyes(id) {
    if (id == 'yes') {
        document.getElementById('familyplan_temp').value = 'yes';
        checkfamilyplan();
    } else {
        document.getElementById('familyplan_temp').value = 'no';
        checkfamilyplan();
    }
}
function secondnext() 
{   
    var errorlength = $(".errorinputtest").length
    if(errorlength == 0)
    {
        $('#secondnextfake').hide();
        $('#secondnextorignal').show();
        $('#secondnextorignal').click();
    }else{
        $('#errortravelr').show();
        $('#errortravelr').html('Please Fill All Fields');    
    }
}
function checknumtravellers(id) {
if(id == '')
{
 $('.no_of_travelers').hide();
}
if(id == 1)
{
 $('#dateofbirthfull1').attr('required' , true);
 $('#pre_existing1').attr('required' , true);
 $('#dateofbirthfull2').attr('required' , false);
 $('#pre_existing2').attr('required' , false);
 $('#dateofbirthfull3').attr('required' , false);
 $('#pre_existing3').attr('required' , false);
 $('#dateofbirthfull4').attr('required' , false);
 $('#pre_existing4').attr('required' , false);
 $('#dateofbirthfull5').attr('required' , false);
 $('#pre_existing5').attr('required' , false);
 $('#dateofbirthfull2').val('');
 $('#pre_existing2').val('');
 $('#dateofbirthfull3').val('');
 $('#pre_existing3').val('');
 $('#dateofbirthfull4').val('');
 $('#pre_existing4').val('');
 $('#dateofbirthfull5').val('');
 $('#pre_existing5').val('');


 $('.no_of_travelers').hide();
 $('#traveler1').show();
}
if(id == 2)
{

 $('#dateofbirthfull1').attr('required' , true);
 $('#pre_existing1').attr('required' , true);
 $('#dateofbirthfull2').attr('required' , true);
 $('#pre_existing2').attr('required' , true);
 $('#dateofbirthfull3').attr('required' , false);
 $('#pre_existing3').attr('required' , false);
 $('#dateofbirthfull4').attr('required' , false);
 $('#pre_existing4').attr('required' , false);
 $('#dateofbirthfull5').attr('required' , false);
 $('#pre_existing5').attr('required' , false);
 $('#dateofbirthfull3').val('');
 $('#pre_existing3').val('');
 $('#dateofbirthfull4').val('');
 $('#pre_existing4').val('');
 $('#dateofbirthfull5').val('');
 $('#pre_existing5').val('');




 $('.no_of_travelers').hide();
 $('#traveler1').show();
 $('#traveler2').show();
}
if(id == 3)
{
 $('#dateofbirthfull1').attr('required' , true);
 $('#pre_existing1').attr('required' , true);
 $('#dateofbirthfull2').attr('required' , true);
 $('#pre_existing2').attr('required' , true);
 $('#dateofbirthfull3').attr('required' , true);
 $('#pre_existing3').attr('required' , true);
 $('#dateofbirthfull4').attr('required' , false);
 $('#pre_existing4').attr('required' , false);
 $('#dateofbirthfull5').attr('required' , false);
 $('#pre_existing5').attr('required' , false);
 $('#dateofbirthfull4').val('');
 $('#pre_existing4').val('');
 $('#dateofbirthfull5').val('');
 $('#pre_existing5').val('');
 $('.no_of_travelers').hide();
 $('#traveler1').show();
 $('#traveler2').show();
 $('#traveler3').show();
}
if(id == 4)
{
 $('#dateofbirthfull1').attr('required' , true);
 $('#pre_existing1').attr('required' , true);
 $('#dateofbirthfull2').attr('required' , true);
 $('#pre_existing2').attr('required' , true);
 $('#dateofbirthfull3').attr('required' , true);
 $('#pre_existing3').attr('required' , true);
 $('#dateofbirthfull4').attr('required' , true);
 $('#pre_existing4').attr('required' , true);
 $('#dateofbirthfull5').attr('required' , false);
 $('#pre_existing5').attr('required' , false);
 $('#dateofbirthfull5').val('');
 $('#pre_existing5').val('');
 $('.no_of_travelers').hide();
 $('.no_of_travelers').hide();
 $('#traveler1').show();
 $('#traveler2').show();
 $('#traveler3').show();
 $('#traveler4').show();
}
if(id == 5)
{
 $('#dateofbirthfull1').attr('required' , true);
 $('#pre_existing1').attr('required' , true);
 $('#dateofbirthfull2').attr('required' , true);
 $('#pre_existing2').attr('required' , true);
 $('#dateofbirthfull3').attr('required' , true);
 $('#pre_existing3').attr('required' , true);
 $('#dateofbirthfull4').attr('required' , true);
 $('#pre_existing4').attr('required' , true);
 $('#dateofbirthfull5').attr('required' , true);
 $('#pre_existing5').attr('required' , true);
 $('#dateofbirthfull5').val('');
 $('#pre_existing5').val('');
 $('.no_of_travelers').hide();
 $('#traveler1').show();
 $('#traveler2').show();
 $('#traveler3').show();
 $('#traveler4').show();
 $('#traveler5').show();
}
if(id == 6)
{
 $('.no_of_travelers').hide();
 $('#traveler1').show();
 $('#traveler2').show();
 $('#traveler3').show();
 $('#traveler4').show();
 $('#traveler5').show();
 $('#traveler6').show();
}
if(id == 7)
{
 $('.no_of_travelers').hide();
 $('#traveler1').show();
 $('#traveler2').show();
 $('#traveler3').show();
 $('#traveler4').show();
 $('#traveler5').show();
 $('#traveler6').show();
 $('#traveler7').show();

}
checkfamilyplan();
}
function removeappendvalue(id) {
  $('.button-add-another').fadeIn(300);
  $('#removebutton'+id).removeClass('showrowstraveler');
  $('#removebutton'+id).addClass('hiderowstraveler');
  $('.dateofbirthclass'+id).val('')

  var number_travelers = $("#number_travelers").val();
  var addtraveler = 1;
  var totaltraveler = parseInt(number_travelers) - parseInt(addtraveler);
  $("#number_travelers").val(totaltraveler);
}
function dateofbirth(id , travelerid) 
{
    if(id == '')
    {
        $('.dateofbirthclass'+travelerid).addClass('errorinputtest')
        $("#secondnextfake").css("pointer-events","none");
        $("#secondnextfake").css("background-color","#f2dede");
        $("#secondnextfake").css("color","#b94a48");
    }else{
        $('#errortravelr').hide();
        $('.dateofbirthclass'+travelerid).removeClass('errorinputtest')
        $("#secondnextfake").css("pointer-events","auto");
        $("#secondnextfake").css("background-color","#2b3481");
        $("#secondnextfake").css("color","#fff");
    }
}

function changepreexisting(id , travelerid) 
{
    if(id == '')
    {
        $('.pre_existing_values_check'+travelerid).addClass('errorinputtest')
        $("#secondnextfake").css("pointer-events","none");
        $("#secondnextfake").css("background-color","#f2dede");
        $("#secondnextfake").css("color","#b94a48");
    }else{
        $('#errortravelr').hide();
        $('.pre_existing_values_check'+travelerid).removeClass('errorinputtest')
        $("#secondnextfake").css("pointer-events","auto");
        $("#secondnextfake").css("background-color","#2b3481");
        $("#secondnextfake").css("color","#fff");
    }
}







$("#additionaltraveler").click(function(){
    $(".additional-card").slideToggle();
}); 
$("#additionaltraveler2").click(function(){
    $(".additional-card2").slideToggle();
}); 
$("#additionaltraveler3").click(function(){
    $(".additional-card3").slideToggle();
}); 
$("#additionaltraveler4").click(function(){
    $(".additional-card4").slideToggle();
}); 
$("#additionaltraveler5").click(function(){
    $(".additional-card5").slideToggle();
}); 
$("#additionaltraveler6").click(function(){
    $(".additional-card6").slideToggle();
}); 

$(".show-tooltip").click(function(){
    $(".activehelpful").slideToggle();
});
$(".close-tooltip").click(function(){
    $(".activehelpful").slideToggle();
});
function sum_insured(id) {
    $('#coverageprice').val(id);
}
function firstnext() {
  if($('#sum_insured2').val() == '' )
  {
     $('#covergaeerror').show();
     $('#covergaeerror').html('Please Select Covergae Ammount');
  }else if($('#primarydestination').val() == ''){
     $('#primarydestinationerror').show();
     $('#primarydestinationerror').html('Please Select Primary DEstination');
  }
  else{
     $('#firstnextfake').hide();
     $('#firstnextorignal').show();
     $('#firstnextorignal').click();
  }
}
 function validateEmail(email) {

    
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test(email);
}

function checkemailcorection(id) {
    if( !validateEmail($('#savers_email').val())) { 
        $('#savers_emailerror').show();
        $('#savers_emailerror').html('Please Enter Correct Email');
     }else{
        var url = 'https://mailbite.io/api/check?key=Mf8DT724QiKMmXOOBdftckJPM2RubTh0tcBY&email='+id;
        $.get(url).done(function(data) { 
          if(data.email_status == 'INVALID')
          {
            $('#savers_emailerror').show();
            $('#savers_emailerror').html('Please Enter Valid Email');
          }else{
            $('#savers_emailerror').hide();
            $('#savers_emailerror').html('');
          }
        });

        
     }
}

function thirdone() {
 $('#savers_emailerror').hide();
 $('#donefake').hide();
 $('#doneoriginal').show();
 $('#doneoriginal').click();
}

function calprimaryage(id){
    var currentyear = new Date().getFullYear();
    var dobyear = id;
    var primaryage = currentyear - dobyear;
    return primaryage;
}





(function($) {
    'use strict';
    // Mean Menu
    jQuery('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Preloader
    jQuery(window).on('load', function() {
        $('.preloader').fadeOut();
    });

    // Nice Select JS
    // $('select').niceSelect();

    // Header Sticky
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 150) {
            $('.navbar-area').addClass("is-sticky");
        } else {
            $('.navbar-area').removeClass("is-sticky");
        }
    });

    // Main Slider Area
    $('.hero-slider-wrap').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: true,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        navText: [
            "<i class='flaticon-back'></i>",
            "<i class='flaticon-right'></i>",
        ],
    });

    // Partners Wrap
    $('.partners-wrap').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        margin: 0,
        center: false,
        dots: false,
        smartSpeed: 1500,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 4,
            }
        }
    });

    // Testimonial Wrap
    $('.testimonial-wrap').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        center: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });

    // Team Wrap
    $('.team-wrap').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: true,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        center: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });

    // Testimonial Wrap Two
    $('.testimonial-wrap-two').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,
            }
        }
    });

    // Work Wrap
    $('.work-wrap').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 5,
            }
        }
    });

    // Hero Slider Six
    $('.hero-slider-six').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 800,
        autoplayHoverPause: true,
        navText: [
            "<i class='bx bx-chevrons-left'></i>",
            "<i class='bx bx-chevrons-right'></i>",
        ],
    });

    // Testimonial Wrap
    $('.testimonial-wrap-six').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        navText: [
            "<i class='flaticon-left-1'></i>",
            "<i class='flaticon-right-1'></i>",
        ],
    });

    // Odometer 
    $('.odometer').appear(function(e) {
        var odo = $(".odometer");
        odo.each(function() {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // Go to Top
    // Scroll Event
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    // Click Event
    $('.go-top').on('click', function() {
        $("html, body").animate({
            scrollTop: "0"
        }, 500);
    });

    // FAQ Accordion
    $('.accordion').find('.accordion-title').on('click', function() {
        // Adds Active Class
        $(this).toggleClass('active');
        // Expand or Collapse This Panel
        $(this).next().slideToggle('fast');
        // Hide The Other Panels
        $('.accordion-content').not($(this).next()).slideUp('fast');
        // Removes Active Class From Other Titles
        $('.accordion-title').not($(this)).removeClass('active');
    });

    // Count Time 
    function makeTimer() {
        var endTime = new Date("march  30, 2022 17:00:00 PDT");
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function() {
        makeTimer();
    }, 300);

    // Animation
    new WOW().init();

    // Tabs 
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li').on('click', function(g) {
        var tab = $(this).closest('.tab'),
            index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
    });

    // Popup Video
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 300,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
    });

    // Subscribe form
    $(".newsletter-form").validator().on("submit", function(event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly.");
        } else {
            // everything looks good!
            event.preventDefault();
        }
    });

    function callbackFunction(resp) {
        if (resp.result === "success") {
            formSuccessSub();
        } else {
            formErrorSub();
        }
    }

    function formSuccessSub() {
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function() {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }

    function formErrorSub() {
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function() {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }

    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }

    // AJAX MailChimp
    $(".newsletter-form").ajaxChimp({
        url: "https://Envy Theme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // MixItUp Shorting
    $('.shorting').mixItUp();

    // Search Popup JS
    $('.close-btn').on('click', function() {
        $('.search-overlay').fadeOut();
        $('.search-btn').show();
        $('.close-btn').removeClass('active');
    });
    $('.search-btn').on('click', function() {
        $(this).hide();
        $('.search-overlay').fadeIn();
        $('.close-btn').addClass('active');
    });
})(jQuery);


(function () {
  "use strict";

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();
