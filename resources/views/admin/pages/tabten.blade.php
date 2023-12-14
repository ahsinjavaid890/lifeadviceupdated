<div class="tab-pane fade" id="tab10">
    <div class="row">
        <div class="col-md-12">
           @if($data->url == 'life-insurance')
    
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select name="showsection_ten" id="" class="form-control">
                    <option value="">---Select option---</option>
                    <option {{ ( $data->showsection_ten == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_ten == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
      
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