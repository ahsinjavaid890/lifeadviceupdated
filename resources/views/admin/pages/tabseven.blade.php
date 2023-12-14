<div class="tab-pane fade" id="tab7">
    <div class="row">
        <div class="col-md-12">
            @if($data->url == 'travel-insurance')
        <div class="row mb-2">
            <div class="col-md-12 text-right">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addnewproduct"><i class="fa fa-plus"></i>Add New Product</a>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_seven" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
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
                @if($data->url == 'critical-illness')
               
                    <div class="form-group">
                        <label>Do You Want to show this section?</label>
                        <select  name="showsection_seven" id="" class="form-control">
                            <option value="">---Select option---</option>
                            <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                            <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                        </select>
                    </div>
              
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
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_seven" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            
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
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_seven" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="life_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="life_six_description"></textarea>
            </div>
           @endif
            @if($data->url == 'resp')
            
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_seven" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="section_six_description">{{ $data->section_six_description}}</textarea>
            </div>
            @endif
            @if($data->url == 'mortgage')
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_seven" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="section_six_description">{{ $data->section_six_description}}</textarea>
            </div>
            @endif
            @if($data->url == 'nonmedical')
            
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_seven" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
           
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="section_six_description">{{ $data->section_six_description}}</textarea>
            </div>
           @endif
            @if($data->url == 'terms-and-condition')
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_seven" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="section_six_description">{{ $data->section_six_description}}</textarea>
            </div>
           @endif
            @if($data->url == 'term-life-insurance')
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_seven" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="section_six_description">{{ $data->section_six_description}}</textarea>
            </div>
           @endif
            @if($data->url == 'rrsp')
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_seven" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_seven == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_seven == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sec Six Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_six_vector">
            </div>
            <div class="form-group">
                <label>Sec Six Description</label>
                <textarea class="summernote" name="section_six_description">{{ $data->section_six_description}}</textarea>
            </div>
           @endif
        </div>
    </div>
 </div>