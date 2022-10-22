@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')

@section('content')
@include('frontend.companypages.includes.main')

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

@include('frontend.companypages.includes.faqsection')

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