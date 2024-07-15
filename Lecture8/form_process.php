<!-- HTML Form | Insert Statement| Slide 16 -->

<?php

//Linking the configuration file
require 'config.php';

$ID = $_POST["stuID"];

$Name = $_POST["stuName"];

$sql= "INSERT INTO mytable(ID,Name) VALUES($ID,'$Name')";
	
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
