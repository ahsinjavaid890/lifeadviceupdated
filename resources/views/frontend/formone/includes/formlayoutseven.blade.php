
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutone.css')}}">
<div class="col-md-12 text-center" style="margin-top: 30px;margin-bottom: 30px;">
   <h1 style="font-weight:bold;margin: 0px; color: #262566" class=""><strong>{{ $data->pro_name }}</strong></h1>
   <h2 style="margin-top: -10px;font-size: 16px;font-weight: normal;line-height: normal;" class="hidden-xs">To start, we have a few quick questions to understand your needs.</h2>
</div>
<div class="container birthdate new-visa mb-5 mt-5" style="padding: 20px;">
         <form method="POST" action="{{ url('') }}">
                  @csrf
               
                  <div class="row">
                     @if(isset($fields['fname']))
                     @if($fields['fname'] == 'on')
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <input type="text" name="fname" placeholder="firstname" required id="firstname" class="form-input">
                           <label for="firstname" class="form-label">First name</label>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['lname']))
                     @if($fields['lname'] == 'on')
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <input type="text" name="lname" placeholder="lastname" required id="lname" class="form-input">
                           <label for="lname" class="form-label">Last name</label>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )
                           <div class="col-md-12">
                              <div class="custom-form-control">
                                 <input type="text" name="savers_email" placeholder="savers_email" required id="savers_email" class="form-input">
                                 <label for="savers_email" class="form-label">Email</label>
                              </div>
                           </div>
                        @endif
                     @endif
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12">
                        <div class="custom-form-control">
                           <input onkeyup="validatephone()" type="text" name="phone" placeholder="firstname" required id="phone" class="form-input">
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
                     @if(isset($fields['sum_insured']))
                     @if($fields['sum_insured'] == 'on')
                     <div class="col-md-6">
                        <div class="custom-form-control">
                           <select required class="form-input" name="sum_insured2" id="coverageammount">
                              <option value="">Coverage Amount</option>
                              @foreach($sum_insured as $r)
                              <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                              @endforeach
                           </select>
                           <label for="coverageammount" class="form-label">Coverage Amount</label>
                        </div>
                     </div>
                     @endif
                     @endif


                     @if(isset($fields['Country']))
                        @if($fields['Country'] == "on" )
                           @if($data->pro_travel_destination == 'worldwide')
                            <script>
                              function CountryState(id) {
                                  if(id=="Canada")
                                  {
                                      $('#canadastate').fadeIn();
                                      $('#country').removeClass('col-md-12')
                                      $('#country').addClass('col-md-6')
                                  }else 
                                  {
                                      $('#canadastate').hide();
                                      $('#country').removeClass('col-md-6')
                                      $('#country').addClass('col-md-12')
                                      
                                 }
                              }
                           </script>
                           <div id="country" class="col-md-6">
                              <div class="custom-form-control">
                                 <select onchange="CountryState(this.value)" required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Select Country</option>
                                    @foreach(DB::table('countries')->get() as $r)
                                       <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">Primary Destination</label>
                              </div>
                           </div>
                           <div id="canadastate" class="col-md-6" style="display:none;">
                              <div class="custom-form-control">
                                 <select onchange="CountryState(this.value)" required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Select Country</option>
                                    @foreach(DB::table('countries')->get() as $r)
                                       <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">Primary Destination</label>
                              </div>
                           </div>
                           @else

                           <div class="col-md-6" >
                              <div class="custom-form-control">
                                 <select onchange="CountryState(this.value)" required class="form-input" name="primary_destination" id="primary_destination">
                                    <option value="">Select Country</option>
                                    @foreach(DB::table('countries')->get() as $r)
                                       <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label">Primary Destination</label>
                              </div>
                           </div>
                           @endif
                        @endif
                     @endif
                      @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                        <div class="col-md-6">
                           <div class="custom-form-control">
                              <input onchange="supervisayes()" type="date" name="departure_date" placeholder="firstname" required id="departure_date" class="form-input">
                              <label for="departure_date" class="form-label">Start Date of Coverage</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="custom-form-control">
                              <input type="date" name="return_date" readonly placeholder="return_date" required id="return_date" class="form-input">
                              <label for="return_date" class="form-label">End Date of Coverage</label>
                           </div>
                        </div>
                        @endif

                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-12">
                           <div class="custom-form-control">
                              <select onchange="checknumtravellers(this.value)" required class="form-input" name="number_travelers" id="number_travelers">
                                 <option value="">Number of Travellers</option>
                                 @for($i=1;$i<=$number_of_travel;$i++)
                                 <option value="{{ $i }}">{{ $i }}</option>
                                 @endfor
                              </select>
                              <label for="number_travelers" class="form-label">Number of Travellers</label>
                           </div>
                        </div>


                        @if(isset($fields['dob']) && $fields['dob'] == "on" )

                           @php
                              $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
                              $c = 0;
                           @endphp

                           @for($i=1;$i<=$number_of_travel;$i++)
                           <div style="display: none;" id="traveler{{ $i }}" class="no_of_travelers col-md-12">
                              <div class="row">
                                    <div style="padding-left: 0px;" class="col-md-4">
                                       <div class="custom-form-control">
                                          <input type="text" name="fname" placeholder="firstname" id="day{{$i}}" class="form-input">
                                          <label for="day{{$i}}" class="form-label">Day</label>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="custom-form-control">
                                          <input type="text" name="fname" placeholder="firstname" id="month{{$i}}" class="form-input">
                                          <label for="month{{$i}}" class="form-label">Month</label>
                                       </div>
                                    </div>
                                    <div style="padding-right: 0px;" class="col-md-4">
                                       <div class="custom-form-control">
                                          <input type="text" name="fname" placeholder="firstname" id="year{{$i}}" class="form-input">
                                          <label for="year{{$i}}" class="form-label">Year</label>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           @endfor
                        @endif
                        @endif
                     @endif
                     @if(isset($fields['gender']) && $fields['gender'] == "on" )
                     <div class="col-md-12">
                        <div class="custom-form-control">
                           <select required class="form-input" name="gender" id="gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                           <label for="gender" class="form-label">Primary Applicant`s Gender</label>
                        </div>
                     </div>
                     @endif
                     @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                     <div class="col-md-12">
                        <div class="custom-form-control">
                           <select required class="form-input" name="old_traveller_gender" id="old_traveller_gender">
                              <option value="">Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                           </select>
                           <label for="old_traveller_gender" class="form-label">Gender of the Oldest traveller</label>
                        </div>
                     </div>
                     @endif
                     <div class="row">
                           @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-6 no-padding check_condtion">
                              <h3>Do you Smoke in last 12 months ?</h3>
                              <div class="col-md-12 no-padding">
                                 <label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="Smoke12" value="yes" style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;">
                                 <input type="radio" name="Smoke12" value="no"  style="width: auto !important;height: auto;"> No</label>
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
                              <div class="col-md-6 no-padding check_condtion">
                                 <h3>Pre-existing Condition ?</h3>
                                 <div class="col-md-12 no-padding">
                                    <label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
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
                              <div class="col-md-6 no-padding check_condtion">
                                 <h3>Do you require Family Plan ?</h3>
                                 <div class="col-md-12 no-padding">
                                    <label style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="fplan" value="yes" style="width: auto !important;height: auto;" onclick="changefamilyyes()"> Yes</label> <label style="display: inline-block;margin-right: 10px;"><input type="radio" name="fplan" value="no" checked="" style="width: auto !important;height: auto;" onclick="changefamilyno()"> No</label>
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
                     <div class="col-md-6">
                        <img src="{{ url('public/front/bgs/low_pr_icon.png') }}">
                     </div>
                     <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary get_qout">Get Quote <i class="fa fa-arrow-circle-right"></i></button>
                     </div>
                  </div>
               </form>
</div>
<script>

   function supervisayes(){
   window.setTimeout(function(){    
    var tt = document.getElementById('departure_date').value;
    var date = new Date(tt);
    var newdate = new Date(date);
    newdate.setDate(newdate.getDate() + 364);
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
    if(mm <= 9){
    var mm = '0'+mm;    
    }
    if(dd <= 9){
    var dd = '0'+dd;    
    }
    //var someFormattedDate = mm + '/' + dd + '/' + y;
    var someFormattedDate = y + '/' + mm + '/' + dd;
    document.getElementById('return_date').value = someFormattedDate;
   }, 1000);
   }
   function checknumtravellers(){
   	//Number OF Traveller
   	var number_of_traveller = document.getElementById('number_travelers').value;
   	
   	for(var t=1; t<=number_of_traveller; t++){
   		$("#traveller_"+t).hide();
   		$('#age_'+t).val('');
   	}
   	//alert(number_of_traveller);
   	for(var i=1; i<=number_of_traveller; i++){
   	$("#traveller_"+i).show();
   	document.getElementById('add_'+i).required = true;
   	}
   var startdate = document.getElementById('departure_date').value;	
   for(var i=1; i<=number_of_traveller; i++){
   var d = document.getElementById('days_'+i).value;
   var m = document.getElementById('months_'+i).value;
   var y = document.getElementById('add_'+i).value;
   var dob = y + '-' + m + '-' + d;
   //alert(dob);
   dob = new Date(dob);
   var today = new Date(startdate);
   var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
   $('#age_'+i).val(age);
   }
   p = 1;
   pr = number_of_traveller + p;
   for(var p = pr; p<=8; p++){
   document.getElementById('days_'+p).value = '';
   document.getElementById('months_'+p).value = '';
   document.getElementById('add_'+p).value = '';
   }
   
   //checkfamilyplan();
   }
   
   
   var container = document.getElementsByClassName("birthdate")[0];
   container.onkeyup = function(e) {
       var target = e.srcElement || e.target;
       var maxLength = parseInt(target.attributes["maxlength"].value, 10);
       var myLength = target.value.length;
       if (myLength >= maxLength) {
           var next = target;
           while (next = next.nextElementSibling) {
               if (next == null)
                   break;
               if (next.tagName.toLowerCase() === "input") {
                   next.focus();
                   break;
               }
           }
       }
       // Move to previous field if empty (user pressed backspace)
       else if (myLength === 0) {
           var previous = target;
           while (previous = previous.previousElementSibling) {
               if (previous == null)
                   break;
               if (previous.tagName.toLowerCase() === "input") {
                   previous.focus();
                   break;
               }
           }
       }
   }
   
   window.onload = function() {
     checknumtravellers();
   };
</script>