  
  
  
  <table width="920" height="1" border="0" align="center" >
            
            <tr colspan=0>
  	        <td align="Center" colspan="5"><h2 align="center">Your Search Expenses</h2>
            </td>
            </tr>
 	
    
    		<tr>
            <th width="115" scope="row"> <p align="left">S.I NO.</p></th>
            <th width="168" scope="row"> <p align="left">Categories</p></th>
            <th width="298" scope="row"> <p align="left">Discription</p></th>
            <th width="108" scope="row"> <p align="left">Quantity</p></th>
            <th width="209" scope="row"> <p align="left">Price</p></th>
            </tr>
            
  </table>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sino = 1;
mysql_select_db("expenses", $con);
$sdate = $_POST['sD'] + $_POST['sM'] * 30 + $_POST['sY'] * 365;
$edate = $_POST['eD'] + $_POST['eM'] * 30 + $_POST['eY'] * 365;
if($_POST['Cat'] == 1){
	$result = mysql_query("SELECT * FROM myexpenses WHERE UserID = 'kafee786' ");
		while($row = mysql_fetch_array($result))
  		{
  		echo $sino;
		$sino++;
		echo "<br>";
		echo "<th width='168' scope='row'>";
		echo "<p align='left'>";
		echo $row['Cat'];
		echo "</p></th>";
		echo "<br>";
		echo "<h4>$row[Descript]</h4>";
		echo "<br>";
		echo $row['Quantity'];
		echo "<br>";
		echo $row['Price'];
		echo "<br>";
		
  		}
}
mysql_close($con);
?>