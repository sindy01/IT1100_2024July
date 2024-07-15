<!-- PHP | Reading forms (HTML + PHP) using GET | Slide 21 -->

<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="txtName">
      <br>
      <input type="submit" value="Submit" name="btnSubmit">
</form>

<?php
 	if(isset($_GET["btnSubmit"]))
	{
		echo "Hi " . $_GET["txtName"];
	}
?>

</body>
</html>
