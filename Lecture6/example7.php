<!-- PHP | Double-quoted and Single-quoted strings | Slide 17 -->

<?php 

	#Single quotes can't be used within single-quoted strings
	#Double quotes can't be used within double-quoted strings
	
	$phrase1 = 'It's time to go'; 	//This will generate error
	$phrase2 = "She said "OK"";		//This will generate error
	
	echo $phrase1;	
	echo "<br>";
	echo $phrase2;	
	echo "<br>";

?> 
