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
				<li class="first" id="current"><a href="../new site/search_date.php">Search</a></li>
				<li><a href="../new site/create_user.php">Create New User</a></li>
                <li><a href="../new site/login.php">My Account</a></li>
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
   <td width="100%"><form action="../new site/search_date_comp.php" method="POST" >
       <table width="494" height="415" border="0" align="left" >
           <tr colspan=0>
  	       <td align="Center" colspan="6"><h2 align="center">Search  Purchased Items</h2></td></tr>

        
           
           
           <tr>
           <th scope="row" align="left">Category<font color="#FF0000">*</font></th>
           <td colspan="4"><label>
           <select name="Cat">
           <option value="1">ALL</option>
           <option value="4">Household Goods</option>
           <option value="2">Cloths Expenses</option>
           <option value="3">Electronics Gedgets</option>
           <option value="5">Vehicle Expenses</option>
           </select>
           </label></td>
           </tr>
           
           <tr>
           <th width="101" rowspan="1" scope="row"><p align="left">Start Date<font color="#FF0000">*</font></p></th>
           <td width="110" height="4" align="right" valign="top"><font face='Verdana' size='2'>
           <select name="sD">
           <option value="1">01</option>
           <option value="2">02</option>
           <option value="3">03</option>
           <option value="4">04</option>
           <option value="5">05</option>
           <option value="6">06</option>
           <option value="7">07</option>
           <option value="8">08</option>
           <option value="9">09</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           <option value="22">22</option>
           <option value="23">23</option>
           <option value="24">24</option>
           <option value="25">25</option>
           <option value="26">26</option>
           <option value="27">27</option>
           <option value="28">28</option>
           <option value="29">29</option>
           <option value="30">30</option>
           <option value="31">31</option>
           </select>
           Day           </font></td>
           <td width="128" align="right" valign="top"><font face='Verdana' size='2'>
           <select name="sM">
           <option value="1">Jan</option>
           <option value="2">Feb</option>
           <option value="3">Mar</option>
           <option value="4">Apr</option>
           <option value="5">May</option>
           <option value="6">Jun</option>
           <option value="7">Jly</option>
           <option value="8">Aug</option>
           <option value="9">Sep</option>
           <option value="10">Oct</option>
           <option value="11">Nov</option>
           <option value="12">Dec</option>
           </select>
           Month</font></td>
           <td width="137" align="right" valign="top"><font face='Verdana' size='2'>
           <select name="sY">
               <option value="2012">2012</option>
               <option value="2013">2013</option>
           	   <option value="2014">2014</option>
               <option value="2015">2015</option>
               <option value="2016">2016</option>
               <option value="2017">2017</option>
               <option value="2018">2018</option>
               <option value="2019">2019</option>
               <option value="2020">2020</option>
               <option value="2021">2021</option>
               <option value="2022">2022</option>
               <option value="2023">2023</option>
               <option value="2024">2024</option>
               <option value="2025">2025</option>
               <option value="2026">2026</option>
               <option value="2027">2027</option>
               <option value="2028">2028</option>
               <option value="2029">2029</option>
               <option value="2030">2030</option>
               <option value="2031">2031</option>
                </select>
           Year</font></td>
           
           </tr>
           
           <tr>
           <th width="101" rowspan="1" scope="row"><p align="left">End Date<font color="#FF0000">*</font></p></th>
           <td width="110" height="4" align="right" valign="top"><font face='Verdana' size='2'>
           <select name="eD">
           <option value="1">01</option>
           <option value="2">02</option>
           <option value="3">03</option>
           <option value="4">04</option>
           <option value="5">05</option>
           <option value="6">06</option>
           <option value="7">07</option>
           <option value="8">08</option>
           <option value="9">09</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           <option value="22">22</option>
           <option value="23">23</option>
           <option value="24">24</option>
           <option value="25">25</option>
           <option value="26">26</option>
           <option value="27">27</option>
           <option value="28">28</option>
           <option value="29">29</option>
           <option value="30">30</option>
           <option value="31">31</option>
           </select>
           Day           </font></td>
           <td width="128" align="right" valign="top"><font face='Verdana' size='2'>
           <select name="eM">
           <option value="1">Jan</option>
           <option value="2">Feb</option>
           <option value="3">Mar</option>
           <option value="4">Apr</option>
           <option value="5">May</option>
           <option value="6">Jun</option>
           <option value="7">Jly</option>
           <option value="8">Aug</option>
           <option value="9">Sep</option>
           <option value="10">Oct</option>
           <option value="11">Nov</option>
           <option value="12">Dec</option>
           </select>
           Month</font></td>
           <td width="137" align="right" valign="top"><font face='Verdana' size='2'>
           <select name="eY">
               <option value="2012">2012</option>
               <option value="2013">2013</option>
           	   <option value="2014">2014</option>
               <option value="2015">2015</option>
               <option value="2016">2016</option>
               <option value="2017">2017</option>
               <option value="2018">2018</option>
               <option value="2019">2019</option>
               <option value="2020">2020</option>
               <option value="2021">2021</option>
               <option value="2022">2022</option>
               <option value="2023">2023</option>
               <option value="2024">2024</option>
               <option value="2025">2025</option>
               <option value="2026">2026</option>
               <option value="2027">2027</option>
               <option value="2028">2028</option>
               <option value="2029">2029</option>
               <option value="2030">2030</option>
               <option value="2031">2031</option>
                </select>
           Year</font></td>
           
           </tr>
       
           <tr>
           <th height="78" colspan="6" align="left" scope="row"><font color="#FF0000">*</font>All fields are compulsory<br/>
           <center>
           <input type="submit" />
           &nbsp; &nbsp; &nbsp;
           <input type="reset" />
           </center>
           <br/></th>
           </tr>
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
		<div class="bottom-left"> &copy; 2012 All rights are reserve&nbsp; &nbsp; &nbsp;
      Design by <a href="http://www.styleshout.com/">Kafee</a>		</div>
	
		<div class="bottom-right"> 
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
   	    <a href="http://validator.w3.org/check/referer">XHTML</a>	|
        <a href="../new site/index.php">Login Page</a>		
        </div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>
