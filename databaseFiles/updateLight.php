<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$LightID = mysqli_real_escape_string($con, $data->LightID);
$LightName = mysqli_real_escape_string($con, $data->LightName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli query to insert the updated data
$query = "UPDATE light SET LightName='$LightName',GPIO='$GPIO' WHERE LightID=$LightID";
mysqli_query($con, $query);
echo true;
?>