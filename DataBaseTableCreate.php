<!DOCTYPE html>
<html>
<head>
	<title> Practice Data Base Create Table </title>
</head>

<body>

	<h1> Practice  Data Base Create Table </h1>

	<?php

    // Object Oriented Approach

	$conn = new mysqli("localhost", "Akondo", "12345", "tridip");

	if ($conn->connect_error)
		
	{
		die("Connection Failed");
	}

	else
	{


		echo " Data Base Connectoion Successfull";
		echo "<br/>";

		$CreateTableSql = "Create Table User 

		                    ( 

		                    ID Int(6) primary key, 
		                    Name Varchar(200) not null,
		                    Password Int (10) not null,
		                    Address Varchar(200) not null
		                    

		                    )";

       if ($conn-> query($CreateTableSql))

       {
          echo " Table Crerated Successfully";

       }

       else

       {
       	 echo " Table Not Created "; 
       	 echo "<br/>";
       	 echo $conn->error;
          

       }

	}

	$conn -> close();

	?>



</body>
</html>