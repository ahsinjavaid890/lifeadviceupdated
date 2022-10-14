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
                    <form action="#" method="POST">
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                           <h2> {{ $data->name }} Insurance</h2>
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
                                        <input type="text" class="form-control" name="main_heading">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Sub Heading <small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                        <input type="text" class="form-control" name="sub_heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Text</label>
                                        <input type="text" class="form-control" name="btn_text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input type="text" class="form-control" name="btn_link">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab2">
                           <div class="row">
                                    <div class="col-md-12">
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
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
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
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#card1"><i class="fa fa-edit"></i>Edit 1</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#card2"><i class="fa fa-edit"></i>Edit 2</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#card3"><i class="fa fa-edit"></i>Edit 3</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#card4"><i class="fa fa-edit"></i>Edit 4</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Section four Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section_four_vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec four Heading</label>
                                            <input type="text"  class="form-control" name="section_four_heading">
                                        </div>

                                        @if($data->url == 'super-visa')
                                        <div class="form-group">
                                            <label>Sec four Description</label>
                                             <textarea class="summernote" name="section_four_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Sec four Notice</label>
                                            <input type="text" class="form-control" name="section_four_notice">
                                        </div>
                                           @endif
                                           @if($data->url == 'visitor-visa')
                                        <div class="form-group">
                                            <label>Sec four Description</label>
                                             <textarea class="summernote" name="section_four_description"></textarea>
                                        </div>
                                           @endif
                                        <div class="form-group">
                                            <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                            <input type="text" class="form-control" name="section_four_lists">
                                        </div>
                                    </div>
                                </div>
                         </div>
                         
                         <div class="tab-pane fade" id="tab5">
                                <div class="row">
                                    <div class="col-md-12">
                                    @if($data->url == 'super-visa')
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
                                        @if($data->url == 'visitor-visa')
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
                                         @if($data->url == 'student-visa')
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
                                        @if($data->url == 'travel-visa')
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
                          </div>
                      </form>
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
<div class="modal fade" id="card1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Card 1</h4>
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
            <label>Sec trhee Heading</label>
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
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="card2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Card 2</h4>
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
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="card3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Card 3</h4>
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
 <!-- card 4 -->
<div class="modal fade" id="card4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Card 4</h4>
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
<!-- end card 4 -->
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
            <label>Sec-three-Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec-three-Description</label>
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
            <label>Sec-three-Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec-three-Description</label>
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



@endsection