@extends('admin.layouts.main-layout')
@section('title','View Sale')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            @include('alerts.index')
            <!--begin::Card-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a style="margin-right:20px;" href="{{ url('admin/sales/editsale')}}/{{$data->id}}" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span>Edit Sale
                        </a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a style="margin-right:20px;" href="javascript:void(0)" data-toggle="modal" data-target="#addpolicyconfermation" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span>Add Policy Confirmation
                        </a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a href="javascript:void(0)" onclick="viewcarddetails()" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span>View Card Details
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                 
                <div class="col-md-6">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Sale Details
                                </h3>
                            </div>
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="addpolicyconfermation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content" style=" border-left: 5px solid #2b3481; border-radius: 20px; ">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Policy Confermation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form enctype="multipart/form-data" method="POST" action="{{ url('admin/sales/policyconfermation') }}">
                                @csrf
                                <input type="hidden" value="{{ $data->id }}" name="id">
                              <div class="modal-body">
                                 
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Select Policy Status</label>
                                             <select onchange="policystatus(this.value)" required class="form-control" name="policy_status">
                                                 <option value="">Select Status</option>
                                                 <option value="Pending">Pending</option>
                                                 <option value="Approved">Approved</option>
                                                 <option value="Cancel">Cancel</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 hideforcancle">
                                          <div class="form-group">
                                             <label>Policy Number</label>
                                             <input id="policy_number" required type="text" class="form-control" name="policy_number">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row hideforcancle">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Upload Document</label>
                                             <input type="file" style="height:50px !important;" class="form-control" name="policydocument">
                                          </div>
                                       </div>
                                    </div> 
                                    <div class="row cancelreason" style="display: none;">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Cancel Reason</label>
                                             <textarea id="cancelreasontextarea" class="form-control" name="cancelreason"></textarea>
                                          </div>
                                       </div>
                                    </div>                            
                                    <script type="text/javascript">
                                        function policystatus(id) {
                                            if(id == 'Cancel')
                                            {
                                                $('.hideforcancle').hide();
                                                $('.cancelreason').show();
                                                $("#cancelreasontextarea").prop('required',true);
                                                $("#policy_number").prop('required',false);


                                            }else{
                                                $('.cancelreason').hide();
                                                $("#policy_number").prop('required',true);
                                                $('.hideforcancle').show();
                                                $("#cancelreasontextarea").prop('required',false);
                                            }
                                        }
                                    </script>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                               </form>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Company:</strong></td>
                                            <td>
                                                <img class="img-thumbnail" src="{{ url('public/images') }}/{{ $company->comp_logo }}" width="100">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Reffrence Number:</strong></td>
                                            <td>{{ $data->reffrence_number }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Purchase Date:</strong></td>
                                            <td>{{ Cmf::date_format($data->created_at) }}</td>  
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Policy Status:</strong></td>
                                            <td style="color:red"><strong>{{ ucwords(strtolower($data->status)) }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Cancel Date:</strong></td>
                                            <td style="color:#c00;">{{ Cmf::date_format($data->end_date) }}</td>  
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Duration:</strong></td>
                                            <td><?php echo $data->duration;?> Days (<?php echo Cmf::date_format($data->start_date);?> - <?php echo Cmf::date_format($data->end_date); ?>)</td>
                                              
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Total Premium:</strong></td>
                                            <td>{{$data->premium}}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Coverage Amount:</strong></td>
                                            <td>$<?php echo number_format($data->coverage_ammount); ?></td>
                                             
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Deductible:</strong></td>
                                            <td><?php echo $data->deductibles; ?> @ <?php echo $data->deductible_rate - 100; ?>%</td> 
                                        </tr>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Insured Details
                                </h3>
                            </div>
                        </div>
                        
                        <!-- Modal -->
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Sponsers Name:</strong></td>
                                            <td>{{ $data->sponsersname }}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Sponsers Relationship:</strong></td>
                                            <td>{{ $data->sponsersemail }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Email:</strong></td>
                                            <td>{{ $data->email }}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Phone Number:</strong></td>
                                            <td>{{ $data->phonenumber }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Address:</strong></td>
                                            <td>{{ $data->address }}</td>  
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Appartment:</strong></td>
                                            <td style="color:red"><strong>{{ $data->appartment }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>country:</strong></td>
                                            <td style="color:red"><strong>{{ $data->country }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>postalcode:</strong></td>
                                            <td style="color:red"><strong>{{ $data->postalcode }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>province:</strong></td>
                                            <td style="color:red"><strong>{{ $data->province }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>city:</strong></td>
                                            <td style="color:red"><strong>{{ $data->city }}</strong></td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @foreach(DB::table('traveler_sale_informations')->where('sale_id' , $data->id)->get() as $key=> $r)
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Travler Information {{ $key+1 }}
                                </h3>
                            </div>
                        </div>
                        
                        <!-- Modal -->
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Name:</strong></td>
                                            <td>
                                                {{ $r->f_name }} {{ $r->l_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Gender:</strong></td>
                                            <td>{{ $r->gender }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Pre Existing Condition:</strong></td>
                                            <td>{{ $r->pre_existing_condition }}</td>  
                                        </tr>
                                        <tr>
                                            <td bgcolor="#F6F6F6"><strong>Date of Birth:</strong></td>
                                            <td style="color:red"><strong>{{ $r->date_of_birth }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<div class="modal fade" id="carddetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style=" border-left: 5px solid #2b3481; border-radius: 20px; ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Card Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type="hidden" value="{{ $data->id }}" name="id">
      <div class="modal-body" style="display:none;" id="formbody">
         <div class="form-group">
             <label>Please Enter code That you Recieved In Admin Email</label>
             <input id="code" type="number" class="form-control" name="code">
             <div id="codeerror" style="color: red;"></div>
         </div>
      </div>
      <div class="modal-body text-center" id="loaderbody">
         <i style="font-size: 140px;" class="fa fa-spin fa-spinner"></i>
      </div>
      <div class="modal-footer">
        <span type="submit" onclick="sendcodetocheck()" id="showdetailsbutton" class="btn btn-primary">Show Details</span>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function viewcarddetails(id) {
        $('#carddetails').modal('show');
        $.ajax({
            type: 'get',
            url: '{{ url("admin/sales/sendcode") }}/{{ $data->id }}',
            success: function (response) {
                 $('#loaderbody').hide();
                 $('#formbody').show();
            }
        });
    }
    function sendcodetocheck() {
        var code = $('#code').val();
        if(code)
        {
            $('#showdetailsbutton').html('<i class="fa fa-spin fa-spinner"></i>');
            $.ajax({
                type: 'get',
                url: '{{ url("admin/sales/sendcodetocheck") }}/{{ $data->id }}/'+code,
                success: function (response) {
                    if(response == 1)
                    {
                        $('#codeerror').html('Please Enter Correct Code');
                    }else{
                        $('#formbody').html(response)
                        $('#showdetailsbutton').hide('');

                        setTimeout(function(){
                            location.reload();
                        }, 30000);
                    }
                }
            });
        }else{
            $('#codeerror').html('Please Enter Code');
        }
        
    }
</script>
@endsection