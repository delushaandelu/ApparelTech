<?php
$servername = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "bbff2134fa7f9a";
$password = "68d089ed";
$database = "appareltech";

//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "appareltech";

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


