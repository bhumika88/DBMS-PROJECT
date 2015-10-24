<?php session_start(); ?>

<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "addfield.css">

</head>
<body>

<div id = "header">
		<div id = "link"> 
		
  <span class = "slash">|<img src = "images/login.png" width = "20px" height = "20px" hspace = "7px"> <?php echo"Welcome  " .$_SESSION['use'] ; ?></span>
	<span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span>
</div>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("session.php","_self")>
		</form>
	</div>	
	<div id = "mid">
	<span id = "heading">Feedback<br><br>
	</span>

<form method= "post" action="<?php $_PHP_SELF ?>">
<table width="600"  cellspacing="1" cellpadding="2"  align = "center">
	<tr>
	<td width="250" id = "keyword">Comments:</td>
	<td><input name="type" type="text" id = "comment" class = "inputsmall" required></td>
	</tr>
	<tr>	<td></td>
		
		<td><input  name="submit" id="select" type="submit" value="SUBMIT" /></td>
	<tr>
</table>
</form>
</body>
</html>


<?php  //database configuration
session_start();
if($_POST['submit'])
{
            $database_name = 'travelfood';
          $good=array("good","fantastic","superb","wonderful","marvelous","stupendous","stunning","terrific","excellent","mind-blowing","satifactory","great","awesome","usefull","effective","pleasant","yummy","delicious","succulent","enjoyable","not-bad","positive");
	 $bad=array("bad","poor","unsatisfied","horrible","not-good","worst","below-average","depressing","negative","non-appropriate","unhealthy","unpleasant","faulty","foul","spoiled","undesirable","rotten");
             $connection=new Mongo('localhost');

             if($connection)
		{

                 //connecting to database
                 $database=$connection->$database_name;
		
                 //connect to specific collection
                 $collection=$database->feedback;

              $type= (isset($_POST['type'])) ? $_POST['type'] : '';
		$words = (explode(' ',$type));
		$size=sizeof($words);
		for($i=0;$i<$size;$i++)
		{
			if(in_array($words[$i],$good))
			{
				$type1 = "good";			
			}
			elseif(in_array($words[$i],$bad))
			{
				$type1 = "bad";	
			}
			else
				$type1 = NULL;	
		}
		$name = $_SESSION['use'];
		if(!is_null($type1))
		{
			$record = array('username'=>$name,'feedbacktype'=>$type1);
			$query = $collection->insert($record);
			if($query)
			{
				?>
				<script>alert("Your feedback has been recorded.Thank You!!");</script>
				<?php
				echo "<script>window.open('session.php','_self')</script>";
			
			}
		}
		else
		{
			?>
			<script>alert("Your feedback has been recorded.Thank You!!");</script>
			<?php
			echo "<script>window.open('session.php','_self')</script>";
		}
	}
} 
?>
