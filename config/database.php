<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "apperaltec";

// Create connection
$conn = new mysqli($servername, $username, $password, $database) or die (mysqli_errno());
/**
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 **/
?>