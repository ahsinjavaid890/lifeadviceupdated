@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')


@section('content')
@include('frontend.companypages.includes.main')

<section class="first-section-of-page">
    <div class="container-homepage">
        <div class="row">
            <div style="margin-bottom: 25px;" class="col-md-12 text-center">
                <div class="travel-medical-heading">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span>Decide If You Need </span>Disability Insurance</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="decide-image">
                    <img src="{{asset('public/front/img/images/decide.png')}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="travel-medical-paragraph">
                    <p>Disability insurance can help protect you and your family from an unexpected illness or accident that leaves you unable to work and earn an income. disability insurance replaces between 60% and 85% of your regular income, up to a maximum amount, for a specified time</p>
                </div>
                <div class="travel-medical-heading2" style="margin-top:20px;">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span style="color: #2b3481;">How do I purchase </span>Coverage?</h2>
                </div>
                <div class="travel-medical-paragraph" style="margin-top:20px;">
                      <p>Check to see if there is disability insurance available through your workplace, in which case your employer may cover part of your premiums. Consider purchasing a policy on your own if coverage at the workplace is insuficient to meet your needs or if workplace coverage is not available to you. Ways to buy a policy on your own include going through a professional association, contacting an insurance broker, reaching out to an insurance company. Take the time to understand the policy you are buying, and don’t be afraid to ask any questions about what your disability insurance policy covers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="benefits ptb-100 ah-benefits">
    <div class="container-homepage">
        <div class="row">
            <div style="margin-bottom: 25px;" class="col-md-12 text-center">
                <div class="travel-medical-heading">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span>Ask any questions about what your </span>Disability insurance policy covers</h2>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 trans-card">

                <div class="card transparent-card">
                 <div class="card-body text-center">
                    <div class="transparent-card-heading mt-3">
                       <h2 ><span style="color: #2b3481;"> Short Term  </span>disability insurance</h2>
                    </div>
                    <div class="transparent-card-paragraph">
                       <p>As long as an employee has short-term disability benefits coverage at the time they become disabled, they are qualified to receive short-term disability benefits. The medical conditions covered by a policy range from physical to psychological, cognitive, or emotional. Many group benefits plans include short-term disability benefits. To confirm whether you have coverage, you should review your group benefits policy.</p>
                    </div>
                 </div>
              </div>
            </div>
            <div class="col-md-5 trans-card">
                <div class="card transparent-card">
                 <div class="card-body text-center">
                    <div class="transparent-card-heading mt-3">
                       <h2><span style="color: #2b3481;"> Long Term </span>Disability insurance</h2>
                    </div>
                    <div class="transparent-card-paragraph">
                       <p>Long-term disability insurance benefits generally begin when the following benefits end.
                        short-term disability insurance, sick leave benefits from your employer, EI benefits
                        Most long-term disability plans will replace 60% to 70% of your normal income.
                        Each disability plan is different. Some may provide disability benefits for up to two years if you're unable to return to the job you had before becoming disabled. After two years, you may continue to receive benefits only if you're unable to work at any job.
                        </p>
                    </div>
                 </div>
              </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="general-terms pb-3 pt-4">
    <div class="container">
        <div class="row general-row">
            <div class="col-md-12 d-flex">
                <div class="term-text">
                    <div class="term-heading">
                    <h2>General terms and conditions</h2>
                </div>
                <div class="term-list">
                    <ul class="list-checkmark text-secondary-color body-text-2">
                        <li>How the plan defines disability</li>
                        <li>Are there any exclusions</li>
                        <li>How much the policy will cost</li>
                        <li>Are the benefits taxable</li>
                        <li>Will benefits be adjusted for inflation</li>
                        <li>How long you need to wait before starting to receive benefits</li>
                        <li>Does the plan include partial disability benefits</li>
                        <li>Can you increase your coverage without a medical exam</li>
                        <li>Are there any pre-existing condition clauses in the plan that you should be aware of Premiums</li>
                        <li>Do you still need to make premium payments while living with a disability Benefits the amount of money you'll get each month</li>
                    </ul>
                </div>
                </div>
                <div class="term-image">
                    <img style="width:160px;" src="{{asset('public/front/img/images/clipboard.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="defination pb-5 pt-6">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/front/img/images/defination.jpg')}}">
            </div>
            <div class="col-md-6">
                <h2><span style="color: #2b3481;"> Definition </span>of disability</h2>
                <div class="defination-paragraph text-dark">
                   <p>The definition of a disability can vary between insurance companies. The definition can even vary between different insurance plans from the same company</p>
                   <p>Some disability plans may also require you take part in a rehabilitation program if they can help you get back to work.</p>
                   <p>Check with your insurance plan administrator or insurance agent to learn your plan’s definition of disability.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 trans-card">

                <div class="card transparent-card">
                 <div class="card-body text-center">
                    <div class="transparent-card-heading mt-3">
                       <h2 ><span style="color: #2b3481;"> Any  </span>occupation</h2>
                    </div>
                    <div class="transparent-card-paragraph">
                       <p>An any-occupation policy is a type of disability insurance that provides coverage for when the insured is unable to work in a job suitable for them based on education, experience, and age. If the insured is capable of still working, even if it is at a lower-paying job, an any-occupation policy would not pay benefits.Employer-provided disability insurance may only be available as an any-occupation policy. Employees may purchase a supplemental disability policy for additional protection.</p>
                    </div>
                 </div>
              </div>
            </div>
            <div class="col-md-4 trans-card">
                <div class="card transparent-card">
                 <div class="card-body text-center">
                    <div class="transparent-card-heading mt-3">
                       <h2><span style="color: #2b3481;"> Regular</span>Occupation</h2>
                    </div>
                    <div class="transparent-card-paragraph">
                       <p>The definition of "regular or own occupation" plan means you'll receive benets if you're unable to perform the main duties of the job you had at the time the disability started. You'll still receive benefits even if you can work in a dierent job from the one you had before your disability, based on your training, experience and education. Some policies don't allow you to get benefits, or may reduce your benets, if you begin working in a difierent job</p>
                    </div>
                 </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card transparent-card">
                 <div class="card-body text-center">
                    <div class="transparent-card-heading mt-3">
                       <h2><span style="color: #2b3481;"> Own  </span> occupation</h2>
                    </div>
                    <div class="transparent-card-paragraph">
                        <p>Own occupation plans that never change in definition are often purchased individually and usually cost more than any occupation plans. You may want to consider an own occupation plan if you have a specialized occupation that would require you to take a signicant pay cut in order to work in another field</p>
                    </div>
                 </div>
              </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
    .waiting{
    background-color: #f2f4f7;
}
.ages{
    background-color: #536982;
    color: white;
    padding: 5px;
}
</style>
<section class="first-section-of-page">
    <div class="container-homepage">
        <div class="row  general-row">
            <div class="col-md-6">
                <div class="wainting-heading">
                    <h2><span style="color: #2b3481;"> Waiting  </span> period</h2>
                </div>
                <div class="wainting-pargraph">
                    <p> Every disability insurance policy imposes a waiting period, also known as the elimination period. This reference is to the number of days you must be disabled before receiving benefits, and the first check will come within 30 days of the end of this period. In other words, if you are disabled during the elimination period, you will not receive any benefits, even though you cannot work. Many people select an elimination period of 60 to 90 days. Shorter elimination periods, such as 30 or 60 days, can mean higher premiums and vice versa.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/front/img/images/calender.png')}}">
            </div>
        </div>
    </div>
</section>
<div class="apply pb-5 pt-4 ">
    <div class="container-homepage">
        <div class="row  general-row">
            <div class="col-md-6" style="width: 100%; margin: auto;">
                <div class="apply-heading text-center">
                    <h2>Who Can Apply?</h2>
                </div>
                <div class="boxes d-flex">
                <div class="ages mr-5">
                    <p>Age 18-55</p>
                </div>
                <div class="ages mr-5">
                    <p>Canadian citizens</p>
                </div>
                <div class="ages mr-5">
                    <p>What's Covered?</p>
                </div>
                </div>

        <div class="row mt-3">
            <div class="col-md-12 ages-12">
                <div class="ages">
                    <p>Benefits are payable under the following conditions Disclaimer 5:</p>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="ages">
                <p>Permanent residents/landed immigrants</p>
            </div>
            <div class="ages mt-3">
                <p>Working a minimum of 30 hours per week</p>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
