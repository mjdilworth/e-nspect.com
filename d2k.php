<? 

error_reporting  (E_ERROR | E_WARNING | E_PARSE); // New syntax for PHP 3/4


if ($run == "true") {
	
	if (empty($name)) {
		$msg = "<b><font size=\"3\" color=\"red\">Please provide a name</font></b>";
	}
	if (empty($email)) {
		$msg = "<b><font size=\"3\" color=\"red\">Please provide your email</font></b>";
	}
	if (empty($company)) {
		$msg = "<b><font size=\"3\" color=\"red\">Please provide your company</font></b>";
	}
	
	if (empty($msg)) {
	//all ok
	$text = "Name : " . $name . "\n\r";
	$text .= "Email : " . $email . "\n\r";
	if (!empty($company)) {$text .=  "Company : " . $company . "\n";};
	if (!empty($address)) {$text .= "Address : " . $address . "\n\r";};
	if (!empty($city)) {$text .= "City : " . $city . "\n\r";};
	if (!empty($state)) {$text .= "State : " . $state. "\n\r";};
	if (!empty($zip)) {$text .= "Zip : " . $zip. "\n\r";};
	if (!empty($country)) {$text .= "Country : " . $country. "\n\r";};
	if (!empty($telephone)) {$text .= "Tel : " . $telephone . "\n\r";};
	
	if ($ver == "e2k") {
		$text1 = "Thank you for downloading e-nspect2000.\n\r";
		$text1 .= "To install e-nspect2000 simply run the setup program and follow the required steps.\n";
		$text1 .= "Detailed installation instructions can be found on the e-nspect web site and it is best to read them.\n\r";
		$text1 .= "For this evaluation version there is no need for any license key.\n\r";
		$text1 .= "This evaluation version will collect data only on 75 messages (or there about).\n\r";
		$text1 .= "If you have any problems or questions please do not hesitate in contacting e-nspect\n\r";
		mail("download@e-nspect.com", "e-nspect2000 download", $text, "From: sales@e-nspect.com\nReply-To: sales@e-nspect.com\nX-Mailer: PHP/" . phpversion());
		mail($email, "e-nspect2000 download", $text1, "From: web@e-nspect.com\nReply-To: mjd@e-nspect.com");
		header ("Location: thanks.php?name=e2k"); 
		exit;

	}
	if ($ver == "e1k") {
		$text1 = "Thank you for downloading e-nspect\n\r";
		$text1 .= "To install e-nspect you will have to unpack the zip file into a directory of your choice.\n";
		$text1 .= "From this directory run the setup program (setup.exe).\n";
		$text1 .= "Follow the simple setup procedure.\n\r";
		$text1 .= "After e-nspect has been installed you will need to configure the program and enter the license key in order for e-nspect to work.\n";
		$text1 .= "Configuration is undertaken by selecting the e-nspect mailbox using the Exchange Server Admin GUI.\n";
		$text1 .= "After you have done the initial configuration remember to select the license button on the configuration page.\n";
		$text1 .= "Using the resulting dialog box, enter the evaluation key provided within this e-mail.\n\r";
		$text1 .= "The provided license key will enable e-nspect to run for 14 days.\n\r";
		$text1 .= "If you have any problems or questions please do not hesitate in contacting e-nspect\n\r";
		$text1 .= "/*-----------------------------*/\n";
		$text1 .= "License key : 1111 5555 3333.\n";
		$text1 .= "/*-----------------------------*/\n";
		mail("download@e-nspect.com", "e-nspect download", $text, "From: sales@e-nspect.com\nReply-To: sales@e-nspect.com\nX-Mailer: PHP/" . phpversion());
		mail($email, "e-nspect download", $text1, "From: web@e-nspect.com\nReply-To: mjd@e-nspect.com");
		header ("Location: thanks.php?name=e1k"); 
		exit;
	}
	if ($ver == "esam") {
		$text1 = "Thank you for downloading the e-nspect Event Sink Administration Module (ESAM).\n\r";
		$text1 .= "To install e-nspect's ESAM run the setup program on your machine.\n";
		$text1 .= "Using the ESAM you have to first connect to a target SMTP server before you can view the installed event sinks.\n\r";
		$text1 .= "The target server has to be running either an Exchange 2000 SMTP, or Windows SMTP instance.\n";
		
		$text1 .= "\n\r";
		$text1 .= "Please remember, the ESAM has help - hit F1 when using the MMC.\n\r";
		
		mail("download@e-nspect.com", "ESAM download", $text, "From: web@e-nspect.com\nReply-To: sales@e-nspect.com\nX-Mailer: PHP/" . phpversion());
		mail($email, "e-nspect ESAM download", $text1, "From: sales@e-nspect.com\nReply-To: sales@e-nspect.com");
		header ("Location: thanks.php?name=esam"); 
		exit;
	}
	if ($ver == "mct") {
		$text1 = "Thank you for downloading e-nspect2000.\n\r";
		$text1 .= "To install e-nspect2000 simply run the setup program and follow the required steps.\n";
		$text1 .= "Detailed installation instructions can be found on the e-nspect web site.\n\r";
		$text1 .= "For the standard evaluation version there is no need for any license key.\n\r";
		$text1 .= "This evaluation version will collect data only on 75 messages (or there about).\n\r";
		$text1 .= "If you are an MCT then you can apply for a special license that will enable you to collect and analyse much more data.\n\r";
		$text1 .= "To request the MCT license send email to mct@e-nspect.com.\n\r";
		$text1 .= "If you have any problems or questions please do not hesitate in contacting e-nspect\n\r";
		mail("download@e-nspect.com", "MCT e-nspect2000 download", $text, "From: sales@e-nspect.com\nReply-To: sales@e-nspect.com\nX-Mailer: PHP/" . phpversion());
		mail($email, "MCT e-nspect2000 download", $text1, "From: web@e-nspect.com\nReply-To: mjd@e-nspect.com");
		header ("Location: thanks.php?name=e2k"); 
		exit;

	}
	
	
	
	
	
	
	}
}
	
?>
<html>
<head>

<style>
DIV.syntax
{
    PADDING-RIGHT: 10px;
    PADDING-LEFT: 10px;
    Z-INDEX: 1;
    PADDING-BOTTOM: 10px;
    MARGIN: 0.5em 1em;
    WIDTH: 100%;
    PADDING-TOP: 10px;
    BACKGROUND-COLOR: #eeeeee
}
</style>
</head>

<body bgcolor=ivory>
<table width="100%" border=0  cellspacing=0 cellpadding=0>
<tr height=7><!--<td width="20" bgcolor=#eeeef0><IMG src="1p.gif"></td>-->
	<td width="20" ><IMG height=10 src="top.gif" width=10></td>
	<td width="20" ><IMG height=10 src="top.gif" width=10></td>
	<td width="20" ><IMG src="1p.gif"></td>
	<td width="20" ><IMG src="1p.gif"></td>
	<td width = "50" rowspan=3><IMG src="logo.jpg" ></td>
	<td  bgcolor=#eeeef0><IMG src="1p.gif"></td>
</tr>
<tr height=7><!--<td  bgcolor=#bbb4d6><IMG src="1p.gif"></td>-->
	<td><IMG height=10 src="mid.gif" width=10></td>
	<td><IMG height=10 src="mid.gif" width=10></td>
	<td><IMG height=10 src="mid.gif" width=10></td>
	<td width="20" ><IMG src="1p.gif"></td>
	
	<td  bgcolor=#bbb4d6><IMG src="1p.gif"></td>
</tr>
<tr height=7><!--<td bgcolor=#9999cc><IMG src="1p.gif"></td>-->
	<td><IMG height=10 src="bot.gif" width=10></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
	
	<td bgcolor=#9999cc><IMG src="1p.gif"></td>
</tr>

	
</table>
<p>

<table border=0 cellspacing=0 cellpadding=2 width="100%">
 <tr>
  <td width="10%" rowspan=2 valign=top></td>
  <td width="5%" valign=center align=middle><IMG height=10 src="top.gif"></td>
  <td width="5%" valign=center align=middle><IMG height=10 src="mid.gif" width=10></td>
  <td width="5%" valign=center align=middle><IMG height=10 src="bot.gif" width=10></td>
  <td width=1 valign=top></td>
  <td valign=top></td>
  <td valign=top></td>
 </tr>
 <tr>
  <td  colspan=6 valign=bottom><IMG src="download.gif"></td>
 </tr>
 <tr >
  <td rowspan=2 valign=top>
  <p>
  <br>
  <ul>
  <a href="index.html"><li><IMG src="home.gif" border=0></a>
  <a href="about.html"><li><IMG src="about.gif" border=0></a>
  <a href="price.html"><li><IMG src="price.gif" border=0></a>
  <a href="contact.html"><li><IMG src="contact.gif" border=0></a>
  <!--<a href="partners.htm"><IMG src="partners.gif" border=0></a>-->
  </ul>
  
  
  
  </td>
  <td rowspan=3 valign=top></td>
  <td colspan=5 valign=top><DIV class="syntax">
  
  <FONT face=Verdana color=navy size=2>
  <b>e-nspect Evaluation Downloads</b>
  <p>
  Please complete the form.  A license key will be delivered to the supplied email address.
  <p>
  <? echo $msg ?>
  <p>
  <form method="POST" action="d2k.php">
  <input type="hidden" name="run" size="10" value="true">
  <input type="hidden" name="ver" size="10" value="<?= $ver; ?>">
  <center>
  <p>
  <table>
	<tr>
		<td><FONT face=Verdana color=navy size=2>Name</td>
		<td> <input type="text" name="name" size="40" value="<?= $name; ?>"></td>
		<td><FONT face=Verdana color=navy size=2>* Required</td>
    </tr>
    <tr>
		<td><FONT face=Verdana color=navy size=2>Company</td>
		<td> <input type="text" name="company" size="40" value="<?= $company; ?>"></td>
		<td><FONT face=Verdana color=navy size=2>*</td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>Address</td>
		<td> <input type="text" name="address" size="40" value="<?= $address; ?>"></td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>City</td>
		<td> <input type="text" name="city" size="20" value="<?= $city; ?>"></td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>State</td>
		<td> <input type="text" name="state" size="20" value="<?= $state; ?>"></td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>Post code</td>
		<td> <input type="text" name="zip" size="10" value="<?= $zip; ?>"></td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>Country</td>
		<td> <input type="text" name="country" size="30" value="<?= $country; ?>"></td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>Telephone</td>
		<td> <input type="text" name="telephone" size="30" value="<?= $telephone; ?>"></td>
	</tr>
	<tr>
		<td><FONT face=Verdana color=navy size=2>e-mail</td>
		<td> <input type="text" name="email" size="30" value="<?= $email; ?>"></td>
		<td><FONT face=Verdana color=navy size=2>*</td>
	</tr>
</table>
</center>
<p>
<input type="submit" value="Submit">
<input type="reset" value="Reset"></p>
</center>
</form>
  </font>
  </DIV></td>
 </tr>
 <tr >
  <td  colspan=5 valign=top ></td>
 </tr>

</table>
</p>
<table width="100%" border=0  cellspacing=0 cellpadding=1>
<tr height=7>
	<td  bgcolor=#eeeef0><IMG src="1p.gif"></td>

	<td width="20" ><IMG src="1p.gif"></td>
	<td width="20" ><IMG src="1p.gif"></td>
	<td width="20" ><IMG height=10 src="top.gif" width=10></td>
	<td width="20" ><IMG height=10 src="top.gif" width=10></td>
</tr>
<tr height=7><!--<td  bgcolor=#bbb4d6><IMG src="1p.gif"></td>-->
	
	<td  bgcolor=#bbb4d6 align=middle><FONT face=Verdana color=navy size=1> © 2002. e-nspect<IMG src="1p.gif"></FONT></td>
	<td width="20" ><IMG src="1p.gif"></td>
	<td><IMG height=10 src="mid.gif" width=10></td>
	<td><IMG height=10 src="mid.gif" width=10></td>
	<td><IMG height=10 src="mid.gif" width=10></td>
</tr>
<tr height=7><!--<td bgcolor=#9999cc><IMG src="1p.gif"></td>-->
	
	<td bgcolor=#9999cc><IMG src="1p.gif"></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
	<td><IMG height=10 src="bot.gif" width=10></td>
</tr>

	
</table>
</body>

</html>
