<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/25/css/main.e400e25c.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/25/css/chunk-39e264fa.df1c4bac.css">
<link rel="stylesheet" type="text/css" href="https://assets.visitorscoverage.com/production/app/vue-builds/25/css/chunk-676de1c8.17873b80.css">
<main data-v-89c571b4="" class="LayoutDefaultMain">
<?php
$startdate = $request->departure_date;
$enddate = $request->return_date;

$dStart = new DateTime($request->departure_date);
$dEnd  = new DateTime($request->return_date);
$dDiff = $dStart->diff($dEnd);
$dDiff->format('%R'); // use for point out relation: smaller/greater
$num_of_days = $dDiff->days;
if($num_of_days > 365 || $num_of_days == 364){ $num_of_days = 365; }

$product_id = $request->product_id;
$product = DB::table('wp_dh_products')->where('pro_id' , $product_id)->first();
$product_name = $product->pro_name;
$rate=explode(",", rtrim($request->rate));
?>
<?php
      $planid=explode(",", rtrim($_REQUEST['ids']));
?>
   <div data-v-89c571b4="" class="quote-compare__template">
      <section data-v-7ed33357="" class="hero hero-quote-compare" data-v-89c571b4="">
         <div data-v-7ed33357="" class="grid-container">
            <div data-v-7ed33357="" class="grid-row mb-3">
               <div data-v-7ed33357="" class="quote-compare__heading-row top-row">
                  <div data-v-7ed33357="" class="breadCrumbs grid-container-lg-fluid">
                     <div class="page-breadcrumbs-wrapper">
                        <ul class="v-breadcrumbs theme--light">
                           <a href="javascript:void(0)" aria-current="page" class="v-breadcrumbs__item router-link-exact-active router-link-active"><span>Compare Plans</span></a>
                        </ul>
                     </div>
                  </div>
                  <div data-v-7ed33357="" class="mail-btn-wrap d-flex"><a style=" width: 100%; font-size: 13px; text-align: center; padding: 0; " href="javascript:void(0)" onclick="javascript:window.print()" class="button button-primary button-rounded">Print</a><a href="{{ url('sendcompareemail') }}?email={{$request->email}}&product_id={{$request->product_id}}&ids={{$request->ids}}&default_value={{$request->default_value}}&price_value={{$request->price_value}}&rate={{$request->rate}}" style=" width: 100%; font-size: 13px; text-align: center; padding: 0; " class="button button-primary button-rounded"> Email Comparison </a></div>
               </div>
            </div>
            <div data-v-7ed33357="" class="grid-row quote-compare__cards-row">


               <?php 
               for($i=0;$i<count($planid);$i++){
                  $plan = DB::table('wp_dh_insurance_plans')->where('id' , $planid[$i])->first();
                  $planname = $plan->plan_name;
               ?>
               <div data-v-7ed33357="" class="grid-col-4 col_card-plan">
                  <div data-v-7ed33357="" class="card card-plan card-plan--compare" style="--data-color:#ff6600;">
                     <div class="plan-label heading-4">
                        <div class="d-flex">
                           <span style="height:80px;"><?php echo $planname;?></span>
                        </div>
                     </div>
                     <p class="plan-subheading body-text-3 text-secondary-color">Coverage : </p>
                     <!----><!---->
                     <div class="card-plan__pricing-row">
                        <div class="plan-price subheading-2"><span><span class="price-value"><span style="font-size: 14px;">$ <?php echo number_format($rate[$i],2); ?></span></span><span class="price-currency text-secondary-color">USD</span></span></div>
                        <div data-v-3ca452d8="" class="plan-card-cta-container">
                           <a style="padding: 0px 41px;" data-v-3ca452d8="" href="/visitor-insurance/choiceamerica/?quote_id=7115057&amp;source=compare" class="button button-secondary button-rounded button-buy cta-buy-choiceamerica-img">
                              <span data-v-3ca452d8="">Buy</span><!---->
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <section class="quote-compare__disclaimer" style="padding-top:0;" data-v-89c571b4="">
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
</main>