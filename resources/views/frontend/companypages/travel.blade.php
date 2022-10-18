@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.main')
@include('frontend.companypages.includes.sectiontwo')
@include('frontend.companypages.includes.sectionthree')


<section class="third-section">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>What Does </span>Travel Insurance Cover?</h2>
        </div>
        <div class="row benifitrow" style="padding-top:20px;">
            <div class="col-md-7">
                <div class="card transparent-card" style=" padding: 30px; ">
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="list-checkmark text-secondary-color body-text-2">
                                <li>Hospital and physician services</li>
                                <li>Paramedical services</li>
                                <li>Emergency dental treatment</li>
                                <li>Hospital allowance</li>
                                <li>Ambulance</li>
                                <li>Emergency medical return home</li>
                                <li>Visit to bedside if travelling alone</li>
                                <li>Terrorism coverage</li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <ul class="list-checkmark text-secondary-color body-text-2">
                                <li>Return home of children in care of insured, travel companion, pet, vehicle</li>
                                <li>Return to original trip destination</li>
                                <li>Return of excess baggage</li>
                                <li>Extra meal, hotel, child care and phone call costs</li>
                                <li>Expenses related to death</li>
                                <li>Trip break without terminating coverage</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="col-md-5">
                    <img src="{{ asset('public/front/img/images/travel2.png')}}">
                </div>
        </div>
    </div>
</section>
<section class="fourth-section">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>Know what </span> you're buying</h2>
        </div>
        <div class="benifitrow row">
            <div class="col-md-6">
                <img src="{{ asset('public/front/img/images/travel3.png')}}">
            </div>
            <div class="col-md-6">
                <p>Carefully research your needs. Verify the terms, conditions, limitations, exclusions and requirements of your insurance policy before you leave Canada. When assessing a travel health insurance plan, you should ask a lot of questions.</p>
                <ul class="list-checkmark text-secondary-color">
                    <li>Is there a deductible, and how much is it? Plans with 100% coverage are more zexpensive but may save money in the long run.</li>
                    <li>Does the plan offer continuous coverage for the length of your stay outside Canada and after your return?</li>
                    <li>Does the plan exclude or greatly limit coverage for certain regions or countries you may visit?</li>
                    <li>Does it offer coverage that is renewable from abroad and for the maximum period of stay</li>
                    <li>Does the company have an in-house, worldwide, 24-hour/7-day emergency</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .covid{
        background-image: url('{{ asset('public/front/img/images/visa-background.png')}}');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }
</style>
<div class="covid p-4">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center text-white">COVID-19 and travel insurance</h2>
            </div>
            <div class="col-md-6">
                <p class="text-white">If you have to travel outside Canada during the COVID-19 pandemic, check with your travel insurance provider (whether you have a group, an individual or a credit-card type of insurance) to make sure you're covered for:</p>
                <p class="text-white">COVID-19-related medical expenses<br>other non-COVID-19 emergency-related expenses</p>
            </div>
        </div>
    </div>
</div>
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
                      <i class="fa fa-plus"></i> What is travel insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                   <div class="card-body">
                      Travel insurance offers protection against unexpected events that can happen before or during traveling. Traveling insurance will cover both minor and major accidents. Generally, basic insurance plans cover emergency medical costs, whereas, an all-inclusive policy normally covers flight delays, trip cancellation, baggage lost, and more. Keep in mind that most of the companies will not cover the risks listed on the Government of Canada’s travel advisory site.      
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq2">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-plus"></i> Why do I need Travel Insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                   <div class="card-body">
                      There are several important reasons to buy travel insurance. Your Canadian health insurance plan and provincial health plan will not cover your medical bills outside Canada. A comprehensive travel insurance policy will provide safety against travel-related tragedies and unforeseen medical costs.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq3">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>  What risks are covered in travel insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                   <div class="card-body">
                      Usually, travelers are encouraged to get travel insurance to cover themselves from the following risks:
                      <ul class="list">
                         <li>Sickness, accidental injury or death of you, your family member or traveling partner</li>
                         <li>Cancellation, interruption or delay in the trip because of bad weather</li>
                         <li>Stolen, delayed or lost luggage</li>
                         <li>Strikes or unpredicted events that can cause complete termination of travel activities.</li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq4">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> Am I still covered, If I have a chronic illness.?
                      </button>
                   </h5>
                </div>
                <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                   <div class="card-body">
                      It all depends on the seriousness and stability of your illness. Some illnesses are covered easily, while others need 3-6 months stability period.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq5">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> What is trip cancellation (Trip Protection)?
                      </button>
                   </h5>
                </div>
                <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                   <div class="card-body">
                      Tip cancellation or tip protection is a benefit that provides reimbursement for travel expenses if your trip is canceled before departure and because of a covered risk.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq6">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> CanWhat is the difference between one Trip vs. Multiple Trips insurance plan?
                      </button>
                   </h5>
                </div>
                <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                   <div class="card-body">
                      One trip insurance plan is designed and offered to tourists who are preparing and planning to go on a trip and need an insurance policy that will cover cancellation and medical expenses for that particular trip only.
                      <br>
                      Multi-trip insurance plans are available for travel enthusiasts who go on frequent journeys and need a policy that will cover their insurance claims for as many trips as they wish within a specific period.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq7">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> How do I make a claim?
                      </button>
                   </h5>
                </div>
                <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                   <div class="card-body">
                      Depending on the covered risk, you need to complete the relevant claim form and send us with necessary supporting documents. Call us at +1-855-500-8999, we will send you relevant information and supporting documents to make a claim.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq8">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> What Can I extend my coverage if I’m already traveling?
                      </button>
                   </h5>
                </div>
                <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                      If you are traveling, you can extend your coverage before its termination date. Call us at +1-855-500-8999, our representative will assist you in extending your coverage.
                   </div>
                </div>
             </div>
          </div>
        </div>
    </div>
</section>



@endsection