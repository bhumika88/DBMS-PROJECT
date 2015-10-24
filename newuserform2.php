<?php session_start() ;
	
?>

<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "newuserform1.css">

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
			<input type = "button" name="back" id="back" value= "ORDER MORE" onclick=window.open("session.php","_self")>
		</form>
		</div>
			
	<div id = "mid">

		<span id = "heading"><center>Order Details<center><br></span>


<?php
	$conn = new Mongo('localhost');

		    // connect to test database
		$db = $conn->travelfood;

		    // a new products collection object
		 $collection = $db->order;
		
		//$cursor = $collection->find();

$cuisine = (isset($_POST['cuisine'])) ? $_POST['cuisine'] : '';

if($cuisine)
{	
	$query = array("Station" => $station);	
 	$cursor=$collection->find($query);	
	$_SESSION['cuisine']=$cuisine;

	$record = array('station' => $_SESSION['station'] ,'cuisine' => $_SESSION['cuisine'], 'username' => $_SESSION['use']);
	$query=$collection->insert( $record );
	if($query)
	{
		echo "Thank you ".$_SESSION['use']."</br></br>";
		echo "You Have Ordered  " .$_SESSION['cuisine'] ." food on the station ".$_SESSION['station']."</br></br>";
		
		echo "<a href='feedback.php' style = 'color : #a30000'> FEEDBACK</a> ";
		
	}
	
}



?>


