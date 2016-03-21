
function clearProd()
{
	document.getElementById('category').value=null;	
	document.getElementById('prodname').value=null;
	document.getElementById('variant').value=null;
	document.getElementById('price').value=null;
	document.getElementById('mod').value=null;
	document.getElementById('supp').value=null;	
}
function clearCust()
{
	document.getElementById('name').value=null;	
	document.getElementById('birth').value=null;
	document.getElementById('sex').value=null;
	document.getElementById('add').value=null;
	document.getElementById('cs').value=null;
	document.getElementById('occu').value=null;	
	document.getElementById('emp').value=null;	
	document.getElementById('emp_add').value=null;	
	document.getElementById('spouse').value=null;	
	document.getElementById('spouse_occu').value=null;	
	document.getElementById('spouseDiv').style.display="none";	
	document.getElementById('tel').value=null;	
	document.getElementById('phone').value=null;	
	document.getElementById('office_tel').value=null;	
	document.getElementById('ref').value=null;	
	document.getElementById('tl').value=null;	
}
function clearProdErr(){
  	$('#categoryErr').html("");	
  	$('#prodnameErr').html("");	
  	$('#variantErr').html("");	
  	$('#priceErr').html("");	
  	$('#suppErr').html("");	
}

function clearCustErr()
{
	$('#nameErr').html("");	
	$('#birthErr').html("");	
	$('#sexErr').html("");	
	$('#addErr').html("");	
	$('#csErr').html("");	
	$('#phoneErr').html("");	
	$('#refErr').html("");	
	$('#tlErr').html("");	
	$('#spouseErr').html("");	
	$('#spouse_occuErr').html("");	

}
function logout()
{
	document.write("log out");
}

function clearCat()
{
	document.getElementById('catname').value=null;	
}

function clearCatErr(){
	$('#catnameErr').html("");		
}

function catV(){
  if(document.getElementById('catname').value=="")
  {
  	$('#catnameErr').html("(Required)");
  	return "true";
  }
  else
  	return "false";
}

function prodV(){
	var error = "";
	if(document.getElementById('category').value=="")
	{
	  	$('#categoryErr').html("(Required)");	
	  	error = 'true';		
	}
	else
	  	$('#categoryErr').html("");	

	if(document.getElementById('prodname').value=="")
	{
	  	$('#prodnameErr').html("(Required)");	
	  	error = 'true';		
	}
	else
	  	$('#prodnameErr').html("");		
	if(document.getElementById('variant').value=="")
	{
	  	$('#variantErr').html("(Required)");	
	  	error = 'true';		
	}
	else
	  	$('#variantErr').html("");	

	if(document.getElementById('price').value=="")
	{
	  	$('#priceErr').html("(Required)");	
	  	error = 'true';		
	}
	else if(isNaN((document.getElementById("price").value)))
	{
	  	$('#priceErr').html("(Must be a number)");	
	  	error = 'true';		
	}
	else
	  	$('#priceErr').html("");	

	if(error=='true')
		return 'true';
	else
		return 'false';
}
function custV()
{
	var error = "";
	if(document.getElementById('name').value=="")
	{
      $('#nameErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#nameErr').html("");	
	if(document.getElementById('birth').value=="")
	{
      $('#birthErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#birthErr').html("");		  
	if(document.getElementById('sex').value=="")
	{
      $('#sexErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#sexErr').html("");		
	if(document.getElementById('add').value=="")
	{
      $('#addErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#addErr').html("");	
	if(document.getElementById('cs').value=="")
	{
      $('#csErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#csErr').html("");		
	if(document.getElementById('phone').value=="")
	{
      $('#phoneErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#phoneErr').html("");	
	if(document.getElementById('ref').value=="")
	{
      $('#refErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#refErr').html("");	
	if(document.getElementById('tl').value=="")
	{
      $('#tlErr').html("(Required)");  		
	  	error = 'true';		
	}
	else
	  	$('#tlErr').html("");	

	if(document.getElementById('cs').value=="Married")
	{
		if(document.getElementById('spouse').value=="")
		{
	      $('#spouseErr').html("(Required)");  		
		  	error = 'true';		
		}
		else
		  	$('#spouseErr').html("");	
		if(document.getElementById('spouse_occu').value=="")
		{
	      $('#spouse_occuErr').html("(Required)");  		
		  	error = 'true';		
		}
		else
		  	$('#spouse_occuErr').html("");			  
	}





	


	if(error=='true')
		return 'true';
	else
		return 'false';
}

function csSel(selection){
	var sel = selection;
	if(sel=="Married")
	{
		document.getElementById('spouseDiv').style.display="block";
		document.getElementById('spouse').value="";
		document.getElementById('spouse_occu').value="";	
	}
	else
	{
		document.getElementById('spouseDiv').style.display="none";
		document.getElementById('spouse').value="";
		document.getElementById('spouse_occu').value="";		
	}
}

