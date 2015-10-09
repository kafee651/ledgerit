<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>My Expenses</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" media="screen" href="../new site/css/screen.css" />

</head>

<body>

<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="../new site/index.php" title="">My Expenses</a></h1>		
		<p id="slogan">Use as Calculator... </p>	
	
		<div id="header-image"></div>
						
	<!--header ends-->					
	</div>
	
	<!-- featured starts -->
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
	
		<div id="content">
        <table width="880" border="0" cellspacing="0" cellpadding="0">

   <tr>
   <td width="100%" align="center">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("expenses", $con);

$result = mysql_query("SELECT * FROM profile WHERE UserID = '$_POST[UserID]' AND Password = '$_POST[Password]'");
if($row = mysql_fetch_array($result))
  {
  echo "Your are successfully Login";
  echo "<br>";
  echo "<form action='../new site/insert_comp.php' method='POST' >";
  echo "<name='UserID' type='text' value='$row[UserID]' id='name' />";
  echo "</form>";
  echo "<h4 id='website'><a href='../new site/login.php' title=''>My Account</a></h4>";
  }
else
  {
  echo "Not a valid conbination of UserId and password";
  echo "<br>";
  echo "<h4 id='website'><a href='../new site/index.php' title=''>Try Again</a></h4>";
  }
mysql_close($con);
?>
</td>
    </tr>
</table> 
</div>	
			
	<!-- content end -->	
	</div></div>
		
	<!-- footer starts here -->	
	<div id="footer-outer" class="clear"></div>
	
	<!-- footer-bottom starts -->		
	<div id="footer-bottom">
		<div class="bottom-left">
			<p
			&copy; 2011&nbsp; &nbsp;
			Design by <a href="http://www.styleshout.com/">styleshout</a>
			</p>
		</div>
	
		<div class="bottom-right">
		</div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>