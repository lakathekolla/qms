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
			function bigImg(x) {
				x.style.height = "50px";
				x.style.width = "50px";}
													
			function normalImg(x) {
				x.style.height = "45px";
				x.style.width = "45px";
			}
			
			function myUpload() {
				var x = document.createElement("INPUT");
				x.setAttribute("type", "file");
				document.body.appendChild(x);
			}
			
		function redirectWebStart() {
				 window.top.location.href = "../lectures.php";
			}
											
		function textEft(){
				function signInMass(){
					document.write("");
				}
		document.write("");
		setTimeout('signInMass()', 5000);
		setTimeout('redirectWebStart()', 5000);
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
		#up{
			position: relative;
			width:45px;
			height:45px;
			left:195px;
			top:0px;
			-webkit-animation: fadeEffect 2s;
			animation: fadeEffect 2s;
			opacity: 0.8;
		}
		#up:hover { 
			opacity: 1;
			box-shadow: 20px 50px 5px rgba(0, 0, 0, .5);
			-webkit-box-shadow: 2px -2px 5px rgba(0,0,0,0.6);
			-o-box-shadow: -5px -5px rgba(0,0,0,0.6);
			border-radius:50px;
		}
		#fh{
			display: none;
		}
		.iupload > input{
			display: none;
		}
		.iupload{
			position: fixed;
			width:100px;
			height:60px;
			left:195px;
			top:370px;
		}
		.infoup{
			position: fixed;
			width:100px;
			height:60px;
			left:150px;
			top:330px;
			opacity: .4;
		}
	
		</style>
	
	</head>
	<body onload="toggleBlock('foo')">
	
	</div>

	<div class="welcome">
	
	<form action="editor.php" method="post">
	
		<div id="qectioncontainer">
			<img id="qnimage" src="images/q.png" width="45"/>
			<p id="text2n">
			
						<?php
						session_start();
						$last=0;
						include '/lib/connect.php';
							if(isset($_POST["id_me"])){
								$qiz_name=$_POST["id_me"];
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
										
										if(isset($_SESSION["q_id_count"])){
											$_SESSION["q_id_count"]=0;
										}else{}
											$_SESSION["q_id_count"]=$q_id_count;
										

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
										
										
						//interface connect Quection			
								echo $qiz_name." ".$q_id." : ";
								echo '	
								
								
								
								<input type="text" id="q_txt" name="q_txt" placeholder="'.$q_txt.'">
								<input size="8" type="text" id="q_pic" name="q_pic" placeholder="'.$q_pic.'">
										<input type="hidden" id="qiz_name" name="qiz_name" value="'.$qiz_name.'">
										<input type="hidden" id="q_txt_old_val" name="q_txt_old_val">
										<input type="hidden" id="q_pic_old_val" name="q_pic_old_val">
										<input type="hidden" id="q_txt_old" name="q_txt_old" value="'.$q_txt.'">
										<input type="hidden" id="q_pic_old" name="q_pic_old" value="'.$q_pic.'">
								<script language="javascript">
								
								
								document.getElementById("q_txt").value=document.getElementById("q_txt_old_val").value ;
								document.getElementById("q_pic").value=document.getElementById("q_pic_old_val").value ;
								</script>	
										
										
										
										';
								
								
							//set pic	
								
								$qgetwork ="	SELECT q_pic 
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
								
								
								
								
								
								if($q_id_count!=$q_id){
									$q_id++;
									echo '<input type="hidden" id="q_id" name="q_id" value='.$q_id.'>';
								}else{
									echo '<input type="hidden" id="q_id" name="q_id" value="0">';
									echo '<input type="hidden" id="q_id_end" name="q_id_end" value='.$q_id.'>';
								}
								
									
							$_SESSION["quiz_id"]=$qiz_id;
							
			//end of Editable fistpage				
							}else{
								
								if(isset($_POST["add_me"])){
										
			//end of Adding First Page					
								}else{
							
									//if to check new or old add go old path to cycle
										if($_POST["q_id"]!="0" & !isset($_POST["go_old"])){
											$q_id=$_POST["q_id"];
											$qiz_name=$_POST["qiz_name"];
											$q_txt_old=$_POST["q_txt_old"];
											$q_pic_old=$_POST["q_pic_old"];
											$qiz_id=$_SESSION["quiz_id"];
											
											
												if($_POST["q_txt"]!=""){
														$q_txt=$_POST["q_txt"];
														$q_pic=$_POST["q_pic"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														
														//set quection
															$qsetwork ="	UPDATE info_quiz
																			SET q_txt='$q_txt'
																			WHERE q_txt='$q_txt_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														if($_POST["q_pic"]!=""){
														//set pic
															$qsetwork ="	UPDATE info_quiz
																			SET q_pic='$q_pic'
																			WHERE q_pic='$q_pic_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
															$qsresult= mysql_query($qsetwork) or die("function error");
																
														}else{}
														
														$q_id++;
														
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
														
														echo $qiz_name." ".$q_id." : ";
														echo '	<input type="text" id="q_txt" name="q_txt" placeholder="'.$q_txt.'">
																<input size="8" type="text" id="q_pic" name="q_pic" placeholder="'.$q_pic.'">
																<input type="hidden" id="qiz_name" name="qiz_name" value="'.$qiz_name.'">
																<input type="hidden" id="q_txt_old" name="q_txt_old" value="'.$q_txt.'">
																<input type="hidden" id="q_pic_old" name="q_pic_old" value="'.$q_pic.'">';
																
														//set pic	
								
															$qgetwork ="	SELECT q_pic 
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
														
														$q_id++;
														
														
														
														
														
														if($q_id_count!=$q_id){
															echo '<input type="hidden" id="q_id" name="q_id" value='.$q_id.'>';
														}else{
															echo '<input type="hidden" id="q_id" name="q_id" value="0">';
															echo '<input type="hidden" id="q_id_end" name="q_id_end" value='.$q_id.'>';
														}
														
												}else{	
												
												
														$q_id_count=$_SESSION["q_id_count"];
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
														
														if($_POST["q_pic"]!=""){
															$q_pic=$_POST["q_pic"];
															
														//set pic
															$qsetwork ="	UPDATE info_quiz
																			SET q_pic='$q_pic'
																			WHERE q_pic='$q_pic_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
															$qsresult= mysql_query($qsetwork) or die("function error");
																
															}
														
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
														
														echo $qiz_name." ".$q_id." :";
														echo '	<input type="text" id="q_txt" name="q_txt" placeholder="'.$q_txt.'">
																<input size="8" type="text" id="q_pic" name="q_pic" placeholder="'.$q_pic.'">
																<input type="hidden" id="qiz_name" name="qiz_name" value="'.$qiz_name.'">
																<input type="hidden" id="q_txt_old" name="q_txt_old" value="'.$q_txt.'">
																<input type="hidden" id="q_pic_old" name="q_pic_old" value="'.$q_pic.'">';
														
														//set pic	
								
															$qgetwork ="	SELECT q_pic 
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
														
														
														
														
														
														
														if($q_id_count!=$q_id){
															$q_id++;
															echo '<input type="hidden" id="q_id" name="q_id" value='.$q_id.'>';
														}else{
															echo '<input type="hidden" id="q_id" name="q_id" value="0">';
															echo '<input type="hidden" id="q_id_end" name="q_id_end" value='.$q_id.'>';
														}
														
												}
										
										}else{
											
											$q_id_end=$_POST["q_id_end"];
				
											if($_POST["q_txt"]!=""){
											$q_txt=$_POST["q_txt"];
											$q_txt_old=$_POST["q_txt_old"];
											$qiz_id=$_SESSION["quiz_id"];
													//set quection
															$qsetwork ="	UPDATE info_quiz
																			SET q_txt='$q_txt'
																			WHERE q_txt='$q_txt_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_pic"]!=""){
											$q_pic=$_POST["q_pic"];
											$q_pic_old=$_POST["q_pic_old"];
											$qiz_id=$_SESSION["quiz_id"];
													//set quection
															$qsetwork ="	UPDATE info_quiz
																			SET q_pic='$q_pic'
																			WHERE q_txt='$q_pic_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											echo "The Quiz Edit is successful.";
											echo '</br>';echo '</br>';
											echo '<img class="qimg" width="115%" src="images/end.jpg"/>' ;
														
					
											
										}		
								}//not set add_me
							}//not set id_me
							
							
							
							
							
							
								
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
									
									<span>MCQ and Answer</span>
									</p>
								</div>';
					
					}
						
						?>	 
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
										
									echo "1.";
									//set answer1
									$qdowork ="	SELECT q_mcq1_ans
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_mcq1_ans=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_mcq1_ans" name="q_mcq1_ans" placeholder="'.$q_mcq1_ans.'">
								<input type="hidden" id="q_mcq1_ans_old_val" name="q_mcq1_ans_old_val">
								<input type="hidden" id="q_mcq1_ans_old" name="q_mcq1_ans_old" value="'.$q_mcq1_ans.'">
									<script language="javascript">
										document.getElementById("q_mcq1_ans").value=document.getElementById("q_mcq1_ans_old_val").value ;
									</script>	
									';
									echo '</br></br>';
									echo "2.";
										//set answer2
									$qdowork ="	SELECT q_mcq2_ans
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_mcq2_ans=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_mcq2_ans" name="q_mcq2_ans" placeholder="'.$q_mcq2_ans.'">
								<input type="hidden" id="q_mcq2_ans_old_val" name="q_mcq2_ans_old_val">
								<input type="hidden" id="q_mcq2_ans_old" name="q_mcq2_ans_old" value="'.$q_mcq2_ans.'">
									<script language="javascript">
										document.getElementById("q_mcq2_ans").value=document.getElementById("q_mcq2_ans_old_val").value ;
									</script>	
									';
									echo '</br></br>';
									echo "3.";
									//set answer3
									$qdowork ="	SELECT q_mcq3_ans
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_mcq3_ans=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_mcq3_ans" name="q_mcq3_ans" placeholder="'.$q_mcq3_ans.'">
								<input type="hidden" id="q_mcq3_ans_old_val" name="q_mcq3_ans_old_val">
								<input type="hidden" id="q_mcq3_ans_old" name="q_mcq3_ans_old" value="'.$q_mcq3_ans.'">
									<script language="javascript">
										document.getElementById("q_mcq3_ans").value=document.getElementById("q_mcq3_ans_old_val").value ;
									</script>	
									';
										echo '</br></br>';
										echo "4.";
										//set answer4
									$qdowork ="	SELECT q_mcq4_ans
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_mcq4_ans=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_mcq4_ans" name="q_mcq4_ans" placeholder="'.$q_mcq4_ans.'">
								<input type="hidden" id="q_mcq4_ans_old_val" name="q_mcq4_ans_old_val">
								<input type="hidden" id="q_mcq4_ans_old" name="q_mcq4_ans_old" value="'.$q_mcq4_ans.'">
									<script language="javascript">
										document.getElementById("q_mcq4_ans").value=document.getElementById("q_mcq4_ans_old_val").value ;
									</script>	
									';
										echo '</br></br>';
										echo "5.";
										//set answer5
									$qdowork ="	SELECT q_mcq5_ans
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_mcq5_ans=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_mcq5_ans" name="q_mcq5_ans" placeholder="'.$q_mcq5_ans.'">
								<input type="hidden" id="q_mcq5_ans_old_val" name="q_mcq5_ans_old_val">
								<input type="hidden" id="q_mcq5_ans_old" name="q_mcq5_ans_old" value="'.$q_mcq5_ans.'">
									<script language="javascript">
										document.getElementById("q_mcq5_ans").value=document.getElementById("q_mcq5_ans_old_val").value ;
									</script>	
									';
									
//eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
									echo '</br><hr>';
									echo "H.";
									//set hint
									$qdowork ="	SELECT q_hint
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_hint=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_hint" name="q_hint" placeholder="'.$q_hint.'">
								<input type="hidden" id="q_hint_old_val" name="q_hint_old_val">
								<input type="hidden" id="q_hint_old" name="q_hint_old" value="'.$q_hint.'">
									<script language="javascript">
										document.getElementById("q_hint").value=document.getElementById("q_hint_old_val").value ;
									</script>	
									';
									echo '</br></br>';
									echo "A.";
									//set answer number
									$qdowork ="	SELECT q_mcq_ans_num
												FROM info_quiz 
												WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
													
									$qresult= mysql_query($qdowork) or die("function error");
									 
										while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
											foreach($qretVal as $qcell){
												$q_mcq_ans_num=$qcell;
											}
										}
										echo '	
								
								<input type="text" id="q_mcq_ans_num" name="q_mcq_ans_num" placeholder='.$q_mcq_ans_num.'>
								<input type="hidden" id="q_mcq_ans_num_old_val" name="q_mcq_ans_num_old_val">
								<input type="hidden" id="q_mcq_ans_num_old" name="q_mcq_ans_num_old" value='.$q_mcq_ans_num.'>
									<script language="javascript">
										document.getElementById("q_mcq_ans_num").value=document.getElementById("q_mcq_ans_num_old_val").value ;
									</script>	
									';
									
									
									
//eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
								$q_id_count=$_SESSION["q_id_count"];
								
								echo '<input type="hidden" id="qiz_name2" name="qiz_name2" value="'.$qiz_name.'">';
								
								if($q_id_count!=$q_id){
									$q_id++;
									echo '<input type="hidden" id="q_id2" name="q_id2" value='.$q_id.'>';
								}else{
									echo '<input type="hidden" id="q_id2" name="q_id2" value="0">';
									echo '<input type="hidden" id="q_id_end" name="q_id_end" value='.$q_id.'>';
								}
								
									
							

					//start second MCQ page		
							}else{
								//if to check new or old add go old path to cycle
										if($_POST["q_id"]!="0" & !isset($_POST["go_old"])){
											$q_id=$_POST["q_id2"];
											$qiz_name=$_POST["qiz_name2"];
											$q_mcq1_ans_old=$_POST["q_mcq1_ans_old"];
											$q_mcq2_ans_old=$_POST["q_mcq2_ans_old"];
											$q_mcq3_ans_old=$_POST["q_mcq3_ans_old"];
											$q_mcq4_ans_old=$_POST["q_mcq4_ans_old"];
											$q_mcq5_ans_old=$_POST["q_mcq5_ans_old"];
											
											$q_hint_old=$_POST["q_hint_old"];
											$q_mcq_ans_num_old=$_POST["q_mcq_ans_num_old"];
											
											$qiz_id=$_SESSION["quiz_id"];
											
											echo "1.";
												if($_POST["q_mcq1_ans"]!=""){
														$q_mcq1_ans=$_POST["q_mcq1_ans"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection1
															$qsetwork ="	UPDATE info_quiz
																			SET q_mcq1_ans='$q_mcq1_ans'
																			WHERE q_mcq1_ans='$q_mcq1_ans_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer1
															$qdowork ="	SELECT q_mcq1_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq1_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq1_ans" name="q_mcq1_ans" placeholder="'.$q_mcq1_ans.'">
														<input type="hidden" id="q_mcq1_ans_old_val" name="q_mcq1_ansold_val">
														<input type="hidden" id="q_mcq1_ans_old" name="q_mcq1_ans_old" value="'.$q_mcq1_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq1_ans").value=document.getElementById("q_mcq1_ans_old_val").value ;
															</script>	
															';
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer1
														
															$qdowork ="	SELECT q_mcq1_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq1_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq1_ans" name="q_mcq1_ans" placeholder="'.$q_mcq1_ans.'">
														<input type="hidden" id="q_mcq1_ans_old_val" name="q_mcq1_ansold_val">
														<input type="hidden" id="q_mcq1_ans_old" name="q_mcq1_ans_old" value="'.$q_mcq1_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq1_ans").value=document.getElementById("q_mcq1_ans_old_val").value ;
															</script>	
															';
													
												}
												echo '</br></br>';
												echo "2.";
												
										//end one
													$q_id=$_POST["q_id2"];
														if($_POST["q_mcq2_ans"]!=""){
														$q_mcq2_ans=$_POST["q_mcq2_ans"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection2
															$qsetwork ="	UPDATE info_quiz
																			SET q_mcq2_ans='$q_mcq2_ans'
																			WHERE q_mcq2_ans='$q_mcq2_ans_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer2
															$qdowork ="	SELECT q_mcq2_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq2_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq2_ans" name="q_mcq2_ans" placeholder="'.$q_mcq2_ans.'">
														<input type="hidden" id="q_mcq2_ans_old_val" name="q_mcq2_ansold_val">
														<input type="hidden" id="q_mcq2_ans_old" name="q_mcq2_ans_old" value="'.$q_mcq2_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq2_ans").value=document.getElementById("q_mcq2_ans_old_val").value ;
															</script>	
															';
														
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer2
															$qdowork ="	SELECT q_mcq2_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq2_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq2_ans" name="q_mcq2_ans" placeholder="'.$q_mcq2_ans.'">
														<input type="hidden" id="q_mcq2_ans_old_val" name="q_mcq2_ansold_val">
														<input type="hidden" id="q_mcq2_ans_old" name="q_mcq2_ans_old" value="'.$q_mcq2_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq2_ans").value=document.getElementById("q_mcq2_ans_old_val").value ;
															</script>	
															';
												}
											echo '</br></br>';	
											echo "3.";
											
										//end two
										$q_id=$_POST["q_id2"];
										if($_POST["q_mcq3_ans"]!=""){
														$q_mcq3_ans=$_POST["q_mcq3_ans"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection3
															$qsetwork ="	UPDATE info_quiz
																			SET q_mcq3_ans='$q_mcq3_ans'
																			WHERE q_mcq3_ans='$q_mcq3_ans_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer3
															$qdowork ="	SELECT q_mcq3_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq3_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq3_ans" name="q_mcq3_ans" placeholder="'.$q_mcq3_ans.'">
														<input type="hidden" id="q_mcq3_ans_old_val" name="q_mcq3_ansold_val">
														<input type="hidden" id="q_mcq3_ans_old" name="q_mcq3_ans_old" value="'.$q_mcq3_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq3_ans").value=document.getElementById("q_mcq3_ans_old_val").value ;
															</script>	
															';
														$q_id++;
														
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer3
															$qdowork ="	SELECT q_mcq3_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq3_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq3_ans" name="q_mcq3_ans" placeholder="'.$q_mcq3_ans.'">
														<input type="hidden" id="q_mcq3_ans_old_val" name="q_mcq3_ansold_val">
														<input type="hidden" id="q_mcq3_ans_old" name="q_mcq3_ans_old" value="'.$q_mcq3_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq3_ans").value=document.getElementById("q_mcq3_ans_old_val").value ;
															</script>	
															';
												}
											echo '</br></br>';	
											echo "4.";
											
										//end three
										$q_id=$_POST["q_id2"];
										if($_POST["q_mcq4_ans"]!=""){
														$q_mcq4_ans=$_POST["q_mcq4_ans"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection4
															$qsetwork ="	UPDATE info_quiz
																			SET q_mcq4_ans='$q_mcq4_ans'
																			WHERE q_mcq4_ans='$q_mcq4_ans_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer4
															$qdowork ="	SELECT q_mcq4_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq4_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq4_ans" name="q_mcq4_ans" placeholder="'.$q_mcq4_ans.'">
														<input type="hidden" id="q_mcq4_ans_old_val" name="q_mcq4_ansold_val">
														<input type="hidden" id="q_mcq4_ans_old" name="q_mcq4_ans_old" value="'.$q_mcq4_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq4_ans").value=document.getElementById("q_mcq4_ans_old_val").value ;
															</script>	
															';
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer4
															$qdowork ="	SELECT q_mcq4_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq4_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq4_ans" name="q_mcq4_ans" placeholder="'.$q_mcq4_ans.'">
														<input type="hidden" id="q_mcq4_ans_old_val" name="q_mcq4_ansold_val">
														<input type="hidden" id="q_mcq4_ans_old" name="q_mcq4_ans_old" value="'.$q_mcq4_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq4_ans").value=document.getElementById("q_mcq4_ans_old_val").value ;
															</script>	
															';
												}
											echo '</br></br>';
											echo "5.";
											
										//end four
										$q_id=$_POST["q_id2"];
										if($_POST["q_mcq5_ans"]!=""){
														$q_mcq5_ans=$_POST["q_mcq5_ans"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection5
															$qsetwork ="	UPDATE info_quiz
																			SET q_mcq5_ans='$q_mcq5_ans'
																			WHERE q_mcq5_ans='$q_mcq5_ans_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer5
															$qdowork ="	SELECT q_mcq5_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq5_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq5_ans" name="q_mcq5_ans" placeholder="'.$q_mcq5_ans.'">
														<input type="hidden" id="q_mcq5_ans_old_val" name="q_mcq5_ansold_val">
														<input type="hidden" id="q_mcq5_ans_old" name="q_mcq5_ans_old" value="'.$q_mcq5_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq5_ans").value=document.getElementById("q_mcq5_ans_old_val").value ;
															</script>	
															';
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer5
															$qdowork ="	SELECT q_mcq5_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq5_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq5_ans" name="q_mcq5_ans" placeholder="'.$q_mcq5_ans.'">
														<input type="hidden" id="q_mcq5_ans_old_val" name="q_mcq5_ansold_val">
														<input type="hidden" id="q_mcq5_ans_old" name="q_mcq5_ans_old" value="'.$q_mcq5_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq5_ans").value=document.getElementById("q_mcq5_ans_old_val").value ;
															</script>	
															';
												}
											echo '</br><hr>';
											echo "H.";
											
										//end five
										
										$q_id=$_POST["q_id2"];
										if($_POST["q_hint"]!=""){
														$q_hint=$_POST["q_hint"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection hint
															$qsetwork ="	UPDATE info_quiz
																			SET q_hint='$q_hint'
																			WHERE q_hint='$q_hint_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer hint
															$qdowork ="	SELECT q_hint
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_hint=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_hint" name="q_hint" placeholder="'.$q_hint.'">
														<input type="hidden" id="q_hint_old_val" name="q_hintold_val">
														<input type="hidden" id="q_hint_old" name="q_hint_old" value="'.$q_hint.'">
															<script language="javascript">
																document.getElementById("q_hint").value=document.getElementById("q_hint_old_val").value ;
															</script>	
															';
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer hint
															$qdowork ="	SELECT q_hint
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_hint=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_hint" name="q_hint" placeholder="'.$q_hint.'">
														<input type="hidden" id="q_hint_old_val" name="q_hintold_val">
														<input type="hidden" id="q_hint_old" name="q_hint_old" value="'.$q_hint.'">
															<script language="javascript">
																document.getElementById("q_hint").value=document.getElementById("q_hint_old_val").value ;
															</script>	
															';
												}
											echo '</br></br>';
											echo "A.";
											
										//end hint
										
										$q_id=$_POST["q_id2"];
										if($_POST["q_mcq_ans_num"]!=""){
														$q_mcq_ans_num=$_POST["q_mcq_ans_num"];
														$q_id_count=$_SESSION["q_id_count"];
														$q_id--;
														//set quection answer
															$qsetwork ="	UPDATE info_quiz
																			SET q_mcq_ans_num='$q_mcq_ans_num'
																			WHERE q_mcq_ans_num='$q_mcq_ans_num_old' AND q_id='$q_id' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
														
														
														
														
														$q_id++;
														
														//get answer answer
															$qdowork ="	SELECT q_mcq_ans_num
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq_ans_num=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq_ans_num" name="q_mcq_ans_num" placeholder='.$q_mcq_ans_num.'>
														<input type="hidden" id="q_mcq_ans_num_old_val" name="q_mcq_ans_numold_val">
														<input type="hidden" id="q_mcq_ans_num_old" name="q_mcq_ans_num_old" value='.$q_mcq_ans_num.'>
															<script language="javascript">
																document.getElementById("q_mcq_ans_num").value=document.getElementById("q_mcq_ans_num_old_val").value ;
															</script>	
															';
															
													//end of answer value
														$q_id++;
														
														
												}else{
													$q_id=$_POST["q_id2"];
													
														
														//get answer answer
															$qdowork ="	SELECT q_mcq_ans_num
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq_ans_num=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq_ans_num" name="q_mcq_ans_num" placeholder='.$q_mcq_ans_num.'>
														<input type="hidden" id="q_mcq_ans_num_old_val" name="q_mcq_ans_numold_val">
														<input type="hidden" id="q_mcq_ans_num_old" name="q_mcq_ans_num_old" value='.$q_mcq_ans_num.'>
															<script language="javascript">
																document.getElementById("q_mcq_ans_num").value=document.getElementById("q_mcq_ans_num_old_val").value ;
															</script>	
															';
												}
										//end answer num		
										$q_id=$_POST["q_id2"];
										$q_id_count=$_SESSION["q_id_count"];
											echo '<input type="hidden" id="qiz_name2" name="qiz_name2" value="'.$qiz_name.'">';
										
												if($q_id_count!=$q_id){
															$q_id++;
															echo '<input type="hidden" id="q_id2" name="q_id2" value='.$q_id.'>';
														}else{
															echo '<input type="hidden" id="q_id2" name="q_id2" value="0">';
															echo '<input type="hidden" id="q_id_end" name="q_id_end" value='.$q_id.'>';
														}
										
								}else{
									
				//start of cycle to MCQ				
									$q_id=$_POST["q_id2"];
									$qiz_name=$_POST["qiz_name2"];
									$qiz_id=$_SESSION["quiz_id"];
										if($_POST["q_id2"]!=0){
										
									//get answer1
															$qdowork ="	SELECT q_mcq1_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq1_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq1_ans" name="q_mcq1_ans" placeholder="'.$q_mcq1_ans.'">
														<input type="hidden" id="q_mcq1_ans_old_val" name="q_mcq1_ansold_val">
														<input type="hidden" id="q_mcq1_ans_old" name="q_mcq1_ans_old" value="'.$q_mcq1_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq1_ans").value=document.getElementById("q_mcq1_ans_old_val").value ;
															</script>	
															';
									
									//get answer2
															$qdowork ="	SELECT q_mcq2_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq2_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq2_ans" name="q_mcq2_ans" placeholder="'.$q_mcq2_ans.'">
														<input type="hidden" id="q_mcq2_ans_old_val" name="q_mcq2_ansold_val">
														<input type="hidden" id="q_mcq2_ans_old" name="q_mcq2_ans_old" value="'.$q_mcq2_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq2_ans").value=document.getElementById("q_mcq2_ans_old_val").value ;
															</script>	
															';
															
									//get answer3
															$qdowork ="	SELECT q_mcq3_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq3_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq3_ans" name="q_mcq3_ans" placeholder="'.$q_mcq3_ans.'">
														<input type="hidden" id="q_mcq3_ans_old_val" name="q_mcq3_ansold_val">
														<input type="hidden" id="q_mcq3_ans_old" name="q_mcq3_ans_old" value="'.$q_mcq3_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq3_ans").value=document.getElementById("q_mcq3_ans_old_val").value ;
															</script>	
															';
															
									//get answer4
															$qdowork ="	SELECT q_mcq4_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq4_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq4_ans" name="q_mcq4_ans" placeholder="'.$q_mcq4_ans.'">
														<input type="hidden" id="q_mcq4_ans_old_val" name="q_mcq4_ansold_val">
														<input type="hidden" id="q_mcq4_ans_old" name="q_mcq4_ans_old" value="'.$q_mcq4_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq4_ans").value=document.getElementById("q_mcq4_ans_old_val").value ;
															</script>	
															';
															
									//get answer5
															$qdowork ="	SELECT q_mcq5_ans
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq5_ans=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq5_ans" name="q_mcq5_ans" placeholder="'.$q_mcq5_ans.'">
														<input type="hidden" id="q_mcq5_ans_old_val" name="q_mcq5_ansold_val">
														<input type="hidden" id="q_mcq5_ans_old" name="q_mcq5_ans_old" value="'.$q_mcq5_ans.'">
															<script language="javascript">
																document.getElementById("q_mcq5_ans").value=document.getElementById("q_mcq5_ans_old_val").value ;
															</script>	
															';
															
									//get answer hint
															$qdowork ="	SELECT q_hint
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_hint=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_hint" name="q_hint" placeholder="'.$q_hint.'">
														<input type="hidden" id="q_hint_old_val" name="q_hintold_val">
														<input type="hidden" id="q_hint_old" name="q_hint_old" value="'.$q_hint.'">
															<script language="javascript">
																document.getElementById("q_hint").value=document.getElementById("q_hint_old_val").value ;
															</script>	
															';
															
									//get answer answer
															$qdowork ="	SELECT q_mcq_ans_num
																		FROM info_quiz 
																		WHERE quiz_id='$qiz_id' AND q_id='$q_id'";
																			
															$qresult= mysql_query($qdowork) or die("function error");
															 
																while($qretVal=mysql_fetch_array($qresult,MYSQL_ASSOC)){
																	foreach($qretVal as $qcell){
																		$q_mcq_ans_num=$qcell;
																	}
																}
																echo '	
														
														<input type="text" id="q_mcq_ans_num" name="q_mcq_ans_num" placeholder='.$q_mcq_ans_num.'>
														<input type="hidden" id="q_mcq_ans_num_old_val" name="q_mcq_ans_numold_val">
														<input type="hidden" id="q_mcq_ans_num_old" name="q_mcq_ans_num_old" value='.$q_mcq_ans_num.'>
															<script language="javascript">
																document.getElementById("q_mcq_ans_num").value=document.getElementById("q_mcq_ans_num_old_val").value ;
															</script>	
															';
															
															
									//passer
										$q_id=$_POST["q_id2"];
										
												if($q_id_count!=$q_id){
															echo '<input type="hidden" id="q_id2" name="q_id2" value='.$q_id.'>';
														}else{
															echo '<input type="hidden" id="q_id2" name="q_id2" value="0">';
															echo '<input type="hidden" id="q_id_end" name="q_id_end" value='.$q_id.'>';
														}
									
									
					//end of cycle
									}else{
										//end of first page END
										
										$q_id_end=$_POST["q_id_end"];
										
										$q_mcq1_ans_old=$_POST["q_mcq1_ans_old"];
										$q_mcq2_ans_old=$_POST["q_mcq2_ans_old"];
										$q_mcq3_ans_old=$_POST["q_mcq3_ans_old"];
										$q_mcq4_ans_old=$_POST["q_mcq4_ans_old"];
										$q_mcq5_ans_old=$_POST["q_mcq5_ans_old"];
											
										$q_hint_old=$_POST["q_hint_old"];
										$q_mcq_ans_num_old=$_POST["q_mcq_ans_num_old"];
										$qiz_id=$_SESSION["quiz_id"];
				
											if($_POST["q_mcq1_ans"]!=""){
											$q_mcq1_ans=$_POST["q_mcq1_ans"];
											
											
												//set quection 1
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq1_ans='$q_mcq1_ans'
														WHERE q_mcq1_ans='$q_mcq1_ans_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_mcq2_ans"]!=""){
											$q_mcq2_ans=$_POST["q_mcq2_ans"];
											
											
												//set quection 2
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq2_ans='$q_mcq2_ans'
														WHERE q_mcq2_ans='$q_mcq2_ans_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_mcq3_ans"]!=""){
											$q_mcq3_ans=$_POST["q_mcq3_ans"];
											
											
												//set quection 3
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq3_ans='$q_mcq3_ans'
														WHERE q_mcq3_ans='$q_mcq3_ans_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_mcq3_ans"]!=""){
											$q_mcq3_ans=$_POST["q_mcq3_ans"];
											
											
												//set quection 1
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq3_ans='$q_mcq3_ans'
														WHERE q_mcq3_ans='$q_mcq3_ans_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_mcq4_ans"]!=""){
											$q_mcq4_ans=$_POST["q_mcq4_ans"];
											
											
												//set quection 4
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq4_ans='$q_mcq4_ans'
														WHERE q_mcq4_ans='$q_mcq4_ans_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_mcq5_ans"]!=""){
											$q_mcq5_ans=$_POST["q_mcq5_ans"];
											
											
												//set quection 5
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq5_ans='$q_mcq5_ans'
														WHERE q_mcq5_ans='$q_mcq5_ans_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_hint"]!=""){
											$q_hint=$_POST["q_hint"];
											
											
												//set quection hint
													$qsetwork ="	UPDATE info_quiz
														SET q_hint='$q_hint'
														WHERE q_hint='$q_hint_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
											if($_POST["q_mcq_ans_num"]!=""){
											$q_mcq_ans_num=$_POST["q_mcq_ans_num"];
											
											
												//set quection ans
													$qsetwork ="	UPDATE info_quiz
														SET q_mcq_ans_num='$q_mcq_ans_num'
														WHERE q_mcq_ans_num='$q_mcq_ans_num_old' AND q_id='$q_id_end' AND quiz_id='$qiz_id'";
															
														$qsresult= mysql_query($qsetwork) or die("function error");
											}else{}
											
										echo '<img width="90%" src="images/endside.jpg"/>' ;
										
										
										echo '<script>
											textEft();
											</script>' ;
										
									}
								}
							}		
						?>	
				</div>
			</div>
			<?php
			
			
			if(isset($_POST["q_id2"])||isset($_POST["q_id"])){
			if($_POST["q_id2"]==0 ||$_POST["q_id"]==0){
			$last=1;}
			
			}else{
				$last=0;
			}
			
						if($last!=1){
							echo	'<button class="_button _button-1" >Next</button>';
						}
						
						?>	
						
			</form>			
						<?php
						if($last!=1){
							echo	'<button  onclick="toggle_visibility('."'"."foo"."'".')"  class="_button _button-2">Hint</button>';
						
							echo '	<div class="infoimg">
									<img src="images/info.png" width="40px">
									<p>The Changing Image is Only Allowed With Change of Quection. </p>
									
								</div>';
						}
						
								
						
						if(isset($q_hint)){
							
						echo '<div class="hint" id="foo" >
							<img src="images/hint.png">
							<p id="txthint">'.$q_hint.'</p>
						</div>';}
						?>
		
		<?php //  display  file  upload  form
if($last!=1){
					if  (!isset($_POST['submit']) || $last!=1){ 
			echo '	<div class="iupload">
							<form target="frame" enctype="multipart/form-data" action="<?php echo $_SERVER['."'".'PHP_SELF'."'".']?>" method="post">
							<input type="hidden" name="MAX_FILE_SIZE" value="8000000" /> 
								<label for="file-up">
									<img id="up" onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="images/ui.png" width="40px"/>
								</label>
							<input type="submit" id="file-up" name="submit" value="Upload  File" style="display:none;/>
								<label for="file-input">
								</label>
								<label for="file-input">
									<img id="up" onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="images/us.png" width="40px"/>
								</label>
							<input id="file-input" type="file" name="data" style="display:none;" />
							</form>
				<iframe id="fh" name="frame"></iframe>

				</div> ';

    

					

					}  else  {

					//  check  uploaded  file  size
							if  ($_FILES['data']['size']  ==  0){
								die("ERROR:  Zero  byte  file  upload");
							}
					//  check  if  file  type  is  allowed  (optional)
						$allowedFileTypes  =  array("image/gif","image/jpeg","image/png");
							if(!in_array($_FILES['data']['type'],  $allowedFileTypes)) {
								die("ERROR:  File  type  not  permitted");
							} 
					//  check  if  this  is  a  valid  upload
						if  (!is_uploaded_file($_FILES['data']['tmp_name']))   {
							die("ERROR:  Not  a  valid  file  upload"); } //  set  the  name  of  the  target  directory

							
					//  copy  the  uploaded  file  to  the  directory
						$uploadDir  =  "images/upload/"; 
							move_uploaded_file($_FILES['data']['tmp_name'],$uploadDir.$_FILES['data']['name'])  or  die("Cannot  copy  uploaded  file"); //  display  success  message
							echo  '<script>alert(File  successfully  uploaded  to  '.$uploadDir  .$_FILES['data']['name'].')</script>'; } 
			}else{
				//end up Page End First Last
				
			}			
        
 
			?>
			
			<div class="infoup">
				<img  src="images/insupload.jpg" width="200px">
			</div>
			
			
</body>
</html>