<?php 
require_once 'database_connections.php';
$data = json_decode(file_get_contents("php://input")); 
$query = "DELETE FROM ldr WHERE LDRID=$data->del_id";
mysqli_query($con, $query);
echo true;
?>