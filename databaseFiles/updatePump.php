<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$PumpID = mysqli_real_escape_string($con, $data->PumpID);
$PumpName = mysqli_real_escape_string($con, $data->PumpName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli query to insert the updated data
$query = "UPDATE Pump SET PumpName='$PumpName',GPIO='$GPIO' WHERE PumpID=$PumpID";
mysqli_query($con, $query);
echo true;
?>