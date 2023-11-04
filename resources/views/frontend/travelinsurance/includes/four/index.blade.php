<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutfour.css') }}">
<script>
    <?php
$ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
?>
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
    $("#sum_slider1").slider({
        range: "min",
        min: 0,
        max: SliderValues.length - 1,
        step: 1,
        value: iValue,
        slide: function (event, ui) {
            $('#coverage_amount1').text(SliderValues[ui.value]);
            //alert(SliderValues.length);
            for (i = 0; i < SliderValues.length; i++) {
                var group = SliderValues[i];
                $('.coverage-amt-'+group).hide();
            }
            $('.coverage-amt-'+SliderValues[ui.value]).show();
            $( "#coverage_amount1" ).val( "$" + SliderValues[ui.value] );
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
<style type="text/css">
.nextbtn{
    background:#1bbc9b;
    color:#fff;
    padding:10px 60px
}
.nextbtn:hover{
    background:#040e1f;
    color:#fff
}
.nextbtn:hover i{
    color:#82b440
}
.graybox{
    background:#fbfbfb;
    padding:12px 6px 4px 15px;
    border-radius:50px;
    border:1px solid #eee
}
.dh-listings hr,.footer p{
    margin-bottom:10px!important
}
@media only screen and (max-width:600px){
    .tabscontent .fields{
        background:0 0;
        border:none;
        box-shadow:none;
        padding:0
    }
    .tabscontent{
        background:#fff
    }
}
.testshortcode,.visible-xs{
    display:none
}
.dh-toggle-show-hide-216,.dh-toggle-show-hide-217{
    z-index:2
}
.tabshead{
    padding-top:37px!important
}
.main-content .container{
    width:100%
}
.dh-listings b{
    font-size:15px
}
.dh-listings hr{
    border:1px solid #d0d0d0;
    margin-top:10px!important
}
.dh-listings ul{
    font-size:12px
}
.dh-listings tr td,.dh-listings tr th{
    border:0 solid #eee;
    border-top:0!important
}
.main-content{
    background:#f3f5f9!important
}
.plan-details,.side-bar{
    background:#fff;
    margin:1rem 0;
    position:relative;
    -webkit-box-shadow:0 1px 2px 0 rgba(34,36,38,.22);
    box-shadow:0 5px 5px 0 rgba(34,36,38,.22);
    padding:1em;
    border-radius:.25rem;
    border:1px solid rgba(34,36,38,.22)
}
#dh-get-quote input,#dh-get-quote select{
    height:51px
}
.side-bar{
    -webkit-box-shadow:0 1px 2px 0 rgba(34,36,38,.22);
    box-shadow:0 5px 5px 0 rgba(34,36,38,.22);
    padding:24px 0;
    border-radius:.25rem;
    border:1px solid rgba(34,36,38,.22);
    height:35%!important
}
.adjust-quoto h2{
    color:#464644;
    font-size:26px;
    font-weight:400
}
.adjust-quoto h4{
    color:#8e939c;
    font-size:22px;
    font-weight:400
}
.adjust-quoto span{
    font-size:20px;
    border-radius:50px!important;
    border:5px solid #000!important;
    background:#00c2a2!important;
    cursor:pointer!important
}
.quote_reference{
    padding:10px 15px;
    font-size:20px
}
.sub.header,.submit-btn{
    font-size:15px;
    text-align:center
}
#slider{
    margin:25px 0
}
.adjust-quoto{
    margin-bottom:40px
}
button.buynow-btn{
    float:right;
    min-width:150px;
    background:#1fbd9d;
    border-radius:5px
}
.compare.center.aligned.middle.aligned.column{
    position:relative
}
.ui.checkbox.large.nopad{
    margin:auto;
    position:relative;
    top:initial;
    left:initial;
    display:table
}
.ui.checkbox.large.nopad input{
    position:relative;
    height:100%!important;
    margin:10px 0;
    width:100%!important;
    z-index:1;
    opacity:.1
}
#listprices{
    padding-right:15px!important;
    padding-left:15px!important
}
.ui.checkbox.large.nopad label{
    height:100%;
    width:100%;
    position:absolute;
    border:1px solid #c5c5c5;
    padding:0;
    top:0;
    left:0;
    text-align:center;
    font-size:18px;
    text-transform:uppercase;
    font-weight:100;
    border-radius:5px
}
.sub.header{
    font-weight:400
}
.ui.checkbox.large.nopad input:checked+label:before{
    content:"\f00c";
    font-family:fontAwesome;
    font-size:26px
}
sup.superior{
    top:-6px;
    font-size:13px
}
@media screen and (max-width:767px){
    .hidden-md,div#demo{
        display:none
    }
    .side-bar{
        padding:10px;
        margin-left:15px;
        margin-right:15px
    }
    .ddd.agaya{
        display:block!important
    }
    .row.plan-details{
        display:block
    }
    .ui.checkbox.large.nopad label{
        padding:11px
    }
    button.buynow-btn{
        float:right;
        min-width:100%;
        background:#1fbd9d;
        border-radius:5px;
        font-size:18px;
        font-weight:100
    }
    .ui.center.aligned.header{
        position:relative
    }
    .ui.checkbox.large.nopad{
        margin:0 auto auto;
        position:relative;
        top:initial;
        left:initial;
        display:table;
        width:100%;
        height:50px
    }
    .sub.header{
        position:absolute;
        top:0;
        width:100%;
        text-align:center;
        padding:14px
    }
    .gfdgd,.mob-img{
        height:80px
    }
    .ui.checkbox.large.nopad input:checked+label:before{
        display:none;
        font-family:fontAwesome;
        font-size:26px
    }
    .ui.checkbox.large.nopad input:checked+label{
        background:#999;
        color:#fff
    }
}
h2.chng_amt.baaababa{
    font-size:1rem;
    font-weight:500;
    text-align:center;
    margin:0
}
.chng_amt img{
    max-width:15px;
    vertical-align:middle;
    margin-right:6px
}
#dh-get-quote select{
    height:51px;
    display:none
}
@media screen and (min-width:768px){
    h2.chng_amt.baaababa{
        display:none
    }
}
@media screen and (max-width:425px){
    .gfdgd h2{
        font-size:32px
    }
}
@media screen and (max-width:374px){
    .gfdgd h2{
        font-size:26px
    }
    button.buynow-btn{
        font-size:14px;
        padding:14px 15px
    }
    .gfdgd,.mob-img{
        height:100px
    }
    .ui.checkbox.large.nopad label{
        padding:11px 5px
    }
    .one_select .btn-primary{
        padding:12px 15px
    }
    .compare_header_top{
        padding:15px
    }
}
@media only screen and (min-width:768px){
    .row.plan-details{
        display:block;
        flex-wrap:wrap;
        align-items:center;
        padding:20px 10px
    }
    .entry-blog,.entry-content,.main-content{
        padding:0!important
    }
    .insurance_form{
        padding-right:0!important;
        padding-left:0!important;
        background-image:none!important
    }
    .side-bar{
        box-shadow:none!important;
        left:0!important;
        bottom:0!important;
        top:-5px!important
    }
    .right-bar-content{
        min-height:400px!important;
        float:right!important
    }
}
@media only screen and (max-width:768px){
    #bg-insurance-form{
        background-image:none!important
    }
    .side-bar{
        margin:0!important;
        box-shadow:none!important;
        top:0!important
    }
    .entry-blog,.entry-content,.main-content{
        padding:0!important
    }
}
.submit-btn{
    background: #2b3481;
    border: none;
    box-shadow: none;
    color: #fff;
    font-family: arial;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    border-radius: 5px;
    text-transform: none;
    width: 100%;
    padding: 10px 15px;
    height: 40px;
    margin-top: 5px;
}
.submit-btn:hover{
    background:#262566
}
.ui-slider-horizontal .ui-slider-range{
    background:#44bc9b!important
}
.container{
    padding-right:0!important;
    padding-left:0!important
}
.row .plan-details{
    display:flex;
    border:1px solid silver;
    margin-top:-5px!important;
    margin-bottom:15px!important;
    padding:5px 5px;
    position:relative;
    background:#fff;
    -webkit-box-shadow:0 1px 2px 0 rgba(34,36,38,.22);
    box-shadow:0 5px 5px 0 rgba(34,36,38,.22);
    border-radius:.2rem
}
.row.plan-details{
    align-items:flex-start
}
 .comparebutton{
     border:none;
     box-shadow:none;
     color:#fff;
     font-family:arial;
     font-weight:700;
     text-decoration:none;
     cursor:pointer;
     border-radius:5px;
     text-transform:none;
     width:100%;
     padding:5px;
     background: #12b48b;
}
 .comparebutton i{
     color: white !important;
}
 .compare .fa-exclamation-circle{
     cursor:pointer;
     position: absolute;
     top: -5px;
     left: -10px;
     font-size: 20px;
     color: #2b3481;
}
 @media only screen and (max-width:600px){
     .compare .fa-exclamation-circle{
         top: 5px !important;
    }
     #listprices{
         padding-right: 0px!important;
         padding-left: 0px!important;
    }
}

@media only screen and (max-width:600px){
    .mobile-deisply-none{
        display:none!important
    }
    .mobile-deisply-show{
        display: block !important;
    }
    .mobile-displayflex{
        display: flex;
    }
    .mobilewidth{
        width: 50%;
    }
}


</style>
<div class="dh-listings " id="dh-get-quote">
    <?php
//  error_reporting(E_ERROR);
$startdate = $request->departure_date;
$enddate = $request->return_date;

$dStart = new DateTime($request->departure_date);
$dEnd  = new DateTime($request->return_date);
$dDiff = $dStart->diff($dEnd);
$dDiff->format('%R'); // use for point out relation: smaller/greater
$num_of_days = $dDiff->days + 1;
if($num_of_days > 365 || $num_of_days == 364){ $num_of_days = 365; }

//$num_of_days = 365;
$prosupervisa = $data->pro_supervisa;
$product_name = $data->pro_name;

if($prosupervisa == '1'){
$supervisa = 'yes';
$num_of_days = 365;
} else {
$supervisa = 'no';
}

    $enable_family_plan = (!empty($request->familyplan)) ? true : false;
    $enable_pre_existing = (!empty($request->pre_existing)) ? true : false;

    if($request->familyplan_temp == 'yes'){
    $enable_family_plan = true;
    } else {
    $enable_family_plan = false;
    }
    if($request->pre_existing == 'Yes'){
    $enable_pre_existing = true;
    } else {
    $enable_pre_existing = false;
    }

    $oldest_traveller = 0;
    $family_plan      = false;
 
    $years = array();

foreach ($request->years as $r) {
    if($r)
    {
        $bday = new DateTime($r); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $diff = $today->diff($bday);
        $years[] =  $diff->y;
    }
}


if (is_array($years)){
    $ages_array = array_filter($years);
    $younger_age = min($ages_array);
    $elder_age = max($ages_array);
    $number_travelers = count($ages_array);
}
else {
    $younger_age = 0;
    $elder_age = 0;
    $number_travelers = 1;
}

if($request->familyplan_temp == 'yes'){
    if($number_travelers >= 2 && ($elder_age >= 21 && $elder_age <=58) && ($younger_age <=21)){
        $family_plan = 'yes';
    }
    else {
        $family_plan = 'no';
    }
} else {
    $family_plan = 'no';
}

if($request->familyplan_temp == 'yes' && $family_plan == 'no'){
 //echo "<script>window.location='?action=not_eligible';</script>";
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="margin:10px 0;">
                <div class="adjust-quoto coverage-mobile-view" style=" background-color: white; border: 1px solid #c0c0c0; padding: 10px; border-radius: 4px; ">
                    <h2 style="margin: 0;font-size: 26px;font-weight: bold;">Adjust your quotes</h2>
                    <h4 class="coverage mt-3"
                        style="padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage:
                        <input type="text" id="coverage_amount1" name="coverage_amount"
                            value="$<?php echo $request->sum_insured2;?>"
                            style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;">
                    </h4>
                    <div id="sum_slider1"
                        style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;margin: 26px 0px;">
                    </div>
                    <h4 class="deductible"
                        style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">
                        Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible"
                            value="$<?php if($havethousand == 'no'){ echo '0'; } else {echo '1000'; } ?>"
                            style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;">
                    </h4>
                    <div id="slider" class="mt-0"
                        style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;">
                    </div>
                </div>

                <div class="adjust-quoto coverage-mobile-view pricegurrantee" style="background-color: white; border: 1px solid #c0c0c0; padding: 10px; margin-top: 10px; border-radius: 4px; ">
                   <div class="card-guarantee text-center">
                      <figure class="card-guarantee__badge"><img src="https://assets.visitorscoverage.com/production/app/img/policy-portal/guarantee-badge.svg" alt="" class="img-fluid"></figure>
                      <div class="card-guarantee__heading" style="
                         margin: 16px 0 8px;
                         font-weight: 800;
                         font-size: 16px;
                         line-height: 18px;
                         ">Price Guarantee</div>
                      <div class="card-guarantee__copy" style="
                         margin-bottom: 0;
                         font-weight: 600;
                         font-size: 12px;
                         line-height: 18px;
                         color: #67778f;
                         ">A price guarantee is your assurance that you won't find the same insurance plan for a lower price elsewhere. Legal regulations are in place to protect consumers and maintain transparency within&nbsp;the&nbsp;industry</div>
                   </div>
                </div>
                
            </div>

            @if (in_array('yes', $request->pre_existing))
                @include('frontend.travelinsurance.includes.four.yes')
            @else
                @include('frontend.travelinsurance.includes.four.yes')
                @include('frontend.travelinsurance.includes.four.no')
            @endif

        </div>
    </div>
<script>
jQuery(function($) {
    var divList = $(".listing-item");
    divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});
    $("#listprices").html(divList);
})
function showdetails(id)
{
    $('.dh-toggle-show-hide-'+id).slideToggle();
}
jQuery(".buynow-btn").click(function () {
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
</div>