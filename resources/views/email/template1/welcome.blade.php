@include('frontend.email.header')

<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:28px;font-weight:bold;line-height:1;text-align:center;color:white;">
            Welcome to {{ env('APP_NAME') }}
        </div>

    </td>
</tr>

<tr>
    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

        <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:left;color:white;">
            Hello {{ $name }}!<br></br>
            Thank you for signing up for {{ env('APP_NAME') }}. We're really happy to have you! Click the link below to login to your account:
        </div>

    </td>
</tr>

<tr>
    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:30px;padding-bottom:50px;word-break:break-word;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
            <tr>
                <td align="center" bgcolor="#2F67F6" role="presentation" style="border:none;border-radius:3px;color:#ffffff;cursor:auto;padding:15px 25px;" valign="middle">

                    <a href="{{ url('') }}">

                    <p style="background:#2F67F6;color:#ffffff;font-family:'Helvetica Neue',Arial,sans-serif;font-size:15px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;">
                        Login to Your Account
                    </p>
                    </a>
                </td>
            </tr>
        </table>
    </td>
</tr>
@include('frontend.email.footer')                       