<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutsix.css')}}"> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div style="background-color: #f4f7fa;">
   <div class="container padding-top-zero-on-mobile paddingleftrightzeroonmobile" style="padding-top: 30px;"> 

<form id="quoteform" action="{{ url('ajaxquotes') }}" method="POST">
                @csrf
         <div class="mt-2 mb-3 alert alert-danger print-error-msg-login" style="display:none;">
             <ul></ul>
         </div>       
         <div class="row">
            <div class="col-md-12 paddingleftrightzeroonmobile">
                  <input type="hidden"  name="sendemail" @if(isset($_GET['primary_destination'])) value="no" @else value="yes" @endif>
                  <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
                  <div class="row">
                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                     @php
                        $number_of_travel = $fields['traveller_number'];
                     @endphp
                     @if($number_of_travel > 0)
                     <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                           <label>Number Of Travelers</label>
                           <select onchange="checknumtravellers(this.value)" required class="form-input" name="number_travelers" id="number_travelers">
                              <option value="">Number of Travellers</option>
                              @for($i=1;$i<=$number_of_travel;$i++)
                              <option @if(isset($_GET['number_travelers'])) @if($_GET['number_travelers']==$i) selected @endif @else  @if($i == 1) selected @endif @endif value="{{ $i }}">{{ $i }}
                                </option>
                              @endfor
                           </select>
                        </div>
                     </div>
                     @endif
                     @endif
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group">
                              <label>Start Date</label>
                              <input required @if(isset($_GET['departure_date'])) value="{{ $_GET['departure_date'] }}" @endif readonly inputmode="numeric" id="departure_date" autocomplete="off" name="departure_date" value="" class="form-input dateinput" type="text" placeholder="Start Date" <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>
                              <script>
                                 $('#departure_date').datepicker( {
                                    changeMonth: true,
                                    changeYear: true,
                                    yearRange: "-100:+6",
                                    minDate: new Date(),
                                 });
                              </script>
                           </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group">
                              <label>End Date</label>
                              <div class="custom-form-control">
                                 <input onchange="enddatechange()" @if(isset($_GET['return_date'])) value="{{ $_GET['return_date'] }}" @endif  id="return_date" autocomplete="off" name="return_date" value="" class="form-input" type="text" placeholder="End Date" required @if ($data->pro_supervisa == 1) readonly type="date" @endif>
                              </div>
                              @if ($data->pro_supervisa != 1)
                               <script>
                                   $('#return_date').datepicker({
                                       changeMonth: true,
                                       changeYear: true,
                                       yearRange: "-100:+6",
                                       minDate: new Date(),    
                                   });
                               </script>
                               @endif
                           </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group">
                              <label>Days</label>
                              <div class="custom-form-control">
                                 <input id="total_number_of_days" value=""  class="form-input"  type="text" placeholder="Days" readonly>
                              </div>
                           </div>
                        </div>
                     @endif
                     @if(isset($fields['sum_insured']))
                        @if($fields['sum_insured'] == 'on')
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group">
                              <label>Coverage Amount</label>
                              <select required class="form-input" name="sum_insured2" id="coverageammount">
                                 <option value="">Coverage Amount</option>
                              @foreach($sum_insured as $key => $r)
                               <option @if(isset($_GET['sum_insured2'])) @if($_GET['sum_insured2']==$r->sum_insured)
                                selected @endif @endif value="{{ $r->sum_insured }}" @if($data->url == 'visitor-insurance')  @if($r->sum_insured == 50000) selected @endif  @else @if ($key == 0) selected @endif @endif >${{
                                $r->sum_insured }}</option>
                               @endforeach
                              </select>
                           </div>
                        </div>
                        @endif
                     @endif
                     @if(isset($fields['Country']))
                        @if($fields['Country'] == "on" )
                           @if($data->pro_travel_destination == 'worldwide')
                           <div class="col-sm-4 col-md-3">
                              <div class="form-group">
                                 <label>Select Country</label>
                                 <select onchange="countryState(this.value)" required class="form-input"name="primary_destination" id="primary_destination">
                                     <option value="">Select Country</option>
                                     @foreach (DB::table('countries')->get() as $r)
                                     <option value='{{ $r->id }}'>{{ $r->name }}</option>
                                     @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-4 col-md-3">
                              <div class="form-group">
                                 <label>Select State</label>
                                 <select required class="form-input" name="primary_destination" id="statestoshow">
                                     <option value="">Select State</option>
                                 </select>
                              </div>
                           </div>
                           @else
                           <div class="col-sm-4 col-md-3">
                              <div class="form-group">
                                 <label>Primary destination in Canada</label>
                                 <select required class="form-input" name="primary_destination" id="primary_destination" style="    padding: 5px 12px !important;">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           @endif
                        @endif
                     @endif
                     @if(isset($fields['fname']))
                           @if($fields['fname'] == 'on')
                              <div class="col-sm-4 col-md-3">
                                 <div class="form-group "> 
                                 <label>First Name</label>       
                                    <input type="text" name="fname" placeholder="First Name" required id="firstname" class="form-input">
                                 </div>
                              </div>
                           @endif
                        @endif
                        @if(isset($fields['lname']))
                           @if($fields['lname'] == 'on')
                              <div class="col-sm-4 col-md-3">
                                 <div class="form-group ">
                                 <label>Last Name</label>             
                                    <input type="text" name="lname" placeholder="Last Name" required id="lname" class="form-input">
                                 </div>
                              </div>
                           @endif
                        @endif
                        @if(isset($fields['email']))
                           @if($fields['email'] == "on" )
                              <div class="col-sm-4 col-md-3">
                                 <div class="form-group">
                                 <label>Email</label>             
                                    <input @if(isset($_GET['savers_email'])) value="{{ $_GET['savers_email'] }}" @endif type="text" name="savers_email" placeholder="Email" required id="savers_email" class="form-input">
                                 </div>
                              </div>
                           @endif
                        @endif
                        @if(isset($fields['phone']))
                           @if($fields['phone'] == 'on')
                           <div class="col-sm-4 col-md-3">
                              <div class="form-group ">
                                 <label for="phonenumbermask">Phone Number</label>
                                 <input onkeyup="validatephone()" type="text"  id="phonenumbermask"  name="phone" placeholder="000-000-0000" data-placeholder="000-000-0000"  required id="phone" class="form-input" style="padding-left: 40px !important">
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
                        
                        @if(isset($fields['gender']) && $fields['gender'] == "on" )
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group ">
                              <label>Primary Applicant`s Gender</label>
                              <select required class="form-input" name="gender" id="gender">
                                 <option value="">Select Gender</option>
                                   <option value="male" >Male</option>
                                   <option value="female" >Female</option>
                              </select>
                           </div>
                        </div>
                        @endif
                        @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group ">
                              <label>Gender of the Oldest traveller</label>
                              <select required class="form-input" name="old_traveller_gender" id="old_traveller_gender">
                                 <option value="">Select Gender</option>
                                   <option value="male" >Male</option>
                                   <option value="female" >Female</option>
                              </select>
                           </div>
                        </div>
                        @endif
                        @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-sm-4 col-md-3">
                              <div class="form-group ">
                                 <label>Do you Smoke in last 12 months?</label>
                                 <select required class="form-input" name="Smoke12" id="">
                                    <option value="">--- Please Choose ---</option>
                                      <option value="yes" >Yes</option>
                                      <option value="no" >No</option>
                                 </select>
                              </div>
                           </div>
                           @endif
                        @endif
                        @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
                           <div class="col-sm-4 col-md-3">
                              <div class="form-group ">
                                 <label>Do you require Family Plan?</label>
                                 <select onchange="changefamilyyes(this.value)" required
                                 class="form-input" name="fplan" id=""
                                 style="padding: 5px 12px !important;">
                                 <option value="">--- Please Choose ---</option>
                                 <option value="yes">Yes</option>
                                 <option selected value="no">No
                                 </option>
                             </select>
                              </div>
                           </div>
                           
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
                           @endif
                        @endif
                        <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                  </div>
               
            </div>
         </div>

         @if(isset($_GET['years']))
                                        @foreach($_GET['years'] as $key=> $year)
                                            @if($year)

                                            @php
               $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
               $c = 0;
            @endphp
               <div id="traveler{{ $i }}" class="row no_of_travelers">
               <div class="col-sm-12">
                  {{-- <h5 class="type-of-policy">
                     <?php 
                        // echo $ordinal_words[$i];
                     ?>
                      Traveler</h5> --}}
               </div>
               <div class="col-sm-4 col-md-3">
                  <div class="form-group ">
                     <label>Enter Date Of Birth</label>
                     <input value="{{ date('Y-m-d' , strtotime($year)) }}" onchange="travelerdateofbirth(this.value , {{$i}})" id="dateofbirthfull{{ $i }}" class="form-input txtDate" type="date" name="years[]">
                     <span class="errorshow" id="dateerror{{ $i }}"></span>
                  </div>
               </div>
               <div class="col-sm-4 col-md-3">
                  <div class="form-group">
                     <label>Age</label>
                     <div class="custom-form-control">
                        <input  id="age{{ $i }}" value=""  class="form-input"  type="text" placeholder="Age" readonly>
                        <span class="errorshow" id="ageerror{{ $i }}"></span>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-3">
                  <div class="form-group ">
                     <label>Select Pre Existing Condition</label>
                     <select name="pre_existing[]" class="form-input">
                        <option value="">Select Pre Existing Condition</option>
                        <option  @if($_GET['pre_existing'][$key] == 'yes') selected @endif value="yes">Yes</option>
                        <option @if($_GET['pre_existing'][$key] == 'no') selected @endif value="no">No</option>
                      </select>
                  </div>
               </div>
            </div>
            

            @endif
                                        @endforeach
                                    @else


         @if(isset($fields['dob']) && $fields['dob'] == "on" )
            @php
               $ordinal_words = array('Oldest', 'Oldest', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth', 'Seventh', 'Eighth');
               $c = 0;
            @endphp
            @for($i=1;$i<=$number_of_travel;$i++)
            <div @if($i == 1) @else style="display: none;" @endif id="traveler{{ $i }}" class="row no_of_travelers">
               <div class="col-sm-4 col-md-3">
                  <div class="form-group ">
                     <label>Birth date of the {{ $ordinal_words[$i] }} Traveller</label>
                     <input id="dateofbirthfull{{ $i }}" class="form-input" type="text" inputmode="numeric" onkeyup="calculateAge(this.value , 'dateofbirthfull{{ $i }}' , {{$i}})" placeholder="MM/DD/YYYY" name="years[]">
                     <span class="errorshow" id="dateerror{{ $i }}"></span>
                  </div>
               </div>
               <div class="col-sm-4 col-md-3 paddingleftandrightondesktopforage">
                  <div class="form-group">
                     <label>Age</label>
                     <div class="custom-form-control">
                        <input id="age{{ $i }}" value=""  class="form-input"  type="text" placeholder="Age" readonly>
                        <span class="errorshow" id="ageerror{{ $i }}"></span>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-3 paddingleftandrightondesktopforpreexisitng">
                  <div class="form-group ">
                     <label>Select Pre Existing Condition</label>
                     <select name="pre_existing[]" class="form-input">
                        <option value="">Select Pre Existing Condition</option>
                        <option value="yes">Yes</option>
                        <option selected value="no">No</option>
                      </select>
                  </div>
               </div>
            </div>
            @endfor
         @endif
         @endif
         <div class="row">
            <div class="col-md-12 paddingleftrightzeroonmobile mb-3 text-right">
                  <button id="getqoutesubmitbutton" class=" mt-3 btn btn-quote">GET A QUOTE</button>
                  <span id="family_error"
                                style="display: none; text-align: right;padding: 20px; font-weight:700; color:#1BBC9B;"><i
                                    class="fa fa-warning"></i> </span>
            </div>
         </div>
      </form>
  
</div>
</div>

<script type="text/javascript">

   function calculateAge(dateofbirth , classname , travelerid) {
       var dob = dateofbirth;        
       var dobRegex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2[0-9]|3[01])\/\d{4}$/;
       if (!dobRegex.test(dob)) {
           $('#'+classname).css('border-color', 'red');
           return;
       }
       var parts = dob.split('/');
       var month = parseInt(parts[0], 10);
       var day = parseInt(parts[1], 10);
       var year = parseInt(parts[2], 10);
       var d = new Date();
       var output = d.getFullYear()
       var hundredyearsback = output-100;
       var dobDate = new Date(year, month - 1, day); // Month is 0-indexed
       var currentDate = new Date();
       if (isNaN(dobDate.getTime()) || dobDate >= currentDate || year <= hundredyearsback) {
           $('#'+classname).css('border-color', 'red');
           $('#getqoutesubmitbutton').prop('disabled' , true);
           return;
       }else{
            dob = new Date($('#dateofbirthfull'+travelerid).val());
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age'+travelerid).val(age+' Years Old');
           $('#'+classname).css('border-color', 'green');
           changefamilyyes($('#selectfamilyplan').val());
           $('#getqoutesubmitbutton').prop('disabled' , false);
       }
   }
   function travelerdateofbirth(id , travelerid) {
      var GivenDate = $('#dateofbirthfull'+travelerid).val();
      console.log(id)
      var CurrentDate = new Date();
      GivenDate = new Date(GivenDate);

      if(GivenDate > CurrentDate){
         $('#dateerror'+travelerid).html('You Can Not Add Future Date');
      }else{
         $('#dateerror'+travelerid).html('');
         var startdate = document.getElementById('departure_date').value;
         dob = new Date(id);
         var today = new Date();
         var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
         $('#age'+travelerid).val(age+' Years Old');
      }      
   }
</script>
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#phonenumbermask').mask('000-000-0000');
   });
</script>

<script type="text/javascript">
   function checknumtravellers(id) {
      if(id == '')
      {
         $('.no_of_travelers').hide();
      }
      if(id == 1)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
      }
      if(id == 2)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
      }
      if(id == 3)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
      }
      if(id == 4)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
      }
      if(id == 5)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
      }
      if(id == 6)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
         $('#traveler6').show();
      }
      if(id == 7)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
         $('#traveler6').show();
         $('#traveler7').show();

      }
   }
</script>

<script>
$('button[type="submit"]').click(function() {
   if($("select[name=number_travelers]").val()>1  && $("select[name=familyplan]").val() == "1"){
       var counter = 0;
       var aged=[];
       $("select[name=birth_month\\[\\]]").each(function(){
           //alert( $("select[name=birth_month\\[\\]]").eq(counter).val() );
           var d = new Date( $("select[name=birth_year\\[\\]]").eq(counter).val() ,   $("select[name=birth_month\\[\\]]").eq(counter).val()-1,  $("select[name=birth_day\\[\\]]").eq(counter).val() );
           var tDate = new Date();
           var age=tDate.getFullYear() - d.getFullYear();
           aged.push(age);
           var max=Math.max.apply(Math,aged);
           var min=Math.min.apply(Math,aged);
           //if((max>="21" && max<="58") && (min>="1" && min<"21")){
           if((max < 58) && (min >0 && min < 21)){
               $("#familymsg").hide();
               return true;
           }else{
               $("#familymsg").show();
               return false;
           }
           counter++;
       })
   }else{
       $("#familymsg").hide();
   }
});
</script>
<script>
   function calculatedays() 
   {
      var departure_date = $('#departure_date').val();
      var return_date = $('#return_date').val();
      var startDay = new Date(departure_date);  
      var endDay = new Date(return_date);  
      var dayssuminsured = Math.round((endDay - startDay) / (1000 * 60 * 60 * 24));
      if(departure_date)
      {
         if(dayssuminsured < 1)
         {
            $('#return_date').val('');
            $('#total_number_of_days').val('');
         }else{
            $('#total_number_of_days').val(dayssuminsured+' Days');
         }
      }
   }
   function checkfamilyplan(){
   //Eligibility
   var inps = json_encode();
   var ages = [];
   for (var i = 0; i <inps.length; i++) {
   var inp=inps[i];
   if(inp.value > 0){
    ages.push(inp.value);
   }
   }
   
   Array.prototype.max = function() {
     return Math.max.apply(null, this);
   };
   
   Array.prototype.min = function() {
     return Math.min.apply(null, this);
   };
   
   var max_age = ages.max();
   var min_age = ages.min();
   if(document.getElementById('familyplan_temp').value == 'yes'){
   if(document.getElementById('number_travelers').value >='2' && max_age <=59 && min_age <=21){
   document.getElementById('GET_QUOTES').style.display = 'block';
   document.getElementById('family_error').innerHTML = '';
   document.getElementById('family_error').style.display = 'none';
   } else {
   document.getElementById('GET_QUOTES').style.display = 'none';
   if(document.getElementById('number_travelers').value <'2'){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
   } else if(max_age > 59){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59';    
   } else if(min_age > 21){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';   
   }
   document.getElementById('family_error').style.display = 'block'; 
   }
   
   } else {
    document.getElementById('GET_QUOTES').style.display = 'block';
    document.getElementById('family_error').style.display = 'none'; 
   }
    
   }
   
   window.onload = function() {
     checktravellers();
   };
</script>
<script src="{{ asset('public/front/js/jquery-1.12.4.min.js')}}"></script>
<script>
   function supervisayes(){
   //window.setTimeout(function(){ 
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
       var someFormattedDate = mm + '/' + dd + '/' + y;
       // var someFormattedDate = y + '-' + mm + '-' + dd;
       document.getElementById('return_date').value = someFormattedDate;
       //alert(someFormattedDate);
   //}, 1000);
   
   checknumtravellers();

   calculatedays();
   }
   
   function enddatechange()
   {
      calculatedays();
   }


   function checktravellers(){
       //Number OF Traveller
       var number_of_traveller = $("#number_travelers").val();
       for(var t=2; t<=8; t++){
           $("#traveller_"+t).hide();
           $("#add_" +t).prop("required", false);
       }
       for(var i=2; i<=number_of_traveller; i++){
           $("#traveller_"+i).show();
           $('#add_'+i).prop("required", true);
       }
       //reset values for other people
       var numt = $('#number_travelers').val() || 1;
       var one = 1;
       var num = parseInt(numt) + parseInt(one);
       for(var a=num; a<8; a++){
           $('#add_'+a).val('');
           $('#add_'+a).prop('required', false);
       }
   
       checkfamilyplan();
   }
   
   
   function checkfamilyplan(){
      
      //Eligibility
      var titles = $('input[name^=years]').map(function(idx, elem) {
         return $(elem).val();
       }).get();
        var ages = [];
        for (var i = 0; i < titles.length; i++) {
           if(titles[i])
           {
              dob = new Date(titles[i]);
              var today = new Date();
              var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
              ages.push(age);
           }
        }
        Array.prototype.max = function() {
          return Math.max.apply(null, this);
        };
        Array.prototype.min = function() {
          return Math.min.apply(null, this);
        };
  
      var max_age = ages.max();
      var min_age = ages.min();
      if($('#familyplan_temp').val() == 'yes'){
          if($('#number_travelers').val() >='2' && max_age <=59 && min_age <=21){
              $('#getqoutesubmitbutton').css('display', 'block');
              $('#family_error').html('');
              $('#family_error').css('display', 'none');
          } 
          else {
              $('#getqoutesubmitbutton').css('display', 'none');

              

              if($('#number_travelers').val() <'2'){
                  $('#family_error').html('<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
              } 
              else if(max_age > 59){
                  $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');  
              } 
              else if(min_age > 21){
                  $('#family_error').html('<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21'); 
              }
              $('#family_error').css('display', 'block'); 
          }
      } 
      else {
          $('#getqoutesubmitbutton').css('display', 'block');
          $('#family_error').css('display', 'none');  
      }
      
  }
   
   window.onload = function() {
     checktravellers();
   };
   @if(isset($_GET['sum_insured2']))
    $( document ).ready(function() {
        $('#getqoutesubmitbutton').click();
    });
   @endif
   $('#quoteform').on('submit', (function(e) {
        $('#getqoutesubmitbutton').html('<i style="color:white;" class="fa fa-spin fa-spinner"></i>');
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST', 
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
            if($.isEmptyObject(data.error)){
                $('.quotationscards').html(data.html);
                $('#getqoutesubmitbutton').html('Get Quotes');
                $('html, body').animate({
                    scrollTop: $(".quotationscards").offset().top
                }, 2000);
                $(".print-error-msg-login").find("ul").html('');
                $(".print-error-msg-login").css('display','none');
            }else{
                $('#getqoutesubmitbutton').html('Get Quotes');
                printErrorMsglogin(data.error);
            }   
            }
        });
    }));
</script>
