<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Faculty of Science | Quiz Management System</title>
	<link rel="stylesheet" href="css/tabstyle.css">
	<link rel="stylesheet" href="css/formstyle.css">
	<script language="javascript" src="js/tab.js">
	</script>
	
	<style language="css">
		body {font-family: "Lato", sans-serif;}
	</style>
	</head>
<body>
	<header>
	<div>
	<img src="images/tmphd.jpg" style="max-width:100%;max-height:100%;float:top;"/>
	</div>
	</header>
	</br>
	<nav>
	<div class="module form-module">
		<ul class="tab">
			<li><a href="#" class="formlinks" onclick="openForm(event, 'Sign in')">Sign in</a></li>
			<li><a href="#" class="formlinks" onclick="openForm(event, 'Sign up')">Sign up</a></li>
		</ul>

			<div id="Sign in" class="tabcontent">
				<h2>Login to your account</h2>
				<form action="security.php" method="post">
					<input name="suser" type="text" placeholder="Username"/>
					<input name="spass" type="password" placeholder="Password"/>
					<button>Login</button>
				</form>
			</div>

			<div id="Sign up" class="tabcontent">
				<h2>Create an account</h2>
				<form action="sign.php" method="post">
					<input name="uname" type="text" placeholder="Username"/>
					<input name="upass" type="password" placeholder="Password"/>
					<input name="uemail" type="email" placeholder="Email Address"/>
					<input name="ucontact" type="tel" placeholder="Phone Number"/>
					<button>Register</button>
				</form>
			</div>
	</nav>
	</div>		
     
</body>
</html>

