<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System | Admin SignUp</title>
		<link rel="stylesheet" href="css/manage_quiz_and_remove.css">
		<link rel="stylesheet" href="css/tabstyle.css">
		<link rel="stylesheet" href="css/formstyle.css">
		<script language="javascript" src="js/tab.js">
		</script>
	
		<script language="javascript" src="js/bigButtonManage.js">
		</script>
		
	</head>
	
	<body onLoad="openForm(event, 'Sign up')">
		<div class="welcome">
			
			
			
			
			</br>
		</div>
			
	
			<div class="dybtn">
				<div class="module form-module">
					<ul class="tab">
						
						<li><a>Administration Pannel For Admin</a></li>
					</ul>
						<div id="Sign up" class="tabcontent">
							<h2>Create an account</h2>
							<form action="admin_sign.php" method="post">
								<input name="uid" type="text" placeholder="ID Number"/>
								<input name="uname" type="text" placeholder="Username"/>
								<input name="upass" type="password" placeholder="Password"/>
								<input name="uemail" type="email" placeholder="Email Address"/>
								<input name="ucontact" type="number" min="0000000000" max="9999999999" placeholder="Phone Number"/>
								<button>Register</button>
							</form>
						</div>

				</div>		
			</div>
			

			
		<div class="dyimg">
		   <img src="images/tree.jpg" noresize="resize" alt="tree" align="right"/>
		</div>
		
		
	</body>
</html>