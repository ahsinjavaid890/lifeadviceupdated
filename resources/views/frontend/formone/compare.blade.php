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


<section class="card-slide ah-slider-setting">
   <div class="container-homepage">
   <div class="wrapper">
      <!-- Контент -->
      <div class="slider">
         @foreach(DB::table('compare_plans')->where('comparenumber'  ,$id)->get() as $r)
         @php
            $plan = DB::table('wp_dh_insurance_plans')->where('id' , $r->plan_id)->first();
            $planname = $plan->plan_name;
            $insurance_company = $plan->insurance_company;
            $company = DB::table('wp_dh_companies')->where('comp_id' , $insurance_company)->first();
         @endphp
         <div class="slider__item">
            <div class="card slider-card border-0">
               <div class="card-body text-center">
                  <div class="simple-online-transparent-slider">
                       <img src="{{ url('public/images') }}/{{ $company->comp_logo }}">
                  </div>
                  <div class="slider-heading">
                     <h2>Coverage : ${{ $r->coverage_ammount }}</h2>
                  </div>
                  <div class="slider-pargraph">
                     <p>$ <?php echo number_format($r->price,2); ?></p>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   <script type="text/javascript">
      $(document).ready(function() {
        $(".slider").slick({
          arrows: true,
          nextArrow: '<button class="slickarrowsnext"><i class="fa fa-solid fa-arrow-right  slick-next"></i></button>',
          prevArrow: '<button class="slickarrowsprevious"><i class="fa fa-solid fa-arrow-left slick-prev"></i></button>',
          dots: false,
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: false,
          speed: 900,
          autoplaySpeed: 700,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                  slidesToScroll: 1,
              }
            },
            {
              breakpoint: 550,
              settings: {
                slidesToShow: 1,
                  slidesToScroll: 1,
              }
            }
          ]
        });
      });

   </script>
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
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $r->id }}" aria-expanded="true" aria-controls="collapse{{ $r->id }}">
                                     <img  src="{{ url('public/images') }}/{{ $r->icon }}" alt="Overview">
                                     {{ $r->name }}
                                 </button>
                             </h5>
                         </div>

                         <div id="collapse{{ $r->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                             <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
            <div  class="grid-row">
               <div  class="grid-col-12">
                  <div  class="spec-content__expansion-panels">
                     @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'desc')->get() as $r)
                     <div onclick="showbenifitpanel({{$r->id}})" id="benefit-panel-{{ $r->id }}" class="expansion-panel mb-3">
                        <div  class="expansion-panel__header">
                           <div class="panel-header-icon">
                               <img  src="{{ url('public/images') }}/{{ $r->icon }}" alt="Overview">
                           </div>
                           <div class="panel-header-text">
                              <h3 class="header-title heading-4">{{ $r->name }}</h3>
                              <!-- <h4 class="header-subtitle body-text-2 text-secondary-color"> {{ $r->description }} </h4> -->
                           </div>
                           <i  class="icon icon-chevron-down"></i>
                        </div>
                        <div class="expansion-panel__content" id="benifitpaneltoshow{{ $r->id }}">
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
                     @endforeach
                  </div>
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
