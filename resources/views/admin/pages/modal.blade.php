@foreach(DB::table('section_three_elements')->where('page' , $data->url)->get() as $r)
<div class="modal fade" id="section_three_elements{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">{!! $r->heading !!}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="{{ url('admin/pages/section_three_elements') }}">
        @csrf
          <input type="hidden" value="{{ $r->id }}" name="id">
          <div class="modal-body">
            <div class="form-group">
                <label>Vector</label>
                <input type="file" style="height:45px;" class="form-control" name="section_three_vector">
            </div>
            <div class="form-group">
                <label>Heading</label>
                <textarea class="summernote-heading" name="heading">{{ $r->heading }}</textarea>
            </div>
            @if($data->url == 'claim')
            <div class="form-group">
                <label>Button Text</label>
                <input type="text"  class="form-control" value="{{ $r->button_text }}" name="button_text">
            </div>
            <div class="form-group">
                <label>Button Link</label>
                <input type="text"  class="form-control" value="{{ $r->button_link }}" name="button_link">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text"  class="form-control" value="{{ $r->contact_number }}" name="contact_number">
            </div>
            <div class="form-group">
                <label>Contact Number 2</label>
                <input type="text"  class="form-control" value="{{ $r->contact_number_two }}" name="contact_number_two">
            </div>
            <div class="form-group">
                <label>With In</label>
                <input type="text"  class="form-control" value="{{ $r->with_in }}" name="with_in">
            </div>
            @else
            <div class="form-group">
                <label>Description</label>
                <textarea class="summernote" name="description">{{ $r->description }}</textarea>
            </div>
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endforeach


<!-- end modal section 3 -->
<!-- modal section 5 -->
<!-- card 1 -->
<div class="modal fade" id="addnewproduct" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="{{ url('admin/pages/addnewsectionthreeelement') }}">
      @csrf
      <input type="hidden" name="type" value="productcards">
      <input type="hidden" name="page" value="{{ $data->url }}">
      <div class="modal-body">
        <div class="form-group">
            <label>Vector</label>
            <input  type="file"  class="form-control" name="vector">
        </div>
        <div class="form-group">
            <label>Heading</label>
             <textarea class="summernote-heading" name="heading"></textarea>
        </div>
        <div class="form-group">
            <label>Button Text</label>
            <input type="text"  class="form-control" name="button_text">
        </div>
        <div class="form-group">
            <label>Button Link</label>
            <input type="text"  class="form-control" name="button_link">
        </div>
        <div class="form-group">
           <label>Description</label>
           <textarea class="summernote" name="description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- end section 5 -->
    <!-- desability section cards -->
    <!-- card 1 -->
<div class="modal fade" id="desability1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desability 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec three Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="desability2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desability 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec three Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="desability3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desability 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Sec three Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec three Description</label>
             <textarea class="summernote" name="section_modal_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
    <!-- end desability cards -->

     <!-- Critical section cards -->
    <!-- card 1 -->
<div class="modal fade" id="policies1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Five Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Five Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Five Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="policies2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="form-group">
      <div class="modal-body">
        <div class="form-group">
            <label>Section Five Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
            <label>Sec Five Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Five Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="policies3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Five Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Five Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec Five Description</label>
             <textarea class="summernote" name="section_modal_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
    <!-- end critical cards -->

     <!-- Critical section  6 cards -->
    <!-- card 1 -->
<div class="modal fade" id="advantages1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical Section Six 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Six Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Six Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Six Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="advantages2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical Section Six 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Six Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Six Heading</label>
            <input type="text"  class="form-control" name="section_modal_-heading">
        </div>
        <div class="form-group">
            <label>Sec Six Description</label>
             <textarea class="summernote" name="section_modal_-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="advantages3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Critical Section Six 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Six Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Six Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
        <div class="form-group">
            <label>Sec Six Description</label>
             <textarea class="summernote" name="section_modal_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
    <!-- end critical section 6 cards -->
     <!-- Health section  cards -->
    <!-- card 1 -->
<div class="modal fade" id="health1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="health2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="health3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
    <!-- end Health section 6 cards -->
    <!-- Health section 3 cards -->
    <!-- card 1 -->
<div class="modal fade" id="boxes1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 1 -->
 <!-- card 2 -->
<div class="modal fade" id="boxes2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 2 -->
 <!-- card 3 -->
<div class="modal fade" id="boxes3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Health Section Two 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Section Two Image</label>
            <input type="file" style="height:45px;" class="form-control" name="section_modal_-vector">
        </div>
        <div class="form-group">
            <label>Sec Two Heading</label>
            <input type="text"  class="form-control" name="section_modal_heading">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end card 3 -->
    <!-- end Health section 3 cards -->
<!-- Questions modal -->
<div class="modal fade" id="questions" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Something</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="{{ url('admin/pages/addnewsectionthreeelement') }}">
      @csrf
      @if($data->url == 'claim')
      <input type="hidden" name="type" value="claimproducts">
      @else
      <input type="hidden" name="type" value="sectiontwoquestion">
      @endif

      <input type="hidden" name="page" value="{{ $data->url }}">
      <div class="modal-body">
        @if($data->url == 'aboutus' || $data->url == 'claim')
        <div class="form-group">
            <label>Vector</label>
            <input type="file"  class="form-control" name="vector">
        </div>
        @endif
        <div class="form-group">
            @if($data->url == 'claim')<label>Heading</label>@else<label>Question</label>@endif
             @if($data->url == 'claim')<textarea class="summernote" name="heading"></textarea> @else<input type="text"  class="form-control" name="heading">@endif
            
        </div>
        @if($data->url == 'claim')
        <div class="form-group">
            <label>Button Text</label>
            <input type="text"  class="form-control" name="button_text">
        </div>
        <div class="form-group">
            <label>Button Link</label>
            <input type="text"  class="form-control" name="button_link">
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text"  class="form-control" name="contact_number">
        </div>
        <div class="form-group">
            <label>Contact Number 2</label>
            <input type="text"  class="form-control" name="contact_number_two">
        </div>
        <div class="form-group">
            <label>With In</label>
            <input type="text"  class="form-control" name="with_in">
        </div>
        @else
        <div class="form-group">
           @if($data->url == 'claim')<label>Description</label>@else<label>Answer</label>@endif
           <textarea class="summernote" name="description"></textarea>
        </div>
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end questions Modal -->


<!-- About Card modal -->
<div class="modal fade" id="aboutcard" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add New Card</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Card Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="about_card_vector">
        </div>
        <div class="form-group">
            <label>Card Heading</label>
            <input type="text"  class="form-control" name="about_card_heading">
        </div>
        <div class="form-group">
            <label>Card Description</label>
            <textarea class="summernote" name="answer"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end About Card Modal -->

<!-- Privacy Policy Card modal -->
<div class="modal fade" id="policy" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Privacy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Policy Heading</label>
            <input type="text"  class="form-control" name="policy_modal_heading">
        </div>
        <div class="form-group">
            <label>Policy Description</label>
            <textarea class="summernote" name="policy_modal_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Privacy Policy Modal -->
<!-- Desability Card modal -->
<div class="modal fade" id="aboutquestion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Privacy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>About Heading</label>
            <input type="text" class="form-control" name="desability_two_headings">
        </div>
        <div class="form-group">
            <label>About Two Description</label>
             <textarea class="summernote" name="desability_two_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Desability Modal -->
<!-- Critical Card modal -->
<div class="modal fade" id="illness" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Privacy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>About Heading</label>
            <input type="text" class="form-control" name="desability_two_headings">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Critical Modal -->
<!-- Claim Card modal -->
<div class="modal fade" id="claim" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add New Card</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Card Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="claim_three_vector">
        </div>
        <div class="form-group">
            <label>Card Description</label>
            <textarea class="summernote" name="claim_three_description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Claim Card Modal -->
<!-- Claim Card 2 modal -->
<div class="modal fade" id="viewmainimage" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">View Main Image</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="width: 100%;" src="{{ url('public/images') }}/{{ $data->main_image }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end Claim Card 2 Modal -->