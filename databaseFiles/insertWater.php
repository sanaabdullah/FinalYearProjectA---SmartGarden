<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from submitting data & storing in new variables.
$WaterName = mysqli_real_escape_string($con, $data->WaterName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);
$Channel = mysqli_real_escape_string($con, $data->Channel);

// mysqli insert query
$query = "INSERT into waterlevel (WaterName,GPIO,Channel) VALUES ('$WaterName','$GPIO','$Channel')";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>