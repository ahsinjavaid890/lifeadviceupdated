@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.main')

<section class="products ptb-100">
    <div class="container">
      <div class="row align-items-center">
         <div class="col-md-4">
            <div class="life-heading">
               <h2><span>Life </span>Insurance</h2>
               <p>While you’re away from your home country, Trave and Visitor insurance plans can help you and your loved ones stay safe. Visitors insurance is designed for visitors in Canada in mind with protection . Travel medical insurance ensures that international travelers, including Canadians citizens, get the medical attention when they need to visit out of province or out of country without facing crushing medical debt.</p>
            </div>
            <img src="{{asset('public/front/img/images/barcode.png')}}">
         </div>
         <div class="col-md-8 pl-5">
            <div class="row">
               <div class="col-md-6 mt-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="product-card-heading">
                           <h5><span>Life</span> Insurance</h5>
                        </div>
                        <div class="product-card-images d-flex">
                           <img src="{{asset('public/front/img/images/health-insurance.png')}}">
                           <p>Life insurance products provides your spouse and family with peace of mind, by giving them the financial options to help make important and often difficult decisions during a very stressful time.</p>
                        </div>
                        <div class="product-btn text-right mt-3">
                           <button class="btn btn-sm">Learn More</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mt-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="product-card-heading">
                           <h5><span>Critical Illness</span> Insurance</h5>
                        </div>
                        <div class="product-card-images d-flex">
                           <img src="{{asset('public/front/img/images/doctor-heart.png')}}">
                           <p>Critical illness insurance help to pay the costs associated with life-altering illnesses. If you become sick with an illness.</p>
                        </div>
                        <div class="product-btn text-right mt-3">
                           <button class="btn btn-sm">Learn More</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-6 mt-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="product-card-heading">
                           <h5><span>Disability</span> Insurance</h5>
                        </div>
                        <div class="product-card-images d-flex">
                           <img src="{{asset('public/front/img/images/baby-health.png')}}">
                           <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor</p>
                        </div>
                        <div class="product-btn text-right mt-3">
                           <button class="btn btn-sm">Learn More</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mt-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="product-card-heading">
                           <h5><span>Health</span> Insurance</h5>
                        </div>
                        <div class="product-card-images d-flex">
                           <img src="{{asset('public/front/img/images/hospital-bed.png')}}">
                           <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor</p>
                        </div>
                        <div class="product-btn text-right mt-3">
                           <button class="btn btn-sm">Learn More</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
</section>    
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>RESP</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/piggy.png')}}">
                                    <p>A Registered Education Savings Plan (RESP) is a special savings account for a child's futurer  education,Parents, grandparents and friends can contribute money any time</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>RRSP</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/tree.png')}}">
                                    <p>A registered retirement savings plan (RRSP) is a type of savings account that help Canadians save for their fund for retirement and enjoy tax benefits, both now and in the future.</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                   <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>TFSA</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/dollar-coin.png')}}">
                                    <p>A Tax-Free Savings Account is a new way for residents of Canada TFSA allows you to set money aside in eligible investments and watch those savings grow tax-free throughout your lifetime. Interest, dividends, and capital</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>FHSA</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/treet-people.png')}}">
                                    <p>Student Insurance is for students who are studying abroad or international students coming to study in Canada.</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trip-heading">
                    <h2><span>Investment</span> Insurance</h2>
                    <p>A wide variety of investment products exist to help you achieve your financial goals.  When it comes to saving for the future, many Canadians use a tax-smart registered account such as a RESP, TFSA or RRSP discover the risks and benefits of different investment products by Life Advice Insurance,</p>
                </div>
                <div class="trip-image">
                    <img src="{{asset('public/front/img/images/coin-laptop.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="trip-heading">
                    <h2><span>Visitors</span> Insurance</h2>
                    <p>While you’re away from your home country, Trave and Visitor insurance plans can help you and your loved ones stay safe. Visitors insurance is designed for visitors in Canada in mind with protection . visitor insurance can protect you from costly health expenses during your stay. If you experience any new injuries, illnesses, or have pre-existing conditions that require treatment during your trip, our visitor’s insurance includes plans to get the coverage you need.</p>
                </div>
                <div class="trip-image">
                    <img src="{{asset('public/front/img/images/hicking.jpg')}}">
                </div>
            </div>
            <div class="col-md-8 pl-5 product-row">
                <div class="row">
                   <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Visitor</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/lagage.png')}}">
                                    <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Super Visa</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/circle-plane.png')}}">
                                    <p>Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                   <a href="{{ url('product/super-visa-insurance') }}"> <button class="btn btn-sm">Learn More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                   <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Students</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/education.png')}}">
                                    <p>Student Insurance is for students who are studying abroad or international students coming to study in Canada.</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Immigrants</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/girl-board.png')}}">
                                    <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding-bottom: 50px;" class="products">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 product-row">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Multi Trip</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/plane.png')}}">
                                    <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Single Trip</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/travel.png')}}">
                                    <p>Single-Trip Emergency Medical Plan protects one trip anywhere in the world with up to $10 million in emergency</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>Trip</span> Cancellation</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/cancel-travel.png')}}">
                                    <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-card-heading">
                                    <h5><span>All Inclusive</span> Insurance</h5>
                                </div>
                                <div class="product-card-images d-flex">
                                    <img src="{{asset('public/front/img/images/group-people.png')}}">
                                    <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor</p>
                                </div>
                                <div class="product-btn text-right mt-3">
                                    <button class="btn btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trip-heading">
                    <h2><span>Travel</span> Insurance</h2>
                    <p>It’s a smart way to help you recover eligible expenses when scheduled trips are derailed by covered unexpected issues. Having Trip Cancellation and Trip Interruption could help protect more than just transportation expenses. You could get coverage on other eligible expenses, like hotels, meals and more, that go unused due to a covered cause.</p>
                </div>
                <div class="trip-image">
                    <img src="{{asset('public/front/img/images/rain.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection