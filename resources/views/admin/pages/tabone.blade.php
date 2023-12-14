<div class="tab-pane fade show active" id="tab1">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Do You Want to show this section?</label>
                <select  name="showsection_one" id="" class="form-control">
                    <option  value="">---Select option---</option>
                
                    <option {{ ( $data->showsection_one == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                    <option {{ ( $data->showsection_one == 'no') ? 'selected' : '' }} value="no">No</option>
                </select>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Main Image</label>
                <input type="file" style="height:45px;" class="form-control" name="main_image">
            </div>
        </div>
        <div class="col-md-4">
            <label>Main Image</label>
            <button data-toggle="modal" data-target="#viewmainimage" type="button"
                class="btn btn-primary form-control">View Image</button>
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
