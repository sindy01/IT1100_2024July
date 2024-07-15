<!-- PHP | Loop Through an Indexed Array | Slide 6 -->

<!DOCTYPE html>
<html>
<body>
<?php

	$colors = array("red","green","blue","yellow");
	
	foreach ($colors as $value) 
	{
		echo "$value <br>";
	}
	
?>
</body>
</html>

<!--
	$value = $colors[0] - Iteration 1
	$value = $colors[1] - Iteration 2
	$value = $colors[2] - Iteration 3
	$value = $colors[3] - Iteration 4
										-->
	