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
                                <div class="col-md-4">
                                    <select class="form-control" name="sum_insured2" id="sum_insured2">
                                        <option value="">Coverage Amount</option>
                                        <option value="100000">$100000</option>
                                        <option value="150000">$150000</option>
                                        <option value="200000">$200000</option>
                                        <option value="250000">$250000</option>
                                        <option value="300000">$300000</option>
                                     </select>
                                </div>
                                <div class="col-md-4" style="margin-bottom: 10px;">
                                    <input autocomplete="off" id="departure_date" name="departure_date" class="form-control" type="date" required="">
                                      </div>
                                <div class="col-md-4 ageandcitizen">
                                    <div class="row yearsdiv" style="">
                                       <div class="col-md-5">
                                          <small style="font-size: 12px;color: #999;">Age</small>
                                          <input type="text" name="ages[]" id="ages[]" value="" class="primaryage" style="margin-top: -5px !important;display: block;">
                                       </div>
                                       <div class="col-md-2 text-center text-dark" style="padding-top: 10px;">
                                          or
                                       </div>
                                       <div class="col-md-5" style="padding-top: 10px;">
                                          <a style="cursor: pointer; color: black;" onclick="$('.dobdiv').show(); $('.yearsdiv').hide()">Enter Date of Birth</a>
                                       </div>
                                    </div>
                                     <div class="row dobdiv" style="display:none;">
                                       <div class="col-md-12 d-flex">
                                          <div class="col-md-6 no-padding d-flex">
                                             <div class="col-md-4" style="padding: 0 5px;">
                                                <small style="font-size: 10px;color: #999;padding: 0;">Month</small>
                                                <input type="text" style="margin-top: -5px !important;display: block;">
                                             </div>
                                             <div class="col-md-4" style="padding: 0 5px;">
                                                <small style="font-size: 10px;color: #999;padding: 0;">Day</small>
                                                <input type="text" style="margin-top: -5px !important;display: block;">
                                             </div>
                                             <div class="col-md-4" style="padding: 0 5px;">
                                                <small style="font-size: 10px;color: #999;padding: 0;">Year</small>
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
                                          <div class="col-md-6" style="padding-top: 10px;">
                                             <div style="padding: 0;" class="col-md-2 text-center  text-dark">
                                                or
                                             </div>
                                             <div style="padding: 0;text-align: center;" class="col-md-10">
                                                <a style="cursor: pointer;  color: black;" onclick="$('.dobdiv').hide(); $('.yearsdiv').show()">Enter Age</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" name="destination_country" required="">
                                             <option value=""> --- Primary destination in Canada ---</option>
                                             @foreach(DB::table('countries')->get() as $r)
                                              <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                                           @endforeach
                                       </select>
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