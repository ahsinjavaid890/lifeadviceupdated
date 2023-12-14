<div class="tab-pane fade" id="tab5">
    <div class="row">
        <div class="col-md-12">
           @if($data->url == 'resp')
         
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_five" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
      
            <div class="form-group">
                <label>Section Five Description</label>
                <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Section Five Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
            </div>
           @endif
           @if($data->url == 'term-life-insurance')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_five" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Five Description</label>
                <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Section Five Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
            </div>
           @endif
           @if($data->url == 'terms-and-condition')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_five" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Five Description</label>
                <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Section Five Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
            </div>
           @endif
           @if($data->url == 'mortgage')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_five" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Five Description</label>
                <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Section Five Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
            </div>
           @endif
           @if($data->url == 'tfsa')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_five" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Five Description</label>
                <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Section Five Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
            </div>
           @endif
           @if($data->url == 'rrsp')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_five" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
        <div class="form-group">
            <label>Section Five Description</label>
            <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
        </div>
        <div class="form-group">
            <label>Section Five Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
        </div>
       @endif
           @if($data->url == 'nonmedical')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_five" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
        <div class="form-group">
            <label>Section Five Description</label>
            <textarea class="summernote" name="section_five_description">{{ $data->section_five_description}}</textarea>
        </div>
        <div class="form-group">
            <label>Section Five Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="section_five_vector">
        </div>
       @endif
            @if($data->url == 'health-insurance') 
        
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_five" id="" class="form-control">
                        <option value="">---Select option---</option>  <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
       
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
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_five" id="" class="form-control">
                        <option value="">---Select option---</option>   <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
          
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
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_five" id="" class="form-control">
                        <option value="">---Select option---</option>   <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
             
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
                <label>Do You Want to show this section?</label>
                <select  name="showsection_five" id="" class="form-control">
                    <option value="">---Select option---</option>  <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        
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
        <div class="row mb-2">
            <div class="col-md-12 text-right">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addnewproduct"><i class="fa fa-plus"></i>Add New Product</a>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_five" id="" class="form-control">
                    <option value="">---Select option---</option>    <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        </div>
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
                    @foreach(DB::table('section_three_elements')->where('type' , 'productcards')->where('page' , $data->url)->get() as $r)
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
        @if($data->url == 'visitor-insurance' || $data->url == 'student-insurance')
        <div class="row mb-2">
            <div class="col-md-12 text-right">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addnewproduct"><i class="fa fa-plus"></i>Add New Product</a>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_five" id="" class="form-control">
                    <option value="">---Select option---</option>   <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        </div>
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
                    @foreach(DB::table('section_three_elements')->where('type' , 'productcards')->where('page' , $data->url)->get() as $r)
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
             @if($data->url == 'aboutus')
        
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_five" id="" class="form-control">
                        <option value="">---Select option---</option>    <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
      
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
            @if($data->url == 'travel-insurance')
         
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_five" id="" class="form-control">
                        <option value="">---Select option---</option>     <option {{ ( $data->showsection_five == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_five == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
          
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