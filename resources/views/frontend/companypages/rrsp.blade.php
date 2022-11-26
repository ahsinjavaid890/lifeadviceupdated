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
                       <h2><span>What is an</span> RRSP?</h2>
                   </div>
                   <div class="claim-process-process">
                       <p>An RRSP is a registered investment that lets you save for your retirement by deferring taxes on your investment earnings. This means more of your money can stay invested and grow faster.</p>
                       <p>An RRSP also helps you lower your tax bill today, by allowing you to deduct RRSP contributions from your taxable income. By the time you retire you will likely be in a lower tax bracket, so withdrawals are taxed at a lower rate than today.</p>
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
                       <h2><span>How does an</span> RRSP work?</h2>
                   </div>
                   <div class="claim-process-process">
                       <p>Any contributions into your RRSP can help you decrease your current taxable income. This means you won’t have to pay taxes on your contributions or any investment growth until you withdraw funds.</p>
                       <p>For most Canadians, withdrawing from your RRSP at a later point in life – in your 60s or 70s – means paying much less tax.</p>
                       <p>Think of it this way: you’ll probably be in a much lower tax bracket when you’re retired in your 60s or 70s. So, you’ll be paying less tax when you withdraw from your RRSP at that age, all the while helping to lower your current tax bill.</p>
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
                       <h2><span>Benefits why nearly half of Canadians invest in an RRSP</span></h2>
                   </div>
                   <div class="claim-process-process">
                       <p>Use an RRSP to save for retirement while also saving for anything in a TFSA<br>Contributions reduce your annual income, lowering your tax bill</p>
                       <p>You don’t pay tax on the growth of your investments in your RRSP until you withdraw it so you can keep more of your money.</p><p>You can borrow money from your RRSP to go to school or buy your first home without penalty, provided it is repaid within the required time<br>You can make up for missed contribution room from previous years</p>
                       <p>Think of it this way: you’ll probably be in a much lower tax bracket when you’re retired in your 60s or 70s. So, you’ll be paying less tax when you withdraw from your RRSP at that age, all the while helping to lower your current tax bill.</p>
                       <p>Plus, you can hold a variety of investments in your RRSP, like:</p>
                       <ul style="list-style: inside;">
                           <li>stocks,</li>
                           <li>bonds,</li>
                           <li>segregated funds,</li>
                           <li>GICs, and</li>
                           <li>mutual funds,</li>
                       </ul>
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
                       <h2><span>What is your RRSP contribution limit?</span></h2>
                   </div>
                   <div class="claim-process-process">
                       <p>Generally, your contribution limit is calculated by the Canada Revenue Agency based on these 3 factors:</p>
                       <ul style="list-style: inside;">
                           <li>Total of your unused deduction room from the previous year</li>
                           <li>Now add the smaller amount of:</li>
                           <li>- 18% of the earned income you reported on your tax return last year</li>
                           <li>- $27,830 (the annual limit for 2021)</li>
                           <li>Then subtract any pension adjustment from the previous year (if applicable)</li>
                       </ul>
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
                       <h2><span>What happens if you go over your RRSP limit?</span></h2>
                   </div>
                   <div class="claim-process-process">
                       <p>You will be taxed 1% per month on any amount that is more than $2,000 over your contribution limit. If you don’t pay the additional tax within 90 days after the calendar year, you’ll face late-filing penalties or interest charged.</p>
                       <h5>What are the RRSP contribution rules?</h5>
                       <p>What are the RRSP contribution rules?</p>
                       <ul style="list-style: inside;">
                           <li>You can contribute until Dec. 31 of the year you turn 71 years old </li>
                           <li>You can contribute what you have available in your contribution room provided by the CRA</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
   
   @include('frontend.companypages.includes.faqsection')

@endsection