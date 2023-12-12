@extends('admin.layouts.main-layout')
@section('title', 'Edit Plan')
@section('content')
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext"
        rel="stylesheet" type="text/css" />
    <!-- CORE CSS -->
    <!-- <link href="{{ asset('public/admin/assetstwo/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- THEME CSS -->
    <link href="{{ asset('public/admin/assetstwo/css/essentials.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/admin/assetstwo/css/layout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/admin/assetstwo/css/color_scheme/green.css') }}" rel="stylesheet" type="text/css"
        id="color_scheme" />
    <!-- PAGE LEVEL STYLES -->
    <link href="{{ asset('public/admin/assetstwo/css/layout-datatables.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .switch.switch-success>input:checked+.switch-label {
            border-color: #3a5371 !important;
            background: #3a5371 !important;
        }

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
            margin-bottom: 5px !important;
        }
    </style>

    <script src="{{ asset('public/admin/assetstwo/js/jquery-1.12.4.js') }}"></script>
    <div id="content" class="padding-20">
        @include('alerts.index')
        <form action="{{ url('admin/plans/updateplan') }}" method="post" class="web-form" id="itemPlan"
            novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <!-- Add Plan Details -->
            <input type="hidden" value="{{ $data->id }}" name="id">
            <div class="row">
                <div class="panel panel-default col-md-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-primary" style="margin:0;"><strong><i class="fa fa-umbrella"></i> Enter Plan
                                        Details</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><i class="fa fa-leaf"></i> <strong class="text-danger">Select
                                        Product</strong></label>
                                <select required name="ipname" id="ipname" class="form-control">
                                    <option value="">Select Product</option>
                                    @foreach (DB::table('wp_dh_products')->get() as $r)
                                        <option @if ($data->product == $r->pro_id) selected @endif
                                            value="{{ $r->pro_id }}">{{ $r->pro_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><strong>Plan Full Name</strong></label>
                                <input id="iplan" value="{{ $data->plan_name }}" name="iplan"
                                    placeholder="Enter Plan Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><strong>Pre Existing Name</strong></label>
                                <input id="pre_existing_name" value="{{ $data->pre_existing_name }}"
                                    name="pre_existing_name" placeholder="Pre Existing Name" class="form-control"
                                    type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><strong>Without Pre Existing Name</strong></label>
                                <input id="without_pre_existing_name" value="{{ $data->without_pre_existing_name }}"
                                    name="without_pre_existing_name" placeholder="Without Pre Existing Name"
                                    class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><i class="fa fa-building"></i> <strong>Select Company</strong></label>
                                <select required name="icname" id="icname" class="form-control">
                                    <option value="">Select Company</option>
                                    @foreach (DB::table('wp_dh_companies')->get() as $r)
                                        <option @if ($data->insurance_company == $r->comp_id) selected @endif
                                            value="{{ $r->comp_id }}">{{ $r->comp_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" id="links">
                                <label><i class="fa fa-shopping-cart"></i> Buynow Link</label>
                                <input id="directlink" name="directlink" class="form-control" placeholder="https://"
                                    value="{{ $data->directlink }}" type="text">
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
                                    <input type="checkbox" name="ifeature" id="ifeature"
                                        @if ($data->feature == 1) checked @endif value="1">
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
                                    <input type="radio" value="0"
                                        @if ($data->rate_base == 0) checked="" @endif name="irateCalculation"
                                        id="daily" onclick="tempcall_0();">
                                    <i></i> Daily
                                </label>
                                <label class="radio">
                                    <input type="radio" value="1"
                                        @if ($data->rate_base == 1) checked="" @endif name="irateCalculation"
                                        id="daily" onclick="tempcall_0();">
                                    <i></i> Monthly
                                </label>
                                <label class="radio">
                                    <input type="radio" value="2"
                                        @if ($data->rate_base == 2) checked="" @endif name="irateCalculation"
                                        id="daily" onclick="tempcall_0();">
                                    <i></i> Yearly
                                </label>
                                <label class="radio">
                                    <input type="radio" value="3"
                                        @if ($data->rate_base == 3) checked="" @endif name="irateCalculation"
                                        id="daily" onclick="tempcall_3();">
                                    <i></i> Multi
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" @if ($data->monthly_two == 1) checked="" @endif
                                        name="monthlytwo" id="monthlytwo" value="1">
                                    <i></i> Monthly Option 2
                                </label>
                                <input type="hidden" name="temp_ratebase" id="temp_ratebase" value="0">
                            </div>
                            <script>
                                function tempcall_0() {
                                    document.getElementById('temp_ratebase').value = '0';
                                    checkratebase();
                                }

                                function tempcall_3() {
                                    document.getElementById('temp_ratebase').value = '3';
                                    checkratebase();
                                }

                                function checkratebase() {
                                    if (document.getElementById('temp_ratebase').value == '0') {
                                        $('.daily_monthly').show();
                                        $('.day_basis').hide();
                                    } else if (document.getElementById('temp_ratebase').value == '3') {
                                        $('.daily_monthly').hide();
                                        $('.day_basis').show();
                                    }
                                }
                            </script>
                            <div class="col-md-12">
                                <label><strong>Provincial Sales Tax</strong></label>
                                <select name="sales_tax" class="form-control">
                                    <option value="">None</option>
                                    <option @if ($data->sales_tax == '8% ontario') selected @endif value="8% ontario">8% Sales
                                        Tax Ontario</option>
                                    <option @if ($data->sales_tax == '9% quebec') selected @endif value="9% quebec">9% Sales
                                        Tax Quebec</option>
                                    <option @if ($data->sales_tax == '8% manitoba') selected @endif value="8% manitoba">8%
                                        Sales tax manitoba</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="switch switch-success switch-round">
                                <input type="checkbox" @if ($data->premedical == 1) checked @endif name="imedical"
                                    id="imedical" value="1">
                                <span class="switch-label" data-on="YES" data-off="NO"></span>
                                <strong>Pre Existing Medical Condition ?</strong>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label class="switch switch-success switch-round">
                                <input type="checkbox" @if ($data->family_plan == 1) checked @endif name="ifamily"
                                    id="ifamily" value="1">
                                <span class="switch-label" data-on="YES" data-off="NO"></span>
                                <strong>Family Package ? check for yes</strong>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label class="switch switch-success switch-round">
                                <input @if ($data->cdiscountrate == 1) checked @endif type="checkbox"
                                    name="cdiscountrate" id="cdiscountrate" class="cdiscountrate" value="1"
                                    onclick="cdiscountratecheck()">
                                <span class="switch-label" data-on="YES" data-off="NO"></span>
                                <strong>Do you want to apply discount on Canadian ?</strong>
                            </label>
                        </div>
                        <div class="col-md-12" id="discountrateshow"
                            @if ($data->cdiscountrate == 0) style="display:none" @endif>
                            <label><strong>Canadian Discount Rate</strong></label>
                            <input id="cdiscountprice" name="cdiscountprice" class="form-control"
                                value="{{ $data->cdiscountrate }}" placeholder="Discount Rate" type="text">
                        </div>
                        <script>
                            function cdiscountratecheck() {
                                if (document.getElementById('cdiscountrate').checked == true) {
                                    document.getElementById('discountrateshow').style.display = 'block';
                                } else {
                                    document.getElementById('discountrateshow').style.display = 'none';
                                }
                            }
                        </script>
                        <div class="col-md-12" style="margin-top: 10px;">
                            <label class="switch switch-success switch-round">
                                <input type="checkbox" @if ($data->flatrate > 0) checked @endif name="iflat"
                                    id="flatratecheck" value="1" onclick="flatratecheckfunc()">
                                <span class="switch-label" data-on="YES" data-off="NO"></span>
                                <strong>Do you want to add flat rate ?</strong>
                            </label>
                        </div>
                        <div class="col-md-12" id="flatratediv" style="display: <?php if ($data->flatrate > '0') {
                            echo 'block;';
                        } else {
                            echo 'none';
                        } ?>">
                            <label class="radio">
                                <input type="radio" value="each" <?php if($data->flatrate_type == 'each'){?> checked=""
                                    <?php } ?> name="flatrate_type">
                                <i></i> For Each User
                            </label>
                            <label class="radio">
                                <input type="radio" value="total" <?php if($data->flatrate_type == 'total'){?> checked=""
                                    <?php } ?> name="flatrate_type">
                                <i></i> On Total Premium
                            </label>
                            <div class="col-md-12" style="clear:both; padding:0;">
                                <label><strong>Flat Rate</strong></label>
                                <input id="iflatrateprice" name="iflatrateprice" placeholder="Flat Rate"
                                    value="<?php echo $data->flatrate; ?>" class="form-control" type="text">
                            </div>
                        </div>
                        <script>
                            function flatratecheckfunc() {
                                if (document.getElementById('flatratecheck').checked == true) {
                                    document.getElementById('flatratediv').style.display = 'block';
                                } else {
                                    document.getElementById('flatratediv').style.display = 'none';
                                }
                            }
                        </script>
                        <div class="col-md-12" style="margin-top: 10px;">
                            <label class="switch switch-success switch-round">
                                <input type="checkbox" name="discount" id="discount" <?php if($data->discount == '1'){?> checked=""
                                    <?php } ?> value="1" onclick="discountfunc()">
                                <span class="switch-label" data-on="YES" data-off="NO"></span>
                                <strong>Do you want to give discount ?</strong>
                            </label>
                        </div>
                        <div class="col-md-12" id="discountdiv" style="display: <?php if ($data->discount == '1') {
                            echo 'block;';
                        } else {
                            echo 'none';
                        } ?>">
                            <label><strong>Discount Rate (%)</strong></label>
                            <input id="discount_rate" name="discount_rate" placeholder="Discount Rate"
                                value="<?php echo $data->discount_rate; ?>" class="form-control" type="text">

                        </div>
                        <script>
                            function discountfunc() {
                                if (document.getElementById('discount').checked == true) {
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
                                <input type="radio" value="0" <?php if($data->smoke == '0'){?> checked=""
                                    <?php } ?> name="smoke" id="smoke">
                                <i></i> Fixed Price ($)
                            </label>
                            <label class="radio">
                                <input type="radio" value="1" <?php if($data->smoke == '1'){?> checked=""
                                    <?php } ?> name="smoke" id="smoke">
                                <i></i> Percentage (%)
                            </label>

                            <div class="clear" style="height:15px;"></div>
                            <div class="col-md-12" style="padding:0;">
                                <input id="smokeprice" name="smokeprice" class="form-control"
                                    value="<?php echo $data->smoke_rate; ?>" placeholder="Smoke Rate" type="text">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <!-- Rate Section for all other products except single -->
                <div class="daily_monthly" id="daily_monthly" style="<?php if ($data->rate_base == '0' || $data->rate_base == '1' || $data->rate_base == '2') {
                    echo 'display:block';
                } else {
                    echo 'display:none';
                } ?>">

                    <div class="row" id="ratesItem">

                        <div class="col-md-12">

                            <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i
                                    class="fa fa-shopping-cart"></i> Manage Plan Prices</h4>
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-1" style="width: 71px;margin-right: 10px;padding: 0;">
                                    <div class="col-md-12">
                                        <label><strong>Select</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label><strong>Min Age</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label><strong>Max Age</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label class="wrapup"><strong>Benefit Amount</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label><strong>Rate ($) Without Pre Existing</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label><strong>Rate ($) With Pre Existing</strong></label>
                                </div>
                                
                            </div>


                            <?php
                if($data->id){
                $counter=0;
                $rats_q = DB::table('wp_dh_insurance_plans_rates')->where('plan_id' , $data->id)->orderby('sum_insured' , 'asc')->orderBy('minage', 'asc')->get();
                $rats_num = $rats_q->count();
                foreach ($rats_q as $r) {
                    $counter++;
                    if($counter == 1){
                        $rand = $counter * (rand(10,100)); 
                ?>
                            <div class="orignal" id="row_<?php echo date('his') . $rand; ?>" style="margin-bottom: 10px;">
                                <div class="row">
                                    <div class="col-md-1" style="width: auto;margin-right: 10px;">
                                        <label class="checkbox">
                                            <input type="checkbox" value="<?php echo date('his') . $rand; ?>" id="rt[]"
                                                name="rt[]">
                                            <i></i>
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input">
                                            <input type="text" id="iratesMin'+countRates+'" name="iratesMin[]"
                                                class="min_<?php echo date('his') . $rand; ?> form-control"
                                                value="{{ $r->minage }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input">
                                            <input type="text" id="iratesMax'+countRates+'" name="iratesMax[]"
                                                class="max_<?php echo date('his') . $rand; ?> form-control"
                                                value="{{ $r->maxage }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input">
                                            <input type="text" id="iratesSum'+countRates+'" name="iratesSum[]"
                                                class="sum_<?php echo date('his') . $rand; ?> form-control"
                                                value="{{ $r->sum_insured }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input">
                                            <input type="text" id="iratesRatewithout'+countRates+'"
                                                name="iratesRatewithout[]" class="form-control"
                                                value="{{ $r->rate_without_pre_existing }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input">
                                            <input type="text" id="iratesRate'+countRates+'" name="iratesRate[]"
                                                class="form-control" value="{{ $r->rate_with_pre_existing }}">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="appendRates">
                                <?php } else {
                $rand = $counter * (rand(10,100)); 
                ?>
                                <div class="appendRates" id="row_<?php echo date('his') . $rand; ?>" style="margin-bottom: 10px;">
                                    <div class="row">
                                        <div class="col-md-1" style="width: auto;margin-right: 10px;">
                                            <label class="checkbox">
                                                <input type="checkbox" value="<?php echo date('his') . $rand; ?>" id="rt[]"
                                                    name="rt[]">
                                                <i></i>
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input">
                                                <input type="text" id="iratesMin'+countRates+'" name="iratesMin[]"
                                                    class="min_<?php echo date('his') . $rand; ?> form-control"
                                                    value="{{ $r->minage }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input">
                                                <input type="text" id="iratesMax'+countRates+'" name="iratesMax[]"
                                                    class="max_<?php echo date('his') . $rand; ?> form-control"
                                                    value="{{ $r->maxage }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input">
                                                <input type="text" id="iratesSum'+countRates+'" name="iratesSum[]"
                                                    class="sum_<?php echo date('his') . $rand; ?> form-control"
                                                    value="{{ $r->sum_insured }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input">
                                                <input type="text" id="iratesRatewithout'+countRates+'"
                                                    name="iratesRatewithout[]" class="form-control"
                                                    value="{{ $r->rate_without_pre_existing }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input">
                                                <input type="text" id="iratesRate'+countRates+'" name="iratesRate[]"
                                                    class="form-control" value="{{ $r->rate_with_pre_existing }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php } if($rats_num == $counter){ ?>
                            </div> <?php

                }

                }

                ?>
                            <?php } ?>
                            <div class="clear" style="clear:both; height:10px;"></div>

                            <div class="row">

                                <div class="col-md-12">
                                    <a href="javascript:void(0)" class="btn btn-default btn-sm addRates addnewItem"><i
                                            class="fa fa-plus"></i> Add Item</a>
                                    <a href="javascript:void(0)" class="btn btn-warning btn-sm copyRates addnewItem"><i
                                            class="fa fa-copy"></i> Copy Items</a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm removeRates addnewItem"><i
                                            class="fa fa-trash"></i> Remove Items</a>
                                </div>

                            </div>

                            <hr>

                        </div>



                    </div>

                </div>


                <div class="day_basis" id="day_basis" style="display:<?php if ($data->rate_base == '3') {
                    echo 'block';
                } else {
                    echo 'none';
                } ?>;">
                    <div class="row" id="ratesItem">
                        <div class="col-md-12">
                            <h4 class="item-sub"><i class="fa fa-plus"></i> Add Rates</h4>
                            <?php
            $ranges_q = DB::table('wp_dh_plan_day_rate')->where('plan_id' , $data->id)->groupby('minage' , 'maxage')->orderby('minage' , 'asc')->get();
            $ranges_num = $ranges_q->count();
            if($ranges_num == 0){?>
                            <div class="original">
                                <div class="row pricerow_1">
                                    <div class="col-md-1" style="width: auto;margin-right: 10px;">
                                        <div class="col-md-12 text-center" style="padding:0;">
                                            <label><strong>Select</strong></label>
                                        </div>
                                        <div class="col-md-12 text-center" style="padding:0;">
                                            <label class="checkbox" style="margin:0;">
                                                <input type="checkbox" value="1" id="sr[]"
                                                    class="form-control sr" name="sr[]" style="margin: 0;">
                                                <i></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <label style="margin-bottom:20px;"><strong>Min Age</strong></label>
                                        <input id="iratesMin1" class="form-control" class="form-control"
                                            name="iratesMin1[]" value="" type="text">
                                    </div>
                                    <div class="col-md-1">
                                        <label style="margin-bottom:20px;"><strong>Max Age</strong></label>
                                        <input id="iratesMax1" class="form-control" name="iratesMax1[]"
                                            class="form-control" value="" type="text">
                                    </div>
                                    <div class="col-md-2 margin5 nopad">
                                        <label style="margin-bottom:20px;"><strong>Benefit</strong></label>
                                        <input id="iratesSum1" class="form-control" name="iratesSum1[]"
                                            class="form-control" value="" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row dayrange_1">
                                            <div class="col-md-1 rangegroup_1" style="padding:0;">
                                                <div class="col-md-12" style="padding:0;">
                                                    <input placeholder="Days Range" class="form-control"
                                                        id="days_rate_range" name="days_rate_range1[]"
                                                        class="form-control" value="" type="text">
                                                </div>
                                                <div class="col-md-12" style="padding:0;">
                                                    <input id="days_rate" placeholder="Price" class="form-control"
                                                        name="days_rate1[]" class="form-control" value=""
                                                        type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else {
            $prow = 0;  
            foreach($ranges_q as $range){
            $prow++;    
            ?>
                            <div class="row pricerow_<?php echo $prow; ?>">
                                <div class="col-md-1" style="width: auto;margin-right: 10px;">
                                    <?php if($prow == 1){?>
                                    <div class="col-md-12 text-center" style="padding:0;">
                                        <label><strong>Select</strong></label>
                                    </div>
                                    <?php } ?>
                                    <div class="col-md-12 text-center" style="padding: <?php if ($prow == 1) {
                                        echo '0';
                                    } else {
                                        echo '0 21px';
                                    } ?>;">
                                        <label class="checkbox" style="margin:0;">
                                            <input type="checkbox" value="1" id="sr[]" class="form-control sr"
                                                name="sr[]" style="margin: 0;">
                                            <i></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <?php if($prow == 1){?><label style="margin-bottom:20px;"><strong>Min
                                            Age</strong></label><?php } ?>
                                    <input id="iratesMin1" class="form-control" class="form-control" name="iratesMin1[]"
                                        value="{{ $range->minage }}" type="text">
                                </div>
                                <div class="col-md-1">
                                    <?php if($prow == 1){?><label style="margin-bottom:20px;"><strong>Max
                                            Age</strong></label><?php } ?>
                                    <input id="iratesMax1" class="form-control" name="iratesMax1[]" class="form-control"
                                        value="{{ $range->maxage }}" type="text">
                                </div>
                                <div class="col-md-2 margin5 nopad">
                                    <?php if($prow == 1){?><label
                                        style="margin-bottom:20px;"><strong>Benefit</strong></label><?php } ?>
                                    <input id="iratesSum1" class="form-control" name="iratesSum1[]" class="form-control"
                                        value="{{ $range->sum_insured }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <div class="row dayrange_<?php echo $prow; ?>">
                                        <?php
                        $r = 0;
                        $sub_ranges_q = DB::table('wp_dh_plan_day_rate')->where('plan_id' , $data->id)->where('minage' , $range->minage)->where('maxage' , $range->maxage)->orderby('id')->get();
                        $sub_ranges_num = $sub_ranges_q->count();
                        foreach($sub_ranges_q as $sub){
                        $r++;
                        ?>
                                        <div class="col-md-1 rangegroup_<?php echo $r; ?>" style="padding:0;">
                                            <?php if($prow == 1){?>
                                            <div class="col-md-12" style="padding:0;">
                                                <input placeholder="Days Range" class="form-control" id="days_rate_range"
                                                    name="days_rate_range1[]" class="form-control"
                                                    value="{{ $sub->range_rate }}" type="text">
                                            </div>
                                            <?php } ?>
                                            <div class="col-md-12" style="padding:0;">
                                                <input id="days_rate" placeholder="Price" class="form-control"
                                                    name="days_rate<?php echo $prow; ?>[]" class="form-control"
                                                    value="{{ $sub->rate }}" type="text">
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php }
                }
            $sub_ranges_q = DB::table('wp_dh_plan_day_rate')->where('plan_id' , $data->id)->orderby('id')->get();
            $sub_ranges_num = $sub_ranges_q->count();
             ?>
                            <div id="appendRates1"></div>
                            <input type="hidden" id="currentragerows" value="<?php if ($data->id && $sub_ranges_num > 0) {
                                echo $sub_ranges_num;
                            } else {
                                echo '1';
                            } ?>" />
                            <input type="hidden" id="pricerows" value="<?php if ($data->id && $ranges_num > 0) {
                                echo $ranges_num;
                            } else {
                                echo '1';
                            } ?>" />
                            <div class="clear" style="clear:both; height:10px;"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)" class="btn btn-default btn-sm addnewItem"
                                        onclick="addmultirate();"><i class="fa fa-plus"></i> Add Item</a>
                                    <a href="javascript:void(0)" class="btn btn-default btn-sm copyRates1 addnewItem"><i
                                            class="fa fa-copy"></i> Copy Items</a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm addnewItem"
                                        onclick="removemultirate();"><i class="fa fa-trash"></i> Remove Items</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)" class="btn btn-default btn-sm addnewItem"
                                        onclick="adddayrange();"><i class="fa fa-plus"></i> Add Day Range</a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm addnewItem"
                                        onclick="removedayrange();"><i class="fa fa-trash"></i> Remove Day Range</a>
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
                        <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i
                                class="fa fa-leaf"></i> Manage Deductables</h4>
                        <div class="row">
                            <div class="col-md-6"><label style="margin:0; padding:0;"><strong>Deductable
                                        Amount</strong></label></div>
                            <div class="col-md-6"><label style="margin:0; padding:0;"><strong>Deductable Rate
                                        (%)</strong></label></div>
                        </div>
                        <?php
            $sr = 0;
            $de_q = DB::table('wp_dh_insurance_plans_deductibles')->where('plan_id' , $data->id)->get();
            $de_num = $de_q->count();
            foreach($de_q as $r){
            $sr++;
            if($sr == 1){
            $class = 'appended';
            
         ?>
                        <div id="deductionAppend">
                            <div class="row" style="margin-top:10px; margin-bottom:0; margin-right:0; margin-left:0;">
                                <div class="col-md-6 unit">
                                    <div class="widget left-50">
                                        <input name="ideductHash[]" id="ideductHash1" class="form-control"
                                            value="{{ $r->deductible1 }}" placeholder="Deductible 1" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 unit">
                                    <div class="widget left-50">
                                        <input name="ideductPer[]" id="ideductPer1" class="form-control"
                                            value="{{ $r->deductible2 }}" placeholder="Deductible 1" type="text">
                                    </div>
                                </div>
                            </div>
                            <?php } else {?>

                            <div class="row appended"
                                style="margin-top:10px; margin-bottom:0; margin-right:0; margin-left:0;">
                                <div class="col-md-6 unit">
                                    <div class="widget left-50">
                                        <input name="ideductHash[]" id="ideductHash1" class="form-control"
                                            value="{{ $r->deductible1 }}" placeholder="Deductible 1" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 unit">
                                    <div class="widget left-50">
                                        <input name="ideductPer[]" id="ideductPer1" class="form-control"
                                            value="{{ $r->deductible2 }}" placeholder="Deductible 1" type="text">
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                            <?php } ?>


                        </div>
                        <div class="col-md-6">
                            <a href="javascript:void(0)" class="btn btn-default btn-sm addDeduct addnewItem"><i
                                    class="fa fa-plus"></i> Add Item</a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-sm removeDeduct addnewItem"><i
                                    class="fa fa-trash"></i> Remove Item</a>
                        </div>
                        <div class="clear">&nbsp;</div>
                        <div class="clear"></div>
                        <hr>
                    </div>
                    <div class="clear"></div>
                    <!-- Third Section -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i
                                        class="fa fa-file"></i> PDF Policy</h4>
                                <div class="mt-3">
                                    <label>Plan PDF (Pre Eisting)</label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel"  class="form-control" name="plan_pdf_pre_existing">
                                </div>
                                <div class="mt-3">
                                    <label>Benifits Summary (Pre Eisting)</label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel"  class="form-control" name="benifit_summary_pre_existing">
                                </div>
                                <div class="mt-3">
                                    <label>Plan PDF (Without Pre Eisting)</label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel"  class="form-control" name="plan_pdf_without_pre_existing">
                                </div>
                                <div class="mt-3">
                                    <label>Benifits Summary (Without Pre Eisting)</label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel"  class="form-control"
                                        name="benifit_summary_without_pre_existing">
                                </div>
                                <div id="appendPDFpolicy"></div>
                                <div class="clear"></div>
                                <div class="col-md-12" style="display:none;">
                                    <a href="javascript:void(0)" class="btn btn-default btn-sm addPDF addnewItem"><i
                                            class="fa fa-plus"></i> Add Item</a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm removePDF addnewItem"><i
                                            class="fa fa-trash"></i> Remove Item</a>
                                    <div class="clear">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px;"><i
                                        class="fa fa-file"></i> View PDFs</h4>
                                <div class="mt-3">
                                    @if ($data->plan_pdf_pre_existing)
                                        <a target="_blank"
                                            href="{{ url('public/images') }}/{{ $data->plan_pdf_pre_existing }}"
                                            class="btn btn-primary btn-sm">View Plan PDF Pre Exisitng</a>
                                    @else
                                        <b style="color:red;">No PDF</b>
                                    @endif
                                </div>
                                <div class="mt-3">
                                    @if ($data->benifit_summary_pre_existing)
                                        <a target="_blank"
                                            href="{{ url('public/images') }}/{{ $data->benifit_summary_pre_existing }}"
                                            class="btn btn-primary btn-sm">View Benifit Summary Pre Exisitng</a>
                                    @else
                                        <b style="color:red;">No PDF</b>
                                    @endif
                                </div>
                                <div class="mt-3">
                                    @if ($data->plan_pdf_without_pre_existing)
                                        <a target="_blank"
                                            href="{{ url('public/images') }}/{{ $data->plan_pdf_without_pre_existing }}"
                                            class="btn btn-primary btn-sm">View Plan PDF Without Pre Exisitng</a>
                                    @else
                                        <b style="color:red;">No PDF</b>
                                    @endif
                                </div>


                                <div class="mt-3">
                                    @if ($data->benifit_summary_without_pre_existing)
                                        <a target="_blank"
                                            href="{{ url('public/images') }}/{{ $data->benifit_summary_without_pre_existing }}"
                                            class="btn btn-primary btn-sm">View Benifit Summary Without Pre Exisitng</a>
                                    @else
                                        <b style="color:red;">No PDF</b>
                                    @endif
                                </div>
                            </div>
                            <div class="clear"></div>
                            <hr>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Fourth Section -->
                    <div class="col-md-12" id="featureShow" style="display:block">
                        <h4 class="item-sub" style="margin: 0;margin-bottom: 20px;margin-top: 5px; color:#c00;"><i
                                class="fa fa-database"></i> Manage Features</h4>
                        <div class="original">
                            @foreach (DB::table('wp_dh_insurance_plans_features')->where('plan_id', $data->id)->get() as $r)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-11">
                                        <input id="ifeaturelist{{ $r->id }}" onkeyup="changebuttoncolor({{$r->id}})" name="ifeaturelist[]" class="form-control"
                                        value="{{ $r->features }}" placeholder="Enter Feature List # 1" type="text">
                                    </div>
                                    <div class="col-md-1">
                                        <i onclick="saveplanfeature({{ $r->id }})" id="buttoncolor{{ $r->id }}" class="fa fa-save btn btn-success"></i>
                                        <i onclick="deleteplanfeature({{ $r->id }})" class="fa fa-trash btn btn-danger"></i>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div id="appendFeatures"></div>
                        <div class="">
                            <a href="javascript:void(0)" class="btn btn-default btn-sm addFeatures addnewItem"><i
                                    class="fa fa-plus"></i> Add Item</a>
                            <div class="clear">&nbsp;</div>
                        </div>
                        <hr>
                    </div>
                    <!--  </div> -->
                    <div class="clear"></div>
                    <div class="row" style="margin: 0; margin-bottom: 20px; margin-top: 5px; color: #c00;">
                        <div class="col-md-12"> <br />
                            <button type="submit" name="submit" class="btn btn-success submit-btn addnewItem"
                                onclick="$('.sr').prop('checked', true);"><i class="fa fa-save"></i> Submit
                                Changes</button>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </form>
    </div>

@endsection
@section('script')


    <script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js') }}"></script>
    <script>
        function saveplanfeature(id) {
            var value = $('#ifeaturelist'+id).val();

            $.ajax({
                type: 'get',
                url: '{{ url("admin/plans/saveplanfeature") }}/?id='+id+'&value='+value,
                success: function(response) {
                    $('#buttoncolor'+id).removeClass('btn-primary');
                    $('#buttoncolor'+id).addClass('btn-success');
                    
                }
            });
        }
        function changebuttoncolor(id) {
            $('#buttoncolor'+id).removeClass('btn-success');
            $('#buttoncolor'+id).addClass('btn-primary');
        }
        function deleteplanfeature(id) 
        {
            $.ajax({
                type: 'get',
                url: '{{ url("admin/plans/deletefeature") }}/'+id,
                success: function(response) {
                    $('.original').html(response)
                }
            });
        }
        function submitfunc() {
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
            var range = "";
            //alert(countRange);
            for (var i = 1; i <= countRange; i++) {
                range += '<div class="col-md-1 rangegroup_' + i + '" style="padding:0;">' +
                    '<div class="col-md-12" style="padding:0;">' +
                    '<input id="days_rate" placeholder="Price" class="form-control" name="days_rate' + pricerows +
                    '[]" class="form-control" value="" type="text">' +
                    '</div></div>';
            }
            // alert(countRates);
            jQuery('#appendRates1').append(
                '<div class="row ' + ' pricerow_' + pricerows + '">' +
                '<div class="col-md-1" style="width: auto;margin-right: 10px;">' +
                '<div class="col-md-12 text-center" style="padding:0 21px;">' +
                '<label class="checkbox" style="margin:0;">' +
                '<input type="checkbox" value="' + pricerows +
                '" id="sr[]" class="form-control sr" name="sr[]" style="margin: 0;">' +
                '<i style="top: 0;"></i>' +
                '</label>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-1">' +
                '<input id="iratesMin1" class="form-control" class="form-control" name="iratesMin1[]" value="" type="text">' +
                '</div>' +
                '<div class="col-md-1">' +
                '<input id="iratesMax1" class="form-control" name="iratesMax1[]" class="form-control" value="" type="text">' +
                '</div>' +
                '<div class="col-md-2 margin5">' +
                '<input id="iratesSum1" class="form-control" name="iratesSum1[]" class="form-control" value="" type="text">' +
                '</div><div class="col-md-6"><div class="dayrange_' + pricerows + ' row">' + range +
                '</div>' +
                '</div>' +
                '</div>');

            document.getElementById('pricerows').value = pricerows;
            // alert(range); 
        }

        function adddayrange() {
            var rangerows = parseInt(document.getElementById('pricerows').value);
            var countranges = parseInt(document.getElementById('currentragerows').value) + 1;
            var realvalue = parseInt(document.getElementById('currentragerows').value);
            for (var d = 1; d <= rangerows; d++) {

                if (d == '1') {
                    var addlable =
                        '<div class="col-md-12" style="padding: 0;">' +
                        '<input placeholder="Days Range" class="form-control" id="days_rate_range" name="days_rate_range1[]" class="form-control" value="" type="text">' +
                        '</div>';
                } else {
                    var addlable = '';
                }

                //alert('dayrange_'+d);
                jQuery('.dayrange_' + d).append(
                    '<div class="col-md-1 rangegroup_' + countranges + '" style="padding:0;">' + addlable +
                    '<div class="col-md-12" style="padding:0;">' +
                    '<input id="days_rate" placeholder="Price" class="form-control" name="days_rate' + d +
                    '[]" class="form-control" value="" type="text">' +
                    '</div></div>');
            }
            document.getElementById('currentragerows').value = countranges;

        }

        function removedayrange() {
            var countranges = parseInt(document.getElementById('currentragerows').value) - 1;
            if (document.getElementById('currentragerows').value == 1) {
                alert('Can not delete first day range.');
            } else {
                $('.rangegroup_' + countranges).remove();
                document.getElementById('currentragerows').value = countranges;
            }

        }

        function removemultirate() {
            event.preventDefault();
            var searchIDs = $("#day_basis input:checkbox:checked").map(function() {
                return $(this).val();
            }).get(); // <----
            console.log(searchIDs);
            //var arraysize = searchIDs.length;
            //alert(arraysize);
            //var crntrows = parseInt(document.getElementById('pricerows').value) - 1;
            //document.getElementById('pricerows').value = crntrows - arraysize;

            searchIDs.forEach(function(entry) {
                $('.pricerow_' + entry).remove();
            });
            //


        }
    </script>

    <script type="text/javascript">
        jQuery('.addRates').click(function(event) {
            var countRates = jQuery('#appendRates .appendRates').size() + 2;
            var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
            var countRange = jQuery('#append_day_range .append_day_range').size() + 1;
            var range = "";
            //alert(countRange);
            for (var i = 0; i < countRange; i++) {
                range += '<div class="col-md-3">' +
                    '<div class="input">' +
                    '<input type="text" id="days_rate' + countRates + '" name="days_rate' + countRates1 +
                    '[]" class="form-control">' +
                    '</div>' +
                    '</div>';
            }
            // alert(countRates);

            jQuery('#appendRates').append(
                '<div class="appendRates row" id="row_' + +new Date() + '">' +
                '<div class="col-md-1" style="width: auto;margin-right: 10px;">' +
                '<label class="checkbox"><input type="checkbox" value="' + +new Date() +
                '" id="rt[]" name="rt[]"><i></i></label>' +
                '</div>' +
                '<div class="col-md-2">' +
                '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" class="min_' + +
                new Date() + ' form-control">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" class="max_' + +
                new Date() + ' form-control">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" class="sum_' + +
                new Date() + ' form-control">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<input type="text" id="iratesRatewithout' + countRates +
                '" name="iratesRatewithout[]" class="form-control">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<input type="text" id="iratesRate' + countRates +
                '" name="iratesRate[]" class="form-control">' +
                '</div>' +
                
                '</div>');
            // alert(range);
        })

        //REMOVE PLAN RATES
        jQuery('.removeRates').click(function(event) {

            var rt_values = $("input:checkbox[name='rt[]']:checked").map(function() {
                return $(this).val();
            }).get();
            console.log(rt_values);
            var rt_checklength = rt_values.length;
            if (rt_checklength == 0) {
                alert('Please select an item first');
            } else {
                for (r = 0; r < rt_checklength; r++) {
                    //alert(rt_values[r]);
                    jQuery('#appendRates #row_' + rt_values[r]).remove();
                }
            }

            //jQuery('#appendRates .appendRates:last-of-type').remove();

        });

        //Copy Rates
        jQuery('.copyRates').click(function(event) {
            var countRates = jQuery('#appendRates .appendRates').size() + 2;
            var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
            var countRange = jQuery('#append_day_range .append_day_range').size() + 1;
            var range = "";
            //alert(countRange);
            var copy_values = $("input:checkbox[name='rt[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var copy_checklength = copy_values.length;
            if (copy_checklength == 0) {
                alert('Please select an item to copy');
            } else {
                for (var i = 0; i < copy_checklength; i++) {
                    iratesMin_value = $('.min_' + copy_values[i]).val();
                    iratesMax_value = $('.max_' + copy_values[i]).val();
                    iratesSum_value = $('.sum_' + copy_values[i]).val();
                    console.log(iratesMin_value);

                    range += '<div class="col-md-3 margin5">' +
                        '<div class="input">' +
                        '<input type="text" id="days_rate' + countRates + '" name="days_rate' + countRates1 +
                        '[]" class="form-control">' +
                        '</div>' +
                        '</div>';

                    jQuery('#appendRates').append(
                        '<div class="appendRates" id="row_' + +new Date() + '"><div class="col-md-12 unit">' +
                        '<div class="row">' +
                        '<div class="col-md-1 margin5" style="width: auto;margin-right: 10px;">' +
                        '<label class="checkbox"><input type="checkbox" value="' + +new Date() +
                        '" id="rt[]" name="rt[]"><i></i></label>' +
                        '</div>' +
                        '<div class="col-md-2 margin5">' +
                        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" value="' +
                        iratesMin_value + '" class="form-control">' +
                        '</div>' +
                        '<div class="col-md-2 margin5">' +
                        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" value="' +
                        iratesMax_value + '" class="form-control">' +
                        '</div>' +
                        '<div class="col-md-2 margin5 nopad">' +
                        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" value="' +
                        iratesSum_value + '" class="form-control">' +
                        '</div>' +
                        '<div class="col-md-2">' +
                        '<input type="text" id="iratesRate' + countRates +
                        '" name="iratesRate[]" class="form-control">' +
                        '</div>' +
                        '<div class="col-md-2">' +
                        '<input type="text" id="iratesRatewithout' + countRates +
                        '" name="iratesRatewithout[]" class="form-control">' +
                        '</div>' +
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
                '<input type="text" name="ideductHash[]" id="ideductHash' + count +
                '" placeholder="Deductible ' + count + '" class="form-control">' +

                '</div>' +

                '</div> ' +

                '<div class="col-md-6 unit">' +

                '<div class="widget left-50">' +
                '<input type="text" name="ideductPer[]" id="ideductPer' + count + '" placeholder="Deductible ' +
                count + '" class="form-control">' +

                '</div>' +

                '</div></div>');

        });

        jQuery('.removeDeduct').click(function(event) {

            /* Remove the last child for deductible */

            jQuery('#deductionAppend .appended:last-of-type').remove();

        });
        jQuery('.addFeatures').click(function(event) {
            var planid = '{{ $data->id }}';
            $.ajax({
                type: 'get',
                url: '{{ url("admin/plans/addFeatures") }}/?plan_id='+planid,
                success: function(response) {
                    $('.original').html(response)          
                }
            });
        })
    </script>
@endsection
