@extends('admin.layouts.main-layout')
@section('title','Manage Homepage')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Homepage
                            <span class="text-muted pt-2 font-size-sm d-block">Manage All Section In Homepage</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Section One</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Section Two</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Section Three</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Settings</a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" style="height:45px;" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Heading</label>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Sub Heading <small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Text</label>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update Section One">
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            Company Logos
                                        </div>
                                        <div class="card-body">
                                             <div class="form-group">
                                                <label>Alt Text</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" name="Save Company Logos">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            All Logos
                                        </div>
                                        <div class="card-body">
                                            <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Alt Text</th>
                                                        <th>Logo</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Cooking Flower
                                                        </td>
                                                        <td>
                                                            <img src="https://www.lifeadvice.ca/images/brand.png">
                                                        </td>
                                                        <td nowrap="">
                                                            <a  href="javascript:;" class="btn btn-sm btn-danger" title="Edit details">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane" id="messages" role="tabpanel">
                          <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            Company Logos
                                        </div>
                                        <div class="card-body">
                                             <div class="form-group">
                                                <label>Alt Text</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" name="Save Company Logos">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            All Logos
                                        </div>
                                        <div class="card-body">
                                            <table id="example" class="table table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Alt Text</th>
                                                        <th>Logo</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Cooking Flower
                                                        </td>
                                                        <td>
                                                            <img src="https://www.lifeadvice.ca/images/brand.png">
                                                        </td>
                                                        <td nowrap="">
                                                            <a  href="javascript:;" class="btn btn-sm btn-danger" title="Edit details">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane" id="settings" role="tabpanel">.4..</div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection