<style>
    .ui-slider-horizontal .ui-slider-range {

        background: -webkit-linear-gradient(0deg, #2b3481, #ff2600 95%) !important;
    }

    .ui-state-active {
        background: rgb(122, 0, 0) !important;
        border: rgb(122, 0, 0) solid 1px !important;
    }
    .quotationscards{
        max-width: 100% !important;
    }
    .checkboxbtn label:after, .checkboxbtn label:before{
        right: 5px !important;
        top: 5px !important;
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
        $("#sum_slider").slider({
            range: "min",
            min: 0,
            max: SliderValues.length - 1,
            step: 1,
            value: iValue,
            slide: function(event, ui) {
                $('#coverage_amount').text(SliderValues[ui.value]);
                //alert(SliderValues.length);
                for (i = 0; i < SliderValues.length; i++) {
                    var group = SliderValues[i];
                    $('.coverage-amt-' + group).hide();
                }
                $('.coverage-amt-' + SliderValues[ui.value]).show();
                $("#coverage_amount").val("$" + SliderValues[ui.value]);
            }
        });

    });
</script>







<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/mainlayouttwo.css') }}">
<div class="subpage-full-details  result-blk">
    <div class="">
        <div class="output-info-tabs right">
            <div class="row  filterdiv hidden-xs mt-3"
                        style="border: 1px solid #ddd;text-align: center;padding-top: 10px;margin-bottom:20px; background:#FFF; justify-content:center;align-items:center">
                        <div class="col-md-2 hidden-xs"
                            style="padding:10px; font-size:21px; font-weight:bold; color:#444;padding-top: 25px;">
                            <i class="fa fa-filter"></i> Filter Results
                        </div>
                        <div class="col-md-3 " style="border:none;">
                            <h4 class="deductible"
                                style="color:#2b3481; margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;margin-bottom: 10px;">
                                Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible"
                                    value="$<?php if ($havethousand == 'no') {
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
                        <div class="col-md-3  coverage-mobile-view" style="border-top:0px; ">
                            <h4 class="coverage"
                                style="color:#2b3481;margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;margin-bottom: 10px;">
                                Coverage: <input type="text" id="coverage_amount" name="coverage_amount"
                                    value="$<?php echo $request->sum_insured2; ?>"
                                    style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 115px;">
                            </h4>
                            <div id="sum_slider"
                                style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;">
                            </div>
                        </div>
                        <div class="col-md-3 quote_reference" style="font-size:15px;">
                            <h3 style="color:#2b3481;bold; margin:0; padding:0;">Quote Reference</h3>
                            <span style="color:#C00;"><?php echo $quoteNumber; ?></span><br />
                            <small style="font-size: 100%;font-weight: 600;"><i class="fa fa-calendar"></i>
                                <?php echo $request->departure_date . '-' . $request->return_date; ?></small>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 tabs-column wow slideInDown animated animated"
                    data-wow-delay="100ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">


                    



                    <div class="output-tab tabs-box">
                        @php
                            $ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
                        @endphp


                        <div class="tabs-content left">
                            <div class="tab clearfix" id="tab-0">
                                <div class="text">
                                    <ul class="tab-list-wrap">
                                        <li class="row list-head">
                                            <div class="col-md-2">Company</div>
                                            <div class="col-md-2">Deductible</div>
                                            <div class="col-md-2">Rate</div>
                                            <div class="col-md-4">More</div>
                                            <div class="col-md-2">Add to Compare</div>
                                        </li>
                                        @if (in_array('yes', $request->pre_existing))
                                            @include('frontend.formone.ajaxlayouttwo.yes')
                                        @else
                                            @include('frontend.formone.ajaxlayouttwo.yes')
                                            @include('frontend.formone.ajaxlayouttwo.no')
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( document ).ready(function() {
         var divList = $(".listing-item-new");
         divList.sort(function(a, b){
             return $(a).data("listing-price")-$(b).data("listing-price")
         });
         $("#results_search").html(divList);
     });
</script>
