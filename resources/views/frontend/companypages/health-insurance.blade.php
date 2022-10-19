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
        <div class="summary-visitor-list">
             <div class="row">
            <div class="col-md-7">
                <ul class="list-checkmark text-secondary-color body-text-2" >
                    <li>Acupuncturist – </li>
                    <li>Chiropractor – </li>
                    <li>Naturopath –</li>
                    <li>Physiotherapist –</li>
                    <li>Psychologist/Psychotherapist/Clinical Counsellor</li>
                    <li>Registered Massage Therapist –</li>
                    <li>Speech Pathologist/Therapis</li>
                    <li>Orthotics (custom-made) – $225</li>
                    <li>Hearing aids (purchase or repair) – $400 every 4 years</li>
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
            <div class="col-md-5">
                <div class="benefit-image">
                    <img src="{{asset('public/front/img/images/health-final.png')}}">
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="fifth-section">
    <div class="container">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>Frequently Asked Question </span>(FAQ)</h2>
        </div>
        <div class="benifitrow faq">
            <div class="accordion" id="accordionExample">
             <div class="card">
                <div class="card-header" id="faq1">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                        <i class="fa fa-plus"></i> What is Health Insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                   <div class="card-body">
                              Health insurance covers medical, surgical and dental expenses of the insured individual. Moreover, it will compensate for costs suffered from injury or illness.      
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq2">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fa fa-plus"></i>  Can I buy this insurance online?
                      </button>
                   </h5>
                </div>
                <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                   <div class="card-body">
                              Only certified representatives can sell health insurance. They are highly experienced and knowledgeable to assess your needs and recommend the best product for you.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq3">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  Am I eligible?
                      </button>
                   </h5>
                </div>
                <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                   <div class="card-body">
                     You are eligible, if:
                          <ul class="list">
                             <li>Your age is between 18 and 64</li>
                             <li>You are insured by provincial health insurance plan</li>
                             <li>Satisfy the medical underwriting criteria</li>
                          </ul>
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq4">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What does a health insurance plan cover?
                      </button>
                   </h5>
                </div>
                <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                   <div class="card-body">
                              Normally a health insurance plan covers health care, medications, diagnosis, medical and dental surgeries. Depending upon the type of your insurance policy, a good private insurance plan can provide coverage for the following:
                              <ul class="list">
                                 <li>Emergency services</li>
                                 <li>Medical Checkups</li>
                                 <li>Medical and screening tests</li>
                                 <li>Specialized investigations like CAT-SCAN, etc</li>
                                 <li>Dreaded diseases</li>
                                 <li>Maternity benefits</li>
                                 <li>In-hospital medical treatment</li>
                                 <li>OTC and prescription medications</li>
                                 <li>Eye examinations</li>
                                 <li>Eyewear</li>
                                 <li>Dental care and surgery</li>
                                 <li>Physiotherapy</li>
                                 <li>Hearing aids</li>
                                 <li>Medical equipment</li>
                                 <li>Ambulance services</li>
                                 <li>Paramedical services</li>
                              </ul>                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq5">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How is the premium calculated?
                      </button>
                   </h5>
                </div>
                <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                   <div class="card-body">
                     The premium is calculated based on:
                              <ul class="list">
                                 <li>Your age</li>
                                 <li>Your sex</li>
                                 <li>Your coverage type</li>
                              </ul>
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq6">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How is the premium calculated?
                      </button>
                   </h5>
                </div>
                <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                   <div class="card-body">
                     The premium is calculated based on:
                      <ul class="list">
                         <li>Your age</li>
                         <li>Your sex</li>
                         <li>Your coverage type</li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq7">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> CanIf I have an existing medical condition, will I get health insurance? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                   <div class="card-body">
                     You will be denied or offered a plan with limited health benefits in case you have existing medical conditions. Some companies require individuals to complete a medical examination. Moreover, you will also have to meet the age requirements of the insurance company to successfully purchase health insurance.      
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq8">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I add extra coverage options after buying a plan?
                      </button>
                   </h5>
                </div>
                <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                              Yes, you can upgrade your health coverage plan. Simply contact your insurance representative and update your form today.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq8">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa fa-plus"></i> WhatHow do I submit a claim?
                      </button>
                   </h5>
                </div>
                <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    To apply for a claim, you need to fill out forms that apply to your coverage and send us a completed form along with all the supporting documents. Call us at +1-855-500-8999 to get information and necessary documents to submit a claim.
                   </div>
                </div>
             </div>
          </div>
        </div>
    </div>
</section>
<div class="check-products mt-5 pb-5 pt-5">
    <div class="container-homepage">
   <div class="policies-heading text-center">
       <h2><span>Check Our Other Products</span></h2>
   </div>
   <hr>
   <div class="row mt-5 pb-5">
       <div class="col-md-4">
           <div class="card slider-card border-0">
             <div class="card-body text-center">
                <div class="simple-online-transparent-slider">
                   <img src="{{asset('public/front/img/images/family.png')}}">
                </div>
                <div class="slider-heading">
                   <h2><span>Super Visa </span> Insurance</h2>
                </div>
                <div class="slider-pargraph">
                   <p>Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-4">
           <div class="card slider-card border-0">
             <div class="card-body text-center">
                <div class="simple-online-transparent-slider">
                   <img src="{{asset('public/front/img/images/bed.png')}}">
                </div>
                <div class="slider-heading">
                   <h2><span>Visitors</span> Insurance</h2>
                </div>
                <div class="slider-pargraph">
                   <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-4">
           <div class="card slider-card border-0">
             <div class="card-body text-center">
                <div class="simple-online-transparent-slider">
                   <img src="{{asset('public/front/img/images/bed.png')}}">
                </div>
                <div class="slider-heading">
                   <h2><span>Travel</span> Insurance</h2>
                </div>
                <div class="slider-pargraph">
                   <p>Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
                </div>
             </div>
          </div>
       </div>  
   </div>
    </div>
</div>
@endsection