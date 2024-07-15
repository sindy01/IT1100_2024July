<?php

require 'config.php'; 

if(isset($_POST["submit"]))
{ 
    $Cname = $_POST["name"]; 
    $Cphone = $_POST["phone"]; 
    $Cemail = $_POST["email"];
    $Caddress = $_POST["address"]; 
    $vehicle_type = $_POST["vehicleType"];
    $air_condition = $_POST["airCondition"]; 
    $start_date = $_POST["startDate"]; 
    $end_date = $_POST["endDate"]; 

    $sql = "INSERT INTO
    vehicle_booking(name,phone,email,address,vehicleType,airCondition,startDate,endDate) 
    VALUES($Cname,$Cphone,$Cemail,$Caddress,$vehicle_type,$air_condition,$start_date,$end_date)";

    if($con->query($sql))
    { 
        echo "Inserted successfully";
    }
    else
    {
        echo "Error: ". $con->error;
    }
}

$con->close();

?>