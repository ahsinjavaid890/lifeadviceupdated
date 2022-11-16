 $( function() {
     $( "#dob" ).datepicker({
       changeMonth: true,
       changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: "-100:+0",
    endDate: "today",
       maxDate: "today",
     });
   } );
   
   $( function() {
     $( "#departure_date" ).datepicker({
       changeMonth: true,
       changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: "+0:+5",
    minDate: "today",
     });
   } );

// Validation
  jQuery(document).ready(function($){
            
                $("#dh-get-quote").validate();
            
                /*$("#dh-get-quote").on("submit",function(){
            
                    $("#dh-get-quote").validate();
            
                })*/
            
                
            
            });



jQuery(document).ready(function($){
       
          jQuery(window).load(function(){
       
              
       
       var values = $('input[type="range"]').data("steps").split(',');
       
            var default_value = $('input[type="range"]').data("default");
       
              
       
               $('input[type="range"]').rangeslider({
       
                polyfill : false,
       
                onInit : function() {
       
                    this.output = $( '<div class="range-output" />' ).insertAfter( this.$range).html( "$ "+default_value); //this.$element.val()
       
                    $('#hidden_sum_insured').val( default_value );
       
                },
       
                onSlide : function( position, value ) {
       
                  console.log(values);
       
                    this.output.html(  "$ "+values[this.value]  );
       
                    console.log("Values "+this.value);
       
                    $('#hidden_sum_insured').val( values[this.value] );
       
                },
       
                onSlideEnd: function(position, value ){
       
                  localStorage.sliderValue = values[this.value];
       
                  localStorage.sliderPosition = this.value;
       
                }
       
            });
       
              if (typeof Storage !== 'undefined' && localStorage.getItem("sliderValue")!==null) {
       
                  jQuery('input[type="range"]').rangeslider('update', true);
       
              }
       
          })
       
       
       
       });
       
       
       
       // destination
function CountryState(evt) {
            if(evt.value=="Canada")
            {
                jQuery("#primary_destination_State_div").show();
                jQuery("#usa_stop_div").hide();
            }else if(evt.value=="United States")
            {
                jQuery("#primary_destination_State_div").hide();
                jQuery("#usa_stop_div").hide();
           }else
           {
               jQuery("#primary_destination_State_div").hide();
                jQuery("#usa_stop_div").show();
           }
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
        checktravellers();
    }
       jQuery('#gender:before').click(function() {
           var text = jQuery(this).attr('data-on-text');
   //        var text2 = jQuery(this).attr('data-off-text');
   //        checkbox-6
            console.log(text);
   //         console.log(text2);
       });
       function subform(){
           alert('submit form');
           return false;
       }
       jQuery(document).ready(function($){
        jQuery("#GET_QUOTES").on("click",function(){
        });
   /*
           $("#number_travelers").on("change", function(){
            //Number OF Traveller
            var number_of_traveller = $("#number_travelers").val();
            var aa = "";
            for(var i=2; i<=number_of_traveller; i++){
            var aa = aa + $("#birthday")[0].outerHTML;
            }
            $("#birthday_view").html(aa);
           })
   */
           $("button[type=submit]").on("change", function(){
               //function validateForm() {
               //if($(this).val() > 1){
               ///      alert('fsd');
               //       return false;
               //}
               //}
           });
   
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
   
   /*       $('#GET_QUOTES').click(function(){
            var deparature = $('#departure_date').val();
            $('#departuredate').val(deparature);
        var returndate = $('#return_date').val();
            $('#returndate').val(returndate);
        });
   */
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
   }
   
   function checknumtravellers(){
    //Number OF Traveller
    var number_of_traveller = document.getElementById('number_travelers').value;
    for(var t=1; t<=number_of_traveller; t++){
        $("#traveller_"+t).hide();
        document.getElementById('age_'+t).value = '';
    }
    for(var t=1; t>=number_of_traveller; t++){
        $("#number_travelers"+t).hide();
        document.getElementById('traveller_'+t).value = '';
    }
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






    $(document).ready(function(){
   $("#departure_date").click(function(){
   $("#ui-datepicker-div").toggle();
   });
   });


