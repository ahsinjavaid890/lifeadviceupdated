@extends('frontend.layouts.maintwo')
@include('frontend.companypages.includes.mettatittle')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css') }}">
    @php
        $url = request()->segment(count(request()->segments()));
        $firstsection = DB::table('travelpages')
            ->where('url', $url)
            ->first();
    @endphp
    <div class="health-inssurance-hero-banners super-hero ahmSupperBanner">
        <div class="container-homepage">
            <div class="row mb-3">
                <div class="col-md-6 hero-texts">
                    <div class="herrotext super-hero-text">
                        <h2 class="wow fadeInUp text-responsive" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
                        <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span
                                class="text-white">{{ $firstsection->sub_heading }}</span></h5>
                        @if ($firstsection->main_button_text)
                            <div class="btns d-flex">
                                <div class="details">
                                    <a href="{{ $firstsection->main_button_link }}"
                                        class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 hero-images">
                    <div class="hero-image super-images"
                        style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image }}');
               background-position: 50% 70%;
               background-size: 100%;
               background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($data->quotation_form_on_stylish_page == 1)
        @if ($data->stylish_form_layout == 'layout_1')
            @include('frontend.travelinsurance.includes.form-one-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_2')
            @include('frontend.travelinsurance.includes.form-two-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_3')
            @include('frontend.travelinsurance.includes.form-three-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_4')
            @include('frontend.travelinsurance.includes.form-four-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_5')
            @include('frontend.travelinsurance.includes.form-five-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_6')
            @include('frontend.travelinsurance.includes.form-six-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_7')
            @include('frontend.travelinsurance.includes.form-seven-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_8')
            @include('frontend.travelinsurance.includes.form-eight-supervisa')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
        @if ($data->stylish_form_layout == 'layout_9')
            @include('frontend.companypages.includes.mainlayouttwo')
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
    @else
        @include('frontend.companypages.includes.includes.heroinclude')
    @endif
    @include('frontend.companypages.includes.sectiontwo')
    @include('frontend.companypages.includes.sectionthree')
    @include('frontend.companypages.includes.sectionfour')
    @include('frontend.companypages.includes.faqsection')
    @include('frontend.companypages.includes.productsection')
@endsection


@section('script')
    <link href="{{ url('public/front/css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ url('public/front/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dateofbirthfull').mask('00/00/0000');
            $('.dateofbirthfull2').mask('00/00/0000');
            $('.dateofbirthfull3').mask('00/00/0000');
            $('.dateofbirthfull4').mask('00/00/0000');
            $('.dateofbirthfull5').mask('00/00/0000');
            $('.dateofbirthfull6').mask('00/00/0000');
        });
    </script>
    <script>
        $(".sum_insured2").select2({
            minimumResultsForSearch: -1,
            placeholder: "Select Coverage Amount",
            allowClear: false
        });
        $(".primarydestination").select2({
            minimumResultsForSearch: -1,
            placeholder: "Select Primary Destination",
            allowClear: false
        });


        $(".pre_existing_condition1").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition2").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition3").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition4").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition5").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition6").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
    </script>
@endsection
