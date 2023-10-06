<div class="buynowrow row buynow_{{ $second_deductible.$second_plan_id+13 }}">
    <form method="POST" action="{{ url('apply') }}">
        @csrf
        <input type="hidden" name="temproary_sale" value="{{ rand('10000' , '987654321') }}">
        <input type="hidden" value="{{ $request->savers_email }}" name="email">
        <input type="hidden" value="{{ $request->fname }}" name="fname">
        <input type="hidden" value="{{ $request->lname }}" name="lname">
        <input type="hidden" value="{{ $second_sum_insured }}" name="coverage">
        <input type="hidden" value="{{ $second_number_travelers }}" name="traveller">
        <input type="hidden" value="{{ $second_deductible }}" name="deductibles">
        <input type="hidden" value="{{ $second_deduct_rate }}" name="deductible_rate">
        <input type="hidden" value="{{ $request->date_of_birth }}" name="person1">
        @foreach($request->years as $second_year)
        <input type="hidden" name="years[]" value="{{ $second_year }}">
        @endforeach
        @foreach($request->pre_existing as $second_preexisting)
        <input type="hidden" name="preexisting[]" value="{{ $second_preexisting }}">
        @endforeach
        <input type="hidden" value="{{ $second_num_of_days }}" name="days">
        <input type="hidden" value="{{ $second_comp_name }}" name="companyName">
        <input type="hidden" value="{{ $second_comp_id }}" name="comp_id">
        <input type="hidden" value="{{ $second_plan_name }}" name="planname">
        <input type="hidden" value="{{ $second_plan_id }}" name="plan_id">
        <input type="hidden" value="{{ $second_startdate }}" name="tripdate">
        <input type="hidden" value="{{ $second_enddate }}" name="tripend">
        <input type="hidden" value="{{ $second_total_price }}" name="premium">
        <input type="hidden" value="" name="cdestination">
        <input type="hidden" value="{{ $second_product_name }}" name="product_name">
        <input type="hidden" value="{{ $data->pro_id }}" name="product_id">
        <input type="hidden" value="{{ $request->primary_destination }}" name="destination">
        <input type="hidden" value="{{ $second_product_name }}" name="visitor_visa_type">
        <input type="hidden" value="{{ $second_num_of_days }}" name="tripduration">
        <input type="hidden" value="{{ $second_ages_array[0] }}" name="age">
        <div class="row" style="flex-wrap: nowrap;padding:0px">
            <div class="col-md-6 buynodropdownsectioncolsix">
                <h3 class="buyonlinebutton">Buy Online</h3>
                <b>In three simple steps you can purchase your policy, easily and securely, online.</b>
                <p>
                    <input type="checkbox" name="agree" required=""> 
                    I give permission to LifeAdvice.ca to transfer my quote information and contact details to {{ $second_comp_name }} in order to complete the purchase of travel insurance. LifeAdvice values your privacy. For details, see our 
                    <a target="_blank" href="{{ url('privacypolicy') }}">Privacy Policy</a>
                </p>
                <button type="submit" class="submit-btn"><i class="fa fa-shopping-cart"></i> Buy Now</button>
            </div>
            <div class="col-md-6 text-center">
                <a href="javascript:void(0)" onclick="$('.buynow_{{ $second_deductible.$second_plan_id+13 }}').fadeOut();" class="pull-right text-danger"><i class="fa fa-close"></i>
                </a>
                <p>or</p>
                <p>BY CALLING</p>
                <p><a href="tel:8555008999">855-500-8999</a>
                </p>
                <p>CALL CENTRE HOURS</p>
                <p>Monday to Thursday 8:00 am to 9:00 pm EDT | Friday 8:00 am to 8:00 pm EDT | Saturday 8:30 am to 4:00 pm EDT | Closed on holidays.</p>
            </div>
        </div>
    </form>
</div>