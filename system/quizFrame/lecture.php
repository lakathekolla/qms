<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System | Lecturer</title>
		<link rel="stylesheet" href="css/lecturer.css">
	
		<script language="javascript" src="js/bigButtonLec.js">
		</script>
	
	</head>
	<body>
	<div class="welcome">
		<img src="images/q_ic.png" height="24" width="24" alt="tree" align="left"/>
			Hi! Welcome to QMS.please click Add Quiz to add a Quiz. 
		</br>
	</div>
		</br>
	
	<div class="dybtn">
		<?php
				echo	'
					<form action="neweditor.php" method="post">
						<span>
							<input type="submit" class="button" onmouseover="bigImg(this)" name="id_me" onmouseout="normalImg(this)"  value="Add Quiz" >
						</span>
					</form>
						';
						
				echo '</br>';echo '</br>';echo '</br>';echo '</br>';
				
				echo	'
					<form action="remove.php" method="post">
						<span>
							<input type="submit" class="button" onmouseover="bigImg(this)" name="id_me2" onmouseout="normalImg(this)"  value="Remove Quiz" >
						</span>
					</form>
						';
				
				echo '</br>';echo '</br>';echo '</br>';echo '</br>';
				echo '</br>';echo '</br>';echo '</br>';echo '</br>';
				echo '</br>';echo '</br>';echo '</br>';echo '</br>';
				
				echo	'
					<form action="admin_sign_up.php" method="post">
						<span>
							<input type="submit" class="button" onmouseover="bigImg(this)" name="id_me2" onmouseout="normalImg(this)"  value="Add Administrator" >
						</span>
					</form>
						';
		?>
		
	</div>
			
	<div class="dyimg">
	   <img src="images/tree.jpg" noresize="resize" alt="tree" align="right"/>
	</div>
	
	<div class="box">
		<img src="images/globe.jpg" height="95" width="90" alt="tree" align="left"/>
	 
		Welcome...Our mission is to deliver a quick evaluation on
		the subjects that relate to science and technologies that 
		will improve the learning... 
		The importance of this quiz is to check knowlage 
		and how student can answer the quiz promptly..
		Hope you will optimize quizes with maximum accommodation.
		wish you good luck.Thank you
	
	</div>	
	
	</body>
	
</html>