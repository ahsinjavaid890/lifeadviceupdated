@extends('admin.layouts.main-layout')
@section('title','All Subscription Plans')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            @include('alerts.index')

            <div class="row">
                <div class="col-md-8">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    All Subscription Plans
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Tagline</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $r)
                                    <tr>
                                        <td>
                                            {{ $r->name }}
                                        </td>
                                        <td>
                                           {{ $r->tagline }}
                                        </td>
                                        <td>
                                            {{ $r->price }}
                                        </td>
                                        <td>
                                            @if($r->status == 1)
                                            <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                            @else
                                            <span class="label label-lg font-weight-bold label-light-danger label-inline">In Active</span>
                                            @endif

                                        </td>
                                        <td nowrap="">
                                            <a data-toggle="modal" data-target="#categoryedit{{ $r->id }}" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="categoryedit{{ $r->id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update Plan</h5>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <form enctype="multipart/form-data" method="POST" action="{{ url('admin/subscriptions/updatesubscriptionplan') }}">
                                                    @csrf
                                                    <input type="hidden" value="{{ $r->id }}" name="id">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="username">Plan Name</label>
                                                            <input value="{{ $r->name }}" name="name" class="form-control input-lg" type="text" id="username" required="" placeholder="eg. Basic">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Tag Line</label>
                                                            <input value="{{ $r->tagline }}" name="tagline" class="form-control input-lg" type="text" id="username" required="" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Price (Rs)</label>
                                                            <input value="{{ $r->price }}" name="price" class="form-control input-lg" type="text" id="username" required="" placeholder="eg. 20 days">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Duration (Days)</label>
                                                            <input value="{{ $r->duration }}" name="duration" class="form-control input-lg" type="text" id="username" required="duration" placeholder="eg. 20 days">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Benifits / Short Description</label>
                                                            <textarea name="description" rows="4" class="form-control input-lg" type="email" id="username" required="" placeholder="eg. Chairs">{{ $r->short_description }}</textarea>
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
                </div>
                <div class="col-md-4">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    All New Plan
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{ url('admin/subscriptions/createplan') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Plan Name</label>
                                    <input name="name" class="form-control input-lg" type="text" id="username" required="" placeholder="eg. Basic">
                                </div>
                                <div class="form-group">
                                    <label for="username">Tag Line</label>
                                    <input name="tagline" class="form-control input-lg" type="text" id="username" required="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="username">Price (USD)</label>
                                    <input name="price" class="form-control input-lg" type="text" id="username" required="">
                                </div>
                                <div class="form-group">
                                    <div class="row" id="morebenifit">
                                        <div class="col-md-8">
                                            <label for="username">Benifits</label>
                                            <input name="key_points[]" class="form-control input-lg" type="text" id="username">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="username">Add More Benifit</label>
                                            <span style=" height: 51px; font-size: 24px; " onclick="addmorebenifit()" class="form-control btn btn-primary">+</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                            </form>
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

<script type="text/javascript">
function addmorebenifit()
{
    $('#morebenifit').append('<div class="col-md-8"> <label for="username">Benifits / Short Description</label> <input name="key_points[]" class="form-control input-lg" type="text" id="username"> </div> <div class="col-md-4"> <label for="username">Add More Benifit</label><span style=" height: 51px; font-size: 24px; " onclick="removemorebenifit()" class="form-control btn btn-danger">-</span> </div>')
}
</script>