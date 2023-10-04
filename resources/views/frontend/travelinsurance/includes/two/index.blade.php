<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayouttwo.css') }}">
<style type="text/css">
    .fa-database{
        color: #1bbc9b;
    }
</style>
<script>
    <?php
    $ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
    ?>
    var Slider_Values = [<?php
    $d = 0;
    $havethousand = 'no';
    foreach ($ded as $r) {
        $d++;
        echo $dedivalue = $r->deductible1;
        if ($d < count($ded)) {
            echo ', ';
        }
        if ($dedivalue == 1000) {
            $havethousand = 'yes';
        }
    } ?>];
    <?php if($havethousand == 'yes'){?>
    var dValue = Slider_Values.indexOf(1000);
    <?php } else { ?>
    var dValue = Slider_Values[0];
    <?php } ?>
    if (dValue == '-1') {
        dValue = '0';
    }
    $(function() {
        $("#slider").slider({
            range: "min",
            min: 0,
            max: Slider_Values.length - 1,
            step: 1,
            value: dValue,
            slide: function(event, ui) {
                $('#coverage_deductible').text(Slider_Values[ui.value]);
                //alert(Slider_Values.length);
                for (i = 0; i < Slider_Values.length; i++) {
                    var group = Slider_Values[i];
                    $('.deductable-' + group).css('display', 'none');
                }
                $('.deductable-' + Slider_Values[ui.value]).css('display', 'flex');
                $("#coverage_deductible").val("$" + Slider_Values[ui.value]);


                var uniqueClasses = {};
                $('#listprices .pricearray').each(function () {
                    var currentClass = $(this).attr('class');
                    if (!uniqueClasses.hasOwnProperty(currentClass)) {
                        uniqueClasses[currentClass] = true;
                    } else {
                        $(this).hide();
                    }
                });


            }
        });
    });

    <?php
    $sum = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
    ?>
    //Sum Insured Slider
    var SliderValues = [0, <?php
    $s = 0;
    foreach ($sum as $r) {
        $s++;
        echo $sumamount = $r->sum_insured;
        if ($s < count($sum)) {
            echo ', ';
        }
    } ?>];
    var iValue = SliderValues.indexOf({{ $request->sum_insured2 }});
    $(function() {
        $("#sum_slider_for_price_layout").slider({
            range: "min",
            min: 0,
            max: SliderValues.length - 1,
            step: 1,
            value: iValue,
            slide: function(event, ui) {
                $('#coverage_amount1').text(SliderValues[ui.value]);
                // alert(SliderValues.length);
                for (i = 0; i < SliderValues.length; i++) {
                    var group = SliderValues[i];
                    $('.coverage-amt-' + group).hide();
                }
                $('.coverage-amt-' + SliderValues[ui.value]).show();
                $("#coverage_amount1").val("$" + SliderValues[ui.value]);


                var uniqueClasses = {};
                $('#listprices .pricearray').each(function () {
                    var currentClass = $(this).attr('class');
                    if (!uniqueClasses.hasOwnProperty(currentClass)) {
                        uniqueClasses[currentClass] = true;
                    } else {
                        $(this).hide();
                    }
                });
            }
        });

    });
</script>


<div class="mt-3 dh-listings container" id="dh-get-quote">
    <?php
    //  error_reporting(E_ERROR);
    $startdate = $request->departure_date;
    $enddate = $request->return_date;
    
    $dStart = new DateTime($request->departure_date);
    $dEnd = new DateTime($request->return_date);
    $dDiff = $dStart->diff($dEnd);
    $dDiff->format('%R'); // use for point out relation: smaller/greater
    $num_of_days = $dDiff->days + 1;
    if ($num_of_days > 365 || $num_of_days == 364) {
        $num_of_days = 365;
    }
    
    //$num_of_days = 365;
    $prosupervisa = $data->pro_supervisa;
    $product_name = $data->pro_name;
    
    if ($prosupervisa == '1') {
        $supervisa = 'yes';
        $num_of_days = 365;
    } else {
        $supervisa = 'no';
    }
    
    $enable_family_plan = !empty($request->familyplan) ? true : false;
    $enable_pre_existing = !empty($request->pre_existing) ? true : false;
    
    if ($request->familyplan_temp == 'yes') {
        $enable_family_plan = true;
    } else {
        $enable_family_plan = false;
    }
    if ($request->pre_existing == 'Yes') {
        $enable_pre_existing = true;
    } else {
        $enable_pre_existing = false;
    }
    
    $oldest_traveller = 0;
    $family_plan = false;
    
    $years = [];
    
    foreach ($request->years as $r) {
        if ($r) {
            $bday = new DateTime($r); // Your date of birth
            $today = new Datetime(date('m.d.y'));
            $diff = $today->diff($bday);
            $years[] = $diff->y;
        }
    }
    
    if (is_array($years)) {
        $ages_array = array_filter($years);
        $younger_age = min($ages_array);
        $elder_age = max($ages_array);
        $number_travelers = count($ages_array);
    } else {
        $younger_age = 0;
        $elder_age = 0;
        $number_travelers = 1;
    }
    
    if ($request->familyplan_temp == 'yes') {
        if ($number_travelers >= 2 && ($elder_age >= 21 && $elder_age <= 58) && $younger_age <= 21) {
            $family_plan = 'yes';
        } else {
            $family_plan = 'no';
        }
    } else {
        $family_plan = 'no';
    }
    
    if ($request->familyplan_temp == 'yes' && $family_plan == 'no') {
        //echo "<script>window.location='?action=not_eligible';</script>";
    }
    ?>
    <div class="">
        <div class="col-md-12 visible-xs">
            <button type="button" class="btn" onclick="changedisplay()"
                style="display: block;width: 100%;background: #FFF !important;color: #333 !important;padding: 10px;"><i
                    class="fa fa-gear"></i> Change Coverage</button>
        </div>
        <input type="hidden" id="change_display" name="change_display" value="0">
        <script>
            function changedisplay() {
                var displayvalue = document.getElementById('change_display').value;
                if (displayvalue == '0') {
                    $('.filterdiv').attr('style', 'display: block !important');
                    document.getElementById('change_display').value = '1';
                } else {
                    $('.filterdiv').attr('style', 'display: none !important');
                    document.getElementById('change_display').value = '0';
                }
            }
        </script>
        <div class="row  filterdiv hidden-xs mt-3"
            style="border: 1px solid #ddd;text-align: center;padding-top: 10px;margin-bottom:20px;border-top:4px solid #ddd; background:#FFF; ">
            <div class="col-md-2 hidden-xs"
                style="padding:10px; font-size:21px; font-weight:bold; color:#444;padding-top: 25px;">
                <i class="fa fa-filter"></i> Filter Results
            </div>
            <div class="col-md-3 adjust-quoto" style="border:none;">
                <h4 class="deductible"
                    style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">
                    Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible" value="$<?php if ($havethousand == 'no') {
                            echo '0';
                        } else {
                            echo '1000';
                        } ?>"
                        style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;">
                </h4>
                <div id="slider"
                    style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;">
                </div>
            </div>
            <div class="col-md-3 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
                <h4 class="coverage"
                    style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">
                    Coverage: <input type="text" id="coverage_amount1" name="coverage_amount"
                        value="$<?php echo $request->sum_insured2; ?>"
                        style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 115px;">
                </h4>
                <div id="sum_slider_for_price_layout" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;">
                </div>
            </div>
            <div class="col-md-3 quote_reference mobile-deisply-none" style="font-size:15px;">
                <h3 style="font-weight:bold; margin:0; padding:0;">Quote Reference</h3>
                <span style="color:#C00;">
                    <?php echo $quoteNumber; ?>
                </span><br />
                <small style="font-size: 100%;font-weight: 600;"><i class="fa fa-calendar"></i>
                    <?php echo $request->departure_date . '-' . $request->return_date; ?>
                </small>
            </div>
        </div>
        
        @if (in_array('yes', $request->pre_existing))
            @include('frontend.travelinsurance.includes.two.yes')
        @else
            @include('frontend.travelinsurance.includes.two.yes')
            @include('frontend.travelinsurance.includes.two.no')
        @endif

        <!--    row end-->
    </div>




<script>
jQuery(function($) {
    var divList = $(".listing-item");
    divList.sort(function(a, b) {
        return $(a).data("listing-price") - $(b).data("listing-price")
    });
    $("#listprices").html(divList);
})
</script>
<script>
var buynow_selected = "";
var info_box = "";
jQuery(".dh-toggle").click(function() {
    if (info_box != "") {
        jQuery(".dh-toggle-show-hide-" + info_box).slideToggle();
    }

    if (jQuery(this).data('value') == info_box) {
        info_box = "";
        return false;
    }

    if (buynow_selected != "") {
        jQuery(".buynow-btn-" + buynow_selected).slideToggle();
        buynow_selected = "";
    }

    var id = jQuery(this).data('value');
    info_box = id;
    jQuery(".dh-toggle-show-hide-" + id).slideToggle();
    console.log(".dh-toggle-show-hide-" + id);
});
jQuery(".buynow-btn").click(function() {
    if (buynow_selected != "") {
        jQuery(".buynow-btn-" + buynow_selected).slideToggle();
    }

    if (jQuery(this).data('value') == buynow_selected) {
        buynow_selected = "";
        return false;
    }

    if (info_box != "") {
        jQuery(".dh-toggle-show-hide-" + info_box).slideToggle();
        info_box = "";
    }

    var id = jQuery(this).data('value');
    buynow_selected = id;
    jQuery(".buynow-btn-" + id).slideToggle();
});
jQuery(function() {

    var visiblePlans = jQuery(".plan-details:visible").length;
    var textToShow = "Great! We found " + visiblePlans + " for you.";
    if (visiblePlans > 0) {
        // jQuery(".num-of-quotes").show();
        jQuery(".num-of-quotes").text(textToShow);
    } else {
        jQuery(".num-of-quotes").hide();
    }
});
function showdetails(id)
{
    $('.dh-toggle-show-hide-'+id).slideToggle();
}
function showmore(id) {
    var text = $('#showmore' + id).text();
    if (text == ' More Details') {
        $('#showmore' + id).html('<i class="fa fa-minus"></i> Hide Details');
    } else {
        $('#showmore' + id).html('<i class="fa fa-plus"></i> More Details');
    }
}
$(document).ready(function () {
    var uniqueClasses = {};
    $('#listprices .pricearray').each(function () {
        var currentClass = $(this).attr('class');
        if (!uniqueClasses.hasOwnProperty(currentClass)) {
            uniqueClasses[currentClass] = true;
        } else {
            $(this).hide();
        }
    });
});
</script>