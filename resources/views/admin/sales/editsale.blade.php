@extends('admin.layouts.main-layout')
@section('title', 'Edit Sale')
@section('content')

    @php
        // echo "<pre>";
        // print_r($data);
        // die;
    @endphp


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container-fluid ">
                <!--begin::Card-->
				@include('alerts.index')
                <div class="row">
					
                    <div class="col-md-6">
                        <div class="card card-custom mt-5">
                            <div class="card-header flex-wrap py-5">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Sale Details
                                    </h3>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td bgcolor="#F6F6F6"><strong>Company:</strong></td>
                                                <td>
                                                    <img class="img-thumbnail"
                                                        src="{{ url('public/images') }}/{{ $company->comp_logo }}"
                                                        width="100">
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
                                                <td style="color:red">
                                                    <strong>{{ ucwords(strtolower($data->status)) }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#F6F6F6"><strong>Cancel Date:</strong></td>
                                                <td style="color:#c00;">{{ Cmf::date_format($data->end_date) }}</td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#F6F6F6"><strong>Duration:</strong></td>
                                                <td><?php echo $data->duration; ?> Days (<?php echo Cmf::date_format($data->start_date); ?> - <?php echo Cmf::date_format($data->end_date); ?>)
                                                </td>

                                            </tr>
                                            <tr>
                                                <td bgcolor="#F6F6F6"><strong>Total Premium:</strong></td>
                                                <td>{{ $data->premium }}</td>
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
											<form method="post" action="{{ url('admin/sales/editsale') }}" enctype="multipart/form-data">
												@csrf
											<input type="hidden" value="{{$data->id}}" name="id">
												<tr>
													<td bgcolor="#F6F6F6"><strong>Sponsers Name:</strong></td>
													<td>
														<input type="text" name="sponsersname" class="form-control" value="{{ $data->sponsersname }}">
													</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>Sponsers Relationship:</strong></td>
													<td>
														<input type="text" name="sponsersemail" class="form-control" value="{{ $data->sponsersemail }}">
														</td>
	
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>Email:</strong></td>
													<td>
														<input type="text" name="email" class="form-control" value="{{ $data->email }}">
														</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>Phone Number:</strong></td>
													<td>
														<input type="text" class="form-control" name="phonenumber" value="{{ $data->phonenumber }}">
														</td>
	
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>Address:</strong></td>
													<td>
														<input type="text" class="form-control" name="address" value="{{ $data->address }}">
														</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>Appartment:</strong></td>
													<td >
														<input class="form-control" type="text" name="appartment" value="{{ $data->appartment }}">
														</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>country:</strong></td>
													<td >
														<input class="form-control" type="text" name="country" value="{{ $data->country }}">
	
														</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>postalcode:</strong></td>
													<td >
														<input class="form-control" type="text" name="postalcode" value="{{ $data->postalcode }}">
	
														</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>province:</strong></td>
													<td >
														
														<input class="form-control" type="text" name="province" value="{{ $data->province }}">
	
														</td>
												</tr>
												<tr>
													<td bgcolor="#F6F6F6"><strong>city:</strong></td>
													<td >
														
														<input class="form-control" type="text" name="city" value="{{ $data->city }}">
	
														</td>
												</tr>
												<tr>
													<td colspan="2" class="text-right">
														<button type="submit" class="btn btn-primary">Update</button>
													</td>
													
												</tr>

											</form>
                                            
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @foreach (DB::table('traveler_sale_informations')->where('sale_id', $data->id)->get() as $key => $r)
                            <div class="card card-custom mt-5">
                                <div class="card-header flex-wrap py-5">
                                    <div class="card-title">
                                        <h3 class="card-label">
                                            Travler Information {{ $key + 1 }}
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
    <div class="modal fade" id="carddetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <span type="submit" onclick="sendcodetocheck()" id="showdetailsbutton" class="btn btn-primary">Show
                        Details</span>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function viewcarddetails(id) {
            $('#carddetails').modal('show');
            $.ajax({
                type: 'get',
                url: '{{ url('admin/sales/sendcode') }}/{{ $data->id }}',
                success: function(response) {
                    $('#loaderbody').hide();
                    $('#formbody').show();
                }
            });
        }

        function sendcodetocheck() {
            var code = $('#code').val();
            if (code) {
                $('#showdetailsbutton').html('<i class="fa fa-spin fa-spinner"></i>');
                $.ajax({
                    type: 'get',
                    url: '{{ url('admin/sales/sendcodetocheck') }}/{{ $data->id }}/' + code,
                    success: function(response) {
                        if (response == 1) {
                            $('#codeerror').html('Please Enter Correct Code');
                        } else {
                            $('#formbody').html(response)
                            $('#showdetailsbutton').hide('');

                            setTimeout(function() {
                                location.reload();
                            }, 30000);
                        }
                    }
                });
            } else {
                $('#codeerror').html('Please Enter Code');
            }

        }
    </script>
@endsection
