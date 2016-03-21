function confirmCancel()
{
	var choice = confirm("Are you sure you want to Cancel this Record?");
	if(choice==true)
	{
		return true;
	}
	else
		return false;
}


function addRowV()
{
	clearAddRowErr();
	var err = "false";
	if($('#prodname').val()=="")
	{
		$('#prodnameErr').html("(Required)");
		err = 'true';
	}
	if($('#variant').val()=="")
	{
		$('#variantErr').html("(Required)");		
		err = 'true';
	}	
	if($('#qty').val()=="")
	{
		$('#qtyErr').html("(Required)");		
		err = 'true';
	}
	else if($('#qty').val()<=0)
	{
		$('#qtyErr').html("Invalid Amount");		
		err = 'true';		
	}
	else if(isNaN($('#qty').val()))
	{
		$('#qtyErr').html("Must be Number");		
		err = 'true';		
	}	




	if(err == "true")
		return "true";
	else
		return "false";
}

function clearAddRowErr()
{
	$('#prodnameErr').html("");
	$('#variantErr').html("");
	$('#qtyErr').html("");	
}

function logout()
{
  var choice = confirm("Are you sure you want to Log-out?");
  if(choice==true)
  {
    return true;
  }
  else
    return false;
}


function clearAddRow()
{
  $('#prodname').val("");
  $('#variant').val("");
  $('#qty').val("");  
}






