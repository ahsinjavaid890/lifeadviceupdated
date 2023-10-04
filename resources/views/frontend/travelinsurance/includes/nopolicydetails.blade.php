<div class="col-md-12 dh-toggle-show-hide-{{ 11+$second_deductible.$second_plan_id }} buynowrow summarydiv moredetails_<?php echo $second_deductible . $second_plan_id; ?> summar_info_<?php echo $second_deductible . $second_plan_id; ?> summary_<?php echo $second_deductible.$second_plan_id;?> dh-toggle-show-hide-<?php echo $second_plan_id; ?>">
    <div class="row">
    <div class="col-12">
        <a href="javascript:void(0)" onclick="showdetails({{ 11+$second_deductible.$second_plan_id }})" class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <b><i class="fa fa-briefcase" aria-hidden="true"></i> Summary:</b>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <span class="summaryheading">Number of Days</span> : <span class="summarydata"> {{$second_num_of_days}} Days</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Coverage Amount</span> : <span class="summarydata"> ${{$second_sum_insured}}</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Start Date</span> : <span class="summarydata"> {{ Cmf::date_format($second_startdate) }} </span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">End Date</span> : <span class="summarydata"> {{ Cmf::date_format($second_enddate) }} </span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Total Premium</span> : <span class="summarydata">${{str_replace(',','', number_format($second_total_price,2))}}</span>
                </div>
                <hr style="margin-left: 16px !important; width: 200px;">

                @if($second_family_plan == 'yes')
                    @php
                        $second_per = 0;
                        $second_maxage =  max($second_ages_array);
                    @endphp
                    @foreach($second_ages_array as $second_person_age)
                    @php
                        $second_per++;
                    @endphp
                    <div class="col-md-12">
                        <span style="color:#2b3481;" class="summaryheading">Person {{ $second_per }}</span>
                    </div>
                    <div class="col-md-12">
                        <span class="summaryheading">Age</span> : <span class="summarydata"> {{$second_person_age}} Years</span>
                    </div>
                    <div class="col-md-12">
                        <span class="summaryheading">Premium</span> : <span class="summarydata">@if($second_maxage == $second_person_age) ${{str_replace(',','', number_format($second_total_price,2))}} @else $second_0 @endif</span>
                    </div>
                    @endforeach
                @else
                @php
                    $second_per = 0;
                    $second_a=array();
                @endphp
                @foreach($second_ages_array as $second_person_age)
                <?php
                    $second_per++;
                    $second_p_planrates =  DB::table($second_rates_table_name)->where('plan_id' , $second_deduct_plan_id)->where('maxage', '>=', $second_person_age)->where('minage', '<=', $second_person_age)->where('sum_insured' , $second_sumamt)->first();
                    $second_document_pre_existing = '';
                    if($request->pre_existing[$second_per-1]=='yes')
                    {
                        $second_single_person_rate = $p_planrates->rate_with_pre_existing;
                        $second_econd_existingshow = 'Yes';
                        array_push($second_a,"yes");
                        $second_planname = $second_pre_existing_name;
                    }else{
                        $second_single_person_rate = $second_p_planrates->rate_without_pre_existing;
                        $second_existingshow = 'No';
                        $second_planname = $second_without_pre_existing_name;
                        array_push($second_a,"No");
                    }
                    if($second_family_plan == 'yes' && $second_elder_age != $second_person_age){
                        $second_person_daily = 0;
                    } else if($second_family_plan == 'yes' && $second_elder_age == $second_person_age){
                        $second_person_daily = $second_single_person_rate * 2;
                    } else {
                        $second_person_daily = $second_single_person_rate;
                    }
                    if($second_rate_base == '0'){ // if daily rate
                        $second_person_price = $second_person_daily * $second_num_of_days;
                    } else if($second_rate_base == '1'){ //if monthly rate
                        $second_person_price = $second_person_daily * $second_num_months;
                    } else if($second_rate_base == '2'){ // if yearly rate
                        $second_person_price = $second_person_daily;
                    }
                    else if($second_rate_base == '3'){ // if multi days rate
                        $second_person_price = $second_person_daily;
                    }
                    if($second_flatrate_type == 'each'){
                        $second_p_flat_price = $second_flatrate;
                    }else if($second_flatrate_type == 'total'){
                        $second_p_flat_price = $second_flatrate  / $second_number_travelers;
                    } else {
                        $second_p_flat_price = 0;
                    }
                    $second_ptotaldaysprice = $second_person_price;
                    if($second_sales_tax != 0)
                    {
                        if($second_salestax_dest == $second_post_dest){
                        //$second_salesequal = 'yes';
                        $second_p_salestaxes = ($second_salestax_rate * $second_ptotaldaysprice) / 100;
                        } else {
                        $second_p_salestaxes = 0;
                        //$second_salesequal = 'no';
                        }
                    }else{
                        $second_p_salestaxes = 0;
                    }
                    if($request->Smoke12 == 'yes' || $request->traveller_Smoke == 'yes'){
                        if($second_smoke == '0'){
                            $second_p_smoke_price = $second_smoke_rate;
                        } else if($second_smoke == '1'){
                            $second_p_smoke_price = ($second_ptotaldaysprice * $second_smoke_rate) / 100;
                        }
                    } else {
                        $second_p_smoke_price = 0;
                    }
                    $second_p_others = ($second_p_flat_price + $second_p_salestaxes) + $second_p_smoke_price;
                    $second_p_deduct_discount = ($second_person_price * $second_deduct_rate) / 100;
                    $second_p_cdiscount = ($second_person_price * $second_cdiscountrate) / 100;
                    if (strpos($second_deductsq->deductible2, '-') !== false) {
                        $second_p_discount = $second_p_deduct_discount + $second_p_cdiscount;
                        $second_p_adddeductible = 0;
                    } else {
                        $second_p_discount = $second_p_cdiscount;
                        $second_p_adddeductible = $second_p_deduct_discount;
                    }
                    $second_person_price = ($second_person_price - $second_p_discount) + ($second_p_others + $second_p_adddeductible);
                    $second_p_discountonplan = 0;
                    if($second_plan_discount == '1'){
                        if($second_number_travelers > 1 && $second_family_plan == 'no'){
                            $second_p_discountonplan = ($second_plan_discount_rate * $second_person_price) / 100;
                        }
                    }
                    $second_person_price = $second_person_price - $second_p_discountonplan;
                ?>
                
                <div class="col-md-12">
                    <span style="color:#2b3481;" class="summaryheading">Person {{ $second_per }}</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Age</span> : <span class="summarydata"> {{$second_person_age}} Years</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Premium</span> : <span class="summarydata">$ {{number_format($second_person_price,2)}}</span>
                </div>
                <div class="col-md-12">
                    <span class="summaryheading">Pre Exisitng Condition</span> : <span class="summarydata"> {{$second_existingshow}}</span>
                </div>
                @if($second_planname)
                <div class="col-md-12">
                    <span class="summaryheading">Plan</span> : <span class="summarydata"> {{$second_planname}}</span>
                </div>
                @endif
                @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <b><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Deductible:</b>
            <hr />
            <ul>
                <li style="list-style: circle;margin-left: 20px;line-height: 20px;"><b>${{ $second_deductible }}</b></li><br>
            </ul>
        </div>
        <div class="col-md-3">
            <b><i class="fa fa-list-alt" aria-hidden="true"></i> Policy Documents:</b>
            <hr>
            @if($second_family_plan == 'yes')

            @else
            @if (in_array('yes', $second_a))
                @if ($second_plan->plan_pdf_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $second_plan->plan_pdf_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF for Pre Existing Person
                    </a>
                @endif
                <br>
                @if ($second_plan->benifit_summary_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $second_plan->benifit_summary_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of Pre Existing Person 
                    </a>
                @endif
            @endif
            @if (in_array('No', $second_a))

                @if ($second_plan->plan_pdf_without_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $second_plan->plan_pdf_without_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Plan PDF for Without Pre Existing Person
                    </a>
                @endif
                <br>
                @if ($second_plan->benifit_summary_without_pre_existing)
                    <a style=" font-size: 15px; margin-bottom: 15px; " href="{{ url('public/images') }}/{{ $second_plan->benifit_summary_without_pre_existing }}"
                        class="pdf-additional-travelers">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Benifits Summary of Without Pre Existing Person
                    </a>
                @endif

            @endif
            @endif
        </div>
    </div>
</div>