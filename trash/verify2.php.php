<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("expenses", $con);

$sql="INSERT INTO myexpenses (UserId, Date, Cat, Quantity, Price, Descipt) VALUES ('kafee786','2012-06-25','$_POST[Cat]','$_POST[Quantity]','$_POST[Price]','$_POST[Descript]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>