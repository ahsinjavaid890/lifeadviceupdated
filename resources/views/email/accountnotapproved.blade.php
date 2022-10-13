@include('email.header')

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
            Your Account is Not Approved For Further Information Please <a href="{{ url('contact-us') }}"> Contact Us </a> <br>
        </div>

    </td>
</tr>
@include('email.footer')                       