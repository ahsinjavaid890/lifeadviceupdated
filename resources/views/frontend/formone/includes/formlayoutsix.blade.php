<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutsix.css')}}"> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container"> 
   <div class="row">
      <div class="col-md-12 text-center mt-5 mb-5">
         <h1 style="font-weight: 700;font-size: 28px;color: #3d4049 !important;margin-bottom: 20px;" class="text-danger">{{ $data->pro_name }}</h1>
      </div>
   </div>
   <form method="POST" action="{{ url('quotes') }}">
                  @csrf
         <div class="row">
            <div class="col-md-12">
               
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
                              <option value="{{ $i }}">{{ $i }}</option>
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
                              <input  id="departure_date" autocomplete="off" name="departure_date" value=""  class="form-input" type="date" placeholder="Start Date" required <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>
                           </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                           <div class="form-group">
                              <label>End Date</label>
                              <div class="custom-form-control">
                                 <input id="return_date" autocomplete="off" name="return_date" value=""  class="form-input" onchange="calculatedays()" type="date" placeholder="End Date" required @if($data->pro_supervisa == 1) readonly @endif  >
                              </div>
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
                                 @foreach($sum_insured as $r)
                                 <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                                 @endforeach
                              </select>
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
                           <div id="country" class="col-sm-4 col-md-3">
                              <div class="form-group">
                                 <label>States In Canda</label>
                                 <select required class="form-input" name="primary_destination" id="primary_destination" style="    padding: 5px 12px !important;">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div id="canadastate" class="col-sm-4 col-md-3" style="display:none;">
                              <div class="form-group">
                                 <label>States In Canda</label>
                                 <select required class="form-input" name="primary_destination" id="primary_destination" style="    padding: 5px 12px !important;">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
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
                                    <input type="text" name="savers_email" placeholder="Email" required id="savers_email" class="form-input">
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
                                 <select required class="form-input" name="fplan" id="">
                                    <option value="">--- Please Choose ---</option>
                                      <option value="yes" onclick="changefamilyyes()">Yes</option>
                                      <option value="no"  onclick="changefamilyno()">No</option>
                                 </select>
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
                           @endif
                        @endif
                        
                  </div>
               
            </div>
         </div>

         @if(isset($fields['dob']) && $fields['dob'] == "on" )
            @php
               $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
               $c = 0;
            @endphp
            @for($i=1;$i<=$number_of_travel;$i++)
            <div style="display: none;" id="traveler{{ $i }}" class="row no_of_travelers">
               <div class="col-sm-12">
                  <h5 class="type-of-policy"><?php echo $ordinal_words[$i];?> Traveler</h5>
               </div>
               <div class="col-sm-4 col-md-3">
                  <div class="form-group ">
                     <label>Enter Date Of Birth</label>
                     <input onchange="travelerdateofbirth(this.value , {{$i}})" id="dateofbirthfull{{ $i }}" class="form-input txtDate" type="date" name="years[]">
                     <span class="errorshow" id="dateerror{{ $i }}"></span>
                  </div>
               </div>
               <div class="col-sm-4 col-md-3">
                  <div class="form-group">
                     <label>Age</label>
                     <div class="custom-form-control">
                        <input id="age{{ $i }}" value=""  class="form-input"  type="text" placeholder="Age" readonly>
                        <span class="errorshow" id="ageerror{{ $i }}"></span>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-3">
                  <div class="form-group ">
                     <label>Select Pre Existing Condition</label>
                     <select name="pre_existing[]" class="form-input">
                        <option value="">Select Pre Existing Condition</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                  </div>
               </div>
            </div>
            @endfor
         @endif
         <div class="row">
            <div class="col-md-12 text-right">
                  <button class="btn btn-quote">GET A QUOTE</button>
            </div>
         </div>
      </form>
  
</div>
<script type="text/javascript">
   function travelerdateofbirth(id , travelerid) {
      var GivenDate = id;
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
            $('#total_number_of_days').val(dayssuminsured);
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
       //var someFormattedDate = mm + '/' + dd + '/' + y;
       var someFormattedDate = y + '-' + mm + '-' + dd;
       document.getElementById('return_date').value = someFormattedDate;
       //alert(someFormattedDate);
   //}, 1000);
   
   checknumtravellers();

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
       var inps = document.getElementsByName('ages[]');
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
       if($('#familyplan_temp').val() == 'yes'){
           if($('#number_travelers').value >='2' && max_age <=59 && min_age <=21){
               $('#GET_QUOTES').css('display', 'block');
               $('#family_error').html('');
               $('#family_error').css('display', 'none');
           } 
           else {
               $('#GET_QUOTES').css('display', 'none');
               if($('#number_travelers').value <'2'){
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
           $('#GET_QUOTES').css('display', 'block');
           $('#family_error').css('display', 'none');  
       }
       
   }
   
   window.onload = function() {
     checktravellers();
   };
   
</script>
