<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "apperaltech";

// Create connection
$conn = new mysqli($servername, $username, $password, $database) or die ("ERROR: Database");
/**
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 **/
?>