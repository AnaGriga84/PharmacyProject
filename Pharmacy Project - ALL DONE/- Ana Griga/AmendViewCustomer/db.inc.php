<?php 

$hostname = "localhost";
$username = "pharmacist";
$password = "rosesarered";

$dbname = "Pharmacy";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if (!$con)
{
	die ("Failed to connect to mySql" . mysqli_connect_error());
}  
?>