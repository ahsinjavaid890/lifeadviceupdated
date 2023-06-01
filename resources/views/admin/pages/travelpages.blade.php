@extends('admin.layouts.main-layout')
@section('title','Manage Super Visa')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="row">
                <div class="col-md-12">
                    @include('alerts.index')
                   <div class="card  my-4">
                    <form enctype="multipart/form-data" action="{{ url('admin/pages/updatedynamicpage') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">
                       <!-- navigation in .card-header -->
                       <div class="card-header">
                          @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance' || $data->url == 'life-insurance' || $data->url == 'desability' || $data->url == 'critical-illness' || $data->url == 'health-insurance' || $data->url == 'claim' || $data->url == 'resp' || $data->url == 'rrsp' || $data->url == 'mortgage' || $data->url == 'nonmedical' || $data->url == 'tfsa' || $data->url == 'term-life-insurance'|| $data->url == 'single-trip-insurance')   
                                   <h2> {{ $data->name }}</h2>

                            @endif
                            @if($data->url == 'terms-and-condition' || $data->url == 'aboutus' || $data->url == 'contactus' || $data->url == 'privacypolicy' || $data->url == 'blogs' || $data->url == 'product' || $data->url == 'faq' || $data->url == 'homepage')
                                   <h2> {{ $data->name }} </h2>

                            @endif
                            @if($data->url == 'resp'  || $data->url == 'rrsp' || $data->url == 'nonmedical')
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'term-life-insurance' || $data->url == 'terms-and-condition')
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <!-- <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li> -->
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab9">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab8">Section 7</a>
                               </li>
                               <!-- <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li> -->
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'mortgage' || $data->url == 'tfsa')
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'claim' || $data->url == 'homepage')
                                <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                           @if($data->url == 'privacypolicy' || $data->url == 'product' || $data->url == 'faq')
                            <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                           @endif
                            @if($data->url == 'critical-illness')
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'desability')
                                <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab8">Section 7</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                            @endif
                            @if($data->url == 'contactus')
                            <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                           @endif
                            @if($data->url == 'super-visa-insurance' || $data->url == 'single-trip-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance'|| $data->url == 'aboutus'|| $data->url == 'health-insurance')   
                             <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               @if($data->url == 'travel-insurance')
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                               @else
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                               @endif
                             @endif
                             @if( $data->url == 'life-insurance')
                             <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab2">Section 2</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab3">Section 3</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab4">Section 4</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab5">Section 5</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab7">Section 6</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab8">Section 7</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab9">Section 8</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab10">Section 9</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab11">Faq's</a>
                               </li>
                             </ul>
                             @endif
                             @if( $data->url == 'blogs')  
                             <ul class="nav nav-tabs card-header-tabs">
                               <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tab1">Section 1</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tab6">Meta Tags</a>
                               </li>
                             </ul>
                             @endif 
                       </div>
                       <!-- .card-body.tab-content  -->
                       <div class="card-body tab-content">
                         @include('admin.pages.tabone')
                         @include('admin.pages.tabtwo')
                         @include('admin.pages.tabthree')
                         @include('admin.pages.tabfour')
                         @include('admin.pages.tabfive')
                         @include('admin.pages.tabsix')
                         @include('admin.pages.tabseven')
                         @include('admin.pages.tabeight')
                         @include('admin.pages.tabnine')
                         @include('admin.pages.tabten')
                         @include('admin.pages.tabeleven')
                          </div><!--/.card-body -->
                          <div class="card-footer">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary"  value="Update">
                                </div>
                            </div>
                          
                      </form>
                      </div>
                      </div><!--/.card-->
                </div>                
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!-- modal section 3 -->
<!-- card 1 -->
@include('admin.pages.modal')
@endsection