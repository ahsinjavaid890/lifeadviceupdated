@extends('layouts.layout-second')
@section('title','Register')
@section('content')
<style type="text/css">
    .error{
        color: red;
    }
    .fv-help-block{
        display: none;
    }
    #email-error{
        color: red;
    }
</style>
    <!--begin::Login-->
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
            <!--begin::Content-->
            <div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
                <!--begin::Container-->
                <div class="login-content login-content-signup d-flex flex-column">
                    <!--begin::Aside Top-->
                    <div class="d-flex flex-column-auto flex-column px-10">
                        <!--begin::Aside header-->
                        <a href="{{ url('') }}">
                            <img src="{{asset('public/admin/assets/media/custom/logo.png')}}" class="max-h-75px" alt="{{ env('APP_NAME') }}" />
                        </a>
                        <!--end::Aside header-->
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav pt-5 pt-lg-15 pb-10">
                            <!--begin::Wizard Steps-->
                            <div class="wizard-steps d-flex flex-column flex-sm-row">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper pr-7">
                                        <div class="wizard-icon">
                                            <i class="wizard-check ki ki-check"></i>
                                            <span class="wizard-number">1</span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Signup
                                            </h3>
                                            <div class="wizard-desc">
                                                Company Info
                                            </div>
                                        </div>
                                        <span class="svg-icon pl-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                    <div class="wizard-wrapper pr-7">
                                        <div class="wizard-icon">
                                            <i class="wizard-check ki ki-check"></i>
                                            <span class="wizard-number">2</span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Company
                                            </h3>
                                            <div class="wizard-desc">
                                                Company Info
                                            </div>
                                        </div>
                                        <span class="svg-icon pl-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <i class="wizard-check ki ki-check"></i>
                                            <span class="wizard-number">3</span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Finish
                                            </h3>
                                            <div class="wizard-desc">
                                                The Last Step
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                            </div>
                            <!--end::Wizard Steps-->
                        </div>
                        <!--end: Wizard Nav-->
                    </div>
                    <!--end::Aside Top-->
                    <!--begin::Signin-->
                    <div class="login-form">
                        <!--begin::Form-->
                        <form method="POST" action="{{ url('carrierregister') }}" class="form px-10" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            <!--begin: Wizard Step 1-->
                            <div class=" " data-wizard-type="step-content" data-wizard-state="current">
                                <!--begin::Title-->
                                <div class="pb-10 pb-lg-12">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Create a Company Account</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Already have an Account ?
                                        <a href="{{url('/')}}" class="text-primary font-weight-bolder">Login here</a>
                                    </div>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Full Name</label>
                                    <input onkeyup="closealert()" required type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="name" name="name" />
                                    <span id="name-error" class="invalid-feedback" role="alert"></span>
                                </div>
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Company Name</label>
                                    <input onkeyup="checkcompanyname(this.value)" type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="company_name" name="company_name" />
                                    <span id="company_name-error" class="invalid-feedback" role="alert"></span>
                                </div>
                                <!--end::Form Group-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Work Email address</label>
                                    <input onkeyup="checkemail()" type="email" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="work_email" name="email" />
                                    <span id="email-error"  role="alert"></span>
                                </div>
                                <!--end::Form Group-->
                            </div>
                            <!--end: Wizard Step 1-->
                            <!--begin: Wizard Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Title-->
                                <div class="pt-lg-0 pt-5 pb-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Continue Sign-Up</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Provide the following detils.
                                    </div>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Row-->
                                
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Carrier DOT Number</label>
                                            <input onkeyup="checkdotnumber(this.value)" type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="dot_number" name="dot_number" />
                                            <span id="dot_number-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">How many trucks are in your fleet?</label>
                                            <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="trucks_in_fleet" name="trucks_in_fleet" />
                                            <span id="trucks_in_fleet-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">How many drivers are you looking to hire within the next 90 days?</label>
                                            <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="how_many_drivers_in_next" name="how_many_drivers_in_next" />
                                            <span id="how_many_drivers_in_next-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
                                            <input type="password" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="password" name="password" />
                                            <span id="password-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>

                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Confirm Password</label>
                                            <input type="password" id="conferm-password" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="confirm-password" />
                                            <!-- <span class="form-text text-muted">Repeat your password</span> -->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <style type="text/css">
                                    .valid {
                                      color: green;
                                    }
                                    .invalid {
                                      color: red;
                                    }
                                    </style>
                                    <div class="col-md-12">
                                        <ul id="message">
                                              <li id="letter" class="invalid"><i class="icofont-tick-mark"></i> Lowercase Letter</li>
                                              <li id="capital" class="invalid"><i class="icofont-tick-mark"></i> One Capital Letter</li>
                                              <li id="number" class="invalid"><i class="icofont-tick-mark"></i> One Numeric Digit</li>
                                              <li id="length" class="invalid"><i class="icofont-tick-mark"></i> Minimum 8 characters</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end: Wizard Step 2-->
                            <!--begin: Wizard Step 3-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Title-->
                                <div class="pt-lg-0 pt-5 pb-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Finished!</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Provide the following detils.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div onclick="selectredirect('free-job-post')" class="free-job-post card step-finish-card">
                                            <div class="card-body text-center">
                                                <span>Create your first free job post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div onclick="selectredirect('dashboard')" class="dashboard card step-finish-card">
                                            <div class="card-body text-center">
                                                <span>take me to my dashboard</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input style="display:none" type="radio" value="dashboard" id="dashboard" name="redirect">
                                <input style="display:none" type="radio" value="jobpost" id="free-job-post" name="redirect">
                            </div>
                            <!--end: Wizard Step 5-->
                            <!--begin: Wizard Actions-->
                            <div class="d-flex justify-content-between pt-7">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3" data-wizard-type="action-prev">
                                        <span class="svg-icon svg-icon-md mr-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" />
                                                    <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> Previous
                                    </button>
                                </div>
                                <div>
                                        <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-submit" type="submit">
                                        Submit
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> 
                                        </button>
                                        <button id="check-password-button" type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" >
                                        Next
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> 
                                        </button>
                                        <button id="check-email-button" type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" >
                                        Next
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> 
                                        </button>
                                        <button style="display:none;" id="next-button" type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">
                                        Next
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </button>
                                </div>
                            </div>
                            <!--end: Wizard Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Container-->
            </div>
            <!--begin::Content-->
            <!--begin::Aside-->
            <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" style="background-image: url({{asset('public/carrier/assets/media/svg/illustrations/login-visual-4.svg')}}); background-size: cover; object-fit: cover;">
                <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom">
                    <!--begin::Aside title-->
                    <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">
                        Truck Driver<br />
                        Recruiting,<br />
                        Reimagined.
                    </h3>
                    <!--end::Aside title-->
                </div>
            </div>
            <!--end::Aside-->
        </div>        
@endsection

@section('script')
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
   $('#check-password-button').attr('disabled' , true);
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }

    var errortwo = $('.invalid').length;

    if(errortwo > 0)
    {
        $('#check-password-button').attr('disabled' , true);
    }else{
        $('#check-password-button').attr('disabled' , false);
    }


}
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
    });
$(document).ready(function() {
  $('#check-email-button').click(function(e) {
    e.preventDefault();
    var name = $('#name').val();
    var email = $('#work_email').val();
    var companyname = $('#company_name').val();

    $(".error").remove();

    if (name.length < 1) {
      $('#name').after('<span class="error">This field is required</span>');
    }
    if (companyname.length < 1) {
      $('#company_name').after('<span class="error">This field is required</span>');
    }
    if (email.length < 1) {
      $('#work_email').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#work_email').after('<span class="error">Please Enter a valid email</span>');
      }
    }

    var error = $('.error').length;

    if(error > 0)
    {
        console.log(error)
    }else{
        $('#check-email-button').hide();
        $('#check-password-button').show();
        $('#next-button').click();
    }

  });

});
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('#check-password-button').click(function(e) {
    e.preventDefault();
    var dot_number = $('#dot_number').val();
    var trucks_in_fleet = $('#trucks_in_fleet').val();
    var how_many_drivers_in_next = $('#how_many_drivers_in_next').val();
    var password = $('#password').val();
    var confermpassword = $('#conferm-password').val();

    $(".error").remove();

    if (dot_number.length < 1) {
      $('#dot_number').after('<span class="error">This field is required</span>');
    }
    if (trucks_in_fleet.length < 1) {
      $('#trucks_in_fleet').after('<span class="error">This field is required</span>');
    }
    if (how_many_drivers_in_next.length < 1) {
      $('#how_many_drivers_in_next').after('<span class="error">This field is required</span>');
    }
    if (password.length < 1) {
      $('#password').after('<span class="error">This field is required</span>');
    }
    if (confermpassword.length < 1) {
      $('#conferm-password').after('<span class="error">This field is required</span>');
    }

    if(password != confermpassword)
    {
        $('#conferm-password').after('<span class="error">The Password Confermation does not match</span><br>');
    }
    


    var error = $('.error').length;

    if(error > 0)
    {
        console.log(error)
    }else{
        $('#check-password-button').hide();
        $('#next-button').click();
    }

  });

});
</script>

@endsection