
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
            <div class="card p-0 qoute-card">
               <div class="card-body p-0">
                  <div data-v-5170d561="" data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div data-v-5170d561="" class="grid-container">
                        <div data-v-5170d561="" class="grid-row grid-row--bar">
                           <div data-v-5170d561="" class="d-grid generator-bar-row-wrap">
                                 <input data-v-5170d561="" type="hidden"  required="required" id="testfield2" value="">
                              <label data-toggle="modal" data-target="#myModal1" data-v-5170d561="" class="form-input input-destination has-arrow">
                                 <input data-v-5170d561="" type="text" placeholder="Destination" required="required" id="txtmanuid" class="input-field" disabled>
                                 <span data-v-5170d561="" class="label-text">Destination</span>
                                 <div data-v-5170d561="" class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2" data-v-5170d561="" class="form-input input-traveler-info has-arrow">
                              <input data-v-5170d561="" type="text" placeholder="Traveler Information" required="required" id="age" class="input-field" disabled>
                              <span data-v-5170d561="" class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"  data-v-5170d561="" class="form-input date-range form-input__date-range">
                                 <div data-v-5170d561="" class="input-field">
                                    <div data-v-5170d561="" class="from">
                                       <i data-v-5170d561="" class="icon icon-calendar"></i>
                                       <div data-v-5170d561="" class="value"> Start Date 
                                       </div>
                                    </div>
                                    <div data-v-5170d561="" class="sep"></div>
                                    <div data-v-5170d561="" class="to">
                                       <div data-v-5170d561="" class="value">End Date</div>
                                    </div>
                                 </div>
                              </div>
                              <button data-v-5170d561="" disabled="disabled" class="button button-primary button-rounded get-quotes-button"> Get Quotes </button>
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
                        <div data-v-5ed4506d="" data-v-6d46de94="" class="card lg-wizard-card  border-0">
                           <h2 data-v-5ed4506d="" class="heading-3 card-heading">What countries will be visited?</h2>
                           <div data-v-5ed4506d="" class="card-content">
                              <p data-v-5ed4506d="" class="card-info">Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered.</p>

                                       <div class="wrapper-dropdown" id="primary_destination">
                                            <span>Primary Destination</span>
                                            <ul class="dropdown"  >
                                                @foreach(DB::table('formcountries')->get() as $r)
                                              <li data-v-6e3bf6e8="{{ $r->code }}" data-title="{{ $r->name }}" value="{{ $r->name }}" class="optionselect" id="selectboxes" onclick="optionselect();"><span class="selectspan">{{ $r->name }}</span></li>
                                              @endforeach
                                            </ul>
                                          </div>
                           </div>
                           <!---->
                           <div data-v-73e0d048="" data-v-5ed4506d="" class="card-foot mt-4">
                              <div data-v-73e0d048="" class="card-foot--container">
                                 <!---->
                                 <div data-v-73e0d048="" class="card-footer--center-col"></div>
                              </div>
                              <!---->
                           </div>
                        </div>
                        <div class="nextbtns">
                           <input type="submit" value="Next" class="btn btn-default btn-next"> 
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
                                      <div class="col-md-6">
                                       <div class=" ageandcitizen">
                                         <div class="row yearsdiv" style="">
                                            <div class="col-md-4">
                                               <small style="font-size: 12px;color: #999;">Age</small>
                                               <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" maxlength="3" name="ages[]" autocomplete="ages" id="ages" value="" class="primaryage" style="margin-top: -5px !important;display: block;" required>
                                            </div>
                                            <div class="col-md-3 text-center text-dark" style="padding-top: 10px;">
                                               or
                                            </div>
                                            <div class="col-md-5" style="padding-top: 10px;">
                                               <a style="cursor: pointer; color: black;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
                                            </div>
                                         </div>
                                         <div class="row dobdiv" style="display:none;">
                                            <div class="col-md-12 d-flex">
                                               <div class="col-md-7 no-padding d-flex p-o">
                                                  <div class="col-md-4" style="padding: 0 5px;">
                                                     <small style="font-size: 7px;color: #999;padding: 0;">Month</small>
                                                     <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block;" autocomplete="dob_year" maxlength="2">
                                                  </div>
                                                  <div class="col-md-4" style="padding: 0 5px;">
                                                     <small style="font-size: 7px;color: #999;padding: 0;">Day</small>
                                                     <input type="number" autocomplete="dob_year" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" style="margin-top: -5px !important;display: block;" maxlength="2">
                                                  </div>
                                                  <div class="col-md-4" style="padding: 0 5px;">
                                                     <small style="font-size: 7px;color: #999;padding: 0;">Year</small>
                                                     <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" id="dob_year" autocomplete="dob_year" onchange="calprimaryage()" style="margin-top: -5px !important;display: block;" required>
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
                                               <div class="col-md-5" style="padding-top: 10px;">
                                                  <div class="row">
                                                     <div style="padding: 0;" class="col-md-3 text-center  text-dark">
                                                        or
                                                     </div>
                                                     <div style="padding: 0;text-align: center;" class="col-md-9">
                                                        <a style="cursor: pointer;  color: black;" onclick="$('.dobdiv').hide(); $('.yearsdiv').show()">Enter Age</a>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                      </div>
                                       <div class="col-md-6">
                                       <div class="wrapper-dropdown" id="citizenship">
                                            <span>Citizenship</span>
                                            <ul class="dropdown">
                                                @foreach(DB::table('formcountries')->get() as $r)
                                              <li data-v-6e3bf6e8="{{ $r->code }}" data-title="{{ $r->name }}" data-value="{{ $r->code }}" class="optionselect"><span class="selectspan">{{ $r->name }}</span></li>
                                              @endforeach
                                            </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!---->
                           <div data-v-73e0d048="" data-v-0fda4d6e="" class="card-foot mt-4">
                              <div data-v-73e0d048="" class="card-foot--container">
                                 <div data-v-73e0d048="" class="card-footer--center-col"></div>
                              </div>
                              <!---->
                           </div>
                        </div>
                        <div class="nextbtns">
                           <input type="submit" value="Prev" class="btn btn-default btn-prev">
                           <input type="submit" value="Next" id="paramsOkay" class="btn btn-default btn-next">
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
                              <p data-v-0fda4d6e="" class="card-info"> Star Date to Visit Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered. </p>
                              <div data-v-0fda4d6e="" class="traveler-visitor form-line spec-trev-info visitor-primary">
                                 <div data-v-0fda4d6e="" class="line-content fd-column">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div data-v-0fda4d6e="" class="d-inline-block visitor-citizenship-container">
                                                  <div data-v-0fda4d6e="" class="d-inline-block citizenship-section">
                                                     <span data-v-2cd039a3="" data-v-0fda4d6e="" class="form-input select cd-visitor country-of-citizenship has-mobile-exit wide-input">
                                                        <div data-v-2cd039a3="" class="mobile-exit">&nbsp;</div>
                                                        <input data-v-2cd039a3="" type="date" placeholder="Departure Date" name="departure_date" autocomplete="departure_date" required="required" class="input-field" style="background-image: none !important;">
                                                        <span data-v-2cd039a3="" class="label-text">Departure Date</span>
                                                     </span>
                                                  </div>
                                               </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!---->
                           <div data-v-73e0d048="" data-v-0fda4d6e="" class="card-foot mt-4">
                              <div data-v-73e0d048="" class="card-foot--container">
                                 <div data-v-73e0d048="" class="card-footer--center-col"></div>
                              </div>
                              <!---->
                           </div>
                        </div>
                        <div class="nextbtns">
                           <input type="submit" value="Prev" class="btn btn-default btn-prev">
                           <input type="submit" value="Next" class="btn btn-default btn-next">
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
    function optionselect() {
  var params = $('#selectboxes').val();
  $('#testfield2').val(params);
}
</script>