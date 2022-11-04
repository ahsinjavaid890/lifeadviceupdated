   @extends('admin.layouts.main-layout') 
   @section('title','Edit Product') 
   @section('content') 
<div id="content" class="padding-20">
    <!-- 
      PANEL CLASSES:
         panel-default
         panel-danger
         panel-warning
         panel-info
         panel-success
      INFO:    panel collapse - stored on user localStorage (handled by app.js _panels() function).
            All pannels should have an unique ID or the panel collapse status will not be stored!
      -->
    <form method="post" action="?action=update" id="productform" enctype="multipart/form-data" style="padding: 40px;">
        <div class="row">
            <div class="panel panel-default col-md-8" style="padding:0;">
                <!--<div class="panel-heading panel-heading-transparent">
               <strong>Enter Product Details</strong>
               </div>-->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-primary" style="margin:0;"><strong><i class="fa fa-umbrella"></i> Enter Product Details</strong></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="padding:0;">
                            <div class="col-md-12"> <label><strong>Supervisa Product ?</strong> <small>(Is this super visa product ?)</small></label> </div>
                            <div class="col-md-12"> <label class="switch switch-success switch-round"> <input type="checkbox" name="pro_supervisa" id="pro_supervisa" value="1" checked=""> <span class="switch-label" data-on="YES" data-off="NO"></span> </label> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12"> <label><strong>Life Insurance Product ?</strong> <small>(Is this life insurance product ?)</small></label> </div>
                            <div class="col-md-12"> <label class="switch switch-success switch-round"> <input type="checkbox" name="pro_life" id="pro_life" value="1"> <span class="switch-label" data-on="YES" data-off="NO"></span> </label> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <label><strong>Product Name <span class="text-danger">*</span></strong></label> <!-- date picker --> <input class="form-control" type="text" id="pro_name" name="pro_name" placeholder="Enter product name" value="Super Visa Insurance"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <label><strong>Parent Product <small>(optional)</small></strong></label> </div>
                        <div class="col-md-12">
                            <div class="fancy-form fancy-form-select"> <select class="form-control" name="pro_parent" id="pro_parent">
                                    <option value="">--- None ---</option>
                                    <option value="2">Visitors to Canada</option>
                                    <option value="15">Term Insurance</option>
                                    <option value="3">Student Insurance</option>
                                    <option value="4">Insurance For Canadians</option>
                                    <option value="5">Single Trip</option>
                                    <option value="6">Multi Trip Insurance</option>
                                    <option value="7">All Inclusive Trip</option>
                                    <option value="8">Trip Interruption Insurance</option>
                                    <option value="9">Baggage Claim Insurance</option>
                                    <option value="20">Life Insurance</option>
                                    <option value="23">Super Visa Insurance</option>
                                </select> <i class="fancy-arrow"></i> </div>
                        </div>
                    </div>
                    <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/sortable.css')}}">
                    <div class="row">
                        <div class="col-md-12"> <label><strong>Product Buynow URL <span class="text-danger">*</span></strong></label> <!-- date picker --> <input class="form-control" type="text" id="pro_url" name="pro_url" placeholder="https://" value=""> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <label><strong>Redirect from URL</strong></label>
                            <div> <span style="float: left;margin: 10px;">https://lifeadvice.ca/</span> <input class="form-control" type="text" id="redirect_from_url" name="redirect_from_url" value="" style="float: left;width:50%;"> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <label><strong>Choose Quote Form <span class="text-danger">*</span></strong> <small>Select the quote form design you want to use.</small></label> </div>
                        <div class="col-md-12">
                            <div class="design-select " onclick="formone()" id="form1"> <img src="{{ asset('public/front/layouts/form-one.png')}}"> </div>
                            <div class="design-select " onclick="formtwo()" id="form2"> <img src="{{ asset('public/front/layouts/form-two.png')}}"> </div>
                            <div class="design-select " onclick="formthree()" id="form3"> <img src="{{ asset('public/front/layouts/form-three.png')}}"> </div>
                            <div class="design-select " onclick="formfour()" id="form4"> <img src="{{ asset('public/front/layouts/form-four.png')}}"> </div>
                            <div class="design-select " onclick="formfive()" id="form5"> <img src="{{ asset('public/front/layouts/form-five.png')}}"> </div>
                            <div class="design-select " onclick="formsix()" id="form6"> <img src="{{ asset('public/front/layouts/form-six.png')}}"> </div>
                            <div class="design-select selected" onclick="formseven()" id="form7"> <img src="{{ asset('public/front/layouts/form-seven.png')}}"> </div> <input type="hidden" name="prod[form_layout]" id="form_layout" value="layout_7">
                        </div>
                        <script>
                            function formone(){
                              document.getElementById('form_layout').value = 'layout_1';
                              document.getElementById('form1').classList.add('selected');
                              document.getElementById('form2').classList.remove('selected');
                              document.getElementById('form3').classList.remove('selected');
                              document.getElementById('form4').classList.remove('selected');
                              document.getElementById('form5').classList.remove('selected');
                              document.getElementById('form6').classList.remove('selected');
                              document.getElementById('form7').classList.remove('selected');
                            }
                            function formtwo(){
                              document.getElementById('form_layout').value = 'layout_2';
                              document.getElementById('form1').classList.remove('selected');
                              document.getElementById('form2').classList.add('selected');
                              document.getElementById('form3').classList.remove('selected');
                              document.getElementById('form4').classList.remove('selected');
                              document.getElementById('form5').classList.remove('selected');
                              document.getElementById('form6').classList.remove('selected');
                              document.getElementById('form7').classList.remove('selected');
                            }
                            function formthree(){
                              document.getElementById('form_layout').value = 'layout_3';
                              document.getElementById('form1').classList.remove('selected');
                              document.getElementById('form2').classList.remove('selected');
                              document.getElementById('form3').classList.add('selected');
                              document.getElementById('form4').classList.remove('selected');
                              document.getElementById('form5').classList.remove('selected');
                              document.getElementById('form6').classList.remove('selected');
                              document.getElementById('form7').classList.remove('selected');
                            }
                            function formfour(){
                              document.getElementById('form_layout').value = 'layout_4';
                              document.getElementById('form1').classList.remove('selected');
                              document.getElementById('form2').classList.remove('selected');
                              document.getElementById('form3').classList.remove('selected');
                              document.getElementById('form4').classList.add('selected');
                              document.getElementById('form5').classList.remove('selected');
                              document.getElementById('form6').classList.remove('selected');
                              document.getElementById('form7').classList.remove('selected');
                            }
                            function formfive(){
                              document.getElementById('form_layout').value = 'layout_5';
                              document.getElementById('form1').classList.remove('selected');
                              document.getElementById('form2').classList.remove('selected');
                              document.getElementById('form3').classList.remove('selected');
                              document.getElementById('form4').classList.remove('selected');
                              document.getElementById('form5').classList.add('selected');
                              document.getElementById('form6').classList.remove('selected');
                              document.getElementById('form7').classList.remove('selected');
                            }
                            function formsix(){
                              document.getElementById('form_layout').value = 'layout_6';
                              document.getElementById('form1').classList.remove('selected');
                              document.getElementById('form2').classList.remove('selected');
                              document.getElementById('form3').classList.remove('selected');
                              document.getElementById('form4').classList.remove('selected');
                              document.getElementById('form5').classList.remove('selected');
                              document.getElementById('form6').classList.add('selected');
                              document.getElementById('form7').classList.remove('selected');
                            }
                            function formseven(){
                              document.getElementById('form_layout').value = 'layout_7';
                              document.getElementById('form1').classList.remove('selected');
                              document.getElementById('form2').classList.remove('selected');
                              document.getElementById('form3').classList.remove('selected');
                              document.getElementById('form4').classList.remove('selected');
                              document.getElementById('form5').classList.remove('selected');
                              document.getElementById('form6').classList.remove('selected');
                              document.getElementById('form7').classList.add('selected');
                            }
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <label><strong>Choose Prices Display <span class="text-danger">*</span></strong> <small>Select the design you want to use to show prices.</small></label> </div>
                        <div class="col-md-12">
                            <div class="design-select " onclick="pricesone()" id="prices1"> <img src="{{ asset('public/front/layouts/prices-one.png')}}"> </div>
                            <div class="design-select " onclick="pricestwo()" id="prices2"> <img src="{{ asset('public/front/layouts/prices-two.png')}}"> </div>
                            <div class="design-select " onclick="pricesthree()" id="prices3"> <img src="{{ asset('public/front/layouts/prices-three.png')}}"> </div>
                            <div class="design-select " onclick="pricesfour()" id="prices4"> <img src="{{ asset('public/front/layouts/prices-four.png')}}"> </div>
                            <div class="design-select " onclick="pricesfive()" id="prices5"> <img src="{{ asset('public/front/layouts/prices-five.png')}}"> </div>
                            <div class="design-select selected" onclick="pricessix()" id="prices6"> <img src="{{ asset('public/front/layouts/prices-six.png')}}"> </div>
                            <div class="design-select " onclick="pricesseven()" id="prices7"> <img src="{{ asset('public/front/layouts/prices-seven.png')}}"> </div>
                            <div class="design-select " onclick="priceseight()" id="prices8"> <img src="{{ asset('public/front/layouts/prices-eight.png')}}"> </div> <input type="hidden" name="prod[price_layout]" id="price_layout" value="layout_6">
                        </div>
                        <script>
                            function pricesone(){
                              document.getElementById('price_layout').value = 'layout_1';
                              document.getElementById('prices1').classList.add('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function pricestwo(){
                              document.getElementById('price_layout').value = 'layout_2';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.add('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function pricesthree(){
                              document.getElementById('price_layout').value = 'layout_3';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.add('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function pricesfour(){
                              document.getElementById('price_layout').value = 'layout_4';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.add('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function pricesfive(){
                              document.getElementById('price_layout').value = 'layout_5';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.add('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function pricessix(){
                              document.getElementById('price_layout').value = 'layout_6';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.add('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function pricesseven(){
                              document.getElementById('price_layout').value = 'layout_7';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.add('selected');
                              document.getElementById('prices8').classList.remove('selected');
                            }
                            function priceseight(){
                              document.getElementById('price_layout').value = 'layout_8';
                              document.getElementById('prices1').classList.remove('selected');
                              document.getElementById('prices2').classList.remove('selected');
                              document.getElementById('prices3').classList.remove('selected');
                              document.getElementById('prices4').classList.remove('selected');
                              document.getElementById('prices5').classList.remove('selected');
                              document.getElementById('prices6').classList.remove('selected');
                              document.getElementById('prices7').classList.remove('selected');
                              document.getElementById('prices8').classList.add('selected');
                            }
                        </script>
                    </div>
                </div>
                <div class="panel-footer"> <input type="button" onclick="submitfunc();" class="btn btn-success" value="Submit Changes"> </div>
            </div>
            <div class="panel panel-default col-md-4">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-primary" style="margin:0;"><strong><i class="fa fa-umbrella"></i> Product Fields &amp; Ordering</strong></h4> <small>Drag and drop to set ordering</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="sortables" class="sortlist row no-gutters d-block connectedSortable sortingfields ui-sortable">
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_1"> <label class="checkbox"> <input name="sort[]" value="1" type="hidden"> <input name="prod[fname]" id="fname" type="checkbox"><i></i> First Name</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_2"> <label class="checkbox"> <input name="sort[]" value="2" type="hidden"> <input name="prod[lname]" id="lname" type="checkbox"><i></i> Last Name</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_5"> <label class="checkbox"> <input name="sort[]" value="5" type="hidden"> <input name="prod[Smoke12]" id="Smoke12" type="checkbox"><i></i> Smoke in last 12 month (yes/no) </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_17"> <label class="checkbox"> <input name="sort[]" id="sum_insured_sort" value="17" type="hidden"> <input name="prod[sum_insured]" id="sum_insured" type="checkbox" checked=""> <i></i> Sum Insured Amount </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_6"> <label class="checkbox" style="display: inline-block;"> <input name="sort[]" value="6" type="hidden"> <input name="prod[Country]" id="Country" type="checkbox" checked=""><i></i> Destination Country</label><br> <label><input type="radio" name="destinationtype" value="worldwide"> Worldwide</label> <label><input type="radio" name="destinationtype" value="canada" checked="">Canada Only</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_8"> <label class="checkbox"> <input name="sort[]" id="sdate_sort" value="8" type="hidden"> <input name="prod[sdate]" id="sdate" type="checkbox" checked=""><i></i> Start Date</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_9"> <label class="checkbox"> <input name="sort[]" id="edate_sort" value="9" type="hidden"> <input name="prod[edate]" id="edate" type="checkbox" checked=""><i></i> End Date </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_10"> <label class="checkbox" style="display: inline-block;"> <input name="sort[]" id="traveller_sort" value="10" type="hidden"> <input name="prod[traveller]" id="traveller" type="checkbox" checked=""><i></i> Number of Traveller's </label> <input type="number" name="prod[traveller_number]" value="5" min="1" max="8" step="1"> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_3"> <label class="checkbox"> <input name="sort[]" value="3" type="hidden"> <input name="prod[dob]" id="dob" type="checkbox" checked=""><i></i> Date of Birth</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_16"> <label class="checkbox"> <input name="sort[]" id="pre_existing_sort" value="16" type="hidden"> <input name="prod[pre_existing]" id="pre_existing" type="checkbox" checked=""> <i></i> Pre-existing Condition </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_15"> <label class="checkbox"> <input name="sort[]" id="fplan_sort" value="15" type="hidden"> <input name="prod[fplan]" id="fplan" type="checkbox" checked=""> <i></i> Family Plan </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_4"> <label class="checkbox"> <input name="sort[]" value="4" type="hidden"> <input name="prod[email]" id="email" type="checkbox" checked=""><i></i> Email Address</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_7"> <label class="checkbox"> <input name="sort[]" value="7" type="hidden"> <input name="prod[phone]" id="phone" type="checkbox"><i></i> Phone Number</label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_11" style=""> <label class="checkbox"> <input name="sort[]" id="smoked_sort" value="11" type="hidden"> <input name="prod[smoked]" id="smoked" type="checkbox"> <i></i> Traveller Smoked </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_12"> <label class="checkbox"> <input name="sort[]" id="traveller_gender_sort" value="12" type="hidden"> <input name="prod[traveller_gender]" id="traveller_gender" type="checkbox"> <i></i> Oldest Traveller's Gender </label> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_13"> <label class="checkbox" style="display: inline-block;"> <input name="sort[]" id="us_stop_sort" value="13" type="hidden"> <input name="prod[us_stop]" id="us_stop" type="checkbox"> <i></i> Stopover in US (Days) </label> <input type="number" name="prod[us_stop_days]" min="0" max="30" step="1" value="0" style="display:none3;"> </li>
                                </div>
                                <div class="item">
                                    <li class="ui-state-default ui-sortable-handle" id="id_14"> <label class="checkbox"> <input name="sort[]" id="gender_sort" value="14" type="hidden"> <input name="prod[gender]" id="gender" type="checkbox"><i></i> Gender </label> </li>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript" src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
                        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
                        <link rel="stylesheet" href="/resources/demos/style.css">
                        <style>
                            #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
                            #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
                            #sortable li span { position: absolute; margin-left: -1.3em; }
                        </style>
                        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
                    </div>
                </div>
            </div> <input type="hidden" name="update_id" value="23"> <input name="savesortlist" id="savesortlist" type="hidden" value="">
        </div>
</div>
</form> <!-- /PANEL -->
</div>
<script type="text/javascript" src="{{ asset('public/admin/assets/js/sortable.js')}}">
</script> 
@endsection