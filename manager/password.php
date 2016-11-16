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
if(isset($_POST["pwd"])){
    $newpwd1=$_POST["Newpwd1"];
    $oldpwd=$_POST["oldpwd"];
    $newpwd2=$_POST["Newpwd2"];
    //query
    
    $sql = "UPDATE user SET password='$newpwd1' WHERE accessLevel=1";
    $sql_1 = "select password from user where accessLevel=1;";
    
    $result = mysqli_query($dbcon, $sql_1);
    $row = mysqli_fetch_assoc($result);
    $old_password = $row["password"];
    if ($old_password == $oldpwd){
        if($newpwd1==$newpwd2){
            if (mysqli_query($dbcon, $sql) === TRUE){
                echo "<script>";
                echo "sweetAlert('Done...', 'Passowrd changed!', 'success');";
                echo "</script>";
                header("location:Settings-Change_password.php");
            }
            else{
                echo "<script>";
                echo "sweetAlert('Oops...', 'Password update failed!', 'error');";
                echo "</script>";
                header("location:Settings-Change_password.php");
            }
        }else{
            echo "<script>";
            echo "sweetAlert('Oops...', 'New passowrd not matching!', 'error');";
            echo "</script>";
            header("location:Settings-Change_password.php");
        }
    }else{
        echo "<script>";
        echo "sweetAlert('Oops...', 'Old password incorrect!', 'error');";
        echo "</script>";
        header("location:Settings-Change_password.php");
    }

    mysqli_close($dbcon);
}
?>