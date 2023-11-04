<style type="text/css">
   @import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);
*{
  margin: 0;
  box-sizing: border-box;
  -webkit-print-color-adjust: exact;
}
body{
  background: #fff;
  font-family: 'Roboto', sans-serif;
}
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.col-left {
    float: left;
}
.col-right {
    float: right;
}
h1{
  font-size: 1.5em;
  color: #444;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .75em;
  color: #666;
  line-height: 1.2em;
}
a {
    text-decoration: none;
    color: #00a63f;
}

#invoiceholder{
  width:100%;
  height: 100%;
}
#invoice{
  position: relative;
  width: 100%;
  background: #FFF;
}

[id*='invoice-']{ /* Targets all id with 'col-' */
/*  border-bottom: 1px solid #EEE;*/
  padding: 20px;
}

#invoice-top{
   text-align: center;
}
#invoice-mid{min-height: 110px;}
#invoice-bot{ min-height: 240px;}

.logo{
    display: inline-block;
    vertical-align: middle;
    width: 200px;
    overflow: hidden;
}
.info{
    display: inline-block;
    vertical-align: middle;
    margin-left: 20px;
}
.logo img,
.clientlogo img {
    width: 100%;
}
.clientlogo{
    display: inline-block;
    vertical-align: middle;
   width: 50px;
}
.clientinfo {
    display: inline-block;
    vertical-align: middle;
    margin-left: 20px
}
.title{
  float: right;
}
.title p{text-align: right;}
#message{margin-bottom: 30px; display: block;}
h2 {
    margin-bottom: 5px;
    color: #444;
}
.col-right td {
    color: #666;
    padding: 5px 8px;
    border: 0;
    font-size: 0.75em;
    border-bottom: 1px solid #eeeeee;
}
.col-right td label {
    margin-left: 5px;
    font-weight: 600;
    color: #444;
}
.cta-group a {
    display: inline-block;
    padding: 7px;
    border-radius: 4px;
    background: rgb(196, 57, 10);
    margin-right: 10px;
    min-width: 100px;
    text-align: center;
    color: #fff;
    font-size: 0.75em;
}
.cta-group .btn-primary {
    background: #00a63f;
}
.cta-group.mobile-btn-group {
    display: none;
}
table{
  width: 100%;
  border-collapse: collapse;
}
td{
    white-space: pre-wrap;
    font-family: "Open Sans",sans-serif;
    font-size: 14px;
    line-height: 24px;
    font-weight: 600;
    color: #67778f;
}

.tabletitle th {
  border-bottom: 2px solid #ddd;
  text-align: right;
}
.tabletitle th:nth-child(2) {
    text-align: left;
}
th {
    text-align: left;
    white-space: pre-wrap;
    color: #2b3481;
    font-family: "Open Sans",sans-serif;
    font-size: 14px;
    font-weight: 800;
    line-height: 24px;
}
.item{width: 50%;}
.list-item td {
    text-align: right;
}
.list-item td:nth-child(2) {
    text-align: left;
}
.total-row th,
.total-row td {
    text-align: right;
    font-weight: 700;
    font-size: .75em;
    border: 0 none;
}
.table-main {
    
}
footer {
    border-top: 1px solid #eeeeee;;
    padding: 15px 20px;
}
.effect2
{
  position: relative;
}
@media screen and (max-width: 767px) {
    h1 {
        font-size: .9em;
    }
    #invoice {
        width: 100%;
    }
    #message {
        margin-bottom: 20px;
    }
    [id*='invoice-'] {
        padding: 20px 10px;
    }
    .logo {
        width: 140px;
    }
    .title {
        float: none;
        display: inline-block;
        vertical-align: middle;
        margin-left: 40px;
    }
    .title p {
        text-align: left;
    }
    .col-left,
    .col-right {
        width: 100%;
    }
    .table {
        margin-top: 20px;
    }
    #table {
        white-space: nowrap;
        overflow: auto;
    }
    td {
        white-space: normal;
    }
    .cta-group {
        text-align: center;
    }
    .cta-group.mobile-btn-group {
        display: block;
        margin-bottom: 20px;
    }
     /*==================== Table ====================*/
    .table-main {
        border: 0 none;
    }  
      .table-main thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      .table-main tr {
        border-bottom: 2px solid #eee;
        display: block;
        margin-bottom: 20px;
      }
      .table-main td {
        font-weight: 700;
        display: block;
        padding-left: 40%;
        max-width: none;
        position: relative;
        border: 1px solid #cccaca;
        text-align: left;
      }
      .table-main td:before {
        /*
        * aria-label has no advantage, it won't be read inside a table
        content: attr(aria-label);
        */
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: normal;
        text-transform: uppercase;
      }
    .total-row th {
        display: none;
    }
    .total-row td {
        text-align: left;
    }
    footer {text-align: center;}
}

</style>
<body>
  <div id="invoiceholder">
  <div id="invoice" class="effect2">
    
    <div id="invoice-top">
      <div class="logo">
         <img src="https://lifeadvice.ca/public/images/118135255.png" alt="Logo" />
      </div>
    </div>
    <div style="background-color: #2B3481;">
       <div style="padding: 18px 30px 18px 30px;line-height: 22px;text-align: inherit;background-color: #2b3481;">
            <h1><span style="color:#ffffff;font-family:&quot;Open Sans&quot;,sans-serif;font-weight:800;font-size:30px;line-height:41px">Policy Confirmation</span></h1>
            <span style="color:#ffffff;font-family:&quot;Open Sans&quot;,sans-serif;font-size:18px;line-height:40px;font-weight:700">Thank you for your purchase!</span><br>
            <span style="color:#ffffff;font-family:&quot;Open Sans&quot;,sans-serif;font-size:18px;line-height:40px;font-weight:600">Reffrence ID:</span>
            <span style="color:#ffffff;font-family:&quot;Open Sans&quot;,sans-serif;font-size:18px;line-height:40px;font-weight:700">{{ $policy_number }}</span>
       </div>
    </div>
    <div style="padding: 18px 30px 18px 30px;font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;line-height:28px"><span style="color:#67778f;font-weight:500;font-size:14px">We truly appreciate your trust in our services and your decision to purchase an insurance policy with us. Your policy details and documentation will be emailed to you shortly. Please take the time to read them carefully and familiarize yourself with the terms and conditions. If you have any questions or need any assistance in understanding the specifics, don't hesitate to get in touch with us.</span></div>
    <div style="padding: 18px 30px 18px 30px;">
      <div style="background: #f9fafc;border: 1px solid #dae5ee;border-radius: 10px;padding: 15px;">
         <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit"><span style="white-space:pre-wrap;color:#2b3481;font-family:&quot;Open Sans&quot;,sans-serif;font-size:20px;font-weight:800;line-height:24px">Policy Information</span></div>

         <table>
            <tr>
               <th style="padding-top: 20px;">Policy Status</th>
               <td style="padding-top: 20px;">{{ $sale->status }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">Start Date</th>
               <td style="padding-top: 20px;">{{ $sale->start_date }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">End Date</th>
               <td style="padding-top: 20px;">{{ $sale->end_date }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">Coverage Amount</th>
               <td style="padding-top: 20px;">${{ $sale->coverage_ammount }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">Deductibles</th>
               <td style="padding-top: 20px;">{{ $sale->deductibles }}</td>
            </tr>
         </table>
      </div>
    </div>
    @foreach(DB::table('traveler_sale_informations')->where('sale_id' , $sale->id)->get() as $key => $r)
    <div style="padding: 18px 30px 18px 30px;">
      <div style="background: #f9fafc;border: 1px solid #dae5ee;border-radius: 10px;padding: 15px;">
         <div style="font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit"><span style="white-space:pre-wrap;color:#2b3481;font-family:&quot;Open Sans&quot;,sans-serif;font-size:20px;font-weight:800;line-height:24px">Traveler Information {{ $key+1 }}</span></div>
         <table>
            <tr>
               <th style="padding-top: 20px;">Name</th>
               <td style="padding-top: 20px;">{{ $r->f_name }} {{ $r->l_name }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">Gender</th>
               <td style="padding-top: 20px;">{{ $r->gender }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">Pre Existing Condition</th>
               <td style="padding-top: 20px;">{{ $r->pre_existing_condition }}</td>
            </tr>
            <tr>
               <th style="padding-top: 20px;">Date of Birth</th>
               <td style="padding-top: 20px;">{{ $r->date_of_birth }}</td>
            </tr>
         </table>
      </div>
    </div>
    @endforeach
    <div style="padding: 0px 30px 0px 30px;font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;line-height:28px">
         <span style="color:#67778f;font-weight:500;font-size:14px">We look forward to a long and rewarding relationship with you. Thank you once again for trusting Life Advice Insurance Inc. We're here to support you every step of the way.</span>
    </div>
    <div style="padding: 0px 30px 0px 30px;font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;line-height:28px">
         <span style="color:#67778f;font-weight:500;font-size:14px">Sincerely,</span>
    </div>
    <div style="padding: 0px 30px 0px 30px;font-family:&quot;Open Sans&quot;,sans-serif;text-align:inherit;line-height:28px">
         <span style="color:#67778f;font-weight:500;font-size:14px">Life Advice</span>
    </div>
  </div>
</div>
</body>