<!-- Sessions | Slides 25-34 -->

<?php

session_start();

if(isset($_POST["txtName"]))
{
  if($_POST["txtName"] == "asd" && $_POST["txtPass"] == "123")  
  {
		$_SESSION["userName"] = $_POST["txtName"];
  }
}

if(isset($_SESSION["userName"])) 
{
	header("Location:home.php");
}

?>

<html>
<head>
</head>
<body>

  <h1>Log in</h1>
  
  <form method = "post" action = "index.php">
       Username: <input type = "text" name = "txtName"/><br>
       Password: <input type = "password" name = "txtPass"/><br>
       <input type = "submit"/>
  </form> 
  
</body>
</html>
