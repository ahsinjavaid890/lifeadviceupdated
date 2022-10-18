@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')

@section('content')
@include('frontend.companypages.includes.main')
@include('frontend.companypages.includes.sectiontwo')

<section class="third-section">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>What Does </span>Super Visa Insurance Cover?</h2>
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align: left;">
                        <p>Please note that Super Visa medical Insurance This policy covers only the specific situations, events and losses mentioned in this document and only under the conditions describe. Make sure you check your policy confirmation to confirm your benefits, coverage and limit </p>
                        <p>We have created a comprehensive summary of health benefits that are provided by the Super Visa medical emergency insurance Canada.</p>
                        <p class="importantalert">IMPORTANT NOTICE• Super Visa Insurance policy is designed to cover losses arising from sudden and unforeseeable circumstances.  It is important that you read and understand your policy upon receipt as your coverage is subject to certain limitations, conditions or exclusions</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row benifitrow" style="padding-top:20px;">
            <div class="col-md-6">
                <div class="card transparent-card" style=" padding: 30px; ">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-checkmark text-secondary-color body-text-2">
                                <li>Emergency Medical Expenses </li>
                                <li>Emergency Return Home</li>
                                <li>Emergency Dental</li>
                                <li>Prescription Medication</li>
                                <li>Follow Up Visits</li>
                                <li>Repatriation of Remains</li>
                                <li>Cremation/Burial at Destination</li>
                                <li>Travel Assistance</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-checkmark text-secondary-color body-text-2">
                                <li>Emergency Paramedical </li>
                                <li>Accommodation & Meals</li>
                                <li>Visit to Bedside</li>
                                <li>Return/Escort of Dependents</li>
                                <li>Incidental Expenses</li>
                                <li>Return of Baggage & Personal Effects</li>
                                <li>Accidental Death & Dismemberment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Note: For a detailed coverage and description please read the Policy Wording of the plan you selected</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('public/front/img/supervisa/visa2.png')}}">
            </div>
        </div>
    </div>
</section>
<section class="fourth-section">
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
                      <i class="fa fa-plus"></i> What is Super Visa Emergency Medical Travel Insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                   <div class="card-body">
                     Super visa Emergency medical travel insurance provides coverage for medical emergencies only it does not cover routine visits to a family doctor, annual check-ups and prescription drugs. The current super visa requirement is $100,000 of coverage for a period of one year from a Canadian insurance company with a repatriation.   
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq2">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-plus"></i>What are the minimum requirements for private Canadian health insurance to qualify for a parent and grandparent super visa?
                      </button>
                   </h5>
                </div>
                <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                   <div class="card-body">
                      Applicants must provide proof that they have purchased Canadian health insurance for a minimum of $100,000 in coverage and that it is valid for 1 year. In addition the coverage must be continuous and allowing the applicant to return to their home country as many times as needed within the year
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq3">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> Why has the government made it compulsory of purchasing visitor’s insurance from a Canadian travel insurance company and not from other insurance companies from their home country?
                      </button>
                   </h5>
                </div>
                <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                   <div class="card-body">
                     The Canadian insurance companies are governed by the regulations in Canada, and the government perhaps feels safer that any claims will be paid for by a company they can regulate. The government doesn’t want to be the one to have to pay any claims, or sue a company that doesn’t pay out a claim.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq4">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> Is there any kind of compulsion to get Insurance through CIA (i.e. Canadian Insurance Company)?
                      </button>
                   </h5>
                </div>
                <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                   <div class="card-body">
                      Yes, this is true that you need to get the insurance from the CIA only as they are the ones who are going to cover all the aspects and supply you entire services relating to all medical facilities. It is also important as the process of claim as they can verify Canadian medical expenses faster.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq5">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>If my parents do not want to stay in Canada for a full year then will I receive a partial premium fund?
                      </button>
                   </h5>
                </div>
                <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                   <div class="card-body">
                      Yes, you will get the remaining amount of fund back, but partial fund will not be provided if a claim has been submitted or is pending.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq6">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Do I get a premium refund if super visa application is declined or withdrawn?
                      </button>
                   </h5>
                </div>
                <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                   <div class="card-body">
                      Yes You will get the full premium refund from insurance company.All You have to provide proof of the rejection of your super visa application in order to process the cancellation request.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq7">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What Dose Deductible Mean?
                      </button>
                   </h5>
                </div>
                <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                   <div class="card-body">
                      Deductible is the amount of money that must be paid out of pocket before an insurer will pay any expenses. Deductible amount also affects the actual price of the insurance policy. The higher deductible you choose, the lower the actual price of the policy will be. However, it is not recommended to go over a $1,000 deductible since you may end up paying most of your medical
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq8">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Should i buy-deductible or no deductible?
                      </button>
                   </h5>
                </div>
                <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                      This all depends on the amount of risk you can take for example if you buy $1000 deductible it means you will pay first 1000 each time during claim, over and above policy will pay where as if you pick zero deductible the covered condition all amount will be covered by insurance policy.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq9">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content9" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Can I make the payment every month for the super visa coverage?
                      </button>
                   </h5>
                </div>
                <div id="faq_content9" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                   Yes, the monthly payment plan option is also now available.              
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq10">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content10" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What Pre-existing conditions means? My parents have pre-existing condition will super visa insurance cover that, conditions are stable?
                      </button>
                   </h5>
                </div>
                <div id="faq_content10" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                     Pre-existing are the medical condition which can be illness, sickness, injury whether diagnosed or not by doctor. Pre-existing is the health condition which existed before buying the super visa insurance. Condition may have received consultation or not it does not matter. Yes you can buy the super visa insurance which will cover the pre-existing conditions as long as they are stable with the definition of insurance companies, Stable means no change in symptoms, dosage, treatment, medical test recommended not completed again term of condition need to be read as it varies from insurance company to company. Stable period can be 90 days to one year.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq11">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content11" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>If my parents do not want to stay in Canada for a full year then will I receive a partial premium fund?
                      </button>
                   </h5>
                </div>
                <div id="faq_content11" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    Yes, you will get the remaining amount of fund back minus the administration fee that can vary from company to company, if you have not submit ant claim on that policy.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq12">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content12" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>How do I make a claim?
                      </button>
                   </h5>
                </div>
                <div id="faq_content12" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                      To apply for benefits under this policy, you will need to send a completed claim form (with all original bills attached) to the insurer. Please take care in filling out the form, as any missing information may cause delay.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq13">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content13" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What Should I Do in Case Of Emergency?
                      </button>
                   </h5>
                </div>
                <div id="faq_content13" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    In case of Emergency you have to notify your insurance company as soon as possible of any emergency medical treatment or hospitalization. Your insurer will provide you with assistance, suggest the best options on where to get help, as well as arrange direct billing where possible. Failure to do so could result in decreasing your insurance benefit. Every insurance company has a toll free emergency phone number to call from Canada and collect call numbers to call from anywhere else. The phone numbers are always included in the policy.
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
                   <img src="{{ asset('public/front/img/images/family.png')}}">
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
                   <img src="{{ asset('public/front/img/images/bed.png')}}">
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
                   <img src="{{ asset('public/front/img/images/bed.png')}}">
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