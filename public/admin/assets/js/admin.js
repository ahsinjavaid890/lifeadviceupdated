function uploadMedia(urlfieldId, imgId) {

    var image = wp.media({

            title: 'VGI Image Uploader',

            multiple: false

        }).open()

        .on('select', function(e) {

            var uploaded_content = image.state().get('selection').first();

            console.log(uploaded_content);

            var content_url = uploaded_content.toJSON().url;

            if (imgId != '') {

                jQuery('#' + urlfieldId).val(content_url);

                jQuery('#' + imgId).attr('src', content_url);

            } else {

                jQuery('#' + urlfieldId).val(content_url);

            }

        });

}

$(document).ready(function(){
    /*jQuery('input[type="radio"]').click(function() {
       if(jQuery(this).attr('id') == 'day') {
            jQuery('.daily_monthly').hide();    
            jQuery('.day_basis').show();          
       }
       else if(jQuery(this).attr('id') == 'daily') {
            jQuery('.day_basis').hide();  
            jQuery('.daily_monthly').show();     
       }
   });*/
  

   /*

    $("#j-forms").validate({

        errorClass: "error-view",

        validClass: "success-view",

        errorElement: "span",

        onkeyup: !1,

        onclick: !1,

        rules: {

            cname: {

                required: !0

            },

            cmpny_image: {

                required: !0

            }

        },

        messages: {

            cname: {

                required: "This field is required"

            }

        },

        highlight: function(e, s, t) {

            $(e).closest(".input").removeClass(t).addClass(s), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(t).addClass(s)

        },

        unhighlight: function(e, s, t) {

            $(e).closest(".input").removeClass(s).addClass(t), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(s).addClass(t)

        },

        errorPlacement: function(e, s) {

            $(s).is(":checkbox") || $(s).is(":radio") ? $(s).closest(".check").append(e) : $(s).closest(".unit").append(e)

        }

    })

	

	

	



    // Insurance Plans Validation

    $("#itemPlan").validate({

        errorClass: "error-view",

        validClass: "success-view",

        errorElement: "span",

        onkeyup: !1,

        onclick: !1,

        rules: {

            iplan: {

                required: !0

            },

            icname: {

                required: !0

            },

            ipname: {

                required: !0

            }

        },

        messages: {

            iplan: {

                required: "This field is required"

            },

            icname: {

                required: "This field is required"

            },

            ipname: {

                required: "This field is required"

            }

        },

        highlight: function(e, s, t) {

            $(e).closest(".input").removeClass(t).addClass(s), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(t).addClass(s)

        },

        unhighlight: function(e, s, t) {

            $(e).closest(".input").removeClass(s).addClass(t), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(s).addClass(t)

        },

        errorPlacement: function(e, s) {

            $(s).is(":checkbox") || $(s).is(":radio") ? $(s).closest(".check").append(e) : $(s).closest(".unit").append(e)

        }

    })

*/

});

















// Insurance Plans

// Deductibles 

jQuery('.addDeduct').click(function(event) {

    /* Add child for deductibles */

    var count = jQuery('#deductionAppend .appended').size() + 2;

    jQuery('#deductionAppend').append(

        '<div class="row appended" style="margin-top:10px; margin-bottom:0; margin-right:0; margin-left:0;"><div class="col-md-6 unit">' +

        '<div class="widget left-50">' +
        '<input type="text" name="ideductHash[]" id="ideductHash' + count + '" placeholder="Deductible ' + count + '" class="form-control">' +

        '</div>' +

        '</div> ' +

        '<div class="col-md-6 unit">' +

        '<div class="widget left-50">' +
        '<input type="text" name="ideductPer[]" id="ideductPer' + count + '" placeholder="Deductible ' + count + '" class="form-control">' +

        '</div>' +

        '</div></div>');

});

jQuery('.removeDeduct').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#deductionAppend .appended:last-of-type').remove();

});



// PDF Policy

jQuery('.addPDF').click(function(event) {

    var countPDF = jQuery('#appendPDFpolicy .appendPDF').size() + 2;

    jQuery('#appendPDFpolicy').append(

        '<div class="appendPDF"><div class="col-md-12 unit">' +

        '<label>Upload PDF Plocy # ' + countPDF + '</label>' +

        '<label class="input append-big-btn">' +

        '<label class="icon-left" for="append-big-btn">' +

        '<i class="fa fa-download"></i>' +

        '</label>' +

        '<div class="file-button">' +

        'Browse' +

        '<input type="button" onclick="uploadMedia(\'ipdfPolicy' + countPDF + '\', \'\')" class="form-control">' +

        '</div>' +

        '<input type="text" name="ipdfPolicy[]" id="ipdfPolicy' + countPDF + '" placeholder="no file selected" class="form-control">' +

        '</label>' +

        '</div></div>');

})

jQuery('.removePDF').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendPDFpolicy .appendPDF:last-of-type').remove();

});


//Copy Life Rates
jQuery('.copylifeRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
	var copy_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
	var copy_checklength = copy_values.length;            
	if(copy_checklength == 0){
	alert('Please select an item to copy');	
	} else {
    for(var i=0;i<copy_checklength;i++)
    {
	  iratesMin_value = $('.min_'+copy_values[i]).val();
	  iratesMax_value = $('.max_'+copy_values[i]).val();
	  iratesSum_value = $('.sum_'+copy_values[i]).val();
	  iratesTime_value = $('.duration_'+copy_values[i]).val();
      range+=  '<div class="col-md-3 margin5">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
		
		jQuery('#appendRates').append(
        '<div class="appendRates" id="row_'+ + new Date() +'"><div class="row" style="margin-bottom: 10px;">' +
        '<div class="col-md-1 margin5" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-1 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" value="'+iratesMin_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-1 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" value="'+iratesMax_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-2 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" value="'+iratesSum_value+'" class="form-control">' +
        '</div>' +
		'<div class="col-md-1">' +
		'<input id="iratesTime' + countRates + '" name="iratesTime[]" value="'+iratesTime_value+'" class="form-control" type="text">' +
		'</div>' +
		'<div class="col-md-2">' +
		'<select id="iratesSex' + countRates + '" name="iratesSex[]" class="form-control">' +
		'<option value="m">Male</option>' +
		'<option value="f">Female</option>' +
		'</select>' +
		'</div>' +
        '<div class="col-md-1 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div></div>');
    }
	}
   // alert(countRates);


   // alert(range);
})


//Copy Rates
jQuery('.copyRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
	var copy_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
	var copy_checklength = copy_values.length;            
	if(copy_checklength == 0){
	alert('Please select an item to copy');	
	} else {
    for(var i=0;i<copy_checklength;i++)
    {
	  iratesMin_value = $('.min_'+copy_values[i]).val();
	  iratesMax_value = $('.max_'+copy_values[i]).val();
	  iratesSum_value = $('.sum_'+copy_values[i]).val();
      range+=  '<div class="col-md-3 margin5">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
		
		jQuery('#appendRates').append(
        '<div class="appendRates" id="row_'+ + new Date() +'"><div class="col-md-12 unit">' +
        '<div class="col-md-1 margin5" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-2 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" value="'+iratesMin_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-2 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" value="'+iratesMax_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" value="'+iratesSum_value+'" class="form-control">' +
        '</div>' +
        '<div class="col-md-2 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div></div>');
    }
	}
   // alert(countRates);


   // alert(range);
})


// Life Rates
jQuery('.addlifeRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-3">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
    }
   // alert(countRates);

    jQuery('#appendRates').append(
        '<div class="appendRates row" id="row_'+ + new Date() +'">' +
        '<div class="col-md-1" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" class="min_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" class="max_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" class="sum_'+ + new Date()+' form-control">' +
        '</div>' +
		'<div class="col-md-1">' +
		'<input id="iratesTime1" name="iratesTime[]" class="form-control" type="text">' +
		'</div>' +
		'<div class="col-md-2">' +
		'<select id="iratesSex1" name="iratesSex[]" class="form-control">' +
		'<option value="m">Male</option>' +
		'<option value="f">Female</option>' +
		'</select>' +
		'</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div>');
   // alert(range);
})

// Rates
jQuery('.addRates').click(function(event) {
    var countRates = jQuery('#appendRates .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size()+1;
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-3">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
    }
   // alert(countRates);

    jQuery('#appendRates').append(
        '<div class="appendRates row" id="row_'+ + new Date() +'">' +
        '<div class="col-md-1" style="width: auto;margin-right: 10px;">' +
        '<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="rt[]" name="rt[]"><i></i></label>' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin[]" class="min_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax[]" class="max_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-3">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum[]" class="sum_'+ + new Date()+' form-control">' +
        '</div>' +
        '<div class="col-md-2">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate[]" class="form-control">' +
        '</div>'+
        '</div>');
   // alert(range);
})


/*
jQuery('.addRates1').click(function(event) {
    //var countRates = jQuery('#appendRates1 .appendRates').size() + 2;
    //var countRates1 = jQuery('#appendRates1 .appendRates').size() + 1;
    var countRange = $('#currentragerows').val();
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-1 margin5 append" style="padding:0;">' +
        '<div class="input">'+
        '<input type="text" id="days_rate" name="days_rate[]" class="form-control">' +
        '</div>' +
        '</div>';
    }
   // alert(countRates);
    jQuery('#appendRates1').append(
	'<div class="row">'+
	'<div class="col-md-1" style="width: auto;margin-right: 10px;">'+
	'<div class="col-md-12 text-center" style="padding:0 21px;">'+
	'<label class="checkbox" style="margin:0;">'+
	'<input type="checkbox" value="1" id="sr[]" class="form-control" name="sr[]" style="margin: 0;">'+
	'<i style="top: 0;"></i>'+
	'</label>'+
	'</div>'+
	'</div>'+
	'<div class="col-md-1">'+
	'<input id="iratesMin1" class="form-control" class="form-control" name="iratesMin1[]" value="" type="text">'+
	'</div>'+
	'<div class="col-md-1">'+
	'<input id="iratesMax1" class="form-control" name="iratesMax1[]" class="form-control" value="" type="text">'+
	'</div>'+
	'<div class="col-md-2 margin5">'+
	'<input id="iratesSum1" class="form-control" name="iratesSum1[]" class="form-control" value="" type="text">'+
	'</div>'+ range +
	'</div>');
   // alert(range);
})

*/

/* BACKUP

jQuery('.addRates1').click(function(event) {
    var countRates = jQuery('#appendRates1 .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates1 .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range .append_day_range').size();
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-1 margin5 append">' +
        '<div class="input">'+
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' +
        '</div>';
    }
   // alert(countRates);
    jQuery('#appendRates1').append(
        '<div class="appendRates row" id="row_'+ + new Date() +'">' +
        '<div class="col-md-1">' +
		'<label class="checkbox"><input type="checkbox" value="'+ + new Date()+'" id="sr[]" name="sr[]"><i></i></label>' +
        '</div>' +
		'<div class="col-md-1">' +
        '<input type="text" id="iratesMin1' + countRates + '" name="iratesMin1[]" class="form-control">' +
        '</div>' +
        '<div class="col-md-1">' +
        '<input type="text" id="iratesMax1' + countRates + '" name="iratesMax1[]" class="form-control">' +
        '</div>' +
        '<div class="col-md-2" style="padding: 0;">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="iratesSum1[]" class="form-control">' +
        '</div>'+
        '<div class="col-md-1">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>' + range+
        '</div>');
   // alert(range);
})

*/

jQuery('.addRates2').click(function(event) {

    var countRates = jQuery('#appendRates2 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates2 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range2 .append_day_range').size()+1;

    var range="";

    //alert(countRange);

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-3 margin5">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates2').append(

        '<div class="appendRates"><div class="col-md-12 unit">' +
        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin2[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax2[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum2[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate2[]" class="form-control">' +
        '</div>'+

        '</div></div>');

   // alert(range);

})



jQuery('.addRates3').click(function(event) {

    var countRates = jQuery('#appendRates3 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates3 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range3 .append_day_range').size();

    var range="";

    

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-2 margin5 append">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate3'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates3').append(

        '<div class="appendRates"><div class="col-md-12 unit">' +

        '<div class="col-md-3 margin5">' +

        '<input type="text" id="iratesMin1' + countRates + '" name="iratesMin3[]" class="form-control">' +

        '</div>' +

        '<div class="col-md-3 margin5">' +

        '<input type="text" id="iratesMax1' + countRates + '" name="iratesMax3[]" class="form-control">' +

        '</div>' +

        '<div class="col-md-3 margin5 nopad">' +

        '<input type="text" id="iratesSum1' + countRates + '" name="iratesSum3[]" class="form-control">' +

        '</div>' +

        '<div class="col-md-3 margin5">' +

        '<input type="text" id="iratesSum1' + countRates + '" name="days_rate3'+countRates1+'[]" class="form-control">' +

        '</div>' + range+

        

        '</div></div>');

   // alert(range);

})



jQuery('.addRates4').click(function(event) {

    var countRates = jQuery('#appendRates4 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates4 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range4 .append_day_range').size()+1;

    var range="";

    //alert(countRange);

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-3 margin5">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates4').append(

        '<div class="appendRates"><div class="col-md-12 unit">' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin4[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax4[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum4[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate4[]" class="form-control">' +
        '</div>'+

        

        '</div></div>');

   // alert(range);

})



jQuery('.addRates5').click(function(event) {

    var countRates = jQuery('#appendRates5 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates5 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range5 .append_day_range').size();

    var range="";

    //alert(countRange);

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-3 margin5 append">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate5'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates5').append(

        '<div class="appendRates"><div class="col-md-12 unit">' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMin1' + countRates + '" name="iratesMin5[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMax1' + countRates + '" name="iratesMax5[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="iratesSum5[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="days_rate5'+countRates1+'[]" class="form-control">' +
        '</div>' + range+
        '</div></div>');

   // alert(range);

})



jQuery('.addRates6').click(function(event) {

    var countRates = jQuery('#appendRates6 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates6 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range6 .append_day_range').size()+1;

    var range="";

    //alert(countRange);

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-3 margin5">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates6').append(
        '<div class="appendRates"><div class="col-md-12 unit">' +
        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMin' + countRates + '" name="iratesMin6[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMax' + countRates + '" name="iratesMax6[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum6[]" class="form-control">' +
        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate6[]" class="form-control">' +
        '</div>'+
        '</div></div>');

   // alert(range);

})



jQuery('.addRates7').click(function(event) {

    var countRates = jQuery('#appendRates7 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates7 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range7 .append_day_range').size();

    var range="";

    //alert(countRange);

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-3 margin5 append">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate7'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates7').append(
        '<div class="appendRates"><div class="col-md-12 unit">' +
        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMin1' + countRates + '" name="iratesMin7[]" class="form-control">' +
        '</div>' +
        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesMax1' + countRates + '" name="iratesMax7[]" class="form-control">' +
        '</div>' +
        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="iratesSum7[]" class="form-control">' +
        '</div>'+
        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="days_rate7'+countRates1+'[]" class="form-control">' +
        '</div>'+range+
        '</div></div>');

   // alert(range);

})



jQuery('.addRates8').click(function(event) {
    var countRates = jQuery('#appendRates8 .appendRates').size() + 2;

    var countRates1 = jQuery('#appendRates8 .appendRates').size() + 1;

    var countRange = jQuery('#append_day_range8 .append_day_range').size()+1;

    var range="";

    //alert(countRange);

    for(var i=0;i<countRange;i++)

    {

      range+=  '<div class="col-md-3 margin5">' +
        '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>';

    }

   // alert(countRates);



    jQuery('#appendRates8').append(

        '<div class="appendRates"><div class="col-md-12 unit">' +

        

        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum' + countRates + '" name="iratesSum8[]" class="form-control">' +

        '</div>' +

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesRate' + countRates + '" name="iratesRate8[]" class="form-control">' +
        '</div>'+

        

        '</div></div>');

   // alert(range);

})



jQuery('.addRates9').click(function(event) {
    var countRates = jQuery('#appendRates9 .appendRates').size() + 2;
    var countRates1 = jQuery('#appendRates9 .appendRates').size() + 1;
    var countRange = jQuery('#append_day_range9 .append_day_range').size();
    var range="";
    //alert(countRange);
    for(var i=0;i<countRange;i++)
    {
      range+=  '<div class="col-md-3 margin5 append">' +
		'<input type="text" id="days_rate' + countRates + '" name="days_rate9'+countRates1+'[]" class="form-control">' +
        '</div>';
    }

   // alert(countRates);



    jQuery('#appendRates9').append(

        '<div class="appendRates"><div class="col-md-12 unit">' +

        '<div class="col-md-3 margin5 nopad">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="iratesSum9[]" class="form-control">' +
        '</div>'+

        '<div class="col-md-3 margin5">' +
        '<input type="text" id="iratesSum1' + countRates + '" name="days_rate9'+countRates1+'[]" class="form-control">' +
        '</div>'+range+
        '</div></div>');

   // alert(range);

})

/* Add day range 

jQuery('.addDayRange').click(function(event) {

    var countRates = jQuery('#append_day_range .append_day_range').size() + 2;

    var countRates1 = jQuery('#appendRates1 .appendRates').size()+1;

    //alert(countRates);

   

      

    jQuery('#append_day_range').append(

        '<div class="append_day_range">' +
        '<div class="col-md-1" style="margin: 0;padding: 0;">' +

        '<label class="label text-center" style="margin: 0;padding: 0;">'+

        '<input type="text" placeholder="Days Range" id="days_rate_range' + countRates + '" name="days_rate_range[]" class="form-control">' +

        '</label>' +
        '<input type="text" placeholder="Price" id="days_rate' + countRates + '" name="days_rate0[]" class="form-control">' +
        '</div></div>');

    var countMin = jQuery('#appendRates1 .appendRates').size();

    //alert(countMin);

    if(countMin>0)

    {

        jQuery('#appendRates1 .appendRates .col-md-12').append(

        

        '<div class="col-md-1 append" style="margin: 0;padding: 0;">' +
     '<input type="text" id="days_rate' + countRates + '" name="days_rate'+countRates1+'[]" class="form-control">' +
        '</div>');



    }

  

       

})

*/

jQuery('.addDayRange3').click(function(event) {

    var countRates = jQuery('#append_day_range3 .append_day_range').size() + 2;

    var countRates1 = jQuery('#appendRates3 .appendRates').size();

    //alert(countRates);

   

      

    jQuery('#append_day_range3').append(

        '<div class="append_day_range">' +



        '<div class="col-md-3 margin5">' +

        '<label class="label text-center">'+

        '<input type="text" placeholder="Add range of days" id="days_rate_range' + countRates + '" name="days_rate_range3[]" class="form-control">' +

        '</label>' +
        '<input type="text" placeholder="rate days" id="days_rate' + countRates + '" name="days_rate30[]" class="form-control">' +

        '</div></div>');

    var countMin = jQuery('#appendRates3 .appendRates').size();

    //alert(countMin);

    if(countMin>0)

    {

        jQuery('#appendRates3 .appendRates .col-md-12').append(

        

        '<div class="col-md-3 append">' +
     '<input type="text" id="days_rate' + countRates + '" name="days_rate3'+countRates1+'[]" class="form-control">' +
        '</div>');



    }

  

       

})





jQuery('.addDayRange5').click(function(event) {

    var countRates = jQuery('#append_day_range5 .append_day_range').size() + 2;

    var countRates1 = jQuery('#appendRates5 .appendRates').size();

    //alert(countRates);

   

      

    jQuery('#append_day_range5').append(

        '<div class="append_day_range">' +


        '<div class="col-md-3">' +

        '<label class="label text-center">'+

        '<input type="text" placeholder="Add range of days" id="days_rate_range' + countRates + '" name="days_rate_range5[]" class="form-control">' +

        '</label>' +
        '<input type="text" placeholder="rate days" id="days_rate' + countRates + '" name="days_rate50[]" class="form-control">' +
        '</div></div>');

    var countMin = jQuery('#appendRates5 .appendRates').size();

    //alert(countMin);

    if(countMin>0)

    {

        jQuery('#appendRates5 .appendRates .col-md-12').append(

        

        '<div class="col-md-3 append">' +
     '<input type="text" id="days_rate' + countRates + '" name="days_rate5'+countRates1+'[]" class="form-control">' +
        '</div>');



    }

  

       

})



jQuery('.addDayRange7').click(function(event) {

    var countRates = jQuery('#append_day_range7 .append_day_range').size() + 2;

    var countRates1 = jQuery('#appendRates7 .appendRates').size();

    //alert(countRates);

   

      

    jQuery('#append_day_range7').append(

        '<div class="append_day_range">' +



        '<div class="col-md-3 margin5">' +

        '<label class="label text-center">'+

        '<input type="text" placeholder="Add range of days" id="days_rate_range' + countRates + '" name="days_rate_range7[]" class="form-control">' +

        '</label>' +
        '<input type="text" placeholder="rate days" id="days_rate' + countRates + '" name="days_rate70[]" class="form-control">' +
        '</div></div>');

    var countMin = jQuery('#appendRates7 .appendRates').size();

    //alert(countMin);

    if(countMin>0)

    {

        jQuery('#appendRates7 .appendRates .col-md-12').append(

        

        '<div class="col-md-3 append">' +
     '<input type="text" id="days_rate' + countRates + '" name="days_rate7'+countRates1+'[]" class="form-control">' +
        '</div>');



    }

  

       

})



jQuery('.addDayRange9').click(function(event) {

    var countRates = jQuery('#append_day_range9 .append_day_range').size() + 2;

    var countRates1 = jQuery('#appendRates9 .appendRates').size();

    //alert(countRates);

   

      

    jQuery('#append_day_range9').append(

        '<div class="append_day_range">' +



        '<div class="col-md-3 margin5">' +

        '<label class="label text-center">'+

        '<input type="text" placeholder="Add range of days" id="days_rate_range' + countRates + '" name="days_rate_range9[]" class="form-control">' +

        '</label>' +
        '<input type="text" placeholder="rate days" id="days_rate' + countRates + '" name="days_rate90[]" class="form-control">' +
        '</div></div>');

    var countMin = jQuery('#appendRates9 .appendRates').size();

    //alert(countMin);

    if(countMin>0)

    {

        jQuery('#appendRates7 .appendRates .col-md-12').append(
        '<div class="col-md-3 margin5 append">' +
     '<input type="text" id="days_rate' + countRates + '" name="days_rate9'+countRates1+'[]" class="form-control">' +
        '</div>');



    }

  

       

})


/* end day range */

//REMOVE LIFE PLAN RATES
jQuery('.removelifeRates').click(function(event) {

var rt_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
var rt_checklength = rt_values.length;            
if(rt_checklength == 0){
alert('Please select an item first');	
} else {
for(r=0;r< rt_checklength;r++)
{
//alert(rt_values[r]);
jQuery('#appendRates #row_'+rt_values[r]).remove();
}
}

    //jQuery('#appendRates .appendRates:last-of-type').remove();

});


//REMOVE PLAN RATES
jQuery('.removeRates').click(function(event) {

var rt_values = $("input:checkbox[name='rt[]']:checked").map(function(){return $(this).val();}).get();
console.log(rt_values);
var rt_checklength = rt_values.length;            
if(rt_checklength == 0){
alert('Please select an item first');	
} else {
for(r=0;r< rt_checklength;r++)
{
//alert(rt_values[r]);
jQuery('#appendRates #row_'+rt_values[r]).remove();
}
}

    //jQuery('#appendRates .appendRates:last-of-type').remove();

});

jQuery('.removeRates1').click(function(event) {
var values = $("input:checkbox[name='sr[]']:checked").map(function(){return $(this).val();}).get();
var checklength = values.length;             
if(checklength == 0){
alert('Please select an item first');	
} else {
for(a=0;a< checklength;a++)
{
//alert(values[a]);
jQuery('#appendRates1 #row_'+values[a]).remove();
}
}

   // jQuery('#appendRates1 .appendRates:last-of-type').remove();

});

jQuery('.removeRates3').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates3 .appendRates:last-of-type').remove();

});

jQuery('.removeRates5').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates5 .appendRates:last-of-type').remove();

});

jQuery('.removeRates7').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates7 .appendRates:last-of-type').remove();

});

jQuery('.removeRates8').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates9 .appendRates:last-of-type').remove();

});

jQuery('.removeRates2').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates2 .appendRates:last-of-type').remove();

});

jQuery('.removeRates4').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates4 .appendRates:last-of-type').remove();

});

jQuery('.removeRates6').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates6 .appendRates:last-of-type').remove();

});

jQuery('.removeRates8').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates8 .appendRates:last-of-type').remove();

});

jQuery('.removeRates9').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendRates9 .appendRates:last-of-type').remove();

});



jQuery('.removeDayRange').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#append_day_range .append_day_range:last-of-type').remove();

     

    

    jQuery('#appendRates1 .appendRates .col-md-12 .append:last-of-type').remove();



 //jQuery('body').find('.appendRates div:last').hide();

  // jQuery('.appendRates .unit:last').hide();

});

jQuery('.removeDayRange3').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#append_day_range3 .append_day_range:last-of-type').remove();

     

    

    jQuery('#appendRates3 .appendRates .col-md-12 .append:last-of-type').remove();



 //jQuery('body').find('.appendRates div:last').hide();

  // jQuery('.appendRates .unit:last').hide();

});

jQuery('.removeDayRange5').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#append_day_range5 .append_day_range:last-of-type').remove();

     

    

    jQuery('#appendRates5 .appendRates .col-md-12 .append:last-of-type').remove();





});

jQuery('.removeDayRange7').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#append_day_range7 .append_day_range:last-of-type').remove();

   

    

    jQuery('#appendRates7 .appendRates .col-md-12 .append:last-of-type').remove();



});

jQuery('.removeDayRange9').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#append_day_range9 .append_day_range:last-of-type').remove();

   

    

    jQuery('#appendRates9 .appendRates .col-md-12 .append:last-of-type').remove();



 

});







// Benefits List

jQuery('.addBenefits').click(function(event) {

    var countBenefits = jQuery('#appendBenefits .appendBenefits').size() + 2;

    jQuery('#appendBenefits').append(

        '<div class="appendBenefits">' +

        '<div class="row" style="margin-top:10px;">' +

        '<div class="col-md-12">' +

        '<input type="text" id="ibenefitHead' + countBenefits + '" name="ibenefitHead[]" placeholder="Enter Heading of Benefit" class="form-control">' +

        '</div>' +

        '</div>' +

        '<div class="row">' +

        '<div class="col-md-12">' +

        '<textarea placeholder="Enter benefit Description #' + countBenefits + '" spellcheck="false" name="ibenefitDesc[]" id="ibenefitDesc" class="form-control"></textarea>' +

        '</div>' +

        '</div>' +

        '</div>');

})



jQuery('.removeBenefits').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendBenefits .appendBenefits:last-of-type').remove();

});



// Add Features Policy

jQuery('.addFeatures').click(function(event) {

    var countFeature = jQuery('#appendFeatures .appendFeatures').size() + 2;

    jQuery('#appendFeatures').append('<div class="appendFeatures">'+

                    '<div class="row unit" style="margin-bottom: 10px;">'+

                            '<input type="text" id="ifeaturelist'+countFeature+'" name="ifeaturelist[]" placeholder="Enter Feature List # '+countFeature+'" class="form-control">'+

                    '</div>'+

                '</div>');

})

jQuery('.removeFeatures').click(function(event) {

    /* Remove the last child for deductible */

    jQuery('#appendFeatures .appendFeatures:last-of-type').remove();

});





// For Feature Toggle

jQuery('.checkbox-toggle i').click(function(event) {

    jQuery('#featureShow').toggle();

});



// 

jQuery('.iflat').click(function(event) {

    /* Act on the event */

    if(jQuery('.iflat').is(':checked'))

        jQuery('#flatrateShow').show();

    else

        jQuery('#flatrateShow').hide();



});

jQuery('.stop').click(function(event) {

    /* Act on the event */

    if(jQuery('.stop').is(':checked'))

        jQuery('#stop_usa').show();

    else

        jQuery('#stop_usa').hide();



});

jQuery('.cdiscount').click(function(event) {

    /* Act on the event */

    if(jQuery('.cdiscount').is(':checked'))

        jQuery('#cdiscountShow').show();

    else

        jQuery('#cdiscountShow').hide();



});

/*jQuery('#iflat]').on('change', function() {

    jQuery('input[name="' + this.name + '"]').not(this).prop('checked', false);

}); */



jQuery('input[type="checkbox"]').on('change', function() {

   jQuery('input[name="' + this.name + '"]').not(this).prop('checked', false);

});
