	
	/*
		File Name:		common_js.js
		Purpose:		to mananage all the javascript
		Project:		gari point
		Created By:		Rajesh Kumar
		Created On:		3 may 2008

		// Update History

		1)
			Last Updated By:
			Last Updated On:
			Updated Function/Class/Block:
	*/
	
	
	var loadingimg = "<img src='../images/loading.gif' border='0'>";
	var xmlHttp;
	
	
	/* 
		Function Name:	check_admin_login_by_ajax()
		Parameters:		none
		Purpose:		to post the value of login form of admin
		Project:		gari point
		Created By:		Rajesh Kumar
		Created On:		3 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function check_admin_login_by_ajax()
	{		
		xmlHttp = GetXmlHttpObject();
		var url,user_name,password1,param;	

		user_name = document.getElementById('user_id').value;
		password1 = document.getElementById('password').value;
		
		if (xmlHttp == null)
		{
			alert ("Browser does not support HTTP Request");
			return;
		} 
		
		param = "user_id="+user_name+"&password="+password1;

		url = "../admin/check_by_ajax.php?&act=check_admin_login";
		
		xmlHttp.onreadystatechange = check_login_status;
		xmlHttp.open("post",url,true);
		xmlHttp.setRequestHeader("Content-type","application/x-www-form-URLencoded");
		xmlHttp.setRequestHeader("Content-length","param.length");
		xmlHttp.setRequestHeader("Connection","close");
		xmlHttp.send(param);		
	}
	
	
	/* 
		Function Name:	check_login_status()
		Parameters:		none
		Purpose:		to check the status of login
		Project:		gari point
		Created By:		Rajesh Kumar
		Created On:		3 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function check_login_status() 
	{ 		
		if(xmlHttp.readyState == 3)
		{
			document.getElementById("error_message").innerHTML = loadingimg + " Login Check..";
			
		}
		if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
		{ 
			if(xmlHttp.responseText != "Success")
			{
				document.getElementById("error_message").innerHTML=xmlHttp.responseText;
				if(document.getElementById('user_id').value == "")
				{
					document.getElementById('user_id').focus();
				}
				else
				{
					document.getElementById("password").value = "";
					document.getElementById("password").focus();
				}
			}
			else
			{
				var current_url = document.getElementById("page_url").value;
				var url_parameter = Array();

				url_parameter = current_url.split("?");
				
				
				url_parameter_length = url_parameter.length;
				
				if( url_parameter_length == 2)
				{
					window.location.href="admin_panel.php"+"?"+url_parameter[1];					
				}
				else
				{
					window.location.href="admin_panel.php";										
				}
			}
		} 
	}

	/* 
		Function Name:	GetXmlHttpObject()
		Parameters:		none
		Purpose:		to get XMLHTTP objects
		Project:		gari point
		Created By:		Rajesh Kumar
		Created On:		2 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function GetXmlHttpObject()
	{
		var xmlHttp = null;
		try
		{
			// Firefox, Opera 8.0+, Safari
			xmlHttp = new XMLHttpRequest();
		}
		catch (e)
		{
			//Internet Explorer
			try
			{
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e)
			{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
		return xmlHttp;
	}

	
	/* 
		Function Name:	expand_collapse_div(div_id)
		Parameters:		div_id
		Purpose:		to change the image of plus and minus and display the div
		Project:		gari point
		Created By:		Dhananjay Kumar
		Created On:		3 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function expand_collapse_div(div_id)
	{
		if(document.getElementById(div_id).style.display=='')
		{
			document.getElementById(div_id).style.display='none';
			//document.getElementById(div_id+'btn').src = "../images/red.gif";
		}
		else
		{
			document.getElementById(div_id).style.display='';
			//document.getElementById(div_id+'btn').src = "../images/blue.gif";
		}
		/*for(var counter=1; counter<6; counter++)
		{			
			if('menu'+counter!=div_id)
			{
				if(document.getElementById('menu'+counter).style.display=='')
				{
					document.getElementById('menu'+counter).style.display='none';
					document.getElementById('menu'+counter+'btn').src='../images/red.gif';
				}
			}
		}*/
	}
	// end of function expand_collapse_div



	/* 
		Function Name:	delete_confirm()
		Parameters:		none
		Purpose:		to delete confimation dialog box
		Project:		gari point
		Created By:		Rajesh Kumar
		Created On:		3 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function delete_confirm()
	{
		if(confirm("Are you sure to delete ?") == true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	// end of function



	/* 
		Function Name:	change_row_color()
		Parameters:		none
		Purpose:		to change row color
		Project:		gari point
		Created By:		Dhananjay Kumar
		Created On:		10 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function change_row_color(id)
	{	
		if(document.getElementById("img_start"+id))
		{
			document.getElementById("img_start"+id).src="../images/veiw.jpg";
		}
		if(document.getElementById("img_first"+id))
		{
			document.getElementById("img_first"+id).src="../images/edit_image.jpg";
		}
		if(document.getElementById("img_second"+id))
		{
			document.getElementById("img_second"+id).src="../images/del_butt.jpg";
		}
		if(document.getElementById("img_third"+id))
		{
			document.getElementById("img_third"+id).src="../images/send_app.jpg";
		}
		if(document.getElementById("img_fourth"+id))
		{
			document.getElementById("img_fourth"+id).src="../images/approve.jpg";
		}
		if(document.getElementById("start_id"+id))
		{
			document.getElementById("start_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("first_id"+id))
		{
			document.getElementById("first_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("second_id"+id))
		{
			document.getElementById("second_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("third_id"+id))
		{
			document.getElementById("third_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("fourth_id"+id))
		{
			document.getElementById("fourth_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("fifth_id"+id))
		{
			document.getElementById("fifth_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("sixth_id"+id))
		{
			document.getElementById("sixth_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("seventh_id"+id))
		{
			document.getElementById("seventh_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("eight_id"+id))
		{
			document.getElementById("eight_id"+id).style.backgroundColor="#C6D9EA";
		}
		if(document.getElementById("span_first_id"+id))
		{
			document.getElementById("span_first_id"+id).className="cate_name_black";
		}
		if(document.getElementById("span_second_id"+id))
		{
			document.getElementById("span_second_id"+id).className="cate_name_black";
		}
	}
	// end of function




	/* 
		Function Name:	change_row_color_original()
		Parameters:		none
		Purpose:		to change row color
		Project:		gari point
		Created By:		Dhananjay Kumar
		Created On:		12 may 2008

		//  Modification History

		1) 

			Updated By:		
			Updated On:		
			Purpose:		

	*/
	function change_row_color_original(id)
	{	
		if(document.getElementById("img_start"+id))
		{
			document.getElementById("img_start"+id).src="../images/veiw1.jpg";
		}
		if(document.getElementById("img_first"+id))
		{
			document.getElementById("img_first"+id).src="../images/editgreen_butt.jpg";
		}
		if(document.getElementById("img_second"+id))
		{
			document.getElementById("img_second"+id).src="../images/delpink_butt.jpg";
		}
		if(document.getElementById("img_third"+id))
		{
			document.getElementById("img_third"+id).src="../images/send_app1.jpg";
		}
		if(document.getElementById("img_fourth"+id))
		{
			document.getElementById("img_fourth"+id).src="../images/approve1.jpg";
		}
		
		if(document.getElementById("start_id"+id))
		{
			document.getElementById("start_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("first_id"+id))
		{
			document.getElementById("first_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("second_id"+id))
		{
			document.getElementById("second_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("third_id"+id))
		{
			document.getElementById("third_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("fourth_id"+id))
		{
			document.getElementById("fourth_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("fifth_id"+id))
		{
			document.getElementById("fifth_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("sixth_id"+id))
		{
			document.getElementById("sixth_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("seventh_id"+id))
		{
			document.getElementById("seventh_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("eight_id"+id))
		{
			document.getElementById("eight_id"+id).style.backgroundColor="";
		}
		if(document.getElementById("span_first_id"+id))
		{
			document.getElementById("span_first_id"+id).className="cate_name_blue";
		}
		if(document.getElementById("span_second_id"+id))
		{
			document.getElementById("span_second_id"+id).className="cate_name_blue";
		}
	}
	// end of function





function check_package_form()
{
	if(document.getElementById("title").value=="")
	{
			alert("Enter Package title!");
			document.getElementById("title").focus();
			return false;
	}
	if(document.getElementById("price").value=="")
	{
			alert("Enter Package price!");
			document.getElementById("price").focus();
			return false;
	}
	/*if(isNaN(document.getElementById("price").value))
	{
			alert("Enter valid price!");
			document.getElementById("price").focus();
			return false;
	}*/
	if(document.getElementById("act_date").value=="")
	{
			alert("Enter Package Activation date!");
			document.getElementById("act_date").focus();
			return false;
	}
	if(document.getElementById("validity_days").value=="")
	{
			alert("Enter Package validity days!");
			document.getElementById("validity_days").focus();
			return false;
	}
	if(document.getElementById("pic_num").value=="")
	{
			alert("Enter number of allowed picture!");
			document.getElementById("pic_num").focus();
			return false;
	}
}



function display_answer(n) 
{ 
	if ((document.getElementById(n).style.display == "") || (document.getElementById(n).style.display == "none")) 
	{ 
		document.getElementById(n).style.display = "block"; 
		document.getElementById(n + "btn").src = "images/collapse.gif";
	}
	else
	{
		document.getElementById(n).style.display = "none"; 
		document.getElementById(n + "btn").src = "images/expand.gif";
	} 
}