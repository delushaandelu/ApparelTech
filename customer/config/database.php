<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$db_name = "apperaltech";
$username = "b477c41467c518";
$password = "955eff62";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>