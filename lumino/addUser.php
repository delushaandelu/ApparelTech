<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["add"])){
    $usern=$_POST['username'];
    $pwd=$_POST['password'];
    $al=$_POST['acclevel'];
    if($al == 'Manager'){
        $acc = 1;
    }
    else{
        $acc = 2;
    }

    //query
    $sql = "INSERT INTO user(username,password,accessLevel) VALUES ('$usern', '$pwd', '$acc')";

    if (mysqli_query($dbcon, $sql) === TRUE){
        header("location:ManageUser-Manage_Stock_Manager.php");
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
        header("location:ManageUser-Manage_Stock_Manager.php");
    }

    mysqli_close($dbcon);

}

?>