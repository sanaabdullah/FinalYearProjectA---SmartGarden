<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$LDRID = mysqli_real_escape_string($con, $data->LDRID);
$LDRName = mysqli_real_escape_string($con, $data->LDRName);
$Channel = mysqli_real_escape_string($con, $data->Channel);

// mysqli query to insert the updated data
$query = "UPDATE LDR SET LDRName='$LDRName',Channel='$Channel' WHERE LDRID=$LDRID";
mysqli_query($con, $query);
echo true;
?>