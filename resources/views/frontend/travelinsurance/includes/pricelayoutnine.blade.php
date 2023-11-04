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
<script>
    @php
        $ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
    @endphp
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

    @php
        $sum = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
    @endphp

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

                $('#coverageprice').val(SliderValues[ui.value]);
                $('#sum_insured2').val(SliderValues[ui.value]);

            }
        });

    });
</script>
<div class="row">
    <div class="col-md-4">
        <div class="card qoute-price-card mb-3 left_qoute_card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 display-none-on-mobile display-none-on-tablet">
                        <h4>Quote Reference : <span style="color: #2b3481;"><?php echo $quoteNumber; ?></span></h4>
                    </div>
                    <div class="col-md-12 adjust-quoto" style="border:none;">
                        <h4 class="deductible"
                            style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">
                            Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible"
                                value="$<?php if ($havethousand == 'no') {
                                    echo '0';
                                } else {
                                    echo '1000';
                                } ?>"
                                style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;">
                        </h4>

                        <div class="mt-4" id="slider"
                            style="border: 1px solid #c5c5c5;padding: 0px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;">
                        </div>
                    </div>
                    <div class="col-md-12 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
                        <h4 class="coverage"
                            style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">
                            Coverage: <input type="text" id="coverage_amount" name="coverage_amount"
                                value="$<?php echo $request->sum_insured2; ?>"
                                style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;">
                        </h4>
                        <div class="mt-4" id="sum_slider"
                            style="border: 1px solid #c5c5c5;padding: 0px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card pricegurrantee qoute-price-card mb-3 pricegurrantecard display-none-on-tablet display-none-on-mobile">
            <div class="card-widget card-widget-price-match">
                <div class="card-header">
                    <div class="icon icon-price-match"></div>
                    <div class="card-header__label">Price <br data-v-59a9f311="">Guarantee</div>
                </div>
                <div class="card-body">
                    <p class="text-secondary-color body-text-5"> Insurance rates are regulated by law. You can't find
                        the same insurance plan for a lower price anywhere else. </p>
                </div>
            </div>
        </div>
    </div>
    <div id="main" class="col-md-8">
        @if (in_array('yes', $request->pre_existing))
            @include('frontend.formone.ajaxincludes.cardyes')
        @else
            @include('frontend.formone.ajaxincludes.cardyes')
            @include('frontend.formone.ajaxincludes.cardno')
        @endif
    </div>
</div>
@php
    $rand = rand(100000000, 20000000);
@endphp
<script>
$(document).ready(function() {
    var divList = $(".listing-item");
    divList.sort(function(a, b) {
        return $(a).data("listing-price") - $(b).data("listing-price")
    });
    $("#main").html(divList);
});

function slideadditionaltravelers(id) {
    var text = $('#changeshowtoless' + id).text();
    if (text == ' Show Details') {
        $('#changeshowtoless' + id).html('<i class="fa fa-minus-circle colorblue"></i> Hide Details');
    } else {
        $('#changeshowtoless' + id).html('<i class="fa fa-plus-circle colorblue"></i> Show Details');
    }
    $(".hoverdetails_" + id).slideToggle();
}
</script>
