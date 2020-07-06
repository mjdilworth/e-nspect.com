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
	$text1 = "Thank you for downloading SQLCache\n\r";
	$text1 .= "To install SQLCache simply run the file you downloaded and follow the instructions\n";
	
	$text1 .= "This version of SQLCache is fully functional and will operate for 7 days, after which time it will cease to cache any data\n\r";
	$text1 .= "If you have any problems or questions please do not hesitate in contacting SQLCache\n\r";
	
	mail("download@SQLCache.com", "download", $text, "From: web@sqlcache.com\nReply-To: sales@sqlcache.com\nX-Mailer: PHP/" . phpversion());
	mail($email, "SQLCache evaluation", $text1, "From: web@sqlcache.com\nReply-To: sales@sqlcache.com");
	header ("Location: thanks.htm"); 
	exit;
	
	
	
	}
}
	
?>
<head>
<LINK REL="stylesheet" MEDIA="SCREEN" TYPE="text/css" HREF="mailto.css">
<LINK REL="stylesheet" MEDIA="SCREEN" TYPE="text/css" HREF="coUA_Ex.css">
<meta NAME="keywords"
CONTENT="database, web, www, ADO, ASP, script, SQL, dynamic, performance, microsoft, accelerate, develop, software,
high, site, portal, internet, COM, component, connection, server, string" >
<meta name="description"
CONTENT="SQLCache: high performance COM component to accelerate your dynamic ADO ASP web pages. Increase the processing
capacity of your web and database servers using your existing code.">
<META NAME="Copyright" CONTENT="sqlcache.com">
<META NAME="Distribution" CONTENT="Global">
<META NAME="Rating" CONTENT="General">
<META NAME="Robots" CONTENT="All">
<META NAME="Revisit-After" CONTENT="30 Days">
<LINK REV=made href="mailto:info@sqlcache.com">
</HEAD>
<BODY>
<! -- database web www ADO ASP script SQL dynamic performance microsoft accelerate develop software
high site portal internet COM component connection server string  -->

<div id="nsbanner" class="nsbanner">
<div id="bannerrow2" class="bannerrow2">
<TABLE CLASS="buttonbartable" CELLSPACING=0>
	<TR ID="hdr" NOWRAP>
		<TD width=95 NOWRAP><IMG height=10 src="spacer.gif" width=20><a href="index.html" target="_top"><IMG src="main.gif"></a></TD>
		<TD NOWRAP>SQLCache</TD>
	</TR>
</TABLE>
</div>
</div>

<DIV id="nstext" valign="top">
<p>
<H1 class="relnotes">You can contact <i><strong>SQLCache</strong></i> in the following ways:</H1>
<DIV class="mytext">

</DIV>

<DIV class="syntax">
<table>
<tr>
	<td><small><font face="Verdana">Please complete and submit the following form to begin the download process.<p>
                * indicates a required filed</font></small><font size="1"></p>
                <? echo $msg ?>
                </font>
                <form method="POST" action="download.php">
                <input type="hidden" name="run" size="10" value="true">
                <div align="center"><center>
                <p>
                <table>
	                <tr>
	                	<td>Name</td><td> <input type="text" name="name" size="40" value="<?= $name; ?>"></td><td>*</td>
	                </tr>
	                <tr>
				<td>Company</td><td> <input type="text" name="company" size="40" value="<?= $company; ?>"></td><td>*</td>
			</tr>
			<tr>
				<td>Address</td><td> <input type="text" name="address" size="40" value="<?= $address; ?>"></td>
			</tr>
			<tr>
				<td>City</td><td> <input type="text" name="city" size="20" value="<?= $city; ?>"></td>
			</tr>
			<tr>
				<td>State</td><td> <input type="text" name="state" size="20" value="<?= $state; ?>"></td>
			</tr>
			<tr>
				<td>Post code</td><td> <input type="text" name="zip" size="10" value="<?= $zip; ?>"></td>
			</tr>
			<tr>
				<td>Country</td><td> <input type="text" name="country" size="30" value="<?= $country; ?>"></td>
			</tr>
			<tr>
				<td>Telephone</td><td> <input type="text" name="telephone" size="30" value="<?= $telephone; ?>"></td>
			</tr>
			<tr>
				<td>e-mail</td><td> <input type="text" name="email" size="30" value="<?= $email; ?>"></td><td>*</td>
			</tr>
			
	        </table>
                </center></div>
                <div align="center"><center>
                <p>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset"></p>
                </center></div>
                </form>
                <p>&nbsp;</td>
              </tr>
            </table>
            
</center></div>
</body>
</html>
