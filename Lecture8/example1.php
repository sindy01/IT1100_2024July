<!-- Database Connectivity | Insert Statement| Slide 14 -->

<?php

//Linking the configuration file
require 'config.php';

$sql = "INSERT INTO mytable(ID,Name) VALUES(23,'NU')";

	if($con->query($sql))
	{
		echo "Inserted successfully!";
	}
	else
	{
		echo "Error: " . $con->error;
	}
	
$con->close();

?>
