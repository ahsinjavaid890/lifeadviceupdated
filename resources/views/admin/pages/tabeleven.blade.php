 <div class="tab-pane fade" id="tab11">
   <div class="row">
        <div class="col-md-12">
            @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance'|| $data->url == 'aboutus'|| $data->url == 'health-insurance' || $data->url == 'life-insurance' || $data->url == 'critical-illness' || $data->url == 'claim' || $data->url =='resp' || $data->url == 'homepage' || $data->url =='rrsp' || $data->url =='mortgage' || $data->url =='nonmedical' || $data->url =='tfsa')       
            <select name="faq_id" class="form-control">
                <option value="">Select Category</option>
                @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                <option @if($data->faq_id == $r->id) selected @endif value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
            @endif
        </div>
   </div>
</div>