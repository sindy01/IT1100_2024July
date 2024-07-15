<!-- PHP | Question 2 | Slide 29 -->

<html>
<head></head>
<body>

<?php
	$x = rand(1,5);  	//Generate a random integer from 1 to 5
	echo "x = $x <br/><br/>";
	
	switch ($x)
	{
	case 1:
	  echo "Number 1";
	  break;
	case 2:
	  echo "Number 2";
	  break;
	case 3:
	  echo "Number 3";
	  break;
	default:
	  echo "No number between 1 and 3";
	  break;
	}
?>

</body>
</html>
