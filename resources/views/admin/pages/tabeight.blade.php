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