<!-- PHP | Reading forms using POST | Slide 25 -->

<?php

	echo "Checkbox Test<hr>" ;
	
	if(!empty($_POST['check_list'])) 
	{
		foreach($_POST['check_list'] as $check) 
		{
			echo "check = $check <br>"; 
		}
	}
	else
	{
		echo "Checklist is empty";
	}
	
?>
