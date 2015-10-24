<?php session_start()?>

<html>
<head>
<title>Update Record in TRAVELKHANA Database</title>
<link rel = "stylesheet" type = "text/css" href = "addfield.css">
</head>
<body>
<?php
if(isset($_POST['add']))
{
	$conn = new Mongo('localhost');

    	$db = $conn->travelfood;
    	$collection = $db->availability2;
	$existing = array();
   	$station = $_POST['station'];
   	$cuisine = $_POST['cuisine'];
	$menu1 = $_POST['menu'];
	$cursor = $collection->find();
	foreach($cursor as $obj)
	{
		$existing[]=$obj['Station'];
	}
	if(in_array($station,$existing))
	{
		$remove = $collection->remove(array("Station"=>$station));
		if($remove)
		{
			?>
			<script>alert("Station deleted successfully!!");</script>
			<?php
			include "viewfield.php";
		}
		else
		{
			?>
			<script>alert("Not deleted!!");</script>
			<?php
		}
	}
	else
	{
		?>
		<script>alert(" Oops!!!Station does not Exist,so cannot be deleted!!"); window.open("deletefield.php","_self");</script>
		<?php
	}
$conn->close();
}
else
{
	$admin = $_SESSION['use'];
?>
<div id = "header">
		<div id = "link"> 

		<span class = "slash">|<img src = "images/view.png" width = "20px" height = "20px" hspace = "7px"> <a href = "viewfield.php" >View Avalibilty</a> </span>
  <span class = "slash">|<img src = "images/login.png" width = "20px" height = "20px" hspace = "7px"> <?php echo "Welcome  ".$admin; ?></span>
	<span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span>
</div>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("adminlogin.php","_self")>
		</form>
	</div>		
	<div id = "mid">
	<span id = "heading">Delete Fields<br><br>
	</span>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="600"  cellspacing="1" cellpadding="2" id = "table1" frame = "box" align = "center">
<tr>
<td width="250" id = "keyword">STATION : </td>
<td>
<input name="station" type="text" id="station" class = "inputsmall" placeholder = "*station to be deleted" REQUIRED/>
</td>
</tr>

<tr>
<td width="250"> </td>
<td>
<input name="add" type="submit" id="select" value="Submit"  >
</td>
</tr>
</table>
</form>
</div>
	</div>
<?php
}
?>
</body>
</html>
