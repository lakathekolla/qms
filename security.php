<html>
<head>
	<title>Sign Up</title>
	
	</head>
<body>

<?php
$user_pass="qpwoalskzmxn1=2-3$ #232%%";
$super_pass="qpwoalskzmxn1=2-3 #$232@%%";
$usN=$_POST["suser"];
$usP=$_POST["spass"];

include '/system/main/lib/connect.php';
  
	$dowork ="SELECT user_pass FROM user_info WHERE user_name='$usN'";
	$qiresult= mysql_query($dowork) or die("function error");
										
				while($qiretVal=mysql_fetch_array($qiresult,MYSQL_ASSOC)){
					foreach($qiretVal as $qicell){
						 $user_pass=$qicell;
					}
				}
	$dowork ="SELECT admin_pass FROM admin WHERE admin_name='$usN'";
	$qiresult= mysql_query($dowork) or die("function error");
										
				while($qiretVal=mysql_fetch_array($qiresult,MYSQL_ASSOC)){
					foreach($qiretVal as $qicell){
						 $super_pass=$qicell;
					}
				}	

	if($user_pass==$usP || $super_pass==$usP){
		session_start();
		$_SESSION["user"] = $usN;
		if($super_pass==$usP){
				header ('Location: system/lectures.php');
				exit ();
		}
		else{	
				header ('Location: system/profile.php');
				exit ();
		}
	}else{
				header ('Location: index.php');
				exit ();	
			}
			
	   
mysql_close($conn);
 
?>

	
</body>
</html>