<!-- PHP | Question 1 | Slide 18 -->

<?php

    $variable = 'Saman';
    echo 'My name is $variable';    #Prints --> My name is $variable
	echo "<br>";
    echo "My name is $variable";    #Prints --> My name is Saman
	
	/*Single Quotes (' '): When you use single quotes to enclose a string, 
	PHP treats the content literally, meaning it won't interpret variables 
	or escape sequences inside it. So, when you use 'My name is $variable', 
	it will print the actual text "$variable" rather than the value of the variable.

	Double Quotes (" "): When you use double quotes to enclose a string, 
	PHP will interpret variables and escape sequences within the string. 
	So, when you use "My name is $variable", it will replace $variable 
	with its value, which is "Saman", and the output will be "My name is Saman".*/
?>
