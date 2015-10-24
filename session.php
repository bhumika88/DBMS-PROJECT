<?php   session_start();  ?>





<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "adminlogin.css">
</head>
<body>
	<div id = "header">
		<div id = "link"> 
		<span class = "slash">|<img src = "images/view.png" width = "20px" height = "20px" hspace = "7px"> <a href = "viewfield2.php" >View Avalibilty</a> </span>
	        <span class = "slash">|<img src = "images/login.png" width = "20px" height = "20px" hspace = "7px"> </span> <?php echo"Welcome  " .$_SESSION['use'] ."\n"; ?> </span>

		 <span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span>

		</div>
		<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "FEEDBACK->" onclick=window.open("feedback.php","_self")>
		</form>
	</div>
			
	<div id = "mid">
	
	<div id = "link3"><a href='newuserform.php'><span style="color:black;"> PLACE YOUR ORDER HERE !!!!!!!!!
	</a> </div>
	
	
	
	</div>
	
	</div>
	

</body>
</html>



