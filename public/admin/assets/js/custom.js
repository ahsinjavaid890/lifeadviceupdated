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