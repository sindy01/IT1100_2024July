<!-- PHP | Reading forms using GET | Slide 25 -->

<?php

	echo "Checkbox Test<hr>" ;
	
	if(!empty($_GET['check_list'])) 
	{
		foreach($_GET['check_list'] as $check) 
		{
			echo "check = $check <br>"; 
		}
	}
	else
	{
		echo "Checklist is empty";
	}
	
?>
