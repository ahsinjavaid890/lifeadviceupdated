@extends('admin.layouts.main-layout')
@section('title','Add Job')
@section('content')
    
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <!-- Progress bar -->
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <!-- End Progress bar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header pt-2 pl-0 pr-0 pb-0">
                                        <ul class="nav nav-success nav-pills" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="one-tab-2" data-toggle="tab" href="#one-2">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Basic Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="two-tab-2" data-toggle="tab" href="#two-2" aria-controls="two">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Hiring Req.</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="three-tab-2" data-toggle="tab" href="#three-2" aria-controls="three">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Routing & trans.</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="four-tab-2" data-toggle="tab" href="#four-2" aria-controls="four">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/subscription.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Subscriptions</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="five-tab-2" data-toggle="tab" href="#five-2" aria-controls="five">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/preview.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Preview</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade active show" id="one-2" role="tabpanel" aria-labelledby="one-tab-2">
                                        <!-- job details card -->
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Job Details</h3>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">How often will the driver get home?</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Daily</option>
                                                                <option>Once Every 1-2 Days</option>
                                                                <option>Once every 2-3 Days</option>
                                                                <option>Weekly</option>
                                                                <option>2-3 weeks</option>
                                                                <option>21+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Add Custom Home Time</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Add Custome Time Here" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Title</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Looking for fulltime driver for our native company" name="">
                                                            <span class="mt-4">Please enter your title.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Driver Type</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Company Solo</option>
                                                                <option>Team</option>
                                                                <option>Team LP</option>
                                                                <option>Lease Purchase</option>
                                                                <option>Owner Operator</option>
                                                                <option>Trainer, Mentor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Home Time</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Sunday</option>
                                                                <option>Monday</option>
                                                                <option>Tuesday</option>
                                                                <option>Wednesday</option>
                                                                <option>Thursday</option>
                                                                <option>Friday</option>
                                                                <option>Saturday</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Freight Type</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Dry Van</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Dedicated Account</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Yes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Avg Weekly Mile</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#advanceDetail">
                                                            Advanced Details
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!-- job details end -->
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Maps</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 map-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Hiring Area</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Select Hiring Map</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <p>Create New Hiring Map</p>
                                                    </div>
                                                    <div class="col-md-6 map-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Operating Area</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Select Hiring Map</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <p>Create New Operating Area Map</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Hiring Requirements</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 map-content">
                                                    <div class="form-group">
                                                        <label class="lable-control">Hiring Requirements Templates</label>
                                                        <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                            <option>Select Hiring Requirements Template</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <p>Create new hiring requirements template</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Pay</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Compensation</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>CPM</option>
                                                                <option>Salary</option>
                                                                <option>Percentage Pay</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Duty Time</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Duty Time</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Compensation amount</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Top 10% Of Earners are making</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Average Weekly Pay</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>$5,000 - $10,000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 map-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Average Yearly Pay</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>$5,000 - $10,000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Sign on Bonus</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Yes</option>
                                                                <option>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Sign on Bonus Amount</label>
                                                            <input class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" type="text" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-right">
                                                        <p class="text-primary" data-toggle="modal" data-target="#payOption">Edit Payout Schedule</p>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#advancepayOption">
                                                            Advanced Pay Options
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Benefits</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            Health Insurance
                                                        </label>
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            Life Insurance
                                                        </label>
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            401(k)
                                                        </label>
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            Dental Insurance
                                                        </label>
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            Vision Insurance
                                                        </label>
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            Tuition Reimbursement
                                                        </label>
                                                        <label class="checkbox checkbox-lg mb-3">
                                                            <input type="checkbox" name="Checkboxes3_1" />
                                                            <span class="mr-3"></span>
                                                            Paid time off
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Add Custom Benefit</label>
                                                                    <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Add Custom Benefit Here" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-primary">
                                                                    <i class="fa fa-plus"></i> Add New
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Equipment & Freight</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="lable-control">Freight Type</label>
                                                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Dry Van</option>
                                                                <option>reefer</option>
                                                                <option>reefer</option>
                                                                <option>Sand/Tanker</option>
                                                                <option>Heavy Haul</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="lable-control">Drop and Hook</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="lable-control">Live Load/Unload</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="lable-control">Driver Load/Unload</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%" name="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Make</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Model</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Year</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="card card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="d-flex p-0">
                                                    <div>
                                                        <h3 class="card-label font-weight-bolder text-dark">Equipment </h3>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <button class="btn btn-primary">+ Add Equipment</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Make</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="eg. Freightliner" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Model</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="eg. Cascadia" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Year</label>
                                                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="eg. 2020-2022" name="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <p>If you have different trucks, add multiple Make, Models, and years by clicking “Add Equipment”</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-primary" data-toggle="modal" data-target="#equipmentOption">Advanced Equipment Options</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-primary btn-lg">
                                                            Next <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="two-2" role="tabpanel" aria-labelledby="two-tab-2">
                                        <div class="card card-custom card-stretch">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Hiring Requirements</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form class="form">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Minimum Age</label>
                                                                    <small>This referral code will be sent to your CRM</small>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>21 Years Old</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- If they Select other then this field should popup -->
                                                            <div class="col-md-6">
                                                                <label class="lable-control">Enter the Minimum Age</label>
                                                                    <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Minimum Experience</label> <br>
                                                                    <small>Tractor/Trailer/OTR</small>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Student</option>
                                                                        <option>Recent Graduate</option>
                                                                        <option>1 Month</option>
                                                                        <option>2 Months</option>
                                                                        <option>3 months</option>
                                                                        <option>4 Months</option>
                                                                        <option>5 Months</option>
                                                                        <option>6 Months</option>
                                                                        <option>7 Months</option>
                                                                        <option>8 Months</option>
                                                                        <option>9 Months</option>
                                                                        <option>10 Months</option>
                                                                        <option>11 Months</option>
                                                                        <option>12 Months</option>
                                                                        <option>1+ Year</option>
                                                                        <option>2+ Years</option>
                                                                        <option>3+ Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Notes about Experience</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving Violations</label>
                                                                    <small>Maximum in 3 year period</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Notes</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Major Moving Violations</label>
                                                                    <small>Maximum in 3 year period</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">License Suspensions</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- if they Select yes -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Reason of Suspensions</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">DOT Recordable Accidents </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Preventable accidents within the last</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Reason of Suspensions</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Preventable accidents within the last</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Incidents</label>
                                                                    <small>Maximum in 3 year period</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Ticket/Accident/Incident Combo </label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- If they pressed Yes -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Specify in a free form fill</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Maximum # of Jobs </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Unemployment</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Information</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Felony Convictions </label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Misdemeanors</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Drugs/DUIs </label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Type of Drug Test </label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Urine</option>
                                                                        <option>Hair Follicle</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Type of Drug Test </label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Accepting SAP Drivers? </label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- If they pressed Yes then it should appear -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Information</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Physical</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Automatic DQ’s </label>
                                                                    <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Automatic DQ’s </label>
                                                                    <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Automatic DQ’s </label>
                                                                    <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button class="mt-8 btn btn-primary">
                                                                    Add DQ's
                                                                </button>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Accommodate an Automatic Restriction? </label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Cameras Installed in the Trucks?</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- If they pressed Yes -->

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Select Type</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Inward</option>
                                                                        <option>Outward</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Cameras are</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Continuously recording</option>
                                                                        <option>Only during incidents</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Camera Facing</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Inward</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Camera Recording</label>
                                                                    <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Only during incidents</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <h4>Required Endorsements</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Hazmat
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    TWIC Card
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Tanker
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Hazardous Tank Endorsement
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Double/Triple
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Passenger endorsement
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    No endorsements required
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="d-flex">
                                                                    <div class="ml-auto">
                                                                        <button class="btn btn-lg btn-primary">Save as template</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-white mr-3 btn-lg">
                                                            <i class="fa fa-arrow-left"></i>Previous
                                                        </button>
                                                        <button class="btn btn-primary btn-lg">
                                                            Next <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="three-2" role="tabpanel" aria-labelledby="three-tab-2">
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Routing & trans.</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 routing-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Referral Code</label>
                                                            <p>This referral code will be sent to your CRM</p>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" style="margin-top:32px !important;" name="" placeholder="Looking for fulltime driver for our native company">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 routing-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Email</label>
                                                            <p>Select the email you would like to send applications from this job post to</p>
                                                            <select class="form-control select2 form-control-lg form-control-solid" style="width:100%; height: 55px !important; background: #f3f6f9 !important; border: 1px solid #E4E6EF !important;" id="kt_select2_11" multiple name="param">
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 text-right add-email">
                                                            <span>Add New Email</span>
                                                        </div>
                                                        <div class="modal-dialog add-email-model" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add Email</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter Email">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary font-weight-bold">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 routing-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Integrated CRM</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Driver Reach">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-white mr-3 btn-lg">
                                                            <i class="fa fa-arrow-left"></i>Previous
                                                        </button>
                                                        <button class="btn btn-primary btn-lg">
                                                            Next <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="four-2" role="tabpanel" aria-labelledby="four-tab-2">
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Routing & trans.</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 post-content">
                                                        <h2>How would you like to post your job?</h2>
                                                        <p>We're examining your job posting and will publish it soon one of our administrators approves it.</p>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="card my-left card">
                                                            <div class="card-body post-jobs-titles">
                                                                <h2>Free Job Post</h2>
                                                                <div class="correct-pin">
                                                                    <div class="my-icon">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-title">
                                                                        <p>Post your job for free and get normal visability.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right">
                                                                    <button type="reset" class="btn btn-primary mr-2">Publish</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="card my-right-card">
                                                            <div class="card-body Sponsored-title">
                                                                <h2>Sponsored Post</h2>
                                                                <div class="correct-pins">
                                                                    <div class="my-icons">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-titles">
                                                                        <p>Join our pay-per-hire program</p>
                                                                    </div>
                                                                </div>
                                                                <div class="correct-pins">
                                                                    <div class="my-icons">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-titles">
                                                                        <p>Advertise your posts on the RTR Homepage</p>
                                                                    </div>
                                                                </div>
                                                                <div class="correct-pins">
                                                                    <div class="my-icons">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-titles">
                                                                        <p>Advertise online to get even more exposure</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right see-options">
                                                                    <button type="reset" class="btn btn-primary mr-2 see-options">See All Options</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-white mr-3 btn-lg">
                                                            <i class="fa fa-arrow-left"></i>Previous
                                                        </button>
                                                        <button class="btn btn-primary btn-lg">
                                                            Next <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="five-2" role="tabpanel" aria-labelledby="five-tab-2">
                                        <div class="accordion accordion-solid accordion-toggle-plus mt-5" id="accordionExample6">
                                            <div class="card">
                                                <div class="card-header" id="headingOne6">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}"> Basic Details
                                                    </div>
                                                </div>
                                                <div id="collapseOne6" class="collapse show" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <b>How often will the driver get home?</b>
                                                                <p class="mt-2">Daily</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <b>Custom Home Time</b>
                                                                <p class="mt-2">Title goes here</p>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <b>Title</b>
                                                                <p class="mt-2">Title goes here</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <b>Driver Type</b>
                                                                <p class="mt-2">Company Solo</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <b>Home Time</b>
                                                                <p class="mt-2">Sunday</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Freight Type</b>
                                                                <p class="mt-2">Dry Van</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Dedicated Account</b>
                                                                <p class="mt-2">Yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Avg Weekly Mile</b>
                                                                <p class="mt-2">1000</p>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <h4 class="mt-3 mb-3 text-primary">
                                                                    Advance Details
                                                                </h4>
                                                            </div>

                                                            <div class="col-md-12 mb-3">
                                                                <b>What are the primary running lanes for this position?</b>
                                                                <p class="mt-2">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                </p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Avg Length of haul (Miles)</b>
                                                                <p class="mt-2">something</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Type of Fuel Card</b>
                                                                <p class="mt-2">Debit</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Tolls</b>
                                                                <p class="mt-2">Available</p>
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <b>24 hour Dispatch</b>
                                                                <p class="mt-2">Yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>EZ Pass</b>
                                                                <p class="mt-2">yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Pre-Pass</b>
                                                                <p class="mt-2">Yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Non-Forced Dispatch</b>
                                                                <p class="mt-2">yes</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}"> Hiring Req.
                                                    </div>
                                                </div>
                                                <div id="collapseTwo6" class="collapse" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        ...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}"> Routing & trans.
                                                    </div>
                                                </div>
                                                <div id="collapseThree6" class="collapse" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        ...
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFour6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/preview.svg')}}"> Subscriptions
                                                    </div>
                                                </div>
                                                <div id="collapseFour6" class="collapse" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        ...
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-7 mt-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-white mr-3 btn-lg">
                                                            <i class="fa fa-arrow-left"></i>Previous
                                                        </button>
                                                        <button class="btn btn-primary btn-lg">
                                                            Submit Job <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    <div class="modal fade" id="advanceDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advance Detail</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">What are the primary running lanes for this position?</label>
                            <textarea rows="5" class="form-control form-control-solid" style="height:100px;">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Avg Length of haul (Miles)</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Type of Fuel Card</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="eg. 25,000 miles" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Tolls</label>
                            <textarea rows="4" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">24 hour Dispatch</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">EZ Pass</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Pre-Pass</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Non-Forced Dispatch</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Payout Option -->
<div class="modal fade" id="payOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Payout Schedule</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <h5>Payout #1</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">When?</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Orientation</option>
                                <option>1st Dispatch</option>
                                <option>Delivery of 1st Load</option>
                                <option>Month 1</option>
                                <option>Month 2</option>
                                <option>Month 3</option>
                                <option>Month 4</option>
                                <option>Month 5</option>
                                <option>Month 6</option>
                                <option>Month 7</option>
                                <option>Month 8</option>
                                <option>Month 9</option>
                                <option>Month 10</option>
                                <option>Month 11</option>
                                <option>Month 12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <h5>Payout #2</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">When?</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Orientation</option>
                                <option>1st Dispatch</option>
                                <option>Delivery of 1st Load</option>
                                <option>Month 1</option>
                                <option>Month 2</option>
                                <option>Month 3</option>
                                <option>Month 4</option>
                                <option>Month 5</option>
                                <option>Month 6</option>
                                <option>Month 7</option>
                                <option>Month 8</option>
                                <option>Month 9</option>
                                <option>Month 10</option>
                                <option>Month 11</option>
                                <option>Month 12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mr-0">
                        <a href="javascript:void(0)">Add New Payout</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Set Schedule</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="advancepayOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advance Detail</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Breakdown Pay ($)</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Cash Advance</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Detention pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>1 hour</option>
                                <option>2 hours</option>
                                <option>3 hours</option>
                                <option>4 hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Pays Amount ($)</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Are drivers paid the same for loaded and empty miles?</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <!-- If selected No in the above field then show this field. -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Miles CPM chat</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">End of Pay Week</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Hazmat Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <!-- If selected Yes then show this input-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Select Option</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>$0.01</option>
                                <option>$0.02</option>
                                <option>$0.03</option>
                                <option>$0.04</option>
                                <option>$0.05</option>
                                <option>$0.06</option>
                                <option>$0.07</option>
                                <option>$0.08</option>
                                <option>$0.09</option>
                                <option>$0.10</option>
                                <option>$0.11</option>
                                <option>$0.12</option>
                                <option>$0.13</option>
                                <option>$0.14</option>
                                <option>$0.15</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Holiday Pay</label>
                            <textarea class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" rows="8"></textarea>
                            <small>Max 400 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">How Are Drivers Paid?</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Direct Deposit</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they select Other -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Add option</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Layover Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>1 hour</option>
                                <option>2 hours</option>
                                <option>3 hours</option>
                                <option>4 hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Minimum Pay Guarantee</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Weekly</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Multi-stop Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Paid On</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>All stops</option>
                                <option>All stop except first and last stop</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they select Other -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Specify other</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">New York City Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Northeast Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount(CPM)</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Orientation Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Pay Increase</label>
                            <textarea class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" rows="6"></textarea>
                            <small>Max 200 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Per Diem</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount(CPM)</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Referral Bonus ($)</label>
                            <input type="number" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Safety Bonus</label>
                            <textarea class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" rows="6"></textarea>
                            <small>Max 400 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Start of Pay Week</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Type of Driver Pay</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option> Practical Millage Pay</option>
                                <option>HHG</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Unloading Pay ($)</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Vacation Pay</label>
                            <textarea class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" rows="6" style="height:100px;"></textarea>
                            <small>Max 200 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">When Are Drivers Paid?</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary font-weight-bold">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Equipment Options -->
<div class="modal fade" id="equipmentOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advanced Equipment Options</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Engine</label>
                            <input type="text" class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Transmission Type</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Automatic</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Truck Speed (Cruise / Pedal)</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Cruise</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Inverter</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">APU/EPU</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Bunks</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>SIngle Bunk</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Orientation</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Inward Facing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Recording</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Camera Recording</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Can Truck Be Taken Home?</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Truck Permanently Assigned</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Navigation</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Camera Recording</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Communication</label>
                            <textarea class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Enter your text here..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Navigation</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">DirecTV</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">SiriusXM</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Refrigerator</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Microwave</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Collision Mitigation</label>
                            <select class="form-control border-0 form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Save Changes</button>
            </div>
        </div>
    </div>
</div>
@endsection