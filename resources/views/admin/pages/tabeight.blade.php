<div class="tab-pane fade" id="tab8">
    <div class="row">
        <div class="col-md-12">
            @if($data->url == 'term-life-insurance')
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_eight" id="" class="form-control">
                    <option value="">---Select option---</option>    <option {{ ( $data->showsection_eight == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_eight == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sec Seven Description</label>
                <textarea class="summernote" name="section_seven_description">{{ $data->section_seven_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Sec Seven Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_seven_vector">
            </div>
           @endif
            @if($data->url == 'terms-and-condition')
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_eight" id="" class="form-control">
                    <option value="">---Select option---</option>    <option {{ ( $data->showsection_eight == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_eight == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sec Seven Description</label>
                <textarea class="summernote" name="section_seven_description">{{ $data->section_seven_description}}</textarea>
            </div>
            <div class="form-group">
                <label>Sec Seven Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_seven_vector">
            </div>
           @endif
            @if($data->url == 'desability')
       
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_eight" id="" class="form-control">
                        <option value="">---Select option---</option>   <option {{ ( $data->showsection_eight == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_eight == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
        
            <div class="form-group">
                <label>Sec Seven Description</label>
                <textarea class="summernote" name="section_seven_description"></textarea>
            </div>
           @endif
            @if($data->url == 'life-insurance')
 
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select  name="showsection_eight" id="" class="form-control">
                        <option value="">---Select option---</option>    <option {{ ( $data->showsection_eight == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_eight == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
            
            <div class="form-group">
                <label>Sec Seven Heading</label>
                <input type="text" class="form-control" name="life_seven_heading">
            </div>
            <div class="form-group">
                <label>Sec Seven Description</label>
                <textarea class="summernote" name="section_seven_description"></textarea>
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