@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->where('showsection_four','yes')->get()->first();
@endphp
@if ($page)
<section class="third-section ">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            {!! $page->section_four_heading !!}
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align: left;">
                        {!! $page->section_four_description !!}
                        @if($page->section_four_notice)
                        <p class="importantalert">{{ $page->section_four_notice }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row benifitrow" style="padding-top:20px;">
            <div class="col-md-6">
                <div class="card transparent-card" style=" padding: 30px; ">
                    <div class="row">
                        @foreach(explode(',', $page->section_four_lists) as $r)
                        <div class="col-md-6">
                            <ul class="list-checkmark text-secondary-color body-text-2">
                                <li>{{$r}} </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ url('public/images') }}/{{ $page->section_four_vector }}">
            </div>
        </div>
    </div>
</section>
@endif
