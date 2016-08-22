<?php
    $serverhost='localhost';
    $username='root';
    $password='';

    $conn = mysqli_connect($serverhost,$username,$password);

    if (!$conn){
        die("connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>

