	
<html>

<head>
		<link rel = "stylesheet" type = "text/css" href = "newuserform1.css">

</head>
<body background="bg.jpg" style="no-repeat">

	<div id = "header">
		<div id = "link"> 
		<img src = "images/homeicon.png" width = "20px" height = "20px" hspace = "7px"> <a href = "front1.php" >Home</a>
</div>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("front1.php","_self")>
		</form>
	</div>
			
	<div id = "mid1">
	<span id = "heading">Availability<br><br>
	</span>
		<?php
$conn = new Mongo('localhost');

    // connect to test database
    $db = $conn->travelfood;

    // a new products collection object
    $collection = $db->availability2;
	
	$cursor1=$collection->find();
foreach($cursor1 as $obj){
	
	
		?>
	<table width="600" border="1" cellspacing="5" cellpadding="10" frame = "box" id = "table1" >
		<tr>
			<th class = "thead">Station</th>
			<td class = "row"><?php echo $obj['Station']; ?></td>
		</tr>
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
			
<?php
	
}
?> 
	</div>

    </body>
</html>


