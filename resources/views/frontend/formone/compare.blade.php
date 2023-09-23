@extends('frontend.layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('public/front/css/comparecsstwo.css') }}">
<section class="copareheading ah-compare-heading">
    <div class="container">
       <div class="row">
         <div class="col-md-6">
            <h1>Compare Plans</h1>
         </div>
          <div class="col-md-6 text-right">
             <div class="d-flex">
               <div style="width: 80%;">
                  <a style="background: #5ea047;color: white !important;border-radius: 33px;width: 50%;" href="javascript:void(0)" onclick="javascript:window.print()" class="btn btn-success">Print</a>
               </div>
                <div style="width: 50%;">
                  <a style="background: #5ea047;color: white !important;border-radius: 33px;width: 90%;" href="{{ url('sendcompareemail') }}" class="btn btn-success"> Email Comparison </a>
               </div>
             </div>
          </div>
       </div>
    </div>
</section>
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
</style>
<section class="card-slide ah-slider-setting">
   <div class="container">
      <!-- Контент -->

      <div class="comparerow">
         @foreach(DB::table('compare_plans')->where('comparenumber'  ,$id)->get() as $r)
         @php
            $plan = DB::table('wp_dh_insurance_plans')->where('id' , $r->plan_id)->first();
            $planname = $plan->plan_name;
            $insurance_company = $plan->insurance_company;
            $company = DB::table('wp_dh_companies')->where('comp_id' , $insurance_company)->first();
         @endphp
            <div class="comparebox">
                  <div class="card">
                        <div class="card-body">
                              <div class="compareimagelogo">
                                 <img  style="width:180px !important;height:80px;" src="{{ url('public/images') }}/{{ $company->comp_logo }}">
                              </div>
                              <div class="coverageanddeductibles mt-3">
                                 <div class="coverageammount">
                                    <h2>Coverage : ${{ $r->coverage_ammount }}</h2>
                                 </div>
                                 <div class="deductibles">
                                    <h2>Deductible : ${{ $r->deductibles }}</h2>
                                 </div>
                              </div>
                              <div  class="card-plan__pricing-row">
                                 <div  class="plan-price subheading-2">
                                    <span class="price-value">${{ number_format($r->price,2) }}</span>
                                 </div>
                                 <div class="plan-card-cta-container">
                                    <a href="" class="button button-secondary">
                                       <span >Buy</span><!---->
                                    </a>
                                 </div>
                              </div>
                        </div>
                  </div>
            </div>
         @endforeach
      </div>
</section>
   <div  class="quote-compare__template container-homepage">
      <section class="quote-compare__spec-content" >
         <div class="grid-container">
            <div  class="grid-row pt-3">
               <div  class="grid-col highlight-diff">
                  <!---->
               </div>
            </div>
             <div class="ah-accordain-wrapper">
                 <div id="accordion">
                     @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'desc')->get() as $r)
                     <div class="card">
                         <div class="card-header" id="headingOne">
                             <h5 class="mb-0">
                                 <span class="btn headingcard" data-toggle="collapse" data-target="#collapse{{ $r->id }}" aria-expanded="true" aria-controls="collapse{{ $r->id }}">
                                     <img  src="{{ url('public/images') }}/{{ $r->icon }}" alt="Overview">
                                     {{ $r->name }}
                                 </span>
                             </h5>
                         </div>

                         <div id="collapse{{ $r->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                             <div class="card-body">
                                 @foreach(DB::table('wp_dh_insurance_plans_benefits')->where('benifitcategory' , $r->id)->get() as $b)
                                 <div class="panel-content__table-row">
                                    <div  class="panel-content__table-cell panel-content-subheading">
                                       <span  class="panel-content--heading--container">
                                          <div class="panel-content--heading">{{ $b->benefits_head }}</div>
                                       </span>
                                    </div>
                                    @foreach(DB::table('compare_plans')->where('comparenumber'  ,$id)->get() as $h)
                                    <?php
                                          $plan = DB::table('wp_dh_insurance_plans')->where('id' , $h->plan_id)->first();
                                          $planname = $plan->plan_name;
                                       ?>

                                    <div class="panel-content__table-cell">
                                       <div id="fw-500" class="text-content">@if(DB::table('wp_dh_insurance_plans_benefits')->where('plan_id' , $h->plan_id)->where('benefits_head' , $b->benefits_head)->first()){{ DB::table('wp_dh_insurance_plans_benefits')->where('plan_id' , $h->plan_id)->where('benefits_head' , $b->benefits_head)->first()->benefits_desc }} @else N/A @endif</div>
                                    </div>
                                    @endforeach
                                 </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
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
      <!---->
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
