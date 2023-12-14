<div class="tab-pane fade" id="tab9">
    <div class="row">
        <div class="col-md-12">
            @if ($data->url == 'term-life-insurance')
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select name="showsection_nine" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_nine == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_nine == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sec Eight Description One</label>
                    <textarea class="summernote" name="section_eight_description_one">{{ $data->section_eight_description_one }}</textarea>
                </div>
                <div class="form-group">
                    <label>Sec Eight Description Two</label>
                    <textarea class="summernote" name="section_eight_description_two">{{ $data->section_eight_description_two }}</textarea>
                </div>
            @endif
            @if ($data->url == 'terms-and-condition')
                <div class="form-group">
                    <label>Do You Want to show this section?</label>
                    <select name="showsection_nine" id="" class="form-control">
                        <option value="">---Select option---</option>
                        <option {{ ( $data->showsection_nine == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                        <option {{ ( $data->showsection_nine == 'no') ? 'selected' : '' }} value="no">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sec Eight Description One</label>
                    <textarea class="summernote" name="section_eight_description_one">{{ $data->section_eight_description_one }}</textarea>
                </div>
                <div class="form-group">
                    <label>Sec Eight Description Two</label>
                    <textarea class="summernote" name="section_eight_description_two">{{ $data->section_eight_description_two }}</textarea>
                </div>
            @endif
            @if ($data->url == 'life-insurance')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Do You Want to show this section?</label>
                            <select  name="showsection_nine" id="" class="form-control">
                                <option value="">---Select option---</option>
                                <option {{ ( $data->showsection_nine == 'yes') ? 'selected' : '' }} value="yes">Yes</option>
                                <option {{ ( $data->showsection_nine == 'no') ? 'selected' : '' }} value="no">No</option>
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
                        @foreach (DB::table('section_three_elements')->where('type', 'beautifulcards')->where('page', $data->url)->get() as $r)
                            <tr>
                                <td>
                                    <img width="120" src="{{ url('public/images') }}/{{ $r->vector }}">
                                </td>
                                <td>{!! $r->heading !!}</td>
                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#section_three_elements{{ $r->id }}"><i
                                            class="fa fa-edit"></i>Edit 1</a></td>
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
