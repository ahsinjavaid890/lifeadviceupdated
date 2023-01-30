@php
    $url = request()->segment(count(request()->segments()));
    $secondsection = DB::table('section_three_elements')->where('type' , 'sectiontwoquestion')->where('page' , $url)->get();
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<section class="ptb-100 first-section-of-page">
    <div class="container-homepage">
        <div class="row">
            <div class="col-md-6 image-center">
                <div class="student-medical-image">
                    <img src="{{ url('public/images') }}/{{ $page->section_two_vector }}">
                </div>
            </div>
            <div class="col-md-6">
                  {!! $page->section_two_description !!}
                  @foreach($secondsection as $r)
                    <h5 style="margin-top:20px;" class="text-dark">
                        <a data-toggle="collapse" data-target="#demotwo{{ $r->id }}" style="color: #2b3481;"  href="javascript::void(0)">
                        <i class="fa fa-sign-in" style="color: #2b3481;"></i> 
                            {{ $r->heading }}
                        </a>
                    </h5>
                    <div id="demotwo{{ $r->id }}" class="collapse">
                    <p>{!! $r->description !!}</p>
                  </div>
                  @endforeach
            </div>
        </div>
    </div>
</section>