@foreach($data as $r)
    <div class="card mb-3 appenddiv{{ $r->id }}" id="BigButton">
        <div class="card-header"> 
            <div class="col-md-12 text-right"> 
                <span onclick="removediv({{ $r->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></span> 
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <label>Benifit Order</label>
                    <input class="form-control" type="text" value="{{ $r->order }}" name="order[]">
                </div>
                <div class="col-md-6 mt-2">
                    <label>Select Benifit Category</label>
                    <select id="benifitcategory" required class="form-control" name="benifitcategory[]">
                    <option value="">Select Benifit Category</option>
                    @foreach(DB::table('plan_benifits_categories')->orderby('order' , 'asc')->get() as $c)
                    <option @if($r->benifitcategory == $c->id) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                   </select>
                </div>
                <div class="col-md-12 mt-2">
                    <label>Enter Heading of Benefit</label>
                    <input value="{{ $r->benefits_head }}" type="text" class="form-control"  name="benefits_head[]">
                </div> 
                <div class="col-md-12 mt-2">
                    <label>Enter Benefit Description</label>
                    <textarea required  placeholder="Enter benefit Description" class="summernotebenifit" spellcheck="false" id="ibenefitDesc1" name="benefits_desc[]">{{ $r->benefits_desc }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <script type="text/javascript">
        $('.summernotebenifit').summernote({
            tabsize: 4,
            height: 100
            });
    </script>