@extends('frontend.layouts.main')

@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
    $secondsection = DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $url)->get();
@endphp

@section('content')
@include('frontend.companypages.includes.main')
<div class="our-mission-section">
    <div class="container-homepage">
        <div class="row">
            @foreach($secondsection as $r)
            <div class="col-md-4">
                <div class="our-mission">
                    <div class="heading-our-mission-section">
                        <img src="{{ url('public/images') }}/{{ $r->vector }}">
                        <h1>{{ $r->heading }}</h1>
                    </div>
                    <p>{!! $r->description !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
    <div class="finding-right">
        <div class="container-homepage">
            <div class="row aboutussecondrow">
                <div class="col-md-2">
                    <img src="{{ asset('public/front/img/images/png-17.png') }}">
                </div>
                <div class="col-md-8">
                    <h1 class="wow fadeInUp" data-wow-delay=".4s"> <span> Finding Right Coverage</h1>
                    <p>Finding the right coverage can be difficult, which is why we take pride in assisting our customers to navigate coverage options by providing custom-tailored insurance solutions. We offer Life Insurance, Health insurance, Travel Insurance, employee health benefits, group health insurance and Investment products– protecting everything that matters to you!</p>
                    <p>We know that life can throw us all curveballs and that there can be bumps along the way, which is why it is crucial for us to ensure our clients are safeguarded against these unexpected turns. Furthermore, we know our clients work hard for the success they have achieved. Thus, it is extremely important to minimize tax and retain as much of their earnings as possible.</p>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('public/front/img/images/png-18.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="what-we-offer">
        <div class="container-homepage">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('public/front/img/images/png-02.png') }}">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6 choice1 pb-5" style="border-top-left-radius: 40px;">
                            <div class="choice-card-image">
                                <img src="{{ asset('public/front/img/images/people.png') }}" style="width: 100px;">
                            </div>
                            <div class="choice-card-heading mt-5">
                                <h2 class="text-white">Multi Insurance Choices</h2>
                            </div>
                            <div class="choice-card-paragraph">
                                <p>We deliver quality insurance policies to individuals and family's in Canada and design insurance policies to fit your needs.</p>
                            </div>

                        </div>
                              <div class="col-md-6 choice2">
                                <div class="card choice-card">
                                    <div class="card-body" style="padding: 0px 0px 0px 20px;">
                                        <div class="choice-card-image">
                                <img src="{{ asset('public/front/img/images/one-men.png') }}" style="width: 100px;">
                            </div>
                            <div class="choice-card-heading mt-5">
                                <h2>An Honest Guide</h2>
                            </div>
                            <div class="choice-card-paragraph">
                                <p>Experience the quality service and attentions in detail. We deliver exceptional insurance services to individuals and family’s in Canada.</p>
                            </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 choice2 pt-3">
                           <div class="card choice-cards">
                                    <div class="card-body">
                            <div class="choice-card-heading">
                                <h2>We get You Covered</h2>
                            </div>
                            <div class="choice-card-paragraph">
                                <p>We commit to provide customers with the best insurance value and service available for complete family and their needs like car, home etc.</p>
                            </div>
                            <div class="choice-card-images">
                                <img src="{{ asset('public/front/img/images/meet.png') }}" style="width: 100px;">
                            </div>
                                    </div>
                                </div>
                            
                        </div>
                              <div class="col-md-6 choice1" style="border-bottom-right-radius: 40px;height: 225px;">
                            <div class="choice-card-heading mt-5">
                                <h2 class="text-white">Perfect Policy Plans</h2>
                            </div>
                            <div class="choice-card-paragraph">
                                <p>Get a comprehensive rundown of insurance plans that what’s covered to... from what coverage amounts.</p>
                            </div>
                            <div class="choice-card-images">
                                <img src="{{ asset('public/front/img/images/pencil.png') }}" style="width: 100px;">
                            </div>
                        </div>
                    </div>

                    <div class="logo-image">
                        <img src="{{ asset('public/front/img/images/logo.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="online-support">
    <div class="container-homepage">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="suppot-heading">
                    <h2>Life Insurance Online Support</h2>
                </div>
                <div class="suppot-pargraph">
                    <p>Lifes advice will be providing ongoing support and helpful articles that will provide our readers with all of the latest info on insurance products and requirements for travel and immigration. Through our resources and our skilled staff members, we can make insurance products more accessible and affordable than ever before.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="suppot-image">
                    <img src="{{ asset('public/front/img/images/play.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection