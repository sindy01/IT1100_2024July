<!-- PHP Form | Insert Statement| Slide 17 -->

<?php

//Linking the configuration file
require 'config.php';

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<h3> Input Student Data </h3>
	Student ID : <input type="text" name="stuID"> <BR/>
	Student Name : <input type="text" name="stuName"> <BR/>
	<input type="submit" value="Submit" name="btnSubmit">
	<input type="reset" value="Reset">
	
</form>

<?php

if(isset($_POST["btnSubmit"]))
{
	$stuID = $_POST["stuID"];
	$stuName = $_POST["stuName"];	

	$sql= "INSERT INTO mytable(ID,Name) VALUES($stuID,'$stuName')";
	
		if($con->query($sql))
		{
			echo "Inserted successfully!";
		}
		else
		{
			echo "Error: " . $con->error;
		}
}

$con->close();

?>
