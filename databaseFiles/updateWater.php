<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$WaterID = mysqli_real_escape_string($con, $data->WaterID);
$WaterName = mysqli_real_escape_string($con, $data->WaterName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);
$Channel = mysqli_real_escape_string($con, $data->Channel);

// mysqli query to insert the updated data
$query = "UPDATE waterlevel SET WaterName='$WaterName',GPIO='$GPIO', Channel='$Channel' WHERE WaterID=$WaterID";
mysqli_query($con, $query);
echo true;
?>