@extends('frontend.layouts.main')

@section('content')
<script language="javascript" type="text/javascript">
   function printDiv() {
         $('#removeconta').removeClass('container');
         $('#removecontainer').removeClass('container');
         $('#removecontainer').css('margin-top' , '50px');
         $('#removecontainer').css('margin-bottom' , '50px');
         $('#removediv').hide();
         $('.collapse').addClass('show');

        //Get the HTML of div
         
        var printdivone = document.getElementById("printdivone").innerHTML;
        var divElement1 = document.getElementById("PrintInvoice1").innerHTML;
        var divElement2 = document.getElementById("PrintInvoice2").innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

      document.body.innerHTML = " <div class='page-breakInline'></div>"+printdivone+" " +divElement1+" <div class='page-breakInline'></div>" + divElement2;
      window.print();
      document.body.innerHTML = oldPage;
      $('#removeconta').addClass('container');
      $('.collapse').removeClass('show');
      $('#removecontainer').addClass('container');
      $('#removecontainer').css('margin-bottom' , '0px');
      $('#removecontainer').css('margin-top' , '0px');
      $('#removediv').show();
    }
</script>
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/comparecsstwo.css') }}">
<section style="height: 150px;
    background-color: #2b3481;
    margin-top: 88px;padding-bottom: 10px;
    padding-top: 40px;" class="copareheading ah-compare-heading" id="printdivone">
    <div class="container" id="removecontainer">
       <div class="row">
         <div class="col-md-6">
            <h1>Compare Plans</h1>
         </div>
          <div class="col-md-6 text-right" id="removediv">
             <div class="d-flex">
               <div style="width: 80%;">
                  <a style="background: #5ea047;color: white !important;border-radius: 33px;width: 50%;" href="javascript:void(0)" onclick="javascript:printDiv()" class="btn btn-success">Print</a>
               </div>
                <div style="width: 50%;">
                  <a style="background: #5ea047;color: white !important;border-radius: 33px;width: 90%;" href="javascript:void(0)" onclick="showmodal()" class="btn btn-success"> Email Comparison </a>
               </div>
             </div>
          </div>
       </div>
    </div>
</section>
<div id="emailmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
         <div class="card card-popup-modal">
               <div class="subscribe-wrapper active">
                  <img src="https://assets.visitorscoverage.com/production/app/img/quote-results/subscribe.svg" alt="email icon" class="popup-modal__icon">
                  <div class="popup-modal__title">Email this comparison to yourself or a fellow traveler.</div>
                  <div>
                     <div class="popup-modal__content">
                        <p class="text-secondary-color"> We’ll send a link to come back and view these plans. </p>
                     </div>
                     <form id="sendemailform" method="POST" action="{{ url('sendcompareemail') }}">
                        @csrf
                     <input type="hidden"  name="compareid" value="{{ $id }}">
                     <div class="popup-modal__input-field">
                        <label class="form-input input-email">
                           <input type="text" name="email" placeholder="Enter an email address" class="input-field">
                           <span class="label-text">Email</span>
                           <div class="print-error-msg-login" style="display:none;background-color: white;">
                               <ul style="text-align:left;"></ul>
                           </div>
                        </label>
                     </div>
                     <button type="submit" id="sendemailbutton" class="button button-rounded button-primary"> Send </button>
                     </form>
                  </div>
               </div>
               <script type="text/javascript">
                  function closemodal() {
                     $('#emailmodal').modal('hide');
                  }
                  function showmodal() {
                     $('.subscribe-wrapper').addClass('active');
                     $('.subscribe-success-wrapper').removeClass('active');
                     $('#emailmodal').modal('show');
                  }
                  $('#sendemailform').on('submit', (function(e) {
                       $('#sendemailbutton').html('<i style="color:white;" class="fa fa-spin fa-spinner"></i>');
                       e.preventDefault();
                       var formData = new FormData(this);
                       $.ajax({
                           type: 'POST', 
                           url: $(this).attr('action'),
                           data: formData,
                           cache: false,
                           contentType: false,
                           processData: false,
                           success: function(data) {
                           if($.isEmptyObject(data.error)){
                              $('#sendemailbutton').html('Send');
                              $('.subscribe-wrapper').removeClass('active');
                              $('.subscribe-success-wrapper').addClass('active');
                              $(".print-error-msg-login").find("ul").html('');
                              $(".print-error-msg-login").css('display','none');
                              $('.input-field').val('');
                           }else{
                               $('#sendemailbutton').html('Send');
                               printErrorMsglogin(data.error);
                           }   
                           }
                       });
                   }));
               </script>
               <div class="subscribe-success-wrapper">
                  <img src="https://assets.visitorscoverage.com/production/app/img/quote-results/done.svg" alt="success icon" class="popup-modal__icon">
                  <div class="popup-modal__title">Your plan comparison have been sent!</div>
                  <div class="popup-modal__content">
                     <p class="text-secondary-color"> plan comparison mailed to <span class="popup-modal__user-email">.</span></p>
                     <p class="text-secondary-color"> If you have not received an email in your inbox, please check your spam or junk folder. </p>
                  </div>
                  <button onclick="closemodal()" class="button button-primary button-rounded"> Done </button>
               </div>
            </div>
    </div>

  </div>
</div>
<style>
   .comparerow{
      display: flex;
   }
   .comparebox{
      @if(DB::table('compare_plans')->where('comparenumber'  ,$id)->count() == 3)
         width: 33%;
      @else
         width: 48%;
      @endif
      margin: 5px;
      border-top: 5px solid #2b3481;
      border-radius: 10px;
   }
   .compareimagelogo{
      text-align: center;
   }
   .coverageanddeductibles{
      display: flex;
   }
   .coverageammount{
      width: 50%;
   }
   .deductibles{
      width: 50%;
      text-align: right;
   }
   .coverageanddeductibles h2{
      font-size: 18px;
   }
   .comparebox .card{
      box-shadow: 5px 5px 12px rgb(87 106 134 / 20%);
      border: none;
      border-radius: 10px;
   }
   .card-plan__pricing-row {
       padding-top: 20px;
       width: 100%;
       display: flex;
       justify-content: space-between;
   }
   .price-value {
       font-size: 32px;
       line-height: 40px;
       font-weight: 700;
       color: #2b3481;
   }
   .button{
      border-radius: 20px;
       height: 40px;
       font-size: 14px;
       font-weight: 700;
       line-height: 18px;
       color: #2b3481;
       border: 0;
       transition: .3s ease-in-out;
       outline: none;
       display: inline-flex;
       align-items: center;
       justify-content: center;
       padding: 10px 40px;
       color: #fff;
       background-color: #5ea047;
   }
   .headingcard{
      font-size: 20px;
       line-height: 28px;
       margin-bottom: 3px;
       margin-top: 3px;
       color: #12b48b;
       font-weight: 700;
   }
   #accordion .card{
      background-color: #fff;
      border-radius: 1rem;
      box-shadow: 0 10px 24px rgba(109,126,152,.08);
      border: none;
   }
   .card-header{
      background-color: white;
      border: none;
   }
   .plantittle h2{
      color: #2b3481;
      font-size: 22px;
      margin-bottom: 20px;
   }
   .panel-content__table-row{
      display: flex;
   }
   .panel-content-subheading
   {
      padding: 32px 30px 32px 24px;
      width: 20%;
       text-align: center;
       border: 1px solid #ddd;
       color: #2b3481;
       padding-left: 2rem;
       border-left: 0;
       border-left-width: 0px;
       border-left-style: initial;
       border-left-color: initial;
       font-weight: 700;
       font-size: 16px;
       line-height: 24px;
   }
   .panel-content__table-cell{
      @if(DB::table('compare_plans')->where('comparenumber'  ,$id)->count() == 3)
         width: 26%;
      @else
         width: 40%;
      @endif
       padding: 10px 10px 10px 20px;
       border-left: 1px solid #cfd9e8;
       border-top: 1px solid #cfd9e8;
       border-bottom: 1px solid #cfd9e8;
       color: #67778f;
       font-weight: 600;
       font-size: 16px;
       line-height: 24px;
       transition: .15s ease-in-out;
   }
   #accordion ul li{
          list-style: circle;
    margin-left: 10px;
   }
   @media only screen and (max-width:600px){
      .comparerow{
         overflow: auto;
      }
      .comparebox{
         width: 100% !important;
      }
      .price-value{
         margin-right: 50px !important;
      }
      #accordion{
         margin: 0px !important;
      }
      #PrintInvoice2{
         overflow: auto;
      }
      .quote-compare__spec-content{
         width: 1000px !important;
      }
   }
</style>
<section id="PrintInvoice1" class="card-slide ah-slider-setting">
   <div class="container" id="removeconta">
      <div class="comparerow" style="display: flex">
         @foreach(DB::table('compare_plans')->where('comparenumber'  ,$id)->get() as $r)
         @php
            $data = unserialize($r->savetoplan);
            $plan = DB::table('wp_dh_insurance_plans')->where('id' , $data['plan_id'])->first();
            $planname = $plan->plan_name;
            $insurance_company = $plan->insurance_company;
            $company = DB::table('wp_dh_companies')->where('comp_id' , $insurance_company)->first();
         @endphp
            <div class="comparebox" style="    width: 33%;
    margin: 5px;
    border-top: 5px solid #2b3481;
    border-radius: 10px;">
               <div class="card">
                  <div class="card-body">
                        <div class="plantittle">
                           <h2 style="    color: #2b3481;
    font-size: 22px;
    margin-bottom: 20px;">{{ $plan->plan_name }}</h2>
                        </div>
                        <div style="text-align: center" class="compareimagelogo">
                           <img  style="width:180px !important;height:80px;" src="{{ url('public/images') }}/{{ $company->comp_logo }}">
                        </div>
                        <div style="display: flex;" class="coverageanddeductibles mt-3">
                           <div style="width: 50%;" class="coverageammount">
                              <h2 style="font-size: 18px;">Coverage : ${{ $data['sum_insured'] }}</h2>
                           </div>
                           <div style="width: 50%;" class="deductibles">
                              <h2 style="font-size: 18px;">Deductible : ${{ $data['deductible'] }}</h2>
                           </div>
                        </div>
                        <div  style="    padding-top: 20px;
    width: 100%;
    display: flex;
    justify-content: space-between;" class="card-plan__pricing-row">
                           <div  class="plan-price subheading-2">
                              <span style="font-size: 32px;
    line-height: 40px;
    font-weight: 700;
    color: #2b3481;" class="price-value">${{ number_format($data['total_price'],2) }}</span>
                           </div>
                           <form method="POST" action="{{ url('apply') }}">
                                @csrf
                                <input type="hidden" value="{{ $data['savers_email'] }}" name="email">
                                <input type="hidden" value="{{ $data['fname'] }}" name="fname">
                                <input type="hidden" value="{{ $data['lname'] }}" name="lname">
                                <input type="hidden" value="{{ $data['sum_insured'] }}" name="coverage">
                                <input type="hidden" value="{{ $data['number_travelers'] }}" name="traveller">
                                <input type="hidden" value="{{ $data['deductible'] }}" name="deductibles">
                                <input type="hidden" value="{{ $data['deduct_rate'] }}" name="deductible_rate">
                                <input type="hidden" value="{{ $data['date_of_birth'] }}" name="person1">
                                @foreach($data['years'] as $year)
                                <input type="hidden" name="years[]" value="{{ $year }}">
                                @endforeach
                                @foreach($data['preexisting'] as $preexisting)
                                <input type="hidden" name="preexisting[]" value="{{ $preexisting }}">
                                @endforeach
                                <input type="hidden" value="{{ $data['num_of_days'] }}" name="days">
                                <input type="hidden" value="{{ $data['comp_name'] }}" name="companyName">
                                <input type="hidden" value="{{ $data['comp_id'] }}" name="comp_id">
                                <input type="hidden" value="{{ $data['plan_name'] }}" name="planname">
                                <input type="hidden" value="{{ $data['plan_id'] }}" name="plan_id">
                                <input type="hidden" value="{{ $data['startdate'] }}" name="tripdate">
                                <input type="hidden" value="{{ $data['enddate'] }}" name="tripend">
                                <input type="hidden" value="{{ $data['total_price'] }}" name="premium">
                                <input type="hidden" value="" name="cdestination">
                                <input type="hidden" value="{{ $data['product_name'] }}" name="product_name">
                                <input type="hidden" value="{{ $data['pro_id'] }}" name="product_id">
                                <input type="hidden" value="{{ $data['primary_destination'] }}" name="destination">
                                <input type="hidden" value="{{ $data['product_name'] }}" name="visitor_visa_type">
                                <input type="hidden" value="{{ $data['num_of_days'] }}" name="tripduration">
                                <input type="hidden" value="{{ $data['ages_array'] }}" name="age">
                                <div class="plan-card-cta-container">
                                 <button style="border-radius: 20px;
    height: 40px;
    font-size: 14px;
    font-weight: 700;
    line-height: 18px;
    color: #2b3481;
    border: 0;
    transition: .3s ease-in-out;
    outline: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 40px;
    color: #fff;
    background-color: #5ea047;" type="submit" class="button button-secondary">
                                    <span >Buy</span>
                                 </button>
                              </div>
                            </form>
                           
                        </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
</section>
<div id="PrintInvoice2" class="quote-compare__template container">
   <section class="quote-compare__spec-content" >
      <div class="grid-container">
          <div class="ah-accordain-wrapper">
              <div id="accordion">
                  @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'ASC')->get() as $r)
                  @if(DB::table('wp_dh_insurance_plans_benefits')->where('benifitcategory' , $r->id)->count() > 0)
                  <div class="card" style="margin-bottom: 20px;">
                      <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                              <span style="font-size: 20px; line-height: 28px; margin-bottom: 3px; color: #2b3481!important; width: 100%; text-align: left; outline: 0!important; display: flex; align-items: center; font-weight: 800;" class="btn headingcard" data-toggle="collapse" data-target="#collapse{{ $r->id }}" aria-expanded="true" aria-controls="collapse{{ $r->id }}">
                                 @if($r->icon)
                                 <img style="width: 40px;margin-right: 15px;" src="{{ url('public/images') }}/{{ $r->icon }}" alt="{{ $r->name }}">
                                 @endif
                                  {{ $r->name }}
                              </span>
                          </h5>
                      </div>
                      <div id="collapse{{ $r->id }}" class="collapse @if ($loop->first) show @endif" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body" style="padding:0px">
                              @foreach(DB::table('wp_dh_insurance_plans_benefits')->groupby('benefits_head')->orderby('order' , 'ASC')->where('benifitcategory' , $r->id)->get() as $b)
                              <div class="panel-content__table-row" style="display: flex;">
                                 <div  class="panel-content-subheading" style="padding: 32px 30px 32px 24px; width: 20%; text-align: center; border: 1px solid #ddd; color: #2b3481; padding-left: 2rem; border-left: 0; border-left-width: 0px; border-left-style: initial; border-left-color: initial; font-weight: 700; font-size: 16px; line-height: 24px;">
                                    <span  class="panel-content--heading--container">
                                       <div class="panel-content--heading">{{ $b->benefits_head }}</div>
                                    </span>
                                 </div>
                                 @foreach(DB::table('compare_plans')->where('comparenumber'  ,$id)->get() as $u)
                                 @php
                                    $h = unserialize($u->savetoplan);
                                    $plan = DB::table('wp_dh_insurance_plans')->where('id' , $h['plan_id'])->first();
                                    $planname = $plan->plan_name;
                                 @endphp
                                 <div class="panel-content__table-cell" style="    width: 26%; padding: 10px 10px 10px 20px; border-left: 1px solid #cfd9e8; border-top: 1px solid #cfd9e8; border-bottom: 1px solid #cfd9e8; color: #67778f; font-weight: 600; font-size: 16px; line-height: 24px; transition: .15s ease-in-out;">
                                    <div id="fw-500" class="text-content">@if(DB::table('wp_dh_insurance_plans_benefits')->where('plan_id' , $h['plan_id'])->where('benefits_head' , $b->benefits_head)->first()){!! DB::table('wp_dh_insurance_plans_benefits')->where('plan_id' , $h['plan_id'])->where('benefits_head' , $b->benefits_head)->first()->benefits_desc !!} @else N/A @endif</div>
                                 </div>
                                 @endforeach
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
                  @endif
                  @endforeach
              </div>
          </div>
      </div>
   </section>
   <section class="quote-compare__disclaimer ah_compare__disclaimer" style="padding-top:0;" >
      <div class="grid-container">
         <div class="grid-row">
            <div class="grid-col-12">
               <h5 class="heading-5 text-secondary-color">Disclaimer</h5>
               <p class="text-secondary-color">
                  Disclaimer: Please note that the information above is only a summarized representation of certain definitions, conditions as well as insurance benefits covered by selected and displayed medical emergency insurance plans. Some of the insurance benefits require pre-authorization and arrangement by the insurance company before any payments will be made to cover the corresponding expenses. Moreover, some of the insured services are covered only on a reimbursement basis. In order to see a complete and detailed description of each insurance benefit, terms and/or policy's conditions, please read the official Policy Wording issued by each insurance provider. Policy Wordings for the displayed plans can be accessed by clicking on the "Click to View" link at the bottom of each comparison report. If you have any questions about a particular policy, benefit, term and/or condition, please contact one of our Insurance professional at 855-500-5041 or email us at info@lifeadvice.ca
               </p>
            </div>
         </div>
      </div>
   </section>
</div>
<style type="text/css">
   .expandbenifitpanel{
      max-height: 100% !important;
      height: 100%;
   }
</style>
<script type="text/javascript">
   function showbenifitpanel(id) {
      var element = document.getElementById("benifitpaneltoshow"+id);
      element.classList.toggle("expandbenifitpanel");
   }
</script>
@endsection
