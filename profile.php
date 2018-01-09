<?php
	if($_SESSION['login_user'] == '')  {
		header("location:index.php");
	}	
	include('session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<title>Ledger It</title>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
		<meta name="author" content="Erwin Aligam - styleshout.com" />
		<meta name="description" content="Site Description Here" />
		<meta name="keywords" content="keywords, here" />
		<meta name="robots" content="index, follow, noarchive" />
		<meta name="googlebot" content="noarchive" />
		<link rel="stylesheet" type="text/css" media="screen" href="./css/screen.css" />
	</head>
	
	<body>
		<!-- wrap starts here -->
		<div id="wrap">

			<!--header -->
			<div id="header">			
				<h1 id="logo-text"><a href="./index.php" title="">My Expenses</a></h1>		
				<p id="slogan">Use as Calculator... </p>	
				<div  id="nav">
					<ul>
						<li><a href="./insert.php">Insert</a></li>
						<li><a href="./search_date.php">Search</a></li>
						<li class="first" id="current"><a href="./profile.php">Dashboard</a></li>
						<li><a href="./create_user.php">Create New User</a></li>
						<li><a href="./logout.php">Logout</a></li>		
					</ul>		
				</div>	
				<div id="header-image"></div>
			</div>
			
			<div id="content-outer" class="clear">
				<div id="content-wrap">
					<div id="content">
        				<table width="400" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="100%" align="center">
									<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
								</td>
								<td width="100%" align="center">	   
									<b id="logout"><a href="./logout.php">Log Out</a></b>
								</td>
							</tr>
						</table> 	
					</div>	
				</div>
			</div>
		
			<!-- footer starts here -->	
			<div id="footer-outer" class="clear"></div>
	
			<!-- footer-bottom starts -->		
			<div id="footer-bottom">
				<div class="bottom-left">
					<p>&copy; 2017 All rights are reserve&nbsp; &nbsp; &nbsp;Design by <a href="http://www.styleshout.com/">kafee</a>
					</p>
				</div>
				<div class="bottom-right">
					<p><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>| 
						<a href="http://validator.w3.org/check/referer">XHTML</a>|<a href="./index.html">Login pages</a>
					</p>
				</div>
				<!-- footer-bottom ends -->		
			</div>
	
		<!-- wrap ends here -->
		</div>
	</body>
</html>