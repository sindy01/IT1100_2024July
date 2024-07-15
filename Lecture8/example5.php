<!-- Read Function | Select Statement| Slide 26 -->

<?php

require 'config.php';

function readData()
{
    global $con;
    $sql = "SELECT ID, Name FROM mytable";
    $result = $con->query($sql);
	
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "ID: " . $row["ID"] . " - Name: " . $row["Name"] . "<br>";
        }
    }
    else 
    {
        echo "No results";
    }
	
    $con->close();
}

readData();

?>
