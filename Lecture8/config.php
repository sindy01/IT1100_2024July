<!-- Database Connectivity | Slide 14 -->

<?php

//The connection object
$con = new mysqli("localhost","root","","test"); //Database is "test"

//Check connection
if($con->connect_error)
{
	die("Connection failed: " . $con->connect_error);
}
	
?>

