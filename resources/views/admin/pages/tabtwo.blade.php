<div class="tab-pane fade" id="tab2">
   <div class="row">
        <div class="col-md-12">
           @if($data->url == 'term-life-insurance')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_two" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two  Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
           @endif
           @if($data->url == 'terms-and-condition')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_two" id="" class="form-control">
                <option  value="">---Select option---</option>
                <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two  Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
           @endif
           @if($data->url == 'resp')
         
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
      
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two  Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
           @endif
           @if($data->url == 'mortgage')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_two" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }}value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two  Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
           @endif
           @if($data->url == 'tfsa')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_two" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two  Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
           @endif
           @if($data->url == 'nonmedical')
         
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
        
           @endif
           @if($data->url == 'rrsp')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_two" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Two Description</label>
                <textarea class="summernote" name="section_two_description">{{ $data->section_two_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Two Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_two_vector">
            </div>
           @endif
           @if($data->url == 'claim')
    
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>

            <div class="form-group">
                <label>Claim Description</label>
                <textarea class="summernote" name="claim_two_description"></textarea>
            </div>
            <div class="form-group">
                <label>Claim Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="claim_two_vector">
            </div>
           @endif
           @if($data->url == 'homepage')
            <div class="row mb-2">
                <div class="col-md-12 text-right">
                    <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#questions"><i class="fa fa-plus"></i>Add New Card</a>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_two" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Vector</th>
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
           @if($data->url == 'product')
        
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        
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
                        <td>{!! $r->section_two_description !!}</td>
                        <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#section_three_elements{{ $r->id }}"><i class="fa fa-edit"></i>Edit 1</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           @endif
            @if($data->url == 'health-insurance')
         
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_two" id="" class="form-control">
                        <option  value="">---Select option---</option>
                        <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            
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
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option  value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
     
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
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option  value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        
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
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option  value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        
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
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option  value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
    
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
                <label>Do You Want to show this section?</label>
                <select  name="showsection_two" id="" class="form-control">
                    <option  value="">---Select option---</option>
                    <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
      
                <div class="form-group">
                    <label>Privacy Headings</label>
                    <textarea class="summernote" name="privacy_two_heading">{{ $data->privacy_two_heading }}</textarea>
                </div>
            @endif
            @if($data->url == 'aboutus')
            <div class="row mb-2">
                <div class="col-md-12 text-right">
                    <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#questions"><i class="fa fa-plus"></i>Add New Card</a>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_two" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
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
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Do You Want to show this section?</label>
                        <select  name="showsection_two" id="" class="form-control">
                            <option value="">---Select option---</option>
                            <option {{ ( $data->showsection_two == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_two == 'no') ? 'selected' : '' }} value="no">No</option>
                        </select>
                    </div>
                </div>
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