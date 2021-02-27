<!DOCTYPE html>
<html>
<head>
	<title> LOGIN</title>
</head>

<body>

<?php
	  	$nameError = "";
	  	$passwordError = "";

	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["name"]))
			 {
				  $nameError = "Name is required";
				
			}
            else if(empty($_REQUEST["password"])) 
            {
				  $passwordError = "Password is required";

			}

			else 
			{
				echo "Name is: " . $_REQUEST["name"];
				echo "<br />";
				echo "Password is: " . $_REQUEST["password"];
			}
		} 
	?>


    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	
	<h1> LOGIN </h1>
    
    User Name:
	<input type="text" name="name" required>
	<br/>
	<span><?php echo $nameError; ?></span><br />


	Password: 
	<input type="text" name="password" required>
	<br/>
	<span><?php echo $passwordError; ?></span><br />
	<hr>

	<input type="checkbox" id="" name="" value="Remember">
    <label for="">Remember Me</label><br>
    <br>

    <input type="submit" value="Submit"> 
    <a href=""> Forgot Password?</a>
	
	

</form>

</body>
</html>

