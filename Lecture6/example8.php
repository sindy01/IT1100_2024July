<!-- PHP | Double-quoted and Single-quoted strings | Slide 17 -->

<?php 

	#If we want to use the same quote within a quoted string 
	#Then, we must escape it by using a backslash

	$phrase1 = 'It\'s time to go'; 
	$phrase2 = "He said \"OK\""; 


	echo $phrase1;
	echo "<br>";
	echo $phrase2;
	echo "<br>";

?> 
