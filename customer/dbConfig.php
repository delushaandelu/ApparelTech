<?php
//DB details
$dbHost = 'ap-cdbr-azure-east-c.cloudapp.net';
$dbUsername = 'bbff2134fa7f9a';
$dbPassword = '68d089ed';
$dbName = 'appareltech';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
} 
?>