<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname ="basephp";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
print_r($conn);
exit;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>