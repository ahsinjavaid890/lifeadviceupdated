@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.main')

   <section class="claim-process pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                   <img src="{{asset('public/front/img/images/png123.gif')}}">
               </div>
               <div class="col-md-6">
                   <div class="claim-process-heading mt-5">
                       <h2><span>What is an</span> RESP?</h2>
                   </div>
                   <div class="claim-process-process">
                       <p>An RESP is supported by the federal and some provincial governments. It helps you save money for a child’s future education, where the investments inside the investment account grow tax-free.</p>
                       <p>There is life-time limit of $50,000 per beneficiary and amounts contributed in excess of this are subject to a penalty tax of 1% per month on the excess until the over-contribution is withdrawn.</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="claim-process bg-white pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                   <div class="claim-process-heading mt-5">
                       <h2><span>How does an</span> RESP work?</h2>
                   </div>
                   <div class="claim-process-process">
                        <h5>Contribute</h5>
                       <p>You start saving early in your child’s registered education savings plan (RESP) and take advantage of generous government grants. There’s no minimum amount to start. You can set a monthly contribution minimum of $25. You may also qualify for government grants based on your contributions</p>
                       <h5>Accumulate</h5>
                       <p>Your regular contributions and grants generate interest. Your registered education savings plan (RESP) years if you have a specified plan), so if the child doesn’t pursue education right away, there’s still time</p>
                       <h5>Benefit</h5>
                       <p>When the money is withdrawn for post-secondary education, your own contributions will not be taxed. But grants and growth that accumulated inside the plan are taxed at the student rate. However, since many students have little or no other income, they can usually withdraw the money tax-free.</p>
                   </div>
               </div>
               <div class="col-md-6">
                   <img src="{{asset('public/front/img/images/png1.gif')}}">
               </div>
           </div>
       </div>
   </section>
   <section class="claim-process pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                   <img src="{{asset('public/front/img/images/png01.gif')}}">
               </div>
               <div class="col-md-6">
                   <div class="claim-process-heading mt-5">
                       <h2><span>My Education </span> +</h2>
                   </div>
                   <div class="claim-process-process">
                       <p>More savings. More flexibility. More possibilities.<br>You contribute the amount you want when you want and have access to advantageous investment options to help you save more</p>
                       <h5>Types of plan available</h5>
                       <p>Individual<br>Anyone can be a Plan Subscriber - no blood or adoptive relation to the child is required<br>Family</p>
                       <p>Possibility to name more than one child under the plan<br> Subscriber must be related to the child by blood or adoption<br> Investment options available<br> Based on your investor profile and financial goals, you can invest in a selection of advantageous investment options:</p>
                       <p>Segregated funds<br>High Interest Savings Account with 100% capital guarantee</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="claim-process bg-white pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                   <div class="claim-process-heading mt-5">
                       <h2><span>Diploma</span></h2>
                   </div>
                   <div class="claim-process-process">
                       <h5>Education bonus</h5>
                       <p>You receive an education bonus of up to 15% of your total contributions once your commitment has been fulfilled.</p>
                       <h2><span>Types of Plan Available</span></h2>
                       <h5>Individual</h5>
                       <p>Anyone can be a Plan Subscriber - no blood or adoptive relation to the child is required<br>Investment options available<br>The allocation of your investments relies on a combination of two Diploma funds:</p>
                       <h5>Diploma Elementary Fund<br>Diploma Secondary Fund<br>The allocation is established <br>According to the child’s age</h5>
                   </div>
               </div>
               <div class="col-md-6">
                   <img src="{{asset('public/front/img/images/png12.gif')}}">
               </div>
           </div>
       </div>
   </section>
   <section class="claim-process pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-6">
                   <img src="{{asset('public/front/img/images/pn1g123.gif')}}">
               </div>
               <div class="col-md-6">
                   <div class="claim-process-heading mt-5">
                       <h2><span>What about a child that doesn’t go to school?</span></h2>
                   </div>
                   <div class="claim-process-process">
                       <p>School may not be for everyone. But college and university aren’t your kid’s only options. There are many other programs that an RESP can be used for, including foreign educational institutions abroad, trade schools or apprenticeships</p>
                       <h2>Don’t Rush</h2>
                       <p>An RESP can be kept open for up to 35 years (or 40 years for a specified plan).There’s plenty of time for someone to go back to school as their career and interests change.</p>
                       <h5>Transfer to Another RESP</h5>
                       <p>You may be able to transfer the money between RESPs with the same beneciaries without having to pay taxes. Additionally, grants may be shared with a sibling if they have grant room available, otherwise they must be reimbursed to the government</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   
   @include('frontend.companypages.includes.faqsection')

@endsection