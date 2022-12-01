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

<body style="background-color:#262566;">
    <div style="background-color:#262566;">
        <div style="background:#f9f9f9;background-color:#f9f9f9;Margin:0px auto;max-width:600px;">

            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f9f9f9;background-color:#f9f9f9;width:100%;">
                <tbody>
                    <tr>
                        <td style="border-bottom:#1bbc9b solid 5px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top; background: #252666;">
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div style="background: #262566;background-color: #262566;Margin:0px auto;max-width:600px;">

            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:white;background-color:white;width:100%;">
                <tbody>
                    <tr>
                        <td style="border:#dddddd solid 1px;border-top:0px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                               <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">

                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:bottom;" width="100%">

                                    <tr>
                                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">

                                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:200px;">
                                                         <img height="auto" src="https://lifeadvice.ca/lifeadvice.ca/lifeadvicelaravel/public/images/118135255.png" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="64" /> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:24px;font-weight:bold;line-height:22px;text-align:center;color:#262566;">
            Thank you for Purchasing Plan
        </div>

    </td>
</tr>
<tr>
    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:22px;text-align:left;color:#262566;">
            <p>Hi {{ $request->name }},</p>
            <p>We are Happy that You Purchased {{ $request->plan_name }}. </p>
        </div>

    </td>
</tr>
<tr>
    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" class="table table-bordered invoice" style="cellspacing:0;color:#262566;font-family:'Helvetica Neue',Arial,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;">
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0; border: 0;"><h3>Policy Details</h3> </th>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
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
                <th style="padding: 0 15px 10px 0;">Policy Number: </th>
                <td style="padding: 5px 15px 5px 0;">{{ $policy_number }}</td>
                <th style="padding: 0 15px 10px 0;">Purchase Date:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->purchase_date }}</td>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Policy Status:</th>
                <td style="padding: 5px 15px 5px 0;text-transform: capitalize;font-weight: bold;">{{ $sale->policy_status }}</td>
                <th style="padding: 0 15px 10px 0;">End Date:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->end_date }}</td>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Duration:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->duration }}</td>
                <th style="padding: 0 15px 10px 0;">Total Price:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->price_total }}</td>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Coverage Amount:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $request->coverage }}</td>
                <th style="padding: 0 15px 10px 0;">Total Deductible:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $request->deductible_rate }}</td>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0; border: 0"><h3>Primary Insured Details:</h3> </th>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Name:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->fname }} {{ $sale->lname }}</td>
                <th style="padding: 0 15px 10px 0;">Age/DOB:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->dob }}</td>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Email:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->email }}</td>
                <th style="padding: 0 15px 10px 0;">Phone:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->phone }}</td>
            </tr>
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Address:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->address }}</td>
                <th style="padding: 0 15px 10px 0;">Country:</th>
                <td style="padding: 5px 15px 5px 0;">{{ $sale->country }}</td>
            </tr>
        </table>

    </td>
</tr>
<tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:20px;text-align:left;color:#262566;">
                                                Best regards,<br><br> Csaba Kissi<br>Elerion ltd., CEO and Founder<br>
                                                <a href="{{ url('') }}" style="color:#2F67F6">{{ url('') }}</a>
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