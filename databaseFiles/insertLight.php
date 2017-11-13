<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from submitting data & storing in new variables.
$LightName = mysqli_real_escape_string($con, $data->LightName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli insert query
$query = "INSERT into light (LightName,GPIO) VALUES ('$LightName','$GPIO')";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>