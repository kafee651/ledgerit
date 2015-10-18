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
		
		<div  id="nav">
			<ul>
				<li><a href="../new site/insert.php">Insert</a></li>
				<li><a href="../new site/search_date.php">Search</a></li>
				<li><a href="../new site/create_user.php">Create New User</a></li>
                <li class="first" id="current"><a href="../new site/login.php">My Account</a></li>
                <li><a href="../new site/index.php">Logout</a></li>		
			</ul>		
		</div>	
		
		<div id="header-image"></div>
						
	<!--header ends-->					
	</div>
	
	<!-- featured starts -->
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
	
		<div id="content">
        <table width="400" border="0" cellspacing="0" cellpadding="0">
   <tr>
   <td width="100%">
       <table width="430" height="415" border="0" align="left" >
           <tr colspan=0>
  	       <td align="Center" colspan="3"><h2 align="center">Account Information</h2></td></tr>
<?php
$con = mysql_connect("localhost","root","");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
$result = mysql_query("SELECT * FROM profile WHERE UserID = '$_POST[UserID]' ");
while($row = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<th width='156' scope='row'><p align='left'>Full Name</p></th>";
        echo "<td width='259'><font face='Verdana' size='2'>";
		echo $row['Profile_name'];
		echo "</font></tr>";
}
mysql_close($con);
?>	           
           
      </table>
      </form></td>
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
			<p>
			&copy; 2011 <strong>Your Copyright Info Here</strong>&nbsp; &nbsp; &nbsp;
			Design by <a href="http://www.styleshout.com/">styleshout</a>
			</p>
		</div>
	
		<div class="bottom-right">
			<p>		
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
		   	<a href="http://validator.w3.org/check/referer">XHTML</a>	|			
				<a href="file:///C|/Users/KAIFE/Desktop/FreshPick10/index.html">Home</a> |
				<a href="file:///C|/Users/KAIFE/Desktop/FreshPick10/index.html">Sitemap</a> |
				<a href="file:///C|/Users/KAIFE/Desktop/FreshPick10/index.html">RSS Feed</a>								
			</p>
		</div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>
