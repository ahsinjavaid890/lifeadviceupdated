<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <title>

    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass * {
            line-height: 100%;
        }

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
            padding: 15px 15px 15px 15px !important;
/*            border: 1px solid;*/
        }
        .invoice tr td{
            padding: 2px 13px 5px 5px;
/*            border: 1px solid !important;*/
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
@php
    if($sale->product == 1){
        $policytype = 'SVI';
    } else if($sale->product == 2){
        $policytype = 'VTC';
    } else if($sale->product == 3){
        $policytype = 'SI';
    } else if($sale->product == 4){
        $policytype = 'IFC';
    } else if($sale->product == 5){
        $policytype = 'ST';
    } else if($sale->product == 6){
        $policytype = 'MT';
    } else if($sale->product == 7){
        $policytype = 'AI';
    } else if($sale->product == 8){
        $policytype = 'TII';
    } else if($sale->product == 9){
        $policytype = 'BC';
    }else{
        $policytype = '';
    }
    $policy_number_temp = 10000000 + $sale->sales_id;
    $policy_number = $policytype.$policy_number_temp;
@endphp
<body style="background-color:#f4f7fa;">
    <div style="background-color:#f4f7fa">
        <div style="background:#f9f9f9;background-color:#f9f9f9;Margin:0px auto;max-width:600px;">

            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f9f9f9;background-color:#f9f9f9;width:100%;">
                <tbody>
                    <tr>
                        <td style="border-bottom: #dddddd solid 1px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;background: #f4f7fa;">
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div style="background: #2b3481;background-color: #2b3481;Margin:0px auto;max-width:700px;">

            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:white;background-color:white;width:100%;">
                <tbody>
                    <tr>
                        <td style="border:#dddddd solid 1px;border-top:0px;direction:ltr;font-size:0px;padding:0px 0;text-align:center;vertical-align:top;">
                               <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">

                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:bottom;" width="100%">

                                    <tr>
                                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">

                                            <table align="left" style="padding-left: 30px;" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:200px;">
                                                         <img height="auto" src="https://lifeadvice.ca/public/images/118135255.png" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="64" /> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="font-size:0px;/* padding:10px 25px; */word-break:break-word;">

                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:24px;font-weight:bold;line-height:22px;text-align:center;color:white;height: 200px;background-color: #2b3481;">
                                                <div style=" text-align: left; padding-top: 50px; padding-left: 20px; color: #ffffff;  font-weight: 800; font-size: 30px; line-height: 41px; ">Policy Confirmation</div>
                                                <div style="font-family:inherit;text-align:inherit;text-align: left;padding-left: 20px;"><span style="color:#ffffff;font-size:18px;line-height:40px;font-weight:700;text-align: left;">Thank you for your purchase!</span></div>
                                                <div style="font-family:inherit;text-align:inherit;text-align: left;padding-left: 20px;"><span style="color:#ffffff;font-size:18px;line-height:40px;font-weight:700;text-align: left;">Policy ID =  {{ $policy_number }}</span></div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:22px;text-align:left;color:#2b3481;">
                                                <p>Hi {{ $request->name }},</p>
                                                <p>We truly appreciate your trust in our services and your decision to purchase an insurance policy with us. Your policy details and documentation will be emailed to you shortly. Please take the time to read them carefully and familiarize yourself with the terms and conditions. If you have any questions or need any assistance in understanding the specifics, don't hesitate to get in touch with us.</p>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

                                            <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" class="table table-bordered invoice" style="cellspacing:0;color:#2b3481;font-family:'Helvetica Neue',Arial,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;background: #f9fafc;width: 100%;border: 1px solid #dae5ee;border-radius: 10px;">
                                                <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                                                    <th style="padding: 0 15px 10px 0; border: 0;"><h3 style=" white-space: pre-wrap; color: #2b3481;  font-size: 20px; font-weight: 800; ">Policy Details</h3> </th>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Policy Number: </th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $policy_number }}</td>
                                                    
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Purchase Date:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->purchase_date }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Purchase Status:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->policy_status }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">End Date:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->end_date }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Total Price:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->price_total }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Duration:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->duration }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Coverage Amount:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $request->coverage }}</td>
                                                </tr>
                                                <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                                                    
                                                    <th style="padding: 0 15px 10px 0;">Total Deductible:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $request->deductible_rate }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

                                            <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" class="table table-bordered invoice" style="cellspacing:0;color:#2b3481;font-family:'Helvetica Neue',Arial,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;background: #f9fafc;width: 100%;border: 1px solid #dae5ee;border-radius: 10px;">
                                                <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                                                    <th style="padding: 0 15px 10px 0; border: 0;"><h3 style=" white-space: pre-wrap; color: #2b3481;  font-size: 20px; font-weight: 800; ">Primary Insured Details</h3> </th>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Name:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->fname }} {{ $sale->lname }}</td>
                                                    
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Age/DOB:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->dob }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Email:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->email }}</td>
                                                    
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Phone:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->phone }}</td>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Address:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->address }}</td>
                                                    
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Country:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $sale->country }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" class="table table-bordered invoice" style="cellspacing:0;color:#2b3481;font-family:'Helvetica Neue',Arial,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;background: #f9fafc;width: 100%;border: 1px solid #dae5ee;border-radius: 10px;">
                                                <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                                                    <th style="padding: 0 15px 10px 0; border: 0;"><h3 style=" white-space: pre-wrap; color: #2b3481;  font-size: 20px; font-weight: 800; ">Login Details</h3> </th>
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Email:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $request->email }}</td>
                                                    
                                                </tr>
                                                <tr style="text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Password:</th>
                                                    <td style="padding: 5px 15px 5px 0;">{{ $policy_number }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:20px;text-align:left;color:#2b3481;">We look forward to a long and rewarding relationship with you. Thank you once again for trusting Life Advice Insurance Inc. We're here to support you every step of the way.<br>Best Regards,
                                                <br>
                                                <a href="{{ url('login') }}" style="color:#2F67F6">{{ url('login') }}</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="Margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>