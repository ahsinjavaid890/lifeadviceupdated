@extends('admin.layouts.main-layout')
@section('title','All Blogs')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            All Blogs
                            <div class="text-muted pt-2 font-size-sm">Manage All Blogs</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="javascript::void(0)" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Blog
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Blog Image</th>
                                <th>Blog Tittle</th>
                                <th>Category Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td>
                                    <a  target="_blank" href="{{ url('public/images') }}/{{ $r->image }}">
                                        <img class="img-thumbnail" width="120" height="120" src="{{ url('public/images') }}/{{ $r->image }}">
                                    </a>
                                </td>
                                
                                <td>
                                    {{ $r->title }}
                                </td>
                                <td>
                                    {{ DB::table('blogcategories')->where('id' , $r->category_id)->first()->name }}
                                </td>
                                <td>
                                    @if($r->created_at)
                                        {{ Cmf::date_format($r->created_at) }}
                                    @endif
                                </td>
                                <td>
                                    @if($r->updated_at)
                                        {{ Cmf::date_format($r->updated_at) }}
                                    @endif
                                </td>
                                <td nowrap="">
                                    <a data-toggle="modal" data-target="#categoryedit{{ $r->id }}" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal{{ $r->id }}" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p style="color:red;">Are you Sure You want to delete this. </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                            <a href="{{ url('admin/blogs/deleteblog') }}/{{ $r->id }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="categoryedit{{ $r->id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST" action="{{ url('admin/blogs/updateblog') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $r->id }}" name="id">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Select Category</label>
                                                            <select class="form-control" name="category_id">
                                                                <option value="">Select Category</option>
                                                                @foreach($categories as $c)
                                                                <option @if($c->id == $r->category_id) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Blog Image</label>
                                                            <input name="image" type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Blog tittle</label>
                                                            <input value="{{ $r->title }}" name="title" required type="text"  class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Blog Content</label>
                                                            <textarea rows="10" class="summernote" name="content">{{ $r->content }}</textarea>
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
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<div class="modal fade" id="exampleModalScrollable" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ url('admin/blogs/addnewblog') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Select Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Blog Image</label>
                                <input name="image" type="file" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Blog tittle</label>
                                <input name="title" required type="text" id="emailfield" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Blog Content</label>
                                <textarea rows="10" class="summernote" name="content"></textarea>
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
</div>
@endsection