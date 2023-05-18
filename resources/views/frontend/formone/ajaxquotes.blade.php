<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
@php
$ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
@endphp
var Slider_Values = [<?php
                $d = 0;
                $havethousand = 'no';
                foreach($ded as $r){
                    $d++;
                        echo $dedivalue = $r->deductible1;
                    if($d < count($ded)){
                        echo ', ';
                    }
                    if($dedivalue == 1000)
                    { 
                        $havethousand = 'yes'; 
                    }
                } ?>];
<?php if($havethousand == 'yes'){?>
var dValue = Slider_Values.indexOf(1000);
<?php } else { ?>
var dValue = Slider_Values[0];
<?php } ?>
if(dValue == '-1'){ dValue = '0'; }
$(function () {
    $("#slider").slider({
        range: "min",
        min: 0,
        max: Slider_Values.length - 1,
        step: 1,
        value: dValue,
        slide: function (event, ui) {
            $('#coverage_deductible').text(Slider_Values[ui.value]);
            //alert(Slider_Values.length);
            for (i = 0; i < Slider_Values.length; i++) {
                var group = Slider_Values[i];
                $('.deductable-'+group).css('display' , 'none');
            }
            $('.deductable-'+Slider_Values[ui.value]).css('display' , 'flex');
            $( "#coverage_deductible" ).val( "$" + Slider_Values[ui.value] );
        }
    });
});

@php
$sum = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
@endphp

var SliderValues = [0,<?php
                $s = 0;
                foreach($sum as $r){
                $s++;   
                echo $sumamount = $r->sum_insured;
                if($s < count($sum)){
                echo ', ';
                }
                } ?>];
var iValue = SliderValues.indexOf({{ $request->sum_insured2 }});
$(function () {
    $("#sum_slider").slider({
        range: "min",
        min: 0,
        max: SliderValues.length - 1,
        step: 1,
        value: iValue,
        slide: function (event, ui) {
            $('#coverage_amount').text(SliderValues[ui.value]);
            //alert(SliderValues.length);
for (i = 0; i < SliderValues.length; i++) {
var group = SliderValues[i];
$('.coverage-amt-'+group).hide();
}
            $('.coverage-amt-'+SliderValues[ui.value]).show();
            $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
        }
    });

});
</script>
<div class="row">
    <div class="col-md-4">
        <div class="card qoute-price-card mb-3 left_qoute_card">
          <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <h4>Quote Reference : <span style="color: #2b3481;"><?php echo $quoteNumber; ?></span></h4>
                </div>
                  <div class="col-md-12 adjust-quoto" style="border:none;">
                    <h4 class="deductible" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible" value="$<?php if($havethousand == 'no'){ echo '0'; } else {echo '1000'; } ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;"></h4>
                    
                    <div class="mt-4" id="slider" style="border: 1px solid #c5c5c5;padding: 0px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
                </div>
                <div class="col-md-12 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
                     <h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" value="$<?php echo $request->sum_insured2 ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;"></h4>
                    <div class="mt-4" id="sum_slider" style="border: 1px solid #c5c5c5;padding: 0px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
                </div>
              </div>
          </div>
        </div>
        <div class="card  qoute-price-card mb-3 pricegurrantecard display-none-on-mobile">
          <div class="card-widget card-widget-price-match">
                <div class="card-header">
                    <div class="icon icon-price-match"></div>
                    <div class="card-header__label">Price <br data-v-59a9f311="">Guarantee</div>
                </div>
                <div class="card-body">
                    <p class="text-secondary-color body-text-5"> Insurance rates are regulated by law. You can't find the same insurance plan for a lower price anywhere else. </p>
                </div>
          </div>
        </div>
    </div>
    <div id="main" class="col-md-8">
        @if(in_array("yes", $request->pre_existing))
            @include('frontend.formone.ajaxincludes.cardyes')
        @else
            @include('frontend.formone.ajaxincludes.cardyes')
            @include('frontend.formone.ajaxincludes.cardno')  
        @endif
    </div>
</div>
<script>
    $( document ).ready(function() {
        var divList = $(".listing-item");
        divList.sort(function(a, b){
            return $(a).data("listing-price")-$(b).data("listing-price")
        });
        $("#main").html(divList);
    });
    function slideadditionaltravelers(id) {
        var text = $('#changeshowtoless'+id).text();
        if(text == ' Show Details')
        {
            $('#changeshowtoless'+id).html('<i class="fa fa-minus-circle colorblue"></i> Hide Details');
        }else{
            $('#changeshowtoless'+id).html('<i class="fa fa-plus-circle colorblue"></i> Show Details');
        }
        $(".hoverdetails_"+id).slideToggle();
    }
    function comparetest(){
        var pids = [];
        var price = [];
        var $checkboxes = jQuery('.compare input[type="checkbox"]');
        $checkboxes.change(function(e){
            console.log('ok');
            var pid =  jQuery(this).attr('data-pid');
            var product_id =  jQuery(this).attr('data-productid');
            var price_plan = jQuery(this).val();
            $checkboxes.attr("disabled", false);
            var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
            console.log(countCheckedCheckboxes);
            if (countCheckedCheckboxes == 1){
                jQuery('.compare_header_top').show();
                jQuery('.two_select').hide();
                jQuery('.one_select').show();
            }else if(countCheckedCheckboxes == 2 || countCheckedCheckboxes == 3){
                jQuery('.compare_header_top').show();
                jQuery('.two_select').show();
                jQuery('.one_select').hide();
            }else if(countCheckedCheckboxes >= 4){
                jQuery('.compare_header_top').show();
                jQuery('.two_select').show();
                jQuery('.one_select').hide();
                $checkboxes.attr("disabled", true);
                $checkboxes.filter(':checked').attr("disabled", false);
            }
            else{
                jQuery('.compare_header_top').hide();
            }
            if (jQuery(this).is(":checked")== false) {
                 pids.splice(pids.indexOf(pid), 1);
                 price.splice(price.indexOf(price_plan), 1);
            }else{
                pids.push(pid);
                price.push(price_plan);
           }
            var url = window.location.href; 
            var arr=url.split('?')[1];
            var slider1 = localStorage.getItem("default_value");
            var slider2 = localStorage.getItem("price_value");
            
            jQuery("#new_window").click(function(){
                var planId = jQuery.unique(pids); 
                var main_price = jQuery.unique(price);
                var compareUrl = "{{ url('compareplans') }}?email={{$request->savers_email}}&product_id=" + product_id + '&ids=' + planId + '&'+arr+'&default_value='+slider1+'&price_value='+slider2+'&rate='+main_price;
                if (compareUrl.indexOf("#") > -1) {
                    var myUrl = compareUrl.replace(/\#/g, '');
                    var newUrl = jQuery(".two_select a").prop("href",myUrl);
                }else{
                    var newUrl = jQuery(".two_select a").prop("href",compareUrl);
                }
                var newwindow = window.open($(this).prop("href"), '', 'height=800,width=1024');
                if (window.focus) {newwindow.focus()}
                return false;   
            });

        });
        jQuery("#clear").click(function(){
          $(".hidden1").prop("checked", false);
          $(".hidden1").prop("disabled", false);
          $(".two_select a").removeAttr("href");
          pids = [];
          price = [];
          jQuery('.compare_header_top').hide();
       });
    }
</script>
<style>
    .compare_header_top {
        background: rgb(249, 249, 249) none repeat scroll 0% 0%;
        padding: 10px;
        position: fixed;
        top: 88px;
        border-radius: 20px;
        width: 87%;
        display: none;
    }
</style>
<div class="compare_header_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
            <h3 style="margin-bottom: 10px;font-weight: bold;">Select & Compare Plans</h3>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="one_select">
                   <i class="fa fa-warning text-warning"></i> Select one more plan to compare
                </div>
                <div class="two_select">
                    <a href="#" class="btn btn-primary" id="new_window"><i class="fa fa-server"></i> Compare</a>
                    <i class="icon"></i>
                    <a href="#"  class="btn btn-default" id="clear"><i class="fa fa-refresh"></i> Clear all</a>
                </div>
            </div>
        </div>
    </div>
</div>