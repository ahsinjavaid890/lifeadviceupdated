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
                    <div class="btns d-flex">
                        <div class="details">
                            <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                        </div>
                    </div>
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
                            <div class="container-homepage">
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-control">
                                        <option>Desination</option>
                                        <option>Pakistan</option>
                                        <option>India </option>
                                        <option>Afghanistan</option>
                                        <option>America</option>
                                        <option>Dubai</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>Travel Information</option>
                                        <option>Pakistan</option>
                                        <option>India </option>
                                        <option>Afghanistan</option>
                                        <option>America</option>
                                        <option>Dubai</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control nice-select"id="fromDate" placeholder="Start Date">
                                        <input type="text" id="toDate" class="form-control nice-select" placeholder="End Date" aria-label="Server">
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