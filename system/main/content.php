<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System</title>
		
		<style language="css">
			.dybtn{
				float:left;
				padding: 20px 80px;
				
			}
			.dyimg{
				float:right;
			}
			.welcome{
				position: absolute;
				width:300px;
				text-align: left;
				margin: 0 0 5px;
 				color: #33b5e5;
 				font-size: 15px;
 				font-weight: 400;
			}
			.box{
				position: absolute;
				width:300px;
				text-align: left;
				bottom: 30px;
 				color: #33b5e5;
 				font-size: 10px;
 				font-weight: 400;
				padding: 6px 12px;
				-webkit-animation: fadeEffect 1s;
				animation: fadeEffect 1s;
			}

			@-webkit-keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: 1;}
			}

			@keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: 1;}
			}
			::-webkit-scrollbar {
			width: 12px;
			}
 
			::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
			border-radius: 10px;
			}
 
			::-webkit-scrollbar-thumb {
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
			}
			.buttonbody{
				background: #abc904;
				background-image: -webkit-linear-gradient(top, #abc904, #65b603);
				background-image: -moz-linear-gradient(top, #abc904, #65b603);
				background-image: -ms-linear-gradient(top, #abc904, #65b603);
				background-image: -o-linear-gradient(top, #abc904, #65b603);
				background-image: linear-gradient(to bottom, #abc904, #65b603);
				-webkit-border-radius: 2;
				-moz-border-radius: 2;
				border-radius: 2px;
				text-shadow: 2px 2px 0px #5b6580;
				-webkit-box-shadow: 3px 3px 3px #666666;
				-moz-box-shadow: 3px 3px 3px #666666;
				box-shadow: 3px 3px 3px #666666;
				font-family: Arial;
				color: #ffffff;
				font-size: 15px;
				padding: 1px 10px 1px 10px;
				text-decoration: none;
				width:150px;
			}
			
					
			
		</style>
	</head>
	<body>
	<div class="welcome">
	<img src="images/q_ic.png" height="24" width="24" alt="tree" align="left"/>
	
Hi! Welcome to QMS.Select the quiz you prefer to answer. 
	
	</br>
	</div>
		</br>
	<div class="dybtn">
	<form action="selecter.php" method="post">
		<?php

        require_once __DIR__ . '/lib/connect.php';
			$dowork ="SELECT quiz_name FROM quiz";
			$result= mysql_query($dowork) or die("function error");
		 
		while($retVal=mysql_fetch_array($result,MYSQL_ASSOC)){
			foreach($retVal as $cell){
				
				echo '<script>
					function bigImg(x) {
					x.style.height = "25px";
					x.style.width = "150px";}
					
					function normalImg(x) {
					x.style.height = "28px";
					x.style.width = "160px";
					x.style.margin = "5px"
					}
									
                </script>';
				
								
				echo '<input type="submit" class="buttonbody"  onmouseover="bigImg(this)" onmouseout="normalImg(this)" name="id_me" value='.$cell.' />';
				echo '</br>';
			}
		}

		?>
	</form>
	      
	</div>
			
	<div class="dyimg">
	   <img src="images/tree.jpg" noresize="resize" alt="tree" align="right"/>
	</div>	
	<div class="box">
		<img src="images/globe.jpg" height="95" width="90" alt="tree" align="left"/>
	 
    Welcome...Our mission is to deliver a quick evaluation on
	the subjects that relate to science and technologies that 
	will improve the learning... 
	The importance of this quiz is to check your knowlage on 
	Internet technologies and how you can answer the quiz promptly..
	Hope you will get the maximum use of this.
	wish you good luck.Thank you
	
	</div>	
	
	</body>
	
</html>