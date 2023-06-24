<div class="subpage-full-details  result-blk">
  <div class="container">
     <div class="output-info-tabs right">
        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 tabs-column wow slideInDown animated animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
              <div class="output-tab tabs-box">
                @php
                $ded = DB::select("SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$data->pro_id') GROUP BY `deductible1` ORDER BY `deductible1`");
                @endphp
                 <ul class="tab-btns tab-buttons right clearfix">
                    <li>DEDUCTIBLES</li>
                    <script>
                       var Slider_Values = [<?php
                $d = 0;
                $havethousand = 'no';
                foreach($ded as $r){
                    $d++;
                        echo $dedivalue = $r->deductible1;
                    if($d < count($ded)){
                        echo ', ';
                    }
                    if($dedivalue == 1000)
                    { 
                        $havethousand = 'yes'; 
                    }
                } ?>];
                    </script>
                    @foreach($ded as $r)
                    <li class="tab-btn" data-tab="#tab-0">{{ $r->deductible1 }}</li>
                    @endforeach
                 </ul>
                 <ul class="tab-btns tab-buttons right clearfix">
                    <li>Coverage Amount</li>
                    @foreach($ded as $r)
                    <li class="tab-btn" data-tab="#tab-0">{{ $r->deductible1 }}</li>
                    @endforeach
                 </ul>
                 <div class="tabs-content left">
                    <div class="tab clearfix" id="tab-0">
                       <div class="text">
                          <ul class="tab-list-wrap">
                            <li class="row list-head">
                                <div class="col-md-2">Company</div>
                                <div class="col-md-2">Deductible</div>
                                <div class="col-md-2">Rate</div>
                                <div class="col-md-4">More</div>
                                <div class="col-md-2">Add to Compare</div>
                            </li>
                            @if(in_array("yes", $request->pre_existing))
                                @include('frontend.formone.ajaxlayouttwo.yes')
                            @else
                                @include('frontend.formone.ajaxlayouttwo.yes')
                                @include('frontend.formone.ajaxlayouttwo.no')  
                            @endif
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<script type="text/javascript">
   // $( document ).ready(function() {
   //      var divList = $(".listing-item-new");
   //      divList.sort(function(a, b){
   //          return $(a).data("listing-price")-$(b).data("listing-price")
   //      });
   //      $("#results_search").html(divList);
   //  });
</script>