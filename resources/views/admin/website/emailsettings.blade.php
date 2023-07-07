@extends('admin.layouts.main-layout')
@section('title', 'Email Settings')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Card-->
                @include('alerts.index')
                <div class="row">

                    <div class="col-xl-4 col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="fw-600 mb-0">Select Template</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('admin/website/emailsettingsupdate') }}" enctype='multipart/form-data'
                                    method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">Email Template</label>
                                        <div class="col-md-8">

                                            <select name="email_temp" required class="form-control" id="">
                                                <option value="">Select Template</option>
                                                <option @if ($settings->email_template == 1) selected @endif value="1">
                                                    Template 1</option>
                                                <option @if ($settings->email_template == 2) selected @endif value="2">
                                                    Template 2</option>
                                                <option @if ($settings->email_template == 3) selected @endif value="3">
                                                    Template 3</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @php
                        $email = DB::table('email_templates')
                            ->where('id', $settings->email_template)
                            ->first();
                        $temp_id = $settings->email_template;
                    @endphp

                    <div class="col-xl-8 col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="fw-600 mb-0">Email Template</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('admin/website/emailtemplateupdate') }}" enctype='multipart/form-data'
                                method="POST">
                                @csrf
                                <input type="hidden" name="temp_id" value="@php echo $temp_id @endphp">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div id="accordion">
                                            <div class="card my-2">
                                                <div class="card-header p-2" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Purchase Email
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <textarea name="purchase_email" required id="" class="summernote">{{ $email->purchase_email }}</textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header p-2" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button type="button" class="btn btn-link collapsed"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Review email
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <textarea name="review_email" required id="" class="summernote">{{ $email->review_email }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header p-2" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button type="button" class="btn btn-link collapsed"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Compare email
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <textarea name="compare_email" required id="" class="summernote">{{ $email->compare_email }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-2">
                                            <div class="card-header p-2" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button type="button" class="btn btn-link collapsed"
                                                        data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Quote email
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <textarea name="quote_email" required id="" class="summernote">{{ $email->quote_email }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
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
