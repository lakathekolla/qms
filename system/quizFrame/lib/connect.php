<?php
//include '/system/main/lib/connect.php';
require_once __DIR__ . '/../../../compat/mysql.php';


$ssname ="localhost";
$usname ="root";
$psword ="";
   
$conn=mysql_connect($ssname,$usname,$psword) or die("Connection Fail");
mysql_select_db("uoc_qms") or die("Database Not Found");


?>



