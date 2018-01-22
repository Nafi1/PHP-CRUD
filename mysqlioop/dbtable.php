<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE table1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
batch VARCHAR(30) NOT NULL,
cgpa VARCHAR(50) NOT NULL,
uid VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table table1 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>