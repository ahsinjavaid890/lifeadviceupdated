<?php

$arrr = $request->mailitem;

function object_to_array($object)
{
   return (array) $object;
}
$buynowurl = $arrr[0]['url'];
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
   <body style="background-color:#2b3481; font-family: 'Open Sans', sans-serif;padding: 50px;">
      <div style="max-width: 70%;margin-top: 70px !important; margin: auto;background-color: white;">
         <div style="text-align: center;">
            <img style="width: 200px;" src="https://lifeadvice.ca/public/images/118135255.png">
         </div>
         <div style="width:100%; background:#41c3bb">
            <h1 style="font:bold 28px Arial, Helvetica, sans-serif; color:#fff; text-align:center; line-height:80px;">Here's Your Quotes
            <?php
            $countertop = 0;
            $dumy = 1 ;
            foreach ($arrr as $key):
               $key=object_to_array($key);
                if($key['deductible']==$countertop && $dumy<2):
              $dumy++;
             ?>
                  <?=$key['planproduct'];?></h1>
                <?php endif;
             endforeach; ?>
        </div>
         <div style="max-width: 90%;margin: auto; margin-bottom: 10px !important;">
            @if($request->fname)
            <h6>Hey {{ $request->fname }} {{ $request->lname }},</h6>
            @endif
            <p>To take your travel insurance. Click on buy now us a call at <span style="font-weight: 800;color: red;">+1-855-500-8999</span></p>
         </div>
         <div style="max-width: 100%;text-align: center; padding: 1px;background-color: #ffa500;color: white;">
            <p>Your Visitor Insurance Qoute</p>
         </div>
         <table style="width: 100%;">
         <thead>
            <tr>
               <th style="padding: 10px; font-size: 45px; width: 100%;">$0</th>
            </tr>
            <tr>
               <th style="display: flex; justify-content: space-around;">
                  <table style="width: 50%;border: 1px solid #dddddd;">
                     <tr>
                        <th style="padding: 30px;">$50.17</th>
                     </tr>
                  </table>
                  <table style="width: 50%;border: 1px solid #dddddd;">
            <tr>
               <th>
                  <img src="http://localhost/lifeadvicelaravel/public/images/191020200955_21_century_log.jpg">
               </th>
            </tr>
            </table style="width: 50%;border: 1px solid #dddddd;">
            <table  style="width: 50%;border: 1px solid #dddddd;">
               <tr>
                  <th>
                     <a href="#"><button style="cursor: pointer;background-color: #2b3481; color: white; border: 0; padding: 10px; border-radius: 4px; width: 102px;">Buy Now</button></a>
                  </th>
               </tr>
            </table>
            </th>
            </tr>
            <tr>
               <th style="display: flex; justify-content: space-around;">
                  <table style="width: 50%;border: 1px solid #dddddd;">
                     <tr>
                        <th  style="padding: 30px;">$50.17</th>
                     </tr>
                  </table>
                  <table style="width: 50%;border: 1px solid #dddddd;">
            <tr>
               <th>
                  <img src="http://localhost/lifeadvicelaravel/public/images/191020200955_21_century_log.jpg">
               </th>
            </tr>
            </table style="width: 50%;border: 1px solid #dddddd;">
            <table style="width: 50%;border: 1px solid #dddddd;">
               <tr>
                  <th >
                     <a href="#"><button style="cursor: pointer;background-color: #2b3481; color: white; border: 0; padding: 10px; border-radius: 4px; width: 102px;">Buy Now</button></a>
                  </th>
               </tr>
            </table>
            </th>
            </tr>
            <tr>
               <th style="display: flex; justify-content: space-around;">
                  <table style="width: 50%;border: 1px solid #dddddd;">
                     <tr>
                        <th style="padding: 30px;">$50.17</th>
                     </tr>
                  </table>
                  <table style="width: 50%;border: 1px solid #dddddd;">
                     <tr>
                        <th>
                           <img src="http://localhost/lifeadvicelaravel/public/images/191020200955_21_century_log.jpg">
                        </th>
                     </tr>
                     </table style="width: 50%;border: 1px solid #dddddd;">
                     <table style="width: 50%;border: 1px solid #dddddd;">
                        <tr>
                           <th>
                              <a href="#"><button style="cursor: pointer;background-color: #2b3481; color: white; border: 0; padding: 10px; border-radius: 4px; width: 102px;">Buy Now</button></a>
                           </th>
                        </tr>
                     </table>
                     </th>
                     </tr>
                     </thead>
                  </table>
      </div>
   </body>
</html>