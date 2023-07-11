<?php

$arrr = $mailitem;
function object_to_array($object)
{
   return (array) $object;
}
?>
<center>
   <div>
      <table bgcolor="#f4f7fa" border="0" cellpadding="0" cellspacing="0" width="100%">
         <tbody>
            <tr>
               <td bgcolor="#f4f7fa" valign="top" width="100%">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="content-container" width="100%">
                     <tbody>
                        <tr>
                           <td width="100%">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                 <tbody>
                                    <tr>
                                       <td>
                                          <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px" width="100%">
                                             <tbody>
                                                <tr>
                                                   <td align="left" bgcolor="#FFFFFF" role="modules-container" style="padding:0px 0px 0px 0px;color:#67778f;text-align:left" width="100%">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="module" style="display:none!important;opacity:0;color:transparent;height:0;width:0" width="100%">
                                                         <tbody>
                                                            <tr>
                                                               <td role="module-content">
                                                                  <p>&nbsp;</p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                                         <tbody>
                                                            <tr>
                                                               <td align="left" style="font-size:6px;line-height:10px;padding:12px 0px 14px 15px" valign="top"><img alt="" border="0" height="41" src="https://lifeadvice.ca/public/images/118135255.png" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica,arial,sans-serif;font-size:16px" width="200" class="CToWUd" data-bit="iit"></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" role="module" style="padding:0px 0px 0px 0px" width="100%">
                                                         <tbody>
                                                            <tr role="module-content">
                                                               <td height="100%" valign="top">
                                                                  <table align="left" bgcolor="" border="0" cellpadding="0" cellspacing="0" style="width:600px;border-spacing:0;border-collapse:collapse;margin:0px 0px 0px 0px" width="600">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td style="padding:0px;margin:0px;border-spacing:0">
                                                                              <table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                                                                 <tbody>
                                                                                    <tr>
                                                                                       <td align="center" style="font-size:6px;line-height:10px;padding:0px 0px 0px 0px" valign="top"><a href="https://www.google.com/search?q=life+advice+insurance+inc&rlz=1C1UEAD_enPK975PK975&oq=life+advice+insurance+inc&aqs=chrome..69i57j0i8i15i30j0i390l7.11008j1j9&sourceid=chrome&ie=UTF-8#lrd=0x882bf5f3329ed419:0x669c2fe4071dc2ef,1,," target="_blank"><img alt="" border="0" src="https://lifeadvice.ca/public/images/emailimage.png" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica,arial,sans-serif;font-size:16px;max-width:100%!important;width:100%;height:auto!important" width="600" class="CToWUd" data-bit="iit"></a></td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>

                                                      
                                                      <div style="width:100%; margin-bottom:10px;">
                                                         <h2 style="font:bold 16px Arial, Helvetica, sans-serif; color:#333; line-height:50px; margin:0 0 0 20px;">Dear Customer,</h2>
                                                          <p style="font:normal 14px Arial, Helvetica, sans-serif; color:#333; line-height:24px; margin:0 0 0 20px;">Quote # <?php echo $quoteNumber; ?></p>
                                                         <p style="font:normal 14px Arial, Helvetica, sans-serif; color:#333; line-height:24px; margin:0 0 0 20px;">Thank you for visiting our website</p>
                                                         <p style="font:normal 14px Arial, Helvetica, sans-serif; color:#333; line-height:24px;  margin:0 0 0 20px;">
                                                            to comparing Quote on our website to buy the policy click <a href="{{ url('getquote') }}/<?php echo $quoteNumber; ?>" style="font:bold 14px Arial, Helvetica, sans-serif; color:#eb342b; text-decoration:none;"> Buy Now</a> or Call Us at
                                                             <a href="tel:8555005041" style="font:bold 14px Arial, Helvetica, sans-serif; color:#eb342b; text-decoration:none;"><br>1855-500-5041</a></p>
                                                     </div>
                                                         
                                                      <div style="width:100%; background:#2b3481">
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
                                                                    <div style="width:25%; display:inline-block;height: 47px; color: darkred;float: left">
                                                                        <h4 style="font: bold 18px Arial,Helvetica,sans-serif; color: #333; text-align: center; display: table-cell; vertical-align: middle; height: 51px; width: 195px; line-height: 42px;">$
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
                                                                   <a href="{{ url('getquote') }}/<?php echo $quoteNumber; ?>" class="buynow-btn" class="btn btn-lg btn-danger" name="buynow" style="padding:10px;float:right;min-width:100%;background: #2b3481;color:#fff;width:100%;border-radius:5px;font-weight:bold;text-decoration: none;">Buy Now
                                                                        </a>
                                                               </div>
                                                                    <div style="clear:both;"></div>
                                                                </div>
                                                                <?php }
                                                            }
                                                        } ?>
                                                        <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            <tr>
                                                               <td style="padding:15px 0px 10px 0px" role="module-content" height="100%" valign="top" bgcolor="">
                                                                  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="1px" style="line-height:1px;font-size:1px">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>
                                                                              <hr style="height:2px;border-width:0;color:gray;background-color:#dae5ee">
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" style="padding:0px 30px;margin:20px 0px">
                                                   <tbody>
                                                      <tr role="module-content">
                                                         <td height="100%" valign="top">
                                                            <table width="225" style="width:225px;border-spacing:0;border-collapse:collapse;margin:0px 0px 0px 0px;padding:10px" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="padding:0px;margin:0px;border-spacing:0">
                                                                        <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                                           <tbody>
                                                                              <tr>
                                                                                 <td style="padding:10px 0px 18px 30px;line-height:22px;text-align:inherit" height="100%" valign="center" bgcolor="" role="module-content">
                                                                                    <div>
                                                                                       <div color="rgb(43, 52, 129)" style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;color:rgb(43,52,129);font-size:16px"><span style="white-space:pre-wrap;font-weight:800">Top-rated and trusted by customers</span></div>
                                                                                       <div></div>
                                                                                    </div>
                                                                                 </td>
                                                                              </tr>
                                                                           </tbody>
                                                                        </table>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                            <table width="300" style="border-spacing:0;border-collapse:collapse;margin:0px 0px 0px 0px;display:table!important" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="padding:0px;margin:0px;border-spacing:0">
                                                                        <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                           <tbody>
                                                                              <tr>
                                                                                 <td id="m_-2962801108246752550m_1827564426263491803" height="100%" valign="top" role="module-content">
                                                                                    <table width="100%" align="center">
                                                                                       <tbody>
                                                                                          <tr>
                                                                                             <td align="center">
                                                                                                <a href="https://www.google.com/search?q=life+advice+insurance+inc&rlz=1C1UEAD_enPK975PK975&oq=life+advice+insurance+inc&aqs=chrome..69i57j0i8i15i30j0i390l7.11008j1j9&sourceid=chrome&ie=UTF-8#lrd=0x882bf5f3329ed419:0x669c2fe4071dc2ef,1,," target="_blank">
                                                                                                <img src="https://lifeadvice.ca/public/email/googlerattings.png" width="103" style="width:103px" class="CToWUd" data-bit="iit">
                                                                                                </a>
                                                                                             </td>
                                                                                          </tr>
                                                                                       </tbody>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </tbody>
                                                                        </table>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" style="padding:0px 30px 10px 30px" bgcolor="#fff">
                                                   <tbody>
                                                      <tr role="module-content">
                                                         <td height="100%" valign="top">
                                                            <table width="100%" style="background:#f9fafc;margin-top:0px;padding:30px 30px;border:1px solid #dae5ee;border-radius:10px 10px 10px 10px" cellpadding="0" cellspacing="0">
                                                               <tbody>
                                                                  <tr>
                                                                     <td>
                                                                        <img width="65" height="65" src="https://lifeadvice.ca/public/email/icon.jpg" style="width:65px" class="CToWUd" data-bit="iit">
                                                                     </td>
                                                                     <td style="line-height:22px;text-align:left;padding-left:20px" height="100%" valign="top" bgcolor="">
                                                                        <table width="100%">
                                                                           <tbody>
                                                                              <tr>
                                                                                 <td style="color:#2b3481;font-size:16px;line-height:21.79px;font-weight:800;font-family:'Open Sans',sans-serif!important">
                                                                                    Got Questions?
                                                                                 </td>
                                                                              </tr>
                                                                              <tr>
                                                                                 <td style="font-size:14px!important;line-height:28px;color:#67778f;font-weight:600;font-family:'Open Sans',sans-serif!important">
                                                                                    <p style="font-size:14px!important">Feel Free To Contact Us</p>
                                                                                 </td>
                                                                              </tr>
                                                                              <tr>
                                                                                 <td>
                                                                                    <a href="" style="color:#1b8fe4;font-weight:700;font-size:16px;text-decoration:none;font-family:'Open Sans',sans-serif!important;line-height:24px" target="_blank" data-saferedirecturl="">
                                                                                    Contact US<span style="margin-left:10px"><img width="17" style="width:17px" src="https://lifeadvice.ca/public/email/arrow.png" class="CToWUd" data-bit="iit"></span>
                                                                                    </a>
                                                                                 </td>
                                                                              </tr>
                                                                           </tbody>
                                                                        </table>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                   <tbody>
                                                      <tr>
                                                         <td height="100%" valign="top" role="module-content">
                                                            <table border="0" width="100%" cellspacing="0" style="margin:40px auto 10px;padding:0 45px">
                                                               <tbody>
                                                                  <tr>
                                                                     <td align="center">
                                                                        <p style="padding-bottom:0px">
                                                                           <span style="margin:0 5px"><a href="https://www.facebook.com/lifeadviceinsurance/" target="_blank">
                                                                           <img width="24" src="https://lifeadvice.ca/public/email/facebookicon.png" class="CToWUd" data-bit="iit"></a></span> 
                                                                           <span style="margin:0 5px"><a href="https://ca.linkedin.com/in/life-advice-insurance-inc-3a7074138" target="_blank"><img width="24" src="https://ci4.googleusercontent.com/proxy/NdMsIoxagczLKNsn8c9z5Ua7k2Pe93XbQyIpbdBsxnrmpLJk4LhCTvljiNPlyy1hH3Fd4dQ8_qBtJaiTF7h0tk5PkDU7GGfwytcXQA9k-7dK6zGtflnZHEQHp1ISoCimS1zClj_-qqm7URoMAG9RX7_FMyFh872dey0T0H9xHivqhA4=s0-d-e1-ft#http://cdn.mcauto-images-production.sendgrid.net/d326e5c9c15dddaf/bd62b3eb-8b83-4d05-8b1b-28262ac3d83b/48x48.png" class="CToWUd" data-bit="iit"></a></span>
                                                                        </p>
                                                                     </td>
                                                                  </tr>
                                                                  <tr height="7" style="height:7px"></tr>
                                                                  <tr>
                                                                     <td align="center">
                                                                        <p style="color:#67778f;font-size:10px;line-height:14px;margin-bottom:12px">Life Advice Insurance Inc, 912 Isaiah Place, Kitchener, ON, N2E0B6<br> Life Advice Inc®. All Rights Reserved.</p>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                      <table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                                         <tbody>
                                                            <tr>
                                                               <td bgcolor="" role="module-content" style="padding:0px 0px 11px 0px">&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                                         <tbody>
                                                            <tr>
                                                               <td bgcolor="#f4f7fa" role="module-content" style="padding:0px 0px 40px 0px">&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>

                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</center>