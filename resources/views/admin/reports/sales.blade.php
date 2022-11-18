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
                            Sales Report
                            <div class="text-muted pt-2 font-size-sm">Manage Sales Reports</div>
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
                            @foreach(DB::table('users')->get() as $r)
                            <option value="{{$r->unique_code}}"> {{$r->username}}- {{$r->unique_code}}</option>
                            @endforeach           
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
@section('script')
<script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js')}}"></script>
<script>
function downloadpdf(){
document.getElementById('form').action = 'excel.php?start='+ document.getElementById('start_date').value + '&end=' + document.getElementById('end_date').value;
$("#form").attr('target', '_blank');
document.getElementById('form').submit();   
}

function generatereport(){
document.getElementById('form').action = '?action=done';
$("#form").attr('target', '');
document.getElementById('form').submit();   
}
</script> 
    <script type="text/javascript">
            loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
                loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
                    if (jQuery().dataTable) {
                        var table = jQuery('#datatable_sample');
                        table.dataTable({
                            "columns": [{
                                "orderable": false
                            }, {
                                "orderable": true
                            }, {
                                "orderable": false
                            }, {
                                "orderable": false
                            }, {
                                "orderable": true
                            }, {
                                "orderable": false
                            }, {
                                "orderable": false
                            }],
                            "lengthMenu": [
                                [5, 15, 20, -1],
                                [5, 15, 20, "All"] // change per page values here
                            ],
                            // set the initial value
                            "pageLength": 25,            
                            "pagingType": "bootstrap_full_number",
                            "language": {
                                "lengthMenu": "  _MENU_ records",
                                "paginate": {
                                    "previous":"Prev",
                                    "next": "Next",
                                    "last": "Last",
                                    "first": "First"
                                }
                            },
                            "columnDefs": [{  // set default column settings
                                'orderable': false,
                                'targets': [0]
                            }, {
                                "searchable": false,
                                "targets": [0]
                            }],
                            "order": [
                                [1, "asc"]
                            ] // set first column as a default sort by asc
                        });

                        var tableWrapper = jQuery('#datatable_sample_wrapper');
                        table.find('.group-checkable').change(function () {
                            var set = jQuery(this).attr("data-set");
                            var checked = jQuery(this).is(":checked");
                            jQuery(set).each(function () {
                                if (checked) {
                                    jQuery(this).attr("checked", true);
                                    jQuery(this).parents('tr').addClass("active");
                                } else {
                                    jQuery(this).attr("checked", false);
                                    jQuery(this).parents('tr').removeClass("active");
                                }
                            });
                            jQuery.uniform.update(set);
                        });

                    table.on('change', 'tbody tr .checkboxes', function () {
                            jQuery(this).parents('tr').toggleClass("active");
                        });
                        tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
                    }
                });
            });
        </script>
@endsection