<link rel="stylesheet" type="text/css" href="{{ asset('public\front\tabs\formlayoutten.css')}}">
<div class="pt-3 pb-3 subpage-full-details mydata svicmai_resultblk">
   <div class="container container-layout-two">
      <form id="quoteform" class="quteform super-visa-quote" action="{{ url('ajaxquotes') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
         <h1 class="h2title">{{ $data->pro_name }} Quote Form</h1>
         <h6>What type of policy do you want?</h6>
         <div class="row wow slideInDown animated animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
           <div class="radiobtn input-group input-append col-md-3 col-sm-6 col-xs-12">
              <input onchange="policytype(this.value)" type="radio" id="single" class="policy-type" name="drone_policy" value="single" checked="">
              <label for="single">Single Coverage</label>
           </div>
           <div class="radiobtn input-group input-append col-md-3 col-sm-6 col-xs-12">
              <input onchange="policytype(this.value)" type="radio" id="couple" class="policy-type" name="drone_policy" value="couple">
              <label for="couple">Couple Policy</label>
           </div>
           @if($data->url == 'visitor-insurance')
           <div class="radiobtn input-group input-append col-md-3 col-sm-6 col-xs-12">
              <input type="radio" id="family" class="policy-type" name="drone_policy" value="family" data-gtm-form-interact-field-id="6"><label for="family">Family Policy</label>
           </div>
           @endif
        </div>
        <div class="row wow slideInDown animated animated" id="first-dob" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
           <div class="input-group input-append date col-md-4 col-sm-12 col-xs-12">
              <label>Date of Birth <span id="dateerrorfirst" class="text-danger"></span></label>
              <input id="dateofbirthfull1" class="form-control inputdate" type="text" inputmode="numeric" onkeyup="calculateagefirst(this.value , 'dateofbirthfull1')" placeholder="MM/DD/YYYY" name="years[]">
              <span class="input-group-addon add-on"><i class="fa fa-calendar dob" aria-hidden="true"></i></span>

           </div>
           <small class="fld-mt col-md-1">
              <p>OR</p>
           </small>
           <div class="input-group input-append date col-md-2">
              <label>Age</label><input readonly type="number" placeholder="Age" class="card-number" name="age" id="age">
           </div>
        </div>
        <div class="row" id="second-dob"  style="display: none;">
            <div class="input-group input-append date col-md-4 col-sm-12 col-xs-12">
                <label>Date of Birth</label>
                <input id="dateofbirthfull2" class="form-control inputdate" type="text" inputmode="numeric" onkeyup="calculateagesecond(this.value , 'dateofbirthfull2')" placeholder="MM/DD/YYYY" name="years[]">
                <span class="input-group-addon add-on"><i class="fa fa-calendar dobsecond" aria-hidden="true"></i>
                </span>
            </div>
            <small class="fld-mt col-md-1">
              <p>OR</p>
            </small>
            <div class="input-group input-append date col-md-2"> <label>Age</label><input type="number" placeholder="Age" class="card-number" name="age_second" id="getagesecond"></div>
        </div>
        <div class="row wow slideInUp animated animated" id="days-calculate" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInUp;">
           <div class="input-group input-append date col-md-4" id="datePicker_0">
                <label>Start Date <span class="text-danger" id="departure_date_error"></span></label>
                <input type="text" @if($data->url != 'visitor-insurance') onchange="supervisayes()" @endif @if($data->url == 'visitor-insurance') onchange="visitorinsuracendate()" @endif class="form-control inputdate" id="departure_date" name="departure_date" placeholder="MM-DD-YYYY" autocomplete="off" readonly="true">
                <span class="input-group-addon add-on">
                    <i class="fa fa-calendar visStartDate" aria-hidden="true"></i>
                </span>
           </div>
           <div class="input-group input-append date col-md-4">
                <label>End Date</label>
                <input onchange="getnumberofdays()" type="text" class="form-control inputdate" name="return_date" id="return_date" placeholder="MM-DD-YYYY" autocomplete="off" readonly="true">
                <span class="input-group-addon add-on">
                    <i class="fa fa-calendar visEndDate" aria-hidden="true"></i>
                </span>
           </div>
           <small class="fld-mt col-md-1">
              <p>OR</p>
           </small>
           <div class="input-group input-append date col-md-2">
              <label>Days</label><input readonly type="number" placeholder="Days" class="card-number visDaysNo" name="visDaysNo">
           </div>
        </div>
         <div class="row wow slideInUp animated animated mb-3" id="min-requirement" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInUp;">
            <div class="input-group input-append date col-md-4">
               <label>Coverage</label>
               <select onchange="sum_insured(this.value)"  name="sum_insured2" class="card-number">
                    <option value="">Select Coverage Amount</option>
                    @foreach($sum_insured as $key=> $r)
                        <option @if($key == 0) selected @endif  value="{{ $r->sum_insured }}">${{ number_format($r->sum_insured) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-append date col-md-4">
               <label>Enter your Email</label>
               <input type="text" @if(isset($_GET['savers_email'])) value="{{ $_GET['savers_email'] }}" @endif
                    name="savers_email" placeholder="name@example.com" required id="savers_email" class="card-number">
            </div>

            
         </div>

         <h6>Would you like to cover pre-existing medical conditions? </h6>
         <div class="row pre-existing-first wow slideInDown animated animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
            <div class="radiobtn col-md-2">
                <input checked type="radio" id="no" class="pre-exist" name="pre_existing[]" value="no" >
                <label for="no">No</label>
            </div>
            <div class="radiobtn col-md-2 ">
                <input type="radio" id="yes" class="pre-exist" name="pre_existing[]" value="yes"><label for="yes">Yes</label>
            </div>
        </div>
        <input type="hidden" id="preexisitngtwo" name="pre_existing[]" value="">
        <div class="row pre-existing-second" style="display: none;">
           <div class="radiobtn col-md-2"><input type="radio" onchange="preexisitngtwofun(this.value)" id="no-two" class="pre-exist" name="preexisitngtwo" value="no" checked=""><label for="no-two">No</label> </div>
           <div class="radiobtn col-md-2 "><input type="radio" onchange="preexisitngtwofun(this.value)" id="yes-two" class="pre-exist" name="preexisitngtwo" value="yes"><label for="yes-two">Yes</label></div>
        </div>
        <div class="mt-3 form-group message-btn wow slideInUp animated animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInUp;">
            <button type="submit" class="btn-style-four" id="getqoutesubmitbutton">GET QUOTE</button>
        </div>
      </form>
      <div class="results_search" id="results_search">
            
      </div>
   </div>
</div>
<script type="text/javascript">
function preexisitngtwofun(id) {
    $('#preexisitngtwo').val(id);
}
function getage(id) {
    $('#dateerrorfirst').html('')
    dob = new Date(id);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    $('#age').val(age);
}
function calculateagesecond(dateofbirth , classname) {
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
       getagesecondage(dobDate)
       $('#'+classname).css('border-color', 'green');
       $('#getqoutesubmitbutton').prop('disabled' , false);
   }
}
function calculateagefirst(dateofbirth , classname) {
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
       getage(dobDate)
       $('#'+classname).css('border-color', 'green');
       $('#getqoutesubmitbutton').prop('disabled' , false);
   }
}


function getagesecondage(id) {
    dob = new Date(id);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    $('#getagesecond').val(age);
}

function visitorinsuracendate() {
    var mindate = $('#departure_date').val();
    $('#return_date').datepicker( {
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        minDate: new Date(mindate),
    });
}

$(function() {
    $('#date_of_birth_one').datepicker( {
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        maxDate: new Date(),
    });
    $('#departure_date').datepicker( {
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+6",
        minDate: new Date(),
    });
    $('#date_of_birth_two').datepicker( {
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        maxDate: new Date(),
    });
});
function policytype(id) {
    if(id == 'single')
    {
        $('#second-dob').slideToggle('slow');
        $('.pre-existing-second').slideToggle('slow');
        $('#preexisitngtwo').val('');
    }


    if(id == 'couple')
    {
        $('#preexisitngtwo').val('no');
        $('#second-dob').slideToggle('slow');
        $('.pre-existing-second').slideToggle('slow');
    }
}
function getnumberofdays() {
    $('#departure_date_error').val('')
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
            $('.visDaysNo').val(dayssuminsured);
         }
      }
}

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
        getnumberofdays();
   }
   $('#quoteform').on('submit',(function(e) {
        
        e.preventDefault();

        if($('#date_of_birth_one').val() == '')
        {
            $('#dateerrorfirst').html('This Field Is Required')
        }else{

            if($('#departure_date').val() == '')
            {
                $('#departure_date_error').html('This Field Is Required')
            }else{
                $('#getqoutesubmitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
                var formData = new FormData(this);
                $.ajax({
                    type:'POST',
                    url: $(this).attr('action'),
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(data){
                        // console.log(data.html)
                        $('#getqoutesubmitbutton').html('Get Quotes');
                        $('.results_search').html(data.html);
                    }
                });
            }

            
        }

        
    }));
</script>