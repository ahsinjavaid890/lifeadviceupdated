<div style="background-color:#f2f2f4;margin:0!important;padding:0!important">
  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
     <tbody>
        <tr>
           <td align="center" valign="top">
              <table align="center" border="0" cellpadding="0" cellspacing="0" style="max-width:700px;padding:0px" width="100%">
                 <tbody>
                    <tr>
                       <td align="center" valign="top" style="height:20px">
                          &nbsp;
                       </td>
                    </tr>
                    <tr>
                       <td align="center" valign="top" style="background-color:#1A3760;height: 40px;border-radius: 20px;">
                            <h1 style="color:white;padding-top: 0px">{{ env('APP_NAME') }}</h1>
                       </td>
                    </tr>
                    <tr>
                       <td align="center" valign="top" style="height:20px">
                          &nbsp;
                       </td>
                    </tr>
                    <tr>
                       <td align="left" valign="top" class="m_2524544869209104962mobile-padding">
                          <table>
                             <tbody>
                                <tr>
                                   <td class="m_2524544869209104962rounded" align="center" bgcolor="#ffffff" valign="top" style="margin:0;padding:40px 20px;border-radius:20px">
                                      <h1 style="font-family:'Montserrat','Helvetica Neue','Helvetica',sans-serif;font-size:38px;line-height:42px;color:#10134a;font-weight:500;padding:0px;margin:0;text-align:center">Your @if($requesttype == 'change') Policy Change Request @endif @if($requesttype == 'refund') Policy Refund Request @endif @if($requesttype == 'extend') Policy Extend Request @endif Recieved</h1>
                                      <h3>Request ID : RQ-000{{ $data->id }}</h3>
                                   </td>
                                </tr>
                             </tbody>
                          </table>
                       </td>
                    </tr>
                    <tr>
                       <td align="center" valign="top" style="height:20px">
                          &nbsp;
                       </td>
                    </tr>
                    <tr>
                       <td align="center" valign="top">
                          <table style="width: 100%;">
                             <tbody>
                              <tr>
                                   <td  align="center" bgcolor="#1A3760" valign="top" style="margin:0;padding: 0px 0px 30px;border-radius:20px">
                                      <br>
                                      <br>
                                      <h2 style="font-family:'Montserrat','Helvetica Neue','Helvetica',sans-serif;font-size:28px;line-height:34px;color:#fff;font-weight:600;padding:0px;margin:0;text-align:center">Request Information</h2>
                                      <br>
                                      <br>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;">Reffrence Number</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;"> {{ $data->reffrence_number }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;">Policy Number</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;"> {{ $data->policy_number }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;">Effective Date</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;"> {{ Cmf::date_format($data->start_date) }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex; margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;">@if($requesttype == 'refund')

                                             Return Date
                                             @else
                                             End Date

                                             @endif</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;"> @if($requesttype == 'refund')

                                             {{ Cmf::date_format($data->return_date) }}
                                             @else
                                             {{ Cmf::date_format($data->end_date) }}

                                             @endif</span>
                                          </div>
                                      </div>
                                       @if($requesttype == 'refund')


                                       @else

                                       @if($requesttype == 'extend')

                                       @else
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;">New Effective Date</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;"> {{ Cmf::date_format($data->new_effective_date) }}</span>
                                          </div>
                                      </div>
                                      @endif
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;">@if($requesttype == 'extend')

                                                New Return Date

                                                @else
                                                New End Date

                                                @endif</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color:#fff;"> {{ Cmf::date_format($data->new_return_date) }}</span>
                                          </div>
                                      </div>
                                      @endif
                                      <br>
                                      <br>
                                   </td>
                                </tr>
                                <tr style="width:0;max-height:0;overflow:hidden">
                                   <td align="center" valign="top" style="height:20px">
                                      &nbsp;
                                   </td>
                                </tr>
                                 @php
                                    $sale = DB::table('sales')->where('reffrence_number' , $data->reffrence_number)->first();
                                 @endphp
                                <tr>
                                   <td  align="center" bgcolor="#fff" valign="top" style="margin:0;padding: 0px 0px 30px;border-radius:20px">
                                      <br>
                                      <br>
                                      <h2 style="font-family:'Montserrat','Helvetica Neue','Helvetica',sans-serif;font-size:28px;line-height:34px;color:#10134a;font-weight:600;padding:0px;margin:0;text-align:center">Policy Information</h2>
                                      <br>
                                      <br>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400">Policy Status</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400"> {{ $sale->status }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400">Start Date</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400"> {{ $sale->start_date  }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400">End Date</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400"> {{ $sale->end_date  }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex; margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400">Coverage Amount</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400"> {{ $sale->coverage_ammount  }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400">Deductibles</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400"> {{ $sale->deductibles  }}</span>
                                          </div>
                                      </div>
                                      <br>
                                      <br>
                                   </td>
                                </tr>                                        
                                <tr style="width:0;max-height:0;overflow:hidden">
                                   <td align="center" valign="top" style="height:20px">
                                      &nbsp;
                                   </td>
                                </tr>
                                @foreach(DB::table('traveler_sale_informations')->where('sale_id', $sale->id)->get() as $key => $r)
                                <tr>
                                   <td  align="center" bgcolor="#1A3760" valign="top" style="margin:0;padding: 0px 0px 30px;border-radius:20px">
                                      <br>
                                      <br>
                                      <h2 style="font-family:'Montserrat','Helvetica Neue','Helvetica',sans-serif;font-size:28px;line-height:34px;color:#fff;font-weight:600;padding:0px;margin:0;text-align:center">Traveler Information {{ $key+1 }}</h2>
                                      <br>
                                      <br>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;">Name</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;"> {{ $r->f_name }} {{ $r->l_name }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;">Gender</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;"> {{ $r->gender }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;">Pre Existing Condition</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;"> {{ $r->pre_existing_condition }}</span>
                                          </div>
                                      </div>
                                      <div style="display:flex;margin-bottom: 10px;"> 
                                          <div style="width: 50%;text-align: left;padding-left: 30px;">
                                              <b style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;">Date of Birth</b>
                                          </div>
                                          <div style="width: 50%;text-align: right;padding-right: 30px;">
                                             <span style="padding:5px 25px 15px 5px;font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:16px;line-height:24px;font-weight:400;color: #fff;"> {{ $r->date_of_birth }}</span>
                                          </div>
                                      </div>
                                      <br>
                                      <br>
                                   </td>
                                </tr>                                        
                                <tr style="width:0;max-height:0;overflow:hidden">
                                   <td align="center" valign="top" style="height:20px">
                                      &nbsp;
                                   </td>
                                </tr>
                                @endforeach
                                <tr>
                                   <td align="left" valign="top" >
                                      <table width="100%" >
                                         <tbody>
                                            <tr>
                                               <td width="600" class="m_2524544869209104962rounded" align="center" bgcolor="#DFDFE4" valign="top" style="margin:0;padding:20px 20px;border-radius:20px">
                                                  <p style="font-family:'Inter','Helvetica Neue','Helvetica',sans-serif;font-size:14px;line-height:20px;color:#9191a4;font-weight:400">Visit <a href="{{ url('') }}" style="color:#9191a4;text-decoration:none" target="_blank"><span class="il">{{ url('') }}</a><br>
                                                     <a href="" style="color:#9191a4;text-decoration:none" target="_blank">+1-855-500-8999<br>
                                                     <span class="il">Life Advice Insurance Inc, 912 Isaiah Place, Kitchener, ON, N2E0B6<br>
                                                     © 2023 <span class="il">{{ env('APP_NAME') }}</span> - All Rights Reserved</a>
                                                  </p>
                                               </td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </td>
                                </tr>
                                
                                <tr>
                                   <td align="center" valign="top" style="height:20px">
                                      &nbsp;
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