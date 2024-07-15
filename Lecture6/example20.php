<!-- PHP | Question 2 | Slide 37 -->

<!DOCTYPE html>
<html>
<body>

<?php 
	for ($i = 0;$i <= 5; $i++)
	{
		if ($i == 2)
		{
			continue;
		}
		echo $i;
		echo "<br/>";
	}
	echo "End of for loop" ;
?> 
 
</body>
</html>
