<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System | Remove</title>
		<link rel="stylesheet" href="css/manage_quiz_and_remove.css">
	
		<script language="javascript" src="js/bigButtonManage.js">
		</script>
		
	</head>
	
	<body>
		<div class="welcome">
			<img src="images/q_ic.png" height="24" width="24" alt="tree" align="left"/>
			
			Please Make Sure to Select Correct Quiz that Add by You And Notice that, The selected Quiz will be Removed without hesitation... No backsies! 
			
			</br>
		</div>
			
	
		<div class="dybtn">
			<form action="removeq.php" method="post">
				
				<?php
                require_once __DIR__ . '/lib/connect.php';

                session_start();
                $me=$_SESSION["user"];
                $dowork ="SELECT quiz_name FROM quiz WHERE quiz_by='$me'";
                $result= mysql_query($dowork) or die("function error");


                echo '</br>';
					echo '</br>';

					while($retVal=mysql_fetch_array($result,MYSQL_ASSOC)){
						foreach($retVal as $cell){
							echo '<input type="submit" class="quizName" onmouseover="bigImg(this)" onmouseout="normalImg(this)" name="id_me" value="'.$cell.'">';
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
			The importance of this quiz is to check knowlage 
			and how student can answer the quiz promptly..
			Hope you will optimize quizes with maximum accommodation.
			wish you good luck.Thank you
		
		</div>	
	</body>
</html>