<?php
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b477c41467c518";
$password = "955eff62";
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