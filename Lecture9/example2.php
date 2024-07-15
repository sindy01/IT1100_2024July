<!-- Sessions | Slide 23 -->

<?php 

session_start(); 

if(isset($_SESSION['counter'])) 
{ 
	$_SESSION['counter'] += 1; //Modify session variable 
}
else 
{ 
	$_SESSION['counter'] = 1; //Set session variable for the first time
} 

$msg = "You have visited this page ". $_SESSION['counter']; 
$msg .= " in this session."; 
 
?> 

<html> 
<head> 
<title>Setting up a PHP session</title>
</head>
<body> 

<?php 
echo($msg);
?> 

</body>
</html>
