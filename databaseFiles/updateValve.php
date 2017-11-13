<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$ValveID = mysqli_real_escape_string($con, $data->ValveID);
$ValveName = mysqli_real_escape_string($con, $data->ValveName);
$GPIO = mysqli_real_escape_string($con, $data->GPIO);

// mysqli query to insert the updated data
$query = "UPDATE Valve SET ValveName='$ValveName',GPIO='$GPIO' WHERE ValveID=$ValveID";
mysqli_query($con, $query);
echo true;
?>