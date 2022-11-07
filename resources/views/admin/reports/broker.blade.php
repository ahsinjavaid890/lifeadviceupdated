@extends('admin.layouts.main-layout')
@section('title','Sales Reports')
@section('content')
 --!>
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom mt-5">
    <div class="card-header flex-wrap py-1">
                    <div class="card-title">
                        <h3 class="card-label">
                            Agent Commission Report
                            <div class="text-muted pt-2 font-size-sm">Manage Agent Reports</div>
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
    </div>
</div>    
    </div>
</div>
@endsection