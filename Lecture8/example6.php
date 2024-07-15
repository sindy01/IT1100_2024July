<!-- Read Function | Display data inside a table| Slide 27 -->

<?php

require 'config.php';

function readData()
{
    global $con;
    $sql = "SELECT ID, Name FROM mytable";
    $result = $con->query($sql);

    if ($result->num_rows > 0) 
	{
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th></tr>";
        while ($row = $result->fetch_assoc()) 
		{
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
	else 
	{
        echo "No results";
    }

    $con->close();
}

readData();

?>
