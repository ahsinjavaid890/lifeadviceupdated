<style>
    .ui-slider-horizontal .ui-slider-range {

        background: -webkit-linear-gradient(0deg, #2b3481, #ff2600 95%) !important;
    }
    .ui-state-active {
        background: #12b48b !important;
        border: #12b48b !important;
        text-align: center !important;
        color: white !important;
    }
    .quotationscards{
        max-width: 100% !important;
    }
    .checkboxbtn label:after, .checkboxbtn label:before{
        right: 5px !important;
        top: 5px !important;
    }
    @media (min-width: 1200px){
.container-layout-two{
    max-width: 1170px;
}
}
.quteform {
    border: 1px solid #ddd;
    border-radius: 20px;
    padding: 25px;
    border: 1px solid #ddd;
    border-radius: 20px;
    padding: 25px;
    background-color: white !important;
    box-shadow: 2px 2px 10px #dddddd9e;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}
.mydata h1 {
    color: transparent;
    background: -webkit-linear-gradient(0deg, #2b3481, #2b3481 95%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 25px;
    text-transform: capitalize !important;
    text-align: center;
}
.radiobtn {
    position: relative;
    display: block;
    margin: 10px 0;
}

.radiobtn label {
    display: block;
    color: #444;
    border-radius: 5px;
    padding: 5px 20px;
    background: #fff;
    border: 2px solid #ddd;
    margin-bottom: 5px;
    cursor: pointer;
}

.radiobtn label:after, .radiobtn label:before {
    content: "";
    position: absolute;
    right: 25px;
    top: 11px;
    width: 20px;
    height: 20px;
    border-radius: 3px;
    background: #2b3481;
}

.radiobtn label:before {
    background: transparent;
    transition: 0.1s width cubic-bezier(0.075, 0.82, 0.165, 1) 0s, 0.3s height cubic-bezier(0.075, 0.82, 0.165, 2) 0.1s;
    z-index: 2;
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: 13px;
    background-position: center;
    width: 0;
    height: 0;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNS4zIDEzLjIiPiAgPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE0LjcuOGwtLjQtLjRhMS43IDEuNyAwIDAgMC0yLjMuMUw1LjIgOC4yIDMgNi40YTEuNyAxLjcgMCAwIDAtMi4zLjFMLjQgN2ExLjcgMS43IDAgMCAwIC4xIDIuM2wzLjggMy41YTEuNyAxLjcgMCAwIDAgMi40LS4xTDE1IDMuMWExLjcgMS43IDAgMCAwLS4yLTIuM3oiIGRhdGEtbmFtZT0iUGZhZCA0Ii8+PC9zdmc+);
}

.radiobtn input[type="radio"] {
    display: none;
    position: absolute;
    width: 100%;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.radiobtn input[type="radio"]:checked + label {
    -webkit-animation-name: blink;
    animation-name: blink;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    border-color: #2b3481;
    background: #fff;
    box-shadow: 2px 12px 10px rgba(186, 185, 185, 0.20)
}

.radiobtn input[type="radio"]:checked + label:after {
    background: #2b3481;
}

.radiobtn input[type="radio"]:checked + label:before {
    width: 20px;
    height: 20px;
}
.card-number {
    border: 2px solid #e2e6e7;
    padding: 0.375rem 0.75rem;
    width: 100%;
    border-radius: 5px;
    height: 42px;
}
.input-group[class*=col-] {
    float: none;
}
.quteform label {
    width: 100%;
    margin-bottom: 2px;
}
.quteform h6, .quteform h2 {
    color: #2b3481;
    margin-bottom: 5px;
    font-size: 17px;
}
.btn-style-four {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 18px;
    color: #fff;
    display: inline-block;
    vertical-align: middle;
    padding: 0.5px 29.5px;
    height: 42px;
    cursor: pointer;
    border-radius: 5px;
    box-shadow: 0px 20px 30px -10px rgba(211, 87, 251, 0.50);
    transition: all 2500ms ease;
    background-color: #2b3481;
    border: 1px solid #2b3481;
}
.input-group-addon {
    width: 15% !important;
    font-size: 14px !important;
    padding: 0.5rem 0.75rem !important;
}
.input-group-addon {
    padding: 0rem 0rem !important;
}
.input-group-addon {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #495057;
    text-align: center;
    margin-left: -2px;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}
.input-append.date .add-on i, .input-prepend.date .add-on i {
    width: 100% !important;
    height: 100% !important;
    padding: 12px;
    border: 2px solid #cfd9e8;
    background-color: white;
    border-left: 0px;
    border-top-right-radius: 5px !important;
    border-bottom-right-radius: 5px !important;
}

.subpage-full-details {
    padding: 10px 0;
/*    background: #fff !important;*/
    background-repeat: no-repeat;
    background-size: cover !important;
    background-attachment: fixed !important;
}
.output-info-tabs .tab-btns {
    position: relative;
    display: block;
    border-bottom: 2px solid #f1f1f1;
}
.output-info-tabs .tab-btns li {
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
    margin: 0px 22px;
    cursor: pointer;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    color: #503c57;
    text-transform: uppercase;
}
.output-info-tabs .tab-btns li:before {
    position: absolute;
    content: '';
    background: #ff3d3d;
    width: 0%;
    height: 2px;
    left: 0px;
    top: -12px;
}
@media screen and (min-width: 992px)
{
    select#deductiblemob, .deductiblemob {
        display: none!important;
    }
}

.result-blk .tab-list-wrap .row {
    margin-left: 0;
    margin-right: 0;
    width: 100%;
    padding: 0 15px;
}
.tab-list-wrap li {
    border-bottom: 1px solid #ddd;
    padding: 0;
    transition: all 2500ms ease;
    background: linear-gradient(90deg, #dddddd70, #dddddd70 51%, #c5c4c4) var(--x, 0)/200%;
}
.list-head {
    background: #2b3481 !important;
    padding: 6px 0;
    color: #fff;
}
.listing-item-new{
    display: block;
    border-bottom: 1px solid #ddd;
    padding: 0;
    transition: all 2500ms ease;
    background: linear-gradient(90deg, #dddddd70, #dddddd70 51%, #c5c4c4) var(--x, 0)/200%;
}
.list-head {
    padding: 10px 0 !important;
    margin: 0;
}

@media only screen and (min-width: 1024px)
{
    .subpage-full-details .row {
        padding-left: 0 !important;
    }
}
.subpage-full-details .row {
    margin-left: 0;
    margin-right: 0;
    width: 100%;
    padding: 0 15px;
}
.result-blk .tab-list-wrap li .grid-list:first-child {
    padding: 10px;
}

@media (min-width: 1200px)
{
    .result-blk .tab-list-wrap .grid-list {
        text-align: center;
        max-width: 20% !important;
        display: inline-table;
        margin: auto;
        padding: 0;
        flex: initial;
    }
}

.tab-list-wrap li .fold {
    position: relative;
    text-decoration: none;
    color: #999;
    transition: all ease .5s;
}
.grid-list {
    vertical-align: middle;
    align-items: center;
    display: flex;
    color: #000;
    font-size: 14px;
    padding: 20px;
}
.list-head .col-md-2{
    text-align: center;
    display: inline-table;
    padding: 0;
    margin: auto;
    padding: 0;
    flex: initial;
    font-size: 17px;
}
.result-blk .tab-list-wrap .grid-list .common-btn {
    display: flex;
}
ul.common-btn li {
    display: inline-block !important;
}
.common-btn li {
    background: transparent !important;
}
.common-btn li {
    border: none;
    display: inline-flex;
}
.color-one-btn {
    background: #495677;
    color: #fff;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    border: 1px;
}
.btn-wrap {
    background: #666;
    color: #fff;
    padding: 0 10px 2px;
    min-width: 100px;
    display: inline-block;
    border-radius: 30px;
    float: left;
    margin-right: 5px;
    font-size: 14px;
}
.common-btn li a {
    min-width: 100px;
    text-align: center;
}
.color-three-btn {
    background: #2b3481;
    color: #fff;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
}
.checkboxbtn {
    position: relative;
    display: block;
}
.checkboxbtn label {
    display: block;
    color: #444;
    border-radius: 5px;
    padding: 5px 20px;
    background: #fff;
    border: 2px solid #ddd;
    margin-bottom: 5px;
    cursor: pointer;
}
.checkboxbtn label:before {
    background: transparent;
    -webkit-transition: 0.1s width cubic-bezier(0.075, 0.82, 0.165, 1) 0s, 0.3s height cubic-bezier(0.075, 0.82, 0.165, 2) 0.1s;
    transition: 0.1s width cubic-bezier(0.075, 0.82, 0.165, 1) 0s, 0.3s height cubic-bezier(0.075, 0.82, 0.165, 2) 0.1s;
    z-index: 2;
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: 13px;
    background-position: center;
    width: 0;
    height: 0;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNS4zIDEzLjIiPiAgPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE0LjcuOGwtLjQtLjRhMS43IDEuNyAwIDAgMC0yLjMuMUw1LjIgOC4yIDMgNi40YTEuNyAxLjcgMCAwIDAtMi4zLjFMLjQgN2ExLjcgMS43IDAgMCAwIC4xIDIuM2wzLjggMy41YTEuNyAxLjcgMCAwIDAgMi40LS4xTDE1IDMuMWExLjcgMS43IDAgMCAwLS4yLTIuM3oiIGRhdGEtbmFtZT0iUGZhZCA0Ii8+PC9zdmc+);
}
.checkboxbtn label:after, .checkboxbtn label:before {
    content: "";
    position: absolute;
    right: 25px;
    top: 11px;
    width: 20px;
    height: 20px;
    border-radius: 3px;
    background: #2b3481;
}
.checkboxbtn label:after, .checkboxbtn label:before {
    content: "";
    position: absolute;
    right: 25px;
    top: 11px;
    width: 20px;
    height: 20px;
    border-radius: 3px;
    background: #2b3481;
}
.result-blk .tab-list-wrap .list-head .col-md-2, .result-blk .tab-list-wrap .list-head .col-md-4 {
    max-width: 20% !important;
    text-align: center;
    display: inline-table;
    padding: 0;
    margin: auto;
    padding: 0;
    flex: initial;
}
.fld-mt {
    margin-top: 2.1rem !important;
    text-align: center;
}
.fld-mt p {
    background: #2b3481;
    border-radius: 100px;
    color: #fff;
}
.input-group {
    margin-bottom: 25px;
}
.tab-list-wrap li:hover {
    --x: 100%;
}

.tab-img img {
    width: 80%;
}

.ui-datepicker-month{
    border-right: 0px;
    border: 2px solid #e2e6e7;
    padding: 0.375rem 0.75rem;
    width: 100%;
    border-radius: 5px;
    height: 42px;
}
.ui-datepicker-year{
    border-left:0px;
    border: 2px solid #e2e6e7;
    padding: 0.375rem 0.75rem;
    width: 100%;
    border-radius: 5px;
    height: 42px;
}
.inputdate{
    border: 2px solid #e2e6e7;
    padding: 0.375rem 0.75rem;
    width: 100%;
    border-radius: 5px !important;
    height: 42px;
    border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    background-color: white !important;
    border-right: 0px;
}

@media only screen and (max-width:600px){
    .container-layout-two{
        padding-left: 0px;
        padding-right: 0px;
        border-radius: 0px;
    }
    .fld-mt{
        display: none;
    }
    .container-layout-two #quoteform{
        border-radius: 0px;
    }
    .svicmai_resultblk{
        padding-top: 0px !important;
    }
    .input-group{
        margin-bottom: 5px;
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
    .radiobtn{
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
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
            <div class="row" style="padding-right: 0px;">
                <div class="col-lg-12 col-md-12 col-sm-12 tabs-column wow slideInDown animated animated"
                    data-wow-delay="100ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;padding-left: 0px;padding-right: 0px;">
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
                                            @include('frontend.travelinsurance.includes.ten.yes')
                                        @else
                                            @include('frontend.travelinsurance.includes.ten.yes')
                                            @include('frontend.travelinsurance.includes.ten.no')
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
    function showdetails(id)
    {
        $('.dh-toggle-show-hide-'+id).slideToggle();
    }
    $( document ).ready(function() {
         var divList = $(".listing-item-new");
         divList.sort(function(a, b){
             return $(a).data("listing-price")-$(b).data("listing-price")
         });
         // $("#results_search").html(divList);
     });
</script>
