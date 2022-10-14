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
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                           <h2> Travel Insurance</h2>
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
                          <!--  <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#tab6">Section 6</a>
                           </li> -->
                         </ul>
                       </div>
                       <!-- .card-body.tab-content  -->
                       <div class="card-body tab-content">
                         <div class="tab-pane fade show active" id="tab1">
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
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab2">
                           <div class="row">
                                    <div class="col-md-12">
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
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sec-Two-Collapse-Heading</label>
                                                <input type="text"  class="form-control" name="section-two-colapse-heading">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sec-Two-Collapse-desc</label>
                                                <input type="text"  class="form-control" name="section-two-colapse-desc">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card-Vector</th>
                                                <th>Card-Heading</th>
                                                <th>Card-Description</th>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab4">
                                <div class="row">
                                    <div class="col-md-12">
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
                                            <label>Section-Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                            <input type="text" class="form-control" name="section-four-lists">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div>
                         
                         <div class="tab-pane fade" id="tab5">
                                <div class="row">
                                    <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card-Vector</th>
                                                <th>Card-Heading</th>
                                                <th>Card-Description</th>
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
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div>
                        <!--  <div class="tab-pane fade" id="tab6">
                                <div class="row">
                                    <div class="col-md-12">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div> -->
                          </div><!--/.card-body -->
                      </div><!--/.card-->
                </div>
                <div class="col-md-12">
                   <div class="card  my-4">
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                           <h2> Super Visa</h2>
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
                          <!--  <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#tab6">Section 6</a>
                           </li> -->
                         </ul>
                       </div>
                       <!-- .card-body.tab-content  -->
                       <div class="card-body tab-content">
                         <div class="tab-pane fade show active" id="tab1">
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
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab2">
                           <div class="row">
                                    <div class="col-md-12">
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
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sec-Two-Collapse-Heading</label>
                                                <input type="text"  class="form-control" name="section-two-colapse-heading">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sec-Two-Collapse-desc</label>
                                                <input type="text"  class="form-control" name="section-two-colapse-desc">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card-Vector</th>
                                                <th>Card-Heading</th>
                                                <th>Card-Description</th>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div>
                         <div class="tab-pane fade" id="tab4">
                                <div class="row">
                                    <div class="col-md-12">
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
                                            <label>Section-Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                            <input type="text" class="form-control" name="section-four-lists">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div>
                         
                         <div class="tab-pane fade" id="tab5">
                                <div class="row">
                                    <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card-Vector</th>
                                                <th>Card-Heading</th>
                                                <th>Card-Description</th>
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
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div>
                        <!--  <div class="tab-pane fade" id="tab6">
                                <div class="row">
                                    <div class="col-md-12">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                         </div> -->
                          </div><!--/.card-body -->
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
<!-- end section 5 -->
@endsection