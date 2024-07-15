<!-- PHP | Loop Through an Indexed Array using For Loop | Slide 7 -->

<!DOCTYPE html>
<html>
<body>
<?php

	$subjects = array("IWT", "OOC", "ISDM", "SPM", "EAP");
	
	$arrlength = count($subjects);	# $arrlength = 5
	
	for ($x = 0; $x < $arrlength; $x++) 
	{		 
		echo $subjects[$x];
		echo "<br>";
	}
	
?>
</body>
</html>
