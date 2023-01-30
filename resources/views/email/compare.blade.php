<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <head>
      <title>
      </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">
      </style>
      <style type="text/css">
         @media only screen and (max-width:480px) {
         @-ms-viewport {
         width: 320px;
         }
         @viewport {
         width: 320px;
         }
         }
         .table-bordered td, .table-bordered th {
         border: 1px solid #dee2e6;
         }
         .table td, .table th {
         padding: 0.75rem;
         vertical-align: top;
         border-top: 1px solid #dee2e6;
         }
         .table>tbody>tr>td {
         font-size: 13px;
         max-width: 274px;
         }
         tr td:first-of-type, tr th:first-of-type {
         font-weight: 700;
         color: #F0AD4E;
         }
         img.img-responsive {
         display: inline-block;
         }
      </style>
      <style type="text/css">
         @media only screen and (min-width:480px) {
         .mj-column-per-100 {
         width: 100% !important;
         }
         }
         *, ::after, ::before {
         box-sizing: border-box;
         }
         h1, h2, h3, h4, h5, h6 {
         margin: 0;
         color: #000;
         margin: 0 0 30px 0;
         line-height: 1.5;
         -webkit-font-smoothing: antialiased;
         }
         .btn-success.disabled, .btn-success:disabled {
         color: #fff;
         background-color: #28a745;
         border-color: #28a745;
         }
         .btn.disabled, .btn:disabled {
         opacity: .65;
         }
         .btn, .form-control {
         height: 40px;
         }
         .smallhead {
         text-transform: uppercase;
         color: #fff !important;
         background: #515d63;
         }
         .btn>i {
         padding-right: 6px;
         }
         .btn {
         display: inline-block;
         font-weight: 400;
         color: #212529;
         text-align: center;
         vertical-align: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         background-color: transparent;
         border: 1px solid transparent;
         padding: 0.375rem 0.75rem;
         font-size: 1rem;
         line-height: 1.5;
         border-radius: 0.25rem;
         transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
         }
         a {
         -webkit-transition: all .300s;
         -moz-transition: all .300s;
         -o-transition: all .300s;
         transition: all .300s;
         }
         a, a:focus, a:hover, a:active {
         outline: 0;
         cursor: pointer;
         }
         a {
         color: #007bff;
         text-decoration: none;
         background-color: transparent;
         }
         .text-danger {
         color: #b92c28 !important;
         }
         .btn{
         cursor: pointer;
         }
      </style>
   </head>
   <body>
    <?php
        $planid=explode(",", rtrim($_REQUEST['ids']));
    ?>
      <div class="container-fluid" style="text-align: center; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
         <h1 style="font-size: 24px;font-weight: bold;color: #005d9a; margin: 0 0 44px 0;">Compare and Buy Super Visa Insurance Plans</h1>
         <div style="justify-content: center; text-align: center; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; position: relative; width: 100%; padding-right: 15px; padding-left: 15px"></div>
         <table class="table" style="border: 1px solid #dee2e6;width: 100%; margin-bottom: 1rem; color: #212529;margin: 0; border-collapse: collapse">
            <tbody>
               <tr style="background:#239b7a;">
                  <td rowspan="2" style="text-align:center;color: #FFF;font-size: 16px;max-width: 274px;font-weight: 700;border: 1px solid #dee2e6;padding: 0.75rem;vertical-align: top;">
                     <h3 style="background:#45bd9c; padding:3px; font-size:41px; text-align:center;color:#FFF;margin: 0;margin-bottom: 10px;"><?php echo count($planid);?></h3>
                     Plans Selected for Comparison>
                  </td>
                  <?php 
                    for($i=0;$i<count($planid);$i++){
                        $plan = DB::table('wp_dh_insurance_plans')->where('id' , $planid[$i])->first();
                        $planname = $plan->plan_name;
                    ?>
                  <th style="color:#FFF; text-align:center; font-weight:bold; font-size:18px;"><?php echo $planname;?></th>
                  <?php } ?>
               </tr>
               <tr>
                <?php 
                $planid=explode(",", rtrim($request->ids));
                $rate=explode(",", rtrim($request->rate));
                for($i=0;$i<count($planid);$i++){
                $compy = DB::select("SELECT * FROM `wp_dh_companies` WHERE `comp_id`= (SELECT `insurance_company` FROM `wp_dh_insurance_plans` WHERE `id`='".$planid[$i]."')");
                ?>
                  <td align="center"><img src="{{ url('public/images') }}/{{ $compy[0]->comp_logo }}" alt="Travlance Insurance" class="img-responsive" height="70" width="200" style="width:200px"></td>
                <?php } ?>
               </tr>
               <tr style="border: 1px solid #dee2e6;">
                  <td style="font-size: 13px; max-width: 274px; background-color: #515d63;    padding: 0.75rem; color: white;">PREMIUM</td>
                  <?php for($i=0;$i<count($planid);$i++){?>
                  <td style="text-align: center;font-size: 28px;font-weight: bold;color: #C00;">$ <?php echo number_format($rate[$i],2); ?></td>
                  <?php } ?>
               </tr>
               <tr style="border: 1px solid #dee2e6;">
                  <td style="font-size: 13px; max-width: 274px; background-color: #515d63;    padding: 0.75rem; color: white;"></td>
                  <td>
                    <a href="#">
                        <button style="opacity: .65; display: block; margin: 14px auto 11px auto; font-weight: bold; color: #fff; background-color: #28a745; border-color: #28a745; border: 1px solid transparent; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border-radius: 0.25rem; transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;"  onclick="window.location='tab_buy.php?coverage=989.88&amp;traveller=1&amp;companyName=Travlance Insurance&amp;comp_id=2&amp;planname=Essential Plan&amp;tripdate=&amp;tripend=&amp;premium=989.88&amp;cdestination=&amp;product_name=Super Visa Insurance&amp;country=&amp;visitor_visa_type=Super Visa Insurance&amp;tripduration=0'"><i class="fa fa-shopping-cart"></i> Buy Now</button>
                    </a>
                  </td>
                  <td>
                    <a href="#">
                        <button style="opacity: .65; display: block; margin: 14px auto 11px auto; font-weight: bold; color: #fff; background-color: #28a745; border-color: #28a745; border: 1px solid transparent; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border-radius: 0.25rem; transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;"  onclick="window.location='tab_buy.php?coverage=1419.12&amp;traveller=1&amp;companyName=Travlance Insurance&amp;comp_id=2&amp;planname=Premier Plan&amp;tripdate=&amp;tripend=&amp;premium=1419.12&amp;cdestination=&amp;product_name=Super Visa Insurance&amp;country=&amp;visitor_visa_type=Super Visa Insurance&amp;tripduration=0'"><i class="fa fa-shopping-cart"></i> Buy Now</button>
                    </a>
                  </td>
               </tr>
               <?php
                $feat = DB::select("SELECT * FROM `wp_dh_insurance_plans_benefits` WHERE `plan_id` IN (".$_REQUEST['ids'].") GROUP BY `benefits_head`");
                foreach($feat as $feature){
                $benefits_head = $feature->benefits_head;
                
                ?>
               <tr style="border: 1px solid #dee2e6;">
                  <td style="font-size: 13px; max-width: 274px; background-color: #515d63;    padding: 0.75rem; color: white;"><?php echo $benefits_head; ?></td>
                  <?php for($i=0;$i<count($planid);$i++){
            
                     $feades_q = DB::table('wp_dh_insurance_plans_benefits')->where('plan_id' , $planid[$i])->where('benefits_head' , $benefits_head)->first();
                    
                    ?>
                  <td>@if($feades_q){{$feades_q->benefits_desc}}@endif</td>
                  <?php } ?>
               </tr>
               <?php } ?>
               <tr style="border: 1px solid #dee2e6;">
                  <td style="font-size: 13px; max-width: 274px; background-color: #515d63;    padding: 0.75rem; color: white;"></td>
                  <td>
                    <a href="#">
                        <button style="opacity: .65; display: block; margin: 14px auto 11px auto; font-weight: bold; color: #fff; background-color: #28a745; border-color: #28a745; border: 1px solid transparent; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border-radius: 0.25rem; transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;"  onclick="window.location='tab_buy.php?coverage=989.88&amp;traveller=1&amp;companyName=Travlance Insurance&amp;comp_id=2&amp;planname=Essential Plan&amp;tripdate=&amp;tripend=&amp;premium=989.88&amp;cdestination=&amp;product_name=Super Visa Insurance&amp;country=&amp;visitor_visa_type=Super Visa Insurance&amp;tripduration=0'"><i class="fa fa-shopping-cart"></i> Buy Now</button>
                    </a>
                  </td>
                  <td>
                    <a href="#">
                        <button   style="opacity: .65; display: block; margin: 14px auto 11px auto; font-weight: bold; color: #fff; background-color: #28a745; border-color: #28a745; border: 1px solid transparent; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border-radius: 0.25rem; transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;"  onclick="window.location='tab_buy.php?coverage=1419.12&amp;traveller=1&amp;companyName=Travlance Insurance&amp;comp_id=2&amp;planname=Premier Plan&amp;tripdate=&amp;tripend=&amp;premium=1419.12&amp;cdestination=&amp;product_name=Super Visa Insurance&amp;country=&amp;visitor_visa_type=Super Visa Insurance&amp;tripduration=0'"><i class="fa fa-shopping-cart"></i> Buy Now</button>
                    </a>
                  </td>
               </tr>
            </tbody>
         </table>
         <table>
            <tbody>
               <tr>
                  <td>
                     <div class="disclaimer">
                        <p style="font-weight: 700; color: #F0AD4E; text-align: justify; line-height: 20px;"><i class="fa fa-lightbulb-o mr-1" style="font-size: 27px;color: #2b3481;"></i>Disclaimer: Please note that the information above is only a summarized representation of certain definitions, conditions as well as insurance benefits covered by selected and displayed medical emergency insurance plans. Some of the insurance benefits require pre-authorization and arrangement by the insurance company before any payments will be made to cover the corresponding expenses. Moreover, some of the insured services are covered only on a reimbursement basis. In order to see a complete and detailed description of each insurance benefit, terms and/or policy's conditions, please read the official Policy Wording issued by each insurance provider. Policy Wordings for the displayed plans can be accessed by clicking on the "Click to View" link at the bottom of each comparison report. If you have any questions about a particular policy, benefit, term and/or condition, please contact one of our Insurance professional at 855-500-5041 or email us at info@lifeadvice.ca</p>
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </body>
</html>