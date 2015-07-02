<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Virtual Labs</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascript/validation.js" language="javascript"></script>
</head>

<body>
<div align="center">
<div style="width:100%; height:300px; background-image:url(images/bk.jpg); position:absolute">  </div> 
  <div style="width:100%; height:300px; position:absolute">
  <table width="941" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF;">
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
          <td width="538" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" colspan="3" bgcolor="#D3E0E9">&nbsp;</td>
            </tr>
            <tr>
              <td height="38" colspan="3" align="left" class="page_head" style="background-image: url(http://vlab.co.in/images/home_39.jpg); background-repeat:no-repeat; padding-left:20px;">FAQ's:</td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
              <td align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top"><span style="padding-top:2px;">1.</span></td>
              <td align="left" class="bodytext" style="text-align:justify;">
			  <strong>How can I access the Virtual Labs?			  </strong><br />
			  All Virtual Labs can be accessed through a common  website: <a href="http://www.vlab.co.in">www.vlab.co.in</a>.  At the user end, a PC and broadband connectivity enables the user to access  Virtual Labs. </td>
              <td align="left" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td width="7%" align="center">&nbsp;</td>
              <td width="90%" align="left">&nbsp;</td>
              <td width="3%" align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;">2.</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;"><span class="bodytext" style="	
			  text-align:justify;"><strong>How  I can find lab of my interest?</strong><br />
				The  Virtual labs are divided into two categories on the Virtual Labs home page  (www.vlab.co.in)</span><br />
				<ol type="a">
         		  <li>Discipline Wise </li>
                  <li>Institute Wise </li>
                </ol>			</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;">&nbsp;</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">
                <p>The  user can click on any of the categories to find out the lab of his preference.  The user can also search for the virtual labs on the home page itself. There  are two search options:-</p>
                
				<ol type="i">
         		  <li><strong>Search by the name of the Virtual Lab:</strong>  Here the user can type-in the name of the virtual lab of his preference from any institute or Discipline.</li>
                  <li><strong>Search by Discipline:</strong>  Here the user can choose discipline of his preference from the drop down menu. After searching the desired Virtual lab, the user has to make a single click on the link, which would take him to that particular Lab-specific home page. This method of accessing the virtual lab is common to all the Labs available on the vlab.co.in homepage. </li>
                </ol>
               In some of the labs, the user will first have to register prior to conducting the experiments.</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            
            <tr>
              <td align="center" valign="top" style="padding-top:2px;">&nbsp;</td>
              <td align="left" valign="top" class="bodytext">&nbsp;</td>
              <td align="left" valign="top" class="bodytext">&nbsp;</td>
            </tr>
            <tr>
              <td height="66" align="center" valign="top" style="padding-top:2px;">3.</td>
              <td height="66" align="left" valign="top" class="bodytext"><strong>Is it  free to use?</strong><br />
                Yes,  it is free of cost to the user.<br /></td>
              <td align="left" valign="top" class="bodytext">&nbsp;</td>
            </tr>
            <tr>
              <td height="110" align="center" valign="top" style="padding-top:2px;">4.</td>
              <td height="110" align="left" valign="top" class="bodytext" style="text-align:justify;"><strong>What  are the software requirements for Virtual Labs?</strong><br />
                Download  Links for all the software required to use the labs are provided on each lab&rsquo;s  homepage (wherever required). All the relevant software is free to download and  information on how to download, install and use the software is also provided.<br /></td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top" style="padding-top:2px;">&nbsp;</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top" style="padding-top:2px;">5.</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;"><strong>What are the various types of Virtual Labs?</strong><br />
			  There are two types of Virtual Labs:<br />
			  <p><strong>Simulation  Based Virtual Labs:</strong>&nbsp; In these Virtual Labs, the  experiments are modeled using mathematical equations.&nbsp; The simulations are carried out remotely at a  high end server, and the results are communicated to the student over the  internet.&nbsp; This class of Virtual Labs, at  best, mimics the real-world scenarios/experiments.&nbsp; Simulation based Virtual Labs are scalable  and can cater to a large number of simultaneous users.</p>
			  <p><strong>Remote  Triggered Virtual Labs: </strong>In these Virtual Labs, the actual experiments  are triggered remotely.&nbsp; The output of the  experiment (being conducted remotely) is communicated back to the student over  the internet.&nbsp; This class of Virtual  Labs, gives the student the output of real-time experiments.&nbsp; Remote Triggered Virtual Labs are difficult  to scale and can cater to a limited number of users.&nbsp; Typically, time-slots are booked before  conducting such experiments.</p>			  </td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td height="10" align="center" valign="top" style="padding-top:2px;"></td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;"></td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;"></td>
            </tr>
            <tr>
              <td height="132" align="center" valign="top" style="padding-top:2px;">6.</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;"><strong>When  can we use the Virtual Labs?</strong> <br />
                Virtual  Labs are divided into two categories, namely remote triggered labs and the simulation  based labs.&nbsp; For the remote triggered  labs, the user can use them as per the time mentioned on the website. &nbsp;The simulation based labs are available 24x7  including weekends.<br />              </td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-top:2px;">7.</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;"><span class="bodytext" style="text-align:justify;"><strong>What do I do if I am stuck?</strong></span><br />
                <span class="bodytext" style="text-align:justify;">The  users can email their queries to the virtual labs support team at&nbsp;support@vlab.co.in. &nbsp;Also, one can call directly on the hotline  number 011-64674687 for help.<br />
                </span></td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top" style="padding-top:2px;">&nbsp;</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;">8.</td>
              <td height="30" align="left" valign="top" class="bodytext" style="text-align:justify;"><strong>How do I register for using the Virtual Labs?</strong> <br />
                  As mentioned earlier, Virtual Labs are divided into two categories:  simulation based labs and remote triggered labs.  Registration requirements are different for the two categories.
                <ol type="A">
                    <li><strong>Simulation based Labs:</strong>  Many of the simulation based labs do not require registration. You
					 can directly perform the experiment without registering yourself. On the other hand, some of the simulation 
					 virtual labs require registration for which the user can go to the respective website do a one-time 
					 registration.<br /> <br />
                    </li>
                  <li><strong>Remote Triggered Labs: </strong>To access a remote triggered lab, a user has to book a slot. For 
				  booking a slot, you have to register yourself first and then book a slot from the slot chart.  All the available 
				  /booked slots can be viewed on this chart.  Once a request for slot-booking is made, all the information 
				  regarding the user id, password and the slot booked will be sent to the user’s email address provided by the user
				  at the time of registration. Once registered, a user can login using the same credentials every time. This 
				  registration has to be done by the user separately for each of the remote triggered virtual labs.				  </li>
                </ol>				</td>
              <td align="left" valign="top" class="bodytext" style="text-align:justify;">&nbsp;</td>
            </tr>
            <tr>
              <td height="10" align="center"></td>
              <td height="10" align="left"></td>
              <td align="left"></td>
            </tr>
            <tr>
              <td height="20" align="center" valign="top">9.</td>
              <td height="25" align="left" class="bodytext" style="text-align:justify;"><strong>How do I derive the maximum benefit
			   from Virtual Labs?</strong><br />
			   In order to derive maximum learning experience, the users are advised to first read all the instructions for 
			   conducting the labs. There are 'step-by-step' instructions available in each lab to assist the users.			   </td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center" valign="top">10.</td>
              <td height="25" align="left" class="bodytext" style="text-align:justify;"><strong>I already have a Physical Lab in my 
			  college/institute.  What benefit will Virtual Lab provide?</strong><br />
			  Virtual Lab is a complete Learning Management System. All the relevant information including the theory, lab-manual, 
			  additional web-resources, video-lectures, animated demonstrations and self-evaluation are available at a common 
			  place.  Virtual Labs can be used in a complementary fashion to augment the efficacy of theory-based lectures.  Small 
			  projects can also be carried out using some of the Virtual Labs.  Virtual Labs can be effectively used to give 
			  lab-demonstrations to large classes.			  </td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" colspan="3" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" colspan="3" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
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
</body>
</html>

