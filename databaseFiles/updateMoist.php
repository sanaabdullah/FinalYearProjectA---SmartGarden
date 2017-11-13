<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$MoistID = mysqli_real_escape_string($con, $data->MoistID);
$MoistName = mysqli_real_escape_string($con, $data->MoistName);
$Channel = mysqli_real_escape_string($con, $data->Channel);

// mysqli query to insert the updated data
$query = "UPDATE moisture SET MoistName='$MoistName',Channel='$Channel' WHERE MoistID=$MoistID";
mysqli_query($con, $query);
echo true;
?>