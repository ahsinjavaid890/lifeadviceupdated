@extends('frontend.layouts.main')
@section('tittle')
<title>FAQ's</title>
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/faq.css')}}">
@endsection
@section('content')
<div class="health-inssurance-hero-banner pt-5" style="background-color: #262566;">          
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <div class="herrotext">
                  <h2 style="font-size: 3rem;" class="wow fadeInUp text-white" data-wow-delay=".4s">Frequently Asked Questions </h2>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="hero-image">
                       <img src="{{ asset('public/front/img/images/travel2.png') }}">
                   </div>
               </div>
           </div>
       </div>
   </div>
               <section class="first-section-of-page">
      <div id="faq" class="container py-5">
         <h2 class="text-center mt-5 faq-heading">
            Frequently Asked Questions 
            FAQ about Disability Insucance
         </h2>
            <style type="text/css">
               .faqlinks li:after{
                  content: none;
               }

               ul.tabs li.current {
                  background: #3D4B5D;
               }
               .faqlinks li.active {
                  background: #3D4B5D;
                  color: #3D4B5D !important;
               }
               .faqlinks li.current{
                  color: #3D4B5D;
               }
               .tab-content{
                  display: none;
                  background: white;
               }
               .tab-content.current{
                  display: inherit;
               }
            </style>
         <div class="row faq">
            <div class="col-md-12 pb-4 mb-4 faqlinks">
               <div class="row">
                  <ul class="tabs">
                     <li class="tab-link current" data-tab="tab-1">
                        <img src="{{ asset('public/front/img/images/disability.png') }}" alt="Life-insurance-icon-disability">
                        <h3>Disability Insurance</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-2">
                        <img src="{{ asset('public/front/img/images/family.png') }}" alt="Life-insurance-icon-life">
                        <h3>Health Insurance</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-3">
                        <img src="{{ asset('public/front/img/images/bed.png')}}" alt="Life-insurance-icon-illness">
                        <h3>Life Insurance</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-4">
                        <img src="{{ asset('public/front/img/images/tree.png')}}" alt="Life-insurance-icon-rrsp">
                        <h3>Critical Illness</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-5">
                        <img src="{{ asset('public/front/img/images/rrsp-icon.png')}}" alt="Life-insurance-icon-resp">
                        <h3>RRSP</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-6">
                        <img src="{{ asset('public/front/img/images/resp-icon.png')}}" alt="Life-insurance-icon-travel">
                        <h3>RSEP</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-7">
                        <img src="{{ asset('public/front/img/images/circle-travel.png')}}" alt="Life-insurance-icon-travel">
                        <h3>Travel Insurance</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-8">
                        <img src="{{ asset('public/front/img/images/tfsa-icon.png')}}" alt="Life-insurance-icon-travel">
                        <h3>Super Visa Insurance</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-9">
                        <img src="{{ asset('public/front/img/images/fsha-icon.png')}}" alt="Life-insurance-icon-travel">
                        <h3>Visitor Insurance</h3>
                     </li>
                     <li class="tab-link" data-tab="tab-10">
                        <img src="{{ asset('public/front/img/images/circle-travel.png')}}" alt="Life-insurance-icon-travel">
                        <h3>Student Insurance</h3>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-1" class="tab-content current">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header" id="faq1">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-plus"></i> What is disability insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                           <div class="card-body">
                              Disability insurance provides a source of income to people who are not able to work and earn because of an accident or illness. Several factors may be responsible for disability including mental health problems, fatal accidents, serious injuries or life-threatening illnesses.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq2">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fa fa-plus"></i> Why do I need disability insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                           <div class="card-body">
                              Up to 40% of Canadians face disability for 90 days or more before the age of 65. While both the Canadian pension plan and Quebec pension plan offer disability coverage but there are significant limitations. That’s where disability insurance comes in. It will help you meet your financial responsibilities during the disability period.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq3">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  I have a health insurance policy, Am I still covered for disability?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                           <div class="card-body">
                              Medical and health insurance will pay your hospital bills but will not cover income loss resulting from disability. That is where disability insurance plays a major role. It offers an income replacement so that you can pay for daily expenses including:      
                           </div>
                           <ul class="list">
                              <li>House rent</li>
                              <li>Groceries</li>
                              <li>Transportation costs</li>
                              <li>Child care expenses if you have young children</li>
                              <li>Children medical and educational expenses</li>
                              <li>Utility bills</li>
                              <li>Daily chores</li>
                           </ul>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq4">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I buy disability insurance online?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                           <div class="card-body">
                              Disability insurance is sold through a representative. They are experienced and knowledgeable to recommend the best product by analyzing your needs.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq5">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How much will it cost?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                           <div class="card-body">
                              The expenses for your disability insurance will depend upon several; different factors including:
                              <ul>
                                 <li>coverage needs</li>
                                 <li>Job nature and status</li>
                                 <li>Annual income</li>
                                 <li>Gender</li>
                                 <li>Health status</li>
                                 <li>The monthly benefit amount that you will choose</li>
                                 <li>Length of benefit</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq6">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I make changes to my disability policy if I need to?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                           <div class="card-body">
                              It is a very common practice to modify your disability policy during your life because your coverage amount is linked with your annual income and job status. However, to increase your insurance coverage you have to provide evidence of good physical and mental health.      
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq7">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How do I file a claim?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                           <div class="card-body">
                              Normally, you have to fill out a claim form and provide necessary documentation about your disability. Call us at +1-855-500-8999, we will send you the information and supporting documents to make a claim.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq8">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How much will I get if I become disabled?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                           <div class="card-body">
                              Depending on your income and nature of your job, your representative can find you solution of getting non-taxable monthly benefit of between $400 and $10,000. Besides, you can choose the range of your benefit period anywhere from few years till your retirement.      
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-2" class="tab-content">
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
                              </ul>
                           </div>
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
                              <i class="fa fa-plus"></i> CanIf I have an existing medical condition, will I get health insurance? 
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                           <div class="card-body">
                              You will be denied or offered a plan with limited health benefits in case you have existing medical conditions. Some companies require individuals to complete a medical examination. Moreover, you will also have to meet the age requirements of the insurance company to successfully purchase health insurance.      
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq7">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I add extra coverage options after buying a plan?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
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
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-3" class="tab-content">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header" id="faq1">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-plus"></i> What is life insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                           <div class="card-body">
                              Life insurance, simply put, is insurance that will pay out a death benefit (lump sum of money) to a beneficiary (person you name who you want the money to go to) upon the death of the life insured. The cost of life insurance varies based on a number of factors, such as, the age of the insured, smoking status, current health, and expected life expectancy. In exchange of premiums paid (monthly or annual payment made to insurance company), the insurer guarantees to pay a set amount of money to your beneficiary if you pass away during the life of the policy.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq2">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fa fa-plus"></i>  What does life insurance cover?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                           <div class="card-body">
                              Life insurance is a cash payment that can be used to cover any expenses that you leave your family behind with.
                              <ul class="list">
                                 <li>Mortgages</li>
                                 <li>Future education expenses for your kids</li>
                                 <li>Living expenses for your family to maintain current lifestyle</li>
                                 <li>Child care expenses if you have young children</li>
                                 <li>Final expenses (burial, estate taxes, etc)</li>
                              </ul>
                              In short, life insurance covers off so many things, many people have different level of coverage they will need during different periods of time, some with an expiry date and some that are permanent needs.  This is why you should discuss with your advisor the different life events that will bring on different needs and what applies to you.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq3">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  What type of policy should I buy?  Term or permanent?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                           <div class="card-body">
                              It's impossible to say, because the kind of coverage that’s right for you depends on your circumstances and financial goals. But, as stated it is highly recommended that you look at creating a plan that utilizes a combination of both. Term offers the greatest coverage (death benefit) for the lowest initial premium and is a great solution for people with temporary needs or a limited budget. Permanent insurance on the other hand, may make more sense if you anticipate a need for lifelong protection, or if the option of accumulating tax-deferred cash values is attractive to you.  Often, a combination of term and permanent insurance is the right answer.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq4">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I Refund Once I purchase this travel insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                           <div class="card-body">
                              <h4>10 Day Right To Examine</h4>
                              Please take the time to read your policy and completed medical questionnaire (if applicable) prior to your departure date. If you have any questions or you are unsure about your coverage, you must contact us at +1-519-404-5041  prior to your departure date.
                              <br>
                              <br>
                              You have the right to cancel this policy within 10 days from the date you purchased your insurance. For refunds after 10 days, please refer to the Can My Premium Be Refunded? section at the beginning of this document.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq5">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What is Annual Plan?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                           <div class="card-body">
                              An annual plan allows you to take any number of trips outside your Canadian home province or territory of residence that do not exceed your selected trip duration. Benefit limits are per insured per each trip, unless otherwise indicated. If your trip outside Canada is longer than your selected trip duration then you must top-up your coverage with us. If you do not top-up then you will not have coverage for any claim during your trip regardless of when the cause for claim arises.  You have the option to have the policy start date be the date of purchase or any date into the future up to a maximum of 120 days.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq6">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I top-up my annual plan with another company? 
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                           <div class="card-body">
                              No. You must top-up your annual plan with us.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq7">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How much life insurance do I need?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                           <div class="card-body">
                              Determining how much life insurance you need requires an examination of your current and future financial obligations, along with the resources your family could tap.<br>
                              <br>
                              Your future obligations are a combination of what it would cost to help your surviving family members meet immediate and ongoing needs like funeral costs, taxes, food, clothing, utilities, mortgage payments, and your future obligations like college and retirement funding.<br>
                              <br>
                              The resources that your surviving family members could draw on to meet those obligations include your spouse’s or partner’s income, savings and investments, other income producing assets, and any life insurance you might already own.<br>
                              <br>
                              The difference between the two—your financial obligations minus the resources your family has to meet those obligations—is the approximate amount of additional life insurance you need. If this sounds confusing, you’re not alone. That’s why most people turn to a qualified insurance professional when they want to figure out how much insurance they need.<br>
                              <br>
                              But if you don’t feel you’re ready to speak with an agent or want a preliminary sense of your needs before meeting with an agent, visit our Life Insurance Needs Calculator. It will walk you through the various questions you need to ask yourself and provide you with a rough estimate of how much life insurance you need to protect your family.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq8">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What are accelerated death benefits and how do they work?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                           <div class="card-body">
                              Many policies contain a provision that allows a terminally ill person to collect a significant portion of his or her policy’s death benefit while still alive. The money can be used to get family finances in order, pay for uncovered medical expenses, or simply do certain things for your family or friends while you still can. It’s important to note that the amount taken out while still living is subtracted from the death benefit payments your beneficiaries receive, along with an interest charge for early payment of benefits.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq9">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content9" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Does it make sense to replace a policy?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content9" class="collapse" aria-labelledby="faq9" data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Think twice before you do, because in many situations it may not be   to your advantage. Before dropping any in-force policy, consider:</p>
                              <ul>
                                 <li>If your health status has changed over the years, you may no longer be insurable at standard rates.</li>
                                 <li>Your present policy may have a lower premium rate than is required   on a new policy of the same type, if only because you’re older.</li>
                                 <li>If you replace one cash-value policy with another, the cash value of   the new policy may be relatively small for several years and may never   be as large as that of the original one.</li>
                              </ul>
                              <ul>
                                 <li>You will be subject to a new contestability period.</li>
                              </ul>
                              <p>You should ask insurance agents for a detailed listing of cost   breakdowns of both policies, including premiums, cash-surrender value,   and death benefits. Compare these along with the features offered by   both policies. If you decide to surrender or reduce the value of the   policy you now own and replace it with other insurance, be sure that:</p>
                              <ul>
                                 <li>The agent making the proposal puts it in writing.</li>
                                 <li>You pass any required medical examination.</li>
                                 <li>Your new policy is in force before you cancel the old one.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq10">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content10" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  Can my premium be refunded?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content10" class="collapse" aria-labelledby="faq10" data-parent="#accordionExample">
                           <div class="card-body">
                              <p><strong>If my policy provides comprehensive coverage what is the refund process?</strong><br>
                                 Refunds are available up to your departure date as long as there is   no risk to the policy. Refunds will also be issued if a supplier cancels   or alters service and all of your non-refundable prepaid travel   arrangements insured by us are refunded without penalty.
                              </p>
                              <p><strong>If my policy provides coverage only for emergency medical benefits what is the refund process?</strong><br>
                                 If outside above guidelines, a partial refund of premium is available if you have a minimum of four (4) unused days of coverage.
                              </p>
                              <p><strong>If there is a claim on my policy what is the refund process?</strong><br>
                                 No refund of premium will be made in the event that a claim has been paid, incurred or reported under this policy.
                              </p>
                              <p><strong>How do I request a refund?</strong><br>
                              </p>
                              <ol>
                                 <li>&nbsp;If your insurance was purchased through an agency or broker, your refund must be requested through your issuing agent.</li>
                                 <li>&nbsp;If your insurance was purchased directly through Travel Guard Canada, you must request your refund in writing.</li>
                                 <li>We cannot accept refund requests over the phone.</li>
                              </ol>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq11">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content11" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  How do I go about finding a good insurance agent?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content11" class="collapse" aria-labelledby="faq11" data-parent="#accordionExample">
                           <div class="card-body">
                              To locate a qualified insurance agent or other financial professional, seek recommendations from friends, or professionals like your lawyer or accountant.<br>
                              <br>
                              Ask about the person’s experience and background and make sure he or she specializes in the service and products you need. You also may want to ask the person if he or she has received any special certifications such as Chartered Life Underwriter (CLU) or Chartered Financial Consultant (ChFC). These designations mean the person has taken advanced courses and may have specialized training and knowledge from which you could benefit.<br>
                              <br>
                              Above all, you want to select an agent or advisor who listens well and will take the time to understand your unique goals and desires. You can also use our Agent Locator to get started.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-4" class="tab-content">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header" id="faq1">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-plus"></i> What is Critical Illness Insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                           <div class="card-body">
                              Critical illness insurance, also known as dread disease policy or critical illness cover is an insurance service in which insurance policyholder is provided with complete fix payment in case, he/she is diagnosed with one of the particular diseases listed within the insurance policy.      
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq2">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fa fa-plus"></i>Why do I need Critical Illness insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                           <div class="card-body">
                              Critical illness assurance will play a significant role in shielding and maintaining your financial and physical health. It will lessen the financial strain of paying for the costly medical treatment of the illness. Moreover, it will make sure that your family can maintain good life quality during your critical illness period.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq3">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  What does a Critical Illness insurance plan cover?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                           <div class="card-body">
                              Commonly a critical illness insurance plan pays for the following medical conditions:
                              <ul class="list">
                                 <li>Cancer</li>
                                 <li>Heart attack</li>
                                 <li>Stroke</li>
                                 <li>Kidney failure</li>
                                 <li>Coma</li>
                                 <li>Blindness</li>
                                 <li>Deafness</li>
                                 <li>Paralysis</li>
                                 <li>Severe burns</li>
                                 <li>Alzheimer's disease</li>
                                 <li>Parkinson’s disease</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq4">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> I have life insurance plan, do I still need Critical Illness insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                           <div class="card-body">
                              There is a huge difference between life insurance and critical illness insurance. Term or permanent life insurance is a benefit that will be paid to your family and beneficiaries after your death. On the other hand, in critical illness insurance, you will be the one to receive reimbursements for critical illness, not your family or beneficiaries. Furthermore, illness does not need to be terminal to collect benefits.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq5">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> I have health insurance plan, Am I still covered?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                           <div class="card-body">
                              Your public health insurance policy only covers the basic and specific medical expenses. Conversely, critical illness insurance will help you pay for extraordinary and costly medical expenditures. Moreover, critical illness insurance provides you the independence of using the money for both medical and non-medical objectives.      
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq6">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Will critical illness insurance benefits affect my disability benefit amount?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                           <div class="card-body">
                              Disability and Critical illness insurances are two entirely different insurance plans having different prerequisites and benefits. They are not related to each other. Therefore, critical illness insurance benefits will not affect disability insurance reimbursements.
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
                              Call us at +1-855-500-8999, we will send you the information and supporting documents to make a claim. Keep in mind that claims must be submitted within 60 days of an illness diagnosis.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq8">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Who can submit a claim?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                           <div class="card-body">
                              Claims can be submitted by:
                              <ul class="list">
                                 <li>Policyholder</li>
                                 <li>Designated beneficiary (if policyholder has died)</li>
                                 <li>Legal heirs of policyholder (when there is no surviving beneficiary)</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-5" class="tab-content">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header" id="faq1">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-plus"></i> What is life insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                           <div class="card-body">
                              Life insurance, simply put, is insurance that will pay out a death benefit (lump sum of money) to a beneficiary (person you name who you want the money to go to) upon the death of the life insured. The cost of life insurance varies based on a number of factors, such as, the age of the insured, smoking status, current health, and expected life expectancy. In exchange of premiums paid (monthly or annual payment made to insurance company), the insurer guarantees to pay a set amount of money to your beneficiary if you pass away during the life of the policy.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq2">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fa fa-plus"></i>  What does life insurance cover?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                           <div class="card-body">
                              Life insurance is a cash payment that can be used to cover any expenses that you leave your family behind with.
                              <ul class="list">
                                 <li>Mortgages</li>
                                 <li>Future education expenses for your kids</li>
                                 <li>Living expenses for your family to maintain current lifestyle</li>
                                 <li>Child care expenses if you have young children</li>
                                 <li>Final expenses (burial, estate taxes, etc)</li>
                              </ul>
                              In short, life insurance covers off so many things, many people have different level of coverage they will need during different periods of time, some with an expiry date and some that are permanent needs.  This is why you should discuss with your advisor the different life events that will bring on different needs and what applies to you.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq3">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  What type of policy should I buy?  Term or permanent?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                           <div class="card-body">
                              It's impossible to say, because the kind of coverage that’s right for you depends on your circumstances and financial goals. But, as stated it is highly recommended that you look at creating a plan that utilizes a combination of both. Term offers the greatest coverage (death benefit) for the lowest initial premium and is a great solution for people with temporary needs or a limited budget. Permanent insurance on the other hand, may make more sense if you anticipate a need for lifelong protection, or if the option of accumulating tax-deferred cash values is attractive to you.  Often, a combination of term and permanent insurance is the right answer.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq4">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I Refund Once I purchase this travel insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                           <div class="card-body">
                              <h4>10 Day Right To Examine</h4>
                              Please take the time to read your policy and completed medical questionnaire (if applicable) prior to your departure date. If you have any questions or you are unsure about your coverage, you must contact us at +1-519-404-5041  prior to your departure date.
                              <br>
                              <br>
                              You have the right to cancel this policy within 10 days from the date you purchased your insurance. For refunds after 10 days, please refer to the Can My Premium Be Refunded? section at the beginning of this document.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq5">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What is Annual Plan?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                           <div class="card-body">
                              An annual plan allows you to take any number of trips outside your Canadian home province or territory of residence that do not exceed your selected trip duration. Benefit limits are per insured per each trip, unless otherwise indicated. If your trip outside Canada is longer than your selected trip duration then you must top-up your coverage with us. If you do not top-up then you will not have coverage for any claim during your trip regardless of when the cause for claim arises.  You have the option to have the policy start date be the date of purchase or any date into the future up to a maximum of 120 days.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq6">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I top-up my annual plan with another company? 
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                           <div class="card-body">
                              No. You must top-up your annual plan with us.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq7">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How much life insurance do I need?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                           <div class="card-body">
                              Determining how much life insurance you need requires an examination of your current and future financial obligations, along with the resources your family could tap.<br>
                              <br>
                              Your future obligations are a combination of what it would cost to help your surviving family members meet immediate and ongoing needs like funeral costs, taxes, food, clothing, utilities, mortgage payments, and your future obligations like college and retirement funding.<br>
                              <br>
                              The resources that your surviving family members could draw on to meet those obligations include your spouse’s or partner’s income, savings and investments, other income producing assets, and any life insurance you might already own.<br>
                              <br>
                              The difference between the two—your financial obligations minus the resources your family has to meet those obligations—is the approximate amount of additional life insurance you need. If this sounds confusing, you’re not alone. That’s why most people turn to a qualified insurance professional when they want to figure out how much insurance they need.<br>
                              <br>
                              But if you don’t feel you’re ready to speak with an agent or want a preliminary sense of your needs before meeting with an agent, visit our Life Insurance Needs Calculator. It will walk you through the various questions you need to ask yourself and provide you with a rough estimate of how much life insurance you need to protect your family.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq8">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What are accelerated death benefits and how do they work?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                           <div class="card-body">
                              Many policies contain a provision that allows a terminally ill person to collect a significant portion of his or her policy’s death benefit while still alive. The money can be used to get family finances in order, pay for uncovered medical expenses, or simply do certain things for your family or friends while you still can. It’s important to note that the amount taken out while still living is subtracted from the death benefit payments your beneficiaries receive, along with an interest charge for early payment of benefits.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq9">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content9" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Does it make sense to replace a policy?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content9" class="collapse" aria-labelledby="faq9" data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Think twice before you do, because in many situations it may not be   to your advantage. Before dropping any in-force policy, consider:</p>
                              <ul>
                                 <li>If your health status has changed over the years, you may no longer be insurable at standard rates.</li>
                                 <li>Your present policy may have a lower premium rate than is required   on a new policy of the same type, if only because you’re older.</li>
                                 <li>If you replace one cash-value policy with another, the cash value of   the new policy may be relatively small for several years and may never   be as large as that of the original one.</li>
                              </ul>
                              <ul>
                                 <li>You will be subject to a new contestability period.</li>
                              </ul>
                              <p>You should ask insurance agents for a detailed listing of cost   breakdowns of both policies, including premiums, cash-surrender value,   and death benefits. Compare these along with the features offered by   both policies. If you decide to surrender or reduce the value of the   policy you now own and replace it with other insurance, be sure that:</p>
                              <ul>
                                 <li>The agent making the proposal puts it in writing.</li>
                                 <li>You pass any required medical examination.</li>
                                 <li>Your new policy is in force before you cancel the old one.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq10">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content10" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  Can my premium be refunded?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content10" class="collapse" aria-labelledby="faq10" data-parent="#accordionExample">
                           <div class="card-body">
                              <p><strong>If my policy provides comprehensive coverage what is the refund process?</strong><br>
                                 Refunds are available up to your departure date as long as there is   no risk to the policy. Refunds will also be issued if a supplier cancels   or alters service and all of your non-refundable prepaid travel   arrangements insured by us are refunded without penalty.
                              </p>
                              <p><strong>If my policy provides coverage only for emergency medical benefits what is the refund process?</strong><br>
                                 If outside above guidelines, a partial refund of premium is available if you have a minimum of four (4) unused days of coverage.
                              </p>
                              <p><strong>If there is a claim on my policy what is the refund process?</strong><br>
                                 No refund of premium will be made in the event that a claim has been paid, incurred or reported under this policy.
                              </p>
                              <p><strong>How do I request a refund?</strong><br>
                              </p>
                              <ol>
                                 <li>&nbsp;If your insurance was purchased through an agency or broker, your refund must be requested through your issuing agent.</li>
                                 <li>&nbsp;If your insurance was purchased directly through Travel Guard Canada, you must request your refund in writing.</li>
                                 <li>We cannot accept refund requests over the phone.</li>
                              </ol>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq11">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content11" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  How do I go about finding a good insurance agent?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content11" class="collapse" aria-labelledby="faq11" data-parent="#accordionExample">
                           <div class="card-body">
                              To locate a qualified insurance agent or other financial professional, seek recommendations from friends, or professionals like your lawyer or accountant.<br>
                              <br>
                              Ask about the person’s experience and background and make sure he or she specializes in the service and products you need. You also may want to ask the person if he or she has received any special certifications such as Chartered Life Underwriter (CLU) or Chartered Financial Consultant (ChFC). These designations mean the person has taken advanced courses and may have specialized training and knowledge from which you could benefit.<br>
                              <br>
                              Above all, you want to select an agent or advisor who listens well and will take the time to understand your unique goals and desires. You can also use our Agent Locator to get started.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-6" class="tab-content">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header" id="faq1">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                              <i class="fa fa-plus"></i> What is life insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                           <div class="card-body">
                              Life insurance, simply put, is insurance that will pay out a death benefit (lump sum of money) to a beneficiary (person you name who you want the money to go to) upon the death of the life insured. The cost of life insurance varies based on a number of factors, such as, the age of the insured, smoking status, current health, and expected life expectancy. In exchange of premiums paid (monthly or annual payment made to insurance company), the insurer guarantees to pay a set amount of money to your beneficiary if you pass away during the life of the policy.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq2">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fa fa-plus"></i>  What does life insurance cover?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                           <div class="card-body">
                              Life insurance is a cash payment that can be used to cover any expenses that you leave your family behind with.
                              <ul class="list">
                                 <li>Mortgages</li>
                                 <li>Future education expenses for your kids</li>
                                 <li>Living expenses for your family to maintain current lifestyle</li>
                                 <li>Child care expenses if you have young children</li>
                                 <li>Final expenses (burial, estate taxes, etc)</li>
                              </ul>
                              In short, life insurance covers off so many things, many people have different level of coverage they will need during different periods of time, some with an expiry date and some that are permanent needs.  This is why you should discuss with your advisor the different life events that will bring on different needs and what applies to you.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq3">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  What type of policy should I buy?  Term or permanent?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                           <div class="card-body">
                              It's impossible to say, because the kind of coverage that’s right for you depends on your circumstances and financial goals. But, as stated it is highly recommended that you look at creating a plan that utilizes a combination of both. Term offers the greatest coverage (death benefit) for the lowest initial premium and is a great solution for people with temporary needs or a limited budget. Permanent insurance on the other hand, may make more sense if you anticipate a need for lifelong protection, or if the option of accumulating tax-deferred cash values is attractive to you.  Often, a combination of term and permanent insurance is the right answer.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq4">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I Refund Once I purchase this travel insurance?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                           <div class="card-body">
                              <h4>10 Day Right To Examine</h4>
                              Please take the time to read your policy and completed medical questionnaire (if applicable) prior to your departure date. If you have any questions or you are unsure about your coverage, you must contact us at +1-519-404-5041  prior to your departure date.
                              <br>
                              <br>
                              You have the right to cancel this policy within 10 days from the date you purchased your insurance. For refunds after 10 days, please refer to the Can My Premium Be Refunded? section at the beginning of this document.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq5">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What is Annual Plan?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                           <div class="card-body">
                              An annual plan allows you to take any number of trips outside your Canadian home province or territory of residence that do not exceed your selected trip duration. Benefit limits are per insured per each trip, unless otherwise indicated. If your trip outside Canada is longer than your selected trip duration then you must top-up your coverage with us. If you do not top-up then you will not have coverage for any claim during your trip regardless of when the cause for claim arises.  You have the option to have the policy start date be the date of purchase or any date into the future up to a maximum of 120 days.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq6">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Can I top-up my annual plan with another company? 
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                           <div class="card-body">
                              No. You must top-up your annual plan with us.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq7">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> How much life insurance do I need?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                           <div class="card-body">
                              Determining how much life insurance you need requires an examination of your current and future financial obligations, along with the resources your family could tap.<br>
                              <br>
                              Your future obligations are a combination of what it would cost to help your surviving family members meet immediate and ongoing needs like funeral costs, taxes, food, clothing, utilities, mortgage payments, and your future obligations like college and retirement funding.<br>
                              <br>
                              The resources that your surviving family members could draw on to meet those obligations include your spouse’s or partner’s income, savings and investments, other income producing assets, and any life insurance you might already own.<br>
                              <br>
                              The difference between the two—your financial obligations minus the resources your family has to meet those obligations—is the approximate amount of additional life insurance you need. If this sounds confusing, you’re not alone. That’s why most people turn to a qualified insurance professional when they want to figure out how much insurance they need.<br>
                              <br>
                              But if you don’t feel you’re ready to speak with an agent or want a preliminary sense of your needs before meeting with an agent, visit our Life Insurance Needs Calculator. It will walk you through the various questions you need to ask yourself and provide you with a rough estimate of how much life insurance you need to protect your family.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq8">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> What are accelerated death benefits and how do they work?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                           <div class="card-body">
                              Many policies contain a provision that allows a terminally ill person to collect a significant portion of his or her policy’s death benefit while still alive. The money can be used to get family finances in order, pay for uncovered medical expenses, or simply do certain things for your family or friends while you still can. It’s important to note that the amount taken out while still living is subtracted from the death benefit payments your beneficiaries receive, along with an interest charge for early payment of benefits.
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq9">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content9" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i> Does it make sense to replace a policy?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content9" class="collapse" aria-labelledby="faq9" data-parent="#accordionExample">
                           <div class="card-body">
                              <p>Think twice before you do, because in many situations it may not be   to your advantage. Before dropping any in-force policy, consider:</p>
                              <ul>
                                 <li>If your health status has changed over the years, you may no longer be insurable at standard rates.</li>
                                 <li>Your present policy may have a lower premium rate than is required   on a new policy of the same type, if only because you’re older.</li>
                                 <li>If you replace one cash-value policy with another, the cash value of   the new policy may be relatively small for several years and may never   be as large as that of the original one.</li>
                              </ul>
                              <ul>
                                 <li>You will be subject to a new contestability period.</li>
                              </ul>
                              <p>You should ask insurance agents for a detailed listing of cost   breakdowns of both policies, including premiums, cash-surrender value,   and death benefits. Compare these along with the features offered by   both policies. If you decide to surrender or reduce the value of the   policy you now own and replace it with other insurance, be sure that:</p>
                              <ul>
                                 <li>The agent making the proposal puts it in writing.</li>
                                 <li>You pass any required medical examination.</li>
                                 <li>Your new policy is in force before you cancel the old one.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq10">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content10" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  Can my premium be refunded?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content10" class="collapse" aria-labelledby="faq10" data-parent="#accordionExample">
                           <div class="card-body">
                              <p><strong>If my policy provides comprehensive coverage what is the refund process?</strong><br>
                                 Refunds are available up to your departure date as long as there is   no risk to the policy. Refunds will also be issued if a supplier cancels   or alters service and all of your non-refundable prepaid travel   arrangements insured by us are refunded without penalty.
                              </p>
                              <p><strong>If my policy provides coverage only for emergency medical benefits what is the refund process?</strong><br>
                                 If outside above guidelines, a partial refund of premium is available if you have a minimum of four (4) unused days of coverage.
                              </p>
                              <p><strong>If there is a claim on my policy what is the refund process?</strong><br>
                                 No refund of premium will be made in the event that a claim has been paid, incurred or reported under this policy.
                              </p>
                              <p><strong>How do I request a refund?</strong><br>
                              </p>
                              <ol>
                                 <li>&nbsp;If your insurance was purchased through an agency or broker, your refund must be requested through your issuing agent.</li>
                                 <li>&nbsp;If your insurance was purchased directly through Travel Guard Canada, you must request your refund in writing.</li>
                                 <li>We cannot accept refund requests over the phone.</li>
                              </ol>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="faq11">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content11" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-plus"></i>  How do I go about finding a good insurance agent?
                              </button>
                           </h5>
                        </div>
                        <div id="faq_content11" class="collapse" aria-labelledby="faq11" data-parent="#accordionExample">
                           <div class="card-body">
                              To locate a qualified insurance agent or other financial professional, seek recommendations from friends, or professionals like your lawyer or accountant.<br>
                              <br>
                              Ask about the person’s experience and background and make sure he or she specializes in the service and products you need. You also may want to ask the person if he or she has received any special certifications such as Chartered Life Underwriter (CLU) or Chartered Financial Consultant (ChFC). These designations mean the person has taken advanced courses and may have specialized training and knowledge from which you could benefit.<br>
                              <br>
                              Above all, you want to select an agent or advisor who listens well and will take the time to understand your unique goals and desires. You can also use our Agent Locator to get started.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-7" class="tab-content">
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
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-8" class="tab-content">
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
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-9" class="tab-content">
                  <div class="accordion" id="accordionExample">
             <div class="card">
                <div class="card-header" id="faq1">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fa fa-plus"></i>When should I purchase visitors to Canada travel medical insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                   <div class="card-body">
                     You can purchase medical coverage at any time. We recommend that visitors insurance should be purchased prior to arrival to Canada. If the effective date is after the arrival date, most of the insurance companies do not cover expenses within 24 hours up to 8 days as a result of sickness occurring immediately following your policy effective date. Injury coverage is effective immediately.

                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq2">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-plus"></i>
                      What amount of insurance benefit should I purchase?
                      </button>
                   </h5>
                </div>
                <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                   <div class="card-body">
                      We recommend at least $50,000 of medical insurance coverage as hospital costs for visitors to Canada can run $5000.00 – $5,000 per day.

                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq3">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> 
                        Do I need to buy travel insurance if I’m covered under a health plan?
                      </button>
                   </h5>
                </div>
                <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                   <div class="card-body">
                     Travel insurance is different than extended health insurance. While many extended health insurance plans include some coverage for travel, it is often a small amount. If you get sick or injured while outside of Canada, medical costs can add up quickly – especially if you are hospitalized. Because of this, we recommend that you purchase insurance specific for travelling, even if you have some coverage under another plan. This will ensure that you have enough coverage for an emergency. Travel insurance policies can also include benefits or features that are not provided by group health insurance plans; these include non-medical benefits and 24/7 claims and emergency assistance.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq4">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content4" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i> What does the Visitors to Canada insurance plan include?
                      </button>
                   </h5>
                </div>
                <div id="faq_content4" class="collapse" aria-labelledby="faq4" data-parent="#accordionExample">
                   <div class="card-body">
                     This plan contains a number of benefits, including:
                        <ul class="list-checkmark text-secondary-color body-text-2">                    
                            <li>Emergency medical and health coverage</li>
                            <li>Accidental and emergency dental</li>
                            <li>Ambulance Services up to maximum sum insured</li>
                            <li>Chiropractor, Chiropodist, Osteopath, Physiotherapist</li>
                            <li>Emergency Transportation up to maximum sum insured</li>
                            <li>Hospital Confinement and Medical Services up to maximum sum insured</li>
                            <li>Prescription Medication</li>
                            <li>Return Home</li>
                            <li>Transportation of Relative or Friend</li>
                            <li>Accidental Death & Dismemberment up to the maximum sum insured</li>
                            <li>Additional optional benefits</li>
                        </ul>
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq5">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content5" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Who’s eligible to apply for Visitors to Canada insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content5" class="collapse" aria-labelledby="faq5" data-parent="#accordionExample">
                   <div class="card-body">
                      You can apply for this plan if you are:
                       <ul class="list-checkmark text-secondary-color body-text-2">
                          <li>A tourist, visitor to Canada, Super Visa applicants, Landed immigrants and returning Canadians waiting for Government Health Insurance Plan coverage looking for emergency-only coverage</li>
                          <li>Not insured or eligible for benefits under a Canadian government health insurance plan</li>
                       </ul>
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq6">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content6" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What are my visitors coverage options?
                      </button>
                   </h5>
                </div>
                <div id="faq_content6" class="collapse" aria-labelledby="faq6" data-parent="#accordionExample">
                   <div class="card-body">
                      You can choose between a maximum limit of $10,000, $25,000, $50,000, $100,000, $150,000 or $300,000.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq7">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content7" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Do i need travel insurance if I travel within Canada, but outside of my home province?
                      </button>
                   </h5>
                </div>
                <div id="faq_content7" class="collapse" aria-labelledby="faq7" data-parent="#accordionExample">
                   <div class="card-body">
                      You are not required to purchase additional insurance while travelling outside of your home province (but within Canada); however, it is strongly advised to get yourself some anyway. While your provincial health insurance will remain in effect outside of your province of residence, it is limited to expenses which would be covered in your home province. Because of the potential discrepancies in health care coverage from province to province, we recommend purchasing travel insurance. Plans for travel within Canada are available at very reasonable rates.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq8">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content8" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What is a Deductible?
                      </button>
                   </h5>
                </div>
                <div id="faq_content8" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                      This represents the amount of eligible medical expenses that must be paid by the insured before the insurance company begins to reimburse for covered expenses. As an example, if you purchase a plan with a $50 deductible and incur $200 of expenses, the insurance company will begin to reimburse for expenses after you have paid the first $50 of your medical bills.<br>
                      There are two different kinds of deductibles,&nbsp;<strong>per-claim</strong>&nbsp;and&nbsp;<strong>per-policy period</strong>. A per claim deductible means that the insured must pay a new deductible for each separate incident. (Example: pay the deductible once for a broken leg and then a second time for a flu treatment). A per-policy period deductible means that the insured must pay the deductible only once during the period of the insurance policy. If your plan has a $100 deductible, you pay the first $100 of the expenses and then the insurance company picks up the rest. The higher the deductible, the lower the premium cost and vice versa.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq9">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content9" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What is a Pre-existing Condition?
                      </button>
                   </h5>
                </div>
                <div id="faq_content9" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                   Generally, pre-existing conditions are defined as any sickness, injury or medical condition for which the insured consulted a physician, has symptoms, has been hospitalized or was prescribed medications within a certain period before the effective date of coverage. Each insurance company treats pre-existing conditions differently and this is a major reason for declined medical claims.             
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq10">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content10" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Can I buy visitors to Canada insurance, if I have a pre-existing medical condition?
                      </button>
                   </h5>
                </div>
                <div id="faq_content10" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                     Yes. If you choose a policy that excludes pre-existing conditions, you will be covered for new sicknesses and injuries.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq11">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content11" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Is there any medical test required before we can buy Visitors Insurance? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content11" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                     No, there is no medical examination required for purchasing any Visitors Insurance plan. You can buy the policies online any time and get coverage from the following day.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq12">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content12" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>If I get sick and need medical treatment, would I have to pay out of pocket?
                      </button>
                   </h5>
                </div>
                <div id="faq_content12" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                      Whenever possible, the insurance companies will try to coordinate direct payment with the hospital so that you do not have to pay out of pocket. It is important that you contact your insurer’s Claims and Emergency Assistance department if you are in need of medical attention. This department will help you get the medical attention you need while attempting to coordinate payment at the facility where you are being treated. However, be aware that some medical facilities may insist on payment up front. If your policy has a deductible, this means that you will be responsible for a portion of the medical expenses incurred. This deductible is a dollar amount that you must pay before coverage kicks in. Deductibles vary from policy to policy, and can be applied on a per-claim or per-trip basis.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq13">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content13" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>My parents are healthy, should I buy Visitors Insurance?
                      </button>
                   </h5>
                </div>
                <div id="faq_content13" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    No one can predict the future. Medical treatment in Canada is very expensive and it is always advisable to buy medical travel insurance from a reputable company. for more information or advice please contact us at 1855-500-5041 or by email: info@supervisainsure.com
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq14">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content14" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Is there a coverage limit or change of coverage details at a certain age?
                      </button>
                   </h5>
                </div>
                <div id="faq_content14" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    Please, read all the fine print and ask questions before you buy visitor insurance policy. Carry proof of your insurance with you on your trip. And shop around – there is a big difference in policy features and costs. please make sure you compare benefits before you buy visitor medical insurance or call us us for more advice at 1855-500-5041
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq15">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content15" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>I want to stay longer. Can I buy more coverage?
                      </button>
                   </h5>
                </div>
                <div id="faq_content15" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    Yes, you can extend your visitors insurance, subject to policy terms and conditions. Ideally, you should call us (during business hours) prior to the expiry of your policy so that you will have continuous coverage. You must be in good health.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq13">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content16" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Can I cancel an insurance policy and receive a refund?
                      </button>
                   </h5>
                </div>
                <div id="faq_content16" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    Most plans can be cancelled and the premium can be refunded before the effective date of the policy. Some administrative charges may apply. Partial refunds (less cancellation fee) after the effective date, are available if the policy is terminated because of early departure to the country of origin or the insured become eligible for a provincial or territorial government plan, and no claim has been incurred.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq13">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content17" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What if I have an emergency or claim?
                      </button>
                   </h5>
                </div>
                <div id="faq_content17" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    You must notify Customer Care Worldwide (toll free or worldwide collect) within 24 hours of admission to a hospital or before any medical consultation or surgery is performed. Customer Care number can be found on your policy or contact www.supervisainsure.com Customer care for help
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq13">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content18" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>What Should I Do in Case Of Emergency?
                      </button>
                   </h5>
                </div>
                <div id="faq_content18" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    In case of Emergency you have to notify your insurance company as soon as possible of any emergency medical treatment or hospitalization. Your insurer will provide you with assistance, suggest the best options on where to get help, as well as arrange direct billing where possible. Failure to do so could result in decreasing your insurance benefit. Every insurance company has a toll free emergency phone number to call from Canada and collect call numbers to call from anywhere else. The phone numbers are always included in the policy.
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq13">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content19" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>Why do I have to call the Assistance Center prior to receiving any medical treatment?
                      </button>
                   </h5>
                </div>
                <div id="faq_content19" class="collapse" aria-labelledby="faq8" data-parent="#accordionExample">
                   <div class="card-body">
                    It is highly important that you to call our Assistance Center so that they can confirm, with the healthcare provider, your enrolment under the plan, manage the benefits in accordance with your policy, and, when possible, avoid any out-of-pocket expenses for you. If you do not call the Assistance Center, you may have to pay 20% to 30% of the medical expenses normally covered under this policy. If it is medically impossible for you to call, please have someone call on your behalf. It is your responsibility to ensure that the Assistance Center has been notified.
                   </div>
                </div>
             </div>


          </div>
               </div>
            </div>
            <div class="col-md-12" style="padding-left: inherit;">
               <div id="tab-10" class="tab-content">
                  <div class="accordion" id="accordionExample">
             <div class="card">
                <div class="card-header" id="faq1">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fa fa-plus"></i> What are the best plans for international students? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                   <div class="card-body">
                      Before making a purchase, it is important to check with the school which you will be attending, to make sure that there aren't any specific insurance requirements that need to be fulfilled. If you will be traveling on a short-term travel visa, you should also be eligible for our travel medical insurance policies as well. Consider the Student Secure Elite plan or the Student Health Advantage plan. Both international student plans and travel medical insurance policies are designed to provide coverage for any new and unexpected illnesses or injuries that occur after the policy goes into effect. 
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq2">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-plus"></i>  Can I add my F2 Visa spouse and dependents to my F1 Visa student insurance plan? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                   <div class="card-body">
                      You may add your family on a student plan by selecting spouse and child coverage in the online application. Adding your spouse and dependents will increase your premium for the coverage duration. You may also consider purchasing separate short term insurance for your spouse and children as a cost effective option.


                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq3">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>   What is the best insurance plan for J-1 scholars in the US? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                   <div class="card-body">
                      We have several plans for J-1 scholars. Enter in your specific requirements on our J1 Visa Health Insurance: Get Quotes page. These plans should fulfill all requirements given by your university. To obtain the signed visa letter, you may print it out from the email you receive with confirmation of your purchase. Provide your age and the duration of your stay, and then click "get quotes." On the result page you will be able to see all the plans with their respective quotes. The price of each plan depends on your age and duration of stay. Please feel free to call us at 1.866.384.9104 or email us at support@visitorscoverage.com if you have any questions.
                   </div>
                </div>
             </div>

          </div>
               </div>
            </div>
         </div>
      </div>
</section>
@endsection
@section('script')
 <script type="text/javascript">
         $(document).ready(function(){
         
            $('ul.tabs li').click(function(){
               var tab_id = $(this).attr('data-tab');
         
               $('ul.tabs li').removeClass('current');
               $('.tab-content').removeClass('current');
         
               $(this).addClass('current');
               $("#"+tab_id).addClass('current');
            })
         
         })
      </script>
@endsection