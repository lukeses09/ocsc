function trim(stringToTrim) 
{
	return stringToTrim.replace(/^\s+|\s+$/g,"");
}

function validate()
{

		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtLName").value=="")
		{
			error=true;
			error_message+="*Last Name\n\n";
		}
		if(document.getElementById("txtFName").value=="")
		{
			error=true;
			error_message+="*First Name\n\n";
		}
		if(document.getElementById("txtPhone").value=="")
		{
			error=true;
			error_message+="*Cell Phone\n\n";
		}
		if(document.getElementById("txtEmail").value=="")
		{
			error=true;
			error_message+="*Email Address\n\n";
		}	
		if(document.getElementById("txtAddress").value=="")
		{
			error=true;
			error_message+="*Address\n\n";
		}	
		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
	
}

function goBack() {
		window.history.back();
}

function validateEmp()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtLName").value=="")
		{
			error=true;
			error_message+="*Last Name\n\n";
		}
		if(document.getElementById("txtFName").value=="")
		{
			error=true;
			error_message+="*First Name\n\n";
		}
		if(document.getElementById("txtPhone").value=="")
		{
			error=true;
			error_message+="*Cell Phone\n\n";
		}
		if(document.getElementById("txtEmail").value=="")
		{
			error=true;
			error_message+="*Email Address\n\n";
		}	
		if(document.getElementById("txtAdd").value=="")
		{
			error=true;
			error_message+="*Address\n\n";
		}			
		if(document.getElementById("txtDep").value=="")
		{
			error=true;
			error_message+="*Department\n\n";
		}
		if(document.getElementById("txtJob").value=="")
		{
			error=true;
			error_message+="*Job Title\n\n";
		}				
			
		
		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}
function validateCont()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtSize").value=="")
		{
			error=true;
			error_message+="*Size Name\n\n";
		}
		if(document.getElementById("txtHeight").value=="")
		{
			error=true;
			error_message+="*Height\n\n";
		}
		if(document.getElementById("txtWidth").value=="")
		{
			error=true;
			error_message+="*Width\n\n";
		}				
		
		if(document.getElementById("txtQty").value=="")
		{
			error=true;
			error_message+="*Quantity\n\n";
		}

		try{	//  FOR CHARGE RATE
			if((document.getElementById("txtRate").value == "")) throw "*Rate\n\n";
			else if(isNaN((document.getElementById("txtRate").value))) throw "*Rate is the price value, it must be a number\n\n";
		}
		catch(err)
		{
			error = true;
			error_message += err;
		}	

		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}
function validateTruck()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtid").value=="")
		{
			error=true;
			error_message+="*Plate No.\n\n";
		}
		if(document.getElementById("txtType").value=="")
		{
			error=true;
			error_message+="*Type\n\n";
		}
		if(document.getElementById("txtModel").value=="")
		{
			error=true;
			error_message+="*Model\n\n";
		}
		if(document.getElementById("txtAvail").value=="")
		{
			error=true;
			error_message+="*Availability\n\n";
		}		

		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}

function validateCharge()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtType").value=="")
		{
			error=true;
			error_message+="*Type\n\n";
		}
		if(document.getElementById("txtMeasure").value=="")
		{
			error=true;
			error_message+="*Measurement\n\n";
		}
		try{	//  FOR CHARGE RATE
			if((document.getElementById("txtRate").value == "")) throw "*Rate\n\n";
			else if(isNaN((document.getElementById("txtRate").value))) throw "*Rate is the price value, it must be a number\n\n";
		}
		catch(err)
		{
			error = true;
			error_message += err;
		}	
		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}
function validateTax()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(trim(document.getElementById("txtName").value)=="")
		{
			error=true;
			error_message+="*Tax Name\n\n";
		}
		if(document.getElementById("txtRate").value=="")
		{
			error=true;
			error_message+="*Tax Rate Price\n\n";
		}

		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}
function validateDisc()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtName").value=="")
		{
			error=true;
			error_message+="*Tax Name\n\n";
		}
		if(document.getElementById("txtRate").value=="")
		{
			error=true;
			error_message+="*Tax Rate Price\n\n";
		}
		if(document.getElementById("txtStart").value=="")
		{
			error=true;
			error_message+="*Start Date\n\n";
		}
		if(document.getElementById("txtEnd").value=="")
		{
			error=true;
			error_message+="*End Date\n\n";
		}				

		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}
function validateUser()
{
		var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
		var error = false;

		if(document.getElementById("txtid").value=="")
		{
			error=true;
			error_message+="*User Name\n\n";
		}
		if(document.getElementById("txtpass").value=="")
		{
			error=true;
			error_message+="*Password\n\n";
		}
		if(document.getElementById("txtType").value=="")
		{
			error=true;
			error_message+="*User Type\n\n";
		}
		if(error == true)
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}
function confirmDel()
{
	var choice = confirm("Are you sure you want to Delete this record?");
	if(choice==true)
	{
		return true;
	}
	else
		return false;
}
function rev()
{
		document.getElementById('btnAdd').className ="btn btn-danger btn-lg";
		document.getElementById('btnAdd').value='Cancel Record';
	if(document.getElementById('btnAdd').value == 'Cancel Record')
	{
		document.getElementById('btnAdd').className ="btn btn-success btn-lg";
		document.getElementById('btnAdd').value='+ ADD NEW RECORD';		
	}
}

function validationLogin()
{
	var error = false;
	var error_message = "The following fields are required: \n\n\n";;
	if(document.getElementById("txtUserName").value == "")
	{
		error_message+="*UserName\n\n";
		error = true;
	}
	if(document.getElementById("txtPass").value == "")
	{
		error_message+="*Password\n";
		error = true;
	}
	if(error == true)
	{
		alert(error_message);
		return false;
	}
	else
	{
		return true;
	}
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

function selection(){
	var sel = document.getElementById("selection").value;
	if(sel == "Individual")
	{
		document.getElementById('indi').style.display = 'block'; 
		document.getElementById('comp').style.display = 'none'; 	
	}
	else if(sel == "Company")
	{
		document.getElementById('indi').style.display = 'none'; 
		document.getElementById('comp').style.display = 'block'; 	
	}	
}

function selectionCl(){
	var sel = document.getElementById("selection").value;
	if(sel == "Individual")
	{
		document.getElementById('INDIrow1').style.display = 'block'; 
		document.getElementById('COMrow1').style.display = 'none'; 
		document.getElementById('COMrow3').style.display = 'none';  	
		document.getElementById('txtComp').value="";
		document.getElementById('txtCP').value="";
		document.getElementById('txtCPPhone').value="";							
	}
	else if(sel == "Company")
	{
		document.getElementById('INDIrow1').style.display = 'none'; 		
		document.getElementById('COMrow1').style.display = 'block'; 
		document.getElementById('COMrow3').style.display = 'block'; 
		document.getElementById('txtFName').value="";
		document.getElementById('txtLName').value="";	
	}
		document.getElementById('txtTel').value=null;		
		document.getElementById('txtPhone').value=null;							
		document.getElementById('txtEmail').value="";	
		document.getElementById('txtAdd').value="";							
}

function validateClient(){

	var sel = document.getElementById("selection").value;
	var error_message = "Ooops! Please fill up the required fields: \n\n\n";;
	var error = false;

	if(sel == "Individual")
	{
		if(document.getElementById("txtLName").value=="")
		{
			error=true;
			error_message+="*Last Name\n\n";
		}
		if(document.getElementById("txtFName").value=="")
		{
			error=true;
			error_message+="*First Name\n\n";
		}
		if(document.getElementById("txtPhone").value=="")
		{
			error=true;
			error_message+="*Cell Phone\n\n";
		}		
		if(document.getElementById("txtEmail").value=="")
		{
			error=true;
			error_message+="*Email Address\n\n";
		}		
		if(document.getElementById("txtAdd").value=="")
		{
			error=true;
			error_message+="*Address\n\n";
		}				
	}
	else if(sel == "Company")
	{
		if(document.getElementById("txtComp").value=="")
		{
			error=true;
			error_message+="*Company Name\n\n";
		}
		if(document.getElementById("txtPhone").value=="")
		{
			error=true;
			error_message+="*Cell Phone\n\n";
		}	
		if(document.getElementById("txtEmail").value=="")
		{
			error=true;
			error_message+="*Email Address\n\n";
		}		
		if(document.getElementById("txtAdd").value=="")
		{
			error=true;
			error_message+="*Address\n\n";
		}		
		if(document.getElementById("txtCP").value=="")
		{
			error=true;
			error_message+="*Contact Person Name\n\n";
		}
		if(document.getElementById("txtCPPhone").value=="")
		{
			error=true;
			error_message+="*Contact Person Cellphone No.\n\n";
		}		
	}
		if(error == true) // SEE AND RETURN BOOLEAN
		{
			alert(error_message);
			return false;
		}
		else
		{
			return true;
		}
}

function selectionCh(){
	var sel = document.getElementById("selection").value;
	if(sel == "Travel Charge")
	{
		document.getElementById('travel').style.display = 'block'; 
		document.getElementById('regional').style.display = 'none'; 	
	}
	else if(sel == "Regional Charge")
	{
		document.getElementById('travel').style.display = 'none'; 
		document.getElementById('regional').style.display = 'block'; 	
	}	
}

function wer(){
	var sel = document.getElementById("selection").value;
	if(sel == "Cash")
	{
		document.getElementById('rowBank').style.display = 'none';	
	}
	else if(sel == "Bank")
	{
		document.getElementById('rowBank').style.display = 'block'; 
	}	
}
