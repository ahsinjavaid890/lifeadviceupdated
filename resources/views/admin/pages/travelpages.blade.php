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
                   <div class="card  my-4">
                    <form enctype="multipart/form-data" action="{{ url('admin/pages/updatedynamicpage') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                          @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')   
                                   <h2> {{ $data->name }} Insurance</h2>

                            @endif
                            @if($data->url == 'aboutus' || $data->url == 'contactus' || $data->url == 'privacypolicy' || $data->url == 'blogs')
                                   <h2> {{ $data->name }} </h2>

                            @endif
                           @if($data->url == 'privacypolicy')
                            <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                           @endif
                            @if($data->url == 'contactus')
                            <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                           @endif
                            @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance'|| $data->url == 'aboutus' )   
                             <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                             @endif
                             @if( $data->url == 'blogs')  
                             <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                             @endif 
                       </div>
                       <!-- .card-body.tab-content  -->
                       <div class="card-body tab-content">
                         <div class="tab-pane fade show active" id="tab1">
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" style="height:45px;" class="form-control" name="main_image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Main Heading</label>
                                        <textarea class="summernote-heading" name="main_heading">{{ $data->main_heading }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Sub Heading <small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                        <input value="{{ $data->sub_heading }}" type="text" class="form-control" name="sub_heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Text</label>
                                        <input value="{{ $data->main_button_text }}" type="text" class="form-control" name="btn_text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input value="{{ $data->main_button_link }}" type="text" class="form-control" name="btn_link">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab2">
                           <div class="row">
                                <div class="col-md-12">
                                   @if($data->url == 'contactus')
                                    <div class="form-group">
                                        <label>First Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="first_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Heading</label>
                                        <input type="text" class="form-control" name="contact_heading">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Description</label>
                                        <textarea class="summernote" name="contact_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Address</label>
                                        <input type="text" class="form-control" name="contact_address">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Email</label>
                                        <input type="email" class="form-control" name="contact_email">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Email</label>
                                        <input type="number" class="form-control" name="contact_number">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="last_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Map</label>
                                        <textarea class="form-control" name="contact_map"></textarea>
                                    </div>
                                   @endif
                                   @if($data->url == 'privacypolicy')
                                    <div class="row mb-2">
                                        <div class="col-md-12 text-right">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#policy"><i class="fa fa-plus"></i>Add New Questions</a>
                                        </div>
                                    </div>
                                   <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Privacy Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</td>
                                                <td><a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                    @if($data->url == 'aboutus')
                                    <div class="row mb-2">
                                        <div class="col-md-12 text-right">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#about2"><i class="fa fa-plus"></i>Add New Card</a>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                <td><a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                    @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')
                                    <div class="form-group">
                                        <label>Vector Image</label>
                                        <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Two Description</label>
                                         <textarea class="summernote" name="section_two_description"></textarea>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 text-right">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#questions"><i class="fa fa-plus"></i>Add New Questions</a>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Questions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</td>
                                                <td><a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if($data->url == 'aboutus')
                                        <div class="form-group">
                                            <label>About Image 1</label>
                                            <input type="file" style="height:45px;" class="form-control" name="about_three_vector">
                                        </div>
                                        <div class="form-group">
                                            <label>About Heading</label>
                                            <input type="text" class="form-control" name="about_three_headings">
                                        </div>
                                        <div class="form-group">
                                            <label>About Two Description</label>
                                             <textarea class="summernote" name="about_three_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>About Image 2</label>
                                            <input type="file" style="height:45px;" class="form-control" name="about_three_vector">
                                        </div>
                                        @endif
                                        @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')
                                         <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('page' , $data->url)->get() as $r)
                                            <tr>
                                                <td>
                                                    <img width="120" src="{{ url('public/images') }}/{{ $r->vector }}">
                                                </td>
                                                <td>{!! $r->heading !!}</td>
                                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#section_three_elements{{ $r->id }}"><i class="fa fa-edit"></i>Edit 1</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                   @endif
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab4">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if($data->url == 'aboutus')
                                            <div class="form-group">
                                                <label>About Vector Image </label>
                                                <input type="file" style="height:45px;" class="form-control" name="about_four_vector">
                                            </div>
                                            <div class="form-group">
                                                <label>Center Image </label>
                                                <input type="file" style="height:45px;" class="form-control" name="center_card_image">
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-12 text-right">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#aboutcard"><i class="fa fa-plus"></i>Add New Questions</a>
                                                </div>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>About Heading</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                        <td><a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                                    </tr> 
                                                </tbody>
                                            </table>
                                        @endif
                                        @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')                                        
                                        <div class="form-group">
                                            <label>Section four Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section_four_vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec four Heading</label>
                                            <input type="text"  class="form-control" name="section_four_heading">
                                        </div>
                                        @endif
                                        @if($data->url == 'super-visa-insurance')
                                        <div class="form-group">
                                            <label>Sec four Description</label>
                                             <textarea class="summernote" name="section_four_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Sec four Notice</label>
                                            <input type="text" class="form-control" name="section_four_notice">
                                        </div>
                                           @endif
                                           @if($data->url == 'visitor-insurance')
                                        <div class="form-group">
                                            <label>Sec four Description</label>
                                             <textarea class="summernote" name="section_four_description"></textarea>
                                        </div>
                                           @endif
                                        @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')   
                                        <div class="form-group">
                                            <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                            <input type="text" class="form-control" name="section_four_lists">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                         </div>
                         
                         <div class="tab-pane fade" id="tab5">
                                <div class="row">
                                    <div class="col-md-12">
                                    @if($data->url == 'super-visa-insurance')
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card Vector</th>
                                                <th>Card Heading</th>
                                                <th>Card Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#product1"><i class="fa fa-edit"></i>Edit 1</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#product2"><i class="fa fa-edit"></i>Edit 2</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#product3"><i class="fa fa-edit"></i>Edit 3</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        @endif
                                        @if($data->url == 'visitor-insurance')
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card Vector</th>
                                                <th>Card Heading</th>
                                                <th>Card Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#product1"><i class="fa fa-edit"></i>Edit 1</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#product2"><i class="fa fa-edit"></i>Edit 2</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#product3"><i class="fa fa-edit"></i>Edit 3</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        @endif
                                         @if($data->url == 'aboutus')
                                            <div class="form-group">
                                                <label>About Heading</label>
                                                <input type="text" class="form-control" name="about_five_Heading">
                                            </div>
                                            <div class="form-group">
                                                <label>About Description</label>
                                                 <textarea class="summernote" name="about_five_description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>About Image</label>
                                                <input type="file" style="height:45px;" class="form-control" name="about_five_vector">
                                            </div>
                                         @endif
                                        @if($data->url == 'travel-insurance' || $data->url == 'student-insurance')
                                            <div class="form-group">
                                            <label>Section five Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec five Heading</label>
                                            <input type="text"  class="form-control" name="section_five_heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec five Description</label>
                                             <textarea class="summernote" name="section_five_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                            <input type="text" class="form-control" name="section_five_lists">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input type="text"  class="form-control" name="meta_title">
                                        </div>
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                             <textarea class="form-control" name="meta_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Meta Tags</label>
                                            <input type="text"  class="form-control" name="meta_tag">
                                        </div>
                                            <div class="form-group">
                                            <label>Meta Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="meta_image">
                                        </div>
                                    </div>
                                        </div>
                         </div>
                          </div><!--/.card-body -->
                          <div class="card-footer">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary"  value="Update">
                                </div>
                            </div>
                          
                      </form>
                      </div>
                      </div><!--/.card-->
                </div>                
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!-- modal section 3 -->
<!-- card 1 -->
@foreach(DB::table('section_three_elements')->where('page' , $data->url)->get() as $r)
<div class="modal fade" id="section_three_elements{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">{!! $r->heading !!}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="{{ url('admin/pages/section_three_elements') }}">
        @csrf
          <input type="hidden" value="{{ $r->id }}" name="id">
          <div class="modal-body">
            <div class="form-group">
                <label>Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="vector">
            </div>
            <div class="form-group">
                <label>Heading</label>
                <textarea class="summernote-heading" name="heading">{{ $r->heading }}</textarea>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="summernote" name="description">{{ $r->description }}</textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endforeach


<!-- end modal section 3 -->
<!-- modal section 5 -->
<!-- card 1 -->
<div class="modal fade" id="product1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Product 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section three Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec three Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="product2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Product 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section three Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec three Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="product3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Product 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section three Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_vector">
        </div>
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec three Description</label>
             <textarea class="summernote" name="section_modal_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
<!-- end section 5 -->

<!-- Questions modal -->
<div class="modal fade" id="questions" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add New Questions</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Question</label>
            <input type="text"  class="form-control" name="question">
        </div>
        <div class="form-group">
            <label>Answer</label>
             <textarea class="summernote" name="answer"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end questions Modal -->


<!-- About Card modal -->
<div class="modal fade" id="aboutcard" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add New Card</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Card Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="about_card_vector">
        </div>
        <div class="form-group">
            <label>Card Heading</label>
            <input type="text"  class="form-control" name="about_card_heading">
        </div>
        <div class="form-group">
            <label>Card Description</label>
            <textarea class="summernote" name="answer"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end About Card Modal -->

<!-- Privacy Policy Card modal -->
<div class="modal fade" id="policy" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Privacy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Policy Heading</label>
            <input type="text"  class="form-control" name="policy_modal_heading">
        </div>
        <div class="form-group">
            <label>Policy Description</label>
            <textarea class="summernote" name="policy_modal_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Privacy Policy Modal -->
<!-- About2 Card modal -->
<div class="modal fade" id="about2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Privacy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>About Image</label>
            <input type="file" style="height:45px;" class="form-control" name="about_two_vector">
        </div>
        <div class="form-group">
            <label>About Heading</label>
            <input type="text" class="form-control" name="about_two_headings">
        </div>
        <div class="form-group">
            <label>About Two Description</label>
             <textarea class="summernote" name="about_two_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end About2 Modal -->

@endsection