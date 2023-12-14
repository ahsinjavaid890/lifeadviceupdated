<div class="tab-pane fade" id="tab3">
    <div class="row">
        <div class="col-md-12">

           @if($data->url == 'homepage')
        
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_three" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        
            <div class="form-group">
                <label>Homepage Heading</label>
                <textarea class="summernote" name="homepage_heading"></textarea>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 text-right">
                    <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addnewproduct"><i class="fa fa-plus"></i>Add New Product</a>
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
           @if($data->url == 'resp')
           
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_three" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
      
            <div class="form-group">
                <label>Section Three Description</label>
                <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Three Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
           @endif
           @if($data->url == 'term-life-insurance')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Three Description</label>
                <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Three Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
           @endif
           @if($data->url == 'terms-and-condition')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Three Description</label>
                <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Three Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
           @endif
           @if($data->url == 'termsandcondition')
            <div class="form-group">
                <label>Section Three Description</label>
                <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Three Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
           @endif
           @if($data->url == 'mortgage')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Three Description</label>
                <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Three Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
           @endif
           @if($data->url == 'tfsa')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
            <div class="form-group">
                <label>Section Three Description</label>
                <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
            </div>
            <div class="form-group">
                <label>Section Three Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
           @endif
           @if($data->url == 'nonmedical')
         
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_three" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
     
        <div class="form-group">
            <label>Section Three Description</label>
            <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
        </div>
        <div class="form-group">
            <label>Section Three Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
        </div>
       @endif
           @if($data->url == 'rrsp')
           <div class="form-group">
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
        <div class="form-group">
            <label>Section Three Description</label>
            <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
        </div>
        <div class="form-group">
            <label>Section Three Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
        </div>
       @endif
          @if($data->url == 'claim')
          <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_three" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
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
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_three" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
           
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
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
    
        <div class="form-group">
            <label>Sec Three Heading</label>
             <textarea class="summernote" name="sectionthreedescription">{{ $data->sectionthreedescription }}</textarea>
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
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
  
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
            <label>Do You Want to show this section?</label>
            <select  name="showsection_three" id="" class="form-control">
                <option value="">---Select option---</option>
                <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
            </select>
        </div>
  
        <div class="form-group">
            <label>Sec Three Description</label>
            <textarea class="summernote" name="life_three_description"></textarea>
        </div>
       @endif
            @if($data->url == 'aboutus')
            
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_three" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            
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
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_three" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_three == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_three == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
         
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