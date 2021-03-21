<!DOCTYPE html>
<html>
<head>
	<title> Practice Data Base Connection </title>
</head>

<body>

	<h1> Practice Data Base Connection </h1>

	<?php

	
    // Object Oriented Approach

	 $conn = new mysqli("localhost", "Akondo", "12345");

	if ($conn->connect_error)
		
	{
		die("Connection Failed");
	}

	else
	{

		echo " Database Connectoion Successful";
	}

    



	// Prosedural

	/*  $conn1 = mysqli_connect("localhost", "Fahim", "12345");

	if ($conn1)
	{
		die("Connection Failed");
	}

	else
	{

		echo " Connectoion Successfull";
	}

	 */


	?>



</body>
</html>