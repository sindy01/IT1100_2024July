<!-- Read Data from Database | Select Statement| Slide 25 -->

<?php

//Linking the configuration file
require 'config.php';

$sql = "select ID, Name from mytable";

$result = $con->query($sql);

	if($result->num_rows > 0)
	{
		//Read data
		while($row = $result->fetch_assoc())
		{
		//Read and utilize the row data
			echo $row["ID"]. " – " . $row["Name"] . "<BR/>";
		}
	}
	else
	{
		echo "No results";
	}
	
$con->close();

?>
