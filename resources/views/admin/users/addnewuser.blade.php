@extends('admin.layouts.main-layout')
@section('title','Add New User')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
           @include('alerts.index')
           <form method="post" action="{{ url('admin/users/addnewuser') }}" enctype="multipart/form-data">
                        @csrf
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label text-warning">
                            Personal Details
                            <div class="text-muted pt-2 font-size-sm">Add New User</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <link href="{{ asset('public/admin/assetstwo/css/essentials.css')}}" rel="stylesheet" type="text/css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style type="text/css">
                                    
                                    .switch.switch-success>input:checked+.switch-label {
                                        border-color: #3a5371 !important;
                                        background: #3a5371 !important;
                                    }
                                </style>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><strong>Management Capability</strong></label>
                                <label> License and E&O Management capability ? </label>
                                <label class="switch switch-success switch-round">
                                    <input type="checkbox" name="mg_capability" value="1">
                                    <span class="switch-label" data-on="YES" data-off="NO"></span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Select Logo</label>
                                        <div class="fancy-file-upload">
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="form-control" name="logo" onchange="jQuery(this).next('input').val(this.value);">
                                            <input type="text" class="form-control" placeholder="no file selected" readonly="">
                                            <span class="button">Choose File</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="" >SELECT ACCOUNT STATUS</option>
                                    <option value="active">Active</option>
                                    <option value="pending">pending</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control" name="user_type" id="user_type"  onchange="mustparent()">
                                    <option value="">SELECT USER TYPE</option>
                                    <option selected="selected" value="admin">Admin</option>
                                    <option value="broker">AB Broker</option>
                                    <option value="agent">AB Agent</option>
                                    <option value="db">AB Downline Broker</option>
                                    <option value="da">AB Downline Agent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Partner User</label>
                                <select class="form-control" name="parent_id" aria-label="Default select example">
                                  <option selected>SELECT USER TYPE</option>
                                  <option value="N\A">N\A</option>
                                  <option value="1">1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Fiscal Year Starts From</label>
                                <input type="date" name="fiscal_year" class="form-control"  >
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-envelope mx-2"></i> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-phone mx-2"></i>Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="Address" id="address" name="address" value=""> 
                                </div>
                                <div class="col-md-3">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" id="city" name="city" value=""> 
                                </div>
                                <div class="col-md-3">
                                    <label>Province</label>
                                    <input type="text" class="form-control" placeholder="Province" id="province" name="province" value=""> 
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" name="postal" class="form-control" placeholder="Passcode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Country</label>
                                        <select id="country" class="form-control" name="country">
                                            <option selected="selected" label="Select a country" value="">Select Country</option>
                                            <optgroup id="country-optgroup-Africa" label="Africa">
                                            <option value="DZ" label="Algeria" >Algeria</option>
                                            <option value="AO" label="Angola" >Angola</option>
                                            <option value="BJ" label="Benin" >Benin</option>
                                            <option value="BW" label="Botswana" >Botswana</option>
                                            <option value="BF" label="Burkina Faso" >Burkina Faso</option>
                                            <option value="BI" label="Burundi" >Burundi</option>
                                            <option value="CM" label="Cameroon" >Cameroon</option>
                                            <option value="CV" label="Cape Verde" >Cape Verde</option>
                                            <option value="CF" label="Central African Republic" >Central African Republic</option>
                                            <option value="TD" label="Chad" >Chad</option>
                                            <option value="KM" label="Comoros" >Comoros</option>
                                            <option value="CG" label="Congo - Brazzaville" >Congo - Brazzaville</option>
                                            <option value="CD" label="Congo - Kinshasa" >Congo - Kinshasa</option>
                                            <option value="CI" label="Côte d’Ivoire" >Côte d’Ivoire</option>
                                            <option value="DJ" label="Djibouti" >Djibouti</option>
                                            <option value="EG" label="Egypt" >Egypt</option>
                                            <option value="" label="Equatorial Guinea" >Equatorial Guinea</option>
                                            <option value="ER" label="Eritrea" >Eritrea</option>
                                            <option value="ET" label="Ethiopia" >Ethiopia</option>
                                            <option value="GA" label="Gabon" >Gabon</option>
                                            <option value="GM" label="Gambia" >Gambia</option>
                                            <option value="GH" label="Ghana" >Ghana</option>
                                            <option value="GN" label="Guinea" >Guinea</option>
                                            <option value="GW" label="Guinea-Bissau" >Guinea-Bissau</option>
                                            <option value="KE" label="Kenya" >Kenya</option>
                                            <option value="LS" label="Lesotho" >Lesotho</option>
                                            <option value="LR" label="Liberia" >Liberia</option>
                                            <option value="LY" label="Libya" >Libya</option>
                                            <option value="MG" label="Madagascar" >Madagascar</option>
                                            <option value="MW" label="Malawi" >Malawi</option>
                                            <option value="ML" label="Mali" >Mali</option>
                                            <option value="MR" label="Mauritania" >Mauritania</option>
                                            <option value="MU" label="Mauritius" >Mauritius</option>
                                            <option value="YT" label="Mayotte" >Mayotte</option>
                                            <option value="MA" label="Morocco" >Morocco</option>
                                            <option value="MZ" label="Mozambique" >Mozambique</option>
                                            <option value="NA" label="Namibia" >Namibia</option>
                                            <option value="NE" label="Niger" >Niger</option>
                                            <option value="NG" label="Nigeria" >Nigeria</option>
                                            <option value="RW" label="Rwanda" >Rwanda</option>
                                            <option value="RE" label="Réunion" >Réunion</option>
                                            <option value="SH" label="Saint Helena" >Saint Helena</option>
                                            <option value="SN" label="Senegal" >Senegal</option>
                                            <option value="SC" label="Seychelles" >Seychelles</option>
                                            <option value="SL" label="Sierra Leone" >Sierra Leone</option>
                                            <option value="SO" label="Somalia" >Somalia</option>
                                            <option value="ZA" label="South Africa" >South Africa</option>
                                            <option value="SD" label="Sudan" >Sudan</option>
                                            <option value="SZ" label="Swaziland" >Swaziland</option>
                                            <option value="ST" label="São Tomé and Príncipe" >São Tomé and Príncipe</option>
                                            <option value="TZ" label="Tanzania" >Tanzania</option>
                                            <option value="TG" label="Togo" >Togo</option>
                                            <option value="TN" label="Tunisia" >Tunisia</option>
                                            <option value="UG" label="Uganda" >Uganda</option>
                                            <option value="EH" label="Western Sahara" >Western Sahara</option>
                                            <option value="ZM" label="Zambia" >Zambia</option>
                                            <option value="ZW" label="Zimbabwe" >Zimbabwe</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-Americas" label="Americas">
                                            <option value="AI" label="Anguilla" >Anguilla</option>
                                            <option value="AG" label="Antigua and Barbuda" >Antigua and Barbuda</option>
                                            <option value="AR" label="Argentina" >Argentina</option>
                                            <option value="AW" label="Aruba" >Aruba</option>
                                            <option value="BS" label="Bahamas" >Bahamas</option>
                                            <option value="BB" label="Barbados" >Barbados</option>
                                            <option value="BZ" label="Belize" >Belize</option>
                                            <option value="BM" label="Bermuda" >Bermuda</option>
                                            <option value="BO" label="Bolivia" >Bolivia</option>
                                            <option value="BR" label="Brazil" >Brazil</option>
                                            <option value="VG" label="British Virgin Islands" >British Virgin Islands</option>
                                            <option value="CA" label="Canada" >Canada</option>
                                            <option value="KY" label="Cayman Islands" >Cayman Islands</option>
                                            <option value="CL" label="Chile" >Chile</option>
                                            <option value="CO" label="Colombia" >Colombia</option>
                                            <option value="CR" label="Costa Rica" >Costa Rica</option>
                                            <option value="CU" label="Cuba" >Cuba</option>
                                            <option value="DM" label="Dominica" >Dominica</option>
                                            <option value="DO" label="Dominican Republic" >Dominican Republic</option>
                                            <option value="EC" label="Ecuador" >Ecuador</option>
                                            <option value="SV" label="El Salvador" >El Salvador</option>
                                            <option value="FK" label="Falkland Islands" >Falkland Islands</option>
                                            <option value="GF" label="French Guiana" >French Guiana</option>
                                            <option value="GD" label="Greenland" >Greenland</option>
                                            <option value="GD" label="Grenada" >Grenada</option>
                                            <option value="GP" label="Guadeloupe" Guadeloupe</option>
                                            <option value="GT" label="Guatemala" >Guatemala</option>
                                            <option value="GY" label="Guyana" >Guyana</option>
                                            <option value="HT" label="Haiti" >Haiti</option>
                                            <option value="HN" label="Honduras" >Honduras</option>
                                            <option value="JM" label="Jamaica" >Jamaica</option>
                                            <option value="MQ" label="Martinique" >Martinique</option>
                                            <option value="MX" label="Mexico" >Mexico</option>
                                            <option value="MS" label="Montserrat" >Montserrat</option>
                                            <option value="AN" label="Netherlands Antilles" >Netherlands Antilles</option>
                                            <option value="NI" label="Nicaragua" >Nicaragua</option>
                                            <option value="PA" label="Panama" >Panama</option>
                                            <option value="PY" label="Paraguay" >Paraguay</option>
                                            <option value="PE" label="Peru" >Peru</option>
                                            <option value="PR" label="Puerto Rico" >Puerto Rico</option>
                                            <option value="BL" label="Saint Barthélemy" >Saint Barthélemy</option>
                                            <option value="KN" label="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
                                            <option value="LC" label="Saint Lucia" >Saint Lucia</option>
                                            <option value="MF" label="Saint Martin" >Saint Martin</option>
                                            <option value="PM" label="Saint Pierre and Miquelon" >Saint Pierre and Miquelon</option>
                                            <option value="VC" label="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
                                            <option value="SR" label="Suriname" >Suriname</option>
                                            <option value="TT" label="Trinidad and Tobago" >Trinidad and Tobago</option>
                                            <option value="TC" label="Turks and Caicos Islands" >Turks and Caicos Islands</option>
                                            <option value="VI" label="U.S. Virgin Islands" >U.S. Virgin Islands</option>
                                            <option value="US" label="United States" >United States</option>
                                            <option value="UY" label="Uruguay" >Uruguay</option>
                                            <option value="VE" label="Venezuela" >Venezuela</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-Asia" label="Asia">
                                            <option value="AF" label="Afghanistan" >Afghanistan</option>
                                            <option value="AM" label="Armenia" >Armenia</option>
                                            <option value="AZ" label="Azerbaijan" >Azerbaijan</option>
                                            <option value="BH" label="Bahrain" >Bahrain</option>
                                            <option value="BD" label="Bangladesh" >Bangladesh</option>
                                            <option value="BT" label="Bhutan" >Bhutan</option>
                                            <option value="BN" label="Brunei" >Brunei</option>
                                            <option value="KH" label="Cambodia" >Cambodia</option>
                                            <option value="CN" label="China" >China</option>
                                            <option value="CY" label="Cyprus" >Cyprus</option>
                                            <option value="GE" label="Georgia" >Georgia</option>
                                            <option value="HK" label="Hong Kong SAR China" >Hong Kong SAR China</option>
                                            <option value="IN" label="India" >India</option>
                                            <option value="ID" label="Indonesia" >Indonesia</option>
                                            <option value="IR" label="Iran" >Iran</option>
                                            <option value="IQ" label="Iraq" >Iraq</option>
                                            <option value="IL" label="Israel" >Israel</option>
                                            <option value="JP" label="Japan" >Japan</option>
                                            <option value="JO" label="Jordan" >Jordan</option>
                                            <option value="KZ" label="Kazakhstan" ></option>
                                            <option value="KW" label="Kuwait"></option>Kuwait</option>
                                            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="LA" label="Laos">Laos</option>
                                            <option value="LB" label="Lebanon">Lebanon</option>
                                            <option value="MO" label="Macau SAR China">Macau SAR China</option>
                                            <option value="MY" label="Malaysia">Malaysia</option>
                                            <option value="MV" label="Maldives">Maldives</option>
                                            <option value="MN" label="Mongolia">Mongolia</option>
                                            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                                            <option value="NP" label="Nepal">Nepal</option>
                                            <option value="NT" label="Neutral Zone">Neutral Zone</option>
                                            <option value="KP" label="North Korea">North Korea</option>
                                            <option value="OM" label="Oman">Oman</option>
                                            <option value="PK" label="Pakistan">Pakistan</option>
                                            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                                            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                                            <option value="PH" label="Philippines">Philippines</option>
                                            <option value="QA" label="Qatar">Qatar</option>
                                            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                                            <option value="SG" label="Singapore">Singapore</option>
                                            <option value="KR" label="South Korea">South Korea</option>
                                            <option value="LK" label="Sri Lanka">Sri Lanka</option>
                                            <option value="SY" label="Syria">Syria</option>
                                            <option value="TW" label="Taiwan">Taiwan</option>
                                            <option value="TJ" label="Tajikistan">Tajikistan</option>
                                            <option value="TH" label="Thailand">Thailand</option>
                                            <option value="TL" label="Timor-Leste">Timor-Leste</option>
                                            <option value="TR" label="Turkey">Turkey</option>
                                            <option value="TM" label="Turkmenistan">Turkmenistan</option>
                                            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                                            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                                            <option value="VN" label="Vietnam">Vietnam</option>
                                            <option value="YE" label="Yemen">Yemen</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-Europe" label="Europe">
                                            <option value="AL" label="Albania">Albania</option>
                                            <option value="AD" label="Andorra">Andorra</option>
                                            <option value="AT" label="Austria">Austria</option>
                                            <option value="BY" label="Belarus">Belarus</option>
                                            <option value="BE" label="Belgium">Belgium</option>
                                            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="BG" label="Bulgaria">Bulgaria</option>
                                            <option value="HR" label="Croatia">Croatia</option>
                                            <option value="CY" label="Cyprus">Cyprus</option>
                                            <option value="CZ" label="Czech Republic">Czech Republic</option>
                                            <option value="DK" label="Denmark">Denmark</option>
                                            <option value="DD" label="East Germany">East Germany</option>
                                            <option value="EE" label="Estonia">Estonia</option>
                                            <option value="FO" label="Faroe Islands">Faroe Islands</option>
                                            <option value="FI" label="Finland">Finland</option>
                                            <option value="FR" label="France">France</option>
                                            <option value="DE" label="Germany">Germany</option>
                                            <option value="GI" label="Gibraltar">Gibraltar</option>
                                            <option value="GR" label="Greece">Greece</option>
                                            <option value="GG" label="Guernsey">Guernsey</option>
                                            <option value="HU" label="Hungary">Hungary</option>
                                            <option value="IS" label="Iceland">Iceland</option>
                                            <option value="IE" label="Ireland">Ireland</option>
                                            <option value="IM" label="Isle of Man">Isle of Man</option>
                                            <option value="IT" label="Italy">Italy</option>
                                            <option value="JE" label="Jersey">Jersey</option>
                                            <option value="LV" label="Latvia">Latvia</option>
                                            <option value="LI" label="Liechtenstein">Liechtenstein</option>
                                            <option value="LT" label="Lithuania">Lithuania</option>
                                            <option value="LU" label="Luxembourg">Luxembourg</option>
                                            <option value="MK" label="Macedonia">Macedonia</option>
                                            <option value="MT" label="Malta">Malta</option>
                                            <option value="FX" label="Metropolitan France">Metropolitan France</option>
                                            <option value="MD" label="Moldova">Moldova</option>
                                            <option value="MC" label="Monaco">Monaco</option>
                                            <option value="ME" label="Montenegro">Montenegro</option>
                                            <option value="NL" label="Netherlands">Netherlands</option>
                                            <option value="NO" label="Norway">Norway</option>
                                            <option value="PL" label="Poland">Poland</option>
                                            <option value="PT" label="Portugal">Portugal</option>
                                            <option value="RO" label="Romania">Romania</option>
                                            <option value="RU" label="Russia">Russia</option>
                                            <option value="SM" label="San Marino">San Marino</option>
                                            <option value="RS" label="Serbia">Serbia</option>
                                            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="SK" label="Slovakia">Slovakia</option>
                                            <option value="SI" label="Slovenia">Slovenia</option>
                                            <option value="ES" label="Spain">Spain</option>
                                            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="SE" label="Sweden">Sweden</option>
                                            <option value="CH" label="Switzerland">Switzerland</option>
                                            <option value="UA" label="Ukraine">Ukraine</option>
                                            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                                            <option value="GB" label="United Kingdom">United Kingdom</option>
                                            <option value="VA" label="Vatican City">Vatican City</option>
                                            <option value="AX" label="Åland Islands">Åland Islands</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-Oceania" label="Oceania">
                                            <option value="AS" label="American Samoa">American Samoa</option>
                                            <option value="AQ" label="Antarctica">Antarctica</option>
                                            <option value="AU" label="Australia">Australia</option>
                                            <option value="BV" label="Bouvet Island">Bouvet Island</option>
                                            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="CX" label="Christmas Island">Christmas Island</option>
                                            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                                            <option value="CK" label="Cook Islands">Cook Islands</option>
                                            <option value="FJ" label="Fiji">Fiji</option>
                                            <option value="PF" label="French Polynesia">French Polynesia</option>
                                            <option value="TF" label="French Southern Territories">French Southern Territories</option>
                                            <option value="GU" label="Guam">Guam</option>
                                            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                            <option value="KI" label="Kiribati">Kiribati</option>
                                            <option value="MH" label="Marshall Islands">Marshall Islands</option>
                                            <option value="FM" label="Micronesia">Micronesia</option>
                                            <option value="NR" label="Nauru">Nauru</option>
                                            <option value="NC" label="New Caledonia">New Caledonia</option>
                                            <option value="NZ" label="New Zealand">New Zealand</option>
                                            <option value="NU" label="Niue">Niue</option>
                                            <option value="NF" label="Norfolk Island">Norfolk Island</option>
                                            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="PW" label="Palau">Palau</option>
                                            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
                                            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                                            <option value="WS" label="Samoa">Samoa</option>
                                            <option value="SB" label="Solomon Islands">Solomon Islands</option>
                                            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="TK" label="Tokelau">Tokelau</option>
                                            <option value="TO" label="Tonga">Tonga</option>
                                            <option value="TV" label="Tuvalu">Tuvalu</option>
                                            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                                            <option value="VU" label="Vanuatu">Vanuatu</option>
                                            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                                        </optgroup>
                                    </select>   
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Little About Me</label>
                                <textarea class="form-control" name="about_me" rows="3" placeholder="Write Something About You....."></textarea>
                            </div>
                         </div>
                    </div>   
                </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h2 class="mt-3 text-danger">Account Security</h2>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                        <label><strong><i class="fa fa-user"></i> Username</strong></label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="username" class="form-control" placeholder="Username" value="" style="margin-left: -12px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <label><strong><i class="fa fa-lock"></i> Change Password</strong></label>
                        </div>
                        <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-5" style="padding:0;">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" onkeyup="validatePassword();">
                        </div>
                        <div class="col-md-6">
                        <input type="button" onclick="generatepassword();" value="Generate Password" class="btn btn-default">
                        </div>
                        <div class="col-md-12" style="padding:0;">
                        <span class="help-inline col-xs-12 col-sm-7" id="password_check" style="padding-top:5px; padding-left:0;"><span class="text-info"><i class="fa fa-warning"></i> Leave blank to use old password</span></span>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="panel-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" id="submitbtn">
                    </div>
                    <input type="hidden" name="update_id" value="65">
                    <input type="hidden" name="current_logo" id="current_logo" value="">
                </div>
            </div>
            </form>
                        
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal-->
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js')}}"></script>

<script type="text/javascript">
function checkavailable()
{
document.getElementById('username_check').innerHTML = 'Please wait...';

        
var username = document.getElementById('username').value;
 $.ajax({
 type: 'get',
 url: 'get_username.php',
 data: {
 get_option: username,
 },
 success: function (response) {
     if(response >= 1){
        document.getElementById('username_check').innerHTML = '<i class="fa fa-close fa-lg text-danger"></i> Unavailable'; 
        document.getElementById('submitbtn').disabled = true;
     } else {
        document.getElementById('username_check').innerHTML = '<i class="fa fa-check fa-lg text-success"></i> Available';  
        document.getElementById('submitbtn').disabled = false;
     }
// document.getElementById("username_check").innerHTML=response; 
 }
 });
}

//"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}"
function validatePassword() {
    //document.getElementById('password').type = 'password';
    var newPassword = document.getElementById('password').value;
    var minNumberofChars = 8;
    var maxNumberofChars = 16;
    var regularExpression  = /^(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
    //alert(newPassword); 
    if(newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars){
        // document.getElementById('password_check').innerHTML = '<i class="fa fa-check fa-lg red"></i> Minimum 8 character required';
        // document.getElementById('submitbtn').disabled = true;
    } else 
    if(!regularExpression.test(newPassword)) {
        // //alert("password should contain atleast one number and one special character");
        // document.getElementById('password_check').innerHTML = '<i class="fa fa-close fa-lg red"></i> Atleast one capitalized character, one number and one special character required';
        // document.getElementById('submitbtn').disabled = true;
        // return false;
    } else {
        document.getElementById('submitbtn').disabled = false;
        document.getElementById('password_check').innerHTML = '<i class="fa fa-check fa-lg green"></i> Valid Password';
    }
}

function generatepassword(){
String.prototype.pick = function(min, max) {
    var n, chars = '';

    if (typeof max === 'undefined') {
        n = min;
    } else {
        n = min + Math.floor(Math.random() * (max - min + 1));
    }

    for (var i = 0; i < n; i++) {
        chars += this.charAt(Math.floor(Math.random() * this.length));
    }

    return chars;
};

String.prototype.shuffle = function() {
    var array = this.split('');
    var tmp, current, top = array.length;

    if (top) while (--top) {
        current = Math.floor(Math.random() * (top + 1));
        tmp = array[current];
        array[current] = array[top];
        array[top] = tmp;
    }

    return array.join('');
};

var specials = '@$%&*?';
var lowercase = 'abcdefghijklmnopqrstuvwxyz';
var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var numbers = '0123456789';

var all = uppercase + lowercase + numbers + specials;
//var all = specials + lowercase + uppercase + numbers;

var password = '';
password += uppercase.pick(1);
password += lowercase.pick(5);
password += specials.pick(1);
password += numbers.pick(3);
//password += all.pick(3, 10);
//password = password.shuffle();
document.getElementById('password').type = 'text';
document.getElementById('password').value = password;

validatePassword(); 
}
</script>
@endsection