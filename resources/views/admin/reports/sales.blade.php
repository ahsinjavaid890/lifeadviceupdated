@extends('admin.layouts.main-layout')
@section('title','Sales Reports')
@section('content')

<div class="card">
	<div class="card-body">
					<div id="content" class="padding-20">
					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success
						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->

	<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/essatianls.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<div id="panel-1" class="panel panel-default" style="padding: 20px;">
						<!-- panel content -->
						<div class="panel-body">
							
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<h4 class="red">
									<span class="middle"><strong>Sales Report</strong></span>
								</h4>
								    <div class="card">
                        
                            <div class="table-responsive">
                            <form method="post" action="?action=done" id="form">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2"><strong><i class="fa fa-calendar"></i> Dates Between</strong></th>
                                                <th><strong><i class="fa fa-user"></i> Select Seller</strong></th>
                                                <th><strong><i class="fa fa-table"></i> Action</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="date" name="start_date" class="form-control datepicker" style="height: 39px;" id="start_date" value="" required=""></td>
                                            <td><input type="date" name="end_date" class="form-control datepicker" style="height: 39px;" id="end_date" value="" required=""></td>
                                            <td><select class="chosen-select form-control" name="seller" id="seller" data-placeholder="Select Seller">
                                                                                        <option value="admin">Select All</option>
                                                                                        <option value="1410">  manish sharda - 1410</option>
                                                                                        <option value="1432">  Mubashar Ahmad - 1432</option>
                                                                                        <option value="1388">  Sonu Ahmad - 1388</option>
                                                                                                                                    															</select></td>
                                            <td><input type="button" class="btn btn-success" value="Generate Report" onclick="generatereport()"> </td>
                                        </tr>                           
                                      </tbody>
                                    </table>
                            </form>        
                                </div>
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
                                
                                
                                
                        </div>
                    
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					

						</div>
						<!-- /panel content -->
						<!-- panel footer -->
						<div class="panel-footer">
						</div>
						<!-- /panel footer -->
					</div>
					<!-- /PANEL -->
			</div>
		</div>
	</div>

@endsection
@section('script')
<script type="text/javascript" src="https://lifeadvice.ca/lifeadvice.ca/quote/admin/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://lifeadvice.ca/lifeadvice.ca/quote/admin/assets/plugins/bootstrap.datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://lifeadvice.ca/lifeadvice.ca/quote/admin/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="https://lifeadvice.ca/lifeadvice.ca/quote/admin/assets/js/app.js"></script>
<script type="text/javascript" src="https://lifeadvice.ca/lifeadvice.ca/quote/admin/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
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
                
@endsection