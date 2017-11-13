<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$TempID = mysqli_real_escape_string($con, $data->TempID);
$TempName = mysqli_real_escape_string($con, $data->TempName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli query to insert the updated data
$query = "UPDATE temperature SET TempName='$TempName',GPIO='$GPIO' WHERE TempID=$TempID";
mysqli_query($con, $query);
echo true;
?>