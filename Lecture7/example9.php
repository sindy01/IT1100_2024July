<!-- PHP | Global variables | Slide 15 -->

<?php

	$name = "Sam"; 
	$age = 21; 
	
	function testFunc() 
	{ 
		//global keyword is used to access the global variables $name and $age
		global $name, $age; 
		$greet = "Hello "; 
		echo $greet . "Name: " . $name . " - Age: " . $age; 
	} 
	
	testFunc();
	
?>
