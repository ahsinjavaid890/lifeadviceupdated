@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.main')
@include('frontend.companypages.includes.sectiontwo')
@include('frontend.companypages.includes.sectionthree') 
@include('frontend.companypages.includes.sectionfour')
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
@include('frontend.companypages.includes.faqsection')
@include('frontend.companypages.includes.productsection')
@endsection