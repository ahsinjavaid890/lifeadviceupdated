@include('email.header')
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
@include('email.footer')