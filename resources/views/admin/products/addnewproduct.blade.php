@extends('admin.layouts.main-layout')
@section('title','Add New Product')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            @include('alerts.index')
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" type="text/css" href="http://localhost/lifeadvice/quote/admin/assets/css/essentials.css">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Enter Product Details
                                    <div class="text-muted pt-2 font-size-sm">Add New Product</div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" style="padding:0;">
                                    <div class="col-md-12">
                                        <label><strong>Supervisa Product ?</strong> <small>(Is this super visa product ?)</small></label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="switch switch-success switch-round">
                                            <input type="checkbox" name="pro_supervisa" id="pro_supervisa" value="1">
                                            <span class="switch-label" data-on="YES" data-off="NO"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label><strong>Life Insurance Product ?</strong> <small>(Is this life insurance product ?)</small></label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="switch switch-success switch-round">
                                            <input type="checkbox" name="pro_life" id="pro_life" value="1" >
                                            <span class="switch-label" data-on="YES" data-off="NO"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">       
                                    <div class="col-md-12">
                                    <label><strong>Product Name <span class="text-danger">*</span></strong></label>
                                    <!-- date picker -->
                                    <input class="form-control" type="text" id="pro_name" name="pro_name" placeholder="Enter product name"  />
                                    </div>
                             </div>
                             <div class="row">      
                                <div class="col-md-12">
                                    <label><strong>Parent Product <small>(optional)</small></strong></label>
                                </div>
                                <div class="col-md-12">
                                    <div class="fancy-form fancy-form-select">
                                        <select class="form-control" name="pro_parent" id="pro_parent">
                                            <option value="">--- None ---</option>
                                            @foreach(DB::table('wp_dh_products')->get() as $r)
                                            <option value="{{ $r->pro_id }}">{{ $r->pro_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                             </div>
                             <div class="row">      
                                    <div class="col-md-12">
                                    <label><strong>Product Buynow URL <span class="text-danger">*</span></strong></label>
                                    <!-- date picker -->
                                    <input class="form-control" type="text" id="pro_url" name="pro_url" placeholder="https://"  />
                                    </div>
                             </div>
                             <div class="row">      
                                    <div class="col-md-12">
                                    <label><strong>Redirect from URL</strong></label>
                                        <div>
                                            <span style="float: left;margin: 10px;">https://lifeadvice.ca/</span>
                                            <input class="form-control" type="text" id="redirect_from_url" name="redirect_from_url"  style="float: left;width:50%;" />
                                        </div>
                                    </div>
                             </div>
                             <div class="row">
                                <div class="col-md-12">
                                <label><strong>Choose Quote Form <span class="text-danger">*</span></strong> <small>Select the quote form design you want to use.</small></label>
                                </div>
                                <div class="col-md-12">
                                    <div class="design-select" onclick="formone()" id="form1">
                                        <img src="{{ url('public/images/form-one.png') }}">
                                    </div>
                                    <div class="design-select" onclick="formtwo()" id="form2">
                                        <img src="{{ url('public/images/form-two.png') }}">
                                    </div>
                                    <div class="design-select" onclick="formthree()" id="form3">
                                        <img src="{{ url('public/images/form-three.png') }}">
                                    </div>
                                    <div class="design-select" onclick="formfour()" id="form4">
                                        <img src="{{ url('public/images/form-four.png') }}">
                                    </div>
                                    <div class="design-select" onclick="formfive()" id="form5">
                                        <img src="{{ url('public/images/form-five.png') }}">
                                    </div>
                                    <div class="design-select" onclick="formsix()" id="form6">
                                        <img src="{{ url('public/images/form-six.png') }}">
                                    </div>
                                    <div class="design-select" onclick="formseven()" id="form7">
                                        <img src="{{ url('public/images/form-seven.png') }}">
                                    </div>                                  
                                    <input type="hidden" name="prod[form_layout]" id="form_layout" value="" />
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <label><strong>Choose Prices Display <span class="text-danger">*</span></strong> <small>Select the design you want to use to show prices.</small></label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="design-select" onclick="pricesone()" id="prices1">
                                            <img src="{{ url('public/images/prices-one.png') }}">
                                        </div>
                                        <div class="design-select" onclick="pricestwo()" id="prices2">
                                            <img src="{{ url('public/images/prices-two.png') }}">
                                        </div>
                                        <div class="design-select" onclick="pricesthree()" id="prices3">
                                            <img src="{{ url('public/images/prices-three.png') }}">
                                        </div>
                                        <div class="design-select" onclick="pricesfour()" id="prices4">
                                            <img src="{{ url('public/images/prices-four.png') }}">
                                        </div>
                                        <div class="design-select" onclick="pricesfive()" id="prices5">
                                            <img src="{{ url('public/images/prices-five.png') }}">
                                        </div>
                                        <div class="design-select" onclick="pricessix()" id="prices6">
                                            <img src="{{ url('public/images/prices-six.png') }}">
                                        </div>
                                        <div class="design-select" onclick="pricesseven()" id="prices7">
                                            <img src="{{ url('public/images/prices-seven.png') }}">
                                        </div>
                                        <div class="design-select" onclick="priceseight()" id="prices8">
                                            <img src="{{ url('public/images/prices-eight.png') }}">
                                        </div>
                                        <input type="hidden" name="prod[price_layout]" id="price_layout"  />
                                    </div>                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Product Fields & Ordering
                                    <div class="text-muted pt-2 font-size-sm">Drag and drop to set ordering</div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-12">
                                        <ul id="sortable" class="connectedSortable sortingfields">
                                            <li class="ui-state-default" id="id_1" >
                                                <label class="checkbox">
                                                <input name="sort[]" value="1"  type="hidden">
                                                <input name="prod[fname]" id="fname"  type="checkbox"><i></i>
                                                First Name</label>
                                            </li>                                          
                                            <li class="ui-state-default"  id="id_2">
                                                <label class="checkbox">
                                                <input name="sort[]" value="2"  type="hidden">
                                                <input name="prod[lname]" id="lname"  type="checkbox"><i></i>
                                                Last Name</label>
                                            </li>
                                            <li class="ui-state-default"    id="id_3" >
                                                <label class="checkbox">
                                                <input name="sort[]" value="3"  type="hidden">
                                                <input name="prod[dob]" id="dob"  type="checkbox"><i></i>
                                                Date of Birth</label>
                                            </li>
                                            <li class="ui-state-default"  id="id_4" >
                                                <label class="checkbox">
                                                <input name="sort[]" value="4"  type="hidden">
                                                <input name="prod[email]" id="email"   type="checkbox"><i></i>
                                                Email Address</label>
                                            </li>                                         
                                            <li class="ui-state-default"   id="id_5" >
                                                <label class="checkbox">
                                                <input name="sort[]" value="5"  type="hidden">
                                                <input name="prod[Smoke12]" id="Smoke12"   type="checkbox"><i></i>
                                                Smoke in last 12 month (yes/no)
                                                </label>
                                            </li>
                                            <li class="ui-state-default"  id="id_6" >
                                                <label class="checkbox"  style="display: inline-block;">
                                                <input name="sort[]" value="6"  type="hidden">
                                                <input name="prod[Country]" id="Country"  type="checkbox"><i></i>
                                                Destination Country</label><br/>
                                                <label><input type="radio" name="destinationtype" value="worldwide"> Worldwide</label>
                                                <label><input type="radio" name= "destinationtype" value="canada">Canada Only</label>
                                            </li>
                                            <li class="ui-state-default"   id="id_7" >
                                                <label class="checkbox">
                                                <input name="sort[]" value="7"  type="hidden">
                                                <input name="prod[phone]" id="phone"  type="checkbox"><i></i>
                                                Phone Number</label>
                                            </li>
                                            <li class="ui-state-default"  id="id_8">
                                                <label class="checkbox">
                                                <input name="sort[]" id="sdate_sort" value="8"  type="hidden">
                                                <input name="prod[sdate]" id="sdate"  type="checkbox"><i></i>
                                                Start Date</label>
                                            </li>
                                            <li class="ui-state-default"   id="id_9"  >
                                                <label class="checkbox">
                                                <input name="sort[]" id="edate_sort" value="9"  type="hidden">
                                                <input name="prod[edate]" id="edate"  type="checkbox"><i></i>
                                                End Date
                                                </label>
                                            </li>
                                            <li class="ui-state-default" id="id_10" >
                                                <label class="checkbox" style="display: inline-block;">
                                                <input name="sort[]" id="traveller_sort" value="10"  type="hidden">
                                                <input name="prod[traveller]" id="traveller"  type="checkbox"><i></i>
                                                Number of Traveller's
                                                </label>
                                                <input type="number" name="prod[traveller_number]"  value="" min="1" max="8" step="1" >
                                            </li>
                                            <li class="ui-state-default"  id="id_11" >
                                                <label class="checkbox">
                                                <input name="sort[]" id="smoked_sort" value="11"  type="hidden">
                                                <input name="prod[smoked]" id="smoked" type="checkbox"> <i></i>
                                                Traveller Smoked
                                                </label>
                                            </li>
                                            <li class="ui-state-default"   id="id_12" >
                                                <label class="checkbox">
                                                <input name="sort[]" id="traveller_gender_sort" value="12"  type="hidden">
                                                <input name="prod[traveller_gender]" id="traveller_gender" type="checkbox"> <i></i>
                                                Oldest Traveller's Gender
                                                </label>
                                            </li>
                                            <li class="ui-state-default"     id="id_13"  >
                                            <label class="checkbox" style="display: inline-block;">
                                            <input name="sort[]" id="us_stop_sort" value="13"  type="hidden">
                                            <input name="prod[us_stop]" id="us_stop"  type="checkbox"> <i></i>
                                            Stopover in US (Days)
                                            </label>
                                            <input type="number" name="prod[us_stop_days]" min="0" max="30" step="1" value="" style="display:none3;" >
                                            </li>
                                            <li class="ui-state-default"  id="id_14">
                                            <label class="checkbox">
                                            <input name="sort[]" id="gender_sort" value="14"  type="hidden">
                                            <input name="prod[gender]" id="gender"  type="checkbox"><i></i>
                                            Gender
                                            </label>
                                            </li>
                                            <li class="ui-state-default"    id="id_15"  >
                                            <label class="checkbox">
                                            <input name="sort[]" id="fplan_sort" value="15"  type="hidden">
                                            <input name="prod[fplan]" id="fplan"  type="checkbox"> <i></i>
                                            Family Plan
                                            </label>
                                            </li>
                                            <li class="ui-state-default"   id="id_16" >
                                            <label class="checkbox">
                                            <input name="sort[]" id="pre_existing_sort" value="16"  type="hidden">
                                            <input name="prod[pre_existing]" id="pre_existing"  type="checkbox" > <i></i>
                                            Pre-existing Condition
                                            </label>
                                            </li>
                                            <li class="ui-state-default"  id="id_17">
                                            <label class="checkbox">
                                            <input name="sort[]" id="sum_insured_sort" value="17"  type="hidden">
                                            <input name="prod[sum_insured]" id="sum_insured" type="checkbox"> <i></i>
                                            Sum Insured Amount
                                            </label>
                                            </li>
                                            <li class="ui-state-default"   id="id_1" >
                                            <label class="checkbox">
                                            <input name="sort[]" value="1"  type="hidden">
                                            <input name="prod[fname]" id="fname"  type="checkbox"><i></i>
                                            First Name</label>
                                            </li>
                                            <li class="ui-state-default"  id="id_2">
                                            <label class="checkbox">
                                            <input name="sort[]" value="2"  type="hidden">
                                            <input name="prod[lname]" id="lname"  type="checkbox"><i></i>
                                            Last Name</label>
                                            </li>
                                            <li class="ui-state-default"    id="id_3" >
                                            <label class="checkbox">
                                            <input name="sort[]" value="3"  type="hidden">
                                            <input name="prod[dob]" id="dob"  type="checkbox"><i></i>
                                            Date of Birth</label>
                                            </li>

                                            <li class="ui-state-default"  id="id_4" >
                                            <label class="checkbox">
                                            <input name="sort[]" value="4"  type="hidden">
                                            <input name="prod[email]" id="email"   type="checkbox"><i></i>
                                            Email Address</label>
                                            </li>
                                            <li class="ui-state-default"   id="id_5" >
                                            <label class="checkbox">
                                            <input name="sort[]" value="5"  type="hidden">
                                            <input name="prod[Smoke12]" id="Smoke12"   type="checkbox"><i></i>
                                            Smoke in last 12 month (yes/no)
                                            </label>
                                            </li>

                                            <li class="ui-state-default"  id="id_6" >
                                            <label class="checkbox"  style="display: inline-block;">
                                            <input name="sort[]" value="6"  type="hidden">
                                            <input name="prod[Country]" id="Country"  type="checkbox"><i></i>
                                            Destination Country</label><br/>
                                            <label><input type="radio" name="destinationtype" value="worldwide" checked> Worldwide</label>
                                            <label><input type="radio" name= "destinationtype" value="canada">Canada Only</label>
                                            </li>

                                            <li class="ui-state-default"   id="id_7" >
                                            <label class="checkbox">
                                            <input name="sort[]" value="7"  type="hidden">
                                            <input name="prod[phone]" id="phone"  type="checkbox"><i></i>
                                            Phone Number</label>
                                            </li>

                                            <li class="ui-state-default"  id="id_8">
                                            <label class="checkbox">
                                            <input name="sort[]" id="sdate_sort" value="8"  type="hidden">
                                            <input name="prod[sdate]" id="sdate"  type="checkbox"><i></i>
                                            Start Date</label>
                                            </li>

                                            <li class="ui-state-default"   id="id_9"  >
                                            <label class="checkbox">
                                            <input name="sort[]" id="edate_sort" value="9"  type="hidden">
                                            <input name="prod[edate]" id="edate"  type="checkbox"><i></i>
                                            End Date
                                            </label>
                                            </li>
                                            <li class="ui-state-default" id="id_10" >
                                            <label class="checkbox" style="display: inline-block;">
                                            <input name="sort[]" id="traveller_sort" value="10"  type="hidden">
                                            <input name="prod[traveller]" id="traveller"  type="checkbox"><i></i>
                                            Number of Traveller's
                                            </label>
                                            <input type="number" name="prod[traveller_number]"  value="1" min="1" max="8" step="1" >
                                            </li>
                                            <li class="ui-state-default"  id="id_11" >
                                            <label class="checkbox">
                                            <input name="sort[]" id="smoked_sort" value="11"  type="hidden">
                                            <input name="prod[smoked]" id="smoked" type="checkbox"> <i></i>
                                            Traveller Smoked
                                            </label>
                                            </li>
                                            <li class="ui-state-default"   id="id_12" >
                                            <label class="checkbox">
                                            <input name="sort[]" id="traveller_gender_sort" value="12"  type="hidden">
                                            <input name="prod[traveller_gender]" id="traveller_gender" type="checkbox"> <i></i>
                                            Oldest Traveller's Gender
                                            </label>
                                            </li>
                                            <li class="ui-state-default"     id="id_13"  >
                                            <label class="checkbox" style="display: inline-block;">
                                            <input name="sort[]" id="us_stop_sort" value="13"  type="hidden">
                                            <input name="prod[us_stop]" id="us_stop"  type="checkbox"> <i></i>
                                            Stopover in US (Days)
                                            </label>
                                            <input type="number" name="prod[us_stop_days]" min="0" max="30" step="1" value="0" style="display:none3;" >
                                            </li>
                                            <li class="ui-state-default"  id="id_14">
                                            <label class="checkbox">
                                            <input name="sort[]" id="gender_sort" value="14"  type="hidden">
                                            <input name="prod[gender]" id="gender"  type="checkbox"><i></i>
                                            Gender
                                            </label>
                                            </li>
                                            <li class="ui-state-default"    id="id_15"  >
                                            <label class="checkbox">
                                            <input name="sort[]" id="fplan_sort" value="15"  type="hidden">
                                            <input name="prod[fplan]" id="fplan"  type="checkbox"> <i></i>
                                            Family Plan
                                            </label>
                                            </li>
                                            <li class="ui-state-default"   id="id_16" >
                                            <label class="checkbox">
                                            <input name="sort[]" id="pre_existing_sort" value="16"  type="hidden">
                                            <input name="prod[pre_existing]" id="pre_existing"  type="checkbox"> <i></i>
                                            Pre-existing Condition
                                            </label>
                                            </li>
                                            <li class="ui-state-default"  id="id_17">
                                            <label class="checkbox">
                                            <input name="sort[]" id="sum_insured_sort" value="16"  type="hidden">
                                            <input name="prod[sum_insured]" id="sum_insured" type="checkbox"> <i></i>
                                            Sum Insured Amount
                                            </label>
                                            </li>                                        
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection