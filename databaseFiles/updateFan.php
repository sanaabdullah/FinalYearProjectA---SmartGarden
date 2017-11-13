<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$FanID = mysqli_real_escape_string($con, $data->FanID);
$FanName = mysqli_real_escape_string($con, $data->FanName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli query to insert the updated data
$query = "UPDATE Fan SET FanName='$FanName',GPIO='$GPIO' WHERE FanID=$FanID";
mysqli_query($con, $query);
echo true;
?>