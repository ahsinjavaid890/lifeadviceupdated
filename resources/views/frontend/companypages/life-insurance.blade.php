@extends('frontend.layouts.main')
@section('tittle')
<title>Life Insurance</title>
@endsection

@section('content')
    <div class="health-inssurance-hero-banners super-hero">          
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6 hero-texts">
                <div class="herrotext  super-hero-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span class="text-white">Life  </span>Insurance</h2>
                    <h5 class="wow fadeInUp text-white  text-justify super-text" data-wow-delay=".6s">Life insurance products provides your spouse and family with peace of mind, by giving them the financial options to help make important and often difficult decisions during a very stressful time.</h5>
                    <div class="btns d-flex">
                        <div class="details">
                            <a href="" class=" btn-lg"><i class="fa fa-search mr-3"></i>Have any Question?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hero-images">
                <div class="hero-image super-images" style=" background-image: url('{{ asset('public/front/img/images/insurance-page.png') }}');
                    background-position: 50% 70%;
                    background-size: 100%;
                    background-repeat: no-repeat;">
<!--                     <img src="assets/img/images/visa1.gif"> -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class="first-section-of-page">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6 image-center">
                <div class="student-medical-image">
                    <img src="{{asset('public/front/img/sectontwo.png')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="travel-medical-heading">
                    <h2>Whole Life insurance Ontario</h2>
                    <h3 style="font-family: 'Sofia' !important; color:#445862;">What Makes Life Advice Extra Smart?</h3>
                </div>
                <div class="travel-medical-paragraph">
                    <p>Whole life insurance, also known as Permanent life insurance provides life insurance for the entire lifetime of the policy holder. The premiums in this policy are paid yearlyleveled for life; however in the early years of the policy, premiums will exceed the insurance costs of the company. In short, you would be overpaying the true annual insurance cost in the early years of the policy but later when the cost exceeds what you are to pay as premiums, the overpaid amount would make up the cost difference. Hence, one pays more initially to pay less in the future!</p>
                </div>
                <div class="travel-medical-heading2">
                    <h2>Why Amounts</h2>
                </div>
                <div class="travel-medical-paragraph">
                      <p>Premium amounts can be paid up for over 20 years (age 65-100 years).One can also cancel the policy after a period of time known as a cash surrender option and receive a lump-sum tax-free payment. Most of the refund amount known as the cash value would be the overpayment in premium and not some sort of investment.</p>
                </div> 
                </div>
            </div>
        </div>
</section>
<section class="about-area about-area-five">
    <div class="row">
        <div class="col-md-6">
            <div class="card about-card">
                <div class="card-body">
                    <h2 class="text-white"> <span style="color:#445862;">Participating or </span>Non-Participating Policies</h2>
                    <p style="font-size: 14px; font-weight: 200;"  class=" text-justify">Whole life insurance, also known as Permanent life insurance provides life insurance for the entire lifetime of the policy holder. The premiums in this policy are paid yearlyleveled for life; howeve</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End About Area -->

    <!-- Start Choose Us Area -->
    <section class="choose-us-area-three choose-us-area-five pb-70">
        <div class="container">
            <div class="card" style="border: 1px solid black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                             <p class="ambrela-text mt-4 text-justify">Premium amounts can be paid up for over 20 years (age 65-100 years).One can also cancel the policy after a period of time known as a cash surrender option and receive a lump-sum tax-free payment. Most of the refund amount known as the cash value would be the overpayment in premium and not some sort of investment.</p>
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('public/front/img/images/umbrela2.png')}}" style="width:150px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Us Area -->

    <!-- Start Find An Agent Area -->
    <section class="find-an-agent-area pb-100">
        <div class="container">
            <div class="insurance-heading">
                <h2 class="text-center" style="font-size: 50px;"><span class="advant">Advantages of </span> <span class="whole">Whole Life Insurance</span></h2>
            </div>
            <div class="insurance-paragraph pt-3">
                <p>Whole life insurance, also known as Permanent life insurance provides life insurance for the entire lifetime of the policy holder. The premiums in this policy are paid yearlyleveled for life; however in the early years of the policy, premiums will exceed the insurance costs </p>
            </div>
        </div>
    </section>
    <!-- End Find An Agent Area -->
    <style type="text/css">
        .simple-online-transparent-slider img{
            width: 50px;
            height: 50px;
        }
    </style>
    <!-- Start Services Us Area -->
    <section class="services-area-three services-area-five p-0">
        <div class="container-homepage">
            <div class="row">
                <div class="col-md-3">
                    <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                               <img src="{{asset('public/front/img/images/umbrela1.png')}}">
                            </div>
                            <div class="transparent-card-heading mt-3">
                               <h2>Insurance Coverage</h2>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>The main advantage of Whole life insurance is that it provides you with insurance coverage for as long as you live at the same rates that were guaranteed.</p>
                            </div>
                         </div>
                      </div>
                </div>
                 <div class="col-md-3">
                    <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                               <img src="{{asset('public/front/img/images/dolor.png')}}">
                            </div>
                            <div class="transparent-card-heading mt-3">
                               <h2>Maintain Life Quality</h2>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>Beneficiaries maintain their Quality of Life in the event of your death</p>
                            </div>
                         </div>
                      </div>
                </div>
                 <div class="col-md-3">

                    <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                               <img src="{{asset('public/front/img/images/flag.png')}}">
                            </div>
                            <div class="transparent-card-heading mt-3">
                               <h2>Capital Gains Tax</h2>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>Heirs can also use the benefits payable to them to help cover the capital gains tax on any assets</p>
                            </div>
                         </div>
                      </div>
                </div>
                 <div class="col-md-3">
                    <div class="card transparent-card">
                         <div class="card-body text-center">
                            <div class="simple-online-transparent-slider">
                               <img src="{{asset('public/front/img/images/security.png')}}">
                            </div>
                            <div class="transparent-card-heading mt-3">
                               <h2>Dual Security</h2>
                            </div>
                            <div class="transparent-card-paragraph">
                               <p>Dual Security of never changing premiums and in the event of death, beneficiaries receive the policy benefit tax free.</p>
                            </div>
                         </div>
                      </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Us Area -->

    <!-- Start Counter Area -->
    <section class="counter-area counter-area-three">
        <div class="container-homepage">
            <div class="row counter-row" style=" align-items: center;">
                <div class="col-md-8">
                    <div class="counter-heading">
                        <h2 style="color: #455a64; font-size: 40px;">Life Term Insurance Ontario,Canada</h2>
                        <h5>What Makes Life Advice Extra Smart?</h5>
                    </div>
                    <div class="counter-pargraph">
                        <p class="text-dark text-justify">The uncertainties of life and the unforeseen may interrupt the course of life for your family members. You would obviously want your family to enjoy the same lifestyle and facilities in your absence.Term life insurance is one of the most widely trusted insurance schemes for the financial stability of your loved ones after your untimely death. Term Life insurance can also help your family pay back the debts, college fees and mortgage. It is the most affordable and practical insurance scheme for substantial death benefits during the term or period. Your absence can never be compensated but you can at least secure the future of your immediate family members.</p>
                    </div>
                    <div class="counter-heading2">
                        <h2 style="color: #455a64;">What is</h2>
                    </div>
                    <div class="counter-pargraph">
                        <p class="text-dark text-justify">It is known as thepurest form of Life Insurance with a duration limit on the coverage period or rather known as “Term” in this case. In case of untimely death, the beneficiary gets the insured amount within the term only. After the completion of the term you can either renew the policy or terminate the coverage. The premium amount and the duration are the two main parameters to review while purchasing a Term Life Insurance. In contrast to Permanent Life Insurance policies, Term Life has a lower initial premium values. It is an ideal financial tool for protection against liabilities like Loans and Mortgages. Finally, you also get a tax benefit from the Government if you are a citizen of Canada and invest in a Life Insurance Policy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-image" style="width: 480px;">
                        <img src="{{asset('public/front/img/images/counter-image.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- End Business Contact Area -->
    <div class="business-contact-area-five">
        <div class="row justify-content-end permanent-team">
            <div class="col-md-6">
                 <div class="card permanent-team-subsection">
                     <div class="card-body">
                        <div class="term-heading">
                            <h2 style="font-size:29px;" class="text-white"><span style="color:#1bbc9b;">Permanent Term </span>Life Insurance Coverage for Life </h2>
                        </div>
                        <div class="term-paragraph d-flex align-items-baseline">
                            <p class="text-white" style="font-weight: 900;">Permanent life insurance provides life insurance </p>
                            <button type="submit" class="btn btn-dark ml-3 free-quote"><span style="color:#1bbc9b;">Get Your Free Quote</span></button>
                        </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>
    <!-- End Business Contact Area -->

    <!-- Start Team Area -->
    <section class="team-area team-area-five at-galace" style="background: whitesmoke;">
        <div class="container-homepage">
            <div class="button text-center">
                <span type="submit" class="btn btn-lg glance">At a Glance</span>
            </div>
            <div class="glance-image text-center">
                <img src="{{asset('public/front/img/images/left-line.png')}}">
                <img src="{{asset('public/front/img/images/line.png')}}"> 
                <img src="{{asset('public/front/img/images/right-line.png')}}">
            </div>
            <div class="row team-row">
                <div class="col-lg-4 col-md-6 col-sm-12 glance-sec">
                    <div class="card glance-card">
                        <div class="card-body glance-body">
                            <div class="glance-images">
                                <img src="{{asset('public/front/img/images/dollars.png')}}">
                            </div>
                            <div class="glance-heading">
                                <h2 class="glance-heading2">How much should one invest?</h2>
                            </div>
                            <div class="glance-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 glance-sec">
                    <div class="card glance-card2">
                        <div class="card-body glance-body">
                            <div class="glance-images">
                                <img src="{{asset('public/front/img/images/dollars.png')}}">
                            </div>
                            <div class="glance-heading">
                                <h2 class="glance-heading2" style="color: #3c4e56;">What should be the ideal Period/Term?</h2>
                            </div>
                            <div class="glance-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 glance-sec">
                    <div class="card glance-card">
                        <div class="card-body glance-body">
                            <div class="glance-images">
                                <img src="{{asset('public/front/img/images/dollars.png')}}">
                            </div>
                            <div class="glance-heading">
                                <h2 class="glance-heading2">What about policy renewal?</h2>
                            </div>
                            <div class="glance-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glance-paragraph2 mt-3">
                <p class=" text-justify">Whole life insurance, also known as Permanent life insurance provides life insurance for the entire lifetime of the policy holder. </p>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Get Quot Area -->
    <section class="get-quat-area get-quat-area-three get-quat-area-five">
        <div class="container-fluid">
            <div class="row" style="align-items: center;">
                <div class="col-md-5 universal-image-main">
                    <div class="universal-image">
                        <img src="{{asset('public/front/img/images/universal.png')}}">
                    </div>
                </div>
                    <div class="col-md-7">
                        <div class="universal-heading">
                            <h2>Universal Life insurance</h2>
                            <h5>What Makes Life Advice Extra Smart?</h5>
                        </div>
                        <div class="universal-paragraph mt-4">
                            <p class="text-dark text-justify">The uncertainties of life and the unforeseen may interrupt the course of life for your family members. You would obviously want your family to enjoy the same lifestyle and facilities inyour absence.Term life insurance is one of the most widely trusted insurance schemes for the financial stability of your loved ones after your untimely death. Term Life insurance can also help your family pay back the debts, college fees and mortgage. It is the most affordable and practical insurance scheme for substantial death benefits during the term or period. Your absence can never be compensated but you can at least secure the future of your immediate family members.</p>
                        </div>
                        <div class="universal-heading2">
                             <h2 style="font-size:30px;" class="mt-4"><span style="border-bottom: 5px solid #3c4e56;color: #3c4e56;">What is </span><span style="border-bottom: 5px solid;">Term Life Insurance?</span></h2>
                        </div>
                         <div class="universal-paragraph mt-4">
                            <p class="text-dark text-justify">It is known as thepurest form of Life Insurance with a duration limit on the coverage period or rather known as “Term” in this case. In case of untimely death, the beneficiary gets the insured amount within the term only. After the completion of the term you can either renew the policy or terminate the coverage. The premium amount and the duration are the two main parameters to review while purchasing a Term Life Insurance. In contrast to Permanent Life Insurance policies, Term Life has a lower initial premium values. It is an ideal financial tool for protection against liabilities like Loans and Mortgages. Finally, you also get a tax benefit from the Government if you are a citizen of Canada and invest in a Life Insurance Policy.</p>
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
        </div>
    </div>
</section>
@endsection