<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Virtual Labs</title>
<script language="JavaScript1.0" src="javascript/templatemo_image_fader.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script language="javascript">
function show_hide_instruction_div(location_div)
{
	var left = (screen.width/2) - 250;
	document.getElementById("instruction_div").style.left = left + "px";
	if(document.getElementById("instruction_div").style.display == "none")
	{
		document.getElementById("instruction_div").style.display = "block";
	}
	else
	{
		document.getElementById("instruction_div").style.display = "none";
	}
}
</script>
</head>

<body>
<div id="instruction_div" class="instruction_div search_text_link" style="display: none; position: absolute;z-index: 999;padding:2px;">
	<div style="float: right;"><img src="./images/close.png" onClick="return show_hide_instruction_div(this); " style="cursor: pointer;" alt="close" title="Close"></div>
	<table class="search_text_link" cellspacing="5" cellpadding="5">
		<tr><td></td></tr>
		<tr>
			<td style="font-weight: bold;">1. In order to derive maximum learning experience, the users are advised to first read the instructions for conducting the labs.  There are 'step-by-step' instructions available in each lab to assist the users.</td>
		</tr>
		<tr>
			<td style="font-weight: bold;">2. Some of the labs require the users to log in first.  Eventually, there will be a common login for all labs.</td>
		</tr>
	</table>
</div>
<div align="center">
<div style="width:100%; height:300px; background-image:url(images/bk.jpg); position:absolute">  </div> 
  <div style="width:100%; height:300px; position:absolute">  <table width="941" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF;">
  <tr><td>
 <table width="941" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF;">
    


    <tr>
      <td width="500" rowspan="2" align="left" valign="top">
	  	  <div style="background-image:url(images/logo.jpg); background-repeat:no-repeat; width:497px; height:84px;cursor: pointer;" onClick="window.location.href='index.php';">
	  <div style="margin:15px 0px 0px 85px; padding:6px 0px 0px 0px; font:bold 23px Arial;">VIRTUAL LABS</div>
	  	  <div style="margin:10px 0px 0px 83px; color:#0864a7; font:bold 13px Arial;">An Initiative of Ministry of Human Resource Development (MHRD)<br />
		  Under the National Mission on Education through ICT</div>
	  </div>
	  	  </td>
      <td width="441" ><div align="right"><a href="index.php"><img src="images/home_03.jpg" alt="" width="23" height="25" border="0" /><img src="images/home_04.jpg" alt="" width="73" height="25" border="0" /></a></div></td>
    </tr>
    <tr>
      <td height="83" valign="bottom" style="padding-bottom:9px;">
	  	<!--<form method="post" action="search.php" style=" padding:0px; margin:0px;" onsubmit="return chk_login();" >-->
				<form method="post" action="search.php" style=" padding:0px; margin:0px;" onsubmit="return check_search();" name="search_form">
				
			<!-- search table start -->
			 	
	<table width="440" height="58" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="400" colspan="2" align="right" style="background-image:url(images/search.jpg);padding-top:5px; " >
		  <table width="420" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="64" align="left" class="searchtitle">&nbsp;</td>
              <td width="145" height="21" align="left" class="searchtitle">Name of Lab</td>
              <td width="144" align="left" class="searchtitle">Broad Area </td>
              <td width="66">&nbsp;</td>
            </tr>
            <tr valign="top">
              <td>&nbsp;</td>
              <td height="23" align="left"><input name="expe" id="expe" type="text" class="searchtextbox" style="width:110px;" value=""></td>
              <td align="left"><select name="cat" class="searchdd">
		<option value="0">Any</option><option value="1"  >Electronics & Communications</option><option value="2"  >Computer Science & Engineering</option><option value="3"  >Electrical Engineering</option><option value="4"  >Mechanical Engineering</option><option value="5"  >Chemical Engineering</option><option value="6"  >Biotechnology and Biomedical Engineering</option><option value="7"  >Civil Engineering</option><option value="8"  >Physical Sciences</option><option value="9"  >Chemical Sciences</option>		</select>  </td>
		 <td align="center" valign="middle"><input type="hidden" name="s_submit" value="submit" /><a href="javascript:void(0);" onClick="document.search_form.submit();" style=" text-decoration:none; color: white; font-family: Arial;font-size: 12px;">Search</a></td>
            </tr>
			<input type="hidden" name="ins" value="">
          </table>
		  
	 
			<!-- search table end --></td>
        </tr>
      </table>
		</form></td>
    </tr>
    <tr>
      <td colspan="2" align="right" style="background-color:#8ed9f8;"><img src="images/home_19.jpg" width="115" height="9" alt="" /></td>
    </tr>
    <tr>
      <td colspan="2">
	  <div id="fadeshow1"></div>


	  </td>
    </tr>
    <tr>
      <td colspan="2" style="background-image:url(images/home_25.jpg);" align="left"><img src="images/home_24.jpg" width="191" height="12" alt="" /></td>
    </tr>


  </table>

</td></tr>
    
    <tr>
      <td colspan="2" style="background-image: url(images/home_143.jpg); background-repeat:no-repeat; background-position:bottom right;"><table width="941" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1" style="background-color:#D9E0DD;"><img src="images/home_27.jpg" width="1" height="37" alt="" /></td>
          <td width="205" valign="top"><table width="205" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="36" colspan="2" align="left" class="lefthead" style="background-image:url(images/home_38.jpg); background-repeat:no-repeat; background-position:bottom; padding-left:12px;">PARTICIPATING INSTITUTES</td>
            </tr>
            <tr>
              <td height="12" colspan="2"></td>
              </tr>
            <tr>
              <td width="57" align="center"><img src="images/home_50.jpg" width="50" height="48" alt="" /></td>
              <td width="148" align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=001" class="uni_name">IIT  DELHI</a></div></td>
            </tr>
			<tr align="center">
              <td height="8" colspan="2"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_56.jpg" width="50" height="48" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=003" class="uni_name">IIT  BOMBAY</a></div></td>
            </tr>
            <tr align="center">
              <td height="8" colspan="2"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_66.jpg" width="50" height="47" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=002" class="uni_name">IIT  KANPUR</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_75.jpg" width="50" height="48" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=004" class="uni_name">IIT  KHARAGPUR</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_82.jpg" width="50" height="47" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=005" class="uni_name">IIT  MADRAS</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_86.jpg" width="50" height="42" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=006" class="uni_name">IIT  ROORKEE</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_92.jpg" width="50" height="44" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=007" class="uni_name">IIT  GUWAHATI</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/iiith_logo.jpg" width="50" height="51" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=008" class="uni_name">IIIT  HYDERABAD</a></div></td>
            </tr>
			<tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_109.jpg" width="50" height="52" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=009" class="uni_name">AMRITA  UNIVERSITY</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/dayalbagh.jpg" width="50" height="46" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=010" class="uni_name">DAYALBAGH UNIVERSITY</a></div></td>
            </tr>
			<tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/nitk_logo.jpg" width="50" height="46" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=011" class="uni_name">NIT KARNATAKA</a></div></td>
            </tr><tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/ceo_pune.jpg" width="50" height="46" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=012" class="uni_name">COE PUNE</a></div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              </tr>
          </table>
		  </td>
          <td width="1" style="background-color:#D8D8D8;"><img src="images/spacer.gif" width="1" height="1" /></td>
          <td width="538" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
			<tr>
              <td height="20" colspan="2" align="left" valign="top" class="page_subhead_ba" style="font-size: 18px;padding-left:20px; padding-right:5px; ">Labs Ready For Use</td>
            </tr>
			<tr>
              <td height="25" colspan="2" align="right" valign="top" class="search_text_link" style="padding-left:20px; padding-right:5px; background-image:url(images/home_122.jpg); background-repeat:no-repeat;">&nbsp;<a href="javascript: void(0);" onClick="return show_hide_instruction_div(this);" class="page_subhead_ba">Instructions</a></td>
            </tr>
			<tr>
              <td height="20" colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td height="10" colspan="2" align="left">
				<table width="527" border="0" cellspacing="0" cellpadding="0">
				
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba1" class="page_head_gray">Electronics & Communications</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba2" class="page_head_gray">Computer Science & Engineering</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba3" class="page_head_gray">Electrical Engineering</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba4" class="page_head_gray">Mechanical Engineering</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba5" class="page_head_gray">Chemical Engineering</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba6" class="page_head_gray">Biotechnology and Biomedical Engineering</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba7" class="page_head_gray">Civil Engineering</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba8" class="page_head_gray">Physical Sciences</a></strong></td>
						</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; "><strong ><a href="#ba9" class="page_head_gray">Chemical Sciences</a></strong></td>
						</tr>
				<tr>
					<td colspan="3"><br><br></td>
				</tr>
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba1"><strong >Electronics & Communications</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://evalidate.freehostia.com/index.html" target="_blank"  >
						Virtual Advanced Lab for Interactive Design and Test in Electronics</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;DAYALBAGH --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://websupplements.net/projects/virtual_labs/" target="_blank"  >
						Virtual Microwave Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;DAYALBAGH --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://118.102.191.41/clicks/click.php?id=5" target="_blank"  >
						Virtual Wireless Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT DELHI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://118.102.191.41/clicks/click.php?id=10" target="_blank"  >
						Engineering Electro-magnetics Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT DELHI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://qnm-iitd.vlabs.ac.in/" target="_blank"  >
						Queuing Networks Modelling Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT DELHI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitd.vlab.co.in/?sub=65&brch=183" target="_blank"  >
						Virtual Microwave & Antenna Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT DELHI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://coep.vlab.co.in/?sub=28&brch=81" target="_blank"  >
						Hybrid electronics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://www.iitk.ac.in/mimt_lab/vlab/index.php" target="_blank"  >
						RF and Microwave Characterization Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://202.3.77.143/virtuallab/" target="_blank"  >
						Transducer and instrumentation virtual lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://www.co-learn.in/web_sbhs/" target="_blank"  >
						Single Board Heater System</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://59.181.142.81/" target="_blank"  >
						Electronic design using DSP,FPGA,CPLD and Micro controllers through simulation and direct access of the hardware</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://www.digital.iitkgp.ernet.in/dec/index.php" target="_blank"  >
						Digital Electronic Circuits Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://www.digital.iitkgp.ernet.in/dsp/" target="_blank"  >
						Digital Signal Processing Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://203.110.240.139/" target="_blank"  >
						Fading Channels and Mobile Communications</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://basicelectronics.iitkgp.ernet.in/" target="_blank"  >
						Basic Electronics</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=59&brch=163" target="_blank"  >
						Systems, Communication and Control Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=59&brch=164" target="_blank"  >
						Speech Signal Processing Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=59&brch=165" target="_blank"  >
						Digital VLSI Design Virtual lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=59&brch=166" target="_blank"  >
						Signals and Systems Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=59&brch=269" target="_blank"  >
						Remote Triggered Fiber Optics Communication Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://emt-iiith.vlabs.ac.in" target="_blank"  >
						Electromagnetic Theory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=75" target="_blank"  >
						Virtual Electric Circuits Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba2"><strong >Computer Science & Engineering</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse04-iiith.virtual-labs.ac.in" target="_blank"  >
						Problem Solving</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse30-iiith.virtual-labs.ac.in" target="_blank"  >
						Analog CMOS VLSI Circuit Design</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://virtual-labs.ac.in/labs/cse12/" target="_blank"  >
						FPGA & Embedded systems lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse.iitkgp.ac.in/~rkumar/pds-vlab/" target="_blank"  >
						Programming & Data Structures</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse10-iitkgp.virtual-labs.ac.in" target="_blank"  >
						Computer Architecture & organization </a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://virtual-labs.ac.in/cse28/" target="_blank"  >
						Advanced Network Technologies</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://virtual-labs.ac.in/cse08/" target="_blank"  >
						Software Engineering Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse01-iiith.vlabs.ac.in" target="_blank"  >
						Data Structures</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse02-iiith.vlabs.ac.in" target="_blank"  >
						Computer Programming Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse05-iiith.virtual-labs.ac.in" target="_blank"  >
						Principles of Programming Languages</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse06-iiith.virtual-labs.ac.in" target="_blank"  >
						Data Mining</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse07-iiith.virtual-labs.ac.in" target="_blank"  >
						Databases</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse09-iiith.virtual-labs.ac.in" target="_blank"  >
						Linux Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse11-iiith.vlabs.ac.in" target="_blank"  >
						Computer Organization</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse14-iiith.vlabs.ac.in" target="_blank"  >
						VLSI</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse15-iiith.vlabs.ac.in" target="_blank"  >
						Digital Logic Design</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse16-iiith.virtual-labs.ac.in" target="_blank"  >
						Speech Signal Processing</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse17-iiith.virtual-labs.ac.in" target="_blank"  >
						Mobile Robotics</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse18-iiith.vlabs.ac.in" target="_blank"  >
						Computer Graphics</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse19-iiith.vlabs.ac.in" target="_blank"  >
						Image Processing</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse20-iiith.vlabs.ac.in" target="_blank"  >
						Pattern Recognition</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse21-iiith.virtual-labs.ac.in" target="_blank"  >
						Optical Remote Sensing</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse22-iiith.vlabs.ac.in" target="_blank"  >
						Artificial Neural Networks</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse23-iiith.virtual-labs.ac.in" target="_blank"  >
						Computational Linguistics</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse24-iiith.virtual-labs.ac.in" target="_blank"  >
						Natural Language Processing</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse13-iiith.virtual-labs.ac.in" target="_blank"  >
						Virtual Advanced VLSI Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://cse29-iiith.vlabs.ac.in" target="_blank"  >
						Cryptography Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba3"><strong >Electrical Engineering</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://103.37.201.114/" target="_blank"  >
						Electrical Machines Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT ROORKEE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=61&brch=293" target="_blank"  >
						Remote Triggered Electromechanical Conversion Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://sl-coep.vlabs.ac.in/" target="_blank"  >
						Sensors Modeling & Simulation</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ial-coep.vlabs.ac.in/" target="_blank"  >
						Industrial Automation Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://plc-coep.vlabs.ac.in/" target="_blank"  >
						PLC</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://vlab-ee1.iitkgp.ernet.in" target="_blank"  >
						Virtual High Voltage lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitkgp.vlab.co.in/?sub=39&brch=124" target="_blank"  >
						Analog Signals, Network and Measurement Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitkgp.vlab.co.in/?sub=39&brch=125" target="_blank"  >
						Real Time Embedded Systems Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://vem-iitg.vlabs.ac.in" target="_blank"  >
						Electrical Machines Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=72&brch=170" target="_blank"  >
						Creative Design, Prototyping & Experiential Simulation Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ergonomics-iitg.vlabs.ac.in" target="_blank"  >
						Ergonomics Lab for Assessing Physical Aspects of Design</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ve-iitg.vlabs.ac.in" target="_blank"  >
						Virtual English and Communication Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://anthropology-iitg.virtual-labs.ac.in" target="_blank"  >
						Virtual Anthropology Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=61&brch=174" target="_blank"  >
						Electronic instrumentation</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba4"><strong >Mechanical Engineering</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://mrmsmtbs-iitk.vlabs.ac.in" target="_blank"  >
						Material Response to Microstructural, Mechanical, Thermal and Biological Stimuli</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://msvs-dei.vlabs.ac.in/" target="_blank"  >
						Metal Forming Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;DAYALBAGH --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://mm-nitk.vlabs.ac.in/" target="_blank"  >
						Mechanics of machine Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;NIT KARNATAKA --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://mdmv-nitk.vlabs.ac.in/" target="_blank"  >
						Machine Dynamics & Vibration Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;NIT KARNATAKA --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://va-coep.vlabs.ac.in/" target="_blank"  >
						Vibration and Acoustics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://mm-coep.vlabs.ac.in/" target="_blank"  >
						Micromachining laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://fab-coep.vlabs.ac.in/" target="_blank"  >
						FAB laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://gssl.iitk.ac.in/pssl/" target="_blank"  >
						General Purpose Production Shop Simulation Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://202.3.77.50/~opticalv/interferometry/" target="_blank"  >
						Laser Based Flow Diagnostics Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://www.iitk.ac.in/biomaterialslab/virtuallab.html" target="_blank"  >
						Nanocomposite, Fabrication and Biomaterials & Signal Processing Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://vcal-iitk.vlabs.ac.in" target="_blank"  >
						Virtual Combusion and Automisation Laboratory</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitkgp.vlab.co.in/?sub=40&brch=137" target="_blank"  >
						Mine Automation and Virtual Reality</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=62" target="_blank"  >
						Virtual Labs on Mechanical Vibrations</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba5"><strong >Chemical Engineering</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://uorepc-nitk.vlabs.ac.in/" target="_blank"  >
						Process Control, Reaction Engineering and Unit Operations Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;NIT KARNATAKA --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitb.vlab.co.in/?sub=8&brch=116" target="_blank"  >
						Chemical Engineering</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitb.vlab.co.in/index.php?sub=8&brch=117" target="_blank"  >
						Simulation of Control of Magnetic Levitation System</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitg.vlab.co.in/?sub=58" target="_blank"  >
						Virtual Lab for Mass Transfer</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT GUWAHATI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba6"><strong >Biotechnology and Biomedical Engineering</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=273" target="_blank"  >
						Bioinformatics Virtual Lab I</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=274" target="_blank"  >
						Bioinformatics Virtual Lab II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=275" target="_blank"  >
						Bioinformatics Virtual Lab III</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=276" target="_blank"  >
						Systems Biology Virtual Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=277" target="_blank"  >
						Computer-Aided Drug Design Virtual Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=272" target="_blank"  >
						Ecology Virtual Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=278" target="_blank"  >
						Biological Image processing Virtual Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=257" target="_blank"  >
						Bio-inspired Robotics Virtual Lab (Remote Trigger)</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/index.php?sub=3&brch=258" target="_blank"  >
						Virtual Biophysics Lab (Remote Trigger)</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitd.vlab.co.in/?sub=63" target="_blank"  >
						Bioreactor Modeling & Simulation lab </a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT DELHI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://bmsp-coep.vlabs.ac.in/" target="_blank"  >
						Biomedical and Signal processing Laboratory </a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;COE PUNE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitb.vlab.co.in/?sub=41&brch=118" target="_blank"  >
						Virtual Proteomics  Laboratory </a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://103.37.201.113/vlab" target="_blank"  >
						Biomedical Instrumentation Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT ROORKEE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://103.37.201.113/vlab" target="_blank"  >
						Medical Signal & Image Processing</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT ROORKEE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=43" target="_blank"  >
						Neurophysiology (pilot)</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=212" target="_blank"  >
						Neuron Simulation Lab (pilot)</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=63" target="_blank"  >
						Biochemistry Virtual Lab I	</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=64" target="_blank"  >
						Biochemistry Virtual Lab II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://pev-au.vlabs.ac.in" target="_blank"  >
						Population Ecology I</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://pevii-au.virtual-labs.ac.in" target="_blank"  >
						Population Ecology II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=69" target="_blank"  >
						Immunology Virtual Lab I</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=70" target="_blank"  >
						Immunology Virtual Lab II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=73" target="_blank"  >
						Microbiology Virtual Lab I</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=76" target="_blank"  >
						Microbiology Virtual Lab II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=77" target="_blank"  >
						Molecular biology Virtual Lab I</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=186" target="_blank"  >
						Molecular Biology Virtual Lab II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=187" target="_blank"  >
						Cell Biology Virtual Lab I</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=3&brch=188" target="_blank"  >
						Cell Biology Virtual Lab II</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba7"><strong >Civil Engineering</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://eerc01-iiith.vlabs.ac.in" target="_blank"  >
						Strength of Materials Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://eerc03-iiith.vlabs.ac.in" target="_blank"  >
						Fluid Mechanics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://eerc02-iiith.virtual-labs.ac.in" target="_blank"  >
						Soil Mechanics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://eerc04-iiith.virtual-labs.ac.in" target="_blank"  >
						Basic Structural Analysis Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://eerc05-iiith.virtual-labs.ac.in" target="_blank"  >
						Geotechnical Engineering</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://vssd-iitd.vlabs.ac.in/" target="_blank"  >
						Virtual Smart Structures and Dynamics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT DELHI --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://civil11.virtual-labs.ac.in/siplabs/" target="_blank"  >
						Virtual Satellite Image Processing & Analysis Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://deploy.virtual-labs.ac.in/labs/civil13/" target="_blank"  >
						Urban Transportation Systems Planning Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT BOMBAY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://www.sctie.iitkgp.ernet.in" target="_blank"  >
						Soft Computing Tools in Engineering</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KHARAGPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://vlabcivil-iitr.co.in/" target="_blank"  >
						Surveying Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT ROORKEE --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba8"><strong >Physical Sciences</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://iitk.vlab.co.in/index.php?sub=27&brch=236" target="_blank"  >
						Virtual Laboratory on Oscillations</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIT KANPUR --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://phy14-iiith.vlabs.ac.in" target="_blank"  >
						Physical Sciences</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=281" target="_blank"  >
						Virtual Optics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=282" target="_blank"  >
						Solid State Physics Virtual Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=74" target="_blank"  >
						Virtual Advanced Mechanics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=189" target="_blank"  >
						Laser Optics Virtual Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=192" target="_blank"  >
						Virtual Electricity & Magnetism Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=194" target="_blank"  >
						Virtual Heat & Thermodynamics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=195" target="_blank"  >
						Virtual Modern Physics Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=1&brch=201" target="_blank"  >
						Virtual Harmonic Motion and Waves Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
									
						<tr>
							<td nowrap colspan="3" align="left" class="page_head" style="padding-left:20px; padding-right:5px; " id="ba9"><strong >Chemical Sciences</strong></td>
						</tr>					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://220.227.100.58" target="_blank"  >
						Analytical Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;DAYALBAGH --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://180.149.53.48/vlab/" target="_blank"  >
						Virtual Chemistry Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;DAYALBAGH --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://csc-iiith.vlabs.ac.in/" target="_blank"  >
						Colloid and Surface Chemistry</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ccnsb03-iiith.virtual-labs.ac.in" target="_blank"  >
						Molecular Absorption Spectroscopy</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ccnsb05-iiith.virtual-labs.ac.in" target="_blank"  >
						Circular Dichroism Spectroscopy</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ccnsb07-iiith.virtual-labs.ac.in" target="_blank"  >
						Molecular Interactions</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://ccnsb06-iiith.vlabs.ac.in" target="_blank"  >
						Physical Chemistry Lab</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;IIIT HYDERABAD --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=2&brch=190" target="_blank"  >
						Physical Chemistry</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=2&brch=191" target="_blank"  >
						Organic Chemistry</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
						<td align="left" valign="top" class="uni_name">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" id="vrlinks"><div style="padding-left:20px"><a href="http://amrita.vlab.co.in/?sub=2&brch=193" target="_blank"  >
						Inorganic Chemistry</a></div>
						<!--<td align="left" valign="top" class="uni_name" style="font-size: 12px;"> &nbsp;AMRITA UNIVERSITY --></td>
					</tr>
					<tr id="" style="display:none;">
						<td colspan="3"></td>
					</tr>
										<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
													<tr>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
				<tr>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>


              </table></td>
            </tr>
            <tr>
              <td colspan="2" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
            </tr>
            
            
            <tr>
              <td height="20" colspan="2" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
            </tr>
          </table></td>
          <td width="8" valign="bottom" style="background-image:url(images/home_31.jpg); background-repeat:repeat-y;"><img src="images/blue_bar.jpg" width="9" height="14" /></td>
          <td width="203" align="center" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="15"></td>
            </tr>
            
            <tr>
              <td height="21" class="announce_head" style="background-image:url(images/home_78.jpg); background-repeat:no-repeat;">Announcements</td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td align="center"><table width="181" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="images/home_46.jpg" width="181" height="8" alt="" /></td>
                </tr>
                <tr>
                  <td align="left" class="bord" style="padding-left:3px; padding-right:3px;">
					<marquee id="scroll_news" direction="up" scrollamount="2">
					<div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
				
				  				  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/feedback.html">1. Click here for the Lab Feedback Form</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="https://www.youtube.com/watch?v=mVBYNXLaDdg"> 2. Visit for Virtual Labs on YouTube</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/Registration.html">3. Click here for NCs Registration</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/loginform.html">4. Click here for NCs Login</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/login.html">5. Click here for VLab Team Login</a>.                    </span><br /><br />
													
				</div>		</td>
                </tr>
                <tr>
                  <td><img src="images/home_74.jpg" width="181" height="7" alt="" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td><img src="images/home_107.jpg" width="186" height="3" alt=""></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td align="center"><!-- <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="182" height="159">
                <param name="movie" value="../images/left_lab.swf" />
                <param name="quality" value="high" />
                <embed src="../images/left_lab.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="182" height="159"></embed>
              </object> 
			  --> <script type="text/javascript">

				new fadeshow(fadeimages, 182, 159, 0, 3000, 0, "R")
 
                  </script></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" id="vrlinks_right_panel"><div id="fontred" onclick="window.open('http://118.102.191.38/feedback/feedback.html','_blank')" style="margin-left:15px;cursor:pointer">LAB FEEDBACK FORM</div></td>
                </tr>

				<tr>
                  <td align="left" id="vrlinks_right_panel"><div><a href="faq.php" class="sifeatures">FAQ</a></div></td>
                </tr>

                <tr>
                  <td align="left" id="vrlinks_right_panel"><div><a href="http://www.sakshat.ac.in" class="sifeatures" target="_blank">SHAKSHAT PORTAL</a></div></td>
                </tr>
               
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><img src="images/home_107.jpg" width="186" height="3" alt="" /></td>
            </tr>
            <tr>
              <td align="left" class="contcthead">Contact Us</td>
            </tr>
            <tr>
              <td height="10" align="left" valign="middle"><img src="images/home_107.jpg" width="186" height="3" alt="" /></td>
            </tr>
            <tr>
              <td align="left" valign="top" class="bodytext"><a href="mailto:support@vlab.co.in" class="mail">support@vlab.co.in</a></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
</td>
        </tr>
      </table></td>
    </tr>
    <tr>
   <td height="18" colspan="100%" width="100%" bgcolor="#a7c0d4">&nbsp;	</td>
</tr>
<tr>
   <td height="15" colspan="100%" width="100%" bgcolor="#356ba1" align="center"><span style="color:#a7c0d4; display:block; float:left; padding-left:10px">This work is licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0" class="white"  target="_blank"><strong>Creative Commons (CC-BY-NC-SA-3.0)</strong></a></span>
   <span style="display:block; float:right; padding-right:10px"> <a href="disclaimer.php" class="white" ><strong>Disclaimer</strong></a> </span>
   
    </td>
</tr>

	<style>
	
	a.white:link, a.white:visited, a.white:active{ color:#a7c0d4; text-decoration:none;}
	a.white:hover{color:#ffffff;}
	</style>
	
	<script>
		function chk_login()
		{
			if('')
			{
				return true;
			}
			else
			{
				alert('Please login to make a search.');
				return false;
			}
		}
	</script>    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</div>
<script> 
function changedisplay(divid)
{
//alert(divid);
	
if(document.getElementById(divid).style.display=='none')
{
document.getElementById(divid).style.display='';	
}
else
{
document.getElementById(divid).style.display='none';	
}
return true;
}</script>
</body>
</html>
