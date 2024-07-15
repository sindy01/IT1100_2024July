<!-- Sessions | Slides 25-34 -->

<?php

session_start();

$userName = "";

if(isset($_SESSION["userName"])) //Already logged in
{ 
	$userName = $_SESSION["userName"]; //Use the session value
}
else //Not logged in
{
	header("Location:index.php"); //Redirect to the login page
}

?>

<html>
<head>
</head>
<body>

<h1>Hello <?php echo $userName; ?></h1>

<form method = "post" action = "logoff.php"> 
    <input name = "logoff" type = "submit" value = "Log off"/>
</form> 

</body>
</html>
