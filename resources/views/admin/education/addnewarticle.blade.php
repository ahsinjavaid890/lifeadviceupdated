@extends('admin.layouts.main-layout')
@section('title','Add New Post')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add New Post
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('admin/education/addneweducationarticle') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Select Status</label>
                                <select required class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="category_id"> 
                                    <option value="">Select Category</option>
                                    @foreach($categories as $r)
                                    <option value="{{ $r->id }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Enter Tittle</label>
                                <input name="tittle" required type="text" id="emailfield" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Youtube Video Link</label> <small>(Optional)</small>
                                <input name="youtube" type="text" id="emailfield" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">
                                <small style="color:red;">Add Embaded Link of youtube Video Eg: https://www.youtube.com/embed/TWdDZYNqlg4</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Image</label>
                                <input name="image" type="file" id="emailfield" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">

                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Content</label>
                                <textarea  name="answer" class="summernote"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                </div>
            </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection