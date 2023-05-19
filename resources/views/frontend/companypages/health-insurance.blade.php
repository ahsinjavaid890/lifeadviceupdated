@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')

@section('content')
@include('frontend.companypages.includes.main')

   <section class="first-section-of-page" style="padding-bottom: 40px;">
            <div class="container-homepage">
                <div class="benefits-heading text-center">
                    <h2>You can really <span>Benefit</span> from a private medical insurance plan if you:</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card benefit-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="benefit-card-image d-flex align-items-center">
                                            <img src="{{asset('public/front/img/images/safe-laptop.png')}}" class="mr-3">
                                            <p class="text-white text-bold">are self-employed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card benefit-card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="benefit-card-image d-flex align-items-center">
                                            <img src="{{asset('public/front/img/images/safe-home.png')}}" class="mr-3">
                                            <p class="text-white text-bold">work on a freelance or contract basis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card benefits-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="benefit-card-image d-flex align-items-center">
                                            <img src="{{asset('public/front/img/images/heart-health.png')}}" class="mr-3">
                                            <p class="text-white text-bold">have little or no group medical coverage through work</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card benefits-card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="benefit-card-image d-flex align-items-center">
                                            <img src="{{asset('public/front/img/images/safe-dollar.png')}}" class="mr-3">
                                            <p class="text-white text-bold">lose your group health benefits at retire-men</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Appointment Area -->

    <!-- Start About Area -->
    <section class="drug-area-five pb-5 pt-5">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-4">
                <div class="card drug-card">
                    <div class="card-body">
                            <div class="health-image d-flex align-items-center">
                                <img src="{{asset('public/front/img/images/tablet.png')}}" class="mr-3">
                                <h2>Drug</h2>
                            </div>
                    </div>
                </div>
                <div class="card mt-4 drug-card">
                    <div class="card-body">
                            <div class="health-image d-flex align-items-center">
                                <img src="{{asset('public/front/img/images/signal-people.png')}}" class="mr-3">
                                <h2>Registered Specialists And therapists</h2>
                            </div>
                    </div>
                </div>
                <div class="card mt-4 drug-card">
                    <div class="card-body">
                            <div class="health-image d-flex align-items-center">
                                <img src="{{asset('public/front/img/images/hand-health.png')}}" class="mr-3">
                                <h2>Extended Health Care</h2>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="drug-center-image">
                <img src="{{asset('public/front/img/images/insurance-board.gif')}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card drug-cards">
                    <div class="card-body">
                            <div class="health-image d-flex align-items-center">
                                <img src="{{asset('public/front/img/images/tablet.png')}}" class="mr-3">
                                <h2>Drug</h2>
                            </div>
                    </div>
                </div>
                <div class="card mt-4  drug-cards">
                    <div class="card-body">
                            <div class="health-image d-flex align-items-center">
                                <img src="{{asset('public/front/img/images/signal-people.png')}}" class="mr-3">
                                <h2>Registered Specialists And therapists</h2>
                            </div>
                    </div>
                </div>
                <div class="card mt-4  drug-cards">
                    <div class="card-body">
                            <div class="health-image d-flex align-items-center">
                                <img src="{{asset('public/front/img/images/hand-health.png')}}" class="mr-3">
                                <h2>Extended Health Care</h2>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End About Area -->

    <!-- Start Choose Us Area -->
<section class="summary-visitor-area pb-70">
    <div class="container-homepage">
        <div class="summary-visitor text-center">
            <h2>Summary of Visitors Insurance Benefits:</h2>
        </div>
        <div class="summary-visitor-list" style="padding-top:20px;">
             <div class="row">
            <div class="col-md-7">
                <div class="card transparent-card transparents-card transparents-card-responsive" style="padding: 30px;">
                    <div class="row lists-checkmark">
                        <div class="col-md-6">
                            <ul class="list-checkmark list-checkmark1 text-secondary-color body-text-2" >
                                <li>Acupuncturist – </li>
                                <li>Chiropractor – </li>
                                <li>Naturopath –</li>
                                <li>Physiotherapist –</li>
                                <li>Psychologist/Psychotherapist/Clinical Counsellor</li>
                                <li>Registered Massage Therapist –</li>
                                <li>Speech Pathologist/Therapis</li>
                                <li>Orthotics (custom-made) – $225</li>
                                <li>Hearing aids (purchase or repair) – $400 every 4 years</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-checkmark text-secondary-color body-text-2">
                                <li>Homecare and nursing –</li>
                                <li>Prosthetic appliances (e.g., artificial joints and limbs)</li>
                                <li>Durable medical equipment (e.g., wheelchairs, ventilators and lifts)</li>
                                <li>Ambulance (air or ground) –</li>
                                <li>Accidental dental</li>
                                <li>Hospital</li>
                                <li>Vision -</li>
                                <li>Travel</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-5">
                <div class="benefit-image">
                    <img src="{{asset('public/front/img/images/health-final.png')}}">
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@include('frontend.companypages.includes.faqsection')
@endsection