<?php

$arrr = $mailitem;
function object_to_array($object)
{
   return (array) $object;
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
   <head>
      <title>
      </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">
         body {
         margin: 0;
         padding: 0;
         -webkit-text-size-adjust: 100%;
         -ms-text-size-adjust: 100%;
         }
         table,
         td {
         border-collapse: collapse;
         mso-table-lspace: 0pt;
         mso-table-rspace: 0pt;
         }
         img {
         border: 0;
         height: auto;
         line-height: 100%;
         outline: none;
         text-decoration: none;
         -ms-interpolation-mode: bicubic;
         }
         p {
         display: block;
         margin: 13px 0;
         }
         .invoice tr th{
         padding: 2px 13px 5px 0 !important;
         border: 1px solid;
         }
         .invoice tr td{
         padding: 2px 13px 5px 5px;
         border: 1px solid !important;
         }
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
      </style>
      <style type="text/css">
         @media only screen and (min-width:480px) {
         .mj-column-per-100 {
         width: 100% !important;
         }
         }
      </style>
   </head>
   <body style="background-color:#f4f7fa; font-family: 'Open Sans', sans-serif;padding: 50px;">
      <div style="max-width: 70%;margin-top: 70px !important; margin: auto;background-color: white;">
         <div style="text-align: left; margin-left:30px;">
            <img style="width: 200px;" src="https://lifeadvice.ca/public/images/118135255.png">
         </div>
         <div style="width:100%; background:#41c3bb">
            <img src="https://lifeadvice.ca/public/images/emailimage.png" style="width:100%">
        </div>
        <div style="width:100%; margin-bottom:10px;">
            <h2 style="font:bold 16px Arial, Helvetica, sans-serif; color:#333; line-height:50px; margin:0 0 0 20px;">Dear Customer,</h2>
             <p style="font:normal 14px Arial, Helvetica, sans-serif; color:#333; line-height:24px; margin:0 0 0 20px;">Quote # <?php echo $quoteNumber; ?></p>
            <p style="font:normal 14px Arial, Helvetica, sans-serif; color:#333; line-height:24px; margin:0 0 0 20px;">Thank you for visiting our website</p>
            <p style="font:normal 14px Arial, Helvetica, sans-serif; color:#333; line-height:24px;  margin:0 0 0 20px;">
               to comparing Quote on our website to buy the policy click <a href="https://lifeadvice.ca" style="font:bold 14px Arial, Helvetica, sans-serif; color:#eb342b; text-decoration:none;"> Buy Now</a> or Call Us at
                <a href="tel:8555005041" style="font:bold 14px Arial, Helvetica, sans-serif; color:#eb342b; text-decoration:none;">1855-500-5041</a></p>
        </div>
        <div style="width:100%; background:#faad2f">
            <h2 style="font:normal 16px Arial, Helvetica, sans-serif; color:#fff; line-height:36px; text-align:center;">
                Lowest Price on following deductibles
            </h2>
        </div>
        <?php
        $ded = ['0','250','500','1000'];
        for($i=0;$i<count($ded);$i++){?>
                <div style="width:100%;border-bottom:1px solid #ccc">
                    <h3 style="font:bold 26px Arial,Helvetica,sans-serif;color:#f00;text-align:center;line-height:50px">
                        $<?=$ded[$i]?> Deductible
                    </h3>
                </div>
            <?php
            $counter=0;
            foreach ($arrr as $key){
            $key=object_to_array($key);
            //print_r($key);
                if($key['deductible']==$ded[$i] && $counter<2){
                    $counter++;
            //$key['logo'];   
               ?>
                <div style="width:100%; border-bottom:1px solid #ccc;padding:10px 0;">
                    <div style="width:30%; display:inline-block;height: 47px; color: darkred;float: left">
                        <h4 style="font:bold 26px Arial, Helvetica, sans-serif; color:#333; text-align:center;display: table-cell;vertical-align: middle;height: 72px;width: 222px;line-height: 42px;">$
                   <?php
                    $check_total = isset($key['check_total']) ? $key['check_total'] : '';
                   if($check_total=="1") {
                 $totalPrice1=round($key['price']+$key['flatrate_price']);
                                         if($key['sales_tax']!="" && $key['sales_tax']!='9% quebec')
                              {
                                $totalPrice1=$totalPrice1+($totalPrice1*8)/100;
                              }
                              elseif($key['sales_tax']!="" && $key['sales_tax']=='9% quebec')
                              {
                                $totalPrice1=$totalPrice1+($totalPrice1*9)/100;
                              }
                    ?>
          <?= sprintf('%.2f',$totalPrice1,2);  } else { ?>  <?= sprintf('%.2f',round($key['price'],2));} ?></h4>
                    </div>
                    <div style="width:30%; display:inline-block;text-align:center;float: left">
                        <img src="https://lifeadvice.ca/public/images/<? echo $key['logo']?>" style="max-width: 100%;max-height:72px" >
                    </div>
               <div style="width:30%; display:inline-block;text-align:center;float: left; padding-top:15px;">
                   <h4 style="font:bold 18px Arial, Helvetica, sans-serif; color:#333; text-align:center;display: block;vertical-align: middle;margin:0;">$<?=$key['sum_insured']?></h4> Benefits Maximum
               </div>
               <div style="width:10%; display:inline-block;text-align:center;float: left; padding-top:15px;">
                   <a href="https://lifeadvice.ca" class="buynow-btn" class="btn btn-lg btn-danger" name="buynow" style="padding: 10px;float: right;min-width: 100%;background: #F46D00;color:#FFF;width: 100%;border-radius: 5px;font-weight: bold;">Buy Now
                        </a>
               </div>
                    <div style="clear:both;"></div>
                </div>
                <?php }
            }
        } ?>
      </div>
   </body>
</html>