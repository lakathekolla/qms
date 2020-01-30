<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System | Admin Logout</title>
		<link rel="stylesheet" href="css/logout.css">
	
		<style language="css">
			body{
				background-image: url('images/loBac.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-position: 50% 69%; 
			}
		</style>
	</head>
	
	<body>
		<?php
			session_start() ;
			session_destroy();
		?>

		<div class="out" align="center"> Thank you Come Back Soon <div>
	
		<center>
			<img  src="images/brain.png" alt="index"  width="10%" border="0"/>
		</center>

		<script language="javascript">
			function redirectWeb(){
				window.top.location.href = "../../index.php";
			}
			
			setTimeout('redirectWeb()', 2000);
		
		</script>
	
	</body>
</html>