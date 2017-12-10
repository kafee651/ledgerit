<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
	include('login.php'); // Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location:profile.php");
	}
?>
<head>
	<title>Ledger It</title>

	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	<meta name="author" content="Mohammad kafee Uddin" />
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
		<div id="header-image"></div>
	</div>
        <!--header ends-->					
	
        <!-- featured starts -->	
	<div id="featured" class="clear"></div>	
		
                <!-- content -->
		<div id="content-outer" class="clear">
	  	<div id="content-wrap">
	    	<!-- content end -->
          	     <h2 align="center">Login Info</h2>
				<form name="input" action="" method="post">
    				     <table width="400" border="0" align="center">
  					<tr>
    				        <th scope="row"><h4 id="logo-text">User ID</h4></th>
    				        <td><input type="text" name="username" placeholder="Username" size="20" maxlength="20" id="fname"></td>
		                        </tr>
                    
                                        <tr>
    				        <th scope="row"><h4 id="logo-text">Password</h4></th>
    				        <td><input type="password" name="password" placeholder="**********" size="20" maxlength="15" id="fname" value=""></td>
		  			</tr>
                             
                                        <tr>
    				        <td align="center" colspan="2" scope ="row"><h4 id="logo-text"><input name="submit" type="submit" value=" Login " /></td>
                                        </tr>
                    
  				      </table>
				</form>
     	</div>
    </div>
	<!-- footer-bottom starts -->		
	<div id="footer-bottom">
		<div class="bottom-left">
			<p>
			&copy; 2017<strong> All reight are reserve</strong>&nbsp; &nbsp; &nbsp;
			Design by Mohammad</p>
		</div>
		<div class="bottom-right">
			<p>		
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
		   		<a href="http://validator.w3.org/check/referer">XHTML</a>	|			
				<a href="./index.php">Login Page</a>								
			</p>
		</div>
	<!-- footer-bottom ends -->		
	</div>
<!-- wrap ends here -->
</div>

</body>
</html>
