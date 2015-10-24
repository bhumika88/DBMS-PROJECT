<?php session_start()?>

<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "adminlogin.css">
</head>
<body>
	<div id = "header">
		<div id = "link"> 
		
		<span class = "slash">|<img src = "images/view.png" width = "20px" height = "20px" hspace = "7px"> <a href = "viewfield.php" >View Avalibilty</a> </span>
  <span class = "slash">|<img src = "images/login.png" width = "20px" height = "20px" hspace = "7px"> <?php $admin = $_SESSION['use']; echo "Welcome  ".$admin; ?></span>
	<span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span>
</div>
			
	<div id = "mid">
	
	<div id = "link1"><a href='addfield.php'><span style="color:black;">Add Stations/Cuisines/Menu
	</a> </div>
	
	<div id = "link2">	<a href='viewfield.php'><span style="color:black;">View Stations/Cuisines/Menu
</a></div>
	
	<div id = "link4"><a href='updatefield.php'><span style="color:black;">Update Cuisines & Menu
	</a> </div>
	<div id = "link5"><a href='deletefield.php'><span style="color:black;">Delete Station
	</a> </div>

		<div id = "bt1">	<input type = "button" value = "Station Analysis"  class = "button" onclick=window.open("analyze.php","_self")>	</div>
		<div id = "bt2">	<input type = "button" value = "Cuisine Analysis"  class = "button" onclick=window.open("canalyze.php","_self")>	</div>
		<div id = "bt3">	<input type = "button" value = "Feedback Analysis"  class = "button" onclick=window.open("feedanalysis.php","_self")>	</div>
	
	</div>
	</div>

</body>
</html>



