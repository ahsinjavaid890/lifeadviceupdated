@extends('admin.layouts.main-layout')
@section('title','Sales Reports')
@section('content')
 <section id="middle">
      <div id="content" class="padding-20">
          <div id="panel-1" class="panel panel-default">
          <div class="panel-heading">
              <div class="col-md-6">
              <span class="title elipsis">
                <strong>Agent Commission Report</strong> <!-- panel title -->
              </span>
              </div>
            </div>
            <!-- panel content -->
            <div class="panel-body">
              
            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <h4 class="red">
                  <span class="middle"><strong>Agent Commission Statement</strong></span>
                </h4>
                    <div class="card">
                        
                            <div class="table-responsive">
                            <form method="post" action="?action=done" id="form">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2"><strong><i class="fa fa-calendar"></i> Dates Between</strong></th>
                                                <th colspan="2"><strong><i class="fa fa-user"></i> Select Seller</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="date" name="start_date" style="height:39px;" class="form-control datepicker" id="start_date" value="" required=""></td>
                                            <td><input type="date" name="end_date" style="height:39px;" class="form-control datepicker" id="end_date" value="" required=""></td>
                      <td><select class="chosen-select form-control" name="seller" id="seller" data-placeholder="Select Seller">
                                                                                        <option value="admin">Select All</option>
                                                                                        <option value="1410">manish sharda - 1410</option>
                                                                                        <option value="1388">Sonu Ahmad - 1388</option>
                                                                                                              </select>
                            </td>
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
      </section>
@endsection