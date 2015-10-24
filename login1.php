<?php
session_start();
?>
<html>

<link rel = "stylesheet" type = "text/css" href = "cover1.css">
<body>



<div id = "wrapper">
	<center><h2> Discover the joy of online food ordering in Train!!!!</h2></center><br>
		<center><h1> LOGIN</h1></center>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("front1.php","_self")>
		</form>
	</div>
	<div id = "logindetails">
		<fieldset>    
	
	<form method="POST" action="<?php $_PHP_SELF ?>">
		  	<img src = "images/login.png" id = "login" height = "150px" width = "100px">
			<br><br>
	<table>	
	<tr>	    
    <input type="text" id="username" name="username" placeholder = "*Username" class = "inputsmall" required/><br><br>
	</tr>
	<tr>
	</tr>
	<tr>	   
		    
    <input type="password" id="password" name="password" class = "inputsmall" placeholder = "*Password" required/> <br> <br>
	
	</tr>
	<tr>
	</tr>
	
	<tr>	
		    <input  type="submit" name="submit" id="submit" value="Login" class = "inputsmall" /><br><br>
	</tr>

	<tr>
	</tr>
	<tr></tr>
	<tr>		
	    <span id = "newuser"><center><a href="sign4.php">New User?Sign Up</a></center></span>
	</tr>	
	  </form>

	</table>
		</fieldset>
	</div>
</div>

</body>
</html>
<?php
$success = "";
if(isset($_POST['submit']))   
{
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	$error = array();
	// Username Validation
	if(!empty($username) && !empty($password))
	{
		if($username == "admin" and $password == "admin123")
		{
			$_SESSION['use'] = $username;
			?>
			<script> alert("Admin has successfully loggedIn");</script>
			<?php
			echo "<script>window.open('adminlogin.php','_self')</script>";
			
		}
		else
		{
			$host = 'localhost';  
			$database_name = 'travelfood';
			$connection=new MongoClient();
			if($connection)
			{
				// Select Database
				$database = $connection->$database_name;

				// Select Collection
				$collection = $database->userinfo;
				$user_data= array("username" => $username,"password" => $password);
				$result = $collection->findOne($user_data);
				if($result)
				{
					$_SESSION['use'] = $username;
					?>
					<script>alert("you have successfully logged In")</script>
					<?php
					echo '<script type="text/javascript"> window.open("session.php","_self");</script>';  
				}
				else
				{
					?>
					<script>alert("Invalid User.Try Again")</script>
					<?php
				} 
			}
		}
	}


} 
?>
