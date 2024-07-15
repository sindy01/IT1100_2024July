<?php 

require 'config.php';

if (isset($_POST["submitBtn"]))
{  
	$name = $_POST["firstname"]; 
	$gender = $_POST["gender"];  
	$phone = $_POST["mobile"];  
	$email = $_POST["email"]; 
	$address = $_POST["address"]; 
	$user = $_POST["username"]; 
	$password = $_POST["pwd"]; 
	
	$sql = "INSERT INTO StudentDetails 
	(StudentName, Gender, Mobile, Email, Address, UserName, Password) 
	VALUES($name, $gender, $phone, $email, $address, $user, $password)";  

if ($con->query($sql)) 
{  
	echo "Inserted successfully";  
} 
else 
{ 
	echo "Error:". $con->error;   
} 

$con->close(); 

?> 
