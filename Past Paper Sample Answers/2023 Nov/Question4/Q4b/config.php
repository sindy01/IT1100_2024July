<?php

$con = new mysqli("localhost", "Admin23", "con@34#!","vehicle_db ");

if ($con->connect_error)
{
    die("Connection failed: " . $con->connect_error); 
}

?>