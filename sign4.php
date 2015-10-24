
<html>
    <head>
        <title>
            USER Sign In
        </title>
 		<link rel = "stylesheet" type = "text/css" href = "addfield.css">
	<script type="text/javascript">
			function validatename()
			{
				if(document.getElementById("name").value!="")
               			{
					
					
		 			var letters = /^[a-zA-Z]+$/;  
					if(!document.getElementById("name").value.match(letters))  
					{  
					
					
						document.getElementById("firstnameerror").innerHTML = "Please enter only alphabets (no special characters)";					
						document.getElementById("name").value ="";
						document.getElementById("name").focus();
					}
					else
					{
						document.getElementById("firstnameerror").innerHTML = "";
					}
				}
				else if(document.getElementById("name").value=="")
				{
					
					document.getElementById("firstnameerror").innerHTML = "Please enter first name "; 												
					document.getElementById("name").focus();
						
				}
			}


			function validatelname()
			{
				if(document.getElementById("lname").value!="")
               			{
					
					
		 			var letters = /^[a-zA-Z]+$/;  
					if(!document.getElementById("lname").value.match(letters))  
					{  
					
					
						document.getElementById("lastnameerror").innerHTML = "Please enter only alphabets (no special characters)";	
					document.getElementById("lname").focus();

						document.getElementById("lname").value ="";
					}
					else
					{
						document.getElementById("lastnameerror").innerHTML = "";
					}
				}
				else if(document.getElementById("lname").value=="")
				{
					
					document.getElementById("lastnameerror").innerHTML = "Please enter last name ";
					
					document.getElementById("lname").focus();
										
				}

			}
			

			 function validatephone()
        		{
				if(document.getElementById("phone").value != "")
				{
					if(isNaN(document.getElementById("phone").value))
					{
							document.getElementById("phoneerror").innerHTML = "Please enter only numbers";							
							document.getElementById("phone").focus();
							document.getElementById("phone").value = "";					
					}
					
					else
					{
					
				
						if (document.getElementById("phone").value.length != 10) {
            						document.getElementById("phoneerror").innerHTML = "Number should be 10 digit";
								
							document.getElementById("phone").focus();
							document.getElementById("phone").value = ""; 							
						}
						else
						{
						   document.getElementById("phoneerror").innerHTML="";					
						}
					}
					
					
				}
				else if(document.getElementById("phone").value == "")
				{
					document.getElementById("phoneerror").innerHTML = "You must enter phone number"; 												
					document.getElementById("phone").focus();
										
				}
				
			}
				
                 	function validateusername()		
               		{
				if(document.getElementById("username").value == "")
               			{
                 			document.getElementById("usererror").innerHTML =  "You must enter username";
					
					document.getElementById("username").focus();
					
				}
				else
				{
					document.getElementById("usererror").innerHTML="";	
				}
			
			}
			function validateemail()
			{	
				var email = document.getElementById('email');
				var filter =new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
				var result = filter.test(document.getElementById("email").value);
				if(document.getElementById("email").value!="")
               			{
					if (result==false) {
					document.getElementById("emailerror").innerHTML="Please provide a valid email address";
					email.focus;
					
					document.getElementById("email").focus();
					document.getElementById("email").value= "";	
					}
					else
					{
						document.getElementById("emailerror").innerHTML = "";
					}
				}
				else if(document.getElementById("email").value=="")
               			{
                 			document.getElementById("emailerror").innerHTML = "You must enter email";
					
					document.getElementById("email").focus();
					              			
								
				}
				

				
			}
			function validatepassword1()
			{
				if(document.getElementById("password").value!="")
               			{
					if (document.getElementById("password").value.length != 6) {
            						document.getElementById("passworderror").innerHTML = "Password length should be 6 characters";				
					document.getElementById("password").focus();
					document.getElementById("password").value="";  
					}
					else
					{
						document.getElementById("passworderror").innerHTML = "";
									
					}
					
		 			
				}
				else if(document.getElementById("password").value=="")
				{
					
					document.getElementById("passworderror").innerHTML = "You must enter password";				document.getElementById("password").focus();

									
				}
			}
			function validatepassword2()
			{
		
				if(document.getElementById("password").value!="")
				{
				
					if(document.getElementById("password2").value!="")
		       			{
						if((document.getElementById("password2").value!=document.getElementById("password").value) && 							(document.getElementById("password").value!=""))
						{
						document.getElementById("password2error").innerHTML = "Password mismatch";
						document.getElementById("password2").focus();
						document.getElementById("password2").value=""; 
						}
						else
						{
							document.getElementById("password2error").innerHTML = "";
						}
					
			 			
					}
					else if(document.getElementById("password2").value=="")
		       			{
		         			document.getElementById("password2error").innerHTML = "You must confirm password";
					 "";						
						document.getElementById("password2").focus();
						document.getElementById("password2").select(); 
				       			
					}
			   	}
				else
				{	
					alert( "Please enter password first ");
					
					document.getElementById("password").focus();
					document.getElementById("password2").value=""; 	
							
				}
				
			}
			function validateage()
			{
				if(document.getElementById("age").value != "" )
               			{
					
					if(isNaN(document.getElementById("age").value))
					{
							document.getElementById("ageerror").innerHTML = "Please enter only numbers";							
							document.getElementById("age").focus();
							document.getElementById("age").value = "";					
					}
					else{
						if(document.getElementById("age").value<1)
						{
							document.getElementById("ageerror").innerHTML ="Invalid age";
							document.getElementById("age").focus();
							document.getElementById("age").value="";					
						}
						else
						{
							document.getElementById("ageerror").innerHTML = "";
						}
					}
				}
				else if(document.getElementById("age").value=="")
               			{
                 			document.getElementById("ageerror").innerHTML =( "You must enter age");
               			}


			}
			
	</script>


   </head>
 <body background="bg.jpg" style="no-repeat">

	<div id = "header">
		<div id = "links"> 
		<img src = "images/homeicon.png" width = "20px" height = "20px" hspace = "7px"> <a href = "front1.php" >Home</a>
		<span class = "slash">|<img src = "images/view.png" width = "20px" height = "20px" hspace = "7px"> <a href = "viewfield1.php" >View Avalibilty</a> </span>
	
</div>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("login1.php","_self")>
		</form>
	</div>		
	<div id = "mid1">
	<span id = "heading">User Sign Up<br><br>
	</span>
<table align="center" id = "table1" frame = "box">



<form  method="POST" id = "myform" action = "<?php $_PHP_SELF ?>">
<tr>	
	<td id = "keyword">First Name<span class = "str">*</span>:</td>
	<td><input type="text" class = "inputsmall" placeholder = " Enter first name"  id = "name" name = "name" onblur="validatename()" required/></td> 	

	</tr>
	<tr>	
		<td></td>
		<td><span id = "firstnameerror" class = "error" ></span></td>
	</tr>

<tr>	
	<td id = "keyword">LastName<span class = "str">*</span>:</td>
	<td><input type="text" id="lname" name="lname" placeholder="Enter last name"  onblur = "validatelname()" class = "inputsmall" required></td> 
	
				
</tr>

<tr>
	<td></td>
	<td><span id = "lastnameerror" class = "error"  ></span></td>
</tr>

<tr>
	<td id = "keyword">Username<span class = "str">*</span>:</td>
	
	<td><input type="text" id="username" name="username" placeholder="Enter username" onblur = "validateusername()" class = "inputsmall" required></td>
</tr>

<tr>
	<td></td>
	<td><span id = "usererror" class = "error"  ></span></td>
</tr>


<tr>
	
	<td id = "keyword">Email<span class = "str">*</span>:</td>
	<td><input type="text" id="email" name="email" onblur = "validateemail()" class = "inputsmall" required/></td>
</tr>

<tr>
	<td></td>	
	<td><span id = "emailerror" class = "error"></span></td><tr>
</tr>

<tr>
	<td id = "keyword">Password<span class = "str">*</span>:</td>
	<td><input type="password"  id="password" name="password" onblur = "validatepassword1()" class = "inputsmall" required/></td> 
</tr>

<tr>
	<td></td>
	<td><span id = "passworderror" class = "error"></span></td><tr>	
</tr>


<tr>
	<td id = "keyword">Confirm Password<span class = "str">*</span>:</td>
	<td><input type="password" id="password2" name="password2" onblur = "validatepassword2()" class = "inputsmall" required/> </td> 
</tr>

<tr>
	<td></td>
	<td><span id = "password2error" class = "error"></span></td><tr>
</tr>


<tr>
	<td id = "keyword">Phone No<span class = "str">*</span>:</td>
	<td><input type="tel" id="phone" name="Phone"  onblur = "validatephone()" class = "inputsmall" required/></td>
</tr>

<tr>
	<td></td>
	<td><span id = "phoneerror" class = "error"></span></td><tr>
</tr>


<tr>
	<td id = "keyword">Gender<span class = "str">*</span>:</td>
	<td> <input type="radio" id="gender" name="gender" value = "male" checked/> Male 
	     <input type="radio" id="gender" name="gender" value = "female"  /> Female </td>
</tr>

<tr>
</tr>

<tr>
	<td id = "keyword">Age<span class = "str">*</span>:</td>
	<td><input type="tel" id="age" name="age"  onblur = "validateage()" class = "inputsmall" required/></td>
</tr>

<tr>
	<td></td>
	<td><span id = "ageerror" class = "error"></span></td>
</tr>

<tr>
<td></td>
<td><input  name="submit" id="select" type="submit" value="SUBMIT"  /></td>
<tr>
</table>
</form>
<div id = "error"></div>

    </body>
</html>

<?php

if($_POST['submit'])  
{ 
    $Phone=($_POST['Phone']);
   $username=($_POST['username']);
    $fname=($_POST['name']);
    $lname=($_POST['lname']);
    $email=($_POST['email']);
    $password=($_POST['password']);
    $password2=($_POST['password2']);
    $age = ($_POST['age']);
     $gender = ($_POST['gender']);
	$error=array();
	if($password!=$password2)
	{
		$error[]="Password Mismatch";
	}
   
	//database configuration
            $host = 'localhost';
            $database_name = 'travelfood';
             $connection=new Mongo('localhost');
		
             if($connection){

                 //connecting to database
                 	$database=$connection->$database_name;
	
                 //connect to specific collection
                 	$collection=$database->userinfo;

                 	$query=array('username'=>$username);
                 	//checking for existing user
                 	$count=$collection->findOne($query);

       			 if(!count($count)){
                     		//Save the New user
				if(count($error) != 0)
				{
				    ?>  <script> alert ('Not registered Here.'); </script>
						<?php
				}
				else
				{
                     		$user=array('fname'=>$fname,'lname'=>$lname,'Phone'=>$Phone,'email'=>$email,'password'=>$password,'username'=>$username,'gender'=>$gender,'age'=>$age);             
                    		 $query1=$collection->save($user);
					
				if($query1)
				{
					
                    	?>  <script> alert ('You are successfully registered.'); </script>
			<?php
				echo '<script type="text/javascript"> window.open("login1.php","_self");</script>';				
				}	
				else
					?>  <script> alert ('Registeration Problem.'); </script>
			<?php		
				}	
                	}
			else
			{
				?>
                    		 <script>alert("Username already exists.Please register with another Username!.");</script>
				<?php
                 	}

             } else {

                  die("Database are not connected");
             }
		
	
	
}	

?>
