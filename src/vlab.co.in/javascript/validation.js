// JavaScript Document
var xmlHttp

function checkindividual_form()
{
	var emailValidation = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	var username=document.getElementById("user_name").value;
	if(username=="" && document.getElementById("user_id").value=="" && document.getElementById("password").value=="" && document.getElementById("city").value=="" && document.getElementById("state").value==""  && document.getElementById("phone").value=="")
	{
		alert("Please fill the required information!");
		return false;
	}
	
	if(username=="")
	{
		alert("Please enter the Name");
		document.getElementById("user_name").focus();	
		return false;
	}
	if(document.getElementById("user_id").value=="")
	{
		alert("Please enter the Email Id");
		document.getElementById("user_id").focus();	
		return false;
	}
	if(document.getElementById("user_id").value!="")
	{
		if(!(document.getElementById("user_id").value.match(emailValidation)))
		{
		alert("Please enter Valid Email Id.");
		document.getElementById("user_id").focus();
		return false;
		}
	}
	if(document.getElementById("password").value=="")
	{
		alert("Please enter the Password");
		document.getElementById("password").focus();	
		return false;
	}
	
	if(document.getElementById("c_password").value=="")
	{
		alert ("Please Fill the Confirm Password!!");	
		document.getElementById("c_password").focus();
		return false;	
	}
	
	if(document.getElementById("password").value != document.getElementById("c_password").value)	
	{
		alert ("Your Confirm Password is not Matched with Password");
		document.getElementById("c_password").focus();
		return false;	
	}
	
	if(document.getElementById("city").value=="")
	{
		alert("Please enter the city");
		document.getElementById("city").focus();
		return false;
	}
	
	if(document.getElementById("state").value=="")
	{
		alert("Please enter the State");
		document.getElementById("state").focus();
		return false;
	}
	if((document.getElementById("phone").value=="") && (document.getElementById("mobile_no").value==""))
	{
		alert("Enter either landline number or mobile number!");
		
		return false;
	}
	if(document.getElementById("phone").value!="")
	{
		if(document.getElementById("std_code").value=="")
		{
		alert("Enter std code!");
		document.getElementById("std_code").focus();
		return false;
		}
	}
	if(isNaN(document.getElementById("phone").value==""))
	{
		alert("Invalid phone number");
		document.getElementById("phone").focus();
		return false;
	}
	if(isNaN(document.getElementById('mobile_no').value))
	{	
		alert("Invalid Mobile Number");
		document.getElementById('mobile_no').focus();
		return false;
	}
}

function checkdealer_form()
{
	var emailValidation = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(document.getElementById("dealer_id").value=="" && document.getElementById("dpassword").value=="" && document.getElementById("duser_name").value=="" && document.getElementById("dstate").value=="" && document.getElementById("dcity").value=="" && document.getElementById("pincode").value=="" && document.getElementById("cpn").value=="")
	{
		alert("Please fill the required information!");
		return false;
	}
	
	if(document.getElementById("dealer_id").value=="")
	{
		alert("Please enter the User Id");
		document.getElementById("dealer_id").focus();	
		return false;
	}
	if(document.getElementById("dpassword").value=="")
	{
		alert("Please enter the Password");
		document.getElementById("dpassword").focus();	
		return false;
	}
	
	if(document.getElementById("dc_password").value=="")
	{
		alert ("Please Fill the Confirm Password!!");	
		document.getElementById("dc_password").focus();
		return false;	
	}
	
	if(document.getElementById("dpassword").value != document.getElementById("dc_password").value)	
	{
		alert ("Your Confirm Password is not Matched with Password");
		document.getElementById("dc_password").focus();
		return false;	
	}
	if(document.getElementById("duser_name").value=="")
	{
		alert("Please enter the Name");
		document.getElementById("user_name").focus();	
		return false;
	}
	if(document.getElementById("dstate").value=="")
	{
		alert("Please enter the State");
		document.getElementById("state").focus();
		return false;
	}
	
	if(document.getElementById("dcity").value=="")
	{
		alert("Please enter the city");
		document.getElementById("city").focus();
		return false;
	}
	
	if(document.getElementById("pincode").value=="")
	{
		alert("Please enter the Pincode");
		document.getElementById("pincode").focus();
		return false;
	}
	if(isNaN(document.getElementById("pincode").value))
	{
		alert("Please enter valid Pincode");
		document.getElementById("pincode").focus();
		return false;
	}
	//alert(document.getElementById("pincode").value.length);
	if(document.getElementById("pincode").value.length >8)
	{
		alert("Pincode should not be more than 8 digit!");
		document.getElementById("pincode").focus();
		return false;
	}
	if(document.getElementById("cpn").value=="")
	{
		alert("Please enter the Contact Person Name");
		document.getElementById("cpn").focus();
		return false;
	}
	if((document.getElementById("l_no").value=="") && (document.getElementById("dealer_cell").value==""))
	{
		alert("Enter either landline number or mobile number!");
		document.getElementById("dealer_cell").focus();
		return false;
	}
	if(document.getElementById("l_no").value!="")
	{
		if(document.getElementById("s_code").value=="")
		{
		alert("Enter std code!");
		document.getElementById("s_code").focus();
		return false;
		}
	}
	if(isNaN(document.getElementById("l_no").value))
	{
		alert("Please enter valid Landline Number");
		document.getElementById("l_no").focus();
		return false;
	}
	if(document.getElementById("l_no").value.length >10)
	{
		alert("Please enter valid Landline Number");
		document.getElementById("l_no").focus();
		return false;
	}
	if(isNaN(document.getElementById('dealer_cell').value))
	{	
		alert("Invalid Mobile Number");
		document.getElementById('dealer_cell').focus();
		return false;
	}
	if(document.getElementById('dealer_cell').value.length >10)
	{	
		alert("Invalid Mobile Number");
		document.getElementById('dealer_cell').focus();
		return false;
	}
	if(document.getElementById("email").value=="")
	{
		alert("Please enter the email");
		document.getElementById("email").focus();
		return false;
	}
	if(document.getElementById("email").value!="")
	{
		if(!(document.getElementById("email").value.match(emailValidation)))
		{
		alert("Please enter Valid Email Id.");
		document.getElementById("email").focus();
		return false;
		}
	}
	
		
	
	
	
	


}


function check_search()
{
	if(document.getElementById('expe').value=="")
	{
		alert("Please Enter Lab Name !");	
		document.getElementById('expe').focus();
		return false;
	}
	if(document.getElementById('expe').value.length < 3)
	{
		alert("Please enter at least 3 characters for lab name !");	
		document.getElementById('expe').focus();
		return false;
	}

	return true;
}

function check_userid()
	{
		var userid	=	document.getElementById('dealer_id').value;
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="ajax_file.php?userid="+userid;    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{ 
														var ar	=	xmlHttp.responseText;
														if(ar=="found"){
															alert('user id already exit !');
															/*document.getElementById('dealer_id').value="";	*/
															document.getElementById('dealer_id').focus();
															return false;
														}
														else
														{
															//alert('user id not found !');
															//document.getElementById('s_id').innerHTML=ar;
															
															return true;
														}
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return false;
	}
	
	
	
	function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}



function check_emailid()
	{
		//alert("sdfsdf");
		var emailid	=	document.getElementById('user_id').value;
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="check_email.php?emailid="+emailid;    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{ 
														var er	=	xmlHttp.responseText;
														if(er=="found"){
															alert('user id already exit !');
															/*document.getElementById('user_id').value="";	*/
															document.getElementById('user_id').focus();
															return false;
														}
														else
														{
															
														return true;
														}
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return false;
	}
	
	
function check_emailid_in_adminpanel()
	{
		//alert("sdfsdf");
		var emailid	=	document.getElementById('user_id').value;
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="../check_email.php?emailid="+emailid;    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{ 
														var er	=	xmlHttp.responseText;
														if(er=="found"){
															alert('user id already exit !');
															/*document.getElementById('user_id').value="";	*/
															document.getElementById('user_id').focus();
															return false;
														}
														else
														{
															
														return true;
														}
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return false;
	}
	


	function check_userid_in_admin()
	{
		var userid	=	document.getElementById('dealer_id').value;
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="../ajax_file.php?userid="+userid;    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{ 
														var ar	=	xmlHttp.responseText;
														if(ar=="found"){
															alert('user id already exit !');
															/*document.getElementById('dealer_id').value="";	*/
															document.getElementById('dealer_id').focus();
															return false;
														}
														else
														{
															//alert('user id not found !');
															//document.getElementById('s_id').innerHTML=ar;
															
															return true;
														}
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return false;
	}
	



	function check_sellcardetail(){
		
			if(document.getElementById("make").value=="")
			{
				alert("Please select Make");
				document.getElementById("make").focus();	
				return false;
			}
			if(document.getElementById("model").value=="")
			{
				alert("Please select Model");
				document.getElementById("model").focus();	
				return false;
			}
			if(document.getElementById("model_type").value=="")
			{
				alert("Please select type of Model");
				document.getElementById("model_type").focus();	
				return false;
			}
			if(document.getElementById("reg_no").value=="")
			{
				alert("Please enter Registration Number!");
				document.getElementById("reg_no").focus();	
				return false;
			}
			if(document.getElementById("city").value=="")
			{
				alert("Please select city");
				document.getElementById("city").focus();	
				return false;
			}
			if(document.getElementById("month").value=="")
			{
				alert("Please select Month");
				document.getElementById("month").focus();	
				return false;
			}

			if(document.getElementById("year").value=="")
			{
				alert("Please select Year");
				document.getElementById("year").focus();	
				return false;
			}

			if(document.getElementById("distance").value=="")
			{
				alert("Please enter kilometers");
				document.getElementById("distance").focus();	
				return false;
			}
			if(isNaN(document.getElementById('distance').value))
			{	
				alert("Invalid Kilometers");
				document.getElementById('distance').focus();
				return false;
			}
			if(document.getElementById("price").value=="")
			{
				alert("Please enter Expected Price");
				document.getElementById("price").focus();	
				return false;
			}

			if(document.getElementById("color").value=="")
			{
				alert("Please select color");
				document.getElementById("color").focus();	
				return false;
			}
			
			if(isNaN(document.getElementById('price').value))
			{	
				alert("Invalid price");
				document.getElementById('price').focus();
				return false;
			}
			
			
	}
	function char_count(num){
		//alert(document.getElementById("desc").value.length);
		if(document.getElementById("desc").value.length > num)
			{
				alert("Character limt exceeded!");
				document.getElementById("desc").focus();	
				return false;
			}	
	}
	
	function checkserchform()
	{
		
		if(document.getElementById("make").value=="")
			{
				alert("Please enter Make Name");
				document.getElementById("make").focus();	
				return false;
			}
			if(document.getElementById("model").value=="")
			{
				alert("Please enter Model Name");
				document.getElementById("model").focus();	
				return false;
			}
			if(document.getElementById("model_type").value=="")
			{
				alert("Please enter model type");
				document.getElementById("model_type").focus();	
				return false;
			}
			if(document.getElementById("city").value=="")
			{
				alert("Please enter city");
				document.getElementById("city").focus();	
				return false;
			}
	}
	
	function check_login()
	{
		//alert("sdfsdf");
		var loginid	=	document.getElementById('login_id').value;
		var password=document.getElementById('password').value;
		
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="check_email.php?loginid="+loginid+"&password="+password+"&act=check_login";    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{
														
														var er	=	xmlHttp.responseText;
														alert(er);
														if(er=="found"){
															window.location.href="register.php";
															return false;
														}
														else
														{
															alert('Incorrect User id and password !');
															document.getElementById('login_id').value="";	
															document.getElementById('login_id').focus();
														
															return false;
														}
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return false;
	}
	
	
	
	
	
	
	function fill_model(make_code)
	{//alert(make_code);	
		xmlHttp = GetXmlHttpObject();
			
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="../check_email.php?make_code="+make_code+"&act=make_dropdown";    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{
														var er	=	xmlHttp.responseText;
														document.getElementById('model_id').innerHTML=er;														
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return true;
	}
	
	
	
	function fill_model_type(model_code, make_code)
	{
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="../check_email.php?model_code="+model_code+"&make_code="+make_code+"&act=model_type_dropdown";    
		
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{
														var er	=	xmlHttp.responseText;
														document.getElementById('model_type_id').innerHTML=er;														
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return true;
	}
	

	function show_big_image(big_image)
	{
		document.getElementById("big_image_id").innerHTML='<img src="../seller/classified_image/'+big_image+'"  alt="" border="0" class="confirming_bord" />';
		//document.getElementById("big_image_id").src="../seller/classified_image/+big_image";
		//alert(document.getElementById("big_image_id").innerHTML);
		return true;
	}
	
	function show_buyer_big_image(big_image)
	{
		
		document.getElementById("big_image_id").innerHTML='<img src="../seller/classified_image/'+big_image.replace(/small/,"big")+'"  alt="" border="0" class="confirming_bord" />';
		return true;
	}
	
	
	function check_agreement()
	{	//alert(document.getElementById("agr").checked);
		if(document.getElementById("agr").checked==false)
			{
				alert("Please check the agreement!");
				document.getElementById("agr").focus();	
				return false;
			}
		else
			return true;
	}
	
	
	function contact_form_validation()
	{
		var emailValidation = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(document.getElementById("c_form_name").value=="")
			{
				alert("Please Enter Name");
				document.getElementById("c_form_name").focus();	
				return false;
			}
		if(isNaN(document.getElementById("c_form_no").value))
			{
				alert("Please Enter Numeric Value For Contact Number");
				document.getElementById("c_form_no").focus();	
				return false;
			}
		if((document.getElementById("c_form_email").value)=="")
			{
				alert("Please Enter Email Id");
				document.getElementById("c_form_email").focus();	
				return false;
			}
		
		if(document.getElementById("c_form_email").value!="")
		{
			if(!(document.getElementById("c_form_email").value.match(emailValidation)))
			{
			alert("Please enter Valid Email Id.");
			document.getElementById("c_form_email").focus();
			return false;
			}
		}
		
	}
	
	
	
	function check_all()
	{
		var i=0;
		while(document.getElementById('n'+i))
		{
			document.getElementById('n'+i).checked=true;
			i++;
		}
		
	}
	
	
	
	function fill_buymodel(make_code)
	{//alert(make_code);	
		xmlHttp = GetXmlHttpObject();
			
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="check_email.php?make_code="+make_code+"&act=buymake_dropdown";    
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{
														var er	=	xmlHttp.responseText;   
														document.getElementById('model_id').innerHTML=er;	
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return true;
	}
	
	function fill_buymodel_type(model_code, make_code)
	{
		xmlHttp = GetXmlHttpObject();
				
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return false;
		}
		var url="check_email.php?model_code="+model_code+"&make_code="+make_code+"&act=model_type_dropdown";    
		
		xmlHttp.onreadystatechange = function(){ 
													if (xmlHttp.readyState == 4)
													{
														var er	=	xmlHttp.responseText;
														//alert(er);
														document.getElementById('model_type_id').innerHTML=er;	
													} 
											  }// end function
		xmlHttp.open("GET",url, true);
		xmlHttp.send(null);
		return true;
	}
	
	
	function checkserch()
	{
		
		if(document.getElementById("make").value=="")
			{
				alert("Please enter Make Name");
				document.getElementById("make").focus();	
				return false;
			}
			if(document.getElementById("model").value=="")
			{
				alert("Please enter Model Name");
				document.getElementById("model").focus();	
				return false;
			}
			
			if(document.getElementById("city").value=="")
			{
				alert("Please enter city");
				document.getElementById("city").focus();	
				return false;
			}
	}