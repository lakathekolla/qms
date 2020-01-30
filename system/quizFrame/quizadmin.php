<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Faculty of Science | Quiz Management System</title>
	<link rel="stylesheet" href="css/tabstyle.css">
	<link rel="stylesheet" href="css/ans.css">
	<link rel="stylesheet" href="css/formstyle.css">
	 
	<script language="javascript" src="js/tab.js">
	</script>
	
	<style language="css">
		body {font-family: "Lato",sans-serif;
		}
		.hd {max-width:100%;
			max-height:100%;
			float:top;
			padding:0px;
		}
		
		.qarea{
			border: 1px solid #CCCCCC;
			border-top-color: #ff0000
			background-color: #f1f1f1;
			padding: -0px -0px -0px -0px;
			width: 100%;
			height: 800px;
		}
		.user{
			width:50px;
			position: absolute;
			top: 40px;
			right: 120px;
			padding:5px;
			text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
			font-family:"Segoe UI Web Light","Segoe UI Light";
			font-size: 1.8em;
			opacity:0.1;
			color: rgba(106, 170, 216, .5);
			background-color:rgba(0,124, 230, .5);
			-webkit-animation: fadeEffect 10s;
			animation: fadeEffect 10s;
			
		}
		@keyframes fadeEffect {
				from {opacity: 1;}
				to {opacity: 0.1;}
				
		
		
		
		
		
		
		
		 
	</style>
	<script language="javascript">
	
	function go(loc) {
    document.getElementById('ome').src = loc;
  }
	
	</script>
	
	
	
</head>
<body onload="openForm(event, 'Quiz')">
		
			<header >
				<div>
					<img class="hd" src="images/tmphd.jpg" alt="mainHeading"/>
				</div>
			</header>
			<div class="user">
	<?php 
	session_start();
	$me=$_SESSION["user"];
	echo $me;
	
	?>	</div>
	
			<nav>
		<div class="qarea">
				<ul class="tab">
					<li><a href="#" class="formlinks" onclick="go('manage_quiz.php')">Manage Quiz </a></li>
					<li><a href="#" class="formlinks" onclick="go('lecture.php')" >Lectures</a></li>
					<li><a href="#" class="formlinks" onclick="go('statistics.php')" >Statistics</a></li>
					<li><a href="#" class="formlinks" onclick="go('logout.php')">Logout</a></li>
					<li><a href="#" class="formlinks" onclick="go('tmphlp.php')">Help</a></li>
				</ul>
							<iframe name="one" id="ome" frameborder="0" src="manage_quiz.php" width="100%" height="550px" noresize="noresize" scrolling="yes" allowtransparency="no"/>
		
			</nav>
	
	
		</div>
     
</body>
</html>

