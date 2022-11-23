<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayoutone.css')}}">
<script>
   var SliderValues = [100000, 150000, 200000, 250000, 300000];
   
   var iValue = SliderValues.indexOf(SliderValues[0]);
   $(function () {
       $("#sum_slider").slider({
           range: "min",
           min: 0,
           max: SliderValues.length - 1,
           step: 1,
           value: iValue,
           slide: function (event, ui) {
               $('#coverage_amount').text(SliderValues[ui.value]);
               //alert(SliderValues.length);
                   for (i = 0; i < SliderValues.length; i++) {
                   var group = SliderValues[i];
                   $('.coverage-amt-'+group).hide();
                   }
               $('.coverage-amt-'+SliderValues[ui.value]).show();
               $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
               $( "#sum_insured2").val(SliderValues[ui.value]);
           }
       });
   
   });
     
</script>
<section style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('public/front/bgs/8.jpg') }}'); background-size: cover; background-position: 50% 50%; padding:50px 0px;">
   <div class="container">
      <div class="row birthdate">
         <div class="col-md-2 hidden-xs"></div>
         <div class="col-md-8 visa-insurance new-visa">
            <div class="clearfix"></div>
            <div class="col-md-12 text-center" style="padding: 20px 0;">
               <h1 class="title-form" style=""><strong>{{ $data->pro_name }}</strong></h1>
               <h2 class="title_des">To start, we have a few quick questions to understand your needs.</h2>
            </div>
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
         <form action="{{ url('quotes') }}" method="post" class=" form form-layout1" role="form" id="dh-get-quote">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">               
               @if($fields['sum_insured'] == 'on')
               <div id="sum_insured2">
                  <div class="col-md-12 col-sm-12 col-xs-12 control-label " style="text-align: left;">
                     <h4 class="coverage">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" value="$"></h4>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                     <div id="sum_slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                        <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div>
                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                     </div>
                     <input type="hidden" id="sum_insured2" name="sum_insured2" value="100000">
                     <input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
                  </div>
               </div> 
            @endif
            <div class="row">
               <div class="col-md-12">
                     <div class="custom-form-control">
                        <select required class="form-input" name="primary_destination" id="coverageammount">
                           <option value=""> --- Primary destination in Canada ---</option>
                            @foreach(DB::table('countries')->get() as $r)
                           <option value="{{ $r->name }}">{{ $r->name }}</option>
                           @endforeach
                        </select>
                        <label for="coverageammount" class="form-label">Coverage Amount</label>
                     </div>
                  </div>
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
                     <div class="col-md-12">
                        <div class="custom-form-control">
                           <input type="text" name="savers_email" placeholder="savers_email" required id="savers_email" class="form-input">
                           <label for="savers_email" class="form-label">Email</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <img src="{{ url('public/front/bgs/low_pr_icon.png') }}">
                     </div>
                     <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Get Quote</button>
                     </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>



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
   
   

</script>
<script>
      jQuery(document).ready(function($){
          $("select[name=number_travelers]").on("change", function(){
              var number_of_traveller = $(this).val();
              var aa = "";
              for(var i=2; i<=number_of_traveller; i++){
                  aa = aa +'<div class="col-md-6 col-sm-6 col-xs-12 control-input">' + $(".birthday")[0].outerHTML +'</div>';
              }
   
              $("#birthday_view").html(aa);
              console.log( $(".birthday")[0] );
          })
      });
</script>
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