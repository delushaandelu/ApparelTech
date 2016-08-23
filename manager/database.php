<?php
    $serverhost='ap-cdbr-azure-southeast-b.cloudapp.net';
    $username='b477c41467c518';
    $password='955eff62';

    $conn = mysqli_connect($serverhost,$username,$password);

    if (!$conn){
        die("connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>

