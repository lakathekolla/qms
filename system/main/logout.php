<html>
<head>

	



<style>
h1{
	
	
}
body{
	background-image: url('images/loBac.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: 50% 69%; 

}
.out{
font-family: cursive, sans-serif; color:maroon
  text-shadow: 2px 2px 5px rgba(256, 256, 256, 0.65);

font-size: 3em;
  text-align: center;

    
   
   
}
</style>
</head>
<body>
<?php
session_start() ;
session_destroy();


?>

<div class="out" align="center"> Thank you Come Back Soon <div>
<center>

<img  src="images/brain.png" alt="index"  width="10%" border="0"/>
</center>
<script language="javascript">
        function redirectWeb() {
               window.top.location.href = "../../index.php";
            }
			setTimeout('redirectWeb()', 2000);
		
</script>
</body>
</html>