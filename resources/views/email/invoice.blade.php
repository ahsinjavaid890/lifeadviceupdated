@include('frontend.email.header')

<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:24px;font-weight:bold;line-height:22px;text-align:center;color:white;">
            Thank you for Purchasing Plan
        </div>

    </td>
</tr>
<tr>
    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:22px;text-align:left;color:white;">
            <p>Hi {{ $name }},</p>
            <p>We are Happy that You Purchased {{ $planname }}. In This Plan you will get {{ $places_allowed }} Images to Upload. Duration of this plan is Life Time. </p>
        </div>

    </td>
</tr>

<tr>
    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" style="cellspacing:0;color:white;font-family:'Helvetica Neue',Arial,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;">
            <tr style="border-bottom:1px solid #ecedee;text-align:left;">
                <th style="padding: 0 15px 10px 0;">Item</th>
                <th style="padding: 0 15px;">Qt.</th>
                <th style="padding: 0 0 0 15px;" align="right">Price</th>
            </tr>
            <tr>
                <td style="padding: 5px 15px 5px 0;">{{ $planname }}</td>
                <td style="padding: 0 15px;">1</td>
                <td style="padding: 0 0 0 15px;" align="right">${{ $price }}</td>
            </tr>
            <tr style="border-bottom:2px solid #ecedee;text-align:left;padding:15px 0;">
                <td style="padding: 5px 15px 5px 0; font-weight:bold">TOTAL</td>
                <td style="padding: 0 15px;"></td>
                <td style="padding: 0 0 0 15px; font-weight:bold" align="right">${{ $price }}</td>
            </tr>
        </table>

    </td>
</tr>
@include('frontend.email.footer')                       