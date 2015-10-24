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
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("newuserform.php","_self")>
		</form>
		</div>
			
	<div id = "mid">

		<span id = "heading"><center>Available Cuisines<center><br></span>




<?php
	$conn = new Mongo('localhost');

		    // connect to test database
		$db = $conn->travelfood;

		    // a new products collection object
		 $collection = $db->availability2;
		
		//$cursor = $collection->find();	 
$station = (isset($_POST['station'])) ? $_POST['station'] : '';


if ( $station) 
{
	$query = array("Station" => $station);	
 	$cursor=$collection->find($query);	

	$_SESSION['station']=$station;
	?>
	<form method = "POST" action = "newuserform2.php">
	<table width="600" border="1" cellspacing="5" cellpadding="10" frame = "box" id = "table1" >
	<?php	
	foreach($cursor as $obj)
	{
		?>
		<div id = "table2" align = "center" >
		<tr>
	      		<th class = "thead">CUISINE</th>
			<td class = "row"><?php echo $obj['Cuisine1']; ?></td>
			<td class = "row"><?php echo $obj['Cuisine2']; ?></td>
			<td class = "row"><?php echo $obj['Cuisine3']; ?></td>
			<td class = "row"><?php echo $obj['Cuisine4']; ?></td>
			<td class = "row"><?php echo $obj['Cuisine5']; ?></td>
	      
          	</tr>
		<tr>
			<th class = "thead">MENU</th>
			<td class = "row"><?php echo "1. " ;print_r($obj['menu1'][0]); echo "<br> 2. " ;print_r($obj['menu1'][1]); ?></td>
			<td class = "row"><?php echo "1. " ;print_r($obj['menu2'][0]); echo "<br> 2. " ;print_r($obj['menu2'][1]); ?></td>
			<td class = "row"><?php echo "1. " ;print_r($obj['menu3'][0]); echo "<br> 2. " ;print_r($obj['menu3'][1]); ?></td>
			<td class = "row"><?php echo "1. " ;print_r($obj['menu4'][0]); echo "<br> 2. " ;print_r($obj['menu4'][1]); ?></td>
			<td class = "row"><?php echo "1. " ;print_r($obj['menu5'][0]); echo "<br> 2. " ;print_r($obj['menu5'][1]); ?></td>
		</tr>
		</table>
		</div>
			<div id = "heading3">-> Select the cuisine</div>
		<div id = "cuisine">
		<select name="cuisine" id = "dropdown">
    		<option value= "<?php echo $obj['Cuisine1']; ?>"><?php echo $obj['Cuisine1'];  ?></option>
		<option value= "<?php echo $obj['Cuisine2']; ?>"><?php echo $obj['Cuisine2']; ?></option>
		<option value= "<?php echo $obj['Cuisine3']; ?>"><?php echo $obj['Cuisine3']; ?></option>
		<option value= "<?php echo $obj['Cuisine4']; ?>"><?php echo $obj['Cuisine4']; ?></option>
		<option value= "<?php echo $obj['Cuisine5']; ?>"><?php echo $obj['Cuisine5']; ?></option>
		</div>	
	<?php	
		
	}
	?>
	</select>
		<div id = "submit1">
		<input type="submit" value="Order" name = "submit" id = "select"/>
		</div>	
	</form>
	<?php
} 
 
?>
</div>

</body>
</html>
