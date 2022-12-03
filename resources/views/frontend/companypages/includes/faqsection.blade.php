@php
    $url = request()->segment(count(request()->segments()));
    $faq = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<section class="fourth-section">
    <div class="container">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>Frequently Asked Question </span>(FAQ)</h2>
        </div>
        <div class="benifitrow faq">
            <div class="accordion" id="accordionExample">
               @foreach(DB::table('frequesntlyaskquestions')->where('category_id' , $faq->faq_id)->orderby('order' , 'asc')->get() as $f)
               <div class="card" style="border: 1px solid #262566;">
                  <div class="card-header" id="faq{{ $f->id }}">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content{{ $f->id }}" aria-expanded="false" aria-controls="collapseOne">
                        <i class="fa fa-plus"></i> {{ $f->question }}
                        </button>
                     </h5>
                  </div>
                  <div id="faq_content{{ $f->id }}" class="collapse" aria-labelledby="faq{{ $f->id }}" data-parent="#accordionExample" style="">
                     <div class="card-body" style="border-top: 1px solid #262566;">
                       {!! $f->answer !!}
                     </div>
                  </div>
               </div>
               @endforeach
          </div>
        </div>
    </div>
</section>