<div class="col-md-12 dh-toggle-show-hide-{{ $deductible.$plan_id }} buynowrow summarydiv moredetails_<?php echo $deductible . $plan_id; ?> summar_info_<?php echo $deductible . $plan_id; ?> summary_<?php echo $deductible.$plan_id;?> dh-toggle-show-hide-<?php echo $plan_id; ?>">
    <div class="row">
    <div class="col-12">
        <a href="javascript:void(0)"onclick="showdetails({{ $deductible.$plan_id }})"class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <b><i class="fa fa-briefcase" aria-hidden="true"></i> Summary:</b>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <span class="summaryheading">Number of Days</span> : <span class="summarydata"> {{$num_of_days}} Days</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Start Date</span> : <span class="summarydata"> {{ Cmf::date_format($startdate) }} </span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">End Date</span> : <span class="summarydata"> {{ Cmf::date_format($enddate) }} </span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Total Premium</span> : <span class="summarydata">$ {{$total_price}} </span>
                </div>
                <hr style="margin-left: 16px !important; width: 200px;">
                <?php
                $per = 0;
                    foreach($ages_array as $person_age){
                    $per++;
                ?>
                <div class="col-md-12">
                    <span style="color:#2b3481;" class="summaryheading">Person {{ $per }}</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Age</span> : <span class="summarydata"> {{$person_age}} Years</span>
                </div>
                
                <div class="col-md-12">
                    <span class="summaryheading">Premium</span> : 
                <?php
                    $p_planrates = DB::select("SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery");

                    $countarraytwo =  count($p_planrates);
                    $document_pre_existing = '';
                    if($countarraytwo > 0)

                    {
                        if($request->pre_existing[$per-1]=='yes')
                        {
                            $single_person_rate = $p_planrates[0]->rate_with_pre_existing;
                            $existingshow = 'Yes';
                            $document_pre_existing = 'yes';
                            $document_without_pre_existing = '';
                        }else{
                            $single_person_rate = $p_planrates[0]->rate_without_pre_existing;
                            $existingshow = 'No';
                            $document_without_pre_existing = 'yes'; 
                            if($document_pre_existing == 'yes')
                            {
                                $document_pre_existing = 'yes';
                            }else{
                                $document_pre_existing = '';
                            }
                        }

            if($family_plan == 'yes' && $elder_age != $person_age){
            $person_daily = 0;
            } else if($family_plan == 'yes' && $elder_age == $person_age){
            $person_daily = $single_person_rate * 2;
            } else {
            $person_daily = $single_person_rate;
            }

            if($rate_base == '0'){ // if daily rate
            $person_price = $person_daily * $num_of_days;
            } else if($rate_base == '1'){ //if monthly rate
            $person_price = $person_daily * $num_months;
            } else if($rate_base == '2'){ // if yearly rate
            $person_price = $person_daily;
            }
            else if($rate_base == '3'){ // if multi days rate
            $person_price = $person_daily;
            }

            if($flatrate_type == 'each'){
            $p_flat_price = $flatrate;
            }else if($flatrate_type == 'total'){
            $p_flat_price = $flatrate  / $number_travelers;
            } else {
            $p_flat_price = 0;
            }
            //totaldaysprice
            $ptotaldaysprice = $person_price;
            //SALES TAX
            if($sales_tax != 0)
            {
                if($salestax_dest == $post_dest){
                //$salesequal = 'yes';
                $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                } else {
                $p_salestaxes = 0;
                //$salesequal = 'no';
                }
            }else{
                $p_salestaxes = 0;
            }

            //SMOKE RATE
            if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
            if($smoke == '0'){
            $p_smoke_price = $smoke_rate;
            } else if($smoke == '1'){
            $p_smoke_price = ($ptotaldaysprice * $smoke_rate) / 100;
            }
            } else {
            $p_smoke_price = 0;
            }

            // OTHERS
            $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

            //Deductible
            $p_deduct_discount = ($person_price * $deduct_rate) / 100;
            $p_cdiscount = ($person_price * $cdiscountrate) / 100;
            if (strpos($deductsq->deductible2, '-') !== false) {
            //if deductible is in minus
            $p_discount = $p_deduct_discount + $p_cdiscount;
            $p_adddeductible = 0;
            } else {
            //if deductible is in plus
            $p_discount = $p_cdiscount;
            $p_adddeductible = $p_deduct_discount;
            }

            $person_price = ($person_price - $p_discount) + ($p_others + $p_adddeductible);
            $p_discountonplan = 0;
            if($plan_discount == '1'){
            if($number_travelers > 1 && $family_plan == 'no'){
            $p_discountonplan = ($plan_discount_rate * $person_price) / 100;
            }
            }
            $person_price = $person_price - $p_discountonplan;

            ?>

            <span class="summarydata">$ {{number_format($person_price,2)}}</span>
        </div>
        <div class="col-md-12">
            <span class="summaryheading">Pre Exisitng Condition</span> : <span class="summarydata"> {{$existingshow}}</span>
        </div>
                <?php } 
            }?>
            </div>
        </div>
        <div class="col-md-3">
            @php
                $features = DB::table('wp_dh_insurance_plans_features')->where('plan_id' , $plan_id)->get();
            @endphp
            <b><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Features:</b>
            <hr />
            <ul>
                @if($features->count() > 1)
                    @foreach($features as $feature)
                    @if($feature->features)
                        @php
                            $value = $feature->features;
                            $test =  strtok($value, ":");
                        @endphp
                        <li style="list-style: circle;margin-left: 20px;line-height: 20px;"><b>{{ $test }}</b> {{ str_replace($test, '', $feature->features) }}</li><br>
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="col-md-3">
            <b><i class="fa fa-list-alt" aria-hidden="true"></i> Policy Documents:</b>
            <hr>

            @if($document_pre_existing == 'yes')
                @if ($plan->plan_pdf_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $plan->plan_pdf_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF for Pre Existing Person
                    </a>
                @endif
                <br>
                @if ($plan->benifit_summary_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $plan->benifit_summary_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of Pre Existing Person 
                    </a>
                @endif
            @endif

            @if($document_without_pre_existing == 'yes')

                @if ($plan->plan_pdf_without_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $plan->plan_pdf_without_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF for Without Pre Existing Person
                    </a>
                @endif
                <br>
                @if ($plan->benifit_summary_without_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $plan->benifit_summary_without_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of Without Pre Existing Person
                    </a>
                @endif

            @endif

        </div>
    </div>
</div>