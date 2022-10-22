function geturl()
{
    return $('#app_url').val();
}
function checkcompanyname(id)
{
	$('#name-error').hide();
	var app_url = geturl();
	$.ajax({
        url:app_url+"/checkcompanyname/"+id, 
        type:"get",
        success:function(res){
            if(res > 0)
            {
            	$('#company_name-error').show();
				$('#company_name-error').html('This Company Name is already in our Records');
				$('#submitbutton').attr('disabled' , true);
            }else{
            	$('#submitbutton').attr('disabled' , false);
            	$('#company_name-error').hide();
            }
        }
    })
}
function checkemail(id)
{
    var email = id;
    var form = new FormData();
    form.append('email',email);
    var app_url = geturl();
    $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:app_url+"/checkemail", 
        type:"POST",
        data:form,
        cache:false,
        contentType:false,
        processData:false,
        success:function(res){
            if(res == 1)
            {
                $('#submitbutton').attr('disabled' , true);
                $('#email-error').html('This Email is already in our Records');
                $('#email-error').show();
            }else{
                $('#submitbutton').attr('disabled' , false);
                $('#email-error').hide();
            }
            
        }
    }) 
}
function checkdotnumber(id)
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/checkdotnumber/"+id, 
        type:"get",
        success:function(res){
            if(res > 0)
            {
                $('#dot_number-error').show();
                $('#dot_number-error').html('This Carrier DOT Number is already in our Records')
                $('#submitbutton').attr('disabled' , true);
            }else{
                $('#submitbutton').attr('disabled' , false);
                $('#dot_number-error').hide();
            }
        }
    })
}

function formsubmit(id)
{
    $('#'+id).submit();
}
function declinecarrier(id)
{
    $('#declinerequest').modal('show');
    $('#declineid').val(id);
}
function editjobattribute(id)
{
    getattributenameandid(id);
    var app_url = geturl();
    $.ajax({
        url:app_url+"/admin/jobs/editattribute/"+id, 
        type:"get",
        success:function(res)
        {
            $('#kt_select2_11').html(res);
            $('#addAttributes').modal('show');
        }
    })
}

function getattributenameandid(id)
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/admin/jobs/getattributenameandid/"+id, 
        type:"get",
        success:function(res)
        {
            $('#namefields').html(res);
        }
    })
}
function pricesone(){
    document.getElementById('price_layout').value = 'layout_1';
    document.getElementById('prices1').classList.add('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function pricestwo(){
    document.getElementById('price_layout').value = 'layout_2';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.add('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function pricesthree(){
    document.getElementById('price_layout').value = 'layout_3';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.add('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function pricesfour(){
    document.getElementById('price_layout').value = 'layout_4';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.add('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function pricesfive(){
    document.getElementById('price_layout').value = 'layout_5';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.add('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function pricessix(){
    document.getElementById('price_layout').value = 'layout_6';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.add('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function pricesseven(){
    document.getElementById('price_layout').value = 'layout_7';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.add('selected');
    document.getElementById('prices8').classList.remove('selected');
}
function priceseight(){
    document.getElementById('price_layout').value = 'layout_8';
    document.getElementById('prices1').classList.remove('selected');
    document.getElementById('prices2').classList.remove('selected');
    document.getElementById('prices3').classList.remove('selected');
    document.getElementById('prices4').classList.remove('selected');
    document.getElementById('prices5').classList.remove('selected');
    document.getElementById('prices6').classList.remove('selected');
    document.getElementById('prices7').classList.remove('selected');
    document.getElementById('prices8').classList.add('selected');
}
function formone(){
    document.getElementById('form_layout').value = 'layout_1';
    document.getElementById('form1').classList.add('selected');
    document.getElementById('form2').classList.remove('selected');
    document.getElementById('form3').classList.remove('selected');
    document.getElementById('form4').classList.remove('selected');
    document.getElementById('form5').classList.remove('selected');
    document.getElementById('form6').classList.remove('selected');
    document.getElementById('form7').classList.remove('selected');
}
function formtwo(){
    document.getElementById('form_layout').value = 'layout_2';
    document.getElementById('form1').classList.remove('selected');
    document.getElementById('form2').classList.add('selected');
    document.getElementById('form3').classList.remove('selected');
    document.getElementById('form4').classList.remove('selected');
    document.getElementById('form5').classList.remove('selected');
    document.getElementById('form6').classList.remove('selected');
    document.getElementById('form7').classList.remove('selected');
}
function formthree(){
    document.getElementById('form_layout').value = 'layout_3';
    document.getElementById('form1').classList.remove('selected');
    document.getElementById('form2').classList.remove('selected');
    document.getElementById('form3').classList.add('selected');
    document.getElementById('form4').classList.remove('selected');
    document.getElementById('form5').classList.remove('selected');
    document.getElementById('form6').classList.remove('selected');
    document.getElementById('form7').classList.remove('selected');
}
function formfour(){
    document.getElementById('form_layout').value = 'layout_4';
    document.getElementById('form1').classList.remove('selected');
    document.getElementById('form2').classList.remove('selected');
    document.getElementById('form3').classList.remove('selected');
    document.getElementById('form4').classList.add('selected');
    document.getElementById('form5').classList.remove('selected');
    document.getElementById('form6').classList.remove('selected');
    document.getElementById('form7').classList.remove('selected');
}
function formfive(){
    document.getElementById('form_layout').value = 'layout_5';
    document.getElementById('form1').classList.remove('selected');
    document.getElementById('form2').classList.remove('selected');
    document.getElementById('form3').classList.remove('selected');
    document.getElementById('form4').classList.remove('selected');
    document.getElementById('form5').classList.add('selected');
    document.getElementById('form6').classList.remove('selected');
    document.getElementById('form7').classList.remove('selected');
}
function formsix(){
    document.getElementById('form_layout').value = 'layout_6';
    document.getElementById('form1').classList.remove('selected');
    document.getElementById('form2').classList.remove('selected');
    document.getElementById('form3').classList.remove('selected');
    document.getElementById('form4').classList.remove('selected');
    document.getElementById('form5').classList.remove('selected');
    document.getElementById('form6').classList.add('selected');
    document.getElementById('form7').classList.remove('selected');
}
function formseven(){
    document.getElementById('form_layout').value = 'layout_7';
    document.getElementById('form1').classList.remove('selected');
    document.getElementById('form2').classList.remove('selected');
    document.getElementById('form3').classList.remove('selected');
    document.getElementById('form4').classList.remove('selected');
    document.getElementById('form5').classList.remove('selected');
    document.getElementById('form6').classList.remove('selected');
    document.getElementById('form7').classList.add('selected');
}
$( function() {
   var $sortable =   $( "#sortable, #sortable2" ).sortable({
      connectWith: ".connectedSortable",
    update: function(event, ui) {
            var counter = 1;
            $('li', $sortable).each(function() {
                $(this).attr('position', counter);
                 $(this).find("input[name='sort[]']").val(counter);
                counter++;
            });
    }
    }).disableSelection();
  } );