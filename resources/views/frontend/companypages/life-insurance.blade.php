@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')

@section('content')
    @include('frontend.companypages.includes.main')

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
                <div class="col-md-3 whloelife-card">
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
                 <div class="col-md-3 whloelife-card">
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
                 <div class="col-md-3 whloelife-card">

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
                 <div class="col-md-3 whloelife-card">
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
@include('frontend.companypages.includes.faqsection')

@endsection