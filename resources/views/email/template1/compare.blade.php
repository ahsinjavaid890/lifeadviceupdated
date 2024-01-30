<center class="m_-2565051330621453805wrapper">
   <div>
      <table cellpadding="0" cellspacing="0" border="0" width="100%" class="m_-2565051330621453805wrapper" bgcolor="#F4F7FA">
         <tbody>
            <tr>
               <td valign="top" bgcolor="#F4F7FA" width="100%">
                  <table width="100%" role="content-container" align="center" cellpadding="0" cellspacing="0" border="0">
                     <tbody>
                        <tr>
                           <td width="100%">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                 <tbody>
                                    <tr>
                                       <td style="padding-bottom:40px">
                                          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:600px" align="center">
                                             <tbody>
                                                <tr>
                                                   <td role="modules-container" style="padding:0px 0px 0px 0px;color:#67778f;text-align:left" bgcolor="#FFFFFF" width="100%" align="left">
                                                      <table class="m_-2565051330621453805preheader" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="display:none!important;opacity:0;color:transparent;height:0;width:0">
                                                         <tbody>
                                                            <tr>
                                                               <td role="module-content">
                                                                  <p></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table class="m_-2565051330621453805wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            <tr>
                                                               <td style="font-size:6px;line-height:10px;padding:12px 0px 16px 16px" valign="top" align="left">
                                                                  <img class="m_-2565051330621453805max-width CToWUd" border="0" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica,arial,sans-serif;font-size:16px" width="200" alt="" src="https://lifeadvice.ca/public/images/118135255.png" height="41" data-bit="iit">
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table class="m_-2565051330621453805wrapper" role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            @php
                                                               $product = DB::table('compare_plans')->where('comparenumber'  ,$compareid)->first();
                                                               if($product->product_id)
                                                               {
                                                                  $productname = DB::Table('wp_dh_products')->where('pro_id' , $product->product_id)->first();
                                                               }
                                                            @endphp
                                                            <tr>
                                                               <td style="font-size:6px;line-height:10px;padding:0px 0px 0px 0px;background-color: #2b3481;height: 180px;" valign="top">
                                                                  <h1 style="color:white;font-size:36px;margin-top: 12%;margin-left: 3%;">@if($productname) {{ $productname->pro_name }}  @endif <br><br><br><br><br> Comparison Plan</h1>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            <tr>
                                                               <td class="m_-2565051330621453805mobile-hide-padding" style="padding:25px 34px 18px 34px;line-height:28px;text-align:inherit" height="100%" valign="top" bgcolor="" role="module-content">
                                                                  <div>
                                                                     <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;line-height:28px"><span style="color:#67778f;font-size:16px;font-weight:600">Dear Traveler,</span></div>
                                                                     <div style="font-family:inherit;text-align:inherit"><br></div>
                                                                     <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;line-height:28px"><span style="color:#67778f;font-weight:600;font-size:16px">Thank you for taking the first step towards safeguarding your journeys with Life Advice Insurance Inc. We're delighted you've chosen us to explore insurance options tailored to your unique travel style! With just a click, you can revisit your plan comparison and secure your policy in under 5 minutes.</span></div>
                                                                     <div></div>
                                                                  </div>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            <tr>
                                                               <td style="padding:0px 0px 10px 0px" role="module-content" bgcolor=""></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table border="0" cellpadding="0" cellspacing="0" role="module" style="table-layout:fixed" width="100%">
                                                         <tbody>
                                                            <tr>
                                                               <td align="center" bgcolor="" style="padding:0px 0px 0px 0px">
                                                                  <table border="0" cellpadding="0" cellspacing="0" class="m_-2565051330621453805wrapper-mobile" style="text-align:center">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td align="center" bgcolor="#2B3481" style="border-radius:6px;font-size:14px;text-align:center;background-color:inherit">
                                                                              <a href="{{ url('compareplans') }}/{{ $compareid }}" style="background-color:#2b3481;border:1px solid #2b3481;border-color:#2b3481;border-radius:50px;border-width:1px;color:#ffffff;display:inline-block;font-size:14px;font-weight:700;letter-spacing:0px;line-height:normal;padding:12px 20px 12px 20px;text-align:center;text-decoration:none;border-style:solid;font-family:'Open Sans',sans-serif!important" target="_blank">View Your Plan Comparison</a></td>
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
                                                               <td style="padding:10px 30px 18px 30px;line-height:28px;text-align:inherit;font-size:14px;font-weight:600" height="100%" valign="top" bgcolor="" role="module-content">
                                                                  <div>
                                                                     <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:center;font-size:14px;line-height:28px"><span style="font-size:14px;font-weight:600;color:#67778f">Don’t see the button?</span><span style="font-size:14px;font-weight:600"> </span><a href="{{ url('compareplans') }}/{{ $compareid }}"><span style="font-size:14px;color:#1b8fe4;font-weight:700;text-decoration-line:none">Click here</span></a><span style="font-size:18px">.</span></div>
                                                                     <div></div>
                                                                  </div>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            <tr>
                                                               <td class="m_-2565051330621453805mobile-hide-padding" style="padding:18px 30px 18px 30px;line-height:28px;text-align:inherit" height="100%" valign="top" bgcolor="" role="module-content">
                                                                  <div>
                                                                     <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;font-size:16px;line-height:28px"><span style="font-size:16px;font-weight:600">Understanding the intricacies of insurance selection can be daunting. Fear not! Our team of seasoned experts is readily available to guide you through every step of the process. Reach out to us at</span><a href="tel:+1-855-500-8999" target="_blank"><span style="font-size:16px;font-weight:600;color:#1b8fe4"><strong>+1-855-500-8999</strong></span></a><span style="font-size:16px;font-weight:600">or drop us a line at </span><a href="mailto:info@lifeadvice.ca" target="_blank"><span style="font-size:16px;font-weight:600;color:#1b8fe4"><strong>info@lifeadvice.ca</strong></span></a><span style="font-weight:600;font-size:16px"> for personalized assistance.</span></div>
                                                                     <div style="font-family:inherit;text-align:inherit"><br></div>
                                                                     <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;font-size:16px;line-height:28px"><span style="font-size:16px;font-weight:600">Your safety and peace of mind are our top priorities,</span></div>
                                                                     <div style="font-family:inherit;text-align:inherit"><br></div>
                                                                     <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;font-size:16px;line-height:28px"><span style="font-size:16px;font-weight:600">Warm regards,<br>
                                                                        The Customer Success Team<br>Life Advice</span></div>
                                                                     <div></div>
                                                                  </div>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table role="module" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed">
                                                         <tbody>
                                                            <tr>
                                                               <td style="padding:15px 0px 10px 0px" role="module-content" height="100%" valign="top" bgcolor="">
                                                                  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="1px" style="line-height:1px;font-size:1px">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td style="padding:0px 0px 1px 0px" bgcolor="#DAE5EE"></td>
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
                                                               <td style="padding:0px 0px 20px 0px" role="module-content" bgcolor=""></td>
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