@extends('frontend.layouts.main')
@section('tittle')
<title>Claim Insurance</title>
@endsection
@section('content')
<div class="health-inssurance-hero-banner pt-5">          
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6">
                <div class="herrotext">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span>Claim</span> Form</h2>
                    <h5 class="wow fadeInUp  text-justify" data-wow-delay=".6s"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span></h5>
                    <div class="btns d-flex">
                        <div class="details">
                            <a href="" class=" btn-lg"><i class="fa fa-search mr-3"></i>Have any Question?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-image">
                    <img src="{{asset('public/front/img/images/claim-hero.gif')}}">
                </div>
            </div>
        </div>
    </div>
</div>
   <section class="claim-process pb-5 pt-5">
       <div class="container-homepage">
           <div class="row">
               <div class="col-md-5">
                   <img src="{{asset('public/front/img/images/22.gif')}}">
               </div>
               <div class="col-md-7">
                   <div class="claim-process-heading mt-5">
                       <h2><span>Claims Process</span> Overview</h2>
                   </div>
                   <div class="claim-process-process">
                       <p>To get reimbursed for covered medical expenses, you'll need to file a claim with your insurance administrator by keeping the following in mind:</p>
                       <p>Send the completed claim form, copies of your passport, medical bills and receipts to your claims administrator. Make sure to keep copies of your documents and file your claim as soon as possible.<br> The insurance administrator will review the claim, which can take anywhere from several weeks to a few months.<br> If your claim is approved, you'll be reimbursed via the payment method selected on your form. If your claim is denied, you'll have the option to appeal.</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
    <div class="finding-right">
    <div class="">
        <div class="row aboutussecondrows">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="claim-card text-center">
                            <h6 class="text-white">Check Claims Status</h6>
                                <img src="{{asset('public/front/img/images/approved.gif')}}">
                                <p class="claim-card-pargraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{asset('public/front/img/images/left-arrow.png')}}" class="left-arrow mt-5">
                <h2 class="text-white">Need assistance with an existing claim?</h2>
                <img src="{{asset('public/front/img/images/right-arrow.png')}}" class="right-arrow float-right">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="claim-card text-center">
                            <h6 class="text-white">Sign in for help with your existing claim</h6>
                                <img src="{{asset('public/front/img/images/22.gif')}}">
                                <p class="claim-card-pargraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="claim-download">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/tl.jpg')}}">
                        <h2><span>Essential </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/tl.jpg')}}">
                        <h2><span>Premier </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/GMS.png')}}">
                        <h2><span>Plan-b</span> With Pre</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/21_century.png')}}">
                        <h2><span>Enhanced </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/tugo.png')}}">
                        <h2><span>Daily Plan </span> - A</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/manulife.png')}}">
                        <h2><span>Plan </span>- A</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/manulife.png')}}">
                        <h2><span>Plan </span>- B</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/Blue-cross.png')}}">
                        <h2><span>Plan</span>-a</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/rsz.png')}}">
                        <h2><span>Plan</span>-b</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/rsz.png')}}">
                        <h2><span>Plan</span>-a</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/rsz.png')}}">
                        <h2><span>Comprehensive</span>-plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/destination.png')}}">
                        <h2><span>Premier </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/destination.png')}}">
                        <h2><span>Base </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/INGLE.png')}}">
                        <h2><span>Plan</span>-a</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/INGLE.png')}}">
                        <h2><span>Plan</span>- B</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/allianz.png')}}">
                        <h2><span>Plan</span>- A</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/GMS.png')}}">
                        <h2><span>Plan-b </span>With Pre</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/21_century.png')}}">
                        <h2><span>Standard </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/21_century.png')}}">
                        <h2><span>Basic </span>Plan</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
                </div>       
            </div>
            <div class="col-md-3 mt-4">
                 <div class="card transparent-cards">
                    <div class="card-body text-center">
                        <img src="{{asset('public/front/img/logos/GMS.png')}}">
                        <h2><span>Plan-b </span>With Pre</h2>
                        <hr class="hr-tag">
                        <a href="#" class="btn btn-block claim-btn">Claim Form</a>
                        <a href="#" class="btn btn-block policy-btn">Claim Form</a>
                        <h5 class="mt-4 call-heading"><i class="flaticon-call"></i>1-800-334-7787</h5>
                        <p>(Within Canada & USA)</p>
                        <h5><i class="flaticon-call"></i>1-905-667-0587</h5>
                     </div>
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
</section>
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="#" method="POST">
                    <div class="form-heading">
                        <h3 style="color:#3a5371;" class="text-center">Send a Message</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input type="text" name="fname" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <label>Emails*</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Message</label>
                            <textarea class="form-control" cols="100" rows="5"></textarea>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <label></label>
                                    <div class="save-button d-flex">
                                <input type="submit" name="save" value="Save" class="btn-lg save-btn mr-4">
                                </div>
                            </div></div>
                    </form>
                </div>
            </div>
             <div class="phone-man">
                 <img src="assets/img/images/phone-man.gif">
             </div>
        </div>
     </section>
@endsection