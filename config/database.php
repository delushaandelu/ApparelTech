<?php
$servername = "31.170.160.89";
$username = "a3837866_apperal";
$password = "apperal";
$database = "a3837866_apperal";

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