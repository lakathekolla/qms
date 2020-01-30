<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Faculty of Science | Quiz Management System</title>
	<script>
					
					function bigImgU(x) {
					x.style.height = "70px";
					x.style.width = "70px";}
					
					function normalImgU(x) {
					x.style.height = "75px";
					x.style.width = "75px";
					
					}
									
    </script>'
	
	
	
	<style language="css">
	.iupload{
				position: fixed;
				width:300px;
				left: 10%;
				top: 10px;
			}
			#fh{
			display: none;
		}
		.iupload > input{
			display: none;
	
		 
	</style>
	
	
</head>
<body >
	<?php //  display  file  upload  form

					if  (!isset($_POST['submit'])){ 
			echo '	<div class="iupload" align="center">
							<form target="frame" enctype="multipart/form-data" action="<?php echo $_SERVER['."'".'PHP_SELF'."'".']?>" method="post">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="hidden" name="MAX_FILE_SIZE" value="8000000" /> &nbsp;&nbsp;
								<label for="file-up">
									<img id="up" onmouseover="bigImgU(this)" onmouseout="normalImgU(this)" src="../images/ui.png" width="72px"/>
								</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" id="file-up" name="submit" value="Upload  File" style="display:none;/>
								<label for="file-input">
								</label>&nbsp;&nbsp;
								<label for="file-input">
									<img id="up" onmouseover="bigImgU(this)" onmouseout="normalImgU(this)" src="../images/us.png" width="75px"/>
								</label>
								
							<input id="file-input" type="file" name="data" style="display:none;" />
							</form>
				
	<img src="../images/insupload.jpg" noresize="resize" alt="ins" align="center" width="350px"/>
			<iframe id="fh" style="display:none;" width="10px" name="frame">
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
						$uploadDir  =  ""; 
							move_uploaded_file($_FILES['data']['tmp_name'],$uploadDir.$_FILES['data']['name'])  or  die("Cannot  copy  uploaded  file"); //  display  success  message
							echo  '<script>alert(File  successfully  uploaded  to  '.$uploadDir  .$_FILES['data']['name'].')</script>'; } 
						
        
 
			?>

     
</body>
</html>

