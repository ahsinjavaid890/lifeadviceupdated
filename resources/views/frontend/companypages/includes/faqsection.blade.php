@php
    $url = request()->segment(count(request()->segments()));
    if($url)
    {
        $url = $url;
    }else{
        $url = 'homepage';
    }
    $faq = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<section class="fourth-section" style="background-color: #f4f7fa;">
    <div class="container">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>Frequently Asked Question </span>(FAQ)</h2>
        </div>
        <div class="benifitrow faq">
            <div class="accordion" id="accordionExample">
               @foreach(DB::table('frequesntlyaskquestions')->where('website' , 'lifeadvice')->where('category_id' , $faq->faq_id)->orderby('order' , 'asc')->get() as $f)
               <div class="card faqquestion" style="border-radius: 16px !important;margin-top: 13px;">
                  <div class="card-header"  style="background-color: #ffffffff;" id="faq{{ $f->id }}">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content{{ $f->id }}" aria-expanded="false" aria-controls="collapseOne">
                        <i class="fa fa-plus"></i> {{ $f->question }}
                        </button>
                     </h5>
                  </div>
                  <div id="faq_content{{ $f->id }}" class="collapse" aria-labelledby="faq{{ $f->id }}" data-parent="#accordionExample" style="">
                    <hr>
                     <div class="card-body" >
                       {!! $f->answer !!}
                     </div>
                  </div>
               </div>
               @endforeach
          </div>
        </div>
    </div>
</section>