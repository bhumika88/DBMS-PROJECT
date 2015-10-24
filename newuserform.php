<?php 
	session_start() ;
?>

<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "newuserform.css">
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
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("session.php","_self")>
		</form>
		</div>
			
	<div id = "mid">

		<span id = "heading1"><center>Place your order !!!<center><br></span>
	<span id = "heading">->Select a station from list of stations to book you order !!!!!!!<br><br>
	
	</span>
		
<form action="newuserform_1.php" method="post">
  <select name="station" id = "dropdown">
	
    	<?php
		$conn = new Mongo('localhost');

		    // connect to test database
		$db = $conn->travelfood;

		    // a new products collection object
		 $collection = $db->availability2;
		
		$cursor = $collection->find();

		    // How many results found
		    $num_docs = $cursor->count();
	
		if ($num_docs > 0) 
		{
    			foreach ($cursor as $obj) 
			{
		?>
	    		<option value= "<?php echo $obj['Station']; ?>" id = "drop1"><?php echo $obj['Station']; ?></option>
		<?php
		
			}
               
         	}
	?>
  </select>
	</div>
  <div id = "submit">
  <input type="submit" value="Find Cuisines" name = "submit" id = "select" />
  </div>

</form>
</div>

</body>
</html>
