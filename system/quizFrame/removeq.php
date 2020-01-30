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
			
			The Quiz Has Removed Completely..!
			
			</br>
		</div>
			<?php
			if(isset($_POST["id_me"])){
				$quiz_name= $_POST["id_me"];
			//get quiz id
					include '/lib/connect.php';
						$qzdowork ="SELECT quiz_id FROM quiz WHERE quiz_name='$quiz_name' ";
						$qzresult= mysql_query($qzdowork) or die("function error");
				
					while($qzretVal=mysql_fetch_array($qzresult,MYSQL_ASSOC)){
						foreach($qzretVal as $qzcell){
							$quiz_id=$qzcell;
						}
					}
			//remove quections from info_quiz
						$qzdowork ="DELETE FROM info_quiz WHERE quiz_id='$quiz_id';";
						$qzresult= mysql_query($qzdowork) or die("function error");
				
			//remove quiz from quiz
						$qzdowork ="DELETE FROM quiz WHERE quiz_id='$quiz_id';";
						$qzresult= mysql_query($qzdowork) or die("function error");
				
			}
			
			?>
	
		<div class="dybtn">
		<script language="javascript">
			function redirectWeb() {
				window.top.location.href = "../lectures.php";
				}
			
			setTimeout(redirectWeb(), 5500);
                
		</script>	
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