<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angularcode";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// sql to create table
$sql = "CREATE TABLE contact (
'ID' int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
'Name' varchar(50) NOT NULL,
'Email' varchar(50) NOT NULL,
'Subject' varchar(200) NOT NULL,
'Message' varchar(200) NOT NULL,
'Created' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>