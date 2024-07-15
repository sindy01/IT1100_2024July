<!-- PHP | Reading forms (HTML + PHP) using POST | Slide 21 -->

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="txtName">
      <br>
      <input type="submit" value="Submit" name="btnSubmit">
</form>

<?php
 	if(isset($_POST["btnSubmit"]))
	{
		echo "Hi " . $_POST["txtName"];
	}
?>

</body>
</html>
