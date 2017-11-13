<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from submitting data & storing in new variables.
$FanName = mysqli_real_escape_string($con, $data->FanName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli insert query
$query = "INSERT into Fan (FanName,GPIO) VALUES ('$FanName','$GPIO')";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>