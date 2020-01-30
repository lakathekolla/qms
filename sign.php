<html>
<head>
	<title>Sign Up</title>
	<script language="javascript">
       function redirectWeb() {
               window.location="sign_iframe.php";
            }
    </script>
	<style language="css">
		body{
			font-family: "Lato", sans-serif;
			color:0082D8;
		}
		h1{
			
			opacity: 0.95;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 2s;
			text-align:left;
			border: 1px solid #ccc;
			border-top: 5px solid #33b5e5;
			background-color: #0082D8;
			padding: 14px 16px;
			font-size: 14px;
			color:#D0EDF2;
			
		}
			
		}
		@-webkit-keyframes fadeEffect {
			from {opacity: 0;}
			to {opacity: 1;}
		}

		@keyframes fadeEffect {
			from {opacity: 0;}
			to {opacity: 1;}
		}
		
	</style>
</head>



<body>

<?php

$nName=$_POST["uname"];
$nPass=$_POST["upass"];
$nEmail=$_POST["uemail"];
$nContact=$_POST["ucontact"];
include 'system/main/lib/connect.php';

$dowork ="INSERT INTO user_info(user_name,user_pass,user_email,user_contact) VALUES('$nName','$nPass','$nEmail','$nContact')";
 
mysql_query($dowork,$conn);
mysql_close($conn);
    
?>
	<script language="javascript">
	function signInMass(){
		document.write("");
	}
		document.write("<h1>Hello<br/>Welcome to the QMS!<br/>Explore more with <br/>Sign in</h1>");
	    setTimeout('signInMass()', 5000);
        setTimeout('redirectWeb()', 5000);
		
	</script>
	
</body>
</html>