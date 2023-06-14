!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
function dateReflection(that){
  var date = moment(that.val(), 'DD-MM-YYYY');
  var display = date.format('dddd Do MMMM YYYY');   
  console.log(display)
  $('.dateDisplay').text(display)
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
 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function checkemailcorection(id) {
    if( !validateEmail($('#savers_email').val())) { 
        $('#savers_emailerror').show();
        $('#savers_emailerror').html('Please Enter Correct Email');

     }else{
        $('#savers_emailerror').hide();
        $('#savers_emailerror').html('');
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
