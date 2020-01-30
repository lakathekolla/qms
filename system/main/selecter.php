<html>
<head>
	<title>Selecter</title>
	<link rel="stylesheet" href="css/ans.css">
	
	<script language="javascript">
       function redirectWeb() {
               window.top.location.href = "selecter.php";
            }
	 
			function bigImg(x) {
				x.style.backgroundImage = "url('ra.jpg')";
				x.style.width = "25px";}
													
			function normalImg(x) {
				x.style.height = "15px";
				x.style.width = "15px";
			}
			

			function toggle_visibility(id) {
			   var e = document.getElementById(id);
			   if(e.style.display == 'block')
				  e.style.display = 'none';
			   else
				  e.style.display = 'block';
			}
			function toggleBlock(id) {
			   var e = document.getElementById(id);
			   
				  e.style.display = 'none';
			  
			}

</script>
			
    </script>
	
		<style language="css">
div {
clear: both;
	margin: -5px 0px;
}



/* hide input */
input.radio:empty {
	margin-left: -999px;
	
}

/* style label */
input.radio:empty ~ label {
	position: relative;
	float: left;
	left: 0em;
	line-height: 0em;
	text-indent: 0em;
	margin-top: 1em;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;

}

input.radio:empty ~ label:before {
	position: relative;
	display: block;
	top: 0;
	bottom: 0;
	left: 0em;
	content:url(images/rn.png);
	width: 25px;
	background: #fff;
	border-radius: 0px 0px 0 0px;
	
}

/* toggle hover */
input.radio:hover:not(:checked) ~ label:before {
	content:'\2714';
	text-indent: 10em;
	color: #fff;
}

input.radio:hover:not(:checked) ~ label {
	content:url(images/rh.png);
	
}

/* toggle on */
input.radio:checked ~ label:before {
	content:url(images/rr.png);
	text-indent: 0em;
	color: #fff;
	background-color: #fff;
}

input.radio:checked ~ label {
	color: #777;
}

/* radio focus */
input.radio:focus ~ label:before {
	content:url(images/rr.png);
	-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 2s;
			opacity: 1;
	
}
.adjest{
	width:100%;
	height:10px;
}



		
		
		
	
		.set{
			display:block;
			width:100%;
		}
		
		.welcome{
			position: absolute;
			width: 75%;
			text-align: left;
			margin: 0 0 5px;
 			color: #33b5e5;
 			font-size: 15px;
 			font-weight: 400;
		}
		#qectioncontainer {
		  height: 40px;
		  width: 75%;
		  position: relative;
		}
		#qnimage {
		  position: absolute;
		  left: 0;
		  top: 8px;
		}

		#text2n{
		  z-index: 100;
		  position: absolute;
		  color: #00A8EC;
		  font-size: 20px;
		  font-weight: bold;
		  left: 48px;
		  top: 0;
		}
		
		.footimg{
			position: relative;
			left: 0;
			bottom: 0;
		}
		.infoimg{
			position: absolute;
			width:80%;
			bottom: 40px;
			left: 10px;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 4s;
			opacity: .6;
		}
		.infoimglast{
			position: fixed;
			width:530px;
			height:45px;
			left:10px;
			bottom:40px;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 4s;
			opacity: 1;
		}
		
		.infoimg p{
			color: #00A8EC;
			font-size: 15px;
			position: absolute;
			bottom: -10px;
			left: 50px;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 4s;
			opacity: .6;
			font-family: Lucida Calligraphy, Arial, Helvetica;
		}
		@-webkit-keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: .7;}
			}

			@keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: .7;}
			}
		.infoimg p{
			color: #00A8EC;
			font-size: 15px;
			position: absolute;
			bottom: -10px;
			left: 50px;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 4s;
			opacity: .6;
			font-family: Lucida Calligraphy, Arial, Helvetica;
		}
		.qimg{
			box-shadow: 4px 4px 10px rgba(5, 28, 8, 0.67);
		}
		
		body{background-image:url("images/foot.png");
			background-repeat:no-repeat;
			background-position:bottom;
			font-family: Helvetica,Arial ;
		}
		#one{
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.65);
			font-size: 12px;
		}
		
		.hint{
			position: fixed;
			width:400px;
			height:45px;
			right:205px;
			bottom:130px;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 4s;
		}
		#txthint{
			text-align: center;
			position: relative;
			width:400px;
			height:45px;
			right:0px;
			bottom:50px;
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.65);
		}
		
		
		
	
		</style>
	
	</head>
<body onload="toggleBlock('foo')">
	

	</div>

	<div class="welcome">
	
	
	
		<div id="qectioncontainer">
			<img id="qnimage" src="images/q.png" width="45"/>
			<p id="text2n">
						<?php
						session_start();
							$last=0;
							include '/lib/connect.php';
							if(isset($_POST["id_me"])){
								$qiz_name=$_POST["id_me"];
								$_SESSION["quiz_name"]=$qiz_name;
								$q_id=1;
								$qiz_id=0;
								$q_txt="";
								$q_pic="null.jpg";
								//set quiz_id
									$qidowork ="SELECT quiz_id 
												FROM quiz 
												WHERE quiz_name='$qiz_name'";
									$qiresult= mysql_query($qidowork) or die("function error");
									
										while($qiretVal=mysql_fetch_array($qiresult,MYSQL_ASSOC)){
											foreach($qiretVal as $qicell){
												 $qiz_id=$qicell;
												 
												}
										}
								//get quection
									$qgetwork ="SELECT q_txt 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$qgresult= mysql_query($qgetwork) or die("function error");
									
										while($qigretVal=mysql_fetch_array($qgresult,MYSQL_ASSOC)){
											foreach($qigretVal as $qigcell){
												 $q_txt=$qigcell;
												}
										}
									
								echo $qiz_name." ".$q_id." : ".$q_txt." " ;
								
								//get pic
									$qgetwork ="SELECT q_pic 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$qgresult= mysql_query($qgetwork) or die("function error");
									
										while($qigretVal=mysql_fetch_array($qgresult,MYSQL_ASSOC)){
											foreach($qigretVal as $qigcell){
												 $q_pic=$qigcell;
												}
										}
										if(!isset($q_pic)){
											$q_pic="null.jpg";
										}else{}
										
								echo '</br>';echo '</br>';		
								echo '<img class="qimg" width="90%" src="../quizFrame/images/upload/'.$q_pic.'"/>' ;
								
								
								
								//get hint
									$qhintwork ="SELECT q_hint 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$qhresult= mysql_query($qhintwork) or die("function error");
									
										while($qhgretVal=mysql_fetch_array($qhresult,MYSQL_ASSOC)){
											foreach($qhgretVal as $qhgcell){
												 $q_hint=$qhgcell;
												}
										}
								if(isset($q_hint)){
									$_SESSION["hint"]=$q_hint;
								}else{
									$_SESSION["hint"]="No Hint Avalable";
								}
								
								
								
							}else{
								$q_id=$_POST["q_id"];
								$qiz_id=$_POST["qiz_id"];
								$q_txt="";
								
								//get quection
									$qgetwork ="SELECT q_txt 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$qgresult= mysql_query($qgetwork) or die("function error");
									
										while($qigretVal=mysql_fetch_array($qgresult,MYSQL_ASSOC)){
											foreach($qigretVal as $qigcell){
												 $q_txt=$qigcell;
												}
										}
								if($q_id!=0){
									$qiz_name=$_SESSION["quiz_name"];
									echo $qiz_name." ".$q_id." : ".$q_txt." " ;
								//get pic
									$qgetwork ="SELECT q_pic 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$qgresult= mysql_query($qgetwork) or die("function error");
									
										while($qigretVal=mysql_fetch_array($qgresult,MYSQL_ASSOC)){
											foreach($qigretVal as $qigcell){
												 $q_pic=$qigcell;
												}
										}
										if(!isset($q_pic)){
											$q_pic="null.jpg";
										}else{}
										
								//get hint
									$qhintwork ="SELECT q_hint 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$qhresult= mysql_query($qhintwork) or die("function error");
									
										while($qhgretVal=mysql_fetch_array($qhresult,MYSQL_ASSOC)){
											foreach($qhgretVal as $qhgcell){
												 $q_hint=$qhgcell;
												}
										}
								
								$_SESSION["hint"]=$q_hint;
								
								
								echo '</br>';echo '</br>';		
								echo '<img class="qimg" width="90%" src="../quizFrame/images/upload/'.$q_pic.'"/>' ;
								
							}else{
								echo "The Quiz is completed." ;
								echo '<img class="footimg" src="images/midend.png" width="100%">';
							echo '
									<img class="infoimglast" src="images/lm.png" width="100%">
									
									';
								
							}		
								
							
							
							
							}
							
							?>
			
			</p>
		</div>
	</div>
				<?php
						if($last!=1 || isset($_POST["end"])){
							echo	'
								<div class="ans clearfix">
									<p class="text">
									<span>&nbsp;</span>
									<span>&nbsp;</span>
									
									<span>Sign The Answer</span>
									</p>
								</div>';
					
					}
						
						?>
					<form action="selecter.php" method="post">				 
					<div class="container">
					
					
					
					
					<div class="set">

						<?php
							include '/lib/connect.php';
							
							if(isset($_POST["id_me"])){
										$qiz_name=$_POST["id_me"];
										$q_id=1;
										$qiz_id=0;
										$q_id_count=0;
									
									//set quiz_id
									$qidowork ="SELECT quiz_id 
												FROM quiz 
												WHERE quiz_name='$qiz_name'";
									$qiresult= mysql_query($qidowork) or die("function error");
									
										while($qiretVal=mysql_fetch_array($qiresult,MYSQL_ASSOC)){
											foreach($qiretVal as $qicell){
												 $qiz_id=$qicell;
												}
										}
										
									//set q_id_count
									$cwork ="SELECT count(DISTINCT q_id) 
															AS total 
															FROM info_quiz 
															WHERE quiz_id='$qiz_id'";
									$rcount=mysql_query($cwork) or die("function error");
															
										while($qcountVal=mysql_fetch_array($rcount,MYSQL_ASSOC)){
											foreach($qcountVal as $qicount){
												 $q_id_count=$qicount;
												}
										}
										
									//set radio buttons
									$qdowork ="	SELECT q_mcq1_ans,q_mcq2_ans,q_mcq3_ans,q_mcq4_ans,q_mcq5_ans 
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											$ans_num=0;
												foreach($qretVal as $qcell){
												$ans_num++;
											
													echo '			
													<div class="adjest">
													<input type="radio" name="mcq_ans" id="radio'.$ans_num.'" class="radio" value='.$ans_num.' />
													<label for="radio'.$ans_num.'"></label>
													</div>
													<p class="text'.$ans_num.'">
													<span id="one">'.'<span>&nbsp;</span>'.$qcell.'</span>
													</p>';
													
												}
										}
										
									//answercount variables
									
									$q_ans_ans_result ="	SELECT q_mcq_ans_num 
															FROM info_quiz 
															WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
									$airesult= mysql_query($q_ans_ans_result) or die("function error");
									
									
										while($airetVal=mysql_fetch_array($airesult,MYSQL_ASSOC)){
											foreach($airetVal as $aicell){
												
												$q_ans_ans=$aicell;}
												
												
										}
										if(!isset($q_ans_ans)){
												$q_ans_ans=0;}else{}
										
									
									//set passing variables qiz_id,q_id,q_id_count,q_ans_ans
											if($q_id<$q_id_count){
												$q_id++;
												echo '<input type="hidden" name="qiz_id" value='.$qiz_id.'>';
												echo '<input type="hidden" name="q_id" value='.$q_id.'>';
												echo '<input type="hidden" name="q_id_count" value='.$q_id_count.'>';
												echo '<input type="hidden" name="ans" value='.$q_ans_ans.'>';
											}else{
												echo '<input type="hidden" name="qiz_id" value='.$qiz_id.'>';
												echo '<input type="hidden" name="q_id" value="0">';
												echo '<input type="hidden" name="q_id_count" value='.$q_id_count.'>';
												echo '<input type="hidden" name="ans" value='.$q_ans_ans.'>';
												echo '<input type="hidden" name="q_ans_total" value="0">';
												echo '<input type="hidden" name="end" value="1">';
												
											}
									
									Mysql_free_result($qresult);
									mysql_close($conn);

								
						
						}else{	
									
								
									if($_POST["q_id"]!=0){
										
										
											//test answer
											if(!isset($_POST["q_ans_total"])){
												$q_ans_total=0;
											}
											else{
												$q_ans_total=$_POST["q_ans_total"];
											}
											
											$test_ans=$_POST["ans"];
											
											if(isset($_POST["mcq_ans"])){
												$get_ans=$_POST["mcq_ans"];
											}else{
												$get_ans=-1;
											}
											
											
											if($test_ans==$get_ans){
												$q_ans_total++;
												
											}else{
												$q_ans_total=$q_ans_total+0;
											}
											
											
											$qiz_id=$_POST["qiz_id"];
											$q_id=$_POST["q_id"];
											
											//answercount variables
											
											$q_ans_ans_result ="	SELECT q_mcq_ans_num 
																	FROM info_quiz 
																	WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
											$airesult= mysql_query($q_ans_ans_result) or die("function error");
											
											
												while($airetVal=mysql_fetch_array($airesult,MYSQL_ASSOC)){
													foreach($airetVal as $aicell){
														 $q_ans_ans=$aicell;
														}
												}

											
											if(!isset($_POST["q_id_count"])){
											//set q_id_count
												$cwork ="SELECT count(DISTINCT q_id) 
																		AS total 
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id'";
												$rcount=mysql_query($cwork) or die("function error");
																	
												while($qcountVal=mysql_fetch_array($rcount,MYSQL_ASSOC)){
													foreach($qcountVal as $qicount){
														 $q_id_count=$qicount;
														}
												}
											}else{
												$q_id_count=$_POST["q_id_count"];
											}
										
									
									
										//set radio button 2 onwords
										$qdowork ="	SELECT q_mcq1_ans,q_mcq2_ans,q_mcq3_ans,q_mcq4_ans,q_mcq5_ans 
													FROM info_quiz 
													WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
										$qresult= mysql_query($qdowork) or die("function error");
										 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											$ans_num=0;
											foreach($qretVal as $qcell){
												$ans_num++;
											
											echo '			
													<div class="adjest">
													<input type="radio" name="mcq_ans" id="radio'.$ans_num.'" class="radio" value='.$ans_num.' />
													<label for="radio'.$ans_num.'"></label>
													</div>
													<p class="text'.$ans_num.'">
													<span id="one">'.'<span>&nbsp;</span>'.$qcell.'</span>
													</p>';
											
											}
										}
											if($q_id<$q_id_count){
												$q_id++;
												echo '<input type="hidden" name="qiz_id" value='.$qiz_id.'>';
												echo '<input type="hidden" name="q_id" value='.$q_id.'>';
												echo '<input type="hidden" name="q_id_count" value='.$q_id_count.'>';
												echo '<input type="hidden" name="q_ans_total" value='.$q_ans_total.'>';
												echo '<input type="hidden" name="ans" value='.$q_ans_ans.'>';
												
											}else{
												echo '<input type="hidden" name="qiz_id" value='.$qiz_id.'>';
												echo '<input type="hidden" name="q_id" value="0">';
												echo '<input type="hidden" name="q_id_count" value='.$q_id_count.'>';
												echo '<input type="hidden" name="q_ans_total" value='.$q_ans_total.'>';
												echo '<input type="hidden" name="ans" value='.$q_ans_ans.'>';
												echo '<input type="hidden" name="end" value="1">';
											}
								
										Mysql_free_result($qresult);
										mysql_close($conn);
									}else{
										//test answer
											$q_ans_total=$_POST["q_ans_total"];;
											$test_ans=$_POST["ans"];
											$quiz_id=$_POST["qiz_id"];
											if(isset($_POST["mcq_ans"])){
												$get_ans=$_POST["mcq_ans"];
											}else{
												$get_ans=-1;
											}
										//echo $get_ans;
											if($test_ans==$get_ans){
												$q_ans_total++;
												
											}else{
												$q_ans_total=$q_ans_total+0;
											}
										//echo $q_ans_total;
										$last=1;
										//insert marks for current user
										
										$me=$_SESSION["user"];
										
										
										include '/lib/connect.php';

											$dowork ="INSERT INTO marks(quiz_id,marks,stu_id) VALUES('$quiz_id','$q_ans_total','$me')";
											 
											mysql_query($dowork,$conn);
											mysql_close($conn);
										
										
	
	
										
										
										echo '
										<iframe src="sub_frm/endquiz.php" width="98%" height="90%" frameborder="0" noresize="noresize" scrolling="no" allowtransparency="no">
										';
									
										
									}								
						}
							
							
							
							
						?>
						
					</div>
						
					
					
					
					
					</div>
						<?php
						if($last!=1){
							echo	'<button class="_button _button-1" >Done</button>';
						}
						
						?>	
					</form>
					<?php
						if($last!=1){
							echo	'<button  onclick="toggle_visibility('."'"."foo"."'".')" onmouseout="toggleBlock('."'"."foo"."'".')" class="_button _button-2">Hint</button>';
						
							echo '	<div class="infoimg">
									<img src="images/info.png" width="40px">
									<p>Choose the correct response wisely.you do not have a second opportunity. </p>
								</div>';
						}
						
								$q_hint=$_SESSION["hint"];
						
						
						echo '<div class="hint" id="foo" >
							<img src="images/hint.png">
							<p id="txthint">'.$q_hint.'</p>
						</div>';
						?>
						
						
					
		
					

</body>
</html>