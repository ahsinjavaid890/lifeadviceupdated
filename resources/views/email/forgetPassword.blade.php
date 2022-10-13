@include('frontend.email.header')
<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:38px;font-weight:bold;line-height:1;text-align:center;color:white;">
            Oops!
        </div>

    </td>
</tr>

<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:18px;line-height:1;text-align:center;color:white;">
            It seems that you’ve forgotten your password.
        </div>

    </td>
</tr>

<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
            <tbody>
                <tr>
                    <td style="width:128px;">

                        <img height="auto" src="https://i.imgur.com/247tYSw.png" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="128" />

                    </td>
                </tr>
            </tbody>
        </table>

    </td>
</tr>
 <tr>
    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:30px;padding-bottom:50px;word-break:break-word;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
            <tr>
                
                    <td align="center" bgcolor="#2F67F6" role="presentation" style="border:none;border-radius:3px;color:#ffffff;cursor:auto;padding:15px 25px;" valign="middle">
                        <a href="{{ route('reset.password.get', $token) }}">
                            <p style="background:#2F67F6;color:#ffffff;font-family:'Helvetica Neue',Arial,sans-serif;font-size:15px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;">
                                Reset Password
                            </p>
                        </a>
                    </td>
                
            </tr>
        </table>

    </td>
</tr>

<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:20px;text-align:center;color:white;">
            If you did not make this request, just ignore this email. Otherwise please click the button above to reset your password.
        </div>

    </td>
</tr>
@include('frontend.email.footer')                       