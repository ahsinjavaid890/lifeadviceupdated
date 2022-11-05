@extends('admin.layouts.main-layout')
@section('title','Add New Plan')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />
        <!-- CORE CSS -->
        <!-- <link href="{{ asset('public/admin/assetstwo/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- THEME CSS -->
        <link href="{{ asset('public/admin/assetstwo/css/essentials.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/assetstwo/css/layout.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/assetstwo/css/color_scheme/green.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />
        <!-- PAGE LEVEL STYLES -->
        <link href="{{ asset('public/admin/assetstwo/css/layout-datatables.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
#middle div.panel-heading {
color: #1E252D !important;
height: auto !important;
background: #DEDEDE !important;
border-bottom: 2px solid #CCC !important;
}
.design-select {
float: left;
margin-right: 7px;
border: 2px solid #F9F9F9;
cursor: pointer;
}
.selected {
border: 2px solid #245580;  
}
form .row {
    margin-bottom:5px !important;
}
</style>

<script src="{{ asset('public/admin/assetstwo/js/jquery-1.12.4.js')}}"></script>
<div id="content" class="padding-20">
                    <!-- 
                        PANEL CLASSES:
                            panel-default
                            panel-danger
                            panel-warning
                            panel-info
                            panel-success
                        INFO:   panel collapse - stored on user localStorage (handled by app.js _panels() function).
                                All pannels should have an unique ID or the panel collapse status will not be stored!
                    -->
    <form action="?action=update" method="post" class="web-form" id="itemPlan" novalidate="novalidate" enctype="multipart/form-data">
        <!-- Add Plan Details -->

        <div class="row">

            <div class="panel panel-default col-md-6">
             <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-primary" style="margin:0;"><strong><i class="fa fa-umbrella"></i> Enter Plan Details</strong></h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label><i class="fa fa-leaf"></i> <strong class="text-danger">Select Product</strong></label>
                        <select autocomplete="on" name="ipname" id="ipname" class="form-control">
                                                                        <option value="2" >Visitors to Canada</option>
                                                                        <option value="15" >Term Insurance</option>
                                                                        <option value="3" >Student Insurance</option>
                                                                        <option value="4" >Insurance For Canadians</option>
                                                                        <option value="5" >Single Trip</option>
                                                                        <option value="6" >Multi Trip Insurance</option>
                                                                        <option value="7" >All Inclusive Trip</option>
                                                                        <option value="8" >Trip Interruption Insurance</option>
                                                                        <option value="9"  selected="" >Baggage Claim Insurance</option>
                                                                        <option value="20" >Life Insurance</option>
                                                                        <option value="23" >Super Visa Insurance</option>
                                    
                            </select>

                </div>
                </div>
                
                <div class="row">
                <div class="col-md-12">
                    <label><strong>Name of the Plan</strong></label>
                    <input id="iplan" name="iplan" placeholder="Enter Plan Name" class="form-control" value="Baggage one" type="text">
                </div>
                </div>
                
                <div class="row">
                <div class="col-md-12">
                    <label><i class="fa fa-building"></i> <strong>Select Company</strong></label>
                        <select autocomplete="on" name="icname" id="icname" class="form-control">
                            <option value="">None</option>
                                                                        <option value="2"  selected="" >Travlance Insurance</option>
                                                                        <option value="4" >21st Century Insurance</option>
                                                                        <option value="6" >Allianz Travel Insurance</option>
                                                                        <option value="7" >GMS Travel Insurance</option>
                                                                        <option value="8" >TuGO Travel Insurance</option>
                                                                        <option value="9" >Industrial Alliance Insurance</option>
                                                                        <option value="10" >Travel Shield</option>
                                                                        <option value="11" >Destination Canada</option>
                                                                        <option value="12" >Blue Cross Travel Insurance</option>
                                                                        <option value="16" >INGLE Insurance</option>
                                                                        <option value="17" >Allianz Insurance</option>
                                                                        <option value="18" >Ingle Assurance</option>
                                                                        <option value="19" >Manulife Life Insurance</option>
                                                                        <option value="26" >Manulife Insurance</option>
                                    
                            </select>

                </div>
                </div>



                <div class="original row">
                    <div class="col-md-12" id="links">
                        <label><i class="fa fa-shopping-cart"></i> Buynow Link</label>
                            <input id="directlink" name="directlink" class="form-control" placeholder="https://" value="" type="text">

                    </div>
                </div>
                </div>

            </div>


<div class="panel panel-default col-md-6">
             <div class="panel-body">
<h4 class="item-sub"><i class="fa fa-gear"></i> Plan Settings</h4>
                <div class="row">
                <div class="col-md-12">
                    <label><strong>Do you want to add Features?</strong></label>
                </div>
                <div class="col-md-12">
                    <label class="switch switch-success switch-round">
                        <input type="checkbox" name="ifeature" id="ifeature"  checked  value="1">
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                    </label>
                </div>
                </div>
                
                <div class="row">
                <div class="col-md-12">
                <label><strong>Select Rates Type</strong></label>
                </div>
                <div class="col-md-12">
                <!-- radio -->
                <label class="radio">
                    <input type="radio" value="0"  checked=""  name="irateCalculation" id="daily" onclick="tempcall_0();">
                    <i></i> Daily
                </label>
                <label class="radio">
                    <input type="radio" value="1"  name="irateCalculation" id="daily" onclick="tempcall_0();">
                    <i></i> Monthly
                </label>
                <label class="radio">
                    <input type="radio" value="2"  name="irateCalculation" id="daily" onclick="tempcall_0();">
                    <i></i> Yearly
                </label>
                <label class="radio">
                    <input type="radio" value="3"  name="irateCalculation" id="daily" onclick="tempcall_3();">
                    <i></i> Multi
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="monthlytwo"  id="monthlytwo" value="1">
                    <i></i> Monthly Option 2
                </label>
                <input type="hidden" name="temp_ratebase" id="temp_ratebase" value="0">
                </div>
<script>
function tempcall_0(){
document.getElementById('temp_ratebase').value = '0';
checkratebase();
}
function tempcall_3(){
document.getElementById('temp_ratebase').value = '3';
checkratebase();
}
function checkratebase(){
if(document.getElementById('temp_ratebase').value == '0'){
$('.daily_monthly').show();
$('.day_basis').hide();
} else if(document.getElementById('temp_ratebase').value == '3'){
$('.daily_monthly').hide();
$('.day_basis').show();
}
}
</script>
                <div class="col-md-12">
                    <label><strong>Provincial Sales Tax</strong></label>
                        <select name="sales_tax" class="form-control">
                            <option value="">None</option>
                            <option value="8% ontario" >8% sales tax ontario</option>
                            <option value="9% quebec" >9% sales tax quebec</option>
                            <option value="8% manitoba" >8% sales tax manitoba</option>
                          </select>
                </div>

            </div>


            <div class="col-md-12">
                    <label class="switch switch-success switch-round">
                        <input type="checkbox" name="imedical" id="imedical"  value="1">
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                        <strong>Pre Existing Medical Condition ?</strong>
                    </label>
                </div>

                <div class="col-md-12">
                    <label class="switch switch-success switch-round">
                        <input type="checkbox" name="ifamily" id="ifamily"  value="1">
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                        <strong>Family Package ? check for yes</strong>
                    </label>
                </div>

                

            
                <div class="col-md-12">
                    <label class="switch switch-success switch-round">
                        <input type="checkbox" name="cdiscountrate" id="cdiscountrate" class="cdiscountrate"  value="1" onclick="cdiscountratecheck()">
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                        <strong>Do you want to apply discount on Canadian ?</strong>
                    </label>
                </div>
                
                <div class="col-md-12" id="discountrateshow" style="display:none">
                    <label><strong>Canadian Discount Rate</strong></label>
                        <input id="cdiscountprice" name="cdiscountprice" class="form-control" value="0" placeholder="Discount Rate" type="text">

                </div>
<script>
function cdiscountratecheck(){
if(document.getElementById('cdiscountrate').checked == true){
document.getElementById('discountrateshow').style.display = 'block';    
} else {
document.getElementById('discountrateshow').style.display = 'none'; 
}   
}
</script>               
                <div class="col-md-12" style="margin-top: 10px;">
                    <label class="switch switch-success switch-round">
                        <input type="checkbox" name="iflat" id="flatratecheck"  value="1" onclick="flatratecheckfunc()">
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                        <strong>Do you want to add flat rate ?</strong>
                    </label>
                </div>
                    <div class="col-md-12" id="flatratediv" style="display: none">
                    <label class="radio">
                        <input type="radio" value="each"  name="flatrate_type">
                        <i></i> For Each User
                    </label>
                    <label class="radio">
                        <input type="radio" value="total"  name="flatrate_type">
                        <i></i> On Total Premium
                    </label>
                
                    
                    <div class="col-md-12" style="clear:both; padding:0;">
                    <label><strong>Flat Rate</strong></label>
                        <input id="iflatrateprice" name="iflatrateprice" placeholder="Flat Rate" value="0" class="form-control" type="text">
                    </div>

                </div>
<script>
function flatratecheckfunc(){
if(document.getElementById('flatratecheck').checked == true){
document.getElementById('flatratediv').style.display = 'block'; 
} else {
document.getElementById('flatratediv').style.display = 'none';  
}   
}
</script>









                <div class="col-md-12" style="margin-top: 10px;">
                    <label class="switch switch-success switch-round">
                        <input type="checkbox" name="discount" id="discount"  value="1" onclick="discountfunc()">
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                        <strong>Do you want to give discount ?</strong>
                    </label>
                </div>
                    <div class="col-md-12" id="discountdiv" style="display: none">
                    <label><strong>Discount Rate (%)</strong></label>
                        <input id="discount_rate" name="discount_rate" placeholder="Discount Rate" value="" class="form-control" type="text">

                </div>
<script>
function discountfunc(){
if(document.getElementById('discount').checked == true){
document.getElementById('discountdiv').style.display = 'block'; 
} else {
document.getElementById('discountdiv').style.display = 'none';  
}   
}
</script>


                <div class="col-md-12">

                    <label><strong>Rate Type for Smoked Person</strong></label>                 

                </div>

                    <div class="col-md-12" id="stop_usa">
                    <label class="radio">
                        <input type="radio" value="0"  checked=""  name="smoke" id="smoke">
                        <i></i> Fixed Price ($)
                    </label>
                    <label class="radio">
                        <input type="radio" value="1"  name="smoke" id="smoke">
                        <i></i> Percentage (%)
                    </label>
                    
                    <div class="clear" style="height:15px;"></div>
                    <div class="col-md-12" style="padding:0;">
                        <input id="smokeprice" name="smokeprice" class="form-control" value="" placeholder="Smoke Rate" type="text">
                    </div>

                </div>


</div>


            </div>

        </div>


<div class="panel-body">
            
                    <!-- Rate Section for all other products except single -->

    <div class="daily_monthly" id="daily_monthly" style="display:block">

        <div class="row" id="ratesItem">

            <div class="col-md-12">

                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-shopping-cart"></i> Manage Plan Prices</h4>
                                <div class="original">

                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-1" style="width: 71px;margin-right: 10px;padding: 0;">
                            <div class="col-md-12">
                            <label><strong>Select</strong></label>
                            </div>
                            <div class="col-md-12">
                            <label class="checkbox">
                                <input type="checkbox" value="1" id="rt[]" name="rt[]">
                                <i></i>
                            </label>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <label><strong>Min Age</strong></label>
                            <input id="iratesMin1" name="iratesMin[]" class="form-control" value="0" type="text" class="min_1">
                        </div>

                        <div class="col-md-2">
                            <label><strong>Max Age</strong></label>
                            <input id="iratesMax1" name="iratesMax[]" class="form-control" value="0" type="text" class="max_1">
                        </div>

                        <div class="col-md-3">
                            <label class="wrapup"><strong>Benefit Amount</strong></label>
                            <input id="iratesSum1" name="iratesSum[]" class="form-control" value="10000" type="text" class="sum_1">
                        </div>

                        <div class="col-md-2">
                            <label><strong>Rate ($)</strong></label>
                                <input id="iratesRate1" name="iratesRate[]" class="form-control" value="21/person" type="text">
                        </div>

                    </div>

                </div>
                    <div id="appendRates">
              
                                    <div class="appendRates" id="row_06232042" style="margin-bottom: 10px;">
                    <div class="row">
                            <div class="col-md-1" style="width: auto;margin-right: 10px;">
                                <label class="checkbox">
                                <input type="checkbox" value="06232042" id="rt[]" name="rt[]">
                                <i></i>
                            </label>
                            </div>
                            <div class="col-md-2">
                                <div class="input">
                                    <input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_06232042 form-control" value="0">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input">
                                    <input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_06232042 form-control" value="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input">
                                    <input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_06232042 form-control" value="15000">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input">
                                    <input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="22/person">
                                </div>
                            </div>
                        </div>
                            </div>
                                        <div class="appendRates" id="row_062320228" style="margin-bottom: 10px;">
                    <div class="row">
                            <div class="col-md-1" style="width: auto;margin-right: 10px;">
                                <label class="checkbox">
                                <input type="checkbox" value="062320228" id="rt[]" name="rt[]">
                                <i></i>
                            </label>
                            </div>
                            <div class="col-md-2">
                                <div class="input">
                                    <input type="text" id="iratesMin'+countRates+'" name="iratesMin[]" class="min_062320228 form-control" value="0">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input">
                                    <input type="text" id="iratesMax'+countRates+'" name="iratesMax[]" class="max_062320228 form-control" value="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input">
                                    <input type="text" id="iratesSum'+countRates+'" name="iratesSum[]" class="sum_062320228 form-control" value="16000">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input">
                                    <input type="text" id="iratesRate'+countRates+'" name="iratesRate[]" class="form-control" value="23/person">
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="row"></div>
                     </div>         
                                    

                <div class="clear" style="clear:both; height:10px;"></div>

                <div class="row">

                    <div class="col-md-12">
                        <a href="javascript:void(0)" class="btn btn-default btn-sm addRates addnewItem"><i class="fa fa-plus"></i> Add Item</a>
                        <a href="javascript:void(0)" class="btn btn-warning btn-sm copyRates addnewItem"><i class="fa fa-copy"></i> Copy Items</a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm removeRates addnewItem"><i class="fa fa-trash"></i> Remove Items</a>
                    </div>

                </div>

                <hr>

            </div>

        

        </div>

    </div>

<div class="clear"></div>

    <div class="day_basis" id="day_basis" style="display:none;">

        <div class="row" id="ratesItem">

            <div class="col-md-12">

                <h4 class="item-sub"><i class="fa fa-plus"></i> Add Rates</h4>


<div class="original">
                    <div class="row pricerow_1">
                        <div class="col-md-1" style="width: auto;margin-right: 10px;">
                            <div class="col-md-12 text-center" style="padding:0;">
                            <label><strong>Select</strong></label>
                            </div>
                            <div class="col-md-12 text-center" style="padding:0;">
                            <label class="checkbox" style="margin:0;">
                                <input type="checkbox" value="1" id="sr[]" class="form-control sr" name="sr[]" style="margin: 0;">
                                <i></i>
                            </label>
                            </div>
                        </div>
                        
                        <div class="col-md-1">
                            <label style="margin-bottom:20px;"><strong>Min Age</strong></label>
                            <input id="iratesMin1" class="form-control" class="form-control" name="iratesMin1[]" value="" type="text">

                        </div>

                        <div class="col-md-1">
                            <label style="margin-bottom:20px;"><strong>Max Age</strong></label>
<input id="iratesMax1" class="form-control" name="iratesMax1[]" class="form-control" value="" type="text">

                        </div>

                        <div class="col-md-2 margin5 nopad">
                            <label style="margin-bottom:20px;"><strong>Benefit</strong></label>
<input id="iratesSum1" class="form-control" name="iratesSum1[]" class="form-control" value="" type="text">
                        </div>
<div class="dayrange_1">
    <div class="row">
                        <div class="col-md-8 rangegroup_1" style="padding:0;">
                            <div class="row">
                        <div class="col-md-12" style="padding:0;">
                        <input placeholder="Days Range" class="form-control" id="days_rate_range" name="days_rate_range1[]" class="form-control" value="" type="text">
                        </div>
                        <div class="col-md-12" style="padding:0;">
                        <input id="days_rate" placeholder="Price" class="form-control" name="days_rate1[]" class="form-control" value="" type="text">
                        </div>
                    </div>
                        </div>
                    </div>
</div>
                    </div>
                </div>  
                <div id="appendRates1"></div>

<input type="hidden" id="currentragerows" value="1" />
<input type="hidden" id="pricerows" value="1" />
                

                <div class="clear" style="clear:both; height:10px;"></div>

                <div class="row">
                    <div class="col-md-6">
                        <a href="javascript:void(0)" class="btn btn-default btn-sm addnewItem" onclick="addmultirate();"><i class="fa fa-plus"></i> Add Item</a>
                        <a href="javascript:void(0)" class="btn btn-default btn-sm copyRates1 addnewItem"><i class="fa fa-copy"></i> Copy Items</a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm addnewItem" onclick="removemultirate();"><i class="fa fa-trash"></i> Remove Items</a>
                    </div>

                    <div class="col-md-6">
                        <a href="javascript:void(0)" class="btn btn-default btn-sm addnewItem" onclick="adddayrange();"><i class="fa fa-plus"></i> Add Day Range</a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm addnewItem" onclick="removedayrange();"><i class="fa fa-trash"></i> Remove Day Range</a>
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
                <hr>
            </div>

        

        </div>

    </div>

        <!-- End Rate Section for all other products except single -->

<div class="clear"></div>

<div class="row" id="ratesItem">

        <div class="col-md-6">

                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-leaf"></i> Manage Deductables</h4>
                <div class="row">
                    <div class="col-md-6"><label style="margin:0; padding:0;"><strong>Deductable Amount</strong></label></div>
                    <div class="col-md-6"><label style="margin:0; padding:0;"><strong>Deductable Rate (%)</strong></label></div>
                </div>
                <div class="row">
                    <div class="original" style="margin-top:10px; margin-bottom:0; margin-right:0; margin-left:0;">
                        <div class="row">
                        <div class="col-md-6 unit"  >
                            <div class="widget left-50">
                                <input name="ideductHash[]" id="ideductHash1" class="form-control" value="0" placeholder="Deductible 1" type="text">
                            </div>  
                        </div>  
                        <div class="col-md-6 unit" >
                            <div class="widget left-50">
                                <input name="ideductPer[]" id="ideductPer1" class="form-control" value="0" placeholder="Deductible 1" type="text">
                            </div>  
                        </div>  
                    </div>
                </div>
<div id="deductionAppend">                  
</div>
                    
                </div>

                    <div class="col-md-6">

                        <a href="javascript:void(0)" class="btn btn-default btn-sm addDeduct addnewItem"><i class="fa fa-plus"></i> Add Item</a>

                        <a href="javascript:void(0)" class="btn btn-danger btn-sm removeDeduct addnewItem"><i class="fa fa-trash"></i> Remove Item</a>

                    </div>

                    <div class="clear">&nbsp;</div>



                <div class="clear"></div>

                <hr>

            </div>
            
            <div class="col-md-6" style="display:none;">

                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-heart"></i> Manage Benefits</h4>

                <div class="original">
                    
                </div>

                <div id="appendBenefits"></div>

                <div class="clear" style="height:20px;"></div>

                <div class="row">
                    <div class="col-md-12">
                    <a href="javascript:void(0)" class="btn btn-default btn-sm addBenefits  addnewItem"><i class="fa fa-plus"></i> Add Item</a>

                    <a href="javascript:void(0)" class="btn btn-danger btn-sm removeBenefits addnewItem"><i class="fa fa-trash"></i> Remove Item</a>

                    <div class="clear">&nbsp;</div>
                    </div>
                </div>

                <hr>

            </div>


        </div>

            <div class="clear"></div>

        <!-- Third Section -->

        <div class="row">

            
            <div class="col-md-6">
                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-file"></i> PDF Policy</h4>
                <div class="">
                    <label>Upload PDF Policy</label>
                        <div class="fancy-file-upload">
                            <i class="fa fa-upload"></i>
                            <input type="file" class="form-control" name="ipdfPolicy" id="ipdfPolicy1" onchange="jQuery(this).next('input').val(this.value);" />
                            <input type="text" class="form-control" placeholder="no file selected" readonly="" />
                            <span class="button">Choose File</span>
                        </div>
                </div>
                <div id="appendPDFpolicy"></div>
                <div class="clear"></div>
                <div class="col-md-12" style="display:none;">
                    <a href="javascript:void(0)" class="btn btn-default btn-sm addPDF addnewItem"><i class="fa fa-plus"></i> Add Item</a>
                    <a href="javascript:void(0)" class="btn btn-danger btn-sm removePDF addnewItem"><i class="fa fa-trash"></i> Remove Item</a>
                    <div class="clear">&nbsp;</div>
                </div>

            </div>
            <div class="col-md-6">
            <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px;"><i class="fa fa-file"></i> Current PDF Policy</h4>
                        <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#C00;"><i class="fa fa-file"></i> 05112022043437_</h4>
            
            </div>

            <div class="clear"></div>
            <hr>
            <div class="clear"></div>
        </div>

        <!-- Fourth Section -->

        <div class="" id="featureShow" style="display:block"> 

            <div class="col-md-12">

                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i class="fa fa-database"></i> Manage Features</h4>

                <div class="original">
                    

                </div>

                <div id="appendFeatures"></div>

                <div class="clear" style="height:20px;"></div>

                <div class="">

                    <a href="javascript:void(0)" class="btn btn-default btn-sm addFeatures addnewItem"><i class="fa fa-plus"></i> Add Item</a>

                    <a href="javascript:void(0)" class="btn btn-danger btn-sm removeFeatures addnewItem"><i class="fa fa-trash"></i> Remove Item</a>

                    <div class="clear">&nbsp;</div>

                </div>

                <hr>

            </div>

            

        </div>


            
            </div>

            <div class="clear"></div>

            <div class="row">
                <div class="col-md-6"> <br/>
                    <button type="submit" name="submit" class="btn btn-success submit-btn addnewItem" onclick="$('.sr').prop('checked', true);"><i class="fa fa-save"></i> Submit Changes</button>
                </div>
                <div class="clear"></div>
            </div>
        
        <div class="clear"></div>
        
        </div>

@endsection
@section('script')

  
<script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js')}}"></script>
<script>
function submitfunc(){
    var a = $("#sortable").sortable("toArray", {
        attribute: "id"
    });
    $('#savesortlist').val(a);
    $('#productform').submit();
    //alert(a);
}

function addmultirate() {
    var countRange = document.getElementById('currentragerows').value;
    var countranges = parseInt(document.getElementById('currentragerows').value) + 1;
    var pricerows = parseInt(document.getElementById('pricerows').value) + 1;
    //var 
    var range="";
    //alert(countRange);
    for(var i=1;i<=countRange;i++)
    {
      range+=  '<div class="col-md-1 rangegroup_'+ i +'" style="padding:0;">'+
        '<div class="col-md-12" style="padding:0;">'+
        '<input id="days_rate" placeholder="Price" class="form-control" name="days_rate'+ pricerows +'[]" class="form-control" value="" type="text">'+
        '</div></div>';
    }
   // alert(countRates);
    jQuery('#appendRates1').append(
    '<div class="row '+' pricerow_'+ pricerows +'">'+
    '<div class="col-md-1" style="width: auto;margin-right: 10px;">'+
    '<div class="col-md-12 text-center" style="padding:0 21px;">'+
    '<label class="checkbox" style="margin:0;">'+
    '<input type="checkbox" value="'+ pricerows +'" id="sr[]" class="form-control sr" name="sr[]" style="margin: 0;">'+
    '<i style="top: 0;"></i>'+
    '</label>'+
    '</div>'+
    '</div>'+
    '<div class="col-md-1">'+
    '<input id="iratesMin1" class="form-control" class="form-control" name="iratesMin1[]" value="" type="text">'+
    '</div>'+
    '<div class="col-md-1">'+
    '<input id="iratesMax1" class="form-control" name="iratesMax1[]" class="form-control" value="" type="text">'+
    '</div>'+
    '<div class="col-md-2 margin5">'+
    '<input id="iratesSum1" class="form-control" name="iratesSum1[]" class="form-control" value="" type="text">'+
    '</div><div class="dayrange_'+ pricerows +'">'+ range +
    '</div>'+
    '</div>');

document.getElementById('pricerows').value = pricerows; 
   // alert(range); 
}

function adddayrange() {
var rangerows = parseInt(document.getElementById('pricerows').value);
var countranges = parseInt(document.getElementById('currentragerows').value) + 1;
var realvalue = parseInt(document.getElementById('currentragerows').value);
for(var d=1;d<=rangerows;d++)
{

if(d == '1'){
    var addlable = 
    '<div class="col-md-12" style="padding: 0;">'+
    '<input placeholder="Days Range" class="form-control" id="days_rate_range" name="days_rate_range1[]" class="form-control" value="" type="text">'+
    '</div>';
} else {
    var addlable = '';
}

//alert('dayrange_'+d);
jQuery('.dayrange_'+d).append(
        '<div class="col-md-8 rangegroup_'+ countranges +'" style="padding:0;">'+ addlable +
        '<div class="col-md-12" style="padding:0;">'+
        '<input id="days_rate" placeholder="Price" class="form-control" name="days_rate'+d+'[]" class="form-control" value="" type="text">'+
        '</div></div>');        
}
document.getElementById('currentragerows').value = countranges;

}

function removedayrange(){
var countranges = parseInt(document.getElementById('currentragerows').value) - 1;
if(document.getElementById('currentragerows').value == 1){
    alert('Can not delete first day range.');
} else {
$('.rangegroup_'+ countranges).remove();
document.getElementById('currentragerows').value = countranges;
}
    
}

function removemultirate() {
    event.preventDefault();
    var searchIDs = $("#day_basis input:checkbox:checked").map(function(){
      return $(this).val();
    }).get(); // <----
    console.log(searchIDs);
    //var arraysize = searchIDs.length;
    //alert(arraysize);
    //var crntrows = parseInt(document.getElementById('pricerows').value) - 1;
    //document.getElementById('pricerows').value = crntrows - arraysize;
    
    searchIDs.forEach(function(entry) {
    $('.pricerow_'+entry).remove();
    });
    //


}
</script> 

<script type="text/javascript">
    jQuery('.addRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-3">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
    }
   // alert(countRates);

    jQuery('#appendRates').append(
        '<div class="appendRates row" id="row_'+ + new Date() +'">' +
        '<div class="col-md-1" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" class="min_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" class="max_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-3">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" class="sum_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div>');
   // alert(range);
})

//REMOVE PLAN RATES
jQuery('.removeRates').click(function(event) {

var rt_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
console.log(rt_values);
var rt_checklength = rt_values.length;            
if(rt_checklength == 0){
alert('Please select an item first');   
} else {
for(r=0;r< rt_checklength;r++)
{
//alert(rt_values[r]);
jQuery('#appendRates #row_'+rt_values[r]).remove();
}
}

    //jQuery('#appendRates .appendRates:last-of-type').remove();

});

//Copy Rates
jQuery('.copyRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
    var copy_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
    var copy_checklength = copy_values.length;            
    if(copy_checklength == 0){
    alert('Please select an item to copy'); 
    } else {
    for(var i=0;i<copy_checklength;i++)
    {
      iratesMin_value = $('.min_'+copy_values[i]).val();
      iratesMax_value = $('.max_'+copy_values[i]).val();
      iratesSum_value = $('.sum_'+copy_values[i]).val();
      range+=  '<div class="col-md-3 margin5">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
        
        jQuery('#appendRates').append(
        '<div class="appendRates" id="row_'+ + new Date() +'"><div class="col-md-12 unit">' +
         '<div class="row">' +'<div class="col-md-1 margin5" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-2 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" value="'+iratesMin_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-2 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" value="'+iratesMax_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" value="'+iratesSum_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-2 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div></div></div>');
    }
    }
   // alert(countRates);


   // alert(range);
})


jQuery('.addDeduct').click(function(event) {

    /* Add child for deductibles */

    var count = jQuery('#deductionAppend .appended').size() + 2;

    jQuery('#deductionAppend').append(

        '<div class="row appended" style="margin-top:10px; margin-bottom:0; margin-right:0; margin-left:0;"><div class="col-md-6 unit">' +

        '<div class="widget left-50">' +
        '<input type="text" name="ideductHash[]" id="ideductHash' + count + '" placeholder="Deductible ' + count + '" class="form-control">' +

        '</div>' +

        '</div> ' +

        '<div class="col-md-6 unit">' +

        '<div class="widget left-50">' +
        '<input type="text" name="ideductPer[]" id="ideductPer' + count + '" placeholder="Deductible ' + count + '" class="form-control">' +

        '</div>' +

        '</div></div>');

});

jQuery('.removeDeduct').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#deductionAppend .appended:last-of-type').remove();

});
    







// Add Features Policy

jQuery('.addFeatures').click(function(event) {

    var countFeature = jQuery('#appendFeatures .appendFeatures').size() + 2;

    jQuery('#appendFeatures').append('<div class="appendFeatures">'+

                    '<div class="row unit" style="margin-bottom: 10px;">'+

                            '<input type="text" id="ifeaturelist'+countFeature+'" name="ifeaturelist[]" placeholder="Enter Feature List # '+countFeature+'" class="form-control">'+

                    '</div>'+

                '</div>');

})

jQuery('.removeFeatures').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendFeatures .appendFeatures:last-of-type').remove();

});



</script>
@endsection