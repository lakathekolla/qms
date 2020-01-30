<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Faculty of Science | Quiz Management System</title>
		<script language="javascript">
		

			function redirectWebSIS() {
				
               window.parent.location.href = "sub_frm/go_sis.php";
            }
			function redirectWebLMS() {
               window.top.location.href = "sub_frm/go_lms.php";
            }
			function redirectWebFOS() {
               window.top.location.href = "sub_frm/go_fos.php";
            }
			function redirectWebHelp() {
               window.top.location.href = "../help_center/help_main.php";
            }
			function redirectWebCon() {
               window.top.location.href = "../contact/contact_main.php";
            }
    </script>
		
		<style language="css">
			ul{
				list-style: none;
				}
		
		/* side_menu */
			.side_bar{
				margin:0px auto;
				float:left;
				width:100%;
				padding:1% 0% 1% 2%;
			}	
			.side_menu li{
				font-family:"Segoe UI Web Light","Open Sans","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue","Arial";
				min-height:100%;
				min-width:100%;
				font-weight:bold;
				padding:0px;
				padding-left:5px;
				display:block;
				vertical-align:bottom;
			}
			.side_menu li a{
				color:#333;
				text-decoration:none;
				width:100%;
				
				display:block;
				padding:8px 0;
			}
			.side_menu li:hover a{
				color:#fff;
			}
			.side_menu li:hover{
				background:#0082D8;
				padding:0px;
				padding-left:10px;
				position:relative;
				display:block;
			}
			.side_menu li.selected{
				background:#0082D8;
				padding:0px;
				padding-left:10px;
				display:block;
			}
			.side_menu li.selected a{
				color:#fff;
			}
			
		</style>
		
	</head>
	<body bgcolor="#E9E9E9">
		<img src="images/qms_logo.png" alt="Quiz Management System" style="max-width:100%;max-height:100%;">
		</br>
		<aside>
			<nav class="side_menu">
			    <ul class="side_bar">
					<li class="selected">                                   <!--selected-->
						<a > Home </a>
					</li>
					<li>
						<a href=""onclick="redirectWebSIS()"> SIS </a>
					</li>
					<li>
						<a href="" onclick="redirectWebLMS()"> LMS </a>
					</li>
					<li>
						<a href="" onclick="redirectWebFOS()"> Faculty Of Science </a>
					</li>
					<li>
						<a href="" onclick="redirectWebHelp()"> Help Center </a>
					</li>
					<li>
						<a href="" onclick="redirectWebCon()"> Contact </a>
					</li>
            	 </ul>
        </aside>		
	</body>
	
</html>
