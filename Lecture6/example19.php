<!-- PHP | Question 1 | Slide 37 -->

<!DOCTYPE html>
<html>
<body>

<?php 
	for ($i = 0; $i <= 5; $i++)
	{
		if ($i == 2)
		{
			break;
		} 
		echo $i;
		echo "<br/>";
	}
	echo "End of for loop" ;
?> 
 
</body>
</html>

