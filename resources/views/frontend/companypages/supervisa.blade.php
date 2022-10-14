@extends('frontend.layouts.main')
@section('tittle')
<title>Super Visa Insurance</title>
@endsection

@section('content')
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
    /*background: #fff;*/
}
.health-inssurance-hero-banner {
    background-color: #262566;
}
</style>
	<div class="health-inssurance-hero-banners super-hero">          
    <div class="container-homepage">
        <div class="row mb-3">
            <div class="col-md-6 hero-texts">
                <div class="herrotext super-hero-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span class="text-white">Super Visa </span> Insurance</h2>
                    <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</span></h5>
                    <div class="btns d-flex">
                        <div class="details">
                            <a href="" class=" btn-lg"><i class="fa fa-search mr-3"></i>Have any Question?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hero-images">
                <div class="hero-image super-images" style=" background-image: url('{{ asset('public/front/img/images/visa1.gif')}}');
                    background-position: 50% 70%;
                    background-size: 100%;
                    background-repeat: no-repeat;">
<!--                     <img src="assets/img/images/visa1.gif"> -->
                </div>
            </div>
            </div>
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
    </div>
</div>
<section class="ptb-100 first-section-of-page">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6 image-center">
                <div class="student-medical-image">
                    <img src="{{ asset('public/front/img/supervisa/visa3.gif')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="travel-medical-heading">
                    <h2><span>Why consider  </span>super visa insurance?</h2>
                </div>
                <div class="travel-medical-paragraph">
                    <p>Super Visa enables the parents and grandparents of Canadian citizens and permanent residents to visit their family in Canada for up to 5 years. Super Visa program came into effect on December 1, 2011. Super Visa Insurance is one of the best insurance program that designed to cover healthcare expenses of treating medical emergencies including a sudden sickness or an accidental injury for non-Canadian residents visiting their family in Canada.</p>
                    <p>In order to receive a super visa and take advantage of this incredibly flexible method for bringing parents and grandparents into the country, a person must first qualify for super visa insurance within Canada. Super visa applicants need to submit proof of this insurance and that they have purchased this medical insurance before they can qualify for the visa.</p>
                    <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demo" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> Why Choosing us</a></h5>
                    <div id="demo" class="collapse">
                        <p>
                            We are reputed experience insurance provider, we provide flexible and affordable Travel Insurance Plan from multiple insurance companies like Manulife Insurance, GMS, Ingle Asurance, Destination Travel, Travelshield Insurance, Travelance Insurance, TUGO, 21st Century, we provide services in Kitchener, Waterloo, Cambridge, Guelph, Stratford ,Hamilton, Branford, Woodstock, London, Milton, Mississauga, Brampton, Toronto. Super Visa Insurance : Super Visa is a new option for parents and grandparents of Canadian citizens and permanent residents to visit their family in Canada. These individuals may be eligible to apply for the Parent and Grandparent Super Visa to visit their family in Canada for up to 2 years without the need to renew their status. Super Visa Insurance provides coverage for emergency medical and hospital care in Canada. This insurance is valid for 365 days
                        </p>
                  </div>
                  <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demotwo" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> Super Visa Health Insurance requirements</a></h5>
                    <div id="demotwo" class="collapse">
                    <p>
                        To be eligible for a super visa, you must be the parent or grandparent of a Canadian citizen or a permanent resident of Canada have a signed letter from your child or grandchild who invites you to Canada that includes:
                        <ul style="margin-left: 18px;list-style: circle;">
                            <li><p>Be the parent or grandparent of a Canadian citizen or a permanent resident of Canada have a signed letter from your child or grandchild who invites you to Canada that includes</p></li>
                            <li><p>A promise of financial support for the length of your visit</p></li>
                            <li><p>The list and number of people in the household of this person</p></li>
                            <li><p>A copy of this person’s Canadian citizenship or permanent resident document</p></li>
                            <li><p>Have medical insurance from a Canadian insurance company that is valid for at least 1 year from the date of entry at least $100,000 emergency coverage</p></li>
                            <li><p>Have proof that the medical insurance has been paid in full (quotes aren’t accepted)</p></li>
                        </ul>
                    </p>
                    
                  </div>

                  <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demothree" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> Financial support (proof of funds) and Minimum Income requirement</a></h5>  
                  <div id="demothree" class="collapse">
                    <p>
                        <ul style="margin-left: 18px;list-style: circle;">
                            <li><p>The child or grandchild who invites you must prove that their household meets the minimum necessary income. The following documents are examples of what can be used as proof of funds:</p></li>
                            <li><p>Notice of Assessment (NOA) or T4/T1 for the most recent tax year</p></li>
                            <li><p>Employment Insurance Benefit statements</p></li>
                            <li><p>Employment letter including salary, job title, job description, and date of hiring ,pay stubs, bank statements</p></li>
                            <li><p>Once you’ve added together the above to get the family size, use the table below to find the Super Visa income requirements for 2022. The table is as of August 2022. You can check the most recent version here</p></li>
                        </ul>
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Size of Family Unit</th>
                                    <th>Minimum necessary gross income (CAD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 person (your child or grandchild)</td>
                                    <td>$26,620</td>
                                </tr>
                                <tr>
                                    <td>2 people</td>
                                    <td>$33,140</td>
                                </tr>
                                <tr>
                                    <td>3 people</td>
                                    <td>$40,742</td>
                                </tr>
                                <tr>
                                    <td>4 people</td>
                                    <td>$49,466</td>
                                </tr>
                                <tr>
                                    <td>5 people</td>
                                    <td>$56,104</td>
                                </tr>
                                <tr>
                                    <td>6 people</td>
                                    <td>$63,276</td>
                                </tr>
                                <tr>
                                    <td>7 people</td>
                                    <td>$70,448</td>
                                </tr>
                                <tr>
                                    <td>More than 7 people, for each additional person, add</td>
                                    <td>$7,172</td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                    
                  </div>
                  <h5 style="margin-top:20px;" class="text-dark"><a data-toggle="collapse" data-target="#demofour" style="color: #262566;"  href="#javascript::void(0)"><i class="fa fa-sign-in" style="color: #262566;"></i> Processing Times</a></h5>  
                  <div id="demofour" class="collapse">
                   <p> To check processing time please follow link here </p> <a target="_blank" href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/check-processing-times.html">Click Here</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="benefits ptb-100">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>How to Choose an  </span>Insurance Policy for Super Visa?</h2>
            <div class="container">
                <p>The easiest way to compare Super Visa travel insurance policies life advice Insurance let you compare quotes for travel insurance from several different companies at once. You type in a few details about your trip, and compare policy coverage and prices to help narrow down your choice.</p>
            </div>
            
        </div>
        <div class="width_website center_div position_relative">
   <div class="partner_block">
      <div class="ta_center">
         <div class="how_to_buy_steps">
            <div class="how_to_buy_steps_connection"></div>
            <div class="step step_1">
               <div class="step_name"><span>Who needs</span> Super Visa Health Insurance?</div>
               <div class="step_text">
                    <p class="description">
                    Anyone applying for the Canadian Super Visa must show they've purchased private medical insurance that meets the Super Visa requirements. The Super Visa Health Insurance policy.
                    <br>Take  the  time  to  read  your policy  and know  what  your  are  covered  for.  Pay  special  attention  to  bold  words.    They  have  a  specific  meaning  which  is  explained in the Definitions section of this policy
                    </p>
               </div>
            </div>
            <div class="step step_2">
               <div class="step_name"><span>Super Visa Insurance</span>  Requirements:</div>
               <div class="step_text">
                    <p> <span>- Be valid for at least 1 year when you send the application to IRCC</span><br>
                    <span>- Cover emergency healthcare, hospitalization and repatriation</span><br>
                    <span>- Provide a minimum coverage of $100,000 CAD per person</span><br>
                    <span>- Be valid for each entry to Canada and available for review</span><br>
                    <span>- Be issued by a private Canadian insurance company</span><br>
                    <span>- $0 deductible standard but can increase deductible for up to 45% discounts</span><br>The applicant(s) is over the age of 14 days old and has not reached the age of 90 years at the time of application
                    </p>
               </div>
            </div>
            <div class="step step_4">
               <div class="step_name"><span>For Pre-medical </span>Condition Coverage</div>
               <div class="step_text">
                  <p> For the purposes of buying travel insurance, a pre-existing condition is defined as any illness, disease, injury or other condition that happens prior to a plan’s effective date and for which you experienced symptoms or sought treatment. Insurance providers check to see if you were medically stable during the “look-back period,” which is typically a period of 60 to 180 days prior to a plan’s effective date. If it is determined that you were not medically stable during that time, you are considered to have a pre-existing condition. Any fallout due to that condition won’t be covered by a standard travel insurance policy..</p>
               </div>
            </div>
            <div class="step step_3">
               <div class="step_name"><span>Quote </span>& Apply</div>
               <div class="step_text">
                  <p>To see options avable please fill our online Quote Calculator above. Review available products to purchase or speak with our financial advisors if you have questions and once you’ve selected a coverage and plan you can begin the application process.<br>You will need enter basic personal information for each applicant before proceeding to payment. Once the payment is processed, your policy will be sent by email shortly<br></p>
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