$(document).ready(function() {

  var deductibleArray0 = [];
  var deductibleArray250 = [];
  var deductibleArray500 = [];
  var deductibleArray1000 = [];

  var lowestPrices = {
    '0': [Number.POSITIVE_INFINITY, Number.NEGATIVE_INFINITY],
    '250': [Number.POSITIVE_INFINITY, Number.NEGATIVE_INFINITY],
    '500': [Number.POSITIVE_INFINITY, Number.NEGATIVE_INFINITY],
    '1000': [Number.POSITIVE_INFINITY, Number.NEGATIVE_INFINITY]
  };

  $('.listing-item').each(function() {
    var deductibleValue = $(this).find('.deductible_email').text().trim();
    var sumInsuredValue = $(this).find('.sum_insured_email').text().trim();
    var priceValue = parseFloat($(this).find('.price_email').text().trim());

    if (sumInsuredValue === '100000' && (deductibleValue === '0' || deductibleValue === '250' || deductibleValue === '500' || deductibleValue === '1000')) {
      var boxValues = {};
      $(this).find('.deductible_email, .sum_insured_email, .planproduct_email, .price_email, .quote_email, .logo_email').each(function() {
        var className = $(this).attr('class');
        boxValues[className] = $(this).text();
      });

      if (priceValue < lowestPrices[deductibleValue][0]) {
        lowestPrices[deductibleValue][0] = priceValue;
      } else if (priceValue > lowestPrices[deductibleValue][1]) {
        lowestPrices[deductibleValue][1] = priceValue;
      }

      var deductibleArray;
      if (deductibleValue === '0') {
        deductibleArray = deductibleArray0;
      } else if (deductibleValue === '250') {
        deductibleArray = deductibleArray250;
      } else if (deductibleValue === '500') {
        deductibleArray = deductibleArray500;
      } else if (deductibleValue === '1000') {
        deductibleArray = deductibleArray1000;
      }

      if (deductibleArray.length < 3) {
        deductibleArray.push(boxValues);
      }
    }
  });


  var email = '{{ $request->savers_email }}';
  var quoteNumber = '{{ $quoteNumber }}';
  var product_name = '{{ $product_name }}';
  $.ajax({
      type: "POST",
      url: "{{ url('send-quote-email') }}",
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {
          deductibleArray0:deductibleArray0,
          deductibleArray250:deductibleArray250,
          deductibleArray500:deductibleArray500,
          deductibleArray1000:deductibleArray1000,
          email:email,
          quoteNumber:quoteNumber,
          product_name:product_name
      },
      success: function(data) {
          
      },
      error: function(error) {
          console.log('Error updating card position:', error);
      }
  });
});