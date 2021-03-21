<!DOCTYPE html>
<html>
<head>
	<title> Practice Insert Data Into Table </title>
</head>

<body>

	<h1> Practice Insert Data Into Table </h1>

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

		$InsertDataSql = " Insert Into User (ID,Name,Address,Password) values (2, 'TRIDIP', 'DINAJPUR',54321)" ;
		$InsertDataSql = " Insert Into User (ID,Name,Address,Password) values (3, 'Mysha', 'DINAJPUR',12345)" ;

		                   
       if ($conn-> query($InsertDataSql) )

       {
          echo " Data Inserted Successfully  ";

       }

       else

       {
       	 echo " Data Not Inserted "; 
       	 echo "<br />";
       	 echo $conn->error;
          
       }

	}

	$conn -> close();

	?>

</body>
</html>