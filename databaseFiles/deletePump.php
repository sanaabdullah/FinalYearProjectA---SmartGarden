<?php 
require_once 'database_connections.php';
$data = json_decode(file_get_contents("php://input")); 
$query = "DELETE FROM Pump WHERE PumpID=$data->del_id";
mysqli_query($con, $query);
echo true;
?>