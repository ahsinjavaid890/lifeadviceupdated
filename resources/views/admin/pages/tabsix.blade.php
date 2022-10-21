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