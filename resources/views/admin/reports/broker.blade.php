@extends('admin.layouts.main-layout')
@section('title','Broker Commission Reports')
@section('content')
--!>
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom mt-5">
    <div class="card-header flex-wrap py-1">
                    <div class="card-title">
                        <h3 class="card-label">
                            Broker Commission Report
                            <div class="text-muted pt-2 font-size-sm">Manage Broker Reports</div>
                        </h3>
                    </div>
                </div>
    <div class="card-body">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th><i class="fa fa-calendar"></i>Dates Between</th>
                    <th></th>
                    <th><i class="fa fa-user"></i>Select Seller</th>
                    <th><i class="fa fa-table"></i>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="date" name="date_betweem" class="form-control">
                    </td>
                    <td>
                        <input type="date" name="end_date" class="form-control">
                    </td>
                    <td>
                        <select class="chosen-select form-control" name="seller" id="seller" data-placeholder="Select Seller" class="form-control">
                            <option value="admin">Select All</option>
                            <option value="1410">  manish sharda - 1410</option>
                            <option value="1432">  Mubashar Ahmad - 1432</option>
                            <option value="1388">  Sonu Ahmad - 1388</option>           
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-block btn-success">Generate Report</button>
                    </td>
                </tr>
            </tbody>
        </table>


        <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr bgcolor="#F1F1F1">
                                                <th>Transaction Date</th>
                                                <th>Policy Number</th>
                                                <th>Client Name</th>
                                                <th>Client Contact</th>
                                                <th>Start Date</th>
                                                <th>Expiry Date</th>
                                                <th>Broker Code</th>
                                                <th>Agent Code</th>
                                                <th>Transaction Type</th>
                                                <th>Medical Benefit</th>
                                                <th>Deductible</th>
                                                <th>Policy Premium</th>
                                                <th>Commission</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                            <tr bgcolor="#F1F1F1">
                                                <th colspan="11" style="font-size:15px; font-weight:bold; text-align:right;">Grand Total</th>
                                                <th style="font-size:15px; font-weight:bold; text-align:right;">$</th>
                                                <th style="font-size:15px; font-weight:bold; text-align:right;">$0.00</th>
                                                <th style="font-size:15px; font-weight:bold; text-align:right;">$</th>
                                            </tr>                                       
                                      </tbody>
                                    </table>        
                                </div>
    </div>
</div>

    </div>
</div>
 
@endsection