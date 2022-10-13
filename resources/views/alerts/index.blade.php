@if(session()->has('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> {{ session()->get('message') }}
  </div>
@endif 
@if(session()->has('warning'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> {{ session()->get('warning') }}
  </div>
@endif
