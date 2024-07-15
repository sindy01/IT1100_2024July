<?php 

require 'config.php';

$sql = "select StudentName,Gender,Mobile,Email,Address from StudentDetails"; 
 
$result = $con->query($sql);
 
	 	if($result->num_rows > 0)
		{ 
			//Read data  	 	
			while($row = $result->fetch_assoc())
			{  
				//Read and utilize the row data 
				echo "Name: " . $row["StudentName"] . "<br />";  	 	 	
				echo "Gender: " . $row["Gender"] . "<br />";  	 	 	
				echo "Mobile: " . $row["Mobile"] . "<br />";  	 	 	
				echo "Email : " . $row["Email"] . "<br />";  	 	 	
				echo "Address: " . $row["Address"] . "<br />"
			} 
	 	} 
	 	else 
	 	{ 
	 	 	echo "No results"; 
	 	} 
		
$con->close(); 

?> 
