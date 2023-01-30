@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')

@section('content')
@include('frontend.companypages.includes.main')

<section class="first-section-of-page">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6">
                <div class="decide-image">
                    <img src="{{asset('public/front/img/images/critical-insurance.png')}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="travel-medical-heading2" style="margin-top:20px;">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span style="color: #2b3481;">Critical Illness </span>Insurance Ontario,Canada</h2>
                </div>
                <div class="travel-medical-paragraph">
                    <p>Critical illness is a stressful event for an individual and can disturb your fnancial balance manifold. Critical Illness Insurance can help you pay-off such fnancial overheads in life-altering illness. If you are insured under Critical Illness Insurance and the policy covers for the associated illness, you receive a lump-sum amount in cash to pay for the expenses. It can also be claimed under the circumstances where you have already paid for the expenses, the amount hence received can be used to recover the loss of income. Critical Illness covers for a variety of illnesses and accidents like: Heart Attacks, Strokes, Cancer, physical disabilities, Alzheimer’s disease, etc</p>
                </div>
                <div class="travel-medical-heading2" style="margin-top:20px;">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span style="color: #2b3481;">What Does It </span>Cover for?</h2>
                </div>
                <div class="travel-medical-paragraph" style="margin-top:20px;">
                      <p>Critical Illness Insurance also covers the cost if you have to travel out of the country for treatment. Statistics say it all; anyone can face such life-changing event. According to statistics, on an average over 70,000 Canadians go through heart attacks and between 40,000 to 50,000 strokes every year. Also over 3000 people are diagnosed with cancer every week in Canada. These are some shocking statistics and hence critical illness insurance is recommended to all.</p>
                </div> 
            </div>
        </div>
    </div>
</section>
<div class="our-mission-section">
    <div class="container-homepage">
        <div class="row mission-row">
            <div class="col-md-2">
                    <img class="men-image" src="{{asset('public/front/img/images/type-men.png')}}">
            </div>
            <div class="col-md-10">
                <div class="card pb-4 pt-4" style="background-color: #43d7b5;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-white" style="font-size:27px;">What types of illnesses are covered?</h2>
                         <p class="text-dark">While you choose a policy you should know the various diseases it covers for. Typically four kinds of diseases are covered in most of Critical Illness Insurance products:</p>
                    </div>
                    <div class="col-md-6">
                        <div class="list-types ml-5 text-white">
                            <ul>
                                <li>Cancer</li>
                                <li>Heart Attack</li>
                                <li>Strokesand Coronary Heart Bypass Surgery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>



    <div class="what-we-offer">
        <div class="container-homepage">
            <div class="summary-insurance text-center">
                <h2 ><span>Summary of Critical Illness Insurance Benefits:</span></h2>
                <p style="margin-bottom:50px;">There are various other diseases covered under the Critical Illness insurance but it depends on the policy you purchase. Other diseases that can be treated under critical illness are:</p>
            </div>
            <div class="row mission-row">
                <div class="col-md-3">
                    <ul class="list-checkmark text-secondary-color body-text-2" >
                        <li>Alzheimer’s disease</li>
                        <li>Kidney failure</li>
                        <li>Paralysis</li>
                        <li>Parkinson’s disease</li>
                        <li>Organ failure/transplant</li>
                        <li>Motor Neuron</li>
                        <li>Bacterial Meningitis</li>
                        <li >Loss of independent existence</li>
                        <li >Blindness</li>
                        <li >Deafness</li>
                        <li >Severe Burns</li>
                        <li>Loss of Speech</li>
                        <li>Loss of Limbs</li>
                        <li>Multiple Sclerosis</li>
                        <li>Benign brain tumor</li>
                        <li>Coma</li>
                        <li>Heart valve replacement</li>
                        <li>Aortic surgery</li>
                        <li>Aplastic Anemia</li>
                        <li>Aortic surgery</li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-checkmark text-secondary-color body-text-2" >
                        <li>Occupational HIV Infection</li>
                        <li>Alzheimer’s disease</li>
                        <li>Kidney failure</li>
                        <li>Paralysis</li>
                        <li>Parkinson’s disease</li>
                        <li>Organ failure/transplant</li>
                        <li>Motor Neuron</li>
                        <li>Bacterial Meningitis</li>
                        <li >Loss of independent existence</li>
                        <li >Blindness</li>
                        <li >Deafness</li>
                        <li >Severe Burns</li>
                        <li >Loss of Speech</li>
                        <li >Loss of Limbs</li>
                        <li>Multiple Sclerosis</li>
                        <li>Benign brain tumor</li>
                        <li>Coma</li>
                        <li>Heart valve replacement</li>
                        <li>Aplastic Anemia</li>
                        <li>Occupational HIV Infection</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('public/front/img/images/wheelchair.png')}}">
                </div>
            </div>
        </div>
    </div>

<div class="type-of-policies pb-5 pt-5">
    <div class="container-homepage">
   <div class="policies-heading text-center">
       <h2><span style="color: #2b3481;">Type of Policies</span> under Critical Illness Insurance</h2>
   </div>
   <div class="row mt-5">
       <div class="col-md-3 policy-col">
           <div class="card policies-card">
               <div class="card-body">
                   <h3 class="text-center"><span style="color: #2b3481;">Term based</span> Policies</h3>
                   <div class="policies-image">
                       <img src="{{asset('public/front/img/images/board.png')}}">
                   </div>
                   <div class="policies-text">
                       <p>You can buy a policy for a term as per your needs. Various term options available are Term 10, Term 20, Term 65, Term 75 and Term 100. <span id="dots">...</span><span id="more">Mostly you get coverage till the age of 75 at max</p>
                        <button onclick="myFunction()" id="myBtn">Read more</button>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 policy-col">
           <div class="card policies-card">
               <div class="card-body">
                   <h3 class="text-center"><span style="color: #2b3481;">Return of</span> Premiums</h3>
                   <div class="policies-image">
                       <img src="{{asset('public/front/img/images/dollar-bags.png')}}">
                   </div>
                   <div class="policies-text">
                       <p>You also have an option to add Return of Premiums (ROP) option to your policy. If you claim all the premiums paid towards the policy, <span id="dot">...</span><span id="mores">the coverage ends. If you go for a partial refund then the insured amount automatically reduces in accordance with the amount you claim. It is however advisable to seek the help of professional advisor at the time of buying the policy. ROP is mostly available for Term 65 and above only.</p>
                        <button onclick="myFunctions()" id="myButn">Read more</button>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 policy-col">
           <div class="card policies-card">
               <div class="card-body">
                   <h3 class="text-center"><span style="color: #2b3481;">Special</span> Cases</h3>
                   <div class="policies-image">
                       <img src="{{asset('public/front/img/images/search.png')}}">
                   </div>
                   <div class="policies-text">
                       <p>No Claim made: Some companies payback the premiums paid towards the policy in an event when the insured individual dies within the waiting period, <span id="dote">...</span><span id="mor">due to a cause not covered by the policy. The amount is paid to the nominated beneficiary in the contract. In some products, the company pays back a portion of premium if the insurance in unclaimed till its maturity.</p>
                        <button onclick="myFunctione()" id="btn">Read more</button>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 policy-col">
           <div class="card policies-card">
               <div class="card-body">
                   <h3 class="text-center"><span style="color: #2b3481;">Full</span> Recovery</h3>
                   <div class="policies-image">
                       <img src="{{asset('public/front/img/images/umbrella-dollar.png')}}">
                   </div>
                   <div class="policies-text">
                       <p>You get a full coverage as long as you fulfill the waiting period mentioned in the policy. Even if the policy holder recovers fully,<span id="dotee">...</span><span id="morr"> still he/she will get the entitled coverage in the policy</p>
                        <button onclick="myFunctiones()" id="btns">Read more</button>
                   </div>
               </div>
           </div>
       </div>   
   </div>
    </div>
</div>
<div class="advantages pb-5 pt-5">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6">
                <div class="advantages-heading">
                    <h2><span style="color: #2b3481;">Advantages of </span>Critical Life Insurance</h2>
                </div>
                <div class="advantages-paragraph mt-3">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper sus</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('public/front/img/images/dollar-bag.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3 >Immediate Cash Payoff</h3>
                        <p>The most obvious benefit is the immediate payout. Within 30days of diagnosis with a critical illness, insurance company will pay you a lump-sum amount which is tax free.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <img src="{{asset('public/front/img/images/parashoot.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3 style="color: #3d4b5d;">Reduce Financial Burden</h3>
                        <p>This Relieves you from financial obligations and helps concentrate on your recovery. The amount received can be used for- Pay medical bills, International medical treatments, Meeting day to day life expenses , Paying off mortgage, etc.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <img src="{{asset('public/front/img/images/hand-flag.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3>Independence Guarantee</h3>
                        <p>While recovering from the illness you can maintain your house and property. You can also pay for domestic help during the recovery as well as fund a leave for your spouse.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <img src="{{asset('public/front/img/images/praying.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h3 style="color: #3d4b5d;">Better Medical Services</h3>
                        <p>You would be able to afford cutting-edge medical services which are otherwise not covered by provincial health insurance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.companypages.includes.faqsection')

@endsection
@section('script')
<script type="text/javascript">
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script type="text/javascript">
function myFunctions() {
  var dots = document.getElementById("dot");
  var moreText = document.getElementById("mores");
  var btnText = document.getElementById("myButn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script type="text/javascript">
function myFunctione() {
  var dots = document.getElementById("dote");
  var moreText = document.getElementById("mor");
  var btnText = document.getElementById("btn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script type="text/javascript">
function myFunctiones() {
  var dots = document.getElementById("dotee");
  var moreText = document.getElementById("morr");
  var btnText = document.getElementById("btns");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
@endsection