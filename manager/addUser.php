<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
</head>

<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["add"])){
    $userid=$_POST['userid'];
    $usern=$_POST['username'];
    $pwd=$_POST['password'];
    //$pwd=md5($pwd);
    $cpwd=$_POST['cpassword'];
    $al=$_POST['acclevel'];

    $sql = "INSERT INTO user(user_id,username,password,accessLevel) VALUES ('$userid','$usern', '$pwd', '$al')";
    
    if($pwd == $cpwd){
        if (mysqli_query($dbcon, $sql) == TRUE){
            echo "<script>";
            echo "sweetAlert('Done...', 'Added successfully!', 'success');";
            echo "</script>";
            header("location:ManageUser-Manage_Stock_Manager.php");
        }
        else{
            echo "<script>";
            echo "alert('ERROR: Check your information again!')";
            echo "</script>";
            header("location:ManageUser-Manage_Stock_Manager.php");
        }
    }
    else{
        echo "<script>";
            echo "alert('ERROR: password doesn't match. re enter!')";
            echo "</script>";
            header("location:ManageUser-Manage_Stock_Manager.php");
    }
    
    mysqli_close($dbcon);
}

?>