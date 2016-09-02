<?php
include('dbConfig.php');
if(isset($_POST["sumbit"])){
    $fname = $_POST['fullname'];
    $desi = $_POST['desi'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $mob = $_POST['mob'];
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
    $uname = $_POST['uname'];
    $password = $_POST['pword'];
    
    
    $sql="INSERT INTO customer (nic,fullname,designation,companyName,address,email,mobile,tele,username,password) VALUES ('$nic','$fname','$desi','$cname','$address','$email','$mob','$tele','$uname','$password')";
    

if (mysqli_query($db, $sql) === TRUE) {
    
        header("location:index.php");
        echo "<script>";
        echo "alert('Your information sent for approvel! have a good day')";
        echo "</script>";
    } else {

        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
    }

    mysqli_close($db);
    }

    ?>