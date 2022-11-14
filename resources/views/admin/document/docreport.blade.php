@extends('admin.layouts.main-layout')
@section('title','All Documents')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-6">
                            <span class="title elipsis">
                                <strong>Documents Report</strong> <!-- panel title -->
                            </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form method="" action="?action=done" id="form">
                                <link href="{{ asset('public/admin/assetstwo/css/layout-datatables.css')}}" rel="stylesheet" type="text/css" />

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><strong><i class="fa fa-calendar"></i> Expiring In</strong></th>
                                                <th><strong><i class="fa fa-file"></i> Document Type</strong></th>
                                                <th><strong><i class="fa fa-user"></i> Action</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><select class="form-control" name="expiring_in" required="">
                                            <option value="30">Expiring in the Next 30 Days</option>
                                            <option value="60">Expiring in the Next 60 Days</option>
                                            </select>
                                            </td>
                                            <td><select class="form-control" name="doc_type" required="">
                                            <option value="all">-- Select All --</option>
                                            <option value="eo">Error's and Omission (E&amp;O) </option>
                                            <option value="license">Licenses</option>
                                            </select></td>
                                            <td><input type="button" class="btn btn-success" value="Generate Report" onclick="generatereport()"> </td>
                                        </tr>                           
                                      </tbody>
                                    </table>
                            </form>        
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('public/admin/assets/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/admin/assets/js/dataTables.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/admin/assets/js/admin.js')}}"></script>
<script>
function downloadreport(){
document.getElementById('form').action = 'docs_report_excel.php';
document.getElementById('form').setAttribute('target', '_blank');
document.getElementById('form').submit();   
}

function generatereport(){
document.getElementById('form').action = '?action=done';
document.getElementById('form').setAttribute('target', '');
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