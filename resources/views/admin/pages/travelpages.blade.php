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
                    @include('alerts.index')
                   <div class="card  my-4">
                    <form enctype="multipart/form-data" action="{{ url('admin/pages/updatedynamicpage') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                          @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance' || $data->url == 'life-insurance' || $data->url == 'desability' || $data->url == 'critical-illness' || $data->url == 'health-insurance' || $data->url == 'claim' || $data->url == 'resp')   
                                   <h2> {{ $data->name }}</h2>

                            @endif
                            @if($data->url == 'aboutus' || $data->url == 'contactus' || $data->url == 'privacypolicy' || $data->url == 'blogs' || $data->url == 'product')
                                   <h2> {{ $data->name }} </h2>

                            @endif
                            @if($data->url == 'resp')
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
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'claim')
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
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                           @if($data->url == 'privacypolicy' || $data->url == 'product')
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
                            @if($data->url == 'critical-illness')
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
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'desability')
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
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab8">Section 7</a>
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
                            @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance'|| $data->url == 'aboutus'|| $data->url == 'health-insurance')   
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
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                             @endif
                             @if( $data->url == 'life-insurance')
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
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab8">Section 7</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab9">Section 8</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab10">Section 9</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
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
                                   @if($data->url == 'resp')
                                    <div class="form-group">
                                        <label>Claim Description</label>
                                        <textarea class="summernote" name="resp_two_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Claim Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="resp_two_vector">
                                    </div>
                                   @endif
                                   @if($data->url == 'claim')
                                    <div class="form-group">
                                        <label>Claim Description</label>
                                        <textarea class="summernote" name="claim_two_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Claim Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="claim_two_vector">
                                    </div>
                                   @endif
                                   @if($data->url == 'product')
                                    <div class="form-group">
                                        <label>Product Heading</label>
                                        <input type="text" class="form-control" name="product_two_heading">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea class="summernote" name="product_two_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="product_two_vector">
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                    @if($data->url == 'health-insurance')
                                    <div class="form-group">
                                        <label>Sec Two Headong</label>
                                        <input type="text"  class="form-control" name="health_two_heading">
                                    </div>
                                      <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                   @if($data->url == 'desability')
                                    <div class="form-group">
                                        <label>First Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="life_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>life Heading</label>
                                        <input type="text" class="form-control" name="life_heading">
                                    </div>
                                    <div class="form-group">
                                        <label>Life Description</label>
                                        <textarea class="summernote" name="life_description"></textarea>
                                    </div>
                                   @endif
                                   @if($data->url == 'critical-illness')
                                    <div class="form-group">
                                        <label>First Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="critical_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Life Description</label>
                                        <textarea class="summernote" name="critical_description"></textarea>
                                    </div>
                                   @endif
                                   @if($data->url == 'life-insurance')
                                    <div class="form-group">
                                        <label>First Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="life_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Life Description</label>
                                        <textarea class="summernote" name="life_two_description"></textarea>
                                    </div>
                                   @endif
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
                                        <label>Last Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="last_two_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Map</label>
                                        <textarea class="form-control" name="contact_map"></textarea>
                                    </div>
                                   @endif
                                   @if($data->url == 'privacypolicy')
                                        <div class="form-group">
                                            <label>Privacy Headings</label>
                                            <textarea class="summernote" name="privacy_two_heading"></textarea>
                                        </div>
                                    @endif
                                    @if($data->url == 'aboutus')
                                    <div class="row mb-2">
                                        <div class="col-md-12 text-right">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#questions"><i class="fa fa-plus"></i>Add New Card</a>
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
                                            @foreach(DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $data->url)->get() as $r)
                                            <tr>
                                                <td>{{ $r->heading }}</td>
                                                <td><a href="{{ url('admin/pages/dletesectiontwo') }}/{{ $r->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                    @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Vector Image</label>
                                                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Vector Image</label>
                                                <button data-toggle="modal" data-target="#viewvectorsection_two_vector" type="button" class="btn btn-sm btn-primary form-control">View Vector</button>
                                            </div>
                                            <div class="modal fade" id="viewvectorsection_two_vector" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Section Two Vector</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <img style="width:100%;" src="{{ url('public/images') }}/{{ $data->section_two_vector }}">
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Sec Two Description</label>
                                         <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
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
                                            @foreach(DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $data->url)->get() as $r)
                                            <tr>
                                                <td>{{ $r->heading }}</td>
                                                <td><a href="{{ url('admin/pages/dletesectiontwo') }}/{{ $r->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
                                       @if($data->url == 'resp')
                                    <div class="form-group">
                                        <label>Claim Description</label>
                                        <textarea class="summernote" name="resp_three_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Claim Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="resp_three_vector">
                                    </div>
                                   @endif
                                      @if($data->url == 'claim')
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img width="120" src="">
                                                </td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</td>
                                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#claim"><i class="fa fa-edit"></i>Edit 1</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="120" src="">
                                                </td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</td>
                                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#claim2"><i class="fa fa-edit"></i>Edit 2</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <label>First Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="clain_three_vector_one">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Three Heading</label>
                                        <input type="text" class="form-control" name="claim_three_heading">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="clain_three_vector_two">
                                    </div>
                                      @endif
                                        @if($data->url == 'health-insurance')
                                    <div class="form-group">
                                        <label>First Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="health_two_vector">
                                    </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                 @if($data->url == 'critical-illness')
                                    <div class="form-group">
                                        <label>Sec Three Heading</label>
                                         <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#illness"><i class="fa fa-plus"></i>Add New Questions</a>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Questions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $data->url)->get() as $r)
                                            <tr>
                                                <td>{{ $r->heading }}</td>
                                                <td><a href="{{ url('admin/pages/dletesectiontwo') }}/{{ $r->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                 @endif
                                 @if($data->url == 'desability')
                                    <div class="form-group">
                                        <label>Sec Three Heading</label>
                                        <input type="text" class="form-control" name="desability_three_heading">
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#aboutquestion"><i class="fa fa-plus"></i>Add New Questions</a>
                                    </div>
                                   <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Questions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $data->url)->get() as $r)
                                            <tr>
                                                <td>{{ $r->heading }}</td>
                                                <td><a href="{{ url('admin/pages/dletesectiontwo') }}/{{ $r->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                 @endif
                                 @if($data->url == 'life-insurance')
                                    <div class="form-group">
                                        <label>Sec Three Description</label>
                                        <textarea class="summernote" name="life_three_description"></textarea>
                                    </div>
                                   @endif
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

                                        <div class="form-group">
                                            <label>Heading</label>
                                            <textarea class="summernote-heading" name="sectionthreeheading">{{ $data->sectionthreeheading }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                             <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
                                        </div>


                                         <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                       @if($data->url == 'resp')
                                    <div class="form-group">
                                        <label>Claim Description</label>
                                        <textarea class="summernote" name="resp_four_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Claim Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="resp_four_vector">
                                    </div>
                                   @endif
                                        @if($data->url == 'claim')
                                        <div class="form-group">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#claimcard"><i class="fa fa-plus"></i>Add New Questions</a>
                                        </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Questions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $data->url)->get() as $r)
                                            <tr>
                                                <td>{{ $r->heading }}</td>
                                                <td><a href="{{ url('admin/pages/dletesectiontwo') }}/{{ $r->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                        @endif
                                         @if($data->url == 'health-insurance')
                                            <div class="form-group">
                                                <label>Sec Four Heading</label>
                                                <input class="form-control" name="health_four_heading">
                                            </div> 
                                            <div class="form-group">
                                                <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                                <input type="text" class="form-control" name="health_four_lists">
                                            </div>
                                            <div class="form-group">
                                                <label>Section Four Vector</label>
                                                <input type="file" style="height:45px;" class="form-control" name="health_four_vector">
                                            </div>
                                         @endif
                                         @if($data->url == 'critical-illness')
                                            <div class="form-group">
                                                <label>Sec Four Heading</label>
                                                <input class="form-control" name="desability_four_critical">
                                            </div>   
                                            <div class="form-group">
                                                <label>Sec Four Description</label>
                                                <textarea class="summernote" name="critical_four_description"></textarea>
                                            </div>  
                                            <div class="form-group">
                                                <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                                <input type="text" class="form-control" name="desability_four_lists">
                                            </div>
                                            <div class="form-group">
                                                <label>Section Four Vector</label>
                                                <input type="file" style="height:45px;" class="form-control" name="desability_four_vector">
                                            </div>
                                           @endif
                                         @if($data->url == 'desability')
                                            <div class="form-group">
                                                <label>Sec Four Heading</label>
                                                <input class="form-control" name="desability_four_heading">
                                            </div>   
                                            <div class="form-group">
                                                <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                                                <input type="text" class="form-control" name="desability_four_lists">
                                            </div>
                                            <div class="form-group">
                                                <label>Section Four Vector</label>
                                                <input type="file" style="height:45px;" class="form-control" name="desability_four_vector">
                                            </div>
                                           @endif
                                         @if($data->url == 'life-insurance')
                                            <div class="form-group">
                                                <label>Sec Four Heading</label>
                                                <textarea class="summernote" name="life_four_description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Section Four Vector</label>
                                                <input type="file" style="height:45px;" class="form-control" name="life_four_vector">
                                            </div>
                                           @endif
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
                                       @if($data->url == 'resp')
                                    <div class="form-group">
                                        <label>Claim Description</label>
                                        <textarea class="summernote" name="resp_five_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Claim Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="resp_five_vector">
                                    </div>
                                   @endif
                                        @if($data->url == 'health-insurance') 
                                        <div class="form-group">
                                            <label>Sec Five Heading</label>
                                            <input type="text"  class="form-control" name="section_five_heading">
                                        </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                        @if($data->url == 'critical-illness')
                                        <div class="form-group">
                                            <label>Sec Five Heading</label>
                                            <input type="text"  class="form-control" name="desability_five_heading">
                                        </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                        @if($data->url == 'desability')      
                                        <div class="form-group">
                                            <label>Section Five Image</label>
                                            <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec Five Heading</label>
                                            <textarea class="summernote" name="section_five_description"></textarea>
                                        </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                     @if($data->url == 'life-insurance')
                                        <div class="form-group">
                                            <label>Sec Five Heading</label>
                                            <input type="text"  class="form-control" name="section_five_heading">
                                        </div>
                                        <div class="form-group">
                                            <label>Sec Five Description</label>
                                            <textarea class="summernote" name="life_five_description"></textarea>
                                        </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                        <input type="text" value="{{ $data->meta_title }}" class="form-control" name="meta_title">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                         <textarea class="form-control" name="meta_description">{{ $data->meta_description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Tags</label>
                                        <textarea class="form-control" name="meta_tag">{{ $data->meta_tag }}</textarea>
                                    </div>
                                        <div class="form-group">
                                        <label>Meta Image</label>
                                        <input type="file" style="height:45px;" class="form-control" name="meta_image">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab7">
                            <div class="row">
                                <div class="col-md-12">

                                        @if($data->url == 'critical-illness')
                                        <div class="form-group">
                                            <label>Sec Six Heading</label>
                                            <input type="text"  class="form-control" name="critical_six_heading">
                                            <label>Sec Six Description</label>
                                             <textarea class="form-control" name="critical_six_description"></textarea>
                                        </div>
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                    @if($data->url == 'desability')
                                    <div class="form-group">
                                        <label>Sec Six Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="desability_six_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Six Heading</label>
                                        <input type="text" class="form-control" name="desability_six_heading">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Six Description</label>
                                        <textarea class="summernote" name="desability_six_description"></textarea>
                                    </div>
                                    @endif
                                    @if($data->url == 'life-insurance')
                                    <div class="form-group">
                                        <label>Sec Six Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="life_six_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Six Description</label>
                                        <textarea class="summernote" name="life_six_description"></textarea>
                                    </div>
                                   @endif
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab8">
                            <div class="row">
                                <div class="col-md-12">
                                    @if($data->url == 'desability')
                                    <div class="form-group">
                                        <label>Sec Seven Description</label>
                                        <textarea class="summernote" name="desability_seven_description"></textarea>
                                    </div>
                                   @endif
                                    @if($data->url == 'life-insurance')
                                    <div class="form-group">
                                        <label>Sec Seven Heading</label>
                                        <input type="text" class="form-control" name="life_seven_heading">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Seven Description</label>
                                        <textarea class="summernote" name="life_seven_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Seven Button Text</label>
                                        <input type="text" class="form-control" name="life_seven_btn_text">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Seven Link</label>
                                        <input type="text" class="form-control" name="life_seven_btn_link">
                                    </div>
                                   @endif
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab9">
                            <div class="row">
                                <div class="col-md-12">
                                    @if($data->url == 'life-insurance')
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vector</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
                                    <div class="form-group">
                                        <label>Sec Eight description</label>
                                         <textarea class="summernote" name="life_seven_description"></textarea>
                                    </div>
                                    @endif
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="tab10">
                           <div class="row">
                                <div class="col-md-12">
                                   @if($data->url == 'life-insurance')
                                    <div class="form-group">
                                        <label>Sec Nine Vector</label>
                                        <input type="file" style="height:45px;" class="form-control" name="sec_nine_vector">
                                    </div>
                                    <div class="form-group">
                                        <label>Sec Nine Description</label>
                                        <textarea class="summernote" name="sec_nine_description"></textarea>
                                    </div>
                                   @endif
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="tab11">
                           <div class="row">
                                <div class="col-md-12">
                            @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance'|| $data->url == 'aboutus'|| $data->url == 'health-insurance' || $data->url == 'life-insurance' || $data->url == 'critical-illness' || $data->url == 'claim' || $data->url =='resp')   

                                        
                                          <select class="form-control">
                                            @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                                            <option>{{ $r->name }}</option>
                                         @endforeach
                                          </select>
                                       @endif
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
<!-- modal section 5 -->
<!-- card 1 -->
<div class="modal fade" id="products1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Two Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
        <div class="form-group">
            <label>Sec Btn Link</label>
            <input type="text"  class="form-control" name="section_btn_link">
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
<div class="modal fade" id="products2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Two Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
        <div class="form-group">
            <label>Sec Btn Link</label>
            <input type="text"  class="form-control" name="section_btn_link">
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
<div class="modal fade" id="products3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec Two Description</label>
             <textarea class="summernote" name="section_modal_description"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Button Text</label>
                    <input value="" type="text" class="form-control" name="btn_text">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Sec Btn Link</label>
                <input type="text"  class="form-control" name="section_btn_link">
            </div>
            </div>
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
    <!-- desability section cards -->
    <!-- card 1 -->
<div class="modal fade" id="desability1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desability 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
<div class="modal fade" id="desability2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desability 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
<div class="modal fade" id="desability3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desability 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
    <!-- end desability cards -->

     <!-- Critical section cards -->
    <!-- card 1 -->
<div class="modal fade" id="policies1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Five Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Five Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Five Description</label>
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
<div class="modal fade" id="policies2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="form-group">
      <div class="modal-body">
        <div class="form-group">
            <label>Section Five Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
            <label>Sec Five Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Five Description</label>
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
<div class="modal fade" id="policies3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Five Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Five Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec Five Description</label>
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
    <!-- end critical cards -->

     <!-- Critical section  6 cards -->
    <!-- card 1 -->
<div class="modal fade" id="advantages1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical Section Six 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Six Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Six Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Six Description</label>
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
<div class="modal fade" id="advantages2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical Section Six 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Six Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Six Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Six Description</label>
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
<div class="modal fade" id="advantages3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical Section Six 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Six Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Six Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec Six Description</label>
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
    <!-- end critical section 6 cards -->
     <!-- Health section  cards -->
    <!-- card 1 -->
<div class="modal fade" id="health1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
<div class="modal fade" id="health2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
<div class="modal fade" id="health3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
    <!-- end Health section 6 cards -->
    <!-- Health section 3 cards -->
    <!-- card 1 -->
<div class="modal fade" id="boxes1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
<div class="modal fade" id="boxes2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
<div class="modal fade" id="boxes3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
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
    <!-- end Health section 3 cards -->
<!-- Questions modal -->
<div class="modal fade" id="questions" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Something</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="{{ url('admin/pages/addnewsectionthreeelement') }}">
        @csrf
      <input type="hidden" name="type" value="sectiontwoquestion">
      <input type="hidden" name="page" value="{{ $data->url }}">
      <div class="modal-body">
        @if($data->url == 'aboutus')
        <div class="form-group">
            <label>Vector</label>
            <input type="file"  class="form-control" name="vector">
        </div>
        @endif
        <div class="form-group">
            <label>Question</label>
            <input type="text"  class="form-control" name="heading">
        </div>
        <div class="form-group">
            <label>Answer</label>
             <textarea class="summernote" name="description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
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
<!-- Desability Card modal -->
<div class="modal fade" id="aboutquestion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <label>About Heading</label>
            <input type="text" class="form-control" name="desability_two_headings">
        </div>
        <div class="form-group">
            <label>About Two Description</label>
             <textarea class="summernote" name="desability_two_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Desability Modal -->
<!-- Critical Card modal -->
<div class="modal fade" id="illness" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <label>About Heading</label>
            <input type="text" class="form-control" name="desability_two_headings">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Critical Modal -->
<!-- Claim Card modal -->
<div class="modal fade" id="claim" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <input type="file" style="height:45px;" class="form-control" name="claim_three_vector">
        </div>
        <div class="form-group">
            <label>Card Description</label>
            <textarea class="summernote" name="claim_three_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Claim Card Modal -->
<!-- Claim Card 2 modal -->
<div class="modal fade" id="claim2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
            <input type="file" style="height:45px;" class="form-control" name="claim_three_vector">
        </div>
        <div class="form-group">
            <label>Card Description</label>
            <textarea class="summernote" name="claim_three_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Claim Card 2 Modal -->
<!-- Claim 4 Card modal -->
<div class="modal fade" id="claimcard" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Privacy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-group">
            <label>Claim Heading</label>
            <input type="text" class="form-control" name="claim_four_headings">
        </div>
        <div class="form-group">
            <label>Claim Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="claim_four_vector">
        </div>
        <div class="form-group">
            <label>Claim Button Link</label>
            <input type="text" class="form-control" name="claim_four_btn_link">
        </div>
        <div class="form-group">
            <label>Claim Button text</label>
            <input type="text" class="form-control" name="claim_four_btn_text">
        </div>
        <div class="form-group">
            <label>Claim  Description</label>
             <textarea class="summernote" name="claim_four_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Claim 4 Modal -->
@endsection