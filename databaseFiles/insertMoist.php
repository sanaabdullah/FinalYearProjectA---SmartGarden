<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from submitting data & storing in new variables.
$MoistName = mysqli_real_escape_string($con, $data->MoistName);
$Channel = mysqli_real_escape_string($con, $data->Channel);

// mysqli insert query
$query = "INSERT into moisture (MoistName,Channel) VALUES ('$MoistName','$Channel')";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>