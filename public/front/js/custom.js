function removeappendvalue(id) {
  $('.button-add-another').fadeIn(300);
  $('#removebutton'+id).removeClass('showrowstraveler');
  $('#removebutton'+id).addClass('hiderowstraveler');
  $('.dateofbirthclass'+id).val('')
}
function secondnext() 
{
    var value = $('.dateofbirthclass1').val()
    if(value == '')
    {
        $('.dateofbirthclass1').addClass('errorinput')
    }else{
        $('#secondnextfake').hide();
        $('#secondnextorignal').show();
        $('#secondnextorignal').click();
    }
}

$(".show-tooltip").click(function(){
    $(".activehelpful").slideToggle();
});
$(".close-tooltip").click(function(){
    $(".activehelpful").slideToggle();
});


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


function selectdestination(id) {
  $('#primarydestination').val(id); 
     $('#qoutedestination').html(id);  
}
function thirdone() {
 if($('#savers_email').val() == '')
 {
    $('#savers_emailerror').show();
    $('#savers_emailerror').html('Please Enter Your Email');
 }else{
    $('#savers_emailerror').hide();
     $('#donefake').hide();
     $('#doneoriginal').show();
     $('#doneoriginal').click();
  }
}


function calprimaryage(id){
    var currentyear = new Date().getFullYear();
    var dobyear = id;
    var primaryage = currentyear - dobyear;
    return primaryage;
}



function addtravellers() 
{
   var showrowstraveler = $('.showrowstraveler').length;

   var value = $('.dateofbirthclass'+showrowstraveler).val();
   if(value == '')
   {
      $('.dateofbirthclass'+showrowstraveler).addClass('errorinput')
   }else{

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
          if(year > getfourtyyear)
          {
            $('.dateofbirthclass'+showrowstraveler).addClass('errorinput')
            $('#errortravelr').show();
            $('#errortravelr').html('Super Visa Is Eligible only Greate Then 40 Years Old');
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
      }
   }
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