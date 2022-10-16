@extends('frontend.layouts.main')
@section('tittle')
<title>Travel Insurance</title>
@endsection

@section('content')
@include('frontend.companypages.includes.main')
<section class="ptb-100 first-section-of-page">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6 image-center">
                <div class="student-medical-image">
                    <img src="{{ asset('public/front/img/images/travel1.png')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="travel-medical-heading">
                    <h2>Who Needs Travel Insurance?</h2>
                </div>
                <div class="travel-medical-paragraph">
                    <p>If you're going overseas, travel insurance is as important as a passport. Without it, you or your family could suffer financially if things go wrong. travel insurance should be going with you. Even if you're travelling out of province but within Canada it's worth it because your provincial health insurance plan coverage may be limited. Things like ambulance services and prescription drugs may not be covered and you could end up paying out of pocket for some of the services you need.</p>
                </div>
                <div class="travel-medical-heading2">
                    <h2>Why you should buy travel health insurance</h2>
                </div>
                <div class="travel-medical-paragraph">
                      <ul style="margin-left: 18px;list-style: circle;">
                      <li>The Government of Canada will not pay your medical bills</li>
                      <li>Foreign hospitals can be very expensive and may require immediate cash payment</li>
                      <li>Your Canadian health insurance may not pay your medical bills while you're outside Canada</li>
                      <li>In some countries hospitals and clinics will not treat you if you do not have enough insurance or money to pay your bills</li>
                      <li>Your provincial or territorial health plan may cover none, or only a small part, of the costs of your medical care abroad. It will never pay your bills up front</li>
                    </ul>
                      <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demo" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> What are Travel Insurance Requirements?</a></h5>
                        <div id="demo" class="collapse">
                            <p>
                               As you already know, Canadian Residents are insured under their Provincial Healthcare Plans. However, it only covers a small portion of medical expenses incurred outside Canada.
                            </p>
                            <p>Your government insurance coverage will also be severely limited while travelling to another province or territory within Canada, and even the slightest injury or illness can deal a significant blow to your budget.</p>
                            <p>If you are planning on going out of your province or abroad, travel health insurance for Canadians will provide you with a simple and affordable way to protect yourself from the costs of medical emergencies that may happen during the trip.</p>
                      </div>

                      <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demotwo" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> Type of Travel Insurance policy </a></h5>
                        <div id="demotwo" class="collapse">
                        <p>Travel insurance covers a number of travel-related risks, from flight cancellations to lost bags to medical emergencies. The dollar amount of your coverage depends on the policy you bought and where and when you bought it. Most travel insurance providers offer several different policies to choose from, with higher or lower levels of coverage.
                            <ul style="margin-left: 18px;list-style: circle;">
                                <li><p>Single Trip medical Insurance</p></li>
                                <li><p>Multi Trip Insurance</p></li>
                                <li><p>Trip interruption Insurance</p></li>
                                <li><p>Trip cancellation Insurance</p></li>
                                <li><p>All Inclusive Insurance </p></li>
                            </ul>
                        </p>
                        <p>In order to be eligible for Travel Insurance, you MUST: 
                            <ul style="margin-left: 18px;list-style: circle;">
                                <li><p>Be a Canadian Resident</p></li>
                                <li><p>Be currently enrolled in a provincial health insurance plan</p></li>
                                <li><p>Meet other specific conditions set by a particular Canadian Insurance company</p></li>
                            </ul>
                        </p>
                      </div>
                      <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demofour" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> Know what you're buying </a></h5>  
                      <div id="demofour" class="collapse">
                       <p> Carefully research your needs. Verify the terms, conditions, limitations, exclusions and requirements of your insurance policy before you leave Canada. When assessing a travel health insurance plan, you should ask a lot of questions.

                        <ul style="margin-left: 18px;list-style: circle;">
                            <li><p>Is there a deductible, and how much is it? Plans with 100% coverage are more expensive but may save money in the long run.</p></li>
                            <li><p>Does the plan offer continuous coverage for the length of your stay outside Canada and after your return?</p></li>
                            <li><p>Does the plan exclude or greatly limit coverage for certain regions or countries you may visit?</p></li>
                            <li><p>Does it offer coverage that is renewable from abroad and for the maximum period of stay?</p></li>
                            <li><p>Does the company have an in-house, worldwide, 24-hour/7-day emergency contact number in English and/or translation services for health care providers in your destination country?</p></li>
                            <li><p>Does it pay for hospitalization for illness or injury and related medical costs at your destination?</p></li>
                            <li><p> Does it pay your bills or cash advances up front, so you don’t have to pay them?</p></li>
                        </ul>
                       </p>
                      </div>

                </div> 
            </div>
        </div>
    </div>
</section>

<section class="benefits ptb-100">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>How to Calculate </span>Cost and Apply?</h2>
        </div>
        <div class="width_website center_div position_relative">
   <div class="partner_block">
      <div class="ta_center">
         <div class="how_to_buy_steps">
            <div class="how_to_buy_steps_connection"></div>
            <div class="step step_1">
               <div class="step_name"><span>Get a </span>Quote</div>
               <div class="step_text">
                    <p class="description">In order to get your Canadian travel insurance coverage, all you need is to calculate your personal quote using our free online quote form , fill out a short application form and pay with a credit card.</p>
                    <p class="description">Once the payment is processed, you will receive your travel insurance by email in no time.</p>
               </div>
            </div>
            <div class="step step_2">
               <div class="step_name"><span>Select</span> a Plane</div>
               <div class="step_text">
                    <p class="description"> Choose a plan that fit your needs of coverage from the list of options provided and click on purchase  Now button  you will be re-directed to the chosen insurance company’s web-portal, you can start filling out your application form.</p>
                    <p class="importantalert">
                    Important Notice: Non-medical and all-inclusive travel insurance plans may be subject to provincial sales tax.
                    </p>
               </div>
            </div>
            <div class="step step_4">
               <div class="step_name"><span>Review</span> Your Coverage</div>
               <div class="step_text">
                    <p> It is always a great idea to review coverage details as well as policy conditions before making a purchase. The best way to know about it by read through the official Policy Wording for the insurance plan of your choice that can be found on the same page. In addition, you can always reach to our Insurance Advisors if you have any questions or concerns!
                    </p>
               </div>
            </div>
            <div class="step step_3">
               <div class="step_name"><span>Purchase </span>Policy</div>
               <div class="step_text">
                    <p>The final step is to fill out an application form and make the payment using a credit card. In order to proceed with purchasing your Visitors insurance, just click on “Buy now” or “purchase Online” button. If you wish to purchase your coverage online, in case you’d like our Insurance Advisors to assist you to complete the application and issue the policy don’t hesitate to contact us! Once your payment is processed by the insurance provider, your policy confirmation will be sent by email right away!
                    </p>
               </div>
            </div>
         </div>
      </div>
      <div class="clear"></div>
   </div>
</div>
        </div>
</section>
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