@php
    $url = request()->segment(count(request()->segments()));
    $firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
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