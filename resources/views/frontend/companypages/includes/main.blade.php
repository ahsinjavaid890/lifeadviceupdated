<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style type="text/css">
.step {
    height: 100%;
    background-color: #ffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 10px 24px rgb(87 106 134 / 20%);
    width: 47%;
    margin-top: 36px !important;
    padding: 20px 30px;
    text-align: left;
}
.health-inssurance-hero-banner {
    background-color: #262566;
}
.ageandcitizen input:focus-visible {
    outline: none;
    border-bottom: 1px solid #bbb !important;
}
.ageandcitizen input {
    border: 0 !important;
    border-bottom: 1px solid #bbb !important;
    width: 100% !important;
    height: 20px;
    padding: 0px;
}
.select2-container .select2-selection--single{
    padding-top: 8px !important;
    height: 50px !important;
}
.select2-container{
    width: 100% !important;
}
.select2-container--default .select2-search--dropdown .select2-search__field:focus-visible{
    border: 0px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
    top: 13px !important;
}
</style>
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
                <div class="card date-card">
                    <div class="card-body">
                        <form method="post" action="#">
                            <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <input value="Coverage Amount" id="txtmanuid" class="form-control" data-toggle="modal" data-target="#coverageammount">
                                </div>
                                <div class="modal" id="coverageammount">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="border-radius: 20px;">

                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="color: #262566;">Coverage Amount</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <h3>What countries will be visited?</h3>
                                        <p class="text-muted">Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered.</p>
                                        <hr class="mt-4">
                                        <select class="select2" name="sum_insured2" id="sum_insured2">
                                            <option value="" >Coverage Amount</option>
                                            <option value="100000">$100000</option>
                                            <option value="150000">$150000</option>
                                            <option value="200000">$200000</option>
                                            <option value="250000">$250000</option>
                                            <option value="300000">$300000</option>
                                         </select>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" data-dismiss="modal"  class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2" style="margin-bottom: 10px;">
                                    <input autocomplete="off"  id="departure" class="form-control" required="" data-toggle="modal" data-target="#departure_dates" >
                                <div class="modal" id="departure_dates">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="border-radius: 20px;">

                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="color: #262566;">Coverage Amount</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <h3>What countries will be visited?</h3>
                                        <p class="text-muted">Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered.</p>
                                        <hr class="mt-4">
                                        <input autocomplete="off" id="departure_date" name="departure_date" class="form-control" type="date"  required="">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" id="paramsOkay" data-dismiss="modal" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    </div>
                                <div class="col-md-3 ageandcitizen">
                                    <div class="row yearsdiv" style="">
                                       <div class="col-md-4">
                                          <small style="font-size: 12px;color: #999;">Age</small>
                                          <input type="text" name="ages[]" id="ages[]" value="" class="primaryage" style="margin-top: -5px !important;display: block;">
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
                                          <div class="col-md-7 no-padding d-flex">
                                             <div class="col-md-4" style="padding: 0 5px;">
                                                <small style="font-size: 7px;color: #999;padding: 0;">Month</small>
                                                <input type="text" style="margin-top: -5px !important;display: block;">
                                             </div>
                                             <div class="col-md-4" style="padding: 0 5px;">
                                                <small style="font-size: 7px;color: #999;padding: 0;">Day</small>
                                                <input type="text" style="margin-top: -5px !important;display: block;">
                                             </div>
                                             <div class="col-md-4" style="padding: 0 5px;">
                                                <small style="font-size: 7px;color: #999;padding: 0;">Year</small>
                                                <input type="text" id="dob_year" onchange="calprimaryage()" style="margin-top: -5px !important;display: block;">
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <input autocomplete="off" id="destinations" class="form-control" required="" data-toggle="modal" data-target="#primary_destinations" >
                                    </div>
                                    <div class="modal" id="primary_destinations">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="border-radius: 20px;">

                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="color: #262566;">Coverage Amount</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <h3>What countries will be visited?</h3>
                                        <p class="text-muted">Traveling to Multiple Countries? : If any part of your trip includes the United States, please select the United States as your Destination Country. Other eligible countries except Home Country and restricted countries under this plan are covered.</p>
                                        <hr class="mt-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select name="primary_destination" class="select2" id="primary_destination" autocomplete="off" name="destination_country" required="">
                                                     <option value=""> --- Primary destination in Canada ---</option>
                                                     @foreach(DB::table('countries')->get() as $r)
                                                      <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12 no-padding">
                                                 <h3 style="font-size: 14px;"><i class="fa fa-wheelchair"></i> Pre-existing Condition ?</h3>
                                                 <div class="col-md-12 no-padding">
                                                    <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                                 </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12 no-padding">
                                                         <h3 style="font-size: 14px;"><i class="fa fa-child"></i> Do you require Family Plan ?</h3>
                                                         <div class="col-md-12 no-padding">
                                                            <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="fplan" value="yes" style="width: auto !important;height: auto;" onclick="changefamilyyes()"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="fplan" value="no" checked="" style="width: auto !important;height: auto;" onclick="changefamilyno()"> No</label>
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
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="#" class="btn btn-secondary btn-quote mt-2">Get Quotes</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<script>
    $('.select2').select2();
</script>
<script type="text/javascript">
    $( "#sum_insured2" ).change(function() {
        var sel = $( "#sum_insured2 option:selected" ).val();
        var textbox = document.getElementById("txtmanuid");
        textbox.value =$( "#sum_insured2 option:selected" ).text();
    });
</script>
<script>
        
    $(document).ready(function(){

        $('#departure_dates').on('click','#paramsOkay', function (e) {
            $('#departure').val($('#departure_date').val())
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