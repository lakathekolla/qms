<?php
//include '/system/main/lib/connect.php';


$ssname ="localhost";
$usname ="root";
$psword ="";
   
$conn=mysql_connect($ssname,$usname,$psword) or die("Connection Fail");
mysql_select_db("uoc_qms") or die("Database Not Found");


?>

