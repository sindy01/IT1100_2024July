<!-- PHP | Constants | Slide 19 -->

<?php

	define("NU", "NORTHERN UNI"); 
	define("PRICE", 79.99); 
	define("SLIIT", "SLIIT UNI");
	
	echo NU; 
	echo "<br>";
	print NU; 
	echo "<br>";
	print PRICE;
	echo "<br>";
	echo SLIIT." ".NU;
	
	//echo and print will do the same function of displaying the content
	
	//We can't use $ sign infront of the Constants
	#echo $NU or print $NU will give errors
	
?>


