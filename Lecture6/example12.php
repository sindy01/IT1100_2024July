<!-- PHP | Selection - If Else Ladder | Slide 27 -->

<!DOCTYPE html>
<html>
<body>

<?php
	// Get the current date and time
	$currentDateTime = date("Y-m-d H:i:s");

	// Display the current date and time
	echo "Current Date and Time: " . $currentDateTime . "<br>";
	
	//Get the Hour from current date 
	//"H" --> 24 Hour format, "h" --> 12 Hour format
	$t = date("H");		
	echo "Current hour is $t";
	echo "<br>";
	
	if ($t < "10") 
	{
	   echo "Have a good morning!";
	} 
	else if ($t < "20") 
	{
	   echo "Have a good day!";
	} 
	else 
	{
	   echo "Have a good night!";
	}
?>
  
</body>
</html>
