
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/formqoute/chunk-b2560f80.9329634e.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/formqoute/chunk-5970b8c1.3cbf45f8.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/formqoute/chunk-e66e9cce.0bfb26e0.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/formqoute/chunk-ebe193e4.1c34b978.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/formqoute/chunk-3e82b756.822e1495.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/formqoute/chunk-92251a5e.90e3ff4d.css')}}">
<script type="text/javascript" src="{{ asset('public/front/formqoute/main.2a3546da.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/front/formqoute/0dbf611d.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/front/formqoute/c8c274397857.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
@php
$url = request()->segment(count(request()->segments()));
$firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<div class="health-inssurance-hero-banners super-hero">
   <div class="container-homepage">
      <div class="row mb-3">
         <div class="col-md-6 hero-texts">
            <div class="herrotext super-hero-text">
               <h2 class="wow fadeInUp" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
               <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">{{ $firstsection->sub_heading }}</span></h5>
               @if($firstsection->main_button_text)
               <div class="btns d-flex">
                  <div class="details">
                     <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                  </div>
               </div>
               @endif
            </div>
         </div>
         <div class="col-md-6 hero-images">
            <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
               background-position: 50% 70%;
               background-size: 100%;
               background-repeat: no-repeat;">
            </div>
         </div>
      </div>
      @if($firstsection->form == 1)
      <div class="row">
         <div class="col-md-12">
            <form action="#" method="POST">
               <input type="hidden"  name="sum_insured2" id="sum_insured2">
            <div class="card p-0 qoute-card">
               <div class="card-body p-0">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal1"  class="form-input input-destination has-arrow">
                                 <input  type="text" placeholder="Coverage Amount" required="required" id="coverageprice" class="input-field" disabled>
                                 <span  class="label-text">Coverage Amount</span>
                                 <div  class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2"  class="form-input input-traveler-info has-arrow">
                              <input  id="citishow" type="text" placeholder="Traveler Information" required="required" id="age" class="input-field" disabled>
                              <span  class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"   class="form-input date-range form-input__date-range">
                                 <div  class="input-field">
                                    <div  class="from">
                                       <i  class="icon icon-calendar"></i>
                                       <div id="coveragedate" class="value"> Start Date 
                                       </div>
                                    </div>
                                   <!--  <div  class="sep"></div>
                                    <div  class="to">
                                       <div  class="value">End Date</div>
                                    </div> -->
                                 </div>
                              </div>
                              <button  disabled="disabled" class="button button-primary button-rounded get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card lg-wizard-card  border-0">
                           <h2 class="heading-3 card-heading">Please Select Coverage Ammount?</h2>
                           <div class="card-content">
                              <p class="card-info">Coverage amount, your insurance limit is the maximum amount your insurer may pay out for a claim, as stated in your policy.</p>
                              <div class="row">
                                @if(isset($fields['sum_insured']))
                                @if($fields['sum_insured'] == 'on')
                                  <div class="col-md-6">
                                      <div class="wrapper-dropdown" id="primary_destination">
                                        <span>Coverage Ammount</span>
                                        <ul class="dropdown"  >
                                         @foreach($sum_insured as $r)


                                         <li @if($loop->last) class="borderbottomnone" @endif onclick="selectcoverageammount({{$r->sum_insured}});">
                                            <span class="selectspan">${{ $r->sum_insured }}</span>
                                         </li>
                                         @endforeach
                                         <script type="text/javascript">
                                             function selectcoverageammount(id) {
                                                 $('#sum_insured2').val(id);
                                                 $('#coverageprice').val(id);
                                                 $('#covergaeerror').hide();
                                               }
                                               function firstnext() {
                                                  if($('#sum_insured2').val() == '')
                                                  {
                                                     $('#covergaeerror').show();
                                                     $('#covergaeerror').html('Please Select Covergae Ammount');
                                                  }else{
                                                     $('#firstnextfake').hide();
                                                     $('#firstnextorignal').show();
                                                     $('#firstnextorignal').click();
                                                  }
                                               }
                                         </script>
                                        </ul>
                                      </div>
                                  </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['fname']))
                                 @if($fields['fname'] == 'on')
                                 <div class="col-md-4">
                                    <div class="custom-form-control">
                                       <input type="text" name="fname" placeholder="First Name" required id="irstname" class="wrapperfrom">
                                       <label for="firstname" class="form-label">First name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['lname']))
                                 @if($fields['lname'] == 'on')
                                 <div class="col-md-4">
                                    <div class="custom-form-control">
                                       <input type="text" name="lname" placeholder="Last Name" required id="lname" class="wrapperfrom">
                                       <label for="lname" class="form-label">Last name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['email']))
                                 @if($fields['email'] == "on" )
                                   <div class="col-md-6">
                                      <div class="custom-form-control">
                                         <input type="text" name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="wrapperfrom">
                                         <label for="savers_email" class="form-label">Email</label>
                                      </div>
                                   </div>
                                @endif
                                @endif
                                @if(isset($fields['phone']))
                                @if($fields['phone'] == 'on')
                                 <div class="col-md-4">
                                    <div class="custom-form-control">
                                       <input onkeyup="validatephone()" type="text" name="phone" placeholder="Phone Number" required id="phone" class="wrapperfrom">
                                       <label for="phone" class="form-label">Phone <b id="phone_error" class="text-danger"></b></label>
                                    </div>
                                 </div>
                                 <script>
                                    function validatephone(){
                                       var checkphone = document.getElementById('phone').value;
                                       document.getElementById('phone').value = checkphone.replace(/\D/g,'');
                                       if (checkphone.length < 10) {
                                       document.getElementById('phone_error').innerHTML = '<small>(Must be 10 digits)</small>';
                                       document.getElementById('getquote').disabled = true;  
                                       } else {
                                       document.getElementById('getquote').disabled = false; 
                                       document.getElementById('phone_error').innerHTML = '';
                                       }
                                       }
                                 </script>
                                 @endif
                                 @endif
                              </div>
                                <div class="text-danger mt-4" id="covergaeerror"></div>
                                <div class="nextbtns">
                                   <span id="firstnextfake" class="btn btn-default" onclick="firstnext()">Next</span>
                                   <span style="display: none;" id="firstnextorignal"  class="btn btn-default btn-next">Next</span>
                                </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div data-v-0fda4d6e="" class="card lg-wizard-card border-0">
                           <h2 data-v-0fda4d6e="" class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div data-v-0fda4d6e="" class="card-content">
                              <p data-v-0fda4d6e="" class="card-info"> Enter the age and citizenship for each person that will be traveling. Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. </p>
                              <div data-v-0fda4d6e="" class="traveler-visitor form-line spec-trev-info visitor-primary">
                                 <div data-v-0fda4d6e="" class="line-content fd-column">
                                    <div data-v-0fda4d6e="" class="row">
                                    @if(isset($fields['dob']) && $fields['dob'] == "on" )
                                    @php
                                        $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
                                          $c = 0;
                                    @endphp
                                      <div class="col-md-7">
                                        <div>
                                       <div class=" ageandcitizen">
                                         <div class="row yearsdiv" style="">
                                            <div class="col-md-4">
                                               <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" maxlength="3" name="ages[]" autocomplete="ages" id="ages" value="" class="primaryage" placeholder="Age" style="margin-top: -5px !important;display: block;" required>
                                            </div>
                                            <div class="col-md-3 text-center" style="padding-top: 10px; color: #1b8fe4 !important;font-size: 15px;font-weight: 900;">
                                               or
                                            </div>
                                            <div class="col-md-5" style="padding-top: 10px;">
                                               <a style="cursor: pointer; color: #1b8fe4 !important;font-size: 15px;font-weight: 900;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
                                            </div>
                                         </div>
                                         <div class="row dobdiv" style="display:none;">
                                            <div class="col-md-12 d-flex">
                                               <div class="col-md-7 no-padding d-flex p-0">
                                                  <div class="col-md-4" style="padding: 0 5px;">
                                                     <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block; border-radius: 9px 0 0 10px;" placeholder="Month" autocomplete="dob_year" maxlength="2">
                                                  </div>
                                                  <div class="col-md-4" style="padding: 0 5px;">
                                                     <input type="number" autocomplete="dob_year" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" placeholder="Day" style="margin-top: -5px !important;display: block;border-radius: 0px !important;" maxlength="2">
                                                  </div>
                                                  <div class="col-md-4" style="padding: 0 5px;">
                                                     <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" id="dob_year" autocomplete="dob_year" onchange="calprimaryage()" placeholder="Year" style="margin-top: -5px !important;display: block;border-radius: 0 10px 10px 0px;" required>
                                                  </div>
                                               </div>
                                               <script>
                                                  function calprimaryage(){
                                                  var currentyear = new Date().getFullYear();
                                                  var dobyear = document.getElementById('dob_year').value;
                                                  var primaryage = currentyear - dobyear;
                                                  $('.primaryage').val(primaryage);
                                                  }
                                               </script>
                                               <div class="col-md-5 " style="padding-top: 10px;">
                                                  <div class="row">
                                                     <div style="padding: 0; color: #1b8fe4 !important;font-size: 15px;font-weight: 900;" class="col-md-3 text-center">
                                                        or
                                                     </div>
                                                     <div style="padding: 0;text-align: center;" class="col-md-9">
                                                        <a style="cursor: pointer; color: #1b8fe4 !important;font-size: 15px;font-weight: 900;" onclick="$('.dobdiv').hide(); $('.yearsdiv').show()">Enter Age</a>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                  </div>
                                      </div>
                                      @endif
                                      @if(isset($fields['Country']))
                                      @if($fields['Country'] == "on" )
                                       <div class="col-md-5">
                                       <div class="wrapper-dropdown" id="citizenship">
                                            <span>Citizenship</span>
                                            <ul class="dropdown">
                                                @foreach(DB::table('formcountries')->get() as $r)
                                              <li   onclick="citizenship('{{ $r->name }}');"><span class="selectspan">{{ $r->name }}</span></li>
                                              @endforeach
                                              <script type="text/javascript">
                                                function citizenship(id) {
                                                 $('#citishow').val(id);
                                                 $('#citizenshiperror').hide();
                                               }
                                              </script>
                                            </ul>
                                          </div>
                                          <div class="text-danger" id="citizenshiperror"></div>
                                       </div>
                                      @endif
                                      @endif
                                      @if(isset($fields['gender']) && $fields['gender'] == "on" )
                                        <div class="col-md-6 mt-4">
                                           <div class="custom-form-control">
                                              <select required class="wrapperfrom" name="gender" id="gender">
                                                 <option value="">Primary Applicant`s Gender</option>
                                                   <option value="male" >Male</option>
                                                   <option value="female" >Female</option>
                                              </select>
                                              <label for="gender" class="form-label"></label>
                                           </div>
                                        </div>
                                        @endif
                                        @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                                        <div class="col-md-6 mt-4">
                                           <div class="custom-form-control">
                                              <select required class="wrapperfrom" name="old_traveller_gender" id="old_traveller_gender">
                                                 <option value="">Gender of the Oldest traveller</option>
                                                   <option value="male" >Male</option>
                                                   <option value="female" >Female</option>
                                              </select>
                                              <label for="old_traveller_gender" class="form-label"></label>
                                           </div>
                                        </div>
                                        @endif
                                        @if(isset($fields['Smoke12']))
                                        @if($fields['Smoke12'] == 'on')
                                        <div class="col-md-7" style="margin-top: 65px;">
                                        <div class="">
                                          <h3>Do you Smoke in last 12 months ?</h3>
                                              <div class="no-padding">
                                               <div class=" check-button button r" id="button-1">
                                                  <input type="checkbox" class="checkbox" />
                                                  <div class="knobs"></div>
                                                  <div class="layer"></div>
                                                </div>
                                             </div>
                                          </div>
                                        </div>
                                        @endif
                                        @endif
                                        @php
                                           $i = 0;
                                           $position_array = array();
                                           foreach($fields as $key => $value){
                                              $i ++;
                                              $position_array[$i] = $key;
                                           }
                                        @endphp
                                        @if(isset($fields['pre_existing']))
                                        @if($fields['pre_existing'] == 'on')
                                          @php
                                             $num = array_search("pre_existing", $position_array); 
                                             $current_values[$num] = 'group_16'; 
                                          @endphp
                                          <div class="col-md-5" style="margin-top: 65px;">
                                             <div class="">
                                                <h3>Pre-existing Condition ?</h3>
                                                <div class="no-padding">
                                                    <div class=" check-button button r" id="button-1">
                                                      <input type="checkbox" class="checkbox" />
                                                      <div class="knobs"></div>
                                                      <div class="layer"></div>
                                                    </div>
                                                </div>
                                             </div>
                                          </div>
                                        @endif
                                        @endif
                                        @if(isset($fields['fplan']))
                                        @if($fields['fplan'] == 'on')
                                          @php
                                             $num = array_search("fplan", $position_array); 
                                             $current_values[$num] = 'group_15';  
                                          @endphp
                                          <div class="col-md-7" style="margin-top: 65px;">
                                             <div class="">
                                                <h3>Do you require Family Plan ?</h3>
                                                 <div class="no-padding">
                                                    <div class=" check-button button r" id="button-1">
                                                      <input type="checkbox" class="checkbox" />
                                                      <div class="knobs"></div>
                                                      <div class="layer"></div>
                                                    </div>
                                                 </div>
                                             </div>
                                             <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                                             <script>
                                                function changefamilyyes(){
                                                   document.getElementById('familyplan_temp').value = 'yes';   
                                                   checkfamilyplan();
                                                }
                                                function changefamilyno(){
                                                   document.getElementById('familyplan_temp').value = 'no'; 
                                                   checkfamilyplan();
                                                }
                                             </script>
                                          </div>
                                        @endif
                                        @endif
                                    </div>
                                    <div class="nextbtns">
                                       <span class="btn btn-default btn-prev">Prev</span>
                                       <span id="paramsOkay" class="btn btn-default btn-next">Next</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-lg  modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div data-v-0fda4d6e="" class="card lg-wizard-card border-0">
                           <h2 data-v-0fda4d6e="" class="heading-3 card-heading">What dates do you need coverage?</h2>
                           <div data-v-0fda4d6e="" class="card-content">
                              <p data-v-0fda4d6e="" class="card-info"> Star Date to Visit Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered. </p>>
                              <div data-v-0fda4d6e="" class="traveler-visitor form-line spec-trev-info visitor-primary">
                                 <div data-v-0fda4d6e="" class="line-content fd-column">
                                    <div class="row">
                                        @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                                        <div class="col-md-12 p-0">
                                         

  
  <label>
    <input type="text" class="dateselect" required="required"/>
    <span>Date</span>
  </label>
  

                                        </div>
                                        @endif
                                    </div>
                                        <div class="nextbtns">
                                           <span class="btn btn-default btn-prev">Prev</span>
                                           <span class="btn btn-default btn-next">Done</span>
                                        </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         </div>
      </div>
      @endif
   </div>
</div>
<script type="text/javascript">
   $( "#destination_country" ).change(function() {
       var sel = $( "#destination_country option:selected" ).val();
       var textbox = document.getElementById("txtmanuid");
       textbox.value =$( "#destination_country option:selected" ).text();
   });
</script>
<script>
   $(document).ready(function(){
   
       $('#myModal2').on('click','#paramsOkay', function (e) {
           $('#ages').val($('#age').val())
   });
   })
</script>
<script type="text/javascript">
   $( "#primary_destination" ).change(function() {
       var sel = $( "#primary_destination option:selected" ).val();
       var textbox = document.getElementById("destinations");
       textbox.value =$( "#primary_destination option:selected" ).text();
   });
</script>
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-next').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prev').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#gender'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#citizenship'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#primary_destination'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
 // https://github.com/uxsolutions/bootstrap-datepicker

$('.dateselect').datepicker({
    format: 'mm/dd/yyyy',
    // startDate: '-3d'
});

// $('.dateselect2').datepicker({
//     format: 'mm/dd/yyyy',
//     autoclose:true,
//     todayHighlidht: true,
// }).on("hide", function(){
//   if ($)
// }





 
</script>