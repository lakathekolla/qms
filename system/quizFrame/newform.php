<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System</title>
		<link rel="stylesheet" href="css/neweditor.css">
		<style language="css">
			.dybtn{
				float:left;
				padding: 40px 10px;
				position: absolute;
				left:10px;
				top:10px;
				width:300px;
				text-align: left;
				margin: 0 0 5px;
				
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
				padding: 5px 10px 5px 10px;
				text-decoration: none;
				width:210px;
			
				
			}
			
			
			.iupload{
				position: fixed;
				width:300px;
				
				bottom: 30px;
			}
			
			#fh{
			display: none;
			}
			
			.iupload > input{
				display: none;
			}
			
			
					
			
		</style>
		<script>
					function bigImg(x) {
					x.style.height = "50px";
					x.style.width = "300px";}
					
					function normalImg(x) {
					x.style.height = "55px";
					x.style.width = "310px";
					x.style.margin = "5px"
					}
					function bigImgU(x) {
					x.style.height = "70px";
					x.style.width = "70px";}
					
					function normalImgU(x) {
					x.style.height = "75px";
					x.style.width = "75px";
					
					}
									
                </script>'
				
		
	</head>
	<body>
	<div class="welcome">
	<img src="images/q_ic.png" height="24" width="24" alt="tree" align="left"/>
	<?php 
	session_start();
	$admin=$_SESSION["user"];
			if(isset($_POST["id_me"])){
				if(isset($_SESSION["q_id_tmp"])){
					$_SESSION["q_id_tmp"]=0;					
				}
				if(isset($_SESSION["quiz_id_tmp"])){
					$_SESSION["quiz_id_tmp"]=0;					
				}
				
				$qName=$_POST["lastname"];
				
				include 'lib/connect.php';

				$dowork ="INSERT INTO quiz(quiz_name,quiz_by) VALUES('$qName','$admin')";
				$q_id=1;
				
				 $_SESSION["q_id_tmp"]=$q_id;
				 
				mysql_query($dowork,$conn);
				mysql_close($conn);
				include 'lib/connect.php';
//set quiz_id
				$qidowork ="SELECT quiz_id 
							FROM quiz 
							WHERE quiz_name='$qName'";
				$qiresult= mysql_query($qidowork) or die("function error");
									
					while($qiretVal=mysql_fetch_array($qiresult,MYSQL_ASSOC)){
						foreach($qiretVal as $qicell){
							 $qiz_id=$qicell;
						}
					}
				$_SESSION["quiz_id_tmp"]=$qiz_id	;
			
			}else{
				$qiz_id=$_SESSION["quiz_id_tmp"];
				$q_id=$_SESSION["q_id_tmp"];
				
				$q_txt=$_POST["q_txt"];
				$q_mcq1_ans=$_POST["q_mcq1_ans"];
				$q_mcq2_ans=$_POST["q_mcq2_ans"];
				$q_mcq3_ans=$_POST["q_mcq3_ans"];
				$q_mcq4_ans=$_POST["q_mcq4_ans"];
				$q_mcq5_ans=$_POST["q_mcq5_ans"];
				$q_mcq_ans_num=$_POST["q_mcq_ans_num"];
				$q_hint=$_POST["q_hint"];
				if(isset($_POST["q_pic"])){
					$q_pic=$_POST["q_pic"];					
				}else{
					$q_pic="null.jpg";	
				}
				
				include 'lib/connect.php';

				$dowork ="	INSERT INTO info_quiz(quiz_id,q_id,q_txt,q_pic,q_mcq1_ans,q_mcq2_ans,q_mcq3_ans,q_mcq4_ans,q_mcq5_ans,q_mcq_ans_num,q_hint) 
							VALUES('$qiz_id','$q_id','$q_txt','$q_pic','$q_mcq1_ans','$q_mcq2_ans','$q_mcq3_ans','$q_mcq4_ans','$q_mcq5_ans','$q_mcq_ans_num','$q_hint')";
				
				mysql_query($dowork,$conn);
				mysql_close($conn);
	
				
				$_SESSION["q_id_tmp"]++;
			}
				
			
	
	
	?>
Hi!.Add Qection to the Form.Please Make sure Add All before Click Done  
	
	</br></br></br>
	</div>
		</br>	<form action="newformq.php" method="post">
	<div class="dybtn">

		</br></br></br>
  
    
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_txt" placeholder="Quection">
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_mcq1_ans" placeholder="MCQ1">
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_mcq2_ans" placeholder="MCQ2">
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_mcq3_ans" placeholder="MCQ3">		
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_mcq4_ans" placeholder="MCQ4">		
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_mcq5_ans" placeholder="MCQ5">
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_mcq_ans_num" placeholder="True Answer">
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_hint" placeholder="Hint">
	<input style="width: 300px;
			padding: 12px 20px;
			margin: 8px 5px;
			box-sizing: border-box;" type="text" id="lname" name="q_pic" placeholder="ImageName.Type">
			
	<input type="submit"  style="width: 300px;height:50px;" value="Next" class="buttonbody"  onmouseover="bigImg(this)" onmouseout="normalImg(this)" name="id_me2">
  </br></br>

		
		
	
	      </form >
		  <form action="newformqe.php" method="post" >
		  <input type="submit"  style="width: 300px;height:50px;" value="Done" class="buttonbody"  onmouseover="bigImg(this)" onmouseout="normalImg(this)" name="id_me3">
		  <form>
		  
	</div>
			
	<div class="dyimg">
	   <img src="images/tree.jpg" noresize="resize" alt="tree" align="right"/>
	</br>
		<iframe style="	position:relative;
						width:100%;
						height:320px;
						background-color : transparent;
						right:10px;
						" frameborder="0" src="sub_frm/uphlp.php"  noresize="noresize" scrolling="false" allowtransparency="true"/>
		
	
			
	
	</div>	
	
			
	
	
	
	</body>
	
</html>