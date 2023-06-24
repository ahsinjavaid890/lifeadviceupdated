@php
    $url = request()->segment(count(request()->segments()));
    $firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/mainlayouttwo.css') }}">
<div class="health-inssurance-hero-banners super-hero ahmSupperBanner">
    <div class="container-homepage">
        <div class="row mb-3">
            <div class="col-md-6 hero-texts">
                <div class="herrotext super-hero-text">
                    <h2 class="wow fadeInUp text-responsive" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
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
    </div>
</div>

<div class="pt-3 pb-3 subpage-full-details mydata svicmai_resultblk">
   <div class="container">
      <form id="quoteform" class="quteform super-visa-quote" action="{{ url('ajaxquotes') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
         <h1 class="h2title">{{ $data->pro_name }} Quote Form</h1>
         <div class="row wow slideInUp animated animated mb-3" id="min-requirement" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInUp;">
            <div class="input-group input-append date col-md-4">
               <label>Coverage</label>
               <select onchange="sum_insured(this.value)"  name="sum_insured2" class="card-number">
                    <option value="">Select Coverage Amount</option>
                    @foreach($sum_insured as $r)
                        <option @if(isset($_GET['sum_insured2'])) @if($_GET['sum_insured2'] == $r->sum_insured) selected @endif  @endif  value="{{ $r->sum_insured }}">${{ number_format($r->sum_insured) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-append date col-md-4">
               <label>Primary Destination</label>
               <select name="primarydestination" id="primarydestination" class="card-number">
                    <option value="">Select Primary Destination</option>
                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                        <option @if(isset($_GET['primarydestination'])) @if($_GET['primarydestination'] == $r->name) selected @endif @endif @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-append date col-md-4">
               <label>Number of Travellers</label>
               <select onchange="checknumtravellers(this.value)" required class="card-number" name="number_travelers" id="number_travelers">
                 <option value="">Number of Travellers</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
              </select>
            </div>
         </div>
            @php
              $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
              $c = 0;
           @endphp

           @for($i=1;$i<=6;$i++)
            <div class="row no_of_travelers mb-3" style="display: none;" id="traveler{{ $i }}">
                <div class="input-group input-append date col-md-4">
                    <label for="day" class="form-label lables" id="">Birth date of the <?php echo $ordinal_words[$i];?> Traveller</label>
                    <input id="dateofbirthfull{{ $i }}" class="card-number" type="text" inputmode="numeric" placeholder="MM/DD/YYYY" name="years[]" >
                </div>
                <div class="input-group input-append date col-md-4">
                    <label for="day" class="form-label lables" id="">Pre Existing of <?php echo $ordinal_words[$i];?></label>
                    <select id="pre_existing{{ $i }}" name="pre_existing[]" class="card-number">
                     <option value="">Select Pre Existing Condition</option>
                     <option value="yes">Yes</option>
                     <option selected value="no">No</option>
                   </select>
                </div>
            </div>
           @endfor
         <div class="mb-3 row wow slideInDown animated animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
            @php
                $date = date('Y-m-d');
                $todate =  date('Y-m-d', strtotime($date. ' + 364 days'));
            @endphp
            <div class="input-group input-append date col-md-4" id="datePicker_0">
                <label>Start Date</label>
                <input type="date" id="departure_date" onchange="supervisayes()" class="form-control" name="departure_date" placeholder="YYYY-MM-DD" autocomplete="off">
            </div>
            <div class="input-group input-append date col-md-4" id="datePicker_1">
                <label>End Date</label>
                <input type="date" class="form-control" name="return_date" id="return_date" placeholder="YYYY-MM-DD" autocomplete="off">
            </div>
         </div>

         <div class="row wow slideInDown animated animated" id="first-dob" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
            
         </div>

         <div class="row wow slideInUp animated animated" id="days-calculate" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInUp;">
            
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
       // var someFormattedDate = mm + '/' + dd + '/' + y;
       var someFormattedDate = y + '-' + mm + '-' + dd;
       document.getElementById('return_date').value = someFormattedDate;
       //alert(someFormattedDate);
   //}, 1000);
   
   }
   $('#quoteform').on('submit',(function(e) {
        $('#getqoutesubmitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
        e.preventDefault();
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
    }));
</script>