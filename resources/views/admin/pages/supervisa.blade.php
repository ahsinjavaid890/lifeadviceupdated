@extends('admin.layouts.main-layout')
@section('title','Manage Super Visa')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           <h2> Super Visa</h2>
                            <span class="text-muted pt-2 font-size-sm d-block">Manage All Section In Super Visa</span>
                        </div>
                        <div class="card-body">
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
                            </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2>Section # 2</h2>
                                        <div class="form-group">
                                            <label>Vector Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section-two-vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-Two-Heading</label>
                                            <input type="text"  class="form-control" name="section-two-heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-Two-Description</label>
                                             <textarea class="summernote" name="section-thee-description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-Two-Collapse-Text</label>
                                            <input type="text"  class="form-control" name="section-two-colapse-text">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2>Section # 3</h2>
                                        <div class="form-group">
                                            <label>Section-three-Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section-three-vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-thee-Heading</label>
                                            <input type="text"  class="form-control" name="section-thee-heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-three-Description</label>
                                             <textarea class="summernote" name="section-thee-description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2>Section # 4</h2>
                                        <div class="form-group">
                                            <label>Section-four-Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section-four-vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-four-Heading</label>
                                            <input type="text"  class="form-control" name="section-four-heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-three-Description</label>
                                             <textarea class="summernote" name="section-four-description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Sec-three-Lists</label>
                                             <textarea class="summernote" name="section-four-lists"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                        </div>
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